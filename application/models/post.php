  <?php
class post extends CI_Model{
 
function postnow($data){
	
	$this->db->insert('posts',$data);

}

public function getNotifications($user){
	$this->db->select()->from("notifications");
	$this->db->where("notifyto",$user);
$this->db->where("notifyto <> notifyby");
	$this->db->order_by("id","DESC");
$q= $this->db->get();
return $q->result();

}
 
 function putnotify($data){

 	$this->db->insert("notifications",$data);

 } 
function delpost($id){

$this->db->where('postid', $id);
$this->db->delete('posts'); 
}

function seenpost($user){
$data = array('seen' => "1" );
	$this->db->where("notifyto",$user);
	$this->db->update("notifications",$data);
}

function getNotifyNum($user){

$this->db->select()->from("notifications");
$this->db->where("notifyto",$user);
$this->db->where("seen","0");
$this->db->where("notifyto <> notifyby");
$q = $this->db->get();
return $q->num_rows();

}

function getBsnsFeedsPosts($user){
 
$this->db->select()->from('posts,users,followus');
	$this->db->where("users.email = posts.postedby and followus.followto = posts.postedby and followus.followby ='$user' ORDER BY posts.postid DESC");
	$q = $this->db->get();
	return $q->result();

}

function getSinglePost($id){

	$this->db->select()->from("posts");
	$this->db->where("postid",$id);
return $this->db->get();
}


function getFeedsPosts($user,$limit){
 
	$this->db->select()->from('contacts,posts,users');
	$this->db->where("postedby = contactnumber and users.email = posts.postedby and user ='$user'  ORDER BY posts.postid  DESC LIMIT ".$limit);
	
	$q1 = $this->db->get();
	


	$this->db->select()->from('posts,users');
	$this->db->where("postedby ='$user' and users.email = posts.postedby  ORDER BY posts.postid DESC LIMIT 2");
	$q2 = $this->db->get();


 $q = array_merge($q2->result(),$q1->result());


	return $q;
}

function getPosts($user){

	$this->db->select()->from('posts');
	$this->db->where('postedby',$user);
	$this->db->order_by("postid","DESC");
	$q = $this->db->get();
	return $q;
}
function getlikes($id){

	
}

function getdislikes($id){

		$this->db->select()->from('dislikes');
	$this->db->where('postid',$id);
	$q = $this->db->get();
	$q1 = $q->num_rows();

	return $q1;
}



function getAllComments($postid){

	$this->db->select("comments.id as cmntid,comments.comment,comments.postid,comments.madeby,posts.postid,contacts.user,contacts.contactname,contacts.contactnumber")->from("comments,contacts,posts");
	$this->db->where("comments.postid ='$postid' and contacts.contactnumber = comments.madeby and comments.postid = posts.postid ORDER BY cmntid DESC");

	$q = $this->db->get();
	return $q;

}

function inputcommnet($postid,$comment,$comntby){
$this->db->query("INSERT INTO comments(comment,postid,madeby) VALUES('$comment','$postid','$comntby');");
}


function dislikenow($postid,$usernumber){


$q1 = $this->db->query("SELECT count(*) as cnt FROM dislikes WHERE userid = '$usernumber' and postid = '$postid' ");


foreach ($q1->result() as $key) {

if($key->cnt == 0){


    $q2 = $this->db->query("SELECT dislike FROM posts WHERE postid = '$postid' ");
foreach ($q2->result() as $key1) {

  $up = $key1->dislike + 1;
    $this->db->query("UPDATE posts set dislike = '$up' WHERE  postid = '$postid' ");
    
$q =$this->db->query("INSERT INTO dislikes(userid,postid) VALUES('$usernumber','$postid')");
}

  

}



}

}

function getDisLkPst($id){

	$this->db->select()->from("dislikes");
	$this->db->where("postid",$id);
	return $this->db->get();

}

function getLkPst($id){

	$this->db->select()->from("likes");
	$this->db->where("postid",$id);
	return $this->db->get();

}


function likenow($postid,$usernumber){


$q1 = $this->db->query("SELECT count(*) as cnt FROM likes WHERE userid = '$usernumber' and postid = '$postid' ");

foreach ($q1->result() as $key) {

if($key->cnt == 0){


    $q2 = $this->db->query("SELECT likes FROM posts WHERE postid = '$postid' ");
foreach ($q2->result() as $key1) {

  $up = $key1->likes + 1;
    $this->db->query("UPDATE posts set likes = '$up' WHERE  postid = '$postid' ");
    
$q =$this->db->query("INSERT INTO likes(userid,postid) VALUES('$usernumber','$postid')");
}

  

}
else
{

    $q2 = $this->db->query("SELECT likes FROM posts WHERE postid = '$postid' ");
foreach ($q2->result() as $key1) {

  $up = $key1->likes - 1;
    $this->db->query("UPDATE posts set likes = '$up' WHERE  postid = '$postid' ");
    
$q =$this->db->query("DELETE FROM likes WHERE userid ='$usernumber' and  postid = '$postid' ");
}

  


}



}

	$this->db->select()->from('likes');
	$this->db->where('postid',$postid);
	$q = $this->db->get();
	$q1 = $q->num_rows();

	return $q1;

}
function getpstcnt($user){

	$this->db->select()->from('posts');
	$this->db->where('postedby',$user);
	$q = $this->db->get();
	return $q->num_rows();

}
}
