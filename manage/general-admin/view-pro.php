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

require_once($real_root.'/manage/admin-includes/doc_header.php'); 

?>
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

	<h1>View Professional Application</h1>
	<a href="for-pros.php?all=1" class="btn btn-primary btn-large">BACK</a>

<?php 
$professional_id = $_GET['professional_id']; 

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$sql = "SELECT * FROM professional WHERE professional_id = '".$professional_id."' ";
$result = $dbCustom->getResult($db,$sql);	
$object = $result->fetch_object();

?>

<table border="0" cellpadding="6" width="100%">
<tr>
<td>First name</td>
<td><?php echo $object->first_name;   ?></td>
</tr>        

<tr>
<td>Last name</td>
<td><?php echo $object->last_name;   ?></td>
</tr>        

<tr>
<td>Phone</td>
<td><?php echo $object->phone; ?></td>
</tr>        

<tr>
<td>E-Mail</td>
<td><?php echo $object->email; ?></td>
</tr>        

<tr>
<td>Address</td>
<td><?php echo $object->address; ?></td>
</tr>  

<tr>
<td>License</td>
<td><?php echo $object->license; ?></td>
</tr>        


<tr>
<td>Interested</td>
<td><?php echo $object->interested; ?></td>
</tr>        


<tr>
<td>Comments</td>
<td><?php echo $object->comment; ?></td>
</tr>        

</table>

</div>
</div>


</body>
</html>



