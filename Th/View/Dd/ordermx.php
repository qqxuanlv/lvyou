<?php
	if(!isset($_SESSION['user']))
	{
		echo '<script>alert("请登录！");window.location.href="../User/login.php";';
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title></title>
		<link rel="stylesheet" href="../../css/bootstrap.css" />
		<link rel="stylesheet" href="../../css/list.css" />	
		<link rel="stylesheet" href="../../css/dd.css" />
		<script type="text/javascript" src="../../js/vue.min.js" ></script>
		<script type="text/javascript" src="../../js/vue-resource.min.js" ></script>
		<script type="text/javascript" src="../../js/jquery.min.js" ></script>
		<script type="text/javascript" src="../../js/bootstrap.min.js" ></script>
		<script type="text/javascript" src="../../js/jquery.flexslider-min.js" ></script>
		
	</head>
	<body>
		
		<nav class="navbar navbar-inverse" style="border: none;border-bottom:1px solid #ccc;position: fixed; top:0px;width:100%; z-index: 10;" >
   			<h4 style="position: absolute;left: 6%; top:20%;">
   				<a href="../Wenlv/list.php" style="color:white">
   					<span class="glyphicon glyphicon-chevron-left"></span>
   				</a>
   			</h4>
   			<center>	<h3 style="color:white ; font-family:黑体">我的订单 </h3></center>	
		</nav> 

	<div class="box">
		<div class="box_left">
			<ui class="btn_top_all">
					<li class="row ">
					<div class="col-md-offset-1 col-xs-4 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4">订单编号</div>
					<div class="col-md-offset-1 col-xs-6 col-xs-offset-1 col-sm-6 col-sm-offset-1 col-md-6" >
							<a href="#" class="">￥1140.00</a>
					</div>
				</li>
				<li class="row ">
					<div class="col-md-offset-1 col-xs-4 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4">产品名称</div>
					<div class="col-md-offset-1 col-xs-6 col-xs-offset-1 col-sm-6 col-sm-offset-1 col-md-6" >
						<a href="#" class="">超值豪华苏州涵园亲子游团购套餐2天1晚（周末游）</a>
					</div>
				</li>
				
				<li class="row ">
					<div class="col-md-offset-1 col-xs-4 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4">出行地点</div>
					<div class="col-md-offset-1 col-xs-6 col-xs-offset-1 col-sm-6 col-sm-offset-1 col-md-6" >
							<a href="#" class="">上海</a>
					</div>
				</li>
				<li class="row ">
					<div class="col-md-offset-1 col-xs-4 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4">出游人数</div>
					<div class="col-md-offset-1 col-xs-6 col-xs-offset-1 col-sm-6 col-sm-offset-1 col-md-6" >
							<a href="#" class="">1人</a>
					</div>
				</li>
			</ui>
				<div class="line_center"></div>
			<ui class="btn_bottom_all">
				<li class="row ">
					<div class="col-md-offset-1 col-xs-4 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4">出游金额</div>
					<div class="col-md-offset-1 col-xs-6 col-xs-offset-1 col-sm-6 col-sm-offset-1 col-md-6" >
							<a href="#" class="">￥1140.00</a>
					</div>
				</li>
				<li class="row ">
					<div class="col-md-offset-1 col-xs-4 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4">订单时间</div>
					<div class="col-md-offset-1 col-xs-6 col-xs-offset-1 col-sm-6 col-sm-offset-1 col-md-6" >
							<a href="#" class="">￥1140.00</a>
					</div>
				</li>
					<li class="row ">
			
					</div>
				</li>
			
			</ui>
		</div>

	
	<?php
		require('../Model/footer.php');
		?>	

		

		
	</body>
</html>

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	</body>
</html>
