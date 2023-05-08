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
$page_title = "Editing: Showroom Details";
$page_group = "showroom_details";
$page = "showroom_details";
if(!isset($_SESSION['img_id'])) $_SESSION['img_id'] = 0;
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$ts = time();
$sql = "SELECT showroom_details_id FROM showroom_details WHERE profile_account_id = '".$_SESSION['profile_account_id']."'"; 
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows == 0){
	$sql = "INSERT INTO showroom_details 
		(profile_account_id) 
		VALUES ('".$_SESSION['profile_account_id']."')"; 
	$result = $dbCustom->getResult($db,$sql);	
	$_SESSION['showroom_details_id'] = $db->insert_id;
}else{
	$_SESSION['showroom_details_id'] = (isset($_REQUEST['showroom_details_id'])) ? $_REQUEST['showroom_details_id'] : 0;
}
if(!is_numeric($_SESSION['showroom_details_id'])) $_SESSION['showroom_details_id'] = 0;
$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';

if(isset($_POST['update_showroom'])){
		
	$top_1 = isset($_POST['top_1'])? addslashes(trim($_POST['top_1'])) : '';
	$top_2 = isset($_POST['top_2'])? addslashes(trim($_POST['top_2'])) : '';
	$top_3 = isset($_POST['top_3'])? addslashes(trim($_POST['top_3'])) : '';

	$p_1_head = isset($_POST['p_1_head'])? addslashes(trim($_POST['p_1_head'])) : '';
	$p_1_text = isset($_POST['p_1_text'])? addslashes(trim($_POST['p_1_text'])) : '';
	if(isset($_POST['img_id'])) $_SESSION['img_id'] = $_POST['img_id']; 
	
	$_SESSION['temp_fields']['top_1'] = $top_1;	
	$_SESSION['temp_fields']['top_2'] = $top_2;	
	$_SESSION['temp_fields']['top_3'] = $top_3;	
	
	$_SESSION['temp_fields']['p_1_head'] = $p_1_head;	
	$_SESSION['temp_fields']['p_1_text'] = $p_1_text;	
	
	$stmt = $db->prepare("UPDATE showroom_details
						SET
						top_1 = ?
						,top_2 = ?
						,top_3 = ?
						,p_1_head = ?
						,p_1_text = ?
						,img_id = ?
						WHERE showroom_details_id = ?");
						
		echo 'Error-1 UPDATE   '.$db->error;
		
	if(!$stmt->bind_param("sssssii"
						,$top_1
						,$top_2
						,$top_3	
						,$p_1_head
						,$p_1_text
						,$_SESSION['img_id']						
						,$_SESSION['showroom_details_id'])){
							
		echo 'Error-2 UPDATE   '.$db->error;
		
	}else{
		$stmt->execute();
		$stmt->close();				
		$msg = "Updated";
	}

	require_once($real_root.'/manage/cms/insert_page_seo.php');
}


$sql = "SELECT *
FROM showroom_details 
WHERE showroom_details_id = '".$_SESSION['showroom_details_id']."'";
$result = $dbCustom->getResult($db,$sql);	

if($result->num_rows > 0){
	$object = $result->fetch_object();
	
	$top_1 = $object->top_1;
	$top_2 = $object->top_2;
	$top_3 = $object->top_3;
	
	$p_1_head = $object->p_1_head;
	$p_1_text = $object->p_1_text;
	$img_id = $object->img_id;
}else{
	
	$top_1='';
	$top_2='';
	$top_3='';
	$p_1_head = '';
	$p_1_text = '';
	$img_id = 0;
}

if($_SESSION['img_id'] > 0 && $img_id == 0){

	$sql = "UPDATE showroom_details
			SET img_id = '".$_SESSION['img_id']."' 		 
			WHERE showroom_details_id = '".$_SESSION['showroom_details_id']."'";
	$result = $dbCustom->getResult($db,$sql);	
	$img_id	= $_SESSION['img_id'];		
}
$_SESSION['temp_fields']['top_1'] = $top_1;	
$_SESSION['temp_fields']['top_2'] = $top_2;	
$_SESSION['temp_fields']['top_3'] = $top_3;	
$_SESSION['temp_fields']['p_1_head'] = $p_1_head;	
$_SESSION['temp_fields']['p_1_text'] = $p_1_text;	
require_once($real_root.'/manage/admin-includes/doc_header.php'); 

if(!isset($_SESSION['img_id']))$_SESSION['img_id'] = 0;
if($_SESSION['img_id'] == 0) $_SESSION['img_id'] = $img_id;

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
	<?php 	
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = "SELECT file_name 
		FROM image
		WHERE img_id = '".$_SESSION['img_id']."'";
$img_res = $dbCustom->getResult($db,$sql);
if($img_res->num_rows > 0){
	$img_obj = $img_res->fetch_object();
	$file_name = $img_obj->file_name;
}else{
	$file_name = '';
}

$im = "";
$im .= SITEROOT;
$im .= "saascustuploads/";
$im .= $_SESSION['profile_account_id'];
$im .= "/cms/";
$im .= $file_name;

echo "<h1>Hero Image </h1>";

echo "<img src='".$im."'>";

$_SESSION['img_type'] = 'hero';

$url_str = SITEROOT."manage/upload-pre-crop.php"; 
$url_str.= "?ret_page=showroom";
$url_str.= "&ret_dir=cms/pages";
$url_str.= "&ret_path=cms/pages";
$url_str.= "&upload_new_img=1";
	?>

<a class="btn btn-info" href="<?php echo $url_str; ?>">Upload Hero Image </a>
	
	<form name="form" action="showroom-details.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="update_showroom" value="1">        
		<input type="hidden" name="showroom_id" value="<?php echo $_SESSION['showroom_details_id']; ?>">
		<input type="hidden" name="img_id" value="<?php echo $_SESSION['img_id']; ?>">


<a class="btn" style="float:left; margin:30px;" href="<?php echo SITEROOT;?>manage/cms/pages/page.php" >Cancel &amp; Go Back</a>
<input class="btn btn-primary" style="float:left; margin:30px;" type="submit" name="submit" value="Save Changes">			


<table cellpadding="10" width="100%" border="1">
<tr>
<td width="5%">top_1</td>
<td><input type="text" name="top_1"  style="width:96%" value="<?php echo stripslashes($_SESSION['temp_fields']['top_1']); ?>"></td>
</tr>

<tr>
<td>top_2</td>
<td><input type="text" name="top_2"  style="width:96%" value="<?php echo stripslashes($_SESSION['temp_fields']['top_2']); ?>"></td>
</tr>

<tr>
<td>top_3</td>
<td><input type="text" name="top_3"  style="width:96%" value="<?php echo stripslashes($_SESSION['temp_fields']['top_3']); ?>"></td>
</tr>

<tr>
<td>p_1_head</td>
<td><input type="text" name="p_1_head"  style="width:96%" value="<?php echo stripslashes($_SESSION['temp_fields']['p_1_head']); ?>"></td>
</tr>

<tr>
<td>p_1_text</td>
<td><textarea rows="28" cols="86" id="p_1_text" name="p_1_text"><?php echo stripslashes($_SESSION['temp_fields']['p_1_text']); ?></textarea></td>
</tr>
</table>

	
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
</body>
</html>

