<?php
class Select_AllUsers extends CI_Model{

function showallusers(){

	$this->db->select()->from("users");
$q = $this->db->get();
return $q;
}

function deleteusers($id){

	$this->db->delete("users",array('id' => $id));
}


}