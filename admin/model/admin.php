<?php 

include ('connection.php');

class Admin {

	
	public function register_admin($admin_name, $email, $password_1, $gender, $phone, $address){

		$GLOBALS['sql'] = "INSERT INTO admin_details (admin_name, email , password , gender , phone , address ) VALUES('$admin_name','$email' ,'$password_1' , '$gender' ,'$phone','$address');";

		return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
	}


	public function login_admin($email,$password){
		$GLOBALS['sql'] ="SELECT * FROM admin WHERE email ='$email' and password = '$password'";
		return mysqli_query($GLOBALS["conn"], $GLOBALS["sql"]);
	}

	public function create_report( $email,$catagory,$comment){
		$GLOBALS['sql'] ="INSERT INTO  report_or_notice ( email , catagory , comment ) VALUES('$email' ,'$catagory' , '$comment');";
		return mysqli_query($GLOBALS["conn"], $GLOBALS["sql"]);
	}

	public function check_email($email){
		$GLOBALS['sql'] ="SELECT * FROM admin_details WHERE email ='$email'";
		return mysqli_query($GLOBALS["conn"], $GLOBALS["sql"]);
	}

	public function register_maid_servent( $name, $address, $phone){
		$GLOBALS['sql'] ="INSERT INTO  maid_servant (name ,  address, phone_number ) VALUES('$name' , '$address' ,'$phone');";
		return mysqli_query($GLOBALS["conn"], $GLOBALS["sql"]);
	}

		public function get_maid_servan_list(){   // 1
			$GLOBALS['sql'] ="SELECT  *  FROM maid_servant";
			return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
		}  


		public function assign_maid_servan($serventId, $postId ){   // 1
			$GLOBALS['sql'] ="INSERT INTO  assign (assign_date , maid_servant_id_maid_servent , post_id_post ) VALUES(CURDATE() ,'$serventId' , '$postId');";
			return mysqli_query($GLOBALS["conn"], $GLOBALS["sql"]);
		} 



		public function get_maid_servan_details($id ){   // 1
			$GLOBALS['sql'] ="SELECT * FROM `maid_servant` where id_maid_servant = '$id'";
			return mysqli_query($GLOBALS["conn"], $GLOBALS["sql"]);
		} 



		public function update_maid_servent( $maidservant_id, $name, $address, $phone){  // 1

			$GLOBALS['sql'] ="UPDATE maid_servant SET name  = '$name', address = '$address', phone_number  = '$phone'  WHERE id_maid_servant ='$maidservant_id'";

			return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
			
			
		}

// Recent 
		public function get_recent_maid_servent_request_list(){
			$GLOBALS['sql'] ="SELECT * FROM `post` WHERE  id_post not in (SELECT post_id_post from  assign where status = 1)";
			return mysqli_query($GLOBALS["conn"], $GLOBALS["sql"]);
		}


		public function get_recent_party_center_request_list(){
			$GLOBALS['sql'] ="SELECT * FROM `booking_party_center` where status = 'pending'";
			return mysqli_query($GLOBALS["conn"], $GLOBALS["sql"]);
		}

		public function get_recent_laundry_request_list(){
			$GLOBALS['sql'] ="SELECT * FROM `maid_servant` where id_maid_servant = '$id'";
			return mysqli_query($GLOBALS["conn"], $GLOBALS["sql"]);
		}

// Previous

		public function get_previous_maid_servent_request_list(){
			$GLOBALS['sql'] ="SELECT * FROM `post` WHERE  id_post in (SELECT post_id_post from  assign where status = 1)";
			return mysqli_query($GLOBALS["conn"], $GLOBALS["sql"]);
		}


		public function get_previous_party_center_request_list(){
			$GLOBALS['sql'] ="SELECT * FROM `booking_party_center` where status = 'accept'";
			return mysqli_query($GLOBALS["conn"], $GLOBALS["sql"]);
		}

		public function get_previous_laundry_request_list(){
			$GLOBALS['sql'] ="SELECT * FROM `maid_servant` where id_maid_servant = '$id'";
			return mysqli_query($GLOBALS["conn"], $GLOBALS["sql"]);
		}


		public function get_user_maid_servent_post_details($id){
			$GLOBALS['sql'] ="SELECT * FROM `post` where id_post = '$id'";
			return mysqli_query($GLOBALS["conn"], $GLOBALS["sql"]);
		}


		public function get_servent_list_for_assign($post_id){
			$GLOBALS['sql'] ="SELECT * FROM `maid_servant` where id_maid_servant not In (SELECT maid_servant_id_maid_servent from  assign where post_id_post = '$post_id')";
			return mysqli_query($GLOBALS["conn"], $GLOBALS["sql"]);
		}


		public function add_notification($status, $type, $post_id){
			$GLOBALS['sql'] = "insert into `notification` (status, type, post_id) VALUES ('$status','$type','$post_id');";
			return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
		}



		public function change_party_center_status($post_id, $status){
			$GLOBALS['sql'] = "Update `booking_party_center` set status = '$status' where booking_id = $post_id;";
			return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
		}


		public function get_recent_laundry_list(){    
			$GLOBALS['sql'] ="SELECT  *  FROM laundry where  status = 'pending'" ;
			return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
		}

		public function get_previous_laundry_list(){    
			$GLOBALS['sql'] ="SELECT  *  FROM laundry  where   status != 'pending'" ;

			return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
		}

		public function change_laundry_status($id, $status){
			$GLOBALS['sql'] = "Update `laundry` set status = '$status' where id = $id;";
			return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
		}



	}

	?>