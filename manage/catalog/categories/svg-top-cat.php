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

$page_title = "Top Categories";
$page_group = "cat";

$msg = '';
$db = $dbCustom->getDbConnect(CART_N_DATABASE);

$strip = (isset($_GET['strip'])) ? $_GET['strip'] : 0;
$fb = (!$strip) ? "fancybox fancybox.iframe" : ''; 
$pagenum = (isset($_GET['pagenum'])) ? addslashes($_GET['pagenum']) : 0;
$sortby = (isset($_GET['sortby'])) ? trim($_GET['sortby']) : '';
$a_d = (isset($_GET['a_d'])) ? $_GET['a_d'] : 'a';
$truncate = (isset($_GET['truncate'])) ? addslashes($_GET['truncate']) : 1;
$search_str = (isset($_GET['search_str'])) ? addslashes($_GET['search_str']) : '';

if(isset($_POST['add_svg'])){

	$svg_code = (isset($_POST['svg_code'])) ? $_POST['svg_code'] : '';
	$svg_code = str_replace('"', "'", $svg_code);
	$svg_code = addslashes($svg_code);

	$name = (isset($_POST['name']))? trim(addslashes($_POST['name'])) : '';
	$tool_tip = (isset($_POST['tool_tip']))? trim(addslashes($_POST['tool_tip'])) : '';
	$description = (isset($_POST['description']))? trim(addslashes($_POST['description'])) : '';
	$img_alt_text = (isset($_POST['img_alt_text'])) ? $_POST['img_alt_text'] : '';

	$display_order = (isset($_POST['display_order']))? trim(addslashes($_POST['display_order'])) : 0;
	$click_count = (isset($_POST['click_count']))? trim(addslashes($_POST['click_count'])) : 0;
	if(!is_numeric($display_order)) $display_order = 0;
	if(!is_numeric($click_count)) $click_count = 0;

	$sql = sprintf("INSERT INTO svg 
		(name
		,tool_tip
		,description
		,img_alt_text
		,svg_code
		,profile_account_id) 
		VALUES ('%s','%s','%s','%s','%s','%u')", 
		$name
		,$tool_tip
		,$description
		,$img_alt_text
		,$svg_code
		,$_SESSION['profile_account_id']);		
	$res = $dbCustom->getResult($db,$sql);
	$cat_id = $db->insert_id;
	$msg = 'Your change is now live.';
		
}

if(isset($_POST['update_svg'])){

	$svg_code = (isset($_POST['svg_code'])) ? $_POST['svg_code'] : '';
	$svg_code = str_replace('"', "'", $svg_code);
	$svg_code = addslashes($svg_code);

	$name = (isset($_POST['name']))? trim(addslashes($_POST['name'])) : '';
	$tool_tip = (isset($_POST['tool_tip']))? trim(addslashes($_POST['tool_tip'])) : '';
	$description = (isset($_POST['description']))? trim(addslashes($_POST['description'])) : '';
	$img_alt_text = (isset($_POST['img_alt_text'])) ? $_POST['img_alt_text'] : '';
	$svg_id = (isset($_POST['svg_id'])) ? $_POST['svg_id'] : 0;
	if(!is_numeric($svg_id)) $svg_id = 0;	
	$display_order = (isset($_POST['display_order']))? trim(addslashes($_POST['display_order'])) : 0;
	$click_count = (isset($_POST['click_count']))? trim(addslashes($_POST['click_count'])) : 0;
	if(!is_numeric($display_order)) $display_order = 0;
	if(!is_numeric($click_count)) $click_count = 0;

	$sql = "UPDATE svg 
			SET name = '".$name."'
			,tool_tip = '".$tool_tip."'
			,description = '".$description."'
			,svg_code = '".$svg_code."'
			,img_alt_text = '".$img_alt_text."'	
	WHERE svg_id = '".$svg_id."'";
	$res = $dbCustom->getResult($db,$sql);
}

