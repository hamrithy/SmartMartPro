<?php

class Menus{

	private $CI;
	
	function __construct(){
		$this->CI = & get_instance();
	}

	function generateMenu($currentSelected="Home"){
		$this->CI->db->select("DISTINCT(A.menuid)
								, A.subof
								, A.ordering
								, A.linkto
								, C.title
								, C.description
								, A.level");
		$this->CI->db->from("MENUS A");
		$this->CI->db->join("MENUS B", "A.subof =  B.menuid", "left");
		$this->CI->db->join("MENUDETAIL C", "A.menuid = C.menuid");
		$this->CI->db->where("C.languageid",1);
		$this->CI->db->order_by("A.subof, A.ordering");
		$query = $this->CI->db->get();
		if($query->num_rows() >0){
			echo json_encode($query->result());
		}
		$query->free_result();
	}
}
?>