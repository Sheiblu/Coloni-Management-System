<?php
include'header.php';
if (isset($_SESSION['user_email'])) {


include'../model/user.php';
include_once('../model/connection.php');
 
$obj = new User();

if (isset($_POST['accept_servent'])) {

       $post_id = $_POST['id'];
       $servent_id = $_POST['servent_id'];
       $result = $obj->accept_servent($post_id,$servent_id);

       header("location: recentPost.php");
}

?>


 <head>

  <link href="../assets/login/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/login/css/style.css" rel="stylesheet">
  <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
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
    function myFunction() {
      var popup = document.getElementById("myPopup");
      popup.classList.toggle("show");
    }
  </script>




  <div class="inside-banner">
    <div class="container"> 

      <h2>Assigned Maid-servant</h2>
    </div>
  </div>
  <!-- banner -->


  <div class="container">
    <div class="spacer">
      <div class="row register">

       
        <div class="col-md-12"  align="center" style="padding: 0px">
          <!-- Website Overview -->

          <div class="panel panel-default" align="center" style="padding: 20px">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title" >Display Information <span></span></h3>
            </div>
            <div class="panel-body" align="center" style="text-align: left;">
              <div class="row" align="center">
                <?php
                // $obj = new User();
                $id = $_GET['id'];
                $result= $obj->get_servent_list_for_assign($id);
                $total_row = mysqli_num_rows($result);

                if ($total_row < 1){   ?>

                  <h1 style="text-align: center;"> Already assiged </h1>

              <?php  } else { 

                while ($row=mysqli_fetch_array($result)) {  ?>

                  <div>
                    <br>
                    <div class="col-md-4" align="center" style="text-align: center; float: center;  height: 200px ; margin-left: 5px; margin-right: 0px ; border-style: groove;">

                      <div class="col-md-12" style="padding-top: 10px">
                        <div class="col-md-4">
                          <p>Name : </p>
                        </div>
                        <div class="col-md-8" style="text-align: left;">
                          <p> <?php echo $row['name'];?>  </p>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="col-md-4">
                          <p>Mobile : </p>
                        </div>
                        <div class="col-md-8" style="text-align: left;">
                         <p> <?php echo $row['phone_number']; ?>  </p>
                       </div>
                     </div>

                     <div class="col-md-12">
                      <div class="col-md-4">
                        <p>Address : </p>
                      </div>
                      <div class="col-md-8" style="text-align: left;">
                        <p> <?php echo $row['address'];  ?>  </p>
                      </div>
                    </div>
                    <!-- <button style="width: 100px; height: 50px; background: #892089; color: white">Assign </button> -->

                  <form action="assign_page.php" method="POST">
                    <input type="hidden" name="servent_id" value="<?php echo $row['id_maid_servant']; ?>">
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                    <input type="submit" class="btn btn-danger btn-xs" name="accept_servent" value="Assign">
                  </form>

                  </div>
                </div>

              <?php } }  ?>

              <div>

            </div> 
            <br>

        </div>
        </div>
     </div>

    </div>
  </div>
</div></body>

<?php include'footer2.php';?>

<?php } else {
  header("location: ../view/login_user.php");
} ?>