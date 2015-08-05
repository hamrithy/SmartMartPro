<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Page extends CI_Controller{

		public function __construct (){
	        parent::__construct();
	        $this->load->model("dao/DaoPage");
		}

		public function index($pageName){
			$data['PAGE_NAME']  = $pageName;
			$data['TITLE'] = $pageName;
			$data['PAGE'] = $this->DaoPage->getPageByName($pageName);
			if($data['PAGE']==null){
				redirect('page_no_found');
			}
			$this->load->view('page', $data);
		}

	}

?>