<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Page extends CI_Controller{

		public function __construct (){
	        parent::__construct();
	        $this->load->model("dao/DaoPage");
		}

		public function index($pageName){
			$data['page']  = $pageName;
			$data['title'] = $pageName;
			$data['PAGE_REC'] = $this->DaoPage->getPageByName(str_replace(" ","",strtolower($pageName)));
			if($data['PAGE_REC']==null){
				redirect('page_no_found');
			}
			$this->load->view('front/page', $data);
		}

	}

?>