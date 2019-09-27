
<?php

	include ('connection.php');
	include ('../model/user.php');

	$objUser = new User();

	  $errors = array();
    	if (isset($_POST['reg_user'])) {


		$child_Name = mysqli_real_escape_string($conn, $_POST['child_name']);
		$child_father_name = mysqli_real_escape_string($conn, $_POST['child_father_name']);
		$child_mother_name = mysqli_real_escape_string($conn, $_POST['child_mother_name']);
		$age = mysqli_real_escape_string($conn, $_POST['age']);

		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
	    $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

		$religion= mysqli_real_escape_string($conn, $_POST['religion']);
        $gender= mysqli_real_escape_string($conn, $_POST['gender']);

		$phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);


		if (empty($child_Name)) { 
				array_push($errors, "Child name is required");
			}
		if (empty($child_father_name)) {
				array_push($errors, "Father name is required");
			}
		if (empty($child_mother_name)) { 
				array_push($errors, "Mother name is required");
		}



		 if (empty($email)) { 
		 		array_push($errors, "Email is required"); 
		 } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				array_push($errors, "Enter a valid email");
		 }


		 if (empty($password_1)) { 
		 		array_push($errors, "Password is required");
     	 }  else if ($password_1 != $password_2) {
  	     		array_push($errors, "The two passwords do not match");
    	 }  else if(strlen($password_1) < 5){
				array_push($errors, "The password length must be > 5");
		 }




  		if (empty($password_2)) {
				array_push($errors, "confirm your password");
  		  }

  		if (empty($phone)) {
				array_push($errors, "phone is required");
	  	}  else if(strlen($phone) !=10) {
				array_push($errors, "The Mobile_No length must be 11");
		}  else if(strlen($phone) >10){
				array_push($errors, "The Mobile_No length must be between 11 digit");
		}

  		if (empty($address)) {
				array_push($errors, "address is required"); 
	  	}   else {

		$result = $objUser->check_email($email);
        $resultcheck = mysqli_num_rows($result);
		
		
        if ($resultcheck > 0) {
			array_push($errors, "Email alrady exists");
        	
			}
        }    
        

		if (count($errors) == 0) {
          
			$result = $objUser->register_child( $child_Name, $child_father_name, $child_mother_name, $age, $email, $password_1, $phone, $address, $religion);  
             array_push($errors, "Loging Successfully");
             header("location: ../view/login_user.php");
			}  

        }



?>
