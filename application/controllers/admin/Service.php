<?php
	class Service extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();
		}

		public function index(){
			$this->listServicePro();
		}
		public function listservice(){
			$this->listServicePro();

		}
		public function addservice(){
			$this->load->view('admin-kh4it/addservice');
		}
		public function addServicePro(){
			$this->load->model('dao/DaoService');
			$this->load->model('dto/DtoService');

			$this->DtoService->setTitle($this->input->post('txttitle'));
			$this->DtoService->setDescription($this->input->post('txtdescription'));
			$this->DtoService->setLinkto($this->input->post('txtlinkto'));
			$this->DtoService->setImageurl($this->input->post('txtimage'));
			$this->DtoService->setOrdering($this->input->post('txtorder'));
	
			$this->DaoService->addService($this->DtoService);
			$this->index();
			redirect('admin/service/listservice');


		}
		public function listServicePro(){
			$this->load->model('dao/DaoService');
			$data['listService'] = $this->DaoService->listService();
			$this->load->view("admin-kh4it/listservice", $data);
		}

		public function deleteServicePro($id){
			$this->load->model("dao/DaoService");
			$this->load->model("dto/DtoService");

			$this->DtoService->setServiceid($id);
			$this->DaoService->deleteService($this->DtoService);
		}

		public function getService($id){
			$this->load->model('dao/DaoService');
			$this->load->model("dto/DtoService");

			$this->DtoService->setServiceid($id);
			$data['getService'] = $this->DaoService->getService($this->DtoService);
			$this->load->view('admin-kh4it/addservice', $data);


		}

		public function updateServicePro($id){
			$this->load->model('dao/DaoService');
			$this->load->model("dto/DtoService");

			$this->DtoService->setServiceid($id);
			$this->DtoService->setTitle($this->input->post('txttitle'));
			$this->DtoService->setDescription($this->input->post('txtdescription'));
			$this->DtoService->setLinkto($this->input->post('txtlinkto'));
			$this->DtoService->setImageurl($this->input->post('txtimage'));
			$this->DtoService->setOrdering($this->input->post('txtorder'));
			

			$this->DaoService->updateService($this->DtoService);
			$this->index();
			redirect('admin/service/listservice');
		}


	}

?>