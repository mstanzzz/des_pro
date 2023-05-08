<?php
if(strpos($_SERVER['REQUEST_URI'], 'solvitware/' )){ 
	$real_root = $_SERVER['DOCUMENT_ROOT'].'/solvitware';
}elseif(strpos($_SERVER['REQUEST_URI'], 'designitpro' )){  
	$real_root = $_SERVER['DOCUMENT_ROOT'].'/designitpro'; 
}elseif(strpos($_SERVER['REQUEST_URI'], 'storittek/' )){  
	$real_root = $_SERVER['DOCUMENT_ROOT'].'/storittek'; 
}else{
	$real_root = $_SERVER['DOCUMENT_ROOT']; 	
}

require_once($real_root.'/includes/class.dbcustom.php');
$dbCustom = new DbCustom();

require_once($real_root.'/includes/config.php');
require_once($real_root.'/includes/class.shopping_cart.php');
require_once($real_root.'/includes/accessory_cart_functions.php');
require_once($real_root.'/includes/class.shopping_cart_item.php');
require_once($real_root.'/includes/class.store_data.php');
require_once($real_root.'/includes/class.nav.php');
require_once($real_root.'/includes/class.seo.php');
require_once($real_root.'/includes/class.company.php');
require_once($real_root.'/includes/icons.php');
require_once($real_root.'/includes/class.order.php');
require_once($real_root.'/includes/class.reviews.php');
require_once($real_root.'/includes/class.category.php');

require_once($real_root.'/includes/class.customer_login.php');
$lgn = new CustomerLogin;

$cat = new Category;
$reviews = new Reviews;
$order = new Order;
$seo = new Seo;
$store_data = new StoreData;
$cart = new ShoppingCart($dbCustom);
$item = new ShoppingCartItem;
$nav = new Nav;

$_SESSION['profile_company'] = 'Closets To Go';
$title = '';
$meta_key_words = '';
$meta_description = '';

function ms_get_brand($dbCustom,$brand){
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$sql = "SELECT name
			FROM brand
			WHERE brand_id='".$brand."'";
	$result = $dbCustom->getResult($db,$sql);
	if($result->num_rows > 0){
		$object = $result->fetch_object();
		return $object->name; 
	}
	return "";
}	

function get_file_name($dbCustom,$img_id,$the_db='cart'){
	if($the_db=='site'){
		$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
	}else{
		$db = $dbCustom->getDbConnect(CART_N_DATABASE);
		
	}
	$sql = "SELECT file_name
			FROM image
			WHERE img_id='".$img_id."'";
	$result = $dbCustom->getResult($db,$sql);
	if($result->num_rows > 0){
		$object = $result->fetch_object();
		return $object->file_name; 
	}
	return "";
}	

if(!isset($_SESSION['anonymous_shopper_id'])){
	if(isset($_COOKIE['anonymous_shopper_id'])){	
		$_SESSION['anonymous_shopper_id'] = $_COOKIE['anonymous_shopper_id'];
	}else{
		$_SESSION['anonymous_shopper_id'] = rand() + rand();
		setcookie('anonymous_shopper_id',$_SESSION['anonymous_shopper_id'],time() + (86400 * 360), '/');
	}
}

if(!isset($_SESSION['ctg_cust_id'])){
	$_SESSION['ctg_cust_id'] = 0;
	
	if(isset($_COOKIE['ctg_cust_id'])){ 
		if(is_numeric($_COOKIE['ctg_cust_id'])){
			$_SESSION['ctg_cust_id'] = $_COOKIE['ctg_cust_id'];	
		}
	}
	if($_SESSION['ctg_cust_id']>0){
		setcookie('ctg_cust_id',$_SESSION['ctg_cust_id'],time() + (86400 * 360), '/');
	}
}

date_default_timezone_set('America/Los_Angeles');
$ts=time();
$today=date("F j Y, l");

