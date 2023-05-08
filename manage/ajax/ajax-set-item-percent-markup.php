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
$percent_markup = isset($_GET['percent_markup'])? $_GET['percent_markup'] : -1;
if(!is_numeric($percent_markup)) $percent_markup = -1;
if(!is_numeric($item_id)) $item_id = 0;

if($percent_markup > -1){

	$_SESSION["percent_markup_".$item_id] = $percent_markup;
	$sql = "UPDATE item  
            SET percent_markup = '".$percent_markup."'
            WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);		

}


echo $item_id;

?>

