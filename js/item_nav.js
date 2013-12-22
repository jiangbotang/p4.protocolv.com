// Get the current and total page number
var currentPage = $('#nav_cur_page').html();
var totalPage = $('#nav_total_page').html();

// On first page, make link to first page and previous page unlickable
if(currentPage == "1") {
	$('#nav_first_page_link').css('pointer-events', 'none');
	$('#nav_prev_page_link').css('pointer-events', 'none');
}

// On last page, make link to last page and next page unlickable
if(currentPage == parseInt(totalPage)) {
	$('#nav_last_page_link').css('pointer-events', 'none');
	$('#nav_next_page_link').css('pointer-events', 'none');
}