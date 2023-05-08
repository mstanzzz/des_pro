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
$ts = time();
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$page_title = "Installation: Edit Introduction";
$page_group = "installation";
$page = "installation";
$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';
$sql = "SELECT installation_id FROM installation WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows == 0){
	$sql = "INSERT INTO installation
			(content, profile_account_id)
			VALUES ('Add Content', '".$_SESSION['profile_account_id']."')";
	$result = $dbCustom->getResult($db,$sql);
	$_SESSION['installation_id'] = $db->insert_id;
}else{
	if(isset($_REQUEST['installation_id'])) $_SESSION['installation_id'] = $_REQUEST['installation_id'];
	if(!is_numeric($_SESSION['installation_id'])) $_SESSION['installation_id'] = 0;
}

if(isset($_POST['add_installation_link'])){	
	/*
	$button_text = trim(addslashes($_POST['button_text']));
	$page_seo_id = $_POST['page_seo_id'];
	$color = $_POST['color'];
	$uploaded_file_id = $_POST['uploaded_file_id'];
	$local_url = (isset($_POST['local_url'])) ? trim($_POST['local_url']) : '';
	$sql = sprintf("INSERT INTO installation_link
					(button_text, color, page_seo_id, uploaded_file_id, local_url, installation_id)
					VALUES
					('%s','%s','%u','%u','%s','%u')",
				$button_text, $color, $page_seo_id, $uploaded_file_id, $local_url, $_SESSION['installation_id']);
	$result = $dbCustom->getResult($db,$sql);
	*/
}

if(isset($_POST['edit_installation_link'])){	
	/*
	$button_text = trim(addslashes($_POST['button_text']));
	$page_seo_id = $_POST['page_seo_id'];
	$color = $_POST['color'];
	$uploaded_file_id = $_POST['uploaded_file_id'];
	$installation_link_id = $_POST['installation_link_id'];
	
	$local_url = (isset($_POST['local_url'])) ? trim($_POST['local_url']) : '';
	
	$sql = sprintf("UPDATE installation_link
					SET button_text = '%s'
					 ,color = '%s'
					 ,page_seo_id = '%u'
					 ,uploaded_file_id = '%u'
					 ,local_url = '%s'
					 WHERE installation_link_id = '%u'",					 
				$button_text, $color, $page_seo_id, $uploaded_file_id, $local_url, $installation_link_id);
	$result = $dbCustom->getResult($db,$sql);
	*/
}

if(isset($_POST["update_installation"])){	

	$content = isset($_POST["content"])?  trim(addslashes($_POST["content"])) : '';
	$img_alt_text = isset($_POST["img_alt_text"])?  trim(addslashes($_POST["img_alt_text"])) : '';
	$img_id = isset($_POST["img_id"])?  $_POST["img_id"] : 0;

	$sql = sprintf("UPDATE installation SET content = '%s', img_id = '%u', img_alt_text = '%s' 
				WHERE installation_id = '%u'",
				$content, $img_id, $img_alt_text, $_SESSION["installation_id"]);
	$msg = "Your change is now live.";
	
	$result = $dbCustom->getResult($db,$sql);

	$seo_name = isset($_POST["seo_name"])?  trim(addslashes($_POST["seo_name"])) : '';
	$seo_name = str_replace (" ", "-" , $seo_name);
	$title = isset($_POST["title"])?  trim(addslashes($_POST["title"])) : '';
	$keywords = isset($_POST["keywords"])?  trim(addslashes($_POST["keywords"])) : '';
	$description = isset($_POST["description"])?  trim(addslashes($_POST["description"])) : '';
	$page_heading = isset($_POST["page_heading"])?  trim(addslashes($_POST["page_heading"])) : '';
	
	require_once($real_root."/manage/cms/insert_page_seo.php");
	require_once($real_root."/manage/cms/insert_page_breadcrumb.php");
	unset($_SESSION['temp_fields']);
}
unset($_SESSION["installation_link_id"]);
unset($_SESSION["uploaded_file_id"]);
unset($_SESSION["temp_istallation_link_fields"]);

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
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = "SELECT content, img_id, img_alt_text 
	    FROM installation 
 		WHERE installation_id = '".$_SESSION["installation_id"]."'";
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$content = $object->content;
	$img_id = $object->img_id;
	$img_alt_text = $object->img_alt_text;
}else{
	$content = '';
	$img_id = 0;
	$img_alt_text = '';
}
if(!isset($_SESSION['img_id'])) $_SESSION['img_id'] = 0;
if($_SESSION['img_id'] == 0) $_SESSION['img_id'] = $img_id;
if(!isset($_SESSION['temp_fields']['content'])) $_SESSION['temp_fields']['content'] = $content;
if(!isset($_SESSION['temp_fields']['img_alt_text'])) $_SESSION['temp_fields']['img_alt_text'] = $img_alt_text;
require_once($real_root."/manage/cms/get_seo_variables.php");
if(!isset($_SESSION['temp_fields']['page_heading'])) $_SESSION['temp_fields']['page_heading'] = $page_heading;
if(!isset($_SESSION['temp_fields']['seo_name'])) $_SESSION['temp_fields']['seo_name'] = $seo_name
?>
<div class="manage_page_container">
	<div class="manage_side_nav">
		<?php
        require_once($real_root.'/manage/admin-includes/manage-side-nav.php');
        ?>
	</div>
	<div class="manage_main">
		<?php
        require_once($real_root.'/manage/admin-includes/manage-content-top.php');
        require_once($real_root."/manage/admin-includes/installation-section-tabs.php");
        ?>

<form name="form" action="installation.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="update_installation" value="1">        
<input type="hidden" name="installation_id" value="<?php echo $_SESSION["installation_id"]; ?>">
<input type="hidden" name="img_id" value="<?php echo $_SESSION['img_id']; ?>">

<a class="btn" style="float:left; margin:30px;" href="<?php echo SITEROOT;?>manage/cms/pages/page.php" >Cancel &amp; Go Back</a>
<input class="btn btn-primary" style="float:left; margin:30px;" type="submit" name="submit" value="Save Changes">			
<div style="clear:both;"></div>
				
<textarea rows="28" name="content" ><?php echo stripslashes($_SESSION['temp_fields']['content']); ?></textarea>

</form>
</div>
</div>

<p class="clear"></p>
</body>
</html>
