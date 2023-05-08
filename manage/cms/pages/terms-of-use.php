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

$page_title = 'Edit: Terms of Use';
$page_group = 'terms-of-use';
$page = 'terms-of-use';
$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

$ts = time();
// add if not exist
$sql = "SELECT terms_of_use_id FROM terms_of_use WHERE profile_account_id = '".$_SESSION['profile_account_id']."'"; 
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows == 0){
	$sql = "INSERT INTO terms_of_use 
		(content, last_update, profile_account_id) 
		VALUES ('Add Content', '".$ts."', '".$_SESSION['profile_account_id']."')"; 
	$result = $dbCustom->getResult($db,$sql);
	$_SESSION['terms_of_use_id'] = $db->insert_id;
		
}else{
	$_SESSION['terms_of_use_id'] = (isset($_REQUEST['terms_of_use_id'])) ? $_REQUEST['terms_of_use_id'] : 0;
}
if(!is_numeric($_SESSION['terms_of_use_id'])) $_SESSION['terms_of_use_id'] = 0;


if(isset($_POST["update_terms_of_use"])){
	
	$content = trim(addslashes($_POST['content'])); 
	$seo_name = trim(addslashes($_POST['seo_name']));
	$seo_name = str_replace (' ', '-' , $seo_name);
	$title = trim(addslashes($_POST['title']));
	$keywords = trim(addslashes($_POST['keywords']));
	$description = trim(addslashes($_POST['description']));
	$heading = trim(addslashes($_POST['heading']));

	require_once($real_root."/manage/cms/insert_page_seo.php");
	$sql = sprintf("UPDATE terms_of_use SET content = '%s' WHERE terms_of_use_id = '%u'", 
	$content, $_SESSION['terms_of_use_id']);
	$result = $dbCustom->getResult($db,$sql);

	$msg = "Your change is now live.";
	
	require_once($real_root."/manage/cms/insert_page_breadcrumb.php");
	
}
	
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = "SELECT content, heading
    FROM terms_of_use 
 	WHERE terms_of_use_id = '".$_SESSION['terms_of_use_id']."'";
$result = $dbCustom->getResult($db,$sql);	
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$content = $object->content;
	$heading = $object->heading;
}else{
	$content = '';
	$heading = '';
}
	
if(!isset($_SESSION['temp_fields']['content'])) $_SESSION['temp_fields']['content'] = $content;
if(!isset($_SESSION['temp_fields']['heading'])) $_SESSION['temp_fields']['heading'] = $heading;
	
require_once($real_root."/manage/cms/get_seo_variables.php");

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

<script>
function regularSubmit() {
  document.form.action = '<?php echo $current_page; ?>';
  document.form.target = '_self';
  document.form.submit(); 
}	

</script>
</head>
<body>
<?php
	require_once($real_root.'/manage/admin-includes/manage-header.php');
	require_once($real_root.'/manage/admin-includes/manage-top-nav.php');
	
	
	
require_once($real_root."/manage/cms/get_seo_variables.php");	
	
?>
<div class="manage_page_container">
	<div class="manage_side_nav">
		<?php 
        require_once($real_root.'/manage/admin-includes/manage-side-nav.php');
        ?>
	</div>
	<div class="manage_main">
		<center><h1>Terms Page</h1></center>
		<?php 
   		require_once($real_root."/manage/admin-includes/class.admin_bread_crumb.php");	
		$bread_crumb = new AdminBreadCrumb;
		$bread_crumb->reSet();
		$bread_crumb->add("CMS", SITEROOT."manage/cms/cms-landing.php");		
		$bread_crumb->add("Pages", SITEROOT."manage/cms/pages/page.php");
		$bread_crumb->add("Terms of Use", '');
        echo $bread_crumb->output();
		
        require_once($real_root.'/manage/admin-includes/manage-content-t-category.php');
        ?>
        <form name="form" action="<?php echo $current_page; ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="update_terms_of_use" value="1">        
            <input type="hidden" name="terms_of_use_id" value="<?php echo $_SESSION['terms_of_use_id']; ?>">
			<div class="page_actions edit_page"> 
				<a onClick="regularSubmit();" href="#" class="btn btn-success btn-large"><i class="icon-ok icon-white"></i> Save </a>
             	<hr />
				<a href="<?php echo SITEROOT;?>manage/cms/pages/page.php" class="btn">Cancel &amp; Go Back</a>
				
			</div>
			<div class="page_content edit_page">
				<fieldset class="edit_content">
					<legend>Page Content <i class="icon-minus-sign icon-white"></i></legend>
                        <div class="colcontainer formcols">
                            <div class="twocols">
                                <label>Page Heading</label>
                            </div>
                            <div class="twocols">
                                <input type="text" id="heading" name="heading" value="<?php echo stripslashes($_SESSION['temp_fields']['heading']); ?>" />
                            </div>
                        </div>
					<div class="colcontainer">
						<textarea id="content" class="wysiwyg" name="content"><?php echo stripslashes($_SESSION['temp_fields']['content']); ?></textarea>
					</div>
				</fieldset>

	        <?php require_once("edit_page_seo.php"); ?>
    	    <?php require_once($real_root."/manage/cms/edit_page_breadcrumb.php"); ?>

			</div>
		</form>
		
    </div>
    <p class="clear"></p>
<?php 
require_once($real_root.'/manage/admin-includes/manage-footer.php');
?>

</div>

</body>
</html>


