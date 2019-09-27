<!DOCTYPE html>
<html lang="en">

<?php
session_start();
if (isset($_SESSION['admin_email'])) {
?>

<?php include_once('partial/header.php'); ?>

<body class="nav-md" style="color: black">
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

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
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
      <div class="page-title">
        <div class="title_left">
          <h3 >Maid-servant Details</h3>
        </div>
        

        
        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
             
            </div>
          </div>
        </div>
      </div>
      
      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            
            <div class="x_content">
              <div class="col-md-12">

                
                <div class="col-md-12">

                  <div class="col-md-4">
                    <p>No : </p>
                  </div>
                  <div class="col-md-8" style="text-align: left">
                    <p>1</p>
                  </div>
                </div>

                <div class="col-md-12">

                  <div class="col-md-4">
                    <p>Name : </p>
                  </div>
                  <div class="col-md-8" style="text-align: left;">
                    <p>Sanjida Akther</p>
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="col-md-4">
                    <p>Mobile no : </p>
                  </div>
                  <div class="col-md-8" style="text-align: left;">
                    <p>01234567890</p>
                  </div>
                </div>

                <div class="col-md-12">

                  <div class="col-md-4">
                    <p>Address: </p>
                  </div>
                  <div class="col-md-8" style="text-align: left;">
                    <p>Dhanmondi,Dhaka</p>
                  </div>
                </div>
                <div class="col-md-12">

                  <div class="col-md-4">
                    <p>Rating: </p>
                  </div>
                  <div class="col-md-8" style="text-align: left;">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                </div>

                

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
    <center>  Colony Apartment Service System  </center> 
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