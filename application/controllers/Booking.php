<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Booking extends CI_Controller{

		public function __construct(){
			parent::__construct();
		}

		public function index(){
			$data["title"] = "Reservation";
			$data["page"] = "Reservation";
			$this->load->view('front/booking',$data);
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
			$message = $this->input->post('message');
			$year = $this->input->post('year');
			$month = $this->input->post('month');
			$day = $this->input->post('day');
			$time = $this->input->post('time');
			$guest = $this->input->post('guest');
			$type = $this->input->post('type');

			$this->email->from($email, $name);
			$this->email->to('darapenhchet@gmail.com'); 
			$this->email->subject('Email from website Reservation');
			$this->email->message('<br /><br /> Name: '.$name. '<br /><br /> Email: '.$email.
								  '<br /><br /> DATE: '.$day.' '.$month.' '.$year.' ' .$time.
								  '<br /><br /> GUEST: '.$guest.' PERSONS'.
								  '<br /><br /> Description: '.$message);	

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