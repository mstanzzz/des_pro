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

require_once($real_root.'/includes/class.store_data.php');
require_once($real_root.'/includes/class.shopping_cart_item.php');
require_once($real_root.'/includes/class.shipping.php');
require_once($real_root.'/includes/class.module.php');
require_once($real_root.'/includes/class.seo.php');

function truncateString($str, $chars, $to_space, $replacement="...") {
   if($chars > strlen($str)) return $str;

   $str = substr($str, 0, $chars);
   $space_pos = strrpos($str, " ");
   if($to_space && $space_pos >= 0) 
       $str = substr($str, 0, strrpos($str, " "));

   return($str . $replacement);
}


function is_even_number($number){ 
	if($number % 2 == 0){ 
		return 1;  
	}else{ 
		return 0;  
	} 
} 


function get_svg_block($dbCustom,$svg_id){
	$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
	$svg = '';
	$sql = "SELECT svg_code
			FROM svg 
			WHERE svg_id = '".$svg_id."'";
	$result = $dbCustom->getResult($db,$sql);			
	if($result->num_rows > 0){
		$object = $result->fetch_object();						
		$svg_code = stripcslashes($object->svg_code);
	}
	return $svg_code;	
}

function get_cart_svg_code($dbCustom,$svg_id){
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$svg_code = '';
	$sql = "SELECT svg_code
			FROM svg 
			WHERE svg_id = '".$svg_id."'";
	$result = $dbCustom->getResult($db,$sql);			
	if($result->num_rows > 0){
		$object = $result->fetch_object();						
		$svg_code = stripcslashes($object->svg_code);
	}
	return $svg_code;	
}


function obj_to_array($obj){
	return json_decode(json_encode((array)$obj),1);	
}

function _xml2array ( $xmlObject, $out = array () ){
    foreach ( (array) $xmlObject as $index => $node )
        $out[$index] = ( is_object ( $node ) ) ? _xml2array ( $node ) : $node;

    return $out;
}

function get_shorter($in, $len = 30){
	$out = strlen($in) > $len ? substr($in,0,$len)."..." : $in;
	return $out; 
}	


function is_valid_email($email){
	$ret = 1;
	if(strpos($email, '@') === false){
		$ret = 0;
	}
	if(strpos($email, '.') === false){
		$ret = 0;
	}
	if(strlen($email) < 8){
		$ret = 0;
	}
	return $ret;

}


function getWordFromDigit($digit){
		
	switch ($digit) {
		case 0:
			$ret = 'zero';
			break;
		case 1:
			$ret = 'one';
			break;
		case 2:
			$ret = 'two';
			break;
		case 3:
			$ret = 'three';
			break;
		case 4:
			$ret = 'four';
			break;
		case 5:
			$ret = 'five';
			break;
		case 6:
			$ret = 'six';
			break;
		case 7:
			$ret = 'seven';
			break;
		case 8:
			$ret = 'eight';
			break;
		case 9:
			$ret = 'nine';
			break;
		default:
		   $ret = 'ten';
	}					
	
	return $ret;
}

function getCityStateFromZip($zip) {	
    $city = '';
    $state = '';
	$curl = curl_init();
	curl_setopt_array($curl, [
		CURLOPT_URL => "https://us-zip-code-information.p.rapidapi.com/?zipcode=".$zip,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => [
			"x-rapidapi-host: us-zip-code-information.p.rapidapi.com",
			"x-rapidapi-key: 98ffbcd992mshde911fcbed0a352p171177jsn4615509598c3"
		],
	]);
	$response = curl_exec($curl);
	$err = curl_error($curl);
	curl_close($curl);
	if ($err) {
		echo "cURL Error #:" . $err;
	} else {
		//echo $response;
	}
	$json = json_decode($response);
	if(isset($json[0]->City)) $city = $json[0]->City;
	if(isset($json[0]->State)) $state = $json[0]->State;
    $arrReturn = array("city"=>$city, "state"=>$state);
	return $arrReturn;
}
	
function deleteDir($dir) {
   if (is_dir($dir)) {
     $objects = scandir($dir);
     foreach ($objects as $object) {
       if ($object != "." && $object != "..") {
         if (filetype($dir."/".$object) == "dir"){ 
		 	deleteDir($dir."/".$object); 
		 }else{ 
		 	unlink($dir."/".$object);
		 }
	   }
     }
     reset($objects);
     rmdir($dir);
   }
} 


function getURLFileName($name) {
	$ret = $name;
	foreach($_SESSION['pages'] as $p_val){
		if($p_val['page_name'] == $name){	
			$ret = $p_val['seo_name'];
		}
	}
	return $ret;        
}

