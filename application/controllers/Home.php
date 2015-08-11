<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model("dao/DaoProduct");
		}

		public function index(){
			$data["arriveds"] = $this->DaoProduct->getRecentProductsByLanguage(4);
			$data["populars"] = $this->DaoProduct->getPopularProductsByLanguage(4);
			$data["recommends"] = $this->DaoProduct->getRecommendProductsByLanguage(4);
			$this->load->view('index', $data);
		}

		public function rating(){
			$this->load->view('rating');
		}
	}
?>