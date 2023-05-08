<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>ClosetsToGo</title>
	<meta name="description" content="account">
	<link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">
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
					Hi, <?php echo $_SESSION['name']; ?>
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
		<div class="account-block__wellcome">
			<p class="account-block__wellcome--heading">
			<span class="wellome-txt">Welcome,</span> <?php echo $_SESSION['first_name']; ?>! <span>How are you today?</span>
			</p>
			<p class="account-block__wellcome--text">
			<?php echo $today; ?>
			</p>
		</div>
		<div class="account-block__dashboard">
			<div class="account-block__dashboard-links">
				<div class="account-block__dashboard-links--wrapper">
<a href="<?php echo SITEROOT."account-designs.html"; ?>" title="My Designs" class="account-block__dashboard-links--link-fixed"></a>
					<div class=" account-block__dashboard-links--content my-design">
						<div class="account-block__dashboard-links--heading-block">
							<p class="account-block__dashboard-links--heading">My Designs</p>
							<?php echo $designs_box; ?>
						</div>
						<div class="account-block__dashboard-links--holder">
<a href="<?php echo SITEROOT."account-designs.html"; ?>" title="View my design" class="account-block__dashboard-links--link">View my design</a>
<a href="<?php echo SITEROOT."request-design.html"; ?>" title="Start a new design" class="account-block__dashboard-links--link">Start a new design</a>
						</div>
					</div>
				</div>
				<div class="account-block__dashboard-links--wrapper">
<a href="<?php echo SITEROOT."account-orders.html"; ?>" title="My orders" class="account-block__dashboard-links--link-fixed"></a>
					<div class=" account-block__dashboard-links--content my-order">
						<div class="account-block__dashboard-links--heading-block">
							<p class="account-block__dashboard-links--heading">
							My orders
							<?php echo $icon_search_order; ?>
							</p>
							<?php echo $icon_my_orders; ?>
							</div>
							<div class="account-block__dashboard-links--holder">
<a href="<?php echo SITEROOT."account-orders.html"; ?>" title="View Order Receipt" class="account-block__dashboard-links--link">View Order Receipt</a>
<a href="<?php echo SITEROOT."account-orders.html"; ?>" title="View all" class="account-block__dashboard-links--link">View all</a>
						</div>
					</div>
				</div>
				<div class="account-block__dashboard-links--wrapper">
<a href="<?php echo SITEROOT."account-idea-folder.html"; ?>" title="My Inspirations" class="account-block__dashboard-links--link-fixed"></a>
					<div class=" account-block__dashboard-links--content idea-folder">
						<div class="account-block__dashboard-links--heading-block">
							<p class="account-block__dashboard-links--heading">My Inspirations</p>
							<img src="<?php echo SITEROOT; ?>images/idfolder.svg" alt="" class="img-fluid">
						</div>
						<div class="account-block__dashboard-links--holder">
<a href="<?php echo SITEROOT."account-idea-folder.html"; ?>" title="View saved content" class="account-block__dashboard-links--link">View saved content</a>
						</div>
					</div>
				</div>
				<div class="account-block__dashboard-links--wrapper">
					<a href="account-settings.html" title="My account" class="account-block__dashboard-links--link-fixed"></a>
					<div class=" account-block__dashboard-links--content my-account">
						<div class="account-block__dashboard-links--heading-block">
							<p class="account-block__dashboard-links--heading">My account</p>
							<?php echo $icon_user; ?>
						</div>
						<div class="account-block__dashboard-links--holder">
<a href="<?php echo SITEROOT."account-settings.html"; ?>" title="Change Password" class="account-block__dashboard-links--link">Change Password</a>
<a href="<?php echo SITEROOT."account-settings.html"; ?>" title="Change Address" class="account-block__dashboard-links--link">Change Address</a>
<a href="<?php echo SITEROOT."account-settings.html"; ?>" title="Update Preferences" class="account-block__dashboard-links--link">Update Preferences</a>
						</div>
					</div>
				</div>
			</div>
			<div class="account-block__dashboard-static">
				<div class="account-block__dashboard-static--wrapper diy">
					<p class="account-block__dashboard-static--image">
					<?php echo $icon_package; ?>
					</p>
					<div class="account-block__dashboard-static--text-block">
						
						<p class="account-block__dashboard-static--number"><?php echo $count_diy_inst; ?></p>
						<p class="account-block__dashboard-static--text">Successful DIY Installations</p>
						
					</div>
				</div>
				<div class="account-block__dashboard-static--wrapper design-tool">
					<p class="account-block__dashboard-static--image">
					<?php echo $icon_people; ?>
					</p>
					<div class="account-block__dashboard-static--text-block">
						<p class="account-block__dashboard-static--number"><?php echo $count_des_tool; ?></p>
						<p class="account-block__dashboard-static--text">Current users in design tool</p>
					</div>
				</div>
				<div class="account-block__dashboard-static--wrapper designs">
					<p class="account-block__dashboard-static--image">
					<?php echo $icon_people; ?>
					</p>
					<div class="account-block__dashboard-static--text-block">
						<p class="account-block__dashboard-static--number"><?php echo $count_sub_des; ?></p>
						<p class="account-block__dashboard-static--text">Current users submitting designs</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</section>
</main>
<?php
//require_once($real_root.'/pages/views/virtual-assistant.php');
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



