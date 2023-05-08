<?php
if(!isset($_SERVER['DOCUMENT_ROOT'])){
	if(strpos($_SERVER['REQUEST_URI'], 'storittek/' )){    
		$_SERVER['DOCUMENT_ROOT'] = $_SERVER['DOCUMENT_ROOT'].'/storittek'; 
	}elseif(strpos($_SERVER['REQUEST_URI'], 'designitpro/' )){
		$_SERVER['DOCUMENT_ROOT'] = $_SERVER['DOCUMENT_ROOT'].'/designitpro';
	}else{
		$_SERVER['DOCUMENT_ROOT'] = $_SERVER['DOCUMENT_ROOT']; 	
	}
}


require_once($real_root.'/manage/admin-includes/manage-includes.php');

//ini_set("memory_limit","256M");

$subject_cat_id = (isset($_GET['subject_cat_id']))? $_GET['subject_cat_id'] : 0; 

$db = $dbCustom->getDbConnect(CART_N_DATABASE);	
	// Build an array of the top categories from DB
	$t_cats = array();
	$sql = "SELECT cat_id, name, img_id, show_on_home_page 
			FROM category 
			WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
			ORDER BY name";
	$result = $dbCustom->getResult($db,$sql);			
	$i = 0;
	while($row = $result->fetch_object()) {
		$sql = "SELECT child_cat_to_parent_cat_id 
				FROM child_cat_to_parent_cat
				WHERE child_cat_to_parent_cat.child_cat_id = '".$row->cat_id."'";
		
		$res = $dbCustom->getResult($db,$sql);
		if(!$res->num_rows > 0){
			$t_cats[$i]['cat_id'] = $row->cat_id;
			$t_cats[$i]['name'] = $row->name;
			$t_cats[$i]['show_on_home_page'] = $row->show_on_home_page;
			
			/*
			$sql = "SELECT file_name 
					FROM image
					WHERE img_id = '".$row->img_id."'";
			$img_res = $dbCustom->getResult($db,$sql);
			if($img_res->num_rows > 0){
				$img_obj = $img_res->fetch_object();
				$t_cats[$i]['file_name'] = $img_obj->file_name;
			}else{
				$t_cats[$i]['file_name'] = '';					
			}
			*/
																								
			$i++;
		}
		
	}


$ret_page = (isset($_GET['ret_page']))? $_GET['ret_page'] : 'keyword-landing.php'; 

$ret_path = (isset($_GET['ret_path']))? $_GET['ret_path'] : 'cms/pages';




$num_cat = (isset($_GET['num_cat']))? $_GET['num_cat'] : 1;

$block = '';
$c_block = '';

foreach ($t_cats as $t_cat) {
	
	$max_depth = 5;
	
	$c_block .= "<li role='treeitem' aria-expanded='true'>"; 
		
	$c_block .= "<a tabindex='-1' class='tree-parent' data-cattype='topcat'>";
		
	//$c_block .= "<img src='".SITEROOT."/saascustuploads/".$_SESSION['profile_account_id']."/cart/thumb/".$t_cat['file_name']."' />";
		//$checked = ($t_cat['cat_id'] == $_SESSION['temp_cat']['cat_id'])  ? "checked='checked'" : '';

	$checked = '';
		
	$c_block .= "<input type='radio' name='cat_id' value='".$t_cat['cat_id']."' ".$checked." />";
		
	$c_block .= stripslashes($t_cat['name'])."</a>";
		
	$c_block .= "<ul role='group' class='childrenplaceholder'>".getChildren($t_cat['cat_id'], SITEROOT, $subject_cat_id, $max_depth)."</ul></li>";
}

$block .= "<form action='".SITEROOT."manage/".$ret_path."/".$ret_page.".php' method='post' enctype='multipart/form-data' target='_top'>";
$block .= "<input type='hidden' name='set_cat' value='".$num_cat."' />";
$block .= $c_block;
$block .= "<br /><input type='submit' name='submit' value='Submit' />";
$block .= "</form>";

echo $block;


function getChildren($cat_id, SITEROOT, $subject_cat_id, $max_depth){

	$max_depth--;

	$block = '';

	if($max_depth > 0){
		
		$dbCustom = new DbCustom();
		$db = $dbCustom->getDbConnect(CART_N_DATABASE);

		$sql = "SELECT category.cat_id, category.name, category.img_id, show_on_home_page  
				FROM category, child_cat_to_parent_cat  
				WHERE category.cat_id = child_cat_to_parent_cat.child_cat_id
				AND child_cat_to_parent_cat.parent_cat_id = '".$cat_id."'
				ORDER BY category.name";
		$result = $dbCustom->getResult($db,$sql);			
	
		while($row = $result->fetch_object()) {
	
			$sql = "SELECT file_name 
			FROM image
			WHERE img_id = '".$row->img_id."'";
			$img_res = $dbCustom->getResult($db,$sql);
			if($img_res->num_rows > 0){
				$img_obj = $img_res->fetch_object();
				$file_name = $img_obj->file_name;
			}else{
				$file_name = '';
			}
	
			$block .= "<li role='treeitem' aria-expanded='true'>";
			$block .= "<a tabindex='-1' class='tree-parent' >";
			
			//$block .= "<img  src='".SITEROOT."/saascustuploads/".$_SESSION['profile_account_id']."/cart/list/".$file_name."'/>";
			//$checked = ($row->cat_id == $_SESSION['temp_cat']['cat_id'])  ? "checked='checked'" : '';

			$checked = '';
			
			$block .= "<input type='radio' name='cat_id' value='".$row->cat_id."' ".$checked." />";
			
			$block .= stripslashes($row->name)."</a>";
			
			
			$block .= "<ul role='group' class='childrenplaceholder'>";
			$block .= getChildren($row->cat_id, SITEROOT, $subject_cat_id, $max_depth);
			$block .= "</ul></li>";
		}	
	}


	return $block;
	
}







?>