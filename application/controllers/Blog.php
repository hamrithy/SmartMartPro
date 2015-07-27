<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Blog extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model("dao/DaoPost");
			$this->load->model("dao/DaoFood");
			$this->load->model("dao/DaoFoodType");
		}

		public function index(){
			$this->listPostPro();
		}
		
		public function listPostPro(){
			$data["title"] = "Blog";
			$data["page"] = "Blog";
			$data["listPost"] = $this->DaoPost->listPost();
			$this->load->view("front/blog" , $data);
		}
		
		public function listAllPosts(){
			$limit  = $this->input->post('perPage');
			$pageNo = $this->input->post('pageNo');
			$search = $this->input->post('search');
			$offset = ($pageNo-1)*$limit;
			$data["posts"] = $this->DaoPost->listPostLimit($limit, $offset , $search);
			$data["total"] = $this->DaoPost->getAllPostCount();
			echo json_encode($data);
		}
		
		public function detail($id){
			$data["title"] = "Blog Details";
			$data["page"] = "Blog";
			$this->DtoPost->setPostid($id);
			$data["postDetail"] = $this->DaoPost->getPost($this->DtoPost);
			$this->load->view("front/post",$data);
		}
		
		
		
		
	}
?>