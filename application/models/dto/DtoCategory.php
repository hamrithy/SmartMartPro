<?php
class DtoCategory{

	private $categoryid;
	private $entitle;
	private $endescription;
	private $khtitle;
	private $khdescription;
	private $seotitle;
	private $seodescription;
	private $ordering;
	private $subof;
	
	
	public function getCategoryid(){
		return $this->categoryid;
	}

	public function setCategoryid($categoryid){
		$this->categoryid = $categoryid;
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