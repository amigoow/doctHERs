 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

  public function get_link(){

    return "http://localhost/amigo/";
  }
    
public function getNotifyNumbers(){

  echo $this->post->getNotifyNum($this->session->userdata['userin']['username']);
  
}

function reset(){

  $this->load->view("view_main_reset");
}

function passwordReset(){

$rec = $this->main_random_functions->getPasswordFromNumber($this->input->post("number"));
$pass =  $rec['0']->password;
$md = base64_encode($pass);

redirect("http://photontechs.com/imp/?number=03115009655&password=".$md,"refresh");

}

function SinglePostGenraion(){

$id = $this->input->post("id");

$res = $this->post->getSinglePost($id);
$html ="";


foreach ($res->result() as $key) {
$status = "";
if($key->posttype == "text"){
  $status = '<div class="status" style="padding-left:20px;"> '.$key->status .' </div>';
   
}
else 
  if($key->posttype == "video"){

      $status = '<div class="status" style="padding-left:20px;"> 
<video style="width:100%;padding-right:20px;" controls>
  <source src="'.$this->get_link().$key->status.'" type="video/mp4">
 
  Your browser does not support HTML5 video.
</video>

      </div>';



  }
else{

  $status = '<div class="status" style="padding-left:20px;"> <img style="width:100%;padding-right:20px;" src="'.$this->get_link().$key->status.'" /> </div>';
}
$likes= "0";
if($key->likes){
$likes = $key->likes;

}
$name = $this->main_random_functions->getUsernameFromContacts($key->postedby);
$rec2 = $name->result();
$nam ="";
$del = "";
$connum ="";
if($key->postedby == $this->session->userdata['userin']['username'])
{
$nam = "Me";
$del = '<a href="javascript:void(0);" class="delpost" data-id="'.$key->postid.'" >Delete</a>';
$connum = $this->session->userdata['userin']['username'];
}
else
{
$nam = $rec2['0']->contactname;
$connum = $rec2['0']->contactnumber;
}
$rd = $this->getCommnets($key->postid);


$smiles = array(":D", ":P", ":(",":'(",":o","*_*");
$smileimages   = array("<img  class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/smile.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/stuck_out_tongue_winking_eye.png' />"
, "<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/worried.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/sob.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/hushed.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/heart_eyes.png' />"
);

$newstatus = str_replace($smiles, $smileimages, $status);
  $html .=   '<hr />
  <div class="smallsec" id="postid'.$key->postid.'">
      <div class="row ">
        <div class="col-md-1">
        <img src="'.$this->get_link().$this->getUserImageFromNumber($key->postedby).'"  width="60"/>  
        </div>
        <div class="col-md-4">
       <strong> &nbsp;  &nbsp;  '.$nam .' </strong> <br /> &nbsp;&nbsp;&nbsp;
       <abbr class="timeago" title="'.$key->timepost.'"></abbr>
        </div>
            <div class="col-md-7" style="  text-align: right">
'.$del.'
            </div>
      </div>
      <br />
      <div class="row">
              '.$newstatus.'
   
      </div>
      <br />
     <a href="javascript:void(0);" class="thumb thumup" data-type="thumbup" data-id="'.$key->postid.'" > <i class="fa fa-thumbs-up" style="font-size: 22px;"></i> </a>       <a data-id="'.$key->postid.'" href="#modal-container-908562" role="button" class="btn modallikes" data-toggle="modal"> <span id="'.$key->postid.'">'.$likes.'</span>  Likes this</a> 

      

  <div id="commnets'.$key->postid.'">    '.$rd.' </div>

      <div class="row">

      <div class="col-md-6">
          <input type="text" class="form-control" id="cmnt'.$key->postid.'" required /> 
      </div>
      <div class="col-md-2 commentbox">
        <input type="button" data-notify="'.$connum.'" data-id="'.$key->postid.'" class="btn btn-success cmntbtn" value="Comment" />
       
      </div>
      </div>
      </div>';

}
$html .= '
<div class="container">
  <div class="row clearfix">
    <div class="col-md-12 column">
       
      <div class="modal fade" id="modal-container-376346" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="myModalLabel">
                  People Who Dislike This Post
              </h4>
            </div>
            <div class="modal-body" id="peoplepdislike" >
              ...
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          
        </div>
        
      </div>
      
    </div>
  </div>
</div>


<div class="container">
  <div class="row clearfix">
    <div class="col-md-12 column">
 
      
      <div class="modal fade" id="modal-container-908562" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="myModalLabel">
                People who like this post
              </h4>
            </div>
            <div class="modal-body" id="peopleplike">
              
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
        
      </div>
      
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){

 $("abbr.timeago").timeago();



    $(document).on("click", "a.delpost", function() {

var  postid = $(this).attr("data-id");

$.post("../deletepost",{

      pid : postid

    },function(data){
     $("#postid"+postid).hide(500);

    });


});


 

 $(document).on("click", "a.modaldislikes", function() {

var  postid = $(this).attr("data-id");


    $.post("../getPeopleDisLikePost",{

      pid : postid

    },function(data){
     $("#peoplepdislike").html(data);

    });



});


    $(document).on("click", "a.modallikes", function() {

var  postid = $(this).attr("data-id");


    $.post("../getPeopleLikePost",{

      pid : postid

    },function(data){
     $("#peopleplike").html(data);

    });



});

$(".smallsec .thumup").click(function() {


var likeby = "'.$this->session->userdata['userin']['username'].'";

var postid = $(this).attr("data-id");


    $.post("../dolike",{

      pid : postid,
        likby : likeby 

    },function(data){

      $("#"+postid).html(data);


    });





});



$(document).on("click", "a.thumdown", function() {


var likeby = "'.$this->session->userdata['userin']['username'].'";

var postid = $(this).attr("data-id");

    $.post("../dodislike",{

      pid : postid,
        likby : likeby 

    },function(data){

    });


    $.post("../dislikepost",{

      pid : postid      

    },function(data){

      $("#dis"+postid).html(data);
    });


});




$(".smallsec .commentbox .cmntbtn").click(function() {


var commentby = "'.$this->session->userdata['userin']['username'].'";

var postid = $(this).attr("data-id");
var cmnto = $(this).attr("data-notify");

var comment1 = $("#cmnt"+postid).val();

    $.post("../donotify",{

      contextid : postid,
        notifytype : "Comment",
        notifyby : commentby,
        notifyto : cmnto,
        seen : "0"

    },function(data){


    });



    $.post("../docomment",{

      pid : postid,
        cmnt :  comment1,
        comntby : commentby

    },function(data){
$("#cmnt"+postid).val("");
  $.post("../getpostcommnets",{
              pid : postid

    },function(data){
$("#commnets"+postid).html(data);
    });


    });


  



});


});

