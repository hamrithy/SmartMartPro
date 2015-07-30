<?php

class DaoMenu extends CI_Model{

	public function DaoMenu(){
		parent::__construct();
		$this->load->database();
		$this->load->model('dto/DtoMenu');
	}

	public function addMenu(DtoMenu $menu){
		$subof=null;
		if($menu->getSubof()!=''){$subof=$menu->getSubof();}
		$data = array(
				'title'		=> $menu->getTitle(),
				'linkto'	=> $menu->getLinkto(),
				'ordering'	=> $menu->getOrdering(),
				'subof'		=> $subof
		);
		return $this->db->insert('MENUS', $data);
	}

	public function listMenu(){
		$this->db->select('M1.menuid, M1.Title title, M1.linkto, M1.ordering, M2.title suboftitle');
		$this->db->from('MENUS M1');
		$this->db->join('MENUS M2', 'M1.subof=M2.menuid', 'left');
		$query = $this->db->get();
		return $query->result();
	}

	public function listTopMenu(){
		$this->db->where('subof', null);
		$query = $this->db->get('MENUS');
		return $query->result();
	}

	public function getMenu($mid){
		$this->db->where('menuid', $mid);
		$query = $this->db->get('MENUS');
		return $query->result();
	}

	public function updateMenu(DtoMenu $m){
		$subof=null;
		if($m->getSubof()!=''){$subof=$m->getSubof();}
		$data = array(
				'title'		=> $m->getTitle(),
				'linkto'	=> $m->getLinkto(),
				'ordering'	=> $m->getOrdering(),
				'subof'		=> $subof
		);
		$this->db->where('menuid', $m->getMenuid());
		return $this->db->update('MENUS', $data);
	}

	public function deleteMenu($mid){
		$this->db->where('menuid', $mid);
		return $this->db->delete('MENUS');
	}

	public function deleteMenuByTitle($mTitle){
		$this->db->where("replace(LOWER(title),' ','')=", $mTitle);
		if($this->db->delete('MENUS')){
			return true;
		}else{
			return false;
		}
	}

	public function findAllMenus(){
		$this->db->select($this->input->cookie("LANGUAGE").'title AS TITLE');
		$this->db->from("MENUS");
		$query = $this->db->get();
		return $query->result_array();
	}

}

?>