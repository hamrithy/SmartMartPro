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
			$data["listMenu"] = $this->DaoMenu->listMenu();
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

			$this->DtoMenu->setTitle($this->input->post('txtTitle'));
			$this->DtoMenu->setLinkto($this->input->post('txtLinkto'));
			$this->DtoMenu->setOrdering($this->input->post('txtOrdering'));
			$this->DtoMenu->setSubof($this->input->post('txtSubof'));

			$this->DaoMenu->addMenu($this->DtoMenu);
			redirect("admin/menu");
		}

		public function deletemenu($id){
			$this->load->model('dao/DaoMenu');
			$this->DaoMenu->deletemenu($id);
			redirect("admin/menu");
		}

		public function getmenu($id){
			$this->load->model("dao/DaoMenu");
			
			$data["menu"] = $this->DaoMenu->getMenu($id);
			$data["topMenu"] = $this->DaoMenu->listTopMenu();
			$this->load->view("admin-kh4it/addmenu" , $data);
		}

		public function updatemenu(){
			$this->load->model('dao/DaoMenu');
			$this->load->model('dto/DtoMenu');

			$this->DtoMenu->setMenuid($this->input->post('txtMenuid'));
			$this->DtoMenu->setTitle($this->input->post('txtTitle'));
			$this->DtoMenu->setLinkto($this->input->post('txtLinkto'));
			$this->DtoMenu->setOrdering($this->input->post('txtOrdering'));
			$this->DtoMenu->setSubof($this->input->post('txtSubof'));

			$this->DaoMenu->updateMenu($this->DtoMenu);
			redirect("admin/menu");
		}


	}

?>