<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Dashboard extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('dto/DtoCategory');
			$this->load->model('dto/DtoProduct');
			$this->load->model('dao/Daocategory');
			$this->load->model('dao/DaoProduct');
			$this->load->model('dao/DaoSlide');
			$this->load->model('dto/DtoSlide');
			$this->load->model('dto/DtoPage');
			$this->load->model('dao/DaoPage');
			$this->load->model('dto/DtoUser');
			$this->load->model('dao/DaoUser');
		}
		public function index(){
			$data['recentSlides'] = $this->DaoSlide->getRecentSlides(5);
			$data['recentProducts'] = $this->DaoProduct->getRecentProducts(5);
			$data['countPages'] = $this->DaoPage->countPages();
			$data['countUsers'] = $this->DaoUser->countUsers();
			$data['countCategories'] = $this->Daocategory->countCategories();
			$data['countProducts'] = $this->DaoProduct->countProducts();
			$this->load->view('admin-kh4it/dashboard', $data);
		}

	}

?>