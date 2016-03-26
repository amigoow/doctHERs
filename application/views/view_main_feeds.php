


<style>
	.thumb{

		  color: #111;
  font-size: 17px;

	}
#loading-feeds
{
display: block;
text-align: center;
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
		<strong>	<?php echo $this->session->userdata['userin']['username']; ?> </strong>
		</div>

				<div id="usercall" >

		</div>
<br />
		<div id="notcont">
		</div>

<br />
<hr />
<strong>Developers</strong>
<a href="../developer/" class="btn">Developer Zone</a>
		</div>

	
		<div class="col-md-7" style="  padding-left: 22px;">

					<div class="row ">
<div class="tabbable smallsec" id="tabs">
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
	<form id="statusForm">
<div class="col-md-8">
		<input type="text" placeholder="What's on your mind ?" class="form-control validate[required]" required id="status"/>
</div>
<div class="col-md-4">

						<input type="button" id="postnow" class="btn btn-default" value="Post Now" />
</form>
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
<input type="hidden" name="datefi" class="datefield" />
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
<input type="hidden" name="datefi" class="datefield" />
</div>
<div class="col-md-4">
<input type="submit" class="btn btn-deafult" required  id="submit-btn" value="Post Image Now" />
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


				
			
				<br />
				<img src="<?php echo base_url(); ?>application/assests/images/loader.gif" id="loader" width="40" />
		
			<div class="tabbable " id="tabs-111178">
				<ul class="nav nav-tabs" style="margin-bottom: -20px;">
					<li class="active">
						<a href="#panel-563570" data-toggle="tab"> <i class="fa fa-users"></i> Users Feeds</a>
					</li>
					<li>
						<a href="#panel-163702" data-toggle="tab"> <i class="fa fa-thumb-tack"></i> Following Feeds</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="panel-563570">
						<p>
						<div id="userfeeds">
				</div>

						</p>
										<img src="<?php echo base_url(); ?>application/assests/images/loader.gif" width="40" id="loading-feeds"  alt="Please Wait"/>
					</div>
					<div class="tab-pane" id="panel-163702">
						<p>
								<div id="busnsfeeds">
				</div>
						</p>
					</div>
				</div>
			</div>
		<script>

</script>
			</div>
		</div>
		<div class="col-md-3">
<div class="panel panel-default">
<div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>News</b></div>
<div class="panel-body">
<div class="row">
<div class="col-xs-12" id="nsfeeds">

</div>
</div>
</div>
<div class="panel-footer"> </div>
</div>
		<div class="col-md-12">
<div class="col-md-12 column">
			
			<div class="modal fade" id="modal-container-274601" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="myModalLabel">
								Make An Advertisment
							</h4>
						</div>
						<div class="modal-body">
							<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<br />
<strong>Your Current Balance is : </strong> <em> <?php echo $balance; ?> Points </em> <br />


								<?php
									if($balance >= "5" )
									{

								?>

								<br />
								<form  action="adpost" onSubmit="return false" method="post" enctype="multipart/form-data"  id="adpostform">
							<input type="text" name="title" placeholder="Title for advertisment" required id="AdPostTitle" class="form-control" /><br />
<br />
							<input type="url" required name="link" placeholder="Link to Ad" id="linkto" class="form-control" /><br /><br />
							<textarea  maxlength="80" id="shorttxt" required name="shortdesc"  class="form-control">Short Discription</textarea>
							<br />
<input name="adimage_file" id="adimageInput" type="file" required />
<br />
<div id="apst" style="width:349px;height:300px;background:#ccc;">
<h2 style="  padding-top: 100px;
  padding-left: 45px;">Ad Featured Image</h2>
</div>
<img id="blah" src="" style="max-width: 349px;" alt="your image" /> <br />
<input type="submit" class="btn btn-success"  id="adsubmit-btn" value="Post Ad Now" />
<img src="<?php echo base_url(); ?>application/assests/images/loader.gif" width="40" id="loading-img" style="display:none;" alt="Please Wait"/>

<div id="adprogressbox" style="display:none;"><div id="adprogressbar"></div><div id="adstatustxt">0%</div></div>
<div id="adoutput"></div>
</form>
<?php
}
else
{
?>
<br />

<div class="alert alert-danger">
Sorry, you don't have enough balance points to post an Ad on BeMy Amigo - Please buy points. 
</div>
<div style="text-align:center;">
<strong>Your Current Balance is : </strong> <em> <?php echo $balance; ?> Points </em>
<br /><br />
<br /><br />


 <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" class=
    "paypal-button" method="post" target="_top">
        <div class="hide" id="errorBox"></div>
        <input name="button" type=
        "hidden" value="buynow">
        <input name="item_name" type="hidden" value=
        "Points">
        <input type='hidden' name='rm' value='2'>
        <input name="quantity" type="hidden" value="1">
        <input name=
        "amount" type="hidden" value="25">
        <input name="currency_code" type=
        "hidden" value="USD">
        <input name="notify_url" type="hidden" value=
        "http://localhost/CodeIg/home/index">
        <input name="env" type="hidden"
        value="www.sandbox">
        <input name="cmd" type="hidden" value=
        "_xclick">
        <input name="business" type="hidden" value=
        "seller@photontechs.com">
         <input type="hidden" name="return" value="http://localhost/CodeIg/home/paypal">
        <input name="bn" type="hidden" value=
        "JavaScriptButton_buynow"><input type="image" class="paypal-button large" src="<?php echo base_url(); ?>application/assests/images/chkout.png"></button>
    </form>
</div>
<?php
}
?>

							</div>
							</div>
						</div>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
<?php
if($usertype == "buisness"){
?>
<div class="panel panel-default">
<div class="panel-heading"> <i class="fa fa-bullhorn"></i><b> Start Advertisement</b></div>
<div class="panel-body" style="text-align:center;">
<div class="row">
<div class="col-xs-12" id="nsfeeds">
 <a id="modal-274601" href="#modal-container-274601" role="button" class="btn" data-toggle="modal"><i class="fa fa-paper-plane"></i> Post an Ad now</a>
<a href="showads" class="btn btn-success"><strong>Advertisment Analytics</strong></a>
			
</div>
</div>
</div>


<div class="panel-footer"> </div>

</div>

<?php
}
else
{
?>
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

<?php


}
?>
</div>

</div>
	</div>
</div>




<script>
$(document).ready(function() { 



$("#paynow").click(function(){
alert("OK");

});

		
	var date = new Date();

$(".datefield").val(date.toISOString());

	function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();
        	$("#apst").hide();
        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#adimageInput").change(function(){
    readURL(this);
});

	var adprogressbox1     = $('#adprogressbox');
	var adprogressbar1     = $('#adprogressbar');
	var adstatustxt1       = $('#adstatustxt');
	var completed       = '0%';
	
	var options = { 
			target:   '#adoutput',   // target element(s) to be updated with server response 
			beforeSubmit:  beforeSubmit,  // pre-submit callback 
			uploadProgress: OnProgress,
			success:       afterSuccess,  // post-submit callback 
			resetForm: true        // reset the form after successful submit 
		}; 
		
	 $('#adpostform').submit(function() { 
			$(this).ajaxSubmit(options);  			
			// return false to prevent standard browser submit and page navigation 
			return false; 
		});
	
//when upload progresses	
function OnProgress(event, position, total, percentComplete)
{
	//Progress bar
	adprogressbar1.width(percentComplete + '%') //update adprogressbar1 percent complete
	adstatustxt1.html(percentComplete + '%'); //update status text
	if(percentComplete>50)
		{
			adstatustxt1.css('color','#fff'); //change status text to white after 50%
		}
}

//after succesful upload
function afterSuccess()
{
	$('#adsubmit-btn').show(); //hide submit button
	$('#loading-img').hide(); //hide submit button
$.notify("Ad posted on BeMy Amigo", "success");
}

//function to check file size before uploading.
function beforeSubmit(){
    //check whether browser fully supports all File API
   if (window.File && window.FileReader && window.FileList && window.Blob)
	{

		if( !$('#adimageInput').val()) //check empty input filed
		{
			$("#adoutput").html("Are you kidding me?");
			return false
		}
		
		var fsize = $('#adimageInput')[0].files[0].size; //get file size
		var ftype = 0; // get file type
		
		//allow only valid image file types 
		switch(ftype)
        {
            case 0:
                break;
            default:
                $("#adoutput").html("<b>"+ftype+"</b> Unsupported file type!");
				return false
        }
		
		//Allowed file size is less than 1 MB (1048576)
		if(fsize>80000048576) 
		{
			$("#adoutput").html("<b>"+bytesToSize(fsize) +"</b> Too big Image file! <br />Please reduce the size of your photo using an image editor.");
			return false
		}
		
		//Progress bar
		adprogressbox1.show(); //show adprogressbar1
		adprogressbar1.width(completed); //initial value 0% of adprogressbar1
		adstatustxt1.html(completed); //set status text
		adstatustxt1.css('color','#000'); //initial color of status text

				
		$('#adsubmit-btn').hide(); //hide submit button
		$('#loading-img').show(); //hide submit button
		$("#adoutput").html("");  
	}
	else
	{
		//adoutput1 error to older unsupported browsers that doesn't support HTML5 File API
		$("#adoutput").html("Please upgrade your browser, because your current browser lacks some new features we need!");
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
var dt = new Date();
//alert(dt);

var LIMIT = 3;
			$("#loader").hide();

		var currentposts = "";
var newposts = "";

		var currentnotification = "";
var newnotification = "";


		$.post("bsnsfeedsgenration",{},function(data){

			$("#busnsfeeds").html(data);
		});


$.post("newsgenration",{},function(data){

			$("#nsfeeds").html(data);
		});

		$.post("feedsgenration",{

			limit : LIMIT
		},function(data){

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

		$.post("feedsgenration",{
			limit : LIMIT

		},function(data){

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
				else{

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

function pollnotify(){

$.post("getusernotifycount",{

callto :  "<?php echo $this->session->userdata['userin']['username']; ?>"


},function(data){

newnotification = data;

				if(newnotification > currentnotification){

$.post("getusernotify",{

	callto :  "<?php echo $this->session->userdata['userin']['username']; ?>"
},function(data){

			currentnotification = newnotification;

$("#usercall").html(data);

		});




				}

		
		});


}
$("#loading-feeds").hide();

     $(window).scroll(function() {
    if($(window).scrollTop() == $(document).height() - $(window).height()) {

    	LIMIT += 3;
$("#loading-feeds").show();

		$.post("feedsgenration",{

			limit : LIMIT
		},function(data){
$("#loading-feeds").hide();
			$("#userfeeds").html(data);
		});

           
    }
});
		

setInterval(pollnotify,"7000");


setInterval(polling,"3000");

/*
function getNotify(){


}
*/




	});
</script>
</body>
</html>
