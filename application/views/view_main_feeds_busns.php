


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
<div class="row"   style="margin-top: 70px;">
	<div class="container-fluid">
		<div class="col-md-2 smallsec">
			<?php
					if($getimage)
					{
			?>
			<?php echo "<img src='".$mainlink.$getimage."' width='80' />"; ?>
			<?php
}
else{
echo "<img src='".$mainlink."image/user2.png' width='80' />";
	}
			?>
		<div style="float:right;">
		<strong>	<?php echo $name; ?> </strong>
		</div>

				<div id="usercall" >

		</div>

		</div>

	
		<div class="col-md-6 ">

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
							<form action="bsns_uploading_video" onSubmit="return false" method="post" enctype="multipart/form-data" id="VideoUpload">
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
							<form action="bsns_uploading_image" onSubmit="return false" method="post" enctype="multipart/form-data" id="MyUploadForm">
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
		<div class="col-md-3">
<div class="panel panel-default">
<div class="panel-heading"> <i class="fa fa-bullhorn"></i><b> Start Advertisement</b></div>
<div class="panel-body">
<div class="row">
<div class="col-xs-12" id="nsfeeds">

</div>
</div>
</div>
<div class="panel-footer"> </div>
</div>
</div>
	</div>
</div>


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
<script>
	$(document).ready(function(){

			$("#loader").hide();

		var currentposts = "";
var newposts = "";

		var currentnotification = "";
var newnotification = "";





		$.post("bsnsfeedsgenration",{},function(data){

			$("#userfeeds").html(data);
		});

function updateOnPoll(){


		$.post("getuserposts",{},function(data){

			$("#userfeeds").html(data);
		});
}
	$.post("getbsnspostscount",{},function(data){

				currentposts = data;


		});


function polling(){
	$.post("getbsnspostscount",{},function(data){

				newposts = data;

				if(newposts > currentposts){
	
		$.post("bsnsfeedsgenration",{},function(data){


			$("#userfeeds").html(data);
				currentposts = newposts;
				$("#loader").hide();
			
		});

				}


		});

}


			$("#postnow").click(function(){
				var stat = $("#status").val();
					$("#loader").show();
					$.post("post",{
							status : stat,
							postedby : "<?php echo $this->session->userdata['userbsns']['email']; ?>",
							posttype : "text"


					},function(data){
							$("#status").val("");

					}

					);

			});

     
		



setInterval(polling,"3000");

/*
function getNotify(){


}
*/




	});
</script>
</body>
</html>
