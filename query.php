<?php
class query
{
	public function __construct()
	{
		$con=mysql_connect('localhost', 'root', '');
		mysql_select_db('techatest', $con);
		
	}
	public function users($password, $cnfpassword, $fname, $lname, $mobile, $email)
	{
		mysql_query("INSERT INTO users VALUES('', '$password', '$cnfpassword', '$fname', '$lname', '$mobile', '$email')");
		return $data;
	}
	
?>