<?php
if(strpos($_SERVER['REQUEST_URI'], 'solvitware/' )){ 
	$real_root = $_SERVER['DOCUMENT_ROOT'].'/solvitware';
}elseif(strpos($_SERVER['REQUEST_URI'], 'designitpro' )){  
	$real_root = $_SERVER['DOCUMENT_ROOT'].'/designitpro'; 
}elseif(strpos($_SERVER['REQUEST_URI'], 'storittek/' )){  
	$real_root = $_SERVER['DOCUMENT_ROOT'].'/storittek'; 
}else{
	$real_root = $_SERVER['DOCUMENT_ROOT']; 	
}
require_once($real_root.'/includes/class.dbcustom.php');
$dbCustom = new DbCustom();

require_once($real_root.'/manage/admin-includes/manage-includes.php');



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
				
		$i++;
	}
}

$block = '';

foreach ($t_cats as $t_cat) {
	
	$max_depth = 5;
								
	$block .= "<li role='treeitem' aria-expanded='true' id='".$t_cat['cat_id']."'>"; 
	$block .= "<a tabindex='-1' class='tree-parent' 
	data-imageurl='".SITEROOT."/saascustuploads/".$_SESSION['profile_account_id']."/cart/tiny/".$t_cat['file_name']."' 
	data-catid='".$t_cat['cat_id']."' data-cattype='topcat'>".stripslashes($t_cat['name'])."</a>";
	$block .= "<ul role='group' class='childrenplaceholder'>".getChildren($t_cat['cat_id'], SITEROOT, $max_depth, $dbCustom)."</ul></li>"; 
}
echo $block;

//echo $cat_id;


function getChildren($cat_id, SITEROOT, $max_depth, $dbCustom){

	//$dbCustom = new DbCustom();
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	
	$max_depth--;

	$block = '';
		
	if($max_depth > 0){
		$sql = "SELECT category.cat_id, category.name, category.img_id, show_on_home_page  
				FROM category, child_cat_to_parent_cat  
				WHERE category.cat_id = child_cat_to_parent_cat.child_cat_id
				AND child_cat_to_parent_cat.parent_cat_id = '".$cat_id."'";

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
		
			$block .= "<li role='treeitem' aria-expanded='true' id='".$row->cat_id."'>";
			
			$block .= "<a href='#' tabindex='-1' class='tree-parent' onclick='show_children(".$row->cat_id.")' 
			data-imageurl='".SITEROOT."/saascustuploads/".$_SESSION['profile_account_id']."/cart/small/".$file_name."' 
			data-catid=".$row->cat_id."'>".stripslashes($row->name)."</a>";	
			//subcategory name
			$block .= "<ul role='group' class='childrenplaceholder'>".getChildren($row->cat_id, SITEROOT, $max_depth, $dbCustom)."</ul></li>";	
		}
	}
	
	return $block;	
	
}


?>