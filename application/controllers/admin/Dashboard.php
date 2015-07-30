<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Dashboard extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('dao/DaoFood');
			$this->load->model('dao/DaoFoodType');
			$this->load->model('dao/DaoPost');
			$this->load->model('dao/DaoPage');
		}
		public function index(){
			$data['countFoods'] = $this->DaoFood->countFood();
			$data['countFoodCategories'] = $this->DaoFoodType->countFoodType();
			$data['countPosts'] = $this->DaoPost->countPost();
			$data['countPages'] = $this->DaoPage->countPages();
			$data['recentFoods'] = $this->DaoFood->getRecentFood();
			$data['recentPosts'] = $this->DaoPost->getRecentPost();
			$this->load->view('admin-kh4it/dashboard', $data);
		}

	}

?>