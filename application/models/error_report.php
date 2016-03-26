<?php
class Error_Report extends CI_Model{

function deletereport($id){

	$this->db->delete("error_reports",array('id' => $id));

}

function updatereport($id){

$data = array('status' => "Solved" );

$this->db->where('id',$id);
	$this->db->update("error_reports",$data);

}
}