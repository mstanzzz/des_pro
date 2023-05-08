<?php
if(!$lgn->isLogedIn()){
	echo "<center>";
	echo "<a href='".SITEROOT."'><img src='".SITEROOT."images/restrict.png'></a>";
	echo "</center>";
	echo "<center>";
	echo "<div style='font-size:20px; margin-top:30px;'>";
	echo "<a href='".SITEROOT."'>EXIT</a>";
	echo "</div>";
	echo "</center>";
	exit;
}
?>
