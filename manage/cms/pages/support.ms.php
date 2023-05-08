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
$page_title = "Editing: Support";
$page_group = "support";
$page = "support";
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$ts = time();
$sql = "SELECT support_id FROM support WHERE profile_account_id = '".$_SESSION['profile_account_id']."'"; 
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows == 0){
	$sql = "INSERT INTO support 
		(profile_account_id) 
		VALUES ('".$_SESSION['profile_account_id']."')"; 
	$result = $dbCustom->getResult($db,$sql);	
	$_SESSION['support_id'] = $db->insert_id;
}else{
	$_SESSION['support_id'] = (isset($_REQUEST['about_us_id'])) ? $_REQUEST['about_us_id'] : 0;
}
if(!is_numeric($_SESSION['support_id'])) $_SESSION['support_id'] = 0;
$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';

if(isset($_POST['update_support'])){

	$img_1_id = isset($_POST['img_1_id'])? $_POST['img_1_id'] : 0;
	$img_2_id = isset($_POST['img_2_id'])? $_POST['img_2_id'] : 0;
	$img_3_id = isset($_POST['img_3_id'])? $_POST['img_3_id'] : 0;
	if(!is_numeric($img_1_id)) $img_1_id = 0;
	if(!is_numeric($img_2_id)) $img_2_id = 0;
	if(!is_numeric($img_3_id)) $img_3_id = 0;

	$top_1 = isset($_POST['top_1'])? addslashes(trim($_POST['top_1'])) : '';
	$top_2 = isset($_POST['top_2'])? addslashes(trim($_POST['top_2'])) : '';
	$top_3 = isset($_POST['top_3'])? addslashes(trim($_POST['top_3'])) : '';
	$p_1_head = isset($_POST['p_1_head'])? addslashes(trim($_POST['p_1_head'])) : '';
	$p_1_text = isset($_POST['p_1_text'])? addslashes(trim($_POST['p_1_text'])) : '';
	$p_2_head = isset($_POST['p_2_head'])? addslashes(trim($_POST['p_2_head'])) : '';
	$p_2_text = isset($_POST['p_2_text'])? addslashes(trim($_POST['p_2_text'])) : '';
	$p_3_head = isset($_POST['p_3_head'])? addslashes(trim($_POST['p_3_head'])) : '';
	$p_3_text = isset($_POST['p_3_text'])? addslashes(trim($_POST['p_3_text'])) : '';
	$p_4_head = isset($_POST['p_4_head'])? addslashes(trim($_POST['p_4_head'])) : '';
	$p_4_text = isset($_POST['p_4_text'])? addslashes(trim($_POST['p_4_text'])) : '';
	$p_5_head = isset($_POST['p_5_head'])? addslashes(trim($_POST['p_5_head'])) : '';
	$p_5_text = isset($_POST['p_5_text'])? addslashes(trim($_POST['p_5_text'])) : '';
	$p_6_head = isset($_POST['p_6_head'])? addslashes(trim($_POST['p_6_head'])) : '';
	$p_6_text = isset($_POST['p_6_text'])? addslashes(trim($_POST['p_6_text'])) : '';
	$p_7_head = isset($_POST['p_7_head'])? addslashes(trim($_POST['p_7_head'])) : '';
	$p_7_text = isset($_POST['p_7_text'])? addslashes(trim($_POST['p_7_text'])) : '';
	$p_8_head = isset($_POST['p_8_head'])? addslashes(trim($_POST['p_8_head'])) : '';
	$p_8_text = isset($_POST['p_8_text'])? addslashes(trim($_POST['p_8_text'])) : '';
	$p_9_head = isset($_POST['p_9_head'])? addslashes(trim($_POST['p_9_head'])) : '';
	$p_9_text = isset($_POST['p_9_text'])? addslashes(trim($_POST['p_9_text'])) : '';	
	$_SESSION['temp_fields']['top_1'] = $top_1;	
	$_SESSION['temp_fields']['top_2'] = $top_2;	
	$_SESSION['temp_fields']['top_3'] = $top_3;	
	$_SESSION['temp_fields']['p_1_head'] = $p_1_head;	
	$_SESSION['temp_fields']['p_1_text'] = $p_1_text;	
	$_SESSION['temp_fields']['p_2_head'] = $p_2_head;	
	$_SESSION['temp_fields']['p_2_text'] = $p_2_text;	
	$_SESSION['temp_fields']['p_3_head'] = $p_3_head;	
	$_SESSION['temp_fields']['p_3_text'] = $p_3_text;	
	$_SESSION['temp_fields']['p_4_head'] = $p_4_head;	
	$_SESSION['temp_fields']['p_4_text'] = $p_4_text;	
	$_SESSION['temp_fields']['p_5_head'] = $p_5_head;	
	$_SESSION['temp_fields']['p_5_text'] = $p_5_text;	
	$_SESSION['temp_fields']['p_6_head'] = $p_6_head;	
	$_SESSION['temp_fields']['p_6_text'] = $p_6_text;	
	$_SESSION['temp_fields']['p_7_head'] = $p_7_head;	
	$_SESSION['temp_fields']['p_7_text'] = $p_7_text;	
	$_SESSION['temp_fields']['p_8_head'] = $p_8_head;	
	$_SESSION['temp_fields']['p_8_text'] = $p_8_text;
	$_SESSION['temp_fields']['p_9_head'] = $p_9_head;	
	$_SESSION['temp_fields']['p_9_text'] = $p_9_text;
	$_SESSION['temp_fields']['img_1_id'] = $img_1_id;	
	$_SESSION['temp_fields']['img_2_id'] = $img_2_id;	
	$_SESSION['temp_fields']['img_3_id'] = $img_3_id;	
	
	$stmt = $db->prepare("UPDATE support
						SET
						top_1 = ?
						,top_2 = ?
						,top_3 = ?						
						,p_1_head = ?
						,p_1_text = ? 												
						,p_2_head = ?
						,p_2_text = ? 						
						,p_3_head = ?
						,p_3_text = ? 						
						,p_4_head = ?
						,p_4_text = ? 						
						,p_5_head = ?
						,p_5_text = ? 
						,p_6_head = ?
						,p_6_text = ? 
						,p_7_head = ?
						,p_7_text = ? 
						,p_8_head = ?  
						,p_8_text = ?	
						,p_9_head = ?  
						,p_9_text = ?	
					WHERE support_id = ?");
						
		//echo 'Error-1 UPDATE   '.$db->error;
		
	if(!$stmt->bind_param("sssssssssssssssssssssi"
						,$top_1
						,$top_2
						,$top_3
						,$p_1_head
						,$p_1_text									
						,$p_2_head
						,$p_2_text									
						,$p_3_head
						,$p_3_text								
						,$p_4_head
						,$p_4_text							
						,$p_5_head
						,$p_5_text						
						,$p_6_head
						,$p_6_text						
						,$p_7_head
						,$p_7_text
						,$p_8_head  
						,$p_8_text
						,$p_9_head  
						,$p_9_text
						,$_SESSION['support_id'])){
							
		//echo 'Error-2 UPDATE   '.$db->error;
		
	}else{
		$stmt->execute();
		$stmt->close();				
		$msg = "Updated";
	}


	$seo_name	= 'support';
	$page	= 'support';
	$seo_name = (isset($_POST['seo_name']))? trim($_POST['seo_name']) : 'support';
	$seo_name = str_replace ('\'', '' , $seo_name);
	$seo_name = str_replace ('\"', '' , $seo_name);
	$seo_name = str_replace (' ', '-' , $seo_name);
	$title = (isset($_POST['title']))? trim(addslashes($_POST['title'])) : 'support';
	$keywords = (isset($_POST['keywords']))? trim(addslashes($_POST['keywords'])) : 'support';
	$description = (isset($_POST['description']))? trim(addslashes($_POST['description'])) : 'support';
	$page_heading = (isset($_POST['page_heading']))? trim(addslashes($_POST['page_heading'])) : 'support';

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
		$p = $_SERVER['DOCUMENT_ROOT']."/saascustuploads/".$_SESSION['profile_account_id']."/cms/".$object->file_name;		
		if(file_exists($p)) unlink($p);
	}

	$sql = "DELETE FROM image 
	WHERE img_id = '".$del_img_id."'";
	$result = $dbCustom->getResult($db,$sql);	

}

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = "SELECT *
FROM support 
WHERE support_id = '".$_SESSION['support_id']."'";
$result = $dbCustom->getResult($db,$sql);	


