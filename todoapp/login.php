<?php include'head.php';?>
<?php 
if (isset($_POST['submit'])) {
 
$_SESSION["username"] = $_POST['username'];
$password = md5($_POST['password']);
$query= mysqli_query($connect,"SELECT * FROM `users` WHERE `username`='$_POST[username]'" );
$result = mysqli_fetch_assoc($query);
if ($_POST['username'] == $result['username']) {
	if ($password == $result['password'] ) {
		$_SESSION["firstname"] = $result['firstname'];
    $_SESSION["userid"] = $result['user_id'];
		header('location: home.php');
	}
elseif (empty($_POST['username'])) {
   echo "username is empty";
 } 
 else
{
  echo "there is no such user";
}
}
}
?>
</div>
<body class="sign-in-up" id="to-top">
 <!-- Sign In/Sign Up section -->
    <section class="sign-in-up-section">

      <div class="container">

        <div class="row">

          <div class="col-md-12">

            <!-- Logo -->
            <figure class="text-center">
              <a href="index">
                <img class="img-logo" src="images/logo.png" alt="">
              </a>
            </figure> <!-- /.text-center -->
            
          </div> <!-- /.col-md-12 -->

        </div> <!-- /.row -->
        <section class="sign-in-up-content">

          <div class="row">

            <div class="col-md-12">
              <h4 class="text-center">Sign In to your account</h4>

              <form class="form" method="POST" action="">
                
                <!-- Input 1 -->
                <div class="form-group">
                  <input class="form-control" name="username" placeholder="Enter your email address" id="exampleInputEmail2">
                </div> <!-- /.form-group -->

                <!-- Input 2 -->
                <div class="form-group">
                  <input class="form-control" name="password" placeholder="Enter your email password" id="exampleInputPassword1" type="password">
                </div> <!-- /.form-group -->

                <!-- Button -->
                <button class="btn btn-success btn-block" name="submit" type="submit">Sign In</button>

                <!-- Checkbox -->
                <section>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" checked><p> Keep me logged in</p><br>
                    </label>
                  </div> <!-- /.checkbox -->
                </section> <!-- /.text-center -->

                <!-- Sign In/Sign Up links -->
                <section class="sign-in-up-links text-center">
                  <p><a href="register.php">Need an account?</a></p>
                </section> <!-- /.sign-in-up-links -->
              </form>
              
            </div> <!-- /.col-md-12 -->

          </div> <!-- /.row -->
          
        </section> <!-- /.sign-in-up-content -->




        <div class="row">

          <div class="col-md-12">

            <section class="footer-copyright text-center">

              <p>Made with <i class="fa fa-heart"></i> by Our team</p>
              
            </section> <!-- /.footer-section -->
            
          </div> <!-- /.col-md-12 -->

        </div> <!-- /.row -->
        
      </div> <!-- /.container -->

    </section> <!-- /.sign-in-up-section -->

    <?php include_once ('footer.php');?>