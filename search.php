<?php
include('config/db_connection.php');
$output = '';
if (isset($_POST['search']))
{
	$searchq = $_POST['search'];
	$query = mysqli_query($connect,"SELECT * FROM books WHERE book_name LIkE '%$searchq%' AND user_id = $_SESSION[userid]") or die ('Couldnot find a result!');
	$count = mysqli_num_rows($query);
	if ($count == 0)
	{
		$output = 'There was no such results';
	}
	else
	{
		while ($row = mysqli_fetch_array($query))
		{
			$book_name = $row['book_name'];
			$book_url = $row['book_url'];
			$book_cover = $row['book_cover'];
			$pages_numbers = $row['pages_numbers'];
			$start_date = $row['start_date'];
			$end_date = $row['end_date'];
			$days_to_finish = $row['time_period'];
			$pages_per_day = $row['pages_per_day'];

			$output .= '<div class="col-md-3"><a href=book.php?books='.$book_url.'>'.$book_name.'</a> number of pages:'.$pages_numbers.'</div>';
		}
	}
}
?>
