<?php 


if(!isset($_SERVER['DOCUMENT_ROOT'])){
	if(strpos($_SERVER['REQUEST_URI'], 'solvitware/' )){    
		$_SERVER['DOCUMENT_ROOT'] = $_SERVER['DOCUMENT_ROOT'].'/solvitware'; 
	}elseif(strpos($_SERVER['REQUEST_URI'], 'designitpro/' )){
		$_SERVER['DOCUMENT_ROOT'] = $_SERVER['DOCUMENT_ROOT'].'/designitpro';
	}else{
		$_SERVER['DOCUMENT_ROOT'] = $_SERVER['DOCUMENT_ROOT']; 	
	}
}


unset($_SESSION['global_url_word']);

require_once($real_root."/includes/config.php");
//require_once($real_root."/includes/db_connect.php"); 
require_once($real_root."/includes/accessory_cart_functions.php");
require_once($real_root."/includes/showroom_functions.php");
require_once($real_root."/includes/class.module.php");
require_once($real_root."/manage/admin-includes/class.pages.php"); 
require_once($real_root."/includes/class.store_data.php");

require_once($real_root."/includes/class.nav.php");

$nav = new Nav;

$store_data = new StoreData;

$module = new Module;

$page_title = "Sitemap Generator";
$page_group = "seo";

	

$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';
$action = (isset($_GET["action"])) ? $_GET["action"] : '';

set_time_limit(0);



/***************************

Remove 0 value price ranges from urls

***************************/

function loadBrandsWithPaging($brand_id, $name){

	$store_data = new StoreData;
	$price_range_array = $store_data->getNavPriceRanges();
	
	$t = array();

	$items_array = array_merge($t,$store_data->getItemDataFromBrand($brand_id, 0, 0));	
	foreach($items_array as $item){
		$t[] = '/'.$_SESSION['global_url_word'].'/'.$item['seo_url'].'/product.html?itemId='.$item['item_id'];	
	}

	/*
	foreach($price_range_array as $val){
		if($store_data->getItemCount($val['bottom'],$val['top'],0,$brand_id,'cart') > 0){		
			$t[] = '/'.$_SESSION['global_url_word'].getUrlText($name).'/showroom.html?priceBottom='.$val['bottom'].'&amp;priceTop='.$val['top'].'&amp;prodCatId=0&amp;brandId='.$brand_id;
		}
	}
	*/

	$num_items = $store_data->getItemCount(0,0,$brand_id, 0, 'cart');
		
	if($num_items > 0){
		$num_pages = getNumPages($num_items,6);							
		for($i = 0; $i <= $num_pages; $i++){		
			$t[] = '/'.$_SESSION['global_url_word'].getUrlText($name).'/showroom.html?prodCatId=0&amp;brandId='.$brand_id.'&amp;pageRows=6&amp;pagenum='.$i;
		}
	}

	if($num_items > 6){
		$num_pages = getNumPages($num_items,24);							
		for($i = 0; $i <= $num_pages; $i++){		
			$t[] = '/'.$_SESSION['global_url_word'].getUrlText($name).'/showroom.html?prodCatId=0&amp;brandId='.$brand_id.'&amp;pageRows=12&amp;pagenum='.$i;
		}
	}

	if($num_items > 12){
		$num_pages = getNumPages($num_items,24);							
		for($i = 0; $i <= $num_pages; $i++){		
			$t[] = '/'.$_SESSION['global_url_word'].getUrlText($name).'/showroom.html?prodCatId=0&amp;brandId='.$brand_id.'&amp;pageRows=24&amp;pagenum='.$i;
		}
	}
		
	if($num_items > 24){
		$num_pages = getNumPages($num_items,30);							
		for($i = 0; $i <= $num_pages; $i++){		
			$t[] = '/'.$_SESSION['global_url_word'].getUrlText($name).'/showroom.html?prodCatId=0&amp;brandId='.$brand_id.'&amp;pageRows=30&amp;pagenum='.$i;
		}
	}

	// price range without paging
	/*
	foreach($price_range_array as $val){				
		$num_items = $store_data->getItemCount($val['bottom'],$val['top'],0, $brand_id, 'cart');
		if($num_items > 0){
			$t[] = '/'.$_SESSION['global_url_word'].getUrlText($name).'/showroom.html?prodCatId=0&amp;brandId='.$brand_id.'&amp;priceBottom='.$val['bottom'].'&amp;priceTop='.$val['top'];
		}
	}



	foreach($price_range_array as $val){
		$num_items = $store_data->getItemCount($val['bottom'],$val['top'],0, $brand_id, 'cart');
		if($num_items > 0){
			$num_pages = getNumPages($num_items,6);				
			for($i = 0; $i <= $num_pages; $i++){		
				$t[] = '/'.$_SESSION['global_url_word'].getUrlText($name).'/showroom.html?prodCatId=0&amp;brandId='.$brand_id.'&amp;priceBottom='.$val['bottom'].'&amp;priceTop='.$val['top'].'&amp;pageRows=6&amp;pagenum='.$i;
			}
		}
	}
		
	foreach($price_range_array as $val){
		$num_items = $store_data->getItemCount($val['bottom'],$val['top'],0, $brand_id, 'cart');
		if($num_items > 6){
			$num_pages = getNumPages($num_items,12);				
			for($i = 0; $i <= $num_pages; $i++){		
				$t[] = '/'.$_SESSION['global_url_word'].getUrlText($name).'/showroom.html?prodCatId=0&amp;brandId='.$brand_id.'&amp;priceBottom='.$val['bottom'].'&amp;priceTop='.$val['top'].'&amp;pageRows=12&amp;pagenum='.$i;
			}
		}
	}
		
	foreach($price_range_array as $val){
		$num_items = $store_data->getItemCount($val['bottom'],$val['top'],0, $brand_id, 'cart');
		if($num_items > 12){
			$num_pages = getNumPages($num_items,24);				
			for($i = 0; $i <= $num_pages; $i++){		
				$t[] = '/'.$_SESSION['global_url_word'].getUrlText($row->name).'/showroom.html?prodCatId=0&amp;brandId='.$brand_id.'&amp;priceBottom='.$val['bottom'].'&amp;priceTop='.$val['top'].'&amp;pageRows=24&amp;pagenum='.$i;
			}
		}
	}

	foreach($price_range_array as $val){
		$num_items = $store_data->getItemCount($val['bottom'],$val['top'],0, $brand_id, 'cart');
		if($num_items > 24){
			$num_pages = getNumPages($num_items,30);					
			for($i = 0; $i <= $num_pages; $i++){		
				$t[] = '/'.$_SESSION['global_url_word'].getUrlText($row->name).'/showroom.html?prodCatId=0&amp;brandId='.$brand_id.'&amp;priceBottom='.$val['bottom'].'&amp;priceTop='.$val['top'].'&amp;pageRows=30&amp;pagenum='.$i;
			}
		}
	}
	*/
	
	return $t;
	
}


function loadCatsWithPaging($the_cat_id, $show_in = 'cart'){

	$store_data = new StoreData;

	//getProfileCatFromCat($cat_id)

	$price_range_array = $store_data->getNavPriceRanges();
	$t = array();

	$desc_cat_ids = $store_data->getDescendentCats($the_cat_id, 0, 0, $show_in);
	
	$desc_cat_ids[] = $the_cat_id;
	$bc_profile_cat_id = 0;
	foreach($desc_cat_ids as $cat_id){

			
		// get seo_list
		$sql = "SELECT seo_list, seo_url, profile_cat_id
				FROM category
				WHERE cat_id = '".$cat_id."'";
$result = $dbCustom->getResult($db,$sql);		
		if($result->num_rows > 0){
			$object = $result->fetch_object();
			$seo_list = $object->seo_list;
			$seo_url = $object->seo_url;
			$profile_cat_id = $object->profile_cat_id;
		}else{
			$seo_list = '';
			$seo_url = '';
			$profile_cat_id = 0;
		}
	
		//echo $profile_cat_id;
		//echo "<br />";
	
		$bc_data_out = explode('|',$seo_list);
		foreach($bc_data_out as $bc_out_v){
			$bc_data_in = explode(',',$bc_out_v);
			$bc_cat_id = 0;
			$bc_seo_url = '';
			if(isset($bc_data_in[0])){
				
				//echo $bc_data_in[0];
				//echo "<br />";
				
				if(is_numeric($bc_data_in[0])){
					$bc_profile_cat_id = $bc_data_in[0];
				}
			}
			if(isset($bc_data_in[3])){
				$bc_seo_url = $bc_data_in[3];
			}
			if($bc_seo_url != '') $bc_seo_url.='/';
			if($show_in == 'cart'){	
				if($bc_profile_cat_id > 0){
					$t[] = "/".$_SESSION['global_url_word'].$bc_seo_url.'category.html?prodCatId='.$bc_profile_cat_id;
				}	
			}else{
				if($bc_profile_cat_id > 0){
					$t[] = "/".$_SESSION['global_url_word'].$bc_seo_url.'showroom.html?prodCatId='.$bc_profile_cat_id;
				}	
				
			}
		}
			
		
		//echo "cat_id:".$cat_id."<br />";
		$t[] = '/'.$_SESSION['global_url_word'].$seo_url.'/showroom.html?prodCatId='.$profile_cat_id;
		
		$t = array_merge($t,loadItemsPerCat($the_cat_id));	
	
		$num_items = $store_data->getItemCount(0,0,$cat_id, 0, 'cart');
	
	
		if($num_items > 0){
			$num_pages = getNumPages($num_items,6);			
			for($i = 0; $i <= $num_pages; $i++){
				$t[] = '/'.$_SESSION['global_url_word'].$seo_url.'/showroom.html?prodCatId='.$profile_cat_id.'&amp;brandId=0&amp;pageRows=6&amp;pagenum='.$i;
			}
		}
					
		if($num_items > 6){
			$num_pages = getNumPages($num_items,12);									
			for($i = 0; $i <= $num_pages; $i++){		
				$t[] = '/'.$_SESSION['global_url_word'].$seo_url.'/showroom.html?prodCatId='.$profile_cat_id.'&amp;brandId=0&amp;pageRows=12&amp;pagenum='.$i;
			}
		}
		
		if($num_items > 12){
			$num_pages = getNumPages($num_items,24);									
			for($i = 0; $i <= $num_pages; $i++){		
				$t[] = '/'.$_SESSION['global_url_word'].$seo_url.'/showroom.html?prodCatId='.$profile_cat_id.'&amp;brandId=0&amp;pageRows=24&amp;pagenum='.$i;
			}			
		}
		
		if($num_items > 24){
			$num_pages = getNumPages($num_items,30);
			for($i = 0; $i <= $num_pages; $i++){		
				$t[] = '/'.$_SESSION['global_url_word'].$seo_url.'/showroom.html?prodCatId='.$profile_cat_id.'&amp;brandId=0&amp;pageRows=30&amp;pagenum='.$i;
			}
		}
	
		// price range without paging
		/*
		foreach($price_range_array as $val){				
					
			$num_items = $store_data->getItemCount($val['bottom'],$val['top'],$cat_id, 0, 'cart');
			if($num_items > 0){				
				$t[] = '/'.$_SESSION['global_url_word'].$seo_url.'/showroom.html?prodCatId='.$profile_cat_id.'&amp;brandId=0&amp;priceBottom='.$val['bottom'].'&amp;priceTop='.$val['top'];			
			}
		}
			
		foreach($price_range_array as $val){				
			$num_items = $store_data->getItemCount($val['bottom'],$val['top'],$cat_id, 0, 'cart');
			if($num_items > 0){
				$num_pages = getNumPages($num_items,6);				
				for($i = 0; $i <= $num_pages; $i++){		
					$t[] = '/'.$_SESSION['global_url_word'].$seo_url.'/showroom.html?prodCatId='.$profile_cat_id.'&amp;brandId=0&amp;priceBottom='.$val['bottom'].'&amp;priceTop='.$val['top'].'&amp;pageRows=6&amp;pagenum='.$i;
				}
			}
		}
		
		
		foreach($price_range_array as $val){
			$num_items = $store_data->getItemCount($val['bottom'],$val['top'],$cat_id, 0, 'cart');
			if($num_items > 6){
				$num_pages = getNumPages($num_items,12);				
				for($i = 0; $i <= $num_pages; $i++){		
					$t[] = '/'.$_SESSION['global_url_word'].$seo_url.'/showroom.html?prodCatId='.$profile_cat_id.'&amp;brandId=0&amp;priceBottom='.$val['bottom'].'&amp;priceTop='.$val['top'].'&amp;pageRows=12&amp;pagenum='.$i;
				}
			}				
		}
		
		
		
		foreach($price_range_array as $val){
			$num_items = $store_data->getItemCount($val['bottom'],$val['top'],$cat_id, 0, 'cart');
			if($num_items > 12){
				$num_pages = getNumPages($num_items,24);				
				for($i = 0; $i <= $num_pages; $i++){		
					$t[] = '/'.$_SESSION['global_url_word'].$seo_url.'/showroom.html?prodCatId='.$profile_cat_id.'&amp;brandId=0&amp;priceBottom='.$val['bottom'].'&amp;priceTop='.$val['top'].'&amp;pageRows=24&amp;pagenum='.$i;
				}
			}
		}
					
		foreach($price_range_array as $val){
			$num_items = $store_data->getItemCount($val['bottom'],$val['top'],$cat_id, 0, 'cart');
			if($num_items > 24){
				$num_pages = getNumPages($num_items,30);				
				for($i = 0; $i <= $num_pages; $i++){		
					$t[] = '/'.$_SESSION['global_url_word'].$seo_url.'/showroom.html?prodCatId='.$profile_cat_id.'&amp;brandId=0&amp;priceBottom='.$val['bottom'].'&amp;priceTop='.$val['top'].'&amp;pageRows=30&amp;pagenum='.$i;
				}
			}
		}		
	*/
		
	}

	return $t;



	
}


