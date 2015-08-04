<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Product extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model("dto/DtoProduct");
			$this->load->model("dao/DaoProduct");
		}

		public function index(){
			$this->listProduct();
		}

		public function findProductById($id){
			$this->load->view("product_details");
		}			
		
		public function listProduct(){
			$data["lstProduct"] = $this->DaoProduct->lstProduct(lang('lang_id'),0);
			$this->load->view('products', $data);
		}
		
		public function detail($id){
			$data["title"] = "Product Details";
			$data["page"] = "Product";
			$data["getProduct"] = $this->DaoProduct->lstProduct(lang('lang_id'),$id);
			$this->load->view("product_details",$data);
		}
	}

?>