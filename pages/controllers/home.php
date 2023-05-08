<?php
function get_short_content($my_string){
	$s=implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";
	return $s;
}

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = "SELECT *
		FROM home
		WHERE home.home_id = (SELECT MAX(home_id) 
							FROM home 
							WHERE profile_account_id = '".$_SESSION['profile_account_id']."')";
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$home_id = $object->home_id;
	$img_1_id = $object->img_1_id;
	$img_2_id = $object->img_2_id;
	$img_3_id = $object->img_3_id;
	$img_4_id = $object->img_4_id;

	$img_1_fn =	get_file_name($dbCustom,$img_1_id,'site');	
	$img_2_fn =	get_file_name($dbCustom,$img_2_id,'site');	
	$img_3_fn =	get_file_name($dbCustom,$img_3_id,'site');	
	$img_4_fn =	get_file_name($dbCustom,$img_4_id,'site');	

	$top_1 = stripslashes($object->top_1);
	$top_2 = stripslashes($object->top_2);
	$top_3 = stripslashes($object->top_3);
	$p_1_head = stripslashes($object->p_1_head);
	$p_1_text = stripslashes($object->p_1_text);
	$p_2_head = stripslashes($object->p_2_head);
	$p_2_text = stripslashes($object->p_2_text);
	$p_3_head = stripslashes($object->p_3_head); 
	$p_3_text = stripslashes($object->p_3_text);
	$p_4_head = stripslashes($object->p_4_head);
	$p_4_text = stripslashes($object->p_4_text); 
	$p_5_head = stripslashes($object->p_5_head);  
	$p_5_text = stripslashes($object->p_5_text); 
	$p_6_head = stripslashes($object->p_6_head);  
	$p_6_text = stripslashes($object->p_6_text); 
	$p_7_head = stripslashes($object->p_7_head);  
	$p_7_text = stripslashes($object->p_7_text);
	$p_8_head = stripslashes($object->p_8_head);  
	$p_8_text = stripslashes($object->p_8_text);
}else{
	$img_1_id = 0;
	$img_2_id = 0;
	$img_3_id = 0;
	$img_4_id = 0;
	$img_1_fn="";
	$img_2_fn="";
	$img_3_fn="";
	$img_4_fn="";
	$top_1 = '';
	$top_2 = '';	
	$top_3 = '';
	$p_1_head = '';
	$p_1_text = '';
	$p_2_head = '';
	$p_2_text = '';
	$p_3_head = ''; 
	$p_3_text = '';
	$p_4_head = '';
	$p_4_text = ''; 
	$p_5_head = '';  
	$p_5_text = ''; 
	$p_6_head = '';  
	$p_6_text = ''; 
	$p_7_head = '';  
	$p_7_text = '';
	$p_8_head = '';  
	$p_8_text = '';
}


$cats_1=array();
$cats_2=array();
$db = $dbCustom->getDbConnect(CART_N_DATABASE);
$sql = "SELECT cat_id, name, click_count, profile_cat_id
		FROM category
		WHERE active > 0
		AND profile_account_id = '".$_SESSION['profile_account_id']."'
		ORDER BY click_count DESC LIMIT 50";		
$result = $dbCustom->getResult($db,$sql);		
$sr_n=0;
$ac_n=0;
while($row = $result->fetch_object()){
	if($cat->cat_has_showroom_items($dbCustom, $row->cat_id)>0 && $sr_n<6){
		$cats_1[$sr_n]['click_count'] = number_format($row->click_count);
		$cats_1[$sr_n]['name'] = stripSlashes($row->name);
		$cats_1[$sr_n]['file_name'] = $cat->getCatPicFn($dbCustom,$row->cat_id);
		$n = $nav->getUrlText($row->name);
		$url_str = SITEROOT."showroom-category-".$row->profile_cat_id."/".$n.".html";		
		$cats_1[$sr_n]['url']=$url_str;
		$sr_n++;
	}
	if($cat->cat_has_cart_items($dbCustom, $row->cat_id)>0 && $ac_n<6){
		$cats_2[$ac_n]['click_count'] = number_format($row->click_count);
		$cats_2[$ac_n]['name'] = stripSlashes($row->name);
		$cats_2[$ac_n]['file_name'] = $cat->getCatPicFn($dbCustom,$row->cat_id);
		$n = $nav->getUrlText($row->name);
		$url_str = SITEROOT."category-".$row->profile_cat_id."/".$n.".html";
		$cats_2[$ac_n]['url']=$url_str;

		$ac_n++;
	}
	if($sr_n>5 && $ac_n>5){
		break;
	}
}


	
?>