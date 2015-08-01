<?php
class DtoCategory{

	private $categoryid;
	private $ordering;
	private $subof;
	private $seotitle;
	private $seodescription;
	
	private $languageid;
	private $title;
	private $description;
	private $categorydetail=array();
	
	
	public function getCategoryid(){
		return $this->categoryid;
	}
	
	public function setCategoryid($categoryid){
		$this->categoryid = $categoryid;
	}
	
	public function getOrdering(){
		return $this->ordering;
	}
	
	public function setOrdering($ordering){
		$this->ordering = $ordering;
	}
	
	public function getSubof(){
		return $this->subof;
	}
	
	public function setSubof($subof){
		$this->subof = $subof;
	}
	
	public function getSeotitle(){
		return $this->seotitle;
	}
	
	public function setSeotitle($seotitle){
		$this->seotitle = $seotitle;
	}
	
	public function getSeodescription(){
		return $this->seodescription;
	}
	
	public function setSeodescription($seodescription){
		$this->seodescription = $seodescription;
	}
	
	public function getLanguageid(){
		return $this->languageid;
	}
	
	public function setLanguageid($languageid){
		$this->languageid = $languageid;
	}
	
	public function getTitle(){
		return $this->title;
	}
	
	public function setTitle($title){
		$this->title = $title;
	}
	
	public function getDescription(){
		return $this->description;
	}
	
	public function setDescription($description){
		$this->description = $description;
	}
	public function getCategorydetail(){
		return $this->categorydetail;
	}
	
	public function setCategorydetail($detail){
		$this->categorydetail = $detail;
	}
	
	
	
	
	
	
}