<?php 
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = "SELECT *
		FROM accessories
		WHERE accessories.accessories_id = (SELECT MAX(accessories_id) FROM accessories WHERE profile_account_id = '".$_SESSION['profile_account_id']."')";
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$img_id = $object->img_id;
	$p_1_head=stripslashes($object->p_1_head);
	$p_1_text=stripslashes($object->p_1_text);
	$p_2_head=stripslashes($object->p_2_head);
	$p_2_text=stripslashes($object->p_2_text);
}else{
	$img_id = 0;
	$p_1_head = 'Closet Organizer Accessories';
	$p_1_text = '';
	$p_2_head = '';
	$p_2_text = "";
}

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
$sql = "SELECT category.name
		,category.cat_id
		,category.svg_id
		,category.profile_cat_id
		FROM category 
		WHERE profile_account_id = '1'
		ORDER BY category.click_count";
$res = $dbCustom->getResult($db,$sql);
$tmp_cat_id=0;
$i=0;
while($row = $res->fetch_object()){
	if($cat->cat_has_cart_items($dbCustom,$row->cat_id)>0){
		if($tmp_cat_id != $row->cat_id){
			$tmp_cat_id = $row->cat_id;
			$t[$i]['cat_id'] = $row->cat_id;
			$t[$i]['profile_cat_id'] = $row->profile_cat_id;
			$t[$i]['svg_id'] = $row->svg_id;
			$t[$i]['svg_code'] = $cat->get_svg_code($dbCustom,$row->svg_id);
			$t[$i]['name'] = $row->name;
			$i++;
		}
	}
}

$top_cat_array = $t;

?>