<?php

function get_short_content($my_string){
	$s=implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";
	return $s;
}

function get_p_img_fn($dbCustom,$img_id){

	$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
	$sql = "SELECT file_name
			FROM image
			WHERE img_id='".$img_id."'";
	$result = $dbCustom->getResult($db,$sql);
	if($result->num_rows > 0){
		$object = $result->fetch_object();
		return $object->file_name; 
	}
	return "";
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

	$img_1_fn =	get_p_img_fn($dbCustom,$img_1_id);	
	$img_2_fn =	get_p_img_fn($dbCustom,$img_2_id);	
	$img_3_fn =	get_p_img_fn($dbCustom,$img_3_id);	
	$img_4_fn =	get_p_img_fn($dbCustom,$img_4_id);	

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

$shop_by2_hide = 0;
$shop_by2_block = '';
$shop_by1_hide = 0;
$shop_by1_block = '';
$i=0;
$cats = array();
//$cats = $nav->getHomePageCats($dbCustom,'showroom',6);	
$db = $dbCustom->getDbConnect(CART_N_DATABASE);
$sql = "SELECT cat_id, name
		FROM category
		WHERE cat_id > 0
		AND profile_account_id = '".$_SESSION['profile_account_id']."'
		LIMIT 6";
$result = $dbCustom->getResult($db,$sql);		
while($row = $result->fetch_object()){
	$cats[$i]['cat_id']=$row->cat_id;
	$cats[$i]['name']=$row->name;
	$cats[$i]['file_name'] = getCatPic($row->cat_id);
	$i++;
}
	

$shoroom_images = '';
$i = 0;
foreach($cats as $val){
	
	$i++;
	if($i>6){
		$open = '';
	}else{
		$open = 'open';		
	}
	$nm = stripSlashes($val['name']);	
	$nm = $nav->getUrlText($nm);
	$name = substr($nm,0,60);

	$url_str = $nav->getCatUrl($val['name'],$val['cat_id'],'showroom');	
	
	if($i % 5 == 1){		
		$shoroom_images .= "<div class='col-12 col-lg-6 hidden-box ".$open."'>";
		$img = "./saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/wide/".$val['file_name'];
	}else{
		$shoroom_images .= "<div class='col-12 col-lg-3 hidden-box ".$open."'>";
		$img = "./saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/".$val['file_name'];
	}
	
	$shoroom_images.="<figure class='showroom-block__item'>";
	$shoroom_images.="<img src='".$img."' alt='' class='showroom-block__item--img'>";
	$shoroom_images.="<figcaption class='showroom-block__item--wrapper'>";
	$shoroom_images.="<div class='showroom-block__item--content'>";
	$shoroom_images.="<h2>".$name."</h2>";
	$shoroom_images.="<div class='showroom-block__item--images'>";
	$shoroom_images.="<img src='".SITEROOT."images/Group174.svg' alt=''>";
	$shoroom_images.="<p>10k 214</p>";
	$shoroom_images.="</div>";
	$shoroom_images.="<p>Current users in Custom Closet Organizers for Wardrobes</p>";
	$shoroom_images.="<a href='".$url_str."' title='View category' class='link-button'>";
	$shoroom_images.="view category";
	$shoroom_images.= $icon_id_left_arrow_3;
	$shoroom_images.="</a>";
	$shoroom_images.="</div>";
	$shoroom_images.="</figcaption>";
	$shoroom_images.="</figure>";
	$shoroom_images.="</div>";
	
}
	
	
?>