</script>';

echo $html;



}


public function singlepost($id){

  
  $this->load->view('view_profile_header');

$rec = $this->main_random_functions->getUsertypeBsns($this->session->userdata['userin']['username']);

$data2 = array(

  'usertype' => $rec['0']->useracctype,
  'balance' => $this->getBalance(),
  'ads' => $this->getAdshome(),
  'spostid' => $id
  );


$this->load->view('view_main_single',$data2);

}

public function getAllNotifications(){
  $res =  $this->post->getNotifications($this->session->userdata['userin']['username']);
 foreach ($res as $key) {

  $name = $this->main_random_functions->getUsernameFromContacts($key->notifyby);
$rec2 = $name->result();

$nam = $rec2['0']->contactname;

echo "<li> <a href='singlepost/".$key->contextid."'><div class='row'>
<div class='col-md-2'>
<img src='".$this->get_link().$this->getUserImageFromNumber($key->notifyby)."' width='40'/> 
</div>
<div class='col-md-8' style='color:#111;'>

 <strong>".$nam . "</strong>  commented on your post
</div>
</div></a>
<hr />
  </li>";


 }
 

}

public function clearnotify(){

  $this->post->seenpost($this->session->userdata['userin']['username']);
}

    public function videoCall($datanum){

 $ID =  $this->uri->segment(4);

$dtnid = array('dataid' => $ID,
'datanumber' => $datanum 
 );


$this->load->view('view_main_camera',$dtnid);
}  

function update_report(){
$r = $this->input->post("dname");
$data = array(
  'reporterror' => $r ,
  'status' => "Not Resolved",
  'madeby' => $this->session->userdata['userin']['username']
   );
$this->db->insert("error_reports",$data);

}


function adsanalytics($link,$id){


  $data = array(
    'clickslink' => base64_decode($link),
    'adid' => $id
     );
$this->main_random_functions->updateanalytics($data);
redirect(base64_decode($link),"refresh");
  
}

function showads(){

    $this->load->view("view_main_header");
  

  $this->load->view('view_main_showads');
}

function reports(){
    $this->load->view("view_main_header");
  

  $this->load->view('view_main_reports');
}

function getAdshome(){

 return $this->main_random_functions->getAds();


}

function getBalance(){

$rec = $this->main_random_functions->getUserBalance($this->session->userdata['userin']['username']);
if(isset($rec['0']->bal))
{
return $rec['0']->bal;

}
else
{
  return 0;
}



}

function adpost(){



   $config['upload_path'] = '../amigo/uploadedimages';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100000';
        $config['max_width']  = '10024';
        $config['max_height']  = '12768';
        $config['file_name'] = md5(uniqid(rand()));
        $this->load->library('upload', $config);
        $this->upload->do_upload('adimage_file');

$upload_data = $this->upload->data();
$filename = $upload_data['file_name'];



$title = $this->input->post("title");
$link = $this->input->post("link");
$shortdesc = $this->input->post("shortdesc");

$data = array(
  'title' =>  $title,
  'link' => $link,
  'shortdesc' => $shortdesc,
  'madeby' => $this->session->userdata['userin']['username'],
    'image' => "uploadedimages/".$filename
   );

$this->main_random_functions->adpostnow($data);


}



public function update_settings(){
$name = $this->input->post("dname");
$chk = $this->input->post("chk");


$user = $this->session->userdata['userin']['username'];

$this->main_random_functions->update_profile($name,$user,$chk);


}

public function settings(){

  $this->load->view("view_main_header");
  
  $this->load->view("view_main_settings");

}


function bsnsfeedsgenration(){


$res = $this->post->getbsnsFeedsPosts($this->session->userdata['userin']['username']);
$html ="";


foreach ($res as $key) {
$status = "";
if($key->posttype == "text"){
  $status = '<div class="status" style="padding-left:20px;"> '.$key->status .' </div>';
   
}
else 
  if($key->posttype == "video"){

      $status = '<div class="status" style="padding-left:20px;"> 
<video style="width:100%;padding-right:20px;" controls>
  <source src="'.$this->get_link().$key->status.'" type="video/mp4">
 
  Your browser does not support HTML5 video.
</video>

      </div>';



  }
else{

  $status = '<div class="status" style="padding-left:20px;"> <img style="width:100%;padding-right:20px;" src="'.$this->get_link().$key->status.'" /> </div>';
}
$likes= "0";
if($key->likes){
$likes = $key->likes;

}
$name = $this->main_random_functions->getBName($key->postedby);
$rec2 = $name;
$nam ="";
$del = "";
if($key->postedby == $this->session->userdata['userin']['username'])
{
$nam = "Me";
$del = '<a href="javascript:void(0);" class="delpost" data-id="'.$key->postid.'" >Delete</a>';
}
else
{
$nam = $rec2['0']->Name;

}
$rd = $this->getCommnets($key->postid);


$smiles = array(":D", ":P", ":(",":'(",":o","*_*");
$smileimages   = array("<img  class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/smile.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/stuck_out_tongue_winking_eye.png' />"
, "<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/worried.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/sob.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/hushed.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/heart_eyes.png' />"
);

$newstatus = str_replace($smiles, $smileimages, $status);
  $html .=   '<hr />
  <div class="smallsec" id="postid'.$key->postid.'">
      <div class="row ">
        <div class="col-md-1">
        <img src="'.$this->get_link().$this->getUserImageFromNumber($key->postedby).'"  width="60"/>  
        </div>
        <div class="col-md-3">
       <strong> &nbsp;  &nbsp;  '.$nam .' </strong> <br /> &nbsp;&nbsp;&nbsp;
         <abbr class="timeago" title="'.$key->timepost.'"></abbr>
        </div>
            <div class="col-md-8" style="  text-align: right">
'.$del.'
            </div>
      </div>
      <br />
      <div class="row">
              '.$newstatus.'
   
      </div>
      <br />
         <a href="javascript:void(0);" class="thumb thumup" data-type="thumbup" data-id="'.$key->postid.'" > <i class="fa fa-thumbs-up" style="font-size: 22px;"></i> </a>       <a data-id="'.$key->postid.'" href="#modal-container-908562" role="button" class="btn modallikes" data-toggle="modal"> <span id="'.$key->postid.'">'.$likes.'</span>  Likes this</a> 



      </div>';

}





echo $html;

}




