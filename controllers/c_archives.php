<?php
class archives_controller extends base_controller {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * Display UI
	 */
	public function index($cat = null) {
		// check user login status
		$this->loginCheck();

		// if user is logged in

		# Setup up the view.
		$this->template->content = View::instance('v_archives_index');
		$this->template->title = "Login";
		# set body tag id 'pageN'
		$this->template->pageN = "page5";

		echo $this->template;
	}

	public function addNewPrimer() {
		// check user login status
		$this->loginCheck();

		// if user is logged in
		
	}

}