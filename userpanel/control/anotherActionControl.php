
<?php

	include ('connection.php');
	include ('../model/user.php');

	
	class AnotherActionController {


		public function userRecentPost(){		//1
	 			$objUser = new User();
	 			$result  = $objUser->get_user_info($_SESSION['user_email']);
					$u_id = "";
		        	while ($row=mysqli_fetch_array($result)){
		        		$u_id = $row['id_user'] ;
		        	}
	 			return $objUser->get_user_recent_post($u_id);
	 	}


	 	public function userPreviousPost(){ 		//1
	 			$objuser = new User();
	 			$result  = $objuser->get_user_info($_SESSION['user_email']);
					$u_id = "";
		        	while ($row=mysqli_fetch_array($result)){
		        		$u_id = $row['id_user'] ;
		        	}
	 			return $objuser->get_user_previous_post($u_id);
	 	}

		function get_user_profile_info($email){
				$objUser = new User();
				return  $objUser->get_user_info($email);
		}

	}


?>
