<?php
class Main_Random_Functions extends CI_Model{

function getTotalUsers(){

	$this->db->select("*");
	$this->db->from("users");
$q = $this->db->get();

return $q->num_rows();
}

function getPasswordFromNumber($number){

$this->db->select()->from("users");
$this->db->where("email",$number);
$q = $this->db->get();
return $q->result();

}

function updateanalytics($data){
$this->db->insert("adsdata",$data);

}

function getAds(){

$this->db->select()->from("ads");
$this->db->order_by("RAND() LIMIT 3");
$q = $this->db->get();

return $q->result();


}

function getUserBalance($user){

$this->db->select()->from("balance");
$this->db->where("user",$user);
$q = $this->db->get();
return $q->result();


}

function adpostnow($data){

	$this->db->insert("ads",$data);
$this->db->select()->from("balance");
$q = $this->db->get();
$r = $q->result();
$t = ($r['0']->bal) - 5;


	 $data = array('bal' => $t );
  $this->db->where("user",$this->session->userdata['userin']['username']);
$this->db->update("balance",$data);
}

function update_profile($name,$user,$chk){

$data2 = array(
	'privacyon' => 'map',
	'privacyby' => $this->session->userdata['userin']['username'],
	'status' => $chk 
	 );

$this->db->insert("privacy",$data2);

$data = array('Name' => $name );

$this->db->where("email",$user);
$this->db->update("users",$data);
	
}

function getfollowstatus($data){

$this->db->select()->from("followus");
$this->db->where("followto",$data['followto']);
$this->db->where("followby",$data['followby']);
$res =  $this->db->get();
$rec = $res->num_rows();


return $rec;

}

function dofollownow($data){

$this->db->select()->from("followus");
$this->db->where("followto",$data['followto']);
$this->db->where("followby",$data['followby']);
$res =  $this->db->get();
$rec = $res->num_rows();

if($rec >=1 )
{
$this->db->where("followto",$data['followto']);
$this->db->where("followby",$data['followby']);
$this->db->delete("followus");

}
else
{
	$this->db->insert("followus",$data);
}

}

public function update_cover_image($image,$updateto){


$data = array('cover' => $image );
$this->db->where("email",$updateto);
$this->db->update("users",$data);


}


public function update_profile_image($image,$updateto){


$data = array('picture' => $image );
$this->db->where("email",$updateto);
$this->db->update("users",$data);


}

function del_video_not($id){

$this->db->where("id",$id);
	$this->db->delete("videocallids");
}

function getNotify($callto){

$this->db->select()->from("videocallids");
$this->db->where("callto",$callto);
return $this->db->get();


}
function getNotifyCount($usernumber){

$this->db->select()->from("videocallids");
$this->db->where("callto",$usernumber);
$q =  $this->db->get();
return $q->num_rows();

}
function getUsertypeBsns($email){

	$this->db->select()->from("users");
	$this->db->where('email',$email);
	$r = $this->db->get();
return $r->result();

}

function getUsersSeraches($number,$name){

	$this->db->select()->from("contacts,users");
	$this->db->where("contacts.contactnumber = users.email AND contacts.user = '$number' AND contactname LIKE '%".$name."%'");
	$q1 = $this->db->get();



	$this->db->select()->from("users");
	$this->db->where('useracctype','buisness');
	$this->db->where("Name LIKE '%".$name."%'");
	$q2 = $this->db->get();

$q = array_merge($q2->result(),$q1->result());

	return $q;


}

function getLongitude($number){
$this->db->select()->from("locations");
	$this->db->where("usernumber",$number);
	return $this->db->get();
}



function getLatitude($number){

	$this->db->select()->from("locations");
	$this->db->where("usernumber",$number);
	return $this->db->get();
}

/*
function getUsernameFromContacts($number){

$this->db->select()->from('contacts');
$this->db->where('user',$this->session->userdata['userin']['username']);
$this->db->where('contactnumber',$number);
$q = $this->db->get();

return $q;
}
*/
function getUsernameFromContacts($number){

$this->db->select()->from('contacts');
$this->db->where('user',$this->session->userdata['userin']['username']);
$this->db->where('contactnumber',$number);
$q = $this->db->get();

return $q;
}
function getuserfs(){

					$user = $this->session->userdata['userin']['username'];
$q = $this->db->query("Select * FROM contacts,users WHERE contacts.contactnumber = users.email AND contacts.user = '$user'");
return $q;
}



function getBName($email){

	$this->db->select()->from('users');
	$this->db->where('email',$email);
	$q = $this->db->get();

return $q->result();
}



function getBusnsimage($email){

	$this->db->select()->from('business');
	$this->db->where('email',$email);
	$q = $this->db->get();

return $q;
}




function getimage($number){

	$this->db->select()->from('users');
	$this->db->where('email',$number);
	$q = $this->db->get();

return $q;
}



function getTotalNumberOfPosts(){

	$this->db->select("*");
	$this->db->from("posts");
$q = $this->db->get();

return $q->num_rows();
}

function getusertype($username){

$this->db->select()->from('admin');
$this->db->where('username',$username);
$q = $this->db->get();

$res = $q->num_rows();
return $res;

}

function getTotalNumberOfLocations(){

	$this->db->select("*");
	$this->db->from("locations");
$q = $this->db->get();

return $q->num_rows();
}
function getTotalNumberOfDBSize(){

	$this->db->select("*");
	$this->db->from("locations");
$q = $this->db->get();

return $q->num_rows();
}
function geterror_reports(){


return $this->db->get('error_reports')->result();
}
}