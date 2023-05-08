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
require_once($real_root.'/manage/admin-includes/manage-includes.php');
require_once($real_root.'/includes/class.shipping.php');
$shipping = new Shipping;
$progress = new SetupProgress;
$module = new Module;
$page_title = 'Products';
$page_group = 'item';

function get_file_name($dbCustom,$img_id){
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

function get_attr_name($dbCustom,$attribute_id){
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$sql = "SELECT attribute_name
			FROM  attribute
			WHERE attribute_id = '".$attribute_id."'";			
	$res = $dbCustom->getResult($db,$sql);		
	if($res->num_rows > 0){
		$obj = $res->fetch_object();
		return $obj->attribute_name;		
	}
	return '';
}

function has_children($dbCustom,$item_id){
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$sql = "SELECT item_id
			FROM item
			WHERE parent_item_id = '".$item_id."'";			
	$res = $dbCustom->getResult($db,$sql);		
	if($res->num_rows > 0){
		return 1;		
	}
	return 0;
}

$_SESSION['from_t_cats'] = isset($_GET['from_t_cats']) ? 1 : 0;
$cat_id =  (isset($_GET['cat_id'])) ? $_GET['cat_id'] : 0;
$type = (isset($_GET['type'])) ? $_GET['type'] : '';

if(isset($_GET['uid1'])){
	$type=$_GET['uid1'];	
}

$type =  (isset($_GET['uid1'])) ? $_GET['uid1'] : $type;

$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';
$sortby = (isset($_GET['sortby'])) ? trim(addslashes($_GET['sortby'])) : '';
$a_d = (isset($_GET['a_d'])) ? addslashes($_GET['a_d']) : 'a';
$pagenum = (isset($_GET['pagenum'])) ? addslashes($_GET['pagenum']) : 0;
$truncate = (isset($_GET['truncate'])) ? addslashes($_GET['truncate']) : 1;
$search_str = (isset($_REQUEST['search_str'])) ?  trim(addslashes($_REQUEST['search_str'])) : ''; 

$db = $dbCustom->getDbConnect(CART_N_DATABASE);
if(isset($_POST['become_child'])){
	$parent_item = (isset($_POST['parent_item']))? $_POST['parent_item'] : 0;
	$item_id = (isset($_POST['item_id']))? $_POST['item_id'] : 0;
	$main_attr_id = 0;

	if($parent_item > 0 && $item_id > 0){
		$sql = "SELECT item_id, main_attr_id 
				FROM item
				WHERE parent_item_id > '0'
				AND item_id = '".$parent_item."'";
		$result = $dbCustom->getResult($db,$sql);
		if($result->num_rows > 0){
			$msg = 'The selected parent product is already a child of another product. This action was not completed.';
		}else{

			$sql = "SELECT main_attr_id 
					FROM item
					WHERE item_id = '".$parent_item."'";
			$result = $dbCustom->getResult($db,$sql);
			if($result->num_rows>0){
				$object = $result->fetch_object();
				$main_attr_id = $object->main_attr_id;
			}
			$sql = "UPDATE item
					SET parent_item_id = '".$parent_item."', main_attr_id = '".$main_attr_id."'
					WHERE item_id = '".$item_id."'";
			$result = $dbCustom->getResult($db,$sql);			
		}
	}
}

if(isset($_POST['become_associated'])){
	$kit_item_ids = (isset($_POST['kit_item_ids']))? $_POST['kit_item_ids'] : array();
	$item_id = (isset($_POST['item_id']))? $_POST['item_id'] : 0;
	if(count($kit_item_ids) > 0 && $item_id > 0){
		$sql = "SELECT item_id
				FROM item
				WHERE is_kit = '1'
				AND item_id = '".$item_id."'";
		$result = $dbCustom->getResult($db,$sql);
		if($result->num_rows > 0){
			$msg = 'The product is it\'s self already a kit. This action was not completed.';	
		}else{			
			$sql = "DELETE FROM item_to_kit
					WHERE item_id = '".$item_id."'";
			$result = $dbCustom->getResult($db,$sql);
			foreach($kit_item_ids as $v){
				$sql = "INSERT INTO item_to_kit
						(item_id, kit_item_id)
						VALUES
						('".$item_id."', '".$v."')";	
				$r = $dbCustom->getResult($db,$sql);
			}
		}
	}
}

if(isset($_POST['set_associated_items'])){	
	$item_ids = (isset($_POST['item_ids']))? $_POST['item_ids'] : array();
	$item_id = (isset($_POST['item_id']))? $_POST['item_id'] : 0;
	if(count($item_ids) > 0 && $item_id > 0){
		$sql = "SELECT item_id
				FROM item
				WHERE is_kit = '0'
				AND item_id = '".$item_id."'";
		$result = $dbCustom->getResult($db,$sql);
		if($result->num_rows > 0){		
			$msg = 'The product is not a kit. This action was not completed.';	
		}else{
			$sql = "DELETE FROM item_to_kit
					WHERE kit_item_id = '".$item_id."'";
			$result = $dbCustom->getResult($db,$sql);
			foreach($item_ids as $v){
				$sql = "INSERT INTO item_to_kit
						(item_id, kit_item_id)
						VALUES
						('".$v."', '".$item_id."')";	
				$r = $dbCustom->getResult($db,$sql);
			}
		}
	}
}

$parent_item_id =  (isset($_GET['parent_item_id'])) ? $_GET['parent_item_id'] : 0;

unset($_SESSION['temp_fields']);
unset($_SESSION['item_id']);
unset($_SESSION['img_id']);

if(isset($_POST['add_item'])){
	include('../include-add-item.php');
}
if(isset($_POST['edit_item'])){
	include('../include-edit-item.php');
}

if(isset($_POST['del_id'])){
	$item_id = $_POST['del_id'];

	$sql = "UPDATE item
			SET parent_item_id = '0'
			WHERE parent_item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);		
	$sql = "DELETE FROM item 
			WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);		
	$sql = "DELETE FROM item_to_opt 
			WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);		
	$sql = "DELETE FROM item_to_kit 
			WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);
	$sql = "DELETE FROM item_to_kit 
			WHERE kit_item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);
	$sql = "DELETE FROM item_gallery 
			WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);
	$sql = "DELETE FROM item_rating 
			WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);
	$sql = "DELETE FROM item_review 
			WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);
	$sql = "DELETE FROM item_to_category 
			WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);
	$sql = "DELETE FROM item_to_document 
			WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);
	$sql = "DELETE FROM item_to_media 
			WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);
	$sql = "DELETE FROM item_to_opt 
			WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);
	$sql = "DELETE FROM item_to_vend_man 
			WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);
	$is_used = 0;	
	$sql = "SELECT img_id
			FROM item
			WHERE item_id = '".$item_id."'";
	$result = $dbCustom->getResult($db,$sql);
	if($result->num_rows > 0){	
		$object = $result->fetch_object();
		$img_id = $object->img_id; 
		$sql = "SELECT item_id FROM item 
				WHERE img_id = '".$img_id."'
				AND item_id != '".$item_id."'";
		$r = $dbCustom->getResult($db,$sql);		
		if($r->num_rows > 0){
			$is_used = 1;
		}			
		$sql = "SELECT cat_id FROM category 
				WHERE img_id = '".$img_id."'";
		$r = $dbCustom->getResult($db,$sql);		
		if($r->num_rows > 0){
			$is_used = 1;
		}			
		$sql = "SELECT feat_id FROM feat 
				WHERE img_id = '".$img_id."'";
		$r = $dbCustom->getResult($db,$sql);		
		if($r->num_rows > 0){
			$is_used = 1;
		}	
		$sql = "SELECT feat_gallery_id FROM feat_gallery 
				WHERE img_id = '".$img_id."'";
		$r = $dbCustom->getResult($db,$sql);		
		if($r->num_rows > 0){
			$is_used = 1;
		}	
		$sql = "SELECT item_gallery_id FROM item_gallery 
				WHERE img_id = '".$img_id."'";
		$r = $dbCustom->getResult($db,$sql);		
		if($r->num_rows > 0){
			$is_used = 1;
		}	
		if(!$is_used){
			$sql = "SELECT file_name
					FROM image
					WHERE img_id = '".$img_id."'";
			$res = $dbCustom->getResult($db,$sql);
			if($res->num_rows > 0){	
				$obj = $res->fetch_object();			
				$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$file_name;
				if(file_exists($p)) unlink($p);
				$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/tiny/".$file_name;
				if(file_exists($p)) unlink($p);
				$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/thumb/".$file_name;
				if(file_exists($p)) unlink($p);
				$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/small/".$file_name;
				if(file_exists($p)) unlink($p);
				$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/".$file_name;
				if(file_exists($p)) unlink($p);
				$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/large/".$file_name;
				if(file_exists($p)) unlink($p);
				/* **** wide **** */
				$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/tiny/wide/".$file_name;
				if(file_exists($p)) unlink($p);
				$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/thumb/wide/".$file_name;
				if(file_exists($p)) unlink($p);
				$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/small/wide/".$file_name;
				if(file_exists($p)) unlink($p);
				$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/wide/".$file_name;
				if(file_exists($p)) unlink($p);
				$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/large/wide/".$file_name;
				if(file_exists($p)) unlink($p);
				/* **** extra wide **** */
				$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/tiny/exwide/".$file_name;
				if(file_exists($p)) unlink($p);
				$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/thumb/exwide/".$file_name;
				if(file_exists($p)) unlink($p);
				$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/small/exwide/".$file_name;
				if(file_exists($p)) unlink($p);
				$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/exwide/".$file_name;
				if(file_exists($p)) unlink($p);
				$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/large/exwide/".$file_name;
				if(file_exists($p)) unlink($p);
				/* **** hero **** */
				$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/tiny/hero/".$file_name;
				if(file_exists($p)) unlink($p);
				$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/thumb/hero/".$file_name;
				if(file_exists($p)) unlink($p);
				$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/small/hero/".$file_name;
				if(file_exists($p)) unlink($p);
				$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/hero/".$file_name;
				if(file_exists($p)) unlink($p);
				$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/large/hero/".$file_name;
				if(file_exists($p)) unlink($p);
				$sql = sprintf("DELETE FROM image 
								WHERE img_id = '%u'
								AND profile_account_id = '%u'", $img_id, $_SESSION['profile_account_id']);
				$result = $dbCustom->getResult($db,$sql);
			}
		}		
	}
	$msg = 'Your change is now live.';
}


		$sql = "UPDATE item SET active = '0'";
		//$result = $dbCustom->getResult($db,$sql);
		
		$sql = "UPDATE item SET show_in_showroom = '0'";
		//$result = $dbCustom->getResult($db,$sql);

