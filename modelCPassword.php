<?php  
 require('modelConnect.php');

if(isset($_POST['Submit'])) {
		//if (isset($_POST['email']) and isset($_POST['password'])){
	
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$timestamp = date('Y-m-d H:i:s');
		$last_updated = $timestamp;
		$last_updated = mysqli_real_escape_string($connection, $last_updated);

		$email = mysqli_real_escape_string($connection, $email);
        $password = mysqli_real_escape_string($connection, $password);

		$query = "UPDATE logininfo SET password='$password' WHERE email ='$email'";

		mysqli_query($connection, $query) or die(mysqli_error($connection));

		header("location: ../index.php?flag=passwordIsChanged");

}
?>