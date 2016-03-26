<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<link type="text/css" href="<?php echo base_url(); ?>application/assests/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url(); ?>application/assests/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url(); ?>application/assests/css/theme.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url(); ?>application/assests/images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
<style>
	.navbar .navbar-inner{

		  background: #009688;
	}
</style>

</head>

<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.html">
			  		<img src="http://localhost/CodeIg/application/assests/images/logo.png" style="  width: 40px;">
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
				
					<ul class="nav pull-right">


						

						
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
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
					<?php echo form_open('Site/getLogin')?>
						<div class="module-head">
							<h3>Sign In</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" name="username" id="inputEmail" placeholder="Username">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" name="password" id="inputPassword" placeholder="Password">
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right">Login</button>
								
								</div>
							</div>
						</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; BeMyAmigo </b> BackEndAdmin.
		</div>
	</div>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="http://localhost/CodeIg/application/assests/dist/js/ripples.min.js"></script>

<script type="text/javascript" src="http://localhost/CodeIg/application/assests/dist/js/material.min.js"></script>

	<link type="text/css" href="http://localhost/CodeIg/application/assests/dist/css/roboto.min.css" rel="stylesheet">
	<link type="text/css" href="http://localhost/CodeIg/application/assests/dist/css/material.min.css" rel="stylesheet">
	<link type="text/css" href="http://localhost/CodeIg/application/assests/dist/css/ripples.min.css" rel="stylesheet">
    <link type="text/css" href="http://localhost/CodeIg/application/assests/dist/css/material-fullpalette.min.css" rel="stylesheet">

<script type="text/javascript">

    $(document).ready(function() {
                // This command is used to initialize some elements and make them work properly
                $.material.init();

            });
</script>

</body>