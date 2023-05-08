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


$progress = new SetupProgress;
$module = new Module;

$page_title = "Editing: Showroom";
$page_group = "showroom";
$page = "showroom";

if(!isset($_SESSION['img_id'])) $_SESSION['img_id'] = 0;

$ts = time();

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
// add if not exist
$sql = "SELECT showroom_id FROM showroom WHERE profile_account_id = '".$_SESSION['profile_account_id']."'"; 
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows == 0){
	$sql = "INSERT INTO showroom 
		(profile_account_id) 
		VALUES ('".$_SESSION['profile_account_id']."')"; 
	$result = $dbCustom->getResult($db,$sql);	
	$_SESSION['showroom_id'] = $db->insert_id;
}else{
	if(isset($_REQUEST['showroom_id'])) $_SESSION['showroom_id'] = $_REQUEST['showroom_id'];
}

$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';

if(isset($_POST['update'])){

	$top_1 = isset($_POST['top_1'])? addslashes(trim($_POST['top_1'])) : '';
	$top_2 = isset($_POST['top_2'])? addslashes(trim($_POST['top_2'])) : '';
	$top_3 = isset($_POST['top_3'])? addslashes(trim($_POST['top_3'])) : '';
	$p_1_head = isset($_POST['p_1_head'])? addslashes(trim($_POST['p_1_head'])) : '';
	$p_1_text = isset($_POST['p_1_text'])? addslashes(trim($_POST['p_1_text'])) : '';

	if(isset($_POST['img_id'])) $_SESSION['img_id'] = $_POST['img_id']; 
	
	$stmt = $db->prepare("UPDATE showroom
						SET
						top_1 = ?
						,top_2 = ?
						,top_3 = ?
						,p_1_head = ?
						,p_1_text = ?
						,img_id = ?
						WHERE showroom_id = ?");
		//echo 'Error-1 UPDATE   '.$db->error;
	if(!$stmt->bind_param("sssssii"
						,$top_1
						,$top_2
						,$top_3
						,$p_1_head
						,$p_1_text
						,$_SESSION['img_id']						
						,$_SESSION['showroom_id'])){
							
		echo 'Error-2 UPDATE   '.$db->error;
		
	}else{
		$stmt->execute();
		$stmt->close();				
		$msg = "Updated";
	}
	
	$seo_name = 'showroom';
	$page = 'showroom';
	$seo_name = (isset($_POST['seo_name']))? trim($_POST['seo_name']) : 'showroom';
	$seo_name = str_replace ('\'', '' , $seo_name);
	$seo_name = str_replace ('\"', '' , $seo_name);
	$seo_name = str_replace (' ', '-' , $seo_name);
	$title = (isset($_POST['title']))? trim(addslashes($_POST['title'])) : 'showroom';
	$keywords = (isset($_POST['keywords']))? trim(addslashes($_POST['keywords'])) : 'showroom';
	$description = (isset($_POST['description']))? trim(addslashes($_POST['description'])) : 'showroom';
	$page_heading = (isset($_POST['page_heading']))? trim(addslashes($_POST['page_heading'])) : 'showroom';

	require_once($real_root."/manage/cms/insert_page_seo.php");
	
}

$sql = "SELECT p_1_head
		,p_1_text
		,top_1
		,top_2
		,top_3		
		,img_id
FROM showroom 
WHERE showroom_id = '".$_SESSION['showroom_id']."'";
$result = $dbCustom->getResult($db,$sql);	

if($result->num_rows > 0){
	$object = $result->fetch_object();
	$top_1 = $object->top_1;
	$top_2 = $object->top_2;
	$top_3 = $object->top_3;
	$p_1_head = $object->p_1_head;
	$p_1_text = $object->p_1_text;
	$img_id = $object->img_id;
}else{
	$top_1 ='';
	$top_2 = '';
	$top_3 = '';
	$p_1_head = '';
	$p_1_text = '';
	$img_id = 0;
}



if($_SESSION['img_id'] > 0 && $img_id == 0){

	$sql = "UPDATE showroom
			SET img_id = '".$_SESSION['img_id']."' 		 
			WHERE showroom_id = '".$_SESSION['showroom_id']."'";
	$result = $dbCustom->getResult($db,$sql);	
	$img_id	= $_SESSION['img_id'];		
}

require_once($real_root.'/manage/cms/get_seo_variables.php');

$_SESSION['temp_fields']['top_1'] = $top_1;	
$_SESSION['temp_fields']['top_2'] = $top_2;	
$_SESSION['temp_fields']['top_3'] = $top_3;	
$_SESSION['temp_fields']['p_1_head'] = $p_1_head;	
$_SESSION['temp_fields']['p_1_text'] = $p_1_text;	

if(!isset($_SESSION['img_id']))$_SESSION['img_id'] = 0;
if($_SESSION['img_id'] == 0) $_SESSION['img_id'] = $img_id;

require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>
<script src="https://cdn.tiny.cloud/1/iyk23xxriyqcd2gt44r230a2yjinya99cx1kd3tk9huatz50/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
tinymce.init({
	selector: 'textarea',
	plugins: 'advlist link image lists code',
	forced_root_block : false

});

function validate(theform){
			
	return true;
}

function ajax_set_page_session(){
	
	var q_str = "?page=showroom"+get_query_str();
		
	$.ajaxSetup({ cache: false}); 
	$.ajax({
	  url: 'ajax_set_page_session.php'+q_str,
	  success: function(data) {
			//alert(data);
	  }
	});
}

function get_query_str(){
	
	var query_str = '';
	return query_str;
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

echo "<a class='btn btn-info' href='page.php' >DONE</a>";

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = "SELECT file_name 
		FROM image
		WHERE img_id = '".$_SESSION['img_id']."'";
$img_res = $dbCustom->getResult($db,$sql);
if($img_res->num_rows > 0){
	$img_obj = $img_res->fetch_object();
	$file_name = $img_obj->file_name;
}else{
	$file_name = '';
}

$im = "";
$im .= SITEROOT;
$im .= "saascustuploads/";
$im .= $_SESSION['profile_account_id'];
$im .= "/cms/";
$im .= $file_name;
echo "<h1>Hero Image </h1>";
echo "<img width='90%;' src='".$im."'>";
$url_str = SITEROOT."manage/upload-pre-crop.php"; 
$url_str.= "?ret_page=showroom";
$url_str.= "&ret_dir=cms/pages";
$url_str.= "&ret_path=cms/pages";
$url_str.= "&upload_new_img=1";
$url_str.= "&img_type=hero";
?>
<a class="btn btn-info" href="<?php echo $url_str; ?>">Upload Hero Image </a>

<form name="form" action="showroom.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="update" value="1">        
	<input type="hidden" name="showroom_id" value="<?php echo $_SESSION['showroom_id']; ?>">
	<input type="hidden" name="img_id" value="<?php echo $_SESSION['img_id']; ?>">
	<div class="page_actions edit_page">			
		<input type="submit" name="submit" value="Save Changes" class="btn-large btn-success"> 
		<hr />
		<a href="<?php echo SITEROOT;?>manage/cms/pages/page.php" class="btn">Cancel &amp; Go Back</a>
	</div>
	<div class="colcontainer">                

<label>top_1</label>
<input type="text" name="top_1"  style="width:96%" value="<?php echo stripslashes($_SESSION['temp_fields']['top_1']); ?>">

<label>top_2</label>
<input type="text" name="top_2"  style="width:96%" value="<?php echo stripslashes($_SESSION['temp_fields']['top_2']); ?>">

<label>top_3</label>
<input type="text" name="top_3"  style="width:96%" value="<?php echo stripslashes($_SESSION['temp_fields']['top_3']); ?>">
				

<label>p_1_head</label>
<input type="text" name="p_1_head"  style="width:96%"  value="<?php echo stripslashes($_SESSION['temp_fields']['p_1_head']); ?>">

<label>p_1_text</label>
<textarea rows="20" id="p_1_text" name="p_1_text"><?php echo stripslashes($_SESSION['temp_fields']['p_1_text']); ?></textarea>
	
<?php
require_once($real_root."/manage/cms/get_seo_variables.php");				
require_once("edit_page_seo.php"); 
//require_once($real_root."/manage/cms/edit_page_breadcrumb.php"); 
?>								

		</form>
	</div>
	<p class="clear"></p>
</div>
<br /><br /><br /><br />
<div class="disabledMsg">
	<p>Sorry, this item can't be deleted or inactive.</p>
</div>

</body>
</html>
