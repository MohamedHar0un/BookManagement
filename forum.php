<?php include'dheader-questions.php';?>
<?php include'dsidebar.php';?>

        <div id="page-wrapper">

            <div class="container-fluid">
            <!-- /.container-fluid -->
            <div class="container">


	<?php
	$query= mysqli_query($connect,"SELECT * FROM voting_count");
	while($run = mysqli_fetch_array($query))
	{
		$question_id = $run['question_id'];
		$question_title = $run['question_title'];
    	$userid = $run['user_id'];
    	$posted_by = $run['user_name'];
    	$post_date = $run['current_date'];
    	$up_votes = $run['vote_up'];
    	$down_votes = $run['vote_down'];
		echo "<div class='col-md-12'><a href=question.php?question=".$question_id."><h1>";
			echo $question_title."</h1></a>"."<br> Posted by: ".$posted_by."<br>Posted in:".$post_date."<br> Up votes: ".$up_votes." Down votes: ".$down_votes."<hr></div>";

	}
	?>
</div>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>
<?php include_once ('footer.php');?>
</html>
