<?php
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = "SELECT *
		FROM request_design
		WHERE request_design.request_design_id = (SELECT MAX(request_design_id) 
			FROM request_design 
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

if($user_id>0){

	$cust_addr_array = $lgn->getAccMultiAddr($dbCustom,$user_id);
	if(isset($cust_addr_array[0]['address_1'])){
		$_SESSION['dr']['address']=$cust_addr_array[0]['address_1'];
	}else{
		$_SESSION['address']='';
	}
	if(isset($cust_addr_array[0]['city'])){
		$_SESSION['city']=$cust_addr_array[0]['city'];
	}else{
		$_SESSION['city']='';		
	}
	if(isset($cust_addr_array[0]['state'])){
		$_SESSION['state']=$cust_addr_array[0]['state'];
	}else{
		$_SESSION['state']='';		
	}
	if(isset($cust_addr_array[0]['zip'])){
		$_SESSION['zip']=$cust_addr_array[0]['zip'];
	}else{
		$_SESSION['zip']='';		
	}
	if(isset($cust_addr_array[0]['phone'])){
		$_SESSION['phone']=$cust_addr_array[0]['phone'];
	}else{
		$_SESSION['phone']='';		
	}
	if(isset($cust_addr_array[0]['email'])){
		$_SESSION['email']=$cust_addr_array[0]['email'];
	}else{
		$_SESSION['email']='';		
	}
}else{
	

}

	if(isset($_SESSION['address_1'])){ 
		$_SESSION['dr']['address']=$_SESSION['address_1']; 
	}
	if(!isset($_SESSION['dr']['first_name']))$_SESSION['dr']['first_name']="";
	if(!isset($_SESSION['dr']['last_name']))$_SESSION['dr']['last_name']="";
	if(!isset($_SESSION['dr']['email']))$_SESSION['dr']['email']="";
	if(!isset($_SESSION['dr']['zip']))$_SESSION['dr']['zip']="";
	if(!isset($_SESSION['dr']['address']))$_SESSION['dr']['address']="";
	if(!isset($_SESSION['dr']['phone']))$_SESSION['dr']['phone']="";
	if(!isset($_SESSION['dr']['city']))$_SESSION['dr']['city']="";
	if(!isset($_SESSION['dr']['state']))$_SESSION['dr']['state']="";


?>