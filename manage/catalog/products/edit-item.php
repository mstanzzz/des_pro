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
$ts = time();
$progress = new SetupProgress;
$module = new Module;
$page_title = "Edit Product: ";
$page_group = "item";

function in_array_MS($search, $array){
	foreach($array as $val){
		if($search==$val){
			return 1;
		}
	}
	return 0;
}
function get_svg_icon_from_id($dbCustom, $svg_id){
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$sql = "SELECT svg_code
			FROM svg
			WHERE svg_id = '".$svg_id."'"; 
	$re = $dbCustom->getResult($db,$sql);
	if($re->num_rows > 0){
		$object = $re->fetch_object();
		return $object->svg_code;		
	}
	return  0;
}
function get_svg_icon_from_cat($dbCustom, $cat_id){
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$sql = "SELECT svg_code
			FROM svg, category
			WHERE category.svg_id = svg.svg_id 
			AND	category.cat_id = '".$cat_id."'";
	$re = $dbCustom->getResult($db,$sql);
	if($re->num_rows > 0){
		$object = $re->fetch_object();
		return $object->svg_code;		
	}
	return  0;
}

$db = $dbCustom->getDbConnect(CART_N_DATABASE);


$search_str = (isset($_GET['search_str'])) ? addslashes($_GET['search_str']) : ''; 
if(!isset($_SESSION['search_str'])) $_SESSION['search_str'] = $search_str;
$pagenum = (isset($_GET['pagenum'])) ? $_GET['pagenum'] : 0;
if(!isset($_SESSION['paging']['pagenum'])) $_SESSION['paging']['pagenum'] = $pagenum;
$sortby = (isset($_GET['sortby'])) ? $_GET['sortby'] : 0;
if(!isset($_SESSION['paging']['sortby'])) $_SESSION['paging']['sortby'] = $sortby;
$a_d = (isset($_GET['a_d'])) ? $_GET['a_d'] : 0;
if(!isset($_SESSION['paging']['a_d'])) $_SESSION['paging']['a_d'] = $a_d;
$truncate = (isset($_GET['truncate'])) ? $_GET['truncate'] : 0;
if(!isset($_SESSION['paging']['truncate'])) $_SESSION['paging']['truncate'] = $truncate;
$parent_cat_id = 0;
$cat_id = (isset($_GET['cat_id'])) ? $_GET['cat_id'] : 0;
if(!isset($_SESSION['cat_id'])) $_SESSION['cat_id'] = $cat_id;

$item_id = (isset($_GET['item_id'])) ? $_GET['item_id'] : 0; 
if(!is_numeric($item_id))$item_id = 0;
$_SESSION['item_id']=$item_id;

$gal_img_id=isset($_GET['gal_img_id'])?$_GET['gal_img_id']:0;
if(!is_numeric($gal_img_id))$gal_img_id = 0;

$img_id = (isset($_GET['img_id'])) ? $_GET['img_id'] : 0;
if(!is_numeric($img_id)) $img_id = 0;
if($img_id > 0){
	$_SESSION['img_id'] = $img_id;
}
if(!isset($_SESSION['img_id']))$_SESSION['img_id']=0;

$_SESSION['from_prod_sheet']=(isset($_GET['from_prod_sheet'])) ? $_GET['from_prod_sheet'] : 0;
if(!is_numeric($_SESSION['from_prod_sheet']))$_SESSION['from_prod_sheet']=0;

$sel_img_id = (isset($_GET['sel_img_id'])) ? $_GET['sel_img_id'] : 0;
if(!is_numeric($sel_img_id)) $sel_img_id = 0;
if($sel_img_id > 0){
	$_SESSION['img_id'] = $sel_img_id;
}

if(!isset($_SESSION['temp_gallery'])) $_SESSION['temp_gallery']=array();

if($gal_img_id > 0){	
	$indx=sizeof($_SESSION['temp_gallery']); 
	$sql = "INSERT INTO item_gallery
			(item_id
			,img_id)
			VALUES
			('".$item_id."','".$gal_img_id."')"; 
	$res = $dbCustom->getResult($db,$sql);	
	$_SESSION['temp_gallery'][$indx]=$gal_img_id;
}

$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';
$action = (isset($_GET['action'])) ? $_GET['action'] : '';
$_SESSION['type'] =(isset($_GET['type'])) ? $_GET['type'] : 's';

if(!isset($_SESSION['temp_item_cats'])){ 
	$_SESSION['temp_item_cats'] = getItemCats($dbCustom,$item_id);
}
if(!isset($_SESSION['temp_attr_opt_ids'])){
	$_SESSION['temp_attr_opt_ids'] = getItemAttrOptionsArray($dbCustom,$item_id);
}
if(!isset($_SESSION['temp_s_f_acces'])){ 
	$sql = "SELECT s_f_acces_id
			FROM s_f_acces_to_item 
			WHERE item_id = '".$item_id."'"; 
	$result = $dbCustom->getResult($db,$sql);					
	while($row = $result->fetch_object()){
		$_SESSION['temp_s_f_acces'][] = $row->s_f_acces_id;
	}
	
	if(!isset($_SESSION['temp_s_f_acces'])){	
		$_SESSION['temp_s_f_acces'] = array();
	}
}
if(!isset($_SESSION['temp_feats'])){ 
	$sql = "SELECT feat_id
			FROM feat_to_item 
			WHERE item_id = '".$item_id."'"; 
	$result = $dbCustom->getResult($db,$sql);					
	while($row = $result->fetch_object()){
		$_SESSION['temp_feats'][] = $row->feat_id;
	}
	if(!isset($_SESSION['temp_feats'])){	
		$_SESSION['temp_feats'] = array();
	}
}
if(!isset($_SESSION['temp_tools'])){ 
	$sql = "SELECT svg_id
			FROM item_to_svg 
			WHERE item_id = '".$item_id."'"; 
	$result = $dbCustom->getResult($db,$sql);					
	while($row = $result->fetch_object()){
		$_SESSION['temp_tools'][] = $row->svg_id;
	}
	if(!isset($_SESSION['temp_tools'])){ 
		$_SESSION['temp_tools']=array();
	}
}
if(!isset($_SESSION['temp_videos'])){ 
	$_SESSION['temp_videos'] = array();
	$sql = "SELECT video_id
			FROM item_to_video 
			WHERE item_id = '".$item_id."'"; 
	$result = $dbCustom->getResult($db,$sql);					
	while($row = $result->fetch_object()){
		$_SESSION['temp_videos'][] = $row->video_id;
	}
	if(!isset($_SESSION['temp_videos'])){	
		$_SESSION['temp_videos'] = array();
	}
}

if(!isset($_SESSION['temp_cats'])){
	$_SESSION['temp_cats'] = array();
	$sql = "SELECT category.cat_id, category.name
			FROM category, item_to_category
			WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
			AND category.cat_id = item_to_category.cat_id
			AND item_to_category.item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);					
	$i = 0;
	while($row = $result->fetch_object()){
		$_SESSION['temp_cats'][]= $row->cat_id;
		$i++;
	}
}

$sql = "SELECT img_id
	FROM item_gallery
	WHERE item_id = '".$item_id."'";
$result = $dbCustom->getResult($db,$sql);	
$i=0;
while($row = $result->fetch_object()){
	$_SESSION['temp_gallery'][$i] = $row->img_id;
	$i++;
}