function loadItemsPerCat($cat_id, $show_in = 'cart', $price_bottom = 0, $price_top = 0){

	$store_data = new StoreData;
	$t = array();
	
	$long_array = $store_data->getItemDataFromCat($cat_id, $price_bottom, $price_top, 'cart');
	foreach($long_array as $val) {
		$t[] = "/".$_SESSION["global_url_word"].$val['seo_url']."/product.html?productId=".$val['profile_item_id'];		
	}

	$long_array = $store_data->getItemDataFromCat($cat_id, $price_bottom, $price_top, 'showroom');
	foreach($long_array as $val) {
		$t[] = "/".$_SESSION["global_url_word"].$val['seo_url']."/showroom-product.html?productId=".$val['profile_item_id'];		
	}

	return $t; 
}


function loadBreadCrumbUrls($seo_list, $show_in = 'cart'){
	$t = array();
	$bc_data_out = explode('|',$seo_list);
	foreach($bc_data_out as $bc_out_v){
	
	
		$bc_data_in = explode(',',$bc_out_v);
		$bc_profile_cat_id = 0;
		$bc_seo_url = '';
		if(isset($bc_data_in[0])){
			
				//echo $bc_data_in[0];
				//echo "<br />";

			
			if(is_numeric($bc_data_in[0])){
				$bc_profile_cat_id = $bc_data_in[0];
			}
		}
		if(isset($bc_data_in[1])){
			if(is_numeric($bc_data_in[1])){
				$bc_cat_id = $bc_data_in[1];
			}
		}
		
		
		
		if(isset($bc_data_in[3])){
			$bc_seo_url = $bc_data_in[3];
		}
		if($bc_seo_url != '') $bc_seo_url.='/';
		if($bc_profile_cat_id > 0){
			
			
			if($show_in == 'cart'){
				$t[] = "/".$_SESSION['global_url_word'].$bc_seo_url.'category.html?prodCatId='.$bc_profile_cat_id;
				
				$t = array_merge($t,loadCatsWithPaging($bc_profile_cat_id));

			}else{
				$t[] = "/".$_SESSION['global_url_word'].$bc_seo_url.'showroom.html?prodCatId='.$bc_profile_cat_id;
				$t = array_merge($t,loadCatsWithPaging($bc_profile_cat_id));
			}
		}
	}
	return $t;
}


function getNumPages($total_count,$page_rows){	
	$num_pages = ceil($total_count/$page_rows); 
	return $num_pages;	
}



	require_once($real_root."/manage/admin-includes/class.xml.sitemap.generator-modified.php");

	$url_array = array();

	//if($module->hasDesignToolModule($_SESSION['profile_account_id'])){
		$url_array[] = '/app/'; 
	//}

	if($module->hasShoppingCartModule($_SESSION['profile_account_id'])){
		$url_array[] = '/'.$_SESSION['global_url_word'].'shopping-cart.html';
		$url_array[] = '/'.$_SESSION['global_url_word'].'checkout.html';
		$url_array[] = '/'.$_SESSION['global_url_word'].'category.html';
		$url_array[] = '/'.$_SESSION['global_url_word'].'showroom.html';
	}


	$url_array[] = '/'.$_SESSION['global_url_word'].'category.html';

	/* These don't happen on the site
	foreach($price_range_array as $val){
		if($store_data->getItemCount($val['bottom'],$val['top'],0,0,'cart') > 0){
			$url_array[] = '/'.$_SESSION['global_url_word'].'category.html?priceBottom='.$val['bottom'].'&amp;priceTop='.$val['top'].'&amp;prodCatId=0&amp;brandId=0';
		}
	}
	*/

	// old version only 
	$url_array[] = '/'.$_SESSION['global_url_word'].'quick-installation.html';
	$url_array[] = '/'.$_SESSION['global_url_word'].'email-us.html';
	$url_array[] = '/'.$_SESSION['global_url_word'].'discounts-how.html';
	$url_array[] = '/tutorial/paint.html';
	$url_array[] = '/custom-closet-signup.html';
	$url_array[] ='/'.$_SESSION['global_url_word'].getURLFileName('closet-us').'.html';
	$url_array[] ='/'.$_SESSION['global_url_word'].getURLFileName('faq').'.html';




	$db = $dbCustom->getDbConnect(CART_N_DATABASE);

	// ************ From nav bar *************
	$navbar_labels = $nav->getNavbarLabels();	
	foreach($navbar_labels as $navbar_label_v){
		$url_array[] = "/".$_SESSION['global_url_word'].$navbar_label_v['url'];
		if($navbar_label_v["submenu_content_type"] == 1){			
		
			$sql = "SELECT cat_id, seo_list 
					FROM category
					WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
					AND show_in_cart = '1'
					AND active = '1'
					ORDER BY display_order";
	$result = $dbCustom->getResult($db,$sql);					
			while($row = $result->fetch_object()) {
				$sql = "SELECT child_cat_to_parent_cat_id 
					FROM child_cat_to_parent_cat
					WHERE child_cat_to_parent_cat.child_cat_id = '".$row->cat_id."'";
				$tgc_res = mysql_query($sql);
				if(!$tgc_res)die(mysql_error());
		
				if(mysql_num_rows($tgc_res) == 0){
					if($store_data->getItemCount(0,0,$row->cat_id,0,'cart') > 0){
					
						//$url_array[] = '/'.$_SESSION['global_url_word'].$row->seo_url."/showroom.html?prodCatId=".$row->cat_id;
						$url_array = array_merge($url_array,loadCatsWithPaging($row->cat_id));
						$url_array = array_merge($url_array,loadBreadCrumbUrls($row->seo_list));				
						
					}
				}
			}
		
		}elseif($navbar_label_v["submenu_content_type"] == 2){
			$db = $dbCustom->getDbConnect(CART_N_DATABASE);
				$sql = "SELECT name ,brand_id 
				FROM brand 
				WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
				ORDER BY name LIMIT 10";
	$result = $dbCustom->getResult($db,$sql);			
			while($row = $result->fetch_object()) {
				$url_array[] = "/".$_SESSION['global_url_word'].getUrlText($row->name)."/showroom.html?brandId=".$row->brand_id;
				$url_array = array_merge($url_array,loadBrandsWithPaging($row->brand_id, $row->name));
			}
		}else{
   			$navbar_submenu_labels = $nav->getNavbarSubmenuLabels($navbar_label_v["id"]);
			foreach($navbar_submenu_labels as $navbar_submenu_label_v){
				$url_array[] = "/".$navbar_submenu_label_v['url'];
			
				if(strpos($navbar_submenu_label_v['url'], '?prodCatId=') > 0){
				
					if(strpos($navbar_submenu_label_v['url'], 'category') > 0){
						$show_in = 'cart';	
					}else{
						$show_in = 'showroom';
					}
					$c = explode('?prodCatId=',$navbar_submenu_label_v['url']);
				
					if(isset($c[1])){
						if(is_numeric($c[1])){
							
							$cat_id = $store_data->getCatFromProfileCat($c[1]);
						
							$db = $dbCustom->getDbConnect(CART_N_DATABASE);
								
							$sql = "SELECT seo_list, seo_url
								FROM category
								WHERE cat_id = '".$c[1]."'";
							$c_res = mysql_query($sql);
							if(mysql_num_rows($c_res) > 0){
								$c_obj = mysql_fetch_object($c_res);
								$url_array = array_merge($url_array,loadCatsWithPaging($cat_id, $c_obj->seo_url));
								$url_array = array_merge($url_array,loadBreadCrumbUrls($c_obj->seo_list, $show_in));
							}
						}
					}
				}
			}
		}
	}




	// ************ From header *************

	$header_links = $nav->getHeaderSupportLabels($dbCustom);
	foreach($header_links as $v){
		$url_array[] = "/".$v['url'];
	}
	
	// ************ From footer *************
	$footer_nav_labels = $nav->getFooterNavLabels();
	$col = 1;
    foreach($footer_nav_labels as $footer_nav_label_v){

		if($footer_nav_label_v["submenu_content_type"] == 1){			
			$db = $dbCustom->getDbConnect(CART_N_DATABASE);

			$sql = "SELECT cat_id, seo_list 
					FROM category
					WHERE show_in_cart = '1'
					AND profile_account_id = '".$_SESSION['profile_account_id']."'
					AND active = '1'
					ORDER BY display_order";
	$result = $dbCustom->getResult($db,$sql);					
			$i = 0;
			if($col == 1){
				$limit = 2;	
			}else{
				$limit = 7;
			}

			while($row = $result->fetch_object()) {
				$db = $dbCustom->getDbConnect(CART_N_DATABASE);

				$sql = "SELECT child_cat_to_parent_cat_id 
						FROM child_cat_to_parent_cat
						WHERE child_cat_to_parent_cat.child_cat_id = '".$row->cat_id."'
						";
				$tgc_res = mysql_query($sql);
				if(!$tgc_res)die(mysql_error());
				if($i < $limit){
					if(!mysql_num_rows($tgc_res) > 0){
						
						if($store_data->getItemCount(0,0,$row->cat_id,0,'cart') > 0){					
							
							//$url_array[] = "/".$_SESSION['global_url_word'].$row->seo_url."/showroom.html?prodCatId=".$row->cat_id;
							$url_array = array_merge($url_array,loadCatsWithPaging($row->cat_id));
							$url_array = array_merge($url_array,loadBreadCrumbUrls($row->seo_list));
						$i++;
						}
					}
				}
			}
			
			
			
		}elseif($footer_nav_label_v["submenu_content_type"] == 2){
			$db = $dbCustom->getDbConnect(CART_N_DATABASE);
		
			$sql = "SELECT name ,brand_id 
					FROM brand 
					WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
					LIMIT 10";
	$result = $dbCustom->getResult($db,$sql);			
			if($col == 1){ 
				$limit = 2;
			}else{
				$limit = 9;
			}
			$i = 0;
			while($row = $result->fetch_object()) {
				if($i < $limit){
					$url_array[] = "/".$_SESSION['global_url_word']."category.html?brandId=".$row->brand_id;
					$url_array = array_merge($url_array,loadBrandsWithPaging($row->brand_id, $row->name));
				}
			}
		}else{
    		$footer_nav_submenu_labels = $nav->getFooterNavSubmenuLabels($dbCustom,$footer_nav_label_v["id"], $col);
			foreach($footer_nav_submenu_labels as $footer_nav_submenu_label_v){
				if((substr_count($footer_nav_submenu_label_v['url'], "account") < 1)){			
					$url_array[] = "/".$footer_nav_submenu_label_v['url'];  
				}
			}
		}
		$col++;
	}


	// ************ From top cats *************
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$sql = "SELECT cat_id, seo_list 
			FROM category
			WHERE show_in_cart = '1'
			AND profile_account_id = '".$_SESSION['profile_account_id']."'
			AND active = '1'";
