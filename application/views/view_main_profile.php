


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
	#editprofilepic{
display: none;
		  width: 100%;
  background: rgba(0,0,0,0.7);
  color: #fff;
  padding: 16px;

	}
.profilepic:hover #editprofilepic{
display: block;

}

#editcoverpic{
display: none;
		  width: 100%;
  background: rgba(0,0,0,0.7);
  color: #fff;
  padding: 16px;

	}
.coverpic:hover #editcoverpic{
  display: inline-block;
  width: 205px;

}


</style>

    <style>
      .cropit-image-preview {
        background-color: #f8f8f8;
        background-size: cover;
        border: 5px solid #ccc;
        border-radius: 3px;
        margin-top: 7px;
        width: 250px;
        height: 250px;
        cursor: move;
      }

      .cropit-image-background {
        opacity: .2;
        cursor: auto;
      }

      .image-size-label {
        margin-top: 10px;
      }

      input {
        /* Use relative position to prevent from being covered by image background */
        position: relative;
        z-index: 10;
        display: block;
      }

      .export {
        margin-top: 10px;
      }
    </style>

<div class="col-md-12 column">
			
			<div class="modal fade" id="modal-container-21" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="myModalLabel">
								<i class="fa fa-camera"></i> Update Cover Picture
							</h4>
						</div>
						<div class="modal-body">
												
	<form action="update_cover" onSubmit="return false" method="post" enctype="multipart/form-data" id="ProfileUpload">
<div class="row">
<div class="col-md-8">
	<hr />
<input name="image_file" id="ProImageInput" type="file" />
</div>
<div class="col-md-4">
<input type="submit" class="btn btn-success"  id="submit-btn45" value="Update Cover" />
</div>
</div>
<img src="<?php echo base_url(); ?>application/assests/images/loader.gif" width="40" id="loading-img" style="display:none;" alt="Please Wait"/>
</form>
<div id="progressbox45" style="display:none;"><div id="progressbar45"></div><div id="statustxt45">0%</div></div>
<div id="output45"></div>

						</div>
						<div class="modal-footer">
						</div>
					</div>
					
				</div>
				
			</div>
			
		</div>






<div class="col-md-12 column">
			
			<div class="modal fade" id="modal-container-22" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="myModalLabel">
								<i class="fa fa-camera"></i> Update Profile Picture
							</h4>
						</div>
						<div class="modal-body">
					 <div class="image-editor">
					 	<br />	<br />
      <input type="file" class="cropit-image-input">
      <!-- .cropit-image-preview-container is needed for background image to work -->
      <div class="cropit-image-preview-container">
        <div class="cropit-image-preview"></div>
      </div>
      <div class="image-size-label">
        Resize image
      </div>
      <input type="range" class="cropit-image-zoom-input">
      <button class="export btn btn-primary">Save</button>
    </div>

<script src="<?php echo base_url(); ?>application/assests/scripts/jquery.cropit.min.js" type="text/javascript" charset="utf-8"></script>

    <script>
      $(function() {
        $('.image-editor').cropit({
          exportZoom: 1.25,
          imageBackground: true,
          imageBackgroundBorderWidth: 20,
          
        });

        $('.export').click(function() {
          var imageData = $('.image-editor').cropit('export');

          $("#base4").val(imageData);
          $.notify("Picture saved !", "info");
        });
      });
    </script>							
	<form action="update_image" onSubmit="return false" method="post" enctype="multipart/form-data" id="ProfilePic">
<div class="row">
<div class="col-md-8">
	<hr />
<input type="hidden" value="" name="imagedata" id="base4" />
</div>
<div class="col-md-4">
<input type="submit" class="btn btn-success"  id="submit-btn65" value="Update Profile" />
</div>
</div>
<img src="<?php echo base_url(); ?>application/assests/images/loader.gif" width="40" id="loading-img" style="display:none;" alt="Please Wait"/>
</form>
<div id="progressbox65" style="display:none;"><div id="progressbar65"></div><div id="statustxt65">0%</div></div>
<div id="output65"></div>

						</div>
						<div class="modal-footer">
						</div>
					</div>
					
				</div>
				
			</div>
			
		</div>
	<div class="row cover coverpic" style="margin-top:70px;  background:url('<?php echo $mainlink.$getusercover; ?>');background-attachment: fixed;">



	<div class="col-md-12">
	<div class="col-md-3">
