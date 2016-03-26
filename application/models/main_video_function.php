<?php
class Main_Video_Function extends CI_Model{

public function ivideodata($viddata){


$this->db->select()->from("videocallids");
$this->db->where('callby',$viddata['callby']);
$this->db->where('callto',$viddata['callto']);

	$rec = $this->db->get();
$res = $rec->num_rows();

if($res == 0)
{

$this->db->insert("videocallids",$viddata);
}
else
{

$data2 = array('videoid' => $viddata['videoid'] );
$this->db->update("videocallids",$data2);
$this->db->where('callby',$viddata['callby']);
$this->db->where('callto',$viddata['callto']);

}

}

}