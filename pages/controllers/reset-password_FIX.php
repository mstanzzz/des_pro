<?php
$msg='';
$is_reset=0;

if(isset($_POST['password_salt'])){
	$new_password=isset($_POST['new_password'])? trim($_POST['new_password']): '';
	$old_salt=isset($_POST['password_salt'])? trim($_POST['password_salt']): '';	
	$db = $dbCustom->getDbConnect(USER_DATABASE);
	$sql = "SELECT username
			FROM user WHERE password_salt = '".$old_salt."'";
	$result = $dbCustom->getResult($db,$sql);	
	if($result->num_rows>0){	
	
		$object=$result->fetch_object();
		$username = $object->username;
		
		$new_salt = $lgn->generateSalt();
		$new_hash = $lgn->get_hash($new_password, $new_salt);		
		
		$sql = "UPDATE user 
				set password_salt='".$new_salt."', password_salt='".$new_hash."'
				WHERE username='".$username."'";
		$res = $dbCustom->getResult($db,$sql);
		$is_reset=1;
	
		$lgn->login($dbCustom,$username,$new_password);

	}else{
		$msg = "Error";
	}

}



$password_salt=(isset($_GET["ps"]))? trim($_GET["ps"]) : ''; 
$deid=(isset($_GET["deid"]))? trim($_GET["deid"]) : 0; 

?>