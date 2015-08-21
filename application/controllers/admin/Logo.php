<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Logo extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();
		}
		
		public function index(){
			$this->load->view("admin-kh4it/logo");
		}

		public function changelogo(){
			$image = $this->input->post("txtimage");
			if($this->settings->setLogo($image)){
			  	$this->session->set_flashdata("msg","Your logo has been changed.");
			  	$this->session->set_flashdata("msgType","success");
			}else{
			  	$this->session->set_flashdata("msg","Your logo has not been changed.");
			  	$this->session->set_flashdata("msgType","danger");
			}
			redirect("admin/logo");
		}

	}

?>