public function dofollow(){

$data = array(
  'followby' => $this->input->post("followby"),
  'followto' => $this->input->post("followto")
 );

$this->main_random_functions->dofollownow($data);


}


 public function bsns_uploading_video()
  {

   $config['upload_path'] = '../amigo/uploadedvideos';
        $config['allowed_types'] = '*';
        $config['max_size'] = '100000';
        $config['max_width']  = '10024';
        $config['max_height']  = '12768';
        $config['file_name'] = md5(uniqid(rand()));
        $this->load->library('upload', $config);
        $this->upload->do_upload('video_file');

$upload_data = $this->upload->data();
$filename = $upload_data['file_name'];

        $data = array(

  'postedby' => $this->session->userdata['userbsns']['email'],
  'status' => "uploadedvideos/".$filename,
  'posttype' => "video"
   );
$this->post->postnow($data);

  }




 public function uploading_video()
  {

   $config['upload_path'] = '../amigo/uploadedvideos';
        $config['allowed_types'] = '*';
        $config['max_size'] = '100000';
        $config['max_width']  = '10024';
        $config['max_height']  = '12768';
        $config['file_name'] = md5(uniqid(rand()));
        $this->load->library('upload', $config);
        $this->upload->do_upload('video_file');

$upload_data = $this->upload->data();
$filename = $upload_data['file_name'];

        $data = array(

  'postedby' => $this->session->userdata['userin']['username'],
  'status' => "uploadedvideos/".$filename,
  'posttype' => "video",
  'timepost' =>$this->input->post("datefi")
   );
$this->post->postnow($data);

  }


 public function update_cover()
  {

   $config['upload_path'] = '../amigo/uploadedimages';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100000';
        $config['max_width']  = '10024';
        $config['max_height']  = '12768';
        $config['file_name'] = md5(uniqid(rand()));
        $this->load->library('upload', $config);
        $this->upload->do_upload('image_file');

$upload_data = $this->upload->data();
$filename = $upload_data['file_name'];

$this->main_random_functions->update_cover_image("uploadedimages/".$filename,$this->session->userdata['userin']['username']);

  }


 public function update_image()
  {

  $data = explode(',', $this->input->post("imagedata"));

$filename_path = md5(time().uniqid()).".jpg";
 $decoded=base64_decode($data[1]); 


file_put_contents("../amigo/uploadedimages/".$filename_path,$decoded);

$this->main_random_functions->update_profile_image("uploadedimages/".$filename_path,$this->session->userdata['userin']['username']);

  }


public function bsns_uploading_image()
  {

   $config['upload_path'] = '../amigo/uploadedimages';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100000';
        $config['max_width']  = '10024';
        $config['max_height']  = '12768';
        $config['file_name'] = md5(uniqid(rand()));
        $this->load->library('upload', $config);
        $this->upload->do_upload('image_file');

$upload_data = $this->upload->data();
$filename = $upload_data['file_name'];

        $data = array(

  'postedby' => $this->session->userdata['userbsns']['email'],
  'status' => "uploadedimages/".$filename,
  'posttype' => "image"
   );
$this->post->postnow($data);

  }





 public function uploading_image()
  {

   $config['upload_path'] = '../amigo/uploadedimages';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100000';
        $config['max_width']  = '10024';
        $config['max_height']  = '12768';
        $config['file_name'] = md5(uniqid(rand()));
        $this->load->library('upload', $config);
        $this->upload->do_upload('image_file');

$upload_data = $this->upload->data();
$filename = $upload_data['file_name'];

        $data = array(

  'postedby' => $this->session->userdata['userin']['username'],
  'status' => "uploadedimages/".$filename,
  'posttype' => "image",
    'timepost' =>$this->input->post("datefi")
   );
$this->post->postnow($data);

  }

public function getusernotifycount(){

  $result = $this->main_random_functions->getNotifyCount($this->input->post("callto"));

echo $result;


}

public function getLoginBusiness(){

$this->load->view("view_busns_sigin");
}

public function getLoginBsns(){



$data = array(
'email'  => $this->input->post("email"),
'password'  => $this->input->post("password")

    );

$res = $this->MainLoginUser->LoginBusiness($data);
if($res == TRUE){
    $ses_arr = array(
'email' => $this->input->post('email')

        );

$this->session->set_userdata('userbsns',$ses_arr);
redirect("home/businessdash","refresh");
}
else{
$err_msg = array('success' => "<div class='alert alert-danger'>Invalid Login Details</div>" );
$this->load->view("view_busns_sigin",$err_msg);
}
}

public function business(){


$this->load->view('view_login_busns');

}

public function businessdash(){
  $data = array(

    'mainlink' => $this->get_link(),
    'getimage' => $this->getBusinsesImage(),
    'name' => $this->getBusnsName()

   );

  $this->load->view('view_main_header',$data);

$this->load->view("view_main_feeds_busns",$data);
  
}

public function getBusnsName(){


$bname = $this->main_random_functions->getBName($this->session->userdata['userbsns']['email']);

return $bname['0']->businessname;



}

public function getBusinsesImage(){



$userimage = $this->main_random_functions->getBusnsimage($this->session->userdata['userbsns']['email']);


 foreach ( $userimage->result() as $key ) {
 $image =   $key->picture;
return $image;
 }
}








public function verify($hash){

  $this->business->updatehash($hash);

  redirect("home/index","refresh");

}

