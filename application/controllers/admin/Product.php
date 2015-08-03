<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Product extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model("dto/DtoProduct");
			$this->load->model("dao/DaoProduct");
		}
		
		public function index(){
			$this->listProduct();
		}
		
		public function addProduct(){
			$this->load->view("admin-kh4it/addproduct");
		}
		
		public function listProduct(){
			
			$data["lstProduct"] = $this->DaoProduct->lstProduct(2,0);
			$this->load->view('admin-kh4it/listproduct', $data);
		}
		
		public function getShowProduct($productid){
			$data["proid"]= $productid;
			$this->load->view("admin-kh4it/addproduct", $data);
		}
		
		public function getProduct($productid){
			$result = $this->DaoProduct->getProduct($productid);
			$this->output->set_content_type('application/json')->set_output(json_encode($result));
		}
		
		public function addProductPro(){
			$this->DtoProduct->setCategoryid($this->input->post("CategoryID"));
			$this->DtoProduct->setThumbnailurl($this->input->post("Thumbnailurl"));
			$this->DtoProduct->setUserid($this->encryption->decrypt($this->session->userdata("userid")));
			$this->DtoProduct->setSeotitle($this->input->post("SEOTitle"));
			$this->DtoProduct->setSeodescription($this->input->post("SEODescription"));
			$this->DtoProduct->setProductDetails($this->input->post("ProductDetails"));			
			$result = $this->DaoProduct->addNewProduct($this->DtoProduct);
			echo json_encode($result);
		}
		
		public function deleteProduct($productid){
			$this->DaoProduct->deleteProduct($productid);
			redirect("admin/product");
		}
		
		public function updateProductPro(){
			$this->DtoProduct->setProductid($this->input->post("txtproductid"));
			$this->DtoProduct->setCategoryid($this->input->post("CategoryID"));
			$this->DtoProduct->setThumbnailurl($this->input->post("Thumbnailurl"));
			$this->DtoProduct->setUserid($this->encryption->decrypt($this->session->userdata("userid")));
			$this->DtoProduct->setSeotitle($this->input->post("SEOTitle"));
			$this->DtoProduct->setSeodescription($this->input->post("SEODescription"));
			$this->DtoProduct->setProductDetails($this->input->post("ProductDetails"));
			$result = $this->DaoProduct->updateProduct($this->DtoProduct);
			echo json_encode($result);
		}
	}	
?>