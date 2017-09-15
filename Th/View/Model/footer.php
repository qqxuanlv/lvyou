<?php
	
	echo '
	<style>
		a{ text-decoration: none;}
	</style>
		<nav class="navbar navbar-inverse" style="position: fixed; bottom:-30px;width:100%; z-index: 8;" >
   			<div id="_bottom" class="row">
   				<a href="../Wenlv/list.php" class=" col-md-3 col-sm-3 col-lg-3 col-xs-3">	<span class="glyphicon glyphicon glyphicon-flag"></span>文旅</a>
   				
   				<a  class=" col-md-3 col-sm-3 col-lg-3 col-xs-3"><span class="glyphicon glyphicon-adjust"></span>力荐</a>
   				<a @click="dd" class="col-md-3 col-sm-3 col-lg-3 col-xs-3"><span class="glyphicon glyphicon-shopping-cart"></span>订单</a>
   				<a @click="my" class=" col-md-3 col-sm-3 col-lg-3 col-xs-3"><span class="glyphicon glyphicon-menu-hamburger"></span>我的</a>
   			</div>
	</nav>	
	
		<script>
			new Vue({
				el:"#_bottom",
				methods:{
					dd:function(e)
					{
						$.ajax({
			 			type:"post",
			 			url:"../../Request/proving.php",
			 			data:{name:"www"},
			 			async:true,
			 			success:function(res)
			 			{
			 				
			 	
			 				if(res)
			 				{	
			 					//订单页面
			 					window.location.href="../Dd/ordermx.php";
			 				}
			 				else
			 				{
			 					//个人页面
			 					window.location.href="../User/login.php";
			 				}
			 			}
			 		});
					},
					my:function(e)
					{
						$.ajax({
			 			type:"post",
			 			url:"../../Request/proving.php",
			 			data:{name:"www"},
			 			async:true,
			 			success:function(res)
			 			{
			 				
			 	
			 				if(res)
			 				{	
			 					//订单页面
			 						window.location.href="../User/pro.php";
			 				}
			 				else
			 				{
			 					//登录页面
			 					window.location.href="../User/login.php";
			 				}
			 			}
			 		});
					}
					
				}
			});
			
		</script>';
	?>