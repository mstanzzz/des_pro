<?php
if(!$lgn->isLogedIn()){
	echo "<center>";
	echo "<a href='".SITEROOT."'><img src='".SITEROOT."images/restrict.png'></a>";
	echo "</center>";
	echo "<center>";
	echo "<div style='font-size:20px; margin-top:30px;'>";
	echo "<a href='".SITEROOT."'>EXIT</a>";
	echo "</div>";
	echo "</center>";
	$user_id=0;
	exit;
}

$de_req_array=array();
$i=0;
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = "SELECT *
		FROM design_email
		WHERE user_id = ".$user_id." 
		AND profile_account_id = '".$_SESSION['profile_account_id']."'
		ORDER By to_save, design_email_id";
$result = $dbCustom->getResult($db,$sql);
while($row=$result->fetch_object()){
	$de_req_array[$i]['to_save']=$row->to_save;
	$de_req_array[$i]['design_email_id']=$row->design_email_id;
	$de_req_array[$i]['date_submitted']=$row->date_submitted;
	$de_req_array[$i]['done']=$row->done;
	

			
}

?>

