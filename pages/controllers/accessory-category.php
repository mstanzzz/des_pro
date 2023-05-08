<?php 
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$ts = time();
$sql = "SELECT *
		FROM accessory_cat
		WHERE accessory_cat.accessory_cat_id = (SELECT MAX(accessory_cat_id) 
											FROM accessory_cat 
											WHERE profile_account_id = '".$_SESSION['profile_account_id']."')";
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$img_id = $object->img_id;
	//$top_1 = stripslashes($object->top_1);
	//$top_2 = stripslashes($object->top_2);
	//$top_3 = stripslashes($object->top_3);	
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
/* ************************************** */


$profile_cat_id = (isset($_GET['profile_cat_id'])) ? $_GET['profile_cat_id'] : 0;
$cat_id = (isset($_GET['cat_id'])) ? $_GET['cat_id'] : 0;
if(!is_numeric($profile_cat_id))$profile_cat_id=0;
if(!is_numeric($cat_id))$cat_id=0;

$db = $dbCustom->getDbConnect(CART_N_DATABASE);

$sql = "SELECT svg_id, cat_id, name, description, click_count
			FROM category
			WHERE profile_cat_id = '".$profile_cat_id."'";
			
$re = $dbCustom->getResult($db,$sql);
if($re->num_rows > 0){
	$object = $re->fetch_object();
	$cat_id = $object->cat_id;	
	$name = $object->name;
	$svg_code = $cat->get_svg_code($dbCustom,$object->svg_id);		
	$description = $object->description;
	$click_count = $object->click_count;
}else{
	$cat_id=0;	
	$name='';
	$svg_code='';		
	$description='';
	$click_count=0;	
}

function get_items_for_cat($dbCustom, $profile_cat_id){
	$ret_array[0]['item_id'] = 0;
	$ret_array[0]['profile_item_id'] = 0;
	$ret_array[0]['name'] = '';
	$ret_array[0]['short_description'] = '';	
	$ret_array[0]['description'] = '';	
	$ret_array[0]['price_flat'] = 0;	
	$ret_array[0]['file_name'] = '';

	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$sql = "SELECT DISTINCT item.item_id
				,item.profile_item_id
				,item.name
				,item.short_description
				,item.description
				,item.price_flat
				,image.file_name
			FROM category, item_to_category, item, image
			WHERE item_to_category.cat_id = category.cat_id
			AND item_to_category.item_id = item.item_id
			AND item.img_id = image.img_id
			AND item.show_in_showroom = '0'
			AND item.active = '1'
			AND category.profile_cat_id = '".$profile_cat_id."'
			ORDER BY main_attr_id";

// AND item.show_in_showroom = '0'	

	$re = $dbCustom->getResult($db,$sql);
	$i = 0;
	while($row = $re->fetch_object()){
		$ret_array[$i]['item_id'] = $row->item_id;	
		$ret_array[$i]['profile_item_id'] = $row->profile_item_id;	
		$ret_array[$i]['name'] = $row->name;
		$ret_array[$i]['short_description'] = $row->short_description;	
		$ret_array[$i]['description'] = $row->description;	
		$ret_array[$i]['price_flat'] = $row->price_flat;	
		$ret_array[$i]['file_name'] = $row->file_name;
		$i++;
	}
	return  $ret_array;
}

function get_attrs_for_cat($dbCustom, $cat_id){
	$ret_array[0]['attribute_id'] = 0;
	$ret_array[0]['attribute_name'] = '';		
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$sql = "SELECT DISTINCT attribute.attribute_id
				,attribute.attribute_name
			FROM attribute, category, opt
			WHERE attribute.attribute_id = opt.attribute_id
			AND category.cat_id = '".$cat_id."'
			ORDER BY attribute_id";
	$re = $dbCustom->getResult($db,$sql);
	$i = 0;
	while($row = $re->fetch_object()){
		$ret_array[$i]['attribute_id'] = $row->attribute_id;
		$ret_array[$i]['attribute_name'] = $row->attribute_name;
		$i++;
	}
	return  $ret_array;
}

