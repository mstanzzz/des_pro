<?php
session_start();
if(strpos($_SERVER['DOCUMENT_ROOT'], 'xampp')>0){
	$site = 'local';	
}elseif(strpos($_SERVER['DOCUMENT_ROOT'], 'XXX1')>0){
	$site = 'XXX1';
}else{
	$site = 'live';
}
date_default_timezone_set('America/Vancouver');
if($site == "local"){	
	define('CART_N_DATABASE', 'ctgtest_N_CART');
	define('SITE_N_DATABASE', 'ctgtest_N_SITE');		
	define('USER_DATABASE', 'ctgtest_USERS');		
	define("DB_HOST", "127.0.0.1");
	define("DB_USERNAME", 'root');
	define("DB_PSWD", '');
	define("SITEROOT", '/des_pro/');
}elseif($site == "XXX1"){

	define('SITE_N_DATABASE', 'XXX_SITE');
	define('CART_N_DATABASE', 'XXX_N_CART');
	define('USER_DATABASE', 'XXX_USERS');

	define('DB_HOST', 'XXX');	
	define('DB_USERNAME', 'XXX');
	define('DB_PSWD', 'XXX');
	define("SITEROOT", 'XXX.com/');


}else{

	define('SITE_N_DATABASE', 'XXX_SITE');
	define('CART_DATABASE', 'XXX_CART');
	define('USER_DATABASE', 'XXX_USERS');

	define('DB_HOST', 'XXX');	
	define('DB_USERNAME', 'XXX');
	define('DB_PSWD', 'XXX');

}


$_SESSION['seo'] = 1;
$this_page = explode("/",$_SERVER['PHP_SELF']);
$this_page = end($this_page);
$this_page = str_replace ('.php', '', $this_page);
$resources_goto_ssl = 0;
$_SESSION['is_ssl'] = 0;
$_SESSION['profile_account_id'] = 1; 

$pro = 'https://'; 

$domain = $_SERVER['HTTP_HOST'];
//$domain =str_replace('www.' ,'',$domain);

$show_the_no_profile_message = 0;

?>