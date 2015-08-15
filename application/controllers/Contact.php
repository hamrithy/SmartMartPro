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
			$phone = $this->input->post('phone');
			$message = $this->input->post('message');

			$this->email->from($email, $name);
			$this->email->to('darapenhchet@gmail.com'); 
			$this->email->subject('Email from website contact us');
			$this->email->message('<br/><br/>Name: '.$name. '<br/><br/> Email: '.$email.'<br/><br/> Phone: '.$phone.'<br/><br/> Description: '.$message);	

			if (!$this->email->send()) {
			    log_message('debug',$this->email->print_debugger()); 
			    $data["ERROR"] = true;
			}else{
				$data["ERROR"] = false;
			}
			echo json_encode($data);
		}

		public function subscribe(){
			

				$apiKey = '57d0b70753e77ec05bb4396ebba0a09f-us11'; // Your MailChimp API Key
				$listId = '6cd4260491'; // Your MailChimp List ID
				$double_optin=false;
				$send_welcome=false;
				$email_type = 'html';
				$email = $_POST['widget-subscribe-form-email'];
				$datacenter = explode( '-', $apiKey );
				$submit_url = "http://" . $datacenter[1] . ".api.mailchimp.com/1.3/?method=listSubscribe";

				if( isset( $email ) AND $email != '' ) {

				    $data = array(
				        'email_address'=>$email,
				        'apikey'=>$apiKey,
				        'id' => $listId,
				        'double_optin' => $double_optin,
				        'send_welcome' => $send_welcome,
				        'email_type' => $email_type
				    );

				    $payload = json_encode($data);

				    $ch = curl_init();
				    curl_setopt($ch, CURLOPT_URL, $submit_url);
				    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				    curl_setopt($ch, CURLOPT_POST, true);
				    curl_setopt($ch, CURLOPT_POSTFIELDS, urlencode($payload));

				    $result = curl_exec($ch);
				    curl_close ($ch);
				    $data = json_decode($result);

				    if ( isset( $data->error ) AND $data->error != '' ){
				        echo $data->error;
				    } else {
				        echo 'You have been <strong>successfully</strong> subscribed to our Email List.';
				    }

				}


		}

	}


?>