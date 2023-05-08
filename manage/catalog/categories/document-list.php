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

$page_title = "Document";
$page_group = "Document";

$msg = '';
$db = $dbCustom->getDbConnect(CART_N_DATABASE);

$strip = (isset($_GET['strip'])) ? $_GET['strip'] : 0;
$fb = (!$strip) ? "fancybox fancybox.iframe" : ''; 
$pagenum = (isset($_GET['pagenum'])) ? addslashes($_GET['pagenum']) : 0;
$sortby = (isset($_GET['sortby'])) ? trim($_GET['sortby']) : '';
$a_d = (isset($_GET['a_d'])) ? $_GET['a_d'] : 'a';
$truncate = (isset($_GET['truncate'])) ? addslashes($_GET['truncate']) : 1;
$search_str = (isset($_GET['search_str'])) ? addslashes($_GET['search_str']) : '';

if(isset($_POST['add_document'])){

	$name = (isset($_POST['name']))? trim(addslashes($_POST['name'])) : '';
	$tool_tip = (isset($_POST['tool_tip']))? trim(addslashes($_POST['tool_tip'])) : '';

	$name = (isset($_POST['name']))? trim(addslashes($_POST['name'])) : '';
	$tool_tip = (isset($_POST['tool_tip']))? trim(addslashes($_POST['tool_tip'])) : '';
	$document_id = (isset($_POST['document_id']))? $_POST['document_id'] : 0;

	$sql = "UPDATE document 
			SET name = '".$name."'
			,tool_tip = '".$tool_tip."'
	WHERE document_id = '".$document_id."'";
	$res = $dbCustom->getResult($db,$sql);
	$msg = 'Your Document was added.';
		
}

if(isset($_POST['update_document'])){

	$name = (isset($_POST['name']))? trim(addslashes($_POST['name'])) : '';
	$tool_tip = (isset($_POST['tool_tip']))? trim(addslashes($_POST['tool_tip'])) : '';
	$document_id = (isset($_POST['document_id']))? $_POST['document_id'] : 0;

	$sql = "UPDATE document 
			SET name = '".$name."'
			,tool_tip = '".$tool_tip."'
	WHERE document_id = '".$document_id."'";
	$res = $dbCustom->getResult($db,$sql);
	$msg = 'Your change is now done.';

}

if(isset($_POST['set_active_and_display_order'])){
	$actives = (isset($_POST['active']))? $_POST['active'] : array();	
	$sql = "UPDATE document SET active = '0'";
	$result = $dbCustom->getResult($db,$sql);
	foreach($actives as $key => $value){
		$sql = "UPDATE document SET active = '1' WHERE document_id = '".$value."'";
		$result = $dbCustom->getResult($db,$sql);
	}
	
	$msg = 'Changes Saved.';
}


if(isset($_POST['del_document_id'])){
	
	$document_id = $_POST['del_document_id'];
	$sql = "SELECT file_name FROM document 
			WHERE document_id = '".$document_id."'";
	$result = $dbCustom->getResult($db,$sql);
	if($result->num_rows > 0){
		$object = $result->fetch_object();
		$p = $real_root."/saascustuploads/".$_SESSION['profile_account_id']."/docs/".$object->file_name;

		if(file_exists($p)) unlink($p);

	}

	$sql = "DELETE FROM document 
			WHERE document_id = '".$document_id."'";
	$result = $dbCustom->getResult($db,$sql);
	$msg = 'Your change is now live.';

}

unset($_SESSION['temp_fields']);
unset($_SESSION['document_id']);
	
$total_t_cats = array();
$t_cats = array();

$sql = "SELECT document_id
		,name
		,file_name
		,active
		,display_order
FROM document
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
	if($sortby == 'active'){
		if($a_d == 'd'){
			$sql .= " ORDER BY active DESC";
		}else{
			$sql .= " ORDER BY active";		
		}
	}
}else{
	$sql .= " ORDER BY document_id";					
}

