<?php
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = "SELECT *
		FROM we_design
		WHERE we_design.we_design_id = (SELECT MAX(we_design_id) 
			FROM we_design 
			WHERE profile_account_id = '".$_SESSION['profile_account_id']."')";
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$img_1_id=$object->img_1_id;
	$p_1_head=$object->p_1_head;
	$p_1_text=$object->p_1_text;
	$p_2_head=$object->p_2_head;
	$p_2_text=$object->p_2_text;
	
}else{
	$img_1_id = 0;
	$p_1_head="";
	$p_1_text="";
	$p_2_head="";
	$p_3_text="";

}



if(!isset($_SESSION['dr']['first_name']))$_SESSION['dr']['first_name']="";
if(!isset($_SESSION['dr']['last_name']))$_SESSION['dr']['last_name']="";
if(!isset($_SESSION['dr']['email']))$_SESSION['dr']['email']="";
if(!isset($_SESSION['dr']['zip']))$_SESSION['dr']['zip']="";
if(!isset($_SESSION['dr']['address']))$_SESSION['dr']['address']="";
if(!isset($_SESSION['dr']['phone']))$_SESSION['dr']['phone']="";
if(!isset($_SESSION['dr']['city']))$_SESSION['dr']['city']="";
if(!isset($_SESSION['dr']['state']))$_SESSION['dr']['state']="";


$img_id="0";
$sql = "SELECT file_name
		FROM image
		WHERE img_id = '".$img_1_id."'";				
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$hero_file_name = $object->file_name;
}else{
	$hero_file_name = '';
}


?>