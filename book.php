<?php 
include'head.php';
?>
<?php
$book = $_GET['books'];
if (isset($_POST['submit-readed']))
	//number_of_page  home .... page_number book
{
	$readed_pages = $_POST['readed_pages'];
	$query_pages_numbers = mysqli_query($connect," SELECT * FROM books WHERE `book_url` ='$book'");
	$num_of_readed = mysqli_fetch_array($query_pages_numbers);
	$number_of_pages = $num_of_readed['pages_numbers'];
	$result_of_pages = $num_of_readed['page_number'];
	$update_readed_pages = $result_of_pages + $readed_pages;
	if($update_readed_pages>$number_of_pages){echo 'Wrong Entry ... you finished reading '.$result_of_pages;
}
	else{
	$query= mysqli_query($connect," UPDATE `books` SET page_number = $update_readed_pages WHERE `book_url` ='$book'");
	header("Location: home.php");
die();}
}
?>
<body>
	<div class="col-md-6">
		<form class="form" method="POST" action="">
			you did read <input type="number" placeholder="you need to read  pages today" id="actual-pages" name="readed_pages">
			Please <input type="submit" value="Submit and Exit" name="submit-readed" class="btn btn-default submit-button">
		</form>
	</div>
	<div class="col-md-3">
		<div class="pull-right">
		You are in Page:<?php
		$query_pages_numbers_reminder = mysqli_query($connect," SELECT * FROM books WHERE `book_url` ='$book'");
	$num_of_readed_reminder = mysqli_fetch_array($query_pages_numbers_reminder);
	$result_of_pages_reminder = $num_of_readed_reminder['page_number'];
		 echo " ".$result_of_pages_reminder; ?>
		 </div>
	</div>
	
	<div>
		<embed src="<?php echo $book;?>" width="100%" height="100%" style="
	    height: 600px;">
    </div>
<?php include'footer.php';?>

