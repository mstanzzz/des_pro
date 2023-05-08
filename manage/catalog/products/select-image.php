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
$msg = '';


$ret_path = (isset($_GET['ret_path'])) ? $_GET['ret_path'] : '';

echo $ret_path;
exit;

$ret_dir = (isset($_GET['ret_dir'])) ? $_GET['ret_dir'] : '';
$ret_page = (isset($_GET['ret_page'])) ? $_GET['ret_page'] : '';

$img_type = (isset($_GET['img_type'])) ? $_GET['img_type'] : '';
$cat_id = (isset($_GET['cat_id'])) ? $_GET['cat_id'] : 0;


if(strlen($ret_path)<2){
	$ret_path = 'catalog/categories';
}
if(strlen($ret_dir)<2){
	$ret_dir = 'categories';
}
if(strlen($ret_page)<2){
	$ret_page = 'edit-t-category';
}
if(strlen($img_type)<2){
	$img_type = 'main';
}

https://storittek.com/manage/catalog/categories/edit-item.php?is_new_img=1&cat_id=0&img_type=

$ret_dest = SITEROOT.'manage/'.$ret_path.'/'.$ret_page.'.php?is_new_img=1&cat_id='.$_SESSION['cat_id'].'&img_type='.$_SESSION['img_type'];

if(isset($_POST["sel_img_id"])){
	
	echo "sel_img_id:  ".$_POST["sel_img_id"];
	echo "<br />";
	if(!isset($_SESSION['img_id']))$_SESSION['img_id']=$_POST["sel_img_id"];
	
	$_SESSION['sel_img_id']	= $_POST["sel_img_id"];
	if(strpos($img_type, 'pec_sizes_1_img_i') !== false){
		$_SESSION['temp_cat_fields']['sub_1_img_id'] = $_SESSION['sel_img_id'];
	}
	if(strpos($img_type, 'pec_sizes_2_img_i') !== false){
		$_SESSION['temp_cat_fields']['sub_2_img_id'] = $_SESSION['sel_img_id'];
	}
	if(strpos($img_type, 'pec_sizes_3_img_i') !== false){
		$_SESSION['temp_cat_fields']['sub_3_img_id'] = $_SESSION['sel_img_id'];
	}

	if(strpos($img_type, 'ain') !== false){
		$_SESSION['img_id'] = $_SESSION['sel_img_id'];
	}
	if(strpos($img_type, 'art') !== false){
		$_SESSION['img_id'] = $_SESSION['sel_img_id'];
	}
	
	$_SESSION['temp_gallery'][] = $_SESSION['sel_img_id'];

	
	$msg = "img_type: ".$img_type." was set";
}


