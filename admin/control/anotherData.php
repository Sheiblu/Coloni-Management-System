<?php 
	
	 include'connection.php';
	 require_once ('../model/user.php');
	 require_once ('../model/admin.php');

	 class AnotherData {


	 	public function userList(){		//1
	 			$objuser = new User();
	 			return $objuser->get_user_list();
	 	}

	 	public function userRecentPost(){		//1
	 			$objuser = new User();
	 			return $objuser->get_user_recent_post();
	 	}


	 	public function userPreviousPost(){ 		//1
	 			$objuser = new User();
	 			return $objuser->get_user_previous_post();
	 	}

	 	public function maidServantList(){		//1
	 			$objuser = new Admin();
	 			return $objuser->get_maid_servan_list();
	 	}

	 	public function maidServantDetails($id){		//1
	 			$objuser = new Admin();
	 			return $objuser->get_maid_servan_details($id);
	 	}

	 	public function userInfo($id){
	 			$objuser = new User();
	 			return $objuser->get_user_info($id);

	 	}

	 	public function action_party_enter($id, $status){
	 			$objuser = new admin();
	 			$objuser->change_party_center_status($id, $status);
	 			return $objuser->add_notification($status, "partyCenter", $id);

	 	}

	 	public function action_laundry_enter($id, $status){
	 			$objuser = new admin();
	 			$objuser->change_laundry_status($id, $status);
	 			return $objuser->add_notification($status, "Laundry Request", $id);

	 	}


	 }


 ?>