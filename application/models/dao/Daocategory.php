<?php

class Daocategory extends CI_Model{

	public function Daocategory(){
		parent::__construct();
	}

	public function addCategory(Dtocategory $cat){
		$this->load->model("dto/Dtocategory");
		$this->db->trans_begin();
		$category = array(
						"ordering" => $cat->getOrdering(),
						"subof" => $cat->getSubof()
					);
		$this->db->insert("CATEGORIES",$category);
		$catID = $this->db->insert_id();
		
		foreach($cat->getCategorydetail() as $cats){
			$cats["categoryid"] = $catID;
			$this->db->insert("CATEGORYDETAIL",$cats);
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