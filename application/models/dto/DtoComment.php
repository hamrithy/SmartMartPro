<?php
class DtoComment{

	private $commentid;
	private $commenter;
	private $email;
	private $message;
	private $submitdate;
	private $postid;
	private $subof;
	
	
	
	public function getCommentid(){
		return $this->commentid;
	}
	
	public function setCommentid($commentid){
		$this->commentid = $commentid;
	}
	
	public function getCommenter(){
		return $this->commenter;
	}
	
	public function setCommenter($commenter){
		$this->commenter = $commenter;
	}
	
	public function getEmail(){
		return $this->email;
	}
	
	public function setEmail($email){
		$this->email = $email;
	}
	
	public function getMessage(){
		return $this->message;
	}
	
	public function setMessage($message){
		$this->message = $message;
	}
	
	public function getSubmitdate(){
		return $this->submitdate;
	}
	
	public function setSubmitdate($submitdate){
		$this->submitdate = $submitdate;
	}
	
	public function getPostid(){
		return $this->postid;
	}
	
	public function setPostid($postid){
		$this->postid = $postid;
	}
	
	public function getSubof(){
		return $this->subof;
	}
	
	public function setSubof($subof){
		$this->subof = $subof;
	}
	
	
}