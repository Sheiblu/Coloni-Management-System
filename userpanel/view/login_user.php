<?php
session_start();
if (!isset($_SESSION['user_email'])) {
 ?>

<!DOCTYPE html>

<?php include ('../control/loginAction.php'); ?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colony Apartment Service System</title>
    <!-- Bootstrap core CSS -->
    <link href="../assets/login/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/login/css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body style="background-image: url(../assets/image/login_icon.png); background-repeat: no-repeat; background-size: cover;">


    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center">Hello <small> User</small></h1>
          </div>
        </div>
      </div>
    </header>

    <section id="main">
      <div class="container" style="margin: 0px auto;">
        <div class="row">

          

          <div class="col-md-5 col-md-offset-4">
            <span class="popuptext" id="myPopup"><?php include('errors.php');?></span>
            <form method="post" id="login" action="login_user.php" class="well">
                  <div class="form-group">
                    <label>Email Address</label>
                    <input type="text" name="userEmail" class="form-control" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>
                  <button type="submit" name="login_user" class="btn btn-default btn-block">Login</button>
              </form>
          </div>
        </div>
      </div>
    </section>


  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../assets/login/js/bootstrap.min.js"></script>
  </body>
</html>

<?php }else {
  header("location: ../view/index.php");
} ?>
