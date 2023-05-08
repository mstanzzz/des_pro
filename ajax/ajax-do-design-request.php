<?php
if(!isset($real_root)){
	if(strpos($_SERVER['REQUEST_URI'], 'solvitware/' )){    
		$real_root = $_SERVER['DOCUMENT_ROOT'].'/solvitware'; 
	}elseif(strpos($_SERVER['REQUEST_URI'], 'storittek/' )){
		$real_root = $_SERVER['DOCUMENT_ROOT'].'/storittek';
	}else{
		$real_root = $_SERVER['DOCUMENT_ROOT']; 	
	}
}
require_once($real_root.'/includes/class.dbcustom.php');
$dbCustom = new DbCustom();
require_once($real_root.'/includes/config.php');
require_once($real_root.'/includes/class.customer_login.php');
$lgn = new CustomerLogin;

$new_cust=0;
$to_save=0;

$email = $_SESSION['dr']['email'] = isset($_GET['email'])? trim($_GET['email']): "";
$first_name = $_SESSION['dr']['first_name'] = isset($_GET['first_name'])? trim($_GET['first_name']): "";
$last_name = $_SESSION['dr']['last_name'] = isset($_GET['last_name'])? trim($_GET['last_name']): "";

$db = $dbCustom->getDbConnect(USER_DATABASE);
$user_id=$lgn->getUserIdByEmail($dbCustom,$email);
if($user_id==0){
	$new_cust=1;
	$password = "levantoutofchaoslogos";
	$username = $email;		
	$lgn->create_user($dbCustom, $password, $username, $first_name, $last_name);
	$_SESSION['ctg_cust_id'] = $user_id = $lgn->getUserIdByEmail($dbCustom,$email);
	setcookie('ctg_cust_id',$_SESSION['ctg_cust_id'],time() + (86400 * 360), '/');
}

if($user_id>0){	
	$lgn->autologin($dbCustom, $user_id, $email);
	$user_id=$user_id;
}

