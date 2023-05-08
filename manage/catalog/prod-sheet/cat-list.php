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

function prod_sheet_get_img($img_id){
	$dbCustom = new DbCustom();
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$ret = '';
	$sql = "SELECT file_name FROM image WHERE img_id = '".$img_id."'";
	$res = $dbCustom->getResult($db,$sql);
	if($res->num_rows > 0){			
		$obj = $res->fetch_object();
		$ret = $obj->file_name;
	}
	return $ret;
} 
$msg = (isset($_REQUEST['msg'])) ? $_REQUEST['msg'] : '';

$_SESSION['from_prod_sheet']=0;

$db = $dbCustom->getDbConnect(CART_N_DATABASE);

if(isset($_POST['cat_id'])){
	
	$name = addslashes(trim($_POST['name']));
	$cat_id = $_POST['cat_id'];
	$profile_cat_id = $_POST['profile_cat_id'];
	
	if(!is_numeric($cat_id))$cat_id=0;
	if(!is_numeric($profile_cat_id))$profile_cat_id=0;
	
	$sql = "UPDATE category
			SET name='".$name."',profile_cat_id='".$profile_cat_id."' 
			WHERE cat_id = '".$cat_id."'";
	$result = $dbCustom->getResult($db,$sql);
}

$db = $dbCustom->getDbConnect(CART_N_DATABASE);
$sql = "SELECT *
		FROM category 
		WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";	
$result = $dbCustom->getResult($db,$sql);		

$all_item_array = array();
$truncate = 0;
$i = 0;		
while($row = $result->fetch_object()){
	$all_item_array[$i]['cat_id'] = $row->cat_id;
	$all_item_array[$i]['img_id'] = $row->img_id;
	$all_item_array[$i]['profile_cat_id'] = $row->profile_cat_id;
	$all_item_array[$i]['name'] = $row->name;
	$i++; 	
}

$item_array = $all_item_array;
$disabled = '';

if(isset($_GET['img_off'])){
	$img_off=1;
}else{
	$img_off=0;
}
require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<br />
<a class="btn btn-info" style="margin-left:14px; float:left;"
href="<?php echo SITEROOT.'manage/catalog/prod-sheet/cat-list.php?img_off=1'; ?>">Images Off</a>
<div style="clear:both; height:20px;"></div>
<table width="100%" cellspacing="1" cellpadding="1" border="1" 
style="background: #7499CA; color:white;"> 
<tr height="60" style="color:#D2E7FC; font-size:18px; background:#5576A3; ">
<td width="10%"></td>
<td width="5%">Cat ID</td> 
<td width="5%">URL ID</td> 
<td width="35%">Name</td>
<td width="5%"></td>
<td width="5%"></td>
<td></td>
</tr>
<?php
$block = "";
foreach($item_array as $key => $val){
$block .= "<form action='cat-list.php' method='post'>";
$fn = prod_sheet_get_img($val['img_id']);		
$block .= "<tr>";
$block .= "<td>";
if(!$img_off){
$block .= "<a class='fancybox' href='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$fn."'>";
$block .= "<img src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/thumb/".$fn."'></a></td>";
}
$block .= "</td>";
$block .= "<td>".$val['cat_id'];
$block .= "<input type='hidden' name='cat_id' value='".$val['cat_id']."'>";
$block .= "</td>";
$block .= "<td>";
$block .= "<input size='6' type='text' name='profile_cat_id' value='".$val['profile_cat_id']."' >";
$block .= "</td>";
$block .= "<td>";
$block .= "<input size='60' type='text' name='name' value='".stripslashes($val['name'])."'>";
$block .= "</td>";
$block .= "<td><input type='submit' value='Update'></td>";
$url_str= SITEROOT."manage/catalog/categories/edit-t-category.php";
$url_str.="?cat_id=".$val['cat_id'];
$url_str.="&from_prod_sheet=1";
$block .= "<td><a href='".$url_str."' class='btn btn-info'>EDIT</a></td>";
$block .= "<td></td>";
$block .= "</tr>";
$block .= "</form>";
}
echo $block; 
?>
</table>
</body>
</html>

