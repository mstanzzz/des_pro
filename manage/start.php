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
$page_title = "start";
	
$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';
if(isset($_GET["nl"])){
	$msg = "You have been redirected from a restricted area.";	
}

unset($_SESSION['temp_fields']);

/*
$db = $dbCustom->getDbConnect(USER_DATABASE);
$sql = "UPDATE user
		SET user_type_id = '7'
		WHERE username = 'mark.stanz@gmail.com'";
$result = $dbCustom->getResult($db,$sql);	

$sql = "UPDATE user
		SET user_type_id = '7'
		WHERE username = 'admin'";
$result = $dbCustom->getResult($db,$sql);	
*/


//echo "REQUEST_URI  ".$_SERVER['REQUEST_URI'];
//echo "<br />";
//echo "DOCUMENT_ROOT  ".$_SERVER['DOCUMENT_ROOT'];
//echo "<br />";


/*
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = "UPDATE page_seo 
		SET page_name = 'free-in-home-consults'
		WHERE page_name = 'in-home-consultation';"; 
$result = $dbCustom->getResult($db,$sql);
$sql = "SELECT page_name FROM page_seo WHERE page_name LIKE '%in-home%'"; 
$result = $dbCustom->getResult($db,$sql);
echo $result->num_rows;
while($row = $result->fetch_object()){
	echo $row->page_name;
	echo "<br />";	
}
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

$sql = "UPDATE page_seo 
		SET page_name = 'diy_instructions'
		WHERE page_name = 'installation';"; 
$result = $dbCustom->getResult($db,$sql);

$sql = "SELECT page_name FROM page_seo WHERE page_name LIKE '%inst%'"; 
$result = $dbCustom->getResult($db,$sql);
echo $result->num_rows;
while($row = $result->fetch_object()){
	echo $row->page_name;
	echo "<br />";	
}


$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

$sql = "UPDATE page_seo 
		SET page_name = 'we-design'
		WHERE page_name = 'design';"; 
$result = $dbCustom->getResult($db,$sql);



$sql = "SELECT page_name FROM page_seo WHERE page_name LIKE '%design%'"; 
$result = $dbCustom->getResult($db,$sql);
echo $result->num_rows;
while($row = $result->fetch_object()){
	
	echo $row->page_name;
	echo "<br />";	
}

$db = $dbCustom->getDbConnect(CART_N_DATABASE);
$sql = "SELECT max(cat_id) as p_id 
		FROM category 
		WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
$result = $dbCustom->getResult($db,$sql);
$obj=$result->fetch_object();
$p_id=$obj->p_id;
echo $p_id;
echo "<br />";
echo "<br />";




$i=$p_id;
$sql = "SELECT cat_id 
		FROM category 
		WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
		ORDER BY cat_id";
$result = $dbCustom->getResult($db,$sql);
while($row = $result->fetch_object()){
	$i++;
	$sql =  "UPDATE category 
			SET profile_cat_id = '".$i."'
			WHERE cat_id='".$row->cat_id."'";
	$res_1 = $dbCustom->getResult($db,$sql);
	echo $i;
	echo "<br />";
}
	echo "<hr />";
	echo "<hr />";

$sql = "SELECT max(item_id) as p_id 
		FROM item 
		WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
$result = $dbCustom->getResult($db,$sql);
$obj=$result->fetch_object();
$p_id=$obj->p_id;
echo $p_id;
echo "<br />";
echo "<br />";

$i=$p_id;
$sql = "SELECT item_id 
		FROM item 
		WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
		ORDER BY item_id";
$result = $dbCustom->getResult($db,$sql);
while($row = $result->fetch_object()){
	$i++;
	$sql =  "UPDATE item 
			SET profile_item_id = '".$i."'
			WHERE item_id='".$row->item_id."'";
	$res_1 = $dbCustom->getResult($db,$sql);
	echo $i;
	echo "<br />";
}
-----------------------------------------------
$ctg_items=array();
$db = $dbCustom->getDbConnect(CART_DATABASE_CTG);
$sql = "SELECT name,item_id,profile_item_id 
		FROM item 
		WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
		ORDER BY name";
$result = $dbCustom->getResult($db,$sql);
$obj=$result->fetch_object();
$i=0;
while($row = $result->fetch_object()){
	$ctg_items[$i]['name']=$row->name;
	$ctg_items[$i]['item_id']=$row->item_id;
	$ctg_items[$i]['profile_item_id']=$row->profile_item_id;
	$i++;
}


$mvp_items=array();
$db = $dbCustom->getDbConnect(CART_N_DATABASE);
$sql = "SELECT name,item_id,profile_item_id 
		FROM item 
		WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
		ORDER BY name";
$result = $dbCustom->getResult($db,$sql);
$obj=$result->fetch_object();
$i=0;
while($row = $result->fetch_object()){
	$mvp_items[$i]['name']=$row->name;
	$mvp_items[$i]['item_id']=$row->item_id;
	$mvp_items[$i]['profile_item_id']=$row->profile_item_id;
	$i++;
}

echo "<div style='float:left;width:500px;border:solid;'>";
echo "<table width='100%'>";
echo "<tr>";
echo "<td width='80%'></td>";
echo "<td width='5%'>item_id</td>";
echo "<td width='5%'>p_item_id</td>";
echo "</tr>";
foreach($ctg_items as $v){
	echo "<tr>";
	echo "<td>".$v['name']."</td>";
	echo "<td>".$v['item_id']."</td>"; 
	echo "<td>".$v['profile_item_id']."</td>";
	echo "</tr>";

	$db = $dbCustom->getDbConnect(CART_N_DATABASE);	
	$sql="UPDATE item 
	SET profile_item_id='".$v['profile_item_id']."' 
	WHERE name='".$v['name']."'";
	//$result = $dbCustom->getResult($db,$sql);
		
}
echo "</table>";
echo "</div>";


echo "<div style='float:left;width:500px;border:solid;'>";
echo "<table width='100%'>";
echo "<tr>";
echo "<td width='80%'></td>";
echo "<td width='5%'>item_id</td>";
echo "<td width='5%'>p_item_id</td>";
echo "</tr>";
foreach($mvp_items as $v){
	echo "<tr>";
	echo "<td>".$v['name']."</td>";
	echo "<td>".$v['item_id']."</td>";
	echo "<td>".$v['profile_item_id']."</td>";
	echo "</tr>";
}
echo "</table>";
echo "</div>";

echo "<div style='clear:both;'></div>";

$db = $dbCustom->getDbConnect(CART_N_DATABASE);
$sql = "UPDATE category 
		SET click_count = '0'";
$r = $dbCustom->getResult($db,$sql);
$sql = "UPDATE item 
		SET click_count = '0'";
$r = $dbCustom->getResult($db,$sql);
*/


