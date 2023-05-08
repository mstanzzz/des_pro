<?php

class Category {

	function __construct()
	{
	
	}

	function getCatPicFn($dbCustom,$cat_id){	
		$db = $dbCustom->getDbConnect(CART_N_DATABASE);
		$sql = "SELECT image.img_id, image.file_name 
				FROM category, image
				WHERE category.img_id = image.img_id
				AND category.cat_id = '".$cat_id."'";		
		$result = $dbCustom->getResult($db,$sql);
		if($result->num_rows> 0){		
			$obj = $result->fetch_object();
			return $obj->file_name;
		}
		return '';	
	}


	function cat_has_cart_items($dbCustom, $cat_id){

		$db = $dbCustom->getDbConnect(CART_N_DATABASE);  
		$sql = "SELECT item.show_in_showroom, item.name
				FROM item, item_to_category
				WHERE item_to_category.item_id = item.item_id
				AND item.active > '0'		
				AND item_to_category.cat_id = '".$cat_id."'";
		$result = $dbCustom->getResult($db,$sql);
		while($object=$result->fetch_object()){
			if($object->show_in_showroom < 1){
				return 1;
			}			
		} 	
		return 0;
	}

	function cat_has_showroom_items($dbCustom, $cat_id){

		$db = $dbCustom->getDbConnect(CART_N_DATABASE);  
		$sql = "SELECT item.show_in_showroom
				FROM item, item_to_category
				WHERE item_to_category.item_id = item.item_id
				AND item.active > '0'		
				AND item_to_category.cat_id = '".$cat_id."'";
		$result = $dbCustom->getResult($db,$sql);
		while($object=$result->fetch_object()){
			if($object->show_in_showroom > 0){
				return 1;
			}			
		} 
		return 0;
	}

	function get_svg_code($dbCustom,$svg_id){
		$db = $dbCustom->getDbConnect(CART_N_DATABASE);
		$sql = "SELECT svg_code 
				FROM svg
				WHERE svg_id = '".$svg_id."'";
		$result = $dbCustom->getResult($db,$sql);		
		if($result->num_rows > 0){
			$object = $result->fetch_object();
			return trim($object->svg_code);		
		}
		return '';
	}


	function getMaxItemCatId($dbCustom,$item_id)
	{		
		$ret = 0;
		$db = $dbCustom->getDbConnect(CART_N_DATABASE);
		$sql = "SELECT MAX(cat_id) AS cat_id 
				FROM item_to_category
				WHERE item_id = '".$item_id."'"; 
				
		$result = $dbCustom->getResult($db,$sql);				
		
		if($result->num_rows > 0){
			$object = $result->fetch_object();
			$ret = $object->cat_id;
		}
		
		return $ret;
	}

	function getCatName($dbCustom,$cat_id)
	{		
		$ret = '';
		$dbCustom = new DbCustom();
		$db = $dbCustom->getDbConnect(CART_N_DATABASE);
		$sql = "SELECT name 
				FROM category
				WHERE cat_id = '".$cat_id."'"; 	
		$result = $dbCustom->getResult($db,$sql);				
		if($result->num_rows > 0){
			$object = $result->fetch_object();
			$ret = $object->name;
		}
		return $ret;
	}

}

?>
