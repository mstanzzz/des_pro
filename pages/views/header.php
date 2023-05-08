
<header class="header-covid  clearfix">
<div class="first-header">
<div class="container-fluid">
<div class="row">
	<div class="col-12 col-lg-4 first-header__shipping">
		<a href="#" title="100% Perfect fit guarantee" class="first-header__child">
		<img src="<?php echo SITEROOT; ?>images/security.svg" alt="" />
		100% Perfect fit guarantee
		</a>
		<a href="#" title="Free shipping" class="first-header__child">
		<img src="<?php echo SITEROOT; ?>images/delivery-truck(2).svg" alt="" class="truck-image" />
		free shipping
		</a>
	</div>
	<div class="col-12 col-lg-4 desktop-show">
		<div class="first-header__phone-card justify-content-center h-100">
			<div class="first-header__phone-card--phone">
				<div class="first-header__child">
					<a href="tel:1-888-312-7424" title="Call us" class="first-header__child__call" title="">
					<img src="<?php echo SITEROOT; ?>images/call-answer.svg" alt="Call us" class="phone-image" />
					1-888-312-7424
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 col-lg-4 desktop-show">
		<div class="first-header__phone-card pr-3">
			<div class="first-header__phone-card--phone">
				<div class="first-header__child">
					<div class="dropdown dropdown-about">
						<p class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Company</p>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<div class="dropdown-menu--content">
