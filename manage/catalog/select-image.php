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
$msg=""; 
$ret_path = (isset($_GET['ret_path'])) ? $_GET['ret_path']:'';
$ret_dir = (isset($_GET['ret_dir'])) ? $_GET['ret_dir'] :'';
$ret_page = (isset($_GET['ret_page'])) ? $_GET['ret_page']:'';

$img_type = (isset($_GET['img_type'])) ? $_GET['img_type']:'';
$item_id = (isset($_GET['item_id'])) ? $_GET['item_id']:0;
$cat_id = (isset($_GET['cat_id'])) ? $_GET['cat_id']:0;
$feat_id = (isset($_GET['feat_id'])) ? $_GET['feat_id']:0;
$s_f_acces_id = (isset($_GET['s_f_acces_id'])) ? $_GET['s_f_acces_id']:0;

$strip =(isset($_GET['strip'])) ? $_GET['strip']:0;
$action = (isset($_GET['action'])) ? $_GET['action']:'del_img';
if(!isset($_GET['action']))$_SESSION['action']=$action;
if(strlen($ret_path)<2)$ret_path = 'catalog/categories';
if(strlen($ret_dir)<2) $ret_dir = 'categories';
if(strlen($ret_page)<2)$ret_page = 'edit-t-category';
if(strlen($img_type)<2)$img_type = 'main';

if($_SESSION['action']="del_img"){
	$img_id = isset($_POST["del_img_id"])?$_POST["del_img_id"]:0;
	if(!is_numeric($img_id)) $img_id = 0;	
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$sql = sprintf("SELECT file_name FROM image WHERE img_id = '%u'", $img_id);
	$result = $dbCustom->getResult($db,$sql);
	if($result->num_rows > 0){
		$object = $result->fetch_object();	
		$sql = "DELETE FROM image 
				WHERE img_id = '".$img_id."'";
		$res = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM cat_gallery 
				WHERE img_id = '".$img_id."'";
		$res = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM item_gallery 
				WHERE img_id = '".$img_id."'";
		$res = $dbCustom->getResult($db,$sql);
		$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$object->file_name;
		if(file_exists($p)) unlink($p);
		$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$object->file_name;
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
		$msg = "Image deleted.";
	}else{
	
	}
}
$disabled=0;
function get_is_used($dbCustom,$img_id='400',$item_id=0){
	$ret_str='';

	if($item_id>0){
		$ret_str .= "Used:<br />item_id: ".$item_id."<br />";
	}
	$ret_str='';
	if($img_id>0){
		$ret_str .= "Used:<br />img_id: ".$img_id."<br />";
	}
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$sql = "SELECT name
		FROM item
		WHERE img_id = '".$img_id."'";
	$res = $dbCustom->getResult($db,$sql);
	while($t_row = $res->fetch_object()){
		$ret_str.="<br />item(name): ".$t_row->name."<br />";
	}
	$sql = "SELECT item.name
		FROM item, item_gallery
		WHERE item.item_id = item_gallery.item_id
		AND item_gallery.img_id = '".$img_id."'";
	$res = $dbCustom->getResult($db,$sql);
	while($t_row = $res->fetch_object()){
		$ret_str .= "Used:<br />item_gallery(name):";
		$ret_str .= "<br />".$t_row->name.":<br />";
	}
	$sql = "SELECT name
		FROM category
		WHERE img_id = '".$img_id."'";
	$res = $dbCustom->getResult($db,$sql);
	while($t_row = $res->fetch_object()){
		$ret_str .= "Used:<br />Cat: ".$t_row->name."<br />";
	}
	return $ret_str;
}
$img_array = array();
$db = $dbCustom->getDbConnect(CART_N_DATABASE);
$sql = "SELECT img_id, file_name 
		FROM image
		WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
		AND is_cart >'0'";	
$result = $dbCustom->getResult($db,$sql);	
$num_rows=$result->num_rows;
$i=0;
while($row = $result->fetch_object()){
	$img_array[$i]['img_id']=$row->img_id;
	$img_array[$i]['file_name']=$row->file_name;
	$i++;
}

require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>
<link href="<?php echo SITEROOT; ?>manage/js/fancybox2/source/jquery.fancybox.css" media="screen"  type="text/css" rel="stylesheet"/>
<link href="<?php echo SITEROOT; ?>manage/css/manageStyle.css?v=23.3" media="screen" type="text/css" rel="stylesheet"/>
<link href="<?php echo SITEROOT; ?>manage/js/chosen/chosen.css" media="screen" type="text/css" rel="stylesheet"/>
<link href="<?php echo SITEROOT; ?>manage/css/jquery.multiselect.css" media="screen" type="text/css" rel="stylesheet"/>
<link href="<?php echo SITEROOT; ?>manage/css/jquery.multiselect.filter.css" media="screen" type="text/css" rel="stylesheet"/>
<link href="<?php echo SITEROOT; ?>manage/css/print.css" media="print" type="text/css" rel="stylesheet"/>
<link href="<?php echo SITEROOT; ?>manage/css/forms.css" media="print" type="text/css" rel="stylesheet"/>
<link href="<?php echo SITEROOT; ?>manage/css/custom-theme/jquery-ui-1.8.23.custom.css" media="screen" type="text/css" rel="stylesheet"/>
<script src="<?php echo SITEROOT; ?>manage/js/jquery-1.8.1.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo SITEROOT; ?>manage/js/chosen/chosen.jquery.min.js"></script>
<script type="text/javascript" src="<?php echo SITEROOT; ?>manage/js/jquery.multiselect.js" ></script>
<script type="text/javascript" src="<?php echo SITEROOT; ?>manage/js/jquery.multiselect.filter.js"></script>
<script type="text/javascript" src="<?php echo SITEROOT; ?>manage/js/formtoggles.js"></script>
<script type="text/javascript" src="<?php echo SITEROOT; ?>manage/js/inlineConfirmation.js"></script>
<script type="text/javascript" src="<?php echo SITEROOT; ?>manage/js/ui/jquery.ui.core.js"></script>
<script type="text/javascript" src="<?php echo SITEROOT; ?>manage/js/ui/jquery.ui.widget.js"></script>
<script type="text/javascript" src="<?php echo SITEROOT; ?>manage/js/ui/jquery.ui.datepicker.js"></script>
<script type="text/javascript" src="<?php echo SITEROOT; ?>manage/js/bootstrapcustom.min.js"></script>
<script type="text/javascript" src="<?php echo SITEROOT; ?>manage/js/ctg_form_validation.js"></script>
<script type="text/javascript" src="<?php echo SITEROOT; ?>manage/js/fancybox2/source/jquery.fancybox.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$(".fancybox").fancybox();
});
function regularSubmit() {
  document.form.submit(); 
}	
function select_img(img_id){
	//alert(img_id);
	//document.getElementById("r"+img_id).checked = true;
}
</script>
</head>
<body>
<div style="margin=left:10%;">
<?php

