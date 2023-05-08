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

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
$i=0;
$struct = array();
if(isset($_POST['active'])){
	$actives = (isset($_POST['active']))? $_POST['active'] : array();	
	$sql = "UPDATE page_seo 
			SET active = '0' 
			WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
	$res = $dbCustom->getResult($db,$sql);		
	foreach($actives as $val){
		$sql = "UPDATE page_seo 
				SET active = '1' 
				WHERE page_seo_id = '".$val."'";
		$res = $dbCustom->getResult($db,$sql);		
	}
}

if(isset($_GET['del_id'])){	
	$page_seo_id = $_GET['del_id'];
	if(!is_numeric($page_seo_id))$page_seo_id=0;
	$sql = "DELETE FROM page_seo 
			WHERE page_seo_id = '".$page_seo_id."'";
	$res = $dbCustom->getResult($db,$sql);		
}


echo "<br />";
echo "<br />";
echo "<a href='start.php'>Go Back</a>";
echo "<h1 />";
echo "Pages In site with SEO names";
echo "</h1>";
echo "<br />";
echo "<br />";


$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

$sql = "DELETE FROM page_seo 
		WHERE profile_account_id != '1'";	
//$result = $dbCustom->getResult($db,$sql);



//WHERE profile_account_id = '".$_SESSION['profile_account_id']."'
$sql = "SELECT * FROM page_seo 		
		ORDER BY page_name";
$result = $dbCustom->getResult($db,$sql);

echo "<form action='pages-list.php' method='post' >";
echo "<table border='1'>";
echo "<tr>";

echo "<td>";
echo "Prof";
echo "</td>";


echo "<td>";
echo "Active";
echo "</td>";
echo "<td>";
echo "page_name";
echo "</td>";
echo "<td>";
echo "page_seo_name (URL)";
echo "</td>";
echo "<tr>";
while($row = $result->fetch_object()) {
	echo "<tr>";
	
	echo "<td>";
	echo $row->profile_account_id;	
	echo "</td>";
	
	echo "<td>";
	$checked = ($row->active>0)? "checked":'';
	echo "<input type='checkbox' name='active[]' value='".$row->page_seo_id."' $checked>";
	echo "</td>";
	echo "<td>";
	echo $row->page_name;	
	echo "</td>";
	echo "<td>";		
	echo $row->seo_name;
	echo "</td>";
	echo "<td>";
	echo "<a href='pages-list.php?del_id=".$row->page_seo_id."'>Delete</a>";	
	echo "</td>";
	echo "<tr>";
}
echo "<tr>";
echo "<td>";
echo "</td>";
echo "<td>";
echo "<input type='submit' name='submit' value='submit'>";
echo "</td>";
echo "<tr>";
echo "</table>";
echo "</form>";


?>

<br />
<br />
<br />
<hr />
<hr />
<hr />