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
		
		
		 
	}

	
	
?>