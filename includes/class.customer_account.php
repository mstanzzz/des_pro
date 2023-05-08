<?php

class CustomerAccount {
	
	function __construct()
	{
	
	}

	public function getAccData($dbCustom,$user_id) {
		
		$data = array();
		
		$db = $dbCustom->getDbConnect(USER_DATABASE);
		$sql = "SELECT first_name, last_name, username
				FROM user 
	 			WHERE id = '".$user_id."'";
		$result = $dbCustom->getResult($db,$sql);		
		if($result->num_rows){
			$name_object = $result->fetch_object();
			$data['first_name'] = $name_object->first_name;
			$data['last_name'] = $name_object->last_name;
			$data['email'] = $name_object->username;
			
		}else{
			$data['first_name'] = '';
			$data['last_name'] = '';
			$data['email'] = '';
		}
		
		$sql = "SELECT *
				FROM customer_data 
	 			WHERE user_id = '".$user_id."'";
		$result = $dbCustom->getResult($db,$sql);		
		if($result->num_rows){
			$object = $result->fetch_object();
			if(strlen($object->name_first) > 0){
				$data['first_name'] = $object->name_first;
			}
			if(strlen($object->name_last) > 0){
				$data['last_name'] = $object->name_last;
			}
			$data['shipping_name_first'] = $object->shipping_name_first;
			$data['shipping_name_last'] = $object->shipping_name_last;
			$data['shipping_address_one'] = $object->shipping_address_one;
			$data['shipping_address_two'] = $object->shipping_address_two;
			$data['shipping_city'] = $object->shipping_city;
			$data['shipping_state'] = $object->shipping_state;
			$data['shipping_zip'] = $object->shipping_zip;
			$data['shipping_phone'] = $object->shipping_phone_one;
			$data['billing_name_first'] = $object->billing_name_first;
			$data['billing_name_last'] = $object->billing_name_last;
			$data['billing_address_one'] = $object->billing_address_one;
			$data['billing_address_two'] = $object->billing_address_two;
			$data['billing_city'] = $object->billing_city;
			$data['billing_state'] = $object->billing_state;
			$data['billing_zip'] = $object->billing_zip;
			$data['billing_country'] = '';
			$data['billing_phone'] = $object->phone_one;
			$data['email'] = $object->email;
		}

		return $data;
	}
	

	public function getAccMultiAddr($dbCustom,$user_id) {

		$data = array();
		
		$db = $dbCustom->getDbConnect(USER_DATABASE);
		$sql = "SELECT first_name
						,last_name
						,address_1
						,address_2			
						,city
						,state
						,zip
						,phone
						,country
						,email
						,is_default
						,cust_address_id
						,is_default
				FROM cust_address  
	 			WHERE cust_address.user_id  = '".$user_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$i=0;	
		while($row = $result->fetch_object()){
			
			
			$data[$i]['is_default'] = $row->is_default;
			
			$data[$i]['first_name'] = $row->first_name;
			$data[$i]['last_name'] = $row->last_name;
			$data[$i]['address_1'] = $row->address_1;
			$data[$i]['address_2'] = $row->address_2;
			$data[$i]['city'] = $row->city;
			$data[$i]['state'] = $row->state;
			$data[$i]['zip'] = $row->zip;
			$data[$i]['phone'] = $row->phone;
			$data[$i]['country'] = $row->country;
			$data[$i]['email'] = $row->email;
			$data[$i]['is_default'] = $row->is_default;
			$data[$i]['cust_address_id'] = $row->cust_address_id;
			$i++;

		}

		return $data;


	}
	


	
	public function setDbAccData($dbCustom,$customer_id) {
    
		$db = $dbCustom->getDbConnect(USER_DATABASE);

	}

	function setAllDoBulkEmail($dbCustom,$profile_account_id = 1){
		$db = $dbCustom->getDbConnect(USER_DATABASE);
		$sql = "UPDATE user
				SET do_bulk_email = '1'
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);		
	}

	function setDoBulkEmail($dbCustom,$user_id = 0){
		$db = $dbCustom->getDbConnect(USER_DATABASE);
		$sql = "UPDATE user
				SET do_bulk_email = '1'
				WHERE id = '".$user_id."'";
		$result = $dbCustom->getResult($db,$sql);		
	}

	function unsetAllDoBulkEmail($dbCustom,$profile_account_id = 1){
		$db = $dbCustom->getDbConnect(USER_DATABASE);
		$sql = "UPDATE user
				SET do_bulk_email = '0'
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);		
	}

	function getEmailData($dbCustom,$customer_id){
		$db = $dbCustom->getDbConnect(USER_DATABASE);
		$sql = "SELECT name, username
				FROM user 
	 			WHERE id = '".$customer_id."'";
		$result = $dbCustom->getResult($db,$sql);		
		if($result->num_rows > 0){
			$object = $result->fetch_object();
			$ret['name'] = $object->name;
			$ret['username'] = $object->username; 
			return $ret; 
		}
		$ret['name'] = '';
		$ret['username'] = ''; 
		return $ret; 
	}

	function hasAccount($dbCustom, $customer_id){
		$ret = 0;
		$db = $dbCustom->getDbConnect(USER_DATABASE);
		$sql = "SELECT password_hash, username
				FROM user 
	 			WHERE id = '".$customer_id."'";
		$result = $dbCustom->getResult($db,$sql);		
		if($result->num_rows > 0){
			$object = $result->fetch_object();
			if(trim($object->password_hash) != '' && trim($object->username) != ''){
				$ret = 1;
			}
		}
		return $ret;
	}
	
	function updateEmail($dbCustom,$customer_id,$email){
		$db = $dbCustom->getDbConnect(USER_DATABASE);
		$sql = "UPDATE customer_data
				SET email = '".$email."'
				WHERE user_id = '".$customer_id."'";
		$result = $dbCustom->getResult($db,$sql);		
	}
	
}

?>