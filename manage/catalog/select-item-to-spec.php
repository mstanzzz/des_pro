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

require_once($real_root.'/manage/admin-includes/manage-includes.php');
require_once($real_root.'/includes/class.shipping.php');

$sortby = (isset($_GET['sortby'])) ? trim(addslashes($_GET['sortby'])) : '';
$a_d = (isset($_GET['a_d'])) ? addslashes($_GET['a_d']) : 'a';
$pagenum = (isset($_GET['pagenum'])) ? addslashes($_GET['pagenum']) : 0;
$truncate = (isset($_GET['truncate'])) ? addslashes($_GET['truncate']) : 1;
$search_str = (isset($_REQUEST['search_str'])) ?  trim(addslashes($_REQUEST['search_str'])) : ''; 

function get_file_name($dbCustom,$img_id){
	$dbCustom = new DbCustom();
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);

	$sql = "SELECT file_name
			FROM image
			WHERE img_id = '".$img_id."'";
	$re = $dbCustom->getResult($db,$sql);
	if($re->num_rows > 0){
		$object = $re->fetch_object();
		return  $object->file_name;
	}
	return  '';
}

$db = $dbCustom->getDbConnect(CART_N_DATABASE);

$feat_id =  (isset($_GET['feat_id'])) ? $_GET['feat_id'] : 0;
$spec_id =  (isset($_GET['spec_id'])) ? $_GET['spec_id'] : 0;
$s_f_acces_id = (isset($_GET['s_f_acces_id']))? $_GET['s_f_acces_id'] : 0;
$cart_spec_sizes_id = (isset($_GET['cart_spec_sizes_id']))? $_GET['cart_spec_sizes_id'] : 0;


$for_showroom = (isset($_GET['for_showroom']))? $_GET['for_showroom'] : 0;
$for_cart = (isset($_GET['for_cart']))? $_GET['for_cart'] : 0;

if(!is_numeric($feat_id))$feat_id=0;
if(!is_numeric($spec_id))$spec_id=0;
if(!is_numeric($s_f_acces_id))$s_f_acces_id=0;

$dbCustom = new DbCustom();
$db = $dbCustom->getDbConnect(CART_N_DATABASE);


if(isset($_POST['item_ids'])){
	
	$_SESSION['temp_id_array']=array();
	foreach($_POST['item_ids'] as $id){
		$_SESSION['temp_id_array'][]=$id;		
	}	


	if($feat_id>0){
		foreach($_POST['item_ids'] as $id){
			$sql = "INSERT INTO feat_to_item
					(feat_id
					,item_id)
					VALUES
					('".$feat_id."','".$id."')"; 
			$res = $dbCustom->getResult($db,$sql);
			$the_id = $db->insert_id;
		}
	}

	if($spec_id>0){
		foreach($_POST['item_ids'] as $id){
			$sql = "INSERT INTO spec_to_item
					(spec_id
					,item_id)
					VALUES
					('".$spec_id."','".$id."')"; 
			$res = $dbCustom->getResult($db,$sql);
			$the_id = $db->insert_id;	
		}
	}

	if($s_f_acces_id>0){
		foreach($_POST['item_ids'] as $id){
			
			//echo ">>>>>    ".$id;
			
			$sql = "INSERT INTO s_f_acces_to_item
					(s_f_acces_id
					,item_id)
					VALUES
					('".$s_f_acces_id."','".$id."')"; 
			$res = $dbCustom->getResult($db,$sql);
			$the_id = $db->insert_id;	
		}
	}

}else{

	$_SESSION['temp_id_array']=array();

	if($feat_id>0){
		$sql = "SELECT item_id
				FROM feat_to_item";
				$result = $dbCustom->getResult($db,$sql);
		while($row = $result->fetch_object()){
			$_SESSION['temp_id_array'][]=$row->item_id;		
		}
	}
	if($spec_id>0){
		$sql = "SELECT item_id
				FROM spec_to_item";
				$result = $dbCustom->getResult($db,$sql);
		while($row = $result->fetch_object()){
			$_SESSION['temp_id_array'][]=$row->item_id;		
		}
	}
	if($s_f_acces_id>0){
		$sql = "SELECT item_id
				FROM s_f_acces_to_item";
				$result = $dbCustom->getResult($db,$sql);
		while($row = $result->fetch_object()){
			$_SESSION['temp_id_array'][]=$row->item_id;		
		}
	}

}

	
//print_r($_SESSION['temp_id_array']);


