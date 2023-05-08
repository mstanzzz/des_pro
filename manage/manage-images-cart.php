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
//require_once($real_root.'/manage/admin-includes/doc_header.php'); 
require_once($real_root.'/includes/class.dbcustom.php');
$dbCustom = new DbCustom();

require_once($real_root."/includes/config.php");
require_once($real_root."/manage/admin-includes/manage_functions.php");

/*  DANGER
$db = $dbCustom->getDbConnect(CART_N_DATABASE);
		$sql = "SELECT img_id 
				FROM image";
		$result = $dbCustom->getResult($db,$sql);

		while($row = $result->fetch_object()){
			$sql = "DELETE FROM image 
					WHERE img_id = '".$row->img_id."'";
			$res = $dbCustom->getResult($db,$sql);
			$sql = "DELETE FROM cat_gallery 
					WHERE img_id = '".$row->img_id."'";
			$res = $dbCustom->getResult($db,$sql);
			$sql = "DELETE FROM item_gallery 
					WHERE img_id = '".$row->img_id."'";
			$res = $dbCustom->getResult($db,$sql);
		
			$sql = "DELETE FROM feat_gallery 
					WHERE img_id = '".$row->img_id."'";
			$res = $dbCustom->getResult($db,$sql);
		}
*/
$msg='';
if(isset($_GET["del_fn"])){
	$file_name = $_GET["del_fn"];
	//delete_images_from_files($dbCustom,$file_name,$real_root);
	$msg = "Image deleted.".$file_name;
}


function delete_images_from_files($dbCustom,$file_name,$real_root){
	echo "<br />5288<br />";
	/*
	if(strlen($file_name)>4){

		$p = $real_root."/saascustuploads/".$_SESSION['profile_account_id']."/cart/".$file_name;
		if(file_exists($p)) unlink($p);
		$p = $real_root."/saascustuploads/".$_SESSION['profile_account_id']."/cart/".$file_name;
		if(file_exists($p)) unlink($p);
		$p = $real_root."/saascustuploads/".$_SESSION['profile_account_id']."/cart/tiny/".$file_name;
		if(file_exists($p)) unlink($p);
		$p = $real_root."/saascustuploads/".$_SESSION['profile_account_id']."/cart/thumb/".$file_name;
		if(file_exists($p)) unlink($p);
		$p = $real_root."/saascustuploads/".$_SESSION['profile_account_id']."/cart/small/".$file_name;
		if(file_exists($p)) unlink($p);
		$p = $real_root."/saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/".$file_name;
		if(file_exists($p)) unlink($p);
		$p = $real_root."/saascustuploads/".$_SESSION['profile_account_id']."/cart/large/".$file_name;
		if(file_exists($p)) unlink($p);
		// wide
		$p = $real_root."/saascustuploads/".$_SESSION['profile_account_id']."/cart/tiny/wide/".$file_name;
		if(file_exists($p)) unlink($p);
		$p = $real_root."/saascustuploads/".$_SESSION['profile_account_id']."/cart/thumb/wide/".$file_name;
		if(file_exists($p)) unlink($p);
		$p = $real_root."/saascustuploads/".$_SESSION['profile_account_id']."/cart/small/wide/".$file_name;
		if(file_exists($p)) unlink($p);
		$p = $real_root."/saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/wide/".$file_name;
		if(file_exists($p)) unlink($p);
		$p = $real_root."/saascustuploads/".$_SESSION['profile_account_id']."/cart/large/wide/".$file_name;
		if(file_exists($p)) unlink($p);
		// extra wide
		$p = $real_root."/saascustuploads/".$_SESSION['profile_account_id']."/cart/tiny/exwide/".$file_name;
		if(file_exists($p)) unlink($p);
		$p = $real_root."/saascustuploads/".$_SESSION['profile_account_id']."/cart/thumb/exwide/".$file_name;
		if(file_exists($p)) unlink($p);
		$p = $real_root."/saascustuploads/".$_SESSION['profile_account_id']."/cart/small/exwide/".$file_name;
		if(file_exists($p)) unlink($p);
		$p = $real_root."/saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/exwide/".$file_name;
		if(file_exists($p)) unlink($p);
		$p = $real_root."/saascustuploads/".$_SESSION['profile_account_id']."/cart/large/exwide/".$file_name;
		if(file_exists($p)) unlink($p);
		$db = $dbCustom->getDbConnect(CART_N_DATABASE);		
		
		$sql = "SELECT img_id 
				FROM image 
				WHERE file_name = '".$file_name."'
				AND profile_account_id = '1'";
		$result = $dbCustom->getResult($db,$sql);
		if($result->num_rows > 0){
			$object = $result->fetch_object();
			$sql = "DELETE FROM image 
					WHERE img_id = '".$object->img_id."'";
			$res = $dbCustom->getResult($db,$sql);
			$sql = "DELETE FROM cat_gallery 
					WHERE img_id = '".$object->img_id."'";
			$res = $dbCustom->getResult($db,$sql);
			$sql = "DELETE FROM item_gallery 
					WHERE img_id = '".$object->img_id."'";
			$res = $dbCustom->getResult($db,$sql);
		
			$sql = "DELETE FROM feat_gallery 
					WHERE img_id = '".$object->img_id."'";
			$res = $dbCustom->getResult($db,$sql);
		
		}
	}	
	*/		
}

