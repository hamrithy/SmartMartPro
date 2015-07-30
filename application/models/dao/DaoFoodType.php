<?php
class DaoFoodType extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->model('dto/DtoFoodType');
	}

	public function addFoodType(DtoFoodType $foodType){
		$data = array("title" 		 => 	$foodType->getTitle(),
					  "description"  =>		str_replace(array("\r", "\n"), " ", $foodType->getDescription())
			);
		return $this->db->insert('FOODTYPES', $data);
	}

	public function deleteFoodType($id){
		$this->load->model('dao/DaoMenu');
		$this->db->trans_start();
		$this->db->where('foodtypeid',$id);
		$query = $this->db->get('FOODTYPES');

		$this->db->where('foodtypeid',$id);
		if($this->db->delete('FOODTYPES')){
			//REMOVE FROM MENU that has that food type
			if($this->DaoMenu->deleteMenuByTitle(str_replace(" ","",strtolower($query->row()->title)))){
				$this->db->trans_commit();
			}else{
				$this->db->trans_rollback();
			}
		}else{
			$this->db->trans_rollback();
		}
		$this->db->trans_complete();
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
		$data = array('title' 		=> $foodType->getTitle(),
					  'description' => str_replace(array("\r", "\n"), " ", $foodType->getDescription()),
					  'foodtypeid' 	=> $foodType->getFoodtypeid()
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

	public function countFoodType(){
		return $this->db->count_all('FOODTYPES');
	}
}