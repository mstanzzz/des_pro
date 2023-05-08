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

$page_title = "Process";
$page_group = "process";
$page = "process";

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

$ts = time();

// add if not exist
$sql = "SELECT process_page_id FROM process_page WHERE profile_account_id = '".$_SESSION['profile_account_id']."'"; 
$result = $dbCustom->getResult($db,$sql);

if($result->num_rows == 0){
	$sql = "INSERT INTO process_page 
		(profile_account_id) 
		VALUES ('".$_SESSION['profile_account_id']."')"; 
	$result = $dbCustom->getResult($db,$sql);	
	$_SESSION['process_page_id'] = $db->insert_id;
}else{
	$_SESSION['process_page_id'] = (isset($_REQUEST['process_page_id'])) ? $_REQUEST['process_page_id'] : 0;
}

if(!is_numeric($_SESSION['process_page_id'])) $_SESSION['process_page_id'] = 0;

$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';

if(isset($_POST['update_process_page'])){

	$seo_name	= 'process';
	$page	= 'process';
	$seo_name = (isset($_POST['seo_name']))? trim($_POST['seo_name']) : 'process';
	$seo_name = str_replace ('\'', '' , $seo_name);
	$seo_name = str_replace ('\"', '' , $seo_name);
	$seo_name = str_replace (' ', '-' , $seo_name);
	$title = (isset($_POST['title']))? trim(addslashes($_POST['title'])) : 'process';
	$keywords = (isset($_POST['keywords']))? trim(addslashes($_POST['keywords'])) : 'process';
	$description = (isset($_POST['description']))? trim(addslashes($_POST['description'])) : 'process';
	$page_heading = (isset($_POST['page_heading']))? trim(addslashes($_POST['page_heading'])) : 'process';

	require_once($real_root."/manage/cms/insert_page_seo.php");
	unset($_SESSION['temp_fields']);

}


if(isset($_POST['del_img_id'])){

	$del_img_id = (isset($_POST['del_img_id']))? $_POST['del_img_id'] : 0;	

	$sql = "SELECT file_name FROM image WHERE img_id = '".$del_img_id."'";
	$result = $dbCustom->getResult($db,$sql);
	
	if($result->num_rows > 0){
		$object = $result->fetch_object();		
		$p = $_SERVER['DOCUMENT_ROOT']."/saascustuploads/".$_SESSION['profile_account_id']."/cms/".$object->file_name;		
		if(file_exists($p)) unlink($p);
	}

	$sql = "DELETE FROM image 
	WHERE img_id = '".$del_img_id."'";
	$result = $dbCustom->getResult($db,$sql);	

}

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = "SELECT *
FROM process_page 
WHERE process_page_id = '".$_SESSION['process_page_id']."'";
$result = $dbCustom->getResult($db,$sql);	
if($result->num_rows > 0){
	$object = $result->fetch_object();
		
}else{

}

require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>
<script>
tinymce.init({
	selector: 'textarea',
	plugins: 'advlist link image lists code',
	forced_root_block : false

});

function validate(theform){
			
	return true;
}

function set_session(){
	
}

function get_query_str(){
	
	var query_str = '';
	return query_str;
}

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
		<center><h1>Process Page</h1></center>


	
	<form name="form" action="<?php echo $current_page; ?>" method="post" enctype="multipart/form-data">
		<input type="hidden" name="update_process_page" value="1">        
		<input type="hidden" name="process_page_id" value="<?php echo $_SESSION['process_page_id']; ?>">

     	<div class="page_actions edit_page">
			<input type="submit" value="Save Changes" class="btn btn-success btn-large">
			<hr />
			<a href="<?php echo SITEROOT;?>manage/cms/pages/page.php" class="btn">Cancel &amp; Go Back</a>
		</div>
				
		<div class="colcontainer">                
<?php 
require_once($real_root."/manage/cms/get_seo_variables.php");
require_once("edit_page_seo.php"); 
?>	


		</form>
	</div>
	<p class="clear"></p>
</div>


<!-- New Delete Dialogue -->
<div id="content-delete" class="confirm-content">
	<h3>Are you sure you want to delete this banner?</h3>
	<form name="del_banner" action="home.php" method="post" target="_top">
		<input id="del_banner_id" class="itemId" type="hidden" name="del_banner_id" value='' />
		<a class="btn btn-large dismiss">No, Cancel</a>
		<button class="btn btn-danger btn-large" name="del_banner" type="submit" >Yes, Delete</button>
	</form>
</div>
<div id="content-delete" class="confirm-content">
	<h3>Are you sure you want to delete this submit button?</h3>
	<form name="del_submit_button" action="home.php" method="post" target="_top">
		<input id="del_submit_button_id" class="itemId2" type="hidden" name="del_submit_button_id" value='' />
		<a class="btn btn-large dismiss">No, Cancel</a>
		<button class="btn btn-danger btn-large" name="del_submit_button" type="submit" >Yes, Delete</button>
	</form>
</div>


<div class="disabledMsg">
	<p>Sorry, this item can't be deleted or inactive.</p>
</div>
<!-- New Edit Dialogue 
<div id="content-edit" class="confirm-content">
	<form name="edit_faq_cat" action="faq.php" method="post" target="_top">
		<input id="faq_cat_id" type="hidden" class="itemId" name="faq_cat_id" value='' />
		<fieldset class="colcontainer">
			<label>Edit Banner</label>
			<input type="text" class="contentToEdit"  name="added_category" value=''>
		</fieldset>
		<a class="btn btn-large dismiss"> Cancel </a>
		<button name="edit_faq_cat" type="submit" class="btn btn-large btn-success"><i class="icon-ok icon-white"></i> Save </button>
	</form>
</div>
-->
	


</body>
</html>
