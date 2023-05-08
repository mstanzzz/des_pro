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

	$sql = sprintf("INSERT INTO mini_svg 
		(name
		,svg_code
		,profile_account_id) 
		VALUES ('%s','%s','%u')", 
		$name
		,$svg_code
		,$_SESSION['profile_account_id']);		
	$res = $dbCustom->getResult($db,$sql);
	$msg = 'Your change is now live.';
		
}

if(isset($_POST['update_svg'])){

	$svg_code = (isset($_POST['svg_code'])) ? $_POST['svg_code'] : '';
	$svg_code = str_replace('"', "'", $svg_code);
	$svg_code = addslashes($svg_code);

	$name = (isset($_POST['name']))? trim(addslashes($_POST['name'])) : '';
	$mini_svg_id = (isset($_POST['mini_svg_id'])) ? $_POST['mini_svg_id'] : 0;
	if(!is_numeric($mini_svg_id)) $mini_svg_id = 0;	

	$sql = "UPDATE mini_svg 
			SET name = '".$name."'
			,svg_code = '".$svg_code."'
	WHERE mini_svg_id = '".$mini_svg_id."'";
	$res = $dbCustom->getResult($db,$sql);
}

if(isset($_POST['set_active_and_display_order'])){
	$mini_svg_ids  = isset($_POST['mini_svg_id'])? $_POST['mini_svg_id'] : array();
	$display_orders  = isset($_POST['display_order'])? $_POST['display_order'] : array();
	$actives = (isset($_POST['active']))? $_POST['active'] : array();	
	foreach($cats_from_page_array as $mini_svg_id){
		$sql = "UPDATE mini_svg 
				SET active = '0' 
				WHERE mini_svg_id = '".$mini_svg_id."'";
		$result = $dbCustom->getResult($db,$sql);		
	}
	if(is_array($actives)){	
		foreach($actives as $key => $value){
			$sql = "UPDATE mini_svg SET active = '1' WHERE mini_svg_id = '".$value."'";
			$result = $dbCustom->getResult($db,$sql);
			//echo "key: ".$key."   value: ".$value."<br />"; 
		}
	}
	if(is_array($display_orders)){
		for($i = 0; $i < count($display_orders); $i++){
			$sql = sprintf("UPDATE mini_svg
				SET display_order = '%u'  
				WHERE svg_id = '%u'",
				$display_orders[$i], $mini_svg_ids[$i]);
			$result = $dbCustom->getResult($db,$sql);
		}
	}
	$msg = 'Changes Saved.';
}

if(isset($_POST['del_svg'])){
	
	$mini_svg_id = $_POST['del_svg_id'];
	$sql = "DELETE FROM mini_svg 
			WHERE mini_svg_id = '".$mini_svg_id."'";
	$result = $dbCustom->getResult($db,$sql);
	$msg = 'Your change is now live.';
}
	
$icons = array();

$sql = "SELECT mini_svg_id
		,name
		,active
		,svg_code			
FROM svg"; 

$sql .= " WHERE profile_account_id > '0'";

$result = $dbCustom->getResult($db,$sql);				
$i = 0;
while($row = $result->fetch_object()) {
	$icons[$i]['svg_id'] = $row->svg_id;
	$icons[$i]['name'] = $row->name;
	$icons[$i]['svg_code'] = stripslashes($row->svg_code);
	$i++;
}		

require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>
<script>
function regularSubmit() {
  document.form.submit(); 
}	
</script>
</head>
<body>

<div class="manage_page_container">
    <div class="manage_side_nav">
        <?php 
        require_once($real_root.'/manage/admin-includes/manage-side-nav.php');
        ?>
    </div>	
    <div class="manage_main">

	<?php 
		$tab="icon";
require_once($real_root.'/manage/admin-includes/specs-section-tabs.php');

	$url_str = "add-svg-feat-icon.php"; 
	$url_str .= "?strip=".$strip;
	$url_str .= "&firstload=1";
	$url_str .= "&pagenum=".$pagenum;
	$url_str .= "&sortby=".$sortby;
	$url_str .= "&a_d=".$a_d;
	$url_str .= "&truncate=".$truncate;
	echo "<a style='margin-left:30px;' class='btn btn-large btn-primary' href='".$url_str."'>Add Mini SVG Feat Icon</a>"; 


	$url_str = "svg-feat-icon-list.php"; 
	$url_str .= "?strip=".$strip;
	$url_str .= "&pagenum=".$pagenum;
	$url_str .= "&sortby=".$sortby;
	$url_str .= "&a_d=".$a_d;
	$url_str .= "&truncate=".$truncate;
?>
 

<table cellpadding="6" cellspacing="6" style="width:100%;" >
<tr style="height:60px; background-color:#ababab; color:white;">
<td>Name</td>
<td>Icon</td>	
<td width="10%"></td>
<td width="10%"></td>
</tr>

<?php
$disabled = ($admin_access->product_catalog_level < 2)? "disabled" : '';
$disabled = '';

$block = '';						
foreach($icons as $val) {
							
	$block .= "<tr>"; 
	
	$block .= "<td>".stripslashes($val['name'])."</td>"; 	

	
	$block .= "<td>".$val['svg_code']."</td>";

	$url_str = "edit-svg-feat-icon.php";
	$url_str .= "?mini_svg_id=".$val['mini_svg_id'];
	$url_str .= "&firstload=1";									
	$url_str .= "&strip=".$strip;							
	$block .= "<td>
				<a class='btn btn-primary' href='".$url_str."'>
				<i class='icon-cog icon-white'></i> Edit</a>";
	$block .= "</td>";
										
	$block .= "<td valign='middle'>
				<a class='btn btn-danger confirm ".$disabled." '>
				<input type='hidden' id='".$val['mini_svg_id']."' 
				class='itemId' value='".$val['mini_svg_id']."' />DEL</a>";
	$block .= "</td>";
	$block .= "</tr>";
}
$block .= "</table>";
						
echo $block;
				
?>
</div>
<p class="clear"></p>
  
</div>


    <?php
	$url_str = "svg-feat-icon-list.php";
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

</body>
</html>




