$name=$first_name." ".$last_name;
$city = $_SESSION['dr']['city'] = isset($_GET['city'])? trim(addslashes($_GET['city'])): "";
$state = $_SESSION['dr']['state'] = isset($_GET['state'])? trim(addslashes($_GET['state'])): "";
$zip = $_SESSION['dr']['zip'] = isset($_GET['zip'])? trim(addslashes($_GET['zip'])): "";
$phone = $_SESSION['dr']['phone'] = isset($_GET['phone'])? trim(addslashes($_GET['phone'])): "";
$preferred_contact = $_SESSION['dr']['preferred_contact'] = isset($_GET['preferred_contact'])? $_GET['preferred_contact']: "";
$urgency = $_SESSION['dr']['urgency'] = isset($_GET['urgency'])? trim($_GET['urgency']): "";
$importance_price = $_SESSION['dr']['importance_price'] = isset($_GET['importance_price'])? $_GET['importance_price']: "";
$importance_timeline = $_SESSION['dr']['importance_timeline'] = isset($_GET['importance_timeline'])? $_GET['importance_timeline']: "";
$importance_design = $_SESSION['dr']['importance_design'] = isset($_GET['importance_design'])? $_GET['importance_design']: "";
$expedite = $_SESSION['dr']['expedite'] = isset($_GET['expedite'])? $_GET['expedite']: "";
$expedite_note = $_SESSION['dr']['expedite_note'] = isset($_GET['expedite_note'])? trim($_GET['expedite_note']): "";
$proposed_finish_date = $_SESSION['dr']['proposed_finish_date'] = isset($_GET['proposed_finish_date'])? trim($_GET['proposed_finish_date']): "";
$closet_name = $_SESSION['dr']['closet_name'] = isset($_GET['closet_name'])? trim($_GET['closet_name']): "";
$double_hang = $_SESSION['dr']['double_hang'] = isset($_GET['double_hang'])? $_GET['double_hang']: '';
$double_hang_note = $_SESSION['dr']['double_hang_note'] = isset($_GET['double_hang_note'])? $_GET['double_hang_note']: '';
$p_wine_bottle_num = $_SESSION['dr']['p_wine_bottle_num'] = isset($_GET['p_wine_bottle_num'])? $_GET['p_wine_bottle_num']: '';
$personalize_pantry = $_SESSION['dr']['personalize_pantry'] = isset($_GET['personalize_pantry'])? $_GET['personalize_pantry']: "";
$p_pantry = $_SESSION['dr']['p_pantry'] = isset($_GET['p_pantry'])? $_GET['p_pantry']: "";
$p_pantry_note = $_SESSION['dr']['p_pantry_note'] = isset($_GET['p_pantry_note'])? trim($_GET['p_pantry_note']): "";
$p_access_note = $_SESSION['dr']['p_access_note'] = isset($_GET['p_access_note'])? trim($_GET['p_access_note']): "";
$additonal_info = $_SESSION['dr']['additonal_info'] = isset($_GET['additonal_info'])? trim($_GET['additonal_info']): "";
$closet_type = $_SESSION['dr']['closet_type'] = isset($_GET['closet_type'])? $_GET['closet_type']: "";
$closet_type_note = $_SESSION['dr']['closet_type_note'] = isset($_GET['closet_type_note'])? trim($_GET['closet_type_note']): "";
$ceiling = $_SESSION['dr']['ceiling'] = isset($_GET['ceiling'])? $_GET['ceiling']: "";
$ceiling_note = $_SESSION['dr']['ceiling_note'] = isset($_GET['ceiling_note'])? trim($_GET['ceiling_note']): "";
$ceiling_height = $_SESSION['dr']['ceiling_height'] = isset($_GET['ceiling_height'])? trim($_GET['ceiling_height']): "";
$obstructions_note = $_SESSION['dr']['obstructions_note'] = isset($_GET['obstructions_note'])? trim($_GET['obstructions_note']): "";
$closet_shared_note = $_SESSION['dr']['closet_shared_note'] = isset($_GET['closet_shared_note'])? trim($_GET['closet_shared_note']): "";
$base_mold_height = $_SESSION['dr']['base_mold_height'] = isset($_GET['base_mold_height'])? trim($_GET['base_mold_height']): "";
$shoe_storage_note = $_SESSION['dr']['shoe_storage_note'] = isset($_GET['shoe_storage_note'])? trim($_GET['shoe_storage_note']): "";
$shoe_storage_style_note = $_SESSION['dr']['shoe_storage_style_note'] = isset($_GET['shoe_storage_style_note'])? trim($_GET['shoe_storage_style_note']): "";
$hanging_space_note = $_SESSION['dr']['hanging_space_note'] = isset($_GET['hanging_space_note'])? trim($_GET['hanging_space_note']): "";
$long_hang = $_SESSION['dr']['long_hang'] = isset($_GET['long_hang'])? $_GET['long_hang']: "";
$long_hang_note = $_SESSION['dr']['long_hang_note'] = isset($_GET['long_hang_note'])? trim($_GET['long_hang_note']): "";
$accessories_note = $_SESSION['dr']['accessories_note'] = isset($_GET['accessories_note'])? trim($_GET['accessories_note']): "";
$bottle_num_note = $_SESSION['dr']['bottle_num_note'] = isset($_GET['bottle_num_note'])? trim($_GET['bottle_num_note']): "";
$wine_feat_note = $_SESSION['dr']['wine_feat_note'] = isset($_GET['wine_feat_note'])? trim($_GET['wine_feat_note']): "";
$note = $_SESSION['dr']['note'] = isset($_GET['note'])? trim($_GET['note']): "";
$color_note = $_SESSION['dr']['color_note'] = isset($_GET['color_note'])? trim($_GET['color_note']): "";
$job_type = $_SESSION['dr']['job_type'] = isset($_GET['job_type'])? $_GET['job_type']: "";
$best_contact_time = $_SESSION['dr']['best_contact_time'] = isset($_GET['best_contact_time'])? trim($_GET['best_contact_time']): "";
$budget_range = $_SESSION['dr']['budget_range'] = isset($_GET['budget_range'])? $_GET['budget_range']: "";
$storage_type = $_SESSION['dr']['storage_type'] = isset($_GET['storage_type'])? $_GET['storage_type']: "";
$master_type = $_SESSION['dr']['master_type'] = isset($_GET['master_type'])? $_GET['master_type']: "";
$mobile_hanging_needs = $_SESSION['dr']['mobile_hanging_needs'] = isset($_GET['mobile_hanging_needs'])? $_GET['mobile_hanging_needs']: "";
$child_age = $_SESSION['dr']['child_age'] = isset($_GET['child_age'])? trim($_GET['child_age']): "";
$other_storage_type = $_SESSION['dr']['other_storage_type'] = isset($_GET['other_storage_type'])? $_GET['other_storage_type']: "";
$short_hang = $_SESSION['dr']['short_hang'] = isset($_GET['short_hang'])? $_GET['short_hang']: "";
$medium_hang = $_SESSION['dr']['medium_hang'] = isset($_GET['medium_hang'])? $_GET['medium_hang']: "";
$drawers = $_SESSION['dr']['drawers'] = isset($_GET['drawers'])? $_GET['drawers']: "";
$drawers_num = $_SESSION['dr']['drawers_num'] = isset($_GET['drawers_num'])? $_GET['drawers_num']: "";
$drawers_num_note = $_SESSION['dr']['drawers_num_note'] = isset($_GET['drawers_num_note'])? trim($_GET['drawers_num_note']): "";
$tie_rack = $_SESSION['dr']['tie_rack'] = isset($_GET['tie_rack'])? trim($_GET['tie_rack']): "";
$belt_rack = $_SESSION['dr']['belt_rack'] = isset($_GET['belt_rack'])? trim($_GET['belt_rack']): "";
$valet_rod = $_SESSION['dr']['valet_rod'] = isset($_GET['valet_rod'])? trim($_GET['valet_rod']): "";
$finish = $_SESSION['dr']['finish'] = isset($_GET['finish'])? trim($_GET['finish']): "";
$obscure_description = $_SESSION['dr']['obscure_description'] = isset($_GET['obscure_description'])? trim($_GET['obscure_description']): "";
$comments = $_SESSION['dr']['comments'] = isset($_GET['comments'])? trim($_GET['comments']): "";
$date_submitted = $_SESSION['dr']['date_submitted'] = isset($_GET['date_submitted'])? trim($_GET['date_submitted']): "";
$additionl_info = $_SESSION['dr']['additionl_info'] = isset($_GET['additionl_info'])? trim($_GET['additionl_info']): "";
$personalize_wine = $_SESSION['dr']['personalize_wine'] = isset($_GET['personalize_wine'])? trim($_GET['personalize_wine']): "";
$wine_style = $_SESSION['dr']['wine_style'] = isset($_GET['wine_style'])? $_GET['wine_style']: "";
$bottle_num = $_SESSION['dr']['bottle_num'] = isset($_GET['bottle_num'])? $_GET['bottle_num']: "";
$bottles = $_SESSION['dr']['bottles'] = isset($_GET['bottles'])? $_GET['bottles']: "";
$color = $_SESSION['dr']['color'] = isset($_GET['color'])? $_GET['color']: "";
$shelves_num = $_SESSION['dr']['shelves_num'] = isset($_GET['shelves_num'])? $_GET['shelves_num']: "";
$shelves_num_note = $_SESSION['dr']['shelves_num_note'] = isset($_GET['shelves_num_note'])? trim($_GET['shelves_num_note']): "";
$hanging_space = $_SESSION['dr']['hanging_space'] = isset($_GET['hanging_space'])? $_GET['hanging_space']: "";
$closet_shared = $_SESSION['dr']['closet_shared'] = isset($_GET['closet_shared'])? $_GET['closet_shared']: "";
$closet_style_scale = $_SESSION['dr']['closet_style_scale'] = isset($_GET['closet_style_scale'])? $_GET['closet_style_scale']: 0;
$wall_length_other = $_SESSION['dr']['wall_length_other'] = isset($_GET['wall_length_other'])? trim($_GET['wall_length_other']): "";
$space_shape = $_SESSION['dr']['space_shape'] = isset($_GET['space_shape'])? $_GET['space_shape']: 0;
$personalize_closet = $_SESSION['dr']['personalize_closet'] = isset($_GET['personalize_closet'])? trim($_GET['personalize_closet']): "";
$closet_name_mobile = $_SESSION['dr']['closet_name_mobile'] = isset($_GET['closet_name_mobile'])? trim($_GET['closet_name_mobile']): "";
if(strlen($closet_name_mobile) > 3){
	$closet_name = $_SESSION['dr']['closet_name'] = $closet_name_mobile;
}
$space_shape_note = $_SESSION['dr']['space_shape_note'] = isset($_GET['space_shape_note'])? trim($_GET['space_shape_note']): "";
$door_size = $_SESSION['dr']['door_size'] = isset($_GET['door_size'])? $_GET['door_size']: "";
$door_style = $_SESSION['dr']['door_style'] = isset($_GET['door_style'])? $_GET['door_style']: "";
$door_type = $_SESSION['dr']['door_type'] = isset($_GET['door_type'])? $_GET['door_type']: "";
$door_type_note = $_SESSION['dr']['door_type_note'] = isset($_GET['door_type_note'])? trim($_GET['door_type_note']): "";
$door_style_note = $_SESSION['dr']['door_style_note'] = isset($_GET['door_style_note'])? trim($_GET['door_style_note']): "";
$wall_a = $_SESSION['dr']['wall_a'] = isset($_GET['wall_a'])? trim($_GET['wall_a']): "";
$wall_b = $_SESSION['dr']['wall_b'] = isset($_GET['wall_b'])? trim($_GET['wall_b']): "";
$wall_c = $_SESSION['dr']['wall_c'] = isset($_GET['wall_c'])? trim($_GET['wall_c']): "";
$wall_d = $_SESSION['dr']['wall_d'] = isset($_GET['wall_d'])? trim($_GET['wall_d']): "";
$wall_e = $_SESSION['dr']['wall_e'] = isset($_GET['wall_e'])? trim($_GET['wall_e']): "";
$wall_f = $_SESSION['dr']['wall_f'] = isset($_GET['wall_f'])? trim($_GET['wall_f']): "";
$wall_g = $_SESSION['dr']['wall_g'] = isset($_GET['wall_g'])? trim($_GET['wall_g']): "";