$sel_img_id=isset($_POST['sel_img_id'])?$_POST['sel_img_id'] :0;

echo "<div style='font-size:24px; color:blue;'>msg: ".$msg."</div>";
$checked='';
$url_str="";
$url_str.="select-image.php?action=1";
$url_str.= "&ret_path=".$ret_path;
$url_str.= "&ret_dir=".$ret_dir;
$url_str.= "&ret_page=".$ret_page;
$url_str.= "&img_type=".$img_type;
$url_str.= "&item_id=".$item_id;
$url_str.= "&cat_id=".$cat_id;
$url_str.= "&s_f_acces_id=".$s_f_acces_id;

$url_str.= "&strip=".$strip;
?>
<form name="sel_image"  action="<?php echo $url_str; ?>" method="post"  enctype="multipart/form-data">
<button type="submit" name="select_image" class="btn btn-success">Submit </button> 

<?php

if(strpos($ret_page, '-item') !== false){
	$url_str="";
	if($img_type=="gallery"){
		$url_str.=SITEROOT."manage/catalog/products/edit-item.php?item_id=".$item_id."&gal_img_id=".$sel_img_id;
	}else{
		$url_str.=SITEROOT."manage/catalog/products/edit-item.php?item_id=".$item_id."&sel_img_id=".$sel_img_id;
	}
	echo "<a href='".$url_str."' class='btn'>Go Back to Product</a>";
}
if(strpos($ret_page, '-categor') !== false){
	$url_str="";
	$url_str.=SITEROOT."manage/catalog/".$ret_dir."/".$ret_page.".php?cat_id=".$cat_id."&img_id=".$sel_img_id;
	echo "<a href='".$url_str."' class='btn'>Go Back to Category</a>";
}

if(strpos($ret_page, '-acces') !== false){
	$url_str="";
	$url_str.=SITEROOT."manage/catalog/".$ret_dir."/".$ret_page.".php?s_f_acces_id=".$s_f_acces_id."&img_id=".$sel_img_id;
	echo "<a href='".$url_str."' class='btn'>Go Back to Accessory</a>";
}

if(strpos($ret_page, '-feat') !== false){
	$url_str="";
	$url_str.=SITEROOT."manage/catalog/".$ret_dir."/".$ret_page.".php?feat_id=".$feat_id."&img_id=".$sel_img_id;
	echo "<a href='".$url_str."' class='btn'>Go Back to Feature</a>";
}
?>
	
<table border="1" cellpadding="4">
<tr>
	<td>Img ID</td>
	<td>Select</td>
	<td>Where Used</td>
	<td>Image</td>
	<td>Delete</td>
</tr>
<?php
$block = '';
foreach($img_array as $val){
	

	$block .= "<tr>"; 
	$block .= "<td>".$val['img_id']."</td>";

	$block .= "<td>";
	$checked = ($sel_img_id == $val['img_id']) ? "checked" : '';
	$block .= "<div onClick='select_img(".$val['img_id'].");' class='checkboxtoggle on ".$disabled." '> 
		<span class='ontext'>ON</span>
		<a class='switch on' href='#'></a>
		<span class='offtext'>OFF</span>
		<input name='sel_img_id' type='checkbox' 
		class='checkboxinput' 
		name='img_id'
		value='".$val['img_id']."' ".$checked." /></div>";
	$block .= "</td>";
	
	$block .= "<td>";	
	$block .= get_is_used($dbCustom,$val['img_id'],$item_id);
	$block .= "</td>";
	
	$block .= "<td>";
	$block .= "<a target='_blank' class='fancybox' ";
	$block .= " href='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$val['file_name']."'>";
	$block .= "<img  ";
	$block .= " src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/thumb/".$val['file_name']."' />";
	$block .= "</a>";
	$block .= "</td>";
	
	$block .= "<td>";
	$block .= "<a class='btn btn-danger confirm '>";
	$block .= "<input type='hidden' id='".$val['img_id']."' class='itemId' value='".$val['img_id']."' />del</a>";
	$block .= "</td>";
	
	$block .= "</tr>";
}
echo $block;
?>
</table>

<div class="savebar">
	<button type="submit" name="select_image" class="btn btn-success">Submit </button>
</div>
<a href="<?php echo $ret_dest; ?>" class="btn">Cancel &amp; Go Back</a>
</form>

<?php
$url_str="";
$url_str.="select-image.php?action=del_img";
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

