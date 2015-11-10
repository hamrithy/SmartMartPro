<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Category extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model("dto/Dtocategory");
			$this->load->model("dao/Daocategory");
		}	
		
		
		public function lstCategory(){
			//$data["lstCategory"] = $this->Daocategory->lstCategory(lang('lang_id'));
			$data["lstCategory"] = $this->Daocategory->lstCategory(lang('lang_id'));
			foreach($data["lstCategory"] as $key=> $category){
				$categories[$key] = array(
					'main' => $category,
					'subcategory' =>$this->Daocategory->getSubCategory(lang('lang_id'),$category->categoryid)
				);
			}
			$data["lstCategory"] = $categories;
			echo json_encode($data);
		}
		
		
	}

?>