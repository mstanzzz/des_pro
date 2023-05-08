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

$page_title = "Editing: accessories";
$page_group = "accessories";
$page = "accessories";


$_SESSION['img_id'] = (isset($_GET['img_id'])) ? $_GET['img_id'] : 0;

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$ts = time();
$sql = "SELECT accessories_id FROM accessories WHERE profile_account_id = '".$_SESSION['profile_account_id']."'"; 
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows == 0){
	$sql = "INSERT INTO accessories 
		(profile_account_id) 
		VALUES ('".$_SESSION['profile_account_id']."')"; 
	$result = $dbCustom->getResult($db,$sql);	
	$_SESSION['accessories_id'] = $db->insert_id;
}else{
	$_SESSION['accessories_id'] = (isset($_REQUEST['accessories_id'])) ? $_REQUEST['accessories_id'] : 0;
}

if(!is_numeric($_SESSION['accessories_id'])) $_SESSION['accessories_id'] = 0;
$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';

if(isset($_POST['update'])){
	$p_1_head = isset($_POST['p_1_head'])? addslashes(trim($_POST['p_1_head'])) : '';
	$p_1_text = isset($_POST['p_1_text'])? addslashes(trim($_POST['p_1_text'])) : '';
	$p_2_head = isset($_POST['p_2_head'])? addslashes(trim($_POST['p_2_head'])) : '';
	$p_2_text = isset($_POST['p_2_text'])? addslashes(trim($_POST['p_2_text'])) : '';
	$img_id = isset($_POST['img_id'])? $_POST['img_id'] : $_SESSION['img_id'];
	
	$stmt = $db->prepare("UPDATE accessories
						SET
						p_1_head = ?
						,p_1_text = ?
						,p_2_head = ?
						,p_2_text = ?
						,img_id = ?
						WHERE accessories_id = ?");
		//echo 'Error-1 UPDATE   '.$db->error;
	if(!$stmt->bind_param("ssssii"
						,$p_1_head
						,$p_1_text
						,$p_2_head
						,$p_2_text
						,$img_id 						
						,$_SESSION['accessories_id'])){
		echo 'Error-2 UPDATE   '.$db->error;
	}else{
		$stmt->execute();
		$stmt->close();				
		$msg = "Updated";
	}
	
	$seo_name	= 'accessories';
	$page	= 'accessories';
	$seo_name = (isset($_POST['seo_name']))? trim($_POST['seo_name']) : 'accessories';
	$seo_name = str_replace ('\'', '' , $seo_name);
	$seo_name = str_replace ('\"', '' , $seo_name);
	$seo_name = str_replace (' ', '-' , $seo_name);
	$title = (isset($_POST['title']))? trim(addslashes($_POST['title'])) : 'accessories';
	$keywords = (isset($_POST['keywords']))? trim(addslashes($_POST['keywords'])) : 'accessories';
	$description = (isset($_POST['description']))? trim(addslashes($_POST['description'])) : 'accessories';
	$page_heading = (isset($_POST['page_heading']))? trim(addslashes($_POST['page_heading'])) : 'accessories';
	require_once($real_root."/manage/cms/insert_page_seo.php");
	
}

$sql="SELECT *
	FROM accessories
	WHERE accessories_id = '".$_SESSION['accessories_id']."'";
$result = $dbCustom->getResult($db,$sql);	
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$p_1_head = $object->p_1_head;
	$p_1_text = $object->p_1_text;
	$p_2_head = $object->p_2_head;
	$p_2_text = $object->p_2_text;
	$img_id = $object->img_id;
		
}else{
	$p_1_head = '';
	$p_1_text = '';
	$p_2_head = '';
	$p_2_text = '';

	$img_id = 0;
}

if($_SESSION['img_id']<1)$_SESSION['img_id']= $img_id;

$_SESSION['temp_fields']['p_1_head'] = $p_1_head;	
$_SESSION['temp_fields']['p_1_text'] = $p_1_text;	
$_SESSION['temp_fields']['p_2_head'] = $p_2_head;	
$_SESSION['temp_fields']['p_2_text'] = $p_2_text;	

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
 
<center><h1>Accessories Page</h1></center>	
	<a class="btn" href="<?php echo SITEROOT;?>manage/cms/pages/page.php" >Cancel &amp; Go Back</a>
<form name="form" action="accessories.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="update" value="1">        
<input type="hidden" name="accessories_id" value="<?php echo $_SESSION['accessories_id']; ?>">
<input type="hidden" name="img_id" value="<?php echo $_SESSION['img_id']; ?>">
<input  class="btn-info" type="submit" name="submit" value="Save Changes"> 
<hr />
<?php

 echo "img_id:  ".$_SESSION['img_id'];
 	
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

echo "<img width='60%' src='".$im."'>";


$url_str = SITEROOT."manage/upload-pre-crop.php"; 
$url_str.= "?ret_page=accessories";
$url_str.= "&accessories_id".$_SESSION['accessories_id'];
$url_str.= "&ret_dir=cms/pages";
$url_str.= "&ret_path=cms/pages";
$url_str.= "&img_type=hero";
?>
<a style="margin:30px; color:#52ffff; 16px;" 
onClick="set_cat_session()" href="<?php echo $url_str; ?>" class="btn btn-info">Upload Hero image</a>


<hr />
<label>p_1_head</label>
<input style="width:92%"  type="text" name="p_1_head"  value="<?php echo stripslashes($_SESSION['temp_fields']['p_1_head']); ?>">
<label>p_1_text</label>
<textarea style="width:94%" id="p_1_text" name="p_1_text"><?php echo stripslashes($_SESSION['temp_fields']['p_1_text']); ?></textarea>


<hr />
<label>p_2_head</label>
<input style="width:92%"  type="text" name="p_2_head"  value="<?php echo stripslashes($_SESSION['temp_fields']['p_2_head']); ?>">
<label>p_2_text</label>
<textarea style="width:94%" id="p_2_text" name="p_2_text"><?php echo stripslashes($_SESSION['temp_fields']['p_2_text']); ?></textarea>

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