function get_all_opts($dbCustom, $attribute_id){
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$tmp_opt_id = 0;
	$items_opt_array[0]['item_id'] = 0; 
	$items_opt_array[0]['opt_id'] = 0;
	$items_opt_array[0]['opt_name'] = '';
	$sql = "SELECT opt.opt_id
				,item_to_opt.item_id
				,opt.opt_name
	FROM item_to_opt, opt, attribute
	WHERE opt.attribute_id = attribute.attribute_id
	AND item_to_opt.opt_id = opt.opt_id
	AND attribute.attribute_id = '".$attribute_id."'
	ORDER BY opt.opt_id";
	$result = $dbCustom->getResult($db,$sql);
	$i=0;
	while($row = $result->fetch_object()){
		if($tmp_opt_id != $row->opt_id){
			$tmp_opt_id = $row->opt_id;
			$items_opt_array[$i]['item_id'] = $row->item_id; 
			$items_opt_array[$i]['opt_id'] = $row->opt_id;
			$items_opt_array[$i]['opt_name'] = $row->opt_name;
			$i++;
		}
	}
	return $items_opt_array;
}

function apply_filters($dbCustom, $opt_ids){

	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$ret_array[0]['item_id'] = 0;
	$ret_array[0]['profile_item_id'] = 0;	
	$ret_array[0]['name'] = '';
	$ret_array[0]['short_description'] = '';	
	$ret_array[0]['description'] = '';	
	$ret_array[0]['price_flat'] = 0;	
	$ret_array[0]['file_name'] = '';

	$sql = "SELECT DISTINCT item.item_id
				,item.profile_item_id
				,item.name
				,item.short_description
				,item.description
				,item.price_flat
				,image.file_name
				,item_to_opt.item_id
				,item_to_opt.opt_id						
			FROM item_to_opt, item, image
			WHERE item_to_opt.item_id = item.item_id 
			AND item.img_id = image.img_id
			AND item.active = '1'
			AND item.show_in_showroom = '0'
			ORDER BY item_to_opt.item_id";
	$result = $dbCustom->getResult($db,$sql);
	$i=0;
	$tmp_item_id = 0;
	while($row = $result->fetch_object()){
		if($tmp_item_id != $row->item_id){
			$tmp_item_id = $row->item_id;
			if(in_array($row->opt_id, $opt_ids)){
				$ret_array[$i]['item_id'] = $row->item_id;		
				$ret_array[$i]['profile_item_id'] = $row->profile_item_id;		
				$ret_array[$i]['name'] = $row->name;
				$ret_array[$i]['short_description'] = $row->short_description;	
				$ret_array[$i]['description'] = $row->description;	
				$ret_array[$i]['price_flat'] = $row->price_flat;	
				$ret_array[$i]['file_name'] = $row->file_name;
				$i++;
			}
		}
	}
	return $ret_array;
}



// increment $click_count

$click_count++;
$sql = "UPDATE category
		SET click_count = '".$click_count."'
		WHERE cat_id = '".$cat_id."'";
$result = $dbCustom->getResult($db,$sql);


// is item in array
function item_in_opt($items_opt_array, $item_id, $opt_id){
	foreach($items_opt_array as $val){
		if($val['item_id'] == $item_id){
			if($val['opt_id'] == $opt_id){		
				return $val['opt_id'];
			}
		}
	}
}

$t=array();
$f_items = array();
if(isset($_POST['apply_filters'])){

	if(isset($_POST['opt_ids'])){
		$opt_ids = isset($_POST['opt_ids'])?$_POST['opt_ids'] : array();
		$clean_opt_ids = array();
		foreach($opt_ids as $val){
			if($val > 0){
				$clean_opt_ids[] = $val;
			}
		}
		$f_items = apply_filters($dbCustom, $clean_opt_ids);
	}
}else{
	$cat_id=0;
	$t = get_items_for_cat($dbCustom, $profile_cat_id);
}


