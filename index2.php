<?php 
  session_start(); 
  require 'view.php';
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login2.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login2.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<title>Home</title>
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
		<link rel="stylesheet" href="css/style.css">
		<!-- Theme Style -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
<header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand absolute" href="#">FMO-tweets</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index2.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="organisations.php" id="dropdown04" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Dashboard</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <a class="dropdown-item" href="tweets.php">BLOG</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Organisation</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="#">T.V</a>
                    <a class="dropdown-item" href="#">Banking</a>
                    <a class="dropdown-item" href="#">Aviation</a>
                    <a class="dropdown-item" href="#">Education</a>
                    <a class="dropdown-item" href="#">Petroleum</a>
                    <a class="dropdown-item" href="#">Electricity</a>
                    <a class="dropdown-item" href="#">Engineering</a>
                    <a class="dropdown-item" href="#">Investment</a>
                    <a class="dropdown-item" href="#">Information Tech</a>
                    <a class="dropdown-item" href="#">Food Manufacturing</a>
                    <a class="dropdown-item" href="#">Telecommunication</a>
                  </div>
                </li>
				<li class="nav-item">
                <a class="nav-link" href="feedback.php">FEEDBACKS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
              <li class="nav-item">
              <h2>My Dashboard</h2>
              </li>
            </ul>
            <ul class="navbar-nav absolute-right">
              <li class="nav-item">
                <a href="login.php" class="nav-link">Login</a>
              </li>
              <li class="nav-item">
                <a href="register.php" class="nav-link">Register</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->
    
		 <p><a href="#" style="color: red;">You are now online!!!<a></p>
    </div>
      </nav>
    </header>
    <!-- END header -->


<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
	<i>
            <h4>Welcome...</i> <strong><?php echo $_SESSION['username']; ?></strong></h3>
			<div class="row">
			<form action="upload.php" method="POST" enctype="multipart/form-data">
		<label class="required" for="feedback">Drop your Feedbacks for any Organisation:</label><br />
        
				<textarea id="message" class="input" name="feedback" rows="10" cols="27"></textarea><br />
				Select image to upload:
            <input type="file" name="image"/>
				<span id="feedback_validation" class="error_feedback"></span><br>
				<input type="submit" name="submit" value="UPLOAD"/>
			</div>
    	<p> <a href="index2.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

<?php echo "<img width='300'img src='db_image/".$data['image']."' alt='Image Here'>"; ?>

<?php echo $feedback; ?>

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