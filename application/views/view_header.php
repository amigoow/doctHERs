<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<link type="text/css" href="<?php echo base_url(); ?>application/assests/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url(); ?>application/assests/css/theme.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url(); ?>application/assests/images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

        <script src="<?php echo base_url(); ?>application/assests/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>application/assests/dist/js/ripples.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>application/assests/dist/js/material.min.js"></script>

    <link type="text/css" href="<?php echo base_url(); ?>application/assests/dist/css/roboto.min.css" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url(); ?>application/assests/dist/css/material.min.css" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url(); ?>application/assests/dist/css/ripples.min.css" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url(); ?>application/assests/dist/css/material-fullpalette.min.css" rel="stylesheet">


<script src="<?php echo base_url(); ?>application/assests/scripts/notify.min.js" type="text/javascript"></script>


<script type="text/javascript">
    $(document).ready(function() {
                // This command is used to initialize some elements and make them work properly
                $.material.init();

            });
</script>
</head>

    <body>
        <div class="navbar navbar-default navbar-fixed-top">

                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href=""><img src="http://localhost/CodeIg/application/assests/images/logo.png" width="40" /></a>
                    <div style="text-align:Center;">
                            <h3 style="color:#fff;">Admin Controller</h3>
                    </div>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                     
            
                   

                    </div>
                    <!-- /.nav-collapse -->
                </div>
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">


                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">


                                <li class="active"><a href="dashboard"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>


<?php
if($usertypead == "full" || $usertypead == "err" )
{
?>

                                <li><a href="error_reports"><i class="menu-icon icon-bullhorn"></i>Error Reports</a>
                                </li>
<?php
}
?>
<?php
if($usertypead == "full" || $usertypead == "users" )
{
?>
                                <li><a href="ShowUsers"><i class="menu-icon icon-inbox"></i>Users
                                   </a></li>
  
<?php
}
?>
<?php
if($usertypead == "full" || $usertypead == "posts" )
{
?>
                                <li><a href="posts"><i class="menu-icon icon-tasks"></i>Posts </a></li>
                          <?php
}
?>
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                            <ul class="widget widget-menu unstyled">
<?php
if($usertypead == "full" || $usertypead == "loc" )
{
?>

                                <li><a href="showlocations"><i class="icon-map-marker  icon-bold"></i> Locations</a></li>
<?php
}

?>
<?php
if($usertypead == "full" )
{
?>


                                <li><a href="make_admin"><i class="menu-icon icon-book"></i>Admins Controller</a></li>
             <?php
}

?>   

<?php
if($usertypead == "full" )
{
?>


                                <li><a href="advertisments"><i class="menu-icon icon-bullhorn"></i>Advertisments</a></li>
             <?php
}

?>   
<?php
if($usertypead == "full" )
{
?>


                                <li><a href="reports"><i class="menu-icon icon-briefcase"></i>Reports</a></li>
             <?php
}

?>   


                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                            
                                <li><a href="logout"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>

                        
                    </div>
                    <!--/.span3-->