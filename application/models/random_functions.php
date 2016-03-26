<?php
class Random_Functions extends CI_Model{

function getTotalUsers(){

	$this->db->select("*");
	$this->db->from("users");
$q = $this->db->get();

return $q->num_rows();
}

public function deleteads($delid)
{

		$this->db->delete("ads",array('id' => $delid));
}
public function getAds(){

	$this->db->select()->from("ads");
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
$res = $q->result();
return $res['0']->roles;

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