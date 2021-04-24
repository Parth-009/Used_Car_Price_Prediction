<?php

include("db.php");	

    $user = $_REQUEST['Username'];
    $Password = $_REQUEST['Password'];
   	

	$R =mysqli_query($con, "select * from `user_master` where username='".$user."' and password='".$Password."'");
	$response = array();			

		if($R)
		{	
			while($p = mysqli_fetch_array($R)) 
			{
				$response['image'][] = $p;
			}
			$response['success'] = 1;
			
			$response['message'] = "Login successfull";
			header('Location: main.html');			
		}
		else
		{			
			$response['success'] = 0;
			$response['qry'] = $query;
			$response['message'] = "Cannot Login successfull";
		}

// redirect to success page
 
 echo json_encode($response);
 
?>