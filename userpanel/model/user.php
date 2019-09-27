<?php 
	
	include ('connection.php');
	


	 class User {

	 	public function create_booking_party_center_request($mobile_number, $email, $estimate_person, $time_slot, $booking_date, 
	 		$program_details, $id){

	 		$GLOBALS['sql'] = "insert into `booking_party_center` (mobile_number, email, estimate_person, time_slot, booking_date, program_details, user_id) VALUES ('$mobile_number','$email', '$estimate_person' ,'$time_slot' , '$booking_date', '$program_details', '$id');";
	 		return mysqli_query($GLOBALS["conn"], $GLOBALS["sql"]);

	 	}


		public function login_user($email,$password){
			$GLOBALS['sql'] ="SELECT * FROM user WHERE email ='$email' and password ='$password'";
			return mysqli_query($GLOBALS["conn"], $GLOBALS["sql"]);
		}

		public function get_user_recent_post($u_id){    // 1
			//$GLOBALS['sql'] ="SELECT  *  FROM post where user_id_user = '$u_id'" ;
				$GLOBALS['sql'] ="SELECT  *  FROM post where user_id_user = '$u_id' and id_post not In(select post_id_post from assign where status = 1)" ;
			
        	return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
		}

		public function get_user_previous_post($u_id){    // 1
			$GLOBALS['sql'] ="SELECT  *  FROM post where user_id_user = '$u_id' and id_post In(select post_id_post from assign where status = 1)" ;
        	return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
		}

		public function get_user_info($email){    // 1
			$GLOBALS['sql'] ="SELECT  *  FROM user where email = '$email' " ;
        	return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
		}

		public function post_for_servant($working_type, $working_duration, $budget,$month_or_day_number, $start_time, $end_time, $servant_age, $house_square_feet, $washing_people_number,$washing_toilet_number, $washing_cost,$house_cleaning_cost, $toilet_cleaning_cost, $working_details, $u_id){    // 1

			$GLOBALS['sql'] = "INSERT INTO post (working_type, working_month_or_day_number, working_duration , work_start_time, work_end_time, house_size_square_feet,  house_cleaning_cost , number_of_people_cloth, cloth_watching_cost , total_washroom, total_washroom_cost ,budget , servant_age, working_details, user_id_user, post_date) VALUES('$working_type','$month_or_day_number' ,'$working_duration' , '$start_time', '$end_time','$house_square_feet',  '$house_cleaning_cost','$washing_people_number', '$washing_cost', '$washing_toilet_number', '$toilet_cleaning_cost', '$budget', '$servant_age', '$working_details', $u_id, CURDATE());";

		//return $GLOBALS['sql'];

			 return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
		}

		public function post_for_servant_update( $working_type, $working_time, $working_duration, $working_start_day, $budget, $working_details, $id_post){    // 1

			$GLOBALS['sql'] = "UPDATE post SET working_type = '$working_type', working_time= '$working_time' , working_duration = '$working_duration', budget = '$budget', working_details = '$working_details', working_start_day = '$working_start_day' WHERE id_post = '$id_post'";

			return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);

			//return $GLOBALS['sql'] ;
		}

		public function get_recent_booking_party_center_list($id){    
			$GLOBALS['sql'] ="SELECT  *  FROM booking_party_center where user_id = '$id' and status = 'pending'" ;
        	return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
		}

		public function get_previous_booking_party_center_list($id){    
			$GLOBALS['sql'] ="SELECT  *  FROM booking_party_center where user_id = '$id' and status != 'pending'" ;
			// return $GLOBALS['sql'];

        	return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
		}

		public function get_servent_list_for_assign($post_id){
			
		$result = mysqli_query($GLOBALS["conn"], "SELECT maid_servant_id_maid_servent from  assign where post_id_post = $post_id and status = 1");

		if (mysqli_num_rows($result) == 1){

	 	$GLOBALS['sql'] ="SELECT * FROM `maid_servant` where id_maid_servant In (SELECT maid_servant_id_maid_servent from  assign where post_id_post = '0')";
		}else{

	 	$GLOBALS['sql'] ="SELECT * FROM `maid_servant` where id_maid_servant In (SELECT maid_servant_id_maid_servent from  assign where post_id_post = '$post_id')";
		}
			return mysqli_query($GLOBALS["conn"], $GLOBALS["sql"]);
	    }


	    public function get_isAssign($post_id){
	 	$GLOBALS['sql'] ="SELECT * from  assign where post_id_post = '$post_id' and status = 1 ";
			return mysqli_query($GLOBALS["conn"], $GLOBALS["sql"]);
	    }

	    public function accept_servent($post_id, $servent_id ){

	    $GLOBALS['sql'] = "Update assign set status = 1 where maid_servant_id_maid_servent = '$servent_id' and post_id_post = '$post_id'";
	    
	    return mysqli_query($GLOBALS["conn"], $GLOBALS["sql"]);
	    }


	    public function get_notification($user_id){

	    $GLOBALS['sql'] = "SELECT * FROM `notification` ORDER by accept_time DESC";
	    
	    return mysqli_query($GLOBALS["conn"], $GLOBALS["sql"]);
	    }

	    public function create_laundry_post($iron_quantity, $normal_wash_quantity, $dry_wash_quantity, $delivery_day, $mobile, $user_id_user){

	    $GLOBALS['sql'] = "INSERT into laundry (iron_quantity, normal_wash_quantity, dry_wash_quantity, delivery_day, mobile, user_id_user) VALUES ('$iron_quantity', '$normal_wash_quantity', '$dry_wash_quantity', '$delivery_day', '$mobile', '$user_id_user')";
	    
	    return mysqli_query($GLOBALS["conn"], $GLOBALS["sql"]);
	    }


	    public function get_recent_laundry_list($id){    
			$GLOBALS['sql'] ="SELECT  *  FROM laundry where user_id_user = '$id' and status = 'pending'" ;
        	return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
		}

		public function get_previous_laundry_list($id){    
			$GLOBALS['sql'] ="SELECT  *  FROM laundry  where user_id_user = '$id' and status != 'pending'" ;

        	return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
		}




	 }	

 ?>