if(!isset($_SESSION['temp_id'])){
	$_SESSION['temp_id'] = $ts;	
}
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = "SELECT time_stamp,diy,design_request
		FROM current_users";
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object=$result->fetch_object();
	$count_diy_inst=$object->diy;	
	$count_sub_des=$object->design_request;
	$time_stamp=$object->time_stamp;	
}else{
	$count_diy_inst="28";	
	$count_sub_des="72";
	$time_stamp=$ts;	
}


if($ts-$time_stamp>300){
	$new_sub_des=rand(33,99);	

	$sql = "UPDATE current_users
		SET time_stamp = '".$ts."'
		,design_request = '".$new_sub_des."'";
	$result = $dbCustom->getResult($db,$sql);	
}

$new_diy=$count_diy_inst+rand(8,151);

if(($ts-$time_stamp)>86400){

	$new_diy=$count_diy_inst+rand(8,151);
	$sql = "UPDATE current_users
		SET time_stamp = '".$ts."'
		,diy = '".$new_diy."'
		,design_request = '".$new_sub_des."'";
	$result = $dbCustom->getResult($db,$sql);
}

$count_des_tool=rand(11,230);

$id = (isset($_GET['id'])) ? $_GET['id'] : 0;
if(!is_numeric($id)) $id = 0;

$msg = '';
$si_msg = '';
$reg_msg = '';

if(isset($_POST['logout'])){
	$lgn->logOut();
}
if(isset($_POST['si_email'])){
	$username = trim($_POST['si_email']);
	$password = trim($_POST['si_pswd']);
	
	$db = $dbCustom->getDbConnect(USER_DATABASE);

	if($lgn->login($dbCustom, $username,$password)){
		$si_msg="<p style='color:blue; font-size:0.6em;'>Logged In Successfully</p>";
	}else{
		header("Location: ".SITEROOT."login-1.html");
	}
}


if(isset($_POST['reg_first_name'])){
	$reg_first_name = trim($_POST['reg_first_name']);
	$reg_last_name = trim($_POST['reg_last_name']);
	$username = trim($_POST['reg_email']);
	$password = trim($_POST['reg_pswd']);
	//$get_letter = $_POST['r'];

	$db = $dbCustom->getDbConnect(USER_DATABASE);

	if($lgn->login($dbCustom, $username,$password)){

	}elseif($lgn->userNameExists($dbCustom,$username)){
		
		header("Location: ".SITEROOT."login-2.html");		
	
	}elseif($lgn->getUserIdByEmail($dbCustom,$username)==0){
		
		if(!$lgn->create_user($dbCustom, $password, $username, $reg_first_name, $reg_last_name)){
			header("Location: ".SITEROOT."login-2.html");					
		}

	}else{
					
	}	
}

$user_id=$lgn->getCustId();

$ret_page =  (isset($_GET['ret_page'])) ? $_GET['ret_page'] : 'home';
$slug = (isset($_GET['slug'])) ? $_GET['slug'] : 'home';

if(strpos($slug, 'showroom-detail-view-categories') !== false){
	$seo_page = 'showroom';
}elseif(strpos($slug, 'showroom-detail-view-category') !== false){
	$seo_page = 'showroom-cat';
}else{
	$seo_page = $slug;
}

$seo->setMeta($seo_page);

$meta_key_words = $seo->keywords;
$meta_title = $seo->title;
$meta_description = $seo->description;

if(strlen($meta_title<6)) $meta_title="Quality do-it-yourself organizer systems";
if(strlen($meta_description<6))$meta_description="Beautiful custom closet organizers at do-it-yourself prices. Guaranteed easy closet installation.";

$count_sub_des = number_format($count_sub_des);
$count_des_tool = number_format($count_des_tool);
$count_diy_inst = number_format($count_diy_inst);

$isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile")); 

require_once($real_root."/pages/controllers/".$slug.".php"); 

require_once($real_root."/pages/views/".$slug.".php"); 	

if(($slug!='design-request')
	&&($slug!='fax-a-design-plan')
	&&($slug!='free-in-home-consults')){
?>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous">
</script>
<?php
}
?>

<script>

