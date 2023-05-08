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

$page_title = "View Design Request";
$page_group = "design-email";
$msg = '';

require_once($real_root.'/manage/admin-includes/set-page.php');	

$pagenum = (isset($_GET['pagenum'])) ? $_GET['pagenum'] : 0;
if(!isset($_SESSION['paging']['pagenum'])) $_SESSION['paging']['pagenum'] = $pagenum;
$sortby = (isset($_GET['sortby'])) ? $_GET['sortby'] : 0;
if(!isset($_SESSION['paging']['sortby'])) $_SESSION['paging']['sortby'] = $sortby;
$a_d = (isset($_GET['a_d'])) ? $_GET['a_d'] : 0;
if(!isset($_SESSION['paging']['a_d'])) $_SESSION['paging']['a_d'] = $a_d;
$truncate = (isset($_GET['truncate'])) ? $_GET['truncate'] : 0;
if(!isset($_SESSION['paging']['truncate'])) $_SESSION['paging']['truncate'] = $truncate;
$search_str = isset($_GET['search_string']) ? $_GET['search_string'] : '';
 

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$design_email_id = $the_id = isset($_GET['design_email_id'])? $_GET['design_email_id'] : 0; 

if(!is_numeric($design_email_id) ) $design_email_id = $the_id = 0; 

$sql = "SELECT * FROM design_email WHERE design_email_id = '".$design_email_id."' ";
$result = $dbCustom->getResult($db,$sql);	

$object = $result->fetch_object();

$contact_via=$object->contact_via;
$budget_range=$object->budget_range;

$name=$object->name;
$first_name=$object->first_name;
$last_name=$object->last_name;
$email=$object->email;
$phone=$object->phone;
$city=$object->city;
$state=$object->state;
$zip=$object->zip;
$phone=$object->phone;
$proposed_finish_date=$object->proposed_finish_date;
$urgency=$object->urgency;
$importance_price=$object->importance_price;
$importance_timeline=$object->importance_timeline;
$importance_design=$object->importance_design;
$expedite=$object->expedite;
$expedite_note=$object->expedite_note;
$obstructions=$object->obstructions;
$obstructions_note=$object->obstructions_note;
$double_hang=$object->double_hang;
$double_hang_note=$object->double_hang_note;
$personalize_pantry=$object->personalize_pantry;
$p_wine_bottle_num=$object->p_wine_bottle_num;
$p_pantry=$object->p_pantry;
$p_pantry_note=$object->p_pantry_note;
$p_access=$object->p_access;
$p_access_note=$object->p_access_note;
$additonal_info=$object->additonal_info;
$closet_type=$object->closet_type;
$closet_type_note=$object->closet_type_note;
$ceiling=$object->ceiling;
$ceiling_note=$object->ceiling_note;
$ceiling_height=$object->ceiling_height;
$closet_shared_note=$object->closet_shared_note;
$base_mold_height=$object->base_mold_height;
$shoes=$object->shoes;
$shoe_storage_style=$object->shoe_storage_style;
$shoe_storage=$object->shoe_storage;
$shoe_storage_note=$object->shoe_storage_note;
$shoe_storage_style_note=$object->shoe_storage_style_note;
$hanging_space_note=$object->hanging_space_note;
$long_hang_note=$object->long_hang_note;
$accessories=$object->accessories;
$accessories_note=$object->accessories_note;
$bottle_num_note=$object->bottle_num_note;
$wine_feat=$object->wine_feat;
$wine_feat_note=$object->wine_feat_note;
$color_note=$object->color_note;
$job_type=$object->job_type;
$best_contact_time=$object->best_contact_time;
$storage_type=$object->storage_type;
$master_type=$object->master_type;
$mobile_hanging_needs=$object->mobile_hanging_needs;
$child_age=$object->child_age;
$other_storage_type=$object->other_storage_type;
$short_hang=$object->short_hang;
$medium_hang=$object->medium_hang;
$long_hang=$object->long_hang;
$drawers=$object->drawers;
$tie_rack=$object->tie_rack;
$belt_rack=$object->belt_rack;
$valet_rod=$object->valet_rod;
$finish=$object->finish;
$obscure_description=$object->obscure_description;
$comments=$object->comments;
$date_submitted=$object->date_submitted;
$source=$object->source;
$origin=$object->origin;
$additionl_info=$object->additionl_info;
$personalize_wine=$object->personalize_wine;
$wine_style=$object->wine_style;
$bottle_size=$object->bottle_size;
$bottle_num=$object->bottle_num;
$bottles=$object->bottles;
$note=$object->note;
$color=$object->color;
$shelves_num=$object->shelves_num;
$shelves_num_note=$object->shelves_num_note;
$drawers_num=$object->drawers_num;
$hanging_space=$object->hanging_space;
$drawers_num_note=$object->drawers_num_note;
$closet_shared=$object->closet_shared;
$closet_style_scale=$object->closet_style_scale;
$wall_length_other=$object->wall_length_other;
$space_shape=$object->space_shape;
$space_shape_note=$object->space_shape_note;
$personalize_closet=$object->personalize_closet;
$closet_name=$object->closet_name;
$door_size=$object->door_size;
$door_style=$object->door_style;
$door_type=$object->door_type;
$door_type_note=$object->door_type_note;
$door_style_note=$object->door_style_note;
$wall_a=$object->wall_a;
$wall_b=$object->wall_b;
$wall_c=$object->wall_c;
$wall_d=$object->wall_d;
$wall_e=$object->wall_e;
$wall_f=$object->wall_f;
$wall_g=$object->wall_g;
$user_id=$object->user_id;

