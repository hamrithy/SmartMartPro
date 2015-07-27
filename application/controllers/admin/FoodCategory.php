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
			$this->load->view('admin-kh4it/listfoodcategory');
		}

		public function listfoodcategory(){
			$this->actionListFoodCategories();
		}

		public function addfoodcategory(){
			$this->load->view('admin-kh4it/addfoodcategory');
		}

		public function actionListFoodCategories(){
			$result = $this->DaoFoodType->getAllFoodTypes();
			header('Content-Type:application/json' );
			echo json_encode($result);
		}

		public function actionDeleteFoodType($id){
			if($this->DaoFoodType->deleteFoodType($id)){
				echo 'success';
			}else{
				echo 'error';
			}
		}
		
		public function actionAddFoodType(){
			$this->DtoFoodType->setTitle($this->input->post('title'));
			$this->DtoFoodType->setDescription($this->input->post('description'));
			$this->DaoFoodType->addFoodType($this->DtoFoodType);
			$this->index();
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
			$this->index();
		}
	}

?>