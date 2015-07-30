<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class FoodCategory extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('dao/DaoFoodType');
			$this->load->model('dto/DtoFoodType');
		}
		
		public function index(){
			$this->listFoodType();
			
		}

		public function listFoodType(){
			$this->actionListFoodCategories();
		}

		public function listfoodcategory(){
			$this->actionListFoodCategories();
		}

		public function addfoodcategory(){
			$this->load->view('admin-kh4it/addfoodcategory');
		}

		public function actionListFoodCategories(){
			$data['listFoodTypes'] = $this->DaoFoodType->getAllFoodTypes();
			$this->load->view('admin-kh4it/listfoodcategory', $data);
		}

		public function actionDeleteFoodType($id){
			$this->DaoFoodType->deleteFoodType($id);
			redirect("admin/foodcategory");
		}
		
		public function actionAddFoodType(){
			$this->DtoFoodType->setTitle($this->input->post('title'));
			$this->DtoFoodType->setDescription($this->input->post('description'));
			$this->DaoFoodType->addFoodType($this->DtoFoodType);

			// ADD TO MENU
			$this->load->model('dao/DaoMenu');
			$this->load->model('dto/DtoMenu');

			$this->DtoMenu->setTitle($this->input->post('title'));
			$this->DtoMenu->setLinkto("/menu/foods/".str_replace(" ","",strtolower($this->input->post('title'))));
			$this->DtoMenu->setOrdering("1");
			$this->DtoMenu->setSubof("3");
			$this->DaoMenu->addMenu($this->DtoMenu);
			redirect("admin/foodcategory");
		}

		public function actionGetFoodType($id){
			$data['getFoodType'] = $this->DaoFoodType->getFoodType($id);
			$this->load->view('admin-kh4it/addfoodcategory', $data);
		}

		public function actionUpdateFoodCategory($id){
			$this->DtoFoodType->setFoodtypeid($id);
			$this->DtoFoodType->setTitle($this->input->post('title'));
			$this->DtoFoodType->setDescription($this->input->post('description'));
			$status = $this->DaoFoodType->updateFoodType($this->DtoFoodType);
			redirect("admin/foodcategory");
		}
	}

?>