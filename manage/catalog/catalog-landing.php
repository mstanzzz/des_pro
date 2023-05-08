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
	
	$page_title = "Product Catalog";
	$page_group = "cat";
	$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
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
			<h1>Product Catalog</h1>
			<div class="subnav_buttons">
				<ul>
<li><a class="landingbtn" href="specs-feat/specs-feat.php"><span>Features</span></a></li>
<li><a class="landingbtn" href="prod-sheet/index.php"><span>Product Sheet</span></a></li>
<li><a class="landingbtn" href="video/video-list.php" ><span>Videos</a></span></li>
<li><a class="landingbtn" href="categories/svg-top-cat.php"><span>SVG List</span></a></li>
<li><a class="landingbtn" href="categories/document-list.php"><span>Document List</span></a></li>
<li><a class="landingbtn" href="categories/t-category.php"><span>Categories</span></a></li>
<li><a class="landingbtn" href="products/item.php"><span>Products</span></a></li>
<li><a class="landingbtn" href="attributes/attribute.php"><span>Attributes</span></a></li>
<li><a class="landingbtn" href="attributes/set-custom-attributes.php"><span>Set Custom Attrs</span></a></li>
<li><a class="landingbtn" href="reviews/item-review.php"><span>Product Reviews</span></a></li>
				</ul>
			</div>
		</div>
		<p class="clear"></p>
	<?php 
	require_once($real_root.'/manage/admin-includes/manage-footer.php');
?>
</div>
</body>
</html>