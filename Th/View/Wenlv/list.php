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

	</head>
	<body>

<?php
		require('../../Db/Db_utils/SqlQuery.php');
		$itemList=json_decode(get());	
		
?>

<!--
	作者：834337625@qq.com
	时间：2017-06-10
	描述：daohang
-->
	
	
	
	<!--
    	作者：834337625@qq.com
    	时间：2017-06-10
    	描述：lunbo
    -->
    <nav class="navbar navbar-inverse" style="position: fixed; top:0px;width:100%; z-index: 10;" >
   			<center>	<h3 style="color:white ; font-family:黑体">文旅路线</h3></center>	
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
		<?php
			foreach($itemList as $item)
			{
				
			?>
		    <div   class="row list">
		   <!--
		    	作者：834337625@qq.com
		    	时间：2017-06-10
		    	描述：left	1
		    -->
						<div class=" col-sm-offset-1 col-xs-offset-1 col-md-offset-1 col-sm-4 col-xs-4 col-md-4">
							<img src='<?php echo $item->img ?>' class="img-thumbnail img-responsive">
						</div>
						
			<!--
		    	作者：834337625@qq.com
		    	时间：2017-06-10
		    	描述：right
		  	-->
			
						
						<div class="col-sm-7 col-xs-7 col-md-7 row">
							<ul>
								<li><h4 class="h_4"><?php echo $item->title?></h4></li>
								<li> <h6 class="h_6"><?php echo $item->title2?></h6></li>
							</ul>
							<div id="xx" class="row">
								<div class="col-sm-5 col-xs-5    col-md-4 col-lg-3" > 
									
									<ul id="xx_left">
										<li><h5 class="h_5">￥:<?php echo $item->price?></h5</li>
										<li><h6 class="h_6">剩余: <?php echo $item->count?></h6></li>
									</ul>
									
								</div>
								
								<div id="btn_dj" class="col-sm-6  col-xs-6  col-md-6">
									<button id="xx_right" class="btn btn-default" onclick="JavaScirpt:window.location.href='list_xq.php?key=<?php echo $item->key?>'">查看详情</button>
								</div>
							
								</div>	
							</div>
						</div>
		
			<?php }?>



	
</div>
	<style>
	
		<?php
			require("../Model/footer.php");
		?>
	</body>
</html>
