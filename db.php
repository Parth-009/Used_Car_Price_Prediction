<?php

$local="localhost";
	$user="root";
	$psw="";
	$db="sgp_demo";
	
	$con=mysqli_connect($local, $user, $psw);
	mysqli_select_db($con, $db);

    if($con){
        echo"Connection success";
    }
    else{
        echo"Connection not success!!";
        
    }
?>