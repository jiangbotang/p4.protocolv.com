<?php
class contacts_controller extends base_controller {
	
	public function __construct() {
		parent::__construct();
	}

	public function index() {
				# Setup up the view
		$this->template->content = View::instance('v_contacts_index');
		$this->template->title = "Contatcs";
		# set body tag id 'pageN'
		$this->template->pageN = "page5";
		# the contact menu as active menu
		$this->template->menu_cont = "menu_active";

		#Render template
		echo $this->template;	
	}

}