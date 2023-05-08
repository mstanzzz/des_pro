<?php 
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = "SELECT *
		FROM showroom
		WHERE showroom.showroom_id = (SELECT MAX(showroom_id) FROM showroom WHERE profile_account_id = '".$_SESSION['profile_account_id']."')";
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$img_id = $object->img_id;
	$top_1 = stripslashes($object->top_1);
	$top_2 = stripslashes($object->top_2);
	$top_3 = stripslashes($object->top_3);	
	$p_1_head = stripslashes($object->p_1_head);
	$p_1_text = stripslashes($object->p_1_text);
}else{
	$img_id = 0;
	$top_1 = 'Closet Organizer Showroom';
	$top_2 = '';
	$top_3 = '';

	$p_1_head = "";
	$p_1_text = "";
}

$hero_file_name = '';

$sql = "SELECT file_name
		FROM image
		WHERE img_id = '".$img_id."'";				
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$hero_file_name = $object->file_name;
}else{
	$hero_file_name = '';
}

$db = $dbCustom->getDbConnect(CART_N_DATABASE);  
$sql = "SELECT profile_cat_id 
		,cat_id
		,name
		,svg_id				
		FROM category
		WHERE active > '0' 
		AND profile_account_id = '".$_SESSION['profile_account_id']."'
		ORDER BY click_count DESC";				
$result = $dbCustom->getResult($db,$sql);		
$i = 0;
while($row = $result->fetch_object()){
	if($cat->cat_has_showroom_items($dbCustom, $row->cat_id)>0){		
		$t[$i]['profile_cat_id'] = $row->profile_cat_id;
		$t[$i]['cat_id'] = $row->cat_id;
		$t[$i]['svg_id'] = $row->svg_id;
		$t[$i]['svg_code'] = $cat->get_svg_code($dbCustom,$row->svg_id);
		$t[$i]['name'] = $row->name;
		$i++;
	}
}

$top_cat_array = $t;


?>