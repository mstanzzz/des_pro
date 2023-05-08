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
$pages = new Pages;
unset($_SESSION['img_id']);
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';

if(isset($_POST["add_page"])){
	$page_name = trim(getUrlText($_POST['page_name']));
	$seo_name = trim(getUrlText($_POST['seo_name']));
	if($page_name == ''){
		$page_name = $seo_name; 
	}
	if($seo_name == ''){
		$seo_name = $page_name; 
	}
	$sql = sprintf("SELECT added_page_id 
		FROM added_page 
		WHERE page_name = '%s'", $page_name);
	$result = $dbCustom->getResult($db,$sql);
	if($result->num_rows > 0){
		$object = $result->fetch_object();
		echo "This page already exists you can <a href='../custom-pages/added-page.php?added_page_id=".$object->added_page_id."'> edit it here <a>";
	}	
	$content1 = trim(addslashes($_POST["content1"])); 
	$title = trim(addslashes($_POST['title']));
	$keywords = trim(addslashes($_POST['keywords']));
	$description = trim(addslashes($_POST['description']));
	$page_heading = trim(addslashes($_POST["page_heading"]));
	$sql = sprintf("INSERT INTO added_page (content1, page_name, page_title, profile_account_id) VALUES ('%s','%s','%s','%u')", 
	$content1, $page_name, $page_heading, $_SESSION['profile_account_id']);
	$result = $dbCustom->getResult($db,$sql);
	$added_page_id = $db->insert_id;
	$sql = "DELETE FROM page_seo 
	WHERE page_name = '".$page_name."'
	AND profile_account_id = '". $_SESSION['profile_account_id']."'";
	$result = $dbCustom->getResult($db,$sql);
	$sql = sprintf("INSERT INTO page_seo 
	(seo_name, title, keywords, description, mssl, page_heading, added_page_id, profile_account_id, page_name) 
	VALUES 
	('%s','%s','%s','%s','%u','%s','%u','%u','%s')", 
	$seo_name, $title, $keywords, $description, $mssl, $page_heading, $added_page_id, $_SESSION['profile_account_id'], $page_name);
	$result = $dbCustom->getResult($db,$sql);
	$page = $page_name;
	require_once($real_root."/manage/cms/insert_page_breadcrumb.php");
	$msg = "Your change is now live.";		
	unset($_SESSION["added_pages"]);
}


if(isset($_POST["edit_added_page"])){
	$page_name = trim(getUrlText($_POST['page_name']));
	$seo_name = trim(getUrlText($_POST['seo_name']));
	$added_page_id = $_POST["added_page_id"];
	$original_page_name = $_POST['original_page_name'];
	if($page_name == ''){
		$page_name = $seo_name; 
	}
	if($seo_name == ''){
		$seo_name = $page_name; 
	}
	if($original_page_name != $page_name){
		$sql = sprintf("SELECT added_page_id 
			FROM added_page 
			WHERE page_name = '%s'", $original_page_name);
		$result = $dbCustom->getResult($db,$sql);
		if($result->num_rows > 0){
			$object = $result->fetch_object();
			echo "This page already exists you can <a href='../custom-pages/added-page.php?added_page_id=".$object->added_page_id."'> edit it here <a>";
			exit;		
		}
	}
	$content1 = trim(addslashes($_POST["content1"]));
	$meta_title = (isset($_POST["meta_title"])) ? trim(addslashes($_POST["meta_title"])) : '';
	$keywords = (isset($_POST["keywords"])) ? trim(addslashes($_POST['keywords'])) : '';
	$description = (isset($_POST["description"])) ? trim(addslashes($_POST['description'])) : '';
	$page_heading = (isset($_POST["page_heading"])) ? trim(addslashes($_POST["page_heading"])) : '';
	$hide = (isset($_POST["hide"]))? $_POST["hide"] : 0;
	$sql = sprintf("UPDATE added_page SET content1 = '%s' ,last_update = '%u', page_name = '%s', page_title = '%s', hide = '%u' 
	WHERE added_page_id = '%u'", 
	$content1, time(), $page_name, $page_heading, $hide, $added_page_id);
	$result = $dbCustom->getResult($db,$sql);
	$sql = "DELETE FROM page_seo 
	WHERE page_name = '".$page_name."'
	AND profile_account_id = '". $_SESSION['profile_account_id']."'";
	$result = $dbCustom->getResult($db,$sql);
	$sql = sprintf("INSERT INTO page_seo 
	(seo_name, title, keywords, description, mssl, page_heading, added_page_id, profile_account_id, page_name) 
	VALUES 
	('%s','%s','%s','%s','%u','%s','%u','%u','%s')", 
	$seo_name, $meta_title, $keywords, $description, $mssl, $page_heading, $added_page_id, $_SESSION['profile_account_id'], $page_name);
	$result = $dbCustom->getResult($db,$sql);
	$page = $page_name;
	require_once($real_root."/manage/cms/insert_page_breadcrumb.php");
	$msg = "Your change is now live.";		
}
if(isset($_POST["del_page"])){
		$added_page_id = $_POST["del_page_id"];
		$sql = sprintf("SELECT page_seo_id 
		FROM page_seo 
		WHERE added_page_id = '%u'", $added_page_id);
		$result = $dbCustom->getResult($db,$sql);
		if($result->num_rows > 0){
			$object = $result->fetch_object();
			$page_seo_id = $object->page_seo_id;
			$sql = sprintf("DELETE FROM bread_crumb WHERE page_seo_id = '%u'", $page_seo_id);
			$result = $dbCustom->getResult($db,$sql);
			$sql = sprintf("DELETE FROM navbar_submenu_label WHERE page_seo_id = '%u'", $page_seo_id);
			$result = $dbCustom->getResult($db,$sql);
		}
		$sql = sprintf("DELETE FROM page_seo WHERE added_page_id = '%u'", $added_page_id);
		$result = $dbCustom->getResult($db,$sql);
		$sql = sprintf("DELETE FROM added_page WHERE added_page_id = '%u'", $added_page_id);
		$result = $dbCustom->getResult($db,$sql);
		if(!$result){
			die(mysql_error());
		}else{
			$msg = "Your change is now live.";		
		}
	unset($_SESSION["added_pages"]);
}

if(isset($_POST["set_active_design_services"])){
	$actives = (isset($_POST["active"])) ? $_POST["active"] : array();  
	$sql = "UPDATE page_seo SET active = '0' 
			WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
	$result = $dbCustom->getResult($db,$sql);
	foreach($actives as $value){
		$sql = "UPDATE page_seo SET active = '1' WHERE page_seo_id = '".$value."'";
		$res = $dbCustom->getResult($db,$sql);
	}
}

if(isset($_POST['set_active'])){
	$actives = (isset($_POST["active"])) ? $_POST["active"] : array();  
	$sql = "UPDATE page_seo SET active = '0' 
			WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
	$result = $dbCustom->getResult($db,$sql);
	foreach($actives as $value){
		$sql = "UPDATE page_seo SET active = '1' WHERE page_seo_id = '".$value."'";
		$res = $dbCustom->getResult($db,$sql);
	}
	$optionals = (isset($_POST["optional"])) ? $_POST["optional"] : array();  
	$sql = "UPDATE page_seo SET optional = '0'
			WHERE page_name != 'email-design'
			AND page_name != 'in-home-consultation'
			AND page_name != 'we-design-fax'
			AND page_name != 'design-online'
			AND page_name != 'design'";
	$result = $dbCustom->getResult($db,$sql);
	foreach($optionals as $value){
		$sql = "UPDATE page_seo SET optional = '1' WHERE page_name = '".$value."'";
		$result = $dbCustom->getResult($db,$sql);
		
	}
	$msg = "Changes Saved.";
}

$sql = "UPDATE page_seo 
		SET available = '1' 
		WHERE optional = '0'";
//$result = $dbCustom->getResult($db,$sql);
$sql = "UPDATE page_seo
		SET active = '0'
		WHERE available = '0'";
//$result = $dbCustom->getResult($db,$sql);


unset($_SESSION['temp_fields']);
unset($_SESSION['page_bc_array']);
unset($_SESSION['bc_page_title']);
unset($_SESSION['temp_home_fields']);
unset($_SESSION['installation_id']);
unset($_SESSION['home_id']);
unset($_SESSION['new_img_id']);
unset($_SESSION['img_id']);
unset($_SESSION['cat_id']);
unset($_SESSION['temp_cat']);
unset($_SESSION['uploaded_file_id']);
unset($_SESSION['guides_tips_page_id']);
unset($_SESSION['faq_page_id']);
unset($_SESSION['about_us_id']);
unset($_SESSION['discount_id']);
unset($_SESSION['downloads_page_id']);
unset($_SESSION['we_design_fax_id']);
unset($_SESSION['feedback_page_id']);
unset($_SESSION['home_id']);
unset($_SESSION['in_home_consultation_id']);
unset($_SESSION['installation_id']);
unset($_SESSION['policy_page_id']);
unset($_SESSION['process_page_id']);
unset($_SESSION['shipping_term_id']);
unset($_SESSION['shipping_time_id']);
unset($_SESSION['testimonial_page_id']);
unset($_SESSION['contact_us_id']);
unset($_SESSION['keyword_landing_id']);
unset($_SESSION['pages']);

//page_name
$sql = "DELETE FROM page_seo
WHERE profile_account_id = '0'";

$sql = "SELECT * FROM page_seo
WHERE page_name = 'we-design'";
//$result = $dbCustom->getResult($db,$sql);			
//echo $result->num_rows;
//echo "<br />"; 
//echo "<br />"; 
	
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
		<h1>Pages</h1>
		<?php 
    	$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
		$page_title = "Pages";
		require_once($real_root."/manage/admin-includes/class.admin_bread_crumb.php");	
		$bread_crumb = new AdminBreadCrumb;
		$bread_crumb->reSet();
		$bread_crumb->add(" | CMS", "../cms-landing.php");
		$bread_crumb->add($page_title, '');
        echo $bread_crumb->output();
		if($msg != ''){ ?>
		<div class="alert alert-success">
			<h4><?php echo $msg; ?></h4>
		</div>
		<?php } ?>
<form name="form" action="page.php" method="post">
<input type="hidden" name="set_active" value="1">
<div class="alert alert-info"> 
<em><strong>Note:</strong> Added pages are <strong>inactive (off)</strong> until set to <strong>show</strong> by an Admin user.</em> </div>

<?php if($admin_access->cms_level > 1){ ?>
<div class="page_actions">

<a class="btn btn-large btn-primary" href="">
<!-- ../custom-pages/add-page-landing.php -->
Add New Page 
</a>

<a onClick="regularSubmit();" href="#" class="btn btn-success btn-large"><i class="icon-ok icon-white"></i> Save Changes </a>
</div>

<?php } ?>

<div style="border:solid;">
<table cellpadding="15" cellspacing="0" width="100%">
<thead>
<tr>
<th width="30%">Page Name</th>
<th>Page URL</th>
<?php if(getProfileType($dbCustom) == "master"){ ?>
<th width="13%">Optional</th>
<?php } ?>
<th width="13%">Edit</th>
</tr>
</thead>
<?php
$active_only=1;
$page_list_array = $pages->getPageListArray($_SESSION['profile_account_id'],$active_only);
$block = '';				
foreach($page_list_array as $page_v){
?>
<tr> 
<td>
<?php 
echo ucwords($page_v['page_name']); 												
?>
</td>
<td><?php echo $page_v['url']; ?></td>
<td>
<?php
echo "<a class='btn btn-primary'"; 
echo "href='".$page_v['page_manage_path']."'>"; 
echo "Edit</a>";

//echo "page_manage_path ".$page_v['page_manage_path']."</a>";
?>
</td>
<td>
</tr>
<?php } ?>
</table>
</div>
</form>
<a onClick="regularSubmit();" href="#" class="btn btn-success btn-large"><i class="icon-ok icon-white"></i> Save Changes </a>
</div>
<p class="clear"></p>
<?php
require_once($real_root.'/manage/admin-includes/manage-footer.php');
?>
</div>

<div id="content-delete" class="confirm-content">
	<h3>Are you sure you want to delete this page?</h3>
	<form name="del_page_form" action="page.php" method="post" target="_top">
		<input id="del_page_id" class="itemId" type="hidden" name="del_page_id" value='' />
		<a class="btn btn-large dismiss">No, Cancel</a>
		<button class="btn btn-danger btn-large" name="del_page" type="submit" >Yes, Delete</button>
	</form>
</div>
<div class="disabledMsg">
	<p>Sorry, function is disabled.</p>
</div>
</body>
</html>