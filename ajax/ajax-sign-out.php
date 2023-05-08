<?php
require_once('includes/config.php');
require_once('includes/class.customer_login.php');
$lgn = new CustomerLogin;
$lgn->logOut();

$_SESSION['customer_logged_in'] = 0;
$_SESSION['ctg_cust_id'] = 0;
$_SESSION['username'] = '';						
$_SESSION['customer_full_name'] = '';
$_SESSION['first_name'] = '';
$_SESSION['last_name'] = '';


?>


