<?php

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = "SELECT *
		FROM blog
		WHERE blog.blog_id = (SELECT MAX(blog_id) 
							FROM blog 
							WHERE profile_account_id = '".$_SESSION['profile_account_id']."')";
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$home_id = $object->home_id;
	
	/*
	$img_1_id = $object->img_1_id;
	$img_2_id = $object->img_2_id;
	$img_3_id = $object->img_3_id;
	$img_1_fn =	get_file_name($dbCustom,$img_1_id,'site');	
	$img_2_fn =	get_file_name($dbCustom,$img_2_id,'site');	
	$img_3_fn =	get_file_name($dbCustom,$img_3_id,'site');	

	$top_1 = stripslashes($object->top_1);
	$top_2 = stripslashes($object->top_2);
	$top_3 = stripslashes($object->top_3);
	*/	
	$p_1_head = stripslashes($object->p_1_head);
	$p_1_text = stripslashes($object->p_1_text);
	$p_2_head = stripslashes($object->p_2_head);
	$p_2_text = stripslashes($object->p_2_text);
	$p_3_head = stripslashes($object->p_3_head); 
	$p_3_text = stripslashes($object->p_3_text);
	$p_4_head = stripslashes($object->p_4_head);
	$p_4_text = stripslashes($object->p_4_text); 
	$p_5_head = stripslashes($object->p_5_head);  
	$p_5_text = stripslashes($object->p_5_text); 
	$p_6_head = stripslashes($object->p_6_head);  
	$p_6_text = stripslashes($object->p_6_text); 
	$p_7_head = stripslashes($object->p_7_head);  
	$p_7_text = stripslashes($object->p_7_text);
	$p_8_head = stripslashes($object->p_8_head);  
	$p_8_text = stripslashes($object->p_8_text);
}else{
	$img_1_id = 0;
	$img_2_id = 0;
	$img_3_id = 0;
	$img_4_id = 0;
	$img_1_fn="";
	$img_2_fn="";
	$img_3_fn="";
	$top_1 = '';
	$top_2 = '';	
	$top_3 = '';
	$p_1_head = '';
	$p_1_text = '';
	$p_2_head = '';
	$p_2_text = '';
	$p_3_head = ''; 
	$p_3_text = '';
	$p_4_head = '';
	$p_4_text = ''; 
	$p_5_head = '';  
	$p_5_text = ''; 
	$p_6_head = '';  
	$p_6_text = ''; 
	$p_7_head = '';  
	$p_7_text = '';
	$p_8_head = '';  
	$p_8_text = '';
}

	
?>