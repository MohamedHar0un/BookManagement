<?php include'dheader-questions.php';?>
<?php include'dsidebar.php';?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Ask Questions
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-question"></i> Post your question
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Post a question ...</h3>
                            </div>

										<?php echo '<div class="pull-right">Today is: '. date("Y/m/d")."</div>";?>
							      <div class="panel panel-default">
							  
							        <div class="panel-body">

								<form method="post" enctype="multipart/form-data">
									Question title: <input type="text" name="question_title" class="form-control" required>
									Question body: <textarea type="text" name="question_body" class="form-control" required></textarea><br>
									<?php
										$current_date =  date("Y/m/d");
										if (isset($_POST['ask']))
										{
											$question_title = $_POST['question_title'];
											$check = mysqli_query($connect,"SELECT * FROM `voting_count` WHERE question_title = $question_title");
											$checkrows=mysqli_num_rows($check);
							   				if($checkrows>0){echo "you posted this question before";}  
											else{ 
											$question_body = $_POST['question_body'];
							        ob_start();
											$query= mysqli_query($connect,"INSERT INTO `voting_count`VALUES ('','$_SESSION[userid]','$_SESSION[firstname]', '$question_title', '$question_body', '','','$current_date')");
											header("location: forum-logged.php");
											exit;}
												echo $message;
										}
										?>
							    <div class="input-group">
							                <div class="input-group-btn">
									<input type="submit" value="ASK" name="ask" class="btn btn-default upload-button form-control">
							    </div>
								</form>
							</div>

                                      
                            </div>
                        </div>
                    </div>
                </div>
            <!-- /.container-fluid -->
            <div class="container">


	<?php
	$query= mysqli_query($connect,"SELECT * FROM voting_count WHERE user_id = $_SESSION[userid]");
	while($run = mysqli_fetch_array($query))
	{
		$question_id = $run['question_id'];
		$question_title = $run['question_title'];
    	$userid = $run['user_id'];
    	$posted_by = $run['user_name'];
    	$post_date = $run['current_date'];
    	$up_votes = $run['vote_up'];
    	$down_votes = $run['vote_down'];
		echo "<div class='col-md-3'><a href=question.php?question=".$question_id.">";
			echo $question_title."</a>"."<br> Posted by: ".$posted_by."<br>Posted in:".$post_date."<br> Up votes: ".$up_votes." Down votes: ".$down_votes."</div>";

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
