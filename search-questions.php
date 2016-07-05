<?php
include('config/db_connection.php');
$output = '';
if (isset($_POST['search-questions']))
{
	$searchq = $_POST['search-questions'];
	$query = mysqli_query($connect,"SELECT * FROM voting_count WHERE question_title LIkE '%$searchq%'") or die ('Couldnot find a result!');
	$count = mysqli_num_rows($query);
	if ($count == 0)
	{
		$output = 'There was no such results';
	}
	else
	{
		while ($row = mysqli_fetch_array($query))
		{
			$question_name = $row['question_title'];
			$question_id = $row['question_id'];
			$user_name = $row['user_name'];
			$votes_up = $row['vote_up'];
			$votes_down = $row['vote_down'];
			$current_date = $row['current_date'];
			$output .= '<div class="col-md-3"><a href=question.php?question='.$question_id.'>'.$question_name.'</a><br> Published by:'.$user_name.'<br> Up votes:'.$votes_up.'Down votes:'.$votes_down.'</div>';
		}
	}
}
?>
