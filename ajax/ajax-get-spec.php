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
$spec_id = isset($_REQUEST['spec_id'])? $_REQUEST['spec_id'] : 0;
//echo "spec_id;  ".$spec_id;
//echo "<br />";

$db = $dbCustom->getDbConnect(CART_N_DATABASE);

$title='';
$sub_title='';
$sub_1_title='';
$sub_2_title='';
$sub_3_title='';
$sub_1_text = '';
$sub_2_text = '';
$sub_3_text = '';
$svg_id=0;
$sub_1_img_id = 0; 
$sub_2_img_id = 0; 
$sub_3_img_id = 0; 

$file_name_1 = ''; 
$file_name_2 = ''; 
$file_name_3 = ''; 


$sql = "SELECT title
			,sub_title
			,sub_1_title
			,sub_2_title
			,sub_3_title
			,sub_1_text
			,sub_2_text
			,sub_3_text
			,svg_id
			,sub_1_img_id
			,sub_2_img_id
			,sub_3_img_id
		FROM spec	
		WHERE spec_id = '".$spec_id."'";
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$title = $object->title; 
	$sub_title = $object->sub_title; 
	$sub_1_title = $object->sub_1_title; 
	$sub_2_title = $object->sub_2_title; 
	$sub_3_title = $object->sub_3_title; 
	$sub_3_text = $object->sub_1_text; 
	$sub_2_text = $object->sub_2_text; 
	$sub_3_text = $object->sub_3_text; 
	$svg_id = $object->svg_id; 
	$sub_1_img_id = $object->sub_1_img_id; 
	$sub_2_img_id = $object->sub_2_img_id; 
	$sub_3_img_id = $object->sub_3_img_id; 
}

if($sub_1_img_id>0){
	$sql = "SELECT 	file_name
			FROM image
			WHERE img_id = '".$sub_1_img_id."'";
	$result = $dbCustom->getResult($db,$sql);
	if($result->num_rows > 0){
		$object = $result->fetch_object();
		$file_name_1 = $object->file_name; 
	}
}

if($sub_2_img_id>0){
	$sql = "SELECT 	file_name
			FROM image
			WHERE img_id = '".$sub_2_img_id."'";
	$result = $dbCustom->getResult($db,$sql);
	if($result->num_rows > 0){
		$object = $result->fetch_object();
		$file_name_2 = $object->file_name; 
	}
}

if($sub_2_img_id>0){
	$sql = "SELECT 	file_name
			FROM image
			WHERE img_id = '".$sub_3_img_id."'";
	$result = $dbCustom->getResult($db,$sql);
	if($result->num_rows > 0){
		$object = $result->fetch_object();
		$file_name_3 = $object->file_name; 
	}
}




$block = '';
$block.="<div class='wrap-content d-flex flex-wrap' style='background:#DDD2ED;'>";

$block.="<div class='parent_romb'>";
$block.="<span class='romb'></span>";
$block.="</div>";

$block.="<div class='tab-content__specifications--description-content mobile-padding__a'>";
	$block.="<img width='180px' src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$file_name_1."' alt='' class='img-fluid'>";
		$block.="<div class='tab-content__specifications--description-text'>";
		$block.="<p class='heading'>";
		$block.=$sub_1_title;
		$block.="</p>";
		$block.="<p>";
		$block.=$sub_1_text;
		$block.="</p>";
	$block.="</div>";
$block.="</div>";
$block.="<div class='tab-content__specifications--description-content mobile-padding__a'>";
	$block.="<img width='180px' src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$file_name_2."' alt='' class='img-fluid'>";
		$block.="<div class='tab-content__specifications--description-text'>";
		$block.="<p class='heading'>";
		$block.=$sub_2_title;
		$block.="</p>";
		$block.="<p>";
		$block.=$sub_2_text;
		$block.="</p>";
	$block.="</div>";
$block.="</div>";
$block.="<div class='tab-content__specifications--description-content mobile-padding__a'>";
	$block.="<img width='180px' src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$file_name_3."' alt='' class='img-fluid'>";
		$block.="<div class='tab-content__specifications--description-text'>";
		$block.="<p class='heading'>";
		$block.=$sub_3_title;
		$block.="</p>";
		$block.="<p>";
		$block.=$sub_3_text;
		$block.="</p>";
	$block.="</div>";
$block.="</div>";


$block.="</div>";

$block.="<img id='img-from-icons3 ";
$block.="src='".SITEROOT."images/showroom-detail-view-product.png' class='img-fluid d-none' alt='showroom-detail-view-product'>";

$block.="</div>";





echo $block;
?>

