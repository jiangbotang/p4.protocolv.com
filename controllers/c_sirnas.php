<?php
class sirnas_controller extends base_controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		// check user login status
		$this->loginCheck();

		// if user is logged in
		# Setup up the view.
		$this->template->content = View::instance('v_sirnas_index');
		$this->template->title = "siRNA";
		# set body tag id 'pageN'
		$this->template->pageN = "page5";
		# the archives menu as active menu
		$this->template->menu_arch = "menu_active";

		# Build the query
		$q = 'SELECT
				sirnas.sirna_id,
				sirnas.name,
				sirnas.created,
				sirnas.modified,
				sirnas.user_id,
				sirnas.target_gene,
				sirnas.target_region,
				sirnas.target_seq,
				sirnas.sirna_seq,
				sirnas.additional_info,
				users.first_name,
				users.last_name
			FROM sirnas
			INNER JOIN users
				ON sirnas.user_id = users.user_id
			LIMIT 50';

		# Run the query
		$sirnas = DB::instance(DB_NAME)->select_rows($q);

		# Pass the data to the View
		$this->template->content->sirnas = $sirnas;

		# Create an array of 1 or many client files to be included in the head
    	$client_files_body = Array(
        '/js/sirnas_index.js'
        );

        # Use load_client_files to generate the links from the above array
    	$this->template->client_files_body = Utils::load_client_files($client_files_body);

		echo $this->template;
	}

	public function add() {
		// check user login status
		$this->loginCheck();

		// if user is logged in
		# Setup up the view.
		$this->template->content = View::instance('v_sirnas_add');
		$this->template->title = "Add a new siRNA";
		# set body tag id 'pageN'
		$this->template->pageN = "page5";
		# the archives menu as active menu
		$this->template->menu_arch = "menu_active";

		# Create an array of 1 or many client files to be included in the head
    	$client_files_body = Array(
        '/js/sirnas_add.js'
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

		// Insert the siRNA
		DB::instance(DB_NAME)->insert('sirnas', $_POST);

		// Send a message back
		echo "A new siRNA was added.";

	}

}