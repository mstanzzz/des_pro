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
$ts = time();
$progress = new SetupProgress;
$module = new Module;
$page_title = "Editing: for-the-pros";
$page_group = "for-the-pros";
$page = "for-the-pros";
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$ts = time();
$sql = "SELECT for_the_pros_id FROM for_the_pros WHERE profile_account_id = '".$_SESSION['profile_account_id']."'"; 
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows == 0){
	$sql = "INSERT INTO for_the_pros 
		(profile_account_id) 
		VALUES ('".$_SESSION['profile_account_id']."')"; 
	$result = $dbCustom->getResult($db,$sql);	
	$_SESSION['for_the_pros_id'] = $db->insert_id;
}else{
	$_SESSION['for_the_pros_id'] = (isset($_REQUEST['for_the_pros_id'])) ? $_REQUEST['for_the_pros_id'] : 0;
}
if(!is_numeric($_SESSION['for_the_pros_id'])) $_SESSION['for_the_pros_id'] = 0;
$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';


if(isset($_POST['update'])){


	$seo_name	= 'for-the-pros';
	$page	= 'for-the-pros';
	$seo_name = (isset($_POST['seo_name']))? trim($_POST['seo_name']) : 'for-the-pros';
	$seo_name = str_replace ('\'', '' , $seo_name);
	$seo_name = str_replace ('\"', '' , $seo_name);
	$seo_name = str_replace (' ', '-' , $seo_name);
	$title = (isset($_POST['title']))? trim(addslashes($_POST['title'])) : 'for-the-pros';
	$keywords = (isset($_POST['keywords']))? trim(addslashes($_POST['keywords'])) : 'for-the-pros';
	$description = (isset($_POST['description']))? trim(addslashes($_POST['description'])) : 'for-the-pros';
	$page_heading = (isset($_POST['page_heading']))? trim(addslashes($_POST['page_heading'])) : 'for-the-pros';

	require_once($real_root."/manage/cms/insert_page_seo.php");
	unset($_SESSION['temp_fields']);
}

if(isset($_POST['del_img_id'])){

	$del_img_id = (isset($_POST['del_img_id']))? $_POST['del_img_id'] : 0;	
	if(!is_numeric($del_img_id)) $del_img_id = 0;

	$sql = "SELECT file_name FROM image WHERE img_id = '".$del_img_id."'";
	$result = $dbCustom->getResult($db,$sql);
	
	if($result->num_rows > 0){
		$object = $result->fetch_object();		
		$p = $real_root."/saascustuploads/".$_SESSION['profile_account_id']."/cms/".$object->file_name;		
		if(file_exists($p)) unlink($p);
	}

	$sql = "DELETE FROM image 
	WHERE img_id = '".$del_img_id."'";
	$result = $dbCustom->getResult($db,$sql);	

}


$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = "SELECT *
FROM for_the_pros 
WHERE for_the_pros_id = '".$_SESSION['for_the_pros_id']."'";
$result = $dbCustom->getResult($db,$sql);	
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$img_id = $object->img_id;
		
}else{
	$img_id = 0;

}

require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>
<script src="https://cdn.tiny.cloud/1/iyk23xxriyqcd2gt44r230a2yjinya99cx1kd3tk9huatz50/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
tinymce.init({
	selector: 'textarea',
	plugins: 'advlist link image lists code',
	forced_root_block : false
});

function does_exist(ele){
    if (ele !== undefined) {
        return 1;
    }else{
		return 0;
	}
}
	
function get_query_str(){

	var query_str = '';

	if(does_exist(document.edit_item.floor_size)){
		query_str += "&floor_size="+document.edit_item.floor_size.value;
	}
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
		<center><h1>For The Pros Page</h1></center>			
		<form name="form" action="for-the-pros.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="update" value="1">        
		<input type="hidden" name="for_the_pros_id" value="<?php echo $_SESSION['for_the_pros_id']; ?>">
		<a class="btn" style="float:left; margin:30px;" href="<?php echo SITEROOT;?>manage/cms/pages/page.php" >Cancel &amp; Go Back</a>
		<input class="btn btn-primary" style="float:left; margin:30px;" type="submit" name="submit" value="Save Changes">			


<?php 

require_once($real_root."/manage/cms/get_seo_variables.php");
require_once("edit_page_seo.php"); 
?>	




	</div>
</div>



</body>
</html>
