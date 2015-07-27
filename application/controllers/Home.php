<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('dao/DaoFoodType');
			$this->load->model('dao/DaoFood');
		}

		public function index(){
			$data["title"] = "Home";
			$data["page"] = "Home";
			$data["categories"] = $this->DaoFoodType->getAllFoodTypesAndCountFoods();
			$data["foods"] = $this->DaoFood->getAllFoodItems();
			$this->load->view('front/index', $data);
		}

	}

?>