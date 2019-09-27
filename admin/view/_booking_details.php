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
          <?php include_once('partial/profile_right.php'); ?>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3 >Post Details</h3>
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
                                          <p>Kawser</p>
                                    </div>
                                  </div>


                                  <div class="col-md-12">
                                    <div class="col-md-4">
                                          <p>Mobile no : </p>
                                    </div>
                                    <div class="col-md-8" style="text-align: left;">
                                          <p>445686515</p>
                                    </div>
                                  </div>

                                 <div class="col-md-12">

                                    <div class="col-md-4">
                                          <p>Food-item : </p>
                                    </div>
                                    <div class="col-md-8" style="text-align: left;">
                                          <p>Rices, Hilsa-fish,Mutton,7up</p>
                                    </div>
                                  </div>
								    <div class="col-md-12">

                                    <div class="col-md-4">
                                          <p>Persons : </p>
                                    </div>
                                    <div class="col-md-8" style="text-align: left;">
                                          <p>250</p>
                                    </div>
                                  </div>
								    <div class="col-md-12">

                                    <div class="col-md-4">
                                          <p>Tome : </p>
                                    </div>
                                    <div class="col-md-8" style="text-align: left;">
                                          <p>1:30 pm</p>
                                    </div>
                                  </div>
								    <div class="col-md-12">

                                    <div class="col-md-4">
                                          <p>Party Date : </p>
                                    </div>
                                    <div class="col-md-8" style="text-align: left;">
                                          <p>25 jun,2019</p>
                                    </div>
                                  </div>
                                 <div class="col-md-12">

                                    <div class="col-md-4">
                                          <p>Apartment name : </p>
                                    </div>
                                    <div class="col-md-8" style="text-align: left;">
                                          <p>White-house</p>
                                    </div>
                                  </div>
                                  <div class="col-md-12">

                                    <div class="col-md-4">
                                          <p>Flat no : </p>
                                    </div>
                                    <div class="col-md-8" style="text-align: left;">
                                          <p>D2</p>
                                    </div>
                                  </div>
                                 
					 <div>
					<center> <a href="#">  <button type="button" class="btn btn-success btn-xs">Confirm</button> </a>	
					  <a href="#">  <button type="button" class="btn btn-success btn-xs">Reject</button> </a></center>
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