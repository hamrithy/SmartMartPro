<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Product extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model("dto/DtoProduct");
			$this->load->model("dao/DaoProduct");
			$this->load->model('dto/DtoRate');
			$this->load->model('dao/DaoRate');	
		}

		public function index(){
			$this->listProduct();
		}

		public function findProductById($id){
			$this->load->view("product_details");
		}			
		
		public function listProduct($offset=0){
			$this->load->library('pagination');
			$limit = 15;
			$config['base_url'] = site_url().'product/listProduct';
			$config['total_rows'] = $this->DaoProduct->getAllProductCount();
			$config['per_page'] = $limit; 
			$config['uri_segment'] = 3;	
			$config['full_tag_open'] = "<ul class='pagination'>";
			$config['full_tag_close'] ="</ul>";
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
			$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
			$config["next_link"] = "Next";
			$config['next_tag_open'] = "<li>";
			$config['next_tagl_close'] = "</li>";
			$config["prev_link"] = "Previous";
			$config['prev_tag_open'] = "<li>";
			$config['prev_tagl_close'] = "</li>";
			$config['last_link'] = 'Last';
			$config['first_link'] = 'First';
			$config['first_tag_open'] = "<li>";
			$config['first_tagl_close'] = "</li>";
			$config['last_tag_open'] = "<li>";
			$config['last_tagl_close'] = "</li>";
			$config["num_links"]  = 6;

			$this->pagination->initialize($config); 

			$data["lstProduct"] = $this->DaoProduct->listProducts($limit,$offset);
			$this->load->view('products', $data);
		}
		
		public function detail($id,$cateid){
			$this->DaoProduct->increaseCount($id);
			$data["title"] = "Product Details";
			$data["page"] = "Product";
			$data["getProduct"] = $this->DaoProduct->lstProduct(lang('lang_id'),$id);
			$data["lstRelateProduct"] = $this->DaoProduct->lstRelatedProduct(20,$id,$cateid);
			//$data['rate'] = $this->DaoRate->checkRate($id); 
			$data['proid'] = $id;
			$this->load->view("product_details",$data);
		}

		public function checkrating($id){
			$result = $this->DaoRate->checkRate($id); 
			$this->output
			    ->set_content_type('application/json')
			    ->set_output(json_encode($result));
		}
		
		public function byCate($cateid,$offset=0){
			$this->load->library('pagination');
			$limit = 15;
			$config['base_url'] = site_url().'product/byCate/'.$cateid;
			$config['total_rows'] = $this->DaoProduct->getAllProductCount($cateid);
			$config['per_page'] = $limit; 
			$config['uri_segment'] = 4;	
			$config['full_tag_open'] = "<ul class='pagination'>";
			$config['full_tag_close'] ="</ul>";
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
			$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
			$config["next_link"] = "Next";
			$config['next_tag_open'] = "<li>";
			$config['next_tagl_close'] = "</li>";
			$config["prev_link"] = "Previous";
			$config['prev_tag_open'] = "<li>";
			$config['prev_tagl_close'] = "</li>";
			$config['last_link'] = 'Last';
			$config['first_link'] = 'First';
			$config['first_tag_open'] = "<li>";
			$config['first_tagl_close'] = "</li>";
			$config['last_tag_open'] = "<li>";
			$config['last_tagl_close'] = "</li>";
			$config["num_links"]  = 6;
			$this->pagination->initialize($config); 
			$data["lstProduct"] = $this->DaoProduct->lstProductByCate($cateid,$limit,$offset);
			$this->load->view('products_cate', $data);
		}
		
		public function search($offset=0){
			$this->load->library('pagination');
			$limit = 15;
			$search = $this->input->post("txtSearch");
			$config['base_url'] = site_url().'product/search';
			$config['total_rows'] = $this->DaoProduct->getAllProductsCountByName($search);
			$config['per_page'] = $limit; 
			$config['uri_segment'] = 3;	
			$config['full_tag_open'] = "<ul class='pagination'>";
			$config['full_tag_close'] ="</ul>";
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
			$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
			$config["next_link"] = "Next";
			$config['next_tag_open'] = "<li>";
			$config['next_tagl_close'] = "</li>";
			$config["prev_link"] = "Previous";
			$config['prev_tag_open'] = "<li>";
			$config['prev_tagl_close'] = "</li>";
			$config['last_link'] = 'Last';
			$config['first_link'] = 'First';
			$config['first_tag_open'] = "<li>";
			$config['first_tagl_close'] = "</li>";
			$config['last_tag_open'] = "<li>";
			$config['last_tagl_close'] = "</li>";
			$config["num_links"]  = 6;
			$this->pagination->initialize($config);
			$data["lstProduct"] = $this->DaoProduct->lstProductByName($search,$limit,$offset);
			$this->load->view('products_search', $data);
		}
		
		
		public function lstRecentProduct(){
			$data["recentProducts"] = $this->DaoProduct->lstRecentProduct(5);
			echo json_encode($data);
		}
		
		public function lstPopProduct(){
			$data["lstPopProduct"] = $this->DaoProduct->getPopularProduct(5);
			echo json_encode($data);
		}
		
		public function lstRelateProduct($cateid){
			$data["lstRelateProduct"] = $this->DaoProduct->lstRelatedProduct(20,$cateid);
			echo json_encode($data);
		}
		public function shopitem($id,$cateid){
			$this->DaoProduct->increaseCount($id);
			$data["title"] = "Product Details";
			$data["page"] = "Product";
			$data["getProduct"] = $this->DaoProduct->lstProduct(lang('lang_id'),$id);
			$this->load->view('shop-item', $data);
		}

		public function rating(){
			$this->DtoRate->setIpaddress($_SERVER['REMOTE_ADDR']);
			$this->DtoRate->setProductid($this->input->post('productid'));
			$this->DtoRate->setRatenumber($this->input->post('ratenumber'));
			$result = $this->DaoRate->rate($this->DtoRate);
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode($result));
		}
	}

?>