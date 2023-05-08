<?php

if(isset($_GET['name'])){ 
	$_SESSION["temp_fields"]['name'] = stripslashes($_GET['name']);
}
if(isset($_GET['short_name'])){ 
	$_SESSION["temp_fields"]['short_name'] = stripslashes($_GET['short_name']);
}
if(isset($_GET['tool_tip'])){ 
	$_SESSION["temp_fields"]['tool_tip'] = stripslashes($_GET['tool_tip']);
}
if(isset($_GET['img_alt_text'])){ 
	$_SESSION["temp_fields"]['img_alt_text'] = stripslashes($_GET['img_alt_text']);
}
if(isset($_GET['key_words'])){ 
	$_SESSION["temp_fields"]['key_words'] = stripslashes($_GET['key_words']);
}

if(isset($_GET['description'])){
	$_SESSION["temp_fields"]['description'] = stripslashes($_GET['description']);
}

if(isset($_GET['img_id'])){ 
	$_SESSION['img_id'] = $_GET['img_id'];
}else{
	$_SESSION['img_id'] = 0;	
}

//echo $_SESSION["temp_fields"]['name'];


?>