if(!isset($_SESSION['items_from_this_page']))$_SESSION['items_from_this_page']=array();

if(isset($_POST['set_active'])){
	$actives = (isset($_POST['active']))? $_POST['active'] : array();
	$show_in_srs = (isset($_POST['show_in_sr']))? $_POST['show_in_sr'] : array();
	$click_count = (isset($_POST['click_count']))? $_POST['click_count'] : array(); 

	foreach($_SESSION['items_from_this_page'] as $item_id){
		$sql = "UPDATE item SET active = '0' WHERE item_id = '".$item_id."'";
		$result = $dbCustom->getResult($db,$sql);
		
		$sql = "UPDATE item SET show_in_showroom = '0' WHERE item_id = '".$item_id."'";
		$result = $dbCustom->getResult($db,$sql);
	}

	foreach($actives as $value){
		if(in_array($value,$_SESSION['items_from_this_page'])){
			$sql = "UPDATE item SET active = '1' WHERE item_id = '".$value."'";
			$result = $dbCustom->getResult($db,$sql);
		}
	}
	foreach($show_in_srs as $value){
		if(in_array($value,$_SESSION['items_from_this_page'])){
			$sql = "UPDATE item SET show_in_showroom = '1' WHERE item_id = '".$value."'";
			$result = $dbCustom->getResult($db,$sql);
		}
	}

	$i=0;
	if(is_array($click_count)){
		foreach($_SESSION['items_from_this_page'] as $item_id){
			if(is_numeric($cat_id)){				
				if(isset($click_count[$i])){		
					$sql = "UPDATE item 
							SET click_count = '".$click_count[$i]."' 
							WHERE item_id = '".$item_id."'";
					$result = $dbCustom->getResult($db,$sql);	
					$i++;	
				}					
			}
		}
	}

	$msg = 'Changes Saved.';
}

