<!-- view component: navigation through items from db -->
<?php
	$firstPage = 1;
	$lastPage = $totalPages;
	$prevPage = $currentPage - 1;
	$nextPage = $currentPage + 1;
?>
<div id="item_nav">
	<a href='<?php echo $requestUrl."$firstPage"; ?>' id="nav_first_page_link">&lt&lt First</a>
	<a href='<?php echo $requestUrl."$prevPage"; ?>' id="nav_prev_page_link">&lt Prev</a>
	page <span id="nav_cur_page"><?=$currentPage?></span> of <span id="nav_total_page"><?=$totalPages?></span>
	<a href='<?php echo $requestUrl."$nextPage"; ?>' id="nav_next_page_link">Next &gt</a>
	<a href='<?php echo $requestUrl."$lastPage"; ?>' id="nav_last_page_link">Last &gt&gt</a>
</div>