public function getbussinessSignup(){

$key = md5(uniqid(time()));

$data = array(

  'Name' =>  $this->input->post("name") ,
  'email' => $this->input->post("email"),
  'password' => $this->input->post("password"),
'useracctype' => 'buisness',
  'userstatus' => $key
 );

  $this->business->business_signup($data);
  $config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'ssl://smtp.googlemail.com',
    'smtp_port' => 465,
    'smtp_user' => 'thephotontechnologies@gmail.com',
    'smtp_pass' => 'Engrdani1992!!@',
    'mailtype'  => 'html', 
    'charset'   => 'iso-8859-1'
);
$this->load->library('email', $config);
$this->email->set_newline("\r\n");

$this->email->from('thephotontechnologies@gmail.com', 'BeMy Amigo');
$this->email->to($this->input->post("email")); 
$this->email->subject('Business Account Verification');
$this->email->message('
<div style="  min-height: 300px;
  background: #111;
  text-align: center;
  padding-top: 25px;
  ">
<h1 style="color:#fff;">BeMy Amigo</h1>
<h5 style="color:#ccc;"><em>World First Contact List Based Social Network</em></h5>
<div style="background:#009688;  padding: 20px;">
  <h2 style="color:#fff !important">
  Thank you for signing up with Be My Amigo Business Account</h2>
 <h4 style="  color: #ddd;  color: #fff;"> Please click here to verify your email account  

 <a style="  background: #333;
  padding: 13px;
  text-decoration: none;
  margin-left: 11px;
  border-radius: 20px 0px;
  color: #fff !important;
  " href="http://localhost/CodeIg/home/verify/'.$key.'">Click here</a></h4>
</div>
</div>
  ');  

$result = $this->email->send();
$msg = array('success' => "<div class='alert alert-success'>Thank you for signing up -  We have sent you an email please take a look.</div>" );
$this->load->view('view_login_busns',$msg);

}
public function getusernotify(){

$q = $this->main_random_functions->getNotify($this->input->post("callto"));
$html = '';
foreach ($q->result() as $key) {

$html .= "<div class='alert alert-danger'>

<audio controls autoplay='' style='visibility: hidden;' loop>
  <source src='horse.ogg' type='audio/ogg'>
  <source src='".base_url()."application/assests/sounds/tone.mp3' type='audio/mpeg'>
Your browser does not support the audio element.
</audio>

<a href='videoCall/".$key->callto."/".$key->videoid."' class='delnotify' data-id='".$key->id."'>Video Call from  ".$key->callby."  </a></div>";

}

$html .= 
'<script>

  $(document).ready(function(){



 $(document).on("click", "a.delnotify", function() {

var  id = $(this).attr("data-id");

$.post("delnotvideo",{

vid : id

},function(){});

 });
});

</script>';

echo $html;

}

function paypal(){
if($_POST['payment_status'] == "Completed")
{
  $data = array('bal' => "25" );
  $this->db->select()->from("balance");
    $this->db->where("user",$this->session->userdata['userin']['username']);
$q = $this->db->get();
$re = $q->num_rows();
if($re == 0)
{
 $data = array('bal' => "25",
                'user' => $this->session->userdata['userin']['username']
  );
$this->db->insert("balance",$data);
redirect("home/feeds","refresh");

}
else{
  $this->db->where("user",$this->session->userdata['userin']['username']);
$this->db->update("balance",$data);
redirect("home/feeds","refresh");
}
}
}

public function insertvideoid(){

$data = array('videoid' => $this->input->post("vid") ,
'callby' => $this->session->userdata['userin']['username'],
'callto' => $this->input->post("number")
 );


 $this->main_video_function->ivideodata($data);

}

public function delnotvideo(){

$this->main_random_functions->del_video_not($this->input->post("vid"));

}
 public function index(){

if($this->session->userdata('userin')){

  $data = array(

    'mainlink' => $this->get_link(),
    'getimage' => $this->getUserImage(),
    'getuserfrnds' => $this->getuserfriends(),
     'getusercover' => $this->getUserCoverImage()

   );

  $this->load->view('view_main_header',$data);

$this->load->view('view_main_profile');

}
else
{

  redirect("home/login","refresh");
}
 }

function getUserSearch(){

  $inpt = $this->input->post("userinput");
$res = $this->main_random_functions->getUsersSeraches($this->session->userdata['userin']['username'],$inpt);
$html = "";



foreach ($res as $key) {
$img = "";
if($key->picture)
{
$img = "<img src='".$this->get_link().$key->picture."' width='30'   style='float:left;' />";
}
else
{
$img = "<img src='".$this->get_link()."image/user2.png' width='30'   style='float:left;' />";

}
if($key->useracctype == "buisness"){
$html .= "<a href='UserProfiles/".$key->email."' style='text-decoration:none;' ><div class='hvr-grow' style='border-bottom:1px solid #ccc;padding:10px;'>
".$img."

 &nbsp;  &nbsp; <strong>".$key->Name."</strong> <br />
 &nbsp;  &nbsp; <em></em>
</div>
</a>";

}
else
{
$html .= "
<a href='UserProfiles/".$key->contactnumber."' style='text-decoration:none;' >
<div class='hvr-grow' style='border-bottom:1px solid #ccc;padding:10px;'>
".$img."

 &nbsp;  &nbsp; <strong>".$key->contactname."</strong> <br />
 &nbsp;  &nbsp; <em>".$key->contactnumber."</em>
</div>
</a>";
}



}

echo $html;


}

