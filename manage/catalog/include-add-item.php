<?php

	$difficulty_prof = (isset($_POST['difficulty_prof']))? $_POST['difficulty_prof'] : 0;
	$ts = time();	
	$img_id = (isset($_POST['img_id']))? $_POST['img_id'] : 0;
	$style_id = (isset($_POST['style_id']))? $_POST['style_id'] : 0;
	$lead_time_id = (isset($_POST['lead_time_id']))? $_POST['lead_time_id'] : 0;
	$skill_level_id = (isset($_POST['skill_level_id']))? $_POST['skill_level_id'] : 0;
	$type_id = (isset($_POST['type_id']))? $_POST['type_id'] : 0;
	$main_attr_id = (isset($_POST['main_attr_id']))? $_POST['main_attr_id'] : 0;
	$is_taxable = (isset($_POST['is_taxable']))? $_POST['is_taxable'] : 0;
	$call_for_pricing = (isset($_POST['call_for_pricing']))? $_POST['call_for_pricing'] : 0;
	$is_new_product = (isset($_POST['is_new_product']))? $_POST['is_new_product'] : 0;
	$is_promo_product = (isset($_POST['is_promo_product']))? $_POST['is_promo_product'] : 0;
	$allow_back_order = (isset($_POST['allow_back_order']))? $_POST['allow_back_order'] : 0;
	$is_drop_shipped = (isset($_POST['is_drop_shipped']))? $_POST['is_drop_shipped'] : 0;
	$show_in_tool = (isset($_POST['show_in_tool']))? $_POST['show_in_tool'] : 0;
	$hours = (isset($_POST['hours']))? $_POST['hours'] : 2;
	$hours_prof = (isset($_POST['hours_prof']))? $_POST['hours_prof'] : 2;	
	$show_in_cart = (isset($_POST['show_in_cart']))? $_POST['show_in_cart'] : 0;
	$show_in_showroom = (isset($_POST['show_in_showroom']))? $_POST['show_in_showroom'] : 0;
	$brand_id = (isset($_POST['brand_id']))? $_POST['brand_id'] : 0;
	$return_to_id = (isset($_POST['return_to_id']))? $_POST['return_to_id'] : 0;
	$ship_port_id = (isset($_POST['ship_port_id']))? $_POST['ship_port_id'] : 0;
	$is_kit = (isset($_POST['is_kit']))? $_POST['is_kit'] : 0;
	$is_free_shipping = (isset($_POST['is_free_shipping']))? $_POST['is_free_shipping'] : 0;
	$show_doc_tab = (isset($_POST['show_doc_tab']))? $_POST['show_doc_tab'] : 0;
	$show_meas_form_tab = (isset($_POST['show_meas_form_tab']))? $_POST['show_meas_form_tab'] : 0;
	$show_atc_btn_or_cfp = (isset($_POST['show_atc_btn_or_cfp']))? $_POST['show_atc_btn_or_cfp'] : 0;
	$show_start_design_btn = (isset($_POST['show_start_design_btn']))? $_POST['show_start_design_btn'] : 0;
	$show_design_request_btn = (isset($_POST['show_design_request_btn']))? $_POST['show_design_request_btn'] : 0;
	$show_videos = (isset($_POST['show_videos']))? $_POST['show_videos'] : 0;
	$show_associated_kits = (isset($_POST['show_associated_kits']))? $_POST['show_associated_kits'] : 0;
	$show_specs_tab = (isset($_POST['show_specs_tab']))? $_POST['show_specs_tab'] : 0;
	$hide_id_from_url = 1;
	$name = (isset($_POST['name']))? trim(addslashes($_POST['name'])) : '';
	$price_flat = (isset($_POST['price_flat']))? trim(addslashes($_POST['price_flat'])) : '';
	$price_wholesale = (isset($_POST['price_wholesale']))? trim(addslashes($_POST['price_wholesale'])) : '';
	$percent_markup = (isset($_POST['percent_markup']))? trim(addslashes($_POST['percent_markup'])) : '';
	$percent_off = (isset($_POST['percent_off']))? trim(addslashes($_POST['percent_off'])) : '';
	$amount_off = (isset($_POST['amount_off']))? trim(addslashes($_POST['amount_off'])) : '';
	$internal_prod_number = (isset($_POST['internal_prod_number']))? trim(addslashes($_POST['internal_prod_number'])) : 0;
	$sku = (isset($_POST['sku']))? trim(addslashes($_POST['sku'])) : '';
	$upc = (isset($_POST['upc']))? trim(addslashes($_POST['upc'])) : '';
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
	$weight = (isset($_POST['weight']))? trim(addslashes($_POST['weight'])) : '';
	$shipping_flat_charge = (isset($_POST['shipping_flat_charge']))? trim(addslashes($_POST['shipping_flat_charge'])) : '';
	$img_alt_text = (isset($_POST['img_alt_text']))? trim(addslashes($_POST['img_alt_text'])) : '';
	$keywords = (isset($_POST['keywords']))? trim(addslashes($_POST['keywords'])) : '';
	$doc_area_text = (isset($_POST['doc_area_text']))? trim(addslashes($_POST['doc_area_text'])) : '';
	$date_active = (isset($_POST['date_active']))? trim($_POST['date_active']) :0;
	$date_inactive = (isset($_POST['date_inactive']))? trim($_POST['date_inactive']):0;
	$difficulty = (isset($_POST['difficulty']))? $_POST['difficulty'] : 0;
	$floor_size = (isset($_POST['floor_size']))? trim(addslashes($_POST['floor_size'])) : '';
	if(strlen($date_active) < 10){		
		$date_active = $ts;		
	}else{
		$date_active = strtotime($date_active); 
	}
	if(strlen($date_inactive) < 10){	
		$date_inactive = '2142148196';	
	}else{
		$date_inactive = strtotime($date_active);
	}
	
	$profile_item_id = (isset($_POST['profile_item_id']))? trim($_POST['profile_item_id']) : 0;
	if(!is_numeric($profile_item_id))$profile_item_id=0;

	$db = $dbCustom->getDbConnect(CART_N_DATABASE);

	$sql = "SELECT profile_item_id 
			FROM item 
			WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
			AND profile_item_id = '".$profile_item_id."'";
	$result = $dbCustom->getResult($db,$sql);		
	if($result->num_rows > 0){
		$update_profile_item_id = 1;
	}else{
		$update_profile_item_id = 0;
	}

	if($profile_item_id == 0 || $update_profile_item_id == 1){
		$sql = "SELECT max(profile_item_id) AS profile_item_id 
				FROM item 
				WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
		$result = $dbCustom->getResult($db,$sql);		
		if($result->num_rows > 0){
			$object = $result->fetch_object();
			$profile_item_id = $object->profile_item_id + 1; 	
		}
	}

	$msg = '';

	if(1){

		$stmt = $db->prepare("INSERT INTO item
					(main_attr_id
					,name
					,floor_size
					,price_flat
					,price_wholesale
					,percent_markup
					,percent_off
					,amount_off
					,call_for_pricing
					,is_new_product
					,is_promo_product 
					,allow_back_order 
					,brand_id 
					,is_taxable
					,internal_prod_number
					,sku
					,upc
					,short_description
					,description
					,description_bullets
					,spec_title
					,spec_sub_title
					,spec_descr
					,spec_pink_area
					,back_order_message
					,in_stock_message
					,additional_information
					,return_to_id
					,is_drop_shipped
					,ship_port_id
					,img_id
					,date_active
					,date_inactive 
					,hours
					,hours_prof
					,show_in_cart 
					,show_in_showroom
					,shipping_flat_charge
					,style_id
					,lead_time_id
					,skill_level_id
					,type_id
					,weight
					,img_alt_text
					,key_words
					,show_in_tool
					,hide_id_from_url
					,doc_area_text
					,is_kit
					,is_free_shipping
					,difficulty_prof		
					,difficulty
					,profile_item_id					
					,parent_item_id
					,profile_account_id)
			VALUES
			(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)"); 
		
	//echo 'Error-1 UPDATE   '.$db->error;
								
if(!$stmt->bind_param("issddiidiiiiiisssssssssssssiiiiiiiiiidiiiidssiisiiddiii",
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
					,$skill_level_id
					,$type_id
					,$weight
					,$img_alt_text
					,$key_words
					,$show_in_tool
					,$hide_id_from_url
					,$doc_area_text
					,$is_kit
					,$is_free_shipping
					,$difficulty_prof					
					,$difficulty
					,$profile_item_id
					,$parent_item_id
					,$_SESSION['profile_account_id'])){
			echo 'Error-2 '.$db->error;
		}else{
			$stmt->execute();
			$stmt->close();
			$item_id = $db->insert_id;	
		}

	$feats=(isset($_POST['feats']))?$_POST['feats'] : array();
	foreach($feats as $val){
		$sql = "INSERT INTO feat_to_item
				(item_id,feat_id)
				VALUES
				('".$item_id."','".$val."')"; 
		$res = $dbCustom->getResult($db,$sql);							
	}
	
	$s_f_acces=(isset($_POST['s_f_acces']))?$_POST['s_f_acces'] : array();
	foreach($s_f_acces as $v){
		$sql = "INSERT INTO s_f_acces_to_item 
				(s_f_acces_id, item_id) 
				VALUES( '".$v."', '".$item_id."')";
		$res = $dbCustom->getResult($db,$sql);			
	}
		
	$specs=(isset($_POST['specs']))?$_POST['specs'] : array();
	foreach($specs as $val){
		$sql = "INSERT INTO spec_to_item
				(item_id,spec_id)
				VALUES
				('".$item_id."','".$val."')"; 
		$res = $dbCustom->getResult($db,$sql);			
	}	

	$chosen_tools=(isset($_POST['chosen_tools']))?$_POST['chosen_tools'] : array();
	foreach($chosen_tools as $val){
		$sql = "INSERT INTO item_to_svg
				(item_id,svg_id)
				VALUES
				('".$item_id."','".$val."')"; 
		$res = $dbCustom->getResult($db,$sql);			
	}	


	$chosen_docs=(isset($_POST['chosen_docs']))? $_POST['chosen_docs'] : array();
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
		foreach($temp_gallery as $val){
			$sql = "INSERT INTO item_gallery
					(item_id
					,img_id)
					VALUES
					('".$item_id."','".$val."')"; 
			$res = $dbCustom->getResult($db,$sql);							
		}
		
		// NOTE: a key_words field varchar 250 is now in the item table. 
		//This is redundant data and the key_words table should eventually be removed 
		//but I'm leaving it for now in case we make changes that will need it. 	
		$keywords = explode(",", $keywords);
		foreach($keywords as $word){
			$sql = "INSERT INTO key_words 
			(item_id, word)
			VALUES
			('".$item_id."','".trim($word)."')";      
			$result = $dbCustom->getResult($db,$sql);			
		}
	
		$cat_ids = (isset($_POST['chosen_categories']))? $_POST['chosen_categories'] : array(); 
		foreach($cat_ids as $cat_v){
			
			$sql = "INSERT INTO item_to_category 
					(cat_id, item_id) 
					VALUES( '".$cat_v."', '".$item_id."')";
			$result = $dbCustom->getResult($db,$sql);				
		}

		//$seo_url = getItemSeoUrl($dbCustom,$item_id);
		//$seo_list = getItemSeoList($item_id,$name);
		$seo_url = "";
		$seo_list = "";
		
		//$canonical_part = SITEROOT."/".$_SESSION['global_url_word'].$seo_url;
		$canonical_part = '';

		$sql = "UPDATE item
				SET seo_url = '".$seo_url."', seo_list = '".$seo_list."', canonical_part = '".$canonical_part."'
				WHERE item_id = '".$item_id."'";
		$result = $dbCustom->getResult($db,$sql);		
		
		if($cat_id > 0){
			$sql = "INSERT INTO item_to_category
			(item_id, cat_id)
			VALUES
			('".$item_id."', '".$cat_id."')";
			$result = $dbCustom->getResult($db,$sql);
		}

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
		if($shipping->getShipType() == 'carrier' && $weight == 0){	
			$msg .= "<br />WARNING:  This product has no value for weight.<br />Weight is needed for shipping charges.";			
			$msg .= "<br /><br /><a href='edit-item.php?item_id=".$item_id."' >Click Here To Edit</a><br /><br />" ;
		}
		$msg .= "Your change is now live.";
		$progress->completeStep("item" ,$_SESSION['profile_account_id']);
		
	}else{
		
		
	}
	
	
?>