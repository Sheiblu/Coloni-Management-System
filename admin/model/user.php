<?php 

include ('connection.php');


class User {


	public function register_user( $first_name, $last_name, $house_number, $flat_no, $phone, $email,$password){

		$GLOBALS['sql'] = "INSERT INTO user ( first_name , last_name , flat_number , phone_number , email, password, house_number) VALUES('$first_name' ,'$last_name' , '$flat_no' ,'$phone','$email','$password', '$house_number');";

		return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
	}


		public function user_info_update($user_id, $first_name, $last_name, $house_number, $flat_no, $phone, $password){  //

			$GLOBALS['sql'] ="UPDATE user SET user_id = '$user_id', first_name  = '$first_name', last_name  = '$last_name', flat_number = '$flat_no', house_number = '$house_number',  	phone_number = '$phone', password   ='$password'   WHERE user_id ='$user_id'";

			return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);		 
		}

		public function check_user_email($email){
			return  mysqli_query($GLOBALS["conn"], "SELECT * FROM user WHERE email ='$email'"); 
		}

		public function get_user_list() {   // 1
			$GLOBALS['sql'] ="SELECT  *  FROM user";
			return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
		}

		public function get_user_recent_post(){    // 1
			$GLOBALS['sql'] = "SELECT * FROM post WHERE id_post NOT IN (SELECT post_id_post FROM assign)" ;
			return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
		}

		public function get_user_previous_post(){    // 1
			$GLOBALS['sql'] = "SELECT * FROM post WHERE id_post IN (SELECT post_id_post FROM assign)" ;
			return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
		}  

		public function get_user_info($id){    // 1
			$GLOBALS['sql'] ="SELECT  *  FROM user where id_user = $id" ;
			return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
		} 
	}	

	?>