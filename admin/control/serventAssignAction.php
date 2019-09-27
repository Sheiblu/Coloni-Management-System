
<?php

	include ('connection.php'); 
	include ('../model/admin.php');
	//include ('../control/serventAssignAction.php');
              
        $objUser = new Admin();
        $serventId = $_GET['servantId'];
        $postId = $_GET['postId'];


        $result = $objUser->assign_maid_servan($serventId, $postId);


        if( $result == '1') {
        	header("location: ../view/recentPost.php");
        } else {
        	echo $result . '  Fail To assagin ' ;
        }
        

       // header("location: ../view/recentPost.php");
        

         echo $result . '   ' ;

		// if (count($errors) == 0) {
          
		// 	$result = $objUser->register_user( $user_id, $first_name, $last_name, $house_number, $flat_no, $phone, $email, $password);  
  //            array_push($errors, "Loging Successfully");
           
  //       } else {
  //       	array_push($errors, "Not Found");
  //       }



?>
