<?php
	include "db.php";
	
	$username = $_REQUEST['username'];
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	
	$result = mysqli_query($con, "SELECT * FROM `user_sign`(`username`, `email`, `password`) VALUES ('".$username."','".$email."','".$password."',now())");
	$response = array();
	
	if($result)
	{
		$response["Tag_Success"] = 1;
	}
	else
	{
		$response["Tag_Success"] = 0;
	}
	echo json_encode($response);
?>