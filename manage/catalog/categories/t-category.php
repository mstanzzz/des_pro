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
require_once($real_root.'/includes/class.nav.php');

$progress = new SetupProgress;
$module = new Module;
$nav = new Nav;

$page_title = "Categories";
$page_group = "cat";

$msg = '';
function get_svg_icon($svg_id){
	$dbCustom = new DbCustom();
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$sql = "SELECT svg_code
			FROM svg
			WHERE svg_id = '".$svg_id."'";
	$re = $dbCustom->getResult($db,$sql);
	if($re->num_rows > 0){
		$object = $re->fetch_object();
		$svg_code = $object->svg_code;	
		return $svg_code;
	}
	return  '';
}

$db = $dbCustom->getDbConnect(CART_N_DATABASE);

$strip = (isset($_GET['strip'])) ? $_GET['strip'] : 0;
$pagenum = (isset($_GET['pagenum'])) ? addslashes($_GET['pagenum']) : 0;
$sortby = (isset($_GET['sortby'])) ? trim($_GET['sortby']) : '';
$a_d = (isset($_GET['a_d'])) ? $_GET['a_d'] : 'a';
$truncate = (isset($_GET['truncate'])) ? addslashes($_GET['truncate']) : 1;
$search_str = (isset($_GET['search_str'])) ? addslashes($_GET['search_str']) : '';


if(isset($_POST['add_t_cat'])){

	$img_id = (isset($_POST['img_id']))? $_POST['img_id'] : 0; 
	if(!is_numeric($img_id)) $img_id = 0;
	$name = (isset($_POST['name']))? trim(addslashes($_POST['name'])) : '';
	$short_name = (isset($_POST['short_name']))? trim(addslashes($_POST['short_name'])) : '';
	$tool_tip = (isset($_POST['tool_tip']))? trim(addslashes($_POST['tool_tip'])) : '';
	$short_description = (isset($_POST['short_description']))? trim(addslashes($_POST['short_description'])) : '';
	$description = (isset($_POST['description']))? trim(addslashes($_POST['description'])) : '';
	$img_alt_text = (isset($_POST['img_alt_text'])) ? trim(addslashes($_POST['img_alt_text'])) : '';
	$key_words = (isset($_POST['key_words'])) ? trim(addslashes($_POST['key_words'])) : '';
	$custom1 = (isset($_POST['custom1']))? trim(addslashes($_POST['custom1'])) : '';
	$custom2 = (isset($_POST['custom2']))? trim(addslashes($_POST['custom2'])) : '';
	$custom3 = (isset($_POST['custom3']))? trim(addslashes($_POST['custom3'])) : '';	
	$show_on_home_page = (isset($_POST['show_on_home_page'])) ? $_POST['show_on_home_page'] : 0;
	if(!is_numeric($show_on_home_page)) $show_on_home_page = 0;
	$show_in_cart = (isset($_POST['show_in_cart'])) ? $_POST['show_in_cart'] : 0;
	if(!is_numeric($show_in_cart)) $show_in_cart = 0;
	$show_in_showroom = (isset($_POST['show_in_showroom'])) ? $_POST['show_in_showroom'] : 0;
	if(!is_numeric($show_in_showroom)) $show_in_showroom = 0;
	$svg_id = (isset($_POST['svg_id'])) ? $_POST['svg_id'] : 0;
	if(!is_numeric($svg_id)) $svg_id = 0;

	$profile_cat_id = (isset($_POST['profile_cat_id'])) ? $_POST['profile_cat_id'] : 0;
	if(!is_numeric($profile_cat_id)) $profile_cat_id = 0;

	$sql = "SELECT profile_cat_id 
			FROM category 
			WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
			AND profile_cat_id = '".$profile_cat_id."'";
	$result = $dbCustom->getResult($db,$sql);		
	if(!$result->num_rows){
		$update_profile_cat_id = 1;
	}else{
		$update_profile_cat_id = 0;
	}

	if($profile_cat_id == 0 || $update_profile_cat_id == 1){
		$sql = "SELECT max(profile_cat_id) AS profile_cat_id 
				FROM category 
				WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
		$result = $dbCustom->getResult($db,$sql);		
		if(!$result->num_rows){
			$object = $result->fetch_object();
			$profile_cat_id = $object->profile_cat_id + 1; 	
		}
	}

	$sql = sprintf("INSERT INTO category 
		(name
		,short_name
		,tool_tip
		,description
		,short_description
		,img_alt_text
		,custom1
		,custom2
		,custom3
		,key_words
		,show_on_home_page
		,show_in_cart
		,show_in_showroom
		,svg_id
		,img_id
		,profile_cat_id			
		,profile_account_id) 
		VALUES ('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%u','%u','%u','%u','%u','%u','%u')", 
		$name
		,$short_name
		,$tool_tip
		,$description
		,$short_description
		,$img_alt_text
		,$custom1
		,$custom2
		,$custom3
		,$key_words
		,$show_on_home_page
		,$show_in_cart
		,$show_in_showroom
		,$svg_id
		,$img_id
		,$profile_cat_id
		,$_SESSION['profile_account_id']);		
	$res = $dbCustom->getResult($db,$sql);
	$cat_id = $db->insert_id;
	$msg = 'Your change is now live.';

}


