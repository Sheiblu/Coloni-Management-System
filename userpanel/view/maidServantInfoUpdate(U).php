
<?php
session_start();
if (isset($_SESSION['s_email'])) {
 ?>

<?php 
include'header.php';
include '../control/connection.php';
include '../control/maidServantInfoUpdateAction.php';
include '../control/anotherData.php';?>  

<head>
    <body style="background-image: url(../assets/registration_user/-Playing-with-fruits.jpg); background-repeat: no-repeat; background-size: cover;">

<style>
/* Popup container - can be anything you want */
.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* The actual popup */
.popup .popuptext {
    visibility: hidden;
    width: 250px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 136%;
    left: 50%;
    margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}
</style>
</head>
<body style="text-align:center">



<script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>




<div class="inside-banner">
  <div class="container"> 
    <h2 align="center">Maidservant Info Update</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">

  <?php include('errors.php');
        
                        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
                              $id = $_GET['id'];
                        } else {
                               $id = 2;
                        }
                              
                              $sql="SELECT  *  FROM maid_servant where id_maid_servant = '$id'" ;
                              $result=mysqli_query($conn,$sql);
                              $counter = 1;

                              while ($row=mysqli_fetch_array($result)) { ?>

<!-- <?php // echo 'maidServantProfileDetails.php?id='.$_GET['id']; ?> -->
<?php //echo 'childInfoUpdate.php?id='.$id; ?>
 
<form method="POST" action="">
                <h5> Id </h5>
                <input type="text" class="form-control" placeholder="Id" name="maid_servant_id" value="<?php echo $row['maid_servant_id'] ?>">

                <h5> Name </h5>
				<input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo $row['name'] ?>"> 

				<h5> Mobile number </h5>
				<input type="text" class="form-control" placeholder="Mobile Number (+880) " name="phone_number" value="<?php echo $row['phone_number'] ?>">  

				 <h5> Address </h5>
                  <textarea rows="4" cols="50" class="form-control" placeholder="address" name="address" value="<?php echo $row['address'] ?>"> <?php echo $row['address'] ?></textarea>
            
               
                <input type="hidden" class="form-control" name="id" value="<?php  echo $_GET['id'] ?>">
                <!-- <textarea rows="6" class="form-control" placeholder="Address" name="address"></textarea> --> 
        
                    <button type="submit" class="btn btn-success" name="made_info_update">Update Info</button>
                       <?php } ?>
</div>
     

</form>
                
        </div>
  
</div>
</div>
</div></body>

<?php include'footer2.php';?>

 <?php }else {
  header("location: ../view/login_user.php");
} ?>