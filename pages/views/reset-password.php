<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
<title>ClosetsToGo</title>
<meta name="description" content="login">
<link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">
</head>
<body>

<?php
//require_once($real_root.'/pages/views/header.php');
?>
<section>
<div class="wrapper" style="margin-top:200px;">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<center>
<?php

$password_salt=(isset($_GET["ps"]))? trim($_GET["ps"]) : ''; 
$deid=(isset($_GET["deid"]))? trim($_GET["deid"]) : 0; 

echo "<div style='font-size:20px; color:blue;'>".$msg."</div>";
if($is_reset>0){

	if($deid>0){
		echo "<br /><a href='".SITEROOT."we-design-survey.html'> Return to Design Request Form</a>";	
	}else{
		if($is_logged_in){	
			echo "<br /><a href='".SITEROOT."account.html'>See Your Account</a>";	
		}		
	}
		
}else{

	$url_str=SITEROOT."reset-password.html";
?>
	<form action="<?php echo $url_str; ?>" method="post" enctype="multipart/form-data">
	<input type="hidden" name="password_salt" value="<?php echo $password_salt; ?>" />
	<input type="hidden" name="deid" value="<?php echo $deid; ?>" />	
	
	<label for="input_password" style="color:black; font-size:22px;">Enter your new password</label>
	<br />	
	<input style="max-width:500px;" 
		id="input_password" 
		type="password" 
		name="new_password" 
		width="100" 
		class="form-control" />
		
	<span style="cursor:pointer; position:relative; top:6px; left:-1px;" 
	onclick="show_this_password();">
	<img width="25" src="<?php echo SITEROOT."images/eye.png"; ?>">
	</span>

	<br /><br />
	<input type="submit" value="Submit" />
	</form>
<?php
}

?>

</center>
</div>
</div>
</div>
</div>
</section>

<script>
function show_this_password(){
	var x = document.getElementById("input_password");
	if (x.type === "password") {
		x.type = "text";
	} else {
		x.type = "password";
	}
}
</script>
<script src="<?php echo SITEROOT; ?>app.js"></script>
</body>
</html>







