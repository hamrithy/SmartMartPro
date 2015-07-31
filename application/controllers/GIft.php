<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Gift extends CI_Controller{

		public function __construct (){
	        parent::__construct();
		}

		public function index(){
			$data['page']  = "Gift";
			$data['title'] = "Gift";
			$this->load->view('gift', $data);
		}

	}

?>s