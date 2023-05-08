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
$page_title = "Add Tool";
$page_group = "Tool";
$strip = (isset($_GET['strip'])) ? $_GET['strip'] : 0;
$page_title = "Add Tool";
$strip = (isset($_REQUEST['strip'])) ? $_REQUEST['strip'] : 0;
$msg = '';
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


$title = '';
if(!isset($_SESSION['img_id'])) $_SESSION['img_id'] = 0;

require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>
</head>
<body>
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
		<h1>Add Tool</h1>
		<div class="alert alert-success">
			<h4><?php echo $msg; ?></h4>
		</div>

<?php echo $msg; ?> 
<form action="tool-images.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="add_tool_image" value="1">
<input type="hidden" name="img_id" value="<?php echo $_SESSION['img_id']; ?>">

<br />
<br />
<?php 
$file_name = get_file_name($dbCustom,$_SESSION['img_id']);
$url_str = SITEROOT."manage/upload-pre-crop.php";
$url_str .= "?ret_page=add-tool-image";
$url_str .= "&ret_path=catalog/tool-images";
$url_str .= "&ret_dir=tool-images";
$url_str .= "&crop_n=0";
$url_str .= "&img_type=_tool_image";
?>

<br />


<table cellpadding="10" border="1">
<tr>
<td width="40%"><button type="submit" name="add_tool" class="btn btn-success  btn-large">Submit </button>
</td>
<td><a class="btn" href="tool-images.php">Cancel</a> 
</td>
</tr>

<tr>
<td></td>
<td>
<?php
echo "<img width='300' src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$file_name."'/>";
?>
</td>
</tr>

<tr>
<td></td>

<td>
<a class="btn btn-info" href="<?php echo $url_str; ?>" class="btn ">Upload Image</a>
</td>
</tr>

<tr>
<td>Title</td>

<td>
<input type="text" name="title" value="<?php echo $title; ?>" style="width:80%;" />
</td>
</tr>
</table> 
</form>

</div>
</div>

</body>
</html>

