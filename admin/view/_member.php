<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (isset($_SESSION['admin_email'])) {
?>

<?php include_once('partial/header.php'); ?>
<?php include_once('../model/user.php'); ?>

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
              <h3>Member List</h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_content">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                      <ul class="pagination pagination-split">
                        <li><a href="#">A</a></li>
                        <li><a href="#">B</a></li>
                        <li><a href="#">C</a></li>
                        <li><a href="#">D</a></li>
                        <li><a href="#">E</a></li>
                        <li>...</li>
                        <li><a href="#">W</a></li>
                        <li><a href="#">X</a></li>
                        <li><a href="#">Y</a></li>
                        <li><a href="#">Z</a></li>
                      </ul>
                    </div>

                    <div class="clearfix"></div>

                    <?php
                    $obj = new User();
                    $result= $obj->get_user_list();
                    $counter = 1;

                    while ($row=mysqli_fetch_array($result)) { ?>
                     

                      <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <div class="left col-xs-7">
                              <h2>Name: <?php echo $row['first_name'].' '.$row['last_name']; ?></h2>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i> House No: <?php echo $row['house_number']; ?></li>
                                <li><i class="fa fa-building"></i> Flat No: <?php echo $row['flat_number']; ?></li>
                                <li><i class="fa fa-phone"></i> Phone #: <?php echo $row['phone_number'] ; ?></li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="../images/user.png" alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                           
                             <!--<div class="col-xs-12 col-sm-6 emphasis">
                             <button type="button" class="btn btn-primary btn-xs">
                              <i class="fa fa-user"> </i>  <a href="user_profile.php?id=<?php echo $row['id_user']; ?>"><span style="color: white">View Profile</span></a> 
                            </button> 
                          </div> -->

                        </div>
                      </div>
                    </div>



                  <?php } ?>




                  

                  
                  <div class="input-group">
                    <span class="input-group-btn">
                      <button class="btn btn-primary" type="button" onclick="location.href='_add_member.php';">Add New Member</button>
                      
                    </span>
                  </div>
                  
                </div>
              </div>
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