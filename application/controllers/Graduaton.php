<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Gift extends CI_Controller{

		public function __construct (){
	        parent::__construct();
		}

		public function index(){
			$data['page']  = "Graduation";
			$data['title'] = "Graduation";
			$this->load->view('graduation', $data);
		}

	}

?>s