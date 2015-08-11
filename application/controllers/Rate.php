<?php 
	class Rate extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('dto/DtoRate');
			$this->load->model('dao/DaoRate');
		}

		public function index(){
			$this->rate();
		}

		public function rating(){
			$this->DtoRate->setIpaddress($_SERVER['REMOTE_ADDR']);
			$this->DtoRate->setProductid($this->input->post('productid'));
			$this->DtoRate->setRatenumber($this->input->post('ratenumber'));
			$result = $this->DaoRate->rate($this->DtoRate);
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode($result));
		}

		public function rate(){
			$this->DtoRate->setIpaddress($_SERVER['REMOTE_ADDR']);
			$this->DtoRate->setProductid(82);
			$data['rate'] = $this->DaoRate->checkRate($this->DtoRate);
			$this->load->view('rating', $data);
		}
	}
?>