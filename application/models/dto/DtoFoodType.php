<?php
class DtoFoodType{

	private $foodtypeid;
	private $title;
	private $description;
	
	
	public function getFoodtypeid(){
		return $this->foodtypeid;
	}
	
	public function setFoodtypeid($foodtypeid){
		$this->foodtypeid = $foodtypeid;
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