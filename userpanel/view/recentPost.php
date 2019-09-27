<?php
include'header.php';
if (isset($_SESSION['user_email'])) {
 ?>

 <?php include'../control/anotherActionControl.php';?>

 <head>
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



<!-- ------------- -->
<div  align="center" style="padding: 50px">
  <!-- Website Overview -->

  <div class="panel panel-default" align="center" style="padding: 20px">
    <h1 class="panel-title" > Recent Post </h1>
    <ul class="nav nav-tabs">
      <li><a data-toggle="tab" href="#menu1">Maid-servant</a></li>
      <li><a data-toggle="tab" href="#menu2">Laundry</a></li>
      <li><a data-toggle="tab" href="#menu3">Booking party center</a></li>
    </ul>

    <div class="tab-content">

      <div id="menu1" class="tab-pane fade">
        <h3>Maid-servant</h3>
        <div class="panel-body" align="center">

          <br>

          <table class="table table-striped table-hover" >
            <tr>
              <th>No</th>
              <th>Working type</th>
              <th>Working Duration</th>
              <th>Budget</th>
              <th>Post Date</th>
            </tr>
            <?php
            $id = $_SESSION['user_id'];
            $obj = new user();
            $result = $obj->get_user_recent_post($id);
            $counter = 1;

            


            while ($row=mysqli_fetch_array($result)) { ?>
              <tr>
                <td><?php echo $counter++; ?></td>
                <td><?php echo $row['working_type']; ?></td>
                <td><?php echo " " .$row['working_month_or_day_number'] ." , ". $row['working_duration']; ?></td>
                <td><?php echo $row['budget'] . " Taka "; ?></td>
                <td><?php echo $row['post_date']; ?></td>

                <td>

                  <?php 

                  $res1 = $obj->get_isAssign($row['id_post']);
                  $isAssign = mysqli_num_rows($res1);
                  ?>

                  

                  <a class="btn btn-default" href="recentPostDetails.php?id=<?php echo $row['id_post'] ?>">View </a>

                  <?php  if($isAssign > 0){  ?>

                   <a class="btn btn-default" onclick="already_assign()">Assigned </a>

                 <?php   } else {  ?>

                  <a class="btn btn-default" href="assign_page.php?id=<?php echo $row['id_post'];  ?>">Assigned </a>

                <?php  }  ?>
                <a class="btn btn-default" href="maidServantInfoUpdate(U).php">Edit</a>
              </td>
            </tr>
          <?php } ?>
        </table>
      </div>
    </div>

    <div id="menu2" class="tab-pane fade">
      <h3>Laundry</h3>
      <br>

      <table class="table table-striped table-hover" >
        <tr>
          <th>No</th>
          <th>Iron</th>
          <th>Normal Wash</th>
          <th>Dry Wash</th>
          <th>Delivery Day</th>
          <th>Post Day</th>
          <th>Mobile</th>
          <th>Action</th>
        </tr>
        <?php
        $id = $_SESSION['user_id'];
        $obj = new User();
        $result = $obj->get_recent_laundry_list($id);
        $counter = 1;


        while ($row=mysqli_fetch_array($result)) { ?>
          <tr>
           <td> <?php echo $counter++; ?></td>
           <td> <?php echo $row['iron_quantity']; ?></td>
           <td> <?php echo $row['normal_wash_quantity']; ?></td>
           <td> <?php echo $row['dry_wash_quantity']; ?></td>
           <td> <?php echo $row['delivery_day']; ?></td>
           <td> <?php echo $row['post_day']; ?></td>
           <td> <?php echo $row['mobile']; ?></td>


         </tr>
       <?php } ?>
     </table>
     
     
   </div>
   <div id="menu3" class="tab-pane fade">
    <br>
    <h3>Booking party center</h3>
    <div class="panel-body" align="center">

      <br>

      <table class="table table-striped table-hover" >
        <tr>
          <th>No</th>
          <th>Mobile NO</th>
          <th>Estimate NO</th>
          <th>Time Slot</th>
          <th>Booking Date</th>
          <th>Details</th>
        </tr>
        <?php
        $id = $_SESSION['user_id'];
        $obj = new User();
        $result = $obj->get_recent_booking_party_center_list($id);
        $counter = 1;


        while ($row=mysqli_fetch_array($result)) { ?>
          <tr>
            <td><?php echo $counter++; ?></td>
            <td><?php echo $row['mobile_number']; ?></td>
            <td><?php echo $row['estimate_person']; ?></td>
            <td><?php echo $row['time_slot']; ?></td>
            <td><?php echo $row['booking_date']; ?></td>
            <td><?php echo $row['program_details']; ?></td>


          </tr>
        <?php } ?>
      </table>
    </div>

  </div>
</div>


</div>

</div>
<!-- banner -->


<div class="container">
  <div class="spacer">
    <div class="row register">


    </div>
  </div>
</div>

</body>

<script>
  function already_assign() {
    alert("Already Assign");
  }
</script>


<?php include'footer2.php';?>

<?php } else {
  header("location: ../view/login_user.php");
} ?>