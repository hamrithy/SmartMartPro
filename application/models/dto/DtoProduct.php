<?php
	class DtoProduct{
		
		private $productid;
		private $categoryid;
		private $thumbnail;
		private $userid;
		private $seotitle;
		private $seodescription;
		private $productDetail = array();
		
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

		public function getProductDetails(){
			return $this->productDetail;
		}

		public function setProductDetails($productDetails){
			$this->productDetail = $productDetails;
		}
	}

