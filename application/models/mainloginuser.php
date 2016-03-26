<?php
class MainLoginUser extends CI_Model{

function Login($data)
{
$this->db->select("id,email,password");
$this->db->from("users");
$username = $data['username'];
$password = $data['password'];
$this->db->where("email",$username);
$this->db->where("password",$password);
$q = $this->db->get();
if($q -> num_rows() ==1){
return $q->result();
}else
{
return false;
}
}

function LoginBusiness($data)
{
$this->db->select("id,email,pass");
$this->db->from("business");
$username = $data['email'];
$password = $data['password'];
$this->db->where("email",$username);
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