function form_submit_design_request(){

	if(validate()){
		window.onbeforeunload = null;
		var uploader = $('#uploader').pluploadQueue();
		if (uploader.files.length > 0) {
            uploader.bind('StateChanged', function() {
                if (uploader.files.length === (uploader.total.uploaded + uploader.total.failed)) {
					document.form.submit();
                }
            });
            uploader.start();
        } else {
			document.form.submit();
        }
	}else{
	
	}
}

function get_site_root(){

	var str = window.location.hostname;
	var n = str.indexOf("localhost");
	if(n >= 0){		
		var url = window.location.href;	

		if(url.indexOf("storittek") > 0){
			return 	"http://localhost/storittek";	
		}

		if(url.indexOf("solvitware") > 0){
			return 	"http://localhost/solvitware";	
		}

		if(url.indexOf("closetstogo") > 0){
			return 	"http://localhost/closetstogo";	
		}
	}
	return str;	
}

function go_back(){
	history.go(-1);
}

function add_item(item_id){

	var qty = 1;
	var addMsg = "1 Item Added";
	var site_root = get_site_root();

	var url_str = site_root+"/pages/cart-ajax/ajax-add-item.php?item_id="+item_id+"&qty="+qty;

	$.ajaxSetup({ cache: false}); 
	$.ajax({
		url: url_str,
		success: function(data) {	
			//alert(data);
			$(".MS_item_count" ).each(function() {
				$(this).text(data);
			});
						
		}
	});
}


function add_item_buy_now(item_id){

	var qty = 1;
	var addMsg = "1 Item Added";
	var site_root = get_site_root();

	var url_str = site_root+"/pages/cart-ajax/ajax-add-item.php?item_id="+item_id+"&qty="+qty;

	$.ajaxSetup({ cache: false}); 
	$.ajax({
		url: url_str,
		success: function(data) {	
			$(".MS_item_count" ).each(function() {
				$(this).text(data);
			});
						
		}
	});

	window.location.href = site_root+"/shopping-cart.html"

}

function feat_img_swap(file_name){
	
	let site_root = "<?php echo SITEROOT; ?>";
	let img_path=site_root+"saascustuploads/1/cart/medium/wide/"+file_name;
	let element = document.getElementById('img-from-icons');
	element.src = img_path;
}

function feat_title_swap(title){

	let element = document.getElementById('feat_title');
	element.innerHTML = title;
}
function feat_sub_title_swap(sub_title){	
	let element = document.getElementById('feat_sub_title');
	element.innerHTML = sub_title;
}
function s_f_acces_img_swap(file_name){
	let site_root = "<?php echo SITEROOT; ?>";
	let img_path=site_root+"saascustuploads/1/cart/"+file_name;
	let element = document.getElementById('img-from-icons2');
	element.src = img_path;
}
function s_f_acces_title_swap(title){
	//alert('title');
	let element = document.getElementById('s_f_acces_title');
	element.innerHTML = title;
}
function s_f_acces_sub_title_swap(sub_title){
	let element = document.getElementById('s_f_acces_sub_title');
	element.innerHTML = sub_title;
}


function isValidEmail(str) { 
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(str))
	{
		return (true)
	}
    return (false)
	
}

function get_spec_data(spec_id){
	let site_root = "<?php echo SITEROOT; ?>";
	let url_str = site_root+"/ajax/ajax-get-spec.php?spec_id="+spec_id;
	document.getElementById("sizes").innerHTML = "";
	$.ajaxSetup({ cache: false}); 
	$.ajax({
	  url: url_str,
	  success: function(data) {		  
		document.getElementById("sizes").innerHTML = data;
	  }
	});
}

function clear_cart(){	
	var site_root = get_site_root();
	var url_str = site_root+"/pages/cart-ajax/ajax-clear-cart.php";
	$.ajaxSetup({ cache: false}); 
	$.ajax({
		url: url_str,
		success: function(data) {
			alert(data);				
		}
	});
	alert("CLEAR");	
}
*/

