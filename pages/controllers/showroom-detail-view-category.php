<?php 
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$ts = time();
$sql = "SELECT *
		FROM showroom_cat
		WHERE showroom_cat.showroom_cat_id = (SELECT MAX(showroom_cat_id) 
											FROM showroom_cat 
											WHERE profile_account_id = '".$_SESSION['profile_account_id']."')";
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$img_id = $object->img_id;
	$top_1 = stripslashes($object->top_1);
	$top_2 = stripslashes($object->top_2);
	$top_3 = stripslashes($object->top_3);	
	$p_1_head = $object->p_1_head;
	$p_1_text = $object->p_1_text;
}else{
	$img_id = 0;
	$top_1 = '';
	$top_2 = '';
	$top_3 = '';		
	$p_1_head = '';
	$p_1_text = '';
}

function get_attr_opts($dbCustom,$attribute_id){

	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$opt_array = array();
	
	$sql = "SELECT opt.opt_id, opt.opt_name
			FROM  opt, attribute 
			WHERE opt.attribute_id = attribute.attribute_id
			AND opt.attribute_id = '".$attribute_id."'";
	$res = $dbCustom->getResult($db,$sql);
	$i = 0;
	while($opt_row = $res->fetch_object()) {
		$opt_array[$i]['opt_id'] = $opt_row->opt_id;
		$opt_array[$i]['opt_name'] = $opt_row->opt_name;
		$i++;
	}
	return $opt_array;	

}

$profile_cat_id = (isset($_GET['profile_cat_id'])) ? $_GET['profile_cat_id'] : 0;
$cat_id = (isset($_GET['cat_id'])) ? $_GET['cat_id'] : 0;
if(!is_numeric($profile_cat_id))$profile_cat_id=0;
if(!is_numeric($cat_id))$cat_id=0;

$db = $dbCustom->getDbConnect(CART_N_DATABASE);
$sql = "SELECT cat_id 
		,name
		,short_description
		,description
		,img_id
		,custom1
		,custom2
		,custom3
		,click_count
		,key_words
		,tool_tip
		,img_alt_text
		FROM category
		WHERE profile_cat_id = '".$profile_cat_id."'";
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$custom1=stripSlashes($object->custom1);
	$custom2=stripSlashes($object->custom2);
	$custom3=stripSlashes($object->custom3);
	$name = stripSlashes($object->name); 
	$short_description = stripSlashes($object->short_description); 
	$description = stripSlashes($object->description); 
	$main_img_id = $object->img_id;
	$cat_id = $object->cat_id;
	$click_count = $object->click_count;
}else{

	$custom1='';
	$custom2='';
	$custom3='';
	$name = '';
	$short_description = ''; 
	$description = ''; 
	$main_img_id = 0; 
	$cat_id = 0;
	$click_count = 0;
}


// increment $click_count
$click_count++;
$sql = "UPDATE category
		SET click_count = '".$click_count."'
		WHERE cat_id = '".$cat_id."'";
$result = $dbCustom->getResult($db,$sql);


//HERO
$sql = "SELECT file_name
		FROM image
		WHERE img_id = '".$main_img_id."'";
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$hero_file_name = $object->file_name;
	$hero_img=SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/large/exwide/".$hero_file_name;
}else{
	$hero_img=SITEROOT."images/organizer-landing-pahe-header.png";
}

$items_block = '';
$show_in = 'cart';
$limit = 0;

$db = $dbCustom->getDbConnect(CART_N_DATABASE);

$t=array();

$num_rows=0;