$filter_opts = array();
$filters = array();
$attr_array = get_attrs_for_cat($dbCustom, $cat_id);	
$i=0;
foreach($attr_array as $attr){
	$filters[$i]['attribute_id'] = $attr['attribute_id'];
	$filters[$i]['attribute_name'] = $attr['attribute_name']; 
	$filter_opts = array();
	$items_opt_array = get_all_opts($dbCustom, $attr['attribute_id']);
	$tmp_opt_id = 0;
	$j=0;
	foreach($items_opt_array as $val){
		if(item_in_opt($items_opt_array, $val['item_id'], $val['opt_id'])){
			$filter_opts[$j]['opt_id'] = $val['opt_id'];
			$filter_opts[$j]['opt_name'] = $val['opt_name'];
			$j++;
		}
	}
	$filters[$i]['filter_opts'] = $filter_opts;
	$i++;
}

$items = $t;


/*
foreach($items as $val){
	echo $val['name'];
	echo "<hr />";
	echo $val['short_description'];
	echo "<hr />";
	echo $val['description'];
	echo "<hr />";
	echo "<hr />";
	echo "<hr />";
}
exit;
*/











$row_top_6_array=array();
$row_mid_2_array=array();
$row_lower_6_array=array();
$row_bottom_2_array=array();
$row_bottom_6_array=array();
$row_lower_2_array=array();
$row_low_bottom_6_array=array(); 
$row_low_bottom_2_array=array(); 
$row_even_lower_bottom_6_array=array(); 
$row_even_lower_bottom_2_array=array(); 

