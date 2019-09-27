
<?php

	include ('connection.php');
	include ('../model/admin.php');

	

	  $errors = array();
    	if (isset($_POST['reg_user'])) {

    	$id = mysqli_real_escape_string($conn, $_POST['id']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$catagory= mysqli_real_escape_string($conn, $_POST['catagory']);
        $comment = mysqli_real_escape_string($conn, $_POST['comment']);

   //      if (empty($id) && (empty($email)) { 
		 // 		array_push($errors, "Please, input id / email or both"); 
		 // }

        if (empty($id)) {
				array_push($errors, "Require is Id"); 
	  	}

	  	if (empty($email)) {
				array_push($errors, "comment is email"); 
	  	}

		 if(strcmp("catagory","$catagory") == 0) { 
				array_push($errors, " Catagory Required ".strcmp("Catagory","$catagory"));
			}  

  		if (empty($comment)) {
				array_push($errors, "comment is required"); 
	  	}   

// Call 
	  	$objAdmin = new Admin();
        

		if (count($errors) == 0) { 

			$result = $objAdmin->check($id , $email);
			$resultcheck = mysqli_num_rows($result);

			if ($resultcheck > 0) {

			 $result = $objAdmin->create_report($email,$catagory,$comment);  
             array_push($errors, "Report Submit");
        	
			} else {
					array_push($errors, "Email & id not same "); 
			}

			}  

        }



?>
