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
$module = new Module;$page_title = "Editing: features details";
$page_group = "features-details";
$page = "features-details";
$ts = time();
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
// add if not exist
$sql = "SELECT features_details_id FROM features_details 
WHERE profile_account_id = '".$_SESSION['profile_account_id']."'"; 
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows == 0){
	$sql = "INSERT INTO features_details 
		(profile_account_id) 
		VALUES ('".$_SESSION['profile_account_id']."')"; 
	$result = $dbCustom->getResult($db,$sql);	
	$_SESSION['features_details_id'] = $db->insert_id;
}else{
	if(isset($_REQUEST['features_details_id'])) $_SESSION['features_details_id'] = $_REQUEST['features_details_id'];
	if(!is_numeric($_SESSION['features_details_id'])) $_SESSION['features_details_id'] = 0;
}
$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';
if(isset($_POST['update_features'])){
	$p_1_text = isset($_POST['p_1_text'])? addslashes(trim($_POST['p_1_text'])) : '';
	$stmt = $db->prepare("UPDATE features_details
						SET p_1_text = ? 												
						WHERE features_details_id = ?");
		//echo 'Error-1 UPDATE   '.$db->error;
	if(!$stmt->bind_param("si"
						,$p_1_text									
						,$_SESSION['features_details_id'])){
		echo 'Error-2 UPDATE   '.$db->error;
		echo "<br />";
	}else{
		$stmt->execute();
		$stmt->close();				
		$msg = "Updated";
	}
	$seo_name	= '';
	$page	= 'features-details';
	$seo_name = (isset($_POST['seo_name']))? trim($_POST['seo_name']) : '';
	$seo_name = str_replace ('\'', '' , $seo_name);
	$seo_name = str_replace ('\"', '' , $seo_name);
	$seo_name = str_replace (' ', '-' , $seo_name);
	$title = (isset($_POST['title']))? trim(addslashes($_POST['title'])) : '';
	$keywords = (isset($_POST['keywords']))? trim(addslashes($_POST['keywords'])) : '';
	$description = (isset($_POST['description']))? trim(addslashes($_POST['description'])) : '';
	$page_heading = (isset($_POST['page_heading']))? trim(addslashes($_POST['page_heading'])) : '';
	
	require_once($real_root.'/manage/cms/insert_page_seo.php');
}

$sql = "SELECT *
FROM features_details 
WHERE features_details_id = '".$_SESSION['features_details_id']."'";
$result = $dbCustom->getResult($db,$sql);	
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$_SESSION['temp_fields']['p_1_text'] = $object->p_1_text;
}else{
	$_SESSION['temp_fields']['p_1_text'] = '';
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
	<form name="form" action="features-details.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="features_details_id" value="<?php echo $_SESSION['features_details_id']; ?>">
		<input type="hidden" name="update_features" value="1">        

		<a class="btn" style="float:left; margin:30px;" href="<?php echo SITEROOT;?>manage/cms/pages/page.php" >Cancel &amp; Go Back</a>
		<input class="btn btn-primary" style="float:left; margin:30px;" type="submit" name="submit" value="Save Changes">			
		<div style="clear:both;"></div>

		<label>p_1_text</label>
		<textarea rows="38" name="p_1_text"><?php echo stripslashes($_SESSION['temp_fields']['p_1_text']); ?></textarea>
				
<?php 
$page_heading = 'page_heading';
$seo_name = $_SESSION['temp_fields']['seo_name'];
$title = $_SESSION['temp_fields']['title'];
$keywords = $_SESSION['temp_fields']['keywords'];	
$description = $_SESSION['temp_fields']['description'];
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

<div class="disabledMsg">
	<p>Sorry, this item can't be deleted or inactive.</p>
</div>

</body>
</html>

