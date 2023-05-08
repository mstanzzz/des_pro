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
$pages = new Pages;

$page_title = "Home Page";
$page_group = "home-page";
$page = "home";

$action = (isset($_GET['action'])) ? $_GET['action'] : '';
$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

$sql = "SELECT home_id FROM home WHERE profile_account_id = '".$_SESSION['profile_account_id']."'"; 
$result = $dbCustom->getResult($db,$sql);
if($result->num_rows == 0){
	$sql = "INSERT INTO home 
		(top_1, profile_account_id) 
		VALUES ('Add Content', '".$_SESSION['profile_account_id']."')"; 
	$result = $dbCustom->getResult($db,$sql);
	$_SESSION['home_id'] = $db->insert_id;
}else{
	$_SESSION['home_id'] = (isset($_REQUEST['home_id'])) ? $_REQUEST['home_id'] : 0;
}
if(!is_numeric($_SESSION['home_id'])) $_SESSION['home_id'] = 0;

if(isset($_GET['img_1_id'])){
	
	$img_1_id=$_GET['img_1_id'];
	if(!is_numeric($img_1_id))$img_1_id=0;
	$_SESSION['img_1_id']=$img_1_id;	
}
if(isset($_GET['img_4_id'])){
	$img_4_id=$_GET['img_4_id'];
	if(!is_numeric($img_4_id))$img_4_id=0;
	$_SESSION['img_4_id']=$img_4_id;	
}
if(isset($_GET['img_4_id'])){
	$img_4_id=$_GET['img_4_id'];
	if(!is_numeric($img_4_id))$img_4_id=0;
	$_SESSION['img_4_id']=$img_4_id;	
}

if(isset($_GET['img_4_id'])){
	$img_4_id=$_GET['img_4_id'];
	if(!is_numeric($img_4_id))$img_4_id=0;
	$_SESSION['img_4_id']=$img_4_id;	
}
		