if(isset($_POST['update_t_cat'])){
	$cat_id = (isset($_POST['cat_id']))? $_POST['cat_id'] : 0; 
	if(!is_numeric($cat_id)) $cat_id = 0;
	$img_id = (isset($_POST['img_id']))? $_POST['img_id'] : 0; 
	if(!is_numeric($img_id)) $img_id = 0;
	$svg_id = (isset($_POST['svg_id'])) ? $_POST['svg_id'] : 0;
	if(!is_numeric($svg_id)) $svg_id = 0;
	$show_on_home_page = (isset($_POST['show_on_home_page'])) ? $_POST['show_on_home_page'] : 0;
	if(!is_numeric($show_on_home_page)) $show_on_home_page = 0;
	$show_in_cart = (isset($_POST['show_in_cart'])) ? $_POST['show_in_cart'] : 0;
	if(!is_numeric($show_in_cart)) $show_in_cart = 0;
	$show_in_showroom = (isset($_POST['show_in_showroom'])) ? $_POST['show_in_showroom'] : 0;
	if(!is_numeric($show_in_showroom)) $show_in_showroom = 0;
	$name = (isset($_POST['name']))? trim(addslashes($_POST['name'])) : '';
	$short_name = (isset($_POST['short_name']))? trim(addslashes($_POST['short_name'])) : '';
	$tool_tip = (isset($_POST['tool_tip']))? trim(addslashes($_POST['tool_tip'])) : '';
	$short_description = (isset($_POST['short_description']))? trim(addslashes($_POST['short_description'])) : '';
	$description = (isset($_POST['description']))? trim(addslashes($_POST['description'])) : '';
	$img_alt_text = (isset($_POST['img_alt_text'])) ? trim(addslashes($_POST['img_alt_text'])) : '';
	$key_words = (isset($_POST['key_words'])) ? trim(addslashes($_POST['key_words'])) : '';
	$custom1 = (isset($_POST['custom1']))? trim(addslashes($_POST['custom1'])) : '';
	$custom2 = (isset($_POST['custom2']))? trim(addslashes($_POST['custom2'])) : '';
	$custom3 = (isset($_POST['custom3']))? trim(addslashes($_POST['custom3'])) : '';

	$profile_cat_id = (isset($_POST['profile_cat_id'])) ? $_POST['profile_cat_id'] : 0;
	if(!is_numeric($profile_cat_id)) $profile_cat_id = 0;

	$sql = "SELECT profile_cat_id 
			FROM category 
			WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
			AND profile_cat_id = '".$profile_cat_id."'";
	$result = $dbCustom->getResult($db,$sql);		
	if($result->num_rows > 0){
		$update_profile_cat_id = 1;
	}else{
		$update_profile_cat_id = 0;
	}

	if($profile_cat_id == 0 || $update_profile_cat_id == 1){
		$sql = "SELECT max(profile_cat_id) AS profile_cat_id 
				FROM category 
				WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
		$result = $dbCustom->getResult($db,$sql);		
		if($result->num_rows > 0){
			$object = $result->fetch_object();
			$profile_cat_id = $object->profile_cat_id + 1; 	
		}
	}

	$sql = "UPDATE category 
			SET name = '".$name."'
			,short_name = '".$short_name."'
			,tool_tip = '".$tool_tip."'
			,description = '".$description."'
			,short_description = '".$short_description."'
			,img_id = '".$img_id."'
			,img_alt_text = '".$img_alt_text."'
			,custom1 = '".$custom1."'
			,custom2 = '".$custom2."'
			,custom3 = '".$custom3."'
			,key_words = '".$key_words."'
			,show_on_home_page = '".$show_on_home_page."'
			,show_in_cart = '".$show_in_cart."'
			,show_in_showroom = '".$show_in_showroom."'
			,svg_id = '".$svg_id."'
			,profile_cat_id = '".$profile_cat_id."'			
	WHERE cat_id = '".$cat_id."'";
	$res = $dbCustom->getResult($db,$sql);
}

