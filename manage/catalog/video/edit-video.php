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
$page_title = "Video List";
$page_group = "video";
$db = $dbCustom->getDbConnect(CART_N_DATABASE);
$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';


$video_id = isset($_GET['video_id'])?$_GET['video_id']:0; 
if(!is_numeric($video_id))$video_id=0;
$strip = (isset($_GET['strip'])) ? $_GET['strip'] : 0;

$new_image=0;
$img_id = isset($_GET['img_id'])?$_GET['img_id']:0; 
if(!is_numeric($img_id))$img_id=0;
if($img_id>0){
	$new_image=1;
}


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

$db = $dbCustom->getDbConnect(CART_N_DATABASE);

$sql = "SELECT * FROM video WHERE video_id = '".$video_id."'";
$result = $dbCustom->getResult($db,$sql);	
if($result->num_rows>0){
	$object = $result->fetch_object();
	$_SESSION['temp_fields']['svg_id'] = $object->svg_id;
	$_SESSION['temp_fields']['title'] = stripslashes($object->title);
	$_SESSION['temp_fields']['embed'] = stripslashes($object->embed);

	if($new_image==0){
		$img_id = $object->img_id;
	}
	

}else{
	$_SESSION['temp_fields']['svg_id'] = 0;
	$_SESSION['temp_fields']['title'] = '';
	$_SESSION['temp_fields']['embed'] = '';
	$img_id= 0;
}


require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>


<script>

function does_exist(ele){
    if (ele !== undefined) {
        return 1;
    }else{
		return 0;
	}
}
function get_query_str(){
	
	var query_str = '';
	
	if(does_exist(document.form1.svg_id)){
		query_str += "&svg_id="+document.form1.svg_id.value;	
	}
	if(does_exist(document.form1.title)){
		query_str += "&title="+document.form1.title.value;	
	}
	if(does_exist(document.form1.embed)){
		query_str += "&embed="+document.form1.embed.value;	
	}
	return query_str;
}

function set_session(){
	var q_str = "?action=1"+get_query_str();	

	$.ajaxSetup({ cache: false}); 
	$.ajax({
	  url: 'ajax_set_video_session.php'+q_str,
	  success: function(data) {
		//alert(data);
	  }
	});	
}

</script>


</head>
<body>
<?php
if(!$strip){
	require_once($real_root.'/manage/admin-includes/manage-header.php');
	require_once($real_root.'/manage/admin-includes/manage-top-nav.php');
}
?>
<div class="manage_page_container">
	<div class="manage_side_nav">
		<?php 
if(!$strip){
	require_once($real_root.'/manage/admin-includes/manage-side-nav.php');
}
        ?>
	</div>
	<div class="manage_main">
		<h1>Edit Video</h1>
		<div class="alert alert-success">
			<h4><?php echo $msg; ?></h4>
		</div>

<?php
if($strip){
	$target="_self";
}else{
	$target="_top";
}
?>

<form name="form1" action="video-list.php" method="post" 
	enctype="multipart/form-data" 
	target="<?php echo $target; ?>">
<input type="hidden" name="update_video" value="1">
<input type="hidden" name="img_id" value="<?php echo $img_id; ?>">
<input type="hidden" name="video_id" value="<?php echo $video_id; ?>">


<button type="submit" name="update_video" class="btn btn-success">Submit </button>
<a class="btn btn-large" href="video-list.php">Cancel</a> 

<br />
Note: If you want a cover image please upload the image before completing the form
<br />
<?php
$url_str = SITEROOT."manage/upload-pre-crop.php";
$url_str .= "?ret_page=edit-video";
$url_str .= "&ret_path=catalog/video";
$url_str .= "&ret_dir=video";
$url_str .= "&img_type=__video";
$url_str .= "&crop_n=0";
$url_str .= "&video_id=".$video_id;
$url_str .= "&strip=".$strip;
?>
<a class="btn btn-info" onClick="set_session();" href="<?php echo $url_str; ?>">Upload Image</a>


<table width="100%;">
<tr>
<td width="15%">Image Place Holder</td>
<td>
<?php
$file_name = get_file_name($dbCustom,$img_id);

echo "<img width='300' src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$file_name."'/>";
?>
</td>
</tr>

<tr>
<td>SVG ICON</td>
<td>
<?php
$db = $dbCustom->getDbConnect(CART_N_DATABASE);
$sql = "SELECT svg_id, name  
		FROM svg
		WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
		AND active > '0' 
		ORDER BY name";
$result = $dbCustom->getResult($db,$sql);
echo "<select id='svg_id' name='svg_id'>";
while($row = $result->fetch_object()) {		
	$selected = ($_SESSION['temp_fields']['svg_id'] == $row->svg_id)? "selected" : '';
	echo "<option value='".$row->svg_id."' ".$selected.">".$row->name."</option>";
}
echo "</select>";			

?>
</td>
</tr>
</table>


<label>title</label>
<input type="text" id="title" name="title" value="<?php echo $_SESSION['temp_fields']['title']; ?>" style="width:80%;" />
<br />

<br />
<label>Iframe embed </label>
<textarea style="width:80%;" rows="5" id="embed" name="embed"><?php echo $_SESSION['temp_fields']['embed']; ?></textarea>
<br />

</form>

</div>
</div>

</body>
</html>

