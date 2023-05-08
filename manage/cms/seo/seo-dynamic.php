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

$page_title = "SEO Settings: Dynamic Content";
$page_group = "seo";
$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';

if(isset($_POST['edit_seo'])){

	$page_seo_id = (isset($_POST["page_seo_id"]))? $_POST["page_seo_id"] : 0;	
	
	$seo_name  = trim(addslashes($_POST['seo_name']));

	$page_name = (isset($_POST['page_name'])) ? trim(addslashes($_POST['page_name'])) : ''; 
	$page_heading = (isset($_POST['page_heading'])) ? trim(addslashes($_POST['page_heading'])) : ''; 

	$title = (isset($_POST['title'])) ? trim(addslashes($_POST['title'])) : ''; 
	$keywords = (isset($_POST['keywords'])) ? trim(addslashes($_POST['keywords'])) : ''; 
	$description = (isset($_POST['description'])) ? trim(addslashes($_POST['description'])) : ''; 

	$costco_title = (isset($_POST['costco_title'])) ? trim(addslashes($_POST['costco_title'])) : ''; 
	$costco_keywords = (isset($_POST['costco_keywords'])) ? trim(addslashes($_POST['costco_keywords'])) : '';  
	$costco_description = (isset($_POST['costco_description'])) ? trim(addslashes($_POST['costco_description'])) : ''; 

	$template = (isset($_POST['template'])) ? trim(addslashes($_POST['template'])) : ''; 

	$mssl = (isset($_POST['mssl']))? $_POST['mssl'] : 0; 
	$ret_page = (isset($_POST['ret_page'])) ? trim(addslashes($_POST['ret_page'])) : ''; 

	
	//$canonical = $_POST['canonical'];
	
	
	$canonical = SITEROOT."/".$_SESSION['global_url_word'].$seo_name.'.html';
	
	//echo $canonical;
	
	/************* SELECT seo_name where profile-account-id for already used for another page_name **********/
	// ********* check if new seo_name is showroom, showroom-product, product, shop, price-range, brand. Cannot use these

	$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
	$sql = sprintf("SELECT page_name 
				FROM page_seo
				WHERE seo_name = '%s'
				AND page_seo_id != '%u'
				AND profile_account_id = '%u'",
				$seo_name, $page_seo_id, $_SESSION['profile_account_id']);
	$result = $dbCustom->getResult($db,$sql);
	
	
	if($result->num_rows > 0){
		$object = $result->fetch_object();
		$msg = "This url page name already exist for the".$object->page_name." page. <a class='btn btn-primary fancybox fancybox.iframe' href='".$ret_page.".php?page_seo_id=".$page_seo_id."'>Try Again</a>";		
	}else{
		
		$sql = sprintf("UPDATE page_seo 
				SET title = '%s'
				,keywords  = '%s'
				,description = '%s'
				,costco_title = '%s'
				,costco_keywords  = '%s'
				,costco_description = '%s'
				,mssl = '%u'
				,page_heading = '%s'
				,seo_name = '%s' 
				,template = '%s'
				,canonical = '%s'
				WHERE page_seo_id = '%u'", 
				$title, $keywords, $description, $costco_title, $costco_keywords, $costco_description, $mssl, $page_heading, $seo_name, $template, $canonical, $page_seo_id);
		$result = $dbCustom->getResult($db,$sql);
		
		$msg = "Changes Saved.";
		$page = $page_name;
		
		require_once($real_root."/manage/cms/insert_page_breadcrumb.php");
	}
}
unset($_SESSION['page_bc_array']);
unset($_SESSION['bc_page_title']);
unset($_SESSION['paging']);

require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>
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
		
		require_once($real_root."/manage/admin-includes/class.admin_bread_crumb.php");	
		$bread_crumb = new AdminBreadCrumb;
		$bread_crumb->reSet();
		$bread_crumb->add("CMS", SITEROOT."manage/cms/cms-landing.php");
		$bread_crumb->add("SEO", SITEROOT."manage/cms/seo/seo.php");
		$bread_crumb->add("SEO Dynamic", '');
        echo $bread_crumb->output();

        require_once($real_root."/manage/admin-includes/seo-section-tabs.php");
        $db = $dbCustom->getDbConnect(SITE_N_DATABASE);
		?>
		<div class="alert alert-info">
		    Explaination about how dynamic pages work with user input to meta tags.
		</div>
    
    
<table cellpadding="10" cellspacing="0" border="1" width="90%">
<thead>
<tr>
<td width="40%">Page Url</td>
<td width="40%">Page Title</td>
<td></td>
</tr>
<?php
					$sql = "SELECT * FROM page_seo 
					WHERE profile_account_id = '".$_SESSION['profile_account_id']."'		
					AND (page_name = 'item-details'
						OR page_name = 'showroom-details'
						OR page_name = 'shop'											
						OR page_name = 'showroom'
						OR page_name = 'checkout'
						OR page_name = 'shopping-cart'
						)
					ORDER BY page_name";
					
					$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
			$result = $dbCustom->getResult($db,$sql);					


while($row = $result->fetch_object()) {
	$block = "<tr>";
	$block .= "<td>".$row->page_name."</td>";
	$block .= "<td valign='top'>".$row->title."</td>";
	$url_str = "edit-seo-dynamic.php";
	$url_str .= "?page_seo_id=".$row->page_seo_id;						
	$block .= "<td valign='top'><a class='btn btn-primary fancybox fancybox.iframe' 
			href='".$url_str."'><i class='icon-cog icon-white'></i> Edit</a></td>";
	echo $block;
}
?>
</table>
		
	</div>
	<p class="clear"></p>
</div>
</body>
</html>