unset($_SESSION['s_f_acces']);
unset($_SESSION['temp_feats']);
unset($_SESSION['temp_specs']);
unset($_SESSION['temp_videos']);
unset($_SESSION['temp_tools']);
unset($_SESSION['temp_cats']);
unset($_SESSION['temp_documents']);
unset($_SESSION['ret_page']);
unset($_SESSION['ret_dir']);
unset($_SESSION['ret_path']);
unset($_SESSION['item_id']);
unset($_SESSION['temp_fields']);
unset($_SESSION['temp_item_cats']);
unset($_SESSION['temp_attr_opt_ids']);
unset($_SESSION['new_img_id']);
unset($_SESSION['img_id']);
unset($_SESSION['parent_item_id']);
unset($_SESSION['paging']);
unset($_SESSION['search_str']);
unset($_SESSION['temp_gallery']);
unset($_SESSION['temp_documents']);
unset($_SESSION['temp_videos']);
unset($_SESSION['img_type']);
unset($_SESSION['side_nav_showroom_cats']); // frontend class.nav
unset($_SESSION['temp_cats']);
unset($_SESSION['cat_id']);	
unset($_SESSION['temp_tools']);
unset($_SESSION['temp_s_f_acces']);
unset($_SESSION['temp_feats']);
unset($_SESSION['temp_cats']);
unset($_SESSION['temp_docs']);
unset($_SESSION['img_id']);
unset($_SESSION['img_type']);
unset($_SESSION['temp_gallery']);

