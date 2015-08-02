<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Product extends CI_Controller{

		public function __construct(){
			parent::__construct();
		}

		public function index(){
			$this->load->view("products");
		}

		public function findProductById($id){
			$this->load->view("product_details");
		}			
	}

?>