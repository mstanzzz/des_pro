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

$numerate  = isset($_GET['numerate'])? $_GET['numerate'] : 0;

$from  = isset($_GET['from'])? $_GET['from'] : '';

$type  = isset($_GET['type'])? $_GET['type'] : '';

if(!is_numeric($item_id)) $item_id = 0;
if(!is_numeric($numerate)) $numerate = 0;

if($type=='IS_ACT'){
			
	$_SESSION["is_active_checked_".$item_id] = $numerate;	
	$sql = "UPDATE item  
            SET active = '".$numerate."'
            WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);

}elseif($type=='call_FP'){
	
	$_SESSION["is_call_for_pricing_checked_".$item_id] = $numerate;	
	$sql = "UPDATE item  
            SET call_for_pricing = '".$numerate."'
            WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);	


}elseif($type=='SHICRT'){

	$_SESSION["is_show_in_cart_checked_".$item_id] = $numerate;	
	$sql = "UPDATE item  
            SET show_in_cart = '".$numerate."'
            WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);	

}elseif($type=='SHISRM'){

	$_SESSION["is_show_in_showroom_checked_".$item_id] = $numerate;	
	$sql = "UPDATE item  
            SET show_in_showroom = '".$numerate."'
            WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);	


}elseif($type=='SHITOOL'){

	$_SESSION["is_show_in_tool_checked_".$item_id] = $numerate;	
	$sql = "UPDATE item  
            SET show_in_tool = '".$numerate."'
            WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);	


}elseif($type=='SSTDESBTN'){

	$_SESSION["is_show_start_design_btn_checked_".$item_id] = $numerate;	
	$sql = "UPDATE item  
            SET show_start_design_btn = '".$numerate."'
            WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);	


}elseif($type=='SSTDEREQSBTN'){

	$_SESSION["is_show_design_request_btn_checked_".$item_id] = $numerate;	
	$sql = "UPDATE item  
            SET show_design_request_btn = '".$numerate."'
            WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);	


}elseif($type=='FREESHIP'){

	$_SESSION["is_free_shipping_checked_".$item_id] = $numerate;	
	$sql = "UPDATE item  
            SET is_free_shipping = '".$numerate."'
            WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);	


}elseif($type=='INHPRCTOOL'){

	$_SESSION["is_in_house_price_tool_checked_".$item_id] = $numerate;	
	$sql = "UPDATE item  
            SET in_house_price_tool = '".$numerate."'
            WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);	


	
}else{
	$_SESSION["is_checked_".$item_id] = $numerate;
}


echo $from."  ".$numerate;

?>
