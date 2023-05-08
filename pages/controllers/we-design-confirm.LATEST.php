<?php
$is_spam=0;
$deid=0;
$msg = '';
$success = 0;
$ts = time();
$new_cust=0;

$to_save = isset($_POST['to_save'])? $_POST['to_save']: 0;
$deid = isset($_POST['deid'])? $_POST['deid']: 0;
if(!is_numeric($deid))$deid=0;

$email=$_SESSION['dr']['email'] = isset($_POST['email'])? trim($_POST['email']): "";
$first_name = $_SESSION['dr']['first_name'] = isset($_POST['first_name'])? trim($_POST['first_name']): "";
$last_name = $_SESSION['dr']['last_name'] = isset($_POST['last_name'])? trim($_POST['last_name']): "";
$name = $first_name." ".$last_name;
$user_id=$lgn->getUserIdByEmail($dbCustom,$email);
if($user_id==0){
	$new_cust=1;
	$password = "levantoutofchaoslogos";
	$username = $email;		
	$lgn->create_user($dbCustom, $password, $username, $first_name, $last_name);
	$_SESSION['ctg_cust_id'] = $user_id = $user_id = $lgn->getUserIdByEmail($dbCustom,$email);
	setcookie('ctg_cust_id',$_SESSION['ctg_cust_id'],time() + (86400 * 360), '/');
}
if($user_id>0){	
	//$lgn->autologin($dbCustom, $user_id, $email);
}