require_once($real_root.'/manage/admin-includes/class.admin_bread_crumb.php');	
$bread_crumb = new AdminBreadCrumb;

$bc_parent_cat_id = 0;
$bc_seo_name = '';

$att_array = array();		
$sql = "SELECT attribute_id, attribute_name
		FROM  attribute
		WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";			
$att_res = $dbCustom->getResult($db,$sql);		
$i=0;
while($att_row = $att_res->fetch_object()){
	$att_array[$i]['attribute_id'] = $att_row->attribute_id;
	$att_array[$i]['attribute_name'] = $att_row->attribute_name;
	$i++;
}	
	
if($cat_id > 0){
	$sql = "SELECT DISTINCT item.name
				,item.description
				,item.item_id
				,item.img_id
				,item.parent_item_id
				,item.show_in_cart
				,item.show_in_showroom
				,item.short_description	
				,item.prod_number
				,item.sku
				,item.active
				,item.click_count
				,item.main_attr_id
			FROM  item, item_to_category 
			WHERE profile_account_id = '".$_SESSION['profile_account_id']."'			
			AND item.item_id = item_to_category.item_id 						
			AND item_to_category.cat_id = '".$cat_id."'
			AND parent_item_id = '0'";

}else{
	$sql = "SELECT DISTINCT item.name
				,item.description
				,item.item_id
				,item.img_id
				,item.parent_item_id
				,item.show_in_cart
				,item.show_in_showroom
				,item.short_description	
				,item.prod_number
				,item.sku
				,item.active
				,item.click_count
				,item.main_attr_id
			FROM  item 
			WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
			AND parent_item_id = '0'";
}
if($type == 'c'){
	$sql .= " AND item.show_in_showroom = '0'";
}
if($type == 's'){
	$sql .= " AND item.show_in_showroom > '0'";
}
if($search_str != ''){
	if(is_numeric($search_str)){
		$sql .= " AND (item.name like '%".$search_str."%' 
					OR item.profile_item_id = '".$search_str."'
					OR item.item_id = '".$search_str."'
					OR item.internal_prod_number = '".$search_str."')";				
	}else{
		$sql .= " AND item.name like '%".$search_str."%'";
	}
}
$nmx_res = $dbCustom->getResult($db,$sql);		
$total_rows = $nmx_res->num_rows;
if($type == 'f'){
	$rows_per_page = 300;
}else{
	$rows_per_page = 30;
}
$last = ceil($total_rows/$rows_per_page); 
if($last == 0) $last = 1;
			
