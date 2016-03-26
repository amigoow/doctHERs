<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
    
 public function index(){

redirect("home/index","refresh");
 }

public function reports(){


$data2  = array(
'usertypead' => $this->getUserTypeAdmin($this->session->userdata('loggedin'))
    );

    $this->load->view('view_header',$data2);
$this->load->view('view_rep');
$this->load->view('view_footer');    
}
public function admin(){
       $this->load->helper('url');
      $this->load->helper('form'); 
    $this->load->view("view_login");
    $this->load->library('form_validation');
}

 public function __construct(){

    parent::__construct();
    session_start();
   error_reporting(0);
     $this->load->helper('url');
      $this->load->helper('form'); 
    $this->load->library('session');
    $this->load->model('LoginUser');
     $this->load->library('form_validation');
    $this->load->model('random_functions');
    $this->load->model('error_report');
    $this->load->model('Select_AllUsers');
$this->load->model('Select_AllPosts');
$this->load->model('select_allloc');
$this->load->model('insert_admin');
   
 }


public function advertisments(){

if($this->getUserTypeAdmin($this->session->userdata('loggedin')) =="full")
{

$data2  = array(
'usertypead' => $this->getUserTypeAdmin($this->session->userdata('loggedin'))
    );

    $this->load->view('view_header',$data2);
    $ads['ads'] = $this->random_functions->getAds();

$this->load->view('view_ads',$ads);
$this->load->view('view_footer');
}
else
{
    redirect("site/admin","refresh");
}

}

public function error_reports(){


if($this->getUserTypeAdmin($this->session->userdata('loggedin')) == "err" || $this->getUserTypeAdmin($this->session->userdata('loggedin')) =="full")
{


    $er['er'] = $this->random_functions->geterror_reports();

$data2  = array(
'usertypead' => $this->getUserTypeAdmin($this->session->userdata('loggedin'))
    );

    $this->load->view('view_header',$data2);
$this->load->view('view_error_reports', $er);
$this->load->view('view_footer');

 }
 else
 {

      redirect('Site/index','refresh');
 }

}
public function deleteReport(){
$id = $this->input->post("id");
$this->error_report->deletereport($id);

}
public function updatestatusreport(){
$id = $this->input->post("id");
$this->error_report->updatereport($id);

}
public function deleteUser(){
$id = $this->input->post("id");
$this->Select_AllUsers->deleteusers($id);

}
public function deletePost(){
$id = $this->input->post("id");
$this->Select_AllPosts->deleteposts($id);

}

public function deletead(){
$id = $this->input->post("id");
$this->random_functions->deleteads($id);

}

// ADMINS MAKER


public function make_admin(){
if($this->getUserTypeAdmin($this->session->userdata('loggedin')) =="full")
{

$data2  = array(
'usertypead' => $this->getUserTypeAdmin($this->session->userdata('loggedin'))
    );

    $this->load->view('view_header',$data2);
$this->load->view('view_admin');
$this->load->view('view_footer');
}
else
{
    redirect("site/admin","refresh");
}

}

public function  imakeadmin(){

$this->form_validation->set_rules('name',"Name","trim|required");

$this->form_validation->set_rules('uname',"UserName","trim|required");
$this->form_validation->set_rules('pass','Password','trim|required');
$this->form_validation->set_rules('mtype','Manager Type','trim|required');
$this->form_validation->set_rules('email','Email','trim|required');
if($this->form_validation->run()){
$data = array('name' => $this->input->post('name'),
                'username' => $this->input->post('uname'),
                'pass' => $this->input->post('pass'),
                'email' => $this->input->post('email'),           
                 'roles' => $this->input->post('mtype')           
                    
                 );
$data1['msg'] = "Thankyou, Admin Added";
 $this->insert_admin->addadmin($data);



if($this->getUserTypeAdmin($this->session->userdata('loggedin')) =="full")
{

$data2  = array(
'usertypead' => $this->getUserTypeAdmin($this->session->userdata('loggedin')),

    );


    $this->load->view('view_header',$data2);
$this->load->view('view_admin',$data1);
$this->load->view('view_footer');
}
else
{
    redirect("site/admin","refresh");
}



}
else{
redirect("site/make_admin","refresh");

}



}