if(isset($_POST['set_active_and_display_order'])){
	//$svg_ids  = isset($_POST['svg_id'])? $_POST['svg_id'] : array();
	//$display_orders  = isset($_POST['display_order'])? $_POST['display_order'] : array();
	$actives = (isset($_POST['active']))? $_POST['active'] : array();	
	$is_tool_array = (isset($_POST['is_tool']))? $_POST['is_tool'] : array();	
	
	$sql = "UPDATE svg SET active = '0'";
	$result = $dbCustom->getResult($db,$sql);
	foreach($actives as $key => $value){
		$sql = "UPDATE svg SET active = '1' WHERE svg_id = '".$value."'";
		$result = $dbCustom->getResult($db,$sql);
			//echo "key: ".$key."   value: ".$value."<br />"; 
	}

	$sql = "UPDATE svg SET is_tool = '0'";
	$result = $dbCustom->getResult($db,$sql);
	foreach($is_tool_array as $key => $value){
		$sql = "UPDATE svg SET is_tool = '1' WHERE svg_id = '".$value."'";
		$result = $dbCustom->getResult($db,$sql);
			//echo "key: ".$key."   value: ".$value."<br />"; 
	}


/*
	$cats_from_page_array = explode(',',$_POST['cats_from_this_page']);
	foreach($cats_from_page_array as $svg_id){
		$sql = "UPDATE svg 
				SET active = '0' 
				WHERE svg_id = '".$svg_id."'";
		$result = $dbCustom->getResult($db,$sql);		
	}

	if(is_array($display_orders)){
		for($i = 0; $i < count($display_orders); $i++){
			$sql = sprintf("UPDATE svg
				SET display_order = '%u'  
				WHERE svg_id = '%u'",
				$display_orders[$i], $svg_ids[$i]);
			$result = $dbCustom->getResult($db,$sql);
		}
	}
	
	if(is_array($is_accessory_array)){	
		foreach($is_accessory_array as $key => $value){
			$sql = "UPDATE svg SET is_accessory = '1' WHERE svg_id = '".$value."'";
			$result = $dbCustom->getResult($db,$sql);
			//echo "key: ".$key."   value: ".$value."<br />"; 
		}
	}

	*/
	



	
	
	$msg = 'Changes Saved.';
}








if(isset($_POST['del_svg'])){
	
	$svg_id = $_POST['del_svg_id'];
	//echo $svg_id;	
	//exit;

	$sql = "DELETE FROM svg 
			WHERE svg_id = '".$svg_id."'";
	$result = $dbCustom->getResult($db,$sql);
	
	//echo $sql;
	//echo "<br />";
	$msg = 'Your change is now live.';
}
	
$total_t_cats = array();
$t_cats = array();

$sql = "SELECT svg_id
		,name
		,active
		,display_order
		,click_count
		,svg_code
		,is_accessory
		,is_tool	
FROM svg
WHERE profile_account_id >= '".$_SESSION['profile_account_id']."'"; 

$search_str = (isset($_REQUEST["search_str"])) ?  trim(addslashes($_REQUEST["search_str"])) : ''; 		
if($search_str != ''){
	$sql .= " AND name like '%".$search_str."%'";
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
	if($sortby == 'display_order'){
		if($a_d == 'd'){
			$sql .= " ORDER BY display_order DESC";
		}else{
			$sql .= " ORDER BY display_order";		
		}
	}
	if($sortby == 'svg_code'){
		if($a_d == 'd'){
			$sql .= " ORDER BY svg_code DESC";
		}else{
			$sql .= " ORDER BY svg_code";		
		}
	}
	if($sortby == 'active'){
		if($a_d == 'd'){
			$sql .= " ORDER BY active DESC";
		}else{
			$sql .= " ORDER BY active";		
		}
	}
	if($sortby == 'is_accessory'){
		if($a_d == 'd'){
			$sql .= " ORDER BY is_accessory DESC";
		}else{
			$sql .= " ORDER BY is_accessory";		
		}
	}
	if($sortby == 'is_tool'){
		if($a_d == 'd'){
			$sql .= " ORDER BY is_tool DESC";
		}else{
			$sql .= " ORDER BY is_tool";		
		}
	}
	
}else{
	$sql .= " ORDER BY svg_id";					
}