if ($pagenum > $last){ 
	$pagenum = $last; 
}
if ($pagenum < 1){ 
	$pagenum = 1; 
}
$limit = ' limit ' .($pagenum - 1) * $rows_per_page.','.$rows_per_page;		
if($sortby != ''){
	if($sortby == 'name'){
		if($a_d == 'd'){
			$sql .= " ORDER BY item.name DESC".$limit;
		}else{
			$sql .= " ORDER BY item.name".$limit;		
		}
	}
	if($sortby == 'prod_number'){
		if($a_d == 'd'){
			$sql .= " ORDER BY item.prod_number DESC".$limit;
		}else{
			$sql .= " ORDER BY item.prod_number".$limit;		
		}
	}
	if($sortby == 'active'){
		if($a_d == 'd'){
			$sql .= " ORDER BY active DESC".$limit;
		}else{
			$sql .= " ORDER BY active".$limit;;		
		}
	}
	if($sortby == 'show_in_sr'){
		if($a_d == 'd'){
			$sql .= " ORDER BY show_in_sr DESC".$limit;
		}else{
			$sql .= " ORDER BY show_in_sr".$limit;;		
		}
	}	
	if($sortby == 'click_count'){
		if($a_d == 'd'){
			$sql .= " ORDER BY click_count DESC".$limit;
		}else{
			$sql .= " ORDER BY click_count".$limit;		
		}
	}	
}else{
	$sql .= " ORDER BY item.item_id".$limit;
}
$result = $dbCustom->getResult($db,$sql);		
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

<script src="https://unpkg.com/.//dist/./.min.js"></script>

<script type="text/javascript">

$(document).ready(function() {
	$(".fancybox").fancybox();
});

function regularSubmit() {
  document.form.submit(); 
}	

/*
function set_attr(item_id){
	var attr_id = document.getElementById("attr_"+item_id).value;
	var url_str = "<?php echo SITEROOT; ?>manage/ajax/ajax-set-item-main-attr.php";
	url_str += "?item_id="+item_id+"&attr_id="+attr_id+"&from=item";
	alert(url_str);
	./.get(url_str).then(function(response){
		console.log(response.data);	
		alert(response.data);
	}).catch(function(error){
		console.log(error);
	});

}
*/

</script>

<style>
.MS_sel{	
	width:100px!important;
}

</style>

</head>
<body>
<?php
	//require_once($real_root.'/manage/admin-includes/manage-header.php');
	//require_once($real_root.'/manage/admin-includes/manage-top-nav.php');
$db = $dbCustom->getDbConnect(CART_N_DATABASE);
?>
<div class="manage_page_container">
    <div class="manage_side_nav">
        <?php 
        require_once($real_root.'/manage/admin-includes/manage-side-nav.php');
        ?>
    </div>	
    <div class="manage_main">

	
<?php
echo "<div style='font-size:20px; color:red;'>".$msg."</div>";
echo "<br />"; 
if($_SESSION['from_t_cats']){
	echo "<a class='btn btn-primary btn-large' href='../categories/t-category.php'> BACK TO CATS </a>";	
}
$url_str= 'item.php';
$url_str.= "?cat_id=".$cat_id;
$url_str.= "&pagenum=".$pagenum;
$url_str.= "&sortby=".$sortby;
$url_str.= "&a_d=".$a_d;
$url_str.= "&truncate=".$truncate;
?>
<div class="page_actions">
	<div class="search_bar">
		<form id="search_form" name="search_form" action="<?php echo $url_str; ?>" method="post" enctype="multipart/form-data">
		<input type="text" name="search_str" class="searchbox" placeholder="Find a Product" />
		<button type="submit" class="btn btn-primary btn-large" value="search">SEARCH</button>
		</form>
	</div>
	<p style="clear:both;"/>
	<a class="btn btn-large btn-primary" href="item.php?type=f">All</a>   
	<a class="btn btn-large btn-primary" href="item.php">All (paging)</a>            			
	<a class="btn btn-large btn-primary" href="item.php?type=c">Only Cart</a>            
	<a class="btn btn-large btn-primary" href="item.php?type=s">Only Showroon</a>            
	<?php
	$url_str = 'add-item.php';
	$url_str.= "?cat_id=".$cat_id;
	$url_str.= "&firstload=1";
	$url_str.= "&pagenum=".$pagenum;
	$url_str.= "&sortby=".$sortby;
	$url_str.= "&a_d=".$a_d;
	$url_str.= "&truncate=".$truncate;
	$url_str.= "&search_str=".$search_str;
	$url_str.= "&from_t_cats=".$_SESSION['from_t_cats'];				
	?>
	<a class="btn btn-large btn-primary" href="<?php echo $url_str; ?>">Add a New Product </a>            
	<a onClick="regularSubmit();" href="#" class="btn btn-success btn-large">Save Changes </a>
