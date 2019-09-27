
<?php

include '../model/user.php';
include 'connection.php';

$objUser = new User();
$errors = array();




if (isset($_POST['login_user'])) {

  
  $userEmail = mysqli_real_escape_string($conn, $_POST['userEmail']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($userEmail)) { 
        array_push($errors, "Email is required"); 
     } else if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Enter a valid email");
     }


  if (empty($password)) { 
        array_push($errors, "Password is required");
       }

if (count($errors) < 1) {


    $result = $objUser->login_user($userEmail,$password);
    $resultCheck= mysqli_num_rows($result);

    if($resultCheck < 1){
      
      //array_push($errors, "Result ".$resultCheck);

    }



	else {
            
              $result  = $objUser->get_user_info($userEmail);
              $u_id = "";
                  while ($row=mysqli_fetch_array($result)){
                    $u_id = $row['id_user'] ;
                    $u_name = $row['first_name'] ;
                  }

              $_SESSION['user_email'] = $userEmail;
              $_SESSION['user_id'] = $u_id;
              $_SESSION['user_name'] = $u_name;

          header("location: ../view/index.php");
  
      }

  }
 else{
  //header("location: ../view/login_user.php?");
}
}


?>

