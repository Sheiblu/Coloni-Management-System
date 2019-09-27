<?php include'header.php';

//session_start();
if (isset($_SESSION['user_email'])) {
   ?>

   <?php include'../control/bookingPartyCenterAction.php';?>
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
    <h2 align="center">Book your Party Center</h2>
</div>
</div>
<!-- banner -->


<div class="container">
    <div class="spacer">
        <div class="row register">
          <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">



            <form method="POST" action="book_party_center.php">


                <input type="text" class="form-control" placeholder="Mobile no" required name="mobile_no">
                <input type="text" class="form-control" placeholder="Email" required name="email">
                <input type="number" class="form-control" min="4" placeholder="Estimate Person" name="estimate_person" required> 
                

                  Time Slot
                <select name="time_slot" class="form-control">
                                  
                                    <option value="1pm-6pm">1pm-6pm</option>
                                    <option value="6:30pm-10pm">6:30pm-10pm</option>              
                                    <option value="Full Time">Full Time</option>                 
                                                  
                        <select>

                <input type="date" class="form-control" placeholder=" Booking Date" name="booking_date" required> 
                <textarea rows="4" cols="50" class="form-control" placeholder=" Program Details" name="program_details"></textarea>            



                <button style="border: 2px solid blue" type="submit" class="btn btn-success" name="post_party_center">Submit</button>
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