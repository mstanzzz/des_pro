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

require_once($real_root."/includes/config.php");

$name=(isset($_GET['name']))? addslashes(trim($_GET['name'])) : '';	
$price_tool_item_set_id=(isset($_GET['price_tool_item_set_id']))? trim($_GET['price_tool_item_set_id']) : 0;	
if(!is_numeric($price_tool_item_set_id)) $price_tool_item_set_id = 0;
	
$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	
$sql = "UPDATE price_tool_item_set	
		SET name = '".$name."'
		WHERE price_tool_item_set_id = '".$price_tool_item_set_id."'";	
		
$result = $dbCustom->getResult($db,$sql);


?>
