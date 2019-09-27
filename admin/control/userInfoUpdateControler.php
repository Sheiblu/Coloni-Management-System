
<?php

	include ('connection.php');
	include ('../model/user.php');

	

	  $errors = array();
    	if (isset($_POST['reg_user'])) {

		$user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
		$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
		$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
		$house_number = mysqli_real_escape_string($conn, $_POST['house_number']);
		$flat_no = mysqli_real_escape_string($conn, $_POST['flat_number']);

		$phone = mysqli_real_escape_string($conn, $_POST['phone_number']);
		
		$password = mysqli_real_escape_string($conn, $_POST['password']);
	    

		if (empty($user_id)) { 
				array_push($errors, "Id is required");
			}
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



// Call 
	  	$objUser = new User();

		if (count($errors) == 0) {
          
			$result = $objUser->user_info_update( $user_id, $first_name, $last_name, $house_number, $flat_no, $phone, $password);  
             array_push($errors, "Loging Successfully");
           
			}  

        } else {
        	array_push($errors, "Not Found");
        }



?>