$result = $dbCustom->getResult($db,$sql);			
	$i = 0;
	while($row = $result->fetch_object()) {
						
		$sql = "SELECT child_cat_to_parent_cat_id 
				FROM child_cat_to_parent_cat
				WHERE child_cat_to_parent_cat.child_cat_id = '".$row->cat_id."'";
		$tgc_res = mysql_query($sql);
		if(!$tgc_res)die(mysql_error());
				
		if(!mysql_num_rows($tgc_res) > 0){
			if($store_data->getItemCount(0,0,$row->cat_id,0,'cart') > 0){
				//$url_array[] = "/".$_SESSION['global_url_word'].$row->seo_url."/showroom.html?prodCatId=".$row->cat_id;
				$url_array = array_merge($url_array,loadCatsWithPaging($row->cat_id));
				$url_array = array_merge($url_array,loadBreadCrumbUrls($row->seo_list));
				$i++;
			}
		}		
	}


	// ************ From showroom page *************
		$sql = "SELECT category.cat_id
							,category.profile_cat_id
							,category.seo_url
							,category.seo_list
						FROM category, image
						WHERE category.img_id = image.img_id
						AND category.profile_account_id = '".$_SESSION['profile_account_id']."'
						AND category.show_in_showroom = '1'
						AND category.active = '1'";
				
$result = $dbCustom->getResult($db,$sql);		
		while($row = $result->fetch_object()) {
			if($store_data->getItemCount(0,0,$row->cat_id,0,'showroom') > 0){
				$url_array[] = "/".$_SESSION['global_url_word'].$row->seo_url."/showroom.html?prodCatId=".$row->profile_cat_id;
				$items_array = $store_data->getItemDataFromCat($cat_id, 0, 0, 'showroom');		
				$url_array = array_merge($url_array,loadBreadCrumbUrls($row->seo_list, 'showroom'));
							
				foreach($items_array as $val) {
					
					echo "seo_url".$val['seo_url']."    productId".$val['profile_item_id'];
					
					$url_array[] = "/".$_SESSION['global_url_word'].$val['seo_url']."/showroom-product.html?productId=".$val['profile_item_id'];
				}				
			}
		}

 


	// ************ From home page cats *************
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$sql = "SELECT category.cat_id
				,category.seo_url
				,category.seo_list
				,category.show_in_showroom
				,category.show_in_cart
				,category.img_alt_text 
				FROM category, image
				WHERE category.img_id = image.img_id
				AND category.show_on_home_page  = '1'					
				AND category.active  = '1'
				AND category.profile_account_id = '".$_SESSION['profile_account_id']."'";
	$cat_result = mysql_query ($sql);
	if(!$cat_result)die(mysql_error());
	$i = 1;
	while($cat_row = mysql_fetch_object($cat_result)) {
		
		if($store_data->getItemCount(0,0,$cat_row->cat_id,0,'') > 0){
			
			if($cat_row->show_in_cart == 1){
				//$url_array[] ="/".$_SESSION['global_url_word'].$cat_row->seo_url."/showroom.html?prodCatId=".$cat_row->cat_id;
				$url_array = array_merge($url_array,loadCatsWithPaging($cat_row->cat_id));
				$url_array = array_merge($url_array,loadBreadCrumbUrls($cat_row->seo_list, 'cart'));
			}else{
				$url_array[] ="/".$_SESSION['global_url_word'].$cat_row->seo_url."/showroom.html?prodCatId=".$cat_row->cat_id;	
				$url_array = array_merge($url_array,loadBreadCrumbUrls($cat_row->seo_list, 'showroom'));
			}
		}
	} 



	$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
	// is blog page active?
	$sql = "SELECT active 
			FROM page_seo
			WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
			AND page_name = 'blog'";
$result = $dbCustom->getResult($db,$sql);	
	if($result->num_rows > 0){
		$object = $result->fetch_object();
		if($object->active){
			$sql = "SELECT name, blog_cat_id 
					FROM blog_category
					WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
			$bc_res = mysql_query ($sql);
			if(!$bc_res)die(mysql_error());
			while($row = mysql_fetch_object($bc_res)){
				$url_array[] = '/'.$_SESSION['global_url_word'].getUrlText($row->name)."/blog.html?slug=blog&amp;blogCatId=".$row->blog_cat_id;
				$sql = "SELECT title, blog_post_id 
						FROM blog_post
						WHERE blog_cat_id = '".$row->blog_cat_id."'
						AND hide = '0'";			
				$bp_res = mysql_query ($sql);
				if(!$bp_res)die(mysql_error());
				while($bp_row = mysql_fetch_object($bp_res)){

$url_array[] = '/'.$_SESSION['global_url_word'].getUrlText($row->name)."/".getUrlText($bp_row->title)."/blog.html?slug=blog&amp;blogPostId=".$bp_row->blog_post_id."&amp;blogCatId".$row->blog_cat_id;

				}
			}	
		}
	}


	// Lower nav bar
	$char_length = 0;
	foreach($_SESSION['pages'] as $p_val){
		if($char_length < 90
			&& $p_val['active'] == 1 
			&& $p_val['page_name'] != 'app'
			&& $p_val['page_name'] != 'checkout'
			&& $p_val['page_name'] != 'default'
			&& $p_val['page_name'] != 'blog-more'
			&& $p_val['page_name'] != 'item-details'
			&& $p_val['page_name'] != 'account'
			&& $p_val['page_name'] != 'order-history'
			&& $p_val['page_name'] != 'order-receipt'
			&& $p_val['page_name'] != 'account-designs'
			&& $p_val['page_name'] != 'news'
			&& $p_val['page_name'] != 'news-more'
			&& $p_val['page_name'] != 'signup-form'
			&& $p_val['page_name'] != 'signin-form'
			&& $p_val['page_name'] != 'social-network-about'
			&& $p_val['page_name'] != 'social-network-answer'
			&& $p_val['page_name'] != 'social-network-answers'
			&& $p_val['page_name'] != 'social-network-before-after'
			&& $p_val['page_name'] != 'social-network-blog'
			&& $p_val['page_name'] != 'social-network-blog-article'
			&& $p_val['page_name'] != 'social-network-gallery'
			&& $p_val['page_name'] != 'social-network-members'
			&& $p_val['page_name'] != 'social-network-profile'
			&& $p_val['page_name'] != 'social-network-results'
			&& $p_val['page_name'] != 'shop'
			&& $p_val['page_name'] != 'store'
			&& $p_val['page_name'] != 'showroom-details'
			&& $p_val['page_name'] != 'give-testimonial'
			&& $p_val['page_name'] != 'search-results'
			&& $p_val['page_name'] != 'discounts-how'
			){
					
			if($_SESSION["seo"]){ 
				$the_page_name = $p_val['seo_name'];	
			}else{
				$the_page_name = $p_val['page_name'];
			}
			
			$url_array[] = "/".$_SESSION['global_url_word'].$the_page_name.".html";
			
			$char_length += strlen($the_page_name);
		}
	}

	$url_array = array_unique($url_array);

echo "<br />";
echo "<br />";

echo "Unique";
echo "<br />";


$i = 1;
foreach($url_array as $v){
	echo $i."   ".$v."<br />";
	$i++;	
}


echo "<br />";
echo "<br />";


//$g_array[] = '/custom-organizing-solutions/accessory-options/valet-rods/upgraded-oil-rubbed-bronze-valet-rod/product.html?itemId=613&amp;catId=526';

echo "<br />------------------------------------------------<br />";



