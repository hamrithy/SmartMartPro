<?php
	class DaoSlide extends CI_Model{

		public function DaoSlide(){
			parent::__construct();

			$this->load->database();
			$this->load->model('dto/Dtoslide');
		}
		/*
			0: slide
			1: sub slide
			2: partner
			3: feature
		*/
/*		public function addSlide(DtoSlide $s){
			$data = array(
				'slideid'          	=> $s->getSlideid(),
				'title'				=> $s->getTitle(),
				'caption'			=> str_replace(array("\r", "\n"), " ", $s->getCaption()),
				'linkto'			=> $s->getLinkto(),
				'imageurl'			=> $s->getImageurl(),
				'ordering'			=> $s->getOrdering(),
				'userid'			=> $s->getUserid()

				);
			$this->db->insert('SLIDES', $data);
		}*/

		public function getAllSlides(){
			$this->db->select('s.sliderid, s.ordering, s.type, sd.title, sd.languageid, sd.caption, sd.description, sd.imageurl');
			$this->db->from('SLIDERS s');
			$this->db->join('SLIDERDETAIL sd', 's.sliderid = sd.sliderid');
			$this->db->order_by('s.ordering', 'desc');
			$query = $this->db->get();
			return $query->result();
		}

/*		public function deleteSlide(DtoSlide $s){
			$this->db->where('slideid', $s->getSlideid());
			$this->db->delete('SLIDES');
		}

		public function getSlide(DtoSlide $s){
			$this->db->select('s.slideid , s.title, s.caption, s.linkto , s.imageurl, s.ordering , u.userid, u.username');
			$this->db->from('SLIDES s');
			$this->db->join('USERS u', 's.userid = u.userid');
			$this->db->where('slideid', $s->getSlideid());
			$this->db->order_by('slideid', 'desc');
			$query = $this->db->get();
			return $query->result();
		}

		public function updateSlide(DtoSlide $s){
			$data = array(
				'title'				=> $s->getTitle(),
				'caption'			=> str_replace(array("\r", "\n"), " ", $s->getCaption()),
				'linkto'			=> $s->getLinkto(),
				'imageurl'			=> $s->getImageurl(),
				'ordering'			=> $s->getOrdering(),
				'userid'			=> $s->getUserid()

				);
			$this->db->where('slideid', $s->getSlideid());
			$this->db->update('SLIDES', $data);
		}*/

	}


?>