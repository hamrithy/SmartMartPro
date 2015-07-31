<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Contact extends CI_Controller{

		public function __construct(){
			parent::__construct();
		}

		public function index(){
			$data["page"] = "ContactUs";
			$data["title"] = "Contact Us";
			$this->load->view('contact', $data);
		}

		public function sendEmail(){
			$config = Array( 
					  'protocol'  => 'smtp', 
					  'smtp_host' => 'ssl://smtp.googlemail.com', 
					  'smtp_port' => 465, 
					  'smtp_user' => 'oiminho2015@gmail.com', 
					  'smtp_pass' => 'vuthea@2014' ); 

		  	$this->load->library('email', $config); 
		  	$this->email->set_mailtype('html');
		  	$this->email->set_newline("\r\n");

			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$website = $this->input->post('website');
			$message = $this->input->post('message');

			$this->email->from($email, $name);
			$this->email->to('darapenhchet@gmail.com'); 
			$this->email->subject('Email from website contact us');
			$this->email->message('<br/><br/>Name: '.$name. '<br/><br/> Email: '.$email.'<br/><br/> Website: '.$website.'<br/><br/> Description: '.$message);	

			if (!$this->email->send()) {
			    log_message('debug',$this->email->print_debugger()); 
			    $data["ERROR"] = true;
			}else{
				$data["ERROR"] = false;
			}
			echo json_encode($data);
		}

	}


?>