if($result->num_rows > 0){
	$object = $result->fetch_object();
	$img_1_id = $object->img_1_id;
	$img_2_id = $object->img_2_id;
	$img_3_id = $object->img_3_id;
	$top_1 = $object->top_1;
	$top_2 = $object->top_2;
	$top_3 = $object->top_3;
	$p_1_head = $object->p_1_head;
	$p_1_text = $object->p_1_text;
	$p_2_head = $object->p_2_head;
	$p_2_text = $object->p_2_text;
	$p_3_head = $object->p_3_head; 
	$p_3_text = $object->p_3_text;
	$p_4_head = $object->p_4_head;
	$p_4_text = $object->p_4_text; 
	$p_5_head = $object->p_5_head;  
	$p_5_text = $object->p_5_text; 
	$p_6_head = $object->p_6_head;  
	$p_6_text = $object->p_6_text; 
	$p_7_head = $object->p_7_head;  
	$p_7_text = $object->p_7_text;
	$p_8_head = $object->p_8_head;  
	$p_8_text = $object->p_8_text;
	$p_9_head = $object->p_9_head;  
	$p_9_text = $object->p_9_text;
		
}else{
	$img_1_id = 0;
	$img_2_id = 0;
	$img_3_id = 0;
	$top_1 = '';
	$top_2 = '';
	$top_3 = '';
	$p_1_head = '';
	$p_1_text = '';
	$p_2_head = '';
	$p_2_text = '';
	$p_3_head = ''; 
	$p_3_text = '';
	$p_4_head = '';
	$p_4_text = ''; 
	$p_5_head = '';  
	$p_5_text = ''; 
	$p_6_head = '';  
	$p_6_text = ''; 
	$p_7_head = '';  
	$p_7_text = '';
	$p_8_head = '';  
	$p_8_text = '';

}

