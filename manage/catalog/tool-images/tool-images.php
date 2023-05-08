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
$page_title = "Tool Images List";
$page_group = "Tool Images";
$db = $dbCustom->getDbConnect(CART_N_DATABASE);
$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';

	
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

if(isset($_POST['add_tool_image'])){
	
	$title = isset($_POST['title'])? trim(addslashes($_POST['title'])) : '';
	$img_id = isset($_POST['img_id'])? $_POST['img_id']:0;
	
	$stmt = $db->prepare("INSERT INTO tool_image
					(title
					,img_id
					,profile_account_id)
					VALUES
					(?,?,?)"); 
		//echo 'Error INSERT   '.$db->error;
		
	if(!$stmt->bind_param("sii",
					$title
					,$img_id
					,$_SESSION['profile_account_id'])){
			$msg = "There was a problem this action";
			echo $msg; 
			//exit;
	}else{
		$stmt->execute();
		$stmt->close();
		$video_id = $db->insert_id;	
	}

}


if(isset($_POST['update_tool_image'])){
	$title = isset($_POST['title'])? trim(addslashes($_POST['title'])) : '';
	$img_id = isset($_POST['img_id'])? $_POST['img_id']:0;
	$tool_image_id = isset($_POST['tool_image_id'])? $_POST['tool_image_id']:0;

	$stmt = $db->prepare("UPDATE tool_image
						SET title = ?
							,img_id = ?
					WHERE tool_image_id = ?");					
			//echo 'Error INSERT   '.$db->error;
	if(!$stmt->bind_param("sii",
					$title
					,$img_id
					,$tool_image_id)){
			$msg = "There was a problem this action";
			//exit;
	}else{
		$stmt->execute();
		$stmt->close();	
	}

}

if(isset($_POST["del_tool_image"])){
	$tool_image_id = $_POST["tool_image_id"];
	if(!is_numeric($tool_image_id))$tool_image_id=0;
	$sql ="DELETE FROM tool_image WHERE tool_image_id = '".$tool_image_id."'";
	$result = $dbCustom->getResult($db,$sql);
	
	$msg = "Tool Image deleted.";
}


if(isset($_POST['set_active'])){
	$actives = (isset($_POST["active"]))? $_POST["active"] : 0;
	$sql = "UPDATE tool_image SET active = '0' 
	WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
	$result = $dbCustom->getResult($db,$sql);
	
	foreach($actives as $val){
		$sql = "UPDATE tool_image SET active = '1' WHERE tool_image_id = '".$val."'";		
		$result = $dbCustom->getResult($db,$sql);
	}

	$msg = "Your change is now live.";
}



$tool_image_array = array();
$i=0;
$sql = "SELECT tool_image_id
		,active
		,title
		,img_id  
    FROM tool_image 
	WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
$result = $dbCustom->getResult($db,$sql);	
while($row = $result->fetch_object()){

	$tool_image_array[$i]['tool_image_id'] = $row->tool_image_id;
	$tool_image_array[$i]['active'] = $row->active;
	$tool_image_array[$i]['title'] = $row->title;
	$tool_image_array[$i]['img_id'] = $row->img_id;
	$i++;
}

unset($_SESSION['img_id']);

require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>
<script>

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
		<h1>Tool images</h1>
		<div class="alert alert-success">
			<h4><?php echo $msg; ?></h4>
		</div>
<?php 
$url_str = "add-tool-image.php";
$url_str .= "?ret_page=tool-images";
echo "<a class='btn btn-info' href='".$url_str."'>ADD TOOL</a>";
?>
<br />
<br />

<form name="form" action="tool-images.php" method="post">
<input type="hidden" name="ret_page" value="tool-images">        
<input type="hidden" name="ret_dir" value="tool-images">
<input type="hidden" name="set_active" value="1"> 
<input type="submit" name="submit" value="Save Changes" class='btn btn-success btn-large' />
<table width="100%" border="1" cellpadding="10" cellspacing="0">
<tr>
<td>Tool Image</td>
<td>title</td>
<td width="10%">Active</td>
<td width="10%">EDIT</td>
<td width="10%">Delete</td>
<?php
$block = '';
foreach($tool_image_array as $val){

$file_name = get_file_name($dbCustom,$val['img_id']);

$block .= "<tr>"; 
$block .= "<td>";
$block .= "<img src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$file_name."'></a></td>";
$block .= "</td>";
$block .= "<td>".$val['title']."</td>";
$checked = ($val['active'])? "checked" : '';
$block .= "<td>";
$block .= "<input type='checkbox' name='active[]' value='".$val['tool_image_id']."' ".$checked." />";
$block .= "</td>";
$url_str = '';
$url_str .= "edit-tool-image.php";
$url_str .= "?tool_image_id=";
$url_str .= $val['tool_image_id'];	
$block .= "<td>";
$block .= "<a class='btn btn-info' href='".$url_str."'>Edit</a>";
$block .= "</td>";

$block .= "<td>";
$block .= "<a style='width:90%;' class='btn btn-danger confirm btn-small'>
			<p>DEL</p>
			<input type='hidden' id='".$val['tool_image_id']."' class='itemId' value='".$val['tool_image_id']."' />";
$block .= "</a>";
$block .= "</td>";		

$block .= "</tr>";
}
echo $block;
?>
</table>
</div>
</form>
</div>
<p class="clear"></p>
<div id="content-delete" class="confirm-content">
<h3>Are you sure you want to delete this Tool?</h3>
<form name="del_tool_image" action="tool-images.php" method="post" target="_top">
<input id="tool_image_id" class="itemId" type="hidden" name="tool_image_id" value='' />
<a class="btn btn-large dismiss">No, Cancel</a>
<button class="btn btn-danger btn-large" name="del_video" type="submit" >Yes, Delete</button>
</form>
</div>
</div>
</body>
</html>
