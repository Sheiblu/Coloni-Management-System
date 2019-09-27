<?php include'header.php';

if (isset($_SESSION['user_email'])) {
 ?>


<?php //equire_once '../control/anotherActionControl.php';?>
<?php require_once '../control/servantPostUpdateAction.php';?>

<head>
    <body style="background-image: url(../assets/image/); background-repeat: no-repeat; background-size: cover;">

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
    <h2 align="center">Edit Your Post</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">

   <?php

                                
                               if ($_SERVER['REQUEST_METHOD'] == 'GET'){
                                    $id = $_GET['id'];
                                    } else {
                                           $id = 2;

                                    } ?>
 
<!-- <form method="POST" action="recentPostEdit.php?id=<?php // echo $id ?>"> <?php //echo 'recentPostEdit.php?id='.$id?> -->

  <form method="POST" action="">
    
                      <?php

                          
                              $user_id =  $_SESSION['user_id'];
                              $sql="SELECT  *  FROM post where id_post = '$id' and  user_id_user = '$user_id'" ;
                              
                              $result=mysqli_query($conn,$sql);
                              $counter = 1;


                              while ($row=mysqli_fetch_array($result)) { ?>


                  <h5>Working Type</h5> 
                  <select name="working_type" style="width: 556px; height: 46px; border-radius: 6px">
                    <option value="<?php echo $row['working_type'];?> "> <?php echo $row['working_type']; ?> </option>
                     <?php  

                              if ($row['working_type'] === 'Full Time') {  ?>

                                <option value="Part Time">Part Time</option>

                         <?php      } else {  ?>

                               <option value="Full Time">Full Time</option>

                          <?php     }  ?>

                  </select>
                  
                  <br/>
                   <h5>Working Time</h5>
                   <input name="working_time" type="text" class="form-control" value="<?php echo $row['working_time']; ?>" placeholder="Working Time" name="working_time"> 
                  <br>
                  

                   <h5>Working Duration</h5>  
                   <select name="working_duration" style="width: 275px; height: 46px; border-radius: 6px" >
                    <option value="<?php echo $row['working_duration']; ?> "> <?php echo $row['working_duration']; ?> </option>
                     <?php  

                              if ($row['working_duration'] === 'Month') {  ?>

                                <option value="Day">Day</option>

                         <?php      } else {  ?>

                               <option value="Month">Month</option>

                          <?php     }  ?>
                  </select>
                  
                  
                 <select style="width: 275px; height: 46px; border-radius: 6px"> 
                  <?php   $count = 1;
                            while( $count <= 20 ) {  ?> 
                                <option value="<?php echo $count ?>"> <?php echo $count ?></option> 
                  <?php     $count++ ; }  ?> 
                  </select>
                  
                 
                <h5>Work Strating Date</h5>
                <input name="working_start_day" type="text" class="form-control" value="<?php echo $row['working_start_day']; ?>" placeholder="Work Strating Date" > 

                <h5>Budget</h5>
                <input name="budget" type="text" class="form-control" value="<?php echo $row['budget']; ?> " placeholder="Budget" >                
             
                <h5>Details</h5>
                <textarea name="working_details" rows="4" cols="50" class="form-control" placeholder="Details" 
                                  value=" <?php echo $row['working_duration'];?>"  > <?php echo $row['working_details']; ?></textarea>  
                <input type="hidden" name="varname" value="<?php echo $row['id_post']; ?>">          
              
                    <button type="submit" class="btn btn-success" name="post_update">Submit</button>
  <?php } ?>
                        <div class="popup" onclick="myFunction()">  Do you forget to fill up some field?
                
                  <span class="popuptext" id="myPopup"><?php include('errors.php');?></span>

                
</div>
     

</form>
                
        </div>
  
</div>
</div>
</div></body>

<?php include'footer2.php';?>

<?php include('errors.php');?>

 <?php }else {
  header("location: ../view/login_user.php");
} ?>