require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>
<script>
$(document).ready(function(){
	

});

function regularSubmit() {
  document.form1.submit(); 
}	

</script>
</head>
<body>

<a class="btn btn-info" href="<?php echo SITEROOT."/manage/catalog/specs-feat/specs-feat.php"; ?>" > BACK</a>

<br />

<div class="manage_page_container">


<?php 
if($for_showroom>0){
	echo "<div style='float:left; margin-left:6%; font-size:18px;'>Showroom Products Only</div>";
}elseif($for_cart>0){
	echo "<div style='float:left; margin-left:6%; font-size:18px;'>Cart Products Only</div>";
}else{

}


if($feat_id>0){
	echo "<div style='float:left; margin-left:6%; font-size:18px;'>Select Products for Features</div>";
}elseif($spec_id>0){
	echo "<div style='float:left; margin-left:6%; font-size:18px;'>Select Products for Specs</div>";
}elseif($s_f_acces_id>0){
	echo "<div style='float:left; margin-left:6%; font-size:18px;'>Select Products for Accessories</div>";

}elseif($cart_spec_sizes_id>0){
	echo "<div style='float:left; margin-left:6%; font-size:18px;'>Select Products for Cart Size</div>";
}else{

}

echo "<div style='clear:both;'></div>";


$db = $dbCustom->getDbConnect(CART_N_DATABASE);

$sql = "SELECT name, item_id, img_id
		FROM item 
		WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
if($for_showroom>0){
	$sql .= " AND show_in_showroom = '1'";
}
if($for_cart>0){
	$sql .= " AND show_in_showroom = '0'";
}
	$sql .= " ORDER BY name"; 

	
	$result = $dbCustom->getResult($db,$sql);
		
	$url_str= 'select-item-to-spec.php';
	$url_str.= "?feat_id=".$feat_id;
	$url_str.= "&spec_id=".$spec_id;
	$url_str.= "&s_f_acces_id=".$s_f_acces_id;
	$url_str.= "&for_showroom=".$for_showroom;
	$url_str.= "&for_cart=".$for_cart;


?>
	<form name="form1" action="<?php echo $url_str; ?>" method="post" enctype="multipart/form-data">
	
	<table cellpadding="10" cellspacing="0" style="width:100%;">
	<tr>
	<td width="6%"></td>
	<td width="14%">
	<input style="float:right; margin-right:50%;"  class="btn btn-large btn-primary" type="submit" name="submit" value="submit">
	</td>
	<td width="4%">SELECT</td>	
	<td>Name</td>
	</tr>
	<?php 
	
	$block = '';
	while($row = $result->fetch_object()) {

		$fn = get_file_name($dbCustom,$row->img_id);
		$img = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/small/".$fn;	
		$block .= "<tr>";
		$block .= "<td></td>";		
		$block .= "<td><img src='".$img."'></td>";		
		$checked = (in_array($row->item_id,$_SESSION['temp_id_array']))? "checked='checked'" : ''; 
		$block	.= "<td align='center' valign='middle' >
					<div class='checkboxtoggle on '> 
					<span class='ontext'>ON</span>
					<a class='switch on' href='#'></a>
					<span class='offtext'>OFF</span>
					<input type='checkbox' class='checkboxinput' name='item_ids[]' 
					value='".$row->item_id."' ".$checked." /></div>";
		$block .= "</td>";	
		$block .= "<td>".stripSlashes($row->name)."</td>";							
		$block .= "</tr>";	
	}
	echo  $block;
	?>
	</table>
	</form>

</div>
</body>
</html>