function getURLFileNameById($page_seo_id) {
	$ret = '';
	foreach($_SESSION['pages'] as $p_val){
		if($p_val['page_seo_id'] == $page_seo_id){	
			$ret = $p_val['seo_name'];
		}
	}
	return $ret;        
}

function isActivePage($name){
	$ret = 0;
	foreach($_SESSION['pages'] as $p_val){
		if($p_val['page_name'] == $name){
			if($p_val['active']){	
				$ret = 1;
			}
		}
	}
	return $ret;        	
}

function arraySortMulti(&$array, $val, $a_d = 'a') {
	foreach ($array as $key => $row)
	{
		$vc_array_name[$key] = $row[$val];
	}
	if($a_d == 'a'){
		array_multisort($vc_array_name, SORT_ASC, $array);			
	}else{
		array_multisort($vc_array_name, SORT_DESC, $array);	
	}
}

function arraySort2d(&$array, $key) {
    $sorter=array();
    $ret=array();
    reset($array);
    foreach ($array as $ii => $va) {
        $sorter[$ii]=$va[$key];
    }
    asort($sorter);
    foreach ($sorter as $ii => $va) {
        $ret[$ii]=$array[$ii];
    }
    $array=$ret;
}

function multi_unique($array) {
	$new = array();
	$new1 = array();	
	if(is_array($array)){
		foreach ($array as $k=>$na) $new[$k] = serialize($na);
		$uniq = array_unique($new);
		foreach($uniq as $k=>$ser) $new1[$k] = unserialize($ser);
		return ($new1);
	}else{
		return $new;	
	}
}

function inArray($v, $array, $indx_name = ''){
	$ret = 0;	
	if(is_array($array)){
		foreach($array as $value){
			if($indx_name == ''){
				if($value == $v) $ret = 1;
			}else{
				if(isset($value[$indx_name])){
					if($value[$indx_name] == $v) $ret = 1;
				}
			}
		}
	}
	return $ret;
}

function getCatImgInfo($dbCustom,$cat_id){

	$ret_array['name'] = '';
	$ret_array['file_name'] = '';
	
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$sql = "SELECT category.name
				,image.file_name 
			FROM category, image 
			WHERE category.img_id = image.img_id
			AND category.cat_id = '".$cat_id."'";
	$result = $dbCustom->getResult($db,$sql);			
	if($result->num_rows > 0){
		$object = $result->fetch_object();						
		$ret_array['name'] = $object->name;
		$ret_array['file_name'] = $object->file_name;
	}
	
	return $ret_array;	
	
}

function getUrlText($str)
{
	$t = trim($str);
	$t = str_replace ("_" ,"-" ,$t);
	$t = str_replace (" " ,"-" ,$t);
	$t = str_replace ("--" ,"-" ,$t);
	
	
	if(substr($t,0) == '-'){
		$t = substr($t,1);	
	}
		
	$t = str_replace ("/" ,"-" ,$t);
	$t = preg_replace( '/[^a-zA-Z0-9-]+/', '', $t );	
	$t = str_replace ("--" ,"-" ,$t);
	return strtolower($t); 
}


function getAllCats($dbCustom)
{
	if(!isset($_SESSION['all_cats'])){
		
		if(!isset($store_data)){
			$store_data = new StoreData;
		}
		$dbCustom = new DbCustom();
		$db = $dbCustom->getDbConnect(CART_N_DATABASE);
		$sql = "SELECT cat_id, profile_cat_id, name, seo_url
				FROM category
				WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
				AND active = '1'
				ORDER BY cat_id";
		$result = $dbCustom->getResult($db,$sql);				
		$i = 0;
		while($row = $result->fetch_object()) {
			
			if($store_data->getItemCount(0,0,$row->cat_id,0,'showroom') > 0){
			
				$t[$i]['cat_id'] = $row->cat_id;
				$t[$i]['profile_cat_id'] = $row->profile_cat_id;
				$t[$i]['name'] = stripslashes($row->name);
				$t[$i]['seo_url'] = $row->seo_url;
				$i++;
			}
		}
		
		$_SESSION['all_cats'] = $t;
	}
	return $_SESSION['all_cats'];
}


function getCatName($cat_id)
{	
	$ret = '';
	$dbCustom = new DbCustom();
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$sql = "SELECT name 
			FROM category
			WHERE cat_id = '".$cat_id."'";
		
	$result = $dbCustom->getResult($db,$sql);
			
	if($result->num_rows> 0){		
		$obj = $result->fetch_object();
		$ret = stripslashes($obj->name);
	}
	return $ret;	

}