require_once('admin-includes/doc_header.php'); 

?>
<script>
$(document).ready(function(){
	
	$("#vvv").hide();
	
	$("#vvvv").click(function () {
		$("#vvv").show();
	});
	
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
		<br />
		<a href="<?php echo SITEROOT; ?>manage/cms/pages/static/list.php">Atom Solutions Pages</a>
		<br />
		<a href="<?php echo SITEROOT; ?>manage/manage-images.php">Images</a>
		<br />
		<a href="<?php echo SITEROOT; ?>manage/design/design-request-list.php">Design Requests</a>
		<br />
		<a href="<?php echo SITEROOT; ?>manage/general-admin/testimonial-list.php">Testimonial-Reviews</a>
		<br />
		<a href='<?php echo SITEROOT; ?>manage/customer/prof-installers-list.php'>Professional Installers</a>
		<br />
		<a href='<?php echo SITEROOT; ?>manage/email-test.php'>email test</a>
		<br />
		
		
		
<!--			
		<a href="<?php echo SITEROOT; ?>manage/rename/index.php">rename</a>
		<br />

		<a href="<?php echo SITEROOT; ?>manage/catalog/categories/svg-top-cat.php">SVG</a>
		<br />
		<a href="<?php echo SITEROOT; ?>manage/catalog/prod-sheet/">Product Sheet</a>
		<br />
		<a href="<?php echo SITEROOT;?>manage/plup.php">plup</a>
		<br />
		<a href="<?php echo SITEROOT; ?>manage/cust-names.php">Names</a>
		<br />
		<a href="<?php echo SITEROOT; ?>manage/transactions/">transactions</a>
		<br />
		<a href="<?php echo SITEROOT; ?>manage/pages-list.php">Page SEO</a>
		<br />
		<a href="<?php echo SITEROOT; ?>manage/catalog/prod-sheet/">Product Sheet</a>
		<br />
		<a href="<?php echo SITEROOT; ?>manage/catalog/specs-feat/specs-feat.php">specs-feat</a>
		<br />
		<a href="<?php echo SITEROOT; ?>manage/idea-folder/index.php">idea-folder</a>
		<br />
<img width="150" src="<?php echo SITEROOT;?>Alicia_SVGs/1.svg">
<img width="150" src="<?php echo SITEROOT;?>Alicia_SVGs/2.svg">
<img width="150" src="<?php echo SITEROOT;?>Alicia_SVGs/3.svg">
<img width="150" src="<?php echo SITEROOT;?>Alicia_SVGs/4.svg">
<img width="150" src="<?php echo SITEROOT;?>Alicia_SVGs/5.svg">
<img width="150" src="<?php echo SITEROOT;?>Alicia_SVGs/6.svg">
<img width="150" src="<?php echo SITEROOT;?>Alicia_SVGs/7.svg">
<img width="150" src="<?php echo SITEROOT;?>Alicia_SVGs/8.svg">
<img width="150" src="<?php echo SITEROOT;?>Alicia_SVGs/9.svg">
<img width="150" src="<?php echo SITEROOT;?>Alicia_SVGs/10.svg">
<img width="150" src="<?php echo SITEROOT;?>Alicia_SVGs/11.svg">
<img width="150" src="<?php echo SITEROOT;?>Alicia_SVGs/12.svg">
<img width="150" src="<?php echo SITEROOT;?>Alicia_SVGs/13.svg">
<img width="150" src="<?php echo SITEROOT;?>Alicia_SVGs/14.svg">
<img width="150" src="<?php echo SITEROOT;?>Alicia_SVGs/15.svg">
<img width="150" src="<?php echo SITEROOT;?>Alicia_SVGs/16.svg">
<br />	
-->




        <?php if($msg != ''){ ?>  
		<div class="alert">
           	<span class="fltlft"><i class="icon-warning-sign"></i></span><?php  echo $msg; ?>
        </div>  
        <?php } ?>
        
        <ul class="dashboard_buttons clearfix">
			<li><a class="dashbtn cms" href="cms/cms-landing.php"><span>Content Management</span></a>
<ul>
<li class="hidden_dash"><a href="<?php echo SITEROOT;?>manage/cms/logo/logo.php" title="<?php echo $tool_tip_logo; ?>">Logo Image</a></li>
<li><a href="<?php echo SITEROOT;?>manage/cms/pages/page.php" title="<?php echo $tool_tip_pages; ?>">Pages</a></li>
<li class="hidden_dash"><a href="<?php echo SITEROOT;?>manage/cms/blog/blog.php" title="<?php echo $tool_tip_blog; ?>">Blog Posts</a></li>
<li><a href="<?php echo SITEROOT;?>manage/cms/seo/seo.php" title="<?php echo $tool_tip_seo; ?>">SEO/Breadcrumbs</a></li>
<li><a class="show_more" href="#">More...</a></li>
</ul>
			</li>
			<li><a class="dashbtn catalog" href="catalog/catalog-landing.php"><span>Product Catalog</span></a>
				<ul>
					<li><a href="<?php echo SITEROOT;?>manage/catalog/categories/category-tree.php" title="<?php echo $tool_tip_cart_cat; ?>">Manage Categories</a></li>
					<li><a href="<?php echo SITEROOT;?>manage/catalog/products/item.php" title="<?php echo $tool_tip_cart_item; ?>">Products</a></li>
					<li><a href="<?php echo SITEROOT;?>manage/catalog/attributes/attribute.php" title="<?php echo $tool_tip_attributes; ?>">Product Attributes</a></li>
					<li class="hidden_dash"><a href="<?php echo SITEROOT;?>manage/catalog/reviews/item-review.php" title="<?php echo $tool_tip_reviews; ?>">Product Reviews</a></li>
					<li><a class="show_more" href="#">More...</a></li>
				</ul>

			</li>
            <li><a class="dashbtn ecommerce" href="ecomsettings/ecommerce-landing.php"><span>Ecommerce Settings </span></a>
				<ul>
					<li><a href="<?php echo SITEROOT;?>manage/ecomsettings/global-discount.php" title="<?php echo $tool_tip_discounts; ?>">Discount Settings</a></li>
					<li><a href="<?php echo SITEROOT;?>manage/ecomsettings/showroom-banner.php" title="<?php echo $tool_tip_banners; ?>">Showroom Page Banners</a></li>
					<li class="hidden_dash"><a href="<?php echo SITEROOT;?>manage/ecomsettings/shop-banner.php" title="<?php echo $tool_tip_banners; ?>">Shopping Page Banners</a></li>
					<li><a href="<?php echo SITEROOT;?>manage/ecomsettings/ship-carrier.php" title="<?php echo $tool_tip_shipping; ?>" >Shipping Options</a></li>			
                    <li class="hidden_dash"><a href="<?php echo SITEROOT;?>manage/ecomsettings/payment-processor.php" 
                    title="<?php echo $tool_tip_payment_processor; ?>">Payment Processor</a></li>
				</ul>
			</li>
			<li><a class="dashbtn custord" href="customer-landing.php"><span>Customers &amp; Orders</span></a>
				<ul id="crm_subnavigation" <?php echo multipleDirectories($custord_open,1); ?>>
					<li><a href="<?php echo SITEROOT;?>manage/customer/customer-list.php" title="<?php echo $tool_tip_customers; ?>">Customers</a></li>
						<li><a href="<?php echo SITEROOT;?>manage/order-management/master/order-list.php" title="<?php echo $tool_tip_orders; ?>">Orders</a></li>
						<li><a href="<?php echo SITEROOT;?>manage/order-management/master/transaction-list.php" title="<?php echo $tool_tip_transactions; ?>" >Transaction List</a></li>
						<li><a href="<?php echo SITEROOT;?>manage/order-management/sas-parent/order-list.php" title="<?php echo $tool_tip_orders; ?>">Orders</a></li>
						<li><a href="<?php echo SITEROOT;?>manage/order-management/sas-non-parent/order-list.php" title="<?php echo $tool_tip_orders; ?>">Orders</a></li>            
				</ul>

			</li>
			
					<li><a class="dashbtn designers" href="social/social-landing.php"><span>Social Network</span></a>
						<ul>
							<li><a href="<?php echo SITEROOT;?>manage/social/member-profiles.php" title="<?php echo $tool_tip_designers; ?>">Member Profiles</a></li>
							<li class="hidden_dash"><a href="<?php echo SITEROOT;?>manage/social/member-skills.php" title="<?php echo $tool_tip_attributes; ?>">Member Attributes</a></li>
							<li><a href="<?php echo SITEROOT;?>manage/social/social-categories.php" title="<?php echo $tool_tip_organizerblog; ?>">Social Blog Categories</a></li>
							<li><a href="<?php echo SITEROOT;?>manage/social/social-carousel.php" title="<?php echo $tool_tip_featured; ?>">Featured Content</a></li>
							<li><a class="show_more" href="#">More...</a></li>
						</ul>
					</li>
            <li><a class="dashbtn admin" href="admin-landing.php"><span>Administration &amp; Settings</span></a>
				<ul id="admin_subnavigation" <?php echo multipleDirectories($admin_open,1); ?>>
					<li><a href="<?php echo SITEROOT;?>manage/general-admin/edit-company-profile.php" title="<?php echo $tool_tip_basicsettings; ?>" >Basic Settings</a></li>
					<li class="hidden_dash"><a href="<?php echo SITEROOT;?>manage/general-admin/add-on-change-request.php" title="<?php echo $tool_tip_addon; ?>">Add-ons Change Request</a></li>
					<li><a href="<?php echo SITEROOT;?>manage/general-admin/add-ons.php" title="<?php echo $tool_tip_addontoggle; ?>">Add-ons Toggle</a></li>
					<li><a href="<?php echo SITEROOT;?>manage/admin-users/admin-users.php" title="<?php echo $tool_tip_users; ?>">Manage Users</a></li>
					<li class="hidden_dash"><a href="<?php echo SITEROOT;?>manage/general-admin/states.php" title="<?php echo $tool_tip_locationsettings; ?>">Location Settings</a></li>			
					<li><a class="show_more" href="#">More...</a></li>
				</ul>

			</li>
		</ul>
		
	</div>



	<p class="clear"></p>
	
</div>

<br />
<br />
</div>
</body>
</html>


