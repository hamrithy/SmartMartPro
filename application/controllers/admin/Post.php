<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Post extends ADMIN_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->library('encryption');
			$this->load->library("session");
			$this->load->model("dao/DaoPost");
			$this->load->model("dto/DtoPost");
		}
		
		public function index(){
			$this->listPostPro();
		}
		
		public function dashboard(){
			$this->listPostPro();
		}

		public function listposts(){
			$this->listPostPro();
		}

		public function addpost(){
			$this->load->view('admin-kh4it/addpost');
		}
				
		public function addPostPro(){
			$this->DtoPost->setTitle($this->input->post('txttitle'));
			$this->DtoPost->setShortdescription($this->input->post('txtshortdescription'));
			$this->DtoPost->setLongdescription($this->input->post('txtdescription'));
			$this->DtoPost->setThumbnailurl($this->input->post("txtfile"));
			$this->DtoPost->setSeotitle($this->input->post("txtseotitle"));
			$this->DtoPost->setSeodescription($this->input->post("txtseodescription"));
			$this->DtoPost->setUserid($this->encryption->decrypt($this->session->userdata("userid")));
			$this->DaoPost->addPost($this->DtoPost);
			redirect("admin/post");
			//$this->index();
		}
		
		public function listPostPro(){
			$data["listPost"] = $this->DaoPost->listPost();   
			$this->load->view("admin-kh4it/listpost" , $data);
		}
		
		public function getPost($id){
			$this->DtoPost->setPostid($id);
			$data["getPost"] = $this->DaoPost->getPost($this->DtoPost);
			$this->load->view("admin-kh4it/addpost" , $data);
		}
		
		public function deletePost($id){
			$this->DtoPost->setPostid($id);
			$this->DaoPost->deletePost($this->DtoPost);
			redirect("admin/post");
		}
		
		public function updatePost(){
			$this->DtoPost->setPostid($this->input->post('txtpostid'));
			$this->DtoPost->setTitle($this->input->post('txttitle'));
			$this->DtoPost->setShortdescription($this->input->post('txtshortdescription'));
			$this->DtoPost->setLongdescription($this->input->post('txtdescription'));
			$this->DtoPost->setThumbnailurl($this->input->post("txtfile"));
			$this->DtoPost->setSeotitle($this->input->post("txtseotitle"));
			$this->DtoPost->setSeodescription($this->input->post("txtseodescription"));
			$this->DtoPost->setUserid($this->encryption->decrypt($this->session->userdata("userid")));
			$this->DaoPost->updatePost($this->DtoPost);
			redirect("admin/post");
		}
		 
	}

	
	
?>