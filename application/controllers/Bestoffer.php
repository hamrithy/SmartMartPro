<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Bestoffer extends CI_Controller{

		public function __construct(){
			parent::__construct();

		}

		public function listBestOffer($type){
			$this->load->model('dao/DaoFood');
			$result = $this->DaoFood->listBestoffer($type);
			$this->output
			    ->set_content_type('application/json')
			    ->set_output(json_encode($result));
		}

	}

?>