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

$orig_img_fn = $_POST['orig_img_fn'];

if(!isset($_SESSION['pre_cropped_fn'])){
	$_SESSION['pre_cropped_fn'] = $orig_img_fn;
}
if(isset($_POST['orig_img_path'])){
	$orig_img_path = $_POST['orig_img_path'];	
}else{
	$orig_img_path = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/tmp/pre-crop/";	
}
$strip = (isset($_GET['strip'])) ? $_GET['strip'] : 0;

$video_id = isset($_GET['video_id'])?$_GET['video_id'] : 0;
$item_id = (isset($_GET['item_id'])) ? $_GET['item_id'] : 0;
if($item_id>0)$_SESSION['item_id']=$item_id;	

$accessories_id = (isset($_GET['accessories_id'])) ? $_GET['accessories_id'] : 0;
if($accessories_id>0)$_SESSION['accessories_id']=$accessories_id;	



$qual=80;

$x1 = $_POST['x1'];
$y1 = $_POST['y1'];
$x2 = $_POST['x2'];
$y2 = $_POST['y2'];

$ret_err = 0;
if(!is_numeric($x1))$ret_err = 1;
if(!is_numeric($x2))$ret_err = 1;
if(!is_numeric($y1))$ret_err = 1;
if(!is_numeric($y2))$ret_err = 1;

$new_width = 600;
$new_height = 600;

//list($orig_width, $orig_height) = getimagesize($orig_img_path.$orig_img_fn);
if(!$ret_err){
	$new_width = $x2 - $x1;
	$new_height = $y2 - $y1;

	if($new_width < 1)$ret_err = 1;
	if($new_height < 1)$ret_err = 1;
}

if($ret_err){
	echo "Error";
	echo "<br />";
	$url_str = "crop-tool.php";
	echo "<a href='".$url_str."'>Please GO BACK</a>";
	exit;
}

$temp_cropped = $real_root."/saascustuploads/".$_SESSION['profile_account_id']."/tmp/new_cropped".time().".jpg";
$canvas = imagecreatetruecolor($new_width, $new_height);
$src = imagecreatefromjpeg($orig_img_path.$orig_img_fn);
imagecopy($canvas, $src, 0, 0, $x1, $y1, $x2, $y2);
imagejpeg($canvas, $temp_cropped);

$src_w = $new_width;
$src_h = $new_height;
$preview = '';

$tep_galler=0;
$spec_gal=0;
$gallery=0;