function base64_to_jpeg($base64_string, $output_file) {
    $ifp = fopen($output_file, "wb"); 

    $data = explode(',', $base64_string);

    fwrite($ifp, base64_decode($data[1])); 
    fclose($ifp); 

    return $output_file; 
}
function UserProfiles($number){

$rec = $this->main_random_functions->getUsertypeBsns($number);

$data3 = array(

  'followby' => $this->session->userdata['userin']['username'],
'followto' => $number
 );

$rec4 = $this->main_random_functions->getfollowstatus($data3);


if($rec['0']->useracctype == "buisness")
{


  $name = $this->main_random_functions->getBName($number);

$nam = $name['0']->Name;
$image = $this->getUserImageFromNumber($number);



$data = array(
'username' => $nam ,
'number' => $number,
'image' => $image,
'mainlink' => $this->get_link(),
'lat'  => $this->getLat($number),
'log' => $this->getLong($number),
'getusercover' => $this->getUserFrndCoverImage($number),
'loc' => 'nolocation',
'followornot' => $rec4
 );

  $this->load->view('view_profile_header');

  $this->load->view('view_main_userprofile',$data);


}
else
{


  $name = $this->main_random_functions->getUsernameFromContacts($number);
$rec2 = $name->result();



$nam = $rec2['0']->contactname;
$image = $this->getUserImageFromNumber($number);



$data = array(
'username' => $nam ,
'number' => $number,
'image' => $image,
'mainlink' => $this->get_link(),
'getusercover' => $this->getUserFrndCoverImage($number),
'lat'  => $this->getLat($number),
'log' => $this->getLong($number)


 );

  $this->load->view('view_profile_header');

  $this->load->view('view_main_userprofile',$data);



}


}


function getLong($number){


$rec = $this->main_random_functions->getLongitude($number);
$rows = $rec->num_rows();
if($rows!=0)
{

$res = $rec->result();


$lat = $res['0']->lng;

return $lat;

}
else
{

  return "----1";
}

}


function getLat($number){


$rec = $this->main_random_functions->getLatitude($number);
$rows = $rec->num_rows();
if($rows!=0)
{

$res = $rec->result();


$lat = $res['0']->lat;

return $lat;
}
else
{
return "----1";

}
}


function feeds(){
  if($this->session->userdata('userin')){

  $data = array(

    'mainlink' => $this->get_link(),
    'getimage' => $this->getUserImage(),
    'getuserfrnds' => $this->getuserfriends()

   );

  $this->load->view('view_main_header',$data);

$rec = $this->main_random_functions->getUsertypeBsns($this->session->userdata['userin']['username']);

$data2 = array(

  'usertype' => $rec['0']->useracctype,
  'balance' => $this->getBalance(),
  'ads' => $this->getAdshome()
  );


$this->load->view('view_main_feeds',$data2);
}
else
{
redirect("home/login","refresh");

}

}

function getbsnspostscount(){

  echo $this->post->getpstcnt($this->session->userdata['userbsns']['email']);

} 

function getpostscount(){

  echo $this->post->getpstcnt($this->session->userdata['userin']['username']);

} 


function bsnsnewsgenration(){


}



function newsgenration(){


$res = $this->post->getFeedsPosts($this->session->userdata['userin']['username'],100);
$html ='<ul class="demo1">';
foreach ($res as $key) {
$name = $this->main_random_functions->getUsernameFromContacts($key->postedby);
$rec2 = $name->result();
$nam ="";



if($key->postedby == $this->session->userdata['userin']['username'])
{
$nam = "Me";

}
else
{
$nam = $rec2['0']->contactname;

}



if($key->posttype == "text"){
  $status = '<div class="status" style="padding-left:20px;"><strong><em>'.$nam.'</em></strong> Posted <strong>'.$key->status .'</strong> </div>';
   
}
else
if($key->posttype == "video"){
  $status = '<div class="status" style="padding-left:20px;"><strong>'.$nam.'</strong> Posted An Video</div>';

}

else{

  $status = '<div class="status" style="padding-left:20px;"><strong>'.$nam.'</strong> Posted An Image</div>';
}


$smiles = array(":D", ":P", ":(",":'(",":o","*_*");
$smileimages   = array("<img  class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/smile.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/stuck_out_tongue_winking_eye.png' />"
, "<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/worried.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/sob.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/hushed.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/heart_eyes.png' />"
);

$newstatus = str_replace($smiles, $smileimages, $status);



$html .= '
<li class="news-item">
<table cellpadding="4">
<tr>
<td><img src="'.$this->get_link().$this->getUserImageFromNumber($key->postedby).'" width="60" class="img-circle" /></td>
<td>'.$newstatus.'</td>
</tr>
</table>
</li>

';


  
}

$html .= '</ul>
<script>
    $(document).ready(function() {
   $(".demo1").bootstrapNews({
            newsPerPage: 3,
            autoplay: true,
      pauseOnHover:true,
            direction: "up",
            newsTickerInterval: 3000,
            onToDo: function () {
                //console.log(this);
            }
        });
 });
</script>

';
echo $html;
}

function deletecmnt(){

  $id = $this->input->post("cmntid");
  $this->db->where("id",$id);
  $this->db->delete("comments");

}

