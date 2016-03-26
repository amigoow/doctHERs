
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>doctHers Login</title>
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
	background-color: #fff !important;

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
					<div style="text-align:center;" class="animated zoomIn">
				<img src="<?php echo base_url(); ?>application/assests/images/logo2.png" />
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-md-3 animated bounceInDown" style="text-align:center;" >
	</div>
				<div class="module module-login col-md-9  animated bounceInRight">
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
					<?php echo form_open('home/getbussinessSignup')?>

						    <div class="panel panel-success col-md-8" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign Up</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>
                     <div style="padding-top:30px" class="panel-body" >
					<?php
						if(isset($success))
						{
								echo $success;

						}
						?>

						<div class="module-body col-md-7 col-md-offset-2">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="form-control" type="text" required name="name" id="inputEmail" placeholder="Patient Account Name">
								</div>
							</div> <br />
											<div class="control-group">
								<div class="controls row-fluid">
									<input class="form-control" type="email" required name="email" id="inputEmail" placeholder="Email">
								</div>
							</div> <br />
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="form-control" type="password" required name="password" id="inputPassword" placeholder="Password">
								</div>
							</div> <br />
									 <br />
									<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right">Signup</button>

								</div>
							</div>
						</div>
					</div>
						<div class="module-foot">

						</div>
					<?php echo form_close(); ?>

				</div>

			</div>

		</div>
		<div class="row">
		<div style="text-align:center;">
		<a href="login" class="btn btn-success">Login to doctor's account</a>
		<br /><br /><br />
					<img src="<?php echo base_url(); ?>application/assests/images/download.jpg" width="200"/>
		<br /><em>Download App to Get Signup</em>
		</div>
	</div>
	</div><!--/.wrapper-->
