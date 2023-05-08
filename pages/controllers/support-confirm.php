<?php
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

if(isset($_POST['subject'])){
	
	
	if(isset($_POST['name'])){
		$name = $_POST['name'];
	}else{
		$name = '';		
	}
	
	if(isset($_POST['email'])){
		$email = $_POST['email'];
	}else{
		$email = '';		
	}
	
	if(isset($_POST['subject'])){
		$subject = $_POST['subject'];
	}else{
		$subject = '';		
	}
	
	if(isset($_POST['support_issue'])){
		$support_issue = $_POST['support_issue'];
	}else{
		$support_issue = '';		
	}
	
	
	//$name = isset($_POST['name'])? trim($_POST['name']): "";
	//$email = isset($_POST['email'])? trim($_POST['email']): "";
	//$subject = isset($_POST['subject'])? trim(addcslashes($_POST['subject'])): "";
	//$support_issue = isset($_POST['support_issue'])? trim(addcslashes($_POST['support_issue'])): "";

	$last_update = time();

/*
		echo "<br />name ".$name;
		echo "<br />email ".$email;
		echo "<br />subject ".$subject;
		echo "<br />support_issue ".$support_issue;
		echo "<br />last_update ".$last_update;
		echo "<br />profile_account_id ".$_SESSION['profile_account_id'];
*/


	$ctg_empl_email_addr = isset($_POST['ctg_empl_email_addr'])? trim($_POST['ctg_empl_email_addr']): "";

	$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

	$stmt = $db->prepare("INSERT INTO contact_email
		(first_name
		,last_name
		,name
		,email
		,subject
		,support_issue
		,last_update
		,profile_account_id)
		VALUES
		(?	
		,?
		,?
		,?		
		,?	
		,?
		,?		
		,?)"); 	

	//echo 'Error-1 '.$db->error;
		
	if(!$stmt->bind_param("ssssssii",
		$first_name
		,$last_name
		,$name
		,$email
		,$subject
		,$support_issue
		,$last_update
		,$_SESSION['profile_account_id'])){		
		echo 'Error-2 '.$db->error;
	}else{
		$stmt->execute();
		$the_id=$db->insert_id;
		$stmt->close();
		$msg = "Your message has been sent";		
	}
	
	
	$message = '';

	$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Name:</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".stripslashes($name)."</font></div>";
	$message .= "<div style='clear:both;'></div>";

	$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Email Address:</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$email."</font></div>";
	$message .= "<div style='clear:both;'></div>";

	$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Subject:</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".stripslashes($subject)."</font></div>";
	$message .= "<div style='clear:both;'></div>";

	$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Support Issue:</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".stripslashes($support_issue)."</font></div>";
	$message .= "<div style='clear:both;'></div>";

	$headers = "Content-type: text/html; charset=iso-8859-1";	
	$headers .= "\r\n";
	$headers .= "From: help@closetstogo.com";
	$headers .= "\r\n";
	$headers .= "Return-path: help@closetstogo.com";
	//$headers .= "\r\n";	
	//$headers .= "CC: mark@nazardesigns.com";
	//$headers .= "\r\n";
	//$headers .= "CC: ".$ctg_empl_email_addr."@closetstogo.com";
	//$headers .= "\r\n";
	//$headers .= "Bcc: mark@nazardesigns.com";
	//$headers .= "\r\n";

/*
	$to = "help@closetstogo.com,kristi@closetstogo.com,melanie@closetstogo.com,jeff@closetstogo.com";
	if($ctg_empl_email_addr=='wendy'){
		$to .= ",localsales@closetstogo.com,wendy@closetstogo.com";
	}

	$to = "mark@nazardesigns.com,mstanzzz@hotmail.com,mstanzzz@yahoo.com,mark.stanz@gmail.com";

*/

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
	$to[5]="shipping@closetstogo.com";
	$to[6]="install@closetstogo.com";
	$to[7]="services@closetstogo.com";
	if($ctg_empl_email_addr=='wendy'){
		$to[8]="localsales@closetstogo.com";
		$to[9]="wendy@closetstogo.com";
	}else{
		
		if($ctg_empl_email_addr!='jeff'
			&&$ctg_empl_email_addr!='kristi'
			&&$ctg_empl_email_addr!='melanie'){
			
			$to[8]=$ctg_empl_email_addr."@closetstogo.com";
		}
	}
	
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
