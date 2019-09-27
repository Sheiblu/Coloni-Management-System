
<?php

include ('connection.php');
include ('../model/user.php');



$errors = array();
if (isset($_POST['post_laundry'])) {

	$iron = mysqli_real_escape_string($conn, $_POST['iron']);

	$normal_wash = mysqli_real_escape_string($conn, $_POST['normal_wash']);

	$dry_wash = mysqli_real_escape_string($conn, $_POST['dry_wash']);

	$delivery_day = mysqli_real_escape_string($conn, $_POST['delivery_day']);

	$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);



	if (empty($delivery_day)) { 
		array_push($errors, "Delivery date is required"); 
	}


	if (empty($mobile)) { 
		array_push($errors, "Mobile number is required");
	}  


	if ($iron < 1 && $normal_wash < 1 && $dry_wash <1){
		array_push($errors, "Please Select Any item");
	}

	$objUser = new User();

	if (count($errors) == 0) {
		// $u_id = $_SESSION['user_id'];

		//	 session_start();

		$result = $objUser->create_laundry_post($iron, $normal_wash, $dry_wash, $delivery_day, $mobile, $_SESSION['user_id']);

		if($result == 1){
			array_push($errors, "Servent Post Submit Successfully");
		} else {
			array_push($errors, "Somethink is wrong , Try again");
		}


	}  

}



?>
