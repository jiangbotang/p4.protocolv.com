<?php
class services_controller extends base_controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		if ($this->user) {
			echo "user logged in";
		} else {
			echo "user not logged in";
		}
	}
}