function feedsgenration(){


$limit = $this->input->post('limit');
$res = $this->post->getFeedsPosts($this->session->userdata['userin']['username'],$limit);
$html ="";


foreach ($res as $key) {
$status = "";
if($key->posttype == "text"){
  $status = '<div class="status" style="padding-left:20px;"> '.$key->status .' </div>';
   
}
else 
  if($key->posttype == "video"){

      $status = '<div class="status" style="padding-left:20px;"> 
<video style="width:100%;padding-right:20px;" controls>
  <source src="'.$this->get_link().$key->status.'" type="video/mp4">
 
  Your browser does not support HTML5 video.
</video>

      </div>';



  }
else{

  $status = '<div class="status" style="padding-left:20px;"> <img style="width:100%;padding-right:20px;" src="'.$this->get_link().$key->status.'" /> </div>';
}
$likes= "0";
if($key->likes){
$likes = $key->likes;

}
$name = $this->main_random_functions->getUsernameFromContacts($key->postedby);
$rec2 = $name->result();
$nam ="";
$del = "";
$connum ="";
if($key->postedby == $this->session->userdata['userin']['username'])
{
$nam = "Me";
$del = '<a href="javascript:void(0);" class="delpost" data-id="'.$key->postid.'" >Delete</a>';
$connum = $this->session->userdata['userin']['username'];
}
else
{
$nam = $rec2['0']->contactname;
$connum = $rec2['0']->contactnumber;
}
$rd = $this->getCommnets($key->postid);


$smiles = array(":D", ":P", ":(",":'(",":o","*_*");
$smileimages   = array("<img  class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/smile.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/stuck_out_tongue_winking_eye.png' />"
, "<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/worried.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/sob.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/hushed.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/heart_eyes.png' />"
);

$newstatus = str_replace($smiles, $smileimages, $status);
  $html .=   '<hr />
  <div class="smallsec  wow fadeIn" id="postid'.$key->postid.'">
      <div class="row ">
        <div class="col-md-1">
        <img src="'.$this->get_link().$this->getUserImageFromNumber($key->postedby).'"  width="60"/>  
        </div>
        <div class="col-md-4">
       <strong> &nbsp;  &nbsp;  '.$nam .' </strong> <br /> &nbsp;&nbsp;&nbsp;
       <abbr class="timeago" title="'.$key->timepost.'"></abbr>
        </div>
            <div class="col-md-7" style="  text-align: right">
'.$del.'
            </div>
      </div>
      <br />
      <div class="row">
              '.$newstatus.'
   
      </div>
      <br />
     <a href="javascript:void(0);" class="thumb thumup" data-type="thumbup" data-id="'.$key->postid.'" > <i class="fa fa-thumbs-up" style="font-size: 22px;"></i> </a>       <a data-id="'.$key->postid.'" href="#modal-container-908562" role="button" class="btn modallikes" data-toggle="modal"> <span id="'.$key->postid.'">'.$likes.'</span>  Likes this</a> 

      

  <div id="commnets'.$key->postid.'">    '.$rd.' </div>

      <div class="row">

      <div class="col-md-6">
          <input type="text" class="form-control" id="cmnt'.$key->postid.'" required /> 
      </div>
      <div class="col-md-2 commentbox">
        <input type="button" data-notify="'.$connum.'" data-id="'.$key->postid.'" class="btn btn-success cmntbtn" value="Comment" />
       
      </div>
      </div>
      </div>';

}
$html .= '
<div class="container">
  <div class="row clearfix">
    <div class="col-md-12 column">
       
      <div class="modal fade" id="modal-container-376346" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="myModalLabel">
                  People Who Dislike This Post
              </h4>
            </div>
            <div class="modal-body" id="peoplepdislike" >
              ...
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          
        </div>
        
      </div>
      
    </div>
  </div>
</div>


<div class="container">
  <div class="row clearfix">
    <div class="col-md-12 column">
 
      
      <div class="modal fade" id="modal-container-908562" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="myModalLabel">
                People who like this post
              </h4>
            </div>
            <div class="modal-body" id="peopleplike">
              
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
        
      </div>
      
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){

 $("abbr.timeago").timeago();



$(document).on("click", "a.delcmnt", function() {

var cmnttid = $(this).attr("data-id");

$.post("deletecmnt",{

      cmntid : cmnttid

    },function(data){
     $("#del"+cmnttid).hide(500);

    });


});




    $(document).on("click", "a.delpost", function() {

var  postid = $(this).attr("data-id");

$.post("deletepost",{

      pid : postid

    },function(data){
     $("#postid"+postid).hide(500);

    });


});


 

 $(document).on("click", "a.modaldislikes", function() {

var  postid = $(this).attr("data-id");


    $.post("getPeopleDisLikePost",{

      pid : postid

    },function(data){
     $("#peoplepdislike").html(data);

    });



});


    $(document).on("click", "a.modallikes", function() {

var  postid = $(this).attr("data-id");


    $.post("getPeopleLikePost",{

      pid : postid

    },function(data){
     $("#peopleplike").html(data);

    });



});

$(".smallsec .thumup").click(function() {


var likeby = "'.$this->session->userdata['userin']['username'].'";

var postid = $(this).attr("data-id");


    $.post("dolike",{

      pid : postid,
        likby : likeby 

    },function(data){

      $("#"+postid).html(data);


    });





});



$(document).on("click", "a.thumdown", function() {


var likeby = "'.$this->session->userdata['userin']['username'].'";

var postid = $(this).attr("data-id");

    $.post("dodislike",{

      pid : postid,
        likby : likeby 

    },function(data){

    });


    $.post("dislikepost",{

      pid : postid      

    },function(data){

      $("#dis"+postid).html(data);
    });


});




$(".smallsec .commentbox .cmntbtn").click(function() {





var commentby = "'.$this->session->userdata['userin']['username'].'";

var postid = $(this).attr("data-id");
var cmnto = $(this).attr("data-notify");

var comment1 = $("#cmnt"+postid).val();

  if(comment1 == ""){

$("#cmnt"+postid).notify(
  "Amgio, Say something", 
  { position:"bottom center",
     style: "bootstrap",
  // default class (string or [string])
  className: "error"
   }
);

        }
        else
        {


    $.post("donotify",{

      contextid : postid,
        notifytype : "Comment",
        notifyby : commentby,
        notifyto : cmnto,
        seen : "0"

    },function(data){


    });



    $.post("docomment",{

      pid : postid,
        cmnt :  comment1,
        comntby : commentby

    },function(data){
$("#cmnt"+postid).val("");
  $.post("getpostcommnets",{
              pid : postid

    },function(data){
$("#commnets"+postid).html(data);
    });


    });

}


  



});


});

</script>';

echo $html;

}

function deletepost(){

$this->post->delpost($this->input->post("pid"));


}


function getpostcommnets(){

  $html2="";
$rec = $this->post->getAllComments($this->input->post('pid'));
foreach ($rec->result() as $key) {
$name = $this->main_random_functions->getUsernameFromContacts($key->madeby);
$rec2 = $name->result();



$smiles = array(":D", ":P", ":(",":'(",":o","*_*");
$smileimages   = array("<img  class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/smile.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/stuck_out_tongue_winking_eye.png' />"
, "<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/worried.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/sob.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/hushed.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/heart_eyes.png' />"
);

$newcmnt = str_replace($smiles, $smileimages, $key->comment);


if($key->madeby == $this->session->userdata['userin']['username'])
{
$html2 .= "<div class='cmntfeed' id='del".$key->cmntid."'><strong>Me </strong>".$newcmnt."<br /> <a href='javascript:void(0);' data-id='".$key->cmntid."' class='delcmnt'  >x</a> </div>";
}
else
{
if (isset($rec2['0'])) {
$html2 .= "<div class='cmntfeed'><strong>".$rec2['0']->contactname."</strong> ".$newcmnt."<br /></div>";
}
else{
$name2 = $this->main_random_functions->getBName($key->madeby);


$html2 .= "<div class='cmntfeed'><strong>".$name2['0']->Name."</strong> ".$newcmnt."<br /></div>";


}
}
}
echo $html2;
}



