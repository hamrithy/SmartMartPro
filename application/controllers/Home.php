<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends CI_Controller{

		public function __construct(){
			parent::__construct();
		}

		public function index(){
			//$this->load->model("Language");
			//$data['language'] = $this->Language->findByLanguage($this->input->cookie("LANGUAGE"));
			$this->load->view('index');
			//echo json_encode($data);
		}
	}
?>