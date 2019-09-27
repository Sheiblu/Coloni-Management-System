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
      $result= $obj->maidServantDetails($id);

      while ($row=mysqli_fetch_array($result)) { 


       $name =  $row['name']; 
       $phone_number =  $row['phone_number']; 
       $address = $row['address']; 

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


          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <h1> Profile Edit </h1>
              <div class="x_panel">

                <div class="x_content">
                  <div class="col-md-12">

                    <form id="demo-form2" method="POST" action="../control/maidServantInfoUpdateAction.php" data-parsley-validate class="form-horizontal form-label-left" >

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id=""  required="required" class="form-control col-md-7 col-xs-12" name="name" value="<?php  echo $name; ?>">
                        </div>
                      </div>

                      <input type="hidden" name="maid_servant_id" value="<?php echo $_GET['id'] ?>">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile Number (+880) </span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="phone" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"name="phone_number" value="<?php  echo $phone_number; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Address <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea rows="5" id="address" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"name="address" ><?php  echo $address; ?></textarea>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="made_info_update" class="btn btn-success">Update</button>

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