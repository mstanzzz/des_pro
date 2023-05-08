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

require_once($real_root.'/includes/config.php');
require_once($real_root.'/manage/admin-includes/manage-includes.php');
$progress = new SetupProgress;
$module = new Module;

$page_title = "Add SVG";
$page_group = "svg";

$msg = '';
require_once($real_root.'/manage/admin-includes/doc_header.php'); 
?>
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
		<h1>Add SVG  (Top Category)</h1>
		<div class="alert alert-success">
			<h4><?php echo $msg; ?></h4>
		</div>

<form name="form" action="svg-top-cat.php" method="post">
<input type="hidden" name="svg_id" value="<?php echo $svg_id; ?>">
<input type="hidden" name="add_svg" value="1">

<a class="btn" style="float:left; margin:30px;" href="svg-top-cat.php" >Cancel &amp; Go Back</a>
<input class="btn btn-primary" style="float:left; margin:30px;" 
type="submit" name="submit" value="Save Changes">			

<table cellpadding="10" width="100%" border="1">

<tr>
<td width="20%;">Name</td>
<td><input type="text" name="name"  style="width:90%"></td>
</tr>

<tr>
<td>Click Count</td>
<td><input type="text" name="click_count"  style="width:90%"></td>
</tr>

<tr>
<td>Alt_text</td>
<td><input type="text" name="img_alt_text"  style="width:90%"></td>
</tr>

<tr>
<td>Description</td>
<td><textarea rows="8" id="description" name="description"  style="width:90%"></textarea></td>
</tr>

<tr>
<td>SVG Code</td>
<td><textarea rows="28" id="svg_code" name="svg_code"  style="width:90%"></textarea></td>
</tr>

</table>

</form>
</div>
</div>

<?php
require_once($real_root."/manage/admin-includes/manage-footer.php");
?>
</body>
</html>



