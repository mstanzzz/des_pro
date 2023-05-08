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
$page_title = "Edit Installation Tool";
$page_group = "installation";

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$msg = '';
if(isset($_GET['firstload'])){
	//unset($_SESSION['installation_tool_id']);
	//unset($_SESSION['img_id']);
}

$installation_tool_id = (isset($_GET['installation_tool_id'])) ? $_GET['installation_tool_id'] : 0;
if(!isset($_SESSION["installation_tool_id"])) $_SESSION["installation_tool_id"] = $installation_tool_id; 

$sql = "SELECT name, description, img_alt_text, svg_id
	    FROM installation_tool 
 		WHERE installation_tool_id = '".$_SESSION['installation_tool_id']."'";
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$name = $object->name;
	$description =  $object->description;
	$img_alt_text =  $object->img_alt_text;
	$svg_id =  $object->svg_id;
}else{
	$name = '';
	$description = '';
	$img_alt_text = '';
	$svg_id = 0;
}
if(!isset($_SESSION['temp_fields']['name'])) $_SESSION['temp_fields']['name'] = $name;
if(!isset($_SESSION['temp_fields']['description'])) $_SESSION['temp_fields']['description'] = $description;
if(!isset($_SESSION['temp_fields']['img_alt_text'])) $_SESSION['temp_fields']['img_alt_text'] = $img_alt_text;

if(!isset($_SESSION['temp_fields']['svg_id'])) $_SESSION['temp_fields']['svg_id'] = $svg_id;

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
function goto_isfancybox(url, save_session){
	if (window.top.location != window.location) {
		url+="&fromfancybox=1";
	}
	/*
	if(save_session){
		var q_str = "?page=add-installation-step"+get_query_str();
		$.ajaxSetup({ cache: false}); 
		$.ajax({
		  url: 'ajax_set_page_session.php'+q_str,
		  success: function(data) {
			location.href = url;
		  }
		});
	}else{
		location.href = url;		
	}
	*/
}

function get_query_str(){
	var query_str = '';
	return query_str;
}

</script>
</head>
<body>
<div class="lightboxholder">
	<?php if($msg != ''){ ?>
	<div class="alert">
		<p><?php echo $msg ?></p>
	</div>
	<?php } ?>
	<a class="btn-success" href="installation-tools.php">Go Back</a>
	<form name="form" action="installation-tools.php" method="post" target="_top">
        <input type="hidden" name="installation_tool_id" value="<?php echo $_SESSION['installation_tool_id']; ?>" />
		<input type="hidden" name="update_installation_tool" value="1" />
		<div class="lightboxcontent">
		<h2>Edit Installation Step</h2>
		<legend>SVG Image</legend>
		<?php
		$db = $dbCustom->getDbConnect(CART_N_DATABASE);	
		
		
		$sql = "SELECT svg_id, name, svg_code 
				FROM svg 
				WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
				ORDER BY svg_id DESC";
		$img_res = $dbCustom->getResult($db,$sql);
		while($row = $img_res->fetch_object()){
			
			//echo "name: ".$row->name;
			//echo "<br />";
			$checked=($_SESSION['temp_fields']['svg_id']==$row->svg_id)? "checked": '';
			echo "<input type='radio' name='svg_id' value='".$row->svg_id."' ".$checked.">";
			echo $row->svg_code;
			echo "<hr />";
			echo "<br />";
		}
		?>

		<label>Image Alt Tag Text</label>
		<input id="img_alt_text" type="text" name="img_alt_text" value="<?php echo stripslashes($_SESSION["temp_fields"]['img_alt_text']);; ?>" />
		<label>Tool name</label>
		<input type="text" id="name" name="name" value="<?php echo stripslashes($_SESSION['temp_fields']['name']); ?>" />
		<label>Tool Description</label>
		<textarea  cols="88" id="description" name="description"><?php echo stripslashes($_SESSION['temp_fields']['description']) ?></textarea>
		<button class="btn btn-large btn-success" name="submit" type="submit">Save Changes </button>
	</form>
</div>
</body>
</html>

