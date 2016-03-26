  <?php
class dev extends CI_Model{

function createApp($data){

$this->db->insert("apps",$data);
}

function getUserApi($email,$pass){

	$this->db->select()->from("users");
	$this->db->where("email",$email);
	$this->db->where("password",$pass);
	$q = $this->db->get();
	return $q->result();


}

function getLoginuserApi($email,$pass){

	$this->db->select()->from("users");
	$this->db->where("email",$email);
	$this->db->where("password",$pass);
	$q = $this->db->get();
	return $q->num_rows();


}

}
