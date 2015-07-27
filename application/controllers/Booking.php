<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Booking extends CI_Controller{

		public function __construct(){
			parent::__construct();
		}

		public function index(){
			$data["title"] = "Reservation";
			$data["page"] = "Reservation";
			$this->load->view('front/booking',$data);
		}

	}


?>