if(isset($_POST['apply_filters'])){

	$sql = "SELECT DISTINCT item.item_id 
			,item.profile_item_id
			,item.name
			,item.short_description
			,item.description
			,image.file_name
			,item_to_opt.opt_id	
		FROM item, item_to_category, image, item_to_opt	
		WHERE item.item_id = item_to_category.item_id
		AND item_to_category.cat_id = '".$cat_id."'
		AND item.img_id = image.img_id 
		AND item.item_id = item_to_opt.item_id
		AND item.active = '1'
		AND show_in_showroom = '1'
		ORDER BY click_count DESC";
	$result = $dbCustom->getResult($db,$sql);
	$i = 0;	
	while($row = $result->fetch_object()){
		if(in_array($row->opt_id, $_POST)){
			$t[$i]['item_id'] = $row->item_id;			
			$t[$i]['profile_item_id'] = $row->profile_item_id;
			$t[$i]['name'] = stripSlashes($row->name);
			$t[$i]['file_name'] = $row->file_name;
			$t[$i]['short_description'] = stripSlashes($row->short_description);
			$t[$i]['description'] = stripSlashes($row->description);
			$i++;

		}
	}

}else{
	
	$sql = "SELECT item.item_id
			,item.profile_item_id
			,item.name
			,item.short_description
			,item.description
			,image.file_name		
		FROM item, item_to_category, image	
		WHERE item.item_id = item_to_category.item_id
		AND item_to_category.cat_id = '".$cat_id."'
		AND item.img_id = image.img_id
		AND item.active = '1'
		AND show_in_showroom = '1'
		ORDER BY click_count DESC";
	$result = $dbCustom->getResult($db,$sql);


$num_rows = $result->num_rows;
	
	$i = 0;
	while($row = $result->fetch_object()){
		$t[$i]['item_id'] = $row->item_id;
		$t[$i]['profile_item_id'] = $row->profile_item_id;		
		$t[$i]['name'] = stripSlashes($row->name);
		$t[$i]['file_name'] = $row->file_name;
		$t[$i]['short_description'] = stripSlashes($row->short_description);
		$t[$i]['description'] = stripSlashes($row->description);
		$i++;
	}		
}

$items = $t;

$sql = "SELECT attribute_id, attribute_name
		FROM  attribute
		WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
$result = $dbCustom->getResult($db,$sql);
$attr_array = array();
$i = 0;
while($attr_row = $result->fetch_object()){
	$attr_array[$i]['attribute_id'] = $attr_row->attribute_id;
	$attr_array[$i]['attribute_name'] = $attr_row->attribute_name;
	$attr_array[$i]['opt_ids'] = get_attr_opts($dbCustom,$attr_row->attribute_id);
	$i++;
}

$div_start_array=array();

$div_start_array[0]="<div class='col-12 col-lg-6 hidden-box open'>";
$div_start_array[1]="<div class='col-6 col-lg-3 hidden-box open'>";
$div_start_array[2]="<div class='col-6 col-lg-3 hidden-box open'>";
$div_start_array[3]="<div class='col-12 col-lg-3 hidden-box open'>";
$div_start_array[4]="<div class='col-12 col-lg-3  hidden-box open'>";
$div_start_array[5]="<div class='col-6 col-lg-6  hidden-box open'>";

$div_start_array[6]="<div class='col-12 col-lg-6 hidden-box open'>";
$div_start_array[7]="<div class='col-6 col-lg-3 hidden-box open'>";
$div_start_array[8]="<div class='col-6 col-lg-3 hidden-box open'>";
$div_start_array[9]="<div class='col-12 col-lg-3 hidden-box open'>";
$div_start_array[10]="<div class='col-12 col-lg-3  hidden-box open'>";
$div_start_array[11]="<div class='col-6 col-lg-6  hidden-box open'>";

$div_start_array[12]="<div class='col-12 col-lg-6 hidden-box open'>";
$div_start_array[13]="<div class='col-6 col-lg-3 hidden-box open'>";
$div_start_array[14]="<div class='col-6 col-lg-3 hidden-box open'>";
$div_start_array[15]="<div class='col-12 col-lg-3 hidden-box open'>";
$div_start_array[16]="<div class='col-12 col-lg-3  hidden-box open'>";
$div_start_array[17]="<div class='col-6 col-lg-6  hidden-box open'>";

$div_start_array[18]="<div class='col-12 col-lg-6 hidden-box open'>";
$div_start_array[19]="<div class='col-6 col-lg-3 hidden-box open'>";
$div_start_array[20]="<div class='col-6 col-lg-3 hidden-box open'>";
$div_start_array[21]="<div class='col-12 col-lg-3 hidden-box open'>";
$div_start_array[22]="<div class='col-12 col-lg-3  hidden-box open'>";
$div_start_array[23]="<div class='col-6 col-lg-6  hidden-box open'>";

$items_block='';
$i=0;

$itm_num = count($items);

