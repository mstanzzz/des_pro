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

require_once($real_root.'/manage/admin-includes/manage-includes.php');

$progress = new SetupProgress;
$module = new Module;
$page_title = "Edit Privacy Statement";
$page_group = "privacy-statement";
$page = "privacy-statement";
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$msg = '';
$ts = time();
$sql = "SELECT privacy_statement_id FROM privacy_statement WHERE profile_account_id = '".$_SESSION['profile_account_id']."'"; 
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows == 0){
	$sql = "INSERT INTO privacy_statement 
		(content, last_update, profile_account_id) 
		VALUES ('Add Content', '".$ts."', '".$_SESSION['profile_account_id']."')"; 
	
	$result = $dbCustom->getResult($db,$sql);
	$_SESSION['privacy_statement_id'] = $db->insert_id;
}else{
	$_SESSION['privacy_statement_id'] = (isset($_REQUEST['privacy_statement_id'])) ? $_REQUEST['privacy_statement_id'] : 0;
}
if(!is_numeric($_SESSION['privacy_statement_id'])) $_SESSION['privacy_statement_id'] = 0;

if(isset($_POST["update"])){
	
	$seo_name	= 'privacy-statement';
	$page	= 'privacy-statement';
	$seo_name = (isset($_POST['seo_name']))? trim($_POST['seo_name']) : 'privacy-statement';
	$seo_name = str_replace ('\'', '' , $seo_name);
	$seo_name = str_replace ('\"', '' , $seo_name);
	$seo_name = str_replace (' ', '-' , $seo_name);
	$title = (isset($_POST['title']))? trim(addslashes($_POST['title'])) : 'privacy-statement';
	$keywords = (isset($_POST['keywords']))? trim(addslashes($_POST['keywords'])) : 'privacy-statement';
	$description = (isset($_POST['description']))? trim(addslashes($_POST['description'])) : 'privacy-statement';
	$page_heading = (isset($_POST['page_heading']))? trim(addslashes($_POST['page_heading'])) : 'privacy-statement';

	require_once($real_root."/manage/cms/insert_page_seo.php");
	unset($_SESSION['temp_fields']);


}

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = sprintf("SELECT * 
 				FROM privacy_statement 
    			WHERE privacy_statement_id = '%u'", $_SESSION['privacy_statement_id']);
$result = $dbCustom->getResult($db,$sql);	
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$content = $object->content;
}else{
	$content = '';
}
if(!isset($_SESSION['temp_fields']['content'])) $_SESSION['temp_fields']['content'] = $content;


require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>
<script src="https://cdn.tiny.cloud/1/iyk23xxriyqcd2gt44r230a2yjinya99cx1kd3tk9huatz50/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
tinymce.init({
	selector: 'textarea',
	plugins: 'advlist link image lists code',
	forced_root_block : false

});
</script>
</head>
<body>
<?php
	require_once($real_root.'/manage/admin-includes/manage-header.php');
	require_once($real_root.'/manage/admin-includes/manage-top-nav.php');
?>
<div class="manage_page_container">
	<div class="manage_side_nav">
		<?php 
        require_once($real_root.'/manage/admin-includes/manage-side-nav.php');
        ?>
	</div>
	<div class="manage_main">
		<form name="form" action="<?php echo $current_page; ?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="update" value="1">
			<input type="hidden" name="privacy_statement_id" value="<?php echo $_SESSION['privacy_statement_id']; ?>">
		<a class="btn" style="float:left; margin:30px;" href="<?php echo SITEROOT;?>manage/cms/pages/page.php" >Cancel &amp; Go Back</a>

		<input class="btn btn-primary" style="float:left; margin:30px;" type="submit" name="submit" value="Save Changes">			
				
	<p class="clear"></p>
	
	<?php 
require_once($real_root."/manage/cms/get_seo_variables.php");	
require_once("edit_page_seo.php"); 
	?>
	</form>
	</div>
<p class="clear"></p>

</div>
</body>
</html>



