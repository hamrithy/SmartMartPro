<?php

class DtoSlide{

	private $slideid;
	private $title;
	private $caption;
	private $linkto;
	private $imageurl;
	private $ordering;
	private $userid;
	
	
	public function getSlideid(){
		return $this->slideid;
	}
	
	public function setSlideid($slideid){
		$this->slideid = $slideid;
	}
	
	public function getTitle(){
		return $this->title;
	}
	
	public function setTitle($title){
		$this->title = $title;
	}
	
	public function getCaption(){
		return $this->caption;
	}
	
	public function setCaption($caption){
		$this->caption = $caption;
	}
	
	public function getLinkto(){
		return $this->linkto;
	}
	
	public function setLinkto($linkto){
		$this->linkto = $linkto;
	}
	
	public function getImageurl(){
		return $this->imageurl;
	}
	
	public function setImageurl($imageurl){
		$this->imageurl = $imageurl;
	}
	
	public function getOrdering(){
		return $this->ordering;
	}
	
	public function setOrdering($ordering){
		$this->ordering = $ordering;
	}
	
	public function getUserid(){
		return $this->userid;
	}
	
	public function setUserid($userid){
		$this->userid = $userid;
	}
	
	
}