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
$page_title = "Rooms";
$page_group = "Rooms";

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

if(isset($_POST['add_room'])){

	$name = (isset($_POST['name']))? trim(addslashes($_POST['name'])) : '';
	$short_name = (isset($_POST['short_name']))? trim(addslashes($_POST['short_name'])) : '';
	$tool_tip = (isset($_POST['tool_tip']))? trim(addslashes($_POST['tool_tip'])) : '';
	$description = (isset($_POST['description']))? trim(addslashes($_POST['description'])) : '';
	$img_alt_text = (isset($_POST['img_alt_text'])) ? trim(addslashes($_POST['img_alt_text'])) : '';
	$key_words = (isset($_POST['key_words'])) ? trim(addslashes($_POST['key_words'])) : '';
	$svg_id = (isset($_POST['svg_id'])) ? $_POST['svg_id'] : 0;
	if(!is_numeric($svg_id)) $svg_id = 0;
	

	$sql = sprintf("INSERT INTO room 
		(name
		,short_name
		,tool_tip
		,description
		,svg_id
		,profile_account_id) 
		VALUES ('%s','%s','%s','%s','%u','%u')", 
		$name
		,$short_name
		,$tool_tip
		,$description
		,$svg_id
		,$_SESSION['profile_account_id']);		
	$res = $dbCustom->getResult($db,$sql);
	$room_id = $db->insert_id;
	$msg = 'Your change is now live.';
}


if(isset($_POST['update_room'])){
	$room_id = (isset($_POST['room_id']))? $_POST['room_id'] : 0; 
	if(!is_numeric($room_id)) $room_id = 0;
	$svg_id = (isset($_POST['svg_id'])) ? $_POST['svg_id'] : 0;
	if(!is_numeric($svg_id)) $svg_id = 0;
	$name = (isset($_POST['name']))? trim(addslashes($_POST['name'])) : '';
	$short_name = (isset($_POST['short_name']))? trim(addslashes($_POST['short_name'])) : '';
	$tool_tip = (isset($_POST['tool_tip']))? trim(addslashes($_POST['tool_tip'])) : '';
	$description = (isset($_POST['description']))? trim(addslashes($_POST['description'])) : '';
	$sql = "UPDATE room 
			SET name = '".$name."'
			,short_name = '".$short_name."'
			,tool_tip = '".$tool_tip."'
			,description = '".$description."'
			,svg_id = '".$svg_id."'	
	WHERE cat_id = '".$cat_id."'";
	$res = $dbCustom->getResult($db,$sql);
	unset($_SESSION['temp_gallery']);
}

if(isset($_POST['set_active_and_display_order'])){
	$room_ids  = isset($_POST['room_ids'])? $_POST['room_ids'] : array();
	$display_orders  = isset($_POST['display_orders'])? $_POST['display_orders'] : array();
	$actives = (isset($_POST['active']))? $_POST['active'] : array();	
	$rooms_from_page_array = explode(',',$_POST['rooms_from_this_page']);
	foreach($rooms_from_page_array as $room_id){
		if(is_numeric($cat_id)){
			$sql = "UPDATE room 
					SET active = '0' 
					WHERE room_id = '".$room_id."'";
			$result = $dbCustom->getResult($db,$sql);		
		}
	}
	if(is_array($actives)){	
		foreach($actives as $key => $value){
			$sql = "UPDATE room SET active = '1' WHERE room_id = '".$value."'";
			$result = $dbCustom->getResult($db,$sql);
		}
	}
	$msg = 'Changes Saved.';
}

if(isset($_POST['del_cat_id'])){

	$room_id = $_POST['del_room_id'];
	$sql = sprintf("DELETE FROM room WHERE room_id = '%u'", $room_id);
	$result = $dbCustom->getResult($db,$sql);
	$msg = 'Your change is now live.';
}

