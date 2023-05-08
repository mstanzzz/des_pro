<?php
$msg='';
if(isset($_POST['businessName'])){

	$business_name=isset($_POST['business_name'])? trim(addslashes($_POST['business_name'])): "";
	$website=isset($_POST['website'])? trim(addslashes($_POST['website'])): "";
	$first_name=isset($_POST['first_name'])? trim(addslashes($_POST['first_name'])): "";
	$last_name=isset($_POST['last_name'])? trim(addslashes($_POST['last_name'])): "";
	$name=$first_name." ".$last_name;
	$phone=$_SESSION['dr']['phone'] = isset($_POST['phone'])? trim(addslashes($_POST['phone'])): "";
	$email=$_SESSION['dr']['email'] = isset($_POST['email'])? trim(addslashes($_POST['email'])): "";
	$address=$_SESSION['dr']['address'] = isset($_POST['address'])? trim(addslashes($_POST['address'])): "";
	$license=$_SESSION['dr']['license'] = isset($_POST['license'])? trim(addslashes($_POST['license'])): "";
	$interested=$_SESSION['dr']['interested'] = isset($_POST['interested'])? trim(addslashes($_POST['interested'])): "";
	$comment=$_SESSION['dr']['comment'] = isset($_POST['comment'])? trim(addslashes($_POST['comment'])): "";

	if($user_id==0){
		$new_cust=1;
		$password = "levantoutofchaoslogos";
		$username = $email;		
		$lgn->create_user($dbCustom, $password, $username, $first_name, $last_name);
		$_SESSION['ctg_cust_id'] = $user_id = $user_id = $lgn->getUserIdByEmail($dbCustom,$email);
	}

	if($user_id>0){	
		$lgn->autologin($dbCustom, $user_id, $email);
	}


	$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

	$stmt = $db->prepare("INSERT INTO professional
		(business_name
		,website
		,first_name
		,last_name
		,name
		,phone
		,email
		,address
		,license
		,interested
		,comment
		,created
		,user_id
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
		,?)"); 	
	
	echo 'Error-1 '.$db->error;

	if(!$stmt->bind_param("sssssssssssiii",
		$business_name
		,$website
		,$first_name
		,$last_name		
		,$name
		,$phone
		,$email
		,$address
		,$license
		,$interested
		,$comment
		,$ts
		,$user_id
		,$_SESSION['profile_account_id'])){		
		echo 'Error-2 '.$db->error;
	}else{
		$stmt->execute();		
		$the_id=$db->insert_id;		
		$stmt->close();
		$msg = "Your request has been submitted";
		
	}
	$message='';
	
	$message .= "CONGRATULATIONS ".$name."\n\n\r"; 
	$message.= "Thank you for your interest in Closets To Go";
	$message.= "\n\n\r You have been automatically registered with ".$_SESSION['profile_company'].".";  
	$message.= "Please re-set your password, click this link or paste it into your web browser:";
	$message.= "Please re-set your password, click \"Return To Closets To Go\" or paste the URL  
	into your web browser:";
	$message.= "\n\n\r";
	$message .= "<a href='".SITEROOT."'>Return To Closets To Go</a>";
	$message.= "\n\n\r";
	
	$subject = $_SESSION['profile_company']." Form Submitted";				
	$headers = "From: services@closetstogo.com";
	$headers .= "\r\n";
	$headers .= "CC: mark.stanz@gmail.com";		

	//$to = 'jeff@closetstogo.com';
	$to = $email;

	if($site != "local"){	
		error_reporting(0);
		if(mail($to, $subject_c, $message, $headers)){
			$success = 1;	
		}
	}	

	$message='';
	$message .= "<div style='font-size:17px;'>";
	$message .= "<div style='background:#efefef; width:100%; padding:8px;'>";
	$message .= "<font color='#000000'>For The Pros Subitted</font>";
	$message .= "</div><br />";

	$message .= "<div style='float:left; width:40%; text-align:right;'>
	<font color='#000000'>For The Pros Form Submitted:</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'>
	<font color='#000000'>".SITEROOT."</font></div>";	

	$message .= "<div style='clear:both;'></div>";
	$message .= "<div style='float:left; width:40%; text-align:right;'>
	<font color='#000000'>Date:</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'>
	<font color='#000000'>".$today."</font></div>";	
	$message .= "<div style='clear:both;'></div>";

	$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Site:</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".SITEROOT."</font></div>";	
	$message .= "<div style='clear:both;'></div>";
	$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Customer Email:</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'><a href='mailto:".$email."'>".$email."</a></font></div>";
	$message .= "<div style='clear:both;'></div>";
	$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Customer Name:</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$name."</font></div>";
	$message .= "<div style='clear:both;'></div>";

	$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Business Name:</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$business_name."</font></div>";
	$message .= "<div style='clear:both;'></div>";

	$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Phone :</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$phone."</font></div>";
	$message .= "<div style='clear:both;'></div>";

	$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Address :</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$address."</font></div>";
	$message .= "<div style='clear:both;'></div>";

	$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>License :</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$license."</font></div>";
	$message .= "<div style='clear:both;'></div>";

	$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Interested :</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$interested."</font></div>";
	$message .= "<div style='clear:both;'></div>";

	$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Comment :</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$comment."</font></div>";
	$message .= "<div style='clear:both;'></div>";

	
	$subject_c = "For the Pros Form Submitted";		
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

	$to = array();
	//$to[0]="mark@nazardesigns.com";
	//$to[1]="mstanzzz@hotmail.com";
	//$to[2]="mstanzzz@yahoo.com";
	//$to[3]="mark.stanz@gmail.com";

	$to[0]="help@closetstogo.com";
	$to[1]="jeff@closetstogo.com";
	$to[2]="pros@closetstogo.com"; 


	if($site != "local"){	
		error_reporting(0);
		foreach($to as $val){
			if(mail($val, $subject, $message, $headers)){
				$success = 1;	
			}
		}
	}	
	
		
}

?>


