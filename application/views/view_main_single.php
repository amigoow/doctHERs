


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

<br />
<div class="row"   style="margin-top: 15px;">
	<div class="container-fluid">
	

	
		<div class="col-md-9">

					<div class="row ">


	<div id="userfeeds">
				</div>


		
			</div>
		</div>
		<div class="col-md-3">


			
	

<div class="panel panel-default">
<div class="panel-heading"> <i class="fa fa-bullhorn"></i><b> Advertisements</b></div>
<div class="panel-body">
<div class="row">
<div class="col-xs-12" id="nsfeeds">
		<?php
			foreach ($ads as $key) {
				echo "<a href='adsanalytics/".base64_encode($key->link)."/".$key->id."'style='text-decoration: none;
  color: #111;'><div style=' padding-top:5px; border-bottom: 1px solid #ccc;'>";
					echo "<strong style='pa'>".$key->title."</strong><br /><br />";
					echo "<img src='http://localhost/amigo/".$key->image."' width='250' /><br />";
					echo "<p>".$key->shortdesc."</p>";
					echo "</div></a>";
			}
		?>
</div>
</div>
</div>
<div class="panel-footer"> </div>
</div>

</div>

</div>
	</div>
</div>



<script>
	$(document).ready(function(){
var dt = new Date();
//alert(dt);

			$("#loader").hide();

		var currentposts = "";
var newposts = "";

		var currentnotification = "";
var newnotification = "";



		$.post("../SinglePostGenraion",{

			id : "<?php echo $spostid; ?>"
		},function(data){
		
			$("#userfeeds").html(data);
		});






	});
</script>
</body>
</html>
