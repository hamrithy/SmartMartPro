<?php
	class DaoSlide extends CI_Model{

		public function DaoSlide(){
			parent::__construct();

			$this->load->database();
			$this->load->model('dto/Dtoslide');
		}
		/*
		type
			slide
			sub slide
			partner
			feature
		*/
		public function addSlide(DtoSlide $s){
			$this->db->trans_begin();
			$slide = array(
							"userid"	=>	$s->getUserid(),
							"ordering"	=>	$s->getOrdering(),
							"type"		=>	$s->getType()
						);

			$this->db->insert("SLIDERS",$slide);
			$sliderid = $this->db->insert_id();
			
			foreach($s->getSliderdetail() as $slider){
				$slider["sliderid"] = $sliderid;
				$this->db->insert("SLIDERDETAIL",$slider);
			}
			if($this->db->trans_status()===FALSE){
				$this->db->trans_rollback();
				return FALSE;
			}else{
				$this->db->trans_commit();
				return TRUE;
			}
		}

		public function getAllSlides(){
			$this->db->select('s.sliderid, s.ordering, s.type, sd.title, sd.languageid, sd.caption, sd.description, sd.imageurl');
			$this->db->from('SLIDERS s');
			$this->db->join('SLIDERDETAIL sd', 's.sliderid = sd.sliderid');
			$this->db->where('sd.languageid',2);
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