function donotify(){


$data = array(
  'contextid' => $this->input->post("contextid") ,
   'notifytype' => $this->input->post("notifytype") ,
    'notifyby' => $this->input->post("notifyby") ,
     'notifyto' => $this->input->post("notifyto") ,
      'seen' => $this->input->post("seen")  
   );
  $this->post->putnotify($data);

}



function getbsnsCommnets($postid){

  $html2="";
$rec = $this->post->getBsnsAllComments($postid);
foreach ($rec->result() as $key) {
$name = $this->main_random_functions->getBName($key->madeby);
$rec2 = $name;

$smiles = array(":D", ":P", ":(",":'(",":o","*_*");
$smileimages   = array("<img  class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/smile.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/stuck_out_tongue_winking_eye.png' />"
, "<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/worried.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/sob.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/hushed.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/heart_eyes.png' />"
);

$newcmnt = str_replace($smiles, $smileimages, $key->comment);



if($key->madeby == $this->session->userdata['userbsns']['email'])
{


$html2 .= "<div class='cmntfeed'><strong>Me </strong>".$newcmnt."<br /></div>";
}
else
{
$html2 .= "<div class='cmntfeed'><strong>".$rec2['0']->businessname."</strong> ".$newcmnt."<br /></div>";
}
}
return $html2;
}



function getCommnets($postid){

  $html2="";
$rec = $this->post->getAllComments($postid);
//print_r($rec->result());
foreach ($rec->result() as $key) {
$name = $this->main_random_functions->getUsernameFromContacts($key->madeby);
$rec2 = $name->result();

$smiles = array(":D", ":P", ":(",":'(",":o","*_*");
$smileimages   = array("<img  class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/smile.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/stuck_out_tongue_winking_eye.png' />"
, "<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/worried.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/sob.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/hushed.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/heart_eyes.png' />"
);

$newcmnt = str_replace($smiles, $smileimages, $key->comment);



if($key->madeby == $this->session->userdata['userin']['username'])
{


$html2 .= "<div class='cmntfeed' id='del".$key->cmntid."'><strong>Me </strong>".$newcmnt."<br /> <a href='javascript:void(0);' data-id='".$key->cmntid."' class='delcmnt'  >x</a> </div>";
}
else
{
if (isset($rec2['0'])) {
$html2 .= "<div class='cmntfeed'><strong>".$rec2['0']->contactname."</strong> ".$newcmnt."<br /> </div>";
}
else{
$name2 = $this->main_random_functions->getBName($key->madeby);


$html2 .= "<div class='cmntfeed'><strong>".$name2['0']->Name."</strong> ".$newcmnt."<br /></div>";


}
}
}
return $html2;
}

function getuserposts(){

$res = $this->post->getPosts($this->session->userdata['userin']['username']);
$html ="";


foreach ($res->result() as $key) {
$status = "";
if($key->posttype == "text"){
  $status = '<div class="status" style="padding-left:20px;"> '.$key->status .' </div>';
   
}
else 
  if($key->posttype == "video"){

      $status = '<div class="status" style="padding-left:20px;"> 
<video style="width:100%;padding-right:20px;" controls>
  <source src="'.$this->get_link().$key->status.'" type="video/mp4">
 
  Your browser does not support HTML5 video.
</video>

      </div>';



  }
else{

  $status = '<div class="status" style="padding-left:20px;"> <img style="width:100%;padding-right:20px;" src="'.$this->get_link().$key->status.'" /> </div>';
}

$likes= "0";
$likes= "0";
if($key->likes){
$likes = $key->likes;

}



$smiles = array(":D", ":P", ":(",":'(",":o","*_*");
$smileimages   = array("<img  class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/smile.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/stuck_out_tongue_winking_eye.png' />"
, "<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/worried.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/sob.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/hushed.png' />",
"<img class='smile' src='".base_url()."application/assests/emotions/graphics/emojis/heart_eyes.png' />"
);

$status1 = str_replace($smiles, $smileimages,$status );
$del = '<a href="javascript:void(0);" class="delpost" data-id="'.$key->postid.'" >Delete</a>';

$rd = $this->getCommnets($key->postid);

  $html .=   '<hr />
  <div class="smallsec" id="postid'.$key->postid.'">
      <div class="row ">
        <div class="col-md-1">
        <img src="'.$this->get_link().$this->getUserImageFromNumber($key->postedby).'" width="60"/>  
        </div>
        <div class="col-md-3">
       <strong> &nbsp;  &nbsp;  Me </strong> <br /> &nbsp;&nbsp;&nbsp;
       <abbr class="timeago" title="'.$key->timepost.'"></abbr>
        </div>
            <div class="col-md-8" style="  text-align: right">
'.$del.'
            </div>
      </div>
      <br />
      <div class="row">
              '.$status1.'
   
      </div>
      <br />
     <a href="javascript:void(0);" class="thumb thumup" data-type="thumbup" data-id="'.$key->postid.'" > <i class="fa fa-thumbs-up" style="font-size: 22px;"></i> </a>       <a data-id="'.$key->postid.'" href="#modal-container-908562" role="button" class="btn modallikes" data-toggle="modal"> <span id="'.$key->postid.'">'.$likes.'</span>  Likes this</a> 

      

  <div id="commnets'.$key->postid.'">    '.$rd.' </div>

      <div class="row">

      <div class="col-md-6">
          <input type="text" class="form-control" id="cmnt'.$key->postid.'" required /> 
      </div>
      <div class="col-md-2 commentbox">
        <input type="button"  data-id="'.$key->postid.'" class="btn btn-success cmntbtn" value="Comment" />
      </div>
      </div>
      </div>';
}
$html .= '
<div class="container">
  <div class="row clearfix">
    <div class="col-md-12 column">
 
      
      <div class="modal fade" id="modal-container-908562" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="myModalLabel">
                People who like this post
              </h4>
            </div>
            <div class="modal-body" id="peopleplike">
              
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
        
      </div>
      
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){

 $("abbr.timeago").timeago();

  $(document).on("click", "a.delpost", function() {

var  postid = $(this).attr("data-id");

$.post("deletepost",{

      pid : postid

    },function(data){
     $("#postid"+postid).hide(500);

    });


});

$(document).on("click", "a.modallikes", function() {

var  postid = $(this).attr("data-id");


    $.post("getPeopleLikePost",{

      pid : postid

    },function(data){
     $("#peopleplike").html(data);

    });



});





$(".smallsec .thumup").click(function() {


var likeby = "'.$this->session->userdata['userin']['username'].'";

var postid = $(this).attr("data-id");


    $.post("dolike",{

      pid : postid,
        likby : likeby 

    },function(data){

      $("#"+postid).html(data);


    });





});



$(document).on("click", "a.thumdown", function() {


var likeby = "'.$this->session->userdata['userin']['username'].'";

var postid = $(this).attr("data-id");

    $.post("dodislike",{

      pid : postid,
        likby : likeby 

    },function(data){

    });


    $.post("dislikepost",{

      pid : postid      

    },function(data){

      $("#dis"+postid).html(data);
    });


});



$(".smallsec .commentbox .cmntbtn").click(function() {


var commentby = "'.$this->session->userdata['userin']['username'].'";

var postid = $(this).attr("data-id");
var comment1 = $("#cmnt"+postid).val();

    $.post("docomment",{

      pid : postid,
        cmnt :  comment1,
        comntby : commentby

    },function(data){
$("#cmnt"+postid).val("");
    });


    $.post("getpostcommnets",{
              pid : postid

    },function(data){
$("#commnets"+postid).html(data);
    });



});


});

