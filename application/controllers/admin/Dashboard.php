<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Dashboard extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('dto/DtoCategory');
			$this->load->model('dto/DtoProduct');
			$this->load->model('dao/Daocategory');
			$this->load->model('dao/DaoProduct');
			$this->load->model('dao/DaoUser');
			$this->load->model('dto/DtoUser');
			$this->load->model('dto/DtoPage');
			$this->load->model('dao/DaoPage');
					
		}
		public function index(){
			//$data['recentProduct'] = $this->DaoProduct->getRecentProducts(5);
			$data['countPages'] = $this->DaoPage->countPages();
			$data['countUsers'] = $this->DaoUser->countUsers();
			$data['countCategories'] = $this->Daocategory->countCategories();
			//$data['countProducts'] = $this->DaoProduct->countProducts();
			$this->load->view('admin-kh4it/dashboard', $data);
		}

	}

?>