<?php

$msg='';
$the_id=0;
$new_cust=0;
$link='';

if(isset($_POST['first_name'])){
	$first_name = $_SESSION['dr']['first_name'] = isset($_POST['first_name'])? trim(addslashes($_POST['first_name'])): "";
	$last_name = $_SESSION['dr']['last_name'] = isset($_POST['last_name'])? trim(addslashes($_POST['last_name'])): "";
	$name = $first_name." ".$last_name;
	$email=$_SESSION['dr']['email'] = isset($_POST['email'])? trim($_POST['email']): "";
	$phone=$_SESSION['dr']['email'] = isset($_POST['phone'])? trim($_POST['phone']): "";
	$department=isset($_POST['department'])? trim($_POST['department']): "";
	$position=isset($_POST['position'])? trim(addslashes($_POST['position'])): "";

	$last_update = time();
	
	if($user_id==0){
		$new_cust=1;
		$password = "levantoutofchaoslogos";
		$username = $email;		
		$lgn->create_user($dbCustom, $password, $username, $first_name, $last_name);
		$_SESSION['ctg_cust_id'] = $user_id = $lgn->getUserIdByEmail($dbCustom,$email);
	}
	if($user_id>0){	
		$lgn->autologin($dbCustom, $user_id, $email);
	}

	$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

	$stmt = $db->prepare("INSERT INTO careers_app
		(first_name
		,last_name
		,name
		,email
		,phone
		,department
		,position
		,user_id					
		,profile_account_id
		,last_update)
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
		,?)"); 	
		//echo 'Error-1 '.$db->error;
	if(!$stmt->bind_param("sssssssiii",
		$first_name
		,$last_name
		,$name
		,$email
		,$phone
		,$department
		,$position
		,$user_id					
		,$_SESSION['profile_account_id']
		,$last_update)){		
		echo 'Error-2 '.$db->error;
	}else{
		$stmt->execute();
		$stmt->close();
		$the_id=$db->insert_id;
		$msg = "Your application has been submitted";
	}

	$sql = "SELECT DISTINCT file_name 
			FROM temp_upload 
			WHERE temp_id = '".$_SESSION['temp_id']."'
			AND profile_account_id = '".$_SESSION["profile_account_id"]."'";
	$img_result = $dbCustom->getResult($db,$sql);
	
	while($row = $img_result->fetch_object()){
		$from_file = $real_root."/temp_uploads/".$_SESSION['temp_id']."/".$row->file_name;
		if(file_exists($from_file)){
			$file_name = str_replace (" ", "_", $row->file_name);
			$file_name = $_SESSION['temp_id']."_".$file_name;
			//echo $file_name;
			//echo "<br />";
			if(copy($from_file , $real_root."/user_uploads/".$_SESSION['profile_account_id']."/".$file_name)){
				$sql = "INSERT INTO careers_app_image 
					(file_name, careers_app_id, temp_id) 
					VALUES 
					('".$file_name."', '".$the_id."', '".$_SESSION['temp_id']."')";				
				$r = $dbCustom->getResult($db,$sql);
			}
		}
	}
		
	if(file_exists($real_root."/temp_uploads/".$_SESSION['temp_id'])) {
		deleteDir($real_root."/temp_uploads/".$_SESSION['temp_id']);
	}	
	

	// This might not be used
	if($new_cust>0){
		//$password_salt=$lgn->getPasswordSalt($dbCustom,$user_id);
		//$link = SITEROOT."reset-password-".$password_salt."/".$the_id.".html";
	}else{
	
	}

	$message = '';
	$msg='';
	$msg.= "Thank you for your interest in joining the Closets To Go Team! ";
	$msg.= "\n\r We have received your resume and will be in contact with you soon. ";
	$msg.= "The Closets To Go Team";
	$message .= $msg;

	$to = $email;		
	//$to = "mark.stanz@gmail.com";
	$subject = "Closets To Go Application Received";				
	$headers = "From: services@closetstogo.com";
	$headers .= "\r\n";
	$headers .= "CC: mark.stanz@gmail.com";	

	if($site != "local"){	
		error_reporting(0);
		if(mail($to, $subject, $message, $headers)){

		}else{
								
		}
	}
	$reset_pswd_link=$link;


	$message='';
	$message .= "<div style='font-size:17px;'>";
	$message .= "<div style='background:#efefef; width:100%; padding:8px;'>";
	$message .= "<font color='#000000'>From Careers Page</font>";
	$message .= "</div><br />";

	$message .= "<div style='float:left; width:40%; text-align:right;'>
	<font color='#000000'>Careers Form Submitted Frpm:</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'>
	<font color='#000000'>".SITEROOT."</font></div>";	

	$message .= "<div style='clear:both;'></div>";
	$message .= "<div style='float:left; width:40%; text-align:right;'>
	<font color='#000000'>Date:</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'>
	<font color='#000000'>".$today."</font></div>";	
	$message .= "<div style='clear:both;'></div>";


	$message .= "<div style='clear:both;'></div>";
	$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Customer Email:</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'><a href='mailto:".$email."'>".$email."</a></font></div>";
	$message .= "<div style='clear:both;'></div>";
	$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Customer Name:</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$name."</font></div>";
	$message .= "<div style='clear:both;'></div>";

	$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>department:</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$department."</font></div>";
	$message .= "<div style='clear:both;'></div>";
	$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>position:</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$position."</font></div>";
	$message .= "<div style='clear:both;'></div>";

	$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Phone :</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$phone."</font></div>";
	$message .= "<div style='clear:both;'></div>";

	$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Email :</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$email."</font></div>";
	$message .= "<div style='clear:both;'></div>";
	
	$subject_c = "Careers Form Submitted";		
	$headers = "Content-type: text/html; charset=iso-8859-1";	
	$headers .= "\r\n";
	$headers .= "From: help@closetstogo.com";
	$headers .= "\r\n";
	$headers .= "Return-path: help@closetstogo.com";
	$headers .= "\r\n";
	$headers .= "CC: mark@nazardesigns.com";
	$headers .= "\r\n";
	
	//$to = 'careers@closetstogo.com';
	//$to = 'mark.stanz@gmail.com';
	$to = array();
	//$to[0]="mark@nazardesigns.com";
	//$to[1]="mstanzzz@hotmail.com";
	//$to[2]="mstanzzz@yahoo.com";
	//$to[3]="mark.stanz@gmail.com";

	$to[0]="help@closetstogo.com";
	$to[1]="jeff@closetstogo.com";
	$to[2]="careers@closetstogo.com"; 


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
