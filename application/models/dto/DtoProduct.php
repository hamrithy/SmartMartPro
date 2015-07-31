<?php
	class DtoProduct{
		
		private $productid;
		private $categoryid;
		private $thumbnail;
		private $userid;
		private $seotitle;
		private $seodescription;
		
		private $languageid;
		private $title;
		private $cation;
		private $descritption;
		private $createdate;
		
		
		public function getProductid(){
			return $this->productid;
		}
		
		public function setProductid($productid){
			$this->productid = $productid;
		}
		
		public function getCategoryid(){
			return $this->categoryid;
		}
		
		public function setCategoryid($categoryid){
			$this->categoryid = $categoryid;
		}
		
		public function getThumbnail(){
			return $this->thumbnail;
		}
		
		public function setThumbnail($thumbnail){
			$this->thumbnail = $thumbnail;
		}
		
		public function getUserid(){
			return $this->userid;
		}
		
		public function setUserid($userid){
			$this->userid = $userid;
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
		
		public function getCation(){
			return $this->cation;
		}
		
		public function setCation($cation){
			$this->cation = $cation;
		}
		
		public function getDescritption(){
			return $this->descritption;
		}
		
		public function setDescritption($descritption){
			$this->descritption = $descritption;
		}
		
		public function getCreatedate(){
			return $this->createdate;
		}
		
		public function setCreatedate($createdate){
			$this->createdate = $createdate;
		}
		
		
		

	
	}

