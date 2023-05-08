<?php
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = "SELECT *
		FROM terms_of_use
		WHERE terms_of_use.terms_of_use_id = (SELECT MAX(terms_of_use_id) FROM terms_of_use WHERE profile_account_id = '".$_SESSION['profile_account_id']."')";
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$heading = stripslashes($object->heading);
	$content = stripslashes($object->content);
}else{
	$heading = '';	
	$content = '';
}


?>