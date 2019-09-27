
<?php

	include ('connection.php');
	include ('../model/admin.php');

	

	  $errors = array();
    	if (isset($_POST['made_info_update'])) {

		$maidservant_id = mysqli_real_escape_string($conn, $_POST['maid_servant_id']);
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$address = mysqli_real_escape_string($conn, $_POST['address']);
		$phone = mysqli_real_escape_string($conn, $_POST['phone_number']);

	    

		if (empty($maidservant_id)) { 
				array_push($errors, "Id is required");
				 echo "1Fail";
			}
		if (empty($name)) {
				array_push($errors, "Name is required");
				 echo "2Fail";
			}
		if (empty($address)) { 
				array_push($errors, "Address  is required");
				 echo "3Fail";
		}
		if (empty($phone)) { 
				array_push($errors, "Mobile number is required");
				 echo "4Fail";
		}




// Call 
	  	$objUser = new Admin();


		if (count($errors) == 0) {
          
			$result = $objUser->update_maid_servent( $maidservant_id, $name, $address, $phone);  
             array_push($errors, "Loging Successfully".$result);
             echo "Successful";

            // echo $result;

            header("Location: ../view/_maid servant.php");
             
			}  

        } else {
        	 echo "Fail";
        	array_push($errors, "Not Found");
        }



?>
