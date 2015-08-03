<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Slide extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->library('encryption');
			$this->load->library('session');
			$this->load->model('dao/DaoSlide');
			$this->load->model('dto/DtoSlide');
		}

		public function index(){
			$this->listSlides();
		}

		public function addSlide(){
			$this->load->view('admin-kh4it/addslide');
		}

		public function listSlides(){
			$this->actionListSlides();
		}

		public function actionAddSlide(){
			$this->DtoSlide->setUserid($this->encryption->decrypt($this->session->userdata('userid')));
			$this->DtoSlide->setType($this->input->post('type'));
			$this->DtoSlide->setOrdering($this->input->post('ordering'));
			$this->DtoSlide->setSliderdetail($this->input->post('SliderDetail'));
			$result = $this->DaoSlide->addSlide($this->DtoSlide);
			echo json_encode($result);
		}

		public function actionListSlides(){
			$data['listSlides'] = $this->DaoSlide->getAllSlides();
			$this->load->view('admin-kh4it/listslide', $data);
		}


	}
?>