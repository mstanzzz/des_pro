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
$price_wholesale = isset($_GET['price_wholesale'])? $_GET['price_wholesale'] : -1;
if(!is_numeric($price_wholesale)) $price_wholesale = 0;
if(!is_numeric($item_id)) $item_id = 0;

$_SESSION["price_wholesale_".$item_id] = $price_wholesale;

$sql = "UPDATE item  
		SET price_wholesale = '".$price_wholesale."'
		WHERE item_id = '".$item_id."'";
$result = $dbCustom->getResult($db,$sql);	


?>
