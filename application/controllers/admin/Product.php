<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Product extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->library("Facebook");
			$this->load->model("dto/DtoProduct");
			$this->load->model("dao/DaoProduct");
		}
		
		public function index(){
			$this->listProduct();
		}
		
		public function addProduct(){
			if($this->facebook->get_user()==false){
				redirect($this->facebook->login_url());
			}
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
			$this->DtoProduct->setPrice($this->input->post("price"));
			$this->DtoProduct->setRecommend($this->input->post("recommend"));
			$this->DtoProduct->setThumbnailurl($this->input->post("Thumbnailurl"));
			$this->DtoProduct->setUserid($this->encryption->decrypt($this->session->userdata("userid")));
			$this->DtoProduct->setSeotitle($this->input->post("SEOTitle"));
			$this->DtoProduct->setSeodescription($this->input->post("SEODescription"));
			$this->DtoProduct->setProductDetails($this->input->post("ProductDetails"));			
			$result = $this->DaoProduct->addNewProduct($this->DtoProduct);
			if($result!=false && $result>0){
				$productDetails = $this->input->post("ProductDetails");
				$thumbnailurl = explode(";", $this->input->post("Thumbnailurl"));
				/*var_dump($this->facebook->get_user());*/
				$data = array(
							"name"    => $productDetails[1]["title"],
							//"link"    => 'http://smartmart.kh4it.com/product/detail/'.$this->DtoProduct->getCategoryid().'/'.$result,
							"link"    => site_url().'product/detail/'.$this->DtoProduct->getCategoryid().'/'.$result,
							"caption" => $productDetails[1]["title"],
							"message" => "Product Name: ". $productDetails[1]["title"].
                           				 "\nDescriptions: ". strip_tags($productDetails[1]["description"]). 
                           				 "\nPrice : ".$this->DtoProduct->getPrice(). " $ ",
							"picture" => (count($thumbnailurl)>0) ? $thumbnailurl[0] : '',
							//"picture" => "http://smartmart.kh4it.com/public/upload/Products/1.jpg" 
					);
				$this->facebook->post($data);
				$result = TRUE;
			}
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
			$this->DtoProduct->setPrice($this->input->post("price"));
			$this->DtoProduct->setRecommend($this->input->post("recommend"));
			$this->DtoProduct->setUserid($this->encryption->decrypt($this->session->userdata("userid")));
			$this->DtoProduct->setSeotitle($this->input->post("SEOTitle"));
			$this->DtoProduct->setSeodescription($this->input->post("SEODescription"));
			$this->DtoProduct->setProductDetails($this->input->post("ProductDetails"));
			$result = $this->DaoProduct->updateProduct($this->DtoProduct);
			echo json_encode($result);
		}

		public function test(){
			$this->load->library("Facebook");
			echo '<a href="' . $this->facebook->login_url() . '">Login</a>';
			var_dump($this->facebook->get_user());
				$data = array(
							"name"    => "AAA",
							"link"    => "http://smartmart.kh4it.com/product/detail/84/9",
							"caption" => "AAA",
							"message" => "AAA",                        				 
							"picture" => "http://smartmart.kh4it.com/public/upload/Products/1.jpg"
					);
			//$this->facebook->post($data);
		}
	}	
?>