$i=0;
foreach($items as $val){

	if($i<5){
		$row_top_6_array[$i]['profile_item_id'] = $val['profile_item_id']; 	
		$row_top_6_array[$i]['item_id'] = $val['item_id']; 	
		$row_top_6_array[$i]['name'] = $val['name'];
		$row_top_6_array[$i]['file_name'] = $val['file_name']; 
		$row_top_6_array[$i]['short_description'] = $val['short_description']; 
		$row_top_6_array[$i]['description'] = $val['description']; 
		$row_top_6_array[$i]['price_flat'] = $val['price_flat']; 
	}
	if($i>=5 && $i<7){
		$row_mid_2_array[$i]['profile_item_id'] = $val['profile_item_id']; 	
		$row_mid_2_array[$i]['item_id'] = $val['item_id']; 
		$row_mid_2_array[$i]['name'] = $val['name']; 
		$row_mid_2_array[$i]['file_name'] = $val['file_name']; 
		$row_mid_2_array[$i]['short_description'] = $val['short_description']; 
		$row_mid_2_array[$i]['description'] = $val['description']; 
		$row_mid_2_array[$i]['price_flat'] = $val['price_flat']; 
	}

	if($i>=7 && $i < 12){
		$row_lower_6_array[$i]['profile_item_id'] = $val['profile_item_id']; 
		$row_lower_6_array[$i]['item_id'] = $val['item_id']; 
		$row_lower_6_array[$i]['name'] = $val['name']; 
		$row_lower_6_array[$i]['file_name'] = $val['file_name']; 
		$row_lower_6_array[$i]['short_description'] = $val['short_description']; 
		$row_lower_6_array[$i]['description'] = $val['description']; 
		$row_lower_6_array[$i]['price_flat'] = $val['price_flat']; 
	}

	if($i>=12 && $i<14){
		$row_lower_2_array[$i]['profile_item_id'] = $val['profile_item_id']; 
		$row_lower_2_array[$i]['item_id'] = $val['item_id']; 
		$row_lower_2_array[$i]['name'] = $val['name']; 
		$row_lower_2_array[$i]['file_name'] = $val['file_name']; 
		$row_lower_2_array[$i]['short_description'] = $val['short_description']; 
		$row_lower_2_array[$i]['description'] = $val['description']; 
		$row_lower_2_array[$i]['price_flat'] = $val['price_flat']; 
	}

	if($i>=14 && $i < 19){
		$row_bottom_6_array[$i]['profile_item_id'] = $val['profile_item_id']; 
		$row_bottom_6_array[$i]['item_id'] = $val['item_id']; 
		$row_bottom_6_array[$i]['name'] = $val['name']; 
		$row_bottom_6_array[$i]['file_name'] = $val['file_name']; 
		$row_bottom_6_array[$i]['short_description'] = $val['short_description']; 
		$row_bottom_6_array[$i]['description'] = $val['description']; 
		$row_bottom_6_array[$i]['price_flat'] = $val['price_flat']; 
	}
	if($i>=19 && $i<21){
		$row_bottom_2_array[$i]['profile_item_id'] = $val['profile_item_id']; 
		$row_bottom_2_array[$i]['item_id'] = $val['item_id']; 
		$row_bottom_2_array[$i]['name'] = $val['name']; 
		$row_bottom_2_array[$i]['file_name'] = $val['file_name']; 
		$row_bottom_2_array[$i]['short_description'] = $val['short_description']; 
		$row_bottom_2_array[$i]['description'] = $val['description']; 
		$row_bottom_2_array[$i]['price_flat'] = $val['price_flat']; 
	}

	if($i>=21 && $i < 26){
		$row_low_bottom_6_array[$i]['profile_item_id'] = $val['profile_item_id']; 
		$row_low_bottom_6_array[$i]['item_id'] = $val['item_id']; 
		$row_low_bottom_6_array[$i]['name'] = $val['name']; 
		$row_low_bottom_6_array[$i]['file_name'] = $val['file_name']; 
		$row_low_bottom_6_array[$i]['short_description'] = $val['short_description']; 
		$row_low_bottom_6_array[$i]['description'] = $val['description']; 
		$row_low_bottom_6_array[$i]['price_flat'] = $val['price_flat']; 
	}

	if($i>=26 && $i < 28){
		$row_low_bottom_2_array[$i]['profile_item_id'] = $val['profile_item_id']; 
		$row_low_bottom_2_array[$i]['item_id'] = $val['item_id']; 
		$row_low_bottom_2_array[$i]['name'] = $val['name']; 
		$row_low_bottom_2_array[$i]['file_name'] = $val['file_name']; 
		$row_low_bottom_2_array[$i]['short_description'] = $val['short_description']; 
		$row_low_bottom_2_array[$i]['description'] = $val['description']; 
		$row_low_bottom_2_array[$i]['price_flat'] = $val['price_flat']; 
	}

	if($i>=28 && $i < 33){
		$row_even_lower_bottom_6_array[$i]['profile_item_id'] = $val['profile_item_id']; 
		$row_even_lower_bottom_6_array[$i]['item_id'] = $val['item_id']; 
		$row_even_lower_bottom_6_array[$i]['name'] = $val['name']; 
		$row_even_lower_bottom_6_array[$i]['file_name'] = $val['file_name']; 
		$row_even_lower_bottom_6_array[$i]['short_description'] = $val['short_description']; 
		$row_even_lower_bottom_6_array[$i]['description'] = $val['description']; 
		$row_even_lower_bottom_6_array[$i]['price_flat'] = $val['price_flat']; 
	}

	if($i>=26 && $i < 28){
		$row_even_lower_bottom_2_array[$i]['profile_item_id'] = $val['profile_item_id']; 
		$row_even_lower_bottom_2_array[$i]['item_id'] = $val['item_id']; 
		$row_even_lower_bottom_2_array[$i]['name'] = $val['name']; 
		$row_even_lower_bottom_2_array[$i]['file_name'] = $val['file_name']; 
		$row_even_lower_bottom_2_array[$i]['short_description'] = $val['short_description']; 
		$row_even_lower_bottom_2_array[$i]['description'] = $val['description']; 
		$row_even_lower_bottom_2_array[$i]['price_flat'] = $val['price_flat']; 
	}

	$i++;
}


?>