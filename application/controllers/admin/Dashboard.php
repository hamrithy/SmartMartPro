<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Dashboard extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();

		}
		public function index(){

			$this->load->view('admin-kh4it/dashboard');
		}

	}

?>