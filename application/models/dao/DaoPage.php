<?php

class DaoPage extends CI_Model{
	
	public function DaoPage(){
		parent::__construct();
		$this->load->database();
		$this->load->model('dto/DtoPage');
	}
	
	
	public function addPage(DtoPage $p){
		$data = array(
				'title'              =>    	$p->getTitle(),
				'body'  			 =>	   	$p->getBody(),
				'userid'             =>     $p->getUserid(),
				'seotitle'           =>    	$p->getSeotitle(),
				'seodescription'     =>	   	str_replace(array("\r", "\n"), " ", $p->getSeodescription())
		);
		$this->db->set('createddate', 'NOW()', FALSE);
		$this->db->insert('PAGES',$data);
	}
	
	
	public function listPage(){
		$this->db->select('p.pageid , p.title , p.createddate , u.userid , u.username');
		$this->db->from('PAGES p');
		$this->db->join('USERS u', 'p.userid = u.userid');
		$this->db->order_by("pageid", "desc");
		$query = $this->db->get();
		return $query->result();
	}
	
	public function getPage(DtoPage $p){
		$this->db->select('p.pageid , p.title , p.body , p.seotitle,p.seodescription, u.userid , u.username');
		$this->db->from('PAGES p');
		$this->db->join('USERS u', 'p.userid = u.userid');
		$this->db->where('pageid',$p->getPageid());
		$query = $this->db->get();
		return $query->result();
	}

	public function getPageByName($pageName){
		$this->db->select('p.pageid , p.title , p.body , u.userid , u.username');
		$this->db->from('PAGES p');
		$this->db->join('USERS u', 'p.userid = u.userid');
		$this->db->where("replace(LOWER(p.title),' ','')=",$pageName);
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row();
	}
	
	public function deletePage(DtoPage $p){
		$this->db->where('pageid',$p->getPageid());
		$this->db->delete('PAGES');
	}
	
	public function updatePage(DtoPage $p){
		$data = array(
				'title'              =>    	$p->getTitle(),
				'body'  			 =>	   	$p->getBody(),
				'userid'             =>     $p->getUserid(),
				'seotitle'           =>    	$p->getSeotitle(),
				'seodescription'     =>	   	str_replace(array("\r", "\n"), " ", $p->getSeodescription())
		);
		$this->db->set('createddate', 'NOW()', FALSE);
		$this->db->where('pageid' , $p->getPageid());
		$this->db->update('PAGES' , $data);
	}
		
	
}