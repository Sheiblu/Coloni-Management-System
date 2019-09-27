
<?php

	include ('connection.php');
	include ('../model/user.php');

	

	  $errors = array();
    	if (isset($_POST['post_party_center'])) {

		$mobile_no = mysqli_real_escape_string($conn, $_POST['mobile_no']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$estimate_person = mysqli_real_escape_string($conn, $_POST['estimate_person']);
		$time_slot = mysqli_real_escape_string($conn, $_POST['time_slot']);
		$booking_date = mysqli_real_escape_string($conn, $_POST['booking_date']);
		$program_details = mysqli_real_escape_string($conn, $_POST['program_details']);


		if (empty($mobile_no)) { 
				array_push($errors, "Working Type is not Seiect");
			}
		if (empty($estimate_person)) {
				array_push($errors, "Working Time is required");
			}
		if (empty($time_slot)) { 
				array_push($errors, "Working Duration is required");
		}

		if (empty($booking_date)) { 
		 		array_push($errors, "Working Starting Day is required");
     	 }

		$id = $_SESSION['user_id'];


// Call 
	  	$objUser = new User();
          
		if (count($errors) == 0) {
			    
          
	   $result = $objUser->create_booking_party_center_request($mobile_no, $email, $estimate_person, $time_slot, $booking_date, $program_details, $id);  
             array_push($errors, "Party Center  Successfully Booked");
            
			}  

        }



?>
