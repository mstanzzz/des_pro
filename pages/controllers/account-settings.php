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
	exit;
}

require_once($real_root.'/includes/class.order.php');
$order = new Order;

$msg =  (isset($_GET['msg'])) ? $_GET['msg'] : '';
$db = $dbCustom->getDbConnect(USER_DATABASE);

if(isset($_POST['set_site_pref'])){
	$site_pref = isset($_POST['site_pref'])? $_POST['site_pref'] : 1;
	if($site_pref == 1){
		$_SESSION['is_grid'] = 1;
		$_SESSION['is_list'] = 0;
	}else{
		$_SESSION['is_grid'] = 0;
		$_SESSION['is_list'] = 1;
	}
	$sql = "UPDATE USER
			SET is_grid = '".$_SESSION['is_grid']."', is_list = '".$_SESSION['is_list']."'
			WHERE id = '".$user_id."'";
	$result = $dbCustom->getResult($db,$sql);

}

if($_SESSION['is_grid']){
	$grid_checked = "checked";
	$list_checked = "";
}else{
	$grid_checked = "";
	$list_checked = "checked";
}

if(isset($_POST['delete_shipping_addr'])){
	$cust_address_id = (isset($_POST['cust_address_id']))? trim(addslashes($_POST['cust_address_id'])) : 0; 
	$sql = "DELETE FROM cust_address
			WHERE cust_address_id = '".$cust_address_id."'";
	$result = $dbCustom->getResult($db,$sql);

}