$city = $_SESSION['dr']['city'] = isset($_POST['city'])? trim(addslashes($_POST['city'])): "";
$state = $_SESSION['dr']['state'] = isset($_POST['state'])? trim(addslashes($_POST['state'])): "";
$zip = $_SESSION['dr']['zip'] = isset($_POST['zip'])? trim(addslashes($_POST['zip'])): "";
$phone = $_SESSION['dr']['phone'] = isset($_POST['phone'])? trim(addslashes($_POST['phone'])): "";
$preferred_contact = $_SESSION['dr']['preferred_contact'] = isset($_POST['preferred_contact'])? $_POST['preferred_contact']: "";
$urgency = $_SESSION['dr']['urgency'] = isset($_POST['urgency'])? trim($_POST['urgency']): "";
$importance_price = $_SESSION['dr']['importance_price'] = isset($_POST['importance_price'])? $_POST['importance_price']: "";
$importance_timeline = $_SESSION['dr']['importance_timeline'] = isset($_POST['importance_timeline'])? $_POST['importance_timeline']: "";
$importance_design = $_SESSION['dr']['importance_design'] = isset($_POST['importance_design'])? $_POST['importance_design']: "";
$expedite = $_SESSION['dr']['expedite'] = isset($_POST['expedite'])? $_POST['expedite']: "";
$expedite_note = $_SESSION['dr']['expedite_note'] = isset($_POST['expedite_note'])? trim($_POST['expedite_note']): "";
$proposed_finish_date = $_SESSION['dr']['proposed_finish_date'] = isset($_POST['proposed_finish_date'])? trim($_POST['proposed_finish_date']): "";
$closet_name = $_SESSION['dr']['closet_name'] = isset($_POST['closet_name'])? trim($_POST['closet_name']): "";
$double_hang = $_SESSION['dr']['double_hang'] = isset($_POST['double_hang'])? $_POST['double_hang']: '';
$double_hang_note = $_SESSION['dr']['double_hang_note'] = isset($_POST['double_hang_note'])? $_POST['double_hang_note']: '';
$p_wine_bottle_num = $_SESSION['dr']['p_wine_bottle_num'] = isset($_POST['p_wine_bottle_num'])? $_POST['p_wine_bottle_num']: '';
$personalize_pantry = $_SESSION['dr']['personalize_pantry'] = isset($_POST['personalize_pantry'])? $_POST['personalize_pantry']: "";
$p_pantry = $_SESSION['dr']['p_pantry'] = isset($_POST['p_pantry'])? $_POST['p_pantry']: "";
$p_pantry_note = $_SESSION['dr']['p_pantry_note'] = isset($_POST['p_pantry_note'])? trim($_POST['p_pantry_note']): "";
$p_access_note = $_SESSION['dr']['p_access_note'] = isset($_POST['p_access_note'])? trim($_POST['p_access_note']): "";
$additonal_info = $_SESSION['dr']['additonal_info'] = isset($_POST['additonal_info'])? trim($_POST['additonal_info']): "";
$closet_type = $_SESSION['dr']['closet_type'] = isset($_POST['closet_type'])? $_POST['closet_type']: "";
$closet_type_note = $_SESSION['dr']['closet_type_note'] = isset($_POST['closet_type_note'])? trim($_POST['closet_type_note']): "";
$ceiling = $_SESSION['dr']['ceiling'] = isset($_POST['ceiling'])? $_POST['ceiling']: "";
$ceiling_note = $_SESSION['dr']['ceiling_note'] = isset($_POST['ceiling_note'])? trim($_POST['ceiling_note']): "";
$ceiling_height = $_SESSION['dr']['ceiling_height'] = isset($_POST['ceiling_height'])? trim($_POST['ceiling_height']): "";
$obstructions_note = $_SESSION['dr']['obstructions_note'] = isset($_POST['obstructions_note'])? trim($_POST['obstructions_note']): "";
$closet_shared_note = $_SESSION['dr']['closet_shared_note'] = isset($_POST['closet_shared_note'])? trim($_POST['closet_shared_note']): "";
$base_mold_height = $_SESSION['dr']['base_mold_height'] = isset($_POST['base_mold_height'])? trim($_POST['base_mold_height']): "";
$shoe_storage_note = $_SESSION['dr']['shoe_storage_note'] = isset($_POST['shoe_storage_note'])? trim($_POST['shoe_storage_note']): "";
$shoe_storage_style_note = $_SESSION['dr']['shoe_storage_style_note'] = isset($_POST['shoe_storage_style_note'])? trim($_POST['shoe_storage_style_note']): "";
$hanging_space_note = $_SESSION['dr']['hanging_space_note'] = isset($_POST['hanging_space_note'])? trim($_POST['hanging_space_note']): "";
$long_hang = $_SESSION['dr']['long_hang'] = isset($_POST['long_hang'])? $_POST['long_hang']: "";
$long_hang_note = $_SESSION['dr']['long_hang_note'] = isset($_POST['long_hang_note'])? trim($_POST['long_hang_note']): "";
$accessories_note = $_SESSION['dr']['accessories_note'] = isset($_POST['accessories_note'])? trim($_POST['accessories_note']): "";
$bottle_num_note = $_SESSION['dr']['bottle_num_note'] = isset($_POST['bottle_num_note'])? trim($_POST['bottle_num_note']): "";
$wine_feat_note = $_SESSION['dr']['wine_feat_note'] = isset($_POST['wine_feat_note'])? trim($_POST['wine_feat_note']): "";
$note = $_SESSION['dr']['note'] = isset($_POST['note'])? trim($_POST['note']): "";
$color_note = $_SESSION['dr']['color_note'] = isset($_POST['color_note'])? trim($_POST['color_note']): "";
$job_type = $_SESSION['dr']['job_type'] = isset($_POST['job_type'])? $_POST['job_type']: "";
$best_contact_time = $_SESSION['dr']['best_contact_time'] = isset($_POST['best_contact_time'])? trim($_POST['best_contact_time']): "";
$budget_range = $_SESSION['dr']['budget_range'] = isset($_POST['budget_range'])? $_POST['budget_range']: "";
$storage_type = $_SESSION['dr']['storage_type'] = isset($_POST['storage_type'])? $_POST['storage_type']: "";
$master_type = $_SESSION['dr']['master_type'] = isset($_POST['master_type'])? $_POST['master_type']: "";
$mobile_hanging_needs = $_SESSION['dr']['mobile_hanging_needs'] = isset($_POST['mobile_hanging_needs'])? $_POST['mobile_hanging_needs']: "";
$child_age = $_SESSION['dr']['child_age'] = isset($_POST['child_age'])? trim($_POST['child_age']): "";
$other_storage_type = $_SESSION['dr']['other_storage_type'] = isset($_POST['other_storage_type'])? $_POST['other_storage_type']: "";
$short_hang = $_SESSION['dr']['short_hang'] = isset($_POST['short_hang'])? $_POST['short_hang']: "";
$medium_hang = $_SESSION['dr']['medium_hang'] = isset($_POST['medium_hang'])? $_POST['medium_hang']: "";
$drawers = $_SESSION['dr']['drawers'] = isset($_POST['drawers'])? $_POST['drawers']: "";
$drawers_num = $_SESSION['dr']['drawers_num'] = isset($_POST['drawers_num'])? $_POST['drawers_num']: "";
$drawers_num_note = $_SESSION['dr']['drawers_num_note'] = isset($_POST['drawers_num_note'])? trim($_POST['drawers_num_note']): "";
$tie_rack = $_SESSION['dr']['tie_rack'] = isset($_POST['tie_rack'])? trim($_POST['tie_rack']): "";
$belt_rack = $_SESSION['dr']['belt_rack'] = isset($_POST['belt_rack'])? trim($_POST['belt_rack']): "";
$valet_rod = $_SESSION['dr']['valet_rod'] = isset($_POST['valet_rod'])? trim($_POST['valet_rod']): "";
$finish = $_SESSION['dr']['finish'] = isset($_POST['finish'])? trim($_POST['finish']): "";
$obscure_description = $_SESSION['dr']['obscure_description'] = isset($_POST['obscure_description'])? trim($_POST['obscure_description']): "";
$comments = $_SESSION['dr']['comments'] = isset($_POST['comments'])? trim($_POST['comments']): "";
$date_submitted = $ts;
$additionl_info = $_SESSION['dr']['additionl_info'] = isset($_POST['additionl_info'])? trim($_POST['additionl_info']): "";
$personalize_wine = $_SESSION['dr']['personalize_wine'] = isset($_POST['personalize_wine'])? trim($_POST['personalize_wine']): "";
$wine_style = $_SESSION['dr']['wine_style'] = isset($_POST['wine_style'])? $_POST['wine_style']: "";
$bottle_num = $_SESSION['dr']['bottle_num'] = isset($_POST['bottle_num'])? $_POST['bottle_num']: "";
$bottles = $_SESSION['dr']['bottles'] = isset($_POST['bottles'])? $_POST['bottles']: "";
$color = $_SESSION['dr']['color'] = isset($_POST['color'])? $_POST['color']: "";
$shelves_num = $_SESSION['dr']['shelves_num'] = isset($_POST['shelves_num'])? $_POST['shelves_num']: "";
$shelves_num_note = $_SESSION['dr']['shelves_num_note'] = isset($_POST['shelves_num_note'])? trim($_POST['shelves_num_note']): "";
$hanging_space = $_SESSION['dr']['hanging_space'] = isset($_POST['hanging_space'])? $_POST['hanging_space']: "";
$closet_shared = $_SESSION['dr']['closet_shared'] = isset($_POST['closet_shared'])? $_POST['closet_shared']: "";
$closet_style_scale = $_SESSION['dr']['closet_style_scale'] = isset($_POST['closet_style_scale'])? $_POST['closet_style_scale']: 0;
$wall_length_other = $_SESSION['dr']['wall_length_other'] = isset($_POST['wall_length_other'])? trim($_POST['wall_length_other']): "";
$space_shape = $_SESSION['dr']['space_shape'] = isset($_POST['space_shape'])? $_POST['space_shape']: 0;
$personalize_closet = $_SESSION['dr']['personalize_closet'] = isset($_POST['personalize_closet'])? trim($_POST['personalize_closet']): "";
$closet_name_mobile = $_SESSION['dr']['closet_name_mobile'] = isset($_POST['closet_name_mobile'])? trim($_POST['closet_name_mobile']): "";
if(strlen($closet_name_mobile) > 3){
	$closet_name = $_SESSION['dr']['closet_name'] = $closet_name_mobile;
}
$space_shape_note = $_SESSION['dr']['space_shape_note'] = isset($_POST['space_shape_note'])? trim($_POST['space_shape_note']): "";
$door_size = $_SESSION['dr']['door_size'] = isset($_POST['door_size'])? $_POST['door_size']: "";
$door_style = $_SESSION['dr']['door_style'] = isset($_POST['door_style'])? $_POST['door_style']: "";
$door_type = $_SESSION['dr']['door_type'] = isset($_POST['door_type'])? $_POST['door_type']: "";
$door_type_note = $_SESSION['dr']['door_type_note'] = isset($_POST['door_type_note'])? trim($_POST['door_type_note']): "";
$door_style_note = $_SESSION['dr']['door_style_note'] = isset($_POST['door_style_note'])? trim($_POST['door_style_note']): "";
$wall_a = $_SESSION['dr']['wall_a'] = isset($_POST['wall_a'])? trim($_POST['wall_a']): "";
$wall_b = $_SESSION['dr']['wall_b'] = isset($_POST['wall_b'])? trim($_POST['wall_b']): "";
$wall_c = $_SESSION['dr']['wall_c'] = isset($_POST['wall_c'])? trim($_POST['wall_c']): "";
$wall_d = $_SESSION['dr']['wall_d'] = isset($_POST['wall_d'])? trim($_POST['wall_d']): "";
$wall_e = $_SESSION['dr']['wall_e'] = isset($_POST['wall_e'])? trim($_POST['wall_e']): "";
$wall_f = $_SESSION['dr']['wall_f'] = isset($_POST['wall_f'])? trim($_POST['wall_f']): "";
$wall_g = $_SESSION['dr']['wall_g'] = isset($_POST['wall_g'])? trim($_POST['wall_g']): "";

