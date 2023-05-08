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

$page_title = "We Design";
$page_group = "we-design";
$page = "we-design";

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$ts = time();
$we_design_id = (isset($_REQUEST['we_design_id'])) ? $_REQUEST['we_design_id'] : 0;

// add if not exist
$sql = "SELECT we_design_id FROM we_design WHERE profile_account_id = '".$_SESSION['profile_account_id']."'"; 
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows == 0){
	$sql = "INSERT INTO we_design 
		(profile_account_id) 
		VALUES ('".$_SESSION['profile_account_id']."')"; 
	$result = $dbCustom->getResult($db,$sql);
	$we_design_id = $db->insert_id;
}

if(!isset($_SESSION['we_design_id'])) $_SESSION['we_design_id'] = $we_design_id;

$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';

if(isset($_POST['update'])){
	
	$img_id = isset($_POST['img_id'])? $_POST['img_id'] : 0;
	if(!is_numeric($img_id)) $img_id = 0;

	$p_1_head = (isset($_POST['p_1_head']))? trim(addslashes($_POST['p_1_head'])) : '';
	$p_1_text = (isset($_POST['p_1_text']))? trim(addslashes($_POST['p_1_text'])) : '';
	$p_2_head = (isset($_POST['p_2_head']))? trim(addslashes($_POST['p_2_head'])) : '';
	$p_2_text = (isset($_POST['p_2_text']))? trim(addslashes($_POST['p_2_text'])) : '';

	$stmt = $db->prepare("UPDATE we_design
						SET img_1_id = ?
							,p_1_head = ?
							,p_1_text = ?
							,p_2_head = ?
							,p_2_text = ?
						WHERE we_design_id = ?");
		//echo 'Error-1 UPDATE   '.$db->error;
	if(!$stmt->bind_param("issssi"
						,$img_id
						,$p_1_head
						,$p_1_text	
						,$p_2_head
						,$p_2_text													
						,$_SESSION['we_design_id'])){
		echo 'Error-2 UPDATE   '.$db->error;
	}else{
		$stmt->execute();
		$stmt->close();				
		$msg = "Updated";
	}
	
	$seo_name	= 'we-design';
	$page	= 'we-design';
	$seo_name = (isset($_POST['seo_name']))? trim($_POST['seo_name']) : 'we-design';
	$seo_name = str_replace ('\'', '' , $seo_name);
	$seo_name = str_replace ('\"', '' , $seo_name);
	$seo_name = str_replace (' ', '-' , $seo_name);
	$title = (isset($_POST['title']))? trim(addslashes($_POST['title'])) : 'we-design';
	$keywords = (isset($_POST['keywords']))? trim(addslashes($_POST['keywords'])) : 'we-design';
	$description = (isset($_POST['description']))? trim(addslashes($_POST['description'])) : 'we-design';
	$page_heading = (isset($_POST['page_heading']))? trim(addslashes($_POST['page_heading'])) : 'we-design';

	require_once($real_root."/manage/cms/insert_page_seo.php");

	unset($_SESSION['p_1_head']);
	unset($_SESSION['p_1_text']);
	unset($_SESSION['p_2_head']);
	unset($_SESSION['p_2_text']);

}

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = "SELECT *
    FROM we_design 
 	WHERE we_design_id = '".$_SESSION['we_design_id']."'";
$result = $dbCustom->getResult($db,$sql);	
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$img_1_id = $object->img_1_id;	
	$p_1_head = $object->p_1_head;	
	$p_1_text = $object->p_1_text;	
	$p_2_head = $object->p_2_head;	
	$p_2_text = $object->p_2_text;	
	
}else{
	$img_1_id = 0;	
	$p_1_head = '';	
	$p_1_text = '';	
	$p_2_head = '';	
	$p_2_text = '';	

}

if(!isset($_SESSION['img_id'])) $_SESSION['img_id'] = $img_1_id;

if(!isset($_SESSION['p_1_head'])) $_SESSION['p_1_head'] = $p_1_head;
if(!isset($_SESSION['p_1_text'])) $_SESSION['p_1_text'] = $p_1_text;

if(!isset($_SESSION['p_2_head'])) $_SESSION['p_2_head'] = $p_2_head;
if(!isset($_SESSION['p_2_text'])) $_SESSION['p_2_text'] = $p_2_text;
		
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

<script>

function validate(theform){
			
	return true;
}

function ajax_set_page_session(){
	
	var q_str = "?page=we-design-fax"+get_query_str();
		
	//alert(q_str);
	
	$.ajaxSetup({ cache: false}); 
	$.ajax({
	  url: 'ajax_set_page_session.php'+q_str,
	  success: function(data) {
			//alert(data);
	  }
	});
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
		<?php require_once($real_root.'/manage/admin-includes/manage-side-nav.php'); ?>
	</div>
	<div class="manage_main">

	<form name="form" action="we-design.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="update" value="1">        
		<input type="hidden" name="we_design_id" value="<?php echo $_SESSION['we_design_id']; ?>">		

<a class="btn" style="float:left; margin:30px;" href="<?php echo SITEROOT;?>manage/cms/pages/page.php" >Cancel &amp; Go Back</a>
<input class="btn btn-success btn-large" style="float:left; margin:30px;" type="submit" name="submit" value="Save Changes">			

<table cellpadding="10" width="100%" border="1">

<!--
<tr>
<td colspan="3">
<?php
/*
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = "SELECT file_name FROM image 
WHERE img_id = '".$_SESSION['img_id']."'";
$img_res = $dbCustom->getResult($db,$sql);							
if($img_res->num_rows){
	$img_obj = $img_res->fetch_object();
	$img_str = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cms/".$img_obj->file_name;
	echo "<img width='100%' src='".$img_str."'>";	
}
*/
?>
</td>
</tr>

<tr>
<td>
<?php 
/*
$url_str = SITEROOT."manage/upload-pre-crop.php";
$url_str .= "?ret_page=we-design";
$url_str .= "&ret_path=cms/pages";
$url_str .= "&ret_dir=cms";
$url_str .= "&img_type=hero";
$url_str .= "&crop_n=1";
*/
?>
<a style="margin:30px; color:#52ffff; 16px;" 
onClick="set_cat_session()" href="<?php echo $url_str; ?>" class="btn btn-info">Upload Hero</a>
</td>
<td>img_id
<input type="text" name="img_id"  style="width:8%;" value="<?php echo $_SESSION['img_id']; ?>">
</td>
<td></td>
</tr>
-->

<tr>
<td>p_1_head</td>
<td colspan="2">
<input type="text" name="p_1_head"  style="width:80%;" value="<?php echo stripslashes($_SESSION['p_1_head']); ?>">
</td>
</tr>
<tr>
<td>p_1_text</td>
<td colspan="2">
<input type="text" name="p_1_text"  style="width:80%;" value="<?php echo stripslashes($_SESSION['p_1_text']); ?>">
</td>
</tr>
<tr>
<td>p_2_head</td>
<td colspan="2">
<input type="text" name="p_2_head"  style="width:80%;" value="<?php echo stripslashes($_SESSION['p_2_head']); ?>">
</td>
</tr>
<tr>
<td>p_2_text</td>
<td colspan="2">
<input type="text" name="p_2_text"  style="width:80%;" value="<?php echo stripslashes($_SESSION['p_2_text']); ?>">
</td>
</tr>

</table>

							
<?php 
require_once($real_root."/manage/cms/get_seo_variables.php");				
require_once("edit_page_seo.php"); 
//require_once($real_root."/manage/cms/edit_page_breadcrumb.php"); 
?>	
		
</form>	
</div>
</div>	
</body>
</html>