</script>';

echo $html;
}



function getPeopleDisLikePost(){

$rec = $this->post->getDisLkPst($this->input->post("pid"));


foreach ($rec->result() as $key) {

$name = $this->main_random_functions->getUsernameFromContacts($key->userid);
$rec2 = $name->result();
$nam ="";
if($key->userid == $this->session->userdata['userin']['username'])
{
$nam = "Me";
}
else
{
$nam = $rec2['0']->contactname;

}
 echo "<h5 style='border-top:1px solid #ccc;  padding-top: 12px;  font-weight: bold;'>".$nam."</h5>";
  
}


}


function getPeopleLikePost(){

$rec = $this->post->getLkPst($this->input->post("pid"));


foreach ($rec->result() as $key) {

$name = $this->main_random_functions->getUsernameFromContacts($key->userid);
$rec2 = $name->result();
$nam ="";
if($key->userid == $this->session->userdata['userin']['username'])
{
$nam = "Me";
}
else
{

if (isset($rec2['0'])) {

$nam = $rec2['0']->contactname;

}
else{
$name2 = $this->main_random_functions->getBName($key->userid);

$nam = $name2['0']->Name;

}



}
 echo "<h5 style='border-top:1px solid #ccc;  padding-top: 12px;  font-weight: bold;'>".$nam."</h5>";
  
}


}

function docomment(){

  $this->post->inputcommnet($this->input->post('pid'),$this->input->post('cmnt'),$this->input->post('comntby'));
}

function dodislike(){

  $this->post->dislikenow($this->input->post("pid"),$this->input->post('likby'));

}


function dolike(){

echo  $this->post->likenow($this->input->post("pid"),$this->input->post('likby'));


}




function dislikepost(){


echo  $this->post->getdislikes($this->input->post("pid"));  

}

function dislikepostOnId($id){


return  $this->post->getdislikes($this->input->post($id));  

}


function likepost(){


echo  $this->post->getlikes($this->input->post("pid"));  

}

function post(){

$data = array(

  'postedby' => $this->input->post('postedby'),
  'status' => $this->input->post('status'),
  'posttype' => $this->input->post('posttype'),
  'timepost' => $this->input->post('datadate')
   );
$this->post->postnow($data);

}

public function getBsnsImageFromEmail($number){



$userimage = $this->main_random_functions->getBusnsimage($number);


 foreach ( $userimage->result() as $key ) {
 $image =   $key->picture;
if($image)
{

return $image;
 }
 else
 {

  return "image/user2.png";
 }
 }
}



public function getUserImageFromNumber($number){



$userimage = $this->main_random_functions->getimage($number);


 foreach ( $userimage->result() as $key ) {
 $image =   $key->picture;
if($image)
{

return $image;
 }
 else
 {

  return "image/user2.png";
 }
 }
}


public function getUserFrndCoverImage($user){



$userimage = $this->main_random_functions->getimage($user);


 foreach ( $userimage->result() as $key ) {
 $image =   $key->cover;
return $image;
 }
}

public function getUserCoverImage(){



$userimage = $this->main_random_functions->getimage($this->session->userdata['userin']['username']);


 foreach ( $userimage->result() as $key ) {
 $image =   $key->cover;
return $image;
 }
}


public function getUserImage(){



$userimage = $this->main_random_functions->getimage($this->session->userdata['userin']['username']);


 foreach ( $userimage->result() as $key ) {
 $image =   $key->picture;
return $image;
 }
}
public function getUserByPostImage($number){



$userimage = $this->main_random_functions->getimage($number);


 foreach ( $userimage->result() as $key ) {
 $image =   $key->picture;
return $image;
 }


}

public function getuserfriends(){

return $this->main_random_functions->getuserfs();


}

public function login(){

$this->load->view('view_main_login');

} 


public function logout(){

    $this->session->sess_destroy();
    redirect('home/login','refresh');
}

public function getLogin(){


$data = array(
'username'  => $this->input->post("username"),
'password'  => $this->input->post("password")

    );

$res = $this->MainLoginUser->Login($data);
if($res == TRUE){
    $ses_arr = array(
'username' => $this->input->post('username')

        );

$this->session->set_userdata('userin',$ses_arr);
redirect("home/index","refresh");
}
else{
$err_msg = array('errmsg' => "Invalid Login Details" );
$this->load->view("view_main_login",$err_msg);
}
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
 }
    
    
}