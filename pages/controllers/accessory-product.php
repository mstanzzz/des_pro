<?php 
$profile_item_id = (isset($_GET['productId']))? $_GET['productId'] : 0;
if(!is_numeric($profile_item_id)) $profile_item_id = 0;

$db = $dbCustom->getDbConnect(CART_N_DATABASE);
$sql = "SELECT *
		FROM item
		WHERE profile_item_id = '".$profile_item_id."'";
$result = $dbCustom->getResult($db,$sql);		
if($result->num_rows == 0){
	header("Location: ".SITEROOT);
}else{
		
	$object = $result->fetch_object();
	$item_id = $object->item_id;
	$img_id = $object->img_id;
	$main_img_file_name = get_file_name($dbCustom,$img_id);
	$img = SITEROOT."saascustuploads/1/cart/".$main_img_file_name;
	
	$name = stripslashes($object->name); 
	$main_attr_id = $object->main_attr_id;
	$price_flat = $object->price_flat;
	$price_wholesale = $object->price_wholesale;
	$percent_markup = $object->percent_markup;
	$percent_off = $object->percent_off;
	$amount_off = $object->amount_off;
	$call_for_pricing = $object->call_for_pricing;
	$is_new_product = $object->is_new_product;
	$is_promo_product = $object->is_promo_product; 
	$allow_back_order = $object->allow_back_order;
	$vend_man_id = $object->vend_man_id; 
	$weight = $object->weight;
	$shipping_flat_charge = $object->item_id;
	$is_taxable = $object->is_taxable;
	$prod_number = $object->prod_number;
	$internal_prod_number = $object->internal_prod_number;
	
	$brand_id = $object->brand_id;
	$brand=ms_get_brand($dbCustom,$brand_id);
	if($brand=='') $brand='Sidelines';
	
	$skill_level_id = $object->skill_level_id;
	$sku = $object->sku;
	$upc = $object->upc;	
		
	$short_description = stripslashes($object->short_description);
	$description = stripslashes($object->description);
	$description_bullets = stripslashes($object->description_bullets);
	$spec_pink_area = stripslashes($object->spec_pink_area);

	$spec_title = stripslashes($object->spec_title);
	$spec_sub_title = stripslashes($object->spec_sub_title);
	$spec_descr = stripslashes($object->spec_descr);
	
	$back_order_message = stripslashes($object->back_order_message);
	$in_stock_message = stripslashes($object->in_stock_message);
	$additional_information = stripslashes($object->additional_information);
	$img_id = $object->img_id;
	$date_active = $object->date_active;
	$date_inactive = $object->date_inactive;
	$show_in_cart = $object->show_in_cart;
	$show_in_showroom = $object->show_in_showroom;
	$seo_url = stripslashes($object->seo_url); 
	$img_alt_text = stripslashes($object->img_alt_text); 
	$seo_list = stripslashes($object->seo_list);
	$key_words = stripslashes($object->key_words); 				
	
	
	$canonical_part = $object->canonical_part;
	$hide_id_from_url = $object->hide_id_from_url;
	$parent_item_id = $object->parent_item_id;
	$is_kit = $object->is_kit;
	$show_doc_tab = $object->show_doc_tab;
	$show_meas_form_tab = $object->show_meas_form_tab;
	$show_videos = $object->show_videos;
	$show_associated_kits = $object->show_associated_kits;
	$show_specs_tab = $object->show_specs_tab;
	$is_free_shipping = $object->is_free_shipping;
	$difficulty = $object->difficulty;
	$difficulty_prof = $object->difficulty_prof;	
	$hours = $object->hours;
	$hours_prof = $object->hours_prof;
	$floor_size = $object->floor_size;
	$click_count = $object->click_count;
	if($hours<1)$hours=1;
	if($hours_prof<1)$hours_prof=1;

}

$main_img_file_name = get_file_name($dbCustom,$img_id);

$img = SITEROOT."saascustuploads/1/cart/large/".$main_img_file_name;

$gallery_imgs = array();
$db = $dbCustom->getDbConnect(CART_N_DATABASE);

/*
$sql = "SELECT image.img_id
			,image.file_name
		FROM item_gallery, image
		WHERE item_gallery.img_id = image.img_id";
$sql .= " AND item_gallery.item_id = '".$item_id."'";
$result = $dbCustom->getResult($db,$sql);
$i=0;
while($row = $result->fetch_object()){
	$gallery_imgs[$i]['img_id'] = $row->img_id;
	$gallery_imgs[$i]['file_name'] = $row->file_name;
	$i++;
}


$color_array = array();
$cart_spec_sizes_array=array();
$sql = "SELECT * FROM cart_spec_sizes WHERE cart_spec_sizes_id = '".$cart_spec_sizes_id."'";
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$sizes_title = $object->title;
	$sizes_sub_1_title = $object->sub_1_title;
	$sizes_sub_1_text = $object->sub_1_text;
	$sizes_file_name_1 = $object->file_name_1;
}else{
	$sizes_title = '';
	$sizes_sub_1_title = '';
	$sizes_sub_1_text = '';
	$sizes_file_name_1 = '';
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
$main_opt_ids = array();
$main_attribute_name = '';
$sql = "SELECT attribute_name
		FROM  attribute
		WHERE attribute_id = '".$main_attr_id."'";
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$main_attribute_name = 	$object->attribute_name;
	$main_opt_ids = get_attr_opts($dbCustom,$main_attr_id);
}
echo $main_attribute_name;
*/

if(!isset($tool_icon_array))$tool_icon_array=array();
$sql = "SELECT svg.svg_code, svg.name 
		FROM item_to_svg, svg
		WHERE svg.svg_id = item_to_svg.svg_id
		AND svg.is_tool = '1' 
		AND item_to_svg.item_id = '".$item_id."'";
$result = $dbCustom->getResult($db,$sql);
$i=0;
while($row = $result->fetch_object()){
	$tool_icon_array[$i]['svg_code'] = $row->svg_code;
	$tool_icon_array[$i]['name'] = $row->name;
	$i++;
}



if(!isset($doc_array))$doc_array=array();
$sql = "SELECT document.name,document.document_id,document.file_name
			FROM document, item_to_document
			WHERE item_to_document.document_id = document.document_id
			AND item_to_document.item_id = '".$item_id."'";
$result = $dbCustom->getResult($db,$sql);						
$i=0;
while($row = $result->fetch_object()){
	$doc_array[$i]['document_id'] = $row->document_id;
	$doc_array[$i]['name'] = $row->name;
	$doc_array[$i]['file_name'] = $row->file_name;
	$i++;
}

$video_array = array();
$sql = "SELECT video_id
		,title
		,embed
		,img_id  
    FROM video 
	WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
	ORDER BY video_id LIMIT 2";
$result = $dbCustom->getResult($db,$sql);	
$i=0;
while($row = $result->fetch_object()){
	$video_array[$i]['video_id'] = $row->video_id;
	$video_array[$i]['title'] = stripslashes($row->title);
	$video_array[$i]['embed'] = stripslashes($row->embed);
	$video_array[$i]['img_id'] = $row->img_id;
	$i++;
}



?>

