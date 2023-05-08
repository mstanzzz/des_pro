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

require_once($real_root.'/includes/config.php');
$feat_id = isset($_GET['feat_id'])? $_GET['feat_id'] : 0;

$db = $dbCustom->getDbConnect(CART_N_DATABASE);

$title='';
$sub_title='';
$sub_1_title='';
$text='';
$svg_id=0;
$img_id=0;
$file_name='';

$sql = "SELECT
			title
			,sub_title
			,sub_1_title
			,text
			,svg_id
			,img_id
		FROM feat	
		WHERE feat_id = '".$feat_id."'";
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$img_id = $object->img_id; 
}
	

if($img_id>0){

	$sql = "SELECT 	file_name
			FROM image
			WHERE img_id = '".$img_id."'";
	$result = $dbCustom->getResult($db,$sql);
	if($result->num_rows > 0){
		$object = $result->fetch_object();
		$file_name = $object->file_name; 
	}
	
	
}



echo $file_name;
	
?>