$obstructions = $_SESSION['dr']['obstructions'] = isset($_POST['obstructions'])? $_POST['obstructions']: array();
$shoes = $_SESSION['dr']['shoes'] = isset($_POST['shoes'])? $_POST['shoes']: array();
$shoe_storage = $_SESSION['dr']['shoe_storage'] = isset($_POST['shoe_storage'])? $_POST['shoe_storage']: array();
$shoe_storage_style = $_SESSION['dr']['shoe_storage_style'] = isset($_POST['shoe_storage_style'])? $_POST['shoe_storage_style']: array();
$accessories = $_SESSION['dr']['accessories'] = isset($_POST['accessories'])? $_POST['accessories']: array();
$p_access = $_SESSION['dr']['p_access'] = isset($_POST['p_access'])? $_POST['p_access']: array();
$bottle_size = $_SESSION['dr']['bottle_size'] = isset($_POST['bottle_size'])? $_POST['bottle_size']: array();
$wine_feat = $_SESSION['dr']['wine_feat'] = isset($_POST['wine_feat'])? $_POST['wine_feat']: array();

$source = $_SESSION['dr']['source'] = isset($_POST['source'])? trim($_POST['source']): "";
$origin = $_SESSION['dr']['origin'] = isset($_POST['origin'])? trim($_POST['origin']): "";

