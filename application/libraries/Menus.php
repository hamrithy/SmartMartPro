<?php

class Menus{

	private $CI;
	private $menuId 	= 'id="main_navigation_bar" class="main-nav to-right responsive-nav"';
	private $classMenu  = 'clean-list clearfix';
	private $classParent= '';
	private $tableName = 'MENUS';

	function __construct(){
		$this->CI = & get_instance();
	}

	function generateMenu($currentSelected){
		$navigation = array();

		$query = $this->CI->db->get($this->tableName);

		if($query->num_rows() >0){

			foreach($query->result() as $row){
				$navigation[$row->menuid]['menuid']   = $row->menuid;
                $navigation[$row->menuid]['title']    = $row->title;
                $navigation[$row->menuid]['linkto']   = $row->linkto;
                $navigation[$row->menuid]['ordering'] = $row->ordering;
                $navigation[$row->menuid]['subof']    = $row->subof;
                $navigation[$row->menuid]['status']   = $row->status;
			}
		}
		
		$query->free_result();

		$strHTML = "\t".'<nav '.$this->menuId.'>'."\n";

		$strHTML .= "\t\t".'<ul class="'.$this->classMenu.'">'."\n";

		foreach($navigation as $menu){
			if(is_array($menu)){
				if($menu['status'] && $menu['subof']==0) {
					if(str_replace(" ","",strtolower($currentSelected))==str_replace(" ","",strtolower($menu['title']))){
						$strClassCurrent = "current-menu-item";
					}else{
						$strClassCurrent = "";
					}
					if($this->isParent($menu['menuid'])==true){
						$strHTML .= "\t\t\t".'<li class="menu-item-has-children '.$strClassCurrent.'">'.anchor($menu['linkto'], '<span>'.$menu['title'].'</span>');
					}else{
						$strHTML .= "\t\t\t\t".'<li class='.$strClassCurrent.'>'.anchor($menu['linkto'], '<span>'.$menu['title'].'</span>');
					}

					$strHTML .= $this->getChildren($navigation,$menu['menuid']);

					$strHTML .= '</li>'."\n";
				}
			}
		}

		$strHTML .= "\t\t".'</ul>'."\n";

		$strHTML .= "\t".'</nav>'."\n";

		return $strHTML;
	}

	function getChildren($navigation, $parentId){
		$hasSub = false;

		$strHTML = '';
		$strHTML = "\n\t\t\t\t"."<ul>"."\n";

		foreach($navigation as $menu){
			if($menu['status'] && $menu['subof']==$parentId){
				$hasSub = true;

				if($this->isParent($menu['menuid'])==true){
					$strHTML .= "\t\t\t\t\t\t".'<li>'.anchor($menu['linkto'], '<span>'.$menu['title'].'</span>');
				}else{
					$strHTML .= "\t\t\t\t\t\t".'<li>'.anchor($menu['linkto'], '<span>'.$menu['title'].'</span>');
				}

				$strHTML .= $this->getChildren($navigation,$menu['menuid']);

				$strHTML .= '</li>' . "\n";
			}
		}
		$strHTML .= "\t\t\t\t\t".'</ul>'."\n";

		return ($hasSub) ? $strHTML : '';
	}

	function isParent($id){
		$this->CI->db->select('menuid');
		$this->CI->db->from($this->tableName);
		$this->CI->db->where('subof', $id);
		$query = $this->CI->db->get();
		if($query->num_rows()>0){	
			$query->free_result();
			return true;
		}else{
			$query->free_result();
			return false;
		}
	}
}
?>