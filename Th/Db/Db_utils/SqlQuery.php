<?php

 //打开数据库
 function con (){
 	$con=mysqli_connect("localhost", "root", "8954036aa", "travel","3306");
	//$con=mysqli_connect("119.28.75.185", "root", "8954036abc!@#..", "travel","3306");
 	return $con;
 }
 
 //获取路线信息
 function get(){
 	$con = con();
 	$query 	= "Select * from luxian";
 	$result = mysqli_query($con, $query);
	$jarr = array();
			while($rows=mysqli_fetch_array($result))
			{
				array_push($jarr,$rows);
			}
	close($con);
	return json_encode($jarr);
 }

 //获取旅游路线详细
 function getMsg($key)
{
	$con = con();
	$query = "Select * from luxian_xiangxi where key='".$key."';";
	$result = mysqli_query($con, $query);

	if(empty($result))
	{
		return null;
	}
	else
	{
		$jarr = array();
		while($rows=mysqli_fetch_array($result))
		{
			array_push($jarr,$rows);
		}
		close($con);
		return json_encode($jarr);
	}
}

 //关闭数据库
 function close($con){
 	mysqli_close($con);
 	
 }

//验证是否重名
 function user($user){
 	$con = con();
	$query="select * from user where uname='".$user->uname."';";
	 mysqli_query($con, $query);
	$count =mysqli_affected_rows($con);
	
	close($con);
	
	if($count>0)
	{
		return false;
	}
	else
	{
		return true;
	}
	
} 

//验证账号密码
 function login($user){
 	$con = con();
	$query="select * from user where uname='".$user->uname."' and upass='".$user->upass."';";
	 mysqli_query($con, $query);
	$count =mysqli_affected_rows($con);
	
	close($con);
	
	if($count==0)
	{
		return false;
	}
	else
	{
		return true;
	}
	
} 

//添加个人认证

function proving($user){
	$con = con();
	mysqli_query($con,"set character set 'utf8'");//读库 
	mysqli_query($con,"set names 'utf8'");//写库 
	$query="insert into user(uname,phone,ICard,hangye) values('".$user->uname."','".$user->uphone."','".$user->ICard."','".$user->fuwu."','".$user->upass."');";
	$count = mysqli_query($con, $query);

	if($count)
	{
		return true;
	}
	else
	{
		return false;
	}
	close($con);
}





?>