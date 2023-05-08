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
$page_title = "Editing: video-library";
$page_group = "video-library";
$page = "video-library";
$ts = time();
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = "SELECT video_library_id FROM video_library WHERE profile_account_id = '".$_SESSION['profile_account_id']."'"; 
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows == 0){
	$sql = "INSERT INTO video_library 
		(profile_account_id) 
		VALUES ('".$_SESSION['profile_account_id']."')"; 
	$result = $dbCustom->getResult($db,$sql);	
	$_SESSION['video_library_id'] = $db->insert_id;
}else{
	$_SESSION['video_library_id'] = (isset($_REQUEST['video_library_id'])) ? $_REQUEST['video_library_id'] : 0;
}
if(!is_numeric($_SESSION['video_library_id'])) $_SESSION['video_library_id'] = 0;
$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';

if(isset($_POST['submit'])){
	
	$top_1 = isset($_POST['top_1'])? addslashes(trim($_POST['top_1'])) : '';
	$top_2 = isset($_POST['top_2'])? addslashes(trim($_POST['top_2'])) : '';
	$top_3 = isset($_POST['top_3'])? addslashes(trim($_POST['top_3'])) : '';
	$p_1_head = isset($_POST['p_1_head'])? addslashes(trim($_POST['p_1_head'])) : '';
	$p_1_text = isset($_POST['p_1_text'])? addslashes(trim($_POST['p_1_text'])) : '';
	$_SESSION['temp_fields']['top_1'] = $top_1;	
	$_SESSION['temp_fields']['top_2'] = $top_2;	
	$_SESSION['temp_fields']['top_3'] = $top_3;	
	$_SESSION['temp_fields']['p_1_head'] = $p_1_head;	
	$_SESSION['temp_fields']['p_1_text'] = $p_1_text;	
	
	$stmt = $db->prepare("UPDATE video_library
						SET
						top_1 = ?
						,top_2 = ?
						,top_3 = ?						
						,p_1_head = ?
						,p_1_text = ? 												
						WHERE video_library_id = ?");
						
		//echo 'Error-1 UPDATE   '.$db->error;
	if(!$stmt->bind_param("sssssi"
						,$top_1
						,$top_2
						,$top_3
						,$p_1_head
						,$p_1_text									
						,$_SESSION['video_library_id'])){
							
		echo 'Error-2 UPDATE   '.$db->error;
		
	}else{
		$stmt->execute();
		$stmt->close();				
		$msg = "Updated";
	}
	
	$seo_name	= 'video-library';
	$page	= 'video-library';
	$seo_name = (isset($_POST['seo_name']))? trim($_POST['seo_name']) : '';
	$seo_name = str_replace ('\'', '' , $seo_name);
	$seo_name = str_replace ('\"', '' , $seo_name);
	$seo_name = str_replace (' ', '-' , $seo_name);
	$title = (isset($_POST['title']))? trim(addslashes($_POST['title'])) : '';
	$keywords = (isset($_POST['keywords']))? trim(addslashes($_POST['keywords'])) : '';
	$description = (isset($_POST['description']))? trim(addslashes($_POST['description'])) : '';
	$page_heading = (isset($_POST['page_heading']))? trim(addslashes($_POST['page_heading'])) : '';

	require_once($real_root."/manage/cms/insert_page_seo.php");

}

$sql = "SELECT *
FROM video_library 
WHERE video_library_id = '".$_SESSION['video_library_id']."'";
$result = $dbCustom->getResult($db,$sql);	

if($result->num_rows > 0){
	$object = $result->fetch_object();
	$top_1 = $object->top_1;
	$top_2 = $object->top_2;
	$top_3 = $object->top_3;
	$p_1_head = $object->p_1_head;
	$p_1_text = $object->p_1_text;
}else{
	$top_1 = '';
	$top_2 = '';
	$top_3 = '';
	$p_1_head = '';
	$p_1_text = '';
}

if(!isset($_SESSION['temp_fields']['top_1'])) $_SESSION['temp_fields']['top_1'] = $top_1;
if(!isset($_SESSION['temp_fields']['top_2'])) $_SESSION['temp_fields']['top_2'] = $top_2;
if(!isset($_SESSION['temp_fields']['top_3'])) $_SESSION['temp_fields']['top_3'] = $top_3;
if(!isset($_SESSION['temp_fields']['p_1_head'])) $_SESSION['temp_fields']['p_1_head'] = $p_1_head;
if(!isset($_SESSION['temp_fields']['p_1_text'])) $_SESSION['temp_fields']['p_1_text'] = $p_1_text;

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

	
<form name="form" action="video-library.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="video_library_id" value="<?php echo $_SESSION['video_library_id']; ?>">

<a style="float:left;" class="btn btn-info" href="<?php echo SITEROOT;?>manage/cms/pages/page.php" >Cancel &amp; Go Back</a>
<input style="float:left; margin-left:20px;" class="btn btn-primary" type="submit" name="submit" value="Save Changes">			
<p class="clear"></p>

<table cellpadding="10" width="100%" border="1">
<tr>
<td width="5%">top_1</td>
<td><input type="text" name="top_1"  style="width:100%" value="<?php echo stripslashes($_SESSION['temp_fields']['top_1']); ?>"></td>
</tr>

<tr>
<td>top_2</td>
<td><input type="text" name="top_2"  style="width:100%" value="<?php echo stripslashes($_SESSION['temp_fields']['top_2']); ?>"></td>
</tr>

<tr>
<td>top_3</td>
<td><input type="text" name="top_3"  style="width:100%" value="<?php echo stripslashes($_SESSION['temp_fields']['top_3']); ?>"></td>
</tr>

<tr>
<td>p_1_head</td>
<td><input type="text" name="p_1_head"  style="width:100%" value="<?php echo stripslashes($_SESSION['temp_fields']['p_1_head']); ?>"></td>
</tr>

<tr>
<td>p_1_text</td>
<td><textarea rows="28" id="p_1_text" name="p_1_text"><?php echo stripslashes($_SESSION['temp_fields']['p_1_text']); ?></textarea></td>
</tr>
</table>

<?php				
require_once("edit_page_seo.php"); 
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



