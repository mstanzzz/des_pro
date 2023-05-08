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
$page_title = "Add specs_feat";
$page_group = "specs_feat";

$strip = (isset($_GET['strip'])) ? $_GET['strip'] : 0;
$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';
if(isset($_GET['firstload'])){
//if(0){	
	unset($_SESSION['temp_fields']);
}

if(!isset($_SESSION['temp_fields']['text'])) $_SESSION['temp_fields']['text'] = 0;	
if(!isset($_SESSION['temp_fields']['tool_tip'])) $_SESSION['temp_fields']['tool_tip'] = '';	

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
//require_once($real_root.'/manage/admin-includes/manage-header.php');
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
	$url_str = "sizes.php";
?>
<form name="form1" action="<?php echo $url_str; ?>" method="post" onSubmit="return validate(this)"  enctype="multipart/form-data" target="_top">
    <input type="hidden" name="add_size" value="1">  
<a class="btn" style="float:left; margin:30px;" 
href="<?php echo SITEROOT;?>manage/catalog/specs-feat/specs-feat.php" >Cancel &amp; Go Back</a>
<input class="btn btn-primary" 

<input class="btn btn-primary" 
style="float:left; margin:30px; padding:10px;" type="submit" name="submit" value="Add">			

<table cellpadding="10" width="100%" border="1">

<tr>
<td>Tool Tip</td>
<td><input id="tool_tip" style="width:96%;" name="tool_tip" type="text" 
value="<?php echo stripslashes($_SESSION['temp_fields']['tool_tip']); ?>" />
</td>
</tr>

<tr>
<td>Size Text</td>
<td>
<textarea id="text" name="text" style="width:96%; height:400px;" /><?php echo stripslashes($_SESSION['temp_fields']['text']); ?></textarea>
</td>
</tr>

<table>


</body>
</html>

