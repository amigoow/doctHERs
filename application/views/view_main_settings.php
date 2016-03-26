<div class="row" style="padding-top:80px;">
		<div class="col-md-6 col-md-offset-3" style="  background: #fff;box-shadow: 0px 2px 10px rgba(0,0,0,0.6);padding: 20px;">
				<form action="" method="post" >
		
<?php
$this->db->select()->from("users");
$this->db->where("email",$this->session->userdata['userin']['username']);
$q1 = $this->db->get();
$dt = $q1->result();
?>

Display Name : <br />
				<input type="text" placeholder="Display Name" name="dname"


value= "<?php echo $dt['0']->Name; ?>"

				 id="name"  class="form-control" />
<br />
<?php
$this->db->select()->from("privacy");
$this->db->where("privacyby",$this->session->userdata['userin']['username']);
$this->db->where("privacyon","map");
$this->db->order_by("id","DESC");
$this->db->limit(1);
$q = $this->db->get();
$res = $q->result();
$chkstat ="";
if($res['0']->status == "true")
{

$chkstat = "checked";
}
else
{

}
?>
<div class="checkbox">
    <label>
      <input type="checkbox" id="mapchk" <?php echo $chkstat; ?> > &nbsp; <strong>Hide Me From Map.</strong>
    </label>
  </div>


<a href="javascript:void(0)" class="btn btn-success"  id="smbtsettings" >Save</a>


			</form>
		</div>
</div>
<script>
$(document).ready(function(){

$("#smbtsettings").click(function(){

	var name = $("#name").val();
	var mkh = $("#mapchk").is(':checked');
	$.post("update_settings",{
		chk : mkh,
		dname : name
	},function(data){
$.notify("Settings Saved", "success");

	});


});

});

</script>
</body>
</html>