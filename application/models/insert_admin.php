<?php
class Insert_Admin extends CI_Model{


function addadmin($data){

$this->db->insert('admin',$data);
}

}