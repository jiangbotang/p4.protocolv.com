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

	// Process sending msg request from user
	public function p_send() {
		// prepare parameters for sending an email
		# build a multi-dimension array of recipients of this email
		$to[] = Array("name" => APP_NAME, "email" => APP_EMAIL);

		# build a single-dimension array of who this email is coming from
		# note it's using the constants we set in the configuration or enviroment file
		$from = Array("name" => APP_NAME, "email" => APP_EMAIL);

		# subject
		$subject = "Protocolv user contact message";

		# You can se the body as just a string of text
		$body = "user name: ".$_POST['name']."; user email: ".$_POST['email']."; message: ".$_POST['msg'];

		# Build multi-dimension arrays of name / email pairs for cc / bcc if you want to
		$cc = "";
		$bcc = "";

		# with evereything set, send the email
		$email =Email::send($to, $from, $subject, $body, false, $cc, $bcc);

		# Setup up the view
		$this->template->content = View::instance('v_contacts_p_send');
		$this->template->title = "Contatcs";
		# set body tag id 'pageN'
		$this->template->pageN = "page5";
		# the contact menu as active menu
		$this->template->menu_cont = "menu_active";
		
		# Render template
		echo $this->template;
	}

}