<?php
class DtoMenu {

	private $menuid;
	private $title;
	private $linkto;
	private $ordering;
	private $subof;
	
	
	public function getMenuid(){
		return $this->menuid;
	}
	
	public function setMenuid($menuid){
		$this->menuid = $menuid;
	}
	
	public function getTitle(){
		return $this->title;
	}
	
	public function setTitle($title){
		$this->title = $title;
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
	
}