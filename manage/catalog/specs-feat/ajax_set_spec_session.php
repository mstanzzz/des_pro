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

require_once($real_root.'/manage/admin-includes/manage-includes.php');

if(isset($_GET['action'])){ 
	$action = stripslashes($_GET['action']);
}else{
	$action=0;
}


if(isset($_GET['svg_id'])){ 
	$_SESSION["temp_fields"]['svg_id'] = stripslashes($_GET['svg_id']);
}
if(isset($_GET['title'])){ 
	$_SESSION["temp_fields"]['title'] = stripslashes($_GET['title']);
}
if(isset($_GET['sub_title'])){ 
	$_SESSION["temp_fields"]['sub_title'] = stripslashes($_GET['sub_title']);
}
if(isset($_GET['sub_1_img_id'])){
	$_SESSION["temp_fields"]['sub_1_img_id'] = $_GET['sub_1_img_id'];
}
if(isset($_GET['sub_2_img_id'])){ 
	$_SESSION["temp_fields"]['sub_2_img_id'] = $_GET['sub_2_img_id'];
}
if(isset($_GET['sub_3_img_id'])){ 
	$_SESSION["temp_fields"]['sub_3_img_id'] = $_GET['sub_3_img_id'];
}
if(isset($_GET['short_description'])){
	$_SESSION["temp_fields"]['short_description'] = stripslashes($_GET['short_description']);
}
if(isset($_GET['description'])){
	$_SESSION["temp_fields"]['description'] = stripslashes($_GET['description']);
}
if(isset($_GET['sub_1_title'])){ 
	$_SESSION["temp_fields"]['sub_1_title'] = stripslashes($_GET['sub_1_title']);
}
if(isset($_GET['sub_2_title'])){ 
	$_SESSION["temp_fields"]['sub_2_title'] = stripslashes($_GET['sub_2_title']);
}
if(isset($_GET['sub_3_title'])){ 
	$_SESSION["temp_fields"]['sub_3_title'] = stripslashes($_GET['sub_3_title']);
}
if(isset($_GET['sub_1_text'])){ 
	$_SESSION["temp_fields"]['sub_1_text'] = stripslashes($_GET['sub_1_text']);
}
if(isset($_GET['sub_2_text'])){
	$_SESSION["temp_fields"]['sub_2_text'] =stripslashes( $_GET['sub_2_text']);
}
if(isset($_GET['sub_3_text'])){ 
	$_SESSION["temp_fields"]['sub_3_text'] = stripslashes($_GET['sub_3_text']);
}
if(isset($_GET['text'])){
	$_SESSION["temp_fields"]['text'] = stripslashes($_GET['text']);
}
if(isset($_GET['spec_materials'])){
	$_SESSION["temp_fields"]['spec_materials'] = stripslashes($_GET['spec_materials']);
}
if(isset($_GET['spec_tips'])){ 
	$_SESSION["temp_fields"]['spec_tips'] = stripslashes($_GET['spec_tips']);
}
if(isset($_GET['useful_link_1'])){ 
	$_SESSION["temp_fields"]['useful_link_1'] = stripslashes($_GET['useful_link_1']);
}
if(isset($_GET['useful_link_2'])){ 
	$_SESSION["temp_fields"]['useful_link_2'] = stripslashes($_GET['useful_link_2']);
}
if(isset($_GET['useful_link_3'])){ 
	$_SESSION["temp_fields"]['useful_link_3'] = stripslashes($_GET['useful_link_3']);
}
if(isset($_GET['spec_color_1'])){ 
	$res = str_replace("#","",$_GET['spec_color_1']);
	$_SESSION["temp_fields"]['spec_color_1'] = "#".$res;
}
if(isset($_GET['spec_color_2'])){ 
	$res = str_replace("#","",$_GET['spec_color_2']);
	$_SESSION["temp_fields"]['spec_color_2'] = "#".$res;
}
if(isset($_GET['spec_color_3'])){ 
	$res = str_replace("#","",$_GET['spec_color_3']);
	$_SESSION["temp_fields"]['spec_color_3'] = "#".$res;
}
if(isset($_GET['img_id'])){ 
	$_SESSION['img_id'] = stripslashes($_GET['img_id']);
}else{
	$_SESSION['img_id'] = 0;	
}

if(!isset($_SESSION['img_type']))$_SESSION['img_type']="";

if($_SESSION['img_type'] == "gallery"){
	$_SESSION['temp_gallery'][] = $_SESSION['img_id'];
}


?>



