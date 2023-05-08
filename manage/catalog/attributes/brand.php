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

$progress = new SetupProgress;
$module = new Module;
$page_title = "Product Brands";
$page_group = "vend-man";
$strip = (isset($_GET['strip'])) ? $_GET['strip'] : 0;
$vend_man_id =  (isset($_GET['vend_man_id'])) ? $_GET['vend_man_id'] : 0;
$msg = '';

$db = $dbCustom->getDbConnect(CART_N_DATABASE);

if(isset($_POST['add_brand'])){

	$name = addslashes($_POST['name']);
	$short_name = addslashes($_POST['short_name']);
	$web_site = addslashes($_POST['web_site']); 
	$vend_man_ids = isset($_POST['vend_man_ids']) ? $_POST['vend_man_ids'] : array();
	$vend_man_id = isset($_POST['vend_man_id']) ? $_POST['vend_man_id'] : 0;
	$ret_page = (isset($_POST['ret_page']))? $_POST['ret_page'] : '';
	
	$sql = sprintf("SELECT brand_id FROM brand WHERE name = '%s'", $name);	
	$result = $dbCustom->getResult($db,$sql);	
	if(!$result->num_rows){
		if($stmt = $db->prepare("INSERT INTO brand 
					   (name
					   ,short_name
					   	,web_site
						,profile_account_id) 
					   VALUES (?,?,?,?)")){
			
			$stmt->bind_param('sssi', $name, $short_name, $web_site, $_SESSION['profile_account_id']);
			$stmt->execute();
			$stmt->close();
			$brand_id = $db->insert_id;
			if(count($vend_man_ids) > 0 && $brand_id > 0){					
				foreach($vend_man_ids as $value){
					$sql = "INSERT INTO vend_man_brand 
							(vend_man_id, brand_id) 
							VALUES( '".$value."', '".$brand_id."')";
					$res = $dbCustom->getResult($db,$sql);				
				}
			}
		}
		$msg = "Your change is now live.";
		$progress->completeStep("brand" ,$_SESSION['profile_account_id']);
	}else{
		$msg = "The brand name already exists";
	}

	if($ret_page != '' && $ret_page != 'brand'){
		header('Location: '.$ret_page.".php?msg=".$msg."&vend_man_id=".$vend_man_id);	
	}	
}


if(isset($_POST["edit_brand"])){
	$brand_id = $_POST["brand_id"];
	$name = addslashes($_POST['name']);
	$short_name = addslashes($_POST['short_name']);
	$web_site =addslashes($_POST["web_site"]); 
	$vend_man_ids = isset($_POST["vend_man_ids"]) ? $_POST["vend_man_ids"] : 0;
	$sql = sprintf("UPDATE brand SET 
					name = '%s'
					,short_name = '%s'
					,web_site = '%s'
				   WHERE brand_id = '%u'", 
					$name
					,$short_name
					,$web_site
					,$brand_id);
	$result = $dbCustom->getResult($db,$sql);

	$sql = "DELETE FROM vend_man_brand 
			WHERE brand_id = '".$brand_id."'";
	$result = $dbCustom->getResult($db,$sql);	
	if(is_array($vend_man_ids)){
		foreach($vend_man_ids as $value){
			$sql = "INSERT INTO vend_man_brand 
					(vend_man_id, brand_id) 
					VALUES( '".$value."', '".$brand_id."')";
			$result = $dbCustom->getResult($db,$sql);			
		}
	}
	$msg = "Your change is now live.";
	$progress->completeStep("brand" ,$_SESSION['profile_account_id']);
}

if(isset($_POST["del_brand"])){

	$brand_id = $_POST["del_brand_id"];
	$sql = "UPDATE item
			SET brand_id = '0' 
			WHERE brand_id = '".$brand_id."'";
	$result = $dbCustom->getResult($db,$sql);
	$sql = "DELETE FROM vend_man_brand WHERE brand_id = '".$brand_id."'";
	$result = $dbCustom->getResult($db,$sql);
	$sql = "DELETE FROM brand WHERE brand_id = '".$brand_id."'";
	$result = $dbCustom->getResult($db,$sql);
	$msg = "Your change is now live.";
}

if(isset($_POST['set_active'])){
	$actives = (isset($_POST["active"]))? $_POST["active"] : array();
	$sql = "UPDATE brand SET active = '0' WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
	$result = $dbCustom->getResult($db,$sql);
	foreach($actives as $value){
		$sql = "UPDATE brand SET active = '1' WHERE brand_id = '".$value."'";
		$res = $dbCustom->getResult($db,$sql);
	}
}

unset($_SESSION['paging']);
unset($_SESSION['nav_bar_brands']);
unset($_SESSION['footer_nav_brands']);

require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>
<script type="text/javascript" language="javascript">
$(document).ready(function(){
	$("tbody tr").hover(function(){
		$(this).css("background-color", "#F9FBFC");
	}, function(){
		$(this).css("background-color", "transparent");
	});	
});
</script>
</head>
<body>
<?php
require_once($real_root.'/manage/admin-includes/manage-header.php');
require_once($real_root.'/manage/admin-includes/manage-top-nav.php');
?>
<div class="manage_page_container">
	<div class="manage_side_nav">
		<?php
        require_once($real_root.'/manage/admin-includes/manage-side-nav.php');
		?>
	</div>
	<div class="manage_main">
	Brand
	<?php 
	require_once($real_root."/manage/admin-includes/attribute-section-tabs.php");
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$sql = "SELECT * FROM brand 
	WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";			
	$sql .= " ORDER BY name";	
	$result = $dbCustom->getResult($db,$sql);	

	$url_str= SITEROOT.'manage/catalog/attributes/brand.php';
	?>
	<form name="form" action="<?php echo $url_str; ?>" method="post" enctype="multipart/form-data">
		<input type="hidden" name="set_active" value="1">

		<?php 
			$url_str= SITEROOT.'manage/catalog/attributes/add-brand.php';
		?>       
		<div class="page_actions">
			<a class="btn btn-large btn-primary" href="<?php echo $url_str; ?>">Add a New Brand </a>
			<button href="#" class="btn btn-success btn-large">Save Changes</button>
		</div>
		<table cellpadding="5" cellspacing="5" border="1">
		<tr>
		<rd>Brand Name</th>
		<td width="12%">Active</td>                
		<td width="12%">Edit</td>
		<td width="5%">Delete</td>
		</tr>
		<?php
		$disabled = '';
		$block = '';
		while($row = $result->fetch_object()) {
				$block .= "<tr>"; 
				$block .= "<td>".stripslashes($row->name)."</td>";
				
				
				$status = ($row->active)? "checked='checked'" : '';
				$block .= "<td><div class='checkboxtoggle on'> 
				<span class='ontext'>ON</span><a class='switch on' href='#'></a>
				<span class='offtext'>OFF</span><input type='checkbox' class='checkboxinput' name='active[]' value='".$row->brand_id."' $status />
				</div></td>";
				
				$url_str = "edit-brand.php";
				$url_str .= "?brand_id=".$row->brand_id;
				$block .= "<td><a class='btn btn-primary' href='".$url_str."'>Edit</a></td>";

				$block .= "<td>
				<a class='btn btn-danger confirm '>
				<input type='hidden' id='".$row->brand_id."' class='itemId' value='".$row->brand_id."' />DEL</a>";
				$block .= "</td>";	
				$block .= "</tr>";
		}
		echo $block;
		?>

		</table>
	</form>
	
</div>
</div>

  
<?php
$url_str = "brand.php";
?>

<div id="content-delete" class="confirm-content">
	<h3>Are you sure you want to delete this brand?</h3>
	<form name="del_brand" action="<?php echo $url_str; ?>" method="post">
		<input id="del_brand_id" class="itemId" type="hidden" name="del_brand_id" value='' />
		<a class="btn btn-large dismiss">No, Cancel</a>
		<button class="btn btn-danger btn-large" name="del_brand" type="submit" >Yes, Delete</button>
	</form>
</div>
</body>
</html>