if(!isset($_SESSION['temp_fields']['top_1'])) $_SESSION['temp_fields']['top_1'] = $top_1;
if(!isset($_SESSION['temp_fields']['top_2'])) $_SESSION['temp_fields']['top_2'] = $top_2;
if(!isset($_SESSION['temp_fields']['top_3'])) $_SESSION['temp_fields']['top_3'] = $top_3;
if(!isset($_SESSION['temp_fields']['p_1_head'])) $_SESSION['temp_fields']['p_1_head'] = $p_1_head;
if(!isset($_SESSION['temp_fields']['p_1_text'])) $_SESSION['temp_fields']['p_1_text'] = $p_1_text;
if(!isset($_SESSION['temp_fields']['p_2_head'])) $_SESSION['temp_fields']['p_2_head'] = $p_2_head;
if(!isset($_SESSION['temp_fields']['p_2_text'])) $_SESSION['temp_fields']['p_2_text'] = $p_2_text;
if(!isset($_SESSION['temp_fields']['p_3_head'])) $_SESSION['temp_fields']['p_3_head'] = $p_3_head;
if(!isset($_SESSION['temp_fields']['p_3_text'])) $_SESSION['temp_fields']['p_3_text'] = $p_3_text;
if(!isset($_SESSION['temp_fields']['p_4_head'])) $_SESSION['temp_fields']['p_4_head'] = $p_4_head;
if(!isset($_SESSION['temp_fields']['p_4_text'])) $_SESSION['temp_fields']['p_4_text'] = $p_4_text;
if(!isset($_SESSION['temp_fields']['p_5_head'])) $_SESSION['temp_fields']['p_5_head'] = $p_5_head;
if(!isset($_SESSION['temp_fields']['p_5_text'])) $_SESSION['temp_fields']['p_5_text'] = $p_5_text;
if(!isset($_SESSION['temp_fields']['p_6_head'])) $_SESSION['temp_fields']['p_6_head'] = $p_6_head;
if(!isset($_SESSION['temp_fields']['p_6_text'])) $_SESSION['temp_fields']['p_6_text'] = $p_6_text;
if(!isset($_SESSION['temp_fields']['p_7_head'])) $_SESSION['temp_fields']['p_7_head'] = $p_7_head;
if(!isset($_SESSION['temp_fields']['p_7_text'])) $_SESSION['temp_fields']['p_7_text'] = $p_7_text;
if(!isset($_SESSION['temp_fields']['p_8_head'])) $_SESSION['temp_fields']['p_8_head'] = $p_8_head;
if(!isset($_SESSION['temp_fields']['p_8_text'])) $_SESSION['temp_fields']['p_8_text'] = $p_8_text;
if(!isset($_SESSION['temp_fields']['p_9_head'])) $_SESSION['temp_fields']['p_9_head'] = $p_9_head;
if(!isset($_SESSION['temp_fields']['p_9_text'])) $_SESSION['temp_fields']['p_9_text'] = $p_9_text;
if(!isset($_SESSION['temp_fields']['img_1_id'])) $_SESSION['temp_fields']['img_1_id'] = $img_1_id;
if(!isset($_SESSION['temp_fields']['img_2_id'])) $_SESSION['temp_fields']['img_2_id'] = $img_2_id;
if(!isset($_SESSION['temp_fields']['img_3_id'])) $_SESSION['temp_fields']['img_3_id'] = $img_3_id;

require_once($real_root.'/manage/cms/get_seo_variables.php');