/*
echo "<br /><br />";
echo "Is otg in google";
echo "<br /><br />";

foreach($url_array as $url){
	if(in_array($url, $g_array)){	
		echo "IN: ".$url;		
	}else{
		echo "OUT: ".$url;
	}	
	echo "<br />";	
}

*/
$g_array[] = "/custom-organizing-solutions/closet-system-faq.html";
$g_array[] = "/app/";
$g_array[] = "/custom-organizing-solutions/showroom.html";
$g_array[] = "/custom-organizing-solutions/custom-closets-showroom/showroom.html";
$g_array[] = "/custom-organizing-solutions/hardware/showroom.html?catId=300";
$g_array[] = "/custom-organizing-solutions/materials/showroom.html?catId=511";
$g_array[] = "/custom-organizing-solutions/accessory-options/showroom.html?catId=299";
$g_array[] = "/custom-organizing-solutions/decorative-kitchen-islands/showroom.html?prodCatId=67";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/showroom.html?prodCatId=64";
$g_array[] = "/custom-organizing-solutions/garage-organizer-accessories/showroom.html?prodCatId=65";
$g_array[] = "/pantry-organizers/showroom.html?catId=119";
$g_array[] = "/walk-in-showroom.html?catId=39";
$g_array[] = "/garage-organizers/showroom.html?catId=120";
$g_array[] = "/custom-organizing-solutions/master-walk-in-showroom.html?prodCatId=1";
$g_array[] = "/custom-organizing-solutions/reach-in-showroom.html?prodCatId=17";
$g_array[] = "/custom-organizing-solutions/pantry-organizers/showroom.html?prodCatId=18";
$g_array[] = "/custom-organizing-solutions/garage-organizers/showroom.html?prodCatId=19";
$g_array[] = "/custom-organizing-solutions/office-organizers/showroom.html?prodCatId=20";
$g_array[] = "/custom-organizing-solutions/kid-showroom.html?prodCatId=21";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/showroom.html?prodCatId=25";
$g_array[] = "/custom-organizing-solutions/closet-organizer-hardware/showroom.html?prodCatId=26";
$g_array[] = "/custom-organizing-solutions/colorsfinishes/showroom.html?prodCatId=28";
$g_array[] = "/custom-organizing-solutions/raised-panel-frontsdoor-options/showroom.html?prodCatId=33";
$g_array[] = "/custom-organizing-solutions/drawer-options/showroom.html?prodCatId=51";
$g_array[] = "/custom-organizing-solutions/led-cabinetry-lighting/showroom.html?prodCatId=63";
$g_array[] = "/custom-organizing-solutions/about-closet-organizer.html";
$g_array[] = "/custom-organizing-solutions/quick-installation.html";
$g_array[] = "/custom-organizing-solutions/email-us.html";
$g_array[] = "/custom-organizing-solutions/mirror/showroom.html?prodCatId=12";
$g_array[] = "/custom-organizing-solutions/hanger-rack/showroom.html?prodCatId=11";
$g_array[] = "/custom-organizing-solutions/pull-down-hanger-rail/showroom.html?prodCatId=9";
$g_array[] = "/custom-organizing-solutions/blog.html";
$g_array[] = "/custom-organizing-solutions/closet-system-contact.html";
$g_array[] = "/custom-organizing-solutions/design-closet-online.html";
$g_array[] = "/custom-organizing-solutions/closet-design-online.html";
$g_array[] = "/custom-organizing-solutions/closet-organizer-promotions.html";
$g_array[] = "/custom-organizing-solutions/hamper/showroom.html?prodCatId=7";
$g_array[] = "/custom-organizing-solutions/shoe-rack/showroom.html?prodCatId=6";
$g_array[] = "/custom-organizing-solutions/laundrycraft-organizers/showroom.html?prodCatId=22";
$g_array[] = "/custom-organizing-solutions/closet-organizer-hardware/wardrobe-tubes/showroom.html?prodCatId=57";
$g_array[] = "/custom-organizing-solutions/closet-organizer-hardware/showroom.html?prodCatId=26&amp;brandId=0&amp;pageRows=6&amp;pagenum=1";
$g_array[] = "/custom-organizing-solutions/closet-organizer-hardware/showroom.html?prodCatId=26&amp;brandId=0&amp;pageRows=6&amp;pagenum=0";
$g_array[] = "/custom-organizing-solutions/closet-organizer-hardware/showroom.html?prodCatId=26&amp;brandId=0&amp;pageRows=6&amp;pagenum=2";
$g_array[] = "/custom-organizing-solutions/closet-organizer-hardware/wardrobe-tubes/oval-chrome-tube/product.html?productId=176";
$g_array[] = "/custom-organizing-solutions/closet-organizer-hardware/wardrobe-tubes/oval-oil-rubbed-bronze-tube/product.html?productId=177";
$g_array[] = "/custom-organizing-solutions/closet-organizer-hardware/wardrobe-tubes/oval-satin-nickel-tube/product.html?productId=178";
$g_array[] = "/custom-organizing-solutions/closet-organizer-hardware/wardrobe-tubes/round-oil-rubbed-bronze-wardrobe-tube/product.html?productId=179";
$g_array[] = "/custom-organizing-solutions/closet-organizer-hardware/wardrobe-tubes/round-satin-nickel-wardrobe-tube/product.html?productId=180";
$g_array[] = "/custom-organizing-solutions/closet-organizer-hardware/wardrobe-tubes/round-chrome-wardrobe-tube/product.html?productId=181";
$g_array[] = "/custom-organizing-solutions/colorsfinishes/stock-finishes/showroom.html?prodCatId=32";
$g_array[] = "/custom-organizing-solutions/colorsfinishes/showroom.html?prodCatId=28&amp;brandId=0&amp;pageRows=6&amp;pagenum=1";
$g_array[] = "/custom-organizing-solutions/colorsfinishes/showroom.html?prodCatId=28&amp;brandId=0&amp;pageRows=6&amp;pagenum=0";
$g_array[] = "/custom-organizing-solutions/colorsfinishes/showroom.html?prodCatId=28&amp;brandId=0&amp;pageRows=6&amp;pagenum=2";
$g_array[] = "/custom-organizing-solutions/colorsfinishes/stock-finishes/almond/product.html?productId=81";
$g_array[] = "/custom-organizing-solutions/colorsfinishes/stock-finishes/natural-maple/product.html?productId=98";
$g_array[] = "/custom-organizing-solutions/colorsfinishes/stock-finishes/caramel-apple/product.html?productId=83";
$g_array[] = "/custom-organizing-solutions/colorsfinishes/stock-finishes/chocolate-apple/product.html?productId=85";
$g_array[] = "/custom-organizing-solutions/colorsfinishes/stock-finishes/antique-white/product.html?productId=80";
$g_array[] = "/custom-organizing-solutions/colorsfinishes/stock-finishes/wild-apple/product.html?productId=84";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/showroom.html?prodCatId=25&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/showroom.html?prodCatId=25&amp;brandId=0&amp;priceBottom=50&amp;priceTop=100";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/showroom.html?prodCatId=25&amp;brandId=0&amp;priceBottom=100&amp;priceTop=200";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/showroom.html?prodCatId=25&amp;brandId=0&amp;priceBottom=200&amp;priceTop=500";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/ironing-boards/showroom.html?prodCatId=2";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/baskets/showroom.html?prodCatId=27";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/tie-racks/showroom.html?prodCatId=34";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/belt-racks/showroom.html?prodCatId=37";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/valet-rods/showroom.html?prodCatId=40";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/jewelry-trays/showroom.html?prodCatId=43";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/mirrors/showroom.html?prodCatId=44";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/pant-racks/showroom.html?prodCatId=45";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/shoe-storage/showroom.html?prodCatId=46";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/pull-down-wardrobe-tubes/showroom.html?prodCatId=47";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/slat-wall/showroom.html?prodCatId=48";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/acrylic-dividers/showroom.html?prodCatId=49";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/hampers/showroom.html?prodCatId=50";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/closet-organizers-wardrobe-hook-selections/showroom.html?prodCatId=62";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/clothes-rack/showroom.html?prodCatId=68";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/showroom.html?prodCatId=25&amp;brandId=0&amp;pageRows=6&amp;pagenum=1";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/showroom.html?prodCatId=25&amp;brandId=0&amp;pageRows=6&amp;pagenum=0";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/showroom.html?prodCatId=25&amp;brandId=0&amp;pageRows=6&amp;pagenum=9";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/showroom.html?prodCatId=25&amp;brandId=0&amp;pageRows=6&amp;pagenum=2";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/ironing-boards/pressing-perfection-ironing-board/product.html?productId=189";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/ironing-boards/press-fix-ironing-board/product.html?productId=188";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/ironing-boards/ironfix-shelf-mounted-ironing-board/product.html?productId=33";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/shoe-storage/pull-out-closet-organizer-shoe-rack/product.html?productId=190";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/shoe-storage/deluxe-closet-shoe-fences/product.html?productId=191";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/shoe-storage/5-shelf-womens-lazy-shoe-zen-with-shaft-closet/product.html?productId=123";
$g_array[] = "/custom-organizing-solutions/decorative-kitchen-islands/antique-white-kitchen-island-/product.html?productId=210";
$g_array[] = "/custom-organizing-solutions/decorative-kitchen-islands/distressed-black-kitchen-island-/product.html?productId=211";
$g_array[] = "/custom-organizing-solutions/decorative-kitchen-islands/large-antique-white-kitchen-island-/product.html?productId=212";
$g_array[] = "/custom-organizing-solutions/decorative-kitchen-islands/large-distressed-black-kitchen-island-/product.html?productId=213";
$g_array[] = "/custom-organizing-solutions/decorative-kitchen-islands/aged-black-bungalow-kitchen-island-/product.html?productId=215";
$g_array[] = "/custom-organizing-solutions/decorative-kitchen-islands/french-white-bungalow-kitchen-island-/product.html?productId=216";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/showroom.html?prodCatId=64&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/handles/showroom.html?prodCatId=55";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/knobs/showroom.html?prodCatId=56";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/showroom.html?prodCatId=64&amp;brandId=0&amp;pageRows=6&amp;pagenum=1";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/showroom.html?prodCatId=64&amp;brandId=0&amp;pageRows=6&amp;pagenum=0";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/showroom.html?prodCatId=64&amp;brandId=0&amp;pageRows=6&amp;pagenum=5";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/showroom.html?prodCatId=64&amp;brandId=0&amp;pageRows=6&amp;pagenum=2";
$g_array[] = "/custom-organizing-solutions/handles/upgraded-handles/florence-oil-rubbed-bronze-cup-handle/product.html?productId=152";
$g_array[] = "/custom-organizing-solutions/handles/upgraded-handles/florence-satin-nickel-cup-handle/product.html?productId=153";
$g_array[] = "/custom-organizing-solutions/handles/upgraded-handles/bremen-dark-antique-copper-cabinet-pull/product.html?productId=158";
$g_array[] = "/custom-organizing-solutions/handles/upgraded-handles/bremen-satin-nickel-pull/product.html?productId=159";
$g_array[] = "/custom-organizing-solutions/handles/upgraded-handles/satin-nickel-swirl-z-handle/product.html?productId=160";
$g_array[] = "/custom-organizing-solutions/handles/upgraded-handles/wrought-dark-iron-swirl-z-handle/product.html?productId=161";
$g_array[] = "/custom-organizing-solutions/garage-organizer-accessories/showroom.html?prodCatId=65&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50";
$g_array[] = "/custom-organizing-solutions/garage-organizer-accessories/showroom.html?prodCatId=65&amp;brandId=0&amp;priceBottom=100&amp;priceTop=200";
$g_array[] = "/custom-organizing-solutions/garage-organizer-accessories/showroom.html?prodCatId=65&amp;brandId=0&amp;priceBottom=200&amp;priceTop=500";
$g_array[] = "/custom-organizing-solutions/garage-organizer-accessories/garage-hooks/showroom.html?prodCatId=15";
$g_array[] = "/custom-organizing-solutions/garage-organizer-accessories/storage-bins/showroom.html?prodCatId=16";
$g_array[] = "/custom-organizing-solutions/garage-organizer-accessories/garage-organizer-racks/showroom.html?prodCatId=66";
$g_array[] = "/custom-organizing-solutions/garage-organizer-accessories/storage-bins/omni-track-storage-bin/product.html?productId=59";
$g_array[] = "/custom-organizing-solutions/garage-organizer-accessories/storage-bins/omni-track-storage-bin/product.html?productId=58";
$g_array[] = "/custom-organizing-solutions/garage-organizer-accessories/storage-bins/omni-track-storage-bin/product.html?productId=57";
$g_array[] = "/custom-organizing-solutions/garage-organizer-accessories/garage-organizer-racks/omni-track-gardenlawn-rack/product.html?productId=206";
$g_array[] = "/custom-organizing-solutions/garage-organizer-accessories/garage-organizer-racks/omni-track-workcraft-bench-kit/product.html?productId=207";
$g_array[] = "/custom-organizing-solutions/garage-organizer-accessories/garage-organizer-racks/omni-track-sports-rack/product.html?productId=208";
$g_array[] = "/custom-organizing-solutions/pantry-organizers/ultimate-pantry-organizer/showroom-product.html?productId=69";
$g_array[] = "/custom-organizing-solutions/master-walk-in-sunset-cherry-closet-organizer/showroom-product.html?productId=66";
$g_array[] = "/custom-organizing-solutions/master-walk-in-almond-closet-organizer/showroom-product.html?productId=97";
$g_array[] = "/custom-organizing-solutions/master-walk-in-real-wood-closet-organizer/showroom-product.html?productId=67";
$g_array[] = "/custom-organizing-solutions/master-walk-in-luxurious-glass-closet-organizer/showroom-product.html?productId=68";
$g_array[] = "/custom-organizing-solutions/master-walk-in-10ft-tall-contemporary-closet/showroom-product.html?productId=62";
$g_array[] = "/custom-organizing-solutions/garage-organizers/dream-garage-organizer/showroom-product.html?productId=5";
$g_array[] = "/custom-organizing-solutions/garage-organizers/garage-organizer-with-duel-work-benches/showroom-product.html?productId=70";
$g_array[] = "/custom-organizing-solutions/garage-organizers/basic-garage-organizer/showroom-product.html?productId=71";
$g_array[] = "/custom-organizing-solutions/garage-organizers/garage-organizer-for-tight-spaces/showroom-product.html?productId=72";
$g_array[] = "/custom-organizing-solutions/reach-in-shoe-storage-organizer/showroom-product.html?productId=64";
$g_array[] = "/custom-organizing-solutions/reach-in-teen-reach-in-closet/showroom-product.html?productId=75";
$g_array[] = "/custom-organizing-solutions/reach-in-kids-reach-in-closet/showroom-product.html?productId=74";
$g_array[] = "/custom-organizing-solutions/reach-in-his-reach-in-closet/showroom-product.html?productId=4";
$g_array[] = "/custom-organizing-solutions/reach-in-mud-room-closet/showroom-product.html?productId=63";
$g_array[] = "/custom-organizing-solutions/reach-in-white-reach-in-closet/showroom-product.html?productId=65";
$g_array[] = "/custom-organizing-solutions/office-organizers/custom-office-organizer-for-two/showroom-product.html?productId=14";
$g_array[] = "/custom-organizing-solutions/office-organizers/corner-office-organizer/showroom-product.html?productId=73";
$g_array[] = "/custom-organizing-solutions/raised-panel-frontsdoor-options/showroom.html?prodCatId=33&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50";
$g_array[] = "/custom-organizing-solutions/raised-panel-frontsdoor-options/frontier-square-shaker-front/product.html?productId=99";
$g_array[] = "/custom-organizing-solutions/raised-panel-frontsdoor-options/riviera-square-shaker-front/product.html?productId=101";
$g_array[] = "/custom-organizing-solutions/raised-panel-frontsdoor-options/millenia-square-raised-panel-front/product.html?productId=100";
$g_array[] = "/custom-organizing-solutions/raised-panel-frontsdoor-options/escalade-slab-front/product.html?productId=183";
$g_array[] = "/custom-organizing-solutions/raised-panel-frontsdoor-options/espana-slab-square-front/product.html?productId=184";
$g_array[] = "/custom-organizing-solutions/drawer-options/drawer-boxes/showroom.html?prodCatId=52";
$g_array[] = "/custom-organizing-solutions/drawer-options/drawer-bottoms/showroom.html?prodCatId=53";
$g_array[] = "/custom-organizing-solutions/drawer-options/slides/showroom.html?prodCatId=54";
$g_array[] = "/custom-organizing-solutions/drawer-options/showroom.html?prodCatId=51&amp;brandId=0&amp;pageRows=6&amp;pagenum=1";
$g_array[] = "/custom-organizing-solutions/drawer-options/showroom.html?prodCatId=51&amp;brandId=0&amp;pageRows=6&amp;pagenum=0";
$g_array[] = "/custom-organizing-solutions/drawer-options/showroom.html?prodCatId=51&amp;brandId=0&amp;pageRows=6&amp;pagenum=2";
$g_array[] = "/custom-organizing-solutions/drawer-options/drawer-boxes/standard-melamine-box/product.html?productId=142";
$g_array[] = "/custom-organizing-solutions/drawer-options/drawer-boxes/upgraded-dove-tail-boxes/product.html?productId=143";
$g_array[] = "/custom-organizing-solutions/drawer-options/drawer-bottoms/upgraded-cedar-drawer-bottoms/product.html?productId=144";
$g_array[] = "/custom-organizing-solutions/drawer-options/drawer-bottoms/standard-14-melamine-drawer-bottoms/product.html?productId=145";
$g_array[] = "/custom-organizing-solutions/drawer-options/slides/upgraded-soft-close-undermounted-slides/product.html?productId=146";
$g_array[] = "/custom-organizing-solutions/drawer-options/slides/upgraded-soft-close-side-mounted-slides/product.html?productId=147";
$g_array[] = "/custom-organizing-solutions/led-cabinetry-lighting/showroom.html?prodCatId=63&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50";
$g_array[] = "/custom-organizing-solutions/led-cabinetry-lighting/battery-powered-loox-led-9004/product.html?productId=202";
$g_array[] = "/custom-organizing-solutions/led-cabinetry-lighting/loox-led-9005-battery-powered-light/product.html?productId=203";
$g_array[] = "/custom-organizing-solutions/led-cabinetry-lighting/loox-led-2015-wardrobe-tube/product.html?productId=204";
$g_array[] = "/custom-organizing-solutions/led-cabinetry-lighting/loox-led-gooseneck-reading-light/product.html?productId=205";
$g_array[] = "/closet-design-online.html";
$g_array[] = "/design-closet-online.html";
$g_array[] = "/custom-organizing-solutions/mirror/showroom.html?prodCatId=12&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50";
$g_array[] = "/custom-organizing-solutions/mirror/pullout-closet-mirror/product.html?productId=11";
$g_array[] = "/custom-organizing-solutions/hanger-rack/showroom.html?prodCatId=11&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50";
$g_array[] = "/custom-organizing-solutions/hanger-rack/showroom.html?prodCatId=11&amp;brandId=0&amp;priceBottom=100&amp;priceTop=200";
$g_array[] = "/custom-organizing-solutions/hanger-rack/valet-rod/product.html?productId=13";
$g_array[] = "/custom-organizing-solutions/pull-down-hanger-rail/pull-down-hanger-rail/product.html?productId=16";
$g_array[] = "/custom-organizing-solutions/pull-down-hanger-rail/showroom.html?prodCatId=9&amp;brandId=0&amp;priceBottom=100&amp;priceTop=200";
$g_array[] = "/custom-organizing-solutions/closet-organization/blog.html?slug=blog&amp;blogCatId=3";
$g_array[] = "/custom-organizing-solutions/blog.html?slug=blog&amp;blogCatId=0";
$g_array[] = "/custom-organizing-solutions/closet-organization/welcome-to-organize-to-go/blog.html?slug=blog&amp;blogPostId=15&amp;blogCatId=3";
$g_array[] = "/custom-organizing-solutions/email-design-online.html";
$g_array[] = "/custom-organizing-solutions/we-design-fax.html";
$g_array[] = "/custom-organizing-solutions/closet-organizers-in-home-consultation.html";
$g_array[] = "/quick-installation.html";
$g_array[] = "/custom-organizing-solutions/discounts-how.html";
$g_array[] = "/custom-organizing-solutions/hamper/showroom.html?prodCatId=7&amp;brandId=0&amp;priceBottom=50&amp;priceTop=100";
$g_array[] = "/custom-organizing-solutions/hamper/tilt-out-hamper/product.html?productId=23";
$g_array[] = "/custom-organizing-solutions/shoe-rack/showroom.html?prodCatId=6&amp;brandId=0&amp;priceBottom=200&amp;priceTop=500";
$g_array[] = "/custom-organizing-solutions/shoe-rack/showroom.html?prodCatId=6&amp;brandId=0&amp;priceBottom=500&amp;priceTop=1000";
$g_array[] = "/custom-organizing-solutions/shoe-rack/mens-3-tier-shoe-rack/product.html?productId=30";
$g_array[] = "/custom-organizing-solutions/shoe-rack/mens-5-tier-shoe-rack/product.html?productId=32";
$g_array[] = "/custom-organizing-solutions/shoe-rack/wall-mounted-shoe-rack/product.html?productId=41";
$g_array[] = "/custom-organizing-solutions/shoe-rack/womans-5-tier-shoe-rack/product.html?productId=31";
$g_array[] = "/custom-organizing-solutions/shoe-rack/womans-3-tier-shoe-rack/product.html?productId=29";
$g_array[] = "/custom-organizing-solutions/laundrycraft-organizers/craft-closet-organizer/showroom-product.html?productId=76";
$g_array[] = "/custom-organizing-solutions/closet-organizer-hardware/wardrobe-tubes/showroom.html?prodCatId=57&amp;brandId=0&amp;pageRows=6&amp;pagenum=1";
$g_array[] = "/custom-organizing-solutions/closet-organizer-hardware/wardrobe-tubes/showroom.html?prodCatId=57&amp;brandId=0&amp;pageRows=6&amp;pagenum=0";
$g_array[] = "/custom-organizing-solutions/closet-organizer-hardware/wardrobe-tubes/showroom.html?prodCatId=57&amp;brandId=0&amp;pageRows=6&amp;pagenum=2";
$g_array[] = "/custom-organizing-solutions/closet-organizer-hardware/showroom.html?prodCatId=26&amp;brandId=0&amp;pageRows=6&amp;pagenum=3";
$g_array[] = "/custom-organizing-solutions/closet-organizer-hardware/wardrobe-tubes/round-brass-wardrobe-tube/product.html?productId=182";
$g_array[] = "/custom-organizing-solutions/colorsfinishes/stock-finishes/showroom.html?prodCatId=32&amp;brandId=0&amp;pageRows=6&amp;pagenum=1";
$g_array[] = "/custom-organizing-solutions/colorsfinishes/stock-finishes/showroom.html?prodCatId=32&amp;brandId=0&amp;pageRows=6&amp;pagenum=0";
$g_array[] = "/custom-organizing-solutions/colorsfinishes/stock-finishes/showroom.html?prodCatId=32&amp;brandId=0&amp;pageRows=6&amp;pagenum=2";
$g_array[] = "/custom-organizing-solutions/colorsfinishes/showroom.html?prodCatId=28&amp;brandId=0&amp;pageRows=6&amp;pagenum=3";
$g_array[] = "/custom-organizing-solutions/colorsfinishes/stock-finishes/white/product.html?productId=79";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/showroom.html?prodCatId=25&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50&amp;pageRows=6&amp;pagenum=1";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/showroom.html?prodCatId=25&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50&amp;pageRows=6&amp;pagenum=0";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/showroom.html?prodCatId=25&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50&amp;pageRows=6&amp;pagenum=4";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/showroom.html?prodCatId=25&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50&amp;pageRows=6&amp;pagenum=2";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/pant-racks/wire-fan-pant-rack/product.html?productId=209";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/tie-racks/standard-oil-rubbed-bronze-closet-tie-rack/product.html?productId=103";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/tie-racks/upgraded-satin-nickel-closet-tie-rack/product.html?productId=104";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/tie-racks/upgraded-chrome-closet-tie-rack/product.html?productId=105";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/tie-racks/upgraded-oil-rubbed-bronze-closet-tie-rack/product.html?productId=106";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/tie-racks/standard-satin-nickel-closet-tie-rack/product.html?productId=102";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/belt-racks/upgraded-oil-rubbed-bronze-closet-belt-rack/product.html?productId=109";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/belt-racks/upgraded-chrome-closet-belt-rack/product.html?productId=110";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/belt-racks/upgraded-satin-nickel-closet-belt-rack/product.html?productId=111";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/tie-racks/30-pull-out-pant-tie-scarf-rack/product.html?productId=2";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/pant-racks/30-pull-out-pant-organizer/product.html?productId=119";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/pant-racks/24-pull-out-pant-organizer/product.html?productId=118";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/pant-racks/24-wood-pant-rack/product.html?productId=8";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/pant-racks/18-pull-out-pant-organizer/product.html?productId=117";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/mirrors/pull-out-closet-organizer-mirror/product.html?productId=116";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/clothes-rack/spiral-clothes-rack/product.html?productId=214";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/pull-down-wardrobe-tubes/medium-pull-down-closet-wardrobe-tube/product.html?productId=128";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/pull-down-wardrobe-tubes/small-pull-down-closet-organizer-wardrobe-tube/product.html?productId=127";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/pull-down-wardrobe-tubes/large-pull-down-closet-wardrobe-tube/product.html?productId=129";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/baskets/18-wide-wire-baskets/product.html?productId=120";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/baskets/30-wide-wire-baskets/product.html?productId=122";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/baskets/24-wide-wire-baskets/product.html?productId=121";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/tie-racks/showroom.html?prodCatId=34&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/tie-racks/showroom.html?prodCatId=34&amp;brandId=0&amp;priceBottom=50&amp;priceTop=100";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/tie-racks/showroom.html?prodCatId=34&amp;brandId=0&amp;priceBottom=100&amp;priceTop=200";
$g_array[] = "/custom-organizing-solutions/tie-racks/standard-tie-racks/showroom.html?prodCatId=35";
$g_array[] = "/custom-organizing-solutions/tie-racks/upgraded-tie-rack/showroom.html?prodCatId=36";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/belt-racks/showroom.html?prodCatId=37&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/belt-racks/showroom.html?prodCatId=37&amp;brandId=0&amp;priceBottom=50&amp;priceTop=100";
$g_array[] = "/custom-organizing-solutions/belt-racks/standard-belt-racks/showroom.html?prodCatId=38";
$g_array[] = "/custom-organizing-solutions/belt-racks/upgraded-belt-racks/showroom.html?prodCatId=39";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/belt-racks/standard-oil-rubbed-bronze-closet-belt-rack/product.html?productId=107";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/belt-racks/standard-satin-nickel-closet-belt-rack/product.html?productId=108";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/valet-rods/showroom.html?prodCatId=40&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50";
$g_array[] = "/custom-organizing-solutions/valet-rods/standard-valet-rods/showroom.html?prodCatId=41";
$g_array[] = "/custom-organizing-solutions/valet-rods/upgraded-valet-rods/showroom.html?prodCatId=42";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/valet-rods/standard-oil-rubbed-bronze-valet-rod/product.html?productId=201";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/valet-rods/upgraded-chrome-valet-rod/product.html?productId=114";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/valet-rods/standard-satin-nickel-valet-rod/product.html?productId=12";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/valet-rods/upgraded-satin-nickel-valet-rod/product.html?productId=113";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/valet-rods/upgraded-oil-rubbed-bronze-valet-rod/product.html?productId=112";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/jewelry-trays/closet-drawer-insert-jewelry-tray-1/product.html?productId=185";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/jewelry-trays/closet-drawer-insert-jewelry-tray-2/product.html?productId=186";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/jewelry-trays/jewelry-tray-custom-colors/product.html?productId=187";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/mirrors/showroom.html?prodCatId=44&amp;brandId=0&amp;priceBottom=200&amp;priceTop=500";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/pant-racks/showroom.html?prodCatId=45&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/pant-racks/showroom.html?prodCatId=45&amp;brandId=0&amp;priceBottom=100&amp;priceTop=200";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/shoe-storage/3-shelf-womens-lazy-shoe-zen-with-shaft-closet/product.html?productId=125";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/shoe-storage/3-shelf-mens-lazy-shoe-zen-with-shaft-closet/product.html?productId=126";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/shoe-storage/5-shelf-mens-lazy-shoe-zen-with-shaft-closet/product.html?productId=124";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/pull-down-wardrobe-tubes/showroom.html?prodCatId=47&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/pull-down-wardrobe-tubes/showroom.html?prodCatId=47&amp;brandId=0&amp;priceBottom=200&amp;priceTop=500";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/pull-down-wardrobe-tubes/telescoping-closet-hanger-retriever-pole/product.html?productId=131";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/pull-down-wardrobe-tubes/closet-hanger-retriever-pole/product.html?productId=130";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/slat-wall/crystal-gray-slat-wall/product.html?productId=134";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/slat-wall/wild-cherry-slat-wall/product.html?productId=133";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/slat-wall/alum-rock-maple-slat-wall/product.html?productId=132";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/slat-wall/white-slat-wall/product.html?productId=135";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/acrylic-dividers/showroom.html?prodCatId=49&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/acrylic-dividers/closet-organizer-acrylic-dividers/product.html?productId=136";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/acrylic-dividers/acrylic-closet-shoe-dividers/product.html?productId=137";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/hampers/18-wide-tilt-out-hamper/product.html?productId=138";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/hampers/24-wide-cloth-hamper-liner/product.html?productId=140";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/hampers/24-wide-tilt-out-hamper/product.html?productId=139";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/hampers/18-wide-cloth-hamper-liner/product.html?productId=141";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/closet-organizers-wardrobe-hook-selections/3-way-robe-hook/product.html?productId=192";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/clothes-rack/showroom.html?prodCatId=68&amp;brandId=0&amp;priceBottom=200&amp;priceTop=500";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/showroom.html?prodCatId=25&amp;brandId=0&amp;pageRows=6&amp;pagenum=8";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/showroom.html?prodCatId=25&amp;brandId=0&amp;pageRows=6&amp;pagenum=10";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/showroom.html?prodCatId=25&amp;brandId=0&amp;pageRows=6&amp;pagenum=3";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/showroom.html?prodCatId=64&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50&amp;pageRows=6&amp;pagenum=1";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/showroom.html?prodCatId=64&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50&amp;pageRows=6&amp;pagenum=0";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/showroom.html?prodCatId=64&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50&amp;pageRows=6&amp;pagenum=3";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/showroom.html?prodCatId=64&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50&amp;pageRows=6&amp;pagenum=2";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/handles/showroom.html?prodCatId=55&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50";
$g_array[] = "/custom-organizing-solutions/handles/standard-handles/showroom.html?prodCatId=58";
$g_array[] = "/custom-organizing-solutions/handles/upgraded-handles/showroom.html?prodCatId=59";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/handles/showroom.html?prodCatId=55&amp;brandId=0&amp;pageRows=6&amp;pagenum=1";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/handles/showroom.html?prodCatId=55&amp;brandId=0&amp;pageRows=6&amp;pagenum=0";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/handles/showroom.html?prodCatId=55&amp;brandId=0&amp;pageRows=6&amp;pagenum=3";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/handles/showroom.html?prodCatId=55&amp;brandId=0&amp;pageRows=6&amp;pagenum=2";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/knobs/showroom.html?prodCatId=56&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50";
$g_array[] = "/custom-organizing-solutions/knobs/standard-knobs/showroom.html?prodCatId=60";
$g_array[] = "/custom-organizing-solutions/knobs/upgraded-knobs/showroom.html?prodCatId=61";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/knobs/showroom.html?prodCatId=56&amp;brandId=0&amp;pageRows=6&amp;pagenum=1";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/knobs/showroom.html?prodCatId=56&amp;brandId=0&amp;pageRows=6&amp;pagenum=0";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/knobs/showroom.html?prodCatId=56&amp;brandId=0&amp;pageRows=6&amp;pagenum=2";
$g_array[] = "/custom-organizing-solutions/knobs/upgraded-knobs/satin-nickel-swirl-z-knob/product.html?productId=170";
$g_array[] = "/custom-organizing-solutions/knobs/upgraded-knobs/oil-rubbed-bronze-swirl-z-knob/product.html?productId=171";
$g_array[] = "/custom-organizing-solutions/knobs/upgraded-knobs/milan-satin-nickel-knob/product.html?productId=172";
$g_array[] = "/custom-organizing-solutions/knobs/upgraded-knobs/milan-dark-antique-copper-knob/product.html?productId=173";
$g_array[] = "/custom-organizing-solutions/knobs/upgraded-knobs/bremen-satin-nickel-button-knob/product.html?productId=174";
$g_array[] = "/custom-organizing-solutions/knobs/upgraded-knobs/bremen-dark-antique-copper-knob/product.html?productId=175";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/showroom.html?prodCatId=64&amp;brandId=0&amp;pageRows=6&amp;pagenum=4";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/showroom.html?prodCatId=64&amp;brandId=0&amp;pageRows=6&amp;pagenum=6";
$g_array[] = "/custom-organizing-solutions/knobs/standard-knobs/brushed-chrome-knob/product.html?productId=167";
$g_array[] = "/custom-organizing-solutions/knobs/standard-knobs/oil-rubbed-bronze-knob/product.html?productId=168";
$g_array[] = "/custom-organizing-solutions/knobs/standard-knobs/polished-chrome-knob/product.html?productId=169";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/showroom.html?prodCatId=64&amp;brandId=0&amp;pageRows=6&amp;pagenum=3";
$g_array[] = "/custom-organizing-solutions/handles/upgraded-handles/milan-dark-bronze-copper-handle/product.html?productId=162";
$g_array[] = "/custom-organizing-solutions/handles/upgraded-handles/milan-satin-nickel-handle/product.html?productId=163";
$g_array[] = "/custom-organizing-solutions/handles/upgraded-handles/sutton-dark-bronze-copper-handle/product.html?productId=164";
$g_array[] = "/custom-organizing-solutions/handles/upgraded-handles/sutton-satin-nickel-handle/product.html?productId=165";
$g_array[] = "/custom-organizing-solutions/handles/upgraded-handles/sutton-polished-chrome-handle/product.html?productId=166";
$g_array[] = "/custom-organizing-solutions/handles/standard-handles/somerset-dark-antique-copper-arch-handle/product.html?productId=149";
$g_array[] = "/custom-organizing-solutions/handles/standard-handles/96mm-brushed-chrome-wire-pull/product.html?productId=156";
$g_array[] = "/custom-organizing-solutions/handles/standard-handles/somerset-satin-nickel-handle/product.html?productId=150";
$g_array[] = "/custom-organizing-solutions/handles/standard-handles/somerset-polished-chrome-arch-handle/product.html?productId=151";
$g_array[] = "/custom-organizing-solutions/handles/standard-handles/128-oil-rubbed-bronze-bar-pull/product.html?productId=154";
$g_array[] = "/custom-organizing-solutions/handles/standard-handles/128-satin-nickel-bar-pull/product.html?productId=155";
$g_array[] = "/custom-organizing-solutions/garage-organizer-accessories/storage-bins/showroom.html?prodCatId=16&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50";
$g_array[] = "/custom-organizing-solutions/garage-organizer-accessories/garage-organizer-racks/showroom.html?prodCatId=66&amp;brandId=0&amp;priceBottom=100&amp;priceTop=200";
$g_array[] = "/custom-organizing-solutions/garage-organizer-accessories/garage-organizer-racks/showroom.html?prodCatId=66&amp;brandId=0&amp;priceBottom=200&amp;priceTop=500";
$g_array[] = "/custom-organizing-solutions/drawer-options/slides/upgraded-soft-close-undermounted-slides/showroom-product.html?productId=146";
$g_array[] = "/custom-organizing-solutions/shoe-rack/mens-5-tier-shoe-rack/showroom-product.html?productId=32";
$g_array[] = "/custom-organizing-solutions/mirror/pullout-closet-mirror/showroom-product.html?productId=11";
$g_array[] = "/custom-organizing-solutions/hanger-rack/valet-rod/showroom-product.html?productId=13";
$g_array[] = "/custom-organizing-solutions/ironing-board/showroom-product.html?productId=15";
$g_array[] = "/custom-organizing-solutions/drawer-options/slides/full-extension-side-mounted-slides/product.html?productId=148";
$g_array[] = "/custom-organizing-solutions/drawer-options/showroom.html?prodCatId=51&amp;brandId=0&amp;pageRows=6&amp;pagenum=3";
$g_array[] = "/custom-organizing-solutions/blog.html?slug=blog";
$g_array[] = "/custom-organizing-solutions/showroom.html";
$g_array[] = "/tutorial/paint.html";
$g_array[] = "/custom-organizing-solutions/showroom.html?priceBottom=0&amp;priceTop=50&amp;catId=0&amp;brandId=0";
$g_array[] = "/custom-organizing-solutions/showroom.html?priceBottom=50&amp;priceTop=100&amp;catId=0&amp;brandId=0";
$g_array[] = "/custom-organizing-solutions/showroom.html?priceBottom=100&amp;priceTop=200&amp;catId=0&amp;brandId=0";
$g_array[] = "/custom-organizing-solutions/showroom.html?priceBottom=200&amp;priceTop=500&amp;catId=0&amp;brandId=0";
$g_array[] = "/custom-organizing-solutions/showroom.html?priceBottom=500&amp;priceTop=1000&amp;catId=0&amp;brandId=0";
$g_array[] = "/custom-closet-signup.html";
$g_array[] = "/custom-closet-system-contact.html";
$g_array[] = "/custom-organizing-solutions/closet-organizer-hardware/wardrobe-tubes/showroom.html?prodCatId=57&amp;brandId=0&amp;pageRows=6&amp;pagenum=3";
$g_array[] = "/custom-organizing-solutions/colorsfinishes/stock-finishes/showroom.html?prodCatId=32&amp;brandId=0&amp;pageRows=6&amp;pagenum=3";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/showroom.html?prodCatId=25&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50&amp;pageRows=6&amp;pagenum=3";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/showroom.html?prodCatId=25&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50&amp;pageRows=6&amp;pagenum=5";
$g_array[] = "/custom-organizing-solutions/tie-racks/standard-tie-racks/showroom.html?prodCatId=35&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50";
$g_array[] = "/custom-organizing-solutions/tie-racks/upgraded-tie-rack/showroom.html?prodCatId=36&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50";
$g_array[] = "/custom-organizing-solutions/tie-racks/upgraded-tie-rack/showroom.html?prodCatId=36&amp;brandId=0&amp;priceBottom=50&amp;priceTop=100";
$g_array[] = "/custom-organizing-solutions/belt-racks/standard-belt-racks/showroom.html?prodCatId=38&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50";
$g_array[] = "/custom-organizing-solutions/belt-racks/upgraded-belt-racks/showroom.html?prodCatId=39&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50";
$g_array[] = "/custom-organizing-solutions/belt-racks/upgraded-belt-racks/showroom.html?prodCatId=39&amp;brandId=0&amp;priceBottom=50&amp;priceTop=100";
$g_array[] = "/custom-organizing-solutions/valet-rods/standard-valet-rods/showroom.html?prodCatId=41&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50";
$g_array[] = "/custom-organizing-solutions/valet-rods/upgraded-valet-rods/showroom.html?prodCatId=42&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/showroom.html?prodCatId=25&amp;brandId=0&amp;pageRows=6&amp;pagenum=7";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/showroom.html?prodCatId=25&amp;brandId=0&amp;pageRows=6&amp;pagenum=4";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/showroom.html?prodCatId=64&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50&amp;pageRows=6&amp;pagenum=4";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/handles/showroom.html?prodCatId=55&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50&amp;pageRows=6&amp;pagenum=1";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/handles/showroom.html?prodCatId=55&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50&amp;pageRows=6&amp;pagenum=0";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/handles/showroom.html?prodCatId=55&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50&amp;pageRows=6&amp;pagenum=2";
$g_array[] = "/custom-organizing-solutions/handles/standard-handles/showroom.html?prodCatId=58&amp;brandId=0&amp;pageRows=6&amp;pagenum=1";
$g_array[] = "/custom-organizing-solutions/handles/standard-handles/showroom.html?prodCatId=58&amp;brandId=0&amp;pageRows=6&amp;pagenum=0";
$g_array[] = "/custom-organizing-solutions/handles/standard-handles/showroom.html?prodCatId=58&amp;brandId=0&amp;pageRows=6&amp;pagenum=2";
$g_array[] = "/custom-organizing-solutions/handles/upgraded-handles/showroom.html?prodCatId=59&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50";
$g_array[] = "/custom-organizing-solutions/handles/upgraded-handles/showroom.html?prodCatId=59&amp;brandId=0&amp;pageRows=6&amp;pagenum=1";
$g_array[] = "/custom-organizing-solutions/handles/upgraded-handles/showroom.html?prodCatId=59&amp;brandId=0&amp;pageRows=6&amp;pagenum=0";
$g_array[] = "/custom-organizing-solutions/handles/upgraded-handles/showroom.html?prodCatId=59&amp;brandId=0&amp;pageRows=6&amp;pagenum=2";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/handles/showroom.html?prodCatId=55&amp;brandId=0&amp;pageRows=6&amp;pagenum=4";
$g_array[] = "/custom-organizing-solutions/handles/standard-handles/96mm-oil-rubbed-bronze-wire-pull/product.html?productId=157";
$g_array[] = "/custom-organizing-solutions/knobs/upgraded-knobs/showroom.html?prodCatId=61&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/knobs/showroom.html?prodCatId=56&amp;brandId=0&amp;pageRows=6&amp;pagenum=3";
$g_array[] = "/custom-organizing-solutions/drawer-options/showroom.html?prodCatId=51";
$g_array[] = "/custom-organizing-solutions/drawer-options/slides/showroom.html?prodCatId=54";
$g_array[] = "/custom-organizing-solutions/drawer-options/slides/upgraded-soft-close-side-mounted-slides/showroom-product.html?productId=147";
$g_array[] = "/custom-organizing-solutions/shoe-rack/womans-5-tier-shoe-rack/showroom-product.html?productId=31";
$g_array[] = "/custom-organizing-solutions/hanger-rack/showroom.html?prodCatId=11";
$g_array[] = "/custom-organizing-solutions/pull-down-hanger-rail/pull-down-hanger-rail/showroom-product.html?productId=16";
$g_array[] = "/custom-organizing-solutions/showroom.html?prodCatId=0&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50&amp;pageRows=6&amp;pagenum=1";
$g_array[] = "/custom-organizing-solutions/showroom.html?prodCatId=0&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50&amp;pageRows=6&amp;pagenum=0";
$g_array[] = "/custom-organizing-solutions/showroom.html?prodCatId=0&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50&amp;pageRows=6&amp;pagenum=2";
$g_array[] = "/custom-organizing-solutions/ironing-board/product.html?productId=15";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/showroom.html?prodCatId=25&amp;brandId=0&amp;pageRows=6&amp;pagenum=6";
$g_array[] = "/custom-organizing-solutions/closet-organizer-accessories/showroom.html?prodCatId=25&amp;brandId=0&amp;pageRows=6&amp;pagenum=5";
$g_array[] = "/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/handles/showroom.html?prodCatId=55&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50&amp;pageRows=6&amp;pagenum=3";
$g_array[] = "/custom-organizing-solutions/handles/standard-handles/showroom.html?prodCatId=58&amp;brandId=0&amp;pageRows=6&amp;pagenum=3";
$g_array[] = "/custom-organizing-solutions/handles/upgraded-handles/showroom.html?prodCatId=59&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50&amp;pageRows=6&amp;pagenum=1";
$g_array[] = "/custom-organizing-solutions/handles/upgraded-handles/showroom.html?prodCatId=59&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50&amp;pageRows=6&amp;pagenum=0";
$g_array[] = "/custom-organizing-solutions/handles/upgraded-handles/showroom.html?prodCatId=59&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50&amp;pageRows=6&amp;pagenum=2";
$g_array[] = "/custom-organizing-solutions/handles/upgraded-handles/showroom.html?prodCatId=59&amp;brandId=0&amp;pageRows=6&amp;pagenum=3";
$g_array[] = "/custom-organizing-solutions/drawer-options/slides/full-extension-side-mounted-slides/showroom-product.html?productId=148";
$g_array[] = "/custom-organizing-solutions/shoe-rack/showroom.html?prodCatId=6";
$g_array[] = "/custom-organizing-solutions/shoe-rack/mens-3-tier-shoe-rack/showroom-product.html?productId=30";
$g_array[] = "/custom-organizing-solutions/hamper/tilt-out-hamper/showroom-product.html?productId=23";
$g_array[] = "/custom-organizing-solutions/showroom.html?prodCatId=0&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50&amp;pageRows=6&amp;pagenum=3";
$g_array[] = "/custom-organizing-solutions/handles/upgraded-handles/showroom.html?prodCatId=59&amp;brandId=0&amp;priceBottom=0&amp;priceTop=50&amp;pageRows=6&amp;pagenum=3";
$g_array[] = "/custom-organizing-solutions/shoe-rack/womans-3-tier-shoe-rack/showroom-product.html?productId=29";

