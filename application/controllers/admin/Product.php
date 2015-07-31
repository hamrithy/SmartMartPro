<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Product extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();
		}
		
		public function index(){
			$this->load->view("admin-kh4it/listproduct");
		}
		
		public function addProduct(){
			$this->load->view("admin-kh4it/addproduct");
		}
		
		public function addProductPro(){
			echo json_encode($this->input->post("ProductDetails"));
			$this->load->model("dto/DtoProduct");
			$this->load->model("dao/DaoProduct");
			$this->DtoProduct->setCategoryid($this->input->post("CategoryID"));
			$this->DtoProduct->setThumbnail($this->input->post("Thumbnail"));
			$this->DtoProduct->setUserid($this->input->post("Thumbnail"));
			$this->DtoProduct->setSeotitle($this->input->post("SEOTitle"));
			$this->DtoProduct->setUserid($this->encryption->decrypt($this->session->userdata("userid")));
			$this->DtoProduct->setSeodescription($this->input->post("SEODescription"));
			$this->DtoProduct->setProductDetails($this->input->post("ProductDetails"));
			$result = $this->DaoProduct->addNewProduct($this->DtoProduct);
			echo json_encode($result);
		}
	}	
?>