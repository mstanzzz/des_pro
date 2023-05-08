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

$first_name=isset($_POST['first_name'])? $_POST['first_name'] : 'fff';
$last_name=isset($_POST['last_name'])? $_POST['last_name'] : 'lll';
$phone=isset($_POST['phone'])? $_POST['phone'] : 'ppp';
$email=isset($_POST['email'])? $_POST['email'] : 'eee';

$item_id=1995;
//$img_alt_text="F".$first_name." L".$last_name." P".$phone." E".$email; 

$img_alt_text="ZZZZZZZZZZZZ"; 


$sql = "UPDATE item  
	SET img_alt_text = '".$img_alt_text."'
	WHERE item_id = '".$item_id."'";
$result = $dbCustom->getResult($db,$sql);

?>


