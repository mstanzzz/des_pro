<?php
$msg='';
$is_reset=0;
$is_logged_in=0;
if(isset($_POST['password_salt'])){
	$password_new=isset($_POST['password_new'])? trim($_POST['password_new']): '';
	$old_salt=isset($_POST['password_salt'])? trim($_POST['password_salt']): '';	
	
	$db = $dbCustom->getDbConnect(USER_DATABASE);
	$sql = "SELECT username, password_salt 
			FROM user 
			WHERE password_salt = '".$old_salt."'";
	$res = $dbCustom->getResult($db,$sql);			
	if($res->num_rows > 0){
		$obj = $res->fetch_object();
		$username = $obj->username;		
		$password_salt = $obj->password_salt;		
		//echo "username ".$username;
		//echo "<br />";
		//echo "password_salt ".$password_salt;
		//echo "<br />";
		if($lgn->resetPassword($dbCustom,$password_new, $username)){
			$is_reset=1;
			$msg="Your Password has been Updated";
		}
		if($is_reset>0){			
			if($lgn->login($dbCustom,$username,$password_new)){
				$is_logged_in=1;
			}		
		}
		
		
		//echo $is_reset;
		
	}else{
		$msg = "Error";
	}

}




?>