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
$page_title = "Editing: Showroom Category";
$page_group = "showroom-cat";
$page = "showroom-cat";
if(!isset($_SESSION['img_id'])) $_SESSION['img_id'] = 0;
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$ts = time();
$sql = "SELECT showroom_cat_id FROM showroom_cat WHERE profile_account_id = '".$_SESSION['profile_account_id']."'"; 
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows == 0){
	$sql = "INSERT INTO showroom_cat 
		(profile_account_id) 
		VALUES ('".$_SESSION['profile_account_id']."')"; 
	$result = $dbCustom->getResult($db,$sql);	
	$_SESSION['showroom_cat_id'] = $db->insert_id;
}else{
	if(isset($_REQUEST['showroom_cat_id'])) $_SESSION['showroom_cat_id'] = $_REQUEST['showroom_cat_id'];
}
if(!is_numeric($_SESSION['showroom_cat_id'])) $_SESSION['showroom_cat_id'] = 0;
$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';

if(isset($_POST['update'])){
		
	$top_1 = isset($_POST['top_1'])? addslashes(trim($_POST['top_1'])) : '';
	$top_2 = isset($_POST['top_2'])? addslashes(trim($_POST['top_2'])) : '';
	$top_3 = isset($_POST['top_3'])? addslashes(trim($_POST['top_3'])) : '';
	
	$p_1_head = isset($_POST['p_1_head'])? addslashes(trim($_POST['p_1_head'])) : '';
	$p_1_text = isset($_POST['p_1_text'])? addslashes(trim($_POST['p_1_text'])) : '';

	if(isset($_POST['img_id'])) $_SESSION['img_id'] = $_POST['img_id']; 
	
	$stmt = $db->prepare("UPDATE showroom_cat
						SET
						top_1 = ?
						,top_2 = ?
						,top_3 = ?
						,p_1_head = ?
						,p_1_text = ?
						,img_id = ?
						WHERE showroom_cat_id = ?");
						
		//echo 'Error-1 UPDATE   '.$db->error;
	if(!$stmt->bind_param("sssssii"
						,$top_1
						,$top_2
						,$top_3	
						,$p_1_head
						,$p_1_text
						,$_SESSION['img_id']						
						,$_SESSION['showroom_cat_id'])){
							
		echo 'Error-2 UPDATE   '.$db->error;
		
	}else{
		$stmt->execute();
		$stmt->close();				
		$msg = "Updated";
	}
	$seo_name = 'showroom-cat';
	$page = 'showroom-cat';
	$seo_name = (isset($_POST['seo_name']))? trim($_POST['seo_name']) : 'showroom-cat';
	$seo_name = str_replace ('\'', '' , $seo_name);
	$seo_name = str_replace ('\"', '' , $seo_name);
	$seo_name = str_replace (' ', '-' , $seo_name);
	$title = (isset($_POST['title']))? trim(addslashes($_POST['title'])) : 'showroom-cat';
	$keywords = (isset($_POST['keywords']))? trim(addslashes($_POST['keywords'])) : 'showroom-cat';
	$description = (isset($_POST['description']))? trim(addslashes($_POST['description'])) : 'showroom-cat';
	$page_heading = (isset($_POST['page_heading']))? trim(addslashes($_POST['page_heading'])) : 'showroom-cat';
	require_once($real_root."/manage/cms/insert_page_seo.php");
}


$sql = "SELECT *
FROM showroom_cat 
WHERE showroom_cat_id = '".$_SESSION['showroom_cat_id']."'";
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

	$sql = "UPDATE showroom_cat
			SET img_id = '".$_SESSION['img_id']."' 		 
			WHERE showroom_cat_id = '".$_SESSION['showroom_cat_id']."'";
	$result = $dbCustom->getResult($db,$sql);	
	$img_id	= $_SESSION['img_id'];		
}

$_SESSION['temp_fields']['top_1'] = $top_1;	
$_SESSION['temp_fields']['top_2'] = $top_2;	
$_SESSION['temp_fields']['top_3'] = $top_3;	
$_SESSION['temp_fields']['p_1_head'] = $p_1_head;	
$_SESSION['temp_fields']['p_1_text'] = $p_1_text;	
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
?>
	
<form name="form" action="showroom-cat.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="update" value="1">        
	<input type="hidden" name="showroom_cat_id" value="<?php echo $_SESSION['showroom_cat_id']; ?>">
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
require_once($real_root."/manage/cms/get_seo_variables.php");				
require_once("edit_page_seo.php"); 
//require_once($real_root."/manage/cms/edit_page_breadcrumb.php"); 
?>	

		</form>
	</div>
	<p class="clear"></p>
</div>
</body>
</html>
