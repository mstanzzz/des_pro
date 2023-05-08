<?php
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = "SELECT *
		FROM about_us
		WHERE about_us.about_us_id = (SELECT MAX(about_us_id) 
			FROM about_us 
			WHERE profile_account_id = '".$_SESSION['profile_account_id']."')";
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$img_1_id = $object->img_1_id;
	$img_2_id = $object->img_2_id;
	$img_3_id = $object->img_3_id;
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
	$p_9_head = stripslashes($object->p_9_head);  
	$p_9_text = stripslashes($object->p_9_text);
	$y_1=$object->y_1;	
	$y_2=$object->y_2;	
	$y_3=$object->y_3;	
	$y_4=$object->y_4;	
	$y_5=$object->y_5;	
	//$y_6=$object->y_6;
	$y_6 = '';

}else{
	$img_1_id = 0;
	$img_2_id = 0;
	$img_3_id = 0;
	$top_1 = '';
	$top_2 = '';
	$top_3 = '';
	$p_1_head = '';	
	$p_1_text = '';
	$p_2_head = "";
	$p_2_text = "";
	$p_3_head = ""; 
	$p_3_text = "";
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
	$p_9_head = '';  
	$p_9_text = '';
	$y_1 = '';	
	$y_2 = '';	
	$y_3 = '';	
	$y_4 = '';	
	$y_5 = '';	
	$y_6 = '';
	
}



//$img_str = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cms";

$img_1_fn = get_file_name($dbCustom,$img_1_id,'site');
$img_2_fn = get_file_name($dbCustom,$img_2_id,'site');
$img_3_fn = get_file_name($dbCustom,$img_3_id,'site');

/*
echo $img_1_id;
echo "<br />";
echo $img_2_id;
echo "<br />";
echo $img_3_id;
echo "<br />";
echo "<br />";
echo "<br />";
echo $img_1_fn;
echo "<br />";
echo $img_2_fn;
echo "<br />";
echo $img_3_fn;
exit;
*/
?>

