<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Be My Amigo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link type="text/css" href="<?php echo base_url(); ?>application/assests/main/css/bootstrap.min.css" rel="stylesheet">


<link type="text/css" href="<?php echo base_url(); ?>application/assests/css/font-awesome.css" rel="stylesheet">
	
        <script src="<?php echo base_url(); ?>application/assests/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>

	<script type="text/javascript" src="<?php echo base_url(); ?>application/assests/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>application/assests/dist/js/ripples.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>application/assests/dist/js/material.min.js"></script>

	<link type="text/css" href="<?php echo base_url(); ?>application/assests/dist/css/roboto.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url(); ?>application/assests/dist/css/material.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url(); ?>application/assests/dist/css/ripples.min.css" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url(); ?>application/assests/dist/css/material-fullpalette.min.css" rel="stylesheet">

<link type="text/css" href="<?php echo base_url(); ?>application/assests/css/hover-min.css" rel="stylesheet">


<script src="<?php echo base_url(); ?>application/assests/scripts/jquery.timeago.js" type="text/javascript"></script>




<script type="text/javascript">
    $(document).ready(function() {
                // This command is used to initialize some elements and make them work properly
                $.material.init();

            });
</script>
<style>
.profilepic{
border:2px solid #fff;
width:200px;
height:200px;

  margin-left: 50px;

}
.cover{
height: 400px;
margin-top: -20px;
  margin-right: 0px !important; 
}
.name{
  
  font-size: 20px;
  font-weight: bold;

  margin-left: -40px;

}
body{

	overflow-x:hidden;
}
.smallsec{

	background: #fff;
  box-shadow: 0px 2px 10px rgba(0,0,0,0.6);
	   margin-left: 35px;
	   padding:20px;
}
</style>
</head>

<body>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="../feeds">
					 	<img src="<?php echo base_url(); ?>application/assests/images/logo.png" style="  width: 73px;" />
					</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li style="  margin-top: 12px;" >
							<a href="../feeds"><i class="fa fa-newspaper-o"></i> News Feeds</a>
						</li>
						<li style="  margin-top: 12px;">
							<a href="../index"><i class="fa fa-user"></i> Profile</a>
						</li>
						
					</ul>
			
					<ul class="nav navbar-nav navbar-right">
						
					<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i><strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="reports">Reports</a>
								</li>
								<li>
									<a href="settings">Settings</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="logout">Logout</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				
			</nav>
		</div>
	</div>
<script>

	$(document).ready(function(){
$("#outsrch").hide();
$("#serachbar").focus(function(){

$("#outsrch").fadeIn(1000);

});
$("#serachbar").blur(function(){
$("#outsrch").fadeOut(2000);

});


		$("#serachbar").keyup(function(){
			var srtxt = $("#serachbar").val();
if(srtxt){
				$.post("getUserSearch",{

						userinput : srtxt
				},function(data){
$("#outsrch").html(data);

				});

			}else{

			$("#outsrch").html("");	
			}

		});

	});
</script>