/*
echo "before".count($g_array);
echo "<br />";

$g_array = array_unique($g_array);

echo "after".count($g_array);
echo "<br />";


echo "<br /><br />";
echo "<br /><br />";


$i = 1;
foreach($g_array as $v){
	echo $i."   ".$v."<br />";
	$i++;	
}
*/

echo "<br /><br />";
echo "Is google in otg";
echo "<br /><br />";


foreach($g_array as $url){
	if(in_array($url, $url_array)){	
		echo "IN: ".$url;		
	}else{
		echo "OUT: ".$url;
	}	
	echo "<br />";	
}



/*	
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$sql = "SELECT cat_id, seo_url, show_in_cart, show_in_showroom, name  
			FROM category
			WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
			AND active = '1'";
$result = $dbCustom->getResult($db,$sql);		
	while($row = $result->fetch_object()){		
		echo $row->name."  ".$row->cat_id."<br />";
	}
	
	$sql = "SELECT item_id, seo_url, show_in_cart, show_in_showroom  
			FROM item
			WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
			AND item.date_inactive > NOW()
			AND item.date_active <= NOW()
			AND active = '1'";
$result = $dbCustom->getResult($db,$sql);		
	while($row = $result->fetch_object()){
	
		$sql = "SELECT cat_id
				FROM item_to_category

				WHERE item_id = '".$row->item_id."'";  
		$result = $dbCustom->getResult($db,$sql);
			
		if($res->num_rows > 0){
			$obj = $res->fetch_object();
			$cat_id = $obj->cat_id; 	
		}else{
			$cat_id = 0;
		}
		
		if($row->show_in_cart){
			$url_array[] = '/'.$_SESSION['global_url_word'].$row->seo_url.'/product.html?itemId='.$row->item_id."&amp;catId=".$cat_id;
		}
		
		if($row->show_in_showroom){
			$url_array[] = '/'.$_SESSION['global_url_word'].$row->seo_url.'/showroom-product.html?itemId='.$row->item_id."&amp;catId=".$cat_id;					
		}
	}

*/



