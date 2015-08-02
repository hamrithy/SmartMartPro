<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Slide extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();
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

		}

		public function actionListSlides(){
			$data['listSlides'] = $this->DaoSlide->getAllSlides();
			$this->load->view('admin-kh4it/listslide', $data);
		}


	}
?>