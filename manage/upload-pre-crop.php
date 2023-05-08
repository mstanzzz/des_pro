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

unset($_SESSION['pre_cropped_fn']);

$fromfancybox = (isset($_REQUEST["fromfancybox"])) ? $_REQUEST["fromfancybox"] : 0;
if(isset($_GET['specs_content_id'])) $_SESSION['specs_content_id'] = $_GET['specs_content_id'];
if(isset($_GET['img_type'])) $_SESSION['img_type'] = $_GET['img_type']; 
if(isset($_GET['ret_page'])) $_SESSION['ret_page'] = $_GET['ret_page']; 
if(isset($_GET['ret_dir'])) $_SESSION['ret_dir'] = $_GET['ret_dir'];
if(isset($_GET['ret_path'])) $_SESSION['ret_path'] = $_GET['ret_path']; 
if(isset($_GET['crop_n'])) $_SESSION['crop_n'] = $_GET['crop_n']; 
if(isset($_GET['spec_id'])) $_SESSION['spec_id'] = $_GET['spec_id']; 
if(isset($_GET['cat_id'])) $_SESSION['cat_id'] = $_GET['cat_id']; 
if(isset($_GET['accessories_id'])) $_SESSION['accessories_id'] = $_GET['accessories_id']; 


$strip = (isset($_GET['strip'])) ? $_GET['strip'] : 0;
$video_id = isset($_GET['video_id'])? $_GET['video_id'] : 0;
$item_id = $_SESSION['item_id'] = (isset($_GET['item_id'])) ? $_GET['item_id'] : 0;

if(!isset($_SESSION['img_type'])) $_SESSION['img_type'] = '';
if(!isset($_SESSION['ret_page'])) $_SESSION['ret_page'] = '';
if(!isset($_SESSION['ret_dir'])) $_SESSION['ret_dir'] = '';
if(!isset($_SESSION['ret_path'])) $_SESSION['ret_path'] = '';
if(!isset($_SESSION['crop_n'])) $_SESSION['crop_n'] = 0;
if(!isset($_SESSION['spec_id'])) $_SESSION['spec_id'] = 0;
if(!isset($_SESSION['cat_id'])) $_SESSION['cat_id'] = 0;
if(!isset($_SESSION['accessories_id'])) $_SESSION['accessories_id'] = 0;

require_once($real_root.'/includes/class.upload.php');	
$msg = '';

function img_resize($cur_dir, $cur_file, $newwidth, $output_dir, $stretch = 0)
{
	
	if(!file_exists($output_dir)) {
		mkdir($output_dir);         
	}
	
	$dir = opendir($cur_dir);
	$format='';
	if(preg_match("/.jpg/i", $cur_file))
	{
		$format = 'image/jpeg';
	}
	if (preg_match("/.gif/i", $cur_file))
	{
		$format = 'image/gif';
	}
	if(preg_match("/.png/i", $cur_file))
	{
		$format = 'image/png';
	}	
	if($format!='')
	{
		switch($format)
		{
			case 'image/jpeg':
			$source = imagecreatefromjpeg($cur_dir.$cur_file);
			break;
			case 'image/gif':
			$source = imagecreatefromgif($cur_dir.$cur_file);
			break;
			case 'image/png':
			$source = imagecreatefrompng($cur_dir.$cur_file);
			break;
		} 
		 
		list($src_w, $src_h) = getimagesize($cur_dir.$cur_file);

		/*
			echo "cur_dir ".$cur_dir;
			echo "<br />"; 
			echo "cur_file ".$cur_file;
			echo "<br />"; 
			echo "src_w:  ".$src_w; 
			echo "<br />"; 
			echo "src_h:  ".$src_h; 
			echo "<br />"; 
			echo "newwidth:  ".$newwidth; 
			echo "<br />"; 
			echo $cur_file;
			echo "<br />";
		*/			

		if($src_w > $newwidth || $stretch == 1){

			$newheight=round($src_h*$newwidth/$src_w);
			$dst_img = imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($dst_img, $source, 0, 0, 0, 0, $newwidth, $newheight, $src_w, $src_h);
			imagejpeg($dst_img, $output_dir.$cur_file, 60);
			
			imagedestroy($source);
		}else{
			copy($cur_dir.$cur_file,$output_dir.$cur_file);			
		}
	}
}



