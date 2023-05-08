<?php
$ts = time();

$db = $dbCustom->getDbConnect(CART_N_DATABASE);

	$item_id = (isset($_POST['item_id']))? $_POST['item_id'] : 0;
	$img_id = (isset($_POST['img_id']))? $_POST['img_id'] : 0;
	$style_id = (isset($_POST['style_id']))? $_POST['style_id'] : 0;
	$lead_time_id = (isset($_POST['lead_time_id']))? $_POST['lead_time_id'] : 0;
	$type_id = (isset($_POST['type_id']))? $_POST['type_id'] : 0;
	$main_attr_id = (isset($_POST['main_attr_id']))? $_POST['main_attr_id'] : 0;

	if(!is_numeric($item_id))$item_id=0;
	if(!is_numeric($img_id))$img_id=0;
	if(!is_numeric($style_id))$style_id=0;
	if(!is_numeric($lead_time_id))$lead_time_id=0;
	if(!is_numeric($type_id))$type_id=0;
	if(!is_numeric($main_attr_id))$main_attr_id=0;

	$name = (isset($_POST['name']))? trim(addslashes($_POST['name'])) : '';
	$price_flat = (isset($_POST['price_flat']))? $_POST['price_flat'] : 0;
	$price_wholesale = (isset($_POST['price_wholesale']))? $_POST['price_wholesale'] : 0;
	$percent_markup = (isset($_POST['percent_markup']))? $_POST['percent_markup'] : 0;
	$percent_off = (isset($_POST['percent_off']))? $_POST['percent_off'] : 0;
	$amount_off = (isset($_POST['amount_off']))? $_POST['amount_off'] : 0;
	$is_taxable = (isset($_POST['is_taxable']))? $_POST['is_taxable'] : 0;
	$call_for_pricing = (isset($_POST['call_for_pricing']))? $_POST['call_for_pricing'] : 0;
	$is_new_product = (isset($_POST['is_new_product']))? $_POST['is_new_product'] : 0;
	$is_promo_product = (isset($_POST['is_promo_product']))? $_POST['is_promo_product'] : 0;
	$allow_back_order = (isset($_POST['allow_back_order']))? $_POST['allow_back_order'] : 0;
	$brand_id = (isset($_POST['brand_id']))? $_POST['brand_id'] : 0;
	$internal_prod_number = (isset($_POST['internal_prod_number']))? $_POST['internal_prod_number'] : 0;
	$sku = (isset($_POST['sku']))? $_POST['sku'] : 0;
	$upc = (isset($_POST['upc']))? $_POST['upc'] : 0;
	$short_description = (isset($_POST['short_description']))? trim(addslashes($_POST['short_description'])) : '';
	$description = (isset($_POST['description']))? trim(addslashes($_POST['description'])) : '';
	$description_bullets = (isset($_POST['description_bullets']))? trim(addslashes($_POST['description_bullets'])) : '';

	$spec_title = (isset($_POST['spec_title']))? trim(addslashes($_POST['spec_title'])) : '';
	$spec_sub_title = (isset($_POST['spec_sub_title']))? trim(addslashes($_POST['spec_sub_title'])) : '';
	$spec_descr = (isset($_POST['spec_descr']))? trim(addslashes($_POST['spec_descr'])) : '';
	$spec_pink_area = (isset($_POST['spec_pink_area']))? trim(addslashes($_POST['spec_pink_area'])) : '';

	$back_order_message = (isset($_POST['back_order_message']))? trim(addslashes($_POST['back_order_message'])) : '';
	$in_stock_message = (isset($_POST['in_stock_message']))? trim(addslashes($_POST['in_stock_message'])) : '';
	$additional_information = (isset($_POST['additional_information']))? trim(addslashes($_POST['additional_information'])) : '';
	$return_to_id = (isset($_POST['return_to_id']))? $_POST['return_to_id'] : 0;
	$is_drop_shipped = (isset($_POST['is_drop_shipped']))? $_POST['is_drop_shipped'] : 0;
	$show_in_tool = (isset($_POST['show_in_tool']))? $_POST['show_in_tool'] : 0;
	$hours = (isset($_POST['hours']))? $_POST['hours'] : 0;
	$hours_prof = (isset($_POST['hours_prof']))? $_POST['hours_prof'] : 0;
	
	$show_in_cart = (isset($_POST['show_in_cart']))? $_POST['show_in_cart'] : 2;
	$show_in_showroom = (isset($_POST['show_in_showroom']))? $_POST['show_in_showroom'] : 0;
	$weight = (isset($_POST['weight']))? $_POST['weight'] : 0;
	$shipping_flat_charge = (isset($_POST['shipping_flat_charge']))? $_POST['shipping_flat_charge'] : 0;
	$ship_port_id = (isset($_POST['ship_port_id']))? $_POST['ship_port_id'] : 0;
	$img_alt_text = (isset($_POST['img_alt_text']))? trim(addslashes($_POST['img_alt_text'])) : '';
	$keywords = (isset($_POST['keywords']))? trim(addslashes($_POST['keywords'])) : '';
	$doc_area_text = (isset($_POST['doc_area_text']))? trim(addslashes($_POST['doc_area_text'])) : '';
	$is_kit = (isset($_POST['is_kit']))? 1 : 0;
	$is_free_shipping = (isset($_POST['is_free_shipping']))? 1 : 0;
	$show_doc_tab = (isset($_POST['show_doc_tab']))? 1 : 0;
	$show_meas_form_tab = (isset($_POST['show_meas_form_tab']))? 1 : 0;
	$show_atc_btn_or_cfp = (isset($_POST['show_atc_btn_or_cfp']))? 1 : 0;
	$show_start_design_btn = (isset($_POST['show_start_design_btn']))? 1 : 0;
	$show_design_request_btn = (isset($_POST['show_design_request_btn']))? 1 : 0;
	$show_videos = (isset($_POST['show_videos']))? 1 : 0;
	$show_associated_kits = (isset($_POST['show_associated_kits']))? 1 : 0;
	$show_specs_tab = (isset($_POST['show_specs_tab']))? 1 : 0;
	$hide_id_from_url = 0;
	$date_active = (isset($_POST['date_active']))? trim($_POST['date_active']) :0;
	$date_inactive = (isset($_POST['date_inactive']))? trim($_POST['date_inactive']):0;
	$difficulty = (isset($_POST['difficulty']))? $_POST['difficulty'] : 0;
	$difficulty_prof = (isset($_POST['difficulty_prof']))? $_POST['difficulty_prof'] : 0;

	$floor_size = (isset($_POST['floor_size']))? trim(addslashes($_POST['floor_size'])) : '';

	if(strlen($date_active) < 10){		
		$date_active = $ts;		
	}else{
		$date_active = strtotime($date_active);
	}
	if(strlen($date_inactive) < 10){	
		$date_inactive = '2222222222';		
	}else{
		$date_inactive = strtotime($date_inactive);
	}
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);

	$profile_item_id = (isset($_POST['profile_item_id']))? trim($_POST['profile_item_id']) : 0;
	if(!is_numeric($profile_item_id))$profile_item_id=0;

	$db = $dbCustom->getDbConnect(CART_N_DATABASE);

	if($profile_item_id == 0){
		$update_profile_item_id = 1;		
	}else{
		$sql = "SELECT profile_item_id 
				FROM item 
				WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
				AND profile_item_id = '".$profile_item_id."'";
		$result = $dbCustom->getResult($db,$sql);		
		if($result->num_rows > 1){
			$update_profile_item_id = 1;
		}else{
			$update_profile_item_id = 0;
		}
	}

	if($update_profile_item_id == 1){
		$sql = "SELECT max(profile_item_id) AS profile_item_id 
				FROM item 
				WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
		$result = $dbCustom->getResult($db,$sql);		
		if($result->num_rows > 0){
			$object = $result->fetch_object();
			$profile_item_id = $object->profile_item_id + 1; 	
		}
	}


	$stmt = $db->prepare("UPDATE item
					SET main_attr_id = ?
					,name = ?
					,floor_size = ?
					,price_flat = ?
					,price_wholesale = ?
					,percent_markup = ?
					,percent_off = ?
					,amount_off = ?
					,call_for_pricing = ?
					,is_new_product = ?
					,is_promo_product  = ?
					,allow_back_order = ? 
					,brand_id = ? 
					,is_taxable = ?
					,internal_prod_number = ?
					,sku = ?
					,upc = ?
					,short_description = ?
					,description = ?
					,description_bullets = ?
					,spec_title = ?
					,spec_sub_title = ?
					,spec_descr = ?
					,spec_pink_area = ?
					,back_order_message = ?
					,in_stock_message = ?
					,additional_information = ?
					,return_to_id = ?
					,is_drop_shipped = ?
					,ship_port_id = ?
					,img_id = ?
					,date_active = ?
					,date_inactive = ? 
					,hours = ?
					,hours_prof = ?
					,show_in_cart  = ?
					,show_in_showroom = ?
					,shipping_flat_charge = ?
					,style_id = ?
					,lead_time_id = ?
					,type_id = ?
					,weight = ?
					,img_alt_text = ?
					,key_words = ?
					,show_in_tool = ?
					,hide_id_from_url = ?
					,doc_area_text = ?
					,is_kit = ?
					,is_free_shipping = ?					
					,show_doc_tab = ?
					,show_meas_form_tab = ?
					,show_atc_btn_or_cfp = ?										
					,show_start_design_btn = ?
					,show_design_request_btn = ?
					,show_videos = ?
					,show_associated_kits = ?
					,difficulty_prof = ?
					,difficulty = ?
					,profile_item_id = ?	
				WHERE item_id = ?"); 
									
				//echo 'Error-1 UPDATE   '.$db->error;
								
	if(!$stmt->bind_param("issddiidiiiiiisssssssssssssiiiiissiiidiiiidssiisiiiiiiiiddii",
					$main_attr_id
					,$name
					,$floor_size					
					,$price_flat
					,$price_wholesale
					,$percent_markup
					,$percent_off
					,$amount_off
					,$call_for_pricing
					,$is_new_product
					,$is_promo_product 
					,$allow_back_order 
					,$brand_id 
					,$is_taxable
					,$internal_prod_number
					,$sku
					,$upc
					,$short_description
					,$description
					,$description_bullets
					,$spec_title
					,$spec_sub_title
					,$spec_descr
					,$spec_pink_area
					,$back_order_message
					,$in_stock_message
					,$additional_information
					,$return_to_id
					,$is_drop_shipped
					,$ship_port_id
					,$img_id
					,$date_active
					,$date_inactive
					,$hours
					,$hours_prof
					,$show_in_cart 
					,$show_in_showroom
					,$shipping_flat_charge
					,$style_id
					,$lead_time_id
					,$type_id
					,$weight
					,$img_alt_text
					,$keywords
					,$show_in_tool
					,$hide_id_from_url
					,$doc_area_text
					,$is_kit
					,$is_free_shipping
					,$show_doc_tab
					,$show_meas_form_tab
					,$show_atc_btn_or_cfp
					,$show_start_design_btn
					,$show_design_request_btn
					,$show_videos
					,$show_associated_kits
					,$difficulty_prof					
					,$difficulty
					,$profile_item_id
					,$item_id)){
		
			$msg .= "There was a problem this action";
	}else{
		$stmt->execute();
		$stmt->close();
	}
	
	/*
	echo "difficulty ".$difficulty;
	echo "<br />";
	echo "difficulty_prof: ".$difficulty_prof;
	echo "<br />";

	exit;
	*/
	
	
	$feats=(isset($_POST['feats']))?$_POST['feats'] : array();
	$sql = "DELETE FROM feat_to_item 
			WHERE item_id = '".$item_id."'";
	$res = $dbCustom->getResult($db,$sql);							
	foreach($feats as $val){
		$sql = "INSERT INTO feat_to_item
				(item_id,feat_id)
				VALUES
				('".$item_id."','".$val."')"; 
		$res = $dbCustom->getResult($db,$sql);							
	}


	$s_f_acces=(isset($_POST['s_f_acces']))?$_POST['s_f_acces'] : array();
	$sql = "DELETE FROM s_f_acces_to_item 
			WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);	
	foreach($s_f_acces as $v){
		$sql = "INSERT INTO s_f_acces_to_item 
				(s_f_acces_id, item_id) 
				VALUES( '".$v."', '".$item_id."')";
		$res = $dbCustom->getResult($db,$sql);			
	}

	$chosen_tools=(isset($_POST['chosen_tools']))?$_POST['chosen_tools'] : array();
	$sql = "DELETE FROM item_to_svg 
			WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);	
	foreach($chosen_tools as $val){
		$sql = "INSERT INTO item_to_svg
				(item_id,svg_id)
				VALUES
				('".$item_id."','".$val."')"; 
		$res = $dbCustom->getResult($db,$sql);			
	}	

	$chosen_docs=(isset($_POST['chosen_docs']))?$_POST['chosen_docs'] : array();
	$sql = "DELETE FROM item_to_document 
			WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);	
	foreach($chosen_docs as $val){
		$sql = "INSERT INTO item_to_document
				(item_id,document_id)
				VALUES
				('".$item_id."','".$val."')"; 
		$res = $dbCustom->getResult($db,$sql);							
	}

	$chosen_videos=(isset($_POST['chosen_videos']))?$_POST['chosen_videos'] : array();
	$sql = "DELETE FROM item_to_video 
			WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);	
	foreach($chosen_videos as $val){
		//echo $val;
		//echo "<br />";
		$sql = "INSERT INTO item_to_video
				(item_id,video_id)
				VALUES
				('".$item_id."','".$val."')"; 
		$res = $dbCustom->getResult($db,$sql);							
	}


	$brand_name = '';
	$sql = "SELECT name 
				FROM brand 
				WHERE brand_id = '".$brand_id."'";
	$res = $dbCustom->getResult($db,$sql);
	if($res->num_rows > 0){
		$b_obj = $res->fetch_object();
		$brand_name = $b_obj->name; 	
	}

	$temp_gallery=(isset($_POST['temp_gallery']))?$_POST['temp_gallery'] : array();
	$sql = "DELETE FROM item_gallery 
			WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);
	foreach($temp_gallery as $val){
		$sql = "INSERT INTO item_gallery
				(item_id
				,img_id)
				VALUES
				('".$item_id."','".$val."')"; 
		$res = $dbCustom->getResult($db,$sql);							
	}
	
	
	$sql = "DELETE FROM key_words 
			WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);	
	$keywords = explode(",", $keywords);
	foreach($keywords as $word){
		$sql = "INSERT INTO key_words 
		(item_id, word)
		VALUES
		('".$item_id."','".trim($word)."')";      
		$res = $dbCustom->getResult($db,$sql);		
	}

	$sql = "DELETE FROM item_to_category 
			WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);
	$cat_ids = (isset($_POST['chosen_categories']))? $_POST['chosen_categories'] : array(); 
	foreach($cat_ids as $cat_v){
		$sql = "INSERT INTO item_to_category 
				(cat_id, item_id) 
				VALUES( '".$cat_v."', '".$item_id."')";
		$res = $dbCustom->getResult($db,$sql);			
	}
		
	$canonical_part = '';
	
	$sql = "DELETE FROM item_to_opt 
			WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);	
	$sql = "SELECT attribute_id, attribute_name
			FROM  attribute 
			WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
			ORDER BY attribute_id";
	$result = $dbCustom->getResult($db,$sql);
	while($attr_row = $result->fetch_object()) {
		if(isset($_POST["attr_".$attr_row->attribute_id])){
			$sql = "INSERT INTO item_to_opt 
						(opt_id ,item_id) 
						VALUES 
						('".$_POST["attr_".$attr_row->attribute_id]."','".$item_id."')";
			
			$res = $dbCustom->getResult($db,$sql);			
		}
	}

	//if($price_wholesale > 0 || $price_flat > 0){
		if($shipping->getShipType() == 'carrier' && $weight == 0){	
			$msg .= "<br />WARNING:  This product has no value for weight.<br />Weight is needed for shipping charges.";
			$msg .= "<br /><br /><a href='edit-item.php?item_id=".$item_id."' >Click Here To Edit</a><br /><br />" ;

		}
	//}

$msg .= "Your change is now live.";
$progress->completeStep("item" ,$_SESSION['profile_account_id']);
		
?>	