if($to_save){
	$origin="User Saved For Later";	
}


echo "<br />first_name ".$first_name;
echo "<br />last_name ".$last_name;
echo "<br />name ".$name;
echo "<br />city ".$city;
echo "<br />state ".$state;
echo "<br />zip ".$zip;
echo "<br />email ".$email;
echo "<br />phone ".$phone;
echo "<br />preferred_contact ".$preferred_contact;
echo "<br />urgency ".$urgency;
echo "<br />importance_price ".$importance_price;
echo "<br />importance_timeline ".$importance_timeline;
echo "<br />importance_design ".$importance_design;
echo "<br />expedite ".$expedite;
echo "<br />expedite_note ".$expedite_note;
echo "<br />proposed_finish_date ".$proposed_finish_date;
echo "<br /> obstructions_note".$obstructions_note;
echo "<br />double_hang ".$double_hang;
echo "<br />double_hang_note ".$double_hang_note;
echo "<br />personalize_pantry ".$personalize_pantry;
echo "<br />p_wine_bottle_num ".$p_wine_bottle_num;
echo "<br />p_pantry ".$p_pantry;
echo "<br />p_pantry_note ".$p_pantry_note;
echo "<br />p_access_note ".$p_access_note;
echo "<br />additonal_info ".$additonal_info;
echo "<br />closet_type ".$closet_type;
echo "<br />closet_type_note ".$closet_type_note;
echo "<br />ceiling ".$ceiling;
echo "<br />ceiling_note ".$ceiling_note;
echo "<br />ceiling_height ".$ceiling_height;
echo "<br />closet_shared_note ".$closet_shared_note;
echo "<br />base_mold_height ".$base_mold_height;
echo "<br />shoe_storage_note ".$shoe_storage_note;
echo "<br />shoe_storage_style_note ".$shoe_storage_style_note;
echo "<br />hanging_space_note ".$hanging_space_note;
echo "<br />long_hang_note ".$long_hang_note;
echo "<br />accessories_note ".$accessories_note;
echo "<br />bottle_num_note ".$bottle_num_note;
echo "<br />wine_feat_note ".$wine_feat_note;
echo "<br />color_note ".$color_note;
echo "<br />job_type ".$job_type;
echo "<br />best_contact_time ".$best_contact_time;
echo "<br />budget_range ".$budget_range;
echo "<br />storage_type ".$storage_type;
echo "<br />master_type ".$master_type;
echo "<br />mobile_hanging_needs ".$mobile_hanging_needs;
echo "<br />child_age ".$child_age;
echo "<br />other_storage_type ".$other_storage_type;
echo "<br />short_hang ".$short_hang;
echo "<br />medium_hang ".$medium_hang;
echo "<br />long_hang ".$long_hang;
echo "<br />drawers ".$drawers;
echo "<br />tie_rack ".$tie_rack;
echo "<br />belt_rack ".$belt_rack;
echo "<br />valet_rod ".$valet_rod;
echo "<br />finish ".$finish;
echo "<br />obscure_description ".$obscure_description;
echo "<br />comments ".$comments;
echo "<br />date_submitted ".$date_submitted;
echo "<br />source ".$source;
echo "<br />origin ".$origin;
echo "<br />additionl_info ".$additionl_info;
echo "<br />personalize_wine ".$personalize_wine;
echo "<br />wine_style ".$wine_style;
echo "<br />bottle_size ".$bottle_size;
echo "<br />bottle_num ".$bottle_num;
echo "<br />bottles ".$bottles;
echo "<br />note ".$note;
echo "<br />color ".$color;
echo "<br />shelves_num ".$shelves_num;
echo "<br />shelves_num_note ".$shelves_num_note;
echo "<br />drawers_num ".$drawers_num;
echo "<br />hanging_space ".$hanging_space;
echo "<br />drawers_num_note ".$drawers_num_note;
echo "<br />closet_shared ".$closet_shared;
echo "<br />closet_style_scale ".$closet_style_scale;
echo "<br />wall_length_other ".$wall_length_other;
echo "<br />space_shape ".$space_shape;
echo "<br />space_shape_note ".$space_shape_note;
echo "<br />personalize_closet ".$personalize_closet;
echo "<br /> closet_name ".$closet_name;	
echo "<br /> door_size ".$door_size;
echo "<br /> door_style ".$door_style;
echo "<br /> door_type ".$door_type;
echo "<br /> door_type_note ".$door_type_note;
echo "<br /> door_style_note ".$door_style_note;
echo "<br /> wall_a ".$wall_a;
echo "<br /> wall_b ".$wall_b;
echo "<br /> wall_c ".$wall_c;
echo "<br /> wall_d ".$wall_d;
echo "<br /> wall_e ".$wall_e;
echo "<br /> wall_f ".$wall_f;
echo "<br /> wall_g ".$wall_g;
echo "<br /> to_save ".$to_save;
echo "<br /> user_id ".$user_id;
echo "<br /> profile_account_id ".$_SESSION['profile_account_id'];		
echo "<br />obstructions ";
print_r($obstructions);
echo "<br />shoes";
print_r($shoes);
echo "<br />shoe_storage";
print_r($shoe_storage);
echo "<br />shoe_storage_style";
print_r($shoe_storage_style);
echo "<br />p_access";
print_r($p_access);
echo "<br />accessories";
print_r($accessories);
echo "<br />wine_feat";
print_r($wine_feat);


