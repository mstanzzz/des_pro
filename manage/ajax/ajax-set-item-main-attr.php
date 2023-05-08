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

$db = $dbCustom->getDbConnect(CART_N_DATABASE);	

$item_id  = isset($_GET['item_id'])? $_GET['item_id'] : 0;
$attr_id = isset($_GET['attr_id'])? $_GET['attr_id'] : 0;
$from  = isset($_GET['from'])? $_GET['from'] : '';
if(!is_numeric($attr_id)) $attr_id = 0;
if(!is_numeric($item_id)) $item_id = 0;

if($attr_id > 0 && $item_id > 0){

	$sql = "UPDATE item  
            SET main_attr_id = '".$attr_id."'
            WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);

	$sql = "UPDATE item  
            SET main_attr_id = '".$attr_id."'
            WHERE parent_item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);


}


echo $item_id;

?>

