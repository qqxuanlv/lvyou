<html>
<head>	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title></title>
		<link rel="stylesheet" href="../../css/bootstrap.css" />

		<style>
			div{background: white;}
			label{color:#ccc;}
			.container{margin-top: 60px;}
			.row div{margin-top:10px;margin-bottom: 5px;}
			.col-xs-offset-1{left:12%}
			.vertical-offset-100{ padding-top:100px;}
			
			
 
		
			</style>
		<script type="text/javascript" src="../../js/vue.min.js" ></script>
		<script type="text/javascript" src="../../js/vue-resource.min.js" ></script>
		<script type="text/javascript" src="../../js/jquery.min.js" ></script>
		<script type="text/javascript" src="../../js/bootstrap.min.js" ></script>
		<script type="text/javascript" src="../../js/jquery.flexslider-min.js" ></script>
	
</head>
<body>
	<nav class="navbar navbar-inverse" style="border: none;border-bottom:1px solid #31B0D5;position: fixed; top:0px;width:100%; z-index: 10;" >
   			<h3 style="position: absolute;left: 6%; top:-1%;"><a href="list.php" style="color:white"><span class="glyphicon glyphicon-chevron-left"></span></a></h3><center>	<h3 style="color:white ; font-family:黑体">用户登录 </h3></center>	
		</nav> 
<!-- This is a very simple parallax effect achieved by simple CSS 3 multiple backgrounds, made by http://twitter.com/msurguy -->
<div class="container">
    <div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Please sign in</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" id="form_login" >
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Usename" v-model="uname" name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" v-model="upass" name="password" type="password" value="">
			    		</div>
			    		<div class="checkbox">
			    	    	
			    	    </div>
			    		<input @click="stb" class="btn btn-lg btn-success btn-block" type="button" value="Login">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
<script>



	new Vue({
		el:'#form_login',
		data:{
			uname:'',
			upass:''
		},
		methods:{
		
			stb:function(e){
					var that = this;
				if(this.uname!=''&&this.upass!='')
				{
					$.ajax({
						type:"post",
						url:"../../Request/login.php",
						async:true,
						data:{'uname' : that.uname,  'upass' : that.upass},
						success:function(e)
						{
								if(e==60)
								{
									
									window.location.href='pro.php';
								}
								else
								{
									alert('登录失败');
									window.location.href='login.php';
								}
						}
					});
				//	that.$http.post('../../Request/login.php', {   'uname' : that.uname,  'upass' : that.upass }, {emulateJSON : true}).then(function(e){
				
					/*
					 
					 * 
					 * 
					 * 
					 * */
					//});
                 
                
            
				}
			}
		}
		
		
		
	});







 






</script>
</body>
</html>