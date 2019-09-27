<!DOCTYPE html>
<html lang="en">

<?php
session_start();
if (isset($_SESSION['admin_email'])) {
?>

<?php include_once('partial/header.php'); ?>
<?php include'../control/registrationUserAction.php';?>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="#" class="site_title"><i class="fa fa-institution (alias)"></i> <span>Colony</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <?php  include_once('partial/profile.php');  ?>
          <!-- /menu profile quick info -->

          <br />


          <!-- sidebar menu -->
          <?php  include_once('partial/menu.php');  ?>
          <!-- /sidebar menu -->

          
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">

          <?php include_once('partial/profile_right.php'); ?>

        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">

        <div class="">


          <div class="clearfix"></div>

          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
              <h3><center>Apartment owner registration</center></h3>
              <div class="x_panel">

                <div class="x_content">

                  <div class="col-md-12">


                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="_add_member.php">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="first_name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="last_name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="house_number" class="control-label col-md-3 col-sm-3 col-xs-12">House Number</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="house_number" class="form-control col-md-7 col-xs-12" type="text" name="house_number">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Flat No  
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="flat_no" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"name="flat_no">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile Number (+880) <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"name="phone">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Email<span class="required">*</span>  
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="email" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"name="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"name="password">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                          <button type="submit" name="reg_user"  class="btn btn-success">Submit</button>
                          <span class="popuptext" id="myPopup"><?php include('errors.php');?></span>
                        </div>
                      </div>

                    </form>



                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- /page content -->

      <!-- footer content -->
      <footer>
        <div class="pull-right">
          Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>
  <?php  include_once('partial/script_file.php');    ?>
</body>
</html>

<?php } else {
  header("location: ../view/login.php");
} ?>