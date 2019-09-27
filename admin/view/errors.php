


<!DOCTYPE html>
<html lang="en">
<?php

if (isset($_SESSION['admin_email'])) {
?>
<head>
<title></title>

 	<style>
	

	
	</style>
</head>
<body>
<?php if(count($errors)>0):  ?>

<div class="error">
<?php foreach ($errors as $error):   ?>

<p><?php  echo $error; ?></p>



<?php endforeach ?>

</div>
<?php endif ?>
</body></html>

<?php } else {
  header("location: ../view/login.php");
} ?>