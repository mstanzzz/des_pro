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

$r_path = (isset($_GET['r_path']))? $_GET['r_path'] : '';
if(!isset($_SESSION['r_path']))$_SESSION['r_path'] = $r_path;

$video_id = (isset($_GET['video_id']))? $_GET['video_id'] : 0;
if($video_id>0){
	$video_id = $video_id;
}
$strip = (isset($_GET['strip'])) ? $_GET['strip'] : 0;
$fn = (isset($_GET['fn']))? $_GET['fn'] : 'none';

$item_id = (isset($_GET['item_id'])) ? $_GET['item_id'] : 0;
if($item_id>0)$_SESSION['item_id']=$item_id;	

$accessories_id = (isset($_GET['accessories_id'])) ? $_GET['accessories_id'] : 0;
if($accessories_id>0)$_SESSION['accessories_id']=$accessories_id;	

if(null !== $_SESSION['pre_cropped_fn'] || $_SESSION['pre_cropped_fn'] == ''){
	$_SESSION['pre_cropped_fn'] = $fn;
}



if(strpos($_SESSION['img_type'], 'ain') !== false 
|| strpos($_SESSION['img_type'], 'art') !== false
|| strpos($_SESSION['img_type'], 'sub_') !== false
|| strpos($_SESSION['img_type'], 'aller') !== false){
	// do square
	if($_SESSION['crop_n'] <= 1){
$op_b = "minWidth: 380, minHeight: 380, maxWidth: 1600, maxHeight: 1600, aspectRatio: '1:1', handles: true,"; 	
	}
	// do wide		
	if($_SESSION['crop_n'] == 2){
$op_b = "minWidth: 477, minHeight: 336, maxWidth: 1600, maxHeight: 1600, aspectRatio: '800:620', handles: true,";
	}
	// do extra wide	
	if($_SESSION['crop_n'] == 3){
$op_b = "minWidth: 600, minHeight: 300, maxWidth: 1600, maxHeight: 1600, aspectRatio: '2:1', handles: true,";		
	}
	// do cart hero	
	if($_SESSION['crop_n'] > 3){
$op_b = "minWidth: 900, minHeight: 300, maxWidth: 2000, maxHeight: 666, aspectRatio: '3:1', handles: true,"; 
	}

}elseif(strpos($_SESSION['ret_page'], 'tool-admin') !== false){
	$op_b = "minWidth: 280, minHeight: 280, maxWidth: 2000, maxHeight: 2000, aspectRatio: '1:1', handles: true,"; 
}elseif(strpos($_SESSION['img_type'], 'ero') !== false){
	$op_b = "minWidth: 900, minHeight: 300, maxWidth: 2000, maxHeight: 666, aspectRatio: '3:1', handles: true,"; 
}elseif(strpos($_SESSION['img_type'], 'cms_about') !== false){

	if($_SESSION['crop_n'] == 1){
		$op_b = "minWidth: 300
		,minHeight: 200
		,maxWidth: 1100
		,aspectRatio: '1100:650'
		,handles: true,"; 
	}else{
		$op_b = "minWidth: 300
		,minHeight: 200
		,maxWidth: 1100
		,aspectRatio: '1100:650'
		,handles: true,"; 
	}

}elseif(strpos($_SESSION['img_type'], 'cms_img') !== false){

	if($_SESSION['crop_n'] == 1){
		$op_b = "minWidth: 400
		,minHeight: 300
		,maxWidth: 1800
		,aspectRatio: '1366:633'
		,handles: true,"; 
	}else{
		$op_b = "minWidth: 300
		,minHeight: 300
		,maxWidth: 1000
		,aspectRatio: '1:1'
		,handles: true,"; 
	}

}else{
	$op_b = "minWidth: 10, minHeight: 10, maxWidth: 1600, maxHeight: 1600, aspectRatio: '1:1', handles: true,"; 
}

require_once($real_root.'/manage/admin-includes/doc_header.php'); 

?>
<link href="./js/css/ui-lightness/jquery-ui-1.8.7.custom.css" rel="Stylesheet" type="text/css" />
<link href="./js/css/jquery.cropzoom.css" rel="Stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="jquery.imgareaselect-0.9.10/css/imgareaselect-default.css" />
<script type="text/javascript" src="jquery.imgareaselect-0.9.10/scripts/jquery.min.js"></script>
<script type="text/javascript" src="jquery.imgareaselect-0.9.10/scripts/jquery.imgareaselect.pack.js"></script>

<style type="text/css">
#img_to_crop {
	-webkit-user-drag: element;
	-webkit-user-select: none;
}

.center_this_block{
	display:inline-block;
}

body{
	text-align:center;
}
</style>

<script>

