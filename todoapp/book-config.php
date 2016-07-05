<?php 
	if (isset($_POST['submit-calculations'])) {
	$number_of_pages= $_POST['pages-numbers'];
	$time_period= $_POST['time-period'];
	 	$page_per_day= $number_of_pages/$time_period;
		$query= mysqli_query($connect,"UPDATE books SET pages_numbers='$number_of_pages',time_period='$time_period',pages_per_day='$page_per_day' WHERE book_url ='$book'" );
	}
	else{
		mysqli_close($connect);
	}

?>