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

require_once($real_root."/includes/config.php");

require_once($real_root."/manage/admin-includes/manage_functions.php");

$db = $dbCustom->getDbConnect(CART_N_DATABASE);


if(isset($_GET["del_fn"])){
	$file_name = $_GET["del_fn"];
	
	delete_images_from_files($dbCustom,$file_name,$real_root);
	$msg = "Image deleted.";
}

/*
$sql = "DELETE
		FROM image
		WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
$result = $dbCustom->getResult($db,$sql);
$sql = "SELECT *
FROM category
WHERE img_id = '4239'";
$result = $dbCustom->getResult($db,$sql);
*/

$sql = "DELETE 
		FROM item_gallery";
//$result = $dbCustom->getResult($db,$sql);

/*
$sql = "SELECT img_id
		FROM item_gallery";
$result = $dbCustom->getResult($db,$sql);
while($row = $result->fetch_object()){		
	echo $row->img_id;
	echo "<br />";
	do_gal_re_name_by_id($dbCustom,$row->img_id);
}
*/

function delete_images_from_files($dbCustom,$file_name,$real_root){
	if(strlen($file_name)>4){		
		
		$p = $real_root."/saascustuploads/".$_SESSION['profile_account_id']."/cms/".$file_name;
		if(file_exists($p)) unlink($p);
		
		$p = $real_root."/saascustuploads/".$_SESSION['profile_account_id']."/cms/".$file_name;
		if(file_exists($p)) unlink($p);
		
		$db = $dbCustom->getDbConnect(SITE_N_DATABASE);		
		$sql = "DELETE FROM image 
				WHERE file_name = '".$file_name."'
				AND profile_account_id = '1'";
		$result = $dbCustom->getResult($db,$sql);
		
		
		
		
	}			
}


function rename_img_in_db($dbCustom,$img_id,$new_file_name){	
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$sql = "UPDATE image
			SET file_name = '".$new_file_name."'
			WHERE img_id = '".$img_id."'";
	$result = $dbCustom->getResult($db,$sql);	
}




function get_cat_this_img($dbCustom,$fn,$real_root){
	$ret_data = array();
	$ext='';	
	$path = $real_root."/saascustuploads/".$_SESSION['profile_account_id']."/cart/".$fn;
	$ext = pathinfo($path, PATHINFO_EXTENSION);
	if(strlen($ext)>1){
		$db = $dbCustom->getDbConnect(CART_N_DATABASE);
		$sql = "SELECT img_id
				FROM image
				WHERE file_name = '".$fn."'";
		$result = $dbCustom->getResult($db,$sql);
		if($result->num_rows > 0){
			$object = $result->fetch_object(); 	
			$sql = "SELECT name
					FROM category
					WHERE img_id = '".$object->img_id."'";
			$r = $dbCustom->getResult($db,$sql);
			if($r->num_rows > 0){
				$o=$r->fetch_object(); 	
				$cat_name=$o->name;
				$new_file_name = get_prep_this_img_str($o->name,$ext);
				$ret_data['img_id']=$object->img_id;
				$ret_data['original_fn']=$fn;
				$ret_data['ext']=$ext;
				$ret_data['new_file_name']=$new_file_name;
			}
		}
	}
	return $ret_data;
}

function get_item_this_img($dbCustom,$fn,$real_root){
	$ret_data = array();
	$ext='';	
	$path = $real_root."/saascustuploads/".$_SESSION['profile_account_id']."/cart/".$fn;
	$ext = pathinfo($path, PATHINFO_EXTENSION);
	if(strlen($ext)>1){
		$db = $dbCustom->getDbConnect(CART_N_DATABASE);
		$sql = "SELECT img_id
				FROM image
				WHERE file_name = '".$fn."'";
		$result = $dbCustom->getResult($db,$sql);
		if($result->num_rows > 0){
			$object = $result->fetch_object(); 	
			$sql = "SELECT name
					FROM item
					WHERE img_id = '".$object->img_id."'";
			$r = $dbCustom->getResult($db,$sql);
			if($r->num_rows > 0){
				$o=$r->fetch_object(); 	
				$cat_name=$o->name;
				$new_file_name = get_prep_this_img_str($o->name,$ext);
				$ret_data['img_id']=$object->img_id;
				$ret_data['original_fn']=$fn;
				$ret_data['ext']=$ext;
				$ret_data['new_file_name']=$new_file_name;
			}
		}
	}
	return $ret_data;
}

