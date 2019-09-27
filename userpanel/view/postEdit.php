<?php include'header.php';

//session_start();
if (isset($_SESSION['s_email'])) {
 ?>

<?php include'../control/registrationChildAction.php';?>
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
    <h2 align="center">Make Your Post for Maid Servant</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">

  
 
<form method="POST" action="registerChild.php">
    
                  <select>
					<option value="">Working Type</option>
					<option value="">Full Time</option>
					<option value="">Part Time</option>
				  </select>
				  
				  <br/>
				   <input type="text" class="form-control" placeholder="Working Time" name="working_time"> 
				  
				  <br>
				  
				    Working Duration:  <select name="a">
					<option value="" >Day/Month</option>
					<option value="Day">Day</option>
					<option value="Month">Month</option>
				  </select>
				  
				  
				 <select> 
				  <?php   $count = 1;
							while( $count <= 20 ) {  ?> 
								<option value="<?php echo $count ?>"> <?php echo $count ?></option>	
				  <?php		$count++ ; }  ?> 
				  </select>
				  
				 
                <input type="text" class="form-control" placeholder="Work Strating Date" name="strating_date"> 
                <input type="text" class="form-control" placeholder="Budget" name="budget">                
             
                <textarea rows="4" cols="50" class="form-control" placeholder="Details" name="details"></textarea>            
              
                 
        
                    <button type="submit" class="btn btn-success" name="save">Submit</button>
                        <div class="popup" onclick="myFunction()">  Do you forget to fill up some field?
                
                  <span class="popuptext" id="myPopup"><?php include('errors.php');?></span>
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