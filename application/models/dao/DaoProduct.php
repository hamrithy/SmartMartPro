<?php

class DaoProduct extends CI_Model{

	public function DaoCategory(){
		parent::__construct();
	}

	public function addNewProduct($product){
		$product = array(
						"categoryid" => $product->getCategoryid(),
						"userid" => $product->getUserid(),
						//"thumbnail" => $product->getThumbnail(),
						"seotitle" => $product->getSeotitle(),
						"seodescription" => $product->getSeodescription()
					);
		$this->db->insert("PRODUCTS",$product);
		foreach($product->getProductDetails() as $pro){
			$this->db->insert("PRODUCTDETAIL",$pro);
		}
		$this->db->trans_commit();
		$this->db->trans_complete();
		return true;
	}
}

?>