function get_prep_this_img_str($cat_name,$ext){
	$new_file_name = strtolower($cat_name); 
	$new_file_name = str_ireplace(' ','-',$new_file_name);
	$new_file_name = str_ireplace('/','-',$new_file_name);
	$new_file_name = str_ireplace('&','-',$new_file_name);
	$new_file_name = str_ireplace('--','-',$new_file_name);
	$new_file_name = str_ireplace('--','-',$new_file_name);
	$new_file_name = $new_file_name.".".$ext;
	return $new_file_name; 
}


function get_where_used($dbCustom,$fn,$from){
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
		
	$ret = "none";	
	
	if($from == "cart"){	
		$sql = "SELECT img_id
				FROM image
				WHERE file_name = '".$fn."'";
		$result = $dbCustom->getResult($db,$sql);
		if($result->num_rows > 0){
				
			$ret = "Cart";
		}
		
	}else{
		$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
		$sql = "SELECT img_id
				FROM image
				WHERE file_name = '".$fn."'";
		$result = $dbCustom->getResult($db,$sql);
		if($result->num_rows > 0){
			$ret = "Site";	
		}

	}

	return $ret;
}

require_once($real_root.'/manage/admin-includes/doc_header.php'); 

$cart_dir  = $real_root.'/saascustuploads/1/cart/';
$site_dir = $real_root.'/saascustuploads/1/cms/';

?>

</head>
<body>
<br />
<a href="start.php">DONE</a>
<br />
<!--
<a href="rename-images.php">Rename All Cart Images</a>
-->
<br />

<table cellpadding="20"  border="1"  style="margin-left:80px;">
<tr>
<td width="10%"></td>
<td width="10%"></td>
<td width="10%">Used in cart</td>
<td width="10%">Used in site</td>
<td width="10%"></td>
<td></td>
</tr>
<?php
/*
$files = scandir($cart_dir);
foreach($files as $key => $val){

	echo "<tr>";
	if(strlen($val) > 4){
		$url_str = SITEROOT."manage/cart-images.php?del_fn=".$val;
		echo "<td><a href='".$url_str."' style='color:red;'>Delete</a></td>";
		echo "<td>".$val."</td>";
		$c = get_where_used($dbCustom,$val,"cart");
		echo "<td>".$c."</td>";
		$c = get_where_used($dbCustom,$val,"site");
		echo "<td>".$c."</td>";
		echo "<td><img src='".SITEROOT."/saascustuploads/".$_SESSION['profile_account_id']."/cart/".$val."' ></td>";		
	}		
	echo "</tr>";
}

*/

$files = scandir($site_dir);
foreach($files as $key => $val){

	echo "<tr>";
	if(strlen($val) > 4){
		$url_str = SITEROOT."manage/manage-images-site.php?del_fn=".$val;
		echo "<td><a href='".$url_str."' style='color:red;'>Delete</a></td>";
		echo "<td>".$val."</td>";
		$c = get_where_used($dbCustom,$val,"cart");
		echo "<td>".$c."</td>";
		$c = get_where_used($dbCustom,$val,"site");
		echo "<td>".$c."</td>";
		
		echo "<td><img src='".SITEROOT."/saascustuploads/".$_SESSION['profile_account_id']."/cms/".$val."' ></td>";		
	}		
	echo "</tr>";
}

?>


</table>


</body>
</html>

