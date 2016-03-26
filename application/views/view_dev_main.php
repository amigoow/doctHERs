
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BeMy Amigo Developer Zone</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link type="text/css" href="<?php echo base_url(); ?>application/assests/main/css/bootstrap.min.css" rel="stylesheet">


  
        <script src="<?php echo base_url(); ?>application/assests/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>

	<script type="text/javascript" src="<?php echo base_url(); ?>application/assests/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>application/assests/dist/js/ripples.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>application/assests/dist/js/material.min.js"></script>

	<link type="text/css" href="<?php echo base_url(); ?>application/assests/dist/css/roboto.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url(); ?>application/assests/dist/css/material.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url(); ?>application/assests/dist/css/ripples.min.css" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url(); ?>application/assests/dist/css/material-fullpalette.min.css" rel="stylesheet">

   <link type="text/css" href="<?php echo base_url(); ?>application/assests/css/animate.css" rel="stylesheet">
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
	background-color: #009688 !important;

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


	<div class="wrapper">
		<div class="container">
			<div class="row">
					<div style="text-align:center;" >
				<img src="<?php echo base_url(); ?>application/assests/images/logo2.png" width="100" />
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-md-3" style="text-align:center;" >
			
		<h3 style="color:#fff;">Welcome to</h3>
		<h4 style="color:#fff;"> BeMy Amigo</h4>
		<h2 style="color:#fff;">Developer Zone</h2>
		</div>
				<div class="module module-login col-md-9">
					<?php
						if(isset($errmsg))
						{
					?>
					<div class="alert alert-danger">
<?php echo $errmsg; ?>
					</div>
					<?php
}
					?>
					<?php echo form_open('developer/makeanapp')?>
					
						    <div class="panel panel-success col-md-8" >
                    <div class="panel-heading">
                        <div class="panel-title">Create an App</div>

                    </div>  
                     <div style="padding-top:30px" class="panel-body" >
						<div class="module-body col-md-7 col-md-offset-2">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="form-control" type="text" name="name" id="inputEmail" placeholder="Username">
								</div>
							</div> <br />
						
									<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right">Create an App Now</button>
								
								</div>
							</div>
						</div>
						<br /><br />
					</div>
					
						<div class="module-foot">
				
						<a href="steptwo" class="btn btn-success">View Your Access Token Keys</a>
		
						</div>
					<?php echo form_close(); ?>

				</div>
	    <div class="panel panel-success col-md-8" >
                    <div class="panel-heading">
                        <div class="panel-title">Example API's</div>

                    </div>  
                     <div style="padding-top:30px" class="panel-body" >
						<div class="module-body col-md-7">
							<h4>Login API</h4>
				<strong>Login API - GET REQUEST</strong> <br /><br />
						<code>
								getLoginApi/{USERNUMBER}/{USERPASSWORD}/{YOUR APP ACCESS KEY}
						</code>
							<br />
							<br />
							<hr />
									<strong>Login API - POST REQUEST</strong> <br /><br />
						<code>
								PostLoginApi/
						</code> <br /><br />
						* POST Request Arguments 
						<ul>
							<li><code>email</code></li>
							<li><code>password</code></li>
							<li><code>auth</code></li>
							
							
							

						</ul>

						<hr />
						<hr />
						<h4>Users data API</h4>
		<strong>Userdata - GET REQUEST</strong> <br /><br />
						<code>
								getUserDataApi/{USERNUMBER}/{USERPASSWORD}/{YOUR APP ACCESS KEY}
						</code>
							<br />
							<br />
						</div>
						<br /><br />
					</div>
					
						<div class="module-foot">
					
						</div>
					<?php echo form_close(); ?>

				</div>
			</div>
	</div>
	
	</div><!--/.wrapper-->

