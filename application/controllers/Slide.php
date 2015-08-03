<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Slide extends CI_Controller{

		public function __construct(){
			parent::__construct();

		}

		public function listSlide($type, $langid){
			$this->load->model('dao/DaoSlide');
			$result = $this->DaoSlide->getfrontSlides($type, $langid);
			$this->output
			    ->set_content_type('application/json')
			    ->set_output(json_encode($result));
		}

	}

?>