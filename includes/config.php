<?php
session_start();
if(strpos($_SERVER['DOCUMENT_ROOT'], 'xampp')>0){
	$site = 'local';	
}elseif(strpos($_SERVER['DOCUMENT_ROOT'], 'ctgtest')>0){
	$site = 'storit';
}elseif(strpos($_SERVER['DOCUMENT_ROOT'], 'ctgtool')>0){
	$site = 'designitpro';
	
	
	
}else{
	$site = 'live';
}
//date_default_timezone_set('America/Vancouver');


//$site = "live";
//$site = 'local';
//$site = 'designitpro';
//$site = 'designitpro';

	
if($site == "local"){	
	define('CART_N_DATABASE', 'ctgtest_N_CART');
	define('SITE_N_DATABASE', 'ctgtest_N_SITE');		
	define('USER_DATABASE', 'ctgtest_USERS');		
	define("DB_HOST", "127.0.0.1");
	define("DB_USERNAME", 'root');
	define("DB_PSWD", '');
	define("SITEROOT", '/designitpro/');

}elseif($site == "designitpro"){

	define('SITE_N_DATABASE', 'ctgtool_N_SITE');
	define('CART_N_DATABASE', 'ctgtool_N_CART');
	define('USER_DATABASE', 'ctgtool_USERS');

	define('DB_HOST', 'localhost');	
	define('DB_USERNAME', 'ctgtool_ctg_nath');
	define('DB_PSWD', 'nathannn1A@@');
	define("SITEROOT", 'https://designitpro.com/');


}else{

	define('SITE_N_DATABASE', 'bridgepo_N_SITE');
	define('CART_DATABASE', 'bridgepo_N_CART');
	define('USER_DATABASE', 'bridgepo_USERS');

	define('DB_HOST', 'localhost');	
	define('DB_USERNAME', 'bridgepo_bridgep');
	define('DB_PSWD', 'lara1@123');

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