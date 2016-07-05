<?php include'dheader-questions.php';?>
<?php include'dsidebar.php';
?>
<?php
$question = $_GET['question'];
$query_question = mysqli_query($connect," SELECT * FROM voting_count WHERE `question_id` ='$question'");
$question_fields = mysqli_fetch_array($query_question);
$question_title = $question_fields['question_title'];
$question_body = $question_fields['question_body'];
$question_upvote = $question_fields['vote_up'];
$question_downvote = $question_fields['vote_down'];
$question_posted_by = $question_fields['user_name'];
$post_date = $question_fields['current_date'];
/*calculate votes*/
$query_all = mysqli_query($connect, "SELECT * FROM user_voting WHERE `question_id` ='$question' AND `user_id` = $_SESSION[userid]");
$collection = mysqli_fetch_array($query_all);
$user_id = $collection['user_id'];
$question_id = $collection['question_id'];
$upvote = $collection['vote_up'];
$downvote = $collection['vote_down'];


if (isset($_POST['upvote'])) {
    if ( is_null($upvote) AND  is_null($downvote)) {
        $upquery = mysqli_query($connect,"UPDATE voting_count SET vote_up=vote_up+1 , vote_down=vote_down WHERE `question_id` ='$question'");
        $query= mysqli_query($connect,"INSERT INTO `user_voting`VALUES ($_SESSION[userid],'$question',+1,+0)");
    }
    elseif ($upvote=0 AND $downvote = 1) {
        $upvote = 0;
        $downvote = 0 ;
        $upvote = $upvote+1;
        $upquery = mysqli_query($connect,"UPDATE voting_count SET vote_up=vote_up+1 , vote_down=vote_down WHERE `question_id` ='$question'");
        $query= mysqli_query($connect,"UPDATE `user_voting`SET userid = $_SESSION[userid] , question_id = $question, vote_up =$upvote ,vote_down=$downvote");
    }
    elseif ( $upvote = 1 AND  $downvote = 0) {
        $upquery = mysqli_query($connect,"UPDATE voting_count SET vote_up=vote_up , vote_down=vote_down WHERE `question_id` ='$question'");
        echo "You already liked this post";
    }
    header("location: question.php?question=".$question);
}
if (isset($_POST['downvote'])) {
    if ( is_null($upvote) AND  is_null($downvote)) 
    {
        $downquery = mysqli_query($connect,"UPDATE voting_count SET vote_up=vote_up , vote_down=vote_down+1 WHERE `question_id` ='$question'");
        $query= mysqli_query($connect,"INSERT INTO `user_voting`VALUES ($_SESSION[userid],'$question',+0,+1)");
    }
    elseif ($upvote = 0 AND $downvote = 1) {
        $downquery = mysqli_query($connect,"UPDATE voting_count SET vote_up=vote_up , vote_down=vote_down WHERE `question_id` ='$question'");
               echo "You already disliked this post";

    }
    elseif ( $upvote = 1 AND  $downvote = 0) {
        $downquery = mysqli_query($connect,"UPDATE voting_count SET vote_up=vote_up , vote_down=vote_down+1  WHERE `question_id` ='$question'");
        $query= mysqli_query($connect,"UPDATE `user_voting` SET vote_up=vote_up+0 , vote_down=vote_down+1 ");
    }
    header("location: question.php?question=".$question);
}

?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <?php echo $question_title;?> <small><?php echo "<h5>Posted by:"." ". $question_posted_by." in: ". $post_date."</h5>";?></small>
                        </h1>
                    </div>
                    <div class="col-lg-2">
                        <form method="post" action="">
                        <button type="submit" class="btn btn-success" name="upvote">
                            <i class="fa fa-thumbs-up fa-5" style="font-size:23px;"></i><span class="badge">
                            <?php echo $question_upvote;?></span>
                        </button>
                        <br><br>
                        <button type="submit" class="btn btn-danger" name="downvote">
                            <i class="fa fa-thumbs-down fa-5" style="font-size:23px;"></i><span class="badge">
                            <?php echo $question_downvote;?></span>
                        </button></div>
                    </form>
                    <div class="col-lg-10">
                        <h4>
                            <?php echo $question_body;?>
                        </h4>
                    </div>
                </div>
                <!-- /.row -->
                <hr>
                <div class="clear"></div>
                <div class="col-lg-12">
                    <?php
                    $question = $_GET['question'];
                    $query_comments  = mysqli_query($connect, "SELECT * FROM comments WHERE question_id = '$question'");
                    $question_data = mysqli_fetch_array($query_comments); 
                    $question_id = $question_data['question_id'];
                
                    
    $query_comment= mysqli_query($connect,"SELECT * FROM comments WHERE question_id = $question_id");
error_reporting(E_ERROR | E_PARSE);
    while($run = mysqli_fetch_array($query_comment))
    {
        $comment_body = $run['comment_body'];
        $comment_poster = $run['comment_poster'];
        $comment_upvotes = $run['comment_upvotes'];
        $comment_downvotes = $run['comment_downvotes'];
        $comment_date = $run['current_date'];
        if (!empty($comment_body)) {
            
        
        
        echo "<div class='col-md-2'>"."</div>"."<div class='col-md-1'></div><div class='col-md-9'><h3>";
            echo $comment_body."</h3><br> <h5> Posted by: ".$comment_poster." in:".$comment_date."</h5><hr></div>";
}
    }
    ?>
                </div>
            
            <!-- /.container-fluid -->
           

                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Post a reply ...</h3>
                            </div>

                                        <?php echo '<div class="pull-right">Today is: '. date("Y/m/d")."</div>";?>
                                  <div class="panel panel-default">
                              
                                    <div class="panel-body">

                                <form method="post" enctype="multipart/form-data">
                                    <textarea type="text" name="comment_body" class="form-control" required></textarea><br>
                                    <?php
                                        $current_date =  date("Y/m/d");
                                        if (isset($_POST['comment_body']))
                                        {
                                            $reply_body = $_POST['comment_body'];
                                            $check = mysqli_query($connect,"SELECT * FROM `comments` WHERE comment_body = $comment_body");
                                            $checkrows=mysqli_num_rows($check);
                                            if($checkrows>1){echo "you posted this reply before";}  
                                            else{ 
                                            $comment_body = $_POST['comment_body'];
                                            ob_start();
                                            $query= mysqli_query($connect,"INSERT INTO `comments`VALUES ('',$_SESSION[userid],'$question','$_SESSION[firstname]', '$comment_body', '','','$current_date')");
                                            header("location: question.php?question=".$question);
                                            exit;}
                                               
                                        }
                                        ?>
                                <div class="input-group">
                                            <div class="input-group-btn">
                                    <input type="submit" value="Reply" name="reply" class="btn btn-default upload-button form-control">
                                </div>
                                </form>
                            </div>

                                      
                            </div>
                        </div>
                </div>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>
<?php include_once ('footer.php');?>
</html>
