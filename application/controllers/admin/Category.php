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
		
		
	}

	