<div class="profilepic" style="background:url('<?php echo $mainlink.$getimage; ?>');  background-size: cover; ">
<div id="editprofilepic">
 <a id="modal-2" href="#modal-container-22" role="button"  data-toggle="modal" style="color:#fff;text-decoration:none;"><i class="fa fa-camera"></i> Change Profile Picture</a>
			
</div>
</div>



</div>
<div class="col-md-3">
	<br />
		<div class="name" style="  background: rgba(0,0,0,0.4);
  padding: 14px;color:#fff;">
	<u>	<?php
if(($this->session->userdata['userin']['username']))
{

	echo "Howdy!";
}

	?> </u> <br />
	<span style="font-size:16px;"><?php echo $this->session->userdata['userin']['username']; ?></span>
	</div>
	</div>
</div>
<div id="editcoverpic">
 <a id="modal-2" href="#modal-container-21" role="button"  data-toggle="modal" style="color:#fff;text-decoration:none;"><i class="fa fa-camera"></i> Change Cover Picture</a>
			
</div>
</div>
<br />
<div class="row">
	<div class="container-fluid">
		<div class="col-md-4 smallsec" style="  margin-left: 20px;">

<div class="tabbable" id="tabs-26437">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#panel-711240" data-toggle="tab"><i class="fa fa-users"></i> Friends</a>
					</li>
					<li>
						<a href="#panel-437600" data-toggle="tab"> <i class="fa fa-thumb-tack"></i> Followings</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="panel-711240">
						<br />
						<p>
							<?php

foreach ($getuserfrnds->result() as $key) {
	$this->db->select()->from('users');
	$this->db->where('email',$key->contactnumber);
	$q = $this->db->get();
	foreach ($q->result()as $key2) {

		if($key2->picture)
	{
		echo "<img src='".$mainlink.$key2->picture."' width='30'/> &nbsp; ";
}else
{
		echo "<img src='".base_url()."application/assests/images/user2.png' width='30' />";

}
	}
	
	echo "<strong>".$key->contactname."</strong> (<em>".$key->contactnumber."</em>)";
	echo "<hr />";


}				?>
						</p>
					</div>
					<div class="tab-pane" id="panel-437600">
						<br />
						<p>
							
													<?php

$this->db->select()->from("followus");
$this->db->where("followby",$this->session->userdata['userin']['username']);
$q5 = $this->db->get();

foreach ($q5->result() as $key) {
	$this->db->select()->from('users');
	$this->db->where('email',$key->followto);
	$q = $this->db->get();
	foreach ($q->result()as $key2) {

		if($key2->picture)
	{
		echo "<img src='".$mainlink.$key2->picture."' width='30'/> &nbsp; ";
}else
{
		echo "<img src='".base_url()."application/assests/images/user2.png' width='30' />";

}

	
	echo " <strong>".$key2->Name."</strong>";
	echo "<hr />";
	}

}				?>


						</p>
					</div>
				</div>
			</div>

<h5><strong>Pictures</strong></h5><hr />

<?php

$this->db->select()->from("posts");

$this->db->where("posttype","image");
$this->db->where("postedby",$this->session->userdata['userin']['username']);
$this->db->order_by("postid","DESC");
$this->db->limit(3);
$q= $this->db->get();
foreach ($q->result() as $key) {
	echo 
	'
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			
			<div class="modal fade" id="modal-container-'.$key->postid.'" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h5 class="modal-title" id="myModalLabel">
								<strong>Image you have posted</strong>
							</h5>      <abbr class="timeago" title="'.$key->timepost.'"></abbr>
						<br />
						</div>
						<div class="modal-body text-center">
						<br /> 
							<img src="'.$mainlink.$key->status.'" style="width:100%;" style="padding-right:5px;"/>
						</div>
					</div>
					
				</div>
				
			</div>
			
		</div>
	</div>
</div>
	';

}
foreach ($q->result() as $key) {

echo ' <a id="modal-8828" href="#modal-container-'.$key->postid.'" role="button"  data-toggle="modal"><img src="'.$mainlink.$key->status.'" width="135" style="padding-right:5px;"/></a>';
}
?>

		</div>
		
				<div class="col-md-7 ">
		<div class="col-md-12 ">

					<div class="row smallsec">
					<div class="col-md-12">	
