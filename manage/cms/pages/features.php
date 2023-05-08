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
$page_title = "Editing: features";
$page_group = "features";
$page = "features";
$ts = time();
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = "SELECT features_id FROM features WHERE profile_account_id = '".$_SESSION['profile_account_id']."'"; 
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows == 0){
	$sql = "INSERT INTO features 
		(profile_account_id) 
		VALUES ('".$_SESSION['profile_account_id']."')"; 
	$result = $dbCustom->getResult($db,$sql);	
	$_SESSION['features_id'] = $db->insert_id;
}else{
	if(isset($_REQUEST['features_id'])) $_SESSION['features_id'] = $_REQUEST['features_id'];
	if(!is_numeric($_SESSION['features_id'])) $_SESSION['features_id'] = 0;
}
$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';

if(isset($_POST['update_features'])){

	$seo_name	= 'features';
	$page	= 'features';
	$seo_name = (isset($_POST['seo_name']))? trim($_POST['seo_name']) : 'features';
	$seo_name = str_replace ('\'', '' , $seo_name);
	$seo_name = str_replace ('\"', '' , $seo_name);
	$seo_name = str_replace (' ', '-' , $seo_name);
	$title = (isset($_POST['title']))? trim(addslashes($_POST['title'])) : 'features';
	$keywords = (isset($_POST['keywords']))? trim(addslashes($_POST['keywords'])) : 'features';
	$description = (isset($_POST['description']))? trim(addslashes($_POST['description'])) : 'features';
	$page_heading = (isset($_POST['page_heading']))? trim(addslashes($_POST['page_heading'])) : 'features';

	require_once($real_root."/manage/cms/insert_page_seo.php");


}

$sql = "SELECT *
FROM features 
WHERE features_id = '".$_SESSION['features_id']."'";
$result = $dbCustom->getResult($db,$sql);	
if($result->num_rows > 0){
	$object = $result->fetch_object();
}else{
}

require_once($real_root.'/manage/cms/get_seo_variables.php');
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
		<?php require_once($real_root.'/manage/admin-includes/manage-side-nav.php'); ?>
	</div>
	<div class="manage_main">
		<center><h1>Features Page</h1></center>		
		<form name="form" action="features.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="features_id" value="<?php echo $_SESSION['features_id']; ?>">
		<input type="hidden" name="update_features" value="1">        
<a class="btn" style="float:left; margin:30px;" href="<?php echo SITEROOT;?>manage/cms/pages/page.php" >Cancel &amp; Go Back</a>

<input class="btn btn-primary" style="float:left; margin:30px;" type="submit" name="submit" value="Save Changes">			
		<div style="clear:both;"></div>
<?php 
require_once("edit_page_seo.php"); 
require_once($real_root."/manage/cms/edit_page_breadcrumb.php"); 
?>	
	</form>
		
	</div>
	<p class="clear"></p>
	<?php
	require_once($real_root.'/manage/admin-includes/manage-footer.php');
	?>
</div>

</body>
</html>
