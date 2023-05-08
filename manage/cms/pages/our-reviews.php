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

$page_title = "Editing: our-reviews";
$page_group = "our-reviews";
$page = "our-reviews";

if(!isset($_SESSION['img_id'])) $_SESSION['img_id'] = 0;

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$ts = time();
$sql = "SELECT our_reviews_id FROM our_reviews WHERE profile_account_id = '".$_SESSION['profile_account_id']."'"; 
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows == 0){
	$sql = "INSERT INTO our_reviews 
		(profile_account_id) 
		VALUES ('".$_SESSION['profile_account_id']."')"; 
	$result = $dbCustom->getResult($db,$sql);	
	$_SESSION['our_reviews_id'] = $db->insert_id;
}else{
	$_SESSION['our_reviews_id'] = (isset($_REQUEST['our_reviews_id'])) ? $_REQUEST['our_reviews_id'] : 0;
}

if(!is_numeric($_SESSION['our_reviews_id'])) $_SESSION['our_reviews_id'] = 0;
$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';


echo "<br />";
echo "our_reviews_id: ".$_SESSION['our_reviews_id'];
echo "<br />";

if(isset($_POST['update'])){
	$top_1 = isset($_POST['top_1'])? addslashes(trim($_POST['top_1'])) : '';
	$top_2 = isset($_POST['top_2'])? addslashes(trim($_POST['top_2'])) : '';
	$top_3 = isset($_POST['top_3'])? addslashes(trim($_POST['top_3'])) : '';
	
	$stmt = $db->prepare("UPDATE our_reviews
						SET
						top_1 = ?
						,top_2 = ?
						,top_3 = ?
						WHERE our_reviews_id = ?");
		//echo 'Error-1 UPDATE   '.$db->error;
	if(!$stmt->bind_param("sssi"
						,$top_1
						,$top_2
						,$top_3
						,$_SESSION['our_reviews_id'])){
		echo 'Error-2 UPDATE   '.$db->error;
	}else{
		$stmt->execute();
		$stmt->close();				
		$msg = "Updated";
	}
	
	$seo_name	= 'our-reviews';
	$page	= 'our-reviews';
	$seo_name = (isset($_POST['seo_name']))? trim($_POST['seo_name']) : 'our-reviews';
	$seo_name = str_replace ('\'', '' , $seo_name);
	$seo_name = str_replace ('\"', '' , $seo_name);
	$seo_name = str_replace (' ', '-' , $seo_name);
	$title = (isset($_POST['title']))? trim(addslashes($_POST['title'])) : 'our-reviews';
	$keywords = (isset($_POST['keywords']))? trim(addslashes($_POST['keywords'])) : 'our-reviews';
	$description = (isset($_POST['description']))? trim(addslashes($_POST['description'])) : 'our-reviews';
	$page_heading = (isset($_POST['page_heading']))? trim(addslashes($_POST['page_heading'])) : 'our-reviews';
	require_once($real_root."/manage/cms/insert_page_seo.php");
}

$sql="SELECT *
	FROM our_reviews
	WHERE our_reviews_id = '".$_SESSION['our_reviews_id']."'";
$result = $dbCustom->getResult($db,$sql);	
if($result->num_rows > 0){
	$object = $result->fetch_object();
	$top_1 = $object->top_1;
	$top_2 = $object->top_2;
	$top_3 = $object->top_3;
		
}else{
	$top_1 = '';
	$top_2 = '';
	$top_3 = '';
}


$_SESSION['temp_fields']['top_1'] = $top_1;	
$_SESSION['temp_fields']['top_2'] = $top_2;	
$_SESSION['temp_fields']['top_3'] = $top_3;	

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
 
<center><h1>our-reviews Page</h1></center>	
	<a class="btn" href="<?php echo SITEROOT;?>manage/cms/pages/page.php" >Cancel &amp; Go Back</a>
<form name="form" action="our-reviews.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="update" value="1">        
<input type="hidden" name="our_reviews_id" value="<?php echo $_SESSION['our_reviews_id']; ?>">
<input  class="btn-info" type="submit" name="submit" value="Save Changes"> 
<hr />

<?php
$url_str = SITEROOT."manage/upload-pre-crop.php"; 
$url_str.= "?ret_page=our-reviews";
$url_str.= "&our_reviews_id".$_SESSION['our_reviews_id'];
$url_str.= "&ret_dir=cms/pages";
$url_str.= "&ret_path=cms/pages";
$url_str.= "&img_type=hero";
?>
<a style="margin:30px; color:#52ffff; 16px;" 
onClick="set_cat_session()" href="<?php echo $url_str; ?>" class="btn btn-info">Upload Hero image</a>


<hr />
<label>Top 1</label>
<input style="width:92%"  type="text" name="top_1"  value="<?php echo stripslashes($_SESSION['temp_fields']['top_1']); ?>">
<label>Top 2</label>
<input style="width:92%"  type="text" name="top_2"  value="<?php echo stripslashes($_SESSION['temp_fields']['top_2']); ?>">
<label>Top 3</label>
<input style="width:92%"  type="text" name="top_3"  value="<?php echo stripslashes($_SESSION['temp_fields']['top_3']); ?>">

<?php
require_once($real_root."/manage/cms/get_seo_variables.php");				
require_once("edit_page_seo.php"); 
?>								
</form>
</div>
	<p class="clear"></p>
</div>

</body>
</html>