if($action == 'remove_children'){
	$sql = "UPDATE item
			SET parent_item_id = '0'
			WHERE parent_item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);					
}
if(!isset($_GET['temp_docs'])){
	$_SESSION['temp_docs'] = array();
	$sql = "SELECT document_id
			FROM item_to_document
			WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);						
	while($row = $result->fetch_object()){
		$_SESSION['temp_docs'][] = $row->document_id;
	}
}

if(isset($_GET['delgalleryimgid'])){
	$key = array_search($_GET['delgalleryimgid'],$_SESSION['temp_gallery']);
	if($key!==false){
		unset($_SESSION['temp_gallery'][$key]);
		$_SESSION['temp_gallery'] = array_values($_SESSION['temp_gallery']);
	}
}
if(!isset($parent_name)) $parent_name = '';
if($action == 'remove_as_child'){	
	$sql = "UPDATE item
			SET parent_item_id = '0'
			WHERE item_id = '".$item_id."'";
	$res = $dbCustom->getResult($db,$sql);	
}

$sql = sprintf("SELECT * FROM item WHERE item_id = '%u'", $_SESSION['item_id']);
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$parent_name = '';
	if($object->parent_item_id > 0){
		$sql = "SELECT name FROM item WHERE item_id = '".$object->parent_item_id."'";
		$res = $dbCustom->getResult($db,$sql);
		if($res->num_rows > 0){
			$p_obj = $res->fetch_object();
			$parent_name = $p_obj->name; 	
		}
	}
	if($_SESSION['img_id'] == 0) $_SESSION['img_id'] = $object->img_id;
	
	if($object->date_active < $ts){
		$date_active = date("m/d/Y",$ts);
	}else{
		$date_active = date("m/d/Y",$object->date_active);
	}	
	if($object->date_inactive >= '2000000000'){
		$date_inactive = "never";
	}else{
		if(strlen($object->date_inactive) < 10){	
			$date_inactive = 'never';	
		}else{					
			$date_inactive = date('m/d/Y',$object->date_inactive);
		}
	}
	$sql = sprintf("SELECT word FROM key_words WHERE item_id = '%u'", $item_id);
	$res = $dbCustom->getResult($db,$sql);
	$_SESSION['kw_str'] = '';
	$i = 0;
	while($kw_row = $res->fetch_object()){
		if($i > 0) $_SESSION['kw_str'] .= ", ";
		$_SESSION['kw_str'] .= $kw_row->word;
		$i++;
	}
	
	if(!isset($_SESSION['parent_item_id'])){
		$_SESSION['parent_item_id'] = $object->parent_item_id;	
	}
	if(!isset($_SESSION['temp_fields']['style_id'])){
		$_SESSION['temp_fields']['style_id'] = $object->style_id;	
	}
	if(!isset($_SESSION['temp_fields']['lead_time_id'])){
		$_SESSION['temp_fields']['lead_time_id'] = $object->lead_time_id;	
	}
	if(!isset($_SESSION['temp_fields']['skill_level_id'])){
		$_SESSION['temp_fields']['skill_level_id'] = $object->skill_level_id;	
	}
	if(!isset($_SESSION['temp_fields']['type_id'])){
		$_SESSION['temp_fields']['style_id'] = $object->type_id;	
	}
	if(!isset($_SESSION['temp_fields']['date_active'])){
		$_SESSION['temp_fields']['date_active'] = $object->date_active;	
	}
	if(!isset($_SESSION['temp_fields']['date_inactive'])){
		$_SESSION['temp_fields']['date_inactive'] = $object->date_inactive;	
	}
	if(!isset($_SESSION['temp_fields']['parent_item_id'])){
		$_SESSION['temp_fields']['parent_item_id'] = $object->parent_item_id;	
	}
	if(!isset($_SESSION['temp_fields']['main_attr_id'])){
		$_SESSION['temp_fields']['main_attr_id'] = $object->main_attr_id;	
	}
	if(!isset($_SESSION['temp_fields']['name'])){
		$_SESSION['temp_fields']['name'] = $object->name;	
	}
	if(!isset($_SESSION['temp_fields']['price_flat'])){
		$_SESSION['temp_fields']['price_flat'] = $object->price_flat;	
	}
	if(!isset($_SESSION['temp_fields']['price_wholesale'])){
		$_SESSION['temp_fields']['price_wholesale'] = $object->price_wholesale;	
	}
	if(!isset($_SESSION['temp_fields']['percent_markup'])){
		$_SESSION['temp_fields']['percent_markup'] = $object->percent_markup;	
	}
	if(!isset($_SESSION['temp_fields']['percent_off'])){
		$_SESSION['temp_fields']['percent_off'] = $object->percent_off;	
	}
	if(!isset($_SESSION['temp_fields']['amount_off'])){
		$_SESSION['temp_fields']['amount_off'] = $object->amount_off;	
	}	
	if(!isset($_SESSION['temp_fields']['call_for_pricing'])){
		$_SESSION['temp_fields']['call_for_pricing'] = $object->call_for_pricing;	
	}	
	if(!isset($_SESSION['temp_fields']['is_new_product'])){
		$_SESSION['temp_fields']['is_new_product'] = $object->is_new_product;	
	}	
	if(!isset($_SESSION['temp_fields']['is_promo_product'])){
		$_SESSION['temp_fields']['is_promo_product'] = $object->is_promo_product;	
	}	
	if(!isset($_SESSION['temp_fields']['allow_back_order'])){
		$_SESSION['temp_fields']['allow_back_order'] = $object->allow_back_order;	
	}	
	if(!isset($_SESSION['temp_fields']['is_taxable'])){
		$_SESSION['temp_fields']['is_taxable'] = $object->is_taxable;	
	}	
	if(!isset($_SESSION['temp_fields']['prod_number'])){
		$_SESSION['temp_fields']['prod_number'] = $object->prod_number;	
	}	
	if(!isset($_SESSION['temp_fields']['internal_prod_number'])){
		$_SESSION['temp_fields']['internal_prod_number'] = $object->internal_prod_number;	
	}
	if(!isset($_SESSION['temp_fields']['brand_id'])){
		$_SESSION['temp_fields']['brand_id'] = $object->brand_id;	
	}
	if(!isset($_SESSION['temp_fields']['sku'])){
		$_SESSION['temp_fields']['sku'] = $object->sku;	
	}
	if(!isset($_SESSION['temp_fields']['upc'])){
		$_SESSION['temp_fields']['upc'] = $object->upc;	
	}
	if(!isset($_SESSION['temp_fields']['short_description'])){
		$_SESSION['temp_fields']['short_description'] = $object->short_description;	
	}
	if(!isset($_SESSION['temp_fields']['description'])){
		$_SESSION['temp_fields']['description'] = $object->description;	
	}
	if(!isset($_SESSION['temp_fields']['description_bullets'])){
		$_SESSION['temp_fields']['description_bullets'] = $object->description_bullets;	
	}
	if(!isset($_SESSION['temp_fields']['vend_man_id'])){
		$_SESSION['temp_fields']['vend_man_id'] = $object->vend_man_id;	
	}
	if(!isset($_SESSION['temp_fields']['spec_pink_area'])){
		$_SESSION['temp_fields']['spec_pink_area'] = $object->spec_pink_area;	
	}
	if(!isset($_SESSION['temp_fields']['back_order_message'])){
		$_SESSION['temp_fields']['back_order_message'] = $object->back_order_message;	
	}
	if(!isset($_SESSION['temp_fields']['in_stock_message'])){
		$_SESSION['temp_fields']['in_stock_message'] = $object->in_stock_message;	
	}
	if(!isset($_SESSION['temp_fields']['additional_information'])){
		$_SESSION['temp_fields']['additional_information'] = $object->additional_information;	
	}
	if(!isset($_SESSION['temp_fields']['ship_port_id'])){
		$_SESSION['temp_fields']['ship_port_id'] = $object->ship_port_id;	
	}
	if(!isset($_SESSION['temp_fields']['return_to_id'])){
		$_SESSION['temp_fields']['return_to_id'] = $object->return_to_id;	
	}
	if(!isset($_SESSION['temp_fields']['is_drop_shipped'])){
		$_SESSION['temp_fields']['is_drop_shipped'] = $object->is_drop_shipped;	
	}	
	if(!isset($_SESSION['temp_fields']['show_in_cart'])){
		$_SESSION['temp_fields']['show_in_cart'] = $object->show_in_cart;	
	}	
	if(!isset($_SESSION['temp_fields']['show_in_showroom'])){
		$_SESSION['temp_fields']['show_in_showroom'] = $object->show_in_showroom;	
	}	
	if(!isset($_SESSION['temp_fields']['shipping_flat_charge'])){
		$_SESSION['temp_fields']['shipping_flat_charge'] = $object->shipping_flat_charge;	
	}	
	if(!isset($_SESSION['temp_fields']['weight'])){
		$_SESSION['temp_fields']['weight'] = $object->weight;	
	}	
	if(!isset($_SESSION['temp_fields']['img_alt_text'])){
		$_SESSION['temp_fields']['img_alt_text'] = $object->img_alt_text;	
	}	
	if(!isset($_SESSION['temp_fields']['show_in_tool'])){
		$_SESSION['temp_fields']['show_in_tool'] = $object->show_in_tool;	
	}
	if(!isset($_SESSION['temp_fields']['doc_area_text'])){
		$_SESSION['temp_fields']['doc_area_text'] = $object->doc_area_text;	
	}
	if(!isset($_SESSION['temp_fields']['is_kit'])){
		$_SESSION['temp_fields']['is_kit'] = $object->is_kit;	
	}
	if(!isset($_SESSION['temp_fields']['is_free_shipping'])){
		$_SESSION['temp_fields']['is_free_shipping'] = $object->is_free_shipping;	
	}
	if(!isset($_SESSION['temp_fields']['show_doc_tab'])){
		$_SESSION['temp_fields']['show_doc_tab'] = $object->show_doc_tab;	
	}
	if(!isset($_SESSION['temp_fields']['hide_id_from_url'])){
		$_SESSION['temp_fields']['hide_id_from_url'] = $object->hide_id_from_url;	
	}
	if(!isset($_SESSION['temp_fields']['difficulty'])){
		$_SESSION['temp_fields']['difficulty'] = $object->difficulty;	
	}
	if(!isset($_SESSION['temp_fields']['difficulty_prof'])){
		$_SESSION['temp_fields']['difficulty_prof'] = $object->difficulty_prof;	
	}
	if(!isset($_SESSION['temp_fields']['hours'])){
		$_SESSION['temp_fields']['hours'] = $object->hours;	
	}
	if(!isset($_SESSION['temp_fields']['hours_prof'])){
		$_SESSION['temp_fields']['hours_prof'] = $object->hours_prof;	
	}
	if(!isset($_SESSION['temp_fields']['spec_title'])){
		$_SESSION['temp_fields']['spec_title'] = $object->spec_title;	
	}
	if(!isset($_SESSION['temp_fields']['spec_sub_title'])){
		$_SESSION['temp_fields']['spec_sub_title'] = $object->spec_sub_title;	
	}
	if(!isset($_SESSION['temp_fields']['spec_descr'])){
		$_SESSION['temp_fields']['spec_descr'] = $object->spec_descr;	
	}
	if(!isset($_SESSION['temp_fields']['floor_size'])){
		$_SESSION['temp_fields']['floor_size'] = $object->floor_size;	
	}
	if(!isset($_SESSION['temp_fields']['profile_item_id'])){
		$_SESSION['temp_fields']['profile_item_id'] = $object->profile_item_id;	
	}
	
}
$strip = (isset($_GET['strip'])) ? $_GET['strip'] : 0;


