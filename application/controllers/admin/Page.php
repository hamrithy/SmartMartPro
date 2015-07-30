<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Page extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->library('encryption');
			$this->load->library("session");
			$this->load->model("dao/DaoPage");
			$this->load->model("dto/DtoPage");
		}
		
		public function index(){
			$this->listpage();
		}

		public function listpage(){
			$this->listPagePro();
		}

		public function addpage(){
			$this->load->view('admin-kh4it/addpage');
		}
		
		public function addPagePro(){
			$this->DtoPage->setTitle($this->input->post('txttitle'));
			$this->DtoPage->setBody($this->input->post('txtdescription'));
			$this->DtoPage->setUserid($this->encryption->decrypt($this->session->userdata("userid")));
			$this->DtoPage->setSeotitle($this->input->post("txtseotitle"));
			$this->DtoPage->setSeodescription($this->input->post("txtseodescription"));
			$this->DaoPage->addPage($this->DtoPage);
			redirect("admin/page");
		}
		
		public function listPagePro(){
			$data["listPage"] = $this->DaoPage->listPage();
			$this->load->view("admin-kh4it/listpage" , $data);
		}
		
		public function deletePage($id){
			$this->DtoPage->setPageid($id);
			$this->DaoPage->deletePage($this->DtoPage);
			redirect("admin/page");
		}
		
		public function getPage($id){
			$this->DtoPage->setPageid($id);
			$data["getPage"] = $this->DaoPage->getPage($this->DtoPage);
			$this->load->view("admin-kh4it/addpage" , $data);
		}
		
		public function updatePage(){
			$this->DtoPage->setPageid($this->input->post('txtpageid'));
			$this->DtoPage->setTitle($this->input->post('txttitle'));
			$this->DtoPage->setBody($this->input->post('txtdescription'));
			$this->DtoPage->setSeotitle($this->input->post("txtseotitle"));
			$this->DtoPage->setSeodescription($this->input->post("txtseodescription"));
			$this->DtoPage->setUserid($this->encryption->decrypt($this->session->userdata("userid")));
			$this->DaoPage->updatePage($this->DtoPage);
			redirect("admin/page");
		}

	
	
	}

?>