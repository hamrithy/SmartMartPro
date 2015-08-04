<?php

class DaoProduct extends CI_Model{

	public function DaoCategory(){
		parent::__construct();
		$this->load->model("dto/DtoProduct");
	}

	public function lstProduct($langid,$productid){
		$this->db->select('p.productid ,  p.seotitle , p.seodescription ,  p.thumbnailurl, 
						   cd.categoryid , cd.title as categoryname ,
						   u.userid , u.username ,  
						   d.title,d.caption,d.description,d.createddate');
		$this->db->from('PRODUCTS p');
		$this->db->join('PRODUCTDETAIL d', 'p.productid = d.productid');
		$this->db->where('d.languageid',$langid);
		$this->db->join('CATEGORIES c', 'p.categoryid = c.categoryid');
		$this->db->join('CATEGORYDETAIL cd', 'cd.categoryid = c.categoryid');
		$this->db->where('cd.languageid',$langid);
		$this->db->join('USERS u', 'p.userid = u.userid');
		$this->db->order_by("p.productid", "desc");
		if($productid != 0){
			$this->db->where('p.productid',$productid);
		}
		$query = $this->db->get();
		return $query->result();
	}
	
	public function getProduct($productid){
		$this->db->select('d.languageid,d.title,d.caption,d.description , p.productid,p.seotitle,p.seodescription,  p.categoryid,p.thumbnailurl ');
		$this->db->from('PRODUCTS p');
		$this->db->join('PRODUCTDETAIL d', 'p.productid = d.productid');
		$this->db->where('p.productid',$productid);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function addNewProduct(DtoProduct $products){
		$this->db->trans_begin();
		$product = array(
						"categoryid" => $products->getCategoryid(),
						"userid" => $products->getUserid(),
						"seotitle" => $products->getSeotitle(),
						"seodescription" => $products->getSeodescription(),
						"thumbnailurl" => $products->getThumbnailurl()
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
	
	public function deleteProduct($productid){
		$this->db->trans_begin();
	
		// DELETE ALL DETAILS
		$this->db->where('productid', $productid);
		$this->db->delete('PRODUCTDETAIL');
	
		// DELETE MAIN
		$this->db->where('productid', $productid);
		$this->db->delete('PRODUCTS');
		if($this->db->trans_status()===FALSE){
			$this->db->trans_rollback();
			return FALSE;
		}else{
			$this->db->trans_commit();
			return TRUE;
		}
	}
	
	public function updateProduct(DtoProduct $products){
		$productID = $products->getProductid();
		$this->db->trans_begin();
		$product = array(
				"categoryid" => $products->getCategoryid(),
				"userid" => $products->getUserid(),
				"seotitle" => $products->getSeotitle(),
				"seodescription" => $products->getSeodescription(),
				"thumbnailurl" => $products->getThumbnailurl()
		);
		$this->db->where("productid", $productID);
		$this->db->update("PRODUCTS",$product);
		
		
		foreach($products->getProductDetails() as $pro){
			$pro["productid"] = $productID;
			$this->db->where('productid', $productID);
			$this->db->where('languageid', $pro['languageid']);
			$this->db->update("PRODUCTDETAIL",$pro);
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
		$this->db->select('pd.productid,pd.description , pd.title, pd.caption, pd.createddate, p.thumbnailurl');
		$this->db->from('PRODUCTS p');
		$this->db->join('PRODUCTDETAIL pd','p.productid = pd.productid');
		$this->db->limit($limit);
		$this->db->order_by('productid','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	
}

?>