$result = $dbCustom->getResult($db,$sql);				
$i = 0;
while($row = $result->fetch_object()) {
	$total_t_cats[$i]['document_id'] = $row->document_id;
	$total_t_cats[$i]['name'] = $row->name;
	$total_t_cats[$i]["file_name"] = $row->file_name;
	$total_t_cats[$i]["active"] = $row->active;
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
	$url_str = "document-list.php";
	$url_str .= "?strip=".$strip;
	$url_str .= "&firstload=1";
	$url_str .= "&pagenum=".$pagenum;
	$url_str .= "&sortby=".$sortby;
	$url_str .= "&a_d=".$a_d;
	$url_str .= "&truncate=".$truncate;
	?>
	<div class="search_bar">
		<form name="search_form" action="<?php echo $url_str; ?>" method="post" 
		enctype="multipart/form-data" target="_self">
		<input type="text" name="search_str" class="searchbox" />
		<button type="submit" class="btn btn-primary btn-large" value="search">
		Search
		</button>
		</form>
	</div>
	<?php 
	$url_str = "add-document.php"; 
	$url_str .= "?strip=".$strip;
	$url_str .= "&firstload=1";
	$url_str .= "&pagenum=".$pagenum;
	$url_str .= "&sortby=".$sortby;
	$url_str .= "&a_d=".$a_d;
	$url_str .= "&truncate=".$truncate;
	echo "<a style='margin-left:30px;' class='btn btn-large btn-primary' href='".$url_str."'>Add Document</a>"; 
	
	echo "<a style='margin-left:30px;' href='#' onClick='regularSubmit();'  
	class='btn btn-success btn-large'>
	Save Settings</a>";		

	$url_str = "document-list.php";
	if($total_rows > $rows_per_page){
		echo getPagination($total_rows, $rows_per_page, $pagenum, $truncate, $last, $url_str, $sortby, $a_d,0,0, $search_str,0,0,$strip); 
		echo "<br /><br /><br />";
	}
	$url_str = "document-list.php"; 
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
<a href="document-list.php?sortby=name&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
<br />
Name
<br />
<a href="document-list.php?sortby=name&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>	
</td>

<td width="10%">
<a href="document-list.php?sortby=id&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
<br />
Open PDF
<br />
<a href="document-list.php?sortby=id&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>	
</td>	

<td width="10%" align="center">
<a href="document-list.php?sortby=active&a_d=a"><img width="30" src="<?php echo SITEROOT."manage/images/up.jpg" ?>"></a>
<br />
Active
<br />
<a href="document-list.php?sortby=active&a_d=d"><img width="30" src="<?php echo SITEROOT."manage/images/down.jpg" ?>"></a>		
</td>	

<td width="10%"></td>
<td></td>

</tr>

<?php
$disabled = ($admin_access->product_catalog_level < 2)? "disabled" : '';
$disabled = '';
$dir = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/docs/";
$cats_from_this_page = '';
$block = '';						
foreach($t_cats as $t_cat) {
							
	$cats_from_this_page .= $t_cat['document_id'].",";
	$block .= "<tr>"; 

	$block .= "<td>".$t_cat['document_id']."<input type='hidden' name='document_id[]' value='".$t_cat['document_id']."' /></td>";
	
	$block .= "<td>".stripslashes($t_cat['name'])."</td>"; 	
	
	$f=$dir.$t_cat['file_name'];

	//$block .= "<td><iframe src='".$f."' width='600' height='600'></iframe></td>";

	$block .= "<td><a href='".$f."' target='_blank'>".$t_cat['file_name']."</a></td>";

	
	$checked = ($t_cat["active"])? "checked='checked'" : ''; 
	$block	.= "<td align='center' valign='middle' >
				<div class='checkboxtoggle on ".$disabled." '> 
				<span class='ontext'>ON</span>
				<a class='switch on' href='#'></a>
				<span class='offtext'>OFF</span>
				<input type='checkbox' class='checkboxinput' name='active[]' 
				value='".$t_cat['document_id']."' ".$checked." /></div>";
	$block .= "</td>";	
				
	$url_str = "edit-document.php";
	$url_str .= "?document_id=".$t_cat['document_id'];
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
				<input type='hidden' id='".$t_cat['document_id']."' 
				class='itemId' value='".$t_cat['document_id']."' />DEL</a>";
	$block .= "</td>";
	$block .= "</tr>";
}
$block .= "</table>";
						
echo $block;
				
$url_str = "document-list.php";
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
	$url_str = "document-list.php";
	$url_str = "?strip=".$strip;
	$url_str .= "&pagenum=".$pagenum;
	$url_str .= "&sortby=".$sortby;
	$url_str .= "&a_d=".$a_d;
	$url_str .= "&truncate=".$truncate;
	?>
<div id="content-delete" class="confirm-content">
	<h3>Are you sure you want to delete this?</h3>
	<form name="del_document" action="<?php echo $url_str; ?>" method="post" target="_top">
		<input id="del_document_id" class="itemId" type="text" name="del_document_id" value='' />
		<a class="btn btn-large dismiss">No, Cancel</a>
		<button class="btn btn-danger btn-large" name="del_svg" type="submit" >Yes, Delete</button>
	</form>
</div>

<?php
require_once($real_root."/manage/admin-includes/manage-footer.php");
?>
</body>
</html>




























