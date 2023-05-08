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


function del_fn($dbCustom,$fn){
	if(strpos($fn, '.') !== false){
		delete_images_from_files($dbCustom,$fn,$real_root);
	}
}

if(isset($_GET["del_fn"])){
	$fn = stripslashes($_GET["del_fn"]);
	$search = '/';
	$replace = '';
	$fn = str_ireplace($search,$replace,$fn);
	if(strpos($fn, '.') !== false){
		delete_images_from_files($dbCustom,$fn,$real_root);
	}
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
		$p = $real_root."/saascustuploads/".$_SESSION['profile_account_id']."/cart/".$file_name;
		if(file_exists($p)) unlink($p);

		$p = $real_root."/saascustuploads/".$_SESSION['profile_account_id']."/cart/full/".$file_name;
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
		/* **** wide **** */
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
		/* **** extra wide **** */
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
		$sql = "DELETE FROM image 
				WHERE file_name = '".$file_name."'
				AND profile_account_id = '1'";
		$result = $dbCustom->getResult($db,$sql);
		
		$p = $real_root."/saascustuploads/".$_SESSION['profile_account_id']."/cms/".$file_name;
		if(file_exists($p)) unlink($p);
		
		$p = $real_root."/saascustuploads/".$_SESSION['profile_account_id']."/cms/full/".$file_name;
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
	$path = $real_root."/saascustuploads/".$_SESSION['profile_account_id']."/cart/full/".$fn;
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
	$path = $real_root."/saascustuploads/".$_SESSION['profile_account_id']."/cart/full/".$fn;
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



function is_used($dbCustom,$fn){
	
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
		
	$ret = 0;	
	$sql = "SELECT img_id
			FROM image
			WHERE file_name = '".$fn."'";
	$result = $dbCustom->getResult($db,$sql);
	if($result->num_rows > 0){
		$obj = $result->fetch_object();	
		$ret = $obj->img_id;
	}
		
	$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
	$sql = "SELECT img_id
			FROM image
			WHERE file_name = '".$fn."'";
	$result = $dbCustom->getResult($db,$sql);
	if($result->num_rows > 0){
		$obj = $result->fetch_object();	
		$ret = $obj->img_id;
	}
	return $ret;
	
	
}


require_once($real_root.'/manage/admin-includes/doc_header.php'); 

$cart_dir  = $real_root.'/saascustuploads/1/cart/full/';
$site_dir = $real_root.'/saascustuploads/1/cms/';

?>

</head>
<body>
<br />
<a href="manage-images-cart.php">Cart Images</a>
<br />
<a href="manage-images-site.php">Site Images</a>
<br />
<a href="manage-images-site.php?get=1">Patch 1</a>
<br />
<a href="manage-images-site.php?get=2">Patch 2</a>
<br />
<a href="manage-images-site.php?get=3">Patch 3</a>
<br />
<a href="manage-images-site.php?get=4">Patch 4</a>
<br />
<a href="manage-images-site.php?get=5">Patch 5</a>
<br />
<a href="start.php">DONE</a>

<!--
<a href="rename-images.php">Rename All Cart Images</a>
-->
<br />

<table width="100%" cellpadding="20"  border="1"  style="margin-left:20px;">
<tr>
<td width="10%"></td>
<td width="10%"></td>
<td></td>
</tr>
<?php
	

$stopat = 1;

$get = isset($_GET['get'])?$_GET['get']:1;

if(!is_numeric($get))$get=1;

if($get < 2){
	$stopat = 50;
}elseif($get == 2){
	$stopat = 100;	
}elseif($get == 3){
	$stopat = 150;		
}else{
	$stopat = 200;
}


$i=0;
$files = scandir($cart_dir);
foreach($files as $key => $val){
	$is = is_used($dbCustom,$val);
	
	//if($is < 1){
		//del_fn($dbCustom,$val);
	//}
	if($i>0){
		
		if($stopat<=50){
			if(strlen($val) > 4){
				echo "<tr>";
				if(!$is){
					$url_str = SITEROOT."manage/manage-images.php?del_fn=".$val."&get=1";
					echo "<td><a href='".$url_str."' style='color:red;'>Delete</a></td>";
				}else{
					echo "<td>".$is."</td>";	
				}
				echo "<td>".$val."</td>";
				echo "<td><img src='".SITEROOT."/saascustuploads/".$_SESSION['profile_account_id']."/cart/".$val."' ></td>";		
				echo "</tr>";
			}
		}

		if($stopat>=50 && $stopat<=100){
			if(strlen($val) > 4){
				echo "<tr>";
				if(!$is){
					$url_str = SITEROOT."manage/manage-images.php?del_fn=".$val."&get=2";
					echo "<td><a href='".$url_str."' style='color:red;'>Delete</a></td>";
				}else{
					echo "<td>".$is."</td>";	
				}
				echo "<td>".$val."</td>";
				echo "<td><img src='".SITEROOT."/saascustuploads/".$_SESSION['profile_account_id']."/cart/".$val."' ></td>";		
				echo "</tr>";
			}
		}

		if($stopat>=100 && $stopat<=150){
			if(strlen($val) > 4){
				echo "<tr>";
				if(!$is){
					$url_str = SITEROOT."manage/manage-images.php?del_fn=".$val."&get=3";
					echo "<td><a href='".$url_str."' style='color:red;'>Delete</a></td>";
				}else{
					echo "<td>".$is."</td>";	
				}
				echo "<td>".$val."</td>";
				echo "<td><img src='".SITEROOT."/saascustuploads/".$_SESSION['profile_account_id']."/cart/".$val."' ></td>";		
				echo "</tr>";
			}
		}

		if($stopat>=150 && $stopat<=200){
			if(strlen($val) > 4){
				echo "<tr>";
				if(!$is){
					$url_str = SITEROOT."manage/manage-images.php?del_fn=".$val."&get=4";
					echo "<td><a href='".$url_str."' style='color:red;'>Delete</a></td>";
				}else{
					echo "<td>".$is."</td>";	
				}
				echo "<td>".$val."</td>";
				echo "<td><img src='".SITEROOT."/saascustuploads/".$_SESSION['profile_account_id']."/cart/".$val."' ></td>";		
				echo "</tr>";
			}
		}

	}

	
	if($stopat == $i){
		break;
	}

	$i++;
}


/*
$files = scandir($site_dir);
foreach($files as $key => $val){

	echo "<tr>";
	if(strlen($val) > 4){
		$url_str = SITEROOT."manage/manage-images.php?del_fn=".$val;
		echo "<td><a href='".$url_str."' style='color:red;'>Delete</a></td>";
		echo "<td>".$val."</td>";
		$c = get_where_used($dbCustom,$val,"cart");
		echo "<td>".$c."</td>";
		$c = get_where_used($dbCustom,$val,"site");
		echo "<td>".$c."</td>";
		
		$url_str = SITEROOT."manage/manage-images.php?rename_fn=".$val;		
		echo "<td><a href='".$url_str."' style='color:red;'>Rename</a></td>";
		echo "<td><img src='".SITEROOT."/saascustuploads/".$_SESSION['profile_account_id']."/cms/".$val."' ></td>";		
	}		
	echo "</tr>";
}
*/

?>


</table>


</body>
</html>

