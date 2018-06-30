<?php
	include_once 'connect.php';

	$password = $_POST['spassword'];
	$fname = $_POST['sfname'];
	$lname = $_POST['slname'];
	$email = $_POST['semail'];
	$mobile = $_POST['smobile'];


	$sql = "INSERT INTO users(userid, password, fname, lname, mobile, email) VALUES('', '$password', '$fname', '$lname', '$mobile', '$email')";

	if( mysqli_query($con, $sql) ){
		echo "success";
	}else{
		echo "error";
	}
?>