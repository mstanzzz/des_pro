<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>ClosetsToGo</title>
	<meta name="description" content="account">
	<link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">

<style>
    .SurveyMessage{
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-content: center;
        width: 100%;
        margin-top: 10%;
        text-align: center;
        background-color: white;
        z-index: 2;
        font-size: medium; 
        font-family: SegoeUI-SemiBold, sans-serif;
    }

</style>
	
	</head>
	<body class="idea-folder-popup">
<?php
require_once($real_root.'/pages/views/header.php');
?>
		
<section class="home-mobile-buttons-block account-nav covid-block">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12">
		<div class="home-mobile-buttons-block__wrapper">
			<button title="Account navigation previous" class="account-nav__prev" style="display: none;">
			<?php echo $icon_btn; ?>
			</button>
			<div class="account-nav__content">
<a href="<?php echo SITEROOT."account.html"; ?>" 
title="Dashboard" 
class="home-mobile-buttons-block__link account-small-link active">Dashboard</a>

<a href="<?php echo SITEROOT."account-settings.html"; ?>" 
title="Account setting" 
class="home-mobile-buttons-block__link account-big-link">Account settings</a>

<a href="<?php echo SITEROOT."request-design.html"; ?>" 
title="Start a new design" 
class="home-mobile-buttons-block__link account-big-link">Start a new design</a>

<a href="<?php echo SITEROOT."account-orders.html"; ?>" 
title="My orders" 
class="home-mobile-buttons-block__link account-small-link">My orders</a>

<a href="<?php echo SITEROOT."account-payments.html"; ?>" 
title="Payment settings" 
class="home-mobile-buttons-block__link account-big-link">Payment settings</a>

			</div>
			<button title="Account navigation next" class="account-nav__next" style="display: flex;">
			<?php echo $icon_btn; ?>
			</button>
		</div>
	</div>
</div>
</div>
</div>
</section>

<main class="main clearfix">

<section class="breadcrumb-block pb-3 desktop-show">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12">
		<div class="breadcrumb-block__wrapper" aria-label="breadcrumb">
			<ul class="breadcrumb">
			<li class="breadcrumb-item">
			<a href="<?php echo SITEROOT; ?>" title="Home">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">account</li>
			</ul>
		</div>
	</div>
</div>
</div>
</div>
</section>

<section class="account-block">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-lg-3">
		<div class="account-block__navigation--wrapper">
			<div class="account-block__navigation--user js-login-txt">
				<a href="#" title="Account navigation" class="account-block__navigation--user-link">
				<span class="account-block__navigation--user-image">
				<span class="flip-front">
				<img src="<?php echo SITEROOT; ?>images/team-3.png" alt="" class="img-fluid">
				</span>
				<span class="flip-back">Edit/add<br>photo</span>
				</span>
				<span class="account-block__navigation--user-plus">
				<?php echo $icon_add_showroom; ?>
				</span>
				</a>
				<p class="account-block__navigation--user-heading">
					Hi, <?php echo $_SESSION['first_name']; ?>
				</p>
			</div>
			<div class="mobile-show">
				<div class="account-block__navigation--user active js-not-login-txt">
					<p class="account-block__navigation--user-heading">Login</p>
				</div>
			</div>
<?php
$acc_page = "account";
require_once($real_root.'/pages/views/account_side_nav.php');
?>
		</div>
	</div>

	<div class="col-12 col-lg-9">
		<div class="account-block__dashboard">
			<div class="account-block__dashboard-links">

<?php 
//for($i=0; $i<10; $i++){
//$de_req_array[$i]['to_save']=$row->to_save;
//$de_req_array[$i]['design_email_id']=$row->design_email_id;
//$de_req_array[$i]['date_submitted']=$row->date_submitted;
if(count($de_req_array)==0){

	echo "<div class='SurveyMessage'>
	You have not submitted any designs
	</div>";
}else{
	$i=0;
	foreach($de_req_array as $val){	
		$url_str = SITEROOT."we-design-survey.html";
	?>
		<div onClick="submit_to_des_req(<?php echo $i; ?>)" 
		class="account-block__dashboard-links--wrapper"
		style="cursor:pointer;">
		
		<form id="<?php echo $i; ?>" action="<?php echo $url_str; ?>" 
		method="post" enctype="multipart/form-data">
		<input type="hidden" name="deid" value="<?php echo $val['design_email_id']; ?>" />	
		<?php  
		echo date("F j Y", $val['date_submitted']);	
		echo "<br />";
		if($val['to_save']){ 
			echo "Saved for Later";
		}else{
			echo "Sent to ClosetsToGo";
			echo "<br />";
			if($val['done']){ 				
				echo "Build Complete";
			}else{
				echo "Build Not Complete";				
			}
				
		}			
		?>
		</form>
		</div>
	<?php 
	$i++;
	}
}
?>

<div style="clear:both;"></div>
			</div>
		</div>	
	</div>
</div>
</div>
</div>
</section>



</main>

<script>
function submit_to_des_req(n){
	//alert(n);
	document.getElementById(n).submit();	
}
</script>


<?php
require_once($real_root.'/pages/views/virtual-assistant.php');
require_once($real_root.'/pages/views/mobile-show-footer-buttons.php');
require_once($real_root.'/pages/views/footer.php');
require_once($real_root.'/pages/views/modal-perfect-fit-guarantee.php');
require_once($real_root.'/pages/views/modal-free-shipping.php');
require_once($real_root.'/pages/views/modal-save-to-idea-folder.php');
require_once($real_root.'/pages/views/modal-mobile-campany-block.php');
require_once($real_root.'/pages/views/modal-mobile-products-block.php');
require_once($real_root.'/pages/views/modal-mobile-time-line.php');

?>

	<script src="<?php echo SITEROOT; ?>app.js"></script></body>
</html>



