<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Slide extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();
		}

		public function index(){
			$this->listSlides();
		}

		public function addSlide(){
			$this->load->view('admin-kh4it/addslide');
		}

		public function listSlides(){
			$this->load->view('admin-kh4it/listslide');
		}

		public function actionAddSlide(){

		}

		public function actionListSlides(){
			
		}


	}
?>