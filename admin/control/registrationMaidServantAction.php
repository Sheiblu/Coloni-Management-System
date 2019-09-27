
<?php

include ('connection.php');
include ('../model/admin.php');



$errors = array();
if (isset($_POST['reg_maid_ser'])) {

	
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$phone = mysqli_real_escape_string($conn, $_POST['phone']);




	if (empty($name)) {
		array_push($errors, "Name is required");
	}
	if (empty($address)) { 
		array_push($errors, "Address  is required");
	}
	if (empty($phone)) { 
		array_push($errors, "Mobile number is required");
	}




// Call 
	$objUser = new Admin();       
	if (count($errors) == 0) {

		$result = $objUser->register_maid_servent( $name, $address, $phone);  
		array_push($errors, "Successfully Registation");

	}  
	else {
		array_push($errors, "Registration fail");
	}

} else {
	array_push($errors, " ");
}



?>
