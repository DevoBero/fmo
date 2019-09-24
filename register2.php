<?php require('session.php'); 
require('error.php');?>
<!doctype html>
<html lang="en">
  <head>
    <title>FMO_TWEETS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,900" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Form validation code will come here.-->
    
    <script type="text/javascript"></script>

        <!-- Theme Style -->
      <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="styles.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<header role="banner">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand absolute" href="index2.php">FMO-tweets</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse navbar-dark" id="navbarsExample05">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link active" href="index2.php">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">DASHBOARD</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="users.php">EDIT PROFILE</a>
                  <a class="dropdown-item" href="organisations.php">EXPLORE</a>
                </div>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="feedback.php">FEEDBACKS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">CONTACT</a>
            </li>
          </ul>
          <ul class="navbar-nav absolute-right">
            <li class="nav-item">
              <a href="login2.php" class="nav-link">Login</a>
            </li>
            
          </ul>
          
        </div>
      </div>
    </nav>
  </header>
  <!-- END section -->
    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/FMO_tweet13.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate">
              <h1>Register Here!!!</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="fact-section spad set-bg" data-setbg="images/big_image_6.jpg" style="background-image: url(&quot;images/FMO_tweet6.jpg&quot;);">
      <div class="container">
        <div class="row justify-content-center ">
          <div class="col-sm-7 box bg-primary">
            <h2 class="mb-3 text-white">Log in as a New Organisation or an Existing Oragnisation
                 </h2>
                 <div class="header-right">
				
				<a class="text-white" href="login.php?user=<?php echo $username; ?>">LOG IN AS USERS</a>

				<a class="text-dark" href="Tweets.php?user=<?php echo $username; ?>">TWEETS</a>

		   		<a class="text-dark" href="users.php?user=<?php echo $businessname; ?>">VIEW-USERS</a>

		   <div class="dropdown">
		        <span>
		        <div class="dropdown-content">
		        </div>
		        </span>
                <a class="text-white" href="index2.php?user=<?php echo $username; ?>">GO TO YOUR DASHBOARD</a><br>
		   </div>
			</div>
		
		</div>
<div class="container">
  </div>
  <form method="post" action="register2.php">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user2">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login2.php">Sign in</a>
  	</p>
  </form>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

     <section class="overflow bg-info">
      <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-7 order-lg-3 order-1 mb-lg-0 mb-5" >
                <img src="images/FMO_tweet5.jpg" alt="Image placeholder" class="img-md-fluid">
              </div>
              <div class="col-lg-1 order-lg-2"></div>
              <div class="col-lg-4 order-lg-1 order-2 mb-lg-0 mb-5">
                <blockquote class="testimonial bg-dark text-white">
                  &ldquo; Register and join the Biggest Community of Online Users and Organistions...we share our views &rdquo;
                </blockquote>
                <p class="text-black">&mdash; Omojokun Oluwafemi, Back-End designer Certified ReactJS Student</p>
              </div>
            </div>
          </div>
    </section>
    <!-- END section -->
    
  
   	<!-- Footer section -->
     <footer class="footer-section bg-dark text-white">
      <div class="container footer-top">
        <div class="row">
          <!-- widget -->
          <div class="col-sm-6 col-lg-3 footer-widget">
            <div class="about-widget">
              <img src="images/FMO_tweet4.jpg" alt="">
              <p>At fofx (ef-of-ex), we believe in the power of learning. Given the rapidly changing nature of
                our world and dazing speed of advances in technology, we believe that the most important
                skill we can teach you is the ability to learn. We believe that learning who, when, where
                and how to ask the right questions is more important than knowing the right answer, because
                in today’s digital world, the answer is always changing.</p>
              <div class="social pt-1">
                <a href=""><i class="fa fa-twitter-square"></i></a>
                <a href=""><i class="fa fa-facebook-square"></i></a>
                <a href=""><i class="fa fa-google-plus-square"></i></a>
                <a href=""><i class="fa fa-linkedin-square"></i></a>
                <a href=""><i class="fa fa-rss-square"></i></a>
              </div>
            </div>
          </div>
          <!-- widget -->
          <div class="col-sm-6 col-lg-3 footer-widget">
            <h6 class="fw-title">USEFUL LINK</h6>
            <div class="dobule-link">
              <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About us</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Events</a></li>
                <li><a href="">Features</a></li>
              </ul>
              <ul>
                <li><a href="">Policy</a></li>
                <li><a href="">Term</a></li>
                <li><a href="">Help</a></li>
                <li><a href="">FAQs</a></li>
                <li><a href="">Site map</a></li>
              </ul>
            </div>
          </div>
          <!-- widget -->
          <div class="col-sm-6 col-lg-3 footer-widget">
            <h6 class="fw-title">RECENT POST</h6>
            <ul class="recent-post">
              <li>
                <p>Snackable study:How to brace up <br> for your Advanced Level Programming Courses</p>
                <span><i class="fa fa-clock-o"></i>2 Mar 2020</span>
              </li>
              <li>
                <p>The Academy plans major <br> expansion to number of staffs and increase in enrolment of
                  Students</p>
                <span><i class="fa fa-clock-o"></i>3 May 2020 </span>
              </li>
            </ul>
          </div>
          <!-- widget -->
          <div class="col-sm-6 col-lg-3 footer-widget">
            <h6 class="fw-title">CONTACT</h6>
            <ul class="contact">
              <li>
                <p><i class="fa fa-map-marker"></i> 12, Ayodele Okeowo street, Gbagada, Lagos, Nigeria.</p>
              </li>
              <li>
                <p><i class="fa fa-phone"></i>+234-70307012</p>
              </li>
              <li>
                <p><i class="fa fa-envelope"></i> info@fofx.com</p>
              </li>
              <li>
                <p><i class="fa fa-clock-o"></i> Monday - Friday, 08:00AM - 08:00 PM</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- copyright -->
      <div class="copyright">
        <div class="container">
          <p>
            <!--Copy RIGHT SECTION -->
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script>All rights reserved | This Website is a
            Demo Application for FEEDBACKS<i class="fa fa-heart-o" aria-hidden="true"></i>Designed by <a href="#"
              target="_blank">DAVFM</a>
            <!-- Copy RIGHT SECTION End-->
          </p>
        </div>
      </div>
    </footer>
    <!-- Footer section end-->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    
    <script src="js/main.js"></script>
  </body>
</html>