if(!isset($_SESSION['temp_fields']['page_heading'])) $_SESSION['temp_fields']['page_heading'] = $page_heading;
if(!isset($_SESSION['temp_fields']['seo_name'])) $_SESSION['temp_fields']['seo_name'] = $seo_name;
if(!isset($_SESSION['temp_fields']['title'])) $_SESSION['temp_fields']['title'] = $title;
if(!isset($_SESSION['temp_fields']['keywords'])) $_SESSION['temp_fields']['keywords'] = $keywords;
if(!isset($_SESSION['temp_fields']['description'])) $_SESSION['temp_fields']['description'] = $description;

$sql = "SELECT file_name
		FROM image
		WHERE img_id = '".$_SESSION['temp_fields']['img_1_id']."'";				
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$img_1_file_name = $img_obj->file_name;
}else{
	$img_1_file_name = '';
}	

$sql = "SELECT file_name
		FROM image
		WHERE img_id = '".$_SESSION['temp_fields']['img_2_id']."'";				
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$img_2_file_name = $img_obj->file_name;
}else{
	$img_2_file_name = '';
}	

$sql = "SELECT file_name
		FROM image
		WHERE img_id = '".$_SESSION['temp_fields']['img_3_id']."'";				
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$img_3_file_name = $img_obj->file_name;
}else{
	$img_3_file_name = '';
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
		<h2>Support Page</h2>
		<form name="form" action="support.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="update_support" value="1">        
		<input type="hidden" name="support_id" value="<?php echo $_SESSION['support_id']; ?>">
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
<td><textarea style="width:96%; height:200px;" id="p_1_text" name="p_1_text"><?php echo stripslashes($_SESSION['temp_fields']['p_1_text']); ?></textarea></td>
</tr>

<tr>
<td>p_2_head</td>
<td><input type="text" name="p_2_head"  style="width:96%" value="<?php echo stripslashes($_SESSION['temp_fields']['p_2_head']); ?>"></td>
</tr>

<tr>
<td>p_2_text</td>
<td><textarea style="width:96%" id="p_2_text" name="p_2_text"><?php echo stripslashes($_SESSION['temp_fields']['p_2_text']); ?></textarea></td>
</tr>
<tr>
<td>p_3_head</td>
<td><input type="text" name="p_3_head"  style="width:96%" value="<?php echo stripslashes($_SESSION['temp_fields']['p_3_head']); ?>"></td>
</tr>
<tr>
<td>p_3_text</td>
<td><textarea rows="28" id="p_3_text" name="p_3_text"><?php echo stripslashes($_SESSION['temp_fields']['p_3_text']); ?></textarea></td>
</tr>

<tr>
<td>p_4_head</td>
<td><input type="text" name="p_4_head"  style="width:96%" value="<?php echo stripslashes($_SESSION['temp_fields']['p_4_head']); ?>"></td>
</tr>

<tr>
<td>p_4_text</td>
<td><textarea rows="28" id="p_4_text" name="p_4_text"><?php echo stripslashes($_SESSION['temp_fields']['p_4_text']); ?></textarea></td>
</tr>
<tr>
<td>p_5_head</td>
<td><input type="text" name="p_5_head"  style="width:96%" value="<?php echo stripslashes($_SESSION['temp_fields']['p_5_head']); ?>"></td>
</tr>
<tr>
<td>p_5_text</td>
<td><textarea rows="28" id="p_5_text" name="p_5_text"><?php echo stripslashes($_SESSION['temp_fields']['p_5_text']); ?></textarea></td>
</tr>
<td>p_6_head</td>
<td><input type="text" name="p_6_head"  style="width:96%" value="<?php echo stripslashes($_SESSION['temp_fields']['p_6_head']); ?>"></td>
</tr>
<tr>
<td>p_6_text</td>
<td><textarea rows="28" id="p_6_text" name="p_6_text"><?php echo stripslashes($_SESSION['temp_fields']['p_6_text']); ?></textarea></td>
</tr>
<tr>
<td>p_7_head</td>
<td><input type="text" name="p_7_head"  style="width:96%" value="<?php echo stripslashes($_SESSION['temp_fields']['p_7_head']); ?>"></td>
</tr>
<tr>
<td>p_7_text</td>
<td><textarea rows="28" id="p_7_text" name="p_7_text"><?php echo stripslashes($_SESSION['temp_fields']['p_7_text']); ?></textarea></td>
</tr>

<tr>
<td>p_8_head</td>
<td><input type="text" name="p_8_head"  style="width:96%" value="<?php echo stripslashes($_SESSION['temp_fields']['p_8_head']); ?>"></td>
</tr>
<tr>
<td>p_8_text</td>
<td><textarea rows="28" id="p_8_text" name="p_8_text"><?php echo stripslashes($_SESSION['temp_fields']['p_8_text']); ?></textarea></td>
</tr>
</table>



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