if(isset($_POST["del_img_id"])){
	$img_id = $_POST["del_img_id"];
	if(!is_numeric($img_id)) $img_id = 0;	
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$sql = sprintf("SELECT file_name FROM image WHERE img_id = '%u'", $img_id);
	$result = $dbCustom->getResult($db,$sql);
	if($result->num_rows > 0){
		$object = $result->fetch_object();		
// only one
$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/full/".$object->file_name;
if(file_exists($p)) unlink($p);
$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/tiny/".$object->file_name;
if(file_exists($p)) unlink($p);
$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/thumb/".$object->file_name;
if(file_exists($p)) unlink($p);
$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/small/".$object->file_name;
if(file_exists($p)) unlink($p);
$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/".$object->file_name;
if(file_exists($p)) unlink($p);
$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/large/".$object->file_name;
if(file_exists($p)) unlink($p);
/* **** wide **** */
$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/tiny/wide/".$object->file_name;
if(file_exists($p)) unlink($p);
$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/thumb/wide/".$object->file_name;
if(file_exists($p)) unlink($p);
$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/small/wide/".$object->file_name;
if(file_exists($p)) unlink($p);
$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/wide/".$object->file_name;
if(file_exists($p)) unlink($p);
$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/large/wide/".$object->file_name;
if(file_exists($p)) unlink($p);
/* **** extra wide **** */
$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/tiny/exwide/".$object->file_name;
if(file_exists($p)) unlink($p);
$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/thumb/exwide/".$object->file_name;
if(file_exists($p)) unlink($p);
$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/small/exwide/".$object->file_name;
if(file_exists($p)) unlink($p);
$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/exwide/".$object->file_name;
if(file_exists($p)) unlink($p);
$p = SITEROOT."/saascustuploads/".$_SESSION['profile_account_id']."/cart/large/exwide/".$object->file_name;
if(file_exists($p)) unlink($p);
			
$sql = sprintf("DELETE FROM image 
				WHERE img_id = '%u'
				AND profile_account_id = '%u'", $img_id, $_SESSION['profile_account_id']);
$result = $dbCustom->getResult($db,$sql);
			
$msg = "Image deleted.";
		
	}else{
	
	/*
	$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
	
	$sql = sprintf("DELETE FROM image 
					WHERE img_id = '%u'
					AND profile_account_id = '%u'", $img_id, $_SESSION['profile_account_id']);
	$result = $dbCustom->getResult($db,$sql);

	$p = SITEROOT."/saascustuploads/".$_SESSION['profile_account_id']."/cms/full/".$object->file_name;
	if(file_exists($p)) unlink($p);
	$p = SITEROOT."/saascustuploads/".$_SESSION['profile_account_id']."/cms/".$object->file_name;
	if(file_exists($p)) unlink($p);
	*/

	
	}
		
}

$db = $dbCustom->getDbConnect(CART_N_DATABASE);
$sql = "SELECT img_id, file_name 
		FROM image";
		
$sql .= " WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
$result = $dbCustom->getResult($db,$sql);	
echo "num_rows".$result->num_rows;
echo "<br />";
//ORDER BY img_id DESC
$img_array = array();
$i=0;
while($row = $result->fetch_object()) {
	
	$img_array[$i]['img_id'] = $row->img_id;
	$img_array[$i]['file_name'] = $row->file_name;
	$i++;
	//echo "<br />";
	//echo $row->file_name;
}


//echo "ret_dest:  ".$ret_dest;
//exit;



require_once($real_root.'/manage/admin-includes/doc_header.php'); 

?>
<script>

function select_img(img_id){
	document.getElementById("r"+img_id).checked = true;
}

</script>
</head>
<body>
<div style="margin=left:10%;">

<?php

echo "<div style='font-size:24px; color:blue;'>".$msg."</div>";

$url_str = "select-image.php";
$url_str .= "?ret_page=".$ret_page;
$url_str .= "&ret_path=".$ret_path;
$url_str .= "&ret_dir=".$ret_dir;
$url_str .= "&img_type=".$img_type;
$url_str .= "&cat_id=".$cat_id;
?>
<form name="add_image"  action="<?php echo $url_str ?>" method="post"  enctype="multipart/form-data">

<button type="submit" name="select_image" class="btn btn-success">Submit </button>
   
<a href="<?php echo $ret_dest; ?>" class="btn">Done &amp; Go Back</a>


<table border="1" cellpadding="4">
<tr>
	<td>Img ID</td>
	<td>Select</td>
	<td></td>
	<td>Is Used?</td>
	<td>Delete</td>
</tr>
<?php
$block = '';
foreach($img_array as $val){

	$block .= "<tr>"; 
	$block .= "<td>".$val['img_id']."</td>";

	$sel = ($_SESSION['img_id'] == $val['img_id']) ? "checked" : ''; 
	$block .= "<td>";	
	$block .= "<input id='r".$val['img_id']."' type='radio' name='sel_img_id' value='".$val['img_id']."' ".$sel."/>";
	$block .= "</td>";

	$block .= "<td>";
	$block .= "<img width='400'
	src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/full/".$val['file_name']."' 
	onClick='select_img(".$val['img_id'].")' />";
	$block .= "</td>";


$block .= "<td>";	
$image_is_used = 0;	
$sql = "SELECT name
	FROM category
	WHERE img_id = '".$val['img_id']."'";
$res = $dbCustom->getResult($db,$sql);
while($t_row = $res->fetch_object()){
	$block .= "Cat: ".$t_row->name."<br />";
	$image_is_used++;
}

$sql = "SELECT img_id
	FROM cat_gallery
	WHERE img_id = '".$val['img_id']."'";
$res = $dbCustom->getResult($db,$sql);
while($t_row = $res->fetch_object()){
	$block .= "cat_gallery: ".$t_row->img_id."<br />";
	$image_is_used++;
}



$sql = "SELECT name
	FROM category
	WHERE sub_1_img_id = '".$val['img_id']."'";
$res = $dbCustom->getResult($db,$sql);
while($t_row = $res->fetch_object()){
	$block .= "SPEC: ".$t_row->name."<br />";
	$image_is_used++;
}


$sql = "SELECT name
	FROM category
	WHERE sub_2_img_id = '".$val['img_id']."'";
$res = $dbCustom->getResult($db,$sql);
while($t_row = $res->fetch_object()){
	$block .= "SPEC: ".$t_row->name."<br />";
	$image_is_used++;
}


$sql = "SELECT name
	FROM category
	WHERE sub_3_img_id = '".$val['img_id']."'";
$res = $dbCustom->getResult($db,$sql);
while($t_row = $res->fetch_object()){
	$block .= "SPEC: ".$t_row->name."<br />";
	$image_is_used++;
}

$sql = "SELECT name
	FROM item
	WHERE img_id = '".$val['img_id']."'";
$res = $dbCustom->getResult($db,$sql);
while($t_row = $res->fetch_object()){
	$block .= "item: ".$t_row->name."<br />";
	$image_is_used++;
}
$sql = "SELECT item.name
	FROM item, item_gallery
	WHERE item.item_id = item_gallery.item_id
	AND item_gallery.img_id = '".$val['img_id']."'";
$res = $dbCustom->getResult($db,$sql);
while($t_row = $res->fetch_object()){
	$block .= "item gal: ".$t_row->name."<br />";
	$image_is_used++;
}
if($image_is_used == 0){
	$block .= "Not used";
}

$block .= "</td>";

$block .= "<td>";
//if($image_is_used == 0){
$block .= "<a class='btn btn-danger confirm '>";
$block .= "<input type='hidden' id='".$val['img_id']."' class='itemId' value='".$val['img_id']."' />del</a>";
//}
$block .= "</td>";

$block .= "</tr>";
}

$block .= "<tr>";

$block .= "<td>";
$block .= "<hr />";
$block .= "</td>";

$block .= "<td>";
$block .= "<hr />";
$block .= "</td>";

$block .= "<td>";
$block .= "<hr />";
$block .= "</td>";

$block .= "<td>";
$block .= "<hr />";
$block .= "</td>";
$block .= "</tr>";


/*
	$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
    $sql = "SELECT img_id, file_name 
			FROM image
			WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
			ORDER BY file_name";

	$result = $dbCustom->getResult($db,$sql);	

	while($row = $result->fetch_object()) {
		$block .= "<tr>"; 
	$block .= "<td>";
	$block .= "<hr />";
	$block .= "<td>";
	$block .= "<img width='100' src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cms/full/".$row->file_name."' onClick='select_img(".$val['img_id'].")' />";
	$block .= "</td>";
	$block .= "</td>";
	$block .= "<td>";
	$block .= $val['img_id'];
	$block .= "</td>";
	$block .= "<td>";
	$block .= $row->file_name;
	$block .= "</td>";
	$block .= "<td>";
		$block .= "<a class='btn btn-danger confirm'>";
		$block .= "<input type='hidden' id='".$val['img_id']."' class='itemId' value='".$val['img_id']."' />del</a>";
	$block .= "</td>";
	$block .= "</tr>";

	}
*/

echo $block;
?>
</table>
<div class="savebar">
	<button type="submit" name="select_image" class="btn btn-success">Submit </button>
</div>
        
</form>

<a href="<?php echo $ret_dest; ?>" class="btn">Cancel &amp; Go Back</a>
<?php
$url_str = "select-image.php";
$url_str .= "?ret_dir=".$ret_dir;
$url_str .= "&ret_page=".$ret_page;
?>
<div id="content-delete" class="confirm-content">
	<h3>Are you sure you want to delete this image?</h3>
	<form name="del_img_form" action="<?php echo $url_str; ?>" method="post" >
		<input id="del_img_id" class="itemId" type="hidden" name="del_img_id" value='' />
		<a class="btn btn-large dismiss">No, Cancel</a>
		<button class="btn btn-danger btn-large" name="del_img" type="submit" >Yes, Delete</button>
	</form>
</div>

</div>
   
</body>
</html>