if(isset($_POST['set_active_and_display_order'])){
	$cat_ids  = isset($_POST['cat_ids'])? $_POST['cat_ids'] : array();
	$display_orders  = isset($_POST['display_orders'])? $_POST['display_orders'] : array();
	$actives = (isset($_POST['active']))? $_POST['active'] : array();	
	$cats_from_page_array = explode(',',$_POST['cats_from_this_page']);
	$click_count = (isset($_POST['click_count']))? $_POST['click_count'] : array(); 

	foreach($cats_from_page_array as $cat_id){
		if(is_numeric($cat_id)){
			$sql = "UPDATE category 
					SET active = '0' 
					WHERE cat_id = '".$cat_id."'";
			$result = $dbCustom->getResult($db,$sql);		
		}
	}
	if(is_array($actives)){	
		foreach($actives as $key => $value){
			$sql = "UPDATE category SET active = '1' WHERE cat_id = '".$value."'";
			$result = $dbCustom->getResult($db,$sql);
			
			//echo "key: ".$key."   value: ".$value."<br />"; 
		}
	}

	$i=0;
	if(is_array($click_count)){
		foreach($cats_from_page_array as $cat_id){
			if(is_numeric($cat_id)){				
				if(isset($click_count[$i])){		
					$sql = "UPDATE category 
							SET click_count = '".$click_count[$i]."' 
							WHERE cat_id = '".$cat_id."'";
					$result = $dbCustom->getResult($db,$sql);	
					$i++;	
				}					
			}
		}
	}

	if(is_array($display_orders)){
		for($i = 0; $i < count($display_orders); $i++){
			
			$sql = sprintf("UPDATE category 
				SET display_order = '%u'  
				WHERE cat_id = '%u'",
				$display_orders[$i], $cat_ids[$i]);

			$result = $dbCustom->getResult($db,$sql);
		}
	}

	$msg = 'Changes Saved.';
}

