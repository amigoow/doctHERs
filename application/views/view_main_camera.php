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

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  
  <script type="text/javascript" src="<?php echo base_url(); ?>application/assests/scripts/jquery.min.js"></script>
 	<script type="text/javascript" src="<?php echo base_url(); ?>application/assests/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>application/assests/dist/js/ripples.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>application/assests/dist/js/material.min.js"></script>

	<link type="text/css" href="<?php echo base_url(); ?>application/assests/dist/css/roboto.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url(); ?>application/assests/dist/css/material.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url(); ?>application/assests/dist/css/ripples.min.css" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url(); ?>application/assests/dist/css/material-fullpalette.min.css" rel="stylesheet">

<link type="text/css" href="<?php echo base_url(); ?>application/assests/css/hover-min.css" rel="stylesheet">


  <script type="text/javascript" src="<?php echo base_url(); ?>application/assests/scripts/peer.js"></script>

  <script type="text/javascript" src="<?php echo base_url(); ?>application/assests/scripts/ps-webrtc-peerjs-start.js"></script>

  <style>

#step1-error, #step2, #step3 {
  display: none;
}
  </style>

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
<div class="container-fluid" style="  margin-top: 70px;">
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
						<li>
							<a href="#">Link</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i><strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
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

<div class="container-fluid">
	<div class="row-fluid">
		<div class="col-md-12 column">

<div class="col-md-6">
		<video id="their-video" controls autoplay="" class="their-video"></video>
<h2>Your Friend</h2>
</div>
<div class="col-md-6">
	<video id="my-video" muted="true" controls  autoplay="" class="my-video" src=""></video> 
<h2>You</h2>
</div>


	
<div>
	<div id="cntsrvr">
	<img src="<?php echo base_url(); ?>application/assests/images/loader.gif" width="50" /> <em>Please wait while we connect to server. It would take 5 seconds.</em>
</div>
	<div id="step1">
		<div id="step1-error">
			<p>Failed to access the webcam and microphone. Make sure to run this demo on an http server and click allow when asked for permission by the browser.</p>
			<a href="#" id="step1-retry" class="button">Try again</a>
		</div>
	</div>

<div id="step2" style="display: block;">
	<p><span id="my-id" style="color:#eee">.....</span></p>
	<input type="hidden" value="<?php echo $dataid; ?>" placeholder="Call user id..." id="callto-id">
		<a href="#" class="btn btn-success" id="make-call">Accept Call Now</a>
	</p>
</div>

<!--Call in progress-->
<div id="step3">
	<p>Currently in call with <span id="their-id">...</span></p>
	<p><a href="#" id="end-call"></a></p>
</div>
      
</div>



</div>

</div>
</div>
</div>

<script>

	$(document).ready(function(){

function getVideoId(){

var myvid = $("#my-id").text();

$.post("../insertvideoid",{

vid : myvid,
number : "<?php echo $datanumber; ?>"

},function(data){

$("#cntsrvr").hide();
});



}
setTimeout(getVideoId,5000);

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
