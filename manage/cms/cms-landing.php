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
	
$page_title = "Content Management";
$page_group = "content-management";
	
unset($_SESSION['img_id']);	
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
	$sql = "DELETE FROM about_us 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	

	$sql = "DELETE FROM accessories 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	

	$sql = "DELETE FROM accessory_category 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	

	$sql = "DELETE FROM added_page 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	

	$sql = "DELETE FROM company_info 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	

	$sql = "DELETE FROM contact_email 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	

	$sql = "DELETE FROM countries 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	


	$sql = "DELETE FROM design 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	

	$sql = "DELETE FROM design_email 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	

	$sql = "DELETE FROM design_email_content 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	

	$sql = "DELETE FROM document 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	

	$sql = "DELETE FROM download 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	

	$sql = "DELETE FROM downloads_page 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	

	$sql = "DELETE FROM faq 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	
	
	$sql = "DELETE FROM faq_category 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	
		
	$sql = "DELETE FROM faq_page 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	
					
	$sql = "DELETE FROM fax_a_design_plan 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);			
					
	$sql = "DELETE FROM features 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);					
					
	$sql = "DELETE FROM features_details 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);			
					
	$sql = "DELETE FROM feedback_page 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);				
					
	$sql = "DELETE FROM footer 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);				
					
	$sql = "DELETE FROM footer_nav_label 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);				
					
	$sql = "DELETE FROM free_in_home_consults 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);				
					
	$sql = "DELETE FROM global_discount 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);				
					
	$sql = "DELETE FROM global_seo_words 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);				
					
	$sql = "DELETE FROM guarantee 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);					
					
	$sql = "DELETE FROM guides_tips_page 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);					
					
	$sql = "DELETE FROM guide_tip 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);					 
					
	$sql = "DELETE FROM guide_tip_category 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);					
					
	$sql = "DELETE FROM home 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	
				
					
	$sql = "DELETE FROM image 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	
					
	$sql = "DELETE FROM installation 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	
			
	$sql = "DELETE FROM installation_video 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	
					
	$sql = "DELETE FROM installer_application 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	
			
	$sql = "DELETE FROM in_home_consult_request 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	
					
	$sql = "DELETE FROM location 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	
					
	$sql = "DELETE FROM logo 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	
					
	$sql = "DELETE FROM news 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	
					
	$sql = "DELETE FROM policy 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	
					
	$sql = "DELETE FROM policy_category 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	
								
	$sql = "DELETE FROM policy_page 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	
	
	$sql = "DELETE FROM preview 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);
	
	$sql = "DELETE FROM privacy_statement 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);
	
	$sql = "DELETE FROM process_category 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);
	
	$sql = "DELETE FROM process_page 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	
									
	$sql = "DELETE FROM product_details 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	
					
	$sql = "DELETE FROM review 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	
					
	$sql = "DELETE FROM robots 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	
					
	$sql = "DELETE FROM services 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	
					
	$sql = "DELETE FROM shipping_term 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	
					
	$sql = "DELETE FROM shipping_time 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	
					
	$sql = "DELETE FROM shopping_cart 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	
										
	$sql = "DELETE FROM showroom_cat 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	

	$sql = "DELETE FROM showroom_details 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	

	$sql = "DELETE FROM special 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	

	$sql = "DELETE FROM specifications 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	

	$sql = "DELETE FROM specifications_details 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);	
					
	$sql = "DELETE FROM states 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);																				
					
	$sql = "DELETE FROM support 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);																				
					
	$sql = "DELETE FROM terms_of_use 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);																				
					
	$sql = "DELETE FROM testimonial 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);																				
					
	$sql = "DELETE FROM video 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);																				
					
	$sql = "DELETE FROM we_design 
			WHERE profile_account_id != '1'";
	//$result = $dbCustom->getResult($db,$sql);																				
		

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
			<h1>Content Management</h1>
			<?php
		require_once($real_root."/manage/admin-includes/class.admin_bread_crumb.php");	
	
		$bread_crumb = new AdminBreadCrumb;
		$bread_crumb->reSet();
		$bread_crumb->add("CMS", SITEROOT.$_SERVER['REQUEST_URI']);
        echo $bread_crumb->output();
?>			
<div class="subnav_buttons">

<ul>
<li><a href="<?php echo SITEROOT;?>manage/cms/logo/logo.php"  class="landingbtn logoimg"><span>Logo Image</span></a></li>
<li><a href="<?php echo SITEROOT;?>manage/cms/pages/page.php" class="landingbtn pages"><span>Pages</span></a></li>
<li><a href="<?php echo SITEROOT;?>manage/cms/seo/seo.php" class="landingbtn seo"><span>SEO Settings</span></a></li>
<li><a href="<?php echo SITEROOT;?>manage/cms/custom-code/custom-code.php?firstload=1"class="landingbtn"><span>Custome Code and Meta Tags</span></a></li>   
<li><a href="<?php echo SITEROOT;?>manage/cms/video/video-list.php" class="landingbtn" ><span>Videos</span></a></li>
<li><a href="<?php echo SITEROOT;?>manage/cms/social-media/edit-social-media-links.php" class="landingbtn" ><span>Social Media Links</span></a></li>                
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