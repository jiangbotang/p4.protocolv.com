<?php
class archives_controller extends base_controller {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * Display items from database
	 */
	public function index($cat = null) {
		// user logged in
		if ($this->user) {

			# Setup up the view.
			# Note: I want the content of the View to have 3 parts,
			# part 1: where user choose the categories of items to display, e.g. primers, plasmids etc,
			# part 2: specific to choice from part 1, control what fields to display
			# part 3: item display area
			$content_p1 = View::instance('v_archives_index_categories');
			$content_p2 = View::instance('v_archives_index_controlers');
			$content_p3 = View::instance('v_archives_index_display');

			$this->template->content = $content_p1.$content_p2.$content_p3;
			$this->template->title = "Login";
			# set body tag id 'pageN'
			$this->template->pageN = "page5";

			echo $this->template;
		} else {
			Router::redirect("/users/login");
		}
	}
}