exit;

//$g_array[] = '/custom-organizing-solutions/accessory-options/valet-rods/upgraded-oil-rubbed-bronze-valet-rod/product.html?itemId=613&amp;catId=526';

$g_array_link[] = '<a href="http://www.organizetogo.com/" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-system-faq.html" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/app/" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/showroom.html" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/custom-closets-showroom/showroom.html" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/hardware/showroom.html?catId=300" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/materials/showroom.html?catId=511" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/accessory-options/showroom.html?catId=299" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/showroom.html?catId=556" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/garage-accessories/showroom.html?catId=557" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/led-cabinetry-lighting/showroom.html?catId=555" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/pantry-organizers/showroom.html?catId=119" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/walk-in-showroom.html?catId=39" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/garage-organizers/showroom.html?catId=120" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/walk-in-showroom.html?catId=39" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/reach-in-showroom.html?catId=117" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/pantry-organizers/showroom.html?catId=119" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/garage-organizers/showroom.html?catId=120" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/office-organizers/showroom.html?catId=121" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/kid-showroom.html?catId=122" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/laundrycraft-organizers/showroom.html?catId=123" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-accessories/showroom.html?catId=299" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-hardware/showroom.html?catId=300" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/colorsfinishes/showroom.html?catId=511" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/raised-panel-fronts-door-options/showroom.html?catId=516" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/drawer-options/showroom.html?catId=535" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/about-closet-organizer.html" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/quick-installation.html" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/email-us.html" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/about-closet-organizer.html" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/blog.html" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-system-contact.html" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/design-closet-online.html" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-design-online.html" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-promotions.html" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-hardware/wardrobe-tubes/showroom.html?catId=541" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-hardware/showroom.html?catId=300&amp;brandId=0&amp;priceBottom=0&amp;priceTop=0&amp;pageRows=6&amp;pagenum=1" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-hardware/showroom.html?catId=300&amp;brandId=0&amp;priceBottom=0&amp;priceTop=0&amp;pageRows=6&amp;pagenum=0" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-hardware/showroom.html?catId=300&amp;brandId=0&amp;priceBottom=0&amp;priceTop=0&amp;pageRows=6&amp;pagenum=2" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-hardware/wardrobe-tubes/oval-chrome-tube/product.html?itemId=677&amp;catId=300" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-hardware/wardrobe-tubes/oval-oil-rubbed-bronze-tube/product.html?itemId=678&amp;catId=300" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-hardware/wardrobe-tubes/oval-satin-nickel-tube/product.html?itemId=679&amp;catId=300" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-hardware/wardrobe-tubes/round-oil-rubbed-bronze-wardrobe-tube/product.html?itemId=680&amp;catId=300" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-hardware/wardrobe-tubes/round-satin-nickel-wardrobe-tube/product.html?itemId=681&amp;catId=300" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-hardware/wardrobe-tubes/round-chrome-wardrobe-tube/product.html?itemId=682&amp;catId=300" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/colorsfinishes/stock-finishes/showroom.html?catId=515" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/colorsfinishes/showroom.html?catId=511&amp;brandId=0&amp;priceBottom=0&amp;priceTop=0&amp;pageRows=6&amp;pagenum=1" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/colorsfinishes/showroom.html?catId=511&amp;brandId=0&amp;priceBottom=0&amp;priceTop=0&amp;pageRows=6&amp;pagenum=0" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/colorsfinishes/showroom.html?catId=511&amp;brandId=0&amp;priceBottom=0&amp;priceTop=0&amp;pageRows=6&amp;pagenum=2" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/colorsfinishes/stock-finishes/almond/product.html?itemId=335&amp;catId=511" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/colorsfinishes/stock-finishes/natural-maple/product.html?itemId=599&amp;catId=511" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/colorsfinishes/stock-finishes/caramel-apple/product.html?itemId=337&amp;catId=511" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/colorsfinishes/stock-finishes/chocolate-apple/product.html?itemId=339&amp;catId=511" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/colorsfinishes/stock-finishes/antique-white/product.html?itemId=334&amp;catId=511" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/colorsfinishes/stock-finishes/wild-apple/product.html?itemId=338&amp;catId=511" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-accessories/showroom.html?priceBottom=0&amp;priceTop=50&amp;catId=299&amp;brandId=0" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-accessories/showroom.html?priceBottom=50&amp;priceTop=100&amp;catId=299&amp;brandId=0" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-accessories/showroom.html?priceBottom=100&amp;priceTop=200&amp;catId=299&amp;brandId=0" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-accessories/showroom.html?priceBottom=200&amp;priceTop=500&amp;catId=299&amp;brandId=0" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-accessories/ironing-boards/showroom.html?catId=53" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-accessories/baskets/showroom.html?catId=301" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-accessories/tie-racks/showroom.html?catId=518" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-accessories/belt-racks/showroom.html?catId=521" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-accessories/valet-rods/showroom.html?catId=524" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-accessories/jewelry-trays/showroom.html?catId=527" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-accessories/mirrors/showroom.html?catId=528" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-accessories/pant-racks/showroom.html?catId=529" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-accessories/shoe-storage/showroom.html?catId=530" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-accessories/pull-down-wardrobe-tubes/showroom.html?catId=531" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-accessories/slat-wall/showroom.html?catId=532" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-accessories/acrylic-dividers/showroom.html?catId=533" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-accessories/hampers/showroom.html?catId=534" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-accessories/closet-organizers-wardrobe-hook-selections/showroom.html?catId=547" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-accessories/showroom.html?catId=299&amp;brandId=0&amp;priceBottom=0&amp;priceTop=0&amp;pageRows=6&amp;pagenum=1" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-accessories/showroom.html?catId=299&amp;brandId=0&amp;priceBottom=0&amp;priceTop=0&amp;pageRows=6&amp;pagenum=0" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-accessories/showroom.html?catId=299&amp;brandId=0&amp;priceBottom=0&amp;priceTop=0&amp;pageRows=6&amp;pagenum=9" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-accessories/showroom.html?catId=299&amp;brandId=0&amp;priceBottom=0&amp;priceTop=0&amp;pageRows=6&amp;pagenum=2" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-accessories/ironing-boards/pressing-perfection-ironing-board/product.html?itemId=693&amp;catId=299" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-accessories/ironing-boards/press-fix-ironing-board/product.html?itemId=692&amp;catId=299" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-accessories/ironing-boards/ironfix-shelf-mounted-ironing-board/product.html?itemId=165&amp;catId=299" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-accessories/shoe-storage/pull-out-closet-organizer-shoe-rack/product.html?itemId=694&amp;catId=299" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-accessories/shoe-storage/deluxe-closet-shoe-fences/product.html?itemId=695&amp;catId=299" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-accessories/shoe-storage/5-shelf-womens-lazy-shoe-zen-with-shaft-closet/product.html?itemId=624&amp;catId=299" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/showroom.html?priceBottom=0&amp;priceTop=50&amp;catId=556&amp;brandId=0" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/handles/showroom.html?catId=539" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/knobs/showroom.html?catId=540" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/showroom.html?catId=556&amp;brandId=0&amp;priceBottom=0&amp;priceTop=0&amp;pageRows=6&amp;pagenum=1" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/showroom.html?catId=556&amp;brandId=0&amp;priceBottom=0&amp;priceTop=0&amp;pageRows=6&amp;pagenum=0" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/showroom.html?catId=556&amp;brandId=0&amp;priceBottom=0&amp;priceTop=0&amp;pageRows=6&amp;pagenum=5" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/decorative-hardware-handlesknobs-and-hooks/showroom.html?catId=556&amp;brandId=0&amp;priceBottom=0&amp;priceTop=0&amp;pageRows=6&amp;pagenum=2" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/handles/upgraded-handles/florence-oil-rubbed-bronze-cup-handle/product.html?itemId=653&amp;catId=556" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/handles/upgraded-handles/florence-satin-nickel-cup-handle/product.html?itemId=654&amp;catId=556" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/handles/upgraded-handles/bremen-dark-antique-copper-cabinet-pull/product.html?itemId=659&amp;catId=556" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/handles/upgraded-handles/bremen-satin-nickel-pull/product.html?itemId=660&amp;catId=556" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/handles/upgraded-handles/satin-nickel-swirl-z-handle/product.html?itemId=661&amp;catId=556" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/handles/upgraded-handles/wrought-dark-iron-swirl-z-handle/product.html?itemId=662&amp;catId=556" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/garage-accessories/showroom.html?priceBottom=0&amp;priceTop=50&amp;catId=557&amp;brandId=0" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/garage-accessories/showroom.html?priceBottom=100&amp;priceTop=200&amp;catId=557&amp;brandId=0" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/garage-accessories/showroom.html?priceBottom=200&amp;priceTop=500&amp;catId=557&amp;brandId=0" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/garage-accessories/storage-bins/showroom.html?catId=115" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/garage-accessories/garage-organizer-racks/showroom.html?catId=562" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/garage-accessories/storage-bins/omni-track-storage-bin/product.html?itemId=191&amp;catId=557" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/garage-accessories/storage-bins/omni-track-storage-bin/product.html?itemId=190&amp;catId=557" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/garage-accessories/storage-bins/omni-track-storage-bin/product.html?itemId=189&amp;catId=557" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/garage-accessories/garage-organizer-racks/omni-track-gardenlawn-rack/product.html?itemId=790&amp;catId=557" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/garage-accessories/garage-organizer-racks/omni-track-workcraft-bench-kit/product.html?itemId=791&amp;catId=557" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/garage-accessories/garage-organizer-racks/omni-track-sports-rack/product.html?itemId=792&amp;catId=557" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/led-cabinetry-lighting/showroom.html?priceBottom=0&amp;priceTop=50&amp;catId=555&amp;brandId=0" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/led-cabinetry-lighting/battery-powered-loox-led-9004/product.html?itemId=786&amp;catId=555" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/led-cabinetry-lighting/loox-led-9005-battery-powered-light/product.html?itemId=787&amp;catId=555" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/led-cabinetry-lighting/loox-led-2015-wardrobe-tube/product.html?itemId=788&amp;catId=555" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/led-cabinetry-lighting/loox-led-gooseneck-reading-light/product.html?itemId=789&amp;catId=555" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/pantry-organizers/ultimate-pantry-organizer/showroom-product.html?itemId=207&amp;catId=119" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/walk-in-sunset-cherry-closet-organizer/showroom-product.html?itemId=204&amp;catId=39" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/walk-in-almond-closet-organizer/showroom-product.html?itemId=598&amp;catId=39" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/walk-in-real-wood-closet-organizer/showroom-product.html?itemId=205&amp;catId=39" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/walk-in-luxurious-glass-closet-organizer/showroom-product.html?itemId=206&amp;catId=39" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/walk-in-10ft-tall-contemporary-closet/showroom-product.html?itemId=198&amp;catId=39" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/garage-organizers/dream-garage-organizer/showroom-product.html?itemId=113&amp;catId=120" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/garage-organizers/garage-organizer-with-duel-work-benches/showroom-product.html?itemId=209&amp;catId=120" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/garage-organizers/basic-garage-organizer/showroom-product.html?itemId=210&amp;catId=120" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/garage-organizers/garage-organizer-for-tight-spaces/showroom-product.html?itemId=211&amp;catId=120" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/reach-in-shoe-storage-organizer/showroom-product.html?itemId=201&amp;catId=117" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/reach-in-teen-reach-in-closet/showroom-product.html?itemId=214&amp;catId=117" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/reach-in-kids-reach-in-closet/showroom-product.html?itemId=213&amp;catId=117" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/reach-in-his-reach-in-closet/showroom-product.html?itemId=103&amp;catId=117" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/reach-in-mud-room-closet/showroom-product.html?itemId=199&amp;catId=117" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/reach-in-white-reach-in-closet/showroom-product.html?itemId=202&amp;catId=117" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/office-organizers/custom-office-organizer-for-two/showroom-product.html?itemId=140&amp;catId=121" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/office-organizers/corner-office-organizer/showroom-product.html?itemId=212&amp;catId=121" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/reach-in-kids-reach-in-closet/showroom-product.html?itemId=213&amp;catId=122" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/reach-in-teen-reach-in-closet/showroom-product.html?itemId=214&amp;catId=122" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/laundrycraft-organizers/craft-closet-organizer/showroom-product.html?itemId=215&amp;catId=123" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/raised-panel-fronts-door-options/showroom.html?priceBottom=0&amp;priceTop=50&amp;catId=516&amp;brandId=0" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/raised-panel-fronts-door-options/frontier-square-shaker-front/product.html?itemId=600&amp;catId=516" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/raised-panel-fronts-door-options/riviera-square-shaker-front/product.html?itemId=602&amp;catId=516" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/raised-panel-fronts-door-options/millenia-square-raised-panel-front/product.html?itemId=601&amp;catId=516" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/raised-panel-fronts-door-options/escalade-slab-front/product.html?itemId=684&amp;catId=516" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/raised-panel-fronts-door-options/espana-slab-square-front/product.html?itemId=685&amp;catId=516" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/drawer-options/drawer-boxes/showroom.html?catId=536" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/drawer-options/drawer-bottoms/showroom.html?catId=537" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/drawer-options/slides/showroom.html?catId=538" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/drawer-options/showroom.html?catId=535&amp;brandId=0&amp;priceBottom=0&amp;priceTop=0&amp;pageRows=6&amp;pagenum=1" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/drawer-options/showroom.html?catId=535&amp;brandId=0&amp;priceBottom=0&amp;priceTop=0&amp;pageRows=6&amp;pagenum=0" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/drawer-options/showroom.html?catId=535&amp;brandId=0&amp;priceBottom=0&amp;priceTop=0&amp;pageRows=6&amp;pagenum=2" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/drawer-options/drawer-boxes/standard-melamine-box/product.html?itemId=643&amp;catId=535" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/drawer-options/drawer-boxes/upgraded-dove-tail-boxes/product.html?itemId=644&amp;catId=535" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/drawer-options/drawer-bottoms/upgraded-cedar-drawer-bottoms/product.html?itemId=645&amp;catId=535" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/drawer-options/drawer-bottoms/standard-14-melamine-drawer-bottoms/product.html?itemId=646&amp;catId=535" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/drawer-options/slides/upgraded-soft-close-undermounted-slides/product.html?itemId=647&amp;catId=535" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/drawer-options/slides/upgraded-soft-close-side-mounted-slides/product.html?itemId=648&amp;catId=535" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/closet-design-online.html" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/design-closet-online.html" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organization/blog.html?slug=blog&amp;blogCatId=3" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/blog.html?slug=blog&amp;blogCatId=0" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organization/welcome-to-organize-to-go/blog.html?slug=blog&amp;blogPostId=15&amp;blogCatId=3" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/email-us.html" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/closet-system-faq.html" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/email-design-online.html" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/we-design-fax.html" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizers-in-home-consultation.html" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/quick-installation.html" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/discounts-how.html" target="_blank">CLICK</a><br />';
$g_array_link[] = '<a href="http://www.organizetogo.com/custom-organizing-solutions/closet-organizer-hardware/wardrobe-tubes/showroom.html?catId=541&amp;brandId=0&a