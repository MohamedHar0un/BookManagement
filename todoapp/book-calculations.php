<?php
$book = $_GET['books'];
	if (isset($_POST['submit-readed']))
	 {
	 	$readed_pages = $_POST['actual-pages'];
	 	$query_readed = mysqli_query($connect,"SELECT `page_number`,`pages_per_day` FROM `books` WHERE `book_url` = '$book'");
	$readed_result = mysqli_fetch_assoc($query_readed);
	$saved_readed = $readed_result['page_number'];
	 	$total_pages_readed = $readed_pages + $saved_readed;
		$query= mysqli_query($connect,"UPDATE `books` SET  `page_number` ='$total_pages_readed' WHERE `book_url` ='$book'" );
		header("location: home.php");
	}

?>
