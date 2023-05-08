<?php
if(!isset($real_root)){
	if(strpos($_SERVER['REQUEST_URI'], 'solvitware/' )){    
		$real_root = $_SERVER['DOCUMENT_ROOT'].'/solvitware'; 
	}elseif(strpos($_SERVER['REQUEST_URI'], 'storittek/' )){
		$real_root = $_SERVER['DOCUMENT_ROOT'].'/storittek';
	}else{
		$real_root = $_SERVER['DOCUMENT_ROOT']; 	
	}
}

//require_once($real_root.'/includes/class.design_cart.php');
//require_once($real_root.'/includes/class.shopping_cart.php');

class CustomerLogin {

	function __construct() {
		if(!isset($_SESSION['is_grid'])) $_SESSION['is_grid'] = 0;
		if(!isset($_SESSION['is_list'])) $_SESSION['is_list'] = 0;
		if(!isset($_SESSION['customer_logged_in'])) $_SESSION['customer_logged_in'] = 0;
		if(!isset($_SESSION['user_type'])) $_SESSION['user_type'] = 1;
		if(!isset($_SESSION['username'])) $_SESSION['username'] = '';
		if(!isset($_SESSION['customer_full_name'])) $_SESSION['customer_full_name'] = '';
		if(!isset($_SESSION['first_name'])) $_SESSION['first_name'] = '';
		if(!isset($_SESSION['last_name'])) $_SESSION['last_name'] = '';
		if(!isset($_SESSION['email'])) $_SESSION['email'] = '';
		if(!isset($_SESSION['social_network_profile_id'])) $_SESSION['social_network_profile_id'] = 0;
		if(!isset($_SESSION['is_legacy_cust'])) $_SESSION['is_legacy_cust'] = 0;
		if(!isset($_SESSION['ctg_visitor_id'])) $_SESSION['ctg_visitor_id'] = rand();
		if(!isset($_SESSION['password_salt'])) $_SESSION['password_salt'] = 'none';
	}
			
	function generateSalt()
	{
		return sha1(uniqid(rand()));
	}

	function get_hash($password, $salt)
	{
		return sha1($password.$salt);
	}

