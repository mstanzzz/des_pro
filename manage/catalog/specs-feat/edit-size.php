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
$page_title = "Add specs_feat";
$page_group = "specs_feat";

$strip = (isset($_GET['strip'])) ? $_GET['strip'] : 0;
$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';
if(isset($_GET['firstload'])){
//if(0){	
	unset($_SESSION['temp_fields']);
	unset($_SESSION['img_id']);
}
//is_new_img
if(isset($_SESSION['img_id'])){
	echo "img_id  ".$_SESSION['img_id'];
}


$size_id = (isset($_GET['size_id'])) ? $_GET['size_id'] : 0;
if(!is_numeric($size_id)) $size_id = 0;

if($size_id>0){
	$_SESSION['size_id'] = $size_id;
}

$db = $dbCustom->getDbConnect(CART_N_DATABASE);

function get_file_name($dbCustom,$img_id){
	$dbCustom = new DbCustom();
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$sql = "SELECT file_name
			FROM image
			WHERE img_id = '".$img_id."'";
	$re = $dbCustom->getResult($db,$sql);
	if($re->num_rows > 0){
		$object = $re->fetch_object();
		return  $object->file_name;
	}
	return  '';
}

$sql = "SELECT * FROM size WHERE size_id='".$_SESSION['size_id']."'";
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$text = $object->text;
	$tool_tip = $object->tool_tip;
	$img_id=$object->img_id;
}else{
	$text = "";
	$tool_tip = "";
	$img_id=0;
}

if(!isset($_SESSION['img_id'])) $_SESSION['img_id']=$img_id;

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
//require_once($real_root.'/manage/admin-includes/manage-header.php');
$db = $dbCustom->getDbConnect(CART_N_DATABASE);

?>

<div class="manage_page_container">
	<div class="manage_side_nav">
		<?php
		require_once($real_root.'/manage/admin-includes/manage-side-nav.php');
		?>
	</div>
	<div class="manage_main">
<?php
	$url_str = "sizes.php";
?>
<form name="form1" action="<?php echo $url_str; ?>" method="post" onSubmit="return validate(this)"  enctype="multipart/form-data" target="_top">
    <input type="hidden" name="update_size" value="1">  
	<input type="hidden" name="size_id" value="<?php echo $_SESSION['size_id']; ?>" >
	
<a class="btn" style="float:left; margin:30px;" 
href="<?php echo SITEROOT;?>manage/catalog/specs-feat/sizes.php" >Cancel &amp; Go Back</a>

<input class="btn btn-primary" 
style="float:left; margin:30px; padding:10px;" type="submit" name="submit" value="Save">			

<table cellpadding="10" width="100%" border="1">


<tr>
<td>Image</td>
<td>
<?php
$url_str = SITEROOT."manage/upload-pre-crop.php";
$url_str .= "?ret_page=edit-size";
$url_str .= "&ret_path=catalog/specs-feat";
$url_str .= "&ret_dir=specs-feat";
$url_str .= "&img_type=size";

echo $_SESSION['img_id'];

$file_name = get_file_name($dbCustom, $_SESSION['img_id']);

echo "<img width='40%' src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$file_name."'/>";

?>
<input style="width:6%;" name="img_id" type="text"  value="<?php echo $_SESSION['img_id']; ?>" />

<a style="color:#c3fdf5; padding:16px; font:bold; font-size: 18px;" href="<?php echo $url_str; ?>" class="btn btn-info">Upload Image </a>

<?php
$url_str = "../select-image.php";               				
$url_str .= "?ret_page=edit-size";
$url_str .= "&ret_path=catalog/specs-feat";
$url_str .= "&ret_dir=specs-feat"; 
$url_str .= "&img_type=size";
?>
<a style="color:#c3fdf5; padding:16px; font:bold; font-size: 18px;"  class="btn btn-info" href="<?php echo $url_str; ?>">Select Image </a>

</td>
</tr>



<tr>
<td>Tool Tip</td>
<td><input id="tool_tip" style="width:96%;" name="tool_tip" type="text" value="<?php echo stripslashes($tool_tip); ?>" />
</td>
</tr>


<tr>
<td>Size Text</td>
<td>
<textarea id="text" name="text" style="width:96%; height:400px;" /><?php echo stripslashes($text); ?></textarea>
</td>
</tr>

<table>


</body>
</html>