$k=0;
if(!is_array($obstructions))$obstructions=array();
$str='';

foreach($obstructions as $k=>$v){
	if(isset($v)){
		if($k>0){
			$str.= ','.$v;
		}else{
			$str.= $v;
		}
	}
}
$obstructions=$str;

$k=0;
if(!is_array($shoes))$shoes=array();
$str='';
foreach($shoes as $k=>$v){
	if(isset($v)){
		if($k>0){
			$str.= ','.$v;
		}else{
			$str.= $v;
		}
	}
}

$shoes=$str;

$k=0;
if(!is_array($p_access))$p_access=array();
$str='';
foreach($p_access as $k=>$v){
	if(isset($v)){
		if($k>0){
			$str.= ','.$v;
		}else{
			$str.= $v;
		}
	}
}
$p_access=$str;

$k=0;
if(!is_array($bottle_size))$bottle_size=array();
$str='';
foreach($bottle_size as $k=>$v){
	if(isset($v)){
		if($k>0){
			$str.= ','.$v;
		}else{
			$str.= $v;
		}
	}
}
$bottle_size=$str;

$k=0;
if(!is_array($wine_feat))$wine_feat=array();
$str='';
foreach($wine_feat as $k=>$v){
	if(isset($v)){
		if($k>0){
			$str.= ','.$v;
		}else{
			$str.= $v;
		}
	}
}
$wine_feat=$str;

