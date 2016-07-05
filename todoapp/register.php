<?php include'head-register.php';?>
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
              <h4 class="text-center">Register your account</h4>

              <form class="form" method="POST" action="register.php">
                <div class="form-group">
    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="firstname" required></br>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="lastname" required></br>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="username" name="username" placeholder="username" required></br>
  </div>
  <div class="form-group">
    <input type="email" class="form-control" id="email" name="email" placeholder="email" required></br>
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="password" name="password" placeholder="password" required></br>
  </div>
<?php $message = ""; echo $message;?>
  <div class="form-group">
    <input type="submit" name="submit" value="register" class="btn btn-default">
  </div>
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
<?php include'regprocess.php';?>
    <?php include_once ('footer.php');?>