// comma delimited
$obstructions = isset($_GET['obstructions'])? $_GET['obstructions']: '';
$shoes = isset($_GET['shoes'])? $_GET['shoes']: '';
$shoe_storage = isset($_GET['shoe_storage'])? $_GET['shoe_storage']: '';
$shoe_storage_style = isset($_GET['shoe_storage_style'])? $_GET['shoe_storage_style']: '';
$accessories = isset($_GET['accessories'])? $_GET['accessories']: '';
$p_access = isset($_GET['p_access'])? $_GET['p_access']: '';
$bottle_size = isset($_GET['bottle_size'])? $_GET['bottle_size']: '';
$wine_feat = isset($_GET['wine_feat'])? $_GET['wine_feat']: '';


$source = $_SESSION['dr']['source'] = isset($_POST['source'])? trim($_POST['source']): "";
$origin = $_SESSION['dr']['origin'] = isset($_POST['origin'])? trim($_POST['origin']): "";

if($to_save){
	$origin="User Saved For Later";	
}

$deid = isset($_POST['deid'])? $_POST['deid']: 0;
if(!is_numeric($deid))$deid=0;

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

if($deid>0){
	$the_id=$deid;
	$stmt=$db->prepare("UPDATE design_email
			SET first_name=?
			,last_name=?
			,name=?
			,city=?
			,state=?
			,zip=?
			,email=?
			,phone=?
			,preferred_contact=?
			,urgency=?
			,importance_price=?
			,importance_timeline=?
			,importance_design=?
			,expedite=?
			,expedite_note=?
			,proposed_finish_date=?
			,obstructions=?
			,obstructions_note=?
			,double_hang=?
			,double_hang_note=?
			,personalize_pantry=?
			,p_wine_bottle_num=?
			,p_pantry=?
			,p_pantry_note=?
			,p_access=?
			,p_access_note=?
			,additonal_info=?
			,closet_type=?
			,closet_type_note=?
			,ceiling=?
			,ceiling_note=?
			,ceiling_height=?
			,closet_shared_note=?
			,base_mold_height=?
			,shoes=?
			,shoe_storage_style=?
			,shoe_storage=?
			,shoe_storage_note=?
			,shoe_storage_style_note=?
			,hanging_space_note=?
			,long_hang_note=?
			,accessories=?
			,accessories_note=?
			,bottle_num_note=?
			,wine_feat=?
			,wine_feat_note=?
			,color_note=?
			,job_type=?
			,best_contact_time=?
			,budget_range=?
			,storage_type=?
			,master_type=?
			,mobile_hanging_needs=?
			,child_age=?
			,other_storage_type=?
			,short_hang=?
			,medium_hang=?
			,long_hang=?
			,drawers=?
			,tie_rack=?
			,belt_rack=?
			,valet_rod=?
			,finish=?
			,obscure_description=?
			,comments=?
			,date_submitted=?
			,source=?
			,origin=?
			,additionl_info=?
			,personalize_wine=?
			,wine_style=?
			,bottle_size=?
			,bottle_num=?
			,bottles=?
			,note=?
			,color=?
			,shelves_num=?
			,shelves_num_note=?
			,drawers_num=?
			,hanging_space=?
			,drawers_num_note=?
			,closet_shared=?
			,closet_style_scale=?
			,wall_length_other=?
			,space_shape=?
			,space_shape_note=?
			,personalize_closet=?
			,closet_name=?	
			,door_size=?
			,door_style=?
			,door_type=?
			,door_type_note=?
			,door_style_note=?
			,wall_a=?
			,wall_b=?
			,wall_c=?
			,wall_d=?
			,wall_e=?
			,wall_f=?
			,wall_g=?
		WHERE design_email_id = ?");
		
	if(!$stmt->bind_param("ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssi",
		$first_name
		,$last_name
		,$name
		,$city
		,$state
		,$zip
		,$email
		,$phone
		,$preferred_contact
		,$urgency
		,$importance_price
		,$importance_timeline
		,$importance_design
		,$expedite
		,$expedite_note
		,$proposed_finish_date
		,$obstructions
		,$obstructions_note
		,$double_hang
		,$double_hang_note
		,$personalize_pantry
		,$p_wine_bottle_num
		,$p_pantry
		,$p_pantry_note
		,$p_access
		,$p_access_note
		,$additonal_info
		,$closet_type
		,$closet_type_note
		,$ceiling
		,$ceiling_note
		,$ceiling_height
		,$closet_shared_note
		,$base_mold_height
		,$shoes
		,$shoe_storage_style
		,$shoe_storage
		,$shoe_storage_note
		,$shoe_storage_style_note
		,$hanging_space_note
		,$long_hang_note
		,$accessories
		,$accessories_note
		,$bottle_num_note
		,$wine_feat
		,$wine_feat_note
		,$color_note
		,$job_type
		,$best_contact_time
		,$budget_range
		,$storage_type
		,$master_type
		,$mobile_hanging_needs
		,$child_age
		,$other_storage_type
		,$short_hang
		,$medium_hang
		,$long_hang
		,$drawers
		,$tie_rack
		,$belt_rack
		,$valet_rod
		,$finish
		,$obscure_description
		,$comments
		,$date_submitted
		,$source
		,$origin
		,$additionl_info
		,$personalize_wine
		,$wine_style
		,$bottle_size
		,$bottle_num
		,$bottles
		,$note
		,$color
		,$shelves_num
		,$shelves_num_note
		,$drawers_num
		,$hanging_space
		,$drawers_num_note
		,$closet_shared
		,$closet_style_scale
		,$wall_length_other
		,$space_shape
		,$space_shape_note
		,$personalize_closet
		,$closet_name	
		,$door_size
		,$door_style
		,$door_type
		,$door_type_note
		,$door_style_note
		,$wall_a
		,$wall_b
		,$wall_c
		,$wall_d
		,$wall_e
		,$wall_f
		,$wall_g
		,$deid)){		
		echo 'Error-2 '.$db->error;
	}else{
		$stmt->execute();
		$stmt->close();
		$msg = "Your design request has been submitted";
	}		
	
}else{

	$stmt = $db->prepare("INSERT INTO design_email
		(first_name
		,last_name
		,name
		,city
		,state
		,zip
		,email
		,phone
		,preferred_contact
		,urgency
		,importance_price
		,importance_timeline
		,importance_design
		,expedite
		,expedite_note
		,proposed_finish_date
		,obstructions
		,obstructions_note
		,double_hang
		,double_hang_note
		,personalize_pantry
		,p_wine_bottle_num
		,p_pantry
		,p_pantry_note
		,p_access
		,p_access_note
		,additonal_info
		,closet_type
		,closet_type_note
		,ceiling
		,ceiling_note
		,ceiling_height
		,closet_shared_note
		,base_mold_height
		,shoes
		,shoe_storage_style
		,shoe_storage
		,shoe_storage_note
		,shoe_storage_style_note
		,hanging_space_note
		,long_hang_note
		,accessories
		,accessories_note
		,bottle_num_note
		,wine_feat
		,wine_feat_note
		,color_note
		,job_type
		,best_contact_time
		,budget_range
		,storage_type
		,master_type
		,mobile_hanging_needs
		,child_age
		,other_storage_type
		,short_hang
		,medium_hang
		,long_hang
		,drawers
		,tie_rack
		,belt_rack
		,valet_rod
		,finish
		,obscure_description
		,comments
		,date_submitted
		,source
		,origin
		,additionl_info
		,personalize_wine
		,wine_style
		,bottle_size
		,bottle_num
		,bottles
		,note
		,color
		,shelves_num
		,shelves_num_note
		,drawers_num
		,hanging_space
		,drawers_num_note
		,closet_shared
		,closet_style_scale
		,wall_length_other
		,space_shape
		,space_shape_note
		,personalize_closet
		,closet_name	
		,door_size
		,door_style
		,door_type
		,door_type_note
		,door_style_note
		,wall_a
		,wall_b
		,wall_c
		,wall_d
		,wall_e
		,wall_f
		,wall_g
		,profile_account_id)
		VALUES
		(?	
		,?
		,?
		,?		
		,?	
		,?	
		,?		
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?	
		,?		
		,?)"); 	

	if(!$stmt->bind_param("ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssi",
		$first_name
		,$last_name
		,$name
		,$city
		,$state
		,$zip
		,$email
		,$phone
		,$preferred_contact
		,$urgency
		,$importance_price
		,$importance_timeline
		,$importance_design
		,$expedite
		,$expedite_note
		,$proposed_finish_date
		,$obstructions
		,$obstructions_note
		,$double_hang
		,$double_hang_note
		,$personalize_pantry
		,$p_wine_bottle_num
		,$p_pantry
		,$p_pantry_note
		,$p_access
		,$p_access_note
		,$additonal_info
		,$closet_type
		,$closet_type_note
		,$ceiling
		,$ceiling_note
		,$ceiling_height
		,$closet_shared_note
		,$base_mold_height
		,$shoes
		,$shoe_storage_style
		,$shoe_storage
		,$shoe_storage_note
		,$shoe_storage_style_note
		,$hanging_space_note
		,$long_hang_note
		,$accessories
		,$accessories_note
		,$bottle_num_note
		,$wine_feat
		,$wine_feat_note
		,$color_note
		,$job_type
		,$best_contact_time
		,$budget_range
		,$storage_type
		,$master_type
		,$mobile_hanging_needs
		,$child_age
		,$other_storage_type
		,$short_hang
		,$medium_hang
		,$long_hang
		,$drawers
		,$tie_rack
		,$belt_rack
		,$valet_rod
		,$finish
		,$obscure_description
		,$comments
		,$date_submitted
		,$source
		,$origin
		,$additionl_info
		,$personalize_wine
		,$wine_style
		,$bottle_size
		,$bottle_num
		,$bottles
		,$note
		,$color
		,$shelves_num
		,$shelves_num_note
		,$drawers_num
		,$hanging_space
		,$drawers_num_note
		,$closet_shared
		,$closet_style_scale
		,$wall_length_other
		,$space_shape
		,$space_shape_note
		,$personalize_closet
		,$closet_name	
		,$door_size
		,$door_style
		,$door_type
		,$door_type_note
		,$door_style_note
		,$wall_a
		,$wall_b
		,$wall_c
		,$wall_d
		,$wall_e
		,$wall_f
		,$wall_g
		,$_SESSION['profile_account_id'])){		
		echo 'Error-2 '.$db->error;
	}else{
		$stmt->execute();
		$stmt->close();
		$the_id=$db->insert_id;
		$msg = "Your design request has been submitted";
		
	}
}

$sql = "SELECT DISTINCT file_name 
		FROM temp_upload 
		WHERE temp_id = '".$_SESSION['temp_id']."'
		AND profile_account_id = '".$_SESSION["profile_account_id"]."'";
$img_result = $dbCustom->getResult($db,$sql);
if(!file_exists($real_root."/user_uploads/".$_SESSION['profile_account_id']."/")){
	mkdir($real_root."/user_uploads/".$_SESSION['profile_account_id']."/" , $mode = 0777 );
}
while($row = $img_result->fetch_object()){
	$from_file = $real_root."/temp_uploads/".$_SESSION['temp_id']."/".$row->file_name;
	if(file_exists($from_file)){
   		$file_name = str_replace (" ", "_", $row->file_name);
		$file_name = $_SESSION['temp_id']."_".$file_name;
		echo $file_name;
		echo "<br />";
		if(copy($from_file , $real_root."/user_uploads/".$_SESSION['profile_account_id']."/".$file_name)){
			$sql = "INSERT INTO design_email_image 
				(file_name, design_email_id, temp_id) 
				VALUES 
				('".$file_name."', '".$the_id."', '".$_SESSION['temp_id']."')";				
			$r = $dbCustom->getResult($db,$sql);
		}
	}
}
	
if(file_exists($real_root."/temp_uploads/".$_SESSION['temp_id'])) {
	deleteDir($real_root."/temp_uploads/".$_SESSION['temp_id']);
}	

$origin = "From design form page";

$to = $email;		
//$to = "mark.stanz@gmail.com";

$message_head = '';
$message_head .= "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' "; 
$message_head .= "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>";
$message_head .= "<html xmlns='http://www.w3.org/1999/xhtml'>";
$message_head .= "<head>";
$message_head .= "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
$message_head .= "<title>Design Request</title>";
$message_head .= "</head>";
$message_head .= "<body>";

if($new_cust){
	$password_salt=$lgn->getPasswordSalt($dbCustom,$user_id);
	if($password_salt != ''){	
		if($to_save){
			$link = SITEROOT."reset-password-".$password_salt."/".$the_id.".html";
			$message= $message_head;
			$message.= "Thank you for your interest in Closets To Go! ";
			
$message.= "\n\n\r We saved your design request data so that you may";
$message.= "return to and finish the design at your convenience.";  
$message.= "\n\n\r Please set your password by clicking this link or pasting into your web browser. ";			
$message.= "\n\n\r";
$message .= $link;
$message.= "\n\n\r";
$message.= "Thank you for trusting Closets To Go with your custom storage needs!";
			
			$subject = "Closets To Go Design Request Saved";				
			$headers = "From: services@closetstogo.com";
			$headers .= "\r\n";
			$headers .= "CC: mark.stanz@gmail.com";		

			if($site != "local"){	
				error_reporting(0);
				if(mail($to, $subject, $message, $headers)){

				}else{
								
				}
			}
		}else{
			$link = SITEROOT."reset-password-".$password_salt."/.html";
			$message= $message_head;

$message.= "\n\n\r We&lsquo;ve received your Design Request Form!"; 
$message.= "\n\n\r It's now on its way to our Design Team for review."; 
$message.= "\n\n\r A member of our Team will be contacting you shortly to gather"; 
$message.= " any additional information needed and discuss next steps.";  
$message.= "\n\n\r Please set your password by clicking this link or pasting into your web browser. ";			
$message.= "\n\n\r";
$message .= $link;
$message.= "\n\n\r Please be sure to check your spam / junk folders."; 
			$message.= "\n\n\r";
			$subject = " Closets To Go Design Request Received";				
			$headers = "From: services@closetstogo.com";
			$headers .= "\r\n";
			$headers .= "CC: mark.stanz@gmail.com";		
			
			if($site != "local"){	
				error_reporting(0);
				if(mail($to, $subject, $message, $headers)){

				}else{
								
				}
			}
		}
	}
}else{


	if($to_save){
		$link = SITEROOT."we-design-survey/".$the_id.".html";
		$message= $message_head;

$message.= "Thank you for your interest in Closets To Go! ";
$message.= "\n\n\r We saved your design request data so that you may";
$message.= " return to and finish the design at your convenience.";  
$message.= "\n\n\r";
$message .= "<a href='".$link."'>Return To Closets To Go</a>";
$message.= "\n\n\r";
		
		$subject = " Closets To Go Design Request Received";				
		
		$headers = "From: services@closetstogo.com";
		$headers .= "\r\n";
		$headers .= "CC: mark.stanz@gmail.com";	

		if($site != "local"){	
			error_reporting(0);
			if(mail($to, $subject, $message, $headers)){

			}else{
								
			}
		}
	}else{

		$message = $message_head;

		$message .= "CONGRATULATIONS ".$name."\n\n\r"; 
		
		$message .= "<div style='color:#565656;'>";
		$message .= "<div style='background:#efefef; width:100%; padding:8px;'>";
$message .= "We&lsquo;ve received your Design Request Form!"; 
$message .= " It's now on its way to our Design Team for review."; 
$message .= " A member of our Team will be contacting you shortly to gather any"; 
$message .= " additional information needed and discuss next steps.";  
$message .= " Please be sure to check your spam / junk folders."; 
$message .= "Thank you for trusting Closets To Go with your custom storage needs!";		
		$message .= "<br /><br />Sincerely,";
		$message .= "<br />";
		$message .= "<a href='".SITEROOT."'>Closets To Go</a>";
		$message .= "<br />";
		$message .= "<br />";
		$message .= SITEROOT;		
		$message .="</div>";
		$message .= "</body>";
		$message .= "</html>";
			
		$subject_c = "Closets To Go Design Request";		
		$headers = "Content-type: text/html; charset=iso-8859-1";	
		$headers .= "\r\n";
		$headers .= "From: services@closetstogo.com";
		$headers .= "\r\n";
		$headers .= "Return-path: services@closetstogo.com";
		$headers .= "\r\n";
		$headers .= "CC: mark@nazardesigns.com";
		
		if($site != "local"){
			error_reporting(0);		
			if(!mail($to, $subject_c, $message, $headers)){
				
			}
		}
		$msg = "Your request has been submitted to Closets To Go";
	}
}


	
	$message = '';
	$message .= "<html>";
	$message .= "<head>";
	$message .= "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
	$message .= "<title>Design Request </title>";
	$message .= "</head>";
	$message .= "<body>";
	$message .= "<div style='font-size:17px;'>";
	$message .= "<div style='background:#efefef; width:100%; padding:8px;'>";
	$message .= "<font color='#000000'>Design Request</font>";
	$message .= "</div><br />";
	if($to_save){
		$message .= "<div style='background:#efefef; width:100%; padding:8px;'>";
		$message .= "<font color='red'>This Request Was Saved for Later by the Customer</font>";
		$message .= "</div><br />";
	}
	$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Site:</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".SITEROOT."</font></div>";	
	$message .= "<div style='clear:both;'></div>";
	$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Customer Email:</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'><a href='mailto:".$email."'>".$email."</a></font></div>";
	$message .= "<div style='clear:both;'></div>";
	$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Customer Name:</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$name."</font></div>";
	$message .= "<div style='clear:both;'></div>";
	if($phone != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Phone:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$phone."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}	
	if($city != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>City:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$city."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}			
	if($state != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>State:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$state."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}			
	if($zip != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Zip Code:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$zip."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}			
	if($preferred_contact != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Preferred contact:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$preferred_contact."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($date_submitted != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>date_submitted:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$date_submitted."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($closet_name != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>closet_name:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$closet_name."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($personalize_closet != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>personalize_closet:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$personalize_closet."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($source != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>source:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$source."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($origin != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>origin:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$origin."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($budget_range != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Budget range:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$budget_range."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($urgency != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Urgency:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$urgency."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($importance_price != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Importance of price:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$importance_price."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($importance_timeline != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Importance of timeline:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$importance_timeline."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($importance_design != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Importance of design:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$importance_design."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($best_contact_time != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Best contact time:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$best_contact_time."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($proposed_finish_date != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Proposed finish date:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$proposed_finish_date."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($expedite != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Expedite:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$expedite."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($expedite_note != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Expedite Note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$expedite_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($obstructions != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Obstructions:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$obstructions."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($obstructions_note != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Obstructions note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$obstructions_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($closet_style_scale != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>closet_style_scale:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$closet_style_scale."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($closet_type != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Closet_type:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$closet_type."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($closet_type_note != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Closet_type note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$closet_type_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($storage_type != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Storage Type:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$storage_type."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($other_storage_type != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Other storage Type:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$other_storage_type."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($child_age != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Child_age:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$child_age."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($closet_shared != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Closet shared:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$closet_shared."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($closet_shared_note != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Closet shared note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$closet_shared_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($ceiling != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Ceiling:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$ceiling."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($ceiling_note != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Ceiling note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$ceiling_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($ceiling_height != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Ceiling height:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$ceiling_height."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($base_mold_height != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Base mold height:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$base_mold_height."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($shoes != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>shoes:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$shoes."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($shoe_storage_style != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Shoe storage style:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$shoe_storage_style."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($shoe_storage_style_note != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Shoe storage style note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$shoe_storage_style_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($shoe_storage != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Shoe storage:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$shoe_storage."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($shoe_storage_note != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Shoe storage note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$shoe_storage_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($tie_rack != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Tie_rack:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$tie_rack."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($belt_rack != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Belt_rack:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$belt_rack."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($valet_rod != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Valet_rod:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$valet_rod."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($accessories != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Accessories:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$accessories."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($accessories_note != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Accessories_note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$accessories_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($job_type != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>job_type:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$job_type."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($master_type != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>master_type:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$master_type."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($mobile_hanging_needs != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>mobile_hanging_needs:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$mobile_hanging_needs."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($personalize_pantry != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Personalize Pantry:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$personalize_pantry."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($p_pantry != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Pantry:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$p_pantry."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($p_pantry_note != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Pantry_note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$p_pantry_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($p_access != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Pantry accessoty:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$p_access."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($p_access_note != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Pantry accessoty note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$p_access_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($p_wine_bottle_num != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Pantry wine bottle num:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$p_wine_bottle_num."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($personalize_wine != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>personalize_wine:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$personalize_wine."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($bottle_num_note != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Bottle_num_note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$bottle_num_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}

	if($wine_feat != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Wine_feat:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wine_feat."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($wine_feat_note != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Wine_feat_note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wine_feat_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($wine_style != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>wine_style:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wine_style."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($bottle_size != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>bottle_size:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$bottle_size."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($bottle_num != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>bottle_num:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$bottle_num."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($bottles != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>bottles:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$bottles."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($shelves_num != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>shelves_num:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$shelves_num."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($shelves_num_note != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>shelves_num_note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$shelves_num_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($drawers != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>drawers:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$drawers."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($drawers_num != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>drawers_num:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$drawers_num."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($drawers_num_note != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>drawers_num_note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$drawers_num_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($hanging_space != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>hanging_space:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$hanging_space."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($hanging_space_note != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Hanging space note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$hanging_space_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($long_hang != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Long hang:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".stripAllSlashes($long_hang)."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}		
	if($long_hang_note != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Long hang note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$long_hang_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($double_hang != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Double_hang:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$double_hang."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($double_hang_note != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Double hang note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$double_hang_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($medium_hang != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Medium hang:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$medium_hang."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($long_hang != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Long hang:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$long_hang."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($short_hang != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Short hang:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".stripAllSlashes($short_hang)."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($door_size != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>door size:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$door_size."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($door_type != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>door type:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$door_type."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($door_style != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>door_style:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$door_style."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}	
	if($door_type_note != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>door_type_note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$door_type_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}	
	if($door_style_note != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>door_style_note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$door_style_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($wall_length_other != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>wall_length_other:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wall_length_other."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($space_shape != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>space_shape:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$space_shape."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($space_shape_note != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>space_shape_note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$space_shape_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($wall_a != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>wall a:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wall_a."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($wall_b != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>wall b:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wall_b."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($wall_c != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>wall c:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wall_c."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($wall_d != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>wall d:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wall_d."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($wall_e != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>wall e:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wall_e."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($wall_f != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>wall f:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wall_f."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($wall_g != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>wall g:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wall_g."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($finish != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Finish:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$finish."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($color != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>color:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$color."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($color_note != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Color_note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$color_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($comments != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>comments:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$comments."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($additonal_info != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Additonal info:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$additonal_info."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($note != ''){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	$sql = "SELECT DISTINCT file_name
			FROM design_email_image 
			WHERE design_email_id  = '".$the_id."' 
			AND temp_id = '".$_SESSION['temp_id']."'";	
	$img_result = $dbCustom->getResult($db,$sql);
	while($row = $img_result->fetch_object()){
		$message .= "<div style='float:left; width:140px; text-align:right;'><font color='#000000'>Uploaded File:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'>".SITEROOT."/user_uploads/".$_SESSION['profile_account_id']."/".$row->file_name."</div>";
		$message .= "<div style='clear:both;'></div>";
	}
	$message .= "</div><br /><br />";
	$message .= "</body>";
	$message .= "</html>";

	
	$subject_c = "Design Request";		
	$headers = "Content-type: text/html; charset=iso-8859-1";	
	$headers .= "\r\n";
	$headers .= "From: help@closetstogo.com";
	$headers .= "\r\n";
	$headers .= "Return-path: help@closetstogo.com";
	$headers .= "\r\n";
	$headers .= "CC: alicia@closetstogo.com";
	$headers .= "\r\n";
	$headers .= "Bcc: mark@nazardesigns.com";
	$to = 'jeff@closetstogo.com';
	if($site != "local"){	
		error_reporting(0);
		if(mail($to, $subject_c, $message, $headers)){
			$success = 1;	
		}
	}	

?>

