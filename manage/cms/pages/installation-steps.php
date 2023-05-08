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
$page_title = "Installation Steps";
$page_group = "installation";
$page = "installation";
$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';
$ts = time();
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
if(isset($_POST["edit_installation_appearance"])){
	$background_color = $_POST["background_color"];
	$menu_color = $_POST["menu_color"];
	$header_background_color = $_POST["header_background_color"];
	$header_text_color = $_POST["header_text_color"];
	$description_text_color = $_POST["description_text_color"];	   
	$sql = "UPDATE installation_appearance 
			SET background_color = '".$background_color."'  
			,menu_color = '".$menu_color."'
			,header_background_color = '".$header_background_color."'
			,header_text_color = '".$header_text_color."'
			,description_text_color = '".$description_text_color."'
			WHERE installation_id = '".$_SESSION['installation_id']."'";
	$result = $dbCustom->getResult($db,$sql);
}
if(isset($_POST["add_installation_step"])){
	$name = trim(addslashes($_POST['name']));
	$description = trim(addslashes($_POST['description']));
	$img_id = $_POST['img_id'];
	$video_url = isset($_POST['video_url'])?trim(addslashes($_POST['video_url'])):'';

	$next_order = 1;
	$sql = "SELECT max(display_order) max_order
			FROM installation_step
			WHERE installation_id = '".$_SESSION['installation_id']."'";
	$result = $dbCustom->getResult($db,$sql);
	if($result->num_rows > 0){
		$object = $result->fetch_object();
		$next_order = $object->max_order + 1; 
	}
	$sql = sprintf("INSERT INTO installation_step
					(name, display_order, description, img_id, video_url, installation_id)
					VALUES
					('%s','%u','%s','%u','%s','%u')", 				
					$name, $next_order, $description, $img_id, $video_url, $_SESSION['installation_id']);
	$result = $dbCustom->getResult($db,$sql);
	$tools = isset($_POST['tools'])?$_POST['tools']:array();
	$installation_step_id = $db->insert_id;
	if(isset($_SESSION['temp_gallery'])){
		foreach($_SESSION['temp_gallery'] as $val){
			$sql = "INSERT INTO installation_step_gallery
					(installation_step_id
					,img_id)
					VALUES
					('".$installation_step_id."','".$val."')"; 
			$res = $dbCustom->getResult($db,$sql);
		}
	}		
	if(count($tools) > 0){
		foreach($tools as $val){
			$sql = "INSERT INTO installation_step_to_tool
					(installation_step_id
					,installation_tool_id)
					VALUES
					('".$installation_step_id."','".$val."')"; 
			$res = $dbCustom->getResult($db,$sql);
		}			
	}
	
}
if(isset($_POST["update_installation_step"])){	
	$name = isset($_POST['name'])?trim(addslashes($_POST['name'])):'';
	$display_order = isset($_POST['display_order'])?$_POST['display_order']:0;
	$description = isset($_POST['description'])?trim(addslashes($_POST['description'])):'';
	$installation_step_id = isset($_POST['installation_step_id'])?$_POST['installation_step_id']:0;
	$video_url = isset($_POST['video_url'])?trim(addslashes($_POST['video_url'])):'';

	$sql = sprintf("UPDATE installation_step
					SET name = '%s'
					,display_order = '%u'
					,description = '%s'
					,video_url = '%s'
					WHERE installation_step_id = '%u'", 				
					$name, $display_order, $description, $img_id, $video_url, $installation_step_id);
	$result = $dbCustom->getResult($db,$sql);
	
	$tools = isset($_POST['tools'])?$_POST['tools']:array();
	
	if(isset($_SESSION['temp_gallery'])){
		$sql = "DELETE FROM installation_step_gallery 
			WHERE installation_step_id = '".$installation_step_id."'";
		$result = $dbCustom->getResult($db,$sql);
		foreach($_SESSION['temp_gallery'] as $val){
			$sql = "INSERT INTO installation_step_gallery
					(installation_step_id
					,img_id)
					VALUES
					('".$installation_step_id."','".$val."')"; 
			$res = $dbCustom->getResult($db,$sql);
		}
	}		
					
	if(count($tools) > 0){
		$sql = "DELETE FROM installation_step_to_tool
				WHERE installation_step_id = '".$installation_step_id."'";
		$result = $dbCustom->getResult($db,$sql);		
		foreach($tools as $val){
			$sql = "INSERT INTO installation_step_to_tool
					(installation_step_id
					,installation_tool_id)
					VALUES
					('".$installation_step_id."','".$val."')"; 
			$res = $dbCustom->getResult($db,$sql);
		}			
	}
			
}

