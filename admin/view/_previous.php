<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (isset($_SESSION['admin_email'])) {
?>

<?php include_once('partial/header.php'); ?>
<?php include'../model/admin.php';?>

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
              <h3>Previous Post</h3>
            </div>


          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">

                <div class="x_content">


                  <div class="col-md-12">

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class=""><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Maid servant</a>
                        </li>

                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Laundry</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Booking party center</a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">


                         <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Working Type</th>
                              <th>Start Date</th>
                              <th>Budget</th>
                              <th>Action</th>
                            </tr>
                          </thead>

                          <?php

                          $obj = new Admin();
                          $result = $obj->get_previous_maid_servent_request_list();
                          $counter = 1;


                          while ($row=mysqli_fetch_array($result)) { ?>
                            <tbody>
                              <tr>
                                <td><?php echo $counter++; ?></td>
                                <td><?php echo $row['working_type']; ?></td>
                                <td><?php echo $row['work_start_time']; ?></td>
                                <td><?php echo $row['budget']; ?></td>
                             <td>
                                 <a href="_view_previous_post_details.php?id=<?php echo $row['id_post']; ?>"><button type="button" class="btn btn-success btn-xs">View</button></a>
                               </td>
                             </tr>

                           </tbody>
                         <?php } ?>

                       </table>


                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                       <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Iron</th>
                            <th>Normal Wash</th>
                            <th>Dry Wash</th>
                            <th>Delivery Day</th>
                            <th>Post Day</th>
                            <th>Mobile</th>
                            <th>Status</th>
                          </tr>
                        </thead>

                        <?php

                        $obj = new Admin();
                        $result = $obj->get_previous_laundry_list();
                        $counter = 1;


                        while ($row=mysqli_fetch_array($result)) { ?>
                          <tbody>
                            <tr>
                              <td> <?php echo $counter++; ?></td>
                              <td> <?php echo $row['iron_quantity']; ?></td>
                              <td> <?php echo $row['normal_wash_quantity']; ?></td>
                              <td> <?php echo $row['dry_wash_quantity']; ?></td>
                              <td> <?php echo $row['delivery_day']; ?></td>
                              <td> <?php echo $row['post_day']; ?></td>
                              <td> <?php echo $row['mobile']; ?></td>
                              <td> <?php echo $row['status']; ?></td>

                         </tbody>
                       <?php } ?>
                       
                       
                     </table>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                      <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Mobile</th>
                            <th>Estimate Person</th>
                            <th>Time Slot</th>
                            <th>Booking Date</th>
                            <th>Details</th>
                  
                            
                          </tr>
                        </thead>

                        <?php

                        $obj = new Admin();
                        $result = $obj->get_previous_party_center_request_list();
                        $counter = 1;


                        while ($row=mysqli_fetch_array($result)) { ?>
                          <tbody>
                            <tr>
                              <td><?php echo $counter++; ?></td>
                              <td><?php echo $row['mobile_number']; ?></td>
                              <td> <?php echo $row['estimate_person']; ?></td>
                              <td> <?php echo $row['time_slot']; ?></td>
                              <td> <?php echo $row['booking_date']; ?></td>
                              <td> <?php echo $row['program_details']; ?></td>
                             
                           </tr>

                         </tbody>
                       <?php } ?>

                       
                       
                     </table>
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