if(isset($_POST['del_cat_id'])){

	$cat_id = $_POST['del_cat_id'];
	$sql = "DELETE FROM child_cat_to_parent_cat 
			WHERE child_cat_id = '".$cat_id."'";
	$result = $dbCustom->getResult($db,$sql);	
	$sql = sprintf("DELETE FROM category WHERE cat_id = '%u'", $cat_id);
	$result = $dbCustom->getResult($db,$sql);
	$sql = "SELECT img_id
			FROM category
			WHERE cat_id = '".$cat_id."'";
	$result = $dbCustom->getResult($db,$sql);
	if($result->num_rows > 0){	
		$object = $result->fetch_object();
		$img_id = $object->img_id; 
		$sql = "SELECT file_name
				FROM image
				WHERE img_id = '".$img_id."'";
		$res = $dbCustom->getResult($db,$sql);
		if($res->num_rows > 0){	
			$obj = $res->fetch_object();
			
			echo $file_name = $obj->file_name; 
			
			$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$file_name;
			if(file_exists($p)) unlink($p);

			$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/tiny/".$file_name;
			if(file_exists($p)) unlink($p);

			$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/thumb/".$file_name;
			if(file_exists($p)) unlink($p);
						
			$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/small/".$file_name;
			if(file_exists($p)) unlink($p);
						
			$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/".$file_name;
			if(file_exists($p)) unlink($p);
						
			$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/large/".$file_name;
			if(file_exists($p)) unlink($p);
			
			/* **** wide **** */
			$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/tiny/wide/".$file_name;
			if(file_exists($p)) unlink($p);

			$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/thumb/wide/".$file_name;
			if(file_exists($p)) unlink($p);
						
			$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/small/wide/".$file_name;
			if(file_exists($p)) unlink($p);
						
			$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/wide/".$file_name;
			if(file_exists($p)) unlink($p);
						
			$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/large/wide/".$file_name;
			if(file_exists($p)) unlink($p);
			
			/* **** extra wide **** */
			$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/tiny/exwide/".$file_name;
			if(file_exists($p)) unlink($p);

			$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/thumb/exwide/".$file_name;
			if(file_exists($p)) unlink($p);
						
			$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/small/exwide/".$file_name;
			if(file_exists($p)) unlink($p);
						
			$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/exwide/".$file_name;
			if(file_exists($p)) unlink($p);
						
			$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/large/exwide/".$file_name;
			if(file_exists($p)) unlink($p);


			/* **** hero **** */
			$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/tiny/hero/".$file_name;
			if(file_exists($p)) unlink($p);

			$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/thumb/hero/".$file_name;
			if(file_exists($p)) unlink($p);
						
			$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/small/hero/".$file_name;
			if(file_exists($p)) unlink($p);
						
			$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/hero/".$file_name;
			if(file_exists($p)) unlink($p);
						
			$p = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/large/hero/".$file_name;
			if(file_exists($p)) unlink($p);
			
			$sql = sprintf("DELETE FROM image 
							WHERE img_id = '%u'
							AND profile_account_id = '%u'", $img_id, $_SESSION['profile_account_id']);
			$result = $dbCustom->getResult($db,$sql);

		}		
	}	
	$msg = 'Your change is now live.';
}

unset($_SESSION['temp_gallery']);

unset($_SESSION['temp_fields']);
unset($_SESSION['temp_attr_ids']);
unset($_SESSION['temp_cats']);
unset($_SESSION['cat_id']);
unset($_SESSION['parent_cat_id']);
unset($_SESSION['paging']);
unset($_SESSION['img_id']);
unset($_SESSION['search_str']);
unset($_SESSION['t_cats']);
unset($_SESSION['nav_bar_cats']);
unset($_SESSION['item_id']);
unset($_SESSION['side_nav_showroom_cats']); // frontend class.nav
unset($_SESSION['top_showroom_cats']); // frontend class.nav
unset($_SESSION['home_cats']); // frontend class.nav
unset($_SESSION['footer_nav_cats']); // frontend class.nav
unset($_SESSION['ret_path']);
unset($_SESSION['ret_dir']);
unset($_SESSION['ret_page']);

require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>

<script>

function regularSubmit() {
  document.form.submit(); 
}	

</script>

</head>
<body>

<?php
if(!$strip){
	require_once($real_root.'/manage/admin-includes/manage-header.php');
	require_once($real_root.'/manage/admin-includes/manage-top-nav.php');
}
?>
<div class="manage_page_container">
    <div class="manage_side_nav">
        <?php 
if(!$strip){
	require_once($real_root.'/manage/admin-includes/manage-side-nav.php');
}
        ?>
    </div>	
    <div class="manage_main">
	<?php
	$total_t_cats = array();
	$t_cats = array();
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$sql = "SELECT cat_id
			,profile_cat_id
			,name
			,img_id
			,show_on_home_page
			,display_order
			,active
			,show_in_showroom
			,svg_id
			,click_count			
	FROM category 
	WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
	$search_str = (isset($_REQUEST["search_str"])) ?  trim(addslashes($_REQUEST["search_str"])) : ''; 		
	if($search_str != ''){
		if(is_numeric($search_str)){
			$sql .= " AND (category.cat_id = '".$search_str."%' || category.profile_cat_id = '".$search_str."')";			
		}else{
			$sql .= " AND category.name like '%".$search_str."%'";
		}
	}
	if($sortby != ''){
		if($sortby == 'name'){
			if($a_d == 'd'){
				$sql .= " ORDER BY name DESC";
			}else{
				$sql .= " ORDER BY name";		
			}
		}			
		if($sortby == 'click_count'){
			if($a_d == 'd'){
				$sql .= " ORDER BY click_count DESC";
			}else{
				$sql .= " ORDER BY click_count";		
			}
		}
		if($sortby == 'profile_cat_id'){
			if($a_d == 'd'){
				$sql .= " ORDER BY profile_cat_id DESC";
			}else{
				$sql .= " ORDER BY profile_cat_id";		
			}
		}
	}else{
		$sql .= " ORDER BY cat_id";					
	}
	$result = $dbCustom->getResult($db,$sql);
	$i = 0;
	while($row = $result->fetch_object()) {
		$total_t_cats[$i]['cat_id'] = $row->cat_id;
		$total_t_cats[$i]['name'] = $row->name;
		$total_t_cats[$i]['show_on_home_page'] = $row->show_on_home_page;
		$total_t_cats[$i]["display_order"] = $row->display_order;
		$total_t_cats[$i]["active"] = $row->active;
		$total_t_cats[$i]['show_in_showroom'] = $row->show_in_showroom;
		$total_t_cats[$i]['svg_id'] = $row->svg_id;
		$total_t_cats[$i]['svg_code'] =get_svg_icon($row->svg_id);
		$total_t_cats[$i]['click_count'] = $row->click_count;
		$total_t_cats[$i]['profile_cat_id'] = $row->profile_cat_id;
		$sql = "SELECT file_name 
				FROM image
				WHERE img_id = '".$row->img_id."'";
		$img_res = $dbCustom->getResult($db,$sql);
		if($img_res->num_rows > 0){
			$img_obj = $img_res->fetch_object();
			$total_t_cats[$i]['file_name'] = $img_obj->file_name;	
		}else{
			$total_t_cats[$i]['file_name'] = '';
		}
		$i++;
	}		
	$total_rows = sizeof($total_t_cats);
	$rows_per_page = 300;

	$last = ceil($total_rows/$rows_per_page); 
	if($last == 0) $last = 1;
			
	if ($pagenum > $last){ 
		$pagenum = $last; 
	}
	if ($pagenum < 1){ 
		$pagenum = 1; 
	}
	$start = ($pagenum - 1) * $rows_per_page;
	$end = $pagenum * $rows_per_page;

	$t_cats = array_slice($total_t_cats, $start, $end);
	
	$url_str = "t-category.php";
	$url_str .= "?strip=".$strip;
	$url_str .= "&firstload=1";
	$url_str .= "&pagenum=".$pagenum;
	$url_str .= "&sortby=".$sortby;
	$url_str .= "&a_d=".$a_d;
	$url_str .= "&truncate=".$truncate;
	$url_str .= "&strip=".$strip;

	?>
	<div class="search_bar">
	<form name="search_form" action="<?php echo $url_str; ?>" method="post" 
		enctype="multipart/form-data"
		 target="_self">
	<input type="text" name="search_str" class="searchbox" />
	<button type="submit" class="btn btn-primary btn-large" value="search">
	Search
	</button>
	</form>
	</div>
	<br />
	<?php 
	$url_str = "t-category.php"; 
	echo "<a style='margin-left:30px;' class='btn btn-large btn-primary' href='".$url_str."'>List All</a>"; 		
	$url_str = "add-t-category.php"; 
	$url_str .= "?strip=".$strip;
	$url_str .= "&firstload=1";
	$url_str .= "&pagenum=".$pagenum;
	$url_str .= "&sortby=".$sortby;
	$url_str .= "&a_d=".$a_d;
	$url_str .= "&truncate=".$truncate;
	echo "<a style='margin-left:30px;' class='btn btn-large btn-primary' href='".$url_str."'>Add Category</a>"; 
	echo "<a style='margin-left:30px;' href='#' onClick='regularSubmit();'  class='btn btn-success btn-large'>Save Changes </a>";		

	$url_str = "t-category.php";
	if($total_rows > $rows_per_page){
		echo getPagination($total_rows, $rows_per_page, $pagenum, $truncate, $last, $url_str, $sortby, $a_d,0,0, $search_str,0,0,$strip); 
		echo "<br /><br /><br />";
	}
	$url_str = "t-category.php"; 
	$url_str .= "?strip=".$strip;
	$url_str .= "&pagenum=".$pagenum;
	$url_str .= "&sortby=".$sortby;
	$url_str .= "&a_d=".$a_d;
	$url_str .= "&truncate=".$truncate;
?>
<form name="form" action="<?php echo $url_str; ?>" method="post" 
	enctype="multipart/form-data" target="_self">        
<input type="hidden" name="set_active_and_display_order" value="1">	
<table cellpadding="6" cellspacing="6" style="width:100%;" >
<tr style="height:60px; background-color:#ababab; color:white; font-size:1.4em;">
	<td width="10%"></td>
	<td width="10%">icon</td>
	<td width="15%;">
<a href="t-category.php?sortby=name&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
	<br />
	Name
	<br />
<a href="t-category.php?sortby=name&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>	
	</td>
	<td>
<a href="t-category.php?sortby=click_count&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
<br />
clicks
<br />
<a href="t-category.php?sortby=click_count&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>	
	<td>
<a href="t-category.php?sortby=profile_cat_id&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
	<br />
	url
	<br />
<a href="t-category.php?sortby=profile_cat_id&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>	
	</td>
	<td width="10%"></td>
	<td width="10%"></td>
	
	<td width="10%">
<a href="t-category.php?sortby=active&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
	Active
<a href="t-category.php?sortby=active&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>		
	</td>
	<td width="10%"></td>
	<td width="10%"></td>
</tr>

<?php
$disabled = ($admin_access->product_catalog_level < 2)? "disabled" : '';
$cats_from_this_page = '';
$block = '';						
foreach($t_cats as $t_cat) {
							
	$cats_from_this_page .= $t_cat['cat_id'].",";
								
	$block .= "<tr>"; 
	$block .= "<td>";
	$block .= "<a class='fancybox' href='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/".$t_cat['file_name']."'>";
	$block .= "<img src='".SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/thumb/".$t_cat['file_name']."'></a></td>";
	$block .= "</td>";
	
	//$block .= "<td><ing src='".$t_cat['svg_code']."'></td>"; 
	$block .= "<td>".$t_cat['svg_code']."</td>";
	$block .= "<td>".stripslashes($t_cat['name'])."</td>"; 

$block .= "<td align='center'>";
//$block .= "click_count";
$block .= "<input style='width:60px;' type='text' name='click_count[]' value='".$t_cat['click_count']."' >";
$block .= "</td>";	
	
	
	$block .= "<td>".$t_cat['profile_cat_id']."</td>";
	$url_str = '';
	$url_str .= SITEROOT."manage/catalog/categories/select-item-to-cat.php";
	$url_str .="?cat_id=".$t_cat['cat_id'];
	$url_str .="&strip=".$strip;

	$block .= "<td>";
	$block .= "<a class='btn btn-primary btn-small' href='".$url_str."'>";
	$block .= "Batch Prod";
	$block .= "</a>";
	$block .= "</td>";

	$url_str = '';
	$url_str .= SITEROOT."manage/catalog/products/item.php";
	$url_str .="?cat_id=".$t_cat['cat_id']."&from_t_cats=1";
	$url_str .="&strip=".$strip;

	$block .= "<td>";	
	$block .= "<a class='btn btn-primary btn-small' href='".$url_str."'>";
	$block .= "Products";
	$block .= "</a>";
	$block .= "</td>";

	$checked = ($t_cat["active"])? "checked='checked'" : ''; 
	$block	.= "<td align='center' valign='middle' >
				<div class='checkboxtoggle on ".$disabled." '> 
				<span class='ontext'>ON</span>
				<a class='switch on' href='#'></a>
				<span class='offtext'>OFF</span>
				<input type='checkbox' class='checkboxinput' name='active[]' 
				value='".$t_cat['cat_id']."' ".$checked." /></div>";
	$block .= "</td>";	
				
	$url_str = "edit-t-category.php";
	$url_str .= "?cat_id=".$t_cat['cat_id'];
	$url_str .= "&firstload=1";									
	$url_str .= "&strip=".$strip;							
	$url_str .= "&pagenum=".$pagenum;
	$url_str .= "&sortby=".$sortby;
	$url_str .= "&a_d=".$a_d;
	$url_str .= "&truncate=".$truncate;
	$url_str .= "&search_str=".$search_str;
	$block .= "<td valign='middle'>
				<a class='btn btn-primary' href='".$url_str."'>
				<i class='icon-cog icon-white'></i> Edit</a>";
	$block .= "</td>";
										
	$block .= "<td>
				<a class='btn btn-danger confirm ".$disabled." '>
				<input type='hidden' id='".$t_cat['cat_id']."' 
				class='itemId' value='".$t_cat['cat_id']."' />Del</a>";
	$block .= "</td>";
	$block .= "</tr>";
}
$block .= "</table>";
						
echo $block;
				
$url_str = "t-category.php";
if($total_rows > $rows_per_page){
echo getPagination($total_rows, $rows_per_page, $pagenum, $truncate, $last, $url_str, $sortby, $a_d,0,0, $search_str,0,0,$strip); 
echo "<br /><br /><br />";
}

echo "<a style='margin-left:30px;' href='#' onClick='regularSubmit();'  class='btn btn-success btn-large'>Save Changes </a>";	
?>
<input type="hidden" name="cats_from_this_page" value="<?php echo $cats_from_this_page; ?>">      
</form> 

  </div>
  <p class="clear"></p>
  
</div>

<div class="disabledMsg">
	<p>Sorry, this item can't be deleted or inactive.</p>
</div>

    <?php
	$url_str = "t-category.php";
	$url_str = "?strip=".$strip;
	$url_str .= "&pagenum=".$pagenum;
	$url_str .= "&sortby=".$sortby;
	$url_str .= "&a_d=".$a_d;
	$url_str .= "&truncate=".$truncate;
	?>
<div id="content-delete" class="confirm-content">
	<h3>Are you sure you want to delete this Category?</h3>
	<form name="del_category" action="<?php echo $url_str; ?>" method="post" target="_top">
		<input id="del_cat_id" class="itemId" type="hidden" name="del_cat_id" value='' />
		<a class="btn btn-large dismiss">No, Cancel</a>
		<button class="btn btn-danger btn-large" name="del_cat" type="submit" >Yes, Delete</button>
	</form>
</div>

<?php
require_once($real_root."/manage/admin-includes/manage-footer.php");
?>

</body>
</html>