foreach($items as $val){

	$url_name=getUrlText($val['name']);
	
	$url_srt=SITEROOT."showroom-".$val['profile_item_id']."/".$url_name.".html";
	//if(1){
	if($isMob){
		$img=SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/small/".$val['file_name'];
		$items_block.= $div_start_array[1];
	}else{
		$img=SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/large/wide/".$val['file_name'];
		$items_block.= isset($div_start_array[$i])?$div_start_array[$i] : $div_start_array[0];
	}

	$items_block.="<figure class='showroom-block__item'>";
	$items_block.="<img src='".$img."' alt='' class='showroom-block__item--img'>";
	$items_block.="<figcaption class='showroom-block__item--wrapper'>";
	$items_block.="<div class='showroom-block__item--content'>";
	$items_block.="<h2>".$val['name']."</h2>";
	$items_block.="<a href='".$url_srt."' title='Explore now' class='link-button'>";
	$items_block.="Explore now";
	$items_block.=$icon_id_left_arrow_3;
	$items_block.="</a>";
	$items_block.="<div class='showroom-block__item--images'>";
	$items_block.="<img src='".SITEROOT."images/Group174.svg' alt=''>";
	$items_block.="<p>/ 275 views</p>";
	$items_block.="<p class='par-show_product_preview' style='width:100%;'>";
	$items_block.=$val['short_description'];
	$items_block.="</p>";
	$items_block.="</div>";
	
	
	$items_block.="<div class='new-position_idea-folder_spec-folder'>";											
	
	$items_block.="<div class='animating-imgs__wrap showroom-detail-view-product-page idea-folder' data-toggle='modal' data-target='#saveToIdeaFolder'>";
	//$items_block.="<div class='icons icon-share__circle icon-share__circle__18C4C7 add-to-fav animate-pulse add-to-fav__icon_over-galery'>";
	//$items_block.=$icon_id_save_path_205_207;
	//$items_block.="</div>";
	
	//$items_block.="<div class='icons icon-share__circle icon-share__circle__18C4C7 add-to-fav img-check__icon' style='display: none'>";
	//$items_block.=$icon_img_check_circle_Ellipse_23_25;	
	//$items_block.="</div>";                        
	$items_block.="</div>";
	
	$items_block.="<div class='parent_idea-folder'>";
	$items_block.="<div class='info-popup-idea-folder __square'>";
	//$items_block.="<div class='icon'>";
	//$items_block.="<img src='".SITEROOT."images/idea-folder-icon.png'>";
	//$items_block.="</div>";
	//$items_block.="<span>Save to My Inspirations</span>";
	//$items_block.="<p>";
	//$items_block.="book. It has survived not only five centuries, but also the leap into electronic the leap into electronic.";
	//$items_block.="</p>";
	//$items_block.="<a class='dontShowAgain_idea'>Don't show again</a>";
	$items_block.="</div>";                                             
	$items_block.="</div>";  
	
	$items_block.="<div class='animating-imgs__wrap showroom-detail-view-product-page save-to-specs-sheet' data-toggle='modal' data-target='#saveToSpecSheet'>";
	//$items_block.="<div class='icons icon-share__circle icon-share__circle__18C4C7 add-to-fav animate-pulse add-to-fav__icon_save'>";
	//$items_block.=$icon_id_save_4344;
	//$items_block.="</div>";
	//$items_block.="<div class='icons icon-share__circle icon-share__circle__18C4C7 save-v2 add-to-fav img-check__icon_v2' style='display: none'>";
	//$items_block.=$icon_img_check_circle_Ellipse_23_25;
	//$items_block.="</div>";                                             
	$items_block.="</div>";  
	
	//$items_block.="<div class='parent_spec-folder'>";                                             
	//$items_block.="<div class='info-popup-spec-folder __square'>";
	//$items_block.="<div class='icon'>";
	//$items_block.="<img src='".SITEROOT."images/spec-folder-icon.png'>";
	//$items_block.="</div>";
	//$items_block.="<span>Save to spec folder</span>";
	//$items_block.="<p>";
	//$items_block.="ive centuries, but also the leap into electronic the leap into electronic.";
	//$items_block.="</p>";
	//$items_block.="<a class='dontShowAgain_spec'>Don't show again</a>";
	//$items_block.="</div>";
	//$items_block.="</div>"; 
	
	$items_block.="</div>"; 
	$items_block.="</div>";
	$items_block.="</figcaption>";
	$items_block.="</figure>";
	$items_block.="</div>";

	$i++;
}



			
?>







