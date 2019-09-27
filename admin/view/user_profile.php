<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (isset($_SESSION['admin_email'])) {
?>

<?php include_once('partial/header.php'); ?>

<?php include'../control/anotherData.php';?>

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

      <?php
      $id = $_GET['id']; 
      $obj = new AnotherData();
      $result= $obj->userInfo($id);

      while ($row=mysqli_fetch_array($result)) { 


       $name =  $row['first_name'] . " " . $row['last_name'] ; 
       $flat_number =  $row['flat_number']; 
       $house_number =  $row['house_number']; 
       $phone_number =  $row['phone_number']; 
       $email =  $row['email'];    
       $id = $row['id_user']; 
     //  $linK = "_edit_maid_servent_profile.php?id=".$id;

     } ?>

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
                <h3>User Profile</h3>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="../images/cropper.jpg" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3> <?php echo $name; ?></h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> Flat no : <?php echo $flat_number ?>
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> Apartment no:  <?php echo $house_number; ?>
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> Mobile no :  <?php echo $phone_number; ?>
                        </li>
             
                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
                          <a href="#" > <?php echo $email; ?></a>
                        </li>
                      </ul>

                      <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                      <br />

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="profile_title">
                        <div class="col-md-6">
                          <h2>Apartment owner Activity </h2>
                        </div>
                        <div class="col-md-6">
                         
                        </div>
                      </div>
                      

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Maid servant</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Laundry service </a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Booking party center</a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <!-- start recent activity -->
                            <ul class="messages">
              
              <li>
                                <div class="message_wrapper">
                                  <h4 class="heading">Request</h4>
                                  <blockquote class="message">15</blockquote>
                                  <br />
                                 
                                </div>
                              </li>
                
                
                <li>
                                <div class="message_wrapper">
                                  <h4 class="heading">Pending</h4>
                                  <blockquote class="message">3</blockquote>
                                  <br />
                                 
                                </div>
                              </li>
                
                
                <li>
                                <div class="message_wrapper">
                                  <h4 class="heading">Accept</h4>
                                  <blockquote class="message">12</blockquote>
                                  <br />
                                 
                                </div>
                              </li>
                             
                           

                            </ul>
                            <!-- end recent activity -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                            <!-- start user projects -->
                               <ul class="messages">
              
              <li>
                                <div class="message_wrapper">
                                  <h4 class="heading">Request</h4>
                                  <blockquote class="message">20</blockquote>
                                  <br />
                                 
                                </div>
                              </li>
                
                
                <li>
                                <div class="message_wrapper">
                                  <h4 class="heading">Pending</h4>
                                  <blockquote class="message">5</blockquote>
                                  <br />
                                 
                                </div>
                              </li>
                
                
                <li>
                                <div class="message_wrapper">
                                  <h4 class="heading">Accept</h4>
                                  <blockquote class="message">15</blockquote>
                                  <br />
                                 
                                </div>
                              </li>
                             
                           

                            </ul>
                            <!-- end user projects -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                               <ul class="messages">
              
              <li>
                                <div class="message_wrapper">
                                  <h4 class="heading">Request</h4>
                                  <blockquote class="message">5</blockquote>
                                  <br />
                                 
                                </div>
                              </li>
                
                
                <li>
                                <div class="message_wrapper">
                                  <h4 class="heading">Pending</h4>
                                  <blockquote class="message">1</blockquote>
                                  <br />
                                 
                                </div>
                              </li>
                
                
                <li>
                                <div class="message_wrapper">
                                  <h4 class="heading">Accept</h4>
                                  <blockquote class="message">4</blockquote>
                                  <br />
                                 
                                </div>
                              </li>
                             
                           

                            </ul>
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