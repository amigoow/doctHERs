 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Developer extends CI_Controller {

  public function index(){
if($this->session->userdata('userin')){

    $this->load->view("view_dev_main");
 
}
else
{


  redirect("home/login","refresh");
}
  }

function getUserDataApi($email,$pass,$auth){

$this->db->select()->from("apps");
$this->db->where("tokenkey",$auth);
$q1 = $this->db->get();
$rec1 = $q1->num_rows();
if($rec1){
$rec = $this->dev->getUserApi($email,$pass);
print("<pre>".json_encode($rec,JSON_PRETTY_PRINT)."</pre>");

}
else
{
echo "Invalid Authenticaion";

}



}


function getLoginApi($email,$pass,$auth){

$this->db->select()->from("apps");
$this->db->where("tokenkey",$auth);
$q1 = $this->db->get();
$rec1 = $q1->num_rows();
if($rec1){
$rec = $this->dev->getLoginuserApi($email,$pass);
print("<pre>".json_encode($rec,JSON_PRETTY_PRINT)."</pre>");

}
else
{
echo "Invalid Authenticaion";

}



}

function PostLoginApi(){

$email =   $this->input->post("email");
$pass =  $this->input->post("password");
$auth =  $this->input->post("auth");
$this->db->select()->from("apps");
$this->db->where("tokenkey",$auth);
$q1 = $this->db->get();
$rec1 = $q1->num_rows();
if($rec1){
$rec = $this->dev->getLoginuserApi($email,$pass);
print("<pre>".json_encode($rec,JSON_PRETTY_PRINT)."</pre>");

}
else
{
echo "Invalid Authenticaion";

}


}

  function steptwo(){

      $this->load->view("view_dev_two");

  }

  public function makeanapp(){

$data = array(
  'tokenkey' => md5(uniqid()) ,
  'madeby' => $this->session->userdata['userin']['username'],
  'appname' => $this->input->post("name")
   );

$this->dev->createApp($data);
$msg = array('errmsg' => "App Created" );
$this->load->view("view_dev_two",$msg );

  }

 public function __construct(){

    parent::__construct();
    session_start();
       error_reporting(0);
     $this->load->helper('url');
      $this->load->helper('form'); 
    $this->load->library('session');
     $this->load->library('form_validation');
     $this->load->model('MainLoginUser');
   $this->load->model('main_random_functions');
      $this->load->model('bsns_random_functions');
   $this->load->model('main_video_function');
   $this->load->model('post');
   $this->load->model('business');
      $this->load->model('dev');
 }
    
    
}