	function login($dbCustom,$username,$password) {
	
		$db = $dbCustom->getDbConnect(USER_DATABASE);
		$ret = 0;
		$stmt = $db->prepare("SELECT id 
					,name
					,first_name
					,last_name		
					,user_type_id
					,password_hash
					,password_salt
					FROM user
					WHERE username = ?
					AND profile_account_id = ? "); 
		if(!$stmt->bind_param("si", $username, $_SESSION['profile_account_id'])){
			//echo 'Error '.$db->error;			
			
		}else{
			$stmt->execute();
			$stmt->bind_result($user_id
						,$name
						,$first_name
						,$last_name		
						,$user_type_id
						,$password_hash
						,$password_salt);
	
			if($stmt->fetch()){
				
				$password_hash == $this->get_hash($password, $password_salt);

				//echo "password_hash ".$password_hash;
				//exit;

				// merge cart
				/*
					$old_cust_id = $_SESSION['ctg_cust_id'];
					$new_cust_id = $user_id;
					if($old_cust_id != $new_cust_id){
						$design_cart = new DesignCart;
						$design_cart->mergeCart($old_cust_id,$new_cust_id);				
					}
				*/
				$ret = 1;
				$_SESSION['user_type'] = $user_type_id;	
				$_SESSION['customer_logged_in'] = 1;
				$_SESSION['ctg_cust_id'] = $user_id;
				$_SESSION['username'] = $username;						
				$_SESSION['name']=$_SESSION['customer_full_name']=stripslashes($name);
				$_SESSION['first_name'] = $first_name;
				$_SESSION['last_name'] = $last_name;
				$_SESSION['email'] = $username;
				$_SESSION['is_legacy_cust'] = 0;
				//setcookie('ctg_cust_id',$user_id,time() + (86400 * 360), '/');
				//setcookie("customer_logged_in", 1, time()+(86400 * 360), '/');;  
				//$cart = new ShoppingCart;
				//$cart->mergeCarts();
				//setcookie('ctg_cust_id',$_SESSION['ctg_cust_id'],time() + (86400 * 360), '/');
				//$this->consolidate($username, 1, $user_id);
			}else{
				$_SESSION['customer_logged_in'] = 0;
				$_SESSION['ctg_cust_id'] = 0;
				$_SESSION['username'] = '';						
				$_SESSION['customer_full_name'] = '';
				$_SESSION['first_name'] = '';
				$_SESSION['last_name'] = '';
				$_SESSION['email'] = '';					
				$ret = 0;				
			}
			$stmt->close();
		}
		return $ret;
	}

	// Used for legacy CTG login
	function md5x($str) { 
		return strrev(md5(md5(strrev(md5($str)))));
	}

	function loginLegacyCTG($username,$password) {
		$ret = 0;
		$dbCustom = new DbCustom();
		$db = $dbCustom->getDbConnectLegacyCTG(BUY_CLOSE_CTG_DATABASE);
		$stmt = $db->prepare("SELECT customer_num, password, name
					FROM customer_data
					WHERE username = ?
					OR email = ? "); 
		if(!$stmt->bind_param("ss", $username, $username)){
			//echo 'Error '.$db->error;
		}else{
			$stmt->execute();
			$stmt->bind_result($customer_num, $stored_password, $name);
			if($stmt->fetch()){
				if(trim($stored_password) == $this->md5x(trim($password))){
					$_SESSION['user_type'] = 1;	
					$_SESSION['customer_logged_in'] = 1;
					$_SESSION['ctg_cust_id'] = $customer_num;
					$_SESSION['username'] = $username;						
					$_SESSION['customer_full_name'] = '';
					$_SESSION['name'] = stripslashes($name);
					$_SESSION['email'] = $username;
					$_SESSION['is_legacy_cust'] = 1;
					$ret = 1;
				}
			}
			$stmt->close();
		}
		return $ret;
	}

	function getUserIdByEmail($dbCustom,$username){
		$db = $dbCustom->getDbConnect(USER_DATABASE);	
		$stmt = $db->prepare("SELECT id
							FROM user
							WHERE username = ?
							AND profile_account_id = ?");		
		if(!$stmt->bind_param("si", $username, $_SESSION['profile_account_id'])){
			//echo 'Error '.$db->error;
		}else{
			$stmt->execute();
			$stmt->bind_result($id);
			if($stmt->fetch()){
				return $id;
			}
			$stmt->close();
		}
		return 0;		
	}

	function consolidate($email, $logged_in = 0, $user_id = 0){
		if($logged_in == 1 && $user_id > 0){
			$dbCustom = new DbCustom();
			$db = $dbCustom->getDbConnect(USER_DATABASE);
			$sql = "SELECT id		
					FROM user 
					WHERE id != '".$user_id."' 
					AND username = '".$email."'
					AND profile_account_id = '".$_SESSION['profile_account_id']."'";
			$result = $dbCustom->getResult($db,$sql);			
			if($result->num_rows > 1){
				$sql = "DELETE FROM user 
						WHERE id != '".$user_id."'
						AND username = '".$email."'
						AND profile_account_id = '".$_SESSION['profile_account_id']."'";
				$result = $dbCustom->getResult($db,$sql);			
				$sql = "DELETE FROM customer_data 
						WHERE user_id != '".$user_id."'
						AND email = '".$email."'";
				$result = $dbCustom->getResult($db,$sql);			
				$sql = "DELETE FROM cust_address 
						WHERE user_id != '".$user_id."'
						AND email = '".$email."'";
				$result = $dbCustom->getResult($db,$sql);			
			}
			/*		
			$db = $dbCustom->getDbConnect(CART_N_DATABASE);
			$sql = "UPDATE ctg_order 
					SET customer_id = '".$user_id."'
					WHERE customer_id != '".$user_id."'
					AND billing_email = '".$email."'
					AND profile_account_id = '".$_SESSION['profile_account_id']."'";
			$result = $dbCustom->getResult($db,$sql);
			*/
		}
	}

	function autologin($dbCustom, $customer_id=0, $email='') {
		$db = $dbCustom->getDbConnect(USER_DATABASE);
		$ret = 0;
		if(is_numeric($customer_id)){
			if($customer_id > 0){
				$sql = "SELECT name
						,username
						FROM user 
						WHERE id = '".$customer_id."'";
				$result = $dbCustom->getResult($db,$sql);			
			}
		}else{
			$str=$email;
			$str=str_replace('@','' ,$str);
			$str=str_replace('.','' ,$str);
			$str=str_replace('-','' ,$str);
			$str=str_replace('_','' ,$str);
			if((!preg_match('/[^a-z_\-0-9]/i', $str)) && (strlen($email)>6))
			{
				$sql = "SELECT name
						,username
						FROM user 
						WHERE username = '".$email."'";
				$result = $dbCustom->getResult($db,$sql);	
				if($result->num_rows > 0){
					$object = $result->fetch_object();	
					$ret=0;
					$_SESSION['customer_logged_in']=1;
					$_SESSION['ctg_cust_id']=$customer_id;
					$_SESSION['username']=$object->username;						
					$_SESSION['customer_full_name']=$object->name;
					$_SESSION['name']=$object->name;
					$_SESSION['email']=$object->username;
				}				
			}
		}
		return $ret;
	}

	function logOut(){		
		$_SESSION['customer_logged_in'] = 0;
		$_SESSION['ctg_cust_id'] = 0;
		$_SESSION['username'] = '';						
		$_SESSION['customer_full_name'] = '';
		$_SESSION['social_network_profile_id'] = 0;
		$_SESSION['is_legacy_cust'] = 0;

	}

	function getUserName($dbCustom) {
		$ret = (isset($_SESSION['username'])) ? $_SESSION['username'] : '';	
		if($ret == ''){
			$db = $dbCustom->getDbConnect(USER_DATABASE);
			$sql = "SELECT username
				FROM user 
	 			WHERE id = '".$this->getCustId()."'";
			$result = $dbCustom->getResult($db,$sql);			
			if($result->num_rows){
				$object = $result->fetch_object();
				$_SESSION['username'] = $object->username;
				$ret = $object->username;
			}
		}
		return $ret;
	}
	
	function getFullName($dbCustom, $user_id = 0) {
		$ret = (isset($_SESSION['customer_full_name'])) ? $_SESSION['customer_full_name'] : '';	
		if(!isset($_SESSION['ctg_cust_id'])) $_SESSION['ctg_cust_id'] = 0;
		if($user_id > 0){
			$dbCustom = new DbCustom();
			$db = $dbCustom->getDbConnect(USER_DATABASE);
			$sql = "SELECT name
				FROM user 
	 			WHERE id = '".$user_id."'";
			$result = $dbCustom->getResult($db,$sql);			
			if($result->num_rows){
				$object = $result->fetch_object();
				$_SESSION['customer_full_name'] = $object->name;
				$ret = $object->name;
			}
		}else{
			$db = $dbCustom->getDbConnect(USER_DATABASE);
			$sql = "SELECT name
				FROM user 
	 			WHERE id = '".$_SESSION['ctg_cust_id']."'";
			$result = $dbCustom->getResult($db,$sql);			
			if($result->num_rows){
				$object = $result->fetch_object();
				$_SESSION['customer_full_name'] = $object->name;
				$ret = $object->name;
			}
		}
		return $ret;
	}

	function getCustId() {
		$ret = (isset($_SESSION['ctg_cust_id'])) ? $_SESSION['ctg_cust_id'] : 0;	
		return $ret;
	}

	function isLogedIn() {
		return $_SESSION['customer_logged_in'];
	}
	
	function varifyPassword($dbCustom,$password, $username){
		$ret = 0;
		$db = $dbCustom->getDbConnect(USER_DATABASE);
		$sql = "SELECT 
				password_hash
				,password_salt
				FROM user 
	 			WHERE username = '".$username."'";
		$result = $dbCustom->getResult($db,$sql);		
		if($result->num_rows > 0){
			$object = $result->fetch_object();
			if($object->password_hash == $this->get_hash($password, $object->password_salt)){
				$ret = 1;
			}
		}
		return $ret;
	}
	
	function resetPassword($dbCustom,$password_new, $username){		
		$password_salt = $this->generateSalt();
		$password_hash = $this->get_hash($password_new, $password_salt);

		$db = $dbCustom->getDbConnect(USER_DATABASE);

		$sql = "UPDATE user 
				SET password_hash = '".$password_hash."' ,password_salt = '".$password_salt."' 
	 			WHERE username = '".$username."'";
		$result = $dbCustom->getResult($db,$sql);	

		return 1;
	}
	
	function getUserType() {
		return $_SESSION['user_type'];
	}
	
	function create_user($dbCustom, $password, $username, $first_name = '',$last_name = ''){
		$user_id=0;
		if(!$this->userNameExists($dbCustom,$username)){	
			$redo_cust_data = 0;
			$username = trim(addslashes($username));
			$first_name = trim(addslashes($first_name));
			$last_name = trim(addslashes($last_name));
			$user_type = 1;
			$name = $first_name." ".$last_name;
			$db_now = date('Y-m-d h:i:s');
			$db = $dbCustom->getDbConnect(USER_DATABASE);	
			$stmt = $db->prepare("INSERT INTO user 
							(name
							,first_name
							,last_name		
							,username
							,user_type_id
							,created
							,visited)
					   		VALUES(?,?,?,?,?,?,?)");		
			//echo 'Error1 '.$db->error;
			if(!$stmt->bind_param("sssssss", $name
							,$first_name
							,$last_name
							,$username
							,$user_type
							,$db_now
							,$db_now)){
				echo 'Error2 '.$db->error;
			}else{
				$stmt->execute();
				$user_id = $db->insert_id;
				$stmt->close();
				$this->resetPassword($dbCustom, $password, $username);
				$this->login($dbCustom,$username,$password);
				$customer_id = $this->getCustId();
				$sql = "DELETE FROM customer_data WHERE user_id = '".$customer_id."'";
				$result = $dbCustom->getResult($db,$sql);
				$stmt = $db->prepare("INSERT INTO customer_data 
									(user_id, email)
									VALUES(?,?)");	
				if(!$stmt->bind_param("is", $customer_id, $username)){
					//echo 'Error '.$db->error;
				}else{
					$stmt->execute();
				}
			}
		}
		return $user_id;	
	}

	function userNameExists($dbCustom,$username){
		$username_exists = 0;
		$db = $dbCustom->getDbConnect(USER_DATABASE);
		$stmt = $db->prepare("SELECT id
						FROM user
						WHERE username = ?
						AND profile_account_id = ?"); 
		if(!$stmt->bind_param("si", $username, $_SESSION['profile_account_id'])){			
			//echo 'Error '.$db->error;			
		}else{
			$stmt->execute();
			if($stmt->fetch()){
				$username_exists = 1;
			}
		}
		return $username_exists;
	}

	function getUserIDFromEmail($dbCustom,$username){	
		
		$username_exists = 0;
		$db = $dbCustom->getDbConnect(USER_DATABASE);
		$stmt = $db->prepare("SELECT id
						FROM user
						WHERE username = ?
						AND profile_account_id = ?"); 
		if(!$stmt->bind_param("si", $username, $_SESSION['profile_account_id'])){			
			//echo 'Error '.$db->error;			
		}else{
			$stmt->execute();
			$stmt->bind_result($id);	
			$stmt->fetch();
		}
		return $id;
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
	
	
}

?>