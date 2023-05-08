<?php
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = "SELECT *
		FROM sign_now_pay
		WHERE sign_now_pay.sign_now_pay_id = (SELECT MAX(sign_now_pay_id) FROM sign_now_pay WHERE profile_account_id = '".$_SESSION['profile_account_id']."')";
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$content = stripslashes($object->content);
}else{
	$content = '';
}


$customer_id = 182354;

// get cust data


//print_r($acc->getAccData($dbCustom,$customer_id));

$data = $acc->getAccData($dbCustom,$customer_id);


//print_r($data);

foreach($data as $k => $d){
	//echo "<br />".$k.":::".$d;
}




?>