function get_where_used($dbCustom,$fn=0){
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$img_id=0;
	$ret='';
	$sql = "SELECT img_id
			FROM image
			WHERE file_name = '".$fn."'";
	$result = $dbCustom->getResult($db,$sql);
	if($result->num_rows > 0){
		$object= $result->fetch_object();
		$img_id = $object->img_id;
	}
	if($img_id<1){
		return $ret;
	}
	$sql = "SELECT item_id
			FROM item
			WHERE img_id = '".$img_id."'";
	$result = $dbCustom->getResult($db,$sql);
	if($result->num_rows > 0){
		$ret .= " Used in Product";
	}
	$sql = "SELECT cat_id
			FROM category
			WHERE img_id = '".$img_id."'";
	$result = $dbCustom->getResult($db,$sql);
	if($result->num_rows > 0){
		$ret .= "... Used in Category";
	}
	$sql = "SELECT cat_gallery_id
			FROM cat_gallery
			WHERE img_id = '".$img_id."'";
	$result = $dbCustom->getResult($db,$sql);
	if($result->num_rows > 0){
		$ret .= "... Used in Category";
	}
	$sql = "SELECT item_gallery_id
			FROM item_gallery
			WHERE img_id = '".$img_id."'";
	$result = $dbCustom->getResult($db,$sql);
	if($result->num_rows > 0){
		$ret .= "... Used in Category";
	}
	$sql = "SELECT feat_gallery_id
			FROM feat_gallery
			WHERE img_id = '".$img_id."'";
	$result = $dbCustom->getResult($db,$sql);
	if($result->num_rows > 0){
		$ret .= "... Used in Feat Gallery";
	}
	$sql = "SELECT feat_id
			FROM feat
			WHERE img_id = '".$img_id."'";
	$result = $dbCustom->getResult($db,$sql);
	if($result->num_rows > 0){
		$ret .= "... Used in Feat";
	}
	$sql = "SELECT video_id
			FROM video
			WHERE img_id = '".$img_id."'";
	$result = $dbCustom->getResult($db,$sql);
	if($result->num_rows > 0){				
		$ret .= "... Used in Video";
	}
	return $ret;
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
	alert(img_id);
	document.getElementById("r"+img_id).checked = true;
}
</script>
</head>
<body>
<br />
<a href="start.php">DONE</a>
<hr />
<?php
echo "msg:  ".$msg;
$cart_dir='';
//$cart_dir .= SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/";
$cart_dir = "../saascustuploads/1/cart/";
echo $cart_dir;
//$site_dir = 
//$real_root."/saascustuploads/1/cms/';

?>
<hr />
These images are before croping
<hr />

<table style="background:#E8D5C9;width:100%" cellpadding="12" cellspacing="12"  border="2"  style="margin-left:0px;">
<tr style="font-color:red"  height="100px;">
<td width="1%">key</td>
<td width="10%">File</td>

<td width="4%">DELETE</td>
<td width="20%">?</td>
<td>What?</td>
</tr>
<?php
$block='';
$files = scandir($cart_dir);
foreach($files as $key=>$val){
	if(strlen($val) > 4){
		$url_str = SITEROOT."manage/manage-images-cart.php?del_fn=".$val;
		$block .= "<tr>";
		$block .= "<td>".$key."</td>";
		$block .= "<td>".$val."</td>";
		$block .= "<td>";
		$block .= "<a target='_blank' class='fancybox' ";
		$block .= " href='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$val;
		$block .= "'>";
		$block .= "<img  ";
	$block .= " src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/thumb/hero/".$val;
	$block .= "' />";
	$block .= "</a>";

$block .= "</td>";





		$block .= "<td><a href='".$url_str."'>Delete</a></td>";
		$block .= "<td>".get_where_used($dbCustom,$val)."</td>";
		$block .= "<td>";
		$block .= "</tr>";
	}
}
echo $block;
?>
</table>


</body>
</html>





