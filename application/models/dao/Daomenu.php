<?php

class DaoMenu extends CI_Model{

	public function DaoMenu(){
		parent::__construct();
		$this->load->model('dto/DtoMenu');
	}
	
	public function addNewMenu(DtoMenu $menus){
		$this->db->trans_begin();
		$this->db->insert("MENUS",array("ordering" 	=> $menus->getOrdering(),
										"subof" 	=> ($menus->getSubof()=="") ? null : $menus->getSubof()
										));
		$menuID = $this->db->insert_id();
		
		foreach($menus->getMenuDetails() as $menu){
			$menu["menuid"] = $menuID;
			$this->db->insert("MENUDETAIL",$menu);
		}
		if($this->db->trans_status()===FALSE){
			$this->db->trans_rollback();
			return FALSE;
		}else{
			$this->db->trans_commit();
			return TRUE;
		}
	}
	
	public function getAllMenus(){
		$this->db->select('DISTINCT(A.menuid),A.subof, A.ordering, C.title, C.description, C.languageid,, (SELECT title FROM MENUDETAIL WHERE menuid=A.subof AND languageid=1) AS suboftitle');
		$this->db->from('MENUS A');
		$this->db->join('MENUS B', 'A.subof=B.menuid', 'left');
		$this->db->join('MENUDETAIL C', 'A.menuid=C.menuid');
		$this->db->where('C.languageid',1);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function updateMenu(DtoMenu $menu){
		
	}

	/*public function addMenu(DtoMenu $menu){
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
	}*/

}

?>