
<?php

include ('connection.php');
include ('../model/user.php');



$errors = array();
if (isset($_POST['reg_user'])) {


	$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
	$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
	$house_number = mysqli_real_escape_string($conn, $_POST['house_number']);
	$flat_no = mysqli_real_escape_string($conn, $_POST['flat_no']);

	$phone = mysqli_real_escape_string($conn, $_POST['phone']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);


	if (empty($first_name)) {
		array_push($errors, "First name is required");
	}
	if (empty($last_name)) { 
		array_push($errors, "Last name is required");
	}
	if (empty($house_number)) { 
		array_push($errors, "House no is required");
	}
	if (empty($flat_no)) { 
		array_push($errors, "Flat number is required");
	}
	if (empty($phone)) { 
		array_push($errors, "Mobile number is required");
	}
	if (empty($password)) { 
		array_push($errors, "Password is required");
	}


	if (empty($email)) { 
		array_push($errors, "Email is required"); 
	} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		array_push($errors, "Enter a valid email");
	}


// Call 
	$objUser = new User();
	$result = $objUser->check_user_email($email);
	$resultcheck = mysqli_num_rows($result);


	if ($resultcheck > 0) {
		array_push($errors, "Email alrady exists");		
	}



	if (count($errors) == 0) {
		$result = $objUser->register_user( $first_name, $last_name, $house_number, $flat_no, $phone, $email, $password);  
		array_push($errors, "Successfully add new user");
	}  else{
		array_push($errors, "Registation Fail");
	}

 } else {
	array_push($errors, " ");
}



?>