$result = $dbCustom->getResult($db,$sql);				
$i = 0;
while($row = $result->fetch_object()) {
	$total_t_cats[$i]['svg_id'] = $row->svg_id;
	$total_t_cats[$i]['name'] = $row->name;
	$total_t_cats[$i]["display_order"] = $row->display_order;
	$total_t_cats[$i]["active"] = $row->active;
	$total_t_cats[$i]['click_count'] = $row->click_count;
	$total_t_cats[$i]['svg_code'] = stripslashes($row->svg_code);
	$total_t_cats[$i]['is_accessory'] = $row->is_accessory;
	$total_t_cats[$i]['is_tool'] = $row->is_tool;
	
	$i++;
}		
$total_rows = sizeof($total_t_cats);
$rows_per_page = 150;

$last = ceil($total_rows/$rows_per_page); 
if($last == 0) $last = 1;
			
if($pagenum > $last){ 
	$pagenum = $last; 
}
if($pagenum < 1){ 
	$pagenum = 1; 
}
$start = ($pagenum - 1) * $rows_per_page;
$end = $pagenum * $rows_per_page;

$t_cats = array_slice($total_t_cats, $start, $end);

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
	<?php
	$url_str = "svg-top-cat.php";
	$url_str .= "?strip=".$strip;
	$url_str .= "&firstload=1";
	$url_str .= "&pagenum=".$pagenum;
	$url_str .= "&sortby=".$sortby;
	$url_str .= "&a_d=".$a_d;
	$url_str .= "&truncate=".$truncate;
	?>
	<div class="search_bar">
		<form name="search_form" action="<?php echo $url_str; ?>" method="post" enctype="multipart/form-data">
		<input type="text" name="search_str" class="searchbox" />
		<button type="submit" class="btn btn-primary btn-large" value="search">
		Search
		</button>
		</form>
	</div>
	<?php 
	$url_str = "add-svg-top-cat.php"; 
	$url_str .= "?strip=".$strip;
	$url_str .= "&firstload=1";
	$url_str .= "&pagenum=".$pagenum;
	$url_str .= "&sortby=".$sortby;
	$url_str .= "&a_d=".$a_d;
	$url_str .= "&truncate=".$truncate;
	echo "<a style='margin-left:30px;' class='btn btn-large btn-primary' href='".$url_str."'>Add SVG Top Cat</a>"; 
	
	echo "<a style='margin-left:30px;' href='#' onClick='regularSubmit();'  
	class='btn btn-success btn-large'>
	Save Settings</a>";		

	$url_str = "svg-top-cat.php";
	if($total_rows > $rows_per_page){
		echo getPagination($total_rows, $rows_per_page, $pagenum, $truncate, $last, $url_str, $sortby, $a_d,0,0, $search_str,0,0,$strip); 
		echo "<br /><br /><br />";
	}
	$url_str = "svg-top-cat.php"; 
	$url_str .= "?strip=".$strip;
	$url_str .= "&pagenum=".$pagenum;
	$url_str .= "&sortby=".$sortby;
	$url_str .= "&a_d=".$a_d;
	$url_str .= "&truncate=".$truncate;
?>
 
<form name="form" action="<?php echo $url_str; ?>" method="post" enctype="multipart/form-data">        
<input type="hidden" name="set_active_and_display_order" value="1">
<table cellpadding="6" cellspacing="6" style="width:100%;" >
<tr style="height:60px; background-color:#ababab; color:white;">
<td width="1%"></td>
<td>
<a href="svg-top-cat.php?sortby=name&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
<br />
Name
<br />
<a href="svg-top-cat.php?sortby=name&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>	
</td>
<td width="10%">
<a href="svg-top-cat.php?sortby=svg_code&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
<br />
Icon
<br />
<a href="svg-top-cat.php?sortby=svg_code&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>	
</td>	
<td width="10%" align="center">
<a href="svg-top-cat.php?sortby=click_count&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
<br />
Clicks
<br />
<a href="svg-top-cat.php?sortby=click_count&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>	
</td>	
<td width="10%" align="center">
<a href="svg-top-cat.php?sortby=display_order&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
<br />
Order
<br />
<a href="svg-top-cat.php?sortby=display_order&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>	
</td>	
<td width="10%" align="center">
<a href="svg-top-cat.php?sortby=active&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
<br />
Active
<br />
<a href="svg-top-cat.php?sortby=active&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>		
</td>	

