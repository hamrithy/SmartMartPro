<?php
class DaoFoodType extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->model('dto/DtoFoodType');
	}

	public function addFoodType(DtoFoodType $foodType){
		$data = array("title" 		 => 	$foodType->getTitle(),
					  "description"  =>		$foodType->getDescription()
			);
		return $this->db->insert('FOODTYPES', $data);
	}

	public function deleteFoodType($id){
		$this->db->where('foodtypeid',$id);
		return $this->db->delete('FOODTYPES');
	}

	public function getAllFoodTypes(){
		$this->db->order_by('foodtypeid', 'desc');
		$query = $this->db->get('FOODTYPES');
		return $query->result();
	}

	public function getAllFoodTypesAndCountFoods(){
		$sql = "SELECT *, (SELECT COUNT(A.foodid) FROM FOODS A WHERE A.foodtypeid=B.foodtypeid) AS TOTL FROM FOODTYPES B ORDER BY B.title"; 
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function getAllFoodTypesOrderByTitle(){
		$this->db->order_by('title', 'ASC');
		$query = $this->db->get('FOODTYPES');
		return $query->result();
	}

	public function getFoodType($id){
		$this->db->where('foodtypeid',$id);
		$query = $this->db->get('FOODTYPES');
		return $query->result();
	}

	public function updateFoodType(DtoFoodType $foodType){
		$data = array('title' 		=> $this->DtoFoodType->getTitle(),
					  'description' => $this->DtoFoodType->getDescription(),
					  'foodtypeid' 	=> $this->DtoFoodType->getFoodtypeid()
		 );
		$this->db->where('foodtypeid', $this->DtoFoodType->getFoodtypeid());
		$this->db->update('FOODTYPES', $data);
		if($this->db->affected_rows() == 1){
			return true;
		}else{
			return false;
		}
	}
	
	
	
	public function listRecentFoodType($limit){
		$this->db->select('foodtypeid,title, description');
		$this->db->from('FOODTYPES');
		$this->db->limit($limit);
		$this->db->order_by("foodtypeid","desc");
		$query = $this->db->get();
		return $query->result();
	}
}