<div class="tabbable" id="tabs">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#panel-1" data-toggle="tab"> <i class="fa fa-pencil"></i>
Status</a>
					</li>
					<li>
						<a href="#panel-2" data-toggle="tab"> <i class="fa fa-picture-o"></i>
Image</a>
					</li>
					<li>
						<a href="#panel-3" data-toggle="tab"> <i class="fa fa-video-camera"></i>
Video</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="panel-1">
						<p>


<br />			
<div class="row">
<div class="col-md-8">
		<input type="text" placeholder="What's on your mind ?" class="form-control" required id="status"/>
</div>
<div class="col-md-4">

						<input type="button" id="postnow" class="btn btn-default" value="Post Now" />
</div>
</div>
						</p>
					</div>
						<div class="tab-pane" id="panel-3">
								<p><br />
							<form action="uploading_video" onSubmit="return false" method="post" enctype="multipart/form-data" id="VideoUpload">
<div class="row">
<div class="col-md-8">
<input name="video_file" id="videoInput" type="file" />
</div>
<div class="col-md-4">
<input type="submit" class="btn btn-deafult"  id="submit-vidbtn" value="Post Video Now" />
</div>
</div>
<img src="<?php echo base_url(); ?>application/assests/images/loader.gif" width="40" id="loading-img" style="display:none;" alt="Please Wait"/>
</form>
<div id="progressbox1" style="display:none;"><div id="progressbar1"></div><div id="statustxt1">0%</div></div>
<div id="output1"></div>
						</p>
					</div>
					<div class="tab-pane" id="panel-2">
						<p><br />
							<form action="uploading_image" onSubmit="return false" method="post" enctype="multipart/form-data" id="MyUploadForm">
<div class="row">
<div class="col-md-8">
<input name="image_file" id="imageInput" type="file" />
</div>
<div class="col-md-4">
<input type="submit" class="btn btn-deafult"  id="submit-btn" value="Post Image Now" />
</div>
</div>
<img src="<?php echo base_url(); ?>application/assests/images/loader.gif" width="40" id="loading-img" style="display:none;" alt="Please Wait"/>
</form>
<div id="progressbox" style="display:none;"><div id="progressbar"></div><div id="statustxt">0%</div></div>
<div id="output"></div>
						</p>
					</div>
				</div>
			</div>


				</div>	
			
				<br />
				<img src="<?php echo base_url(); ?>application/assests/images/loader.gif" id="loader" width="40" />
			</div>
			<div id="userfeeds">
				</div>
		</div>
		</div>
	</div>
</div>




<script type="text/javascript">
$(document).ready(function() { 

$("#submit-btn65").click(function(){
var imd = $("#base4").val();

	$.post("update_image",{

		imagedata : imd
	},function(data){

  $.notify("Profile Picture updated.", "success");
  setTimeout(function(){ window.location = "http://localhost/CodeIg/home/index"; }, "1000");
	});

});

});

</script>



