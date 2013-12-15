<?php
class primers_controller extends base_controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		// check user login status
		$this->loginCheck();

		// if user is logged in
		# Setup up the view.
		$this->template->content = View::instance('v_primers_index');
		$this->template->title = "primers";
		# set body tag id 'pageN'
		$this->template->pageN = "page5";

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
		# Setup up the view.
		$this->template->content = View::instance('v_primers_add');
		$this->template->title = "Add a new primer";
		# set body tag id 'pageN'
		$this->template->pageN = "page5";

		echo $this->template;
	}

}