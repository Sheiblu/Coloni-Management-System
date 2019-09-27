<?php include'header.php';

   // session_start();
if (isset($_SESSION['user_email'])) {
 ?>

 <?php include'../control/laundryPostAction.php';?>
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
    <h2 align="center">Touch Laundry service</h2>
              
  </div>

</div>
<!-- banner -->


<div class="container">
    <div class="spacer">
        <div class="row register">
          <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">

          
              

            <form method="POST" action="laundry.php">


             <div class="row">

                 <div style="float: left; padding-left: 25px">  
                    <h2 style="color: black;">Iron : </h2>
                    <!-- <input  style="width: 170px; height: 46px; border-radius: 6px" type="text" class="form-control" placeholder="Total" name="iron" value="Iron" readonly> -->
                </div>
                <div style="float: left; margin-left: 15px">
                   <select id="iron" name="iron" class="form-control" style="margin-left: 142px; width: 170px; height: 46px; border-radius: 6px" placeholder="Iron">
                       <option value="0"> Select Quantity</option> 
                       <?php   $count = 1;
                       while( $count <= 15 ) {  ?> 
                           <option value="<?php echo $count ?>"> <?php echo $count ?></option> 
                           <?php     $count++ ; }  ?> 

                       </select>
                   </div>
               </div>           




               <div class="row">

                 <div style="float: left; padding-left: 25px">  
                    <h2 style="color: black;">Normal Wash : </h2>
                    <!-- <input  style="width: 170px; height: 46px; border-radius: 6px" type="text" class="form-control" placeholder="Total" name="iron" value="Iron" readonly> -->
                </div>
                <div style="float: left; margin-left: 15px">
                   <select id="iron" name="normal_wash" class="form-control" onchange="calculate_normal_wash_cost()" style="width: 170px; height: 46px; border-radius: 6px" placeholder="Iron">
                    <option value="0"> Select Quantity</option> 
                    <?php   $count = 1;
                    while( $count <= 15 ) {  ?> 
                        Select <option value="<?php echo $count; ?>"> <?php echo $count ?></option> 
                        <?php     $count++ ; }  ?> 

                    </select>
                </div>
            </div>                




            <div class="row">

             <div style="float: left; padding-left: 25px">  
                <h2 style="color: black;">Dry Wash : </h2>
                <!-- <input  style="width: 170px; height: 46px; border-radius: 6px" type="text" class="form-control" placeholder="Total" name="iron" value="Iron" readonly> -->
            </div>
            <div style="float: left; margin-left: 15px">
               <select id="iron" name="dry_wash" class="form-control"  style="margin-left: 62px; width: 170px; height: 46px; border-radius: 6px" placeholder="Iron">
                   <option value="0"> Select Quantity</option> 
                   <?php   $count = 1;
                   while( $count <= 15 ) {  ?> 
                    Select <option value="<?php echo $count ?>"> <?php echo $count ?></option> 
                    <?php     $count++ ; }  ?> 

                </select>
            </div>
        </div>     

        Expected Delivery Date<input type="date" class="form-control" placeholder="Delivery date" name="delivery_day"> 

        Mobile <input type="text" class="form-control" placeholder="Phone" name="mobile">                


        <button type="submit" class="btn btn-success" name="post_laundry">Submit</button>
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