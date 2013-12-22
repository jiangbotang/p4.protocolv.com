<?php
class primers_controller extends base_controller {
	public $cur_page = 1;
	public $total_pages;
	public $item_per_page;

	public function __construct() {
		parent::__construct();
	}

	/*
	 * $page : the number of page been requested
	 * $itemPerPage : number of items to be displayed
	 */
	public function index($page = 1, $itemPerPage=5) {
		Router::redirect("/users/login");
		// // check user login status
		// $this->loginCheck();

		// # get item per page from method argument		
		// $this->item_per_page = $itemPerPage;
		// # get total number of pages
		// $this->total_pages = $this->cal_total_pages();

		// // if requested page number is out of boundary, make page number 1
		// if ($page < 1 || $page > $this->total_pages) {
		// 	$page = 1;
		// }

		// // default item per page if out confinement (1-25)
		// if ($itemPerPage > 0 && $itemPerPage < 26) {
		// 	$this->item_per_page = $itemPerPage;
		// } else {
		// 	$this->item_per_page = 5;
		// }

		// # set the target page to current page
		// $this->cur_page = $page;

		// # Setup up the view.
		// # The View has a modular strucutre, e.g. template contains content, content
		// # contains cat_con and primers_index_main...
		// $this->template->content = View::instance('v_content');
		// $this->template->content->cat_con = View::instance('v_cat_con');
		// $this->template->content->cat_con->cat = View::instance('v_cat');
		// $this->template->content->cat_con->con = View::instance('v_con');
		// $this->template->content->primers_index_main = View::instance('v_primers_index_main');
		// # set up view for navigate through pages of items
		// $this->template->content->primers_index_main->item_nav = View::instance('v_item_nav');

		// # pass the new current page and total page number to the view
		// $this->template->content->primers_index_main->item_nav->currentPage = $this->cur_page;
		// $this->template->content->primers_index_main->item_nav->totalPages = $this->total_pages;
		// $this->template->content->primers_index_main->item_nav->requestUrl = "/primers/index/";

		// $this->template->title = "primers";
		// # set body tag id 'pageN'
		// $this->template->pageN = "page5";
		// # the archives menu as active menu
		// $this->template->menu_arch = "menu_active";

		// # Build the query
		// $lower_b = ($page - 1) * $this->item_per_page + 1;
		// $upper_b = $page * $this->item_per_page;

		// # query for selected items
		// $q = 'SELECT
		// 		primers.primer_id,
		// 		primers.name,
		// 		primers.created,
		// 		primers.modified,
		// 		primers.user_id,
		// 		primers.purpose,
		// 		primers.restriction_enzyme,
		// 		primers.sequence,
		// 		primers.additional_info,
		// 		users.first_name,
		// 		users.last_name
		// 	FROM primers
		// 	INNER JOIN users
		// 		ON primers.user_id = users.user_id
		// 	WHERE primers.primer_id BETWEEN '."$lower_b".' AND '."$upper_b";

		// # Run the query
		// $primers = DB::instance(DB_NAME)->select_rows($q);
		
		// # Pass the data to the View
		// $this->template->content->primers_index_main->primers = $primers;

		// # Create an array of 1 or many client files to be included in the head
  //   	$client_files_body = Array(
  //       '/js/item_nav.js'
  //       );

  //       # Use load_client_files to generate the links from the above array
  //   	$this->template->client_files_body = Utils::load_client_files($client_files_body);


		// // echo $this->template->content->primers_index_main;
		// echo $this->template;
		
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

	public function cal_total_pages() {
		# query to get number of rows in table
		$q = 'SELECT
				COUNT(*)
			FROM primers';

		# run the query
		$results = DB::instance(DB_NAME)->query($q);

		$totalRows = mysqli_fetch_row($results)[0];
		$totalPages = ceil($totalRows / $this->item_per_page);

		return $totalPages;
	}

}