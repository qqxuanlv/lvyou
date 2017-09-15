<?php
	 require('../Model/User.php');
	 use \Model\User;
	 require_once('../Db/Db_utils/SqlQuery.php');
	 if(!empty($_POST['uname']))
	 {
	 	
	 }else
	 {
	 		echo '
	 		<meta charset="utf8">未设置';
	 }
	
	function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
	}


	
	
	
	$user = new User();
	$user->uname=test_input($_POST['uname']);
	$user->fuwu=test_input($_POST['fuwu']);
	$user->ICard=test_input($_POST['ICard']);
	$user->uphone=test_input($_POST['uphone']);
	$user->upass=test_input($_POST['upass']);
	if(user($user)){
		
		if(proving($user)){
		
			echo 60;
		}
		else
		{
			echo 21;
		}
	}
	else
	{
		echo 20;
	}
	
	/*
	 * 	状态码    
	 * 	20     用户名重复
	 * 	60     认证成功
	 * 
	 * 
	 */ 
	
	
	
?>