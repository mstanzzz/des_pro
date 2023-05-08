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
$page_title = "Edit Installation Step";
$page_group = "installation";

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

$msg = '';

if(isset($_GET['firstload'])){
	unset($_SESSION['installation_step_id']);
	unset($_SESSION['img_id']);
}

$installation_step_id = (isset($_GET['installation_step_id'])) ? $_GET['installation_step_id'] : 0;
if(!isset($_SESSION["installation_step_id"])) $_SESSION["installation_step_id"] = $installation_step_id; 

if(!isset($_SESSION['temp_gallery'])) $_SESSION['temp_gallery'] = array();

if(!isset($_SESSION['gal_img_id'])) $_SESSION['gal_img_id'] = 0;

if($_SESSION['gal_img_id'] > 0){		
	if(!in_array($_SESSION['gal_img_id'],$_SESSION['temp_gallery'])){
		$_SESSION['temp_gallery'][count($_SESSION['temp_gallery'])] = $_SESSION['gal_img_id'];
	}
}
if(isset($_GET['delgalleryimgid'])){
	$key = array_search($_GET['delgalleryimgid'],$_SESSION['temp_gallery']);
	if($key!==false){
		unset($_SESSION['temp_gallery'][$key]);
		$_SESSION['temp_gallery'] = array_values($_SESSION['temp_gallery']);
	}
}

if(count($_SESSION['temp_gallery'])==0){	
	$sql = "SELECT inst_step_gal_id, img_id
			FROM installation_step_gallery
			WHERE installation_step_id = '".$_SESSION['installation_step_id']."'";
	$result = $dbCustom->getResult($db,$sql);
	if($result->num_rows > 0){
		$obj = $result->fetch_object();				
		$indx = count($_SESSION['temp_videos']);
		$_SESSION['temp_gallery'][$indx]['img_id'] = $img_id;
		$_SESSION['temp_gallery'][$indx]['inst_step_gal_id'] = $obj->inst_step_gal_id;		
	}
}
 
 
 
$sql = "SELECT name, display_order, description, video_url
	    FROM installation_step 
 		WHERE installation_step_id = '".$_SESSION['installation_step_id']."'";
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$name = $object->name;
	$display_order = $object->display_order;
	$description =  $object->description;
	$video_url =  $object->video_url;
}else{
	$name = '';
	$display_order = '';
	$description = '';
	$video_url = '';
}

if(!isset($_SESSION['temp_fields']['name'])) $_SESSION['temp_fields']['name'] = $name;
if(!isset($_SESSION['temp_fields']['display_order'])) $_SESSION['temp_fields']['display_order'] = $display_order;
if(!isset($_SESSION['temp_fields']['description'])) $_SESSION['temp_fields']['description'] = $description;
if(!isset($_SESSION['temp_fields']['video_url'])) $_SESSION['temp_fields']['video_url'] = $video_url;





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


function get_query_str(){
	
	var query_str = '';
	query_str += "&name="+$("#name").val(); 
	query_str += "&display_order="+$("#display_order").val(); 
	query_str += "&video_url="+$("#video_url").val(); 		
	query_str += "&description="+escape(tinyMCE.get('wysiwyg').getContent());
	
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
	<form name="edit_installation_step" action="installation-steps.php" method="post" target="_top">
   	<input type="hidden" name="installation_step_id" value="<?php echo $_SESSION["installation_step_id"]; ?>" />
   	<input type="hidden" name="update_installation_step" value="1" />
	<div class="page_actions">
	<button class="btn btn-large btn-success" name="edit_installation_step" type="submit">Save Changes </button>
	<a href="<?php echo SITEROOT;?>manage/cms/pages/installation-steps.php" class="btn"> Cancel &amp; Go Back</a>
	</div>


	<label>Step name</label>
	<input type="text" id="name" name="name" value="<?php echo stripslashes($_SESSION['temp_fields']['name']); ?>" />
	<br />
	<hr />
	<br />

	<label>Tools Required</label>
	<select name="tools" multiple>
<?php
	$sql = "SELECT installation_tool_id, name 
			FROM installation_tool";
	$result = $dbCustom->getResult($db,$sql);
	while($row = $result->fetch_object()){
		echo "<option value='".$row->installation_tool_id."'>".$row->name."</option>";		
	}
	
?>
	</select>
	<br />
	<hr />
	<br />


<?php       

if(!isset($_SESSION['temp_gallery']))$_SESSION['temp_gallery']=array();
foreach($_SESSION['temp_gallery'] as $val){
	$sql = "SELECT file_name FROM image
	WHERE img_id = '".$val."'";
	$img_res = $dbCustom->getResult($db,$sql);
	if($img_res->num_rows > 0){
		$img_obj = $img_res->fetch_object();
		echo "<img src='".SITEROOT."/saascustuploads/".$_SESSION['profile_account_id']."/cart/small/".$img_obj->file_name."'>";			
		echo "<a href='edit-item.php?delgalleryimgid=".$val."#img' class='btn btn-small btn-danger'><i class='icon-remove icon-white'></i></a>";
		echo "<br />";
	}
}

$url_str = SITEROOT."manage/upload-pre-crop.php";               				
$url_str .= "?ret_page=edit-installation-step.php";
$url_str .= "&ret_dir=pages";
$url_str .= "&ret_path=cms/pages";
$url_str .= "&img_type=step_gallery";
echo "<a style='margin:30px;' class='btn btn-primary' href='".$url_str."'>Upload Gallery Image </a>";


$url_str = SITEROOT."manage/catalog/select-image.php";               				
$url_str .= "?ret_page=edit-installation-step.php";
$url_str .= "&ret_path=cms/pages";
$url_str .= "&img_type=step_gallery";
echo "<a style='margin:30px;' class='btn btn-primary' href='".$url_str."'>Select Gallery Image</a>";
?>


<label>Step Order</label>
<input type="text" id="display_order" name="display_order" value="<?php echo $_SESSION['temp_fields']['display_order']; ?>" />


<label>Video Url</label>
<input type="text" id="video_url" name="video_url" value="<?php echo $_SESSION['temp_fields']['video_url']; ?>" />


<label>Description</label>
<textarea id="wysiwyg" name="description"><?php echo stripslashes($_SESSION['temp_fields']['description']); ?></textarea>



</fieldset>
		
		
	
</form>
</div>
<p class="clear"></p>
<?php 
require_once($real_root.'/manage/admin-includes/manage-footer.php');
?>
</div>
</body>
</html>




