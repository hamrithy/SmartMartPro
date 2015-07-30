<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class User extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model("dao/DaoUser");
		}
		
		public function index(){
			$this->listusers();
		}

		public function listusers(){
			$data["users"] = $this->DaoUser->get_all_users();
			$this->load->view('admin-kh4it/listuser', $data);
		}

		public function adduser(){
			$this->load->view('admin-kh4it/adduser');
		}

		public function addUserPro(){
			$this->load->model("dao/DaoUser");
			$this->load->model("dto/DtoUser");
			
			$user = new DtoUser();
			$userDao = new DaoUser();
			$this->load->library('form_validation');
			$this->load->helper('form');

			$this->form_validation->set_rules('username', 'Username', 'required|trim');
			$this->form_validation->set_rules('password', 'Password', 'required|trim');
			$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|trim');
			$this->form_validation->set_rules('usertype', 'User Type', 'required|trim');
			$this->form_validation->set_rules('status', 'Status', 'required|trim');
					
			if ($this->form_validation->run() == FALSE){
				echo json_encode(array(
										"ERROR"=> true ,
										"ERR_MSG"=>validation_errors()
									));
			}else{
				if($this->input->post('password')!=$this->input->post('confirm_password')){
					echo json_encode(array(
										"ERROR"=> true,
										"ERR_MSG"=>"Your password are mismatch. Please enter again."
									));
				}else{
					$user->setUsername($this->input->post('username'));
					$user->setPassword($this->input->post('password'));
					$user->setUsertype($this->input->post('usertype'));
					$user->setActive($this->input->post("status"));
					
					if($userDao->check_duplicate_user_by_username($user->getUsername())>0){
						$data["ERROR"] = true;
						$data["ERR_MSG"] = "User already exist.";
					}else{
						$userDao->create_new_user($user);
						$data["ERROR"] = false;
						$data["ERR_MSG"] = "User has been inserted sucessfully.";
					}
					echo json_encode($data);
				}
			}
		}

		public function deleteUser($user_id){
			
		}

		public function updateUser($user_id){
			$data["result"] = $this->DaoUser->get_user_by_id($user_id);
			$this->load->view('admin-kh4it/updateuser', $data);
		}

		public function updateUserPro(){
			$this->load->model("dao/DaoUser");
			$this->load->model("dto/DtoUser");
			
			$user = new DtoUser();
			$userDao = new DaoUser();

			$this->load->library('form_validation');
			$this->load->helper('form');

			$this->form_validation->set_rules('userid', 'Userid', 'required|trim|numeric');
			$this->form_validation->set_rules('username', 'Username', 'required|trim');
			$this->form_validation->set_rules('password', 'Password', 'required|trim');
			$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|trim');
			$this->form_validation->set_rules('usertype', 'User Type', 'required|trim');
			$this->form_validation->set_rules('status', 'Status', 'required|trim');
					
			if ($this->form_validation->run() == FALSE){
				echo json_encode(array(
										"ERROR"=> true ,
										"ERR_MSG"=>validation_errors()
									));
			}else{
				if($this->input->post('password')!=$this->input->post('confirm_password')){
					echo json_encode(array(
										"ERROR"=> true,
										"ERR_MSG"=>"Your password are mismatch. Please enter again."
									));
				}else{
					$user->setUserid($this->input->post('userid'));
					$user->setUsername($this->input->post('username'));
					$user->setPassword($this->input->post('password'));
					$user->setUsertype($this->input->post('usertype'));
					$user->setActive($this->input->post("status"));
					
					if($userDao->update_user($user)){
						$data["ERROR"] = false;
						$data["ERR_MSG"] = "Your user has been updated.";
					}else{
						$data["ERROR"] = true;
						$data["ERR_MSG"] = "Your user has not been updated.";
					}
					echo json_encode($data);
				}
			}
		}

		public function updateUserStatusPro(){
			$this->load->model("dao/DaoUser");
			$this->load->model("dto/DtoUser");
			
			$user = new DtoUser();
			$userDao = new DaoUser();
			$user->setUserid($this->input->post('userid'));
			$user->setActive($this->input->post("status"));
			
			if($userDao->update_status($user)){
				$data["ERROR"] = false;
			}else{
				$data["ERROR"] = true;
				$data["ERR_MSG"] = "Your user cannot update.";
			}
			echo json_encode($data);
		}

		public function rest_users(){
			$data["users"] = $this->DaoUser->get_all_users();
			echo json_encode($data);
		}
	}

?>