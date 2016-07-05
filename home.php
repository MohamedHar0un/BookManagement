
<?php include'dheader.php';?>
<?php include'dsidebar.php';?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Manage your books</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Upload your book</h3>
                            </div>

										<?php echo '<div class="pull-right">Today is: '. date("Y-m-d")."</div>";?>
							      <div class="panel panel-default">
							  
							        <div class="panel-body">
							              <p>Please upload a  <code>PDF book to read</code></p>

								<form method="post" enctype="multipart/form-data">
									Start Date: <input type="date" name="start_date" class="form-control" required><br>
									End Date: <input type="date" name="end_date" class="form-control" required><br>
									Number of pages: <input type="number" name="number_of_pages" min="1" required><br><br>
									 <div class="input-group">
							                <div class="input-group-btn">
									 <input type="file" name="book" class="btn btn-default book-upload form-control" required>
									<input type="submit" value="upload" class="btn btn-default upload-button form-control"><br>
							    </div>
							</div>
									<?php
									error_reporting(E_ERROR | E_PARSE);
										$current_date =  date("Y-m-d");
										if (isset($_FILES['book']))
										{
											$name = $_FILES['book']['name'];
											$check = mysqli_query($connect,"SELECT * FROM `books` WHERE book_name = $name");
											$checkrows=mysqli_num_rows($check);
							   				if($checkrows>0){echo "book exists";}  
											else{ 
											$start_date = $_POST['start_date'];
											$start = new DateTime($_POST['start_date']);
											$end_date = $_POST['end_date'];
											$end = new DateTime($_POST['end_date']);
											$number_of_pages = $_POST['number_of_pages'];

											$time_to_finish =  date_diff($start ,$end)->format('%a');
											$pages_per_day = $number_of_pages/$time_to_finish;
											echo $time_to_finish;
											$type = explode('.', $name);
											$type = end($type);
											$random_name = rand();
											$tmp = $_FILES['book']['tmp_name'];
											//echo $name .'</br>'.$type.'</br>'.$size. '</br>';
							        ob_start();
											if ( $type != 'pdf' && $type != 'PDF')
											{
												$message = "<code><strong><center>Please upload a pdf file</center></strong></code>"."</br>";
											}
												else
												{ 
													if ($current_date > $start_date OR $current_date > $end_date) {
														$message = "<code><strong><center>wrong date <br> start date or end date can't be before: ".$current_date."</center></strong></code>"."</br>";
													}
													elseif ($start_date > $end_date ) {
														$message = "<code><strong><center>wrong date <br> end date can't be before start date: ".$start_date."</center></strong></code>"."</br>";
													}
													else{
											move_uploaded_file($tmp, 'books/'.$random_name.'.'.$type);
											$query= mysqli_query($connect,"INSERT INTO `books`VALUES ('', '$name', '', 'books/$random_name.$type', '$_SESSION[userid]','$start_date','$end_date','$readed_pages', '$number_of_pages','$time_to_finish','$pages_per_day','$current_date')");
											header("location: home.php");
											exit;}}
												echo $message;
										}}
										?>

								</form>
							</div>

                                      
                            </div>
                        </div>
                    </div>
                </div>
            <!-- /.container-fluid -->
            <div class="row">


	<?php
	$query= mysqli_query($connect,"SELECT * FROM books WHERE user_id = $_SESSION[userid]");
	while($run = mysqli_fetch_array($query))
	{
		$book_id = $run['book_id'];
		$book_name = $run['book_name'];
		$book_url = $run['book_url'];
    	$userid = $run['user_id'];
    	$book_pages_numbers = $run['pages_numbers'];
    	$readed_pages = $run['page_number'];
    	$time_period =  $run['time_period'];
    if ($time_period<=0){$time_period = 1;}
    $pages_per_day = ($run['pages_numbers'] - $run['page_number']) / $time_period;
    if ($book_pages_numbers > $readed_pages && $readed_pages != 0) {
    	$message_finish = "<h5 class='processing'>Processing</h5>";
    }
    elseif ($readed_pages == "0") {
    	$message_finish =  "<h5 class='start_reading'>Start reading</h5>";
    }
    else
    {
    	$message_finish =  "<h5 class='success'>Finished</h5>";
    }
    $progress_percentage = $readed_pages/$book_pages_numbers*100;
		echo "<div class='col-md-3'><div class='progress'>
                    <div class='progress-bar' role='progressbar' aria-valuenow=".$progress_percentage." aria-valuemin='0' aria-valuemax='100' style='width: ".$progress_percentage."%'><span class='sr-only'>60% Complete</span>
                    </div>
                </div><a href=book.php?books=".$book_url.">"; // book.php
			echo $book_name."</a>"."<br> ".$readed_pages."/".$book_pages_numbers."<br>".$progress_percentage."%"."<br>"."estimated time:".$run['time_period']." days<br>".$pages_per_day." pages/day to finish in time".$message_finish."</div>";

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
