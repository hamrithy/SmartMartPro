<?php

class Daocategory extends CI_Model{

	public function Daocategory(){
		parent::__construct();
	}

	public function addCategory(Dtocategory $cat){
		$this->load->model("dto/Dtocategory");
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

	
}

?>