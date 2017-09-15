<?php
	require('../View/Model/User.php');

	
	require_once('../Db/Db_utils/SqlQuery.php');

	
	function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
	}


	
	
	
	$user = new User();
	$user->uname=test_input($_POST['uname']);

	$user->upass=test_input($_POST['upass']);
	if(login($user)){
			session_set_cookie_params(3600*24); 
			$_SESSION['user']=$user->uname;
	
		
			echo 60;
		
	}
	else
	{
		echo 20;
	}
	
?>