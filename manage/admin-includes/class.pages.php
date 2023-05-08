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
//for_the_pros
require_once($real_root.'/includes/config.php'); 
class Pages{
	function newProfileSetup($new_profile_account_id)
	{
		$ts = time();
		$dbCustom = new DbCustom();
		$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
		$this->setSeoPageNames($new_profile_account_id);

//accessory-category

		$sql = "INSERT INTO global_seo_words
				(profile_account_id)
				VALUES('".$new_profile_account_id."')";
		$result = $dbCustom->getResult($db,$sql);

		$sql = "SELECT img_id FROM image WHERE file_name = 'dummy_logo.jpg' AND profile_account_id = '".$new_profile_account_id."'"; 
		$img_res = $dbCustom->getResult($db,$sql);

		$sql = "INSERT INTO blog 
			(profile_account_id) 
			VALUES ('".$new_profile_account_id."')"; 
		$result = $dbCustom->getResult($db,$sql);


		$sql = "INSERT INTO locations 
			(profile_account_id) 
			VALUES ('".$new_profile_account_id."')"; 
		$result = $dbCustom->getResult($db,$sql);
		

		$sql = "INSERT INTO diy_instructions 
			(profile_account_id) 
			VALUES ('".$new_profile_account_id."')"; 
		$result = $dbCustom->getResult($db,$sql);
		
		$sql = "INSERT INTO product_details 
			(profile_account_id) 
			VALUES ('".$new_profile_account_id."')"; 
		$result = $dbCustom->getResult($db,$sql);

		$sql = "INSERT INTO sign_now_pay 
			(profile_account_id) 
			VALUES ('".$new_profile_account_id."')"; 
		$result = $dbCustom->getResult($db,$sql);

		$sql = "SELECT state, state_abr, country 
			FROM states 
			WHERE profile_account_id = '1'";
		$copy_res = $dbCustom->getResult($db,$sql);	 
		while($row = $copy_res->fetch_object()) {
			$sql = "INSERT INTO states
					(state
					,state_abr
					,country
					,profile_account_id
					)
					VALUES
					('".$row->state."'
					,'".$row->state_abr."'
					,'".$row->country."'
					,'".$new_profile_account_id."'
					)";
			$i_res = $dbCustom->getResult($db,$sql);
		}
		
		
		$sql = "INSERT INTO video_library 
			(profile_account_id) 
			VALUES ('".$ts."', '".$new_profile_account_id."')"; 
		$result = $dbCustom->getResult($db,$sql);

		$db = $dbCustom->getDbConnect(CART_N_DATABASE);

		$db = $dbCustom->getDbConnect(USER_DATABASE);
		$sql = "SELECT domain_name
				FROM profile_account 
			WHERE id = '".$new_profile_account_id."'";
		$res = $dbCustom->getResult($db,$sql);
		if($res->num_rows){
			$object = $res->fetch_object();
			$new_domain = $object->domain_name;	
		}else{
			$new_domain = "noname".$new_profile_account_id;
		}
		if(!file_exists($real_root.'/temp_uploads/')){
			mkdir($real_root.'/temp_uploads/');	
		}
		if(!file_exists($real_root.'/user_uploads/'.$new_profile_account_id.'/')){
			mkdir($real_root.'/user_uploads/'.$new_profile_account_id.'/' , $mode = 0777 );
		}
		if(!file_exists($real_root.'/saascustuploads/'.$new_profile_account_id.'/')){
			mkdir($real_root.'/saascustuploads/'.$new_profile_account_id.'/');	
		}
		if(!file_exists($real_root.'/saascustuploads/'.$new_profile_account_id.'/cart/')){
			mkdir($real_root.'/saascustuploads/'.$new_profile_account_id.'/cart');	
		}
		if(!file_exists($real_root."/saascustuploads/".$new_profile_account_id."/cms/")){
			mkdir($real_root."/saascustuploads/".$new_profile_account_id."/cms");	
		}
		if(!file_exists($real_root."/saascustuploads/".$new_profile_account_id."/cms/large/")){
			mkdir($real_root."/saascustuploads/".$new_profile_account_id."/cms/large/");	
		}
		if(!file_exists($real_root."/saascustuploads/".$new_profile_account_id."/cms/doc/")){
			mkdir($real_root."/saascustuploads/".$new_profile_account_id."/cms/doc/");	
		}
		if(!file_exists($real_root."/saascustuploads/".$new_profile_account_id."/user/")){
			mkdir($real_root."/saascustuploads/".$new_profile_account_id."/user");	
		}		
		$this->recurse_copy($real_root."/saascustuploads/sas_starter_cart/", $real_root."/saascustuploads/".$new_profile_account_id."/cart/");
		$this->recurse_copy($real_root."/saascustuploads/sas_starter_cms/", $real_root."/saascustuploads/".$new_profile_account_id."/");	
	}
	function recurse_copy($src,$dst) { 
		$dir = opendir($src); 
		@mkdir($dst); 
		while(false !== ( $file = readdir($dir)) ) { 
			if (( $file != '.' ) && ( $file != '..' )) { 
				if ( is_dir($src . '/' . $file) ) { 
					$this->recurse_copy($src . '/' . $file,$dst . '/' . $file); 
				} 
				else { 
					copy($src . '/' . $file,$dst . '/' . $file); 
				} 
			} 
		} 
		closedir($dir); 
	} 
	function setSeoPageNames($new_profile_account_id)
	{
		$dbCustom = new DbCustom();	
		//if(!$this->isSeoPageNames($new_profile_account_id)){
		if(0){
			$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

			$sql = "
			INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'blog'
			,'blog'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			


			$sql = "
			INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'locations'
			,'locations'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			

			$sql = "
			INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'diy-instructions'
			,'diy-instructions'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			


			$sql = "
			INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'product-details'
			,'product-details'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			
			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'free-in-home-consults'
			,'free-in-home-consults'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			

			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'features'
			,'features'
			,'".$new_profile_account_id."'			
			)	
			";	

			$result = $dbCustom->getResult($db,$sql);			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'checkout'
			,'checkout'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);
			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'product-details'
			,'product-details'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);	
			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'shopping-cart'
			,'shopping-cart'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);	
			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'request-design'
			,'request-design'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);	
			
			
			$result = $dbCustom->getResult($db,$sql);			
			$sql = "INSERT INTO page_seo
			(page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'installation'
			,'installation'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			

			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'showroom'
			,'showroom'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);	
			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'showroom-cat'
			,'showroom-cat'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);	
			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'showroom-details'
			,'showroom-details'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);	
			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'specifications'
			,'specifications'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);	

			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'specifications-details'
			,'specifications-details'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);	
			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'process'
			,'process'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);	
			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'testimonials'
			,'testimonials'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);
			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'email-design'
			,'email-design'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);
			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'give-testimonial'
			,'give-testimonial'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);	
			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'we-design'
			,'we-design'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);	
			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'we-design-fax'
			,'we-design-fax'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);	
			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'policies'
			,'policies'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);	
			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'showroom-details'
			,'showroom-details'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			

			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'shipping-time'
			,'shipping-time'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'shipping'
			,'shipping'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);
			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'discounts'
			,'discounts'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);	
			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'discounts-how'
			,'discounts-how'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'about-us'
			,'about-us'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);	
			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'our-guarantee'
			,'our-guarantee'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'faq'
			,'faq'
			,'".$new_profile_account_id."'			
			)";	
			$result = $dbCustom->getResult($db,$sql);			
						
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'guides-and-tips'
			,'guides-and-tips'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'downloads'
			,'downloads'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'email-us'
			,'email-us'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'news'
			,'news'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'news-more'
			,'news-more'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			

			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'feedback'
			,'feedback'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'privacy-statement'
			,'privacy-statement'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'account'
			,'account'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'app'
			,'app'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'signup-form'
			,'signup-form'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'signup-form'
			,'signup-form'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'terms-of-use'
			,'terms-of-use'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'home'
			,'home'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'order-history'
			,'order-history'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'order-receipt'
			,'order-receipt'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'account-designs'
			,'account-designs'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'support'
			,'support'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'services'
			,'services'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'solution-detail-view'
			,'solution-detail-view'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);
			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'sign-now-pay'
			,'sign-now-pay'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			

			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'video_library'
			,'video_library'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			

			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'video_library_detail'
			,'video_library_detail'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			

			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'account'
			,'account'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			

			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'account-idea-folder'
			,'account-idea-folder'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			

			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'account-orders'
			,'account-orders'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);			

			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'account-payments'
			,'account-payments'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);	


			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'account-settings'
			,'account-settings'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);	


			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'comparison'
			,'comparison'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);	


			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'accessories'
			,'accessories'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);
	

			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'accessory-category'
			,'accessory-category'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);	
			
			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'for-the-pros'
			,'for-the-pros'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);	


			$sql = "INSERT INTO page_seo
			(
			page_name
			,seo_name
			,profile_account_id
			)VALUES(
			'careers'
			,'careers'
			,'".$new_profile_account_id."'			
			)	
			";	
			$result = $dbCustom->getResult($db,$sql);	
			
			
		}
		//$this->setSeoPageOptional($new_profile_account_id);
	}
	
	function setSeoPageOptional($new_profile_account_id)
	{
		$optional_pages_array = $this->getOptionalPageNames();
		if(sizeof($optional_pages_array) > 0){
			$dbCustom = new DbCustom();
			$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
			foreach($optional_pages_array as $value){
				$sql = "UPDATE page_seo 
						SET optional = '1', available = '0'
						WHERE page_name = '".$value."'
						AND profile_account_id = '".$new_profile_account_id."'";	
				$result = $dbCustom->getResult($db,$sql);				
			}
		}
	}
	function isSeoPageNames($new_profile_account_id)
	{
		$dbCustom = new DbCustom();
		$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
		$sql = "SELECT page_seo_id FROM page_seo WHERE profile_account_id = '".$new_profile_account_id."'";	
		$result = $dbCustom->getResult($db,$sql);		
		if($result->num_rows > 0){
			$ret = 1;	
		}else{
			$ret = 0;
		}
		return $ret;
	}
	function undoProfileSetup($profile_account_id)
	{
		$ts = time();
		$dbCustom = new DbCustom();
		$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

		$sql = "DELETE FROM locations 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);

		$sql = "DELETE FROM blog 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);

		$sql = "DELETE FROM request-design 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);

		$sql = "DELETE FROM diy_instructions 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);

		$sql = "DELETE FROM policies 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);

		$sql = "DELETE FROM account_idea_folder 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);

		$sql = "DELETE FROM account_orders 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);

		$sql = "DELETE FROM account 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);

		$sql = "DELETE FROM account_payments 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);

		$sql = "DELETE FROM account_settings 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);

		$sql = "DELETE FROM comparison 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);

		$sql = "DELETE FROM checkout 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);

		$sql = "DELETE FROM page_seo WHERE profile_account_id = '".$profile_account_id."'";	
		$result = $dbCustom->getResult($db,$sql);		
		$sql = "DELETE FROM logo WHERE profile_account_id = '".$profile_account_id."'"; 		
		$result = $dbCustom->getResult($db,$sql);		
		
		$sql = "DELETE FROM product_details WHERE profile_account_id = '".$profile_account_id."'"; 		
		$result = $dbCustom->getResult($db,$sql);		
		
		$sql = "DELETE FROM we_design 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM features 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM features_details 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM design_email_content 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM about_us 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM guarantee 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM company_info 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM contact_email_page 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		
		$sql = "DELETE FROM discount 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM discount_how 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM footer_nav-label 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM footer_nav_submenu_label 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM navbar_label 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM navbar_submenu_label 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM home 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM free_in_home_consultation 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "SELECT installation_id FROM installation
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		if($result->num_rows > 0){
			$object = $result->fetch_object();
			$sql = "DELETE FROM installation_appearance 
					WHERE installation_id = '".$object->installation_id."'";
			$result = $dbCustom->getResult($db,$sql);
			$sql = "DELETE FROM installation_step
					WHERE installation_id = '".$object->installation_id."'";
			$result = $dbCustom->getResult($db,$sql);
			$sql = "DELETE FROM installation_tool
					WHERE installation_id = '".$object->installation_id."'";
			$result = $dbCustom->getResult($db,$sql);
			$sql = "DELETE FROM installation_link
					WHERE installation_id = '".$object->installation_id."'";
			$result = $dbCustom->getResult($db,$sql);
		}
		$sql = "DELETE FROM installation 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM installation_video
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM privacy-statement 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM policies 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM process 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM process_category 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM process_page 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM downloads_page 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM shipping_term 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM shipping_time 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM specifications 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		
		$sql = "DELETE FROM specifications_details 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		
		$sql = "DELETE FROM states 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM terms_of_use 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM testimonial_page 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM feedback_page 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM faq_category 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM faq 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM faq_page 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM guides_tips_page 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM guide_tip_category 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM guide_tip 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM we_design_fax 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM we_design 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM showroom 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM item_details 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM keyword_landing 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);

		$sql = "DELETE FROM accessories 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);

		$sql = "DELETE FROM accessory-category 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);

		$sql = "DELETE FROM video_library 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);

		$sql = "DELETE FROM video_library_detail 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);

		$sql = "DELETE FROM for_the_pros 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);

		$sql = "DELETE FROM careers 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
	
		$sql = "DELETE FROM image WHERE profile_account_id = '".$profile_account_id."'"; 		
		$result = $dbCustom->getResult($db,$sql);		
		$db = $dbCustom->getDbConnect(CART_N_DATABASE);
		$sql = "DELETE FROM image WHERE profile_account_id = '".$profile_account_id."'"; 		
		$result = $dbCustom->getResult($db,$sql);		
		$sql = "SELECT cat_id FROM category 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		while($row = $result->fetch_object()){
			$sql = "DELETE FROM item_to_category 
					WHERE cat_id = '".$row->cat_id."'";
			$res = $dbCustom->getResult($db,$sql);	
		}
		$sql = "DELETE FROM category 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "SELECT item_id
				FROM item
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		while($row = $result->fetch_object()){
			$sql = "DELETE FROM item_to_opt 
			WHERE item_id = '".$row->item_id."'";
			$res = $dbCustom->getResult($db,$sql);		
			$sql = "DELETE FROM item_to_kit 
					WHERE item_id = '".$row->item_id."'";
			$res = $dbCustom->getResult($db,$sql);
			$sql = "DELETE FROM item_to_kit 
					WHERE kit_item_id = '".$row->item_id."'";
			$res = $dbCustom->getResult($db,$sql);
			$sql = "DELETE FROM item_gallery 
					WHERE item_id = '".$row->item_id."'";
			$res = $dbCustom->getResult($db,$sql);
			$sql = "DELETE FROM item_rating 
					WHERE item_id = '".$row->item_id."'";
			$res = $dbCustom->getResult($db,$sql);
			$sql = "DELETE FROM item_review 
					WHERE item_id = '".$row->item_id."'";
			$res = $dbCustom->getResult($db,$sql);
			$sql = "DELETE FROM item_to_category 
					WHERE item_id = '".$row->item_id."'";
			$res = $dbCustom->getResult($db,$sql);	
			$sql = "DELETE FROM item_to_document 
					WHERE item_id = '".$row->item_id."'";
			$res = $dbCustom->getResult($db,$sql);
			$sql = "DELETE FROM item_to_media 
					WHERE item_id = '".$row->item_id."'";
			$res = $dbCustom->getResult($db,$sql);
			$sql = "DELETE FROM item_to_opt 
					WHERE item_id = '".$row->item_id."'";
			$res = $dbCustom->getResult($db,$sql);
			$sql = "DELETE FROM item_to_vend_man 
					WHERE item_id = '".$row->item_id."'";
			$res = $dbCustom->getResult($db,$sql);
		}
		$sql = "DELETE FROM item 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM attribute 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM banner 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);
		$sql = "DELETE FROM brand 
				WHERE profile_account_id = '".$profile_account_id."'";
		$result = $dbCustom->getResult($db,$sql);	
	}
	
	/*
	function getOptionalPages($profile_account_id){
		$page_list_array = array();	
		$dbCustom = new DbCustom();
		$db = $dbCustom->getDbConnect(SITE_N_DATABASE);	
		$sql = "SELECT * FROM page_seo 
		WHERE profile_account_id = '".$profile_account_id."'
		AND optional = '1'
		";
		$sql .= " ORDER BY page_name";

		$result = $dbCustom->getResult($db,$sql);
		
		$i = 0;
        while($row = $result->fetch_object()) {
			$page_list_array[$i]['available'] = $row->available;
			$page_list_array[$i]['page_name'] = $row->page_name;							
			$page_list_array[$i]['page_seo_id'] = $row->page_seo_id;
			$i++;
		}	
		return $page_list_array;
	}
	*/
	
	/*
	function getOptionalPageNames(){
		$page_list_array = array();	
		$dbCustom = new DbCustom();
		$db = $dbCustom->getDbConnect(SITE_N_DATABASE);	
		$sql = "SELECT DISTINCT page_name FROM page_seo 
		WHERE optional = '1'";
		$sql .= " ORDER BY page_name";
		$result = $dbCustom->getResult($db,$sql);
		$i = 0;
        while($row = $result->fetch_object()) {
			$page_list_array[$i] = $row->page_name;							
			$i++;
		}
		return $page_list_array;
	}
	*/
	
	/*
	function getAvailableNavPages($profile_account_id){
		$module = new Module;
		$page_list_array = array();	
		$dbCustom = new DbCustom();
		$db = $dbCustom->getDbConnect(SITE_N_DATABASE);	
		$sql = "SELECT * FROM page_seo 
		WHERE profile_account_id = '".$profile_account_id."'
		AND available = '1'
		AND page_name != 'search-results'";
		$sql .= " ORDER BY page_name";
		$result = $dbCustom->getResult($db,$sql);
		$i = 0;	
        while($row = $result->fetch_object()) {
			if(!$module->hasSeoModule($profile_account_id)){
				$page_list_array[$i]["visible_name"] = $row->seo_name;			
			}else{
				$page_list_array[$i]["visible_name"] = $row->page_name;							
			}
			$page_list_array[$i]["page_seo_id"] = $row->page_seo_id;
			$i++;
		}
		return $page_list_array;
	}
	*/
	
	function getPageSeoUrls($profile_account_id, $require_active = 1){
		$module = new Module;
		$page_url_array = array();	
		$dbCustom = new DbCustom();
		$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
        $sql = "SELECT seo_name FROM page_seo 
		WHERE profile_account_id = '".$profile_account_id."'";
		if($require_active){
			$sql .= "AND active = '1'";
		}	
		$result = $dbCustom->getResult($db,$sql);
		$i = 0;
        while($row = $result->fetch_object()) {
			$page_url_array[$i] = $row->seo_name;
			$i++;
		}
		return $page_url_array;
	}
	
	
	
	function getPageListArray($profile_account_id,$active_only=0)
	{
		$page_list_array = array();	
		$dbCustom = new DbCustom();
		$db = $dbCustom->getDbConnect(SITE_N_DATABASE);	
		$sql = "SELECT * FROM page_seo 
		WHERE profile_account_id = '".$profile_account_id."'
		AND page_name != 'design'
		AND page_name != 'installation'
		AND page_name != 'specifications'
		AND page_name != 'shipping'	
		AND page_name != 'discounts'
		AND page_name != 'guides-and-tips'
		AND page_name != 'downloads'
		AND page_name != 'email-us'
		AND page_name != 'news'
		AND page_name != 'news-more'
		AND page_name != 'default'
		AND page_name != 'shipping-time'
		AND page_name != 'feedback'
		AND page_name != 'account'
		AND page_name != 'video_library_detail'
		AND page_name != 'specifications-details'
		AND page_name != 'discounts-how'
		AND page_name != 'give-testimonial'
		AND page_name != 'signup-form'
		AND page_name != 'terms-of-use'
		AND page_name != 'video-library'
		AND page_name != 'order-history'	
		AND page_name != 'order-receipt'	
		AND page_name != 'account-design'
		AND page_name != 'tool-page'
		AND page_name != 'account-designs'
		AND page_name != 'account-idea-folder'
		AND page_name != 'account-orders'
		AND page_name != 'sign-now-pay'
		AND page_name != 'solution-detail-view'
		AND page_name != 'account-settings'
		AND page_name != 'account-payments'
		AND page_name != 'comparison'
		AND page_name != 'checkout'
		AND page_name != 'features-details'
		AND page_name != 'we-design'
		AND page_name != 'fax-a-design-plan'
		AND page_name != 'email-design'";
		
		$sql .= " ORDER BY page_name";
		$result = $dbCustom->getResult($db,$sql);
		$i = 0;
        while($row = $result->fetch_object()) {
			$page_list_array[$i]['available'] = 1;
			$page_list_array[$i]["page_seo_name"] = $row->seo_name;
			$page_list_array[$i]["active"] = $row->active;
			$page_list_array[$i]["page_seo_id"] = $row->page_seo_id;
			$page_list_array[$i]["page_id"] = 0;
			$page_list_array[$i]["page_manage_path"] = '';							
			$page_list_array[$i]['page_name'] = $row->page_name;




			if($row->page_name == 'features'){
		        $sql = "SELECT max(features_id) AS id FROM features 
				WHERE profile_account_id = '".$profile_account_id."'";	
				$p_res = $dbCustom->getResult($db,$sql);
				if($p_res->num_rows > 0){
					$p_obj = $p_res->fetch_object();
					$page_id = $p_obj->id;	
				}else{
					$page_id = 0;
				}
				$page_list_array[$i]['page_id'] = $page_id;
				$page_list_array[$i]['page_manage_path'] = "features.php?blog_id=".$page_id;							
			}




			if($row->page_name == 'blog'){
		        $sql = "SELECT max(blog_id) AS id FROM blog 
				WHERE profile_account_id = '".$profile_account_id."'";	
				$p_res = $dbCustom->getResult($db,$sql);
				if($p_res->num_rows > 0){
					$p_obj = $p_res->fetch_object();
					$page_id = $p_obj->id;	
				}else{
					$page_id = 0;
				}
				$page_list_array[$i]['page_id'] = $page_id;
				$page_list_array[$i]['page_manage_path'] = "blog.php?blog_id=".$page_id;							
			}


			if($row->page_name == 'our-reviews'){
		        $sql = "SELECT max(our_reviews_id) AS id FROM our_reviews 
				WHERE profile_account_id = '".$profile_account_id."'";	
				$p_res = $dbCustom->getResult($db,$sql);
				if($p_res->num_rows > 0){
					$p_obj = $p_res->fetch_object();
					$page_id = $p_obj->id;	
				}else{
					$page_id = 0;
				}
				$page_list_array[$i]['page_id'] = $page_id;
				$page_list_array[$i]['page_manage_path'] = "our-reviews.php?our_reviews_id=".$page_id;							
			}
	

			if($row->page_name == 'accessories'){
		        $sql = "SELECT max(accessories_id) AS id FROM accessories 
				WHERE profile_account_id = '".$profile_account_id."'";	
				$p_res = $dbCustom->getResult($db,$sql);
				if($p_res->num_rows > 0){
					$p_obj = $p_res->fetch_object();
					$page_id = $p_obj->id;	
				}else{
					$page_id = 0;
				}
				$page_list_array[$i]['page_id'] = $page_id;
				$page_list_array[$i]['page_manage_path'] = "accessories.php?accessories_id=".$page_id;							
			}
	
			if($row->page_name == 'accessory-category'){
		        $sql = "SELECT max(accessory_cat_id) AS id FROM accessory_cat 
				WHERE profile_account_id = '".$profile_account_id."'";	
				$p_res = $dbCustom->getResult($db,$sql);
				if($p_res->num_rows > 0){
					$p_obj = $p_res->fetch_object();
					$page_id = $p_obj->id;	
				}else{
					$page_id = 0;
				}
				$page_list_array[$i]['page_id'] = $page_id;
				$page_list_array[$i]['page_manage_path'] = "accessory-category.php?accessory_cat_id=".$page_id;							
			}

			if($row->page_name == 'services'){
		        $sql = "SELECT max(services_id) AS id FROM services 
				WHERE profile_account_id = '".$profile_account_id."'";	
				$p_res = $dbCustom->getResult($db,$sql);
				if($p_res->num_rows > 0){
					$p_obj = $p_res->fetch_object();
					$page_id = $p_obj->id;	
				}else{
					$page_id = 0;
				}
				$page_list_array[$i]['page_id'] = $page_id;
				$page_list_array[$i]['page_manage_path'] = "services.php?services_id=".$page_id;							
			}
	
			if($row->page_name == 'home'){
		        $sql = "SELECT max(home_id) AS id FROM home 
				WHERE profile_account_id = '".$profile_account_id."'";
				$p_res = $dbCustom->getResult($db,$sql);
				if($p_res->num_rows > 0){
					$p_obj = $p_res->fetch_object();
					$page_id = $p_obj->id;	
				}else{
					$page_id = 0;
				}
				$page_list_array[$i]['page_id'] = $page_id;
				$page_list_array[$i]['page_manage_path'] = "home.php?home_id=".$page_id;							
			}

			if($row->page_name == 'product-details'){
		        $sql = "SELECT max(product_details_id) AS id FROM product_details 
				WHERE profile_account_id = '".$profile_account_id."'";
				$p_res = $dbCustom->getResult($db,$sql);
				if($p_res->num_rows > 0){
					$p_obj = $p_res->fetch_object();
					$page_id = $p_obj->id;	
				}else{
					$page_id = 0;
				}
				$page_list_array[$i]['page_id'] = $page_id;
				$page_list_array[$i]['page_manage_path'] = "product-details.php?product_details_id=".$page_id;							
			}

			if($row->page_name == 'about-us'){
		        $sql = "SELECT max(about_us_id) AS id FROM about_us 
				WHERE profile_account_id = '".$profile_account_id."'";
				$p_res = $dbCustom->getResult($db,$sql);
				if($p_res->num_rows > 0){
					$p_obj = $p_res->fetch_object();
					$page_id = $p_obj->id;	
				}else{
					$page_id = 0;
				}
				$page_list_array[$i]['page_id'] = $page_id;
				$page_list_array[$i]['page_manage_path'] = "about-us.php?about_us_id=".$page_id;							
			}

			if($row->page_name == 'free-in-home-consultation'){
		        $sql = "SELECT max(free_in_home_consults_id) AS id FROM free_in_home_consults 
				WHERE profile_account_id = '".$profile_account_id."'";
				$p_res = $dbCustom->getResult($db,$sql);
				if($p_res->num_rows > 0){
					$p_obj = $p_res->fetch_object();
					$page_id = $p_obj->id;	
				}else{
					$page_id = 0;
				}
				$page_list_array[$i]['page_id'] = $page_id;
				$page_list_array[$i]['page_manage_path'] = "free-in-home-consults.php?free_in_home_consults_id=".$page_id;							
			}

			if($row->page_name == "shopping-cart"){
				$page_list_array[$i]["page_id"] = 0;
				// No edit page yet
				$page_list_array[$i]["page_manage_path"] = "shopping-cart_id=".$p_obj->id;							

			}
			
			if($row->page_name == 'showroom'){
		        $sql = "SELECT max(showroom_id) AS id FROM showroom
				WHERE profile_account_id = '".$profile_account_id."'";
				$p_res = $dbCustom->getResult($db,$sql);
				if($p_res->num_rows > 0){
					$p_obj = $p_res->fetch_object();
					$page_id = $p_obj->id;	
				}else{
					$page_id = 0;
				}
				$page_list_array[$i]['page_id'] = $page_id;
				$page_list_array[$i]['page_manage_path'] = "showroom.php?showroom_id=".$page_id;							
			}
			
			
			if($row->page_name == 'showroom-details'){
		        $sql = "SELECT max(showroom_details_id) AS id FROM showroom_details
				WHERE profile_account_id = '".$profile_account_id."'";
				$p_res = $dbCustom->getResult($db,$sql);
				if($p_res->num_rows > 0){
					$p_obj = $p_res->fetch_object();
					$page_id = $p_obj->id;	
				}else{
					$page_id = 0;
				}
				$page_list_array[$i]['page_id'] = $page_id;
				$page_list_array[$i]['page_manage_path'] = "showroom-details.php?showroom_details_id=".$page_id;							
			}
			
			if($row->page_name == 'showroom-cat'){
		        $sql = "SELECT max(showroom_cat_id) AS id FROM showroom_cat
				WHERE profile_account_id = '".$profile_account_id."'";
				$p_res = $dbCustom->getResult($db,$sql);
				if($p_res->num_rows > 0){
					$p_obj = $p_res->fetch_object();
					$page_id = $p_obj->id;	
				}else{
					$page_id = 0;
				}
				$page_list_array[$i]['page_id'] = $page_id;
				$page_list_array[$i]['page_manage_path'] = "showroom-cat.php?showroom_cat_id=".$page_id;							
			}
			
			if($row->page_name == 'we-design'){
		        $sql = "SELECT max(we_design_id) AS id FROM we_design
				WHERE profile_account_id = '".$profile_account_id."'";
				$p_res = $dbCustom->getResult($db,$sql);

				if($p_res->num_rows > 0){
					$p_obj = $p_res->fetch_object();
					$page_id = $p_obj->id;	
				}else{
					$page_id = 0;
				}

				$page_list_array[$i]['page_id'] = $page_id;
				$page_list_array[$i]['page_manage_path'] = "we-design.php?we_design_id=".$page_id;							
			}
	
			if($row->page_name == 'support'){
		        $sql = "SELECT max(support_id) AS id FROM support 
				WHERE profile_account_id = '".$profile_account_id."'";
				$p_res = $dbCustom->getResult($db,$sql);
				if($p_res->num_rows > 0){
					$p_obj = $p_res->fetch_object();
					$page_id = $p_obj->id;	
				}else{
					$page_id = 0;
				}
				$page_list_array[$i]['page_id'] = $page_id;
				$page_list_array[$i]['page_manage_path'] = "support.php?support_id=".$page_id;						
			}
			
			if($row->page_name == 'process'){
		        $sql = "SELECT max(process_page_id) AS id FROM process_page 
				WHERE profile_account_id = '".$profile_account_id."'";
				$p_res = $dbCustom->getResult($db,$sql);
				if($p_res->num_rows > 0){
					$p_obj = $p_res->fetch_object();
					$page_id = $p_obj->id;	
				}else{
					$page_id = 0;
				}
				$page_id = $p_res->num_rows;
				$page_list_array[$i]['page_id'] = $page_id;
				$page_list_array[$i]['page_manage_path'] = "process.php?process_page_id=".$page_id;							
			}
			
		
			if($row->page_name == 'faq'){
		        $sql = "SELECT max(faq_page_id) AS id FROM faq_page 
				WHERE profile_account_id = '".$profile_account_id."'";
				$p_res = $dbCustom->getResult($db,$sql);
				if($p_res->num_rows > 0){
					$p_obj = $p_res->fetch_object();
					$page_id = $p_obj->id;	
				}else{
					$page_id = 0;
				}
				$page_id = $p_res->num_rows;
				$page_list_array[$i]['page_id'] = $page_id;
				$page_list_array[$i]['page_manage_path'] = "faq-page.php?faq_page_id=".$page_id;							
			}

			if($row->page_name == 'for-the-pros'){
				
		        $sql = "SELECT max(for_the_pros_id) AS id FROM for_the_pros 
				WHERE profile_account_id = '".$profile_account_id."'";
				$p_res = $dbCustom->getResult($db,$sql);
				if($p_res->num_rows > 0){
					$p_obj = $p_res->fetch_object();
					$page_id = $p_obj->id;	
				}else{
					$page_id = 0;
				}
				$page_id = $p_res->num_rows;
				$page_list_array[$i]['page_id'] = $page_id;
				$page_list_array[$i]['page_manage_path'] = "for-the-pros.php?for_the_pros_id=".$page_id;							
			}
		
			if($row->page_name == 'careers'){
				
		        $sql = "SELECT max(careers_id) AS id FROM careers 
				WHERE profile_account_id = '".$profile_account_id."'";
				$p_res = $dbCustom->getResult($db,$sql);
				if($p_res->num_rows > 0){
					$p_obj = $p_res->fetch_object();
					$page_id = $p_obj->id;	
				}else{
					$page_id = 0;
				}
				$page_id = $p_res->num_rows;
				$page_list_array[$i]['page_id'] = $page_id;
				$page_list_array[$i]['page_manage_path'] = "careers.php?careers_id=".$page_id;							
			}

			if($row->page_name == 'privacy-statement'){
				
		        $sql = "SELECT max(privacy_statement_id) AS id FROM privacy_statement 
				WHERE profile_account_id = '".$profile_account_id."'";
				$p_res = $dbCustom->getResult($db,$sql);
				if($p_res->num_rows > 0){
					$p_obj = $p_res->fetch_object();
					$page_id = $p_obj->id;	
				}else{
					$page_id = 0;
				}
				$page_id = $p_res->num_rows;
				$page_list_array[$i]['page_id'] = $page_id;
				$page_list_array[$i]['page_manage_path'] = "privacy-statement.php?privacy_statement_id=".$page_id;							
			}

			if($row->page_name == 'policies'){
				
		        $sql = "SELECT max(policies_id) AS id FROM policies 
				WHERE profile_account_id = '".$profile_account_id."'";
				$p_res = $dbCustom->getResult($db,$sql);
				if($p_res->num_rows > 0){
					$p_obj = $p_res->fetch_object();
					$page_id = $p_obj->id;	
				}else{
					$page_id = 0;
				}
				$page_id = $p_res->num_rows;
				$page_list_array[$i]['page_id'] = $page_id;
				$page_list_array[$i]['page_manage_path'] = "policies.php?policies_id=".$page_id;							
			}


			if($row->page_name == 'diy-instructions'){
				
		        $sql = "SELECT max(diy_instructions_id) AS id FROM diy_instructions 
				WHERE profile_account_id = '".$profile_account_id."'";
				$p_res = $dbCustom->getResult($db,$sql);
				if($p_res->num_rows > 0){
					$p_obj = $p_res->fetch_object();
					$page_id = $p_obj->id;	
				}else{
					$page_id = 0;
				}
				$page_id = $p_res->num_rows;
				$page_list_array[$i]['page_id'] = $page_id;
				$page_list_array[$i]['page_manage_path'] = "diy-instructions.php?diy_instructions_id=".$page_id;							
			}



			if($row->page_name == 'locations'){
		        $sql = "SELECT max(locations_id) AS id FROM locations 
				WHERE profile_account_id = '".$profile_account_id."'";
				$p_res = $dbCustom->getResult($db,$sql);
				if($p_res->num_rows > 0){
					$p_obj = $p_res->fetch_object();
					$page_id = $p_obj->id;	
				}else{
					$page_id = 0;
				}
				$page_list_array[$i]['page_id'] = $page_id;
				$page_list_array[$i]['page_manage_path'] = "locations.php?locations_id=".$page_id;							
			}


			if($row->page_name == 'request-design'){
		        $sql = "SELECT max(request_design_id) AS id FROM request_design 
				WHERE profile_account_id = '".$profile_account_id."'";
				$p_res = $dbCustom->getResult($db,$sql);
				if($p_res->num_rows > 0){
					$p_obj = $p_res->fetch_object();
					$page_id = $p_obj->id;	
				}else{
					$page_id = 0;
				}
				$page_list_array[$i]['page_id'] = $page_id;
				$page_list_array[$i]['page_manage_path'] = "request-design.php?request_design_id=".$page_id;							
			}

			
			$i++;
		}
		
		return $page_list_array;
	}



/*
	function resetPagesSession(){
		
		$dbCustom = new DbCustom();
		$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
		$_SESSION["pages"] = array();
		$sql = "SELECT page_seo_id, page_name, seo_name, mssl, active  
				FROM page_seo
				WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
				ORDER BY page_name
				";		 		
		$res = $dbCustom->getResult($db,$sql);
		
		$i = 0;			
		while($row = $res->fetch_object()){
			$_SESSION["pages"][$i]['page_name'] = $row->page_name;
			$_SESSION["pages"][$i]['seo_name'] = $row->seo_name;
			$_SESSION["pages"][$i]["page_seo_id"] = $row->page_seo_id;
			$_SESSION["pages"][$i]["ssl"] = $row->mssl;
			$_SESSION["pages"][$i]["active"] = $row->active;

			$i++;
		}	
	}
*/

}
?>