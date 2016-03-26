
<?php
error_reporting(0);
if(isset($loc)){}else{
$loc = "";

}

?>

<style>
	.thumb{

		  color: #111;
  font-size: 17px;

	}
	.cmntfeed{
  border: 1px solid #ccc;
		  background: #eee;
  padding: 10px
	}
		.smile{

		 height: 22px;
  width: 22px;
	}
</style>
	<div class="row cover" style=" padding-top:100px;background:url('<?php echo $mainlink.$getusercover; ?>'); ">
	<div class="col-md-12">
	<div class="col-md-3">
<div class="profilepic" style="background:url('<?php echo $mainlink.$image; ?>');  background-size: contain; ">

</div>
</div>
<div class="col-md-3">
	<br />
		<div class="name" style="  background: rgba(0,0,0,0.4);
  padding: 14px;color:#fff;">
	<u>	
<?php echo $username; ?>
	 </u> <br />
	<span style="font-size:16px;"><?php echo $number; ?></span>
	</div>
	</div>
<div class="col-md-3 col-md-offset-3">
<?php


if($loc =="nolocation")
{

?>

<?php
if($followornot == "1")
{
$class="btn btn-danger";
}
else
{
$class= "btn btn-primary";

}
?>

<a href="javascript:void(0);" id="btnfollow" data-id="<?php echo $number; ?>" class="<?php echo $class; ?>"><i class="fa fa-thumb-tack"></i> 
<?php
if($followornot == "1")
{
?>
<span id="txtfollow">Following</span>
<?php
}
else
{
?>
<span id="txtunfollow" >Follow Us</span>
<?php
}
?>
</a>


<?php

}else
{
?>

<a href="../videoCall/<?php echo $number; ?>" class="btn btn-primary"><i class="fa fa-phone"></i> Video Call Now</a>


<?php
}
?>

</div>

</div>

</div>
</div>
<br />
<?php
$this->db->select()->from("privacy");
$this->db->where("privacyby",$number);
$this->db->where("privacyon","map");
$this->db->order_by("id","DESC");
$this->db->limit(1);
$q = $this->db->get();
$res = $q->result();
$chkstat ="";
if($res['0']->status == "true")
{
echo "
<div class='row'>
<div class='container'>
<h3>Sorry, we are not able to share this user location.</h3>
</div>
</div>
";
}
else
{
?>
<div class="row">
	<div class="container">

<?php

if($loc =="nolocation")
{
}
else
{
	?>
		
                          <script src="http://maps.googleapis.com/maps/api/js"></script>


		<h2>Last Known Location</h2>


		<?php
if($lat=="----1" ||  $log=="----1")
{

	echo "<h4>Sorry, this user didn't show his location</h4>";
}
else
{
?>
		   <div id="googleMap" style="width:100%;height:380px;"></div>
<?php
}
?>

<?php
}
?>

	</div>
</div>
<?php
}
?>

<script>
	$(document).ready(function(){


$("#btnfollow").click(function(){

$.post("../dofollow",{

	followby : "<?php echo $this->session->userdata['userin']['username']; ?>",
	followto : "<?php echo $number; ?>"
},function(data){

	 if($("#txtfollow").text() == "Following")
	 {


$("#btnfollow").attr("class","btn btn-primary");

	
	 $("#txtfollow").html("Follow Us");
	 	
	 }
	
	 	 if($("#txtunfollow").text() == "Follow Us")
	 {
$("#btnfollow").attr("class","btn btn-danger");


	 $("#txtunfollow").html("Following");


	 }

});

});

var lat = "<?php echo $lat; ?>";
var lon = "<?php echo $log; ?>";


  initialize(lat,lon);
 function initialize(lat,lng) {
     
        var mapOptions = {
            center: new google.maps.LatLng(lat,lng),
            zoom: 8,
              mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
var myCenter=new google.maps.LatLng(lat,lng);

  new google.maps.Marker({
        position: myCenter,
        map: map
    });

    }
    

	});
</script>
<br />
<br /><br /><br />
</body>
</html>
