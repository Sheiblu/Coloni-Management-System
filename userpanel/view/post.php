<?php include'header.php';

//session_start();
if (isset($_SESSION['user_email'])) {
   ?>

   <?php include'../control/servantPostAction.php';?>
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



            <form method="POST" action="post.php">
                <h5>Select Working Type</h5>  
                <select name="working_type" style="width: 556px; height: 46px; border-radius: 6px">
                   <option value="Full Time">Full Time</option>
                   <option value="Part Time">Part Time</option>
               </select>
               <br/>


               <h5>Working Duration</h5>  
               <select name="working_duration" id="working_duration" onchange="changeMonth()" style="width: 275px; height: 46px; border-radius: 6px">
                   <option value="Day">Day</option>
                   <option value="Month">Month</option>
               </select>


               <select id="month_or_day_number" name="month_or_day_number" style="width: 275px; height: 46px; border-radius: 6px"> 
                  <?php   $count = 1;
                  while( $count <= 30 ) {  ?> 
                    <option value="<?php echo $count ?>"> <?php echo $count ?></option>	
                    <?php  $count++ ; }  ?> 
                </select>


                <h5>Work Strating Date</h5>
                <input type="date" id="working_start_day" min="<?php echo date("Y-d-m"); ?>" class="form-control" placeholder="Work Strating Date" name="working_start_day" required>


                <h5>Work starting time</h5>
                <input type="time" id="start_time"class="form-control"   placeholder="time" name="start_time" required>


                <h5>Work ending time</h5>
                <input type="time" id="end_time" class="form-control" placeholder="time" name="end_time" required>


                <h5>Age</h5>
                <select id ="servant_age" class="form-control" style="width: 556px; height: 46px; border-radius: 6px" name="servant_age">
                   <option value="18-23">18-23</option>
                   <option value="24-30">24-30</option>
                   <option value="30++">30++</option>
                   <option value="0">Any</option>

               </select>


               <h5>House cleaning (Square feet)</h5>  
               <div class="row">
                   <div style="float: left; margin-left: 14px">
                    <input id="house_square_feet" onchange="house_square_feet_calculation()" style="width: 330px; height: 46px; border-radius: 6px; margin-left: 5px" type="number" min ="0" max ="5000" class="form-control" placeholder="square feet" name="house_size_square_feet" value="0" required>

                </div>

                <div style="float: left;">
                    <h2 style="color: black"> = </h2>
                </div>

                <div style="float: left;">
                  <input id="house_cleaning_cost" style="width: 205px; height: 46px; border-radius: 6px" type="text" class="form-control" placeholder="Total" name="house_cleaning_cost" value="0" readonly>
              </div>

          </div>


          <h5> Cloth Washing </h5>  
          <div class="row">
            <div style="float: left; margin-left: 15px">
                <select id="washing_people_number" name="washing_people_number" class="form-control" onchange="calculate_washing_cost()" style="width: 170px; height: 46px; border-radius: 6px" placeholder="Person">
                   <option value="0">Select person</option>
                   <option value="1">1 person</option>
                   <option value="2">2 person</option>
                   <option value="3">3 person</option>
                   <option value="4">4 person</option>
                   <option value="5">5 person</option>
                   <option value="6">6 person</option>
                   <option value="7">7 person</option>
                   <option value="8">8 person</option>
                   <option value="9">9 person</option>
                   <option value="10">10 person</option>

               </select>
           </div>



           <div style="float: left;">
            <h1 style="color: black">*</h1>
        </div>

        <div style="float: left;">
            <input style="width: 170px; height: 46px; border-radius: 6px" type="text" class="form-control" placeholder="Person" value="10 Taka"  readonly>
        </div>

        <div style="float: left;">
            <h2 style="color: black">=</h2>
        </div>

        <div style="float: left;">
          <input id="washing_cost" style="width: 170px; height: 46px; border-radius: 6px" type="text" class="form-control" placeholder="Total" name="cloth_washing_cost" value="0" readonly>
      </div>
  </div>

  <h5> Toilet clening </h5>  
  <div class="row">
    <div style="float: left; margin-left: 15px">
      <select id="washing_toilet_number" name="washing_toilet_number" class="form-control" onchange="calculate_toilet_cleaning_cost()" style="width: 170px; height: 46px; border-radius: 6px" placeholder="Toilet">
       <option value="0">Select toilet</option>
       <option value="1">1 toilet</option>
       <option value="2">2 toilet</option>
       <option value="3">3 toilet</option>
       <option value="4">4 toilet</option>
       <option value="5">5 toilet</option>
   </select>
</div>
<div style="float: left;">
    <h1 style="color: black">*</h1>
</div>

<div style="float: left;">
    <input style="width: 170px; height: 46px; border-radius: 6px" type="text" class="form-control" placeholder="Toilet" value="10 Taka"  readonly>
</div>

<div style="float: left;">
    <h2 style="color: black">=</h2>
</div>

<div style="float: left;">
  <input id="cleaning_cost" style="width: 170px; height: 46px; border-radius: 6px" type="text" class="form-control" placeholder="Total" name="toilet_cleaning_cost" value="0" readonly>
</div>

</div>

<h5>Perday total cost</h5>
<input id="budget" type="text" class="form-control" placeholder="Budget" name="budget" value="0" readonly>                

<h5>Details</h5>
<textarea rows="4" cols="50" class="form-control" placeholder="Details" name="working_details"></textarea>            



<button type="submit" class="btn btn-success" name="post_servant">Submit</button>
<div class="popup" onclick="myFunction()">  Do you forget to fill up some field ?

  <span class="popuptext" id="myPopup"><?php include('errors.php');?></span>
</div>

</form>
</div>

</div>
</div>
</div>
</body>


<script>

    function changeMonth() {

      var x = document.getElementById("working_duration");
      var y = document.getElementById("month_or_day_number");

      if(x.value === "Day"){
        for (var i = 13 ; i < 31 ; i++) {
           var option = document.createElement("option");
           option.text = i;
           y.add(option); 
       }
   } else {

      for (var i = 1 ; i < 19 ; i++) {
        y.remove(12); 
    }
}
}

function calculate_washing_cost(){
    var people = document.getElementById("washing_people_number").value;
    document.getElementById("washing_cost").value = people*10;
    change_Budget();
}
function calculate_toilet_cleaning_cost(){
    var people = document.getElementById("washing_toilet_number").value;
    document.getElementById("cleaning_cost").value = people*10;
    change_Budget();
}


function change_Budget(){
    var total_budget = document.getElementById("budget");
    var budget1 = document.getElementById("washing_cost").value;
    var budget2= document.getElementById("cleaning_cost").value;
    var squre_feet = document.getElementById("house_cleaning_cost").value;
    total_budget.value = parseInt(budget1) + parseInt(budget2) +parseInt(squre_feet);

}

function house_square_feet_calculation(){
    var square_feet = document.getElementById("house_square_feet").value;
    if (square_feet > 0){
        result = (square_feet / 50 < 10 ) ? 10 : square_feet / 50;
    } else {
        result = 0;
        document.getElementById("house_square_feet").value = 0;
    }


    document.getElementById("house_cleaning_cost").value = result;
    change_Budget();
}


</script>


<?php include'footer2.php';?>

<?php }else {
  header("location: ../view/login_user.php");
} ?>