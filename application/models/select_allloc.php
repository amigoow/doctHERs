<?php
class Select_Allloc extends CI_Model{

function showloc(){

	$this->db->select()->from("locations");
$q = $this->db->get();
return $q;
}

function delloc($id){

	$this->db->delete("locations",array('usernumber' => $id));
}


}