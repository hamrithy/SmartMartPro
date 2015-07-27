<?php
class DtoPage {

	private $pageid;
	private $title;
	private $body;
	private $createddate;
	private $userid;
	private $seotitle;
	private $seodescription;
	
	public function setSeotitle($seotitle){
		$this->seotitle = $seotitle;
	}
	
	public function getSeotitle(){
		return $this->seotitle;
	}
	
	public function setSeodescription($seodescription){
		$this->seodescription = $seodescription;
	}
	
	public function getSeodescription(){
		return $this->seodescription;
	}
	
	public function getPageid(){
		return $this->pageid;
	}
	
	public function setPageid($pageid){
		$this->pageid = $pageid;
	}
	
	public function getTitle(){
		return $this->title;
	}
	
	public function setTitle($title){
		$this->title = $title;
	}
	
	public function getBody(){
		return $this->body;
	}
	
	public function setBody($body){
		$this->body = $body;
	}
	
	public function getCreateddate(){
		return $this->createddate;
	}
	
	public function setCreateddate($createddate){
		$this->createddate = $createddate;
	}
	
	public function getUserid(){
		return $this->userid;
	}
	
	public function setUserid($userid){
		$this->userid = $userid;
	}
	
}