unset($_SESSION['temp_fields']);
unset($_SESSION['room_id']);
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
	$total_rooms = array();
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$sql = "SELECT room_id
			,name
			,active
			,svg_id
	FROM room 
	WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
	$search_str = (isset($_REQUEST["search_str"])) ?  trim(addslashes($_REQUEST["search_str"])) : ''; 		
	if($search_str != ''){
		if(is_numeric($search_str)){
			$sql .= " AND room_id = '".$search_str."%'";			
		}else{
			$sql .= " AND name like '%".$search_str."%'";
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
	}else{
		$sql .= " ORDER BY cat_id";					
	}
	$result = $dbCustom->getResult($db,$sql);
	$i = 0;
	while($row = $result->fetch_object()) {
		$total_rooms[$i]['room_id'] = $row->room_id;
		$total_rooms[$i]['name'] = $row->name;
		$total_rooms[$i]["active"] = $row->active;
		$total_rooms[$i]['svg_id'] = $row->svg_id;
		$total_rooms[$i]['svg_code'] =get_svg_icon($row->svg_id);
		$i++;
	}		
	$total_rows = sizeof($total_rooms);
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

	$t_rooms = array_slice($total_rooms, $start, $end);
	
	$url_str = "rooms.php";
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
	<br />
	<?php 
	$url_str = "rooms.php"; 
	echo "<a style='margin-left:30px;' class='btn btn-large btn-primary' href='".$url_str."'>List All</a>"; 		
	$url_str = "add-room.php"; 
	$url_str .= "?strip=".$strip;
	$url_str .= "&firstload=1";
	$url_str .= "&pagenum=".$pagenum;
	$url_str .= "&sortby=".$sortby;
	$url_str .= "&a_d=".$a_d;
	$url_str .= "&truncate=".$truncate;
	echo "<a style='margin-left:30px;' class='btn btn-large btn-primary' href='".$url_str."'>Add Room</a>"; 
	echo "<a style='margin-left:30px;' href='#' onClick='regularSubmit();'  class='btn btn-success btn-large'>Save Changes </a>";		

	$url_str = "rooms.php";
	if($total_rows > $rows_per_page){
		echo getPagination($total_rows, $rows_per_page, $pagenum, $truncate, $last, $url_str, $sortby, $a_d,0,0, $search_str,0,0,$strip); 
		echo "<br /><br /><br />";
	}
	$url_str = "rooms.php"; 
	$url_str .= "?strip=".$strip;
	$url_str .= "&pagenum=".$pagenum;
	$url_str .= "&sortby=".$sortby;
	$url_str .= "&a_d=".$a_d;
	$url_str .= "&truncate=".$truncate;
?>
<form name="form" action="<?php echo $url_str; ?>" method="post" enctype="multipart/form-data">        
<input type="hidden" name="set_active_and_display_order" value="1">	
<table cellpadding="6" cellspacing="6" style="width:100%;" >
<tr style="height:60px; background-color:#ababab; color:white; font-size:1.4em;">
	<td width="10%"></td>
	<td width="10%">icon</td>
	<td width="20%;">
<a href="t-category.php?sortby=name&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
	<br />
	Name
	<br />
<a href="t-category.php?sortby=name&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>	
	</td>
	<td width="15%"></td>
	<td width="15%"></td>
	<td width="10%" >
<a href="t-category.php?sortby=active&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
	Active
<a href="t-category.php?sortby=active&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>		
	</td>
	<td width="10%"></td>
	<td width="10%"></td>
</tr>

<?php
$disabled = ($admin_access->product_catalog_level < 2)? "disabled" : '';
$rooms_from_this_page = '';
$block = '';						
foreach($t_rooms as $t_room) {
							
	$rooms_from_this_page .= $t_room['room_id'].",";
								
	$block .= "<tr>"; 
	$block .= "<td>".$t_room['svg_code']."</td>";
	$block .= "<td>".stripslashes($t_room['name'])."</td>"; 
	$url_str = '';
	$url_str .= SITEROOT."manage/catalog/categories/select-item-to-room.php";
	$url_str .="?room_id=".$t_room['room_id'];
	$block .= "<td>";
	$block .= "<a class='btn btn-primary btn-small' href='".$url_str."'>";
	$block .= "Batch Prod";
	$block .= "</a>";
	$block .= "</td>";

	$url_str = '';
	$url_str .= SITEROOT."manage/catalog/products/item.php";
	$url_str .="?cat_id=".$t_room['cat_id']."&from_t_cats=1";

	$block .= "<td>";	
	$block .= "<a class='btn btn-primary btn-small' href='".$url_str."'>";
	$block .= "Products";
	$block .= "</a>";
	$block .= "</td>";

	$checked = ($t_room["active"])? "checked='checked'" : ''; 
	$block	.= "<td align='center' valign='middle' >
				<div class='checkboxtoggle on ".$disabled." '> 
				<span class='ontext'>ON</span>
				<a class='switch on' href='#'></a>
				<span class='offtext'>OFF</span>
				<input type='checkbox' class='checkboxinput' name='active[]' 
				value='".$t_room['cat_id']."' ".$checked." /></div>";
	$block .= "</td>";	
				
	$url_str = "edit-room.php";
	$url_str .= "?room_id=".$t_room['cat_id'];
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
				<input type='hidden' id='".$t_room['room_id']."' 
				class='itemId' value='".$t_room['room_id']."' />Del</a>";
	$block .= "</td>";
	$block .= "</tr>";
}
$block .= "</table>";
						
echo $block;
				
$url_str = "rooms.php";
if($total_rows > $rows_per_page){
echo getPagination($total_rows, $rows_per_page, $pagenum, $truncate, $last, $url_str, $sortby, $a_d,0,0, $search_str,0,0,$strip); 
echo "<br /><br /><br />";
}

echo "<a style='margin-left:30px;' href='#' onClick='regularSubmit();'  class='btn btn-success btn-large'>Save Changes </a>";	
?>
<input type="hidden" name="rooms_from_this_page" value="<?php echo $rooms_from_this_page; ?>">      
</form> 

  </div>
  <p class="clear"></p>
  
</div>

<div class="disabledMsg">
	<p>Sorry, this item can't be deleted or inactive.</p>
</div>

    <?php
	$url_str = "rooms.php";
	$url_str = "?strip=".$strip;
	$url_str .= "&pagenum=".$pagenum;
	$url_str .= "&sortby=".$sortby;
	$url_str .= "&a_d=".$a_d;
	$url_str .= "&truncate=".$truncate;
	?>
<div id="content-delete" class="confirm-content">
	<h3>Are you sure you want to delete this Room?</h3>
	<form name="del_category" action="<?php echo $url_str; ?>" method="post" target="_top">
		<input id="del_cat_id" class="itemId" type="hidden" name="del_cat_id" value='' />
		<a class="btn btn-large dismiss">No, Cancel</a>
		<button class="btn btn-danger btn-large" name="del_cat" type="submit" >Yes, Delete</button>
	</form>
</div>

</body>
</html>





