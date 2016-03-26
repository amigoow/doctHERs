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


<link href="<?php echo base_url(); ?>application/assests/css/site.css" rel="stylesheet" type="text/css" />
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

<script src="<?php echo base_url(); ?>application/assests/scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>


<script src="<?php echo base_url(); ?>application/assests/scripts/jquery.form.min.js" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>application/assests/scripts/notify.min.js" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>application/assests/scripts/jquery.timeago.js" type="text/javascript"></script>


<script src="<?php echo base_url(); ?>application/assests/scripts/wow.min.js" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>application/assests/scripts/jquery.validate.min.js" type="text/javascript"></script>


<link type="text/css" href="<?php echo base_url(); ?>application/assests/css/animate.css" rel="stylesheet">

<script>
 new WOW().init();
</script>

<script src="<?php echo base_url(); ?>application/assests/scripts/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url(); ?>application/assests/scripts/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>

<link rel="stylesheet" href="<?php echo base_url(); ?>application/assests/css/validationEngine.jquery.css" type="text/css"/>

<script type="text/javascript">

    $(document).ready(function() {
                // This command is used to initialize some elements and make them work properly
                $.material.init();

            });
</script>
<style>
#notify{
  background: red;
  /* padding: 2px; */
  border-radius: 50%;
  width: 20px;
  height: 20px;
  display: inline-block;
  padding-left: 6px;
  padding-top: 1px;

}
#noticontainer::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}

#noticontainer::-webkit-scrollbar {
  width: 0.7em;
}
#noticontainer::-webkit-scrollbar-thumb {
  background-color: #111;
  outline: 1px solid slategrey;
}

.profilepic{
border:2px solid #fff;
width:200px;
height:200px;

  margin-left: 50px;

}
.cover{
height: 320px;
margin-top: -20px;
  margin-right: 0px !important;
}
.name{

  font-size: 20px;
  font-weight: bold;

  margin-left: -40px;

}
body {
    overflow-x: hidden;
    background-color: #fff;
}
.smallsec{

	background: #fff;
  box-shadow: 0px 2px 10px rgba(0,0,0,0.6);

	   padding:20px;
}
</style>
</head>

<body>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default navbar-fixed-top"  role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="feeds">
					 	<img src="<?php echo base_url(); ?>application/assests/images/logo.png" style="  width: 73px;" />
					</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li style="  margin-top: 12px;" >
							<a href="feeds"><i class="fa fa-newspaper-o"></i> News Feeds</a>
						</li>
						<li style="  margin-top: 12px;">
							<a href="index"><i class="fa fa-user"></i> Profile</a>
						</li>

					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" autocomplete="off" id="serachbar" style="width:300px;" class="form-control"><br />
							<div  id="outsrch" style=" width: 350px;
  height: 300px;
  background: rgba(255,255,255,0.9);
  color: #111;
  position: absolute;
  z-index: 99;
  border: 2px solid #eee;

  ">

							</div>
						</div> <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
					</form>
					<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
							 <a  id="nthref" href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe" style="  font-size: 25px;"></i><span id="notify"></span></a>
							<ul class="dropdown-menu" id="noticontainer" style="  width: 360px;
  padding-top: 20px;
  overflow-y: scroll;
  height: 500px;
  overflow-x: hidden;">

							</ul>
						</li>
						<li>
						</li>
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


$("#notify").hide();
$.post("getNotifyNumbers",{},function(data){
//	alert(data);

if(data > 0){

	$("#notify").show();
	$("#notify").html(data);
}

});

function pollnotify()
{
$.post("getNotifyNumbers",{},function(data){
//	alert(data);

if(data > 0){

$("#notcont").notify(
  "Hey Amigo You Got Notification",
  { position:"bottom center",
className: 'info'
   }

);

//alert(data);
	$("#notify").show();
	$("#notify").html(data);
	$.post("getAllNotifications",{},function(data){

$("#noticontainer").html(data);

});

}

});

}

setInterval(pollnotify,"3000");

$.post("getAllNotifications",{},function(data){

$("#noticontainer").html(data);

});


$("#nthref").click(function(){


$.post("clearnotify",{},function(data){
$("#notify").hide();

});


});

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