if(isset($_POST["set_order"])){	
	$installation_step_ids = $_POST["installation_step_id"];
	$display_orders = $_POST["display_order"];
	if(is_array($display_orders)){
		for($i = 0; $i < count($display_orders); $i++){
			$sql = sprintf("UPDATE installation_step 
				SET display_order = '%u'  
				WHERE installation_step_id = '%u'",
				$display_orders[$i], $installation_step_ids[$i]);

			$result = $dbCustom->getResult($db,$sql);
			
		}
	}
}
if(isset($_POST["del_installation_step"])){
	$installation_step_id = isset($_POST["del_installation_step_id"])? $_POST["del_installation_step_id"] : 0;
	$sql = sprintf("DELETE FROM installation_step WHERE installation_step_id = '%u'", $installation_step_id);
	$result = $dbCustom->getResult($db,$sql);
}


unset($_SESSION["installation_step_id"]);
unset($_SESSION["temp_fields"]);
unset($_SESSION['img_id']);
unset($_SESSION['new_img_id']);
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

<script>
$(document).ready(function() {
	$('.fancybox').fancybox({
		autoSize : false,
		height : 800,
		width : 900	
	});
});

/*
function msslSubmit(){
document.set_ssl.submit();
}
*/

function previewSubmit() {
document.form.action = '<?php echo SITEROOT; ?>pages/preview/preview.php';
document.form.target = '_blank';
document.form.submit();

}

function regularSubmit() {
  document.form.action = '<?php echo $current_page; ?>';
  document.form.target = '_self';
  document.form.submit(); 
}	
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
        <form name="form" action="<?php echo $current_page; ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="set_order" value="1">
        <div class="page_actions">
            <a href="<?php echo SITEROOT;?>manage/cms/pages/add-installation-step.php?firstload=1" 
            class="btn btn-primary btn-info">Add Installation Step </a>
            
			<!--
			<a href="<?php echo SITEROOT;?>manage/cms/pages/edit-installation-appearance.php" 
            class="btn btn-primary btn-info fancybox fancybox.iframe"><i class="icon-cog icon-white"></i> Edit Appearance </a>
            -->
			
			<a onClick="regularSubmit();" href="#" class="btn btn-success btn-large"><i class="icon-ok icon-white"></i> Save </a>
            <a href="<?php echo SITEROOT;?>manage/cms/pages/page.php" class="btn"><i class="icon-arrow-left"></i> Cancel &amp; Go Back</a>
            </div>
			<div class="data_table">
            <table cellpadding="10" cellspacing="0">
            <thead>
            <th>Name</th>
            <th width="39%">Description</th>
            <th width="7%">Order</th>
            <th width="15%">Edit</th>
            <th width="7%">Delete</th>
            </thead>
			<tbody>
			<?php 
			$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
			$sql = "SELECT * 
					FROM installation_step
					ORDER BY display_order";
			$result = $dbCustom->getResult($db,$sql);
			
			$block = '';
			while($row = $result->fetch_object()){
							
				$block .= "<tr>"; 
				
				$block .= "<td>".$row->name."</td>";
				$block .= "<td>".$row->description."</td>";

				$block .= "<td><input type='text' name='display_order[]' value='".$row->display_order."' style='width:30px;'/>
				<input type='hidden' name='installation_step_id[]' value='".$row->installation_step_id."' />			
				</td>";

				$block .= "<td><a href='edit-installation-step.php?firstload=1&installation_step_id=".$row->installation_step_id."' 
				class='btn btn-primary'><i class='icon-cog icon-white'></i> Edit</a>
				</td>";

				$block .= "<td valign='middle'><a class='btn btn-danger confirm'>
				<i class='icon-remove icon-white'></i>
				<input type='hidden' id='".$row->installation_step_id."' class='itemId' value='".$row->installation_step_id."' /></a>
				</td>";
			}
			echo $block;
			?>

</tbody>
</table>
</div>
</form>
<a onClick="regularSubmit();" href="#" class="btn btn-success btn-large"><i class="icon-ok icon-white"></i> Save </a>



</div>
<p class="clear"></p>
<?php
require_once($real_root.'/manage/admin-includes/manage-footer.php');
?>

</div>

<div id="content-delete" class="confirm-content">
	<h3>Are you sure you want to delete this step?</h3>
	<form name="del_installation_step_form" action="installation-steps.php" method="post" target="_top">
		<input id="del_installation_step_id" class="itemId" type="hidden" name="del_installation_step_id" value='' />
		<a class="btn btn-large dismiss">No, Cancel</a>
		<button class="btn btn-danger btn-large" name="del_installation_step" type="submit" >Yes, Delete</button>
	</form>
</div>


</body>
</html>