</div>
<?php
$url_str= 'item.php';
$url_str.= "?cat_id=".$cat_id;
$url_str.= "&pagenum=".$pagenum;
$url_str.= "&sortby=".$sortby;
$url_str.= "&a_d=".$a_d;
$url_str.= "&truncate=".$truncate;
$url_str.= "&search_str=".$search_str;
$url_str.= "&from_t_cats=".$_SESSION['from_t_cats'];
?>
<form name="form" action="<?php echo $url_str; ?>" method="post" enctype="multipart/form-data">
<input type="hidden" name="set_active" value="1">
<table cellpadding="5" cellspacing="0">
<tr>	
	<td colspan="9">
	<div class="pagination">
    <?php
	if($total_rows > $rows_per_page){
	echo getPagination($total_rows, $rows_per_page, $pagenum, $truncate, $last, "item.php", $sortby, $a_d,$type,0, $search_str, $cat_id);
	}
	?>
	</div>
	</td>
</tr>
<tr style="height:60px; background-color:#ababab; color:white;">
	<td width="4%">id</td>
	<td width="8%">Image</td>
	<td width="8%">Main Attribute</td>
	<td align='center'>	
	<a href="item.php?sortby=name&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
	<br />
	Name
	<br />
	<a href="item.php?sortby=name&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>								
	</td>
	<td width="4%" align='center'>
	<a href="item.php?sortby=click_count&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
<br />
	Clicks
<br />
	<a href="item.php?sortby=click_count&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>	
	</td>
	<td width="10%" align='center'>
	<a href="item.php?sortby=active&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
<br />
	Active
<br />
	<a href="item.php?sortby=active&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>		
	</td>
	<td width="10%">
	<a href="item.php?sortby=show_in_sr&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
<br />
	Showroom
<br />
	<a href="item.php?sortby=show_in_sr&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>		
	</td>

	<td width="8%"></td>
	<td width="4%"></td>
	<td width="4%"></td>
