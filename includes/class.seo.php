<?php

class Seo {

	public $title = '';
	public $keywords = '';
	public $description = '';
	public $page_heading = '';
	public $page_name = '';
	public $canonical = '';

	public function setMeta($slug) {
		
		$dbCustom = new DbCustom();
		$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

		if($stmt = $db->prepare("SELECT title
								,keywords
								,description
								,page_name
								,page_heading
								,canonical
						FROM page_seo 
						WHERE (page_name = ?)  
						AND profile_account_id = ?")){
			$stmt->bind_param('si', $slug, $_SESSION['profile_account_id']);						
			$stmt->execute();
			$stmt->bind_result($title
					,$keywords
					,$description
					,$page_name
					,$page_heading
					,$canonical);
		}
		if($stmt->fetch()){
				$use_default = 0;
				$this->title = $title;
				$this->keywords = $keywords;
				$this->description = $description;
				$this->page_name = $page_name;
				$this->page_heading = $page_heading;
				$this->canonical = $canonical;
		
			$stmt->close();
		}
	}

	function get_url_from_id($page_seo_id){
		$ret = '';
		if(is_array($_SESSION["pages"])){
			foreach($_SESSION["pages"] as $p_val){
				if($p_val["page_seo_id"] == $page_seo_id){					
					$ret = $p_val['seo_name'];											
				}
			}
		}
		
		return $ret; 
	}

	function get_url_from_page_name($page_name){
		$ret = '';
		if(is_array($_SESSION['pages'])){
			foreach($_SESSION['pages'] as $p_val){
				if($p_val['page_name'] == $page_name){					
					if($_SESSION['seo']){
						$ret = $p_val['seo_name'];						
					}else{
						$ret = $p_val['page_name'];						
					}
				}
			}
		}
		
		return $ret; 
	}
	
}

?>
