<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Category extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();
		}
		
	public function index(){
			$this->load->view("admin-kh4it/listcategory");
		}
		
		public function addCategory(){
			$this->load->view("admin-kh4it/addcategory");
		}

		public function addCategoryPro(){
		//	echo json_decode($this->input->post("CategoryDetail"));
			$this->load->model("dto/DtoCategory");
			$this->load->model("dao/DaoCategory");
			$this->DtoCategory->setOrdering($this->input->post("txtorder"));
			$this->DtoCategory->setSubof($this->input->post("txtcategory"));
			$this->DtoCategory->setCategorydetail($this->input->post("CategoryDetail"));			
			$result = $this->DaoCategory->addCategory($this->DtoCategory);
			echo json_encode($result);
		}
		
		
	}

	
