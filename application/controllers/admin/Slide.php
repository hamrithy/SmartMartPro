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
			$this->load->model('dao/DaoPage');
			$this->load->model('dao/DaoCategory');
			$data["pages"] = $this->DaoPage->listPage();
			$data["categories"] = $this->DaoCategory->showcategories();
			$this->load->view('admin-kh4it/addslide', $data);
		}

		public function listSlides(){
			$this->actionListSlides();
		}

		public function actionAddSlide(){
			$this->DtoSlide->setUserid($this->encryption->decrypt($this->session->userdata('userid')));
			$this->DtoSlide->setType($this->input->post('type'));
			$this->DtoSlide->setOrdering($this->input->post('ordering'));
			$this->DtoSlide->setLinkto($this->input->post('linkto'));
			$this->DtoSlide->setSliderdetail($this->input->post('SliderDetail'));
			$result = $this->DaoSlide->addSlide($this->DtoSlide);
			echo json_encode($result);
		}

		public function actionListSlides(){
			$data['listSlides'] = $this->DaoSlide->getAllSlides();
			$this->load->view('admin-kh4it/listslide', $data);
		}

		public function actionShowSlide($id){
			$this->load->model('dao/DaoPage');
			$this->load->model('dao/DaoCategory');
			$data["pages"] = $this->DaoPage->listPage();
			$data["categories"] = $this->DaoCategory->showcategories();
			$data['sliderid'] = $id;
			$this->load->view('admin-kh4it/addslide', $data);
		}

		public function actionGetSlide($id){
			$result = $this->DaoSlide->getSlide($id);
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode($result));
		}

		public function actionUpdateSlider(){
			$this->DtoSlide->setSlideid($this->input->post('sliderid'));
			$this->DtoSlide->setUserid($this->encryption->decrypt($this->session->userdata('userid')));
			$this->DtoSlide->setType($this->input->post('type'));
			$this->DtoSlide->setOrdering($this->input->post('ordering'));
			$this->DtoSlide->setLinkto($this->input->post('linkto'));
			$this->DtoSlide->setSliderdetail($this->input->post('SliderDetail'));
			$result = $this->DaoSlide->updateSlide($this->DtoSlide);
			echo json_encode($result);
		}

		public function actionDeleteSlide($id){
			$this->DaoSlide->deleteSlide($id);
			redirect('admin/slide');
		}

	}
?>