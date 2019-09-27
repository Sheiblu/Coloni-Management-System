<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (isset($_SESSION['admin_email'])) {
?>
<?php include_once('partial/header.php'); ?>

<?php include'../model/admin.php';
   include_once('../model/connection.php');

?>

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
              <h3 >Post Details</h3>
            </div>



            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">

                </div>
              </div>
            </div>
          </div>

          <?php

          $obj = new Admin();
          $id = $_GET['id'];
          $result = $obj->get_user_maid_servent_post_details($id);
          $counter = 1;

          while ($row=mysqli_fetch_array($result)) { 
            ?>

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
                          <p>Working type : </p>
                        </div>
                        <div class="col-md-8" style="text-align: left;">
                          <p><?php echo $row['working_type']; ?></p>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="col-md-4">
                          <p>Month or day : </p>
                        </div>
                        <div class="col-md-8" style="text-align: left;">
                          <p><?php echo $row['working_month_or_day_number']; ?></p>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="col-md-4">
                          <p>Working duration : </p>
                        </div>
                        <div class="col-md-8" style="text-align: left;">
                          <p><?php echo $row['working_duration']; ?></p>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="col-md-4">
                          <p>Work starting time : </p>
                        </div>
                        <div class="col-md-8" style="text-align: left;">
                          <p><?php echo $row['work_start_time']; ?></p>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="col-md-4">
                          <p>Work ending time : </p>
                        </div>
                        <div class="col-md-8" style="text-align: left;">
                          <p><?php echo $row['work_end_time']; ?></p>
                        </div>
                      </div> 

                      <div class="col-md-12">
                        <div class="col-md-4">
                          <p>House size : </p>
                        </div>
                        <div class="col-md-8" style="text-align: left;">
                          <p><?php echo $row['house_size_square_feet']; ?></p>
                        </div>
                      </div>  

                      <div class="col-md-12">
                        <div class="col-md-4">
                          <p>House cleaning cost : </p>
                        </div>
                        <div class="col-md-8" style="text-align: left;">
                          <p><?php echo $row['house_cleaning_cost']; ?></p>
                        </div>
                      </div> 

                      <div class="col-md-12">
                        <div class="col-md-4">
                          <p>Number of people cloth : </p>
                        </div>
                        <div class="col-md-8" style="text-align: left;">
                          <p><?php echo $row['number_of_people_cloth']; ?></p>
                        </div>
                      </div>    


                      <div class="col-md-12">
                        <div class="col-md-4">
                          <p> Cloth watching cost : </p>
                        </div>
                        <div class="col-md-8" style="text-align: left;">
                          <p><?php echo $row['cloth_watching_cost']; ?></p>
                        </div>
                      </div>  

                      <div class="col-md-12">
                        <div class="col-md-4">
                          <p> Total washroom : </p>
                        </div>
                        <div class="col-md-8" style="text-align: left;">
                          <p><?php echo $row['total_washroom']; ?></p>
                        </div>
                      </div>  

                      <div class="col-md-12">
                        <div class="col-md-4">
                          <p> Total washroom cost: </p>
                        </div>
                        <div class="col-md-8" style="text-align: left;">
                          <p><?php echo $row['total_washroom_cost']; ?></p>
                        </div>
                      </div> 

                      <div class="col-md-12">

                        <div class="col-md-4">
                          <p>Budget : </p>
                        </div>
                        <div class="col-md-8" style="text-align: left;">
                          <p><?php echo $row['budget']; ?></p>
                        </div>
                      </div> 

                      <div class="col-md-12">
                        <div class="col-md-4">
                          <p>Servant age </p>
                        </div>
                        <div class="col-md-8" style="text-align: left;">
                          <p><?php echo $row['servant_age']; ?></p>
                        </div>
                      </div> 

                      <div class="col-md-12">
                        <div class="col-md-4">
                          <p>Working details</p>
                        </div>
                        <div class="col-md-8" style="text-align: left;">
                          <p><?php echo $row['working_details']; ?></p>
                        </div> 
                      </div> 

                      <div class="col-md-12">
                        <div class="col-md-4">
                          <p> Post date </p>
                        </div>
                        <div class="col-md-8" style="text-align: left;">
                          <p><?php echo $row['post_date']; ?></p>
                        </div>
                      </div>    



                    </div>

                    <form method="post" action="_assign_maid_servant.php">
                      <input type="hidden" name="id" value="<?php echo $row['id_post'] ?>">
                      <center> <input type="submit" class="btn btn-success btn-xs" value="assign servent"> </center>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>

        <?php } ?>

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