<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class _Public extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model("dao/DaoPost");
			$this->load->model("dao/DaoFood");
			$this->load->model("dao/DaoFoodType");
		}
		
		public function rightSidePro(){
			$data["recentPost"] = $this->DaoPost->listPostLimit(5,0,'');
			$data["recentFood"] = $this->DaoFood->listRecentFood(5);
			$data["recentFoodType"] = $this->DaoFoodType->listRecentFoodType(5);
			echo json_encode($data);
		}
		
		
		
	}