<a class="dropdown-item" title="About us" href="<?php echo SITEROOT; ?>about-us.html">About us</a>
<a class="dropdown-item" title="Services" href="<?php echo SITEROOT; ?>services.html">Services</a>
<a class="dropdown-item" title="Support" href="<?php echo SITEROOT; ?>support.html">Support</a>
<a class="dropdown-item" title="Features" href="<?php echo SITEROOT; ?>features.html">Features</a>
<a class="dropdown-item" title="FAQ" href="<?php echo SITEROOT; ?>faq.html">FAQ</a>
<a class="dropdown-item" title="For the Pros" href="<?php echo SITEROOT; ?>for-the-pros.html">For the Pros</a>
<a class="dropdown-item" title="Process" href="<?php echo SITEROOT; ?>process.html">Process</a>
<a class="dropdown-item" title="Locations" href="<?php echo SITEROOT; ?>locations.html">Locations</a>
<a class="dropdown-item" title="Careers" href="<?php echo SITEROOT; ?>careers.html">Careers</a>
<a class="dropdown-item" title="Privacy" href="<?php echo SITEROOT; ?>privacy-statement.html">Privacy</a>
<a class="dropdown-item" title="Policies" href="<?php echo SITEROOT; ?>policies.html">Policies</a>
<a class="dropdown-item" title="Reviews" href="<?php echo SITEROOT; ?>our-reviews.html">Reviews</a>
							</div>
						</div>
					</div>
				</div>
				<div class="first-header__child">
					<div class="dropdown dropdown-about js-account-wrap">
						<p class="dropdown-toggle account" id="dropdownAccountButton" ata-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="<?php echo SITEROOT; ?>images/user(4).svg" alt="" class="m-0 img-fluid" />
						<?php
						if($lgn->isLogedIn()){
						echo "Hi, " . $_SESSION['first_name'];
						}
						?>
						</p>
						<div class="dropdown-menu account" aria-labelledby="dropdownAccountButton">
							<div class="dropdown-menu--content">
								<?php
								if(!$lgn->isLogedIn()) {
								?>
<a class="dropdown-item account-menu-visible" title="Login" href="<?php echo SITEROOT; ?>login.html">Login</a>
<a class="dropdown-item account-menu-visible" title="Register" href="<?php echo SITEROOT; ?>login.html">Register</a>
								<?php
								} else {
								?>
<a class="dropdown-item account-menu-hidvisibleden" title="Dashboard" href="<?php echo SITEROOT; ?>account.html">Dashboard</a>
<a class="dropdown-item account-menu-hidden" title="Account settings" href="<?php echo SITEROOT; ?>account-settings.html">Account settings</a>
<a class="dropdown-item account-menu-visible" title="My orders" href="<?php echo SITEROOT; ?>account-orders.html">My orders</a>
<a class="dropdown-item account-menu-visible" title="Payment settings" href="<?php echo SITEROOT; ?>account-payments.html">Payment settings</a>
<a class="dropdown-item account-menu-visible" title="Idea folder" href="<?php echo SITEROOT; ?>account-idea-folder.html">Idea folder</a>
<a class="dropdown-item account-menu-visible" title="My designs" href="<?php echo SITEROOT; ?>account-designs.html">My designs</a>
<a class="dropdown-item account-menu-visible" title="Sign out" onClick="submit_sign_out_form()" href="#">Sign out</a>
								<?php
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<form id="sign_out" name="sign_out" action="<?php echo SITEROOT; ?>" method="post">
			<input type="hidden" name="logout" value="1" />
			</form>
			<script>
			function submit_sign_out_form() {
			document.getElementById("sign_out").submit();

			}
			</script>
			<div class="first-header__phone-card--card">
				<div class="first-header__child wrap-save">
				</div>
			</div>
			<div class="dropdown-checkout  curtain curtain-menu hide" data-toggle="checkout" id="curtain-menu">
			</div>
		</div>
	</div>
</div>
</div>
</div>


<div class="covid-header">
<div class="wrapper">
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="mobile-show">
				<a href="<?php echo SITEROOT; ?>request-design.html" title="">
				Design Your Custom Organizer - Coming Soon
				</a>
				<button title="Close" class="js-hide-covit">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
				<g transform="translate(0 -0.001)"><g transform="translate(0 0.001)">
				<path d="M13.326,12l10.4-10.4A.938.938,0,0,0,22.4.275L12,10.675,1.6.275A.938.938,0,0,0,.274,1.6L10.674,12,.274,22.4A.938.938,0,0,0,1.6,23.726L12,13.327l10.4,10.4A.938.938,0,0,0,23.725,22.4Z" transform="translate(0 -0.001)"/></g></g>
				</svg>
				</button>
			</div>
			<div class="desktop-show">
				<a href="<?php echo SITEROOT; ?>request-design.html" title="">
				Design Your Custom Organizer - Coming Soon 
				</a>
				<button title="Close" class="js-hide-covit">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
				<g transform="translate(0 -0.001)"><g transform="translate(0 0.001)">
				<path d="M13.326,12l10.4-10.4A.938.938,0,0,0,22.4.275L12,10.675,1.6.275A.938.938,0,0,0,.274,1.6L10.674,12,.274,22.4A.938.938,0,0,0,1.6,23.726L12,13.327l10.4,10.4A.938.938,0,0,0,23.725,22.4Z" transform="translate(0 -0.001)"/></g></g>
				</svg>
				</button>
			</div>
		</div>
	</div>
</div>
</div>
</div> 


<div class="second-header nav-down">
<div class="wrapper">
<div class="container-fluid">
	<div class="row">
		<div class="col-8 col-lg-9 second-header__logo-nav">
			<button title="Open menu" class="second-header__hamburger js-hamburger">
			<span></span>
			<span></span>
			<span></span>
			</button>
			<div class="second-header__logo-nav--logo">
				<a href="<?php echo SITEROOT; ?>" title="Home">
				<img src="<?php echo SITEROOT; ?>images/svgg.svg" alt="" />
				</a>
			</div>
			<?php
			if(!isset($nav_el))$nav_el = "home";
			?>
			<nav class="second-header__logo-nav--navigation">
			<ul>
			<li class="mobile-show">
			<div class="mobile-hide-nav">
			<button title="Close" class="js-hide-general-mobile-menu">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
			<g transform="translate(0 -0.001)">
			<g transform="translate(0 0.001)">
			<path d="M13.326,12l10.4-10.4A.938.938,0,0,0,22.4.275L12,10.675,1.6.275A.938.938,0,0,0,.274,1.6L10.674,12,.274,22.4A.938.938,0,0,0,1.6,23.726L12,13.327l10.4,10.4A.938.938,0,0,0,23.725,22.4Z" transform="translate(0 -0.001)"></path>
			</g>
			</g>
			</svg>
			</button>
			<a href="<?php echo SITEROOT; ?>" title="Home">Home</a>
			</div>
			</li>
			<li><a href="<?php echo SITEROOT; ?>showroom.html" 
			<?php if($nav_el=="rooms") echo "class='active'"; ?> title="Rooms"> Rooms</a></li>
			<li><a href="<?php echo SITEROOT; ?>accessory-categories.html" 
			<?php if($nav_el=="accessories") echo "class='active'"; ?> title="Accessories">Accessories</a></li>
			<li><a href="<?php echo SITEROOT; ?>comparison.html" 
			<?php if($nav_el=="why") echo "class='active'"; ?> title="Why Closets To Go">Why Closets To Go</a></li>
			<li><a href="<?php echo SITEROOT; ?>services.html" 
			<?php if($nav_el=="services") echo "class='active'"; ?> title="Services">Services</a></li>
			<li><a href="<?php echo SITEROOT; ?>diy-instructions.html" 
			<?php if($nav_el=="diy") echo "class='active'"; ?> title="Do it Your self Installation">DIY-Install</a></li>
			<li><a href="<?php echo SITEROOT; ?>features.html" 
			<?php if($nav_el=="feat") echo "class='active'"; ?> title="Do it Your self Installation">Features</a></li>
			</ul>
			</nav>
		</div>
		<div class="col-4 col-lg-3 second-header__search">
			<div class="desktop-show">
				<a href="<?php echo SITEROOT; ?>request-design.html" title="Request design" class="we-design">We design</a>
			</div>
			<div class="mobile-show">
				<div class="first-header__phone-card--card">
					<div class="first-header__child wrap-save desktop-show">
<a href="#" title="Save"><img src="<?php echo SITEROOT; ?>images/icon-save.svg" alt="" /></a>
<div class="tooltip tooltip__save-images">
<p class="text">
Save favourite images under user account for future reference
</p>
</div>
</div>
<a href="tel:1-888-312-7424" title="Call us" class="first-header__child first-header__child__call">
<img src="<?php echo SITEROOT; ?>images/call-answer-mobile.svg" alt="" class="mobile-icon">
</a>
<button title="Profile" class="first-header__child js-show-user-nav">
<img src="<?php echo SITEROOT; ?>images/user-blue.svg" alt="" />
</button>

<a href="<?php echo SITEROOT; ?>shopping-cart.html" title="Shopping cart" data-toggle="checkout" class="first-header__child toggleMenu first-header__open__dropdown-checkout" id="toggleMenu">
<img src="<?php echo SITEROOT; ?>images/checkout-blue.svg" alt="" />
<span class="MS_item_count badge badge-danger badge-round"></span>
</a>
</div>

<div class="dropdown-checkout curtain curtain-menu hide" data-toggle="checkout" id="curtain-menu">
<div class="inner">
<div class="list-wrap">

<ul class="list">
<li class="list-item">
<div class="item">
<div class="list-item__options">

<ul class="list-item__options__list">
<li class="list-item__options__list-option">
<div class="list-item__options__list-option__wrap list-item__options__list-option__close">
<img class="img img-fluid" src="<?php echo SITEROOT; ?>images/icon-close.svg" alt="">
</div>
</li>

<div class="animating-imgs__wrap showroom-detail-view-product-page idea-folder __square style-all-pages" data-toggle="modal" data-target="#saveToIdeaFolder">
<div class="icons icon-share__circle icon-share__circle__fff add-to-fav animate-pulse add-to-fav__icon_over-galery">
<?php echo $icon_id_save_path_205_207; ?>
<div class="icons icon-share__circle icon-share__circle__18C4C77 add-to-fav img-check__icon" style="display: none">
<?php echo $icon_img_check_circle; ?>
</div>
</div>
</ul>
</div>

</div>
</a>
</div>
</li>

<li class="list-item">
<div class="item">
<div class="list-item__options">
<ul class="list-item__options__list">
<li class="list-item__options__list-option">
<div class="list-item__options__list-option__wrap list-item__options__list-option__close">
<img class="img img-fluid" src="<?php echo SITEROOT; ?>images/icon-close.svg" alt="">
</div>
</li>
<div class="animating-imgs__wrap showroom-detail-view-product-page idea-folder __square style-all-pages" data-toggle="modal" data-target="#saveToIdeaFolder">
<div class="icons icon-share__circle icon-share__circle__fff add-to-fav animate-pulse add-to-fav__icon_over-galery">
<?php echo $icon_id_save_path_205_207; ?>
</div>
<div class="icons icon-share__circle icon-share__circle__18C4C77 add-to-fav img-check__icon" style="display: none">
<?php echo $icon_img_check_circle; ?>
</div>
</div>
</ul>
</div>
<a href="<?php echo SITEROOT; ?>" title="" class="media-link">
<div class="media">
<div class="wrap-img">
<img class="img-fluid img" src="<?php echo SITEROOT; ?>images/team-1.png" alt="Generic placeholder image">
</div>

<div class="media-body">

</div>
</div>
</a>
</div>
</li>

<li class="list-item">
<div class="item">
<div class="list-item__options">
<ul class="list-item__options__list">
<li class="list-item__options__list-option">
<div class="list-item__options__list-option__wrap list-item__options__list-option__close">
<img class="img img-fluid" src="<?php echo SITEROOT; ?>images/icon-close.svg" alt="">
</div>
</li>
<div class="animating-imgs__wrap showroom-detail-view-product-page idea-folder __square style-all-pages" data-toggle="modal" data-target="#saveToIdeaFolder">
<div class="icons icon-share__circle icon-share__circle__fff add-to-fav animate-pulse add-to-fav__icon_over-galery">
<?php echo $icon_id_save_path_205_207; ?>
</div>
<div class="icons icon-share__circle icon-share__circle__18C4C77 add-to-fav img-check__icon" style="display: none">
<?php echo $icon_img_check_circle; ?>
</div>
</div>
</ul>
</div>

<a href="<?php echo SITEROOT; ?>" title="" class="media-link">
<div class="media">
<div class="wrap-img">
<img class="img-fluid img" src="<?php echo SITEROOT; ?>images/team-1.png" alt="Generic placeholder image">
</div>

</div>
</a>
</div>
</li>
</ul>
</div>

<div class="wrap-btn">
<a href="<?php echo SITEROOT; ?>shopping-cart.html" title="Shopping cart" class="btn btn-primary btn-cart btn-cart disabled">"Coming Soon"</a>
</div>
<div class="inner">
</div>
</div>
</div>


<div class="mobile-show">
<div class="account-block__navigation--wrapper">

<div class="account-block__navigation--user js-login-txt">

<a href="<?php echo SITEROOT; ?>" title="Edit/add photo" class="account-block__navigation--user-link">

<span class="account-block__navigation--user-image">
<span class="flip-front">
<img src="<?php echo SITEROOT; ?>images/team-3.png" alt="" class="img-fluid">
</span>
<span class="flip-back">Edit/add<br>photo</span>
</span>

<span class="account-block__navigation--user-plus">
<svg xmlns="http://www.w3.org/2000/svg" width="42.5" height="42.5" viewBox="0 0 42.5 42.5">
<defs>
<style>
.add-showroom {
fill: #02adb0;
}
</style>
</defs>
<path class="add-showroom" d="M21.25,0A21.25,21.25,0,1,0,42.5,21.25,21.274,21.274,0,0,0,21.25,0Zm9.3,23.021H23.021v7.526a1.771,1.771,0,1,1-3.541,0V23.021H11.953a1.771,1.771,0,0,1,0-3.541h7.526V11.953a1.771,1.771,0,0,1,3.541,0v7.526h7.526a1.771,1.771,0,1,1,0,3.541Zm0,0" />
</svg>
</span>
</a>

<p class="account-block__navigation--user-heading">Hi, Joro</p>

</div>

<div class="mobile-show">
<div class="account-block__navigation--user active js-not-login-txt">

<p class="account-block__navigation--user-heading">
<a href="<?php echo SITEROOT; ?>login.html" title="" class="account-nav__link account-mobile-menu-visible js-mobile-account-login">
login
</a>
</p>
</div>
</div>

<nav class="account-block__navigation--navigation">
<ul class="account-nav">
<li>
<button title="Close" class="account-nav__button js-hide-account-mobile-menu">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
<g transform="translate(0 -0.001)">
<g transform="translate(0 0.001)">
<path d="M13.326,12l10.4-10.4A.938.938,0,0,0,22.4.275L12,10.675,1.6.275A.938.938,0,0,0,.274,1.6L10.674,12,.274,22.4A.938.938,0,0,0,1.6,23.726L12,13.327l10.4,10.4A.938.938,0,0,0,23.725,22.4Z" transform="translate(0 -0.001)"></path>
</g>
</g>
</svg>
</button>
</li>
<li>
<a href="<?php echo SITEROOT; ?>login.html" title="" class="account-nav__link account-mobile-menu-visible js-mobile-account-login">
login
</a>
</li>
<li>
<a href="<?php echo SITEROOT; ?>login.html" title="Register" class="account-nav__link account-mobile-menu-visible">
Register
</a>
</li>

<li>
<a href="<?php echo SITEROOT; ?>account.html" title="Dashboard" class="account-nav__link account-menu-hidden">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="19.575" viewBox="0 0 20 19.575">
<path id="Path_210" data-name="Path 210" d="M90.589,177.888l-9.99,7.262v12.313h7.069v-9.036H93.41v9.036H100.6V185.151Z" transform="translate(-80.6 -177.888)" fill="#db440d" />
</svg>
Dashboard
</a>
</li>

<li>
<a href="account-settings.html" title="Account settings" class="account-nav__link account-menu-hidden">
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
<defs>
<style>
.gear {
fill: #5eae5e;
}
</style>
</defs>
<g transform="translate(8.203 8.203)">
<path class="gear" d="M146.8,140a6.8,6.8,0,1,0,2.053,13.278,1.172,1.172,0,0,0-.707-2.235,4.447,4.447,0,1,1,2.929-2.993,1.172,1.172,0,0,0,2.25.658A6.8,6.8,0,0,0,146.8,140Z" transform="translate(-140 -140)" />
</g>
<path class="gear" d="M26.484,10.9h-.59a.39.39,0,0,1-.357-.245l-.01-.025A.393.393,0,0,1,25.6,10.2l.417-.417a3.52,3.52,0,0,0,0-4.972l-.829-.829a3.516,3.516,0,0,0-4.972,0L19.8,4.4a.393.393,0,0,1-.43.077l-.022-.009a.392.392,0,0,1-.249-.358v-.59A3.52,3.52,0,0,0,15.586,0H14.414A3.52,3.52,0,0,0,10.9,3.516v.59a.391.391,0,0,1-.248.358l-.023.009A.393.393,0,0,1,10.2,4.4L9.78,3.979a3.516,3.516,0,0,0-4.972,0l-.829.829a3.52,3.52,0,0,0,0,4.972L4.4,10.2a.4.4,0,0,1,.075.435l-.007.017a.392.392,0,0,1-.358.249h-.59A3.52,3.52,0,0,0,0,14.414v1.172A3.52,3.52,0,0,0,3.516,19.1h.59a.39.39,0,0,1,.357.245l.01.025A.393.393,0,0,1,4.4,19.8l-.417.417a3.516,3.516,0,0,0,0,4.972l.829.829a3.516,3.516,0,0,0,4.972,0L10.2,25.6a.393.393,0,0,1,.43-.077l.022.009a.392.392,0,0,1,.249.358v.59A3.52,3.52,0,0,0,14.414,30h1.172A3.52,3.52,0,0,0,19.1,26.484v-.59a.391.391,0,0,1,.248-.358l.023-.009a.393.393,0,0,1,.431.077l.417.417a3.516,3.516,0,0,0,4.972,0l.829-.829a3.516,3.516,0,0,0,0-4.972L25.6,19.8a.393.393,0,0,1-.077-.431l.009-.021a.392.392,0,0,1,.358-.249h.59A3.52,3.52,0,0,0,30,15.586V14.414A3.52,3.52,0,0,0,26.484,10.9Zm1.172,4.687a1.173,1.173,0,0,1-1.172,1.172h-.59a2.728,2.728,0,0,0-2.525,1.7l-.008.018a2.729,2.729,0,0,0,.585,2.986l.417.417a1.172,1.172,0,0,1,0,1.657l-.829.829a1.172,1.172,0,0,1-1.657,0l-.417-.417a2.729,2.729,0,0,0-2.988-.584l-.017.007a2.728,2.728,0,0,0-1.7,2.525v.59a1.173,1.173,0,0,1-1.172,1.172H14.414a1.173,1.173,0,0,1-1.172-1.172v-.59a2.728,2.728,0,0,0-1.7-2.525l-.016-.007a2.767,2.767,0,0,0-1.063-.213,2.716,2.716,0,0,0-1.925.8l-.417.417a1.172,1.172,0,0,1-1.657,0l-.829-.829a1.172,1.172,0,0,1,0-1.657l.417-.417a2.729,2.729,0,0,0,.585-2.986l-.008-.018a2.728,2.728,0,0,0-2.525-1.7h-.59a1.173,1.173,0,0,1-1.172-1.172V14.414a1.173,1.173,0,0,1,1.172-1.172h.59a2.729,2.729,0,0,0,2.526-1.7l.005-.013A2.729,2.729,0,0,0,6.054,8.54l-.417-.417a1.173,1.173,0,0,1,0-1.657l.829-.829a1.172,1.172,0,0,1,1.657,0l.417.417a2.729,2.729,0,0,0,2.988.584l.017-.007a2.728,2.728,0,0,0,1.7-2.525v-.59a1.173,1.173,0,0,1,1.172-1.172h1.172a1.173,1.173,0,0,1,1.172,1.172v.59a2.728,2.728,0,0,0,1.7,2.525l.016.007a2.729,2.729,0,0,0,2.987-.584l.417-.417a1.172,1.172,0,0,1,1.657,0l.829.829a1.173,1.173,0,0,1,0,1.657l-.417.417a2.727,2.727,0,0,0-.586,2.983l.009.021a2.728,2.728,0,0,0,2.525,1.7h.59a1.173,1.173,0,0,1,1.172,1.172Z" />
</svg>
Account settings
</a>
</li>


<li>
<a href="<?php echo SITEROOT; ?>account-payments.html" title="Payment settings" class="account-nav__link account-menu-hidden">
<svg xmlns="http://www.w3.org/2000/svg" width="21.667" height="17.755" viewBox="0 0 21.667 17.755">
<defs>
<style>
.wallet {
fill: #384765;
}
</style>
</defs>
<g transform="translate(0 -39)">
<g transform="translate(0 39)">
<g transform="translate(0 0)">
<path class="wallet" d="M19.591,39H4.429a2.081,2.081,0,0,0-2.071,2.081v.025H2.076A2.075,2.075,0,0,0,0,43.173v11.5a2.088,2.088,0,0,0,2.076,2.081H17.238a2.081,2.081,0,0,0,2.071-2.081v-.025h.281a2.075,2.075,0,0,0,2.076-2.066v-11.5A2.085,2.085,0,0,0,19.591,39ZM17.238,55.752H2.076A1.085,1.085,0,0,1,1,54.673v-11.5A1.072,1.072,0,0,1,2.076,42.11H17.238a1.065,1.065,0,0,1,1.068,1.063v2.869a1.235,1.235,0,0,1-.266.03H15.147a2.856,2.856,0,0,0,0,5.713h2.889c.09-.005.181-.015.266-.025l.005,2.914A1.078,1.078,0,0,1,17.238,55.752Zm3.426-3.17a1.072,1.072,0,0,1-1.073,1.063H19.31V51.4a2.741,2.741,0,0,0,.577-.527l.777-1Zm-1.57-2.317a1.35,1.35,0,0,1-1.053.522H15.147a1.856,1.856,0,0,1,0-3.711h2.889a2.288,2.288,0,0,0,1-.226,2.332,2.332,0,0,0,.848-.682l.777-1,.005,3.064Zm1.57-6.741L19.31,45.269v-2.1a2.068,2.068,0,0,0-2.071-2.066H3.36v-.025A1.078,1.078,0,0,1,4.429,40H19.591a1.085,1.085,0,0,1,1.073,1.078v2.443Z" transform="translate(0 -39)" />
</g>
</g>
<g transform="translate(14.565 48.429)">
<path class="wallet" d="M292.105,227h-1.2a.5.5,0,1,0,0,1h1.2a.5.5,0,0,0,0-1Z" transform="translate(-290.4 -227)" />
</g>
</g>
</svg>
Payment settings
</a>
</li>
<li class="mobile-show">
<a href="<?php echo SITEROOT; ?>" title="Sign out" class="account-nav__link svg-stroke account-menu-hidden js-mobile-account-logout">
<?php echo $icon_signout; ?>
Sign out
</a>
</li>

</ul>
</nav>

</div>
</div>
</div>
</div>

<div class="overlay" id="overlay-search"></div>
<div class="overlay overlay-no-background" id="overlay-mobile-nav"></div>
</div>
</div>
</div>
</div>

</header>