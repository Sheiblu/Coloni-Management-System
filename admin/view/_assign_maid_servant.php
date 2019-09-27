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

<?php 

$obj = new Admin();
if (isset($_POST['assign'])) {

  $id = $_POST['id'];
  $servent_id = $_POST['servent_id'];
  $sql = "INSERT into assign (maid_servant_id_maid_servent, post_id_post) VALUES ('$servent_id','$id')";
  mysqli_query( $conn, $sql);
  $obj->add_notification("accept", "Maid Servant", $id);

} 

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
              <h3 >Assign Maid-servent</h3>
            </div>
            

            
            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <span class="input-group-btn">
                    <?php 

                    $back = "_view_recent_post_details.php?id=".$_POST['id'];

                    ?>

                    <button class="btn btn-primary" type="button" onclick="location.href='<?php echo $back ?>';">Back</button>
                  </span>
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

                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Mobile</th>
                          <th>Address</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>


                        <?php
                        
                        $id = $_POST['id'];
                        $result= $obj->get_servent_list_for_assign($id);
                        $counter = 1;

                        while ($row=mysqli_fetch_array($result)) { ?>
                          <tr>
                            <td><?php echo $counter++; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td> <?php echo $row['phone_number']; ?></td>
                            <td> <?php echo $row['address']; ?></td>

                            <td>
                              <a class="btn btn-default" href="<?php echo '_maid_Servant_Profile_Details.php?id='.$row['id_maid_servant'] ?>">View </a>

                              <form method="post" action="_assign_maid_servant.php">
                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                <input type="hidden" name="servent_id" value="<?php echo $row['id_maid_servant'] ?>">
                                <input type="submit" class="btn btn-success" value="assign" name="assign">
                              </form>
                            </td>
                            


                          </tr>
                        <?php } ?>
                        
                        
                        
                      </tbody>
                    </table>
                    

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