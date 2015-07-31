<?php
class DtoMenu {

	private $menuid;
	private $linkto;
	private $ordering;
	private $subof;
	
	private $languageid;
	private $title;
	private $description;
	
	public function getMenuid(){
		return $this->menuid;
	}
	
	public function setMenuid($menuid){
		$this->menuid = $menuid;
	}
	
	public function getLinkto(){
		return $this->linkto;
	}
	
	public function setLinkto($linkto){
		$this->linkto = $linkto;
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
	
}