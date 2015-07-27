<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Slide extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();

		}
		public function index(){
			$this->listSlidePro();
		}
		public function listslide(){
			$this->listSlidePro();

		}
		public function addslide(){
			$this->load->view('admin-kh4it/addslide');
		}
		public function addSlidePro(){
			$this->load->model('dao/DaoSlide');
			$this->load->model('dto/DtoSlide');

			$this->DtoSlide->setTitle($this->input->post('txttitle'));
			$this->DtoSlide->setCaption($this->input->post('txtcaption'));
			$this->DtoSlide->setLinkto($this->input->post('txtlinkto'));
			$this->DtoSlide->setImageurl($this->input->post('txtimage'));
			$this->DtoSlide->setOrdering($this->input->post('txtorder'));
			$this->DtoSlide->setUserid($this->encryption->decrypt($this->session->userdata("userid")));

			$this->DaoSlide->addSlide($this->DtoSlide);
			$this->index();
			redirect('admin/slide/listslide');


		}
		public function listSlidePro(){
			$this->load->model('dao/DaoSlide');
			$data['listSlide'] = $this->DaoSlide->listSlide();
			$this->load->view("admin-kh4it/listslide", $data);
		}

		public function deleteSlidePro($id){
			$this->load->model("dao/DaoSlide");
			$this->load->model("dto/DtoSlide");

			$this->DtoSlide->setSlideid($id);
			$this->DaoSlide->deleteSlide($this->DtoSlide);
		}

		public function getSlide($id){
			$this->load->model('dao/DaoSlide');
			$this->load->model("dto/DtoSlide");

			$this->DtoSlide->setSlideid($id);
			$data['getSlide'] = $this->DaoSlide->getSlide($this->DtoSlide);
			$this->load->view('admin-kh4it/addslide', $data);


		}

		public function updateSlidePro($id){
			$this->load->model('dao/DaoSlide');
			$this->load->model("dto/DtoSlide");

			$this->DtoSlide->setSlideid($id);
			$this->DtoSlide->setTitle($this->input->post('txttitle'));
			$this->DtoSlide->setCaption($this->input->post('txtcaption'));
			$this->DtoSlide->setLinkto($this->input->post('txtlinkto'));
			$this->DtoSlide->setImageurl($this->input->post('txtimage'));
			$this->DtoSlide->setOrdering($this->input->post('txtorder'));
			$this->DtoSlide->setUserid($this->encryption->decrypt($this->session->userdata("userid")));

			$this->DaoSlide->updateSlide($this->DtoSlide);
			$this->index();
			redirect('admin/slide/listslide');
		}
	}

?>