if(isset($_POST['update_home'])){

	$img_1_id = isset($_POST['img_1_id'])? trim($_POST['img_1_id']) : 0;
	$img_2_id = isset($_POST['img_2_id'])? trim($_POST['img_2_id']) : 0;
	$img_3_id = isset($_POST['img_3_id'])? trim($_POST['img_3_id']) : 0;
	$img_4_id = isset($_POST['img_4_id'])? trim($_POST['img_4_id']) : 0;

	$top_1 = isset($_POST['top_1'])? addslashes(trim($_POST['top_1'])) : '';
	$top_2 = isset($_POST['top_2'])? addslashes(trim($_POST['top_2'])) : '';
	$top_3 = isset($_POST['top_3'])? addslashes(trim($_POST['top_3'])) : '';
	
	$p_1_head = isset($_POST['p_1_head'])? addslashes(trim($_POST['p_1_head'])) : '';
	$p_1_text = isset($_POST['p_1_text'])? addslashes(trim($_POST['p_1_text'])) : '';
	
	$p_2_head = isset($_POST['p_2_head'])? addslashes(trim($_POST['p_2_head'])) : '';
	$p_2_text = isset($_POST['p_2_text'])? addslashes(trim($_POST['p_2_text'])) : '';

	$p_3_head = isset($_POST['p_3_head'])? addslashes(trim($_POST['p_3_head'])) : '';
	$p_3_text = isset($_POST['p_3_text'])? addslashes(trim($_POST['p_3_text'])) : '';

	$p_4_head = isset($_POST['p_4_head'])? addslashes(trim($_POST['p_4_head'])) : '';
	$p_4_text = isset($_POST['p_4_text'])? addslashes(trim($_POST['p_4_text'])) : '';

	$p_5_head = isset($_POST['p_5_head'])? addslashes(trim($_POST['p_5_head'])) : '';
	$p_5_text = isset($_POST['p_5_text'])? addslashes(trim($_POST['p_5_text'])) : '';

	$p_6_head = isset($_POST['p_6_head'])? addslashes(trim($_POST['p_6_head'])) : '';
	$p_6_text = isset($_POST['p_6_text'])? addslashes(trim($_POST['p_6_text'])) : '';

	$p_7_head = isset($_POST['p_7_head'])? addslashes(trim($_POST['p_7_head'])) : '';
	$p_7_text = isset($_POST['p_7_text'])? addslashes(trim($_POST['p_7_text'])) : '';

	$p_8_head = isset($_POST['p_8_head'])? addslashes(trim($_POST['p_8_head'])) : '';
	$p_8_text = isset($_POST['p_8_text'])? addslashes(trim($_POST['p_8_text'])) : '';

	$_SESSION['temp_fields']['top_1'] = $top_1;	
	$_SESSION['temp_fields']['top_2'] = $top_2;	
	$_SESSION['temp_fields']['top_3'] = $top_3;	
	$_SESSION['temp_fields']['p_1_head'] = $p_1_head;	
	$_SESSION['temp_fields']['p_1_text'] = $p_1_text;	
	$_SESSION['temp_fields']['p_2_head'] = $p_2_head;	
	$_SESSION['temp_fields']['p_2_text'] = $p_2_text;	
	$_SESSION['temp_fields']['p_3_head'] = $p_3_head;	
	$_SESSION['temp_fields']['p_3_text'] = $p_3_text;	
	$_SESSION['temp_fields']['p_4_head'] = $p_4_head;	
	$_SESSION['temp_fields']['p_4_text'] = $p_4_text;	
	$_SESSION['temp_fields']['p_5_head'] = $p_5_head;	
	$_SESSION['temp_fields']['p_5_text'] = $p_5_text;	
	$_SESSION['temp_fields']['p_6_head'] = $p_6_head;	
	$_SESSION['temp_fields']['p_6_text'] = $p_6_text;	
	$_SESSION['temp_fields']['p_7_head'] = $p_7_head;	
	$_SESSION['temp_fields']['p_7_text'] = $p_7_text;
	$_SESSION['temp_fields']['p_8_head'] = $p_8_head;	
	$_SESSION['temp_fields']['p_8_text'] = $p_8_text;	
	
	$stmt = $db->prepare("UPDATE home
						SET
						top_1 = ?
						,top_2 = ?
						,top_3 = ?						
						,p_1_head = ?
						,p_1_text = ? 												
						,p_2_head = ?
						,p_2_text = ? 						
						,p_3_head = ?
						,p_3_text = ? 						
						,p_4_head = ?
						,p_4_text = ? 						
						,p_5_head = ?
						,p_5_text = ? 
						,p_6_head = ?
						,p_6_text = ? 
						,p_7_head = ?
						,p_7_text = ? 
						,p_8_head = ?
						,p_8_text = ? 
						,img_1_id = ?
						,img_2_id = ?
						,img_3_id = ?
						,img_4_id = ?
						WHERE home_id = ?");
						
		//echo 'Error-1 UPDATE   '.$db->error;
		
	if(!$stmt->bind_param("sssssssssssssssssssiiiii"
						,$top_1
						,$top_2
						,$top_3
						,$p_1_head
						,$p_1_text									
						,$p_2_head
						,$p_2_text									
						,$p_3_head
						,$p_3_text								
						,$p_4_head
						,$p_4_text							
						,$p_5_head
						,$p_5_text						
						,$p_6_head
						,$p_6_text						
						,$p_7_head
						,$p_7_text
						,$p_8_head
						,$p_8_text
						,$img_1_id
						,$img_2_id
						,$img_3_id
						,$img_4_id
						,$_SESSION['home_id'])){
							
		echo 'Error-2 UPDATE   '.$db->error;
		
	}else{
		$stmt->execute();
		$stmt->close();				
		$msg = "Updated";
	}
	
	$seo_name	= 'home';
	$page	= 'home';
	$seo_name = (isset($_POST['seo_name']))? trim($_POST['seo_name']) : '';
	$seo_name = str_replace ('\'', '' , $seo_name);
	$seo_name = str_replace ('\"', '' , $seo_name);
	$seo_name = str_replace (' ', '-' , $seo_name);
	$title = (isset($_POST['title']))? trim(addslashes($_POST['title'])) : '';
	$keywords = (isset($_POST['keywords']))? trim(addslashes($_POST['keywords'])) : '';
	$description = (isset($_POST['description']))? trim(addslashes($_POST['description'])) : '';
	$page_heading = (isset($_POST['page_heading']))? trim(addslashes($_POST['page_heading'])) : '';
	
	require_once($real_root."/manage/cms/insert_page_seo.php");

}	

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
		
$sql = "SELECT * 
		FROM home 
		WHERE home_id = '".$_SESSION['home_id']."'";
$result = $dbCustom->getResult($db,$sql);	

if($result->num_rows > 0){
	$object = $result->fetch_object();
	$img_1_id = $object->img_1_id;
	$img_2_id = $object->img_2_id;
	$img_3_id = $object->img_3_id;
	$img_4_id = $object->img_4_id;
	
	$top_1 = $object->top_1;
	$top_2 = $object->top_2;
	$top_3 = $object->top_3;
	$p_1_head = $object->p_1_head;
	$p_1_text = $object->p_1_text;
	$p_2_head = $object->p_2_head;
	$p_2_text = $object->p_2_text;
	$p_3_head = $object->p_3_head; 
	$p_3_text = $object->p_3_text;
	$p_4_head = $object->p_4_head;
	$p_4_text = $object->p_4_text; 
	$p_5_head = $object->p_5_head;  
	$p_5_text = $object->p_5_text; 
	$p_6_head = $object->p_6_head;  
	$p_6_text = $object->p_6_text; 
	$p_7_head = $object->p_7_head;  
	$p_7_text = $object->p_7_text;
	$p_8_head = $object->p_8_head;  
	$p_8_text = $object->p_8_text;
		
}else{
	$top_1 = 'Designer closets up to 50% off';
	$top_2 = 'Our Pre-Assembly service reduces installation time to just 4-6 hours for a 10 x 10 closet';
	$top_3 = 'Perfect Fit Guarantee';
	$p_1_head = 'WHY CLOSETS TO GO';
	$p_1_text = 'We design every organizer based on your exact measurements and specifications; nothing is pre-made. We use only the finest wood panel products from Roseburg Forest Products Panolam, Flakeboard...';
	$p_2_head = 'YOU DESIGN';
	$p_2_text = 'Lorem ipsum dolor sit amet, consetetur gggggg  uuuuuu yyyyyyy...';
	$p_3_head = 'WE DESIGN'; 
	$p_3_text = 'dolor sit amet, consetetur zzzzz  xxxxxx  eeeeee';
	$p_4_head = 'CLOSETS TO GO - EASY PROCESS';
	$p_4_text = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit'; 
	$p_5_head = 'COMPANY';  
	$p_5_text = 'We manufacture all our closet organizers with top quality materials right here in the USA. And we\'ve been doing it nearly three decades.'; 
	$p_6_head = 'PRODUCTS';  
	$p_6_text = 'We design every organizer based on your exact measurements and specifications; nothing is pre-made. We use only the fin wood panel'; 
	$p_7_head = '';  
	$p_7_text = '';
	$p_8_head = '';  
	$p_8_text = '';
	$img_1_id=0;
	$img_2_id=0;
	$img_3_id=0;
	$img_4_id=0;

}


require_once($real_root."/manage/cms/get_seo_variables.php");

if(!isset($_SESSION['img_1_id'])) $_SESSION['img_1_id'] = $img_1_id;
if(!isset($_SESSION['img_2_id'])) $_SESSION['img_2_id'] = $img_2_id;
if(!isset($_SESSION['img_3_id'])) $_SESSION['img_3_id'] = $img_3_id;
if(!isset($_SESSION['img_4_id'])) $_SESSION['img_4_id'] = $img_4_id;

if(!isset($_SESSION['temp_fields']['top_1'])) $_SESSION['temp_fields']['top_1'] = $top_1;	
if(!isset($_SESSION['temp_fields']['top_2'])) $_SESSION['temp_fields']['top_2'] = $top_2;	
if(!isset($_SESSION['temp_fields']['top_3'])) $_SESSION['temp_fields']['top_3'] = $top_3;	
if(!isset($_SESSION['temp_fields']['p_1_head'])) $_SESSION['temp_fields']['p_1_head'] = $p_1_head;	
if(!isset($_SESSION['temp_fields']['p_1_text'])) $_SESSION['temp_fields']['p_1_text'] = $p_1_text;	
if(!isset($_SESSION['temp_fields']['p_2_head'])) $_SESSION['temp_fields']['p_2_head'] = $p_2_head;	
if(!isset($_SESSION['temp_fields']['p_2_text'])) $_SESSION['temp_fields']['p_2_text'] = $p_2_text;	
if(!isset($_SESSION['temp_fields']['p_3_head'])) $_SESSION['temp_fields']['p_3_head'] = $p_3_head;	
if(!isset($_SESSION['temp_fields']['p_3_text'])) $_SESSION['temp_fields']['p_3_text'] = $p_3_text;	
if(!isset($_SESSION['temp_fields']['p_4_head'])) $_SESSION['temp_fields']['p_4_head'] = $p_4_head;	
if(!isset($_SESSION['temp_fields']['p_4_text'])) $_SESSION['temp_fields']['p_4_text'] = $p_4_text;	
if(!isset($_SESSION['temp_fields']['p_5_head'])) $_SESSION['temp_fields']['p_5_head'] = $p_5_head;	
if(!isset($_SESSION['temp_fields']['p_5_text'])) $_SESSION['temp_fields']['p_5_text'] = $p_5_text;	
if(!isset($_SESSION['temp_fields']['p_6_head'])) $_SESSION['temp_fields']['p_6_head'] = $p_6_head;	
if(!isset($_SESSION['temp_fields']['p_6_text'])) $_SESSION['temp_fields']['p_6_text'] = $p_6_text;	
if(!isset($_SESSION['temp_fields']['p_7_head'])) $_SESSION['temp_fields']['p_7_head'] = $p_7_head;	
if(!isset($_SESSION['temp_fields']['p_7_text'])) $_SESSION['temp_fields']['p_7_text'] = $p_7_text;
if(!isset($_SESSION['temp_fields']['p_8_head'])) $_SESSION['temp_fields']['p_8_head'] = $p_8_head;	
if(!isset($_SESSION['temp_fields']['p_8_text'])) $_SESSION['temp_fields']['p_8_text'] = $p_8_text;

require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>
<script src="https://cdn.tiny.cloud/1/iyk23xxriyqcd2gt44r230a2yjinya99cx1kd3tk9huatz50/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
tinymce.init({
	selector: 'textarea',
	plugins: 'advlist link image lists code',
	forced_root_block : false
});

function does_exist(ele){
    if (ele !== undefined) {
        return 1;
    }else{
		return 0;
	}
}
	
function get_query_str(){

	var query_str = '';

	if(does_exist(document.edit_item.floor_size)){
		query_str += "&floor_size="+document.edit_item.floor_size.value;
	}
	
	return query_str;
}

function set_session(){
	
	
}

</script>
</head>
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
		<h1>Home Page</h1>

		<form name="form" action="<?php echo SITEROOT.'manage/cms/pages/home.php' ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="update_home" value="1">     
            <input type="hidden" name="home_id" value="<?php echo $_SESSION['home_id']; ?>">     

<a class="btn" style="float:left; margin:30px;" href="<?php echo SITEROOT;?>manage/cms/pages/page.php" >Cancel &amp; Go Back</a>
<input class="btn btn-primary" style="float:left; margin:30px;" type="submit" name="submit" value="Save Changes">			
<table cellpadding="10" width="100%" border="1">

<tr>
<td>
<?php
echo $_SESSION['img_1_id'];
$sql = "SELECT file_name FROM image 
WHERE img_id = '".$_SESSION['img_1_id']."'";
$img_res = $dbCustom->getResult($db,$sql);							
if($img_res->num_rows){
	$img_obj = $img_res->fetch_object();
	$img_str = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cms/".$img_obj->file_name;
	echo "<img width='100%' src='".$img_str."'>";	
}
?>
</td>
<td>
<?php 
$_SESSION['crop_n']=1;
$url_str = SITEROOT."manage/upload-pre-crop.php";
$url_str .= "?ret_page=home";
$url_str .= "&ret_path=cms/pages";
$url_str .= "&ret_dir=cms";
$url_str .= "&img_type=cms_img_1";
$url_str .= "&crop_n=1";

?>
<a style="margin:30px; color:#52ffff; 16px;" 
onClick="set_session();" href="<?php echo $url_str; ?>" class="btn btn-info">Upload Page Image One</a>
</td>
<td>
img_1_id
<br />
<?php echo $_SESSION['img_1_id']; ?>
<input type="hidden" name="img_1_id" 
value="<?php echo $_SESSION['img_1_id']; ?>">
</td>
</tr>

<tr>
<td>
<?php
echo $_SESSION['img_2_id'];
$sql = "SELECT file_name FROM image 
WHERE img_id = '".$_SESSION['img_2_id']."'";
$img_res = $dbCustom->getResult($db,$sql);							
if($img_res->num_rows){
	$img_obj = $img_res->fetch_object();
	$img_str = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cms/".$img_obj->file_name;
	echo "<img width='100%' src='".$img_str."'>";	
}
?>
</td>
<td><?php 
$url_str = SITEROOT."manage/upload-pre-crop.php";
$url_str .= "?ret_page=home";
$url_str .= "&ret_path=cms/pages";
$url_str .= "&ret_dir=cms";
$url_str .= "&img_type=cms_img_2";
$url_str .= "&crop_n=1";
$_SESSION['crop_n']=1;

?>
<a style="margin:30px; color:#52ffff; 16px;" 
onClick="set_session()" href="<?php echo $url_str; ?>" class="btn btn-info">Upload Page Image Two</a>
</td>
<td>
img_2_id
<br />
<?php echo $_SESSION['img_2_id']; ?>
<input type="hidden" name="img_2_id" 
value="<?php echo $_SESSION['img_2_id']; ?>">
</td>
</tr>


<tr>
<td>
<?php
echo $_SESSION['img_3_id'];
$sql = "SELECT file_name FROM image 
WHERE img_id = '".$_SESSION['img_3_id']."'";
$img_res = $dbCustom->getResult($db,$sql);							
if($img_res->num_rows){
	$img_obj = $img_res->fetch_object();
	$img_str = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cms/".$img_obj->file_name;
	echo "<img width='100%' src='".$img_str."'>";	
}
?>
</td>

<td>
<?php 
$url_str = SITEROOT."manage/upload-pre-crop.php";
$url_str .= "?ret_page=home";
$url_str .= "&ret_path=cms/pages";
$url_str .= "&ret_dir=cms";
$url_str .= "&img_type=cms_img_3";
$url_str .= "&crop_n=1";
?>
<a style="margin:30px; color:#52ffff; 16px;" 
onClick="set_session()" href="<?php echo $url_str; ?>" class="btn btn-info">Upload Page Image Three</a>
</td>

<td>
<?php echo $_SESSION['img_3_id']; ?>
<input type="hidden" name="img_3_id" 
value="<?php echo $_SESSION['img_3_id']; ?>">
</td>
</tr>

<tr>
<td>
<?php
echo $_SESSION['img_4_id'];
$sql = "SELECT file_name FROM image 
WHERE img_id = '".$_SESSION['img_4_id']."'";
$img_res = $dbCustom->getResult($db,$sql);							
if($img_res->num_rows){
	$img_obj = $img_res->fetch_object();
	$img_str = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cms/".$img_obj->file_name;
	echo "<img width='100%' src='".$img_str."'>";	
}
?>
</td>
<td>
<?php 
$url_str = SITEROOT."manage/upload-pre-crop.php";
$url_str .= "?ret_page=home";
$url_str .= "&ret_path=cms/pages";
$url_str .= "&ret_dir=cms";
$url_str .= "&img_type=cms_img_4";
$url_str .= "&crop_n=1";

?>
<a style="margin:30px; color:#52ffff; 16px;" 
onClick="set_session()" href="<?php echo $url_str; ?>" class="btn btn-info">Upload Page Image Four</a>
</td>
<td>
img_4_id
<br />
<?php echo $_SESSION['img_4_id']; ?>
<input type="hidden" name="img_4_id" 
value="<?php echo $_SESSION['img_4_id']; ?>">
</td>
</tr>

<tr>
<td width="5%">top_1</td>
<td><input type="text" name="top_1"  style="width:96%" value="<?php echo stripslashes($_SESSION['temp_fields']['top_1']); ?>"></td>
</tr>

<tr>
<td>top_2</td>
<td><input type="text" name="top_2"  style="width:96%" value="<?php echo stripslashes($_SESSION['temp_fields']['top_2']); ?>"></td>
</tr>

<tr>
<td>top_3</td>
<td><input type="text" name="top_3"  style="width:96%" value="<?php echo stripslashes($_SESSION['temp_fields']['top_3']); ?>"></td>
</tr>

<tr>
<td>p_1_head</td>
<td><input type="text" name="p_1_head"  style="width:96%" value="<?php echo stripslashes($_SESSION['temp_fields']['p_1_head']); ?>"></td>
</tr>

<tr>
<td>p_1_text</td>
<td><textarea rows="28" id="p_1_text" name="p_1_text"><?php echo stripslashes($_SESSION['temp_fields']['p_1_text']); ?></textarea></td>
</tr>

<tr>
<td>p_2_head</td>
<td><input type="text" name="p_2_head"  style="width:96%" value="<?php echo stripslashes($_SESSION['temp_fields']['p_2_head']); ?>"></td>
</tr>

<tr>
<td>p_2_text</td>
<td><textarea rows="28" id="p_2_text" name="p_2_text"><?php echo stripslashes($_SESSION['temp_fields']['p_2_text']); ?></textarea></td>
</tr>
<tr>
<td>p_3_head</td>
<td><input type="text" name="p_3_head"  style="width:96%" value="<?php echo stripslashes($_SESSION['temp_fields']['p_3_head']); ?>"></td>
</tr>
<tr>
<td>p_3_text</td>
<td><textarea rows="28" id="p_3_text" name="p_3_text"><?php echo stripslashes($_SESSION['temp_fields']['p_3_text']); ?></textarea></td>
</tr>

<tr>
<td>p_4_head</td>
<td><input type="text" name="p_4_head"  style="width:96%" value="<?php echo stripslashes($_SESSION['temp_fields']['p_4_head']); ?>"></td>
</tr>

<tr>
<td>p_4_text</td>
<td><textarea rows="28" id="p_4_text" name="p_4_text"><?php echo stripslashes($_SESSION['temp_fields']['p_4_text']); ?></textarea></td>
</tr>
<tr>
<td>p_5_head</td>
<td><input type="text" name="p_5_head"  style="width:96%" value="<?php echo stripslashes($_SESSION['temp_fields']['p_5_head']); ?>"></td>
</tr>
<tr>
<td>p_5_text</td>
<td><textarea rows="28" id="p_5_text" name="p_5_text"><?php echo stripslashes($_SESSION['temp_fields']['p_5_text']); ?></textarea></td>
</tr>
<td>p_6_head</td>
<td><input type="text" name="p_6_head"  style="width:96%" value="<?php echo stripslashes($_SESSION['temp_fields']['p_6_head']); ?>"></td>
</tr>
<tr>
<td>p_6_text</td>
<td><textarea rows="28" id="p_6_text" name="p_6_text"><?php echo stripslashes($_SESSION['temp_fields']['p_6_text']); ?></textarea></td>
</tr>
<tr>
<td>p_7_head</td>
<td><input type="text" name="p_7_head"  style="width:96%" value="<?php echo stripslashes($_SESSION['temp_fields']['p_7_head']); ?>"></td>
</tr>
<tr>
<td>p_7_text</td>
<td><textarea rows="28" id="p_7_text" name="p_7_text"><?php echo stripslashes($_SESSION['temp_fields']['p_7_text']); ?></textarea></td>
</tr>

<tr>
<td>p_8_head</td>
<td><input type="text" name="p_8_head"  style="width:96%" value="<?php echo stripslashes($_SESSION['temp_fields']['p_8_head']); ?>"></td>
</tr>
<tr>
<td>p_8_text</td>
<td><textarea rows="28" id="p_8_text" name="p_8_text"><?php echo stripslashes($_SESSION['temp_fields']['p_8_text']); ?></textarea></td>
</tr>
</table>

<?php				
require_once("edit_page_seo.php"); 
?>								

</form>
		
	</div>
	<p class="clear"></p>
	<?php
	require_once($real_root.'/manage/admin-includes/manage-footer.php');
	?>
</div>

<div class="disabledMsg">
	<p>Sorry, this item can't be deleted or inactive.</p>
</div>

</body>
</html>



<!-- New Delete Dialogue -->
<!--
<div id="content-delete" class="confirm-content">
	<h3>Are you sure you want to delete this banner?</h3>
	<form name="del_banner" action="home.php" method="post" target="_top">
		<input id="del_banner_id" class="itemId" type="hidden" name="del_banner_id" value='' />
		<a class="btn btn-large dismiss">No, Cancel</a>
		<button class="btn btn-danger btn-large" name="del_banner" type="submit" >Yes, Delete</button>
	</form>
</div>
<div id="content-delete" class="confirm-content">
	<h3>Are you sure you want to delete this submit button?</h3>
	<form name="del_submit_button" action="home.php" method="post" target="_top">
		<input id="del_submit_button_id" class="itemId2" type="hidden" name="del_submit_button_id" value='' />
		<a class="btn btn-large dismiss">No, Cancel</a>
		<button class="btn btn-danger btn-large" name="del_submit_button" type="submit" >Yes, Delete</button>
	</form>
</div>
-->
