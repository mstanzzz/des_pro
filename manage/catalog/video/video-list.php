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
$page_title = "Video List";
$page_group = "video";
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

function get_svg_icon($svg_id){
	$dbCustom = new DbCustom();
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$ret='';	
	$sql = "SELECT svg_code
			FROM svg
			WHERE svg_id = '".$svg_id."'";
	$re = $dbCustom->getResult($db,$sql);
	if($re->num_rows > 0){
		$object = $re->fetch_object();
		$ret = $object->svg_code;		
		
	}
	return  $ret;
}
$strip = (isset($_GET['strip'])) ? $_GET['strip'] : 0;



$db = $dbCustom->getDbConnect(CART_N_DATABASE);
if(isset($_POST['add_video'])){
	
	$video_link = isset($_POST['video_link'])? trim($_POST['video_link']) : '';
	$title = isset($_POST['title'])? trim(addslashes($_POST['title'])) : '';
	$description = isset($_POST['description'])? trim(addslashes($_POST['description'])) : '';
	$img_id = isset($_POST['img_id'])? $_POST['img_id']:0;
	
	$embed = isset($_POST['embed'])? trim($_POST['embed']) : '';
	$embed = str_replace('"', "'", $embed);
	$embed = addslashes($embed);

	$svg_id = isset($_POST['svg_id'])? trim(addslashes($_POST['svg_id'])) : 0;
	
	$stmt = $db->prepare("INSERT INTO video
					(title
					,embed
					,img_id
					,svg_id
					,profile_account_id)
					VALUES
					(?,?,?,?,?)"); 
		//echo 'Error INSERT   '.$db->error;
		
	if(!$stmt->bind_param("ssiii",
					$title
					,$embed
					,$img_id
					,$svg_id
					,$_SESSION['profile_account_id'])){
			$msg = "There was a problem this action";
			echo $msg; 
			//exit;
	}else{
		$stmt->execute();
		$stmt->close();
		$video_id = $db->insert_id;	
	}
	
	//echo $video_id;
	//exit;

}

if(isset($_POST['update_video'])){
	
	$video_link = isset($_POST['video_link'])? trim($_POST['video_link']) : '';
	$title = isset($_POST['title'])? trim(addslashes($_POST['title'])) : '';

	$description = isset($_POST['description'])? trim(addslashes($_POST['description'])) : '';

	$embed = isset($_POST['embed'])? trim($_POST['embed']) : '';
	$embed = str_replace('"', "'", $embed);
	$embed = addslashes($embed);
	$svg_id = isset($_POST['svg_id'])? trim(addslashes($_POST['svg_id'])) : 0;
	$img_id = isset($_POST['img_id'])? $_POST['img_id']:0;
	$video_id = isset($_POST['video_id'])? $_POST['video_id']:0;

	$stmt = $db->prepare("UPDATE video
						SET title = ?
							,embed = ?
							,img_id = ?
							,svg_id = ?
					WHERE video_id = ?");					
			//echo 'Error INSERT   '.$db->error;
	if(!$stmt->bind_param("ssiii",
					$title
					,$embed
					,$img_id
					,$svg_id
					,$video_id)){
			$msg = "There was a problem this action";
			//exit;
	}else{
		$stmt->execute();
		$stmt->close();
	}

}

if(isset($_POST["del_video"])){
	$video_id = $_POST["del_video_id"];
	if(!is_numeric($video_id))$video_id=0;
	$sql ="DELETE FROM video WHERE video_id = '".$video_id."'";
	$result = $dbCustom->getResult($db,$sql);
	$msg = "Video deleted.";
}

if(isset($_POST['set_active'])){
	$actives = (isset($_POST["active"]))? $_POST["active"] : 0;
	$sql = "UPDATE video SET active = '0' 
	WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
	$result = $dbCustom->getResult($db,$sql);
	foreach($actives as $val){
		$sql = "UPDATE video SET active = '1' WHERE video_id = '".$val."'";		
		$result = $dbCustom->getResult($db,$sql);
	}
	$msg = "Your change is now live.";
}


$video_array = array();
$i=0;
$sql = "SELECT video_id
		,active
		,title
		,description
		,embed
		,video_link
		,svg_id
		,img_id  
    FROM video 
	WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
	ORDER BY video_id";
$result = $dbCustom->getResult($db,$sql);	
while($row = $result->fetch_object()){
	$video_array[$i]['video_id'] = $row->video_id;
	$video_array[$i]['svg_id'] = $row->svg_id;
	$video_array[$i]['active'] = $row->active;
	$video_array[$i]['title'] = stripslashes($row->title);
	//$video_array[$i]['description'] = stripslashes($row->description);
	$video_array[$i]['embed'] = stripslashes($row->embed);
	//$video_array[$i]['video_link'] = stripslashes($row->video_link);
	$video_array[$i]['img_id'] = $row->img_id;
	$i++;
}

unset($_SESSION['img_id']);
unset($_SESSION['temp_fields']);


require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>
<script>

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
		<h1>Video Files</h1>
		<div class="alert alert-success">
			<h4><?php echo $msg; ?></h4>
		</div>

<?php 
$url_str = "add-video.php";
$url_str .= "?strip=".$strip;
echo "<a class='btn btn-info' href='".$url_str."'>ADD VIDEO</a>";

$disabled = '';
?>
<br />
<br />

<form name="form" action="video-list.php" method="post" target="_self">
<input type="hidden" name="ret_page" value="video-list">        
<input type="hidden" name="ret_dir" value="manage/cms/video">
<input type="hidden" name="page_title" value=''>  
<input type="hidden" name="content_table" value="video"> 
<input type="hidden" name="set_active" value="1"> 
<input type="submit" name="submit" value="Save Changes" class='btn btn-success btn-large' />
<table width="100%" border="1" cellpadding="10" cellspacing="0">
<tr>
<td width="10%;">Icon</td>
<td>title</td>
<td width="15%;">Place Holder</td>
<td width="35%;">video</td>
<td width="10%">Active</td>
<td width="10%">EDIT</td>
<td width="10%">Delete</td>
<?php
$block = '';
foreach($video_array as $val){
$svg_code = get_svg_icon($val['svg_id']);
$block .= "<tr>";
$block .= "<td>".$svg_code."</td>";
$block .= "<td>".$val['title']."</td>";
$fn=get_file_name($dbCustom,$val['img_id']);
$block .= "<td><img width='120' src='".SITEROOT."saascustuploads/1/cart/".$fn."' /></td>";


$embed = stripslashes($val['embed']);

$block .= "<td>".$embed."</td>";

$checked = ($val['active'])? "checked" : '';
$block	.= "<td align='center' valign='middle' >
			<div class='checkboxtoggle on ".$disabled." '> 
			<span class='ontext'>ON</span>
			<a class='switch on' href='#'></a>
			<span class='offtext'>OFF</span>
			<input type='checkbox' class='checkboxinput' name='active[]' 
			value='".$val['video_id']."' ".$checked." /></div>";
$block .= "</td>";	

$url_str = '';
$url_str .= "edit-video.php";
$url_str .= "?video_id=";
$url_str .= $val['video_id'];	
$block .= "<td>";
$block .= "<a class='btn btn-info' href='".$url_str."'>Edit</a>";
$block .= "</td>";

$block .= "<td>";
$block .= "<a class='btn btn-danger confirm ".$disabled." '>
			DEL
			<input type='hidden' id='".$val['video_id']."' class='itemId' value='".$val['video_id']."' />";
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
    <?php
	//$url_str = "video-list.php";
	//$url_str .= "&strip=".$strip;											
	//$url_str .= "&pagenum=".$pagenum;
	//$url_str .= "&sortby=".$sortby;
	//$url_str .= "&a_d=".$a_d;
	//$url_str .= "&truncate=".$truncate;

	?>
    
    <div id="content-delete" class="confirm-content">
        <h3>Are you sure you want to delete this Video?</h3>
        <form name="del_video" action="video-list.php" method="post" target="_top">
            <input id="del_video_id" class="itemId" type="hidden" name="del_video_id" value='' />
            <a class="btn btn-large dismiss">No, Cancel</a>
            <button class="btn btn-danger btn-large" name="del_video" type="submit" >Yes, Delete</button>
        </form>
    </div>
	<?php 
    require_once($real_root.'/manage/admin-includes/manage-footer.php');
    ?>
</div>
</body>
</html>




