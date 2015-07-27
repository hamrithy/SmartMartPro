<?php

class DaoComment extends CI_Model{
	
	public function DaoComment(){
		parent::__construct();
		$this->load->database();
		$this->load->model('dto/DtoComment');
	}
	
	public function comment(DtoComment $v){
		$data = array(
				'commenter'              =>    	$v->getCommenter(),
				'message'   =>	   	str_replace(array("\r", "\n"), " ", $v->getMessage()),
				'email'    =>		$v->getEmail(),
				'postid'       =>     $v->getPostid(),
				'subof'             =>     $v->getSubof()
		);
		
		$this->db->set('submitdate', 'NOW()', FALSE);
		$this->db->insert('POSTS',$data);
	}
	
	
}