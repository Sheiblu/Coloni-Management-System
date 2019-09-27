<?php
include ('header.php');
if (isset($_SESSION['user_email'])) {
 ?>

<!DOCTYPE html>

<?php include ('../control/loginAction.php'); ?>

<?php include ('errors.php'); ?>


  
 <body style="background-image: url(../assets/image/H.jpg); background-repeat: no-repeat; background-size: cover;">
    
    <h1 class="text-center" style="color: black"><i>Take your Need!</i> </h1>

    <section id="main">
      <div class="container" style="background: Lightgray">
        <img src="../assets/image/capture.PNG" style="width: 100%; height: 300px" >
      </div>
      <div class="container" align="center" style="background: Lightgray ; margin-top: 30px ">
        <a href="post.php"><button style="width: 18%; height: 100px" >Maid Servant</button></a>
		 <a href="post.php"><button style="width: 18%; height: 100px" >Technician</button></a>
		  <a href="post.php"><button style="width: 18%; height: 100px" >Cleaner</button></a>
		  
		<a href="laundry.php"><button style="width: 18%; height: 100px" >Laundry Service</button></a>
       	<a href="book_party_center.php"><button style="width: 18%; height: 100px" >Book party center</button></a>
       
       
      </div>
    </section>


  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../assets/login/js/bootstrap.min.js"></script>
  </body>
</html>

<?php }else {
  header("location: ../view/login_user.php");
} ?>