require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>
<style>
.modal {
  display: none;
  position: fixed; /* Stay in place */
  z-index: 1;
  left: 5;
  top: 5;
  width: 100%;
  height: 100%;
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

.modal-content {
  background-color: #fefefe;
  margin: 4% auto;
  padding: 10px;
  border: 0;
  width: 90%; /* Could be more or less, depending on screen size */
}

.close {
  color: #df743a;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>
<script src="https://cdn.tiny.cloud/1/iyk23xxriyqcd2gt44r230a2yjinya99cx1kd3tk9huatz50/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
tinymce.init({
	selector: 'textarea',
	plugins: 'advlist link image lists code',
	forced_root_block : false
});

/*
$(document).ready(function() {
	$("#datepicker1").datepicker();
	$("#datepicker2").datepicker();	
	$('#clear_dates').click(function() {
		$('#datepicker1').val('');
		$('#datepicker2').val('');
	});
});
*/
function does_exist(ele){
    if (ele !== undefined) {
        return 1;
    }else{
		return 0;
	}
}
	
function get_query_str(){
	var query_str = '';
	var is_in_form = 0;
	var opt_list = '';

	if(does_exist(document.edit_item.img_alt_text)){	
		query_str += "&img_alt_text="+document.edit_item.img_alt_text.value.replace('&', '%26');	
	}
	if(does_exist(document.edit_item.short_description)){
		query_str += "&short_description="+escape(tinyMCE.get('wysiwyg1').getContent());
	}
	if(does_exist(document.edit_item.description)){
		query_str += "&description="+escape(tinyMCE.get('wysiwyg2').getContent());
	}
	if(does_exist(document.edit_item.description_bullets)){
		query_str += "&description_bullets="+escape(tinyMCE.get('wysiwyg4').getContent());
	}

	if(does_exist(document.edit_item.additional_information)){
		query_str += "&additional_information="+escape(tinyMCE.get('wysiwyg3').getContent());
	}
	if(does_exist(document.edit_item.name)){
		query_str += "&name="+document.edit_item.name.value; 
	}
	if(does_exist(document.edit_item.style_id)){
		query_str += "&style_id="+document.edit_item.style_id.value;
	}	
	if(does_exist(document.edit_item.lead_time_id)){
		query_str += "&lead_time_id="+document.edit_item.lead_time_id.value; 
	}
	if(does_exist(document.edit_item.skill_level_id)){
		query_str += "&skill_level_id="+document.edit_item.skill_level_id.value; 
	}
	if(does_exist(document.edit_item.type_id)){
		query_str += "&type_id="+document.edit_item.type_id.value; 
	}
	if(does_exist(document.edit_item.date_active)){
		query_str += "&date_active="+document.edit_item.date_active.value; 
	}
	if(does_exist(document.edit_item.date_inactive)){
		query_str += "&date_inactive="+document.edit_item.date_inactive.value; 
	}
	if(does_exist(document.edit_item.parent_item_id)){
		query_str += "&parent_item_id="+document.edit_item.parent_item_id.value; 
	}
	if(does_exist(document.edit_item.price_flat)){
		query_str += "&price_flat="+document.edit_item.price_flat.value; 
	}
	if(does_exist(document.edit_item.price_wholesale)){
		query_str += "&price_wholesale="+document.edit_item.price_wholesale.value; 
	}
	if(does_exist(document.edit_item.percent_markup)){
		query_str += "&percent_markup="+document.edit_item.percent_markup.value; 
	}
	if(does_exist(document.edit_item.percent_off)){
		query_str += "&percent_off="+document.edit_item.percent_off.value; 
	}
	if(does_exist(document.edit_item.amount_off)){
		query_str += "&amount_off="+document.edit_item.amount_off.value; 
	}
	if(does_exist(document.edit_item.call_for_pricing)){
		query_str += (document.edit_item.call_for_pricing.checked)? "&call_for_pricing=1" : "&call_for_pricing=0"; 
	}
	if(does_exist(document.edit_item.is_new_product)){
		query_str += (document.edit_item.is_new_product.checked)? "&is_new_product=1" : "&is_new_product=0"; 
	}
	if(does_exist(document.edit_item.is_taxable)){
		query_str += (document.edit_item.is_taxable.checked)? "&is_taxable=1" : "&is_taxable=0"; 
	}
	if(does_exist(document.edit_item.is_promo_product)){
		query_str += (document.edit_item.is_promo_product.checked)? "&is_promo_product=1" : "&is_promo_product=0"; 
	}
	if(does_exist(document.edit_item.allow_back_order)){
		query_str += (document.edit_item.allow_back_order.checked)? "&allow_back_order=1" : "&allow_back_order=0"; 
	}
	if(does_exist(document.edit_item.is_drop_shipped)){
		query_str += (document.edit_item.is_drop_shipped.checked)? "&is_drop_shipped=1" : "&is_drop_shipped=0"; 
	}
	if(does_exist(document.edit_item.show_in_cart)){
		query_str += (document.edit_item.show_in_cart.checked)? "&show_in_cart=1" : "&show_in_cart=0"; 
	}
	if(does_exist(document.edit_item.show_in_showroom)){
		query_str += (document.edit_item.show_in_showroom.checked)? "&show_in_showroom=1" : "&show_in_showroom=0"; 
	}
	if(does_exist(document.edit_item.brand_id)){
		query_str += "&brand_id="+document.edit_item.brand_id.value;
	}
	if(does_exist(document.edit_item.internal_prod_number)){
		query_str += "&internal_prod_number="+document.edit_item.internal_prod_number.value;
	}
	if(does_exist(document.edit_item.sku)){
		query_str += "&sku="+document.edit_item.sku.value;
	}
	if(does_exist(document.edit_item.upc)){
		query_str += "&upc="+document.edit_item.upc.value;
	}
	if(does_exist(document.edit_item.weight)){
		query_str += "&weight="+document.edit_item.weight.value;
	}
	if(does_exist(document.edit_item.return_to_id)){
		query_str += "&return_to_id="+document.edit_item.return_to_id.value;
	}
	if(does_exist(document.edit_item.ship_port_id)){
		query_str += "&ship_port_id="+document.edit_item.ship_port_id.value;
	}
	if(does_exist(document.edit_item.shipping_flat_charge)){
		query_str += "&shipping_flat_charge="+document.edit_item.shipping_flat_charge.value;
	}
	if(does_exist(document.edit_item.keywords)){
		query_str += "&keywords="+document.edit_item.keywords.value.replace('&', '%26');
	}
	if(does_exist(document.edit_item.difficulty)){
		query_str += "&difficulty="+document.edit_item.difficulty.value;
	}
	if(does_exist(document.edit_item.difficulty_prof)){
		query_str += "&difficulty_prof="+document.edit_item.difficulty_prof.value;
	}
	if(does_exist(document.edit_item.hours)){
		query_str += "&hours="+document.edit_item.hours.value;
	}
	if(does_exist(document.edit_item.hours_prof)){
		query_str += "&hours_prof="+document.edit_item.hours_prof.value;
	}
	if(does_exist(document.edit_item.floor_size)){
		query_str += "&floor_size="+document.edit_item.floor_size.value;
	}
	return query_str;
}

function set_item_session(){
	var q_str = "?action=1"+get_query_str();
	$.ajaxSetup({ cache: false}); 
	$.ajax({
	  url: 'ajax_set_item_session.php'+q_str,
	  success: function(data) {
		//alert(data);
	  }
	});
}

function validate(){
	var theform = document.forms["edit_item"];
	theform.submit();	
}

function test(){
	alert("mmmmmm");
}

function open_feat_modal(){
	var modal = document.getElementById("featModal");
	modal.style.display = "block";
}
function close_feat_modal(){
	var modal = document.getElementById("featModal");
	modal.style.display = "none";
}

function open_doc_modal(){
	var modal = document.getElementById("docModal");
	modal.style.display = "block";
}
function close_doc_modal(){
	var modal = document.getElementById("docModal");
	modal.style.display = "none";
}

function open_video_modal(){
	var modal = document.getElementById("vidModal");
	modal.style.display = "block";
}
function close_vid_modal(){
	var modal = document.getElementById("vidModal");
	modal.style.display = "none";
}

function open_cat_modal(){
	var modal = document.getElementById("catModal");
	modal.style.display = "block";
}
function close_cat_modal(){
	var modal = document.getElementById("catModal");
	modal.style.display = "none";
}

</script>
</head>

<body>

<div class="manage_page_container">
	<div class="manage_side_nav">
		<?php 
        require_once($real_root.'/manage/admin-includes/manage-side-nav.php');
        ?>
	</div>
	<div class="manage_main">
	<center style="color:#df743a; font-size:26px;">Updating This Product</center>

<br />					
<br />
<?php
if($_SESSION['from_prod_sheet']){
	$url_str=SITEROOT;
	$url_str.="manage/catalog/prod-sheet/item-list.php";
	echo "<a class='btn btn-info' href='".$url_str."'>Return to Produset Sheet</a>";	
	echo "<br />";
}
?>

					
<button onClick="open_feat_modal();">Open Feat Acc Modal</button>
<button onClick="open_doc_modal();">Open Doc Modal</button>
<button onClick="open_video_modal();">Open Video Modal</button>
<button onClick="open_cat_modal();">Open Cat Modal</button>
<br />					
<br />					
<hr />
<?php
$db = $dbCustom->getDbConnect(CART_N_DATABASE);
if(!isset($_SESSION['ret_page']))$_SESSION['ret_page']='';
if(!isset($_SESSION['ret_dir']))$_SESSION['ret_dir']='';
if(!isset($_SESSION['search_str']))$_SESSION['search_str']='';

$url_str= 'item.php';
$url_str.= '?parent_item_id='.$_SESSION['item_id'];
$url_str.= '&item_id='.$_SESSION['item_id'];
$url_str.= '&type='.$_SESSION['type'];
$url_str.= '&cat_id='.$_SESSION['cat_id'];
$url_str.= '&pagenum='.$_SESSION['paging']['pagenum'];
$url_str.= '&sortby='.$_SESSION['paging']['sortby'];
$url_str.= '&a_d='.$_SESSION['paging']['a_d'];
$url_str.= '&truncate='.$_SESSION['paging']['truncate'];
$url_str.= '&search_str='.$_SESSION['search_str'];
$url_str.= '&ret_dir='.$_SESSION['ret_dir'];
$url_str.= '&from_prod_sheet='.$_SESSION['from_prod_sheet'];

?>
<form id="edit_item_form" name="edit_item" action="<?php echo $url_str; ?>" method="post"   enctype="multipart/form-data">
<input id="item_id" type="hidden" name="item_id" value="<?php echo $item_id;  ?>" />
<input type="hidden" name="img_id" value="<?php echo $_SESSION['img_id']; ?>" />
<input type="hidden" name="edit_item" value="1" />

<div class="page_actions_MS edit_page"  style=""> 
<?php
foreach($_SESSION['temp_gallery'] as $val){
	echo "<input type='hidden' name='temp_gallery[]' value='".$val."' />";
}

$url_str= 'item.php';
$url_str.= "?parent_item_id=".$_SESSION['item_id'];
$url_str.= '&type='.$_SESSION['type'];
$url_str.= "&item_id=".$_SESSION['item_id'];
$url_str.= "&cat_id=".$_SESSION['cat_id'];		
$url_str.= "&pagenum=".$_SESSION['paging']['pagenum'];
$url_str.= "&sortby=".$_SESSION['paging']['sortby'];
$url_str.= "&a_d=".$_SESSION['paging']['a_d'];
$url_str.= "&truncate=".$_SESSION['paging']['truncate'];					
$url_str.= '&search_str='.$_SESSION['search_str'];

echo "<a href='".$url_str."' class='btn'> Cancel &amp; Go Back</a>";

$url_str= 'add-item.php';
$url_str.= "?parent_item_id=".$_SESSION['item_id'];
$url_str.= "&item_id=".$_SESSION['item_id'];
$url_str.= '&type='.$_SESSION['type'];
$url_str.= "&ret_page=edit-item";
$url_str.= '&ret_dir='.$_SESSION['ret_dir'];
$url_str.= "&cat_id=".$_SESSION['cat_id'];						
$url_str.= "&pagenum=".$_SESSION['paging']['pagenum'];
$url_str.= "&sortby=".$_SESSION['paging']['sortby'];
$url_str.= "&a_d=".$_SESSION['paging']['a_d'];
$url_str.= "&truncate=".$_SESSION['paging']['truncate'];
$url_str.= '&search_str='.$_SESSION['search_str'];

if($admin_access->product_catalog_level > 1){ 

	if($_SESSION['parent_item_id'] == 0){
		echo "<a style='margin:30px;' id='add_child' class='btn btn-primary' href='".$url_str."'>Add New Child</a>";	
		
		if(getNumChildItems($dbCustom, $item_id) > 0){
			$url_str= 'edit-item.php';
			$url_str.= "?action=remove_children";
			$url_str.= "&parent_item_id=".$_SESSION['item_id'];
			$url_str.= "&item_id=".$_SESSION['item_id'];
			$url_str.= '&type='.$_SESSION['type'];
			$url_str.= "&ret_page=edit-item";	
			$url_str.= '&ret_dir='.$_SESSION['ret_dir'];
			$url_str.= "&cat_id=".$_SESSION['cat_id'];						
			$url_str.= "&pagenum=".$_SESSION['paging']['pagenum'];
			$url_str.= "&sortby=".$_SESSION['paging']['sortby'];
			$url_str.= "&a_d=".$_SESSION['paging']['a_d'];
			$url_str.= "&truncate=".$_SESSION['paging']['truncate'];
			$url_str.= '&search_str='.$_SESSION['search_str'];
			echo "<a id='remove_children' class='btn btn-primary' href='".$url_str."'> Remove All Child Products </a>";	
		}
	
		$url_str= 'become-child-item.php';
		$url_str.= "?cat_id=".$_SESSION['cat_id'];
		$url_str.= "&item_id=".$_SESSION['item_id'];
		$url_str.= '&type='.$_SESSION['type'];
		$url_str.= "&pagenum=".$_SESSION['paging']['pagenum'];
		$url_str.= "&sortby=".$_SESSION['paging']['sortby'];
		$url_str.= "&a_d=".$_SESSION['paging']['a_d'];
		$url_str.= "&truncate=".$_SESSION['paging']['truncate'];
		$url_str.= '&search_str='.$_SESSION['search_str'];
		echo "<a style='margin:30px;' id='make_child_of' class='btn btn-primary' 
			href='".$url_str."'> Make this child of another product</a>";
						
	}else{
		$url_str= 'edit-item.php';
		$url_str.= "?action=remove_as_child";
		$url_str.= "&item_id=".$_SESSION['item_id'];
		$url_str.= '&type='.$_SESSION['type'];
												
		echo "<hr /><a style='margin:30px;' id='remove_as_child' class='btn btn-primary' href='".$url_str."'>
		Make this NOT a child of another product</a>";
	}

	echo "<a style='margin:30px;' onClick='validate()' class='btn btn-success btn-large'>Save Product </a>";

}else{ 
	echo "Sorry, you don't have the permissions to edit this item.";
} 
?>

<table cellpadding="10" width="100%">
<tr>					 
<td width="20%;">Show in showroom?</td>
<td>
	<div class="checkboxtoggle on"> 
	<span class="ontext">YES</span>
	<a class="switch on" href="#"></a>
	<span class="offtext">NO</span>
	<input type="checkbox" class="checkboxinput" id="show_in_showroom" name="show_in_showroom" value="1" 
	<?php if($_SESSION['temp_fields']["show_in_showroom"]) echo "checked='checked'";?> />
	</div>
</td>
</tr>
<table>			
<br />					
<hr />
<br />					
<?php
			
echo "</div>";
echo "<div class='page_content'>";
echo "<a id='img'></a>";
echo "<div class='colcontainer'>";

$sql = "SELECT file_name FROM image
WHERE img_id = '".$_SESSION['img_id']."'";
$img_res = $dbCustom->getResult($db,$sql);
if($img_res->num_rows > 0){
	$img_obj = $img_res->fetch_object();
	$file_name = $img_obj->file_name;
}else{
	$file_name = '';
}

echo "<img src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/".$file_name."'>";
$url_str= SITEROOT."manage/upload-pre-crop.php"; 
$url_str.= "?ret_page=edit-item";
$url_str.= "&parent_item_id=".$_SESSION['item_id'];
$url_str.= "&item_id=".$_SESSION['item_id'];
$url_str.= "&cat_id=".$_SESSION['cat_id'];		
$url_str.= "&ret_dir=products";
$url_str.= "&ret_path=catalog/products";
$url_str.= "&img_type=cart";
$url_str.= "&crop_n=1";
$url_str.= "&upload_new_img=1";
?>
</div>
<div class="colcontainer">
	<div class="twocols">
	<a onClick="set_item_session()" class="btn btn-primary upload" 
	href="<?php echo $url_str; ?>" > Upload New Main Image </a>
	</div>               
	<?php
	$url_str= SITEROOT."manage/catalog/select-image.php";               				
	$url_str.= "?ret_page=edit-item";
	$url_str.= "&img_id=".$_SESSION['img_id'];
	$url_str.= "&ret_dir=products";
	$url_str.= "&ret_path=catalog/products";
	$url_str.= "&img_type=cart";
	$url_str.= "&item_id=".$_SESSION['item_id'];		
	$url_str.= "&cat_id=".$_SESSION['cat_id'];		
	?>                    
	<div class="twocols">
	<a  onClick="set_item_session()" class="btn btn-large btn-primary" href="<?php echo $url_str; ?>">Select a new Main Image </a>
	</div>
</div>

<?php       
foreach($_SESSION['temp_gallery'] as $val){
	$sql = "SELECT file_name FROM image
	WHERE img_id = '".$val."'";
	$img_res = $dbCustom->getResult($db,$sql);
	if($img_res->num_rows > 0){
		$img_obj = $img_res->fetch_object();
		echo "<div style='float:left; margin:10px;'>";


echo "<a style='position:relative;' 
href='edit-item.php?item_id=".$_SESSION['item_id']."&delgalleryimgid=".$val."#img' 
class='btn btn-small btn-danger'>del</a>";

		echo "<a class='fancybox' href='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$img_obj->file_name."'>";
		echo "<img src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/small/".$img_obj->file_name."'></a>";
		echo "</div>";
	}
}
echo "<div style='clear:both;'";
$url_str= SITEROOT."manage/upload-pre-crop.php";               								
$url_str.= "?ret_page=edit-item";
$url_str.= "&item_id=".$item_id;
$url_str.= "&ret_dir=products";
$url_str.= "&ret_path=catalog/products";
$url_str.= "&item_id=".$item_id;
$url_str.= "&img_type=gallery";
$url_str.= "&cat_id=".$_SESSION['cat_id'];		
?>
<br />					
<hr />
<br />					
<div class="colcontainer">
<div class="twocols">
<a  onClick="set_item_session()" class="btn btn-primary upload" href="<?php echo $url_str; ?>">Upload New Gallery Image </a>
</div>
<?php
$url_str= SITEROOT."manage/catalog/select-image.php";               				
$url_str.= "?ret_page=edit-item";
$url_str.= "&item_id=".$item_id;
$url_str.= "&ret_dir=products";
$url_str.= "&ret_path=catalog/products";
$url_str.= "&img_type=gallery";
$url_str.= "&item_id=".$item_id;
$url_str.= "&cat_id=".$_SESSION['cat_id'];		
?>                    
<div class="twocols"> 
<a  onClick="set_item_session()" class="btn btn-primary" href="<?php echo $url_str; ?>">Select New Gallery Image </a>
</div>
</div>
<br />					
<hr />
<br />					

<table style="width:100%;" cellspacing="20">
<tr>
<td width="26%"></td>
<td></td>
</tr>

<tr>
<td>Product Name</td>
<td>
<input style="width:90%;" type="text" name="name" 
value="<?php echo stripslashes($_SESSION['temp_fields']['name']); ?>" />
</td>
</tr>

<tr>
<td>URL ID Number</td>
<td>
<input style="width:90%;" type="text" name="profile_item_id" 
value="<?php echo stripslashes($_SESSION['temp_fields']['profile_item_id']); ?>" />
</td>
</tr>


<tr>
<td>Product Code / Number</td>
<td>
<input style="width:90%;" type="text" name="internal_prod_number" 
value="<?php echo stripslashes($_SESSION['temp_fields']['internal_prod_number']); ?>" />
</td>
</tr>

<tr>
<td>Keywords, Separated by Commas</td>
<td>
<input type="text" style="width:90%;"  name="keywords" 
value="<?php echo $_SESSION['kw_str']; ?>" />
</td>
</tr>

<tr>
<td>Level of Difficulty DIY Instalation</td>
<td>

<?php //echo $_SESSION['temp_fields']['difficulty']; ?>
<select id="difficulty" name="difficulty">
<option value="0" <?php if($_SESSION['temp_fields']['difficulty']==0) echo 'selected'; ?>>none</option>

<option value="1" 	<?php if($_SESSION['temp_fields']['difficulty']==1) echo 'selected'; ?>>1</option>
<option value="1.5" <?php if($_SESSION['temp_fields']['difficulty']==1.5) echo 'selected'; ?>>1&half;</option>
<option value="2"  	<?php if($_SESSION['temp_fields']['difficulty']==2) echo 'selected'; ?>>2</option>
<option value="2.5" <?php if($_SESSION['temp_fields']['difficulty']==2.5) echo 'selected'; ?>>2&half; </option>
<option value="3"  	<?php if($_SESSION['temp_fields']['difficulty']==3) echo 'selected'; ?>>3</option>
<option value="3.5" <?php if($_SESSION['temp_fields']['difficulty']==3.5) echo 'selected'; ?>>3&half;</option>
<option value="4"  	<?php if($_SESSION['temp_fields']['difficulty']==4) echo 'selected'; ?>>4</option>
<option value="4.5" <?php if($_SESSION['temp_fields']['difficulty']==4.5) echo 'selected'; ?>>4&half;</option>
</select>
</td>
</tr>

<tr>
<td>Level of Difficulty Pro Instalation</td>
<td>
<select id="difficulty_prof" name="difficulty_prof">
<option value="0" <?php if($_SESSION['temp_fields']['difficulty_prof']==0) echo 'selected'; ?>>none</option>
<option value="1" 	<?php if($_SESSION['temp_fields']['difficulty_prof']==1) echo 'selected'; ?>>1</option>
<option value="1.5" <?php if($_SESSION['temp_fields']['difficulty_prof']==1.5) echo 'selected'; ?>>1&half;</option>
<option value="2"  	<?php if($_SESSION['temp_fields']['difficulty_prof']==2) echo 'selected'; ?>>2</option>
<option value="2.5" <?php if($_SESSION['temp_fields']['difficulty_prof']==2.5) echo 'selected'; ?>>2&half; </option>
<option value="3"  	<?php if($_SESSION['temp_fields']['difficulty_prof']==3) echo 'selected'; ?>>3</option>
<option value="3.5" <?php if($_SESSION['temp_fields']['difficulty_prof']==3.5) echo 'selected'; ?>>3&half;</option>
<option value="4"  	<?php if($_SESSION['temp_fields']['difficulty_prof']==4) echo 'selected'; ?>>4</option>
<option value="4.5" <?php if($_SESSION['temp_fields']['difficulty_prof']==4.5) echo 'selected'; ?>>4&half;</option>
</select>
</td>
</tr>


<tr>
<td>Hours to Install</td>
<td>
<select id="hours" name="hours">
<option value="0" <?php if($_SESSION['temp_fields']['hours']==0) echo 'selected'; ?>>none</option>
<?php
for($i=1; $i<100; $i++){
	$sel=($_SESSION['temp_fields']['hours']==$i)?'selected':'';	
	echo "<option value='".$i."' ".$sel.">".$i."</option>";
}
?>
</select>
</td>
</tr>

<tr>
<td>Hours for pro Install</td>
<td>
<select id="hours_prof" name="hours_prof">
<option value="0" <?php if($_SESSION['temp_fields']['hours_prof']==0) echo 'selected'; ?>>none</option>
<?php
for($i=1; $i<100; $i++){
	$sel=($_SESSION['temp_fields']['hours_prof']==$i)?'selected':'';	
	echo "<option value='".$i."' ".$sel.">".$i."</option>";
}
?>
</select>
</td>
</tr>


<?php
$sql = "SELECT brand_id, name 
		FROM brand 
		WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
		AND active > '0'	
		ORDER BY name";	
$result = $dbCustom->getResult($db,$sql);
?>
<tr>
<td>Brand</td>
<td>
<select id="brand_id" name="brand_id">
<option value="0">none</option>
<?php
while($row = $result->fetch_object()){
	if($_SESSION['temp_fields']['brand_id'] == $row->brand_id){
		$sel = "selected";	
	}else{
		$sel = "";	
	}
	echo "<option  ".$sel." value='".$row->brand_id."'>".$row->name."</option>"; 

}

?>

</select>
</td>
</tr>



<tr>
<td>Floor Size</td>
<td>
<input style="width:90%;" type="text" name="floor_size" 
value="<?php echo stripslashes($_SESSION['temp_fields']['floor_size']); ?>" />
</td>
</tr>

</table>
<br />					
<hr />
<br />					
<div class="colcontainer">
	<label>Short Description</label>
	<textarea class="wysiwyg" id="wysiwyg1"  name="short_description"><?php echo stripslashes($_SESSION['temp_fields']["short_description"]); ?></textarea>
</div>
<div class="colcontainer">
	<label>Full Description</label>
	<textarea class="wysiwyg" id="wysiwyg2"  name="description"><?php echo stripslashes($_SESSION['temp_fields']['description']); ?></textarea>
</div>

<div class="colcontainer">
	<label>Description Bullets</label>
	<textarea class="wysiwyg" id="wysiwyg4"  name="description_bullets"><?php echo stripslashes($_SESSION['temp_fields']['description_bullets']); ?></textarea>
</div>

<?php
if(!isset($_SESSION['temp_fields']['spec_title']))$_SESSION['temp_fields']['spec_title']="";
?>
<tr>
<td>spec_title</td>
<td>
<input type="text" style="width:90%;"  name="spec_title" value="<?php echo stripslashes($_SESSION['temp_fields']['spec_title']); ?>" />
</td>
</tr>

<?php
if(!isset($_SESSION['temp_fields']['spec_sub_title']))$_SESSION['temp_fields']['spec_sub_title']="";
?>
<tr>
<td>spec_sub_title</td>
<td>
<input type="text" style="width:90%;"  name="spec_sub_title" value="<?php echo stripslashes($_SESSION['temp_fields']['spec_sub_title']); ?>" />
</td>
</tr>

<?php
if(!isset($_SESSION['temp_fields']['spec_descr']))$_SESSION['temp_fields']['spec_descr']="";
?>
<div class="colcontainer">
	<label>Specs Tab Description
</label>
	<textarea class="wysiwyg" id="wysiwyg5"  name="spec_descr"><?php echo stripslashes($_SESSION['temp_fields']['spec_descr']); ?></textarea>
</div>

<?php
if(!isset($_SESSION['temp_fields']['spec_pink_area']))$_SESSION['temp_fields']['spec_pink_area']="";
?>
<div class="colcontainer">
	<label>Specs Tab pink area
</label>
	<textarea class="wysiwyg" id="wysiwyg6"  name="spec_pink_area"><?php echo stripslashes($_SESSION['temp_fields']['spec_pink_area']); ?></textarea>
</div>
			

<div style="float:left; width:50%;">
<table cellpadding="6" cellspacing="6" style="width:90%;" >

<?php
$att_array = array();		
$sql = "SELECT attribute_id, attribute_name
		FROM  attribute
		WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";			
$att_res = $dbCustom->getResult($db,$sql);		
$i=0;
while($att_row = $att_res->fetch_object()){
	$att_array[$i]['attribute_id'] = $att_row->attribute_id;
	$att_array[$i]['attribute_name'] = $att_row->attribute_name;
	$i++;
}	

if(!isset($_SESSION['temp_attr_opt_ids']))$_SESSION['temp_attr_opt_ids']=array(); 
$block = '';
$block .= "<tr>";
$block .= "<td style='height:20px; background-color:#ababab; color:white; font-size:1.4em;' colspan='3'>Custom Attributes</td>";
$block .= "</tr>";

$block .= "<tr>";
$block .= "<td>Main Attribute</td>";
$block .= "<td colspan='2'>";
$block .= "<select name='main_attr_id'>";
$block .= "<option>Select</option>";
foreach($att_array as $att_val){
	$sel = ($_SESSION['temp_fields']['main_attr_id']==$att_val['attribute_id'])?'selected':'';
	$block .= "<option value='".$att_val['attribute_id']."' ".$sel.">".$att_val['attribute_name']."</option>";
}
$block .= "</select>";
$block .= "</td>";
$block .= "</tr>";
 
$sql = "SELECT attribute_id, attribute_name
FROM  attribute
WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
$result = $dbCustom->getResult($db,$sql);
while($attr_row = $result->fetch_object()) {
	$block .= "<tr>";
	$block .= "<td>".stripslashes($attr_row->attribute_name)."</td>";
	$block .= "<td><select class='chosen' multiple='multiple' 
				name='attr_".$attr_row->attribute_id."' 
				data-placeholder='Type or Select Attributes'>";

	$sql = "SELECT opt_id, opt_name
			FROM  opt, attribute 
			WHERE opt.attribute_id = attribute.attribute_id
			AND opt.attribute_id = '".$attr_row->attribute_id."'";
	$res = $dbCustom->getResult($db,$sql);
	if($res->num_rows > 0){
		$block .= "<option value='0'>N/A</option>";
		while($opt_row = $res->fetch_object()) {
			if(in_array($opt_row->opt_id,$_SESSION['temp_attr_opt_ids'])){
				$sel='selected';
			}else{
				$sel='';
			}
			$block .= "<option value='".$opt_row->opt_id."' $sel>".stripslashes($opt_row->opt_name)."</option>";
		}
	}
	$block .= "</select>";
	$block .= "</td>";
}
echo $block;
?>
</table>
</div>


<div style="float:left; width:50%;">
<table cellpadding="6" cellspacing="6" style="width:90%;" >
<tr>
<td style="height:30px; background-color:#ababab; color:white; font-size:1.4em;" colspan="3">
Select Category
</td>
</tr>			
<?php			
$disabled='';
$sql = sprintf("SELECT cat_id, name FROM category WHERE profile_account_id = '%u'", $_SESSION['profile_account_id']);
$result = $dbCustom->getResult($db,$sql);
while($row = $result->fetch_object()){
	
	$icon = get_svg_icon_from_cat($dbCustom, $row->cat_id);

	$is_in = in_array_MS($row->cat_id, $_SESSION['temp_cats']);
	if ($is_in){
		$checked = "checked";
	}else{
		$checked = "";
	}
	echo "<tr>";
	echo "<td>".$icon."</td>";
	echo "<td>
				<div class='checkboxtoggle on ".$disabled." '> 
				<span class='ontext'>ON</span>
				<a class='switch on' href='#'></a>
				<span class='offtext'>OFF</span>
				<input type='checkbox' class='checkboxinput' name='chosen_categories[]' value='".$row->cat_id."' ".$checked." /></div>";
	echo "</td>";	
	echo "<td>".$row->name."</td>";
	echo "</tr>";
}


?>
</table>	
</div>


<div style="float:left; width:50%;">
<table cellpadding="6" cellspacing="6" style="width:90%;" >
<tr>
	<td width="4%"> </td>
	<td> </td>
</tr>
<tr>
	<td style="height:30px; background-color:#ababab; color:white; font-size:1.4em;" colspan="3">Select Features
</td>
</tr>
<?php
$block='';
$sql = "SELECT feat_id, title 
FROM feat 
WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
$result = $dbCustom->getResult($db,$sql);
while($row = $result->fetch_object()){
	$is_in = in_array_MS($row->feat_id, $_SESSION['temp_feats']);
	if ($is_in){
		$checked = "checked";
	}else{
		$checked = "";
	}	
	$block	.= "<tr>";
	$block .= "<td>";	
	$block .= "<div class='checkboxtoggle on ".$disabled." '>"; 
	$block .= "<span class='ontext'>ON</span>";
	$block .= "<a class='switch on' href='#'></a>";
	$block .= "<span class='offtext'>OFF</span>";
	$block .= "<input type='checkbox' class='checkboxinput' name='feats[]' ";
	$block .= "value='".$row->feat_id."' ".$checked." /></div>";
	$block .= "</td>";	
	$block.= "<td>".$row->title."</td>";
	$block .= "</tr>";
}
echo $block;
?>
</table>	
</div>


<div style="float:left; width:50%;">
<table cellpadding="6" cellspacing="6" style="width:90%;" >
<tr>
	<td width="4%"> </td>
	<td> </td>
	<td> </td>
</tr>

<tr>
<td style="height:30px; background-color:#ababab; color:white; font-size:1.4em;" colspan="3">
Select Accessory
</td>
</tr>
<?php
$block='';
$sql = "SELECT s_f_acces_id, title 
FROM s_f_acces 
WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
$result = $dbCustom->getResult($db,$sql);
while($row = $result->fetch_object()){
	$is_in = in_array_MS($row->s_f_acces_id, $_SESSION['temp_s_f_acces']);
	if ($is_in){
		$checked = "checked";
	}else{
		$checked = "";
	}
	$block	.= "<tr>";	
	$block .= "<td>";	
	$block .= "<div class='checkboxtoggle on ".$disabled." '> 
				<span class='ontext'>ON</span>
				<a class='switch on' href='#'></a>
				<span class='offtext'>OFF</span>
				<input type='checkbox' class='checkboxinput' name='s_f_acces[]' 
				value='".$row->s_f_acces_id."' ".$checked." /></div>";
	$block .= "</td>";	
	$block .= "<td>".$row->title."</td>";
	$block .= "</tr>";

}
echo $block;
?>
</table>	
</div>


<div style="float:left; width:50%;">
<table cellpadding="6" cellspacing="6" style="width:90%;" >
<tr>
	<td width="4%">Icon </td>
	<td width="4%"> </td>
	<td>Name</td>
</tr>
<tr>
	<td style="height:30px; background-color:#ababab; color:white; font-size:1.4em;" colspan="3">Select Tools</td>
</tr>
<?php
			
$sql = sprintf("SELECT svg_id, name 
				FROM svg 
				WHERE is_tool > '0' 
				AND profile_account_id = '%u'", $_SESSION['profile_account_id']);
$result = $dbCustom->getResult($db,$sql);
while($row = $result->fetch_object()){
	
	$icon = get_svg_icon_from_id($dbCustom, $row->svg_id);
	$is_in = in_array_MS($row->svg_id, $_SESSION['temp_tools']);
	if ($is_in){
		$checked = "checked";
	}else{
		$checked = "";
	}
	echo "<tr>";
	echo "<td>".$icon."</td>";
	echo "<td>
		<div class='checkboxtoggle on ".$disabled." '> 
		<span class='ontext'>ON</span>
		<a class='switch on' href='#'></a>
		<span class='offtext'>OFF</span>
		<input type='checkbox' class='checkboxinput' name='chosen_tools[]' value='".$row->svg_id."' ".$checked." /></div>";
	echo "</td>";	
	echo "<td>".$row->name."</td>";
	echo "</tr>";
}


?>
</table>	
</form>
</div>

<div style="float:left; width:50%;">
<table cellpadding="6" cellspacing="6" style="width:90%;" >
	<td width="80%"> </td>
	<td> </td>
</tr>
<tr>
	<td style="height:30px; background-color:#ababab; color:white; font-size:1.4em;" colspan="3">Select Documents</td>
</tr>
<?php
			
$sql = sprintf("SELECT document_id, name, file_name 
				FROM document
				WHERE profile_account_id = '%u'", $_SESSION['profile_account_id']); 

$sql = "SELECT * FROM document";

$result = $dbCustom->getResult($db,$sql);
while($row = $result->fetch_object()){

	$is_in = in_array_MS($row->document_id, $_SESSION['temp_docs']);
	if ($is_in){
		$checked = "checked";
	}else{
		$checked = "";
	}
	echo "<tr>";
	//echo "<td>".$row->file_name."</td>";
	echo "<td>".$row->name."</td>";
	echo "<td>
		<div class='checkboxtoggle on ".$disabled." '> 
		<span class='ontext'>ON</span>
		<a class='switch on' href='#'></a>
		<span class='offtext'>OFF</span>
		<input type='checkbox' class='checkboxinput' name='chosen_docs[]' value='".$row->document_id."' ".$checked." /></div>";
	echo "</td>";	
	echo "</tr>";
}

?>
</table>	
</div>


<div style="float:left; width:50%;">
<table cellpadding="6" cellspacing="6" style="width:90%;" >
	<td> </td>
	<td width="80%"> </td>
	<td> </td>
</tr>
<tr>
	<td style="height:30px; background-color:#ababab; color:white; font-size:1.4em;" colspan="3">Select Video</td>
</tr>
<?php
$sql = "SELECT video_id
		,title
		,embed
		,img_id  
    FROM video";
	//WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
$result = $dbCustom->getResult($db,$sql);
while($row = $result->fetch_object()){
	
	$is_in = in_array_MS($row->video_id, $_SESSION['temp_videos']);
	if ($is_in){
		$checked = "checked";
	}else{
		$checked = "";
	}
	echo "<tr>";
	echo "<td>".$row->video_id."</td>";
	echo "<td>".stripslashes($row->title)."</td>";
	echo "<td>
		<div class='checkboxtoggle on ".$disabled." '> 
		<span class='ontext'>ON</span>
		<a class='switch on' href='#'></a>
		<span class='offtext'>OFF</span>
		<input type='checkbox' class='checkboxinput' name='chosen_videos[]' value='".$row->video_id."' ".$checked." /></div>";
	echo "</td>";	
	echo "</tr>";
}

?>
</table>	
</div>





</form>
</div>

<p class="clear"></p>
</div>



<div id="featModal" class="modal">
	<div class="modal-content">
		<a onClick="close_feat_modal();" class="close">Close</a>
		<iframe width="100%;" height="800" src="../specs-feat/feats-list.php?strip=1"></iframe>
	</div>
</div>

<div id="docModal" class="modal">
	<div class="modal-content">
		<a onClick="close_doc_modal();" class="close">Close</a>
		<iframe width="100%;" height="800" 
		src="<?php echo SITEROOT."manage/catalog/categories/document-list.php?strip=1"; ?>"></iframe>
	</div>
</div>

<div id="vidModal" class="modal">
	<div class="modal-content">
		<a onClick="close_vid_modal();" class="close">Close</a>
		<iframe width="100%;" height="800" 
		src="<?php echo SITEROOT."manage/catalog/video/video-list.php?strip=1"; ?>"></iframe>
	</div>
</div>
<div id="catModal" class="modal">
	<div class="modal-content">
		<a onClick="close_cat_modal();" class="close">Close</a>
		<iframe width="100%;" height="800" 
		src="<?php echo SITEROOT."manage/catalog/categories/t-category.php?strip=1"; ?>"></iframe>
	</div>
</div>

	<div style="display:none">
        <div id="add_new_opt" style="width:300px; height:140px;">
      
        </div>
	</div>
	<div style="display:none">
        <div id="add_attribute" style="width:300px; height:140px;">
      
        </div>
	</div>
	<div style="display:none">
        <div id="del_gal_img" style="width:200px; height:100px;">
        
        
        </div>
    </div>








<div class="disabledMsg">
	<p>Sorry, this item can't be modified.</p>
</div>

<?php
require_once($real_root."/manage/admin-includes/manage-footer.php");
?>
</body>
</html>
