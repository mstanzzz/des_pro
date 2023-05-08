<?php
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

$reset_pswd_link='';

if(isset($_POST['request_consult'])){
	$comments = isset($_POST['comments'])? addslashes(trim($_POST['comments'])): "";
	$name = $_SESSION['name'] = isset($_POST['name'])? addslashes(trim($_POST['name'])): "";
	$email = $_SESSION['address_1'] = isset($_POST['email'])? addslashes(trim($_POST['email'])): "";
	$address_one = $_SESSION['email'] = isset($_POST['address_1'])? addslashes(trim($_POST['address_1'])): "";
	$address_two = $_SESSION['address_2'] = isset($_POST['address_2'])? addslashes(trim($_POST['address_2'])): "";
	$city = $_SESSION['city'] = isset($_POST['city'])? addslashes(trim($_POST['city'])): "";
	$state = $_SESSION['state'] = isset($_POST['state'])? trim($_POST['state']): "";
	$zip = $_SESSION['zip'] = isset($_POST['zip'])? addslashes(trim($_POST['zip'])): "";
	$phone = $_SESSION['phone'] = isset($_POST['phone'])? addslashes(trim($_POST['phone'])): "";
	$how_did_you_hear = isset($_POST['how_did_you_hear'])? $_POST['how_did_you_hear']: "";
	$storage_areas = isset($_POST['storage_areas'])? $_POST['storage_areas']: array();
	$proposed_finish_date = $_SESSION['proposed_finish_date'] = isset($_POST['proposed_finish_date'])? addslashes(trim($_POST['proposed_finish_date'])): 0;
	$mailing_list = isset($_POST['mailing_list'])? $_POST['mailing_list']: 0;
	$mobile_mailing_list = isset($_POST['mobile_mailing_list'])? $_POST['mobile_mailing_list']: 0;
	if($mobile_mailing_list>0)$mailing_list=1;
	if(strlen($mobile_mailing_list)>4){
		$mailing_list = $mobile_mailing_list;
	}
	$k=0;

	if(!is_array($storage_areas))$storage_areas=array();
	$str='';
	foreach($storage_areas as $k=>$v){
		if(isset($v)){
			if($k>0){
				$str.= ','.$v;
			}else{
				$str.= $v;
			}
		}
	}
	$storage_areas=$str;
	$date_entered = time();
	if($user_id==0){
		$new_cust=1;
		$password = "levantoutofchaoslogos";
		$username = $email;		
		$lgn->create_user($dbCustom, $password, $username, $first_name, $last_name);
		$password_salt = $_SESSION['password_salt'];
	}else{
		$password_salt='';
		$new_cust=0;
	}
	if($user_id>0){	
		$lgn->autologin($dbCustom, $user_id, $email);
	}

	$stmt = $db->prepare("INSERT INTO in_home_consult_request
		(name
		,email
		,address_one
		,address_two
		,city
		,state
		,zip
		,phone
		,how_did_you_hear
		,comments
		,storage_areas
		,proposed_finish_date
		,user_id
		,mailing_list
		,date_entered
		,profile_account_id)
		VALUES
		(?	
		,?
		,?		
		,?	
		,?	
		,?
		,?
		,?
		,?
		,?
		,?
		,?
		,?
		,?
		,?
		,?)"); 
		//echo 'Error-1 '.$db->error;
		
	if(!$stmt->bind_param("ssssssssssssiiii",
		$name
		,$email
		,$address_one
		,$address_two
		,$city
		,$state
		,$zip
		,$phone
		,$how_did_you_hear
		,$comments
		,$storage_areas
		,$proposed_finish_date
		,$user_id
		,$mailing_list
		,$date_entered
		,$_SESSION['profile_account_id'])){		
		echo 'Error-2 '.$db->error;
	}else{
		$stmt->execute();
		$stmt->close();
		$the_id=$db->insert_id;
		$msg = "Your message has been sent";		
	}
	

	$sql = "SELECT DISTINCT file_name 
			FROM temp_upload 
			WHERE temp_id = '".$_SESSION['temp_id']."'
			AND profile_account_id = '".$_SESSION["profile_account_id"]."'";
	$img_result = $dbCustom->getResult($db,$sql);

	//if(!file_exists($real_root."/user_uploads/".$_SESSION['profile_account_id']."/")){
		//mkdir($real_root."/user_uploads/".$_SESSION['profile_account_id']."/" , $mode = 0777 );
	//}
	
	while($row = $img_result->fetch_object()){
		$from_file = $real_root."/temp_uploads/".$_SESSION['temp_id']."/".$row->file_name;
		if(file_exists($from_file)){
			$file_name = str_replace (" ", "_", $row->file_name);
			$file_name = $_SESSION['temp_id']."_".$file_name;
			echo $file_name;
			echo "<br />";
			if(copy($from_file , $real_root."/user_uploads/".$_SESSION['profile_account_id']."/".$file_name)){
				$sql = "INSERT INTO in_home_consult_request_image 
					(file_name, request_id, temp_id) 
					VALUES 
					('".$file_name."', '".$the_id."', '".$_SESSION['temp_id']."')";				
				$r = $dbCustom->getResult($db,$sql);
			}
		}
	}
		
	if(file_exists($real_root."/temp_uploads/".$_SESSION['temp_id'])) {
		deleteDir($real_root."/temp_uploads/".$_SESSION['temp_id']);
	}

	
	// send to customer
	//	Free In Home Consultation Request
	$message = '';
	$link = SITEROOT."reset-password-".$password_salt."/".$the_id.".html";
	$message .= "CONGRATULATIONS ".$name."\n\n\r"; 
	$message.= "Thank you for shopping at Closets To Go";
	$message.= "\n\r Your request for a free in home consultation has been sent to ".$_SESSION['profile_company'].".";  
	if($new_cust>0){

		$msg = "";
		
		$msg.= "In order for you to monitor your request, ";
		$msg .= "an anonamous account has been initiated on your behalf.";
		$msg .= "\n\n\r Please set your password by clicking this link or pasting into"; 
		$msg .= " your web browser.";  
		$message.= $msg;	
		$msg.= "\n\n\r";
		$msg.= $link;
		$msg.= "\n\n\r";
		 	
	}
		$reset_pswd_link=$link;
	
	$subject = "Free In Home Consultation Request for".$_SESSION['profile_company'];				
	$headers = "From: services@closetstogo.com";
	$headers .= "\r\n";
	$headers .= "CC: mark.stanz@gmail.com";	
	$to = $email;

	if($site != "local"){	
		error_reporting(0);
		if(mail($to, $subject_c, $message, $headers)){
			$success = 1;	
		}
	}	

	$message = '';
	$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>First Name:</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$first_name."</font></div>";
	$message .= "<div style='clear:both;'></div>";
	$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Last Name:</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$last_name."</font></div>";
	$message .= "<div style='clear:both;'></div>";
	$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Email Address:</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$email."</font></div>";
	$message .= "<div style='clear:both;'></div>";

	$subject_c = "Free In Home Consultation Request";		
	$headers = "Content-type: text/html; charset=iso-8859-1";	
	$headers .= "\r\n";
	$headers .= "From: help@closetstogo.com";
	$headers .= "\r\n";
	$headers .= "Return-path: help@closetstogo.com";
	$headers .= "\r\n";
	$headers .= "CC: mark@nazardesigns.com";
	$headers .= "\r\n";
	//$headers .= "Bcc: alicia@closetstogo.com";
	//$headers .= "\r\n";

	//$to = 'jeff@closetstogo.com';
	//$to = 'services@closetstogo.com ';
	$to = array();
	//$to[0]="mark@nazardesigns.com";
	//$to[1]="mstanzzz@hotmail.com";
	//$to[2]="mstanzzz@yahoo.com";
	//$to[3]="mark.stanz@gmail.com";

	$to[0]="help@closetstogo.com";
	$to[1]="jeff@closetstogo.com";
	$to[2]="kristi@closetstogo.com"; 
	$to[3]="melanie@closetstogo.com";
	$to[4]="designer@closetstogo.com";


	if($site != "local"){	
		error_reporting(0);
		foreach($to as $val){
			if(mail($val, $subject, $message, $headers)){
				$success = 1;	
			}
		}
	}	

}





if(!isset($_SESSION['first_name']))$_SESSION['first_name']='';	
if(!isset($_SESSION['last_name']))$_SESSION['last_name']='';	
if(!isset($_SESSION['email']))$_SESSION['email']='';	

if($user_id>0 && !isset($_POST['request_consult'])){
	
	$cust_addr_array = $lgn->getAccMultiAddr($dbCustom,$user_id);
	if(isset($cust_addr_array[0]['address_1'])){
		$_SESSION['address_1']=$cust_addr_array[0]['address_1'];
	}else{
		$_SESSION['address_1']='';
	}
	if(isset($cust_addr_array[0]['address_2'])){
		$_SESSION['address_2']=$cust_addr_array[0]['address_2'];
	}else{
		$_SESSION['address_2']='';		
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
}

?>