<script type="text/javascript">
$(document).ready(function() { 

	var progressbox1     = $('#progressbox1');
	var progressbar1     = $('#progressbar1');
	var statustxt1       = $('#statustxt1');
	var completed       = '0%';
	
	var options = { 
			target:   '#output1',   // target element(s) to be updated with server response 
			beforeSubmit:  beforeSubmit,  // pre-submit callback 
			uploadProgress: OnProgress,
			success:       afterSuccess,  // post-submit callback 
			resetForm: true        // reset the form after successful submit 
		}; 
		
	 $('#VideoUpload').submit(function() { 
			$(this).ajaxSubmit(options);  			
			// return false to prevent standard browser submit and page navigation 
			return false; 
		});
	
//when upload progresses	
function OnProgress(event, position, total, percentComplete)
{
	//Progress bar
	progressbar1.width(percentComplete + '%') //update progressbar1 percent complete
	statustxt1.html(percentComplete + '%'); //update status text
	if(percentComplete>50)
		{
			statustxt1.css('color','#fff'); //change status text to white after 50%
		}
}

//after succesful upload
function afterSuccess()
{
	$('#submit-vidbtn').show(); //hide submit button
	$('#loading-img').hide(); //hide submit button

}

//function to check file size before uploading.
function beforeSubmit(){
    //check whether browser fully supports all File API
   if (window.File && window.FileReader && window.FileList && window.Blob)
	{

		if( !$('#videoInput').val()) //check empty input filed
		{
			$("#output1").html("Are you kidding me?");
			return false
		}
		
		var fsize = $('#videoInput')[0].files[0].size; //get file size
		var ftype = 0; // get file type
		
		//allow only valid image file types 
		switch(ftype)
        {
            case 0:
                break;
            default:
                $("#output1").html("<b>"+ftype+"</b> Unsupported file type!");
				return false
        }
		
		//Allowed file size is less than 1 MB (1048576)
		if(fsize>80000048576) 
		{
			$("#output1").html("<b>"+bytesToSize(fsize) +"</b> Too big Image file! <br />Please reduce the size of your photo using an image editor.");
			return false
		}
		
		//Progress bar
		progressbox1.show(); //show progressbar1
		progressbar1.width(completed); //initial value 0% of progressbar1
		statustxt1.html(completed); //set status text
		statustxt1.css('color','#000'); //initial color of status text

				
		$('#submit-vidbtn').hide(); //hide submit button
		$('#loading-img').show(); //hide submit button
		$("#output1").html("");  
	}
	else
	{
		//output1 error to older unsupported browsers that doesn't support HTML5 File API
		$("#output1").html("Please upgrade your browser, because your current browser lacks some new features we need!");
		return false;
	}
}

//function to format bites bit.ly/19yoIPO
function bytesToSize(bytes) {
   var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
   if (bytes == 0) return '0 Bytes';
   var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
   return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
}

}); 

</script>



<script type="text/javascript">
$(document).ready(function() { 

	var progressbox     = $('#progressbox');
	var progressbar     = $('#progressbar');
	var statustxt       = $('#statustxt');
	var completed       = '0%';
	
	var options = { 
			target:   '#output',   // target element(s) to be updated with server response 
			beforeSubmit:  beforeSubmit,  // pre-submit callback 
			uploadProgress: OnProgress,
			success:       afterSuccess,  // post-submit callback 
			resetForm: true        // reset the form after successful submit 
		}; 
		
	 $('#MyUploadForm').submit(function() { 
			$(this).ajaxSubmit(options);  			
			// return false to prevent standard browser submit and page navigation 
			return false; 
		});
	
//when upload progresses	
function OnProgress(event, position, total, percentComplete)
{
	//Progress bar
	progressbar.width(percentComplete + '%') //update progressbar percent complete
	statustxt.html(percentComplete + '%'); //update status text
	if(percentComplete>50)
		{
			statustxt.css('color','#fff'); //change status text to white after 50%
		}
}

//after succesful upload
function afterSuccess()
{
	$('#submit-btn').show(); //hide submit button
	$('#loading-img').hide(); //hide submit button

}

//function to check file size before uploading.
function beforeSubmit(){
    //check whether browser fully supports all File API
   if (window.File && window.FileReader && window.FileList && window.Blob)
	{

		if( !$('#imageInput').val()) //check empty input filed
		{
			$("#output").html("Are you kidding me?");
			return false
		}
		
		var fsize = $('#imageInput')[0].files[0].size; //get file size
		var ftype = 0; // get file type
		
		//allow only valid image file types 
		switch(ftype)
        {
            case 0:
                break;
            default:
                $("#output").html("<b>"+ftype+"</b> Unsupported file type!");
				return false
        }
		
		//Allowed file size is less than 1 MB (1048576)
		if(fsize>80000048576) 
		{
			$("#output").html("<b>"+bytesToSize(fsize) +"</b> Too big Image file! <br />Please reduce the size of your photo using an image editor.");
			return false
		}
		
		//Progress bar
		progressbox.show(); //show progressbar
		progressbar.width(completed); //initial value 0% of progressbar
		statustxt.html(completed); //set status text
		statustxt.css('color','#000'); //initial color of status text

				
		$('#submit-btn').hide(); //hide submit button
		$('#loading-img').show(); //hide submit button
		$("#output").html("");  
	}
	else
	{
		//Output error to older unsupported browsers that doesn't support HTML5 File API
		$("#output").html("Please upgrade your browser, because your current browser lacks some new features we need!");
		return false;
	}
}

//function to format bites bit.ly/19yoIPO
function bytesToSize(bytes) {
   var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
   if (bytes == 0) return '0 Bytes';
   var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
   return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
}

}); 

</script>







	





