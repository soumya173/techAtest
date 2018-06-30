<?php
class query
{	
	var $con;
	public function __construct()
	{
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$dbname = "techatest";
		$this->con = mysqli_connect($hostname, $username, $password, $dbname);
		// mysql_select_db('techatest', $con);		
	}
	
	public function create_user($password, $cnfpassword, $fname, $lname, $mobile, $email)
	{
		$sql = "INSERT INTO users(userid, password, fname, lname, mobile, email) VALUES('', '$password', '$fname', '$lname', '$mobile', '$email')";
		echo "<br>$sql<br>";
		return mysqli_query($this->con, $sql);
	}
}
?>