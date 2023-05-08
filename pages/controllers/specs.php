<?php 

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

$sql = "SELECT *
		FROM specs_content
		WHERE specs_content_id = (SELECT MAX(specs_content_id) FROM specs_content WHERE profile_account_id = '".$_SESSION['profile_account_id']."')";		
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$content = $object->content;
	$sidebar_heading = $object->sidebar_heading;
	$sidebar_content = $object->sidebar_content;
	$img_id = $object->img_id;
	$img_alt_text = $object->img_alt_text;
}else{
	$content = '';
	$sidebar_heading = '';
	$sidebar_content = '';
	$img_id = 0;
	$img_alt_text = '';
}

$block = '';
			


?>