//if(0){
if(isset($_FILES['uploadedfile'])){
	$handle = new Upload($_FILES['uploadedfile']);
	$img_name = '';

	if ($handle->uploaded) {

		$handle->image_resize 	= false;
		$handle->file_overwrite	= false;
		$ext  = pathinfo($_FILES['uploadedfile']['name'], PATHINFO_EXTENSION);
		//if($ext != 'png' && $ext != 'gif'){
			$handle->image_convert = "jpg";		
			$handle->jpeg_quality  = 80;
		//}
		$dir_dest = "../saascustuploads/".$_SESSION['profile_account_id']."/tmp/pre-crop/";
		
		$handle->Process($dir_dest);
		
		//echo ("error:  ".$handle->error);
		//exit;
		
		if ($handle->processed) {
			$msg .= "Upload Successful <br 	/>";
			$img_name = $handle->file_dst_name;
			$_SESSION['pre_cropped_fn'] = $img_name;
			
			if(strpos($_SESSION['ret_path'], 'cms') !== false){
				$r_path = "../saascustuploads/".$_SESSION['profile_account_id']."/cms/";
			}else{
				$r_path = "../saascustuploads/".$_SESSION['profile_account_id']."/cart/";
			}	
			img_resize($dir_dest, $img_name, 1600, $r_path);
		}else{
			$msg = "  Error: " . $handle->error;        
		}
		
		$handle->clean();
	} else {
		$msg = "  Error: " . $handle->error;        
	}
	$_SESSION['r_path']=$r_path;

	$_SESSION['msg'] = $msg;
	$header_str = "Location: crop-tool.php?fn=".$_SESSION['pre_cropped_fn'];
	$header_str .= "&item_id=".$_SESSION['item_id'];
	$header_str .= "&accessories_id=".$_SESSION['accessories_id'];
	$header_str .= "&r_path=".$_SESSION['r_path'];
	$header_str .= "&video_id=".$video_id;
	$header_str .= "&img_type=".$_SESSION['img_type'];	
	$header_str .= "&strip=".$strip;	

	header($header_str);
}

require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>
<script>

function check_file(){
	
	var file = $("#uploadedfile").val();	
	if(file == ""){
		alert("Please select a file to upload");
		document.getElementById('inprogress').style.visibility='visible';
		return false;	
	}
	return true;
}

</script>
</head>
<body>


<center>
<div class="manage_page_container">
<br />
<br />
<?php
$url_str = "upload-pre-crop.php";
$url_str .= "?ret_page=".$_SESSION['ret_page'];
$url_str .= "&item_id=".$_SESSION['item_id'];
$url_str .= "&accessories_id=".$_SESSION['accessories_id'];
$url_str .= "&ret_dir=".$_SESSION['ret_dir'];
$url_str .= "&ret_path=".$_SESSION['ret_path'];
$url_str .= "&crop_n=".$_SESSION['crop_n'];
$url_str .= "&video_id=".$video_id;
$url_str .= "&item_id=".$item_id;

$url_str .= "&strip=".$strip;

//echo "strip ".$strip;

?>
<form action="<?php echo $url_str; ?>" method="post" enctype="multipart/form-data" 
	onSubmit="return check_file()" target="_self">
	
	<fieldset>
	<p style="color:blue; font-size:22px;">Image File Upload </p>
	<label>Select a File</label>
	<input type="file" name="uploadedfile" id="uploadedfile">
	<br />
	</fieldset>
	<p style="visibility:hidden" id="inprogress"> 
	<img id="inprogress_img" src="../images/progress.gif"> Please Wait... </p>
	<?php 
	$ret_dest = SITEROOT."manage/".$_SESSION['ret_path'].'/'.$_SESSION['ret_page'].'.php';
	$ret_dest.="?strip=".$strip;
	$ret_dest .= "&item_id=".$item_id;
	$ret_dest .= "&accessories_id=".$_SESSION['accessories_id'];
	
	

	if($video_id>0){
		$ret_dest .= "&video_id=".$video_id;
	}
	?>
	<a href="<?php echo $ret_dest; ?>" class="btn btn-large" style="margin-right:30px;" />Cancel </a>
	
	<button type="submit" name="submit" class="btn btn-success btn-large" 
	onClick="document.getElementById('inprogress').style.visibility='visible'"><p style="margin:10px;"> Upload </p></button>
	</form>
	<br />
	<br />
	<br />
	<br />
	<br />
</center>

<?php
require_once($real_root."/manage/admin-includes/manage-footer.php");
?>
</body>
</html>