$(document).ready(function () {
    var ias = $('#pre_cropped').imgAreaSelect({
		<?php echo 	$op_b; ?>
		onSelectEnd: function (img, selection) {
			$('input[name="x1"]').val(selection.x1);
			$('input[name="y1"]').val(selection.y1);
            $('input[name="x2"]').val(selection.x2);
            $('input[name="y2"]').val(selection.y2);            
        }
    });
});

function validate(){

	var x1 = $('input[name="x1"]').val();
	var y1 = $('input[name="y1"]').val();
	var x2 = $('input[name="x2"]').val();
	var y2 = $('input[name="y2"]').val();

	ret = 1;
	
	if(!ret){		
		alert("Please click inside the image and select a crop area");
		return false;	
	}

	alert("x1"+x1+"    y1"+y1+"     x2"+x2+"    y2"+y2);
	
	return true;
	
}
</script>
</head>
<body>
<?php
if($_SESSION['ret_path'] != ""){

	$ret_dest = $_SESSION['ret_path']."/".$_SESSION['ret_page'].".php";
	$ret_dest.="?is_new_img=1&cat_id=".$_SESSION['cat_id'];
	$ret_dest.="&strip".$strip;
	$ret_dest.="&item_id".$_SESSION['item_id'];
	$ret_dest.="&accessories_id".$_SESSION['accessories_id'];

}else{

	$ret_dest = $_SESSION['ret_dir'].'/'.$_SESSION['ret_page'].'.php?is_new_img=1&cat_id='.$_SESSION['cat_id'];
	$ret_dest.="&strip".$strip;
	$ret_dest.="&item_id".$_SESSION['item_id'];
	$ret_dest.="&accessories_id".$_SESSION['accessories_id'];

}

if(strpos($_SESSION['ret_path'], 'cms') !== false){
	$f_path = "../saascustuploads/".$_SESSION['profile_account_id']."/cms/";				
}else{
	$f_path = "../saascustuploads/".$_SESSION['profile_account_id']."/cart/";
}
?>
<div style="font-size: 25px;"> 
<?php

if(strpos($_SESSION['img_type'], 'ain') !== false 
|| strpos($_SESSION['img_type'], 'art') !== false
|| strpos($_SESSION['img_type'], 'spec_gal') !== false
|| strpos($_SESSION['img_type'], 'gallery') !== false){

	if($_SESSION['crop_n'] == 1){
		echo "Doing Square Crop";
	}
	if($_SESSION['crop_n'] == 2){
		echo "Doing Wide Crop";
	}
	if($_SESSION['crop_n'] == 3){
		echo "Doing Extra Wide Crop";
	}
	if($_SESSION['crop_n'] > 3){
		echo "Doing Hero";
	}

}
?>
</div>

<div style="margin-top:-2px; font-size:0.8em;"> 

<?php
$url_str = "crop-set.php?action=1";
if($video_id>0){
	$url_str .= "&video_id=".$video_id;
}
$url_str.="&strip=".$strip;
$url_str.="&item_id=".$_SESSION['item_id'];
$url_str.="&accessories_id=".$_SESSION['accessories_id'];
?>

<form action="<?php echo $url_str; ?>" method="post">
<input type="hidden" name="x1" value="" />
<input type="hidden" name="y1" value="" />
<input type="hidden" name="x2" value="" />
<input type="hidden" name="y2" value="" />
<input type="hidden" name="orig_img_path" value="<?php echo $f_path; ?>" />
<input type="hidden" name="orig_img_fn" value="<?php echo $_SESSION['pre_cropped_fn']; ?>" />
<input type="submit" name="submit" class="btn btn-primary" value=">>>>> Submit <<<<<" />

</form>
</div>
<?php

$img = $_SESSION['r_path'].$_SESSION['pre_cropped_fn'];

echo " 
<div class='original'>
<img id='pre_cropped' src='".$img."' />
</div>
";

if(isset($_SESSION['ret_path'])){
	if($_SESSION['ret_path'] != ''){
		$ret_dest = SITEROOT."manage/".$_SESSION['ret_path']."/".$_SESSION['ret_page'].".php";
		$ret_dest .= "?is_new_img=1";
		$ret_dest .= "&cat_id=".$_SESSION['cat_id'];
		$ret_dest .= "&img_type=".$_SESSION['img_type'];
		$ret_dest .= "&strip=".$strip;
		$ret_dest .= "&item_id=".$item_id;
	}
}
?>
<span style="color:blue;">
Use the handles in the corners and the sides to enlarge the crop area. Drag the box to the area you want in the final image.
</span>

<a class="btn btn-info"  href="<?php echo $ret_dest; ?>"> Cancel </a>


<?php
require_once($real_root."/manage/admin-includes/manage-footer.php");
?>
</body>
</html>




