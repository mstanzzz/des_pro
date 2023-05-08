<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
<title>ClosetsToGo</title>
<meta name="description" content="login">
	<style type="text/css">
		#customBtn {
			/* display: block; */
			height: 60px;
			width: 60px;
			border-radius: 50%;
			/* background: url('images/google-logo.svg') transparent 5px no-repeat; */
			display: inline-block;
			
		}

		#customBtn:hover {
			cursor: pointer;
		}

	

		/* span.icon {
			/* background: url('images/google-logo.svg') transparent 5px 50% no-repeat; 
			display: inline-block;
			/* vertical-align: middle; 
			width: 50px;
			height: 50px;
		} */

	</style>

<!--
<meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
-->

<script src="https://apis.google.com/js/platform.js" async defer></script>

<link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">
</head>
<body class="login-page">
<header class="login-page__header">
<div class="second-header">
<div class="wrapper">
<div class="container-fluid">
	<div class="row">
		<div class="col-12 col-lg-11 second-header__logo-nav">
			<div class="second-header__logo-nav--logo">
				<a href="<?php echo SITEROOT; ?>">
				<img src="<?php echo SITEROOT; ?>images/svgg.svg" alt="Closets logo"/>
				</a>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</header>
<main class="main">
<?php
if(isset($_GET['n'])){
	$n=trim($_GET['n']);
	if(!is_numeric($n))$n=0;
	if($n==1){
?>
		<center style='color:red; font-size:1.3em; position: relative; top:-30px;'>
		Incorrect user name or password
		<br />
		please try again
		</center>	
<?php
	}elseif($n>1){
?>
		<center style='color:red; font-size:1.3em; position: relative; top:-30px;'>
		The user name is already registered
		<br />
		please try sign in
		</center>	
<?php
	}
}

?>

<div class="container">
<div class="row">
<div class="col">
	<div class="form-wrap">
		<div>
			<ul class="nav mb-4 nav__tabs-modal justify-content-center" role="tablist">
				<li class="nav-item">
					<button title="Register" class="nav-link active hover__ltr"
						id="pills-register-tab"
						data-role="toggle-el"
						data-toggle="register"
						role="tab"
						aria-selected="true">
						register
					</button>
				</li>
				<li class="nav-item">
					<button title="Sign in" class="nav-link hover__ltr"
						id="pills-signin-tab"
						data-role="toggle-el"
						data-toggle="sign-in"
						role="tab"
						aria-selected="false">
						sign in
					</button>
				</li>
			</ul>
		</div>
<form name="reg_form" action="<?php echo SITEROOT; ?>account.html" method="post" onSubmit="return validate_reg_form();" >
<fieldset class="register" data-role="toggle-el-target" id="register">
<div class="form-group form-group__default">
	<div class="form-control form-group__default__form-control home-consult-form__input">
		<input name="reg_first_name" class="input" required type="text" placeholder="First Name">
	</div>
	<div class="form-control form-group__default__form-control home-consult-form__input">
		<input name="reg_last_name" class="input" required type="text" placeholder="Last Name">
	</div>
	<div class="form-control form-group__default__form-control home-consult-form__input">
		<input name="reg_email" class="input" required type="email" placeholder="Email Address">
	</div>
	<div class="form-control form-group__default__form-control home-consult-form__input">
		<input id="reg_pswd" name="reg_pswd" class="input" required type="password" placeholder="Password">
		<span style="cursor:pointer; position:relative; top:-36px; left:330px;" 
		onclick="show_password('reg_pswd');">
		<img width="25" src="<?php echo SITEROOT."images/eye.png"; ?>">
		</span>
	
	</div>
	<div class="form-control form-group__default__form-control home-consult-form__input ">
		<input id="reg_pswd_confirm" name="reg_pswd_confirm"  class="input" required type="password" placeholder="Confirm password">
		<span style="cursor:pointer; position:relative; top:-36px; left:330px;" 
		onclick="show_password('reg_pswd_confirm');">
		<img width="25" src="<?php echo SITEROOT."images/eye.png"; ?>">
		</span>
	
	</div>
	<p class="form-group__default__label ml-3">Subscribe to our newsletter?</p>
	<div class="home-consult-form__radio-block">
		<label class="home-consult-form__radio">
		<input type="radio" name="r" value="1">
		<span class="form-group__default__label">Yes</span>
		</label>
		<label class="home-consult-form__radio">
		<input type="radio" name="r" value="2">
		<span class="form-group__default__label">No</span>
		</label>
	</div>
