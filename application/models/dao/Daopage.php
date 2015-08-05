<?php

class DaoPage extends CI_Model{
	
	public function DaoPage(){
		parent::__construct();
	}
		
	public function addPage(DtoPage $pages){
		$this->load->model("dto/Dtopage");
		$this->db->trans_begin();
		$page = array(
				'userid'             =>     $pages->getUserid(),
				'seotitle'           =>    	$pages->getSeotitle(),
				//'seodescription'     =>	   	str_replace(array("\r", "\n"), " ", $pages->getSeodescription())
				'seodescription'     =>	   	$pages->getSeodescription()
				);
		$this->db->insert('PAGES',$page);
		$pageid = $this->db->insert_id();

		foreach ($pages->getPagedetail() as $page) {
			$page["pageid"] = $pageid;
			$this->db->insert("PAGEDETAIL", $page);
		}
		if($this->db->trans_status()===FALSE){
			$this->db->trans_rollback();
			return FALSE;
		}else{
			$this->db->trans_commit();
			return TRUE;
		}
	}
	
	
	public function listPage(){
		$this->db->select('p.pageid , pd1.title title1 , pd2.title title2 , u.userid , u.username');
		$this->db->from('PAGES p');
		$this->db->join('USERS u', 'p.userid = u.userid');
		$this->db->join('PAGEDETAIL pd1', 'p.pageid = pd1.pageid AND pd1.languageid=1');
		$this->db->join('PAGEDETAIL pd2', 'p.pageid = pd2.pageid AND pd2.languageid=2');
		$this->db->order_by("pageid", "desc");
		$query = $this->db->get();
		return $query->result();
	}
	
	public function getPage($id){

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
		$this->db->trans_begin();
		$this->db->where('pageid',$p->getPageid());
		$this->db->delete('PAGEDETAIL');
		$this->db->where('pageid',$p->getPageid());
		$this->db->delete('PAGES');
		if($this->db->trans_status()===FALSE){
			$this->db->trans_rollback();
			return FALSE;
		}else{
			$this->db->trans_commit();
			return TRUE;
		}
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
		
	public function countPages(){
		return $this->db->count_all('PAGES');
	}
	
}