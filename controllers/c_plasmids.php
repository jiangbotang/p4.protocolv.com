<?php
class plasmids_controller extends base_controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		// check user login status
		$this->loginCheck();

		// if user is logged in
		# Setup up the view.
		$this->template->content = View::instance('v_plasmids_index');
		$this->template->title = "plasmids";
		# set body tag id 'pageN'
		$this->template->pageN = "page5";
		# the archives menu as active menu
		$this->template->menu_arch = "menu_active";

		# Build the query
		$q = 'SELECT
				plasmids.plasmid_id,
				plasmids.name,
				plasmids.created,
				plasmids.modified,
				plasmids.user_id,
				plasmids.purpose,
				plasmids.cloning_sites,
				plasmids.clone_num,
				plasmids.backbone,
				plasmids.insertion,
				plasmids.mammalian_selec,
				plasmids.bacterial_selec,
				plasmids.source,
				plasmids.additional_info,
				users.first_name,
				users.last_name
			FROM plasmids
			INNER JOIN users
				ON plasmids.user_id = users.user_id
			LIMIT 50';

		# Run the query
		$plasmids = DB::instance(DB_NAME)->select_rows($q);

		# Pass the data to the View
		$this->template->content->plasmids = $plasmids;

		echo $this->template;
	}

	public function add() {
		// check user login status
		$this->loginCheck();

		// if user is logged in
		# Setup up the view.
		$this->template->content = View::instance('v_plasmids_add');
		$this->template->title = "Add a new plasmid";
		# set body tag id 'pageN'
		$this->template->pageN = "page5";
		# the archives menu as active menu
		$this->template->menu_arch = "menu_active";

		# Create an array of 1 or many client files to be included in the head
    	$client_files_body = Array(
        '/js/plasmids_add.js'
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
		DB::instance(DB_NAME)->insert('plasmids', $_POST);

		// Send a message back
		echo "A new plasmid was added.";

	}

}