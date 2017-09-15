<?php

	if(!isset($_SESSION['user']))
	{
		echo '<script>alert("请登录！");window.location.href="login.php";</script>';
	}
	else{

	
		$user=$_SESSION['user'];
	

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../../css/bootstrap.css" />
		<link rel="stylesheet" href="../../css/list.css" />	
		<script type="text/javascript" src="../../js/vue.min.js" ></script>
		<script type="text/javascript" src="../../js/vue-resource.min.js" ></script>
		<script type="text/javascript" src="../../js/jquery.min.js" ></script>
		<script type="text/javascript" src="../../js/bootstrap.min.js" ></script>
		<script type="text/javascript" src="../../js/jquery.flexslider-min.js" ></script>
		<style>
			label{color:#ccc}
			.container{margin-top: 60px;}
			.row div{margin-top:10px;margin-bottom: 5px;}
			.col-xs-offset-1{left:12%}
		
			 
			</style>
		<script type="text/javascript" src="../../js/vue.min.js" ></script>
		<script type="text/javascript" src="../../js/vue-resource.min.js" ></script>
		<script type="text/javascript" src="../../js/jquery.min.js" ></script>
		<script type="text/javascript" src="../../js/bootstrap.min.js" ></script>
		<script type="text/javascript" src="../../js/jquery.flexslider-min.js" ></script>
	</head>
	<body>
		<nav class="navbar navbar-inverse" style="border: none;border-bottom:1px solid #31B0D5;position: fixed; top:0px;width:100%; z-index: 10;" >
   			<h3 style="position: absolute;left: 6%; top:-1%;"><a href="../Wenlv/list.php" style="color:white"><span class="glyphicon glyphicon-chevron-left"></span></a></h3><center>	<h3 style="color:white ; font-family:黑体">用户认证</h3></center>	
		</nav> 


        <div id="content-wrap" style="margin-bottom: 100px;">     
			
            <div  class="container row">
				
				<div class="row" style="margin-top: 10%;"> 

                <form id="pro" class="col-lg-6 col-lg-offset-3 col-sm-6 col-xs-6 col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-1"  role="form" method="post">
						<h1>个人认证成功</h1>
						<hr>
					 	
						<div class="input-group">
						<span class="input-group-addon">姓名：</span>
							<span class="form-control"><?php echo $user?></span>
					</div><br>
					<br>
					<input @click="sbt" value="退出账号" class="form-control btn btn-primary " />
					<div></div>
					<br><label>客服电话：4008-215-116</label><br>
					<label>Copyright@2017&nbsp;&nbsp;</label>
					<label>长春九州盛行科技有限公司</label><br>
					
                    </form> 
				<script>
					new Vue({
						el: "#pro",
						data:{
							uname:'',
							fuwu:'',
							ICard:'',
							uphone:''
							},
						methods:{
							
							
							sbt:function(){
								$.ajax({
									type:"get",
									url:"../../Request/destory.php",
									data:{name:''},
									async:true,
									success:function(e){
										alert('退出成功');
									window.location.href='../Wenlv/list.php';
									}
								});
							
						}
						}
					});
					
					
				</script>

				
				
            </div>

       
       </div>
			
	<?php
		require("../Model/footer.php");
	?>	
<!--
	作者：834337625@qq.com
	时间：2017-04-15
	描述：script
-->


</body>
<?php
 }
?>
</html>