</div>
<button  title="Register" type="submit" class="btn btn-secondary btn-full btn-sign">Register</button>
</fieldset>
</form>

<form name="si_form" action="<?php echo SITEROOT; ?>account.html" method="post" >
<fieldset class="sign-in cd-none" data-role="toggle-el-target" id="sign-in">
<div class="form-group form-group__default">
	<div class="form-control form-group__default__form-control home-consult-form__input">
		<input name="si_email"  class="input" required type="email" placeholder="Email Address">
	</div>
	<div class="form-control form-group__default__form-control home-consult-form__input">
		<input id="login_password" name="si_pswd" class="input" required type="password" placeholder="Password">
		<span style="cursor:pointer; position:relative; top:-36px; left:330px;" 
		onclick="show_password('login_password');">
		<img width="25" src="<?php echo SITEROOT."images/eye.png"; ?>">
		</span>
	</div>
		
	<p id="do_forgot_pswd" class="text-center">
	<a href="#" title="Forgot Password?"
	onClick="open_forgot_pswd_form(0);"	
	class="form-group__default__label hover__ltr">Forgot Password?</a>
	</p>
	
	
</div>
<button title="Sign in" type="submit" class="btn btn-secondary btn-full btn-sign">Sign in</button>
</fieldset>
</form>
<!--
<div class="quick-access">
	<div class="quick-access__title">
		Quick access with
	</div>
	<div class="quick-access__icons-wrap">
		<div class="quick-access__icon">
			<a class="d-block" href="">
			<img src="<?php echo SITEROOT; ?>images/google-logo.svg" class="img-fluid" alt="">
			</a>
		</div>
		<div class="quick-access__icon">
			<a class="d-block" href="">
			<img src="<?php echo SITEROOT; ?>images/facebook.svg" class="img-fluid" alt="">
			</a>
		</div>
	</div>
</div>
-->
</div>
</div>
</div>
</div>
</main>

<script>
function validate_reg_form(){

	let reg_pswd = document.forms["reg_form"]["reg_pswd"];
	let reg_pswd_confirm =  document.forms["reg_form"]["reg_pswd_confirm"];

	if(reg_pswd.value === reg_pswd_confirm.value){
		return true;
	}else{
		alert("The passwords do not match");
		return false
	}
}

function show_password(id){
	var x = document.getElementById(id);
	if (x.type === "password") {
		x.type = "text";
	} else {
		x.type = "password";
	}
}

function open_forgot_pswd_form(n){
	
	var forgot_password_form = '';
	if(n>0){
		forgot_password_form += "<p style='color:red; font-size:16px;'>";
		forgot_password_form += "There is no account for this email address<br />";
		forgot_password_form += "Please register or use a different email address</p>";	
	}
	
	forgot_password_form += "<label>Enter Email Address</label>";	
	forgot_password_form += "<br />";	
	forgot_password_form += "<input style='width:260px;' id='forgot_pswd_username' ";
	forgot_password_form += " type='text' name='email_addr' />";
	forgot_password_form += "<br />";
	forgot_password_form += "<a onclick='send_password_reset();' ";
	forgot_password_form += "class='btn btn-info' >Submit to Reset Password</a></div>";

	let element = document.getElementById('do_forgot_pswd');
	element.innerHTML = forgot_password_form;

}


function send_password_reset(){
	let site_root="<?php echo SITEROOT; ?>";
	let email_addr = document.getElementById('forgot_pswd_username').value;
	let element = document.getElementById('do_forgot_pswd');	
	let url_str = site_root+'ajax/ajax-send-reset-pswd.php?email_addr='+email_addr;

	//if(isValidEmail(email_addr)){
		
		$.ajaxSetup({ cache: false}); 
		$.ajax({
		  url: url_str,
		  success: function(data) {
			console.log(data);
			
			if(data.indexOf("y") > -1){
				var msg="";
				msg += "<p style='color:blue; font-size:16px;'>";
				msg += "A link was sent to "+email_addr+"<br />";
				msg += "please check your email to reset your password";
				msg += "</p>";
				element.innerHTML = msg;
			}else{
				open_forgot_pswd_form(1);	
			}
			
		  }
		});	
	//}else{
		//element.innerHTML = email_addr+" is not a valid email address<br />";
	//}
	
}

</script>

<script src="https://apis.google.com/js/platform.js" async defer></script>

<script src="<?php echo SITEROOT; ?>app.js"></script>
</body>
</html>
