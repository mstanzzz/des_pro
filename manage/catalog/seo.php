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
$page_title = "SEO Settings: Static Content";
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
	$canonical = SITEROOT."/".$_SESSION['global_url_word'].$seo_name.'.html';
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

$sortby = (isset($_GET['sortby'])) ? $_GET['sortby'] : '';
$a_d = (isset($_GET['a_d'])) ? $_GET['a_d'] : 'a';
$pagenum = (isset($_GET['pagenum'])) ? addslashes($_GET['pagenum']) : 0;
$truncate = (isset($_GET['truncate'])) ? addslashes($_GET['truncate']) : 1;

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
        require_once($real_root.'/manage/admin-includes/manage-content-t-category.php');
        require_once($real_root."/manage/admin-includes/seo-section-tabs.php");
		?>
			<div class="page_actions">
				<div class="search_bar">
                <form name="search_form" action="seo.php" method="post" enctype="multipart/form-data">
					<input type="text" name="product_search" class="searchbox" placeholder="Find a Page" />
					<button type="submit" class="btn btn-primary btn-large" value="search"><i class="icon-search icon-white"></i></button>
                </form>
				</div>
			</div>
        	<div class="data_table">
            <?php
	        $db = $dbCustom->getDbConnect(SITE_N_DATABASE);
			$sql = "SELECT * FROM page_seo 
					WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";		
			if(isset($_POST["product_search"])){
				$search_str = trim(addslashes($_POST["product_search"]));
				$sql .= " AND (page_name like '%".$search_str."%' || seo_name like '%".$search_str."%')";
			}
			$nmx_res = $dbCustom->getResult($db,$sql);
			$total_rows = $nmx_res->num_rows;
			$rows_per_page = 45;
			$last = ceil($total_rows/$rows_per_page); 
			if ($pagenum < 1){ 
				$pagenum = 1; 
			}elseif ($pagenum > $last){ 
				$pagenum = $last; 
			} 
			$limit = ' limit ' .($pagenum - 1) * $rows_per_page.','.$rows_per_page;
			if($sortby != ''){
				if($sortby == 'name'){
					if($a_d == 'd'){
						$sql .= " ORDER BY page_name DESC".$limit;
					}else{
						$sql .= " ORDER BY page_name".$limit;	
					}
				}
				if($sortby == 'seo_name'){
					if($a_d == 'd'){
						$sql .= " ORDER BY seo_name DESC".$limit;
					}else{
						$sql .= " ORDER BY seo_name".$limit;		
					}
				}
				if($sortby == 'title'){
					if($a_d == 'd'){
						$sql .= " ORDER BY title DESC".$limit;
					}else{
						$sql .= " ORDER BY title".$limit;		
					}
				}
			}else{
				$sql .= " ORDER BY page_name".$limit;					
			}
			$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
			$result = $dbCustom->getResult($db,$sql);			
			if($total_rows > $rows_per_page){	
                echo getPagination($total_rows, $rows_per_page, $pagenum, $truncate, $last, "cms/seo/seo.php", $sortby, $a_d);
			}
			?>
			<br />
            <?php require_once($real_root."/manage/admin-includes/tablesort.php"); ?>
			<table cellpadding="10" cellspacing="0">
			<thead>
			<tr>
   			<th <?php addSortAttr('name',true); ?>>
            Page Name
            <i <?php addSortAttr('name',false); ?>></i>
            </th>
   			<th <?php addSortAttr('seo_name',true); ?>>
            Seo Page Name
            <i <?php addSortAttr('seo_name',false); ?>></i>
            </th>
   			<th <?php addSortAttr('title',true); ?>>
            Meta Title
            <i <?php addSortAttr('title',false); ?>></i>
            </th>
			<th><?php if ($_SESSION['is_ssl']) echo "ssl"; ?></th>
			<th width="13%">Edit</th>
			</tr>
			</thead>
			<?php
			while($row = $result->fetch_object()) {
				$block = "<tr>";
				$block .= "<td>".$row->page_name."</td>";
				$block .= "<td>".$row->seo_name."</td>";
				$title = ($row->title != '')? $row->title : "Not Set"; 
				$block .= "<td valign='top'>".$title."</td>";
				$ssl = ($row->mssl)? "<td><strong>ssl</strong></td>" : "<td></td>";
				$block .= $ssl;
				$url_str = "edit-seo.php";
				$url_str .= "?page_seo_id=".$row->page_seo_id;						
				$url_str .= "&pagenum=".$pagenum;
				$url_str .= "&sortby=".$sortby;
				$url_str .= "&a_d=".$a_d;
				$url_str .= "&truncate=".$truncate;
				$block .= "<td><a class='btn btn-primary fancybox fancybox.iframe' 
						href='".$url_str."'><i class='icon-cog icon-white'></i> Edit</a></td>";
				echo $block;
			}
			?>
			</table>
			<?php
            if($total_rows > $rows_per_page){
                echo getPagination($total_rows, $rows_per_page, $pagenum, $truncate, $last, "cms/seo/seo.php", $sortby, $a_d);
			}
			?>


			</div>
		
	</div>
	<p class="clear"></p>
	<?php 
	require_once($real_root.'/manage/admin-includes/manage-footer.php');
	?>
</div>
</body>
</html>
