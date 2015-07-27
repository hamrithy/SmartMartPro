<?php
	class DaoService extends CI_Model{

			public function DaoService(){
			parent::__construct();

			$this->load->database();
			$this->load->model('dto/DtoService');
		}

		public function addService(DtoService $s){
			$data = array(
				'serviceid'         => $s->getServiceid(),
				'title'				=> $s->getTitle(),
				'description'		=> $s->getDescription(),
				'linkto'			=> $s->getLinkto(),
				'imageurl'			=> $s->getImageurl(),
				'ordering'			=> $s->getOrdering()
				);
			$this->db->insert('SERVICES', $data);
		}

		public function listService(){
			$this->db->select('s.serviceid , s.title, s.description, s.linkto , s.imageurl, s.ordering');
			$this->db->from('SERVICES s');
			
			$this->db->order_by('s.ordering', 'desc');
			$query = $this->db->get();
			return $query->result();
		}

		public function deleteService(DtoService $s){
			$this->db->where('serviceid', $s->getServiceid());
			$this->db->delete('SERVICES');
		}

		public function getService(DtoService $s){
			$this->db->select('s.serviceid , s.title, s.description, s.linkto , s.imageurl, s.ordering ');
			$this->db->from('SERVICES s');
			$this->db->where('serviceid', $s->getServiceid());
			$this->db->order_by('serviceid', 'desc');
			$query = $this->db->get();
			return $query->result();
		}

		public function updateService(DtoService $s){
			$data = array(
				'title'				=> $s->getTitle(),
				'description'		=> $s->getDescription(),
				'linkto'			=> $s->getLinkto(),
				'imageurl'			=> $s->getImageurl(),
				'ordering'			=> $s->getOrdering()

				);
			$this->db->where('serviceid', $s->getServiceid());
			$this->db->update('SERVICES', $data);
		}

	}

?>