if(strpos($_SESSION['img_type'], 'cms_about_') !== false){
	
	if($_SESSION['crop_n'] < 2){

		$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
		$sql = "INSERT INTO image (file_name, profile_account_id) 
				VALUES ('".$orig_img_fn."', '".$_SESSION['profile_account_id']."')";
		$r = $dbCustom->getResult($db,$sql);
		$id=$db->insert_id;	
	
		if(strpos($_SESSION['img_type'], '_about_1') !== false){
			$_SESSION['img_1_id'] = $id;
		}elseif(strpos($_SESSION['img_type'], '_about_2') !== false){
			$_SESSION['img_2_id'] = $id;
		}else{
			$_SESSION['img_3_id'] = $id;
		}	

		$new_path_fn = "../saascustuploads/".$_SESSION['profile_account_id']."/cms/".$orig_img_fn;
		$dst_w = 575;
		$dst_h = 380;
		$dst_img = imageCreateTrueColor($dst_w,$dst_h);
		imagecopyresampled($dst_img, $canvas, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
		imagejpeg($dst_img,$new_path_fn,$qual);
	
		$_SESSION['crop_n'] = 4;
		$url_str = SITEROOT."manage/crop-tool.php?crop_n=2&fn=".$orig_img_fn; 
		$url_str .= "&strip=".$strip; 
		header("Location: ".$url_str);
		exit;

	
	}else{

		$new_path_fn = "../saascustuploads/".$_SESSION['profile_account_id']."/cms/small/".$orig_img_fn;
		$dst_w = 200;
		$dst_h = 133;
		$dst_img = imageCreateTrueColor($dst_w,$dst_h);
		imagecopyresampled($dst_img, $canvas, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
		imagejpeg($dst_img,$new_path_fn,$qual);


	}	
	
	imagedestroy($src);
	imagedestroy($canvas);

	$url_str = SITEROOT."manage/".$_SESSION['ret_path']."/".$_SESSION['ret_page'].".php";
	$url_str .= "?strip=".$strip; 

	header("Location: ".$url_str);
	exit;
}


if(strpos($_SESSION['img_type'], 'cms_img') !== false){
	if(!isset($_SESSION['img_1_id']))$_SESSION['img_1_id']=0;
	if(!isset($_SESSION['img_2_id']))$_SESSION['img_2_id']=0;
	if(!isset($_SESSION['img_3_id']))$_SESSION['img_3_id']=0;
	if(!isset($_SESSION['img_4_id']))$_SESSION['img_4_id']=0;

	if($_SESSION['crop_n'] == 1){
		$_SESSION['crop_n']=2;
		$new_path_fn = "../saascustuploads/".$_SESSION['profile_account_id']."/cms/wide/".$orig_img_fn;
		$dst_w = 600;
		$dst_h = 370;
		$dst_img = imageCreateTrueColor($dst_w,$dst_h);
		imagecopyresampled($dst_img, $canvas, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);	
		imagejpeg($dst_img,$new_path_fn,$qual);
		$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
		$sql = "INSERT INTO image (file_name, profile_account_id) 
				VALUES ('".$orig_img_fn."', '".$_SESSION['profile_account_id']."')";
		$r = $dbCustom->getResult($db,$sql);

		if(strpos($_SESSION['img_type'], 'img_1') !== false){
			$_SESSION['img_1_id'] = $db->insert_id;
		}elseif(strpos($_SESSION['img_type'], 'img_2') !== false){
			$_SESSION['img_2_id'] = $db->insert_id;
		}elseif(strpos($_SESSION['img_type'], 'img_3') !== false){
			$_SESSION['img_3_id'] = $db->insert_id;
		}else{
			$_SESSION['img_4_id'] = $db->insert_id;
		}		
	}else{
		$_SESSION['crop_n']=3;
		$new_path_fn = "../saascustuploads/".$_SESSION['profile_account_id']."/cms/".$orig_img_fn;
		$dst_w = 600;
		$dst_h = 600;
		$dst_img = imageCreateTrueColor($dst_w,$dst_h);
		imagecopyresampled($dst_img, $canvas, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);	
		imagejpeg($dst_img,$new_path_fn,$qual);
	}
	
	
	if($_SESSION['crop_n'] == 1){
		$url_str = SITEROOT."manage/crop-tool.php?fn=".$orig_img_fn."&crop_n=".$_SESSION['crop_n']; 
		$url_str .= "&strip=".$strip; 

		header("Location: ".$url_str);
		exit;

	}elseif($_SESSION['crop_n'] == 2){
		$url_str = SITEROOT."manage/crop-tool.php?fn=".$orig_img_fn."&crop_n=".$_SESSION['crop_n']; 
		$url_str .= "&strip=".$strip; 

		header("Location: ".$url_str);
		exit;
	}else{		
		$url_str = SITEROOT."manage/".$_SESSION['ret_path']."/".$_SESSION['ret_page'].".php";
		$url_str .="?new_img=1";
		$url_str .= "&strip=".$strip; 

		
		if($_SESSION['img_1_id']>0){
			$url_str .= "&img_1_id=".$_SESSION['img_1_id'];
		}
		if($_SESSION['img_2_id']>0){
			$url_str .= "&img_2_id=".$_SESSION['img_2_id'];
		}
		if($_SESSION['img_3_id']>0){
			$url_str .= "&img_3_id=".$_SESSION['img_3_id'];
		}
		if($_SESSION['img_4_id']>0){
			$url_str .= "&img_4_id=".$_SESSION['img_4_id'];
		}
		header("Location: ".$url_str);
		exit;
	}
}

if(strpos($_SESSION['img_type'], 'hero') !== false){

	$new_path_fn = "../saascustuploads/".$_SESSION['profile_account_id']."/cms/".$orig_img_fn;
	
	$dst_w = $new_width;
	$dst_h = $new_height;
	$dst_img = imageCreateTrueColor($dst_w,$dst_h);
	imagecopyresampled($dst_img, $canvas, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);	
	imagejpeg($dst_img,$new_path_fn,$qual);

	$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
	$sql = "INSERT INTO image (file_name, profile_account_id) 
			VALUES ('".$orig_img_fn."', '".$_SESSION['profile_account_id']."')";
	$r = $dbCustom->getResult($db,$sql);
	$_SESSION['img_id'] = $db->insert_id; 




	$url_str = SITEROOT."manage/".$_SESSION['ret_path']."/".$_SESSION['ret_page'].".php?img_id=".$_SESSION['img_id']; 
	$url_str .= "&strip=".$strip; 
	
	header("Location: ".$url_str);

/*
echo "<br />";
echo "img_type ".$_SESSION['img_type'];
echo "<br />";
echo "accessories_id ".$_SESSION['accessories_id'];
echo "<br />";
exit;
*/



	
}

if(strpos($_SESSION['img_type'], 'diy') !== false){
	$new_path_fn = "../saascustuploads/".$_SESSION['profile_account_id']."/cms/".$orig_img_fn;
	$dst_w = $new_width;
	$dst_h = $new_height;
	$dst_img = imageCreateTrueColor($dst_w,$dst_h);
	imagecopyresampled($dst_img, $canvas, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
	imagejpeg($dst_img,$new_path_fn,$qual);
	$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
	$sql = "INSERT INTO image (file_name, profile_account_id) 
			VALUES ('".$orig_img_fn."', '".$_SESSION['profile_account_id']."')";
	$r = $dbCustom->getResult($db,$sql);
	$_SESSION['img_id'] = $db->insert_id; 					
}

if(strpos($_SESSION['img_type'], '_tool_imag') !== false){

	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	
	$sql = "INSERT INTO image (file_name, profile_account_id) 
			VALUES ('".$orig_img_fn."', '".$_SESSION['profile_account_id']."')";
	$res = $dbCustom->getResult($db,$sql);
	$_SESSION['img_id'] = $db->insert_id;	
		
	$new_path_fn = "../saascustuploads/".$_SESSION['profile_account_id']."/cart/".$orig_img_fn;
	$dst_w = 240;
	$dst_h = 240;
	$dst_img = imageCreateTrueColor($dst_w,$dst_h);
	imagecopyresampled($dst_img, $canvas, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
	imagejpeg($dst_img,$new_path_fn,$qual);

	imagedestroy($src);
	imagedestroy($canvas);

	$url_str = SITEROOT."manage/".$_SESSION['ret_path']."/".$_SESSION['ret_page'].".php?img_id=".$_SESSION['img_id']; 
	$url_str .= "&strip=".$strip; 
	
	header("Location: ".$url_str);

}


if(strpos($_SESSION['img_type'], '_vide') !== false){

	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$sql = "INSERT INTO image (file_name, profile_account_id) 
			VALUES ('".$orig_img_fn."', '".$_SESSION['profile_account_id']."')";
	$res = $dbCustom->getResult($db,$sql);
	$_SESSION['img_id'] = $db->insert_id;	

	$new_path_fn = "../saascustuploads/".$_SESSION['profile_account_id']."/cart/".$orig_img_fn;
	$dst_w = 280;
	$dst_h = 260;
	$dst_img = imageCreateTrueColor($dst_w,$dst_h);
	imagecopyresampled($dst_img, $canvas, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
	imagejpeg($dst_img,$new_path_fn,$qual);

	imagedestroy($src);
	imagedestroy($canvas);

	$url_str = SITEROOT."manage/".$_SESSION['ret_path']."/".$_SESSION['ret_page'].".php?img_id=".$_SESSION['img_id']; 
	$url_str .= "&video_id=".$video_id;
	$url_str .= "&strip=".$strip; 

	header("Location: ".$url_str);
	exit;


}


if(strpos($_SESSION['img_type'], 'art') !== false 
|| strpos($_SESSION['img_type'], 'ain') !== false 
|| strpos($_SESSION['img_type'], 'aller') !== false
|| strpos($_SESSION['img_type'], 'sub_') !== false){

	if($_SESSION['crop_n'] < 2){
		
		$db = $dbCustom->getDbConnect(CART_N_DATABASE);
		$sql = "INSERT INTO image (is_cart, file_name, profile_account_id) 
			VALUES ('1','".$orig_img_fn."', '".$_SESSION['profile_account_id']."')";
		$res = $dbCustom->getResult($db,$sql);
		$id = $db->insert_id;	

		if(strpos($_SESSION['img_type'], 'aller') !== false){
			$_SESSION['gal_img_id']=$id;
		}elseif(strpos($_SESSION['img_type'], 'ub_1_im') !== false){
			$_SESSION['temp_fields']['sub_1_img_id'] = $id;
		}elseif(strpos($_SESSION['img_type'], 'ub_2_im') !== false){
			$_SESSION['temp_fields']['sub_2_img_id'] = $id;		
		}elseif(strpos($_SESSION['img_type'], 'ub_3_im') !== false){
			$_SESSION['temp_fields']['sub_3_img_id'] = $id;
		}else{
			$_SESSION['img_id']=$id;
		}

		$new_path_fn = "../saascustuploads/".$_SESSION['profile_account_id']."/cart/large/".$orig_img_fn;
		$dst_w = 620;
		$dst_h = 620;
		$dst_img = imageCreateTrueColor($dst_w,$dst_h);
		imagecopyresampled($dst_img, $canvas, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
		imagejpeg($dst_img,$new_path_fn,$qual);

		$new_path_fn = "../saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/".$orig_img_fn;	
		$dst_w = 460;
		$dst_h = 460;
		$dst_img = imageCreateTrueColor($dst_w,$dst_h);
		imagecopyresampled($dst_img, $canvas, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
		imagejpeg($dst_img,$new_path_fn,$qual);

		$new_path_fn = "../saascustuploads/".$_SESSION['profile_account_id']."/cart/small/".$orig_img_fn;
		$dst_w = 240;
		$dst_h = 240;
		$dst_img = imageCreateTrueColor($dst_w,$dst_h);
		imagecopyresampled($dst_img, $canvas, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
		imagejpeg($dst_img,$new_path_fn,$qual);

		$new_path_fn = "../saascustuploads/".$_SESSION['profile_account_id']."/cart/thumb/".$orig_img_fn;
		$dst_w = 70;
		$dst_h = 70;
		$dst_img = imageCreateTrueColor($dst_w,$dst_h);
		imagecopyresampled($dst_img, $canvas, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
		imagejpeg($dst_img,$new_path_fn,$qual);

		$new_path_fn = "../saascustuploads/".$_SESSION['profile_account_id']."/cart/tiny/".$orig_img_fn;
		$dst_w = 25;
		$dst_h = 25;
		$dst_img = imageCreateTrueColor($dst_w,$dst_h);
		imagecopyresampled($dst_img, $canvas, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
		imagejpeg($dst_img,$new_path_fn,$qual);


		$_SESSION['crop_n'] = 2;

		imagedestroy($src);
		imagedestroy($canvas);

		$url_str = SITEROOT."manage/crop-tool.php?crop_n=2&fn=".$orig_img_fn; 
		$url_str .= "&strip=".$strip; 
		$url_str .= "&item_id=".$item_id; 

		header("Location: ".$url_str);
		exit;

	
	}elseif($_SESSION['crop_n'] == 2){
		// do wide
		
		$new_path_fn = "../saascustuploads/".$_SESSION['profile_account_id']."/cart/large/wide/".$orig_img_fn;
		$dst_w = 700;
		$dst_h = 620; 
		$dst_img = imageCreateTrueColor($dst_w,$dst_h);
		imagecopyresampled($dst_img, $canvas, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
		imagejpeg($dst_img,$new_path_fn,$qual);
		
		$new_path_fn = "../saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/wide/".$orig_img_fn;
		$dst_w = 470;
		$dst_h = 380;
		$dst_img = imageCreateTrueColor($dst_w,$dst_h);
		imagecopyresampled($dst_img, $canvas, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
		imagejpeg($dst_img,$new_path_fn,$qual);
		
		$new_path_fn = "../saascustuploads/".$_SESSION['profile_account_id']."/cart/small/wide/".$orig_img_fn;
		$dst_w = 240;
		$dst_h = 187;
		$dst_img = imageCreateTrueColor($dst_w,$dst_h);
		imagecopyresampled($dst_img, $canvas, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
		imagejpeg($dst_img,$new_path_fn,$qual);

		$new_path_fn = "../saascustuploads/".$_SESSION['profile_account_id']."/cart/thumb/wide/".$orig_img_fn;
		$dst_w = 80;
		$dst_h = 62;
		$dst_img = imageCreateTrueColor($dst_w,$dst_h);
		imagecopyresampled($dst_img, $canvas, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
		imagejpeg($dst_img,$new_path_fn,$qual);

		$new_path_fn = "../saascustuploads/".$_SESSION['profile_account_id']."/cart/tiny/wide/".$orig_img_fn;
		$dst_w = 25;
		$dst_h = 20;
		$dst_img = imageCreateTrueColor($dst_w,$dst_h);
		imagecopyresampled($dst_img, $canvas, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
		imagejpeg($dst_img,$new_path_fn,$qual);

		$_SESSION['crop_n'] = 3;

		imagedestroy($src);
		imagedestroy($canvas);

		$url_str = SITEROOT."manage/crop-tool.php?crop_n=3&fn=".$orig_img_fn; 
		$url_str .= "&strip=".$strip; 
		$url_str .= "&item_id=".$item_id; 

		header("Location: ".$url_str);
		exit;

	}elseif($_SESSION['crop_n'] == 3){		
		// do extra wide

		$new_path_fn = "../saascustuploads/".$_SESSION['profile_account_id']."/cart/large/exwide/".$orig_img_fn;
		$dst_w = 1030;
		$dst_h = 515; 
		$dst_img = imageCreateTrueColor($dst_w,$dst_h);
		imagecopyresampled($dst_img, $canvas, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
		imagejpeg($dst_img,$new_path_fn,$qual);
		
		$new_path_fn = "../saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/exwide/".$orig_img_fn;
		$dst_w = 740;
		$dst_h = 370;
		$dst_img = imageCreateTrueColor($dst_w,$dst_h);
		imagecopyresampled($dst_img, $canvas, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
		imagejpeg($dst_img,$new_path_fn,$qual);
		
		$new_path_fn = "../saascustuploads/".$_SESSION['profile_account_id']."/cart/small/exwide/".$orig_img_fn;
		$dst_w = 320;
		$dst_h = 160;
		$dst_img = imageCreateTrueColor($dst_w,$dst_h);
		imagecopyresampled($dst_img, $canvas, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
		imagejpeg($dst_img,$new_path_fn,$qual);

		$new_path_fn = "../saascustuploads/".$_SESSION['profile_account_id']."/cart/thumb/exwide/".$orig_img_fn;
		$dst_w = 120;
		$dst_h = 60;
		$dst_img = imageCreateTrueColor($dst_w,$dst_h);
		imagecopyresampled($dst_img, $canvas, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
		imagejpeg($dst_img,$new_path_fn,$qual);


		$new_path_fn = "../saascustuploads/".$_SESSION['profile_account_id']."/cart/tiny/exwide/".$orig_img_fn;
		$dst_w = 40;
		$dst_h = 20;
		$dst_img = imageCreateTrueColor($dst_w,$dst_h);
		imagecopyresampled($dst_img, $canvas, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
		imagejpeg($dst_img,$new_path_fn,$qual);

		$_SESSION['crop_n'] = 4;

		imagedestroy($src);
		imagedestroy($canvas);

		$url_str = SITEROOT."manage/crop-tool.php?crop_n=3&fn=".$orig_img_fn; 
		$url_str .= "&strip=".$strip; 
		$url_str .= "&item_id=".$item_id; 

		header("Location: ".$url_str);
		exit;


	}else{

		// do hero

		$new_path_fn = "../saascustuploads/".$_SESSION['profile_account_id']."/cart/large/hero/".$orig_img_fn;
		$dst_w = 1600;
		$dst_h = 530; 
		$dst_img = imageCreateTrueColor($dst_w,$dst_h);
		imagecopyresampled($dst_img, $canvas, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
		imagejpeg($dst_img,$new_path_fn,$qual);
		
		$new_path_fn = "../saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/hero/".$orig_img_fn;
		$dst_w = 900;
		$dst_h = 300;
		$dst_img = imageCreateTrueColor($dst_w,$dst_h);
		imagecopyresampled($dst_img, $canvas, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
		imagejpeg($dst_img,$new_path_fn,$qual);
		
		$new_path_fn = "../saascustuploads/".$_SESSION['profile_account_id']."/cart/small/hero/".$orig_img_fn;
		$dst_w = 480;
		$dst_h = 160;
		$dst_img = imageCreateTrueColor($dst_w,$dst_h);
		imagecopyresampled($dst_img, $canvas, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
		imagejpeg($dst_img,$new_path_fn,$qual);

		$new_path_fn = "../saascustuploads/".$_SESSION['profile_account_id']."/cart/thumb/hero/".$orig_img_fn;
		$dst_w = 180;
		$dst_h = 60;
		$dst_img = imageCreateTrueColor($dst_w,$dst_h);
		imagecopyresampled($dst_img, $canvas, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
		imagejpeg($dst_img,$new_path_fn,$qual);


		$new_path_fn = "../saascustuploads/".$_SESSION['profile_account_id']."/cart/tiny/hero/".$orig_img_fn;
		$dst_w = 60;
		$dst_h = 20;
		$dst_img = imageCreateTrueColor($dst_w,$dst_h);
		imagecopyresampled($dst_img, $canvas, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
		imagejpeg($dst_img,$new_path_fn,$qual);


		$_SESSION['crop_n'] = 0;
		
		if(strpos($_SESSION['img_type'], 'ub_1_im') !== false){
			$url_str = SITEROOT."manage/".$_SESSION['ret_path']."/".$_SESSION['ret_page'].".php?sub_1_img_id=".$_SESSION['temp_fields']['sub_1_img_id']; 
		}elseif(strpos($_SESSION['img_type'], 'ub_2_im') !== false){
			$url_str = SITEROOT."manage/".$_SESSION['ret_path']."/".$_SESSION['ret_page'].".php?sub_2_img_id=".$_SESSION['temp_fields']['sub_2_img_id']; 
		}elseif(strpos($_SESSION['img_type'], 'ub_3_im') !== false){
			$url_str = SITEROOT."manage/".$_SESSION['ret_path']."/".$_SESSION['ret_page'].".php?sub_3_img_id=".$_SESSION['temp_fields']['sub_3_img_id']; 
		}elseif(strpos($_SESSION['img_type'], 'aller') !== false){
			
			$url_str = SITEROOT."manage/".$_SESSION['ret_path']."/".$_SESSION['ret_page'].".php?gal_img_id=".$_SESSION['gal_img_id']; 
		
		
		
		}else{
			$url_str = SITEROOT."manage/".$_SESSION['ret_path']."/".$_SESSION['ret_page'].".php?img_id=".$_SESSION['img_id']; 
		}
		$url_str .= "&strip=".$strip; 
		$url_str .= "&item_id=".$item_id; 
		
		
		imagedestroy($src);
		imagedestroy($canvas);
	
		header("Location: ".$url_str);
		exit;
		
	}

}


imagedestroy($src);
imagedestroy($canvas);

$url_str = SITEROOT."manage/".$_SESSION['ret_path']."/".$_SESSION['ret_page'].".php";		
$url_str .= "?strip=".$strip; 
$url_str .= "&item_id=".$item_id; 
$url_str .= "&img_id=".$_SESSION['img_id']; 
$url_str .= "&accessories_id=".$_SESSION['accessories_id']; 


header("Location: ".$url_str);

?>
