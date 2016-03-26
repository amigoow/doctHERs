<?php
class Select_AllPosts extends CI_Model{

function showallposts(){

	$this->db->select()->from("posts");
$q = $this->db->get();
return $q;
}

function deleteposts($id){

	$this->db->delete("posts",array('postid' => $id));
}


}