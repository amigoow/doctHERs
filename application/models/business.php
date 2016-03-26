<?php
class Business extends CI_Model{

public function  business_signup($data){

	$this->db->insert("users",$data);
}

public function updatehash($hash){

$data = array('userstatus' => '0' );

	$this->db->update("users",$data);
	$this->db->where("userstatus",$hash);

}

}