$preferred_contact=$object->preferred_contact;


require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>

</head>
<body class="printable_page">
<div class="print_container">
	<?php 
	$url_str = "design-request-list.php";
	$url_str .= "?pagenum=".$pagenum;
	$url_str .= "&sortby=".$sortby;
	$url_str .= "&a_d=".$a_d;
	$url_str .= "&truncate=".$_SESSION['paging']['truncate'];
	$url_str .= "&search_str=".$search_str;
	?>
	<div class="fltrt"><a href="#" onClick="window.print();return false" class="btn btn-large">Print Page</a><br /><br />
    <a href="<?php echo $url_str; ?>" target="_top" class="btn btn-large"><i class="icon-arrow-left"></i> Go Back</a><br /></div>
	<h1><?php if ($object->is_costco){echo "Costco Customer "; }?>
	Design Request 
	<?php echo $design_email_id; ?></h1>
	<br /><?php echo date("F j, Y, g:i a", $object->date_submitted); ?>
	</h2>


<?php
$message='';
	$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Site:</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".SITEROOT."</font></div>";	
	$message .= "<div style='clear:both;'></div>";
	if($source != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>source:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$source."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($origin != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>origin:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$origin."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}	
	$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Customer Email:</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'><a href='mailto:".$email."'>".$email."</a></font></div>";
	$message .= "<div style='clear:both;'></div>";
	$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Customer Name:</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$name."</font></div>";
	$message .= "<div style='clear:both;'></div>";
	if($phone != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Phone:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$phone."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}	
	if($city != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>City:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$city."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}			
	if($state != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>State:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$state."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}			
	if($zip != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Zip Code:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$zip."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}			
	if($preferred_contact != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Preferred contact:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$preferred_contact."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($expedite != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Expedite:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$expedite."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($expedite_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Expedite Note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$expedite_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($proposed_finish_date != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Proposed finish date:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$proposed_finish_date."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}

	if($closet_name != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>closet_name:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$closet_name."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($personalize_closet != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>personalize_closet:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$personalize_closet."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($budget_range != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Budget range:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$budget_range."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($urgency != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Urgency:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$urgency."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($importance_price != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Importance of price:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$importance_price."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($importance_timeline != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Importance of timeline:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$importance_timeline."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($importance_design != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Importance of design:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$importance_design."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($best_contact_time != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Best contact time:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$best_contact_time."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	
	
	if($obstructions != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Obstructions:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$obstructions."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($obstructions_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Obstructions note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$obstructions_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($closet_style_scale != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>closet_style_scale:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$closet_style_scale."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($closet_type != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Closet_type:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$closet_type."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($closet_type_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Closet_type note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$closet_type_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($storage_type != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Storage Type:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$storage_type."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($other_storage_type != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Other storage Type:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$other_storage_type."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($child_age != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Child_age:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$child_age."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($closet_shared != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Closet shared:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$closet_shared."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($closet_shared_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Closet shared note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$closet_shared_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($ceiling != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Ceiling:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$ceiling."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($ceiling_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Ceiling note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$ceiling_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($ceiling_height != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Ceiling height:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$ceiling_height."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($additonal_info != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Additonal info:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$additonal_info."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($base_mold_height != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Base mold height:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$base_mold_height."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($shoes != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>shoes:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$shoes."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($shoe_storage_style != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Shoe storage style:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$shoe_storage_style."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($shoe_storage_style_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Shoe storage style note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$shoe_storage_style_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($shoe_storage != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Shoe storage:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$shoe_storage."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($shoe_storage_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Shoe storage note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$shoe_storage_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($tie_rack != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Tie_rack:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$tie_rack."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($belt_rack != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Belt_rack:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$belt_rack."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($valet_rod != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Valet_rod:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$valet_rod."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($accessories != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Accessories:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$accessories."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($accessories_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Accessories_note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$accessories_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($job_type != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>job_type:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$job_type."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($master_type != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>master_type:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$master_type."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($mobile_hanging_needs != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>mobile_hanging_needs:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$mobile_hanging_needs."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($personalize_pantry != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Personalize Pantry:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$personalize_pantry."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($p_pantry != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Pantry:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$p_pantry."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($p_pantry_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Pantry_note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$p_pantry_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($p_access != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Pantry accessoty:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$p_access."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($p_access_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Pantry accessoty note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$p_access_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($p_wine_bottle_num != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Pantry wine bottle num:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$p_wine_bottle_num."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($personalize_wine != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>personalize_wine:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$personalize_wine."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($bottle_num_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Bottle_num_note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$bottle_num_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}

	if($wine_feat != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Wine_feat:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wine_feat."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($wine_feat_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Wine_feat_note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wine_feat_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($wine_style != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>wine_style:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wine_style."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($bottle_size != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>bottle_size:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$bottle_size."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($bottle_num != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>bottle_num:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$bottle_num."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($bottles != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>bottles:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$bottles."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($shelves_num != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>shelves_num:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$shelves_num."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($shelves_num_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>shelves_num_note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$shelves_num_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($drawers != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>drawers:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$drawers."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($drawers_num != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>drawers_num:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$drawers_num."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($drawers_num_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>drawers_num_note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$drawers_num_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($hanging_space != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>hanging_space:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$hanging_space."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($hanging_space_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Hanging space note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$hanging_space_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($long_hang != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Long hang:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".stripAllSlashes($long_hang)."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}		
	if($long_hang_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Long hang note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$long_hang_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($double_hang != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Double_hang:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$double_hang."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($double_hang_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Double hang note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$double_hang_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($medium_hang != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Medium hang:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$medium_hang."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($long_hang != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Long hang:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$long_hang."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($short_hang != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Short hang:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".stripAllSlashes($short_hang)."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($door_size != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>door size:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$door_size."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($door_type != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>door type:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$door_type."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($door_style != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>door_style:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$door_style."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}	
	if($door_type_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>door_type_note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$door_type_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}	
	if($door_style_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>door_style_note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$door_style_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($wall_length_other != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>wall_length_other:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wall_length_other."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($space_shape != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>space_shape:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$space_shape."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($space_shape_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>space_shape_note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$space_shape_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($wall_a != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>wall a:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wall_a."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($wall_b != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>wall b:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wall_b."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($wall_c != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>wall c:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wall_c."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($wall_d != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>wall d:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wall_d."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($wall_e != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>wall e:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wall_e."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($wall_f != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>wall f:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wall_f."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($wall_g != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>wall g:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$wall_g."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($finish != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Finish:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$finish."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($color != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>color:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$color."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($color_note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Color_note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$color_note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($comments != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>comments:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$comments."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($additionl_info != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>additionl_info:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$additionl_info."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}
	if($note != ''){
		$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>note:</font></div>";
		$message .= "<div style='float:left; padding-left:12px; text-align:left;'><font color='#000000'>".$note."</font></div>";
		$message .= "<div style='clear:both;'></div>";
	}


$sql = "SELECT DISTINCT file_name
FROM design_email_image 
WHERE design_email_id  = '".$the_id."'";	
$img_result = $dbCustom->getResult($db,$sql);
while($row = $img_result->fetch_object()){
	$message .= "<div style='float:left; width:40%; text-align:right;'><font color='#000000'>Uploaded File:</font></div>";
	$message .= "<div style='float:left; padding-left:12px; text-align:left;'>";
	$img = SITEROOT."/user_uploads/".$_SESSION['profile_account_id']."/".$row->file_name;
	$message .= "<img src='".$img."' ></div>";
	$message .= "<div style='clear:both;'></div>";
}
$message .= "</div><br /><br />";

echo $message;

?>



<br /><br /><br /><br /><br /><br />

</body>
</html>









