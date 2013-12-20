<?php
class users_controller extends base_controller {
	
	public function __construct() {
		parent::__construct();
	}

	public function login($error = null) {
		# Setup up the view
		$this->template->content = View::instance('v_users_login');
		$this->template->title = "Login";
		# set body tag id 'pageN'
		$this->template->pageN = "page5";
		# the login menu as active menu
		$this->template->menu_login = "menu_active";

		# Pass an error message to the view if the method is called with an error parameter
		if ($error == "loginError") {
			$this->template->content->loginErrorMessage="wrong email or password.";
		} elseif ($error == "signupError") {
			$this->template->content->signupErrorMessage="The email address you used has already been used by an user.";
		}

		# include JQuery input validation plugin and validation js file
		$client_files_body = Array(
			'http://jquery.bassistance.de/validate/jquery.validate.js',
			'http://jquery.bassistance.de/validate/additional-methods.js',
			'/js/users_login_val.js'
			);
		# Use load_client_files to generate the links from the above array
		$this->template->client_files_body = Utils::load_client_files($client_files_body);  

		#Render template
		echo $this->template;	

	}

	/*
	 * Process the sign up request
	 */
	public function p_signup() {

		#check if signup eamil already exits in database
		$_POST = DB::instance(DB_NAME)->sanitize($_POST);
		$q = "SELECT user_id
				FROM users
				WHERE email='".$_POST['email']."'
				";
		$user_id = DB::instance(DB_NAME)->select_field($q);

		# email has not been used, allow signup
		if(!$user_id) {
			# More data we want to store with the user
			$_POST['created'] = Time::now();
			$_POST['modified'] = Time::now();

			# Encrypt the password
			$_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);

			# Create an encrypted token via their email address and a random string
			$_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());

			#Insert this user into the database
			$user_id = DB::instance(DB_NAME)->insert('users', $_POST);

			# Confirm the sign up and provide a link to go back to the log in page
			$this->template->content = View::instance('v_users_p_signup');
			$this->template->title = "Sign Up Completed";
			
			# set body tag id 'pageN'
			$this->template->pageN = "page5";
			
			echo $this->template;

		# email has been signed up, redirect to signup page with error message
		} else {
			Router::redirect("/users/login/signupError");
		}
	}

	/*
	 * Process a log in request
	 */
	public function p_login() {
		#Sanitize the user entered data to prevent any funny-business
			$_POST = DB::instance(DB_NAME)->sanitize($_POST);

		#Hash submitted password so we can compare it against one in the db
			$_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);

		#Search the db for this email and password
		#Retrieve the token if it's available
			$q = "SELECT token
					FROM users
					WhERE email='".$_POST['email']."'
					AND password = '".$_POST['password']."'
				 ";

			$token = DB::instance(DB_NAME)->select_field($q);

		#If we didn't find a matching token in the database, it means login failed
			if(!$token) {

				#Send them back to the login page with error parameter
				Router::redirect("/users/login/loginError");

		#But if we did, login succeed!
			} else {

				/*
				Store this token in a cookie using setcookie()
				Important Note: *Nothing* else can echo to the page before setcookie
				is called.
				Not even one single white space.
				param 1 = name of the cookie
				param 2 = the value of the cookie
				param 3 = when to expire
				param 4 = the path of the cookie (a single forward slash sets it for 
				the entire domain)				
				*/
				setcookie("token", $token, strtotime('+1 year'), '/');

				# Send them to the main page - or whatever you want them to go
				Router::redirect("/");
			}
	}

	public function logout() {
	# Generate and save a new token for next login
	$new_token = sha1(TOKEN_SALT.$this->user->email.Utils::generate_random_string());

	# Create the data array we'll use with the update method
	# In this case, we're only updating one field, so our array only has one entry
	$data = Array("token" => $new_token);

	# Do the update
	DB::instance(DB_NAME)->update("users", $data, "WHERE token = '".$this->user->token."'");

	# Delete their token cookie by settting it to a date in the past - effectively loggin them out
	# James comment: not secure? possible to modify the cookie?
	setcookie("token", "", strtotime('-1 year'), '/');

	# Send them back to the main index
	Router::redirect('/');
	}



}