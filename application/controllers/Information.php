<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Information extends CI_Controller{

		public function __construct (){
	        parent::__construct();
		}

		public function index(){
			$data['page']  = "Information";
			$data['title'] = "Inforamtion";
			$this->load->view('information', $data);
		}

		public function showPageDetails($id){
			$this->load->view("information_details");
		}
	}

?>