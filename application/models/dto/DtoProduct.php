<?php
	class DtoProduct{
		
		private $productid;
		private $entitle;
		private $endescription;
		private $khtitle;
		private $khdescription;
		private $createdate;
		private $seotitle;
		private $seodescription;
		private $thumbnail;
		private $userid;

		public function getProductid(){
			return $this->productid;
		}
	
		public function setProductid($productid){
			$this->productid = $productid;
		}
	
		public function getEntitle(){
			return $this->entitle;
		}
	
		public function setEntitle($entitle){
			$this->entitle = $entitle;
		}
	
		public function getEndescription(){
			return $this->endescription;
		}
	
		public function setEndescription($endescription){
			$this->endescription = $endescription;
		}
	
		public function getKhtitle(){
			return $this->khtitle;
		}
	
		public function setKhtitle($khtitle){
			$this->khtitle = $khtitle;
		}
	
		public function getKhdescription(){
			return $this->khdescription;
		}
	
		public function setKhdescription($khdescription){
			$this->khdescription = $khdescription;
		}
	
		public function getCreatedate(){
			return $this->createdate;
		}
	
		public function setCreatedate($createdate){
			$this->createdate = $createdate;
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
	
	}