<script type="text/javascript">
///sdfsdfsdfsdfsdfsdfsdfsdfsdf

$(document).ready(function() { 

	var progressbox45     = $('#progressbox45');
	var progressbar45     = $('#progressbar45');
	var statustxt45       = $('#statustxt45');
	var completed       = '0%';
	
	var options = { 
			target:   '#output45',   // target element(s) to be updated with server response 
			beforeSubmit:  beforeSubmit,  // pre-submit callback 
			uploadProgress: OnProgress,
			success:       afterSuccess,  // post-submit callback 
			resetForm: true        // reset the form after successful submit 
		}; 
		
	 $('#ProfileUpload').submit(function() { 
			$(this).ajaxSubmit(options);  			
			// return false to prevent standard browser submit and page navigation 
			return false; 
		});
	
//when upload progresses	
function OnProgress(event, position, total, percentComplete)
{
	//Progress bar
	progressbar45.width(percentComplete + '%') //update progressbar45 percent complete
	statustxt45.html(percentComplete + '%'); //update status text
	if(percentComplete>50)
		{
			statustxt45.css('color','#fff'); //change status text to white after 50%
		}
}

//after succesful upload
function afterSuccess()
{
	$('#submit-btn45').show(); //hide submit button
	$('#loading-img').hide(); //hide submit button

}

//function to check file size before uploading.
function beforeSubmit(){
    //check whether browser fully supports all File API
   if (window.File && window.FileReader && window.FileList && window.Blob)
	{

		if( !$('#ProImageInput').val()) //check empty input filed
		{
			$("#output45").html("Are you kidding me?");
			return false
		}
		
		var fsize = $('#ProImageInput')[0].files[0].size; //get file size
		var ftype = 0; // get file type
		
		//allow only valid image file types 
		switch(ftype)
        {
            case 0:
                break;
            default:
                $("#output45").html("<b>"+ftype+"</b> Unsupported file type!");
				return false
        }
		
		//Allowed file size is less than 1 MB (1048576)
		if(fsize>80000048576) 
		{
			$("#output45").html("<b>"+bytesToSize(fsize) +"</b> Too big Image file! <br />Please reduce the size of your photo using an image editor.");
			return false
		}
		
		//Progress bar
		progressbox45.show(); //show progressbar45
		progressbar45.width(completed); //initial value 0% of progressbar45
		statustxt45.html(completed); //set status text
		statustxt45.css('color','#000'); //initial color of status text

				
		$('#submit-btn45').hide(); //hide submit button
		$('#loading-img').show(); //hide submit button
		$("#output45").html("");  
	}
	else
	{
		//output45 error to older unsupported browsers that doesn't support HTML5 File API
		$("#output45").html("Please upgrade your browser, because your current browser lacks some new features we need!");
		return false;
	}
}

//function to format bites bit.ly/19yoIPO
function bytesToSize(bytes) {
   var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
   if (bytes == 0) return '0 Bytes';
   var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
   return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
}

}); 

</script>



<script>
	$(document).ready(function(){

		var currentposts = "";
var newposts = "";
	$("#loader").hide();


		$.post("getuserposts",{},function(data){

			$("#userfeeds").html(data);
		});

function updateOnPoll(){


		$.post("getuserposts",{},function(data){

			$("#userfeeds").html(data);
		});
}
	$.post("getpostscount",{},function(data){

				currentposts = data;

		});


function polling(){
	$.post("getpostscount",{},function(data){

				newposts = data;
				if(newposts > currentposts){

		$.post("getuserposts",{},function(data){

			$("#userfeeds").html(data);
				currentposts = newposts;
					$("#loader").hide();
		});

				}


		});

}

			$("#postnow").click(function(){
				var stat = $("#status").val();
	if(stat == ""){

$("#status").notify(
  "Amgio, Say something", 
  { position:"bottom center",
  	 style: 'bootstrap',
  // default class (string or [string])
  className: 'error'
   }
);

				}
				else
				{

	$("#loader").show();
	var date = new Date();
					$.post("post",{
							status : stat,
							postedby : "<?php echo $this->session->userdata['userin']['username']; ?>",
							posttype : "text",
								datadate : date.toISOString()


					},function(data){
							$("#status").val("");

					}

					);

}
			});


setInterval(polling,"4000");

	});
</script>
</body>
</html>
