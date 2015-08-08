<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Category extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model("dto/DtoCategory");
			$this->load->model("dao/DaoCategory");
		}
		
	public function index(){
			//$this->load->view("admin-kh4it/listcategory");
			$this->listcategory();
		}
		
		public function addCategory(){
			$this->load->view("admin-kh4it/addcategory");
		}

		public function addCategoryPro(){	
			$this->DtoCategory->setOrdering($this->input->post("txtorder"));
			$this->DtoCategory->setSubof($this->input->post("txtcategory"));
			$this->DtoCategory->setCategorydetail($this->input->post("CategoryDetail"));			
			$result = $this->DaoCategory->addCategory($this->DtoCategory);
			echo json_encode($result);
			
		}

		public function showcategory(){
			
			$result = $this->DaoCategory->showcategories();
			$this->output
			    ->set_content_type('application/json')
			    ->set_output(json_encode($result));
		}

		public function listcategory(){
			$result = $this->DaoCategory->listcategories();
			// $this->output
			//     ->set_content_type('application/json')
			//     ->set_output(json_encode($result));

			$data['listCategory'] = $result;
			$this->load->view("admin-kh4it/listcategory", $data);
		}

		public function deletecategory($id){
			$this->DtoCategory->setCategoryid($id);
			$this->DaoCategory->deleteCategory($this->DtoCategory);
			redirect('admin/Category');
		}

		public function getcategory($id){
			$result = $this->DaoCategory->getcategory($id);
			$this->output
			    ->set_content_type('application/json')
			    ->set_output(json_encode($result));
		}

		public function getcategoryupdate($id){
			$result = $this->DaoCategory->getcategoryupdate($id);
			$this->output
			    ->set_content_type('application/json')
			    ->set_output(json_encode($result));
		}

		public function getshowcategory($id){
			$data['catid']= $id;
			$this->load->view("admin-kh4it/addcategory", $data);
		}

		public function updatecategorypro(){
			$this->DtoCategory->setCategoryid($this->input->post('categoryid'));
			$this->DtoCategory->setOrdering($this->input->post("txtorder"));
			$this->DtoCategory->setSubof($this->input->post("txtcategory"));
			$this->DtoCategory->setCategorydetail($this->input->post("CategoryDetail"));			
			$result = $this->DaoCategory->updatecategory($this->DtoCategory);
			echo json_encode($result);
		}
		
		public function lstCategorypro(){
			$data["lstCategory"] = $this->DaoCategory->lstCategory(2);
			echo json_encode($data);
		}
	}

	
