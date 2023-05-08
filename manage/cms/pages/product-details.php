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
$pages = new Pages;

$page_title = "product details page";
$page_group = "product-details-page";
$page = "home";

$action = (isset($_GET['action'])) ? $_GET['action'] : '';
$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

$sql = "SELECT product_details_id FROM product_details WHERE profile_account_id = '".$_SESSION['profile_account_id']."'"; 
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows == 0){
	$sql = "INSERT INTO product_details 
		(profile_account_id) 
		VALUES ('".$_SESSION['profile_account_id']."')"; 
	$result = $dbCustom->getResult($db,$sql);
	
	$_SESSION['product_details_id'] = $db->insert_id;
	
}else{
	$_SESSION['product_details_id'] = (isset($_REQUEST['product_details_id'])) ? $_REQUEST['product_details_id'] : 0;
}
if(!is_numeric($_SESSION['product_details_id'])) $_SESSION['product_details_id'] = 0;
		
if(isset($_POST['update_product_details'])){
	$p_1_head = isset($_POST['p_1_head'])? addslashes(trim($_POST['p_1_head'])) : '';
	$p_1_text = isset($_POST['p_1_text'])? addslashes(trim($_POST['p_1_text'])) : '';

	$_SESSION['temp_fields']['p_1_head'] = $p_1_head;	
	$_SESSION['temp_fields']['p_1_text'] = $p_1_text;	

	$stmt = $db->prepare("UPDATE product_details
						SET
						p_1_head = ?
						,p_1_text = ? 												
						WHERE product_details_id = ?");
						
		echo 'Error-1 UPDATE   '.$db->error;
		
	if(!$stmt->bind_param("ssi"
						,$p_1_head
						,$p_1_text									
						,$_SESSION['product_details_id'])){
							
		echo 'Error-2 UPDATE   '.$db->error;
		
	}else{
		$stmt->execute();
		$stmt->close();				
		$msg = "Updated";
	}
	
	$seo_name	= 'product-details';
	$page	= 'product-details';
	$seo_name = (isset($_POST['seo_name']))? trim($_POST['seo_name']) : '';
	$seo_name = str_replace ('\'', '' , $seo_name);
	$seo_name = str_replace ('\"', '' , $seo_name);
	$seo_name = str_replace (' ', '-' , $seo_name);
	$title = (isset($_POST['title']))? trim(addslashes($_POST['title'])) : '';
	$keywords = (isset($_POST['keywords']))? trim(addslashes($_POST['keywords'])) : '';
	$description = (isset($_POST['description']))? trim(addslashes($_POST['description'])) : '';
	$page_heading = (isset($_POST['page_heading']))? trim(addslashes($_POST['page_heading'])) : '';
	
	require_once($real_root."/manage/cms/insert_page_seo.php");

}	

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
		
$sql = "SELECT * 
		FROM product_details 
		WHERE product_details_id = '".$_SESSION['product_details_id']."'";
$result = $dbCustom->getResult($db,$sql);	

if($result->num_rows > 0){
	$object = $result->fetch_object();
	$p_1_head = $object->p_1_head;
	$p_1_text = $object->p_1_text;
}else{
	$p_1_head = 'WHY CLOSETS TO GO';
	$p_1_text = 'We design every organizer based on your exact measurements and specifications; nothing is pre-made. We use only the finest wood panel products from Roseburg Forest Products Panolam, Flakeboard...';

}
require_once($real_root."/manage/cms/get_seo_variables.php");
if(!isset($_SESSION['temp_fields']['p_1_head'])) $_SESSION['temp_fields']['p_1_head'] = $p_1_head;	
if(!isset($_SESSION['temp_fields']['p_1_text'])) $_SESSION['temp_fields']['p_1_text'] = $p_1_text;	
	
require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>
<script src="https://cdn.tiny.cloud/1/iyk23xxriyqcd2gt44r230a2yjinya99cx1kd3tk9huatz50/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>

tinymce.init({
	selector: 'textarea',
	plugins: 'advlist link image lists code',
	forced_root_block : false

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
		<h1>Product Details Page</h1>

		<form name="form" action="<?php echo SITEROOT.'manage/cms/pages/product-details.php' ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="update_product_details" value="1">     
            <input type="hidden" name="product_details_id" value="<?php echo $_SESSION['product_details_id']; ?>">     

<a class="btn" style="float:left; margin:30px;" href="<?php echo SITEROOT;?>manage/cms/pages/page.php" >Cancel &amp; Go Back</a>
<input class="btn btn-primary" style="float:left; margin:30px;" type="submit" name="submit" value="Save Changes">			

<table cellpadding="10" width="100%" border="1">
<tr>
<td>p_1_head</td>
<td><input type="text" name="p_1_head"  style="width:96%" value="<?php echo stripslashes($_SESSION['temp_fields']['p_1_head']); ?>"></td>
</tr>

<tr>
<td>p_1_text</td>
<td><textarea cols="90" rows="28" id="p_1_text" name="p_1_text"><?php echo stripslashes($_SESSION['temp_fields']['p_1_text']); ?></textarea></td>
</tr>
</table>

<?php				
require_once("edit_page_seo.php"); 
?>								

</form>
		
	</div>
	<p class="clear"></p>
	<?php
	require_once($real_root.'/manage/admin-includes/manage-footer.php');
	?>
</div>
</body>
</html>

