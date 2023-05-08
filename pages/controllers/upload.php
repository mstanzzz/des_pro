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

require_once($real_root.'/includes/config.php');

require_once($real_root.'/includes/class.upload.php');	
$msg='';
$img_name='';
$dir_dest='';
if(isset($_FILES['uploadedfile'])){

	$handle = new Upload($_FILES['uploadedfile']);

	if ($handle->uploaded) {
		$handle->image_resize 	= false;
		$handle->file_overwrite	= false;

		$dir_dest = $real_root."/user_uploads/";

		$handle->Process($dir_dest);

		if ($handle->processed) {
			$msg .= "Upload Successful <br 	/>";
			$img_name = $handle->file_dst_name;

			//print_r($handle);
			//exit;


		}else{
			$msg = "  Error: " . $handle->error;        
		}
		
		$handle->clean();
		
	} else {
		$msg = "  Error: " . $handle->error;        
	}
	

	$msg;
}


echo "<br />";
echo "img_name: ".$img_name;
echo "<br />";
echo "msg: ".$msg;

?>