<?php

class Menus{

	private $CI;
	private $menuId 	= 'id="main_navigation_bar" class="main-nav to-right responsive-nav"';
	private $classMenu  = 'clean-list clearfix';
	private $classParent= '';
	//private $tableName = 'MENUS';

	function __construct(){
		$this->CI = & get_instance();
	}

	function generateMenu($currentSelected){
		$navigation = array();

		$sql = "SELECT DISTINCT(A.menuid),A.title, A.linkto, A.ordering, A.subof, A.status,(CASE WHEN B.menuid IS NOT NULL THEN 1 ELSE 0 END) AS parent 
			    FROM MENUS A 
				LEFT JOIN (SELECT menuid, subof FROM MENUS) B 
				ON A.menuid = B.subof
				ORDER BY A.subof,A.ordering"; 
		$query = $this->CI->db->query($sql);
		if($query->num_rows() >0){

			foreach($query->result() as $row){
				$navigation[$row->menuid]['menuid']   = $row->menuid;
                $navigation[$row->menuid]['title']    = $row->title;
                $navigation[$row->menuid]['linkto']   = $row->linkto;
                $navigation[$row->menuid]['ordering'] = $row->ordering;
                $navigation[$row->menuid]['subof']    = $row->subof;
                $navigation[$row->menuid]['status']   = $row->status;
                $navigation[$row->menuid]['parent']   = $row->parent;
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
					if($menu['parent']==true){
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

				if($menu['parent']==true){
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
}
?>