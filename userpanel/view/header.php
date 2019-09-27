<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>Koloci Management System</title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	<link rel="stylesheet" href="../assets/registration_user/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="../assets/registration_user/style.css"/>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="../assets/registration_user/bootstrap/js/bootstrap.js"></script>
  <script src="../assets/registration_user/script.js"></script>



<!-- Owl stylesheet -->
<link rel="stylesheet" href="../assets/registration_user/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="../assets/registration_user/owl-carousel/owl.theme.css">
<script src="../assets/registration_user/owl-carousel/owl.carousel.js"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="../assets/registration_user/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="../assets/registration_user/slitslider/css/custom.css" />
    <script type="text/javascript" src="../assets/registration_user/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="../assets/registration_user/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="../assets/registration_user/slitslider/js/jquery.slitslider.js"></script>
<!-- slitslider -->

</head>

<body>


<!-- Header Starts -->
<div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
               <li class=""><a href="index.php">Home</a></li>
               <li><a href="previousHistory.php">Previous History</a></li>
               <li class=""><a href="recentPost.php">Recent Post</a></li>
               <li class=""><a href="notification.php">Notifaction</a></li>
               <li><a href="userProfile.php"><?php echo 'profile (  '.$_SESSION['user_name'].'  )' ?></a></li>
                
                <li> <form action="logout.php" method="POST">
                    <button type="submit" name="submit" class="btn btn-info">Logout</button>
                     </form></li>
           
               
		
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->





<div class="container">

</div>