<td width="10%">
<a href="svg-top-cat.php?sortby=is_tool&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
<br />
Is Tool
<br />
<a href="svg-top-cat.php?sortby=is_tool&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>		
</td>

<td width="10%"></td>
<td></td>

</tr>

<?php
$disabled = ($admin_access->product_catalog_level < 2)? "disabled" : '';
$disabled = '';

$cats_from_this_page = '';
$block = '';						
foreach($t_cats as $t_cat) {
							
	$cats_from_this_page .= $t_cat['svg_id'].",";
	$block .= "<tr>"; 

	$block .= "<td>".$t_cat['svg_id']."<input type='hidden' name='svg_id[]' value='".$t_cat['svg_id']."' /></td>";
	
	$block .= "<td>".stripslashes($t_cat['name'])."</td>"; 	

	$block .= "<td>".$t_cat['svg_code']."</td>";
	
	
	$block .= "<td align='center'>".$t_cat['click_count']."</td>";

	$block .= "<td align='center'><input width='20px;' type='text' name='display_order[]' value='".$t_cat['display_order']."' /></td>";

	$checked = ($t_cat["active"])? "checked='checked'" : ''; 
	$block	.= "<td align='center' valign='middle' >
				<div class='checkboxtoggle on ".$disabled." '> 
				<span class='ontext'>ON</span>
				<a class='switch on' href='#'></a>
				<span class='offtext'>OFF</span>
				<input type='checkbox' class='checkboxinput' name='active[]' 
				value='".$t_cat['svg_id']."' ".$checked." /></div>";
	$block .= "</td>";	
	
	$checked = ($t_cat["is_tool"])? "checked='checked'" : ''; 
	$block	.= "<td align='center' valign='middle' >
				<div class='checkboxtoggle on ".$disabled." '> 
				<span class='ontext'>ON</span>
				<a class='switch on' href='#'></a>
				<span class='offtext'>OFF</span>
				<input type='checkbox' class='checkboxinput' name='is_tool[]' 
				value='".$t_cat['svg_id']."' ".$checked." /></div>";
	$block .= "</td>";	
	

				
	$url_str = "edit-svg-top-cat.php";
	$url_str .= "?svg_id=".$t_cat['svg_id'];
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
										
	$block .= "<td valign='middle'>
				<a class='btn btn-danger confirm ".$disabled." '>
				<input type='hidden' id='".$t_cat['svg_id']."' 
				class='itemId' value='".$t_cat['svg_id']."' />DEL</a>";
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
	$url_str = "svg-top-cat.php";
	$url_str = "?strip=".$strip;
	$url_str .= "&pagenum=".$pagenum;
	$url_str .= "&sortby=".$sortby;
	$url_str .= "&a_d=".$a_d;
	$url_str .= "&truncate=".$truncate;
	?>
<div id="content-delete" class="confirm-content">
	<h3>Are you sure you want to delete this?</h3>
	<form name="del_svg" action="<?php echo $url_str; ?>" method="post" target="_top">
		<input id="del_svg_id" class="itemId" type="text" name="del_svg_id" value='' />
		<a class="btn btn-large dismiss">No, Cancel</a>
		<button class="btn btn-danger btn-large" name="del_svg" type="submit" >Yes, Delete</button>
	</form>
</div>

<?php
require_once($real_root."/manage/admin-includes/manage-footer.php");
?>
</body>
</html>




























