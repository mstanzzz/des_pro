<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>ClosetsToGo</title>
<meta name="description" content="Account idea folder">
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
			<button class="account-nav__prev" style="display: none;">
			<?php echo $icon_btn; ?>
			</button>
			<div class="account-nav__content">
			<a href="<?php echo SITEROOT."account.html"; ?>" title="" class="home-mobile-buttons-block__link account-small-link">Dashboard</a>
			<a href="account-settings.html" title="" class="home-mobile-buttons-block__link account-big-link">Account settings</a>
			<a href="#" title="" class="home-mobile-buttons-block__link account-big-link">Start a new design</a>
			<a href="account-orders.html" title="" class="home-mobile-buttons-block__link account-small-link">My orders</a>
			<a href="account-payments.html" title="" class="home-mobile-buttons-block__link account-big-link">Payment settings</a>
			</div>
			<button class="account-nav__next">
			<?php echo $icon_btn; ?>
			</button>
		</div>
	</div>
</div>
</div>
</div>
</section>
<!--
<section class="mobile-order-search covid-block mobile-idea-folder">
<div class="mobile-idea-folder__buttons">
<button class="mobile-idea-folder__button add-house" data-toggle="modal" data-target="#newHouse">
<svg xmlns="http://www.w3.org/2000/svg" width="30.77" height="30.789" viewBox="0 0 30.77 30.789"><defs><ome-run{fill:#384765;}</style></defs><g transform="translate(-0.001 -0.068)"><g transform="translate(0.001 0.068)"><path class="home-run" d="M30.762,13.386a2.689,2.689,0,0,0-.936-1.848L27.164,9.256V2.767a.9.9,0,0,0-.9-.9H22.657a.892.892,0,0,0-.889.9V4.616L17.206.724a2.688,2.688,0,0,0-3.517,0L.946,11.539a2.708,2.708,0,0,0,2.673,4.606V29.955a.892.892,0,0,0,.889.9H26.263a.9.9,0,0,0,.9-.9V16.145a2.7,2.7,0,0,0,3.6-2.759Zm-7.2-9.717h1.815V7.709L23.559,6.162Zm-4.5,25.383H11.72v-7.23h7.344Zm6.31,0H20.854v-8.12a.9.9,0,0,0-.9-.9H10.818a.892.892,0,0,0-.889.9v8.12H5.41v-14.2L15.443,6.329l9.931,8.51V29.052ZM28.75,14.181a.9.9,0,0,1-1.272.1L16.032,4.459a.9.9,0,0,0-1.17,0L3.293,14.278a.9.9,0,0,1-1.177-1.367L14.859,2.094a.9.9,0,0,1,1.174,0l12.62,10.815A.9.9,0,0,1,28.75,14.181Z" transform="translate(-0.001 -0.068)"></path></g><g transform="translate(11.732 10.887)"><path class="home-run" d="M201.625,179.938H196.1a.892.892,0,0,0-.889.9v5.413a.892.892,0,0,0,.889.9h5.529a.9.9,0,0,0,.9-.9V180.84A.9.9,0,0,0,201.625,179.938Zm-.889,5.413H197v-3.609h3.738Z" transform="translate(-195.207 -179.938)"></path></g><g transform="translate(15.446 23.639)"><ellipse class="home-run" cx="0.901" cy="0.902" rx="0.901" ry="0.902"></ellipse></g></g></svg>
<span>Add house</span>
</button>
<button class="mobile-idea-folder__button manage-house" data-toggle="modal" data-target="#manageHouses">
<svg xmlns="http://www.w3.org/2000/svg" width="33.667" height="26.649" viewBox="0 0 33.667 26.649"><defs><style>.adjust{fill:#18c4c7;}</style></defs><g transform="translate(0 -53.359)"><g transform="translate(0 53.359)"><g transform="translate(0 0)"><path class="adjust" d="M32.679,56.679H21.215a2.482,2.482,0,0,0-.527-.777L18.875,54.09a2.5,2.5,0,0,0-3.529,0L13.534,55.9a2.483,2.483,0,0,0-.527.777H.987a.987.987,0,1,0,0,1.975H13.007a2.482,2.482,0,0,0,.527.777l1.812,1.812a2.5,2.5,0,0,0,3.529,0l1.812-1.812a2.483,2.483,0,0,0,.527-.777H32.679a.987.987,0,1,0,0-1.975ZM19.291,58.035l-1.812,1.812a.521.521,0,0,1-.737,0L14.93,58.035a.522.522,0,0,1,0-.737l1.812-1.812a.521.521,0,0,1,.737,0L19.291,57.3A.522.522,0,0,1,19.291,58.035Z" transform="translate(0 -53.359)"></path></g></g><g transform="translate(0 62.508)"><g transform="translate(0 0)"><path class="adjust" d="M32.679,195.815H13.421a2.494,2.494,0,0,0-.529-.777l-1.812-1.812a2.5,2.5,0,0,0-3.529,0l-1.812,1.812a2.484,2.484,0,0,0-.527.777H.987a.987.987,0,1,0,0,1.975H5.212a2.482,2.482,0,0,0,.527.777l1.812,1.812a2.5,2.5,0,0,0,3.529,0l1.812-1.812a2.5,2.5,0,0,0,.529-.777H32.679a.987.987,0,1,0,0-1.975ZM11.5,197.171l-1.812,1.812a.521.521,0,0,1-.737,0l-1.812-1.812a.522.522,0,0,1,0-.737l1.812-1.812a.521.521,0,0,1,.737,0l1.812,1.812a.521.521,0,0,1,0,.737Z" transform="translate(0 -192.495)"></path></g></g><g transform="translate(0 71.393)"><g transform="translate(0 0)"><path class="adjust" d="M32.679,330.945H27.8a2.483,2.483,0,0,0-.527-.777l-1.812-1.812a2.5,2.5,0,0,0-3.529,0l-1.812,1.812a2.484,2.484,0,0,0-.527.777H.987a.987.987,0,0,0,0,1.975h18.6a2.483,2.483,0,0,0,.527.777l1.812,1.812a2.5,2.5,0,0,0,3.529,0l1.812-1.812a2.484,2.484,0,0,0,.527-.777h4.883a.987.987,0,1,0,0-1.975ZM25.873,332.3l-1.812,1.812a.521.521,0,0,1-.737,0L21.512,332.3a.521.521,0,0,1,0-.737l1.812-1.812a.521.521,0,0,1,.737,0l1.812,1.812A.521.521,0,0,1,25.873,332.3Z" transform="translate(0 -327.625)"></path></g></g></g></svg>
<span>Manage house/s</span>
</button>
</div>
</section>
-->
<main class="main clearfix">

<section class="breadcrumb-block pb-3 desktop-show">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12">
		<div class="breadcrumb-block__wrapper" aria-label="breadcrumb">
			<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="index.html">Home</a></li>
			<li class="breadcrumb-item" aria-current="page"><a href="account.html">account</a></li>
			<li class="breadcrumb-item active" aria-current="page">My Inspirations</li>
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
				<a href="#" title="" class="account-block__navigation--user-link">
				<span class="account-block__navigation--user-image">
				<span class="flip-front">
				<img src="<?php echo SITEROOT; ?>images/team-3.png" alt="" class="img-fluid">
				</span>
				<span class="flip-back">Edit/add<br>photo</span>
				</span>
				<span class="account-block__naviation--user-plus">
				<?php echo $icon_add_showroom; ?>
				</span>
				</a>
				<p class="account-block__navigation--user-heading">Hi, <?php echo $_SESSION['first_name']; ?></p>
			</div>

			<div class="mobile-show">
				<div class="account-block__navigation--user active js-not-login-txt">
					<p class="account-block__navigation--user-heading">Login</p>
				</div>
			</div>
			<?php
			$acc_page = "idea";
			require_once($real_root.'/pages/views/account_side_nav.php');
			?>
		</div>
	</div>


<center style="margin:1px;">
<img src="<?php echo SITEROOT; ?>images/comingSoonImageGif.gif" alt="" >
</center>

</section>
</main>



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
require_once($real_root.'/pages/views/modal-new-house.php');
require_once($real_root.'/pages/views/modal-manage-saved-houses.php');
require_once($real_root.'/pages/views/modal-delete.php');
require_once($real_root.'/pages/views/modal-alert-confirmation.php');

?>

<script src="<?php echo SITEROOT; ?>app.js"></script>
</body>
</html>
