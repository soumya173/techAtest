<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "techatest";
$con = mysqli_connect($hostname, $username, $password, $dbname);
/*
class query
{	
	var $con;
	public function __construct()
	{
		
		// mysql_select_db('techatest', $con);		
	}
	
	public function create_user($password, $cnfpassword, $fname, $lname, $mobile, $email)
	{
		$sql = "INSERT INTO users(userid, password, fname, lname, mobile, email) VALUES('', '$password', '$fname', '$lname', '$mobile', '$email')";
		
		return mysqli_query($this->con, $sql);
	}
	*/

?>