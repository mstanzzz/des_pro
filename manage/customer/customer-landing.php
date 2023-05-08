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
	$page_title = "Customers &amp; Orders";
	$page_group = "content-management";
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
			<h1>Customers &amp; Orders</h1>
			<?php
			require_once($real_root."/manage/admin-includes/class.admin_bread_crumb.php");	
			$bread_crumb = new AdminBreadCrumb;
			$bread_crumb->reSet();
			$bread_crumb->add("Customers", SITEROOT."manage/customer-landing.php");
			echo $bread_crumb->output();
         	?>			
			<div class="subnav_buttons">
				<ul>
<li><a class="landingbtn customers" href="<?php echo SITEROOT;?>manage/customer/customer-list.php"><span>Customers</span></a></li>
<li><a class="landingbtn" 
href="<?php echo SITEROOT;?>manage/design/design-request-list.php?ret_page=customer-landing">
<span>Design Requests</span></a>
</li>

<li><a class="landingbtn" 
href="<?php echo SITEROOT;?>manage/general-admin/support.php"><span>Support Contact</span></a>
</li>

<li><a class="landingbtn" 
href="<?php echo SITEROOT;?>manage/general-admin/careers.php"><span>Careers Contact</span></a>
</li>

<li><a class="landingbtn" 
href="<?php echo SITEROOT;?>manage/general-admin/for-pros.php"><span>For Pros Contact</span></a>
</li>

<li><a class="landingbtn" 
href="<?php echo SITEROOT;?>manage/general-admin/in-home-consult.php"><span>In home consult Request</span></a>
</li>



<li><a class="landingbtn" href="<?php echo SITEROOT;?>manage/customer/bulk-email.php?ret_page=customer-landing"><span>Bulk Emails</span></a></li>
<li><a class="landingbtn" href="<?php echo SITEROOT;?>manage/customer/site-user-data.php?ret_page=customer-landing"><span>Site User Data</span></a></li>
<li><a class="landingbtn" href="<?php echo SITEROOT;?>manage/general-admin/testimonial-list.php?ret_page=testimonial"><span>Testimonials</span></a></li>
<li><a class="landingbtn" href="<?php echo SITEROOT;?>manage/general-admin/feedback.php?ret_page=feedback"><span>Feedback</span></a></li>
                    
                    
                     
                    
 				</ul>
			</div>
			<!-- end main content area --> 
		</div>
		<p class="clear"></p>
	<?php 
	//the footer portion of the template
	require_once($real_root.'/manage/admin-includes/manage-footer.php');
		
	
	
?>
</div>
</body>
</html>