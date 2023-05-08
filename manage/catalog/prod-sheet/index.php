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

echo "<br />";
echo "<a href='cat-list.php'>Categories and URL IDs</a>";
echo "<br />";

echo "<br />";
echo "<a href='item-list.php'>Products and URL IDs</a>";
echo "<br />";

echo "<br />";
echo "<a href='item-list-prices.php'>Products and Prices</a>";
echo "<br />";

echo "<br />";
echo "<a href='../catalog-landing.php'>Back</a>";

?>
</body>
</html>

