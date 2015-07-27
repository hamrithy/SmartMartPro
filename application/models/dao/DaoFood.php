<?php
class DaoFood extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->model('dto/DtoFood');
	}

	public function getAllFoodItems(){
		$this->db->select("A.foodid, A.title As food_title, A.description As food_description, A.foodtypeid, A.thumbnailurl, A.promotiontype, A.price, A.userid, B.title As foodtype_title, B.description As footype_description");
		$this->db->from("FOODS A");
		$this->db->join("FOODTYPES B",'A.foodtypeid=B.foodtypeid');
		$query = $this->db->get();
		return $query->result();
	}

	public function addFoodItem(DtoFood $food){
		$data = array('title' 			=>  $food->getTitle(),
					  'description'  	=>  $food->getDescription(),
					  'thumbnailurl'	=>	$food->getThumbnailurl(),
					  'promotiontype'	=>	$food->getPromotiontype(),
					  'price'			=>	$food->getPrice(),
					  'userid'			=>	$food->getUserid(),
					  'foodtypeid'		=>	$food->getFoodTypeid(),
					  'seotitle'		=>	$food->getSeotitle(),
					  'seodescription'	=>	$food->getSeodescription()
					);
		return $this->db->insert('FOODS', $data);
	}

	public function updateFoodItem(DtoFood $food){
		$data = array('title' 			=> 	$food->getTitle(),
					  'description'		=>	$food->getDescription(),
					  'thumbnailurl' 	=>	$food->getThumbnailurl(),
					  'promotiontype'	=>	$food->getPromotiontype(),
					  'price'			=>	$food->getPrice(),
					  'userid'			=>	$food->getUserid(),
					  'foodtypeid'		=>	$food->getFoodtypeid(),
					  'foodid'			=>	$food->getFoodid(),
					  'seotitle'		=>	$food->getSeotitle(),
					  'seodescription'	=>	$food->getSeodescription()
			);
		$this->db->where('foodid',$food->getFoodid());
		$this->db->update('FOODS', $data);
	}

	public function deleteFoodItem($id){
		$this->db->where('foodid', $id);
		return $this->db->delete('FOODS');
	}

	public function getFoodItem($id){
		$this->db->where('foodid',$id);
		$query = $this->db->get('FOODS');
		return $query->result();
	}

	//TODO: To get the food details by id
	public function getFoodDetails($foodId){
		$this->db->select("A.foodid, A.title As food_title, A.description As food_description, A.thumbnailurl, A.promotiontype, A.price, A.userid, B.title As foodtype_title, B.description As footype_description");
		$this->db->from("FOODS A");
		$this->db->join("FOODTYPES B",'A.foodtypeid=B.foodtypeid');
		$this->db->where("A.foodid", $foodId);
		$query = $this->db->get();
		log_message('debug',$query->num_rows());
		return $query->row();
	}
	
	
	public function listRecentFood($limit){
		$this->db->select('foodid,title, description,thumbnailurl,promotiontype,price');
		$this->db->from('FOODS');
		$this->db->limit($limit);
		$this->db->order_by("foodid","desc");
		$query = $this->db->get();
		return $query->result();
	}

	public function listBestoffer($type){
		$this->db->select("A.foodid, A.title , A.description , A.thumbnailurl, A.promotiontype, A.price, A.userid");
		$this->db->from("FOODS A");
		$this->db->where('A.promotiontype',$type);
		$this->db->order_by('A.foodid', 'desc');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}

}