<?php include'head.php';
?>
  <body class="index" id="to-top">
    <!-- Side nav -->
    <nav class="side-nav" role="navigation">

      <ul class="nav-side-nav">
        <li><a class="tooltip-side-nav" href="#section-1" title="" data-original-title="Services" data-placement="left"></a></li>
        <li><a class="tooltip-side-nav" href="#section-2" title="" data-original-title="Features" data-placement="left"></a></li>
        <li><a class="tooltip-side-nav" href="#section-3" title="" data-original-title="Subscribe" data-placement="left"></a></li>
        <li><a class="tooltip-side-nav" href="#to-top" title="" data-original-title="Back" data-placement="left"></a></li>
      </ul>
      
    </nav> <!-- /.side-nav -->




    <!-- Jumbotron -->
    <header class="jumbotron" role="banner">

      <div class="container">

        <div class="row">

          <div class="col-md-7">

            <!-- Logo -->
            <figure class="text-center">
              <a href="homeController#section-1">

                <img class="img-logo" src="<?php echo 'images/logo.png'?>" alt="">
              </a>
            </figure> <!-- /.text-center -->

            <!-- Title -->
            <h1>Your awesome title here</h1>

            <!-- Sub title -->
            <p>Architecto numquam perspiciatis commodi laboriosam quod debitis placeat maxime quaerat soluta quia porro dicta sunt nemo voluptates!</p>

            <!-- Button -->
              <a class="btn btn-danger btn-lg" href="homeController#section-2">
                <p>Login/Signup</p>
              </a>
          </div> <!-- /.col-md-7 -->

          <div class="col-md-5">

            <!-- Images showcase -->
            <figure>
              <img class="img-iPhone" src="<?php echo 'images/iphone/2.png'?>" alt="">
            </figure>

          </div> <!-- /.col-md-5 -->
          
        </div> <!-- /.row -->
        
      </div> <!-- /.container -->

    </header> <!-- /.jumbotron -->
    
    <!-- Services -->
    <section class="services-section" id="section-1">

      <div class="container">

        <div class="row">

          <div class="col-md-4 col-services">
            
            <!-- Icons -->
            <figure>
              <img class="img-services" src="<?php echo 'images/icons/flag.png'?>" alt="">
            </figure>

            <!-- Title -->
            <h4>Flag</h4>

            <!-- Description -->
            <p>Harum sunt atque quod reprehenderit voluptates dolores nisi quas dolorum ipsa ad consequatur impedit.</p>

          </div> <!-- /.col-md-4 -->

          <div class="col-md-4 col-services">
            
            <!-- Icons -->
            <figure>
              <img class="img-services" src="<?php echo 'images/icons/search.png'?>" alt="">
            </figure>

            <!-- Title -->
            <h4>Search</h4>

            <!-- Description -->
            <p>Quaerat, quisquam, perspiciatis, ipsam eveniet a ducimus repellat rem nobis similique.</p>

          </div> <!-- /.col-md-4 -->

          <div class="col-md-4 col-services">
            
            <!-- Icons -->
            <figure>
              <img class="img-services img-margin" src="<?php echo 'images/icons/world-map.png'?>" alt="">
            </figure>

            <!-- Title -->
            <h4>World Map</h4>

            <!-- Description -->
            <p>Aperiam iure doloremque tempora explicabo praesentium eos dicta laudantium corrupti ipsam.</p>

          </div> <!-- /.col-md-4 -->
          
        </div> <!-- /.row -->
        
      </div> <!-- /.container -->
      
    </section> <!-- /.services-section -->




    <!-- Features -->
    <section class="features-section" id="section-2">

      <div class="container">

        <div class="row media-screen-800">
          <div class="col-md-5 col-features text-center">
            
            <!-- Images showcase -->
            <figure>

              <img class="img-iPhone margin-top margin-screen-800" src="<?php echo 'images/iphone/4.png'?>" alt="">
            </figure>

          </div> <!-- /.col-md-5 -->
          <div class="col-md-7 col-features features-content">
            
            <!-- Title -->
            <h3 id="title-2">Second title features</h3>

            <!-- Description -->
            <p>Omnis, esse quo natus soluta minima facilis ratione dignissimos necessitatibus quod dolorem labore molestiae maxime veritatis laudantium aut odio ullam laboriosam autem!</p>

            <p>
              <a class="btn btn-danger" href="<?php echo 'login.php'?>">Sign In</a> &nbsp;
              <a class="btn btn-danger-border" href="<?php echo 'register.php'?>">Sign Up</a>
            </p>

          </div> <!-- /.col-md-7 -->
          
        </div> <!-- /.row -->


        <div class="row">
          <div class="col-md-7 col-features features-content">
            
            <!-- Title -->
            <h3 id="title-1">First title features</h3>

            <!-- Description -->
            <p>Omnis, esse quo natus soluta minima facilis ratione dignissimos necessitatibus quod dolorem labore molestiae maxime veritatis laudantium aut odio ullam laboriosam autem!</p>

            <p>
              <a class="btn btn-danger" href="#title-2">Learn more</a>
            </p>

          </div> <!-- /.col-md-7 -->

          <div class="col-md-5 col-features text-center">
            
            <!-- Images showcase -->
            <figure>

              <img class="img-iPhone" src="<?php echo 'images/iphone/1.png'?>" alt="">
            </figure>

          </div> <!-- /.col-md-5 -->
          
        </div> <!-- /.row -->

        <div class="row">

          <div class="col-md-5 col-features text-center">
            
            <!-- Images showcase -->
            <figure>
              <img class="img-iPhone margin-top margin-top-1" src="<?php echo 'images/iphone/3.png'?>" alt="">
            </figure>

          </div> <!-- /.col-md-5 -->

          <div class="col-md-7 col-features features-content">
            
            <!-- Title -->
            <h3 id="title-3">Third title features</h3>

            <!-- Description -->
            <p>Omnis, esse quo natus soluta minima facilis ratione dignissimos necessitatibus quod dolorem labore molestiae maxime veritatis laudantium aut odio ullam laboriosam autem!</p>

            <!-- Button -->
            <p class="btn-app-store">
              <a class="btn btn-danger btn-lg" href="#fakelinks">
                <img src="<?php echo 'images/btn-app-store.png'?>" alt="">
              </a>
            </p> <!-- /.btn-app-store -->

          </div> <!-- /.col-md-7 -->
          
        </div> <!-- /.row -->

      </div> <!-- /.container -->

    </section> <!-- /.features-section -->




    <!-- Subscribe -->
    <section class="subscribe-section" id="section-3">

      <div class="container">

        <div class="row">

          <div class="col-md-12">

            <!-- Title -->
            <h2>Subscribe to get delightfully infrequent updates</h2>

            <!-- Subscribe form -->
            <div class="row">

              <div class="col-md-6 col-md-offset-3 col-subscribe">

                <form class="subscribe-form form-inline" action="./index.html" role="form">

                  <!-- Input -->
                  <div class="form-group">

                    <label class="sr-only" for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email address">

                  </div> <!-- /.form-group -->

                  <!-- Button -->
                  <button class="btn btn-success" type="submit">Subscribe</button>
                  
                </form> <!-- /.subscribe-form -->



                <section class="subscribe-description">

                  <p>Don't worry. We do not spam :)</p>
                  
                </section> <!-- /.subscribe-description -->
                
              </div> <!-- /.col-md-6 -->

            </div> <!-- /.row -->
            
          </div> <!-- /.col-md-12 -->
          
        </div> <!-- /.row -->

      </div> <!-- /.container -->

    </section> <!-- /.subscribe-section -->





    <!-- Footer -->
    <footer class="footer-section" role="contentinfo">

      <div class="container">

        <div class="row">

          <div class="col-md-4 col-footer">
            
            <!-- Footer 1 -->
            <section>
              <p>Made with <i class="fa fa-heart"></i> by Aryandhani.</p>
            </section>

            <!-- AddThis Button -->
            <ul class="addthis_toolbox addthis_default_style">

              <li><a class="addthis_button_facebook_like"></a></li>
              <li><a class="addthis_button_tweet"></a></li>

            </ul> <!-- /.addthis_toolbox -->
            <script>var addthis_config = {"data_track_addressbar":true};</script>
            <script src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-533f6ac03b59c72a"></script>

          </div> <!-- /.col-md-4 -->

          <div class="col-md-4 col-footer col-padding">
            
            <!-- Footer 1 -->
            <section class="text-center">
              <p>Be sure to read <a href="#fakelinks">Terms</a> and <a href="#fakelinks">Privacy Policy</a>.</p>
            </section>

            <!-- Social media links -->
            <ul class="social-media-links">

              <li><a class="fa fa-twitter tw" href="#fakelinks"></a></li>
              <li><a class="fa fa-facebook fb" href="#fakelinks"></a></li>
              <li><a class="fa fa-pinterest pn" href="#fakelinks"></a></li>
              
            </ul> <!-- /.social-media-links -->

          </div> <!-- /.col-md-4 -->

          <div class="col-md-4 col-footer">
            
            <!-- Footer 1 -->
            <section>
              <p><strong>Guri Guri Nyoi, Inc</strong> <br>Antah berantah Street, Block 123 <br>Dimana saja, Kapan saja, 12356.</p>
            </section>

          </div> <!-- /.col-md-4 -->
          
        </div> <!-- /.row -->

      </div> <!-- /.container -->

    </footer> <!-- /.footer-section -->

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="javascript/vendor/jquery-2.1.0.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/assets/application.js"></script>
  </body>
</html>
