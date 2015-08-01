<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Graduation extends CI_Controller{

		public function __construct (){
	        parent::__construct();
		}

		public function index(){
			$data['page']  = "Graduation";
			$data['title'] = "Graduation";
			$this->load->view('graduation', $data);
		}

		public function showPageDetails($id){
			$this->load->view("information_details");
		}

	}

?>