<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Category extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model("dto/Dtocategory");
			$this->load->model("dao/Daocategory");
		}	
		
		
		public function lstCategory(){
			$data["lstCategory"] = $this->Daocategory->lstCategory(lang('lang_id'));
			echo json_encode($data);
		}
		
		
	}

?>