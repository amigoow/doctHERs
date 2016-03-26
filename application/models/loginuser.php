<?php
class LoginUser extends CI_Model{

function Login($data)
{
$this->db->select("id,username,pass");
$this->db->from("admin");
$username = $data['username'];
$password = $data['password'];
$this->db->where("username",$username);
$this->db->where("pass",$password);
$q = $this->db->get();
if($q -> num_rows() ==1){
return $q->result();
}else
{
return false;
}
}
}

?>