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

$page_title = "Installation Tools";
$page_group = "installation";
$page = "installation";

require_once($real_root.'/manage/admin-includes/set-page.php');	

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';

if(isset($_POST["add_installation_tool"])){
	
	$name = trim(addslashes($_POST['name']));
	$description = trim(addslashes($_POST['description']));
	$img_alt_text = trim(addslashes($_POST['img_alt_text']));
	$img_id = $_POST['img_id'];
	$sql = sprintf("INSERT INTO installation_tool
					(name, description, img_id, img_alt_text, installation_id)
					VALUES
					('%s','%s','%u','%s','%u')", 				
					$name, $description, $img_id, $img_alt_text, $_SESSION['installation_id']);
	$result = $dbCustom->getResult($db,$sql);
}

if(isset($_POST["update_installation_tool"])){
	$name = trim(addslashes($_POST['name']));
	$description = trim(addslashes($_POST['description']));
	$img_alt_text = trim(addslashes($_POST['img_alt_text']));
	$svg_id = isset($_POST['svg_id'])?$_POST['svg_id']:0;
	$installation_tool_id = $_POST["installation_tool_id"];
	$sql = sprintf("UPDATE installation_tool
					SET name = '%s'
					,description = '%s'
					,svg_id = '%u'
					,img_alt_text = '%s'
					WHERE installation_tool_id = '%u'", 				
					$name, $description, $svg_id, $img_alt_text, $installation_tool_id);
	$result = $dbCustom->getResult($db,$sql);
}

if(isset($_POST["del_installation_tool"])){
	$installation_tool_id = $_POST["del_installation_tool_id"];
	$sql = sprintf("DELETE FROM installation_tool WHERE installation_tool_id = '%u'", $installation_tool_id);
	$result = $dbCustom->getResult($db,$sql);
}

unset($_SESSION["installation_tool_id"]);
unset($_SESSION["temp_fields"]);
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
		<?php
        require_once($real_root.'/manage/admin-includes/manage-content-top.php');
        require_once($real_root."/manage/admin-includes/installation-section-tabs.php");
        ?>
	<div class="page_actions">
<a href="<?php echo SITEROOT;?>manage/cms/pages/add-installation-tool.php" class="btn btn-info"> Add Installation Tool </a>
    	<a href="<?php echo SITEROOT;?>manage/cms/pages/page.php" class="btn"> Cancel &amp; Go Back</a>
    </div>
	<div class="data_table">

    <table cellpadding="10" cellspacing="0">
    <thead>
    <th width="22%">Name</th>
    <th width="13%">Edit</th>
    <th width="7%">Delete</th>
    </thead>
    <tbody>
<?php 
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = "SELECT * 
FROM installation_tool";
$result = $dbCustom->getResult($db,$sql);

$db = $dbCustom->getDbConnect(CART_N_DATABASE);
$block = '';
while($row = $result->fetch_object()){
	$block .= "<tr>"; 
	
	$sql = "SELECT svg_id, name, svg_code 
			FROM svg 
			WHERE svg_id = '".$row->svg_id."'";
	$svg_res = $dbCustom->getResult($db,$sql);				
	if($svg_res->num_rows > 0){
		$obj = $svg_res->fetch_object();
		$svg_id = $obj->svg_id;
		$svg_name = $obj->name;
		$svg_code = $obj->svg_code;
	}else{
		$svg_id = 0;
		$svg_name = "none";
		$svg_code = 'none';			
	}
		
	$block .= "<td>".$svg_code."</td>";
	$block .= "<td>".stripslashes($row->name)."</td>";
	$block .= "<td><a href='edit-installation-tool.php?firstload=1&installation_tool_id=".$row->installation_tool_id."' 
		class='btn btn-primary'> Edit</a>";
	$block .= "</td>";
	$block .= "<td><a class='btn btn-danger confirm'>DEL
	<input type='hidden' id='".$row->installation_tool_id."' class='itemId' value='".$row->installation_tool_id."' /></a>
	</td>";

}
echo $block;
?>
</tbody>
</table>
</div>
</div>
<p class="clear"></p>
</div>
<div id="content-delete" class="confirm-content">
	<h3>Are you sure you want to delete this step?</h3>
	<form name="del_installation_tool_form" action="installation-tools.php" method="post" target="_top">
		<input id="del_installation_tool_id" class="itemId" type="hidden" name="del_installation_tool_id" value='' />
		<a class="btn btn-large dismiss">No, Cancel</a>
		<button class="btn btn-danger btn-large" name="del_installation_tool" type="submit" >Yes, Delete</button>
	</form>
</div>
</body>
</html>



