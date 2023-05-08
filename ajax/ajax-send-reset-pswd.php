<?php 
if(strpos($_SERVER['REQUEST_URI'], 'solvitware/' )){    
	$real_root = $_SERVER['DOCUMENT_ROOT'].'/solvitware'; 
}elseif(strpos($_SERVER['REQUEST_URI'], 'storittek/' )){
	$real_root = $_SERVER['DOCUMENT_ROOT'].'/storittek';
}else{
	$real_root = $_SERVER['DOCUMENT_ROOT']; 	
}
require_once($real_root.'/includes/class.dbcustom.php');
$dbCustom = new DbCustom();
require_once($real_root.'/includes/config.php');

$ret = "n";

$email_addr = (isset($_GET["email_addr"]))? trim($_GET["email_addr"]) : '';

if($email_addr != ''){
	$db = $dbCustom->getDbConnect(USER_DATABASE);

	$sql = "SELECT password_salt FROM user 
	 		WHERE username = '".$email_addr."'";
	$result = $dbCustom->getResult($db,$sql);
	if($result->num_rows > 0){
		$object = $result->fetch_object();
		$link = SITEROOT."reset-password/".$object->password_salt.".html";

		$message= '';
		$message.= "Thank you for shopping at Closets To Go";
		$message.= "\n\n\r To re-set your password, click this link or paste it into your web browser:";
		$message.= "\n\n\r";
		$message .= $link;
		$message.= "\n\n\r";
		$subject = "Closets To Go Password Request";		

		$headers = "From: services@closetstogo.com";
		$headers .= "\r\n";
		//$headers .= "Content-type: text/html"; 
		//$headers .= "\r\n";
		$headers .= "CC: mark.stanz@gmail.com";

		$to      = $email_addr;		
		//$to = "mark.stanz@gmail.com";
		error_reporting(0);
		if(mail($to, $subject, $message, $headers)){
			$ret = "y";
		}else{
			
		}
		$ret = "y";
	}
}

echo $ret;


?>
