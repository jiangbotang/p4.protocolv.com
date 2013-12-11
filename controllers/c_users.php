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

		# Pass an error message to the view if the method is called with an error parameter
		if ($error == "error") {
			$this->template->content->loginErrorMessage="wrong email or password.";
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
}