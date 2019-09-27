
<?php

	include ('connection.php');
	include ('../model/user.php');

	

	  $errors = array();
    	if (isset($_POST['post_servant'])) {

		$working_type = mysqli_real_escape_string($conn, $_POST['working_type']);
		
		$working_duration = mysqli_real_escape_string($conn, $_POST['working_duration']);

		$budget = mysqli_real_escape_string($conn, $_POST['budget']);

		$working_details = mysqli_real_escape_string($conn, $_POST['working_details']);

		$working_start_day = mysqli_real_escape_string($conn, $_POST['working_start_day']);

		$month_or_day_number = mysqli_real_escape_string($conn, $_POST['month_or_day_number']);

		$start_time = mysqli_real_escape_string($conn, $_POST['start_time']);

		$end_time = mysqli_real_escape_string($conn, $_POST['end_time']);

		$servant_age = mysqli_real_escape_string($conn, $_POST['servant_age']);

		$house_square_feet = mysqli_real_escape_string($conn, $_POST['house_size_square_feet']);

		$washing_people_number = mysqli_real_escape_string($conn, $_POST['washing_people_number']);

		$washing_toilet_number = mysqli_real_escape_string($conn, $_POST['washing_toilet_number']);

		$cloth_washing_cost = mysqli_real_escape_string($conn, $_POST['cloth_washing_cost']);

		$house_cleaning_cost = mysqli_real_escape_string($conn, $_POST['house_cleaning_cost']);

		$toilet_cleaning_cost = mysqli_real_escape_string($conn, $_POST['toilet_cleaning_cost']);

		if (empty($working_type)) { 
				array_push($errors, "Working Type is not Seiect");
			}

		if (empty($working_duration)) { 
				array_push($errors, "Working Duration is required");
		}

		 if (empty($budget)) { 
		 		array_push($errors, "Budget is required"); 
		 }


		 if (empty($working_start_day)) { 
		 		array_push($errors, "Working Starting Day is required");
     	 }  



// Call 
	  	$objUser = new User();
          
		if (count($errors) == 0) {
			$u_id = $_SESSION['user_id'];
                

	   $result = $objUser->post_for_servant( $working_type, $working_duration, $budget,$month_or_day_number, $start_time, $end_time, $servant_age, $house_square_feet, $washing_people_number,$washing_toilet_number, $cloth_washing_cost,$house_cleaning_cost, $toilet_cleaning_cost, $working_details, $u_id);  

	      if($result == 1){
 array_push($errors, "Servent Post Submit Successfully");
	      } else {
	      	 array_push($errors, "Somethink is wrong , Try again");
	      }

            
			}  

        }



?>
