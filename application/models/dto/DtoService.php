<?php
	class DtoService{
		private $serviceid;
		private $title;
		private $description;
		private $imageurl;
		private $linkto;
		private $ordering;

		public function getServiceid(){
		return $this->serviceid;
	}
	
	public function setServiceid($serviceid){
		$this->serviceid = $serviceid;
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
	
	}

?>