</tr>
<?php
$_SESSION['items_from_this_page']=array();
$disabled = ($admin_access->product_catalog_level < 2)? "disabled" : '';
$block = '';
while($row = $result->fetch_object()) {
	$_SESSION['items_from_this_page'][]=$row->item_id;	
	if(has_children($dbCustom,$row->item_id)){
		$block .= "<tr style='background-color:#d0dbea;'>";
		$has_chn = 1;
	}else{
		$block .= "<tr>";
		$has_chn = 0;
	}
	$block .= "<td><span style='font-size:0.8em;'>".$row->item_id."<span></td>";
	$block .= "<td>";
	$file_name = get_file_name($dbCustom,$row->img_id);
	$block .= "<a target='_blank' class='fancybox' ";
	$block .= "href='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$file_name."'>";
	$block .= "<img width='100px;' src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/small/".$file_name."'></a></td>";
	$block .= "</td>";
	$block .= "<td>";
	$block .= "<select id='attr_".$row->item_id."' class='MS_sel' name='main_attribute' onChange='set_attr(".$row->item_id.");'>";
	$block .= "<option>Select</option>";
	foreach($att_array as $att_val){
		$sel = ($row->main_attr_id == $att_val['attribute_id'])?'selected':'';
		$block .= "<option value='".$att_val['attribute_id']."' ".$sel.">".$att_val['attribute_name']."</option>";
	}
	$block .= "</select>";
	$block .= "</td>";
	$block .= "<td>".stripslashes($row->name)."</td>";
$block .= "<td align='center'>";
$block .= "click_count";
$block .= "<input style='width:60px;' type='text' name='click_count[]' value='".$row->click_count."' >";
$block .= "</td>";	
	$checked = ($row->active)? "checked='checked'" : ''; 
	$block	.= "<td align='center' valign='middle' >
		<div class='checkboxtoggle on ".$disabled." '> 
		<span class='ontext'>ON</span>
		<a class='switch on' href='#'></a>
		<span class='offtext'>OFF</span>
		<input type='checkbox' class='checkboxinput' name='active[]' value='".$row->item_id."' ".$checked." /></div></td>";	
	
	$checked = ($row->show_in_showroom)? "checked='checked'" : ''; 
	$block	.= "<td align='center' valign='middle' >
		<div class='checkboxtoggle on ".$disabled." '> 
		<span class='ontext'>ON</span>
		<a class='switch on' href='#'></a>
		<span class='offtext'>OFF</span>
		<input type='checkbox' class='checkboxinput' name='show_in_sr[]' value='".$row->item_id."' ".$checked." /></div></td>";	

// Add Child
	$url_str= 'add-item.php';
	$url_str.= "?parent_item_id=".$row->item_id;
	$url_str.= "&type=".$type;
	
	$url_str.= "&cat_id=".$cat_id;
	$url_str.= "&pagenum=".$pagenum;
	$url_str.= "&sortby=".$sortby;
	$url_str.= "&a_d=".$a_d;
	$url_str.= "&truncate=".$truncate;
	$url_str.= "&search_str=".$search_str;
	$block .= "<td><a class='btn btn-small btn-primary' href='".$url_str."'>Add Child</a></td>";

	$url_str= 'edit-item.php';
	$url_str.= "?item_id=".$row->item_id;
	$url_str.= "&firstload=1";
	$url_str.= "&type=".$type;
	$url_str.= "&cat_id=".$cat_id;
	$url_str.= "&pagenum=".$pagenum;
	$url_str.= "&sortby=".$sortby;
	$url_str.= "&a_d=".$a_d;
	$url_str.= "&truncate=".$truncate;
	$url_str.= "&search_str=".$search_str;
	$block .= "<td>";
	$block .= "<a class='btn btn-primary btn-small'"; 
	$block .= " href='".$url_str."'>Edit</a>";
	$block .= "</td>";
	$block .= "<td><a class='btn btn-danger confirm'>
		<input type='hidden' id='".$row->item_id."' class='itemId' value='".$row->item_id."' />DEL</a>";
	$block .= "</td>";
	$block .= "</tr>";

	$sql = "SELECT name
			,item_id
			,img_id
			,prod_number
			,sku
			,active
			,click_count
			,main_attr_id
			,show_in_showroom
	FROM item
	WHERE parent_item_id = '".$row->item_id."'";						
	$child_res = $dbCustom->getResult($db,$sql);
	$child_block = '';
	while($child_row = $child_res->fetch_object()) {
		$_SESSION['items_from_this_page'][]=$child_row->item_id;

		$attr_name = get_attr_name($dbCustom,$child_row->main_attr_id);
		$child_block .= "<tr style='background-color:#e4e7eb;'>";
		$child_block .= "<td><span style='font-size:0.8em;'>".$row->item_id."<span></td>";
		$file_name = get_file_name($dbCustom,$child_row->img_id);
		$child_block .= "<td>";
		$child_block .= "<a target='_blank' class='fancybox' href='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$file_name."'>";
		$child_block .= "<img src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/thumb/".$file_name."'></a></td>";
		$child_block .= "</td>";
		$child_block .= "<td>".$attr_name."</td>";
		$child_block .= "<td>".stripSlashes($child_row->name)."</td>";
		
		$disabled='';
		
		$checked = ($child_row->active)? "checked='checked'" : ''; 
		$child_block .= "<td align='center'>".$child_row->click_count."</td>";
		$child_block .= "<td align='center' valign='middle' >";
		$child_block .= "<div class='checkboxtoggle on ".$disabled." '> 
			<span class='ontext'>ON</span>
			<a class='switch on' href='#'></a>
			<span class='offtext'>OFF</span>
			<input type='checkbox' class='checkboxinput' 
			name='active[]' value='".$child_row->item_id."' ".$checked." /></div></td>";	
		
		
		/*
		if(!$child_row->show_in_showroom){
			$sql = "UPDATE item 
					SET show_in_showroom = '1'
					WHERE parent_item_id = '".$row->item_id."'";
			$r = $dbCustom->getResult($db,$sql);
		}
		*/
		
		if($child_row->show_in_showroom){		
			$checked = "checked='checked'"; 
		}else{
			$checked = " ";
		}
		
		$child_block .= "<td align='center' valign='middle' >
		<div class='checkboxtoggle on ".$disabled." '> 
		<span class='ontext'>ON</span>
		<a class='switch on' href='#'></a>
		<span class='offtext'>OFF</span>
		<input type='checkbox' class='checkboxinput' name='show_in_sr[]' value='".$child_row->item_id."' ".$checked." /></div></td>";	
		
		$child_block .= "<td></td>";
		
		$url_str= 'edit-item.php';				
		$url_str.= "?item_id=".$child_row->item_id;
		$url_str.= "&cat_id=".$cat_id;
		$url_str.= "&type=".$type;

		$url_str.= "&pagenum=".$pagenum;
		$url_str.= "&sortby=".$sortby;
		$url_str.= "&a_d=".$a_d;
		$url_str.= "&truncate=".$truncate;
		$url_str.= "&search_str=".$search_str;
		$child_block .= "<td>";
		$child_block .= "<a class='btn btn-primary btn-small' href='".$url_str."'>Edit</a>";
		$child_block .= "</td>";
		$child_block .= "<td><a class='btn btn-danger confirm '>
		<input type='hidden' id='".$child_row->item_id."' class='itemId' value='".$child_row->item_id."' />DEL</a>";
		$child_block .= "</td>";
		$child_block .= "</tr>";	
	}
	if($child_res->num_rows > 0){
		$block .= "<tr  style='background-color:#e4e7eb;'>";
		$block .= "<td colspan='2'></td>";
		$block .= "<td colspan='8'>";
		$block .= "Child Products of: <b>".stripslashes($row->name)."</b>";
		$block .= "</td>";
		$block .= "</tr>";
		$block .= $child_block;
	}
}
echo  $block;
?>
</table>
<?php
if($total_rows > $rows_per_page){
echo getPagination($total_rows, $rows_per_page, $pagenum, $truncate, $last, "item.php", $sortby, $a_d,$type,0, $search_str, $cat_id);
}
?>

    <input type="hidden" name="items_from_this_page" value="<?php echo $_SESSION['items_from_this_page']; ?>">                 
	</form>
  </div>
  <p class="clear"></p>
</div>

<div class="disabledMsg">
	<p>Sorry, this item can't be deleted or inactive.</p>
</div>

<?php

	$url_str= SITEROOT.'manage/catalog/products/item.php';
	$url_str.= "?cat_id=".$cat_id;
	$url_str.= "&pagenum=".$pagenum;
	$url_str.= "&type=".$type;
	$url_str.= "&sortby=".$sortby;
	$url_str.= "&a_d=".$a_d;
	$url_str.= "&truncate=".$truncate;
	$url_str.= "&search_str=".$search_str;

?>

<div id="content-delete" class="confirm-content">
	<h3>Are you sure you want to delete this Product?</h3>
	<form name="del_item" action="<?php echo $url_str; ?>" method="post" target="_top">
		<input id="del_id" class="itemId" type="hidden" name="del_id" value='' />
		<a class="btn btn-large dismiss">No, Cancel</a>
		<button class="btn btn-danger btn-large" name="del_item" type="submit" >Yes, Delete</button>
	</form>
</div>



<?php
require_once($real_root."/manage/admin-includes/manage-footer.php");
?>
</body>
</html>
