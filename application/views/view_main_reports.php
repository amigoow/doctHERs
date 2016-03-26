<div class="row" style="padding-top:80px;">
		<div class="col-md-6 col-md-offset-3" style="  background: #fff;box-shadow: 0px 2px 10px rgba(0,0,0,0.6);padding: 20px;">
				<form action="" method="post" >
		
<?php
$this->db->select()->from("users");
$this->db->where("email",$this->session->userdata['userin']['username']);
$q1 = $this->db->get();
$dt = $q1->result();
?>


				<textarea  name="dname"
	 id="name"  class="form-control" ></textarea>
<br />

<a href="javascript:void(0)" class="btn btn-success"  id="smbtsettings" >Submit</a>


			</form>
		</div>
</div>
<script>
$(document).ready(function(){

$("#smbtsettings").click(function(){

	var name = $("#name").val();
	
	$.post("update_report",{

		dname : name
	},function(data){
$.notify("Report Submitted", "success");

	});


});

});

</script>
</body>
</html>