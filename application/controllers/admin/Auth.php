<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Auth extends CI_Controller{

		public function __construct(){
			parent::__construct();
		}

		private function isLoggedIn(){
			$this->session->userdata('logged_in');			
			$isLoggedIn = $this->session->userdata('logged_in');			
			if(isset($isLoggedIn) || $isLoggedIn){
				return true;
			}else{
				return false;
			}
		}

		public function index(){
			if($this->isLoggedIn()){
				redirect('admin/post/dashboard');
			}else{
				$this->login();
			}
		}
		
		private function login(){
			$this->load->library('form_validation');
			$this->load->view('admin-kh4it/index','refresh');
		}

		public function logout(){
			$this->session->unset_userdata("logged_in");
			session_destroy();
			$this->login();
		}

		public function authenticate(){
			log_message('debug', "AUTHENTICATION");
			$this->load->model('dto/DtoUser');
			$this->load->model('dao/DaoUser');
			$user = new DtoUser();
			$userDao = new DaoUser();
			$this->load->library('form_validation');

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
					
			if ($this->form_validation->run() == FALSE){
				log_message('debug', "FALSE");
				$this->load->view('admin-kh4it/index','refresh');
			}else{
				log_message('debug', "TRUE");
				$user->setUsername($this->input->post('username'));
				$user->setPassword(md5($this->input->post('password')));

				$result = $userDao->login($user);
				if($result)
	  			{
	    			foreach($result as $row)
	     			{
	     				log_message('debug', $row->username);
	     				log_message('debug', $row->userid);
	       				$user->setUsername($row->username);
	         			$user->setUserid($row->userid);
						$this->session->set_userdata('logged_in', $user);
						$this->session->set_userdata('username', $this->encryption->encrypt($user->getUsername()));
						$this->session->set_userdata('userid', $this->encryption->encrypt($user->getUserid()));	
						log_message("debug",$this->encryption->decrypt($user->getUserid()));
	     			}
	     			redirect("admin/post");
	   			}else{
	     			$this->form_validation->set_message('check_database', 'Invalid username or password');
	     			$this->login();
	   			}			
			}			
		}
	}

?>