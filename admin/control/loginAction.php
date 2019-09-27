
<?php

include '../model/admin.php';
include 'connection.php';

$objUser = new Admin();
$errors = array();




if (isset($_POST['admin_login'])) {



  $adminEmail = mysqli_real_escape_string($conn, $_POST['adminEmail']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($adminEmail)) { 
    array_push($errors, "Email is required"); 
  } else if (!filter_var($adminEmail, FILTER_VALIDATE_EMAIL)) {
    array_push($errors, "Enter a valid email");
  }


  if (empty($password)) { 
    array_push($errors, "Password is required");
     $message = '<h1 style="color: red"> Password is required </h1>';
  }

  if (count($errors) < 1) {


    $result = $objUser->login_admin($adminEmail,$password);
    $resultCheck= mysqli_num_rows($result);
   

    if($resultCheck < 1){
      $message = '<h1 style="color: red"> Email and Password Not match </h1>';

    } else {


      $u_id = "";
      while ($row=mysqli_fetch_array($result)){
        $u_id = $row['admin_id'] ;
        $u_name = $row['name'] ;
      }

      $_SESSION['admin_email'] = $adminEmail;
      $_SESSION['admin_id'] = $u_id;
      $_SESSION['admin_name'] = $u_name;

      header("location: ../view/index.php");

    }

  } else{
     $message = "error";
  }
} else {
  // echo "stringdfffffffff";

}


?>