function isClosetSystem($item_id){
	$dbCustom = new DbCustom();
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$sql = "SELECT item_id 
			FROM item
			WHERE show_in_showroom = '1'
			AND item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);
	if($result->num_rows > 0){
		$ret = 1;
	}else{
		$ret = 0;
	}
	return $ret;		
	
}

function getBrandCats($vend_man_id)
{

	$t = '';
	$dbCustom = new DbCustom();
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);		
		
	$sql = "SELECT category.cat_id, category.name, category.seo_url
			FROM category, item, vend_man, item_to_category, item_to_vend_man 
			WHERE category.cat_id = item_to_category.cat_id
			AND item.item_id = item_to_category.item_id
			AND item.item_id = item_to_vend_man.item_id
			AND vend_man.vend_man_id = item_to_vend_man.vend_man_id
			AND vend_man.vend_man_id = '".$vend_man_id."'
			AND vend_man.profile_account_id = '".$_SESSION['profile_account_id']."'";
			
	$result = $dbCustom->getResult($db,$sql);			
	$i = 0;
	while($row = $result->fetch_object()) {
		$t[$i]['cat_id'] = $row->cat_id;
		$t[$i]['name'] = stripslashes($row->name);
		$t[$i]['seo_url'] = $row->seo_url;
		$i++;
	}
		
	return $t;
}


function check_email_address($email) {
	if (preg_match("/[\\000-\\037]/",$email)) {
      return false;
	}
	$pattern = "/^[-_a-z0-9\'+*$^&%=~!?{}]++(?:\.[-_a-z0-9\'+*$^&%=~!?{}]+)*+@(?:(?![-.])[-a-z0-9.]+(?<![-.])\.[a-z]{2,6}|\d{1,3}(?:\.\d{1,3}){3})(?::\d++)?$/iD";
	if(!preg_match($pattern, $email)){
      return false;
	}
	return true;
}

function stripAllSlashes($str){
	while(!(strpos($str, "\\")  === false)){
		$str = stripslashes($str);
	}
	return $str;
}

function getAvgTestimonialsRating(){
	$dbCustom = new DbCustom();
	$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
	$sql = "SELECT rating 
			FROM testimonial 
			WHERE hide = '0'
			AND rating > '0'
			AND type = 'testimonial'
			AND profile_account_id = '".$_SESSION['profile_account_id']."'";		
	$result = $dbCustom->getResult($db,$sql);		
	$rating_count = 0;
	$sum_rating = 0;
	while($row = $result->fetch_object()) {
		$rating_count++;
		$sum_rating += $row->rating; 
	}
	return round($sum_rating/$rating_count,1);
}


function getAvgTestimonialsRatingClass(){
	$ret = 5;
	$dbCustom = new DbCustom();
	$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
	$sql = "SELECT rating
			FROM testimonial 
			WHERE rating > '0'
			AND type != 'feedback'
			AND profile_account_id = '".$_SESSION['profile_account_id']."'";
	$result = $dbCustom->getResult($db,$sql);			
	$rating_count = 0;
	$sum_rating = 0;
	while($row = $result->fetch_object()) {
		$rating_count++;
		$sum_rating += $row->rating; 
	}
	//$numeric_rating = 	ceil($sum_rating/$rating_count);
	$numeric_rating = 	round($sum_rating/$rating_count,1);			
	return getRatingClass($numeric_rating);
}

function getNumItemReviews($item_id){
	$ret = 0;
	$dbCustom = new DbCustom();
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$sql = "SELECT count(item_review_id) as num_reviews
			FROM item_review 
			WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);
			
	if($result->num_rows > 0){			
		$object = $result->fetch_object();
		$ret = 	$object->num_reviews;			
	}
	return $ret;
}

function getNumItems($cat_id){
	$dbCustom = new DbCustom();
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$sql = "SELECT DISTINCT item.item_id
				FROM category, item, item_to_category 
				WHERE category.cat_id = item_to_category.cat_id
				AND item_to_category.item_id = item.item_id
				AND item.show_in_showroom = '1' 
				AND category.cat_id = '".$cat_id."'"; 
	$result = $dbCustom->getResult($db,$sql);
	return $result->num_rows;
}
	