$k=0;
if(!is_array($shoe_storage))$shoe_storage=array();
$str='';
foreach($shoe_storage as $k=>$v){
	if(isset($v)){
		if($k>0){
			$str.= ','.$v;
		}else{
			$str.= $v;
		}
	}
}
$shoe_storage=$str;

$k=0;
if(!is_array($shoe_storage_style))$shoe_storage_style=array();
$str='';
foreach($shoe_storage_style as $k=>$v){
	if(isset($v)){
		if($k>0){
			$str.= ','.$v;
		}else{
			$str.= $v;
		}
	}
}
$shoe_storage_style=$str;

$k=0;
if(!is_array($accessories))$accessories=array();
$str='';
foreach($accessories as $k=>$v){
	if(isset($v)){
		if($k>0){
			$str.= ','.$v;
		}else{
			$str.= $v;
		}
	}
}
$accessories=$str;

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);


$the_id=0;
if($deid>0){
	$the_id	= $deid;
	
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
			,to_save
		WHERE design_email_id = ?");
		
	if(!$stmt->bind_param("ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssii",
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
		,$to_save
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
		,to_save
		,user_id
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
		,?	
		,?		
		,?)"); 	



		//echo 'Error-1 '.$db->error;



	if(!$stmt->bind_param("ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssiii",
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
		,$to_save
		,$user_id
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
/*
if(!file_exists($real_root."/user_uploads/".$_SESSION['profile_account_id']."/")){
	mkdir($real_root."/user_uploads/".$_SESSION['profile_account_id']."/" , $mode = 0777 );
}
*/
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

$reset_pswd_link='';
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

$message_end .= "</body></html>";

if($new_cust){
	$password_salt=$lgn->getPasswordSalt($dbCustom,$user_id);
	if($password_salt != ''){	
		if($to_save){
			
			$link = SITEROOT."reset-password-".$password_salt."/".$the_id.".html";
			$message= $message_head;

$message .= "CONGRATULATIONS ".$name."\n\n\r"; 
$message.= "Thank you for your interest in Closets To Go!";
$message .= "In order for you to monitor your design request"; 
$message .= "\n\n\r  an anonamous account has been initiated on your behalf.";
$message .= "\n\n\r  Please set your password by clicking this link or pasting into"; 
$message .= " your web browser.";  
$message .= "\n\n\r You may now return to and finish the design request at your leisure."; 
			$message.= "\n\n\r";
			$message.= $link;
			$message.= "\n\n\r";
			
			$message.= $message_end;			
			$subject = "Closets To Go Design Request Saved";				
			$headers = "From: services@closetstogo.com";
			$headers .= "\r\n";
			$headers .= "CC: mark.stanz@gmail.com";	
		}else{
			$link = SITEROOT."reset-password-".$password_salt."/.html";
			$message= $message_head;

$message .= "CONGRATULATIONS ".$name."\n\n\r"; 
$message.= "Thank you for your interest in Closets To Go!";
$message .= "In order for you to monitor your design request"; 
$message .= "\n\n\r an anonamous account has been initiated on your behalf.";
$message .= "\n\n\r Please set your password by clicking this link or pasting into"; 
$message .= " your web browser.";  
$message .= "\n\n\r You may now return to and monitor your design request at your leisure."; 

			$message.= "\n\n\r";
			$message.= $link;
			$message.= "\n\n\r";
			
			$message.= $message_end;
			
			$subject = $_SESSION['profile_company']." Password Request";				
			$headers = "From: services@closetstogo.com";
			$headers .= "\r\n";
			$headers .= "CC: mark.stanz@gmail.com";		
		}
	}

	if($site != "local"){	
		error_reporting(0);
		if(mail($to, $subject, $message, $headers)){

		}else{
								
		}
	}

	$reset_pswd_link=$link;

}else{

	if($to_save){
	
		$link = SITEROOT."we-design-survey/".$the_id.".html";
		$message= $message_head;
		$message .= "CONGRATULATIONS ".$name."\n\n\r"; 

$message.= "Thank you for your interest in Closets To Go! ";
$message.= "\n\n\r We saved your design request data so that you may";
$message.= " return to and finish the design at your convenience.";  
$message.= "\n\n\r";
$message.= $link;
$message.= "\n\n\r";
		$message.= $message_end;
		$subject = " Closets To Go Design Request Received";				

		$headers = "From: services@closetstogo.com";
		$headers .= "\r\n";
		$headers .= "CC: mark.stanz@gmail.com";	

	}else{

		$message = $message_head;	
		$message .= "CONGRATULATIONS ".$name."\n\n\r"; 

		$message .= "<div style='color:#565656;'>";
		$message .= "<div style='background:#efefef; width:100%; padding:8px;'>";
$message .= "We&lsquo;ve received your Design Request Form!"; 
$message .= " It&lsquo;s now on its way to our Design Team for review."; 
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
	}
	if($site != "local"){	
		error_reporting(0);
		if(mail($to, $subject, $message, $headers)){

		}else{
								
		}
	}
	
}



if($the_id){
	$message = $message_head;
	$message .= "<div style='font-size:17px;'>";
	$message .= "<div style='background:#efefef; width:100%; padding:8px;'>";
	$message .= "<font color='#000000'>Design Request</font>";
	$message .= "</div><br />";
	if($to_save){
		$message .= "<div style='background:#efefef; width:100%; padding:8px;'>";
		$message .= "<font color='red'>This Request Was Saved for Later by the Customer</font>";
		$message .= "</div><br />";
	}
	$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Site:</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".SITEROOT."</font></div>";	
	$message .= "<div style='clear:both;'></div>";
	$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Customer Email:</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'><a href='mailto:".$email."'>".$email."</a></font></div>";
	$message .= "<div style='clear:both;'></div>";
	$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Customer Name:</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$name."</font></div>";
	$message .= "<div style='clear:both;'></div>";

	//if($source != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>source:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$source."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($origin != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>origin:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$origin."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($phone != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Phone:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$phone."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}	
	//if($city != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>City:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$city."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}			
	//if($state != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>State:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$state."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}			
	//if($zip != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Zip Code:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$zip."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}			
	//if($preferred_contact != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Preferred contact:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$preferred_contact."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($date_submitted != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>date_submitted:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$date_submitted."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($proposed_finish_date != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Proposed finish date:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$proposed_finish_date."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($expedite != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Expedite:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$expedite."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($expedite_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Expedite Note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$expedite_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($closet_name != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>closet_name:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$closet_name."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($personalize_closet != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>personalize_closet:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$personalize_closet."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($budget_range != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Budget range:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$budget_range."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($urgency != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Urgency:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$urgency."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($importance_price != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Importance of price:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$importance_price."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($importance_timeline != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Importance of timeline:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$importance_timeline."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($importance_design != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Importance of design:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$importance_design."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($best_contact_time != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Best contact time:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$best_contact_time."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($obstructions != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Obstructions:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$obstructions."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($obstructions_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Obstructions note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$obstructions_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($closet_style_scale != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>closet_style_scale:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$closet_style_scale."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($closet_type != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Closet_type:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$closet_type."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($closet_type_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Closet_type note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$closet_type_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($storage_type != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Storage Type:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$storage_type."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($other_storage_type != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Other storage Type:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$other_storage_type."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($child_age != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Child_age:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$child_age."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($closet_shared != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Closet shared:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$closet_shared."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($closet_shared_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Closet shared note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$closet_shared_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($ceiling != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Ceiling:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$ceiling."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($ceiling_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Ceiling note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$ceiling_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($ceiling_height != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Ceiling height:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$ceiling_height."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($base_mold_height != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Base mold height:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$base_mold_height."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($shoes != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>shoes:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$shoes."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($shoe_storage_style != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Shoe storage style:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$shoe_storage_style."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($shoe_storage_style_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Shoe storage style note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$shoe_storage_style_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($shoe_storage != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Shoe storage:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$shoe_storage."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($shoe_storage_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Shoe storage note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$shoe_storage_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($tie_rack != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Tie_rack:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$tie_rack."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($belt_rack != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Belt_rack:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$belt_rack."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($valet_rod != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Valet_rod:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$valet_rod."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($accessories != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Accessories:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$accessories."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($accessories_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Accessories_note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$accessories_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($job_type != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>job_type:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$job_type."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($master_type != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>master_type:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$master_type."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($mobile_hanging_needs != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>mobile_hanging_needs:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$mobile_hanging_needs."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($personalize_pantry != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Personalize Pantry:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$personalize_pantry."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($p_pantry != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Pantry:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$p_pantry."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($p_pantry_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Pantry_note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$p_pantry_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($p_access != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Pantry accessoty:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$p_access."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($p_access_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Pantry accessoty note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$p_access_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($p_wine_bottle_num != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Pantry wine bottle num:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$p_wine_bottle_num."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($personalize_wine != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>personalize_wine:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$personalize_wine."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($bottle_num_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Bottle_num_note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$bottle_num_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}

	//if($wine_feat != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Wine_feat:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wine_feat."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($wine_feat_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Wine_feat_note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wine_feat_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($wine_style != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>wine_style:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wine_style."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($bottle_size != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>bottle_size:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$bottle_size."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($bottle_num != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>bottle_num:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$bottle_num."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($bottles != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>bottles:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$bottles."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($shelves_num != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>shelves_num:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$shelves_num."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($shelves_num_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>shelves_num_note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$shelves_num_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($drawers != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>drawers:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$drawers."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($drawers_num != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>drawers_num:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$drawers_num."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($drawers_num_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>drawers_num_note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$drawers_num_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($hanging_space != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>hanging_space:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$hanging_space."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($hanging_space_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Hanging space note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$hanging_space_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($long_hang != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Long hang:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".stripAllSlashes($long_hang)."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}		
	//if($long_hang_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Long hang note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$long_hang_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($double_hang != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Double_hang:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$double_hang."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($double_hang_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Double hang note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$double_hang_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($medium_hang != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Medium hang:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$medium_hang."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($long_hang != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Long hang:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$long_hang."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($short_hang != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Short hang:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".stripAllSlashes($short_hang)."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($door_size != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>door size:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$door_size."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($door_type != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>door type:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$door_type."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($door_style != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>door_style:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$door_style."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}	
	//if($door_type_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>door_type_note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$door_type_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}	
	//if($door_style_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>door_style_note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$door_style_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($wall_length_other != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>wall_length_other:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wall_length_other."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($space_shape != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>space_shape:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$space_shape."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($space_shape_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>space_shape_note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$space_shape_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($wall_a != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>wall a:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wall_a."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($wall_b != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>wall b:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wall_b."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($wall_c != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>wall c:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wall_c."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($wall_d != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>wall d:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wall_d."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($wall_e != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>wall e:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wall_e."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($wall_f != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>wall f:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wall_f."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($wall_g != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>wall g:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wall_g."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($finish != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Finish:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$finish."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($color != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>color:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$color."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($color_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Color_note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$color_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($comments != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>comments:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$comments."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($additonal_info != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Additonal info:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$additonal_info."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}
	//if($note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	//}

	$sql = "SELECT DISTINCT file_name
	FROM design_email_image 
	WHERE design_email_id  = '".$the_id."'";	
	$img_result = $dbCustom->getResult($db,$sql);
	while($row = $img_result->fetch_object()){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Uploaded File:</font></div>";
		$img = SITEROOT."/user_uploads/".$_SESSION['profile_account_id']."/".$row->file_name;
		$message .= "<img src='".$img."' ></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	$message .= "</div><br /><br />";
	$message.= $message_end;

	$subject_c = "Design Request";		
	$headers = "Content-type: text/html; charset=iso-8859-1";	
	$headers .= "\r\n";
	$headers .= "From: help@closetstogo.com";
	$headers .= "\r\n";
	$headers .= "Return-path: help@closetstogo.com";
	$headers .= "\r\n";
	//$headers .= "CC: alicia@closetstogo.com";
	//$headers .= "\r\n";
	//$headers .= "Bcc: mark@nazardesigns.com";


	//$to = 'jeff@closetstogo.com';
	$to = 'mark.stanz@gmail.com';

	if($site != "local"){	
		error_reporting(0);
		if(mail($to, $subject_c, $message, $headers)){
			$success = 1;	
		}
	}	

	//echo $message;
	//exit;	

}	

?>

<!--
Hi, I resent the email from Jan 11th with minor verbiage tweeks for intake form. 
I wrote something for when the user abandons form early:                                                                                                                                                                                                    Thank you for your interest in Closets To Go! 
 
In order to save the data in your design request form, an account has been set up on your behalf. 
Please re-set your password by clicking this link or pasting into your web browser. 
 
You may now return to and finish the design request form at your leisure. 

-->







