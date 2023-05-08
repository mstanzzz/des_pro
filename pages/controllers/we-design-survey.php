<?php
$deid=isset($_POST['deid'])? addslashes($_POST['deid']): 0;
if(!is_numeric($deid))$deid=0;

if(isset($_POST['password_salt'])){
	$password=isset($_POST['password'])? trim(addslashes($_POST['password'])): '';
	$password_salt=isset($_POST['password_salt'])? trim(addslashes($_POST['password_salt'])): '';
	$id=0;
	$db = $dbCustom->getDbConnect(USER_DATABASE);
	$stmt = $db->prepare("SELECT id 
						FROM user
						WHERE password_salt = ?");
	if(!$stmt->bind_param("s", $email)){
		//echo 'Error '.$db->error;
	}else{
		$stmt->execute();						
		$stmt->bind_result($id);	
		$stmt->fetch();	
	}
	$stmt->close();
	if($id > 0){
		$new_password_salt = $lgn->generateSalt();
		$password_hash = $lgn->get_hash($password, $new_password_salt);
		$sql = "UPDATE user 
				SET password_salt = '".$new_password_salt."', password_hash = '".$password_hash."' 
				WHERE id = '".$id."'";
		$result = $dbCustom->getResult($db,$sql);
		$msg = "Your password has been re-set";
	}else{
		$msg = "Error";
	}
}

if($deid>0){

	$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
	$sql = "SELECT *
			FROM design_email
			WHERE design_email_id > '".$deid."'";
	$result = $dbCustom->getResult($db,$sql);
	if($result->num_rows>0){
		$object= $result->fetch_object();			
		$_SESSION['dr']['first_name']=stripslashes($object->first_name);
		$_SESSION['dr']['last_name']=stripslashes($object->last_name);
		$_SESSION['dr']['name']=stripslashes($object->name);
		$_SESSION['dr']['city']=stripslashes($object->city);
		$_SESSION['dr']['state']=stripslashes($object->state);
		$_SESSION['dr']['zip']=stripslashes($object->zip);
		$_SESSION['dr']['email']=stripslashes($object->email);
		$_SESSION['dr']['phone']=stripslashes($object->phone);
		$_SESSION['dr']['preferred_contact']=$object->preferred_contact;
		$_SESSION['dr']['urgency']=$object->urgency;
		$_SESSION['dr']['importance_price']=$object->importance_price;
		$_SESSION['dr']['importance_timeline']=$object->importance_timeline;
		$_SESSION['dr']['importance_design']=$object->importance_design;
		$_SESSION['dr']['expedite']=$object->expedite;
		$_SESSION['dr']['expedite_note']=stripslashes($object->expedite_note);
		$_SESSION['dr']['proposed_finish_date']=$object->proposed_finish_date;
		$_SESSION['dr']['obstructions_note']=stripslashes($object->obstructions_note);
		$_SESSION['dr']['double_hang']=$object->double_hang;
		$_SESSION['dr']['double_hang_note']=stripslashes($object->double_hang_note);
		$_SESSION['dr']['p_pantry']=$object->p_pantry;
		$_SESSION['dr']['p_pantry_note']=stripslashes($object->p_pantry_note);
		$_SESSION['dr']['p_access_note']=stripslashes($object->p_access_note);
		$_SESSION['dr']['additonal_info']=stripslashes($object->additonal_info);
		$_SESSION['dr']['closet_type']=$object->closet_type;
		$_SESSION['dr']['closet_type_note']=stripslashes($object->closet_type_note);
		$_SESSION['dr']['ceiling']=$object->ceiling;
		$_SESSION['dr']['ceiling_note']=stripslashes($object->ceiling_note);
		$_SESSION['dr']['ceiling_height']=stripslashes($object->ceiling_height);
		$_SESSION['dr']['closet_shared_note']=stripslashes($object->closet_shared_note);
		$_SESSION['dr']['base_mold_height']=stripslashes($object->base_mold_height);
		$_SESSION['dr']['shoe_storage_note']=stripslashes($object->shoe_storage_note);
		$_SESSION['dr']['shoe_storage_style_note']=stripslashes($object->shoe_storage_style_note);
		$_SESSION['dr']['hanging_space_note']=stripslashes($object->hanging_space_note);
		$_SESSION['dr']['long_hang_note']=stripslashes($object->long_hang_note);
		$_SESSION['dr']['accessories_note']=stripslashes($object->accessories_note);
		$_SESSION['dr']['bottle_num_note']=stripslashes($object->bottle_num_note);
		$_SESSION['dr']['wine_feat_note']=stripslashes($object->wine_feat_note);
		$_SESSION['dr']['color_note']=stripslashes($object->color_note);
		$_SESSION['dr']['job_type']=stripslashes($object->job_type);
		$_SESSION['dr']['best_contact_time']=stripslashes($object->best_contact_time);
		$_SESSION['dr']['budget_range']=stripslashes($object->budget_range);
		$_SESSION['dr']['storage_type']=$object->storage_type;
		$_SESSION['dr']['master_type']=$object->master_type;
		$_SESSION['dr']['mobile_hanging_needs']=stripslashes($object->mobile_hanging_needs);
		$_SESSION['dr']['child_age']=stripslashes($object->child_age);
		$_SESSION['dr']['other_storage_type']=stripslashes($object->other_storage_type);
		$_SESSION['dr']['short_hang']=$object->short_hang;
		$_SESSION['dr']['medium_hang']=$object->medium_hang;
		$_SESSION['dr']['long_hang']=$object->long_hang;
		$_SESSION['dr']['drawers']=$object->drawers;
		$_SESSION['dr']['tie_rack']=$object->tie_rack;
		$_SESSION['dr']['belt_rack']=$object->belt_rack;
		$_SESSION['dr']['valet_rod']=$object->valet_rod;
		$_SESSION['dr']['finish']=$object->finish;
		$_SESSION['dr']['obscure_description']=stripslashes($object->obscure_description);
		$_SESSION['dr']['date_submitted']=$object->date_submitted;
		$_SESSION['dr']['source']=$object->source;
		$_SESSION['dr']['origin']=$object->origin;
		$_SESSION['dr']['additionl_info']=stripslashes($object->additionl_info);
		$_SESSION['dr']['personalize_wine']=stripslashes($object->personalize_wine);
		$_SESSION['dr']['wine_style']=$object->wine_style;
		$_SESSION['dr']['bottle_num']=$object->bottle_num;
		$_SESSION['dr']['bottles']=$object->bottles;
		$_SESSION['dr']['color']=$object->color;
		$_SESSION['dr']['shelves_num']=$object->shelves_num;
		$_SESSION['dr']['shelves_num_note']=stripslashes($object->shelves_num_note);
		$_SESSION['dr']['drawers_num']=$object->drawers_num;
		$_SESSION['dr']['hanging_space']=$object->hanging_space;
		$_SESSION['dr']['drawers_num_note']=stripslashes($object->drawers_num_note);
		$_SESSION['dr']['closet_shared']=$object->closet_shared;
		$_SESSION['dr']['closet_style_scale']=$object->closet_style_scale;
		$_SESSION['dr']['wall_length_other']=$object->wall_length_other;
		$_SESSION['dr']['space_shape']=$object->space_shape;
		$_SESSION['dr']['door_size']=$object->door_size;
		$_SESSION['dr']['door_style']=$object->door_style;
		$_SESSION['dr']['door_type']=$object->door_type;
		$_SESSION['dr']['door_type_note']=stripslashes($object->door_type_note);
		$_SESSION['dr']['door_style_note']=stripslashes($object->door_style_note);
		$_SESSION['dr']['note']=stripslashes($object->note);
		$_SESSION['dr']['p_wine_bottle_num']=stripslashes($object->p_wine_bottle_num);
		$_SESSION['dr']['personalize_pantry']=stripslashes($object->personalize_pantry);
		$_SESSION['dr']['personalize_closet']=stripslashes($object->personalize_closet);
		$_SESSION['dr']['closet_name']=stripslashes($object->closet_name);
		$_SESSION['dr']['comments']=stripslashes($object->comments);

		$_SESSION['dr']['space_shape_note']=stripslashes($object->space_shape_note);


		if(strlen($object->shoes)<4){
			$_SESSION['dr']['shoes']=array();
		}else{	
			$_SESSION['dr']['shoes']=explode(",",$object->shoes);
		}
		if(strlen($object->shoe_storage_style)<4){
			$_SESSION['dr']['shoe_storage_style']=array();
		}else{	
			$_SESSION['dr']['shoe_storage_style']=explode(",",$object->shoe_storage_style);
		}
		if(strlen($object->obstructions)<4){
			$_SESSION['dr']['obstructions']=array();
		}else{	
			$_SESSION['dr']['obstructions']=explode(",",$object->obstructions);
		}
		if(strlen($object->accessories)<4){
			$_SESSION['dr']['accessories']=array();
		}else{	
			$_SESSION['dr']['accessories']=explode(",",$object->accessories);
		}
		if(strlen($object->wine_feat)<4){
			$_SESSION['dr']['wine_feat']=array();
		}else{	
			$_SESSION['dr']['wine_feat']=explode(",",$object->wine_feat);
		}
		if(strlen($object->bottle_size)<4){
			$_SESSION['dr']['bottle_size']=array();
		}else{	
			$_SESSION['dr']['bottle_size']=explode(",",$object->bottle_size);
		}
		if(strlen($object->p_access)<4){
			$_SESSION['dr']['p_access']=array();
		}else{	
			$_SESSION['dr']['p_access']=explode(",",$object->p_access);
		}
	}
}else{

// clear these for subsequent requests
/*
		$_SESSION['dr']['personalize_pantry']='';
		$_SESSION['dr']['personalize_closet']='';
		$_SESSION['dr']['closet_name']='';

*/		
}

// this needs to be cleared always in order for the step function to re-set
$_SESSION['dr']['closet_type']=""; 


if(isset($_POST['first_name'])) {
	$_SESSION['dr']['first_name'] = isset($_POST['first_name']) ? $_POST['first_name']: "";
	$_SESSION['dr']['last_name'] = isset($_POST['last_name']) ? $_POST['last_name']: "";
    $_SESSION['dr']['phone'] = isset($_POST['phone']) ? $_POST['phone']: "";
    $_SESSION['dr']['email'] = isset($_POST['email']) ? $_POST['email']: "";
    $_SESSION['dr']['zip'] = isset($_POST['zip']) ? $_POST['zip']: "";
    $_SESSION['dr']['city'] = isset($_POST['city']) ? $_POST['city']: "";
    $_SESSION['dr']['state'] = isset($_POST['state']) ? $_POST['state']: "";
    $_SESSION['dr']['address'] = isset($_POST['address']) ? $_POST['address']: "";
	
	/* this isn't secure enough ... all it needs is an email address to log in ...
	$id=$lgn->autologin($dbCustom, 0, $_SESSION['dr']['email']);
	if($id>0){
		$_SESSION['ctg_cust_id']=$id;
	}
	*/
}

if(!isset($_SESSION['dr']['first_name']))$_SESSION['dr']['first_name']='';
if(!isset($_SESSION['dr']['last_name']))$_SESSION['dr']['last_name']='';
if(!isset($_SESSION['dr']['name']))$_SESSION['dr']['name']='';
if(!isset($_SESSION['dr']['phone']))$_SESSION['dr']['phone']='';
if(!isset($_SESSION['dr']['email']))$_SESSION['dr']['email']='';
if(!isset($_SESSION['dr']['zip']))$_SESSION['dr']['zip']='';
if(!isset($_SESSION['dr']['code']))$_SESSION['dr']['code']='';
if(!isset($_SESSION['dr']['city']))$_SESSION['dr']['city']='';
if(!isset($_SESSION['dr']['state']))$_SESSION['dr']['state']='';
if(!isset($_SESSION['dr']['address']))$_SESSION['dr']['address']='';
if(!isset($_SESSION['dr']['additonal_info']))$_SESSION['dr']['additonal_info']='';
if(!isset($_SESSION['dr']['preferred_contact']))$_SESSION['dr']['preferred_contact']='';
if(!isset($_SESSION['dr']['urgency']))$_SESSION['dr']['urgency']='';
if(!isset($_SESSION['dr']['additionl_info']))$_SESSION['dr']['additionl_info']='';
if(!isset($_SESSION['dr']['price']))$_SESSION['dr']['price']='';
if(!isset($_SESSION['dr']['design']))$_SESSION['dr']['design']='';
if(!isset($_SESSION['dr']['timeline']))$_SESSION['dr']['timeline']='';
if(!isset($_SESSION['dr']['proposed_finish_date']))$_SESSION['dr']['proposed_finish_date']='';
if(!isset($_SESSION['dr']['expedite']))$_SESSION['dr']['expedite']='';
if(!isset($_SESSION['dr']['closet_name']))$_SESSION['dr']['closet_name']='';
if(!isset($_SESSION['dr']['closet_name_mobile']))$_SESSION['dr']['closet_name_mobile']='';
if(!isset($_SESSION['dr']['space_shape']))$_SESSION['dr']['space_shape']='';
if(!isset($_SESSION['dr']['wall_length_other']))$_SESSION['dr']['wall_length_other']='';
if(!isset($_SESSION['dr']['closet_type']))$_SESSION['dr']['closet_type']='';
if(!isset($_SESSION['dr']['ceiling_height']))$_SESSION['dr']['ceiling_height']='';
if(!isset($_SESSION['dr']['ceiling']))$_SESSION['dr']['ceiling']='';
if(!isset($_SESSION['dr']['ceiling_note']))$_SESSION['dr']['ceiling_note']='';
if(!isset($_SESSION['dr']['door_type']))$_SESSION['dr']['door_type']='';
if(!isset($_SESSION['dr']['closet_style_scale']))$_SESSION['dr']['closet_style_scale']='';
if(!isset($_SESSION['dr']['closet_shared']))$_SESSION['dr']['closet_shared']='';
if(!isset($_SESSION['dr']['drawers_num']))$_SESSION['dr']['drawers_num']='';
if(!isset($_SESSION['dr']['door_style']))$_SESSION['dr']['door_style']='';
if(!isset($_SESSION['dr']['door_style_note']))$_SESSION['dr']['door_style_note']='';

if(!isset($_SESSION['dr']['shelves_num']))$_SESSION['dr']['shelves_num']='';
if(!isset($_SESSION['dr']['long_hang']))$_SESSION['dr']['long_hang']='';
if(!isset($_SESSION['dr']['p_pantry']))$_SESSION['dr']['p_pantry']='';
if(!isset($_SESSION['dr']['bottles']))$_SESSION['dr']['bottles']='';
if(!isset($_SESSION['dr']['personalize_closet']))$_SESSION['dr']['personalize_closet']='';
if(!isset($_SESSION['dr']['wine_style']))$_SESSION['dr']['wine_style']='';
if(!isset($_SESSION['dr']['bottle_num']))$_SESSION['dr']['bottle_num']='';
if(!isset($_SESSION['dr']['note']))$_SESSION['dr']['note']='';
if(!isset($_SESSION['dr']['color']))$_SESSION['dr']['color']='';
if(!isset($_SESSION['dr']['comments']))$_SESSION['dr']['comments']='';
if(!isset($_SESSION['dr']['shape_img_fn']))$_SESSION['dr']['shape_img_fn']='';
if(!isset($_SESSION['dr']['importance_price']))$_SESSION['dr']['importance_price']='';
if(!isset($_SESSION['dr']['importance_timeline']))$_SESSION['dr']['importance_timeline']='';
if(!isset($_SESSION['dr']['importance_design']))$_SESSION['dr']['importance_design']='';
if(!isset($_SESSION['dr']['expedite']))$_SESSION['dr']['expedite']='';
if(!isset($_SESSION['dr']['expedite_note']))$_SESSION['dr']['expedite_note']='';
if(!isset($_SESSION['dr']['closet_type_note']))$_SESSION['dr']['closet_type_note']='';
if(!isset($_SESSION['dr']['door_type_note']))$_SESSION['dr']['door_type_note']='';
if(!isset($_SESSION['dr']['drawers_num_note']))$_SESSION['dr']['drawers_num_note']='';
if(!isset($_SESSION['dr']['shoe_storage_note']))$_SESSION['dr']['shoe_storage_note']='';
if(!isset($_SESSION['dr']['shoe_storage_style_note']))$_SESSION['dr']['shoe_storage_style_note']='';
if(!isset($_SESSION['dr']['accessories_note']))$_SESSION['dr']['accessories_note']='';
if(!isset($_SESSION['dr']['p_pantry_note']))$_SESSION['dr']['p_pantry_note']='';
if(!isset($_SESSION['dr']['bottle_num_note']))$_SESSION['dr']['bottle_num_note']='';
if(!isset($_SESSION['dr']['wine_feat_note']))$_SESSION['dr']['wine_feat_note']='';
if(!isset($_SESSION['dr']['note']))$_SESSION['dr']['note']='';
if(!isset($_SESSION['dr']['color_note']))$_SESSION['dr']['color_note']='';
if(!isset($_SESSION['dr']['p_access_note']))$_SESSION['dr']['p_access_note']='';
if(!isset($_SESSION['dr']['shelves_num_note']))$_SESSION['dr']['shelves_num_note']='';
if(!isset($_SESSION['dr']['obstructions_note']))$_SESSION['dr']['obstructions_note']='';
if(!isset($_SESSION['dr']['hanging_space']))$_SESSION['dr']['hanging_space']='';
if(!isset($_SESSION['dr']['hanging_space_note']))$_SESSION['dr']['hanging_space_note']='';
if(!isset($_SESSION['dr']['closet_shared_note']))$_SESSION['dr']['closet_shared_note']="";
if(!isset($_SESSION['dr']['personalize_wine']))$_SESSION['dr']['personalize_wine']='';
if(!isset($_SESSION['dr']['double_hang']))$_SESSION['dr']['double_hang']='';
if(!isset($_SESSION['dr']['long_hang_note']))$_SESSION['dr']['long_hang_note']='';
if(!isset($_SESSION['dr']['double_hang_note']))$_SESSION['dr']['double_hang_note']='';
if(!isset($_SESSION['dr']['shoes_note']))$_SESSION['dr']['shoes_note']='';
if(!isset($_SESSION['dr']['personalize_pantry']))$_SESSION['dr']['personalize_pantry']='';
if(!isset($_SESSION['dr']['p_wine_bottle_num']))$_SESSION['dr']['p_wine_bottle_num']='';
if(!isset($_SESSION['dr']['obscure_description']))$_SESSION['dr']['obscure_description']='';
if(!isset($_SESSION['dr']['space_shape_note']))$_SESSION['dr']['space_shape_note']='';



if(!isset($_SESSION['dr']['shoes']))$_SESSION['dr']['shoes']=array();
if(!isset($_SESSION['dr']['obstructions']))$_SESSION['dr']['obstructions']=array();
if(!isset($_SESSION['dr']['shoe_storage']))$_SESSION['dr']['shoe_storage']=array();
if(!isset($_SESSION['dr']['shoe_storage_style']))$_SESSION['dr']['shoe_storage_style']=array();
if(!isset($_SESSION['dr']['accessories']))$_SESSION['dr']['accessories']=array();
if(!isset($_SESSION['dr']['p_access']))$_SESSION['dr']['p_access']=array();
if(!isset($_SESSION['dr']['bottle_size']))$_SESSION['dr']['bottle_size']=array();
if(!isset($_SESSION['dr']['wine_feat']))$_SESSION['dr']['wine_feat']=array();
if(!is_array($_SESSION['dr']['shoes']))$_SESSION['dr']['shoes']=array();
if(!is_array($_SESSION['dr']['shoe_storage']))$_SESSION['dr']['shoe_storage']=array(); // not used
if(!is_array($_SESSION['dr']['shoe_storage_style']))$_SESSION['dr']['shoe_storage_style']=array();
if(!is_array($_SESSION['dr']['obstructions']))$_SESSION['dr']['obstructions']=array();
if(!is_array($_SESSION['dr']['accessories']))$_SESSION['dr']['accessories']=array();
if(!is_array($_SESSION['dr']['p_access']))$_SESSION['dr']['p_access']=array();
if(!is_array($_SESSION['dr']['bottle_size']))$_SESSION['dr']['bottle_size']=array();
if(!is_array($_SESSION['dr']['wine_feat']))$_SESSION['dr']['wine_feat']=array();



?>











































