function sign_in(){
	$("#si_form").submit();

	var sign_in_email = $("#sign_in_email").val();
	var sign_in_pswd = $("#sign_in_pswd").val();
	var site_root = get_site_root();
	var url_str = site_root+"/ajax/ajax-sign-in.php?email="+sign_in_email+"&pswd="+sign_in_pswd;

	$.ajaxSetup({ cache: false}); 
	$.ajax({
	  url: url_str,
	  success: function(data) {
		if(data.indexOf("y") > -1){
			alert("signin success");
			show_logged_in_menu();
		}else{
			
			alert("signin problem");
	  	}
	  }
	});
}

function accessories_select_option(s_attr){

	var opt = 0;
	if(s_attr == 0){				
		opt  = $("#s_attr_0").val();
		$("#opt_0").val(opt);		
		alert("opt_0: "+opt);		
	}
	
	if(s_attr == 1){			
		opt  = $("#s_attr_1").val();		
		$("#opt_1").val(opt);				
		alert("opt_1: "+opt);	
	}
	
	if(s_attr == 2){				
		opt  = $("#s_attr_2").val();		
		$("#opt_2").val(opt);				
		alert("opt_2: "+opt);	
	}
	
	if(s_attr == 3){				
		opt  = $("#s_attr_3").val();		
		$("#opt_3").val(opt);				
		alert("opt_3: "+opt);	
	}
}

function getScreenWidth(){
	var h = $(window).height();
	var w = $(window).width();
}

function sign_out(){
	var site_root = get_site_root();

	var url_str = site_root+"/ajax/ajax-sign-out.php;
	$.ajaxSetup({ cache: false}); 
	$.ajax({
		url: url_str,
		success: function(data) {	
			alert(data);						
		}
	});

	window.location.href = site_root;
}


$('.js-account-login').on('click', function () {
    $(this).css('display', 'none');  
	$(this).siblings('.account-menu-visible').css('display', 'none');
    $(this).siblings('.account-menu-hidden').css('display', 'block');
	$(this).parents('.js-account-wrap').find('.dropdown-toggle.account').addClass('login');
    $(this).parents('.js-account-wrap').find('.account-name').css('display', 'inline-block');
});

$('.js-account-logout').on('click', function () {
    $(this).css('display', 'none');
    $(this).siblings('.account-menu-visible').css('display', 'block');
    $(this).siblings('.account-menu-hidden').css('display', 'none');
	$(this).parents('.js-account-wrap').find('.dropdown-toggle.account').removeClass('login');
    $(this).parents('.js-account-wrap').find('.account-name').css('display', 'none');
	
}); 

function click_item_count(item_id){
	
	var site_root = get_site_root();
	var url_str = site_root+"/ajax/ajax-click-item.php?item_id="+item_id;
	$.ajaxSetup({ cache: false}); 
	$.ajax({
		url: url_str,
		success: function(data) {	
			alert(data);
						
		}
	});

}
function click_cat_count(cat_id){
	
	var site_root = get_site_root();
	
	var url_str = site_root+"/ajax/ajax-click-cat.php?cat_id="+cat_id;
	$.ajaxSetup({ cache: false}); 
	$.ajax({
		url: url_str,
		success: function(data) {	
			alert(data);
						
		}
	});
	
}

function show_logged_in_menu(){
	
	$(".js-account-login").css('display', 'none');
	$(".js-account-login").siblings('.account-menu-visible').css('display', 'none');
	$(".js-account-login").siblings('.account-menu-hidden').css('display', 'block');
	$(".js-account-login").parents('.js-account-wrap').find('.dropdown-toggle.account').removeClass('login');
	$(".js-account-login").parents('.js-account-wrap').find('.account-name').css('display', 'inline-block');
	
}

function show_logged_out_menu(){

    $('.js-account-logout').css('display', 'none');
    $('.js-account-logout').siblings('.account-menu-visible').css('display', 'block');
    $('.js-account-logout').siblings('.account-menu-hidden').css('display', 'none');
	$('.js-account-logout').parents('.js-account-wrap').find('.dropdown-toggle.account').removeClass('login');
    $('.js-account-logout').parents('.js-account-wrap').find('.account-name').css('display', 'none');
}


</script>





