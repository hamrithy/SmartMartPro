<?php

class DaoProduct extends CI_Model{

	public function DaoCategory(){
		parent::__construct();
		$this->load->model("dto/DtoProduct");
	}

	public function addNewProduct(DtoProduct $products){
		$this->db->trans_begin();
		$product = array(
						"categoryid" => $products->getCategoryid(),
						"userid" => $products->getUserid(),
						"seotitle" => $products->getSeotitle(),
						"seodescription" => $products->getSeodescription()
					);
		$this->db->insert("PRODUCTS",$product);
		$productID = $this->db->insert_id();
		
		foreach($products->getProductDetails() as $pro){
			$pro["productid"] = $productID;
			$this->db->insert("PRODUCTDETAIL",$pro);
		}
		if($this->db->trans_status()===FALSE){
			$this->db->trans_rollback();
			return FALSE;
		}else{
			$this->db->trans_commit();
			return TRUE;
		}
	}

	public function countProducts(){
		return $this->db->count_all('PRODUCTS');
	}

	public function getRecentProducts($limit){
		$this->db->select('productid,title,imageurl,createdate');
		$this->db->from('PRODUCTDETAIL');
		$this->db->limit($limit);
		$this->db->order_by('productid','DESC');
		$query = $this->db->get();
		return $query->result();
	}
}

?>