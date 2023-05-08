<?php

if(isset($_GET['svg_id'])){ 
	$_SESSION["temp_fields"]['svg_id'] = $_GET['svg_id'];
}
if(isset($_GET['title'])){ 
	$_SESSION["temp_fields"]['title'] = $_GET['title'];

	echo $_SESSION["temp_fields"]['title'];

}
if(isset($_GET['embed'])){ 
	$_SESSION["temp_fields"]['embed'] = $_GET['embed'];
}

if(isset($_GET['description'])){
	$_SESSION["temp_fields"]['description'] = $_GET['description'];
}


?>



