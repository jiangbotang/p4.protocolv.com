<?php
class primers_controller extends base_controller {
	public function __construct() {
		parent::__construct();
	}


	public function index($page = 1) {
		// check user login status
		$this->loginCheck();

		// if user is logged in
		# Setup up the view.
		# The View has a modular strucutre, e.g. template contains content, content
		# contains cat_con and primers_index_main...
		$this->template->content = View::instance('v_content');
		$this->template->content->cat_con = View::instance('v_cat_con');
		$this->template->content->cat_con->cat = View::instance('v_cat');
		$this->template->content->cat_con->con = View::instance('v_con');
		$this->template->content->primers_index_main = View::instance('v_primers_index_main');
		$this->template->content->primers_index_main->item_nav = View::instance('v_item_nav');

		$this->template->content->primers_index_main->item_nav->currentPage = $page;

		$this->template->title = "primers";
		# set body tag id 'pageN'
		$this->template->pageN = "page5";
		# the archives menu as active menu
		$this->template->menu_arch = "menu_active";

		# Build the query
		$lower_b = ($page - 1) * 5 + 1;
		$upper_b = $page * 5;

		$q = 'SELECT
				primers.primer_id,
				primers.name,
				primers.created,
				primers.modified,
				primers.user_id,
				primers.purpose,
				primers.restriction_enzyme,
				primers.sequence,
				primers.additional_info,
				users.first_name,
				users.last_name
			FROM primers
			INNER JOIN users
				ON primers.user_id = users.user_id
			WHERE primers.primer_id BETWEEN '."$lower_b".' AND '."$upper_b";

		# Run the query
		$primers = DB::instance(DB_NAME)->select_rows($q);

		
		# Pass the data to the View
		$this->template->content->primers_index_main->primers = $primers;

		# Create an array of 1 or many client files to be included in the head
    	$client_files_body = Array(
        '/js/primers_index.js'
        );

        # Use load_client_files to generate the links from the above array
    	$this->template->client_files_body = Utils::load_client_files($client_files_body);

		echo $this->template;
	}

	public function add() {
		// check user login status
		$this->loginCheck();

		// if user is logged in
		# Setup up the modular view.
		$this->template->content = View::instance('v_content');
		$this->template->content->cat_con = View::instance('v_cat_con');
		$this->template->content->cat_con->cat = View::instance('v_cat');
		$this->template->content->cat_con->con = View::instance('v_con');
		$this->template->content->primers_add_main = View::instance('v_primers_add_main');
		$this->template->title = "Add a new primer";
		# set body tag id 'pageN'
		$this->template->pageN = "page5";
		# the archives menu as active menu
		$this->template->menu_arch = "menu_active";

		# Create an array of 1 or many client files to be included in the head
    	$client_files_body = Array(
        '/js/primers_add.js'
        );

        # Use load_client_files to generate the links from the above array
    	$this->template->client_files_body = Utils::load_client_files($client_files_body);

		echo $this->template;
	}

	public function p_add() {

		// Set up the data
		$_POST['user_id'] = $this->user->user_id;
		$_POST['created'] = Time::now();
		$_POST['modified'] = Time::now();

		// Insert the primer
		DB::instance(DB_NAME)->insert('primers', $_POST);

		// Send a message back
		echo "A new primer was added.";

	}

}