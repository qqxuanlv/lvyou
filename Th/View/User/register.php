<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title></title>
		<link rel="stylesheet" href="../../css/bootstrap.css" />
		<style>
			label{color:#ccc;}
			.container{margin-top: 60px;}
			.row div{margin-top:10px;margin-bottom: 5px;}
			  .col-xs-offset-1{left:12%}
			div{background: white;}
			</style>
		<script type="text/javascript" src="../../js/vue.min.js" ></script>
		<script type="text/javascript" src="../../js/vue-resource.min.js" ></script>
		<script type="text/javascript" src="../../js/jquery.min.js" ></script>
		<script type="text/javascript" src="../../js/bootstrap.min.js" ></script>
		<script type="text/javascript" src="../../js/jquery.flexslider-min.js" ></script>
	</head>
	<body>
		<nav class="navbar navbar-inverse" style="border: none;border-bottom:1px solid #31B0D5;position: fixed; top:0px;width:100%; z-index: 10;" >
   			<h3 style="position: absolute;left: 6%; top:-1%;"><a href="../Wenlv/list.php" style="color:white"><span class="glyphicon glyphicon-chevron-left"></span></a></h3><center>	<h3 style="color:white ; font-family:黑体">认证申请 </h3></center>	
		</nav> 
		

<div id="content-wrap" style="margin-bottom: 100px;">     

            <div  class="container row">
				
				<div class="row" style="margin-top: 10%;"> 

                <form id="pro" class="col-lg-6 col-lg-offset-3 col-sm-6 col-xs-6 col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-1"  role="form" method="post">
						<h1>个人认证</h1>
						<hr>
					 	
						<div class="input-group">
						<span class="input-group-addon">姓名：</span>
						<input type="text" class="form-control" v-model="uname" placeholder="  Your Name">
					</div><br>
						<div class="input-group">
						<span class="input-group-addon">密码：</span>
						<input type="password" v-model="upass" class="form-control" placeholder=" Your PassWord">
					</div><br>
					
						<div class="input-group">
						<span class="input-group-addon">所属服务：</span>
						<select class="form-control" v-model="fuwu" placeholder="Twitterhandle">
							<option value="">请选择</option>
							<option value="情感">情感</option>
							<option value="数码">数码</option>
							<option value="娱乐">娱乐</option>
							<option value="IT">IT</option>
							<option value="购物">购物</option>
							<option value="生活">生活</option>
							<option value="服务">服务</option>
							<option value="其他">其他</option>
							</select>
					</div><br>
					
			        <div class="input-group">
						<span class="input-group-addon">身份证号：</span>
						<input type="text" v-model="ICard" class="form-control" placeholder=" Your Card">
					</div><br>
							<div class="input-group">
						<span class="input-group-addon">手机号：</span>
						<input type="text" class="form-control" v-model="uphone"  placeholder=" Phone Number">
					</div><br>
					<input @click="sbt" value="申请认证" class="form-control btn btn-primary " />
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
							upass:'',
							fuwu:'',
							ICard:'',
							uphone:''
							},
						methods:{
							
							
							
							sbt:function(){
							var uname = this.uname;
							
							var fuwu = this.fuwu; 
							var ICard = this.ICard;
							var uphone = this.uphone;
							var upass = this.upass;
									if(fuwu!=''&&uname!=''&&upass!=''&&ICard!=''&&uphone!='')
									{
										$.ajax({
											type:"post",
											url:"../../Request/grrz.php",
											data:{uname:uname,fuwu:fuwu,ICard:ICard,uphone:uphone,upass:upass},
											async:true,
											success:function(e){
												alert(e);
												if(e==20)
												{
													alert("用户名重复");
													window.location.href='registe.php';
												}
												if(e==21)
												{
													alert("认证失败");
													window.location.href='registe.php';
												}
												if(e==60)
												{
													alert("认证成功");window.location.href='pro.php';
												}
											}
										});
									
									}
									else
									{
										alert("输入选项不能为空！"); window.location.href='registe.php';
										
									}
							}
							
						}
					});
					
					
				</script>

				
				
            </div>

       
       </div>
			
		

        
<!--
	作者：834337625@qq.com
	时间：2017-04-15
	描述：script
-->


</body>

</html>

