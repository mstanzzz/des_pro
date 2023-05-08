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
require_once($real_root.'/includes/class.nav.php');

$progress = new SetupProgress;
$module = new Module;
$nav = new Nav;

$page_title = "Spec Sizes";
$page_group = "spec";

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


$msg = '';
$db = $dbCustom->getDbConnect(CART_N_DATABASE);

$strip = (isset($_GET['strip'])) ? $_GET['strip'] : 0;
$pagenum = (isset($_GET['pagenum'])) ? addslashes($_GET['pagenum']) : 0;
$sortby = (isset($_GET['sortby'])) ? trim($_GET['sortby']) : '';
$a_d = (isset($_GET['a_d'])) ? $_GET['a_d'] : 'a';
$truncate = (isset($_GET['truncate'])) ? addslashes($_GET['truncate']) : 1;
$search_str = (isset($_GET['search_str'])) ? addslashes($_GET['search_str']) : '';




//img_id


if(isset($_POST['add_size'])){
	$text = (isset($_POST['text']))? trim(addslashes($_POST['text'])) : '';
	$tool_tip = (isset($_POST['tool_tip']))? trim(addslashes($_POST['tool_tip'])) : '';
	$img_id = (isset($_POST['img_id']))? $_POST['img_id'] : 0; 
	
	
	if(!is_numeric($img_id))$img_id=0;

	$sql = sprintf("INSERT INTO size 
		(text
		,tool_tip
		,img_id
		,profile_account_id) 
		VALUES ('%s','%s','%u','%u')", 
		$text
		,$tool_tip
		,$img_id
		,$_SESSION['profile_account_id']);		
	$res = $dbCustom->getResult($db,$sql);
	$size_id = $db->insert_id;
	
}

if(isset($_POST['update_size'])){
	$size_id = (isset($_POST['size_id']))? $_POST['size_id'] : 0; 
	$text = (isset($_POST['text']))? trim(addslashes($_POST['text'])) : '';
	$tool_tip = (isset($_POST['tool_tip']))? trim(addslashes($_POST['tool_tip'])) : '';
	$img_id = (isset($_POST['img_id']))? $_POST['img_id'] : 0; 
	
	if(!is_numeric($size_id))$size_id=0;
	if(!is_numeric($img_id))$img_id=0;
		
	$sql = "UPDATE size 
			SET text = '".$text."'
			,tool_tip = '".$tool_tip."'	
			,img_id = '".$img_id."'			
			WHERE size_id = '".$size_id."'";
			
	echo $sql;		
	$res = $dbCustom->getResult($db,$sql);
}

if(isset($_POST['del_id'])){
	$size_id = $_POST['del_id'];
	$sql = "DELETE FROM size
			WHERE size_id = '".$size_id."'";
	$result = $dbCustom->getResult($db,$sql);
	$msg = 'Your change is now live.';
}

require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>

<script>

function regularSubmit() {
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

	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$total_sizes = array();
	$sql = "SELECT size_id, text, tool_tip, img_id
	FROM size
	WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
	$result = $dbCustom->getResult($db,$sql);
	
	$i = 0;
	while($row = $result->fetch_object()) {
		$total_sizes[$i]['size_id'] = $row->size_id;
		$total_sizes[$i]['text'] = $row->text;
		$total_sizes[$i]["tool_tip"] = $row->tool_tip;
		$total_sizes[$i]["img_id"] = $row->img_id;
		$i++;
	}		
	

	$url_str = "add-size.php";
	$url_str .= "?strip=".$strip;
	$url_str .= "&firstload=1";
	$url_str .= "&pagenum=".$pagenum;
	$url_str .= "&sortby=".$sortby;
	$url_str .= "&a_d=".$a_d;
	$url_str .= "&truncate=".$truncate;
	echo "<a style='margin-left:30px;' class='btn btn-large btn-primary' href='".$url_str."'>Add Size</a>"; 

$url_str = "sizes.php";	
	
?>

<form name="form" action="<?php echo $url_str; ?>" method="post" enctype="multipart/form-data">        

<table cellpadding="6" cellspacing="6" border="1" style="width:100%;" >
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>


<!--
<tr>
<td width="20%"><td>
<td width="70%"><td>
<td><td>
</tr>
-->

<?php
foreach($total_sizes as $v) {
	echo "<tr height='100'>";	
	
	
	$file_name = get_file_name($dbCustom,$v['img_id']);
	
	echo "<td><img width='200' src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$file_name."'/></td>";
	
	echo "<td>".stripslashes($v['text'])."</td>"; 	
				
	$url_str = "edit-size.php";
	$url_str .= "?size_id=".$v['size_id'];
	$url_str .= "&firstload=1";
	
	echo "<td>";
	echo "<a class='btn btn-info' href='".$url_str."'>Edit</a>";
	echo "</td>";
	
	echo "<td><a class='btn btn-danger confirm'>
				<input type='hidden' id='".$v['size_id']."' 
				class='itemId' value='".$v['size_id']."' />Delete</a>";
	echo "</td>";

	echo "</tr>";
}
						
echo $block;
				
?>      
</table>

</form> 

  </div>
  <p class="clear"></p>
  
</div>

<div class="disabledMsg">
	<p>Sorry, this item can't be deleted or inactive.</p>
</div>

    <?php
	$url_str = "sizes.php";
	?>
<div id="content-delete" class="confirm-content">
	<h3>Are you sure you want to delete this Category?</h3>
	<form name="del_category" action="<?php echo $url_str; ?>" method="post" target="_top">
		<input id="del_id" class="itemId" type="hidden" name="del_id" value='' />
		<a class="btn btn-large dismiss">No, Cancel</a>
		<button class="btn btn-danger btn-large" name="del_cat" type="submit" >Yes, Delete</button>
	</form>
</div>

</body>
</html>





