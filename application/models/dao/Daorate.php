<?php 
	class DaoRate extends CI_Model{
		
		public function DaoRate(){
			parent::__construct();
			$this->load->model('dto/DtoRate');
		}

		public function checkRate(DtoRate $rate){
			$this->db->where('ipaddress', $rate->getIpaddress());
			$this->db->where('productid', $rate->getProductid());
			$query = $this->db->get('RATES');
			return $query->result();
		}

		public function rate(DtoRate $rate){
			$this->db->where('ipaddress', $rate->getIpaddress());
			$this->db->where('productid', $rate->getProductid());
			$record = $this->db->count_all('RATES');
			if($record == 0){
				$data = array('rateid'		=>	$rate->getRateid(),
							  'ratenum'		=>	$rate->getRatenumber(),
							  'ipaddress'	=>	$rate->getIpaddress(),
							  'productid'	=>	$rate->getProductid()
				);
				return $this->db->insert('RATES', $data);
			}else{
				$data = array('rateid'		=>	$rate->getRateid(),
							  'ratenum'		=>	$rate->getRatenumber(),
							  'ipaddress'	=>	$rate->getIpaddress(),
							  'productid'	=>	$rate->getProductid()
				);
				$this->db->where('ipaddress', $rate->getIpaddress());
				$this->db->where('productid', $rate->getProductid());
				return $this->db->update('RATES', $data);
			}
		}
	}