if(isset($_POST['update_shipping_addr'])){

	$first_name = (isset($_POST['first_name']))? trim(addslashes($_POST['first_name'])) : ''; 
	$last_name = (isset($_POST['last_name']))? trim(addslashes($_POST['last_name'])) : ''; 
	$address_1 = (isset($_POST['address_1']))? trim(addslashes($_POST['address_1'])) : ''; 
	$address_2 = (isset($_POST['address_2']))? trim(addslashes($_POST['address_2'])) : ''; 
	$country = (isset($_POST['country']))? trim(addslashes($_POST['country'])) : ''; 
	$city = (isset($_POST['city']))? trim(addslashes($_POST['city'])) : ''; 
	$state = (isset($_POST['state']))? trim(addslashes($_POST['state'])) : ''; 
	$email = (isset($_POST['email']))? trim(addslashes($_POST['email'])) : ''; 
	$phone = (isset($_POST['phone']))? trim(addslashes($_POST['phone'])) : ''; 
	$zip = (isset($_POST['zip']))? trim(addslashes($_POST['zip'])) : ''; 
	$cust_address_id = (isset($_POST['cust_address_id']))? trim(addslashes($_POST['cust_address_id'])) : 0; 
	
	$is_default = (isset($_POST['is_default']))? trim(addslashes($_POST['is_default'])) : 0; 

	$stmt = $db->prepare("UPDATE cust_address
				   SET
					first_name = ? 
					,last_name = ? 
					,address_1 = ?
					,address_2 = ?
					,city = ?
					,country = ?
					,state = ?
					,zip = ?
					,phone = ?
					,email = ?
					,is_default = ?
					WHERE cust_address_id = ?");
					 
	if(!$stmt->bind_param("ssssssssssii", 
					$first_name
					,$last_name
					,$address_1
					,$address_2
					,$city
					,$country
					,$state
					,$zip
					,$phone
					,$email
					,$is_default
					,$cust_address_id)){			
		//echo 'Error '.$db->error;			
	}else{
		
		$stmt->execute();
		$stmt->close();
	}					

}

if(isset($_POST['add_shipping_addr'])){

	$first_name = (isset($_POST['first_name']))? trim(addslashes($_POST['first_name'])) : ''; 
	$last_name = (isset($_POST['last_name']))? trim(addslashes($_POST['last_name'])) : ''; 
	$address_1 = (isset($_POST['address_1']))? trim(addslashes($_POST['address_1'])) : ''; 
	$address_2 = (isset($_POST['address_2']))? trim(addslashes($_POST['address_2'])) : '';
	$city = (isset($_POST['city']))? trim(addslashes($_POST['city'])) : ''; 
	$country = (isset($_POST['country']))? trim(addslashes($_POST['country'])) : ''; 
	$state = (isset($_POST['state']))? trim(addslashes($_POST['state'])) : ''; 
	$email = (isset($_POST['email']))? trim(addslashes($_POST['email'])) : ''; 
	$phone = (isset($_POST['phone']))? trim(addslashes($_POST['phone'])) : ''; 
	$zip = (isset($_POST['zip']))? trim(addslashes($_POST['zip'])) : ''; 
	$is_default = (isset($_POST['is_default']))? trim(addslashes($_POST['is_default'])) : 0; 

	$stmt = $db->prepare("INSERT INTO cust_address 
						(first_name 
						,last_name
						,city
						,address_1
						,address_2
						,country
						,state
						,zip
						,phone
						,email
						,is_default
						,profile_account_id
						,user_id)
						VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");	
					
	if(!$stmt->bind_param("ssssssssssiii", 
						$first_name
						,$last_name
						,$city
						,$address_1
						,$address_2
						,$country
						,$state
						,$zip
						,$phone
						,$email
						,$is_default
						,$_SESSION['profile_account_id']
						,$user_id)){
				
				//echo 'Error '.$db->error;
				
			}else{
				$stmt->execute();
				$address_id = $stmt->insert_id;
				
			}

}

if(isset($_POST["new_password"])){	

	$current_password = (isset($_POST['current_password']))? trim(addslashes($_POST['current_password'])) : ''; 
	$new_password = (isset($_POST['new_password']))? trim(addslashes($_POST['new_password'])) : ''; 
	$username = $lgn->getUserName($dbCustom);
	if($lgn->varifyPassword($dbCustom,$current_password, $username)){
		
		$lgn->resetPassword($dbCustom,$current_password, $username);				
		
		$headers = "From: services@closetstogo.com";
		$headers .= "\r\n";
		$headers .= "Content-type: text/html"; 
		$headers .= "\r\n";	
		$subject = "Your Account at Closets to Go";

	$db = $dbCustom->getDbConnect(SITE_DATABASE);
	$sql = "SELECT *
			FROM company_info
			WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
	$result = $dbCustom->getResult($db,$sql);			
	if($result->num_rows){
		$company_obj = $result->fetch_object();	
		$company_phone = $company_obj->phone;
		$company_email = $company_obj->contact_email;
		$company_fax = $company_obj->fax;
		$days = $company_obj->days;
		$hours = $company_obj->hours;
		$addr_line1 = $company_obj->addr_line1;
		$addr_line2 = $company_obj->addr_line2;
		$addr_line3 = $company_obj->addr_line3;
		$text_block1 = $company_obj->text_block1;
		$text_block1_head = $company_obj->text_block1_head;	
		$facebook = $company_obj->facebook;	
		$twitter = $company_obj->twitter;	
		$youtube = $company_obj->youtube;
		$pinterest = $company_obj->pinterest;
		$houzz = $company_obj->houzz;	
	}else{
		$company_phone = '';
		$company_fax = '';
		$company_email = '';
		$days = '';
		$hours = '';
		$addr_line1 = '';
		$addr_line2 = '';
		$addr_line3 = '';
		$text_block1 = '';
		$text_block1_head = '';	
		$facebook = '';	
		$twitter = '';	
		$youtube = '';
		$pinterest = '';
		$houzz = '';	
	}
	$message = "
		<h2>Your password has been updated at ".SITEROOT.".</h2>
		<p>If this was not you, or your did not mean to reset your password, please contact us at:<br />
		<strong>Phone:</strong> ".$company_phone."
		<br />
		<strong>Email:</strong> ".$company_email."</p>";	
		
		if(!mail($username, $subject, $message, $headers)){
		}
		$msg = "Your password has been successfully re-set.";	
	}else{
		$msg = "The original password was not recognized with this account";
	}
}


$cust_addr_array = $lgn->getAccMultiAddr($dbCustom,$_SESSION['ctg_cust_id']);

?>
