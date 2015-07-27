<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Service extends CI_Controller{

		public function __construct(){
			parent::__construct();

		}

		public function listService(){
			$this->load->model('dao/DaoService');
			$result = $this->DaoService->listService();
			$this->output
			    ->set_content_type('application/json')
			    ->set_output(json_encode($result));
		}

	}

?>