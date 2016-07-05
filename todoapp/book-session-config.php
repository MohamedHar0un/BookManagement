<?php
$book = $_GET['books'];
	if (isset($_POST['submit-readed']))
	 {
	 	$query_readed = mysqli_query($connect,"SELECT `page_number`,`pages_per_day` FROM `books` WHERE `book_url` = '$book'");
	 	$readed_pages = $_POST['actual-pages'];
	$readed_result = mysqli_fetch_assoc($query_readed);
	$saved_readed = $readed_result['page_number'];
	$pages_per_day = $readed_result['pages_per_day'];
	$remain = $pages_per_day - $readed_pages;
	if ($remain > 0) {
		$actual_pages_per_day = $pages_per_day + $remain;
	}
	elseif ($remain = 0) {
		$actual_pages_per_day = $remain;
	}
	elseif ($remain < 0) {
		$actual_pages_per_day = -$pages_per_day + $remain;
	}
	 	$total_pages_readed = $readed_pages + $saved_readed;
		$query= mysqli_query($connect,"UPDATE `books` SET  `page_number` ='$total_pages_readed' 
			, `actual_pages_per_day` ='$actual_pages_per_day'  WHERE `book_url` ='$book'" );
		header("location: home.php");
	}

?>
