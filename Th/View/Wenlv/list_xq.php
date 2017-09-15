
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title></title>
		<link rel="stylesheet" href="../../css/bootstrap.css" />
		<link rel="stylesheet" href="../../css/list.css" />	
		<script type="text/javascript" src="../../js/vue.min.js" ></script>
		<script type="text/javascript" src="../../js/vue-resource.min.js" ></script>
		<script type="text/javascript" src="../../js/jquery.min.js" ></script>
		<script type="text/javascript" src="../../js/bootstrap.min.js" ></script>
		<script type="text/javascript" src="../../js/jquery.flexslider-min.js" ></script>
		<style>
			.container{margin-bottom:20px ; border-bottom: 6px #eee solid;}
			#_bottom1 a label{ margin-left:5px; margin-right: 5px;width:60px;}
		
		</style>
	</head>
	<body>
<?php
	require('../../Db/Db_utils/SqlQuery.php');
	if(!empty($_GET['key']))
	{
	
		$itemList=json_decode(getMsg($_GET['key']));	
		
	
?>
<nav class="navbar navbar-inverse" style="border: none;position: fixed; top:0px;width:100%; z-index: 10;" >
   			<h3 style="position: absolute;left: 6%; top:-1%;"><a href="list.php" style="color:white"><span class="glyphicon glyphicon-chevron-left"></span></a></h3><center>	<h3 style="color:white ; font-family:黑体">旅游明细 </h3></center>	
</nav> 
<div class="jq22-container">

		<div class="flexslider">
			<ul class="slides">
				<li style="background:url(../../images/img1.png) 50% 0 no-repeat;"></li>
				<li style="background:url(../../images/img2.png) 50% 0 no-repeat;"></li>
				<li style="background:url(../../images/img3.png) 50% 0 no-repeat;"></li>
				<li style="background:url(../../images/img4.png) 50% 0 no-repeat;"></li>
				<li style="background:url(../../images/img5.png) 50% 0 no-repeat;"></li>
				<li style="background:url(../../images/img4.png) 50% 0 no-repeat;"></li>
				<li style="background:url(../../images/img5.png) 50% 0 no-repeat;"></li>
			</ul>
		</div>
		
	</div>
	

	<script type="text/javascript">
		$(document).ready(function(){
			$('.flexslider').flexslider({
				directionNav: true,
				pauseOnAction: false,
				slideshowSpeed: 3000
			});
		});
	</script>
	<div class="container">
		<div><h3>超值豪华苏州韩元亲子游团购套餐2天1晚（周末游）</h3></div>
		<div><h4 class="h_6">豪华上午有+豪华游艇15分钟+湖畔烧烤+儿童花园健康早餐+户外生态儿童乐园</h4></div>
		<div class="row">
			<div class="col-lg-offset-2 col-md-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2  col-md-6 col-xs-6 col-sm-6 col-lg-6"><h5 class="h_5">￥：11400</h5></div>
			<div class=" col-md-4 col-xs-4 col-sm-4 col-lg-4"><h5>剩余：2</h5></div>
		</div>
	</div>
	<div class="container">
		<div class="list"><h5 class="h_4">产品介绍</h5></div>
		<div><h5>豪华上午有+豪华游艇15分钟+湖畔烧烤+儿童花园健康早餐+户外生态儿童乐园</h5></div>
		<div class="container">
			<div class="row">
				<img src="../../images/img1.png" class="img_o col-md-8  col-xs-8 col-sm-8 col-xs-offset-2 col-md-offset-2 col-sm-offset-2">
					<img src="../../images/img1.png" class="img_o col-md-8  col-xs-8 col-sm-8 col-xs-offset-2 col-md-offset-2 col-sm-offset-2">
						<img src="../../images/img1.png" class="img_o col-md-8  col-xs-8 col-sm-8 col-xs-offset-2 col-md-offset-2 col-sm-offset-2">
							<img src="../../images/img1.png" class="img_o col-md-8  col-xs-8 col-sm-8 col-xs-offset-2 col-md-offset-2 col-sm-offset-2">
					
			</div>
		</div>
	</div>
	
	<!--
    	作者：834337625@qq.com
    	时间：2017-06-13
    	描述：底部立即下单
    -->
    
	<nav class="navbar navbar-inverse" style="position: fixed; bottom:-30px;width:100%; z-index: 8;" >
   			<div id="_bottom1" class="row">
   				<a class=" col-md-3 col-sm-3 col-lg-3 col-xs-3 col-lg-offset-1 col-md-offset-1 col-xs-offset-1 col-sm-offset-1">	出游人数</a>
   				<a class="col-md-3  col-sm-4 col-lg-4 col-xs-4">
   					<span class="glyphicon glyphicon-minus-sign" @click="minus" ></span>
   							<label v-model="cs.count">{{cs.count}}&nbsp;&nbsp;人</label>
   					<span class="glyphicon glyphicon-plus-sign" @click="add"></span>
   				</a>
   			
   				<a @click="proving" id="xd" class=" col-md-3  col-sm-3 col-lg-3 col-xs-3" >立即下单</a>
   			</div>
	</nav>
	
	<script>
	 var r_count = new Vue({
			
			el:"#_bottom1",
			data:{
					cs:{
							count: 1,
							_key:'<?php echo $_GET['key'] ?>'
					}
			},
			methods:{
				//订单人数减
				minus:function(e)
				{
					if(this.cs.count!=1)
					{
						this.cs.count-=1;
					}
					
				},
				//订单人数加
				add:function(e)
				{
						this.cs.count+=1;
				},
				//用户下单验证
				proving:function(e){
					var p ={};
					var count = this.cs.count;
					var _key  = this.cs._key;
			 		$.ajax({
			 			type:"post",
			 			url:"../../Request/proving.php",
			 			data:{count:count,_key:_key},
			 			async:true,
			 			success:function(res)
			 			{
			 				if(res)
			 				{	
			 					//订单页面
			 					window.location.href="../Dd/order.php";
			 				}
			 				else
			 				{
			 					//登录页面
			 					window.location.href='../User/login.php';
			 				}
			 			}
			 		});
				}
			
			
			
		}});
	
	
	
	</script>
	
<?php
	
}
	
?>

	</body>
</html>
