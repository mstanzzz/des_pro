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
$from  = isset($_GET['from'])? $_GET['from'] : '';
$added_value = isset($_GET['added_value'])? $_GET['added_value'] : -1;
if(!is_numeric($added_value)) $added_value = -1;
if(!is_numeric($item_id)) $item_id = 0;

if($added_value > -1){

	$_SESSION["added_value_".$item_id] = $added_value;
	$sql = "UPDATE item  
            SET added_value = '".$added_value."'
            WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);

}


echo $item_id;

?>