// LOCATIONS ///

public function showlocations(){

if($this->getUserTypeAdmin($this->session->userdata('loggedin')) == "loc" || $this->getUserTypeAdmin($this->session->userdata('loggedin')) =="full")
{

$data['allloc'] = $this->select_allloc->showloc();
      
$data2  = array(
'usertypead' => $this->getUserTypeAdmin($this->session->userdata('loggedin'))
    );

    $this->load->view('view_header',$data2);
$this->load->view('view_showlocations',$data);
$this->load->view('view_footer');

}
else{

    redirect("site/admin","refresh");
}
}

public function deleteloc(){
$id = $this->input->post("id");
$this->select_allloc->delloc($id);

}


// DASHBOARD
public function getUserTypeAdmin($ses){


$usertype = $this->random_functions->getusertype($ses['username']);

return $usertype;

}

 public function dashboard(){
    if($this->session->userdata('loggedin')){

$totalusers = $this->random_functions->getTotalUsers();
$totalposts =$this ->random_functions-> getTotalNumberOfPosts();
$getTotalNumberOfLoc=$this ->random_functions-> getTotalNumberOfLocations();

$dataall  = array(
    'numberofusers' => $totalusers,
'totalposts' => $totalposts,
'totalloc' => $getTotalNumberOfLoc,
'usertypead' => $this->getUserTypeAdmin($this->session->userdata('loggedin'))
    );


$data2  = array(
'usertypead' => $this->getUserTypeAdmin($this->session->userdata('loggedin'))
    );

    $this->load->view('view_header',$data2);
$this->load->view('view_dashboard',$dataall);
$this->load->view('view_footer');


    }
    else
    {

        redirect('Site/index','refresh');
    }
 }

// GET LOGIN

    public function getLogin(){
 

$data = array(
'username'  => $this->input->post("username"),
'password'  => $this->input->post("password")

    );

$res = $this->LoginUser->Login($data);
if($res == TRUE){


    $ses_arr = array(
'username' => $this->input->post('username')

        );

$this->session->set_userdata('loggedin',$ses_arr);
redirect("site/dashboard","refresh");
}
else{
$err_msg = array('errmsg' => "Invalid Login Details" );
$this->load->view("view_login",$err_msg);
}


    } 

// Show All Users

public function ShowUsers(){


if($this->getUserTypeAdmin($this->session->userdata('loggedin')) == "users" || $this->getUserTypeAdmin($this->session->userdata('loggedin')) =="full")
{
$data['allusers'] = $this->Select_AllUsers->showallusers();


$data2  = array(
'usertypead' => $this->getUserTypeAdmin($this->session->userdata('loggedin'))
    );

    $this->load->view('view_header',$data2);
$this->load->view('view_showusers',$data);
$this->load->view('view_footer');

}
else
{

    redirect("site/admin","Refresh");
}
}

public function logout(){

    $this->session->sess_destroy();
    redirect('site/index','refresh');
}


// SHow All Posts

public function Posts(){

if($this->getUserTypeAdmin($this->session->userdata('loggedin')) == "posts" || $this->getUserTypeAdmin($this->session->userdata('loggedin')) =="full")
{
$data['allposts'] = $this->Select_AllPosts->showallposts();

$data2  = array(
'usertypead' => $this->getUserTypeAdmin($this->session->userdata('loggedin'))
    );

    $this->load->view('view_header',$data2);
$this->load->view('view_showposts',$data);
$this->load->view('view_footer');

}
else
{

    redirect("site/admin","refresh");
}

}

//  Form login

    public function formLoign(){
 
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','Email','required');
        
        $this->form_validation->set_rules('password','Password','required');
        
        
        if($this->form_validation->run()){
            $this->load->helper('url');
       redirect('site/memebers');
        
        }
        else{
        
            $errors['err'] = "Users Input is not valid.";
            $this->load->view("view_home",$errors);
        }
        
    }
    
    
    
}