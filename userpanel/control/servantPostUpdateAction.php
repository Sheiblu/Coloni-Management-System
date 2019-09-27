
<?php

	include ('connection.php');
	include ('../model/user.php');

	

	  $errors = array();
    	if (isset($_POST['post_update'])) {

		$working_type = mysqli_real_escape_string($conn, $_POST['working_type']);
		$working_time = mysqli_real_escape_string($conn, $_POST['working_time']);
		$working_duration = mysqli_real_escape_string($conn, $_POST['working_duration']);
		$working_start_day = mysqli_real_escape_string($conn, $_POST['working_start_day']);
		$budget = mysqli_real_escape_string($conn, $_POST['budget']);
		$working_details = mysqli_real_escape_string($conn, $_POST['working_details']);
		$id_post = mysqli_real_escape_string($conn, $_POST['varname']);

		
		


		if (empty($working_type)) { 
				array_push($errors, "Working Type is not Seiect");
			}
		if (empty($working_time)) {
				array_push($errors, "Working Time is required");
			}
		if (empty($working_duration)) { 
				array_push($errors, "Working Duration is required");
		}

		if (empty($working_start_day)) { 
		 		array_push($errors, "Working Starting Day is required");
     	 }

		if (empty($budget)) { 
		 		array_push($errors, "Budget is required"); 
		 }

		if (empty($id_post)) { 
		 		array_push($errors, "Dont Cheat"); 
		 }


// Call 
	  	$objUser = new User();
          
		if (count($errors) == 0) {
			    
          
	   $result = $objUser->post_for_servant_update( $working_type, $working_time, $working_duration, $working_start_day, $budget, $working_details, $id_post);  
             array_push($errors, "Loging Successfully ".$result);
             header("location: ../view/recentPostDetails.php?id=".$id_post);
            
			}  

        }



?>
