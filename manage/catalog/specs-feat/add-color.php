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
$page_title = "Edit color";
$page_group = "color";

$msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';

$name = '';
$color_val = '';

require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>
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
$url_str = "color-list.php";
?>
<form name="form1" action="<?php echo $url_str; ?>" method="post" onSubmit="return validate(this)"  enctype="multipart/form-data" target="_top">
    <input type="hidden" name="add_color" value="1">  

<a class="btn" style="float:left; margin:30px;" 
href="<?php echo SITEROOT;?>manage/catalog/specs-feat/color-list.php" >Cancel &amp; Go Back</a>

<input class="btn btn-primary" style="float:left; margin:30px; padding:10px;" type="submit" name="submit" value="Save Changes">	

<table cellpadding="5" width="100%" border="1">

<tr>
<td> Color Name</td>
<td><input id="name" style="width:96%;" name="name" type="text" value="<?php echo $name; ?>" />
</td>
</tr>

<tr>
<td> Color Value</td>
<td><input style='width:120px; height:60px;' type="color" name="color_val" value="<?php echo $color_val; ?>"></td>
</tr>


</table>


</form>
</div>
<p class="clear"></p>
</div>
</body>
</html>