function getCompanyChatLink(){
	$ret = array();
	$dbCustom = new DbCustom();
	$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
	$sql = "SELECT chat_url, chat_account, chat_show
			FROM contact_us
			WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
	$result = $dbCustom->getResult($db,$sql);
	if($result->num_rows){
		$object = $result->fetch_object();
		$ret['chat_url'] = $object->chat_url;
		$ret['chat_account'] = $object->chat_account;
		$ret['chat_show'] = $object->chat_show;	
	}else{
		$ret['chat_url'] = '';
		$ret['chat_account'] = '';
		$ret['chat_show'] = 0;			
	}
	return $ret;
}




function getBrandsByAlpha($q = ''){
	$brandList = array();
	if ($q != ''){
		if($q == "1-9"){ 
			$search_str = "[0-9]";
		}else{
			$search_str = $q;
		}
		$dbCustom = new DbCustom();
		$db = $dbCustom->getDbConnect(CART_N_DATABASE);
		$sql = "SELECT name, short_name ,brand_id  
				FROM brand 
				WHERE name REGEXP '^".$search_str."'
				AND profile_account_id = '".$_SESSION['profile_account_id']."'
				ORDER BY brand_id";
		$result = $dbCustom->getResult($db,$sql);		
		$num_items = $result->num_rows;
		$i = 0;
		while($row = $result->fetch_object()){
			//$ret[$i]['url'] = $_SERVER['DOCUMENT_ROOT']."/".getUrlFileName('shop')."/brand/".getUrlText($row->name)."/".$row->brand_id;
			$brandList[$i]['name'] = $row->name;
			$brandList[$i]['short_name'] = $row->short_name;			
			$brandList[$i]["brand_id"] = $row->brand_id;
			$i++;
		}
	}
	return $brandList;
}


function get_details_gallery($item_id){
	$item = new ShoppingCartItem;
	$dbCustom = new DbCustom();
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$gallery_img_array = array();
	$sql = "SELECT image.file_name
			FROM item_gallery, image
			WHERE item_gallery.img_id = image.img_id
			AND item_gallery.item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);					
	$block = '';
	if($result->num_rows > 0){
		$gallery_img_array[] = $item->getFileNameFromItemId($dbCustom,$item_id);		
		while($row = $result->fetch_object()){
			$gallery_img_array[] = $row->file_name;
		}
		$block .= "<ul class='product-image-thumbnails'>";
		foreach($gallery_img_array as $gallery_file_name){	
			$block .= "<li><a href='".$_SERVER['DOCUMENT_ROOT']."/saascustuploads/".$_SESSION['profile_account_id']."/tmp/pre-crop/".$gallery_file_name."' 
			class='thumbnail-link image-switch-thumb'>
			<img src='".$_SERVER['DOCUMENT_ROOT']."/saascustuploads/".$_SESSION['profile_account_id']."/cart/list/".$gallery_file_name."' alt='".$gallery_file_name."' /></a></li>";
		}
		$block .= "</ul>";
		
	}	
	return $block;
}

function usort_sorter($a, $b){
	if ($a['child_count'] == $b['child_count']) {
		return 0;
	}
	return ($a['child_count'] < $b['child_count']) ? 1 : -1;
}

function get_customer_name($user_id){
	
	$dbCustom = new DbCustom();
	$db = $dbCustom->getDbConnect(USER_DATABASE);
	
	$ret = '';
					
	$sql = "SELECT name
			FROM user
			WHERE id = '".$user_id."'";
	$result = $dbCustom->getResult($db,$sql);					

	if($result->num_rows > 0){
		$object = $result->fetch_object();
		$ret = $object->name;
	}
	
	return $ret;
}



function isSPAM($string, $max = 0) {
	$words = array(	
		"http", "www", ".com", ".mx", ".org", ".net", ".co.uk", ".jp", ".ch", ".info", ".me", ".mobi", ".us", ".biz", ".ca", ".ws", ".ag", 
		".com.co", ".net.co", ".com.ag", ".net.ag", ".it", ".fr", ".tv", ".am", ".asia", ".at", ".be", ".cc", ".de", ".es", ".com.es", ".eu", 
		".fm", ".in", ".tk", ".com.mx", ".nl", ".nu", ".tw", ".vg", "sex", "porn", "fuck", "buy", "free", "dating", "viagra", "money", "dollars", 
		"payment", "website", "poker", "cheap", "cialis", "pills", "infected", "clearance", "meet singles", "babes", "cash","и","ч","я","б ","л",
		"э","ф", "д", "й", "amoxicillin", "prescription", "drugs", "russia", "slovenia", "moldova", "vietnam", "gusta el"
		
	);
	$count = 0;    
    $string = strtolower($string);	
	if(is_array($words)) {
		foreach($words as $word) {
			$count += substr_count($string, $word);
		}
    }		
    return ($count > $max) ? 1 : 0;
}




?>
