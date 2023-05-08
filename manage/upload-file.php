<?php
ini_set('max_execution_time', 300);
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

if(isset($_GET['doc_type'])) $_SESSION['doc_type'] = $_GET['doc_type']; 
if(isset($_GET['img_type'])) $_SESSION['img_type'] = $_GET['img_type']; 
if(isset($_GET['ret_page'])) $_SESSION['ret_page'] = $_GET['ret_page']; 
if(isset($_GET['ret_dir'])) $_SESSION['ret_dir'] = $_GET['ret_dir'];
if(isset($_GET['ret_path'])) $_SESSION['ret_path'] = $_GET['ret_path']; 
if(isset($_GET['spec_id'])) $_SESSION['spec_id'] = $_GET['spec_id']; 

$strip =  (isset($_GET['strip'])) ? $_GET['strip'] : 0;

if(!isset($_SESSION['img_id'])) $_SESSION['img_id'] = 0;
if(!isset($_SESSION['doc_type'])) $_SESSION['doc_type'] = '';
$_SESSION['img_type'] = '';

$_SESSION['name']=(isset($_GET['name']))? $_GET['name'] : '';
$_SESSION['tool_tip']=(isset($_GET['tool_tip']))? $_GET['tool_tip'] : '';

$msg = '';

if(isset($_POST['submit'])){
		
	require_once($real_root.'/includes/class.upload.php');	
	$handle = new Upload($_FILES['uploadedfile']);
	$f_name = '';
	if ($handle->uploaded) {
		$handle->file_overwrite	= false;				
		$ext  = strtolower(pathinfo($_FILES['uploadedfile']['name'], PATHINFO_EXTENSION));						
		
		if(strpos($_SESSION['img_type'], '_vide') !== false){
			$output_dir = "../saascustuploads/".$_SESSION['profile_account_id']."/cart/";
		}else{
			$output_dir = "../saascustuploads/".$_SESSION['profile_account_id']."/docs/";
		}

		$handle->Process($output_dir);

		if($handle->processed){ 
			
			$f_name = $handle->file_dst_name;
			$db = $dbCustom->getDbConnect(CART_N_DATABASE);

			if(strpos($_SESSION['img_type'], '_vide') !== false){
				$sql = "INSERT INTO image (file_name, profile_account_id) 
						VALUES ('".$f_name."', '".$_SESSION['profile_account_id']."')";
				$r = $dbCustom->getResult($db,$sql);
				$id = $db->insert_id;
				$_SESSION['img_id']=$db->insert_id;	
			}else{
				$sql = "INSERT INTO document
					(profile_account_id, file_name)
					VALUES
					('".$_SESSION['profile_account_id']."', '".$f_name."')";			
				$r = $dbCustom->getResult($db,$sql);
				$id = $db->insert_id;
				$_SESSION['document_id'] = $db->insert_id;
				$_SESSION['temp_fields']['file_name'] = $f_name;
			}
		}else{	
			$msg = "  Error: " . $handle->error;        
		}
		$handle->clean();
	} else {
		$msg = "  Error: " . $handle->error;        
	}


	$url_str = SITEROOT."manage/".$_SESSION['ret_path']."/".$_SESSION['ret_page'].".php?id=".$id;
	$url_str .= "strip=".$strip;
	header("Location: ".$url_str);
	exit;
}
	
require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>

</head>
<body>
<center>
<div class="manage_page_container">
<br />
<br />
<?php
if($strip){
	$target="_self";
}else{
	$target="_top";
}
$url_str = "upload-file.php?strip=".$strip;
?>

<form action="<?php echo $url_str; ?>" method="post" enctype="multipart/form-data">
	
	<p style="color:blue; font-size:22px;">Document Upload </p>
	<label>Select a Document</label>
	<input type="file" name="uploadedfile" id="uploadedfile">
	<br />
	<p style="visibility:hidden" id="inprogress"> 
	<img id="inprogress_img" src="../images/progress.gif"> Please Wait... 
	</p>
	<?php 
	$ret_dest = SITEROOT."manage/".$_SESSION['ret_path'].'/'.$_SESSION['ret_page'].'.php';
	?>
	<a href="<?php echo $ret_dest; ?>" class="btn" style="margin-right:30px;" />Cancel </a>
	<input type="submit" name="submit" value="Upload" />

	</form>
	<br />
	<br />
	<br />
	<br />
	<br />
</center>

</div>

    
    
</body>
</html>
