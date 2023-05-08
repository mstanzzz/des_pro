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
$page_title = "Specs";
$page_group = "specs";
$page = "specs";
$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';
$ts = time();

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = "SELECT specifications_id FROM specifications WHERE profile_account_id = '".$_SESSION['profile_account_id']."'"; 
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows == 0){
	$sql = "INSERT INTO specifications 
		(profile_account_id) 
		VALUES ('".$_SESSION['profile_account_id']."')"; 
	$result = $dbCustom->getResult($db,$sql);	
	$_SESSION['specifications_id'] = $db->insert_id;
}else{
	$_SESSION['specifications_id'] = (isset($_REQUEST['specifications_id'])) ? $_REQUEST['specifications_id'] : 0;
}
if(!is_numeric($_SESSION['specifications_id'])) $_SESSION['specifications_id'] = 0;

function get_svg_icon_spec($dbCustom, $spec_cat_id){

	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$sql = "SELECT svg_code
			FROM svg, spec_category
			WHERE svg.svg_id = spec_category.svg_id 
			AND spec_category.spec_cat_id = '".$spec_cat_id."'";
	$re = $dbCustom->getResult($db,$sql);
	if($re->num_rows > 0){
		$object = $re->fetch_object();
		return $object->svg_code;		
		
	}
	return  '';
}

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

if(isset($_POST['add_specifications'])){

	$top_1 = isset($_POST['top_1']) ? trim(addslashes($_POST['top_1'])) : '';
	$top_2 = isset($_POST['top_2']) ? trim(addslashes($_POST['top_2'])) : '';
	$top_3 = isset($_POST['top_3']) ? trim(addslashes($_POST['top_3'])) : '';
	$p_1_head = isset($_POST['p_1_head']) ? trim(addslashes($_POST['p_1_head'])) : '';
	$p_1_text = isset($_POST['p_1_text']) ? trim(addslashes($_POST['p_1_text'])) : '';
	$sql = sprintf("INSERT INTO specifications 
					(top_1
					,top_2
					,top_3
					,p_1_head
					,p_1_text
					,profile_account_id) 
					VALUES ('%s','%s','%s','%s','%s','%u')", 
	$top_1, $top_2, $top_3, $p_1_head, $p_1_text ,$_SESSION['profile_account_id']);
	$result = $dbCustom->getResult($db,$sql);	

	$msg = "Your change is live.";
		
}



if(isset($_POST['update_specifications'])){
	
	$specifications_id = isset($_POST['specifications_id']) ? $_POST['specifications_id']: 0;
	
	$top_1 = isset($_POST['top_1']) ? trim(addslashes($_POST['top_1'])) : '';
	$top_2 = isset($_POST['top_2']) ? trim(addslashes($_POST['top_2'])) : '';
	$top_3 = isset($_POST['top_3']) ? trim(addslashes($_POST['top_3'])) : '';
	$p_1_head = isset($_POST['p_1_head']) ? trim(addslashes($_POST['p_1_head'])) : '';
	$p_1_text = isset($_POST['p_1_text']) ? trim(addslashes($_POST['p_1_text'])) : '';
	
	if(!is_numeric($specifications_id)) $specifications_id = 0;

	$sql = "UPDATE specifications 
			SET top_1 = '".$top_1."'
				,top_2 = '".$top_2."'
				,top_3 = '".$top_3."'
				,p_1_head = '".$p_1_head."'
				,p_1_text = '".$p_1_text."'
			WHERE specifications_id = '".$specifications_id."'";
	$result = $dbCustom->getResult($db,$sql);
	$msg = "Your change is live.";
}

$sql = "SELECT *
FROM specifications 
WHERE specifications_id = '".$_SESSION['specifications_id']."'";
$result = $dbCustom->getResult($db,$sql);	
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$top_1 = $object->top_1;
	$top_2 = $object->top_2;
	$top_3 = $object->top_3;
	$p_1_head = $object->p_1_head;
	$p_1_text = $object->p_1_text;
}else{
	$top_1 = '';
	$top_2 = '';
	$top_3 = '';
	$p_1_head = '';
	$p_1_text = '';
}

if(!isset($_SESSION['temp_fields']['top_1'])) $_SESSION['temp_fields']['top_1'] = $top_1;
if(!isset($_SESSION['temp_fields']['top_2'])) $_SESSION['temp_fields']['top_2'] = $top_2;
if(!isset($_SESSION['temp_fields']['top_3'])) $_SESSION['temp_fields']['top_3'] = $top_3;
if(!isset($_SESSION['temp_fields']['p_1_head'])) $_SESSION['temp_fields']['p_1_head'] = $p_1_head;
if(!isset($_SESSION['temp_fields']['p_1_text'])) $_SESSION['temp_fields']['p_1_text'] = $p_1_text;

require_once($real_root."/manage/cms/get_seo_variables.php");
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

<form name="form" action="specifications.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="specifications_id" value="<?php echo $_SESSION['specifications_id']; ?>">

<a style="float:left;" class="btn btn-info" href="<?php echo SITEROOT;?>manage/cms/pages/page.php" >Cancel &amp; Go Back</a>
<input style="float:left; margin-left:20px;" class="btn btn-primary" type="submit" name="submit" value="Save Changes">			
<p class="clear"></p>

<table cellpadding="10" width="100%" border="1">
<tr>
<td width="5%">top_1</td>
<td><input type="text" name="top_1"  style="width:100%" value="<?php echo stripslashes($_SESSION['temp_fields']['top_1']); ?>"></td>
</tr>

<tr>
<td>top_2</td>
<td><input type="text" name="top_2"  style="width:100%" value="<?php echo stripslashes($_SESSION['temp_fields']['top_2']); ?>"></td>
</tr>

<tr>
<td>top_3</td>
<td><input type="text" name="top_3"  style="width:100%" value="<?php echo stripslashes($_SESSION['temp_fields']['top_3']); ?>"></td>
</tr>

<tr>
<td>p_1_head</td>
<td><input type="text" name="p_1_head"  style="width:100%" value="<?php echo stripslashes($_SESSION['temp_fields']['p_1_head']); ?>"></td>
</tr>

<tr>
<td>p_1_text</td>
<td><textarea rows="28" id="p_1_text" name="p_1_text"><?php echo stripslashes($_SESSION['temp_fields']['p_1_text']); ?></textarea></td>
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



