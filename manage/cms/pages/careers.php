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

$page_title = "careers";
$page_group = "careers";
$page = "careers";

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

$ts = time();

// add if not exist
$sql = "SELECT careers_id FROM careers WHERE profile_account_id = '".$_SESSION['profile_account_id']."'"; 
$result = $dbCustom->getResult($db,$sql);

if($result->num_rows == 0){
	$sql = "INSERT INTO careers 
		(profile_account_id) 
		VALUES ('".$_SESSION['profile_account_id']."')"; 
	$result = $dbCustom->getResult($db,$sql);	
	$_SESSION['careers_id'] = $db->insert_id;
}else{
	$_SESSION['careers_id'] = (isset($_REQUEST['careers_id'])) ? $_REQUEST['careers_id'] : 0;
}

if(!is_numeric($_SESSION['careers_id'])) $_SESSION['careers_id'] = 0;

$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';

if(isset($_POST['update'])){

	$seo_name	= 'careers';
	$page	= 'careers';
	$seo_name = (isset($_POST['seo_name']))? trim($_POST['seo_name']) : 'careers';
	$seo_name = str_replace ('\'', '' , $seo_name);
	$seo_name = str_replace ('\"', '' , $seo_name);
	$seo_name = str_replace (' ', '-' , $seo_name);
	$title = (isset($_POST['title']))? trim(addslashes($_POST['title'])) : 'careers';
	$keywords = (isset($_POST['keywords']))? trim(addslashes($_POST['keywords'])) : 'careers';
	$description = (isset($_POST['description']))? trim(addslashes($_POST['description'])) : 'careers';
	$page_heading = (isset($_POST['page_heading']))? trim(addslashes($_POST['page_heading'])) : 'careers';

	require_once($real_root."/manage/cms/insert_page_seo.php");
	unset($_SESSION['temp_fields']);

}

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = "SELECT *
FROM careers 
WHERE careers_id = '".$_SESSION['careers_id']."'";
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
	<center><h1>Careers Page</h1></center>	
	<form name="form" action="<?php echo $current_page; ?>" method="post" enctype="multipart/form-data">
		<input type="hidden" name="update" value="1">        
		<input type="hidden" name="careers_id" value="<?php echo $_SESSION['careers_id']; ?>">

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


</body>
</html>
