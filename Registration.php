<?php
	include "db.php";
	
	$name = "123";//$_REQUEST['Username'];
	$emailid = "abc@gmail.com";//$_REQUEST['Email'];
	$phone = "1234567894";//$_REQUEST['number'];
	$password = "12345678";//$_REQUEST['Password'];
	

	$result = mysqli_query($con, "INSERT INTO `user_master`(`username`, `password`, `user_email`, `contact`)
     VALUES ('".$name."','".$password."','".$emailid."','".$phone."')");

	$response = array();
	
	if($result)
	{
		$response["success"] = 1;
		header('Location: main.html');
	}
	else
	{
		$response["unsuccess"] = 0;
	}
	
?>