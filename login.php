<?php
	include_once 'connect.php';

	$username=$_POST["uemail"];
	$password=$_POST["upassword"];

	$sql = "SELECT userid FROM users WHERE email = '$username' and password = '$password'";
	$result = mysqli_query($con, $sql);

	$count = mysqli_num_rows($result);


	if($count == 1) {
		echo "success";
	}else {
		echo "error";
	}
?>