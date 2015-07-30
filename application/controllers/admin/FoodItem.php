<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class FoodItem extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->library('encryption');
			$this->load->library('session');
			$this->load->model('dto/DtoFood');
			$this->load->model('dao/DaoFood');
		}
		
		public function index(){
			$this->actionGetAllFoodItems();
		}

		public function addfooditem(){
			$this->load->model('dao/DaoFoodType');
			$this->load->model('dto/DtoFoodType');
			$data['foodTypes'] = $this->DaoFoodType->getAllFoodTypes();
			$this->load->view('admin-kh4it/addfooditem', $data);
		}

		public function actionAddFoodItem(){
			$this->DtoFood->setTitle($this->input->post('title'));
			$this->DtoFood->setPrice($this->input->post('price'));
			$this->DtoFood->setPromotiontype($this->input->post('promotiontype'));
			$this->DtoFood->setFoodtypeid($this->input->post('foodtypeid'));
			$this->DtoFood->setSeotitle($this->input->post('seotitle'));
			$this->DtoFood->setSeodescription($this->input->post('seodescription'));
			$this->DtoFood->setDescription($this->input->post('description'));
			$this->DtoFood->setThumbnailurl($this->input->post('thumbnailurl'));
			$this->DtoFood->setUserid($this->encryption->decrypt($this->session->userdata('userid')));
			$this->DaoFood->addFoodItem($this->DtoFood);
			redirect("admin/fooditem");
		}

		 public function listfooditems(){
		 	$this->actionGetAllFoodItems();
		 }

		public function actionGetAllFoodItems(){
			$data['foodItems'] = $this->DaoFood->getAllFoodItems();
			$this->load->view('admin-kh4it/listfooditem', $data);
		}

		public function getFood($id){
			$this->load->model('dao/DaoFoodType');
			$this->load->model('dto/DtoFoodType');
			$data['foodTypes'] = $this->DaoFoodType->getAllFoodTypes();
			$data['foodItem'] = $this->DaoFood->getFoodItem($id);
			$this->load->view('admin-kh4it/addfooditem', $data);

		}

		public function actionUpdateFoodItem($id){
			$this->DtoFood->setTitle($this->input->post('title'));
			$this->DtoFood->setPrice($this->input->post('price'));
			$this->DtoFood->setPromotiontype($this->input->post('promotiontype'));
			$this->DtoFood->setFoodtypeid($this->input->post('foodtypeid'));
			$this->DtoFood->setSeotitle($this->input->post('seotitle'));
			$this->DtoFood->setSeodescription($this->input->post('seodescription'));
			$this->DtoFood->setDescription($this->input->post('description'));
			$this->DtoFood->setThumbnailurl($this->input->post('thumbnailurl'));
			$this->DtoFood->setFoodid($id);
			$this->DtoFood->setUserid($this->encryption->decrypt($this->session->userdata('userid')));
			$this->DaoFood->updateFoodItem($this->DtoFood);
			redirect("admin/fooditem");
		
		}

		public function deleteFoodItem($id){
			$this->DaoFood->deleteFoodItem($id);
			redirect("admin/fooditem");
		}
	}

?>