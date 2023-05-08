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
	$ret_page = (isset($_POST['ret_page'])) ? trim(addslashes($_POST['ret_page'])) : ''; 
		
	echo "page_seo_id: ".$page_seo_id;
	echo "<br />";
	echo "seo_name: ".$seo_name;
	echo "<br />";
	echo "page_name: ".$page_name;	
	echo "<br />";
	echo "page_heading: ".$page_heading;	
	echo "<br />";
	echo "title: ".$title;	
	echo "<br />";
	echo "keywords: ".$keywords;	
	echo "<br />";
	echo "description: ".$description;	
	echo "<br />";
	echo "ret_page: ".$ret_page;	
	echo "<br />";

	$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
	$sql="UPDATE page_seo 
		SET title = '".$title."'
		,keywords  = '".$keywords."'
		,description = '".$description."'
		,page_heading = '".$page_heading."'
		,seo_name = '".$seo_name."' 
		WHERE page_seo_id = '".$page_seo_id."'";
	$result = $dbCustom->getResult($db,$sql);		
	//echo $sql;	
	
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
if($pagenum < 1){ 
	$pagenum = 1; 
}elseif ($pagenum > $last){ 
	$pagenum = $last; 
} 
$limit = ' limit ' .($pagenum - 1) * $rows_per_page.','.$rows_per_page;
$sql .= " ORDER BY page_name".$limit;					
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$result = $dbCustom->getResult($db,$sql);			
if($total_rows > $rows_per_page){	
echo getPagination($total_rows, $rows_per_page, $pagenum, $truncate, $last, "cms/seo/seo.php", $sortby, $a_d);
}
?>
<table cellpadding="6" cellspacing="6" style="width:100%;" >
<tr style="height:60px; background-color:#ababab; color:white; font-size:1.4em;">
	<td width="30%;">Page url</td>
	<td width="30%;">Seo Page url</td>
	<td width="30%;">Meta Title</td>
	<td></td>
</tr>
<?php
while($row = $result->fetch_object()) {
				$block = "<tr>";
				$block .= "<td>".$row->page_name."</td>";
				$block .= "<td>".$row->seo_name."</td>";
				$block .= "<td valign='top'>".$row->title."</td>";
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
	<p class="clear"></p>
	<?php 
	require_once($real_root.'/manage/admin-includes/manage-footer.php');
	?>
</div>
</body>
</html>
