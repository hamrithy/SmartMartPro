<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Menu extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();
		}
		
		public function index(){
			$this->listmenu();
		}

		public function listmenu(){
			$this->load->model("dao/DaoMenu");
			$data["menus"] = $this->DaoMenu->getAllMenus();
			//echo json_encode($data);
			$this->load->view('admin-kh4it/listmenu', $data);
		}

		public function addmenu(){
			$this->load->model('dao/DaoMenu');
			$data["topMenu"] = $this->DaoMenu->listTopMenu();
			$this->load->view('admin-kh4it/addmenu', $data);
		}

		public function addmenupro(){
			$this->load->model('dao/DaoMenu');
			$this->load->model('dto/DtoMenu');
			
			$this->DtoMenu->setOrdering($this->input->post('ordering'));
			$this->DtoMenu->setSubof($this->input->post('subof'));
			$this->DtoMenu->setMenuDetails($this->input->post('menuDetails'));
			$result = $this->DaoMenu->addNewMenu($this->DtoMenu);
			echo json_encode($result);
		}

		public function deletemenu($id){
			$this->load->model('dao/DaoMenu');
			$this->DaoMenu->deleteMenu($id);
			redirect("admin/menu");
		}

		public function getmenu($id){
			$this->load->model("dao/DaoMenu");
			$data["menus"] = $this->DaoMenu->getMenuById($id);
			$data["topMenu"] = $this->DaoMenu->listTopMenu();
			$this->load->view("admin-kh4it/addmenu", $data);
		}

		public function updatemenupro(){
			$this->load->model('dao/DaoMenu');
			$this->load->model('dto/DtoMenu');
			
			$this->DtoMenu->setOrdering($this->input->post('ordering'));
			$this->DtoMenu->setSubof($this->input->post('subof'));
			$this->DtoMenu->setMenuid($this->input->post('menuid'));
			$this->DtoMenu->setMenuDetails($this->input->post('menuDetails'));
			$result = $this->DaoMenu->updateMenu($this->DtoMenu);
			echo json_encode($result);
			//redirect("admin/menu");
		}
	}
?>