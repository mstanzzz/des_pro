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
$progress = new SetupProgress;
$module = new Module;


$page_title = "Add Document";
$page_group = "pdf";

$_SESSION['document_id'] = (isset($_GET['document_id']))? $_GET['document_id'] : 0;
$strip = (isset($_GET['strip'])) ? $_GET['strip'] : 0;


$db = $dbCustom->getDbConnect(CART_N_DATABASE);

$sql = "SELECT name, tool_tip, file_name
FROM document
WHERE document_id = '".$_SESSION['document_id']."'"; 
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){

	$object = $result->fetch_object();
	$name = $object->name;
	$tool_tip = $object->tool_tip;
	$file_name = $object->file_name;
}


if(!isset($_SESSION['temp_fields']['name'])) $_SESSION['temp_fields']['name'] = $name;	
if(!isset($_SESSION['temp_fields']['tool_tip'])) $_SESSION['temp_fields']['tool_tip'] = $tool_tip;	

$msg = '';
require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>
<script>

function does_exist(ele){
    if (ele !== undefined) {
        return 1;
    }else{
		return 0;
	}
}
function get_query_str(){
	
	var query_str = '';
	var attr_str = '';
	var cat_str = '';
	
	if(does_exist(document.form1.name)){
		query_str += "&name="+document.form1.name.value+'YYY';	
	}
	if(does_exist(document.form1.tool_tip)){
		query_str += "&tool_tip="+document.form1.tool_tip.value;	
	}

	query_str += "&ret_page=add-document";
	query_str += "&ret_path=catalog/categories";
	query_str += "&ret_dir=categories";
	query_str += "&file_type=doc";

	return query_str;
}

function set_session(){

	var q_str = "?action=1"+get_query_str();	
	
	$.ajaxSetup({ cache: false}); 
	$.ajax({
	  url: 'ajax_set_cat_session.php'+q_str,
	  success: function(data) {
		location.href = "../../upload-file.php"+q_str;
	  }
	});	
	
}

</script>
</head>
<body>
<?php
if(!$strip){
	require_once($real_root.'/manage/admin-includes/manage-header.php');
	require_once($real_root.'/manage/admin-includes/manage-top-nav.php');
}
?>
<div class="manage_page_container">
	<div class="manage_side_nav">
		<?php 
if(!$strip){
	require_once($real_root.'/manage/admin-includes/manage-side-nav.php');
}
        ?>
	</div>
	<div class="manage_main">
		<h1>Edit Document Information</h1>
		<div class="alert alert-success">
			<h4><?php echo $msg; ?></h4>
		</div>
<?php
if($strip){
	$target="_self";
}else{
	$target="_top";
}
$url_str = "document-list.php?strip=".$strip;
?>
<form name="form1" action="<?php echo $url_str; ?>" method="post" target="<?php echo $target; ?>">
<input type="hidden" name="document_id" value="<?php echo $_SESSION['document_id']; ?>">
<input type="hidden" name="update_document" value="1">

<a class="btn" style="float:left; margin:30px;" href="document-list.php" >Cancel &amp; Go Back</a>
<input class="btn btn-primary" style="float:left; margin:30px;" 
type="submit" name="submit" value="Save Changes">			

<table cellpadding="10" width="100%" border="1">

<tr>
<td>Name</td>
<td><input type="text" name="name" value="<?php echo $_SESSION['temp_fields']['name']; ?>"  style="width:90%"></td>
</tr>
<tr>
<td>Tool Tip</td>
<td><input type="text" name="tool_tip" value="<?php echo $_SESSION['temp_fields']['tool_tip']; ?>"  style="width:90%"></td>
</tr>


</table>

</form>
</div>
</div>

<?php
require_once($real_root."/manage/admin-includes/manage-footer.php");
?>
</body>
</html>



