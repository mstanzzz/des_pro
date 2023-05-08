<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>ClosetsToGo</title>
	<meta name="description" content="DIY instructions">
	<link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
</head>

<body class="idea-folder-popup">
	<?php
	require_once($real_root . '/pages/views/header.php');
	?>

	<section class="first-fixed-block covid-block clearfix hero-images-from-specification__a">
		<figure class="first-fixed-block__img-group" style="background-image: url('<?php echo SITEROOT; ?>images/DIYInstallBanner.jpg');">
			<figcaption class="first-fixed-block__img-group--text-block">
				<p class="first-fixed-block__img-group--text text-center" style="color: black;">
					“...The install was very easy and took less time than I had planned”.<br>
					- Harry Chandler, July 2020

				</p>
			</figcaption>
		</figure>
	</section>
<!--
staging.jpg, 
place-sides.jpg
install-rail.jpg
-->

	<section class="home-mobile-buttons-block diy-mobile-header covid-block">
		<div class="wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="diy-mobile-header__heading">
							<button title="DIY instructions" class="diy-mobile-header__heading--button not-active js-uncheck-diy-header-btn">
								<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
									<path d="M0 0h24v24H0V0z" fill="none" />
									<path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z" />
								</svg>
							</button>
							<p>DIY Custom Closet Installation Steps</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="home-mobile-buttons-block__wrapper">
							<button title="Left" class="account-nav__prev" style="display: none">
								<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
									<path d="M0 0h24v24H0V0z" fill="none" />
									<path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z" />
								</svg>
							</button>
							<div class="account-nav__content">
								<button title="Intro" style="max-width: 120px;" class="home-mobile-buttons-block__link js-mobile-tab-btn" data-id="#tab-content-1">Intro</button>
								<button title="Prep Area" style="max-width: 120px;" class="home-mobile-buttons-block__link js-mobile-tab-btn" data-id="#tab-content-2">Prep Area</button>
								<button title="1. Unboxing" style="max-width: 120px;" class="home-mobile-buttons-block__link js-mobile-tab-btn" data-id="#tab-content-3">1. Unboxing</button>
								<button title="2. Staging" style="max-width: 120px;" class="home-mobile-buttons-block__link js-mobile-tab-btn" data-id="#tab-content-4">2. Staging</button>
								<button title="3. Mark Line" style="max-width: 160px;" class="home-mobile-buttons-block__link js-mobile-tab-btn" data-id="#tab-content-5">3. Mark Line</button>
								<button title="4. Install Rail" style="max-width: 170px;" class="home-mobile-buttons-block__link js-mobile-tab-btn" data-id="#tab-content-6">4. Install Rail</button>
								<button title="5. Place Sides" style="max-width: 150px;" class="home-mobile-buttons-block__link js-mobile-tab-btn" data-id="#tab-content-7">5. Place Sides</button>
								<button title="6. Secure Shelves" style="max-width: 150px;" class="home-mobile-buttons-block__link js-mobile-tab-btn" data-id="#tab-content-8">6. Secure Shelves</button>
								<button title="7. Install Cleats" style="max-width: 200px;" class="home-mobile-buttons-block__link js-mobile-tab-btn" data-id="#tab-content-9">7. Install Cleats</button>
								<button title="8. Level/Plumb" style="max-width: 190px;" class="home-mobile-buttons-block__link js-mobile-tab-btn" data-id="#tab-content-10">8. Level/Plumb</button>
								<button title="9. Drawers/Baskets" style="max-width: 190px;" class="home-mobile-buttons-block__link js-mobile-tab-btn" data-id="#tab-content-11">9. Drawers/Baskets</button>
								<button title="10. Tubes/Adj.Shelves" style="max-width: 190px;" class="home-mobile-buttons-block__link js-mobile-tab-btn" data-id="#tab-content-12">10. Tubes/Adj.Shelves</button>
							</div>
							<button title="Right" class="account-nav__next">
								<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
									<path d="M0 0h24v24H0V0z" fill="none" />
									<path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z" />
								</svg>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<main class="main clearfix diy-instructions-page_margin-for-hero-image">
		<section class="breadcrumb-block diy-instructions desktop-show">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="breadcrumb-block__wrapper" aria-label="breadcrumb">
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html" title="Home">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Installation-guide</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<!-- <section class="simple-block diy-instructions">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="simple-block__border no-border p-0">
								<div class="row">
									<div class="col-12 col-lg-auto">
										<div class="diy-instructions__text-block">
											<h1 class="diy-instructions__text-block--heading">
												Choice the type of installation you are looking to explore
											</h1>
										</div>
									</div>
									<div class="col-12 col-lg-auto">
										<div class="my-custom-select-selects-wrapper">
											<div class="my-customs-select">
												<div class="my-customs-select__trigger"><span>Closets</span>
													<div class="arrows"></div>
												</div>
												<div class="my-customs-options">
													<span class="my-customs-option js-default-value selected" data-value="Closets">Closets</span>
													<div class="my-custom-select-select-wrapper">
														<div class="my-customs-select-select">
															<div class="my-customs-select-select__trigger"><span>Wardrobes</span>
																<div class="arrow-second"></div>
															</div>
															<div class="my-customs-select-select-options">
																<span class="my-customs-select-select-option js-default-value" data-value="Wardrobes">Wardrobes</span>
																<span class="my-customs-select-select-option" data-value="Wardrobes 1">Wardrobes 1</span>
																<span class="my-customs-select-select-option" data-value="Wardrobes 2">Wardrobes 2</span>
															</div>
														</div>
													</div>
													<div class="my-custom-select-select-wrapper">
														<div class="my-customs-select-select">
															<div class="my-customs-select-select__trigger"><span>Garage</span>
																<div class="arrow-second"></div>
															</div>
															<div class="my-customs-select-select-options">
																<span class="my-customs-select-select-option js-default-value" data-value="Garage">Garage</span>
																<span class="my-customs-select-select-option" data-value="Garage 1">Garage 1</span>
																<span class="my-customs-select-select-option" data-value="Garage 2">Garage 2</span>
															</div>
														</div>
													</div>
													<div class="my-custom-select-select-wrapper">
														<div class="my-customs-select-select">
															<div class="my-customs-select-select__trigger"><span>Wine Racks</span>
																<div class="arrow-second"></div>
															</div>
															<div class="my-customs-select-select-options">
																<span class="my-customs-select-select-option js-default-value" data-value="Wine Racks">Wine Racks</span>
																<span class="my-customs-select-select-option" data-value="Wine Racks 1">Wine Racks 1</span>
																<span class="my-customs-select-select-option" data-value="Wine Racks 2">Wine Racks 2</span>
															</div>
														</div>
													</div>
													<div class="my-custom-select-select-wrapper">
														<div class="my-customs-select-select">
															<div class="my-customs-select-select__trigger"><span>Home Office</span>
																<div class="arrow-second"></div>
															</div>
															<div class="my-customs-select-select-options">
																<span class="my-customs-select-select-option js-default-value" data-value="Home Office">Home Office</span>
																<span class="my-customs-select-select-option" data-value="Home Office 1">Home Office 1</span>
																<span class="my-customs-select-select-option" data-value="Home Office 2">Home Office 2</span>
															</div>
														</div>
													</div>

													<div class="my-custom-select-select-wrapper">
														<div class="my-customs-select-select">
															<div class="my-customs-select-select__trigger"><span>Wallbeds</span>
																<div class="arrow-second"></div>
															</div>
															<div class="my-customs-select-select-options">
																<span class="my-customs-select-select-option js-default-value" data-value="Wallbeds">Wallbeds</span>
																<span class="my-customs-select-select-option" data-value="Wallbeds 1">Wallbeds 1</span>
																<span class="my-customs-select-select-option" data-value="Wallbeds 2">Wallbeds 2</span>
															</div>
														</div>
													</div>

													<div class="my-custom-select-select-wrapper">
														<div class="my-customs-select-select">
															<div class="my-customs-select-select__trigger"><span>Wardrobes</span>
																<div class="arrow-second"></div>
															</div>
															<div class="my-customs-select-select-options">
																<span class="my-customs-select-select-option js-default-value" data-value="Wardrobes">Wardrobes</span>
																<span class="my-customs-select-select-option" data-value="Wardrobes 1">Wardrobes 1</span>
																<span class="my-customs-select-select-option" data-value="Wardrobes 2">Wardrobes 2</span>
															</div>
														</div>
													</div>

													<div class="my-custom-select-select-wrapper">
														<div class="my-customs-select-select">
															<div class="my-customs-select-select__trigger"><span>Garage</span>
																<div class="arrow-second"></div>
															</div>
															<div class="my-customs-select-select-options">
																<span class="my-customs-select-select-option js-default-value" data-value="Garage">Garage</span>
																<span class="my-customs-select-select-option" data-value="Garage 1">Garage 1</span>
																<span class="my-customs-select-select-option" data-value="Garage 2">Garage 2</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->

		<section class="simple-block diy-instructions">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="simple-block__border">
								<div class="row">
									<div class="col-12 col-lg-3 text-center js-mobile-tab-text-img">
<img src="<?php echo SITEROOT; ?>images/DIYcouplemeasuring.jpg" alt="" class="diy-instructions__image img-fluid">
									</div>
									<div class="col-12 col-lg-4 js-mobile-tab-text-img">
										<div class="diy-instructions__text-block">
											<p class="h4 diy-instructions__text-block--heading">
												DIY Closet Organizers
											</p>
											<p class="diy-instructions__text-block--text">
												Here you can find an overview of the installation process, watch a video(coming soon) on how to install your closet system, and download our fully illustrated and comprehensive installation guide. If you still need help, just contact us!
											</p>
											<a href="<?php echo SITEROOT; ?>support.html" title="Contact us" class="link-button">
												contact us
												<?php echo $icon_id_left_arrow_3; ?>
											</a>
										</div>
									</div>
									<div class="col-12 col-lg-5 js-mobile-tab-text-img">
										<div class="diy-instructions__images-block">
											<div class="diy-instructions__images-block--wrap">
												<span class="diy-instructions__images-block--image">
													<?php echo $icon_id_securitydark; ?>
												</span>
												<div class="bs-example">
													<button type="button" class="diy-instructions__images-block--button video-svg" data-toggle="tooltip" data-placement="bottom" title="Perfect Fit Guarantee: If you mis-measure a part, you're covered! If you damage a part, you're covered! In both instances, we will remake the part(s) for free! (shipping not included)">
														Perfect Fit Guarantee
													</button>
												</div>
												<p class="diy-instructions__images-block--text">Easy it is to install</p>
											</div>
											<div class="diy-instructions__images-block--wrap">
												<span class="diy-instructions__images-block--image">
													<?php echo $icon_id_PhoneIcon; ?>
												</span>
												<a href="<?php echo SITEROOT; ?>closet-system-contact.html" title="Support" class="diy-instructions__images-block--button pdf-svg">
													<!-- <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
														<path d="M0 0h24v24H0z" fill="none" />
														<path fill="#fff" d="M11.59 7.41L15.17 11H1v2h14.17l-3.59 3.59L13 18l6-6-6-6-1.41 1.41zM20 6v12h2V6h-2z" />
													</svg> -->
													Go to Support...
												</a>
												<p class="diy-instructions__images-block--text">Support</p>
											</div>
											<div class="diy-instructions__images-block--wrap">
												<span class="diy-instructions__images-block--image">
													<?php echo $icon_id_win; ?>
												</span>
												<a href="#reviews" title="See all reviews" class="diy-instructions__images-block--button">
													See all reviews
												</a>
												<p class="diy-instructions__images-block--text">Raving Reviews</p>
											</div>
										</div>
									</div>
									<div class="col-12 js-mobile-tab-container-detached">

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<style>
			.tooltip-inner {
				background-color: #ffff;
				color: #5c667B;
			}

			.tooltip {
				font-family: "OpenSans-Regular", sans-serif;
				line-height: 1.44;
			}
		</style>


		<section class="tab-block">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12 desktop-show">
							<div class="tab-block__heading">
								<p class="h4">DIY Custom Closet Installation Steps</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 desktop-show">
							<div class="tab-block__buttons-wrap">
								<button title="Scroll Left" class="tab-block__buttons-prev" style="display: none">
									<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
										<path d="M0 0h24v24H0V0z" fill="none" />
										<path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z" />
									</svg>
								</button>
								<div class="tab-block__buttons-content">
									<button title="Intro" class="tab-block__buttons-content--button active" id="tab-button-1" data-id="tab-content-1" style="min-width: 120px;">Intro</button>
									<button title="Prep Area" class="tab-block__buttons-content--button" id="tab-button-2" data-id="tab-content-2" style="min-width: 120px;">Prep Area</button>
									<button title="1. Unboxing" class="tab-block__buttons-content--button" id="tab-button-3" data-id="tab-content-3" style="min-width: 120px;">1. Unboxing</button>
									<button title="2. Staging" class="tab-block__buttons-content--button" id="tab-button-4" data-id="tab-content-4" style="min-width: 120px;">2. Staging</button>
									<button title="3. Mark Line" class="tab-block__buttons-content--button" id="tab-button-5" data-id="tab-content-5" style="min-width: 150px;">3. Mark Line</button>
									<button title="4. Install Rail" class="tab-block__buttons-content--button" id="tab-button-6" data-id="tab-content-6" style="min-width: 150px;">4. Install Rail</button>
									<button title="5. Place Sides" class="tab-block__buttons-content--button" id="tab-button-7" data-id="tab-content-7" style="min-width: 150px;">5. Place Sides</button>
									<button title="6. Secure Shelves" class="tab-block__buttons-content--button" id="tab-button-8" data-id="tab-content-8" style="min-width: 150px;">6. Secure Shelves</button>
									<button title="7. Install Cleats" class="tab-block__buttons-content--button" id="tab-button-9" data-id="tab-content-9" style="min-width: 180px;">7. Install Cleats</button>
									<button title="8. Level/Plumb" class="tab-block__buttons-content--button" id="tab-button-10" data-id="tab-content-10" style="min-width: 180px;">8. Level/Plumb</button>
									<button title="9. Drawers/Baskets" class="tab-block__buttons-content--button" id="tab-button-11" data-id="tab-content-11" style="min-width: 180px;">9. Drawers/Baskets</button>
									<button title="10. Tubes/Adj.Shelves" class="tab-block__buttons-content--button" id="tab-button-12" data-id="tab-content-12" style="min-width: 180px;">10. Tubes/Adj.Shelves</button>
								</div>
								<button title="Scroll Right" class="tab-block__buttons-next">
									<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
										<path d="M0 0h24v24H0V0z" fill="none" />
										<path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z" />
									</svg>
								</button>
								<p id="reviews"></p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 js-mobile-tab-container">
							<div class="tab-block__wrapper open" id="tab-content-1">
								<div class="row">
									<div class="col-12 col-lg-6">
										<div class="tab-block__wrapper--content">
											<p class="tab-block__wrapper--heading with-button">
												<span>Introduction to Closets To Go DIY:</span>
												<!-- <a href="#" title="Watch Video" class="video-button">
													<span>watch video</span>
												</a> -->
											</p>

											<div class="tab-block__wrapper--image-wrap">
												<button title="Left" class="tab-block__wrapper--image-wrap__prev" style="display: none">
													<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
														<path d="M0 0h24v24H0V0z" fill="none"></path>
														<path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"></path>
													</svg>
												</button>

												<button title="Right" class="tab-block__wrapper--image-wrap__next">
													<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
														<path d="M0 0h24v24H0V0z" fill="none"></path>
														<path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path>
													</svg>
												</button>
											</div>

											<div class="mt-4 mobile-show">
												<button id="descButton1" title="Description" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#collapseOne-one" data-toggle="modal" data-target="#mobile-diy-modal">
													Introduction to Closets to Go DIY:
												</button>
												<div class="descContent" id="desc1">
													<p style="display: block; padding: 0 0.75rem;">
														Closets To Go DIY closet organizers are engineered and designed to give you an easy, hassle free installation experience and yield professional results! We do most of the work on our end so you don't have to and take extra measures to support you along the way so that you can confidently Do-It-Yourself!
														<br>
														From the beginning, our goal was to create high quality custom closet organizers that give the novice DIY’er professional results without possessing professional skills or knowledge and without the expense.
														We accomplished this by adopting a European method of construction and installation hardware which we’ve perfected over the past 40 years. (Learn more about <a href="<?php echo SITEROOT; ?>closet-organizers/about-us.html" style="color: #59c2c4; text-decoration: underline;">Our Story</a>)
														<br>
														With our added <a href="<?php echo SITEROOT; ?>pre-assembly.html" style="color: #59c2c4; text-decoration: underline;">Hardware Pre-assembly Service</a>, all the guesswork of where to install the hardware and assembly fittings or trying to decipher assembly instructions are a thing of the past, leaving frustrating memories of assembling big box store furniture a distant memory.
														<br>
														To further commit our confidence in your successful installation experience, we custom curate installation instructions based on your specific closet plans plus provide expert phone support (from a human) to answer any questions you may have during the installation process.
														<br>
														We also provide our Perfect Fit Guarantee- If by rare chance a measurement you provided was incorrect or you accidentally break a part, we replace the part for free minus shipping.
														<br>
														We are so confident that your experience will be nothing short of spectacular, that we guarantee this will be the easiest and most rewarding DIY project period!

													</p>

												</div>
											</div>
											<script>
												var button = document.getElementById('descButton1');
												var div = document.getElementById('desc1');

												div.style.display = 'none';

												button.onclick = function() {
													if (div.style.display !== 'none') {
														div.style.display = 'none';
													} else {
														div.style.display = 'block';
													}
												};
											</script>

											<div class="mt-5 desktop-show">
												<div id="accordionOne">
													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="headingOne-one" data-toggle="collapse" data-target="#collapseOne-one" aria-expanded="false" aria-controls="collapseOne-one">
															<p class="card-collapse__title">
																<span>Introduction to Closets To Go DIY:</span>
<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
																</h5>
														</div>

														<div id="collapseOne-one" class="collapse" aria-labelledby="headingOne-one" data-parent="#accordionOne">
															<div class="card-collapse__body js-diy-detached-div">
																<p>
																	Closets To Go DIY closet organizers are engineered and designed to give you an easy, hassle free installation experience and yield professional results! We do most of the work on our end so you don't have to and take extra measures to support you along the way so that you can confidently Do-It-Yourself!
																	<br>
																	From the beginning, our goal was to create high quality custom closet organizers that give the novice DIY’er professional results without possessing professional skills or knowledge and without the expense.
																	We accomplished this by adopting a European method of construction and installation hardware which we’ve perfected over the past 40 years. (Learn more about <a href="<?php echo SITEROOT; ?>closet-organizers/about-us.html" style="color: #59c2c4; text-decoration: underline;">Our Story</a>)
																	<br>
																	With our added <a href="<?php echo SITEROOT; ?>pre-assembly.html" style="color: #59c2c4; text-decoration: underline;">Hardware Pre-assembly Service</a>, all the guesswork of where to install the hardware and assembly fittings or trying to decipher assembly instructions are a thing of the past, leaving frustrating memories of assembling big box store furniture a distant memory.
																	<br>
																	To further commit our confidence in your successful installation experience, we custom curate installation instructions based on your specific closet plans plus provide expert phone support (from a human) to answer any questions you may have during the installation process.
																	<br>
																	We also provide our Perfect Fit Guarantee- If by rare chance a measurement you provided was incorrect or you accidentally break a part, we replace the part for free minus shipping.
																	<br>
																	We are so confident that your experience will be nothing short of spectacular, that we guarantee this will be the easiest and most rewarding DIY project period!

																</p>


															</div>
														</div>
													</div>

													<!-- <div class="card-collapse">
														<div class="card-collapse__header collapsed" id="headingOne-two" data-toggle="collapse" data-target="#collapseOne-two" aria-expanded="false" aria-controls="collapseOne-two">
															<p class="card-collapse__title">
																<span>Reviews</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="collapseOne-two" class="collapse" aria-labelledby="headingOne-two" data-parent="#accordionOne">
															<div class="card-collapse__body">
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
															</div>
														</div>
													</div> -->
												</div>
											</div>

											<div class="mt-5 desktop-show" id="helpfulTipOne" style="color: white; text-decoration:none;">
												<!-- <p class="tab-block__wrapper--heading" style="color: white;">Helpful tips</p> -->

												<!-- <div class="js-diy-detached-div" id="secondAccordionOne">
													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingOne-one" data-toggle="collapse" data-target="#secondCollapseOne-one" aria-expanded="false" aria-controls="secondCollapseOne-one">
															<p class="card-collapse__title">
																<span>Measuring off of carpet floors:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseOne-one" class="collapse" aria-labelledby="secondHeadingOne-one" data-parent="#secondAccordionOne">
															<div class="card-collapse__body">
																Carpeted floors can present some challenges with how to get an accurate measurement due to the loose carpet fibers or pad types. There are two types of carpet, Shag carpet and Pile carpet. Pile carpet is typically a more dense carpet with shorter fibers and a more densely woven weave. When measuring off this type of carpet one just needs to position the end of your tape measure to easily rest on the top of the weave (not pressing hard) and measure the height.
																<br><br>
																For measuring off of Shag carpet, a slightly different method is needed in that you must slightly detent the end of the tape measure into the shag weave. Again, we emphasize “slight detent” where the end of the tape measure is slightly pushed into the weave using slight pressure. For best results, measure at the same position twice to ensure accurate measurements and to get the feel how to apply slight pressure for consistent results!

															</div>
														</div>
													</div>

													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingOne-two" data-toggle="collapse" data-target="#secondCollapseOne-two" aria-expanded="false" aria-controls="secondCollapseOne-two">
															<p class="card-collapse__title">
																<span>Floor mounted section:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseOne-two" class="collapse" aria-labelledby="secondHeadingOne-two" data-parent="#secondAccordionOne">
															<div class="card-collapse__body">
																Determine if there is a slope to the floor and reference the rail height from the high spot of the floor. This will ensure all sections will maintain a level plane along all adjacent walls. See tips on how to use different types of laser to determine floor slope.
																<div class="mt-4 mb-3 card-collapse__body--images">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-1.png" alt="" class="img-fluid">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-2.png" alt="" class="img-fluid">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-3.png" alt="" class="img-fluid">
																</div>
															</div>
														</div>
													</div>

													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingOne-three" data-toggle="collapse" data-target="#secondCollapseOne-three" aria-expanded="false" aria-controls="secondCollapseOne-three">
															<p class="card-collapse__title">
																<span>Using a laser level:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseOne-three" class="collapse" aria-labelledby="secondHeadingOne-three" data-parent="#secondAccordionOne">
															<div class="card-collapse__body">
																To determine if there is a slope to the floor, set your laser level 3’ from the floor in a plumb and level position centered in the room. Measure the laser line along the walls down to the finished floor to determine if the distance from the laser line varies to the floor. A floor can be considered fairly flat if the variation between the laser line and the floor deviates no more than a ¼” . Mark your rail height at the highest position along any wall to ensure all sections maintain a level position.

															</div>
														</div>
													</div>

													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingOne-four" data-toggle="collapse" data-target="#secondCollapseOne-four" aria-expanded="false" aria-controls="secondCollapseOne-four">
															<p class="card-collapse__title">
																<span>Using a level:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseOne-four" class="collapse" aria-labelledby="secondHeadingOne-four" data-parent="#secondAccordionOne">
															<div class="card-collapse__body">
																Using a 4-6’ level, place the level along the floor around the perimeter walls of the room where the closet will be installed. Make note of any height deviation and reference your rail height from the highest point along any wall using that height as your base height to mark your line at.
															</div>
														</div>
													</div>

													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingOne-five" data-toggle="collapse" data-target="#secondCollapseOne-five" aria-expanded="false" aria-controls="secondCollapseOne-five">
															<p class="card-collapse__title">
																<span>How to use a stud finder:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseOne-five" class="collapse" aria-labelledby="secondHeadingOne-five" data-parent="#secondAccordionOne">
															<div class="card-collapse__body">
																Stud finders come in various forms, from electronic versions to magnetic versions. While most people are familiar with the electronic version it tends to add a bit more complexity to finding exact stud location which seem to vary by different models. To simplify the finding of studs, using a magnetic stud finder is simple to use and highly accurate in that it will easily locate the screw or nails behind the sheetrock to indicate center line of any stud. Once a stud is located, measure the distance usually 16” between studs and mark all stud locations along the rail line for further reference. Some studs are 24” on center, so in those cases you’ll need to add additional support between the studs using togglers. (See how to use toggles in the PDF version of the installation manual).

																<div class="mt-4 mb-3 card-collapse__body--images">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-1.png" alt="" class="img-fluid">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-2.png" alt="" class="img-fluid">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-3.png" alt="" class="img-fluid">
																</div>
															</div>
														</div>
													</div>


												</div> -->
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-6">
										<div class="tab-block__wrapper--video-block">
											<div class="tab-block__wrapper--video-video">
<img src="<?php echo SITEROOT; ?>images/Placeholder-DIY-Steps/DIY-Steps-Introduction.jpg" alt="" class="img-fluid">
											
											</div>
											<p class="tab-block__wrapper--video-heading">Closets To Go Custom DIY Closets = Easy yet Professional Results!</p>

											<div class="row row-with-desctop-border-bottom">
												<div class="col-12 col-sm-6">
													<p class="flex-p">
<img src="<?php echo SITEROOT; ?>images/passage-of-time.svg" alt="">
														Just 4-6 hours to install a 10 x 10 closet.
													</p>
												</div>
												<div class="col-12 col-sm-6">
													<p class="flex-p underlined-text">
<img src="<?php echo SITEROOT; ?>images/security-yellow.svg" alt="">
														100% Perfect Fit Guarantee
													</p>
												</div>
												<div class="col-12 col-sm-6">
													<div class="first-fixed-block__text-group--items">
<img src="<?php echo SITEROOT; ?>images/package.svg" alt="">
														<div class="first-fixed-block__text-group--text">
															<p><?php echo $count_diy_inst; ?></p>
															<p>Successful DIY Installations</p>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-6">
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">William Gumpenberger, Feb 8, 2021</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"I installed the system with no help and the directions supplied were easy to understand"</p>
															</a>
														</div>
													</div>
												</div>
											</div>

											<div class="mt-5 desktop-show" id="customerTestimonialsOne">
												<p class="tab-block__wrapper--heading">Customer testimonials</p>

												<div class="stars-wrapper diy-instructions js-diy-detached-div">

													<div class="block-stars__wrapper">

<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">

															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Michael Schoen, 2 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"The directions are easy to follow which creates a pain free installation."</p>
															</a>

														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Maria Faaeteete, March 29, 2020</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"If we can do it, you can do it!"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Kevin Edie, 2 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Install was much easier than expected"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Terrie Biggs, 6 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"so pleased at the perfect fit and ease of installation"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">AT, a year ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Not only did we have detailed instructions, but the personal cell number of an employee that we could call with any install questions."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Chester, a year ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Design came out exactly as hoped."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Ben C, 12/03/2019</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Installation was a breeze, everything was labeled and according to the design."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Paul Schafer, 10/03/2016</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Closets To Go is simply fantastic! Very easy to work with…"</p>
															</a>
														</div>
													</div>
												</div>
											</div>

											<!-- <div class="mt-4 mobile-show">
												<button id="custButton1" title="Customer video testimonials" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#customerVideo" data-toggle="modal" data-target="#mobile-diy-modal">
													Customer video testimonials
												</button>
												<div class="custContent1" id="cust1">
													<p style="display: block; padding: 0 0.75rem;">
														<iframe width="330" height="300" src="https://www.youtube.com/embed/Uknp66eawx8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
													</p>
												</div> -->

											<!-- <button title="Installation video Library" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#instalationVideo" data-toggle="modal" data-target="#mobile-diy-modal">
													Installation video Library
												</button> -->
											<!-- <button title="Customer testimonials" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#customerTestimonialsOne" data-toggle="modal" data-target="#mobile-diy-modal">
													Customer testimonials
												</button> -->
											<!-- </div> -->
										</div>
									</div>
								</div>
							</div>

							<!-- <script>
								var button11 = document.getElementById('custButton1');
								var div11 = document.getElementById('cust1');

								div11.style.display = 'none';

								button11.onclick = function() {
									if (div11.style.display !== 'none') {
										div11.style.display = 'none';
									} else {
										div11.style.display = 'block';
									}
								};
							</script> -->

							<div class="tab-block__wrapper" id="tab-content-2">
								<div class="row">
									<div class="col-12 col-lg-6">
										<div class="tab-block__wrapper--content">
											<p class="tab-block__wrapper--heading with-button">
												<span>Preparing area for installation:</span>
												<!-- <a href="#" title="Watch Video" class="video-button">
													<span>watch video</span>
												</a> -->
											</p>

											<p class="tab-block__wrapper--tools">Tools Required</p>
											<div class="tab-block__wrapper--image-wrap">
												<button title="Left" class="tab-block__wrapper--image-wrap__prev" style="display: none">
													<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
														<path d="M0 0h24v24H0V0z" fill="none"></path>
														<path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"></path>
													</svg>
												</button>
												<div class="tab-block__wrapper--image-content">
													<div class="image-group" style="width: 110px;">
														<?php echo $icon_id_PaintBrushTool; ?>
													</div>
													<div class="image-group" style="width: 110px;border-color: white;">


													</div>
													<div class="image-group" style="width: 110px;border-color: white;">

													</div>
													<div class="image-group" style="width: 110px;border-color: white;">


													</div>
													<div class="image-group" style="width: 110px; border-color: white;">


													</div>
												</div>
												<button title="Right" class="tab-block__wrapper--image-wrap__next">
													<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
														<path d="M0 0h24v24H0V0z" fill="none"></path>
														<path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path>
													</svg>
												</button>
											</div>

											<div class="mt-4 mobile-show">
												<button id="descButton2" title="Description" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#collapseTwo-one" data-toggle="modal" data-target="#mobile-diy-modal">
												Prepare Area for Installation:
												</button>
												<div class="descContent2" id="desc2">
													<p style="display: block; padding: 0 0.75rem;">
													To achieve optimal aesthetically pleasing results consider giving your room a fresh coat of paint if you haven’t already.  There is nothing better than seeing your new custom closet system installed in a freshly painted space, something that requires little effort yet yields great satisfaction.
													</p>
												</div>
											</div>

											<script>
												var button2 = document.getElementById('descButton2');
												var div2 = document.getElementById('desc2');

												div2.style.display = 'none';

												button2.onclick = function() {
													if (div2.style.display !== 'none') {
														div2.style.display = 'none';
													} else {
														div2.style.display = 'block';
													}
												};
											</script>


											<div class="mt-5 desktop-show">
												<div id="accordionTwo">
													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="headingTwo-one" data-toggle="collapse" data-target="#collapseTwo-one" aria-expanded="false" aria-controls="collapseTwo-one">
															<p class="card-collapse__title">
																<span>Prepare Area for Installation:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
																</h5>
														</div>

														<div id="collapseTwo-one" class="collapse" aria-labelledby="headingTwo-one" data-parent="#accordionTwo">
															<div class="card-collapse__body js-diy-detached-div">
																<p>
																To achieve optimal aesthetically pleasing results consider giving your room a fresh coat of paint if you haven’t already.  There is nothing better than seeing your new custom closet system installed in a freshly painted space, something that requires little effort yet yields great satisfaction.

																</p>


															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="mt-5 desktop-show" id="helpfulTipTwo">


												<!-- <div class="js-diy-detached-div" id="secondAccordionTwo">
													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingTwo-one" data-toggle="collapse" data-target="#secondCollapseTwo-one" aria-expanded="false" aria-controls="secondCollapseTwo-one">
															<p class="card-collapse__title">
																<span>Installing long rails:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseTwo-one" class="collapse" aria-labelledby="secondHeadingTwo-one" data-parent="#secondAccordionTwo">
															<div class="card-collapse__body">
																When installing a rail that is over 4’ in length, it’s best to attach the rail as near to the center line as possible as it helps the installer to balance the rail along the marked rail line to ensure the rail maintains a level position along the line.
															</div>
														</div>
													</div>

													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingTwo-two" data-toggle="collapse" data-target="#secondCollapseTwo-two" aria-expanded="false" aria-controls="secondCollapseTwo-two">
															<p class="card-collapse__title">
																<span>Installing Rails for sections with corner shelves:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseTwo-two" class="collapse" aria-labelledby="secondHeadingTwo-two" data-parent="#secondAccordionTwo">
															<div class="card-collapse__body">
																Corner shelves are 90 degree shelves which meet in the corner on two adjacent walls. It’s important to install the rails that meet in the corner according to the elevation plans, installing the wall rail marked “Install 1st” as these wall rails are cut to account for the the 2nd rails thickness and is cut to abut to the 1st rail where they meet at the corner.


																<div class="mt-4 mb-3 card-collapse__body--images">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-1.png" alt="" class="img-fluid">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-2.png" alt="" class="img-fluid">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-3.png" alt="" class="img-fluid">
																</div>
															</div>
														</div>
													</div>

													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingTwo-three" data-toggle="collapse" data-target="#secondCollapseTwo-three" aria-expanded="false" aria-controls="secondCollapseTwo-three">
															<p class="card-collapse__title">
																<span>Installing Rails on walls with sloped ceilings:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseTwo-three" class="collapse" aria-labelledby="secondHeadingTwo-three" data-parent="#secondAccordionTwo">
															<div class="card-collapse__body">
																When preparing your installation for rooms with sloped ceilings, note the different planes that a section or a group of sections are positioned to accommodate the slope. The position of each rail has been computed at a specific distance from each other so all sections which step down from the previous section will remain level and align to all machined holes for shelving, hanging bars and drawers etc..
																<br><br>
																Start with the rail that is at the highest position and attach making sure to use a toggler at the open end(s) for support should no stud be available to attach too. Next position the section panels and shelves in place that corresponds to the room elevation wall view. Make note if any filler pieces are called out to include for the filler piece when accounting for the overall width of the section. (Please see the filler dimensions on the wall elevation view). Do not secure these section(s) to the rail but rather install them loosely as they are intended to help with reference points on where to install the next rail. With the last side panel in place for the highest point of the sloped ceiling section(s) use your level to plumb the side and mark its position on the wall using a pencil. Remove the section panel and corresponding shelves to install the next rail following the wall elevation notes for the next rail height location. Besure to use togglers on both ends of the rail should no stud be available to secure the rail too. Continue installing the remaining rails following this procedure.

															</div>
														</div>
													</div>

													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingTwo-four" data-toggle="collapse" data-target="#secondCollapseTwo-four" aria-expanded="false" aria-controls="secondCollapseTwo-four">
															<p class="card-collapse__title">
																<span>Splicing Rails:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseTwo-four" class="collapse" aria-labelledby="secondHeadingTwo-four" data-parent="#secondAccordionTwo">
															<div class="card-collapse__body">
																Any wall that is longer than 8’ that will have sections installed on will require two or more rails. To prepare the rails for installation, you’ll need to have on hand a drill with a ½” bit along with a typical screw gun. Once the rails for any given wall have been identified by its room name and wall label (typically on the back side of the rail, opposite the rail cover) you’ll be able to determine the number of splices required for the wall by the number of rails labeled for that wall. Starting with the longest rail, position the rail above the rail line installing a 2 ½” screw near the center point of the rail. With a single screw near the centerpoint, position the rail on the rail line and mark a point approx 1” in from the end of the rail to locate your toggler (should no stud be present at the spliced joint) Dril ½” hole aligning with the holes in the Fixing rail and secure the toggler into the sheetrock. Using the toggle screw, secure the end of the rail to the wall and continue to secure the rail along the remaining stud locations. Repeat the process for the remaining rail.
															</div>
														</div>
													</div>
												</div> -->
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-6">
										<div class="tab-block__wrapper--video-block">
											<div class="tab-block__wrapper--video-video">
<img src="<?php echo SITEROOT; ?>images/Placeholder-DIY-Steps/DIY-Prep-Area.jpg" alt="" class="img-fluid">
											</div>
											<p class="tab-block__wrapper--video-heading">Closets To Go Custom DIY Closets = Easy yet Professional Results!</p>

											<div class="row row-with-desctop-border-bottom">
												<div class="col-12 col-sm-6">
													<p class="flex-p">
<img src="<?php echo SITEROOT; ?>images/passage-of-time.svg" alt="">
														Just 4-6 hours to install a 10 x 10 closet.
													</p>
												</div>
												<div class="col-12 col-sm-6">
													<p class="flex-p underlined-text">
<img src="<?php echo SITEROOT; ?>images/security-yellow.svg" alt="">
														100% Perfect Fit Guarantee
													</p>
												</div>
												<div class="col-12 col-sm-6">
													<div class="first-fixed-block__text-group--items">
<img src="<?php echo SITEROOT; ?>images/package.svg" alt="">
														<div class="first-fixed-block__text-group--text">
															<p><?php echo $count_diy_inst; ?></p>
															<p>Successful DIY Installations</p>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-6">
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">William Gumpenberger, Feb 8, 2021</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"I installed the system with no help and the directions supplied were easy to understand"</p>
															</a>
														</div>
													</div>
												</div>
											</div>

											<div class="mt-5 desktop-show" id="customerTestimonialsTwo">
												<p class="tab-block__wrapper--heading">Customer testimonials</p>

												<div class="stars-wrapper diy-instructions js-diy-detached-div">
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">

																<?php echo $stars; ?>
															</div>
															<p class="first-text">Michael Schoen, 2 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"The directions are easy to follow which creates a pain free installation."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Maria Faaeteete, March 29, 2020</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"If we can do it, you can do it!"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Kevin Edie, 2 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Install was much easier than expected"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Terrie Biggs, 6 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"so pleased at the perfect fit and ease of installation"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">AT, a year ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Not only did we have detailed instructions, but the personal cell number of an employee that we could call with any install questions."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Chester, a year ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Design came out exactly as hoped."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Ben C, 12/03/2019</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Installation was a breeze, everything was labeled and according to the design."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Paul Schafer, 10/03/2016</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Closets To Go is simply fantastic! Very easy to work with…"</p>
															</a>
														</div>
													</div>
												</div>
											</div>
											<!-- 
											<div class="mt-4 mobile-show">
												<button id="custButton22" title="Customer video testimonials" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#customerVideo" data-toggle="modal" data-target="#mobile-diy-modal">
													Customer video testimonials
												</button>
												<div class="custContent22" id="cust22">
													<p style="display: block; padding: 0 0.75rem;">
													<iframe width="330" height="300" src="https://www.youtube.com/embed/_OVBgaG6F5Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
													</p>
												</div> -->

											<!-- <button title="Installation video Library" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#instalationVideo" data-toggle="modal" data-target="#mobile-diy-modal">
													Installation video Library
												</button> -->
											<!-- <button title="Customer testimonials" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#customerTestimonialsOne" data-toggle="modal" data-target="#mobile-diy-modal">
													Customer testimonials
												</button> -->
											<!-- </div> -->
										</div>
									</div>
								</div>
							</div>

							<!-- <script>
								var button22 = document.getElementById('custButton22');
								var div22 = document.getElementById('cust22');

								div22.style.display = 'none';

								button22.onclick = function() {
									if (div22.style.display !== 'none') {
										div22.style.display = 'none';
									} else {
										div22.style.display = 'block';
									}
								};
							</script> -->

							<div class="tab-block__wrapper" id="tab-content-3">
								<div class="row">
									<div class="col-12 col-lg-6">
										<div class="tab-block__wrapper--content">
											<p class="tab-block__wrapper--heading with-button">
												<span>Locate Box “Mixed Pack Open First”:</span>
												<!-- <a href="#" title="Watch Video" class="video-button">
													<span>watch video</span>
												</a> -->
											</p>

											<p class="tab-block__wrapper--tools">Tools Required</p>
											<div class="tab-block__wrapper--image-wrap">
												<button title="Left" class="tab-block__wrapper--image-wrap__prev" style="display: none">
													<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
														<path d="M0 0h24v24H0V0z" fill="none"></path>
														<path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"></path>
													</svg>
												</button>
												<div class="tab-block__wrapper--image-content">
													<div class="image-group" style="width: 110px;">
														<?php echo $icon_id_BoxKnife; ?>
													</div>
													<div class="image-group" style="width: 110px;border-color: white;">


													</div>
													<div class="image-group" style="width: 110px;border-color: white;">

													</div>
													<div class="image-group" style="width: 110px;border-color: white;">

													</div>
													<div class="image-group" style="width: 110px; border-color: white;">


													</div>
												</div>
												<button title="Right" class="tab-block__wrapper--image-wrap__next">
													<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
														<path d="M0 0h24v24H0V0z" fill="none"></path>
														<path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path>
													</svg>
												</button>
											</div>

											<div class="mt-4 mobile-show">
												<button id="descButton3" title="Description" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#collapseTwo-one" data-toggle="modal" data-target="#mobile-diy-modal">
													Locate Box “Mixed Pack Open First”:
												</button>
												<div class="descContent3" id="desc3">
													<p style="display:block; padding: 0 0.75rem;">
														By now you should have received your custom closet organizer which has been carefully and neatly packaged, shrink wrapped on a pallet and labeled according to room name and wall location(s).
														<br>
														Right about now you may be thinking, “what did I get myself into” as you’re looking at the size of the pallet and contemplating how you’re going to haul all these boxes into your house? To ease your mind a bit, the bulk of the shipment is packaging material, meaning, when it’s all boiled down, the actual closet parts constitute ⅓ of the volume. (leaving the remaining as recyclable materials which have been designed to break down into easy to manage pieces). Now that we have that out of the way, the next step is to cut the plastic banding that secures the boxes to the pallet. Use a box knife or shear scissors to cut through the straps. <b style="text-decoration: underline;">CAUTION:</b> the straps are under pressure and may pop up towards you when cut, so proceed with caution by wearing safety glasses and turning your head away from the straps to avoid injury to your face. Next, remove the stretch film from the stacked boxes using a box utility knife to carefully cut through the wrapping being careful not to cut into the boxes. Proceed to remove the stretch film to access the individual boxes stacked on the pallet. Look for the box marked “<b>Mixed Pack Open First</b>” which is where you’ll find the installation instructions, plans for each room as well as any loose hardware needed to complete your install.
														<br>
														In your curated Installation manual you’ll see specific instructions based on the actual room designs which may vary from room to room depending on the features or components each room includes. Additionally, there will be copies of your closet design(s) for each room containing a plan view (birds eye view looking down on the room) and wall elevation views (view looking at each wall head on) which will also include specific details/notes per each room. Some of these details will include where to mount the fixing rail or where to start in the case of corner shelves or two piece hutches, doubled stacked sections etc..
														<br>
														Take a moment to review the installation manual as well as the closet designs and familiarize yourself with the installation steps before getting started. This way you’ll avoid getting a head of yourself and ensure a quick and easy installation experience!!
													</p>
												</div>
											</div>

											<script>
												var button3 = document.getElementById('descButton3');
												var div3 = document.getElementById('desc3');

												div3.style.display = 'none';

												button3.onclick = function() {
													if (div3.style.display !== 'none') {
														div3.style.display = 'none';
													} else {
														div3.style.display = 'block';
													}
												};
											</script>

											<div class="mt-5 desktop-show">
												<div id="accordionTwo">
													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="headingTwo-one" data-toggle="collapse" data-target="#collapseTwo-one" aria-expanded="false" aria-controls="collapseTwo-one">
															<p class="card-collapse__title">
																<span>Locate Box “Mixed Pack Open First”:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
																</h5>
														</div>

														<div id="collapseTwo-one" class="collapse" aria-labelledby="headingTwo-one" data-parent="#accordionTwo">
															<div class="card-collapse__body js-diy-detached-div">
																<p>
																By now you should have received your custom closet organizer which has been carefully and neatly packaged, shrink wrapped on a pallet and labeled according to room name and wall location(s).
																<br>
Right about now you may be thinking, “what did I get myself into” as you’re looking at the size of the pallet and contemplating how you’re going to haul all these boxes into your house? To ease your mind a bit, the bulk of the shipment is packaging material, meaning, when it’s all boiled down, the actual closet parts constitute ⅓ of the volume. (leaving the remaining as recyclable materials which have been designed to break down into easy to manage pieces). Now that we have that out of the way, the next step is to cut the plastic banding that secures the boxes to the pallet. Use a box knife or shear scissors to cut through the straps. <b style="text-decoration: underline;">CAUTION:</b> the straps are under pressure and may pop up towards you when cut, so proceed with caution by wearing safety glasses and turning your head away from the straps to avoid injury to your face. Next, remove the stretch film from the stacked boxes using a box utility knife to carefully cut through the wrapping being careful not to cut into the boxes. Proceed to remove the stretch film to access the individual boxes stacked on the pallet. Look for the box marked “<b>Mixed Pack Open First</b>” which is where you’ll find the installation instructions, plans for each room as well as any loose hardware needed to complete your install.
<br>
In your curated Installation manual you’ll see specific instructions based on the actual room designs which may vary from room to room depending on the features or components each room includes. Additionally, there will be copies of your closet design(s) for each room containing a plan view (birds eye view looking down on the room) and wall elevation views (view looking at each wall head on) which will also include specific details/notes per each room. Some of these details will include where to mount the fixing rail or where to start in the case of corner shelves or two piece hutches, doubled stacked sections etc..
<br>
Take a moment to review the installation manual as well as the closet designs and familiarize yourself with the installation steps before getting started. This way you’ll avoid getting a head of yourself and ensure a quick and easy installation experience!!
																</p>


															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="mt-5 desktop-show" id="helpfulTipTwo">
												<!-- <p class="tab-block__wrapper--heading">Helpful tips</p> -->

												<!-- <div class="js-diy-detached-div" id="secondAccordionTwo">
													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingTwo-one" data-toggle="collapse" data-target="#secondCollapseTwo-one" aria-expanded="false" aria-controls="secondCollapseTwo-one">
															<p class="card-collapse__title">
																<span>Installing long rails:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseTwo-one" class="collapse" aria-labelledby="secondHeadingTwo-one" data-parent="#secondAccordionTwo">
															<div class="card-collapse__body">
																When installing a rail that is over 4’ in length, it’s best to attach the rail as near to the center line as possible as it helps the installer to balance the rail along the marked rail line to ensure the rail maintains a level position along the line.
															</div>
														</div>
													</div>

													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingTwo-two" data-toggle="collapse" data-target="#secondCollapseTwo-two" aria-expanded="false" aria-controls="secondCollapseTwo-two">
															<p class="card-collapse__title">
																<span>Installing Rails for sections with corner shelves:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseTwo-two" class="collapse" aria-labelledby="secondHeadingTwo-two" data-parent="#secondAccordionTwo">
															<div class="card-collapse__body">
																Corner shelves are 90 degree shelves which meet in the corner on two adjacent walls. It’s important to install the rails that meet in the corner according to the elevation plans, installing the wall rail marked “Install 1st” as these wall rails are cut to account for the the 2nd rails thickness and is cut to abut to the 1st rail where they meet at the corner.


																<div class="mt-4 mb-3 card-collapse__body--images">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-1.png" alt="" class="img-fluid">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-2.png" alt="" class="img-fluid">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-3.png" alt="" class="img-fluid">
																</div>
															</div>
														</div>
													</div>

													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingTwo-three" data-toggle="collapse" data-target="#secondCollapseTwo-three" aria-expanded="false" aria-controls="secondCollapseTwo-three">
															<p class="card-collapse__title">
																<span>Installing Rails on walls with sloped ceilings:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseTwo-three" class="collapse" aria-labelledby="secondHeadingTwo-three" data-parent="#secondAccordionTwo">
															<div class="card-collapse__body">
																When preparing your installation for rooms with sloped ceilings, note the different planes that a section or a group of sections are positioned to accommodate the slope. The position of each rail has been computed at a specific distance from each other so all sections which step down from the previous section will remain level and align to all machined holes for shelving, hanging bars and drawers etc..
																<br><br>
																Start with the rail that is at the highest position and attach making sure to use a toggler at the open end(s) for support should no stud be available to attach too. Next position the section panels and shelves in place that corresponds to the room elevation wall view. Make note if any filler pieces are called out to include for the filler piece when accounting for the overall width of the section. (Please see the filler dimensions on the wall elevation view). Do not secure these section(s) to the rail but rather install them loosely as they are intended to help with reference points on where to install the next rail. With the last side panel in place for the highest point of the sloped ceiling section(s) use your level to plumb the side and mark its position on the wall using a pencil. Remove the section panel and corresponding shelves to install the next rail following the wall elevation notes for the next rail height location. Besure to use togglers on both ends of the rail should no stud be available to secure the rail too. Continue installing the remaining rails following this procedure.

															</div>
														</div>
													</div>

													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingTwo-four" data-toggle="collapse" data-target="#secondCollapseTwo-four" aria-expanded="false" aria-controls="secondCollapseTwo-four">
															<p class="card-collapse__title">
																<span>Splicing Rails:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseTwo-four" class="collapse" aria-labelledby="secondHeadingTwo-four" data-parent="#secondAccordionTwo">
															<div class="card-collapse__body">
																Any wall that is longer than 8’ that will have sections installed on will require two or more rails. To prepare the rails for installation, you’ll need to have on hand a drill with a ½” bit along with a typical screw gun. Once the rails for any given wall have been identified by its room name and wall label (typically on the back side of the rail, opposite the rail cover) you’ll be able to determine the number of splices required for the wall by the number of rails labeled for that wall. Starting with the longest rail, position the rail above the rail line installing a 2 ½” screw near the center point of the rail. With a single screw near the centerpoint, position the rail on the rail line and mark a point approx 1” in from the end of the rail to locate your toggler (should no stud be present at the spliced joint) Dril ½” hole aligning with the holes in the Fixing rail and secure the toggler into the sheetrock. Using the toggle screw, secure the end of the rail to the wall and continue to secure the rail along the remaining stud locations. Repeat the process for the remaining rail.
															</div>
														</div>
													</div>
												</div> -->
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-6">
										<div class="tab-block__wrapper--video-block">
											<div class="tab-block__wrapper--video-video">
<img src="<?php echo SITEROOT; ?>images/Placeholder-DIY-Steps/DIY-Steps-Unboxing.jpg" alt="" class="img-fluid">
											</div>
											<p class="tab-block__wrapper--video-heading">Closets To Go Custom DIY Closets = Easy yet Professional Results!</p>

											<div class="row row-with-desctop-border-bottom">
												<div class="col-12 col-sm-6">
													<p class="flex-p">
<img src="<?php echo SITEROOT; ?>images/passage-of-time.svg" alt="">
														Just 4-6 hours to install a 10 x 10 closet.
													</p>
												</div>
												<div class="col-12 col-sm-6">
													<p class="flex-p underlined-text">
														<img src="<?php echo SITEROOT; ?>images/security-yellow.svg" alt="">
														100% Perfect Fit Guarantee
													</p>
												</div>
												<div class="col-12 col-sm-6">
													<div class="first-fixed-block__text-group--items">
<img src="<?php echo SITEROOT; ?>images/package.svg" alt="">
														<div class="first-fixed-block__text-group--text">
															<p><?php echo $count_diy_inst; ?></p>
															<p>Successful DIY Installations</p>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-6">
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">William Gumpenberger, Feb 8, 2021</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"I installed the system with no help and the directions supplied were easy to understand"</p>
															</a>
														</div>
													</div>
												</div>
											</div>

											<div class="mt-5 desktop-show" id="customerTestimonialsTwo">
												<p class="tab-block__wrapper--heading">Customer testimonials</p>

												<div class="stars-wrapper diy-instructions js-diy-detached-div">
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">

																<?php echo $stars; ?>
															</div>
															<p class="first-text">Michael Schoen, 2 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"The directions are easy to follow which creates a pain free installation."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Maria Faaeteete, March 29, 2020</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"If we can do it, you can do it!"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Kevin Edie, 2 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Install was much easier than expected"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Terrie Biggs, 6 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"so pleased at the perfect fit and ease of installation"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">AT, a year ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Not only did we have detailed instructions, but the personal cell number of an employee that we could call with any install questions."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Chester, a year ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Design came out exactly as hoped."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Ben C, 12/03/2019</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Installation was a breeze, everything was labeled and according to the design."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Paul Schafer, 10/03/2016</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Closets To Go is simply fantastic! Very easy to work with…"</p>
															</a>
														</div>
													</div>
												</div>
											</div>

											<!-- <div class="mt-4 mobile-show">
												<button id="custButton33" title="Customer video testimonials" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#customerVideo" data-toggle="modal" data-target="#mobile-diy-modal">
													Customer video testimonials
												</button>
												<div class="custContent33" id="cust33">
													<p style="display: block; padding: 0 0.75rem;">
													<iframe width="330" height="300" src="https://www.youtube.com/embed/XINCPrtiGaM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
													</p>
												</div> -->

											<!-- <button title="Installation video Library" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#instalationVideo" data-toggle="modal" data-target="#mobile-diy-modal">
													Installation video Library
												</button> -->
											<!-- <button title="Customer testimonials" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#customerTestimonialsOne" data-toggle="modal" data-target="#mobile-diy-modal">
													Customer testimonials
												</button> -->
											<!-- </div> -->
										</div>
									</div>
								</div>
							</div>

							<!-- <script>
								var button33 = document.getElementById('custButton33');
								var div33 = document.getElementById('cust33');

								div33.style.display = 'none';

								button33.onclick = function() {
									if (div33.style.display !== 'none') {
										div33.style.display = 'none';
									} else {
										div33.style.display = 'block';
									}
								};
							</script> -->

							<div class="tab-block__wrapper" id="tab-content-4">
								<div class="row">
									<div class="col-12 col-lg-6">
										<div class="tab-block__wrapper--content">
											<p class="tab-block__wrapper--heading with-button">
												<span>Staging Panels & Parts Streamlines Installation:</span>
												<!-- <a href="#" title="Watch Video" class="video-button">
													<span>watch video</span>
												</a> -->
											</p>

											<p class="tab-block__wrapper--tools">Tools Required</p>
											<div class="tab-block__wrapper--image-wrap">
												<button title="Left" class="tab-block__wrapper--image-wrap__prev" style="display: none">
													<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
														<path d="M0 0h24v24H0V0z" fill="none"></path>
														<path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"></path>
													</svg>
												</button>
												<div class="tab-block__wrapper--image-content">
													<div class="image-group" style="width: 110px;">
														<?php echo $icon_id_MuscleTool; ?>
													</div>
													<div class="image-group" style="width: 110px;border-color: white;">


													</div>
													<div class="image-group" style="width: 110px;border-color: white;">

													</div>
													<div class="image-group" style="width: 110px;border-color: white;">


													</div>
													<div class="image-group" style="width: 110px; border-color: white;">


													</div>
												</div>
												<button title="Right" class="tab-block__wrapper--image-wrap__next">
													<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
														<path d="M0 0h24v24H0V0z" fill="none"></path>
														<path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path>
													</svg>
												</button>
											</div>

											<div class="mt-4 mobile-show">
												<button id="descButton4" title="Description" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#collapseTwo-one" data-toggle="modal" data-target="#mobile-diy-modal">
												Staging Panels & Parts Streamlines Installation:

												</button>
												<div class="descContent4" id="desc4">
													<p style="display:block; padding: 0 0.75rem;">
														We recommend moving all the boxes into your garage or any large open area on the ground floor. (easier to manage the recycling of the cardboard as well as minimizing the efforts to bring the materials into each room) Proceed to remove the contents of all boxes making sure not to unwrap any group of shelves as they are labeled according to room name, wall location and section number. (Note all side panels will have the room label just above the hanging bracket corresponding to each room based on wall label and panel number sequenced from left to right in numerical order.
													</p>
												</div>
												<button id="descButton5" title="Helpful tip section" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#helpfulTipTwo" data-toggle="modal" data-target="#mobile-diy-modal">
													Helpful tips
												</button>
												<div class="descContent5" id="desc5">
													<p class="display:block; padding: 0 0.75rem;">
														<b>Unpackaging Everything:</b><br>
														While you may have in mind to only install one closet at a time, opening only those boxes that contain that room's parts will add considerable time to your installation efforts. Again, it’s best to open all boxes, identify room and wall location, and bring those parts into an adjacent room where you can access the parts during the installation process. By following this simple step, you eliminate trying to locate specific boxes to specific rooms (especially on larger orders) and just remain focused on opening and unpackaging all the boxes, identifying parts and bringing them into the appropriate room(s)
														<b>Hired Help:</b><br>
														To fully utilize your installer's skill in performing the installation, we recommend staging the house yourself or hiring some high school / college kids to help with that task as it requires no skills other than a bit of muscle or effort one might expect during a workout! By following this simple suggestion, the time required in performing the actual installation is greatly reduced saving you the extra expense otherwise incurred by your installer not having to charge you for his time for performing manual labor. This way your installer can remain focused on the installation process resulting in overall cost savings etc..
													</p>
												</div>
											</div>

											<script>
												var button4 = document.getElementById('descButton4');
												var div4 = document.getElementById('desc4');

												var button5 = document.getElementById('descButton5');
												var div5 = document.getElementById('desc5');

												div4.style.display = 'none';
												div5.style.display = 'none';

												button4.onclick = function() {
													if (div4.style.display !== 'none') {
														div4.style.display = 'none';
													} else {
														div4.style.display = 'block';
													}
												};
												button5.onclick = function() {
													if (div5.style.display !== 'none') {
														div5.style.display = 'none';
													} else {
														div5.style.display = 'block';
													}
												};
											</script>

											<div class="mt-5 desktop-show">
												<div id="accordionTwo">
													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="headingTwo-one" data-toggle="collapse" data-target="#collapseTwo-one" aria-expanded="false" aria-controls="collapseTwo-one">
															<p class="card-collapse__title">
																<span>Staging Panels & Parts Streamlines Installation:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
																</h5>
														</div>

														<div id="collapseTwo-one" class="collapse" aria-labelledby="headingTwo-one" data-parent="#accordionTwo">
															<div class="card-collapse__body js-diy-detached-div">
																<p>
																	We recommend moving all the boxes into your garage or any large open area on the ground floor. (easier to manage the recycling of the cardboard as well as minimizing the efforts to bring the materials into each room) Proceed to remove the contents of all boxes making sure not to unwrap any group of shelves as they are labeled according to room name, wall location and section number. (Note all side panels will have the room label just above the hanging bracket corresponding to each room based on wall label and panel number sequenced from left to right in numerical order.
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="mt-5 desktop-show" id="helpfulTipTwo">
												<p class="tab-block__wrapper--heading">Helpful tips</p>

												<div class="js-diy-detached-div" id="secondAccordionTwo">
													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingTwo-one" data-toggle="collapse" data-target="#secondCollapseTwo-one" aria-expanded="false" aria-controls="secondCollapseTwo-one">
															<p class="card-collapse__title">
																<span>Unpackaging Everything: </span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseTwo-one" class="collapse" aria-labelledby="secondHeadingTwo-one" data-parent="#secondAccordionTwo">
															<div class="card-collapse__body">
																While you may have in mind to only install one closet at a time, opening only those boxes that contain that room's parts will add considerable time to your installation efforts. Again, it’s best to open all boxes, identify room and wall location, and bring those parts into an adjacent room where you can access the parts during the installation process. By following this simple step, you eliminate trying to locate specific boxes to specific rooms (especially on larger orders) and just remain focused on opening and unpackaging all the boxes, identifying parts and bringing them into the appropriate room(s)
															</div>
														</div>
													</div>

													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingTwo-three" data-toggle="collapse" data-target="#secondCollapseTwo-three" aria-expanded="false" aria-controls="secondCollapseTwo-three">
															<p class="card-collapse__title">
																<span>Hired Help:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseTwo-three" class="collapse" aria-labelledby="secondHeadingTwo-three" data-parent="#secondAccordionTwo">
															<div class="card-collapse__body">
																To fully utilize your installer's skill in performing the installation, we recommend staging the house yourself or hiring some high school / college kids to help with that task as it requires no skills other than a bit of muscle or effort one might expect during a workout! By following this simple suggestion, the time required in performing the actual installation is greatly reduced saving you the extra expense otherwise incurred by your installer not having to charge you for his time for performing manual labor. This way your installer can remain focused on the installation process resulting in overall cost savings etc..

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-6">
										<div class="tab-block__wrapper--video-block">
											<div class="tab-block__wrapper--video-video">
<img src="<?php echo SITEROOT; ?>images/Placeholder-DIY-Steps/staging.jpg" alt="" class="img-fluid">
											</div>
											<p class="tab-block__wrapper--video-heading">Closets To Go Custom DIY Closets = Easy yet Professional Results!</p>

											<div class="row row-with-desctop-border-bottom">
												<div class="col-12 col-sm-6">
													<p class="flex-p">
<img src="<?php echo SITEROOT; ?>images/passage-of-time.svg" alt="">
														Just 4-6 hours to install a 10 x 10 closet.
													</p>
												</div>
												<div class="col-12 col-sm-6">
													<p class="flex-p underlined-text">
<img src="<?php echo SITEROOT; ?>images/security-yellow.svg" alt="">
														100% Perfect Fit Guarantee
													</p>
												</div>
												<div class="col-12 col-sm-6">
													<div class="first-fixed-block__text-group--items">
<img src="<?php echo SITEROOT; ?>images/package.svg" alt="">
														<div class="first-fixed-block__text-group--text">
															<p><?php echo $count_diy_inst; ?></p>
															<p>Successful DIY Installations</p>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-6">
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">William Gumpenberger, Feb 8, 2021</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"I installed the system with no help and the directions supplied were easy to understand"</p>
															</a>
														</div>
													</div>
												</div>
											</div>

											<div class="mt-5 desktop-show" id="customerTestimonialsTwo">
												<p class="tab-block__wrapper--heading">Customer testimonials</p>

												<div class="stars-wrapper diy-instructions js-diy-detached-div">
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">

																<?php echo $stars; ?>
															</div>
															<p class="first-text">Michael Schoen, 2 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"The directions are easy to follow which creates a pain free installation."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Maria Faaeteete, March 29, 2020</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"If we can do it, you can do it!"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Kevin Edie, 2 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Install was much easier than expected"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Terrie Biggs, 6 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"so pleased at the perfect fit and ease of installation"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">AT, a year ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Not only did we have detailed instructions, but the personal cell number of an employee that we could call with any install questions."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Chester, a year ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Design came out exactly as hoped."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Ben C, 12/03/2019</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Installation was a breeze, everything was labeled and according to the design."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Paul Schafer, 10/03/2016</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Closets To Go is simply fantastic! Very easy to work with…"</p>
															</a>
														</div>
													</div>
												</div>
											</div>

											<!-- <div class="mt-4 mobile-show">
												<button id="custButton44" title="Customer video testimonials" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#customerVideo" data-toggle="modal" data-target="#mobile-diy-modal">
													Customer video testimonials
												</button>
												<div class="custContent44" id="cust44">
													<p style="display: block; padding: 0 0.75rem;">
													<iframe width="330" height="300" src="https://www.youtube.com/embed/Uknp66eawx8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
													</p>
												</div> -->

											<!-- <button title="Installation video Library" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#instalationVideo" data-toggle="modal" data-target="#mobile-diy-modal">
													Installation video Library
												</button> -->
											<!-- <button title="Customer testimonials" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#customerTestimonialsOne" data-toggle="modal" data-target="#mobile-diy-modal">
													Customer testimonials
												</button> -->
											<!-- </div> -->
										</div>
									</div>
								</div>
							</div>
							<!-- 
							<script>
								var button44 = document.getElementById('custButton44');
								var div44 = document.getElementById('cust44');

								div44.style.display = 'none';

								button44.onclick = function() {
									if (div44.style.display !== 'none') {
										div44.style.display = 'none';
									} else {
										div44.style.display = 'block';
									}
								};
							</script> -->
							<div class="tab-block__wrapper" id="tab-content-5">
								<div class="row">
									<div class="col-12 col-lg-6">
										<div class="tab-block__wrapper--content">
											<p class="tab-block__wrapper--heading with-button">
												<span>Mark Line For Proper Install of Hanging Rail:</span>
												<!-- <a href="#" title="Watch Video" class="video-button">
													<span>watch video</span>
												</a> -->
											</p>

											<p class="tab-block__wrapper--tools">Tools Required</p>
											<div class="tab-block__wrapper--image-wrap">
												<button title="Left" class="tab-block__wrapper--image-wrap__prev" style="display: none">
													<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
														<path d="M0 0h24v24H0V0z" fill="none"></path>
														<path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"></path>
													</svg>
												</button>
												<div class="tab-block__wrapper--image-content">
													<div class="image-group" style="width: 110px;">

														<?php echo $icon_id_TapeMeasureTool; ?>
													</div>
													<div class="image-group" style="width: 110px;">
														<?php echo $icon_id_LevelTool; ?>
													</div>
													<div class="image-group" style="width: 110px;">
														<?php echo $icon_id_StudFinderTool; ?>
													</div>
													<div class="image-group" style="width: 110px;">
														<?php echo $icon_id_PencilTool; ?>

													</div>
													<div class="image-group" style="width: 110px;">
														<?php echo $icon_id_StepLadderTool; ?>
													</div>
												</div>
												<button title="Right" class="tab-block__wrapper--image-wrap__next">
													<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
														<path d="M0 0h24v24H0V0z" fill="none"></path>
														<path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path>
													</svg>
												</button>
											</div>

											<div class="mt-4 mobile-show">
												<button id="descButton6" title="Description" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#collapseFour-one" data-toggle="modal" data-target="#mobile-diy-modal">
												Mark Line For Proper Install of Hanging Rail:
												</button>
												<div class="descContent6" id="desc6">
													<p style="display:block; padding: 0 0.75rem;">
														For proper rail placement and height location, please reference your room elevation view for each wall’s rail placement. The position of the rail will be indicated on the elevation drawing with the rail heights referenced from the bottom of the rail to the floor. In the case of floor based systems, you’ll need to establish any high spots on the floor by using a level or laser level to ensure the sections properly meet at adjacent walls as well as maintain a level plane. (See helpful tips for further details).

														Using a pencil and level, follow the instructions per room drawing and note the rail placement and height for each wall. Mark a line along the wall at the height indicated using your level to maintain a straight and level line. Locate studs along the wall using a stud finder and marking their location just above the rail line for future reference.. For concrete walls, using a wall anchor every 16” will suffice when noting where to locate rail attachment points along the fixing rail.
													</p>
												</div>

												<button id="descButton7" title="Helpful tip section" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#helpfulTipFour" data-toggle="modal" data-target="#mobile-diy-modal">
													Helpful tips
												</button>
												<div class="descContent7" id="desc7">
													<p style="display:block; padding: 0 0.75rem;">
														<b>Measuring off of carpet floors:</b><br>
														Carpeted floors can present some challenges with how to get an accurate measurement due to the loose carpet fibers or pad types. There are two types of carpet, Shag carpet and Pile carpet. Pile carpet is typically a more dense carpet with shorter fibers and a more densely woven weave. When measuring off this type of carpet one just needs to position the end of your tape measure to easily rest on the top of the weave (not pressing hard) and measure the height.

														For measuring off of Shag carpet, a slightly different method is needed in that you must slightly detent the end of the tape measure into the shag weave. Again, we emphasize “slight detent” where the end of the tape measure is slightly pushed into the weave using slight pressure. For best results, measure at the same position twice to ensure accurate measurements and to get the feel how to apply slight pressure for consistent results!
														<br>
														<b>Floor mounted section:</b><br>
														Determine if there is a slope to the floor and reference the rail height from the high spot of the floor. This will ensure all sections will maintain a level plane along all adjacent walls. See tips on how to use different types of laser to determine floor slope.
														<br>
														<b>Using a laser level:</b><br>
														To determine if there is a slope to the floor, set your laser level 3’ from the floor in a plumb and level position centered in the room. Measure the laser line along the walls down to the finished floor to determine if the distance from the laser line varies to the floor. A floor can be considered fairly flat if the variation between the laser line and the floor deviates no more than a ¼” . Mark your rail height at the highest position along any wall to ensure all sections maintain a level position.
														<br>
														<b>Using a level:</b><br>
														Using a 4-6’ level, place the level along the floor around the perimeter walls of the room where the closet will be installed. Make note of any height deviation and reference your rail height from the highest point along any wall using that height as your base height to mark your line at.
														<br>
														<b>How to use a stud finder:</b><br>
														Stud finders come in various forms, from electronic versions to magnetic versions. While most people are familiar with the electronic version it tends to add a bit more complexity to finding exact stud location which seem to vary by different models. To simplify the finding of studs, using a magnetic stud finder is simple to use and highly accurate in that it will easily locate the screw or nails behind the sheetrock to indicate center line of any stud. Once a stud is located, measure the distance usually 16” between studs and mark all stud locations along the rail line for further reference. Some studs are 24” on center, so in those cases you’ll need to add additional support between the studs using togglers. (See how to use toggles in the PDF version of the installation manual).
														<br>
													</p>
												</div>
											</div>

											<script>
												var button6 = document.getElementById('descButton6');
												var div6 = document.getElementById('desc6');

												var button7 = document.getElementById('descButton7');
												var div7 = document.getElementById('desc7');

												div6.style.display = 'none';

												div7.style.display = 'none';

												button6.onclick = function() {
													if (div6.style.display !== 'none') {
														div6.style.display = 'none';
													} else {
														div6.style.display = 'block';
													}
												};

												button7.onclick = function() {
													if (div7.style.display !== 'none') {
														div7.style.display = 'none';
													} else {
														div7.style.display = 'block';
													}
												};
											</script>

											<div class="mt-5 desktop-show">
												<div id="accordionFour">
													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="headingFour-one" data-toggle="collapse" data-target="#collapseFour-one" aria-expanded="false" aria-controls="collapseFour-one">
															<p class="card-collapse__title">
																<span>How to indicate where to place hanging rail:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
																</h5>
														</div>

														<div id="collapseFour-one" class="collapse" aria-labelledby="headingFour-one" data-parent="#accordionFour">
															<div class="card-collapse__body js-diy-detached-div">
																<p>
																	For proper rail placement and height location, please reference your room elevation view for each wall’s rail placement. The position of the rail will be indicated on the elevation drawing with the rail heights referenced from the bottom of the rail to the floor. In the case of floor based systems, you’ll need to establish any high spots on the floor by using a level or laser level to ensure the sections properly meet at adjacent walls as well as maintain a level plane. (See helpful tips for further details).
																	<br><br>
																	Using a pencil and level, follow the instructions per room drawing and note the rail placement and height for each wall. Mark a line along the wall at the height indicated using your level to maintain a straight and level line. Locate studs along the wall using a stud finder and marking their location just above the rail line for future reference.. For concrete walls, using a wall anchor every 16” will suffice when noting where to locate rail attachment points along the fixing rail.

																</p>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="mt-5 desktop-show" id="helpfulTipFour">

												<p class="tab-block__wrapper--heading">Helpful tips</p>

												<div class="js-diy-detached-div" id="secondAccordionFour">
													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingFour-one" data-toggle="collapse" data-target="#secondCollapseFour-one" aria-expanded="false" aria-controls="secondCollapseFour-one">
															<p class="card-collapse__title">
																<span>Measuring off of carpet floors:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseFour-one" class="collapse" aria-labelledby="secondHeadingFour-one" data-parent="#secondAccordionFour">
															<div class="card-collapse__body">
																Carpeted floors can present some challenges with how to get an accurate measurement due to the loose carpet fibers or pad types. There are two types of carpet, Shag carpet and Pile carpet. Pile carpet is typically a more dense carpet with shorter fibers and a more densely woven weave. When measuring off this type of carpet one just needs to position the end of your tape measure to easily rest on the top of the weave (not pressing hard) and measure the height.
																<br><br>
																For measuring off of Shag carpet, a slightly different method is needed in that you must slightly detent the end of the tape measure into the shag weave. Again, we emphasize “slight detent” where the end of the tape measure is slightly pushed into the weave using slight pressure. For best results, measure at the same position twice to ensure accurate measurements and to get the feel how to apply slight pressure for consistent results!

															</div>
														</div>
													</div>

													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingFour-Four" data-toggle="collapse" data-target="#secondCollapseFour-Four" aria-expanded="false" aria-controls="secondCollapseFour-Four">
															<p class="card-collapse__title">
																<span>Floor mounted section:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseFour-Four" class="collapse" aria-labelledby="secondHeadingFour-Four" data-parent="#secondAccordionFour">
															<div class="card-collapse__body">
																Determine if there is a slope to the floor and reference the rail height from the high spot of the floor. This will ensure all sections will maintain a level plane along all adjacent walls. See tips on how to use different types of laser to determine floor slope.

															</div>
														</div>
													</div>

													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingFour-three" data-toggle="collapse" data-target="#secondCollapseFour-three" aria-expanded="false" aria-controls="secondCollapseFour-three">
															<p class="card-collapse__title">
																<span>Using a laser level:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseFour-three" class="collapse" aria-labelledby="secondHeadingFour-three" data-parent="#secondAccordionFour">
															<div class="card-collapse__body">
																To determine if there is a slope to the floor, set your laser level 3’ from the floor in a plumb and level position centered in the room. Measure the laser line along the walls down to the finished floor to determine if the distance from the laser line varies to the floor. A floor can be considered fairly flat if the variation between the laser line and the floor deviates no more than a ¼” . Mark your rail height at the highest position along any wall to ensure all sections maintain a level position.

															</div>
														</div>
													</div>



													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingFour-six" data-toggle="collapse" data-target="#secondCollapseFour-six" aria-expanded="false" aria-controls="secondCollapseFour-six">
															<p class="card-collapse__title">
																<span>Using a level:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseFour-six" class="collapse" aria-labelledby="secondHeadingFour-six" data-parent="#secondAccordionFour">
															<div class="card-collapse__body">
																Using a 4-6’ level, place the level along the floor around the perimeter walls of the room where the closet will be installed. Make note of any height deviation and reference your rail height from the highest point along any wall using that height as your base height to mark your line at.
															</div>
														</div>
													</div>
													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingFour-seven" data-toggle="collapse" data-target="#secondCollapseFour-seven" aria-expanded="false" aria-controls="secondCollapseFour-seven">
															<p class="card-collapse__title">
																<span>How to use a stud finder: </span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseFour-seven" class="collapse" aria-labelledby="secondHeadingFour-seven" data-parent="#secondAccordionFour">
															<div class="card-collapse__body">
																Stud finders come in various forms, from electronic versions to magnetic versions. While most people are familiar with the electronic version it tends to add a bit more complexity to finding exact stud location which seem to vary by different models. To simplify the finding of studs, using a magnetic stud finder is simple to use and highly accurate in that it will easily locate the screw or nails behind the sheetrock to indicate center line of any stud. Once a stud is located, measure the distance usually 16” between studs and mark all stud locations along the rail line for further reference. Some studs are 24” on center, so in those cases you’ll need to add additional support between the studs using togglers. (See how to use toggles in the PDF version of the installation manual).
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-6">
										<div class="tab-block__wrapper--video-block">
											<div class="tab-block__wrapper--video-video">
<img src="<?php echo SITEROOT; ?>images/Placeholder-DIY-Steps/DIY-Mark-Line.jpg" alt="" class="img-fluid">
											</div>
											<p class="tab-block__wrapper--video-heading">Closets To Go Custom DIY Closets = Easy yet Professional Results!</p>

											<div class="row row-with-desctop-border-bottom">
												<div class="col-12 col-sm-6">
													<p class="flex-p">
<img src="<?php echo SITEROOT; ?>images/passage-of-time.svg" alt="">
														Just 4-6 hours to install a 10 x 10 closet.
													</p>
												</div>
												<div class="col-12 col-sm-6">
													<p class="flex-p underlined-text">
<img src="<?php echo SITEROOT; ?>images/security-yellow.svg" alt="">
														100% Perfect Fit Guarantee
													</p>
												</div>
												<div class="col-12 col-sm-6">
													<div class="first-fixed-block__text-group--items">
<img src="<?php echo SITEROOT; ?>images/package.svg" alt="">
														<div class="first-fixed-block__text-group--text">
															<p><?php echo $count_diy_inst ?></p>
															<p>Successful DIY Installations</p>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-6">
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">William Gumpenberger, Feb 8, 2021</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"I installed the system with no help and the directions supplied were easy to understand"</p>
															</a>
														</div>
													</div>
												</div>
											</div>

											<div class="mt-5 desktop-show" id="customerTestimonialsFour">
												<p class="tab-block__wrapper--heading">Customer testimonials</p>

												<div class="stars-wrapper diy-instructions js-diy-detached-div">
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Michael Schoen, 2 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"The directions are easy to follow which creates a pain free installation."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Maria Faaeteete, March 29, 2020</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"If we can do it, you can do it!"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Kevin Edie, 2 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Install was much easier than expected"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Terrie Biggs, 6 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"so pleased at the perfect fit and ease of installation"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">AT, a year ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Not only did we have detailed instructions, but the personal cell number of an employee that we could call with any install questions."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Chester, a year ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Design came out exactly as hoped."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Ben C, 12/03/2019</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Installation was a breeze, everything was labeled and according to the design."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Paul Schafer, 10/03/2016</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Closets To Go is simply fantastic! Very easy to work with…"</p>
															</a>
														</div>
													</div>
												</div>
											</div>

											<!-- <div class="mt-4 mobile-show">
												<button id="custButton55" title="Customer video testimonials" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#customerVideo" data-toggle="modal" data-target="#mobile-diy-modal">
													Customer video testimonials
												</button>
												<div class="custContent55" id="cust55">
													<p style="display: block; padding: 0 0.75rem;">
													<iframe width="330" height="300" src="https://www.youtube.com/embed/_OVBgaG6F5Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
													</p>
												</div> -->

											<!-- <button title="Installation video Library" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#instalationVideo" data-toggle="modal" data-target="#mobile-diy-modal">
													Installation video Library
												</button> -->
											<!-- <button title="Customer testimonials" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#customerTestimonialsOne" data-toggle="modal" data-target="#mobile-diy-modal">
													Customer testimonials
												</button> -->
											<!-- </div> -->
										</div>
									</div>
								</div>
							</div>

							<!-- <script>
								var button55 = document.getElementById('custButton55');
								var div55 = document.getElementById('cust55');

								div55.style.display = 'none';

								button55.onclick = function() {
									if (div55.style.display !== 'none') {
										div55.style.display = 'none';
									} else {
										div55.style.display = 'block';
									}
								};
							</script> -->

							<div class="tab-block__wrapper" id="tab-content-6">
								<div class="row">
									<div class="col-12 col-lg-6">
										<div class="tab-block__wrapper--content">
											<p class="tab-block__wrapper--heading with-button">
												<span>Installing Hanging Rail:</span>
												<!-- <a href="#" title="Watch Video" class="video-button">
													<span>watch video</span>
												</a> -->
											</p>

											<p class="tab-block__wrapper--tools">Tools Required</p>
											<div class="tab-block__wrapper--image-wrap">
												<button title="Left" class="tab-block__wrapper--image-wrap__prev" style="display: none">
													<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
														<path d="M0 0h24v24H0V0z" fill="none"></path>
														<path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"></path>
													</svg>
												</button>
												<div class="tab-block__wrapper--image-content">
													<div class="image-group" style="width: 110px;">

														<?php echo $icon_id_ScrewGunTool; ?>
													</div>
													<div class="image-group" style="width: 110px;">
													<?php echo $icon_id_StepLadderTool; ?>

													</div>
													<div class="image-group" style="width: 110px;">
													<?php echo $icon_id_PencilTool; ?>
													</div>
													<div class="image-group" style="width: 110px; border-color: white;">
														
													</div>
													<div class="image-group" style="width: 110px; border-color: white;">

													</div>
												</div>
												<button title="Right" class="tab-block__wrapper--image-wrap__next">
													<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
														<path d="M0 0h24v24H0V0z" fill="none"></path>
														<path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path>
													</svg>
												</button>
											</div>

											<div class="mt-4 mobile-show">
												<button id="descButton8" title="Description" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#collapseFour-one" data-toggle="modal" data-target="#mobile-diy-modal">
												Installing Hanging Rail:
												</button>
												<div class="descContent8" id="desc8">
													<p style="display: block; padding: 0 0.75rem;">
														The fixing rail also referred to as Hanging Rail has been cut and labeled according to wall and room locations. In some cases (where wall length exceeds the length of a rail) multiple rails may be needed to fit the wall. In these cases, the hanging rail will be spliced together using togglers where the rail meets. We recommend positioning the togglers in from the rail ends a minimum of 1” from the end to avoid weakening the sheetrock between the splice. (See PDF installation manual for further details on how to use Togglers and installing rails that are spliced or end on an open wall.)

														Remove the rail cover (Plastic cover piece covering the face of the rail) Using the 2 1/2” screws provided, attach rail into all studs where previously located in Step 1. On open walls or areas where two rails are spliced together, be sure to install togglers as noted above. Where studs meet in the corner or in cases where the hole in the rail does not align over the stud, using a 3” screw will allow for the rail to be properly secured to the stud as it provides the added length to reach the studs. Using your pencil, position the corresponding rail cover over the rail and transfer the stud location from the secured screws of the rail to the bottom edge of the rail cover. This step is important to assist in the installation of your cleats later on in the installation process.
													</p>
												</div>
												<button id="descButton9" title="Helpful tip section" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#helpfulTipFour" data-toggle="modal" data-target="#mobile-diy-modal">
													Helpful tips
												</button>
												<div class="descButton9" id="desc9">
													<p style="display:block; padding: 0 0.75rem;">
														<b>Installing long rails:</b><br>
														When installing a rail that is over 4’ in length, it’s best to attach the rail as near to the center line as possible as it helps the installer to balance the rail along the marked rail line to ensure the rail maintains a level position along the line.
														<br><b>Installing Rails for sections with corner shelves:</b><br>
														Corner shelves are 90 degree shelves which meet in the corner on two adjacent walls. It’s important to install the rails that meet in the corner according to the elevation plans, installing the wall rail marked “Install 1st” as these wall rails are cut to account for the the 2nd rails thickness and is cut to abut to the 1st rail where they meet at the corner.
														<br><b>Installing Rails on walls with sloped ceilings:</b><br>
														When preparing your installation for rooms with sloped ceilings, note the different planes that a section or a group of sections are positioned to accommodate the slope. The position of each rail has been computed at a specific distance from each other so all sections which step down from the previous section will remain level and align to all machined holes for shelving, hanging bars and drawers etc..
														Start with the rail that is at the highest position and attach making sure to use a toggler at the open end(s) for support should no stud be available to attach too. Next position the section panels and shelves in place that corresponds to the room elevation wall view. Make note if any filler pieces are called out to include for the filler piece when accounting for the overall width of the section. (Please see the filler dimensions on the wall elevation view). Do not secure these section(s) to the rail but rather install them loosely as they are intended to help with reference points on where to install the next rail. With the last side panel in place for the highest point of the sloped ceiling section(s) use your level to plumb the side and mark its position on the wall using a pencil. Remove the section panel and corresponding shelves to install the next rail following the wall elevation notes for the next rail height location. Besure to use togglers on both ends of the rail should no stud be available to secure the rail too. Continue installing the remaining rails following this procedure.
														<br><b>Splicing Rails:</b><br>
														Any wall that is longer than 8’ that will have sections installed on will require two or more rails. To prepare the rails for installation, you’ll need to have on hand a drill with a ½” bit along with a typical screw gun. Once the rails for any given wall have been identified by its room name and wall label (typically on the back side of the rail, opposite the rail cover) you’ll be able to determine the number of splices required for the wall by the number of rails labeled for that wall. Starting with the longest rail, position the rail above the rail line installing a 2 ½” screw near the center point of the rail. With a single screw near the centerpoint, position the rail on the rail line and mark a point approx 1” in from the end of the rail to locate your toggler (should no stud be present at the spliced joint) Dril ½” hole aligning with the holes in the Fixing rail and secure the toggler into the sheetrock. Using the toggle screw, secure the end of the rail to the wall and continue to secure the rail along the remaining stud locations. Repeat the process for the remaining rail.
													</p>
												</div>
											</div>


											<script>
												var button8 = document.getElementById('descButton8');
												var div8 = document.getElementById('desc8');

												var button9 = document.getElementById('descButton9');
												var div9 = document.getElementById('desc9');

												div8.style.display = 'none';
												div9.style.display = 'none';

												button8.onclick = function() {
													if (div8.style.display !== 'none') {
														div8.style.display = 'none';
													} else {
														div8.style.display = 'block';
													}
												};

												button9.onclick = function() {
													if (div9.style.display !== 'none') {
														div9.style.display = 'none';
													} else {
														div9.style.display = 'block';
													}
												};
											</script>

											<div class="mt-5 desktop-show">
												<div id="accordionFour">
													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="headingFour-one" data-toggle="collapse" data-target="#collapseFour-one" aria-expanded="false" aria-controls="collapseFour-one">
															<p class="card-collapse__title">
																<span>Installing Hanging Rail:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
																</h5>
														</div>

														<div id="collapseFour-one" class="collapse" aria-labelledby="headingFour-one" data-parent="#accordionFour">
															<div class="card-collapse__body js-diy-detached-div">
																<p>
																	The fixing rail also referred to as Hanging Rail has been cut and labeled according to wall and room locations. In some cases (where wall length exceeds the length of a rail) multiple rails may be needed to fit the wall. In these cases, the hanging rail will be spliced together using togglers where the rail meets. We recommend positioning the togglers in from the rail ends a minimum of 1” from the end to avoid weakening the sheetrock between the splice. (See PDF installation manual for further details on how to use Togglers and installing rails that are spliced or end on an open wall.)
																	<br><br>
																	Remove the rail cover (Plastic cover piece covering the face of the rail) Using the 2 1/2” screws provided, attach rail into all studs where previously located in Step 1. On open walls or areas where two rails are spliced together, be sure to install togglers as noted above. Where studs meet in the corner or in cases where the hole in the rail does not align over the stud, using a 3” screw will allow for the rail to be properly secured to the stud as it provides the added length to reach the studs. Using your pencil, position the corresponding rail cover over the rail and transfer the stud location from the secured screws of the rail to the bottom edge of the rail cover. This step is important to assist in the installation of your cleats later on in the installation process.


																</p>

																<!-- <div class="mt-4 mb-3 card-collapse__body--images">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-1.png" alt="" class="img-fluid">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-2.png" alt="" class="img-fluid">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-3.png" alt="" class="img-fluid">
																</div> -->
															</div>
														</div>
													</div>


												</div>
											</div>

											<div class="mt-5 desktop-show" id="helpfulTipFour">

												<p class="tab-block__wrapper--heading">Helpful tips</p>

												<div class="js-diy-detached-div" id="secondAccordionFour2">
													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingFour-one1" data-toggle="collapse" data-target="#secondCollapseFour-one1" aria-expanded="false" aria-controls="secondCollapseFour-one1">
															<p class="card-collapse__title">
																<span>Installing long rails:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseFour-one1" class="collapse" aria-labelledby="secondHeadingFour-one1" data-parent="#secondAccordionFour2">
															<div class="card-collapse__body">
																When installing a rail that is over 4’ in length, it’s best to attach the rail as near to the center line as possible as it helps the installer to balance the rail along the marked rail line to ensure the rail maintains a level position along the line.
															</div>
														</div>
													</div>

													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingFour-Four1" data-toggle="collapse" data-target="#secondCollapseFour-Four1" aria-expanded="false" aria-controls="secondCollapseFour-Four1">
															<p class="card-collapse__title">
																<span>Installing Rails for sections with corner shelves:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseFour-Four1" class="collapse" aria-labelledby="secondHeadingFour-Four1" data-parent="#secondAccordionFour2">
															<div class="card-collapse__body">
																Corner shelves are 90 degree shelves which meet in the corner on two adjacent walls. It’s important to install the rails that meet in the corner according to the elevation plans, installing the wall rail marked “Install 1st” as these wall rails are cut to account for the the 2nd rails thickness and is cut to abut to the 1st rail where they meet at the corner.

																<!-- <div class="mt-4 mb-3 card-collapse__body--images">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-1.png" alt="" class="img-fluid">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-2.png" alt="" class="img-fluid">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-3.png" alt="" class="img-fluid">
																</div> -->
															</div>
														</div>
													</div>

													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingFour-three1" data-toggle="collapse" data-target="#secondCollapseFour-three1" aria-expanded="false" aria-controls="secondCollapseFour-three1">
															<p class="card-collapse__title">
																<span>Installing Rails on walls with sloped ceilings:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseFour-three1" class="collapse" aria-labelledby="secondHeadingFour-three1" data-parent="#secondAccordionFour2">
															<div class="card-collapse__body">
																When preparing your installation for rooms with sloped ceilings, note the different planes that a section or a group of sections are positioned to accommodate the slope. The position of each rail has been computed at a specific distance from each other so all sections which step down from the previous section will remain level and align to all machined holes for shelving, hanging bars and drawers etc..
																<br><br>
																Start with the rail that is at the highest position and attach making sure to use a toggler at the open end(s) for support should no stud be available to attach too. Next position the section panels and shelves in place that corresponds to the room elevation wall view. Make note if any filler pieces are called out to include for the filler piece when accounting for the overall width of the section. (Please see the filler dimensions on the wall elevation view). Do not secure these section(s) to the rail but rather install them loosely as they are intended to help with reference points on where to install the next rail. With the last side panel in place for the highest point of the sloped ceiling section(s) use your level to plumb the side and mark its position on the wall using a pencil. Remove the section panel and corresponding shelves to install the next rail following the wall elevation notes for the next rail height location. Besure to use togglers on both ends of the rail should no stud be available to secure the rail too. Continue installing the remaining rails following this procedure.

															</div>
														</div>
													</div>

													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingFour-ten1" data-toggle="collapse" data-target="#secondCollapseFour-ten1" aria-expanded="false" aria-controls="secondCollapseFour-ten1">
															<p class="card-collapse__title">
																<span>Splicing Rails:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseFour-ten1" class="collapse" aria-labelledby="secondHeadingFour-ten1" data-parent="#secondAccordionFour2">
															<div class="card-collapse__body">
																Any wall that is longer than 8’ that will have sections installed on will require two or more rails. To prepare the rails for installation, you’ll need to have on hand a drill with a ½” bit along with a typical screw gun. Once the rails for any given wall have been identified by its room name and wall label (typically on the back side of the rail, opposite the rail cover) you’ll be able to determine the number of splices required for the wall by the number of rails labeled for that wall. Starting with the longest rail, position the rail above the rail line installing a 2 ½” screw near the center point of the rail. With a single screw near the centerpoint, position the rail on the rail line and mark a point approx 1” in from the end of the rail to locate your toggler (should no stud be present at the spliced joint) Dril ½” hole aligning with the holes in the Fixing rail and secure the toggler into the sheetrock. Using the toggle screw, secure the end of the rail to the wall and continue to secure the rail along the remaining stud locations. Repeat the process for the remaining rail.
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-6">
										<div class="tab-block__wrapper--video-block">
											<div class="tab-block__wrapper--video-video">










<img src="<?php echo SITEROOT; ?>images/Placeholder-DIY-Steps/install-rail.jpg" alt="" class="img-fluid">











											</div>
											<p class="tab-block__wrapper--video-heading">Closets To Go Custom DIY Closets = Easy yet Professional Results!</p>

											<div class="row row-with-desctop-border-bottom">
												<div class="col-12 col-sm-6">
													<p class="flex-p">
<img src="<?php echo SITEROOT; ?>images/passage-of-time.svg" alt="">
														Just 4-6 hours to install a 10 x 10 closet.
													</p>
												</div>
												<div class="col-12 col-sm-6">
													<p class="flex-p underlined-text">
<img src="<?php echo SITEROOT; ?>images/security-yellow.svg" alt="">
														100% Perfect Fit Guarantee
													</p>
												</div>
												<div class="col-12 col-sm-6">
													<div class="first-fixed-block__text-group--items">
<img src="<?php echo SITEROOT; ?>images/package.svg" alt="">
														<div class="first-fixed-block__text-group--text">
															<p><?php echo $count_diy_inst ?></p>
															<p>Successful DIY Installations</p>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-6">
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">William Gumpenberger, Feb 8, 2021</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"I installed the system with no help and the directions supplied were easy to understand"</p>
															</a>
														</div>
													</div>
												</div>
											</div>

											<div class="mt-5 desktop-show" id="customerTestimonialsFour">
												<p class="tab-block__wrapper--heading">Customer testimonials</p>

												<div class="stars-wrapper diy-instructions js-diy-detached-div">
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Michael Schoen, 2 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"The directions are easy to follow which creates a pain free installation."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Maria Faaeteete, March 29, 2020</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"If we can do it, you can do it!"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Kevin Edie, 2 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Install was much easier than expected"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Terrie Biggs, 6 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"so pleased at the perfect fit and ease of installation"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">AT, a year ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Not only did we have detailed instructions, but the personal cell number of an employee that we could call with any install questions."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Chester, a year ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Design came out exactly as hoped."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Ben C, 12/03/2019</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Installation was a breeze, everything was labeled and according to the design."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Paul Schafer, 10/03/2016</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Closets To Go is simply fantastic! Very easy to work with…"</p>
															</a>
														</div>
													</div>
												</div>
											</div>
											<!-- 
											<div class="mt-4 mobile-show">
												<button id="custButton66" title="Customer video testimonials" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#customerVideo" data-toggle="modal" data-target="#mobile-diy-modal">
													Customer video testimonials
												</button>
												<div class="custContent66" id="cust66">
													<p style="display: block; padding: 0 0.75rem;">
													<iframe width="330" height="300" src="https://www.youtube.com/embed/XINCPrtiGaM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
													</p>
												</div> -->

											<!-- <button title="Installation video Library" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#instalationVideo" data-toggle="modal" data-target="#mobile-diy-modal">
													Installation video Library
												</button> -->
											<!-- <button title="Customer testimonials" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#customerTestimonialsOne" data-toggle="modal" data-target="#mobile-diy-modal">
													Customer testimonials
												</button> -->
											<!-- </div> -->
										</div>
									</div>
								</div>
							</div>

							<!-- <script>
								var button66 = document.getElementById('custButton66');
								var div66 = document.getElementById('cust66');

								div66.style.display = 'none';

								button66.onclick = function() {
									if (div66.style.display !== 'none') {
										div66.style.display = 'none';
									} else {
										div66.style.display = 'block';
									}
								};
							</script> -->

							<div class="tab-block__wrapper" id="tab-content-7">
								<div class="row">
									<div class="col-12 col-lg-6">
										<div class="tab-block__wrapper--content">
											<p class="tab-block__wrapper--heading with-button">
												<span>Place Sides (Vertical Panels):</span>
												<!-- <a href="#" title="Watch Video" class="video-button">
													<span>watch video</span>
												</a> -->
											</p>

											<p class="tab-block__wrapper--tools">Tools Required</p>
											<div class="tab-block__wrapper--image-wrap">
												<button title="Left" class="tab-block__wrapper--image-wrap__prev" style="display: none">
													<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
														<path d="M0 0h24v24H0V0z" fill="none"></path>
														<path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"></path>
													</svg>
												</button>
												<div class="tab-block__wrapper--image-content">
													<div class="image-group" style="width: 110px;">


														<?php echo $icon_id_ScrewDriverTool; ?>
													</div>
													<div class="image-group" style="width: 110px;">
														<?php echo $icon_id_ScrewGunTool; ?>
													</div>
													<div class="image-group" style="width: 110px; border-color: white;">

													</div>
													<div class="image-group" style="width: 110px; border-color: white;">

													</div>
													<div class="image-group" style="width: 110px; border-color: white;">

													</div>
												</div>
												<button title="Right" class="tab-block__wrapper--image-wrap__next">
													<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
														<path d="M0 0h24v24H0V0z" fill="none"></path>
														<path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path>
													</svg>
												</button>
											</div>

											<div class="mt-4 mobile-show">
												<button id="descButtonA" title="Description" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#collapseFive-one" data-toggle="modal" data-target="#mobile-diy-modal">
												Place Sides (Vertical Panels):
												</button>
												<div class="descContentA" id="descA">
													<p style="display:block; padding:0 0.75rem;">
														Side panels are labeled by room name followed by wall label and finally by placement position. An example is as follows: Master-B-1 in this example, the room name is Master closet, B is wall label and 1 is panel number reading left to right.

														Position wall panels according to wall elevation view and in the sequence order by numbers. Start by placing the first panel on the rail where the lip of the hanging bracket is correctly positioned to hang off the rail. Test each side panel by pulling the panel towards you to ensure the lip of the hanging bracket is fully resting on the fixing rail. Moving left to right, (section by section) determine the distance between the panels by placing each subsequent panel on the fixing rail spaced between panels at approximately the width of the section according to the plans.
													</p>
												</div>

												<button id="descButtonB" title="Helpful tip section" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#helpfulTipFive" data-toggle="modal" data-target="#mobile-diy-modal">
													Helpful tips
												</button>
												<div class="descContentB" id="descB">
													<p style="display:block; padding:0 0.75rem;">
														<b>Adjusting the hanging bracket:</b><br>
														In some cases, whether the walls are not flat or the floor is not level you’ll need to adjust the hanging bracket to accommodate for the deviation. To adjust the hanging bracket, locate the two screws at the backend of the bracket. The top screw will adjust the panel up (clockwise) and down (counterclockwise) while the lower screw adjust the side panel in (clockwise) and out (counterclockwise) Be sure not to over tighten the bracket but rather leave room in the adjust for after all the shelves have been locked into position.
													</p>
												</div>

											</div>

											<script>
												var buttonA = document.getElementById('descButtonA');
												var divA = document.getElementById('descA');

												var buttonB = document.getElementById('descButtonB');
												var divB = document.getElementById('descB');

												divA.style.display = 'none';
												divB.style.display = 'none';

												buttonA.onclick = function() {
													if (divA.style.display !== 'none') {
														divA.style.display = 'none';
													} else {
														divA.style.display = 'block';
													}
												};

												buttonB.onclick = function() {
													if (divB.style.display !== 'none') {
														divB.style.display = 'none';

													} else {
														divB.style.display = 'block';
													}
												};
											</script>

											<div class="mt-5 desktop-show">
												<div id="accordionFive">
													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="headingFive-one" data-toggle="collapse" data-target="#collapseFive-one" aria-expanded="false" aria-controls="collapseFive-one">
															<p class="card-collapse__title">
																<span>Place Sides (Vertical Panels):</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
																</h5>
														</div>

														<div id="collapseFive-one" class="collapse" aria-labelledby="headingFive-one" data-parent="#accordionFive">
															<div class="card-collapse__body js-diy-detached-div">
																<p>
																	Side panels are labeled by room name followed by wall label and finally by placement position. An example is as follows: Master-B-1 in this example, the room name is Master closet, B is wall label and 1 is panel number reading left to right.
																	<br><br>
																	Position wall panels according to wall elevation view and in the sequence order by numbers. Start by placing the first panel on the rail where the lip of the hanging bracket is correctly positioned to hang off the rail. Test each side panel by pulling the panel towards you to ensure the lip of the hanging bracket is fully resting on the fixing rail. Moving left to right, (section by section) determine the distance between the panels by placing each subsequent panel on the fixing rail spaced between panels at approximately the width of the section according to the plans.

																</p>

																<!-- <div class="mt-4 mb-3 card-collapse__body--images">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-1.png" alt="" class="img-fluid">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-2.png" alt="" class="img-fluid">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-3.png" alt="" class="img-fluid">
																</div> -->
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="mt-5 desktop-show" id="helpfulTipFive">
												<p class="tab-block__wrapper--heading">Helpful tips</p>
												<div class="js-diy-detached-div" id="secondAccordionFive">
													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingFive-one" data-toggle="collapse" data-target="#secondCollapseFive-one" aria-expanded="false" aria-controls="secondCollapseFive-one">
															<p class="card-collapse__title">
																<span>Adjusting the hanging bracket:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseFive-one" class="collapse" aria-labelledby="secondHeadingFive-one" data-parent="#secondAccordionFive">
															<div class="card-collapse__body">
																In some cases, whether the walls are not flat or the floor is not level you’ll need to adjust the hanging bracket to accommodate for the deviation. To adjust the hanging bracket, locate the two screws at the backend of the bracket. The top screw will adjust the panel up (clockwise) and down (counterclockwise) while the lower screw adjust the side panel in (clockwise) and out (counterclockwise) Be sure not to over tighten the bracket but rather leave room in the adjust for after all the shelves have been locked into position.
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-6">
										<div class="tab-block__wrapper--video-block">
											<div class="tab-block__wrapper--video-video">
<img src="<?php echo SITEROOT; ?>images/Placeholder-DIY-Steps/place-sides.jpg" alt="" class="img-fluid">
											</div>
											<p class="tab-block__wrapper--video-heading">Closets To Go Custom DIY Closets = Easy yet Professional Results!</p>

											<div class="row row-with-desctop-border-bottom">
												<div class="col-12 col-sm-6">
													<p class="flex-p">
<img src="<?php echo SITEROOT; ?>images/passage-of-time.svg" alt="">
														Just 4-6 hours to install a 10 x 10 closet.
													</p>
												</div>
												<div class="col-12 col-sm-6">
													<p class="flex-p underlined-text">
<img src="<?php echo SITEROOT; ?>images/security-yellow.svg" alt="">
														100% Perfect Fit Guarantee
													</p>
												</div>
												<div class="col-12 col-sm-6">
													<div class="first-fixed-block__text-group--items">
<img src="<?php echo SITEROOT; ?>images/package.svg" alt="">
														<div class="first-fixed-block__text-group--text">
															<p><?php echo $count_diy_inst ?></p>
															<p>Successful DIY Installations</p>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-6">
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">William Gumpenberger, Feb 8, 2021</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"I installed the system with no help and the directions supplied were easy to understand"</p>
															</a>
														</div>
													</div>
												</div>
											</div>

											<div class="mt-5 desktop-show" id="customerTestimonialsFive">
												<p class="tab-block__wrapper--heading">Customer testimonials</p>

												<div class="stars-wrapper diy-instructions js-diy-detached-div">
													<div class="block-stars__wrapper">
														<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Michael Schoen, 2 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"The directions are easy to follow which creates a pain free installation."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
														<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Maria Faaeteete, March 29, 2020</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"If we can do it, you can do it!"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
														<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Kevin Edie, 2 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Install was much easier than expected"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
														<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>

															<p class="first-text">Terrie Biggs, 6 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"so pleased at the perfect fit and ease of installation"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
														<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">AT, a year ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Not only did we have detailed instructions, but the personal cell number of an employee that we could call with any install questions."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
														<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Chester, a year ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Design came out exactly as hoped."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
														<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Ben C, 12/03/2019</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Installation was a breeze, everything was labeled and according to the design."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
														<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Paul Schafer, 10/03/2016</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Closets To Go is simply fantastic! Very easy to work with…"</p>
															</a>
														</div>
													</div>
												</div>
											</div>

											<!-- <div class="mt-4 mobile-show">
												<button id="custButton77" title="Customer video testimonials" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#customerVideo" data-toggle="modal" data-target="#mobile-diy-modal">
													Customer video testimonials
												</button>
												<div class="custContent77" id="cust77">
													<p style="display: block; padding: 0 0.75rem;">
													<iframe width="330" height="300" src="https://www.youtube.com/embed/Uknp66eawx8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
													</p>
												</div> -->

											<!-- <button title="Installation video Library" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#instalationVideo" data-toggle="modal" data-target="#mobile-diy-modal">
													Installation video Library
												</button> -->
											<!-- <button title="Customer testimonials" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#customerTestimonialsOne" data-toggle="modal" data-target="#mobile-diy-modal">
													Customer testimonials
												</button> -->
											<!-- </div> -->
										</div>
									</div>
								</div>
							</div>

							<!-- <script>
								var button77 = document.getElementById('custButton77');
								var div77 = document.getElementById('cust77');

								div77.style.display = 'none';

								button77.onclick = function() {
									if (div77.style.display !== 'none') {
										div77.style.display = 'none';
									} else {
										div77.style.display = 'block';
									}
								};
							</script> -->
							<div class="tab-block__wrapper" id="tab-content-8">
								<div class="row">
									<div class="col-12 col-lg-6">
										<div class="tab-block__wrapper--content">
											<p class="tab-block__wrapper--heading with-button">
												<span>Securing Fixed Shelves:</span>
												<!-- <a href="#" title="Watch Video" class="video-button">
													<span>watch video</span>
												</a> -->
											</p>

											<p class="tab-block__wrapper--tools">Tools Required</p>
											<div class="tab-block__wrapper--image-wrap">
												<button title="Left" class="tab-block__wrapper--image-wrap__prev" style="display: none">
													<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
														<path d="M0 0h24v24H0V0z" fill="none"></path>
														<path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"></path>
													</svg>
												</button>
												<div class="tab-block__wrapper--image-content">
													<div class="image-group" style="width: 110px;">
														<?php echo $icon_id_ScrewDriverTool; ?>
													</div>
													<div class="image-group" style="width: 110px; border-color:white;">

													</div>
													<div class="image-group" style="width: 110px; border-color:white;">

													</div>
													<div class="image-group" style="width: 110px; border-color:white;">

													</div>
													<div class="image-group" style="width: 110px; border-color:white;">

													</div>

												</div>
												<button title="Right" class="tab-block__wrapper--image-wrap__next">
													<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
														<path d="M0 0h24v24H0V0z" fill="none"></path>
														<path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path>
													</svg>
												</button>
											</div>

											<div class="mt-4 mobile-show">

												<button id="descButtonC" title="Description" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#collapseSix-one" data-toggle="modal" data-target="#mobile-diy-modal">
												Securing Fixed Shelves:
												</button>
												<div class="descContentC" id="descC">
													<p style="display: block; padding: 0 0.75rem;">
														Rooms that have corner shelves, see installing corner shelves before proceeding further under “Helpful Tips” section below
														Cam fixed shelves are shelves with a Rafix fitting installed to allow the shelf to affix to a side panel by means of securing the shelf to a Rafix bolt that is attached to the side panel where every shelf is to be fixed.
														Please note there are two types of Cam fixed shelves, bottom fixed shelves and regular fixed shelves. Bottom fixed shelves, abbreviated Btm, have a white fittings that are called push-in fittings. A Push-in fitting is a fitting that simply locks into place without the need for tools. Because bottom shelves are often only a few inches from the floor, the use of tools i.e.a screwdriver and the ability to access the area below the shelf prohibit the ability for adequate space for a tool to tighten in place. Thus the use of a push in fitting.Simply place the shelf securely over the Rafix bolts ensuring the shelf is fully seated in position.
														Regular fixed shelves use a phillips screwdriver to secure into place, simply turn the cam screw three quarters of a turn in a clockwise direction on all 4 cams to securely lock the shelf into position. Make note to ensure all 4 cams have been fully locked into place before moving onto the next section. Do not over tighten the cam shelves as they do not have any room to rotate beyond three quarters of a turn as this will result in breaking the cam fitting. Also, when locking in any shelf especially above your head, it's important to continue to hold the shelf in place until the shelf is fully secured to both side panels before releasing the shelf. Failure to do so can result in injury should the unattached shelf fall before being fully secured to both side panels.
														Each section will have an associated shelf package corresponding to the room name, wall label and section number. An example for this part label is as follows: Master Closet, wall C-1 This shelf package would correspond to the parts associated with the Master closet Section 1 on wall C. Following the order sequence on your room elevation page, identify the appropriate part labels corresponding to the room name, wall and position marking. Beginning with Section 1 and moving left to right, position and lock in the top and middle shelves for each section along all walls leaving out the bottom shelf to install last.
													</p>
												</div>

												<button id="descButtonD" title="Helpful tip section" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#helpfulTipSix" data-toggle="modal" data-target="#mobile-diy-modal">
													Helpful tips
												</button>
												<div class="descContentD" id="descD">
													<p style="display: block; padding: 0 0.75rem;">
														<b>Adjusting the hanging bracket:</b><br>
														While no wall is perfectly flat or corner perfectly square, our unique hanging bracket provides an effortless solution to account for these variations making the installation process effortless when it comes to having everything lining resulting in professional results!
														Depending on what the circumstances are, corners out of square or walls not flat or both, will depend on how to adjust the hanging brackets.
														In most cases, walls and corners are fairly consistent in that they are typically flat and mostly square. But in those rare occasions where that is not the case, fear not as we have the solution to fix that issue!
														While there is not an exact science to adjusting the hanging bracket, it's more about common sense and understanding what the issue is before adjusting the bracket. For example, if the fixed shelf when set in place does not align with the Rafix bolts, simply adjust the bottom bracket screw on the side panel in or out depending on which direction you need to move the side for the bolts to align with the cams. Once all bolts align with the cams you can then tighten the cams and move onto the next section.
														<br><b>Corner Shelves:</b><br>
														Corner shelves are shelves made to fit on two walls forming a 90 degree angle. Because these shelves meet in a corner, it’s imperative to start the installation of your closet where the corner shelves meet at the two walls.
														You’ll first need to identify the 3 side panels that support the corner shelves and position those in place at the approximate spacing to accept the corner shelves. Carefully position the top corner shelf over the Rafix bolts and lock into place using a phillips screwdriver. Proceed to lock in the remaining corner shelves with the exception of the bottom shelf should the section sit on the floor. Continue with installing the remaining fixed shelves working out from the corner in both directions. In the case of double corner wrapped sections, you’ll need to start in both corners working toward the middle from both ends of the corner sections.
														Installing bottom shelves:
														For sections that go to the floor, the bottom cam shelf will have what is called push-in fittings (cams) which do not require tools to install.
														It is recommended that you install the bottom shelves last after the majority of all upper shelves are fully installed. There are a number of reasons for installing these shelves last. One is to provide adequate access to shimming side panels to the floor should the side panels slightly float off the floor once the system is fully plumbed and leveled. Another is to provide access for wiring leads for LED-Lighting packages as part of your closet design. Also, installing the toe plate prior to the bottom shelf allows the bottom shelf to rest on the toe plate for better support and ease of installation.
													</p>
												</div>

											</div>

											<script>
												var buttonC = document.getElementById('descButtonC');
												var divC = document.getElementById('descC');

												var buttonD = document.getElementById('descButtonD');
												var divD = document.getElementById('descD');

												divC.style.display = 'none';
												divD.style.display = 'none';

												buttonC.onclick = function() {
													if (divC.style.display !== 'none') {
														divC.style.display = 'none';
													} else {
														divC.style.display = 'block';
													}
												};

												buttonD.onclick = function() {
													if (divD.style.display !== 'none') {
														divD.style.display = 'none';
													} else {
														divD.style.display = 'block';
													}
												};
											</script>

											<div class="mt-5 desktop-show">
												<div id="accordionSix">
													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="headingSix-one" data-toggle="collapse" data-target="#collapseSix-one" aria-expanded="false" aria-controls="collapseSix-one">
															<p class="card-collapse__title">
																<span>Securing Fixed Shelves:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
																</h5>
														</div>

														<div id="collapseSix-one" class="collapse" aria-labelledby="headingSix-one" data-parent="#accordionSix">
															<div class="card-collapse__body js-diy-detached-div">
																<p>
																	Rooms that have corner shelves, see installing corner shelves before proceeding further under “Helpful Tips” section below
																	<br><br>

																	Cam fixed shelves are shelves with a Rafix fitting installed to allow the shelf to affix to a side panel by means of securing the shelf to a Rafix bolt that is attached to the side panel where every shelf is to be fixed.
																	<br><br>
																	Please note there are two types of Cam fixed shelves, bottom fixed shelves and regular fixed shelves. Bottom fixed shelves, abbreviated Btm, have a white fittings that are called push-in fittings. A Push-in fitting is a fitting that simply locks into place without the need for tools. Because bottom shelves are often only a few inches from the floor, the use of tools i.e.a screwdriver and the ability to access the area below the shelf prohibit the ability for adequate space for a tool to tighten in place. Thus the use of a push in fitting.Simply place the shelf securely over the Rafix bolts ensuring the shelf is fully seated in position.
																	<br><br>
																	Regular fixed shelves use a phillips screwdriver to secure into place, simply turn the cam screw three quarters of a turn in a clockwise direction on all 4 cams to securely lock the shelf into position. Make note to ensure all 4 cams have been fully locked into place before moving onto the next section. Do not over tighten the cam shelves as they do not have any room to rotate beyond three quarters of a turn as this will result in breaking the cam fitting. Also, when locking in any shelf especially above your head, it's important to continue to hold the shelf in place until the shelf is fully secured to both side panels before releasing the shelf. Failure to do so can result in injury should the unattached shelf fall before being fully secured to both side panels.
																	<br><br>

																	Each section will have an associated shelf package corresponding to the room name, wall label and section number. An example for this part label is as follows: Master Closet, wall C-1 This shelf package would correspond to the parts associated with the Master closet Section 1 on wall C. Following the order sequence on your room elevation page, identify the appropriate part labels corresponding to the room name, wall and position marking. Beginning with Section 1 and moving left to right, position and lock in the top and middle shelves for each section along all walls leaving out the bottom shelf to install last.


																</p>
																<!-- 
																<div class="mt-4 mb-3 card-collapse__body--images">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-1.png" alt="" class="img-fluid">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-2.png" alt="" class="img-fluid">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-3.png" alt="" class="img-fluid">
																</div> -->
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="mt-5 desktop-show" id="helpfulTipSix">
												<p class="tab-block__wrapper--heading">Helpful tips</p>

												<div class="js-diy-detached-div" id="secondAccordionSix">
													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingSix-one" data-toggle="collapse" data-target="#secondCollapseSix-one" aria-expanded="false" aria-controls="secondCollapseSix-one">
															<p class="card-collapse__title">
																<span>Adjusting the hanging bracket:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseSix-one" class="collapse" aria-labelledby="secondHeadingSix-one" data-parent="#secondAccordionSix">
															<div class="card-collapse__body">
																While no wall is perfectly flat or corner perfectly square, our unique hanging bracket provides an effortless solution to account for these variations making the installation process effortless when it comes to having everything lining resulting in professional results!
																<br><br>
																Depending on what the circumstances are, corners out of square or walls not flat or both, will depend on how to adjust the hanging brackets.
																<br><br>
																In most cases, walls and corners are fairly consistent in that they are typically flat and mostly square. But in those rare occasions where that is not the case, fear not as we have the solution to fix that issue!
																<br><br>
																While there is not an exact science to adjusting the hanging bracket, it's more about common sense and understanding what the issue is before adjusting the bracket. For example, if the fixed shelf when set in place does not align with the Rafix bolts, simply adjust the bottom bracket screw on the side panel in or out depending on which direction you need to move the side for the bolts to align with the cams. Once all bolts align with the cams you can then tighten the cams and move onto the next section.

															</div>
														</div>
													</div>

													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingSix-Six" data-toggle="collapse" data-target="#secondCollapseSix-Six" aria-expanded="false" aria-controls="secondCollapseSix-Six">
															<p class="card-collapse__title">
																<span>Corner Shelves:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseSix-Six" class="collapse" aria-labelledby="secondHeadingSix-Six" data-parent="#secondAccordionSix">
															<div class="card-collapse__body">
																Corner shelves are shelves made to fit on two walls forming a 90 degree angle. Because these shelves meet in a corner, it’s imperative to start the installation of your closet where the corner shelves meet at the two walls.
																<br>
																You’ll first need to identify the 3 side panels that support the corner shelves and position those in place at the approximate spacing to accept the corner shelves. Carefully position the top corner shelf over the Rafix bolts and lock into place using a phillips screwdriver. Proceed to lock in the remaining corner shelves with the exception of the bottom shelf should the section sit on the floor. Continue with installing the remaining fixed shelves working out from the corner in both directions. In the case of double corner wrapped sections, you’ll need to start in both corners working toward the middle from both ends of the corner sections.

															</div>
														</div>
													</div>
													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingSix-nine" data-toggle="collapse" data-target="#secondCollapseSix-nine" aria-expanded="false" aria-controls="secondCollapseSix-nine">
															<p class="card-collapse__title">
																<span>Installing bottom shelves: </span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseSix-nine" class="collapse" aria-labelledby="secondHeadingSix-nine" data-parent="#secondAccordionSix">
															<div class="card-collapse__body">
																For sections that go to the floor, the bottom cam shelf will have what is called push-in fittings (cams) which do not require tools to install.
																<br><br>
																It is recommended that you install the bottom shelves last after the majority of all upper shelves are fully installed. There are a number of reasons for installing these shelves last. One is to provide adequate access to shimming side panels to the floor should the side panels slightly float off the floor once the system is fully plumbed and leveled. Another is to provide access for wiring leads for LED-Lighting packages as part of your closet design. Also, installing the toe plate prior to the bottom shelf allows the bottom shelf to rest on the toe plate for better support and ease of installation.

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-6">
										<div class="tab-block__wrapper--video-block">
											<div class="tab-block__wrapper--video-video">
<img src="<?php echo SITEROOT; ?>images/Placeholder-DIY-Steps/UpdatedDIYStepsSecureFixedShelves.jpg" alt="" class="img-fluid">
											</div>
											<p class="tab-block__wrapper--video-heading">Closets To Go Custom DIY Closets = Easy yet Professional Results!</p>
											<div class="row row-with-desctop-border-bottom">
												<div class="col-12 col-sm-6">
													<p class="flex-p">
<img src="<?php echo SITEROOT; ?>images/passage-of-time.svg" alt="">
														Just 4-6 hours to install a 10 x 10 closet.
													</p>
												</div>
												<div class="col-12 col-sm-6">
													<p class="flex-p underlined-text">
<img src="<?php echo SITEROOT; ?>images/security-yellow.svg" alt="">
														100% Perfect Fit Guarantee
													</p>
												</div>
												<div class="col-12 col-sm-6">
													<div class="first-fixed-block__text-group--items">
<img src="<?php echo SITEROOT; ?>images/package.svg" alt="">
														<div class="first-fixed-block__text-group--text">
															<p><?php echo $count_diy_inst ?></p>
															<p>Successful DIY Installations</p>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-6">
													<div class="block-stars__wrapper">
														<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
																<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
																<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
																<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
																<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
															</div>
															<p class="first-text">William Gumpenberger, Feb 8, 2021</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"I installed the system with no help and the directions supplied were easy to understand"</p>
															</a>
														</div>
													</div>
												</div>
											</div>

											<div class="mt-5 desktop-show" id="customerTestimonialsSix">
												<p class="tab-block__wrapper--heading">Customer testimonials</p>

												<div class="stars-wrapper diy-instructions js-diy-detached-div">
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">

																<?php echo $stars; ?>
															</div>
															<p class="first-text">Michael Schoen, 2 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"The directions are easy to follow which creates a pain free installation."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">

																<?php echo $stars; ?>
															</div>
															<p class="first-text">Maria Faaeteete, March 29, 2020</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"If we can do it, you can do it!"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">

																<?php echo $stars; ?>
															</div>
															<p class="first-text">Kevin Edie, 2 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Install was much easier than expected"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">

																<?php echo $stars; ?>
															</div>
															<p class="first-text">Terrie Biggs, 6 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"so pleased at the perfect fit and ease of installation"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">

																<?php echo $stars; ?>
															</div>
															<p class="first-text">AT, a year ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Not only did we have detailed instructions, but the personal cell number of an employee that we could call with any install questions."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">

																<?php echo $stars; ?>
															</div>
															<p class="first-text">Chester, a year ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Design came out exactly as hoped."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">

																<?php echo $stars; ?>
															</div>
															<p class="first-text">Ben C, 12/03/2019</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Installation was a breeze, everything was labeled and according to the design."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">

																<?php echo $stars; ?>
															</div>
															<p class="first-text">Paul Schafer, 10/03/2016</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Closets To Go is simply fantastic! Very easy to work with…"</p>
															</a>
														</div>
													</div>
												</div>
											</div>

											<!-- <div class="mt-4 mobile-show">
												<button id="custButton88" title="Customer video testimonials" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#customerVideo" data-toggle="modal" data-target="#mobile-diy-modal">
													Customer video testimonials
												</button>
												<div class="custContent88" id="cust88">
													<p style="display: block; padding: 0 0.75rem;">
													<iframe width="330" height="300" src="https://www.youtube.com/embed/_OVBgaG6F5Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
													</p>
												</div> -->

											<!-- <button title="Installation video Library" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#instalationVideo" data-toggle="modal" data-target="#mobile-diy-modal">
													Installation video Library
												</button> -->
											<!-- <button title="Customer testimonials" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#customerTestimonialsOne" data-toggle="modal" data-target="#mobile-diy-modal">
													Customer testimonials
												</button> -->
											<!-- </div> -->
										</div>
									</div>
								</div>
							</div>

							<!-- <script>
								var button88 = document.getElementById('custButton88');
								var div88 = document.getElementById('cust88');

								div88.style.display = 'none';

								button88.onclick = function() {
									if (div88.style.display !== 'none') {
										div88.style.display = 'none';
									} else {
										div88.style.display = 'block';
									}
								};
							</script> -->

							<div class="tab-block__wrapper" id="tab-content-9">
								<div class="row">
									<div class="col-12 col-lg-6">
										<div class="tab-block__wrapper--content">
											<p class="tab-block__wrapper--heading with-button">
												<span>Installing Cleats -Added Structural Support:</span>
												<!-- <a href="#" title="Watch Video" class="video-button">
													<span>watch video</span>
												</a> -->
											</p>

											<p class="tab-block__wrapper--tools">Tools Required</p>
											<div class="tab-block__wrapper--image-wrap">
												<button title="Left" class="tab-block__wrapper--image-wrap__prev" style="display: none">
													<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
														<path d="M0 0h24v24H0V0z" fill="none"></path>
														<path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"></path>
													</svg>
												</button>
												<div class="tab-block__wrapper--image-content">
													<div class="image-group" style="width: 110px;">
														<?php echo $icon_id_ScrewGunTool; ?>
													</div>
													<div class="image-group" style="width: 110px;">
														<?php echo $icon_id_PencilTool; ?>
													</div>
													<div class="image-group" style="width: 110px; border-color: white;">

													</div>
													<div class="image-group" style="width: 110px; border-color: white;">

													</div>
													<div class="image-group" style="width: 110px; border-color: white;">

													</div>
												</div>
												<button title="Right" class="tab-block__wrapper--image-wrap__next">
													<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
														<path d="M0 0h24v24H0V0z" fill="none"></path>
														<path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path>
													</svg>
												</button>
											</div>

											<div class="mt-4 mobile-show">
												<button id="descButtonE" title="Description" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#collapseSeven-one" data-toggle="modal" data-target="#mobile-diy-modal">
													Installing Cleats -Added Structural Support:
												</button>
												<div class="descContentE" id="descE">
													<p style="display: block; padding: 0 0.75rem;">
														Installing cleats are essential to the structural support of your closet system. You’ll first need to locate all corresponding cleats to section numbers per room name and wall labels and place them loosely on top of the lowest fixed shelf. Once all the cleats have been laid out, the next step will be to locate the stud position on each cleat by taking each cleat within each section up to the fixing rail location and transferring the stud marking from the rail cover to the cleat. Once the cleats have been marked for stud location, position each cleat over the corresponding Rafix bolts at the cleat installation position and snap into place. (Cleats will have a push in fitting which is a pressure fit connector requiring no tools to install.) Once all cleats have been installed the next step will be to plumb and level the system prior to securing the cleats to the studs.
													</p>
												</div>

												<button id="descButtonF" title="Helpful tip section" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#helpfulTipSeven" data-toggle="modal" data-target="#mobile-diy-modal">
													Helpful tips
												</button>
												<div class="descButtonF" id="descF">
													<p style="display:block; padding: 0 0.75rem;">
														<b>Locating studs:</b><br>
														To avoid having to relocate all your studs of you initial installation when installing the fixing rail, we recommend prior to snapping the rail cover over the fixing rail (concealing the stud locations from view) to transfer the stud location to the rail cover using a pencil to mark the studs position on the bottom of the rail cover. This again will help speed up the installation process by having the stud location available to easily transfer to the cleats.
														<br>
														<b>Pre-Drilling stud position on cleats:</b><br>
														Using an ⅛” drill bit, pre-drill stud locations on all cleats before securing to studs. This will ensure the screws will easily pass through the cleat biting into the sheetrock and stud for a quick less effort process.
														<br>
														<b>Level-and-Plumb:</b><br>
														Prior to securing the cleats to the studs as being one of the final steps of the installation process, it’s imperative to Level-and-Plumb all sections first to ensure subsequent doors, drawers, tilt-out hamper and baskets all function properly. This is imperative for those features to maintain a proper alignment to one another and is what gives you professional results with the finished product!. Skipping this step will result in less than desired finished results especially considering it takes very little effort in doing so!

													</p>
												</div>
											</div>

											<script>
												var buttonE = document.getElementById('descButtonE');
												var divE = document.getElementById('descE');

												var buttonF = document.getElementById('descButtonF');
												var divF = document.getElementById('descF');

												divE.style.display = 'none';

												divF.style.display = 'none';

												buttonE.onclick = function() {
													if (divE.style.display !== 'none') {
														divE.style.display = 'none';
													} else {
														divE.style.display = 'block';
													}
												};

												buttonF.onclick = function() {
													if (divF.style.display !== 'none') {
														divF.style.display = 'none';
													} else {
														divF.style.display = 'block';
													}
												};
											</script>

											<div class="mt-5 desktop-show">
												<div id="accordionSeven">
													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="headingSeven-one" data-toggle="collapse" data-target="#collapseSeven-one" aria-expanded="false" aria-controls="collapseSeven-one">
															<p class="card-collapse__title">
																<span>Installing Cleats -Added Structural Support:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
																</h5>
														</div>

														<div id="collapseSeven-one" class="collapse" aria-labelledby="headingSeven-one" data-parent="#accordionSeven">
															<div class="card-collapse__body js-diy-detached-div">
																<p>
																	Installing cleats are essential to the structural support of your closet system. You’ll first need to locate all corresponding cleats to section numbers per room name and wall labels and place them loosely on top of the lowest fixed shelf. Once all the cleats have been laid out, the next step will be to locate the stud position on each cleat by taking each cleat within each section up to the fixing rail location and transferring the stud marking from the rail cover to the cleat. Once the cleats have been marked for stud location, position each cleat over the corresponding Rafix bolts at the cleat installation position and snap into place. (Cleats will have a push in fitting which is a pressure fit connector requiring no tools to install.) Once all cleats have been installed the next step will be to plumb and level the system prior to securing the cleats to the studs.
																</p>

																<!-- <div class="mt-4 mb-3 card-collapse__body--images">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-1.png" alt="" class="img-fluid">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-2.png" alt="" class="img-fluid">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-3.png" alt="" class="img-fluid">
																</div> -->
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="mt-5 desktop-show" id="helpfulTipSeven">

												<p class="tab-block__wrapper--heading">Helpful tips</p>

												<div class="js-diy-detached-div" id="secondAccordionSeven">
													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingSeven-one" data-toggle="collapse" data-target="#secondCollapseSeven-one" aria-expanded="false" aria-controls="secondCollapseSeven-one">
															<p class="card-collapse__title">
																<span>Locating studs:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseSeven-one" class="collapse" aria-labelledby="secondHeadingSeven-one" data-parent="#secondAccordionSeven">
															<div class="card-collapse__body">
																To avoid having to relocate all your studs of you initial installation when installing the fixing rail, we recommend prior to snapping the rail cover over the fixing rail (concealing the stud locations from view) to transfer the stud location to the rail cover using a pencil to mark the studs position on the bottom of the rail cover. This again will help speed up the installation process by having the stud location available to easily transfer to the cleats.
															</div>
														</div>
													</div>

													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingSeven-Seven" data-toggle="collapse" data-target="#secondCollapseSeven-Seven" aria-expanded="false" aria-controls="secondCollapseSeven-Seven">
															<p class="card-collapse__title">
																<span>Pre-Drilling stud position on cleats: </span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseSeven-Seven" class="collapse" aria-labelledby="secondHeadingSeven-Seven" data-parent="#secondAccordionSeven">
															<div class="card-collapse__body">
																Using an ⅛” drill bit, pre-drill stud locations on all cleats before securing to studs. This will ensure the screws will easily pass through the cleat biting into the sheetrock and stud for a quick less effort process.
															</div>
														</div>
													</div>

													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingSeven-nine" data-toggle="collapse" data-target="#secondCollapseSeven-nine" aria-expanded="false" aria-controls="secondCollapseSeven-nine">
															<p class="card-collapse__title">
																<span>Level-and-Plumb: </span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseSeven-nine" class="collapse" aria-labelledby="secondHeadingSeven-nine" data-parent="#secondAccordionSeven">
															<div class="card-collapse__body">
																Prior to securing the cleats to the studs as being one of the final steps of the installation process, it’s imperative to Level-and-Plumb all sections first to ensure subsequent doors, drawers, tilt-out hamper and baskets all function properly. This is imperative for those features to maintain a proper alignment to one another and is what gives you professional results with the finished product!. Skipping this step will result in less than desired finished results especially considering it takes very little effort in doing so!
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-6">
										<div class="tab-block__wrapper--video-block">
											<div class="tab-block__wrapper--video-video">
<img src="<?php echo SITEROOT; ?>images/Placeholder-DIY-Steps/DIY-Steps-Install-Cleats.jpg" alt="" class="img-fluid">
											</div>
											<p class="tab-block__wrapper--video-heading">Closets To Go Custom DIY Closets = Easy yet Professional Results!</p>

											<div class="row row-with-desctop-border-bottom">
												<div class="col-12 col-sm-6">
													<p class="flex-p">
<img src="<?php echo SITEROOT; ?>images/passage-of-time.svg" alt="">
														Just 4-6 hours to install a 10 x 10 closet.
													</p>
												</div>
												<div class="col-12 col-sm-6">
													<p class="flex-p underlined-text">
<img src="<?php echo SITEROOT; ?>images/security-yellow.svg" alt="">
														100% Perfect Fit Guarantee
													</p>
												</div>
												<div class="col-12 col-sm-6">
													<div class="first-fixed-block__text-group--items">
<img src="<?php echo SITEROOT; ?>images/package.svg" alt="">
														<div class="first-fixed-block__text-group--text">
															<p><?php echo $count_diy_inst ?></p>
															<p>Successful DIY Installations</p>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-6">
													<div class="block-stars__wrapper">
														<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
																<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
																<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
																<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
																<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
															</div>
															<p class="first-text">William Gumpenberger, Feb 8, 2021</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"I installed the system with no help and the directions supplied were easy to understand"</p>
															</a>
														</div>
													</div>
												</div>
											</div>

											<div class="mt-5 desktop-show" id="customerTestimonialsSix">
												<p class="tab-block__wrapper--heading">Customer testimonials</p>

												<div class="stars-wrapper diy-instructions js-diy-detached-div">
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">

																<?php echo $stars; ?>
															</div>
															<p class="first-text">Michael Schoen, 2 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"The directions are easy to follow which creates a pain free installation."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">

																<?php echo $stars; ?>
															</div>
															<p class="first-text">Maria Faaeteete, March 29, 2020</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"If we can do it, you can do it!"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">

																<?php echo $stars; ?>
															</div>
															<p class="first-text">Kevin Edie, 2 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Install was much easier than expected"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">

																<?php echo $stars; ?>
															</div>
															<p class="first-text">Terrie Biggs, 6 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"so pleased at the perfect fit and ease of installation"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">

																<?php echo $stars; ?>
															</div>
															<p class="first-text">AT, a year ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Not only did we have detailed instructions, but the personal cell number of an employee that we could call with any install questions."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">

																<?php echo $stars; ?>
															</div>
															<p class="first-text">Chester, a year ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Design came out exactly as hoped."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">

																<?php echo $stars; ?>
															</div>
															<p class="first-text">Ben C, 12/03/2019</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Installation was a breeze, everything was labeled and according to the design."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">

																<?php echo $stars; ?>
															</div>
															<p class="first-text">Paul Schafer, 10/03/2016</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Closets To Go is simply fantastic! Very easy to work with…"</p>
															</a>
														</div>
													</div>
												</div>
											</div>

											<!-- <div class="mt-4 mobile-show">
												<button id="custButton99" title="Customer video testimonials" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#customerVideo" data-toggle="modal" data-target="#mobile-diy-modal">
													Customer video testimonials
												</button>
												<div class="custContent99" id="cust99">
													<p style="display: block; padding: 0 0.75rem;">
													<iframe width="330" height="300" src="https://www.youtube.com/embed/XINCPrtiGaM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
													</p>
												</div> -->

											<!-- <button title="Installation video Library" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#instalationVideo" data-toggle="modal" data-target="#mobile-diy-modal">
													Installation video Library
												</button> -->
											<!-- <button title="Customer testimonials" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#customerTestimonialsOne" data-toggle="modal" data-target="#mobile-diy-modal">
													Customer testimonials
												</button> -->
											<!-- </div> -->
										</div>
									</div>
								</div>
							</div>

							<!-- <script>
								var button99 = document.getElementById('custButton99');
								var div99 = document.getElementById('cust99');

								div99.style.display = 'none';

								button99.onclick = function() {
									if (div99.style.display !== 'none') {
										div99.style.display = 'none';
									} else {
										div99.style.display = 'block';
									}
								};
							</script> -->

							<div class="tab-block__wrapper" id="tab-content-10">
								<div class="row">
									<div class="col-12 col-lg-6">
										<div class="tab-block__wrapper--content">
											<p class="tab-block__wrapper--heading with-button">
												<span>Level-and-Plumb:</span>
											</p>

											<p class="tab-block__wrapper--tools">Tools Required</p>
											<div class="tab-block__wrapper--image-wrap">
												<button title="Left" class="tab-block__wrapper--image-wrap__prev" style="display: none">
													<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
														<path d="M0 0h24v24H0V0z" fill="none"></path>
														<path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"></path>
													</svg>
												</button>
												<div class="tab-block__wrapper--image-content">
													<div class="image-group" style="width: 110px;">
														<?php echo $icon_id_LevelTool; ?>
													</div>
													<div class="image-group" style="width: 110px;">
														<?php echo $icon_id_ScrewDriverTool; ?>
													</div>
													<div class="image-group" style="width: 110px;">
														<?php echo $icon_id_ScrewGunTool; ?>
													</div>
													<div class="image-group" style="width: 110px;">
														<?php echo $icon_id_RubberMalletTool; ?>
													</div>
													<div class="image-group" style="width: 110px;">
														<?php echo $icon_id_StepLadderTool; ?>
													</div>
												</div>
												<button title="Right" class="tab-block__wrapper--image-wrap__next">
													<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
														<path d="M0 0h24v24H0V0z" fill="none"></path>
														<path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path>
													</svg>
												</button>
											</div>

											<div class="mt-4 mobile-show">
												<button id="descButtonG" title="Description" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#collapseEight-one" data-toggle="modal" data-target="#mobile-diy-modal">
													Level-and-Plumb:
												</button>
												<div class="descContentG" id="descG">
													<p style="display:block; padding: 0 0.75rem;">
														One of the final steps in your installation of your closet organizer and one that will give you professional results is leveling and plumbing your closet system. To achieve this, you’ll need to first understand what Level-and-Plumb mean. Level will be anything on a horizontal plane i.e shelves, while plumb will be on a vertical plane i.e. side panels.
														To level your system, place a 2’ or torpedo level along a horizontal surface on each section to determine the degree of level the entire system is. To achieve the best results adjust the hanging bracket using the top screw (The hanging bracket in a neutral position provides an adjustment of 5/16” up and 5/16” down.) starting at one end of the closet system working your way around the room.
														Once your closet organizer is level, you’ll then need to plumb the system which again is along all vertical planes. To accomplish this, use a 2’ level or torpedo level placed vertically on each side panel to determine which direction the panel needs to move. To achieve plumb, simply move the lower end of the side panel right or left and watch for the bubble in the level to fall between the two center lines. Once the section is positioned plumbed and you’ve repeated this step on all subsequent panels, you then can secure your cleats to the studs.
														Once you’ve finished leveling out your closet system, you can then move to the step of securing the system to the fixing rail. To accomplish this you must tighten the lower screw of your hanging bracket clockwise to draw the side panels tight to the wall. Be sure not to over tighten the screws. We find it best to use a clutched screw gun with the clutch setting on one of the lower settings to avoid over tightening. You could also use a hand screwdriver too.
													</p>
												</div>
												<button id="descButtonH" title="Helpful tip section" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#helpfulTipEight" data-toggle="modal" data-target="#mobile-diy-modal">
													Helpful tips
												</button>
												<div class="descContentH" id="descH">
													<p style="display:block; padding: 0 0.75rem;">
														<b>Adjusting your hanging bracket for level:</b><br>
														Considering you have a total of ⅝” adjustment in total for each hanging bracket to move a side panel up and down, we recommend the following to help to avoid maxing out the adjustment for level.
														Once you’ve established the plane of level with regard to your initial need for adjustment. Consider splitting the difference in movement of your hanging bracket by moving some of the sides up while moving some of the sides down (if room allows at floor) along the run of the wall to help balance the direction of raising and lowering the sides to meet at a perfect level plane. By using this method you are effectively meeting in the middle of the hanging bracket adjustment limits to ensure ample adjustment in either direction to ensure best results!
														<br>
														<b>Walls that are not flat:</b><br>
														For walls that are not flat, you may need to install a shim behind a side panel that is pulled off the wall prior to the final tightening of the hanging bracket to the fixing rail. This will help support the side where the wall dives away from the back of the side panel further maintaining proper shelf alignment with regards to the shelf meeting the side panels at 90 degrees.
													</p>
												</div>
											</div>
											<script>
												var buttonG = document.getElementById('descButtonG');
												var divG = document.getElementById('descG');

												var buttonH = document.getElementById('descButtonH');
												var divH = document.getElementById('descH');

												divG.style.display = 'none';
												divH.style.display = 'none';

												buttonG.onclick = function() {
													if (divG.style.display !== 'none') {
														divG.style.display = 'none';
													} else {
														divG.style.display = 'block';
													}
												};

												buttonH.onclick = function() {
													if (divH.style.display !== 'none') {
														divH.style.display = 'none';
													} else {
														divH.style.display = 'block';
													}
												};
											</script>
											<div class="mt-5 desktop-show">
												<div id="accordionEight">
													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="headingEight-one" data-toggle="collapse" data-target="#collapseEight-one" aria-expanded="false" aria-controls="collapseEight-one">
															<p class="card-collapse__title">
																<span> Level-and-Plumb:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
																</h5>
														</div>

														<div id="collapseEight-one" class="collapse" aria-labelledby="headingEight-one" data-parent="#accordionEight">
															<div class="card-collapse__body js-diy-detached-div">
																<p>
																	One of the final steps in your installation of your closet organizer and one that will give you professional results is leveling and plumbing your closet system. To achieve this, you’ll need to first understand what is level and what is plumb. Level will be anything on a horizontal plane i.e shelves, while plumb will be on a vertical plane i.e. side panels.
																	<br><br>
																	To level your system, place a 2’ or torpedo level along a horizontal surface on each section to determine the degree of level the entire system is. To achieve the best results adjust the hanging bracket using the top screw (The hanging bracket in a neutral position provides an adjustment of 5/16” up and 5/16” down.) starting at one end of the closet system working your way around the room.
																	<br><br>
																	Once your closet organizer is level, you’ll then need to plumb the system which again is along all vertical planes. To accomplish this, use a 2’ level or torpedo level placed vertically on each side panel to determine which direction the panel needs to move. To achieve plumb, simply move the lower end of the side panel right or left and watch for the bubble in the level to fall between the two center lines. Once the section is positioned plumbed and you’ve repeated this step on all subsequent panels, you then can secure your cleats to the studs.
																	<br><br>
																	Once you’ve finished leveling out your closet system, you can then move to the step of securing the system to the fixing rail. To accomplish this you must tighten the lower screw of your hanging bracket clockwise to draw the side panels tight to the wall. Be sure not to over tighten the screws. We find it best to use a clutched screw gun with the clutch setting on one of the lower settings to avoid over tightening. You could also use a hand screwdriver too.

																</p>

																<!-- <div class="mt-4 mb-3 card-collapse__body--images">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-1.png" alt="" class="img-fluid">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-2.png" alt="" class="img-fluid">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-3.png" alt="" class="img-fluid">
																</div> -->
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="mt-5 desktop-show" id="helpfulTipEight">
												<p class="tab-block__wrapper--heading">Helpful tips</p>

												<div class="js-diy-detached-div" id="secondAccordionEight">
													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingEight-one" data-toggle="collapse" data-target="#secondCollapseEight-one" aria-expanded="false" aria-controls="secondCollapseEight-one">
															<p class="card-collapse__title">
																<span>Adjusting your hanging bracket for level:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseEight-one" class="collapse" aria-labelledby="secondHeadingEight-one" data-parent="#secondAccordionEight">
															<div class="card-collapse__body">
																Considering you have a total of ⅝” adjustment in total for each hanging bracket to move a side panel up and down, we recommend the following to help to avoid maxing out the adjustment for level.
																<br><br>
																Once you’ve established the plane of level with regard to your initial need for adjustment. Consider splitting the difference in movement of your hanging bracket by moving some of the sides up while moving some of the sides down (if room allows at floor) along the run of the wall to help balance the direction of raising and lowering the sides to meet at a perfect level plane. By using this method you are effectively meeting in the middle of the hanging bracket adjustment limits to ensure ample adjustment in either direction to ensure best results!

															</div>
														</div>
													</div>

													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingEight-Eight" data-toggle="collapse" data-target="#secondCollapseEight-Eight" aria-expanded="false" aria-controls="secondCollapseEight-Eight">
															<p class="card-collapse__title">
																<span>Walls that are not flat: </span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseEight-Eight" class="collapse" aria-labelledby="secondHeadingEight-Eight" data-parent="#secondAccordionEight">
															<div class="card-collapse__body">
																For walls that are not flat, you may need to install a shim behind a side panel that is pulled off the wall prior to the final tightening of the hanging bracket to the fixing rail. This will help support the side where the wall dives away from the back of the side panel further maintaining proper shelf alignment with regards to the shelf meeting the side panels at 90 degrees.
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>


									<div class="col-12 col-lg-6">
										<div class="tab-block__wrapper--video-block">
											<div class="tab-block__wrapper--video-video">
	<img src="<?php echo SITEROOT; ?>images/Placeholder-DIY-Steps/Level-and-Plumb.jpg" alt="" class="img-fluid">
											</div>
											<p class="tab-block__wrapper--video-heading">Closets To Go Custom DIY Closets = Easy yet Professional Results!</p>

											<div class="row row-with-desctop-border-bottom">
												<div class="col-12 col-sm-6">
													<p class="flex-p">
<img src="<?php echo SITEROOT; ?>images/passage-of-time.svg" alt="">
														Just 4-6 hours to install a 10 x 10 closet.
													</p>
												</div>
												<div class="col-12 col-sm-6">
													<p class="flex-p underlined-text">
<img src="<?php echo SITEROOT; ?>images/security-yellow.svg" alt="">
														100% Perfect Fit Guarantee
													</p>
												</div>
												<div class="col-12 col-sm-6">
													<div class="first-fixed-block__text-group--items">
<img src="<?php echo SITEROOT; ?>images/package.svg" alt="">
														<div class="first-fixed-block__text-group--text">
															<p><?php echo $count_diy_inst ?></p>
															<p>Successful DIY Installations</p>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-6">
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">William Gumpenberger, Feb 8, 2021</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"I installed the system with no help and the directions supplied were easy to understand"</p>
															</a>
														</div>
													</div>
												</div>
											</div>

											<div class="mt-5 desktop-show" id="customerTestimonialsEight">
												<p class="tab-block__wrapper--heading">Customer testimonials</p>

												<div class="stars-wrapper diy-instructions js-diy-detached-div">
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Michael Schoen, 2 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"The directions are easy to follow which creates a pain free installation."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Maria Faaeteete, March 29, 2020</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"If we can do it, you can do it!"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Kevin Edie, 2 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Install was much easier than expected"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Terrie Biggs, 6 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"so pleased at the perfect fit and ease of installation"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">AT, a year ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Not only did we have detailed instructions, but the personal cell number of an employee that we could call with any install questions."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Chester, a year ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Design came out exactly as hoped."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Ben C, 12/03/2019</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Installation was a breeze, everything was labeled and according to the design."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">

																<?php echo $stars; ?>
															</div>
															<p class="first-text">Paul Schafer, 10/03/2016</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Closets To Go is simply fantastic! Very easy to work with…"</p>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- <div class="mt-4 mobile-show">
												<button id="custButton101" title="Customer video testimonials" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#customerVideo" data-toggle="modal" data-target="#mobile-diy-modal">
													Customer video testimonials
												</button>
												<div class="custContent101" id="cust101">
													<p style="display: block; padding: 0 0.75rem;">
													<iframe width="330" height="300" src="https://www.youtube.com/embed/Uknp66eawx8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
													</p>
												</div> -->

										<!-- <button title="Installation video Library" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#instalationVideo" data-toggle="modal" data-target="#mobile-diy-modal">
													Installation video Library
												</button> -->
										<!-- <button title="Customer testimonials" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#customerTestimonialsOne" data-toggle="modal" data-target="#mobile-diy-modal">
													Customer testimonials
												</button> -->
										<!-- </div> -->
									</div>
								</div>
							</div>


							<!-- <script>
								var button101 = document.getElementById('custButton101');
								var div101 = document.getElementById('cust101');

								div101.style.display = 'none';

								button101.onclick = function() {
									if (div101.style.display !== 'none') {
										div101.style.display = 'none';
									} else {
										div101.style.display = 'block';
									}
								};
							</script> -->


							<div class="tab-block__wrapper" id="tab-content-11">
								<div class="row">
									<div class="col-12 col-lg-6">
										<div class="tab-block__wrapper--content">
											<p class="tab-block__wrapper--heading with-button">
												<span> Attaching Drawers & Baskets:</span>
											</p>

											<p class="tab-block__wrapper--tools">Tools Required</p>
											<div class="tab-block__wrapper--image-wrap">
												<button title="Left" class="tab-block__wrapper--image-wrap__prev" style="display: none">
													<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
														<path d="M0 0h24v24H0V0z" fill="none"></path>
														<path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"></path>
													</svg>
												</button>
												<div class="tab-block__wrapper--image-content">
													<div class="image-group" style="width: 110px;">
														<?php echo $icon_id_ScrewGunTool ?>
													</div>
													<div class="image-group" style="width: 110px;">
														<?php echo $icon_id_ScrewDriverTool ?>
													</div>
													<div class="image-group" style="width: 110px; border-color: white;">

													</div>
													<div class="image-group" style="width: 110px; border-color: white;">

													</div>
													<div class="image-group" style="width: 110px; border-color: white;">

													</div>
												</div>
												<button title="Right" class="tab-block__wrapper--image-wrap__next">
													<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
														<path d="M0 0h24v24H0V0z" fill="none"></path>
														<path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path>
													</svg>
												</button>
											</div>

											<div class="mt-4 mobile-show">
												<button id="descButtonI" title="Description" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#collapseEight-one" data-toggle="modal" data-target="#mobile-diy-modal">
												Attaching Drawers & Baskets:
												</button>
												<div class="descContentI" id="descI">
													<p style="display:block; padding: 0 0.75rem;">
														To ready your drawers for assembly you’ll first need to remove the drawer member of the slide from the slides that are attached to the side panels. To do this, just extend the drawer slide member out from the cabinet slide member and use the release lever to disengage the drawer member from the cabinet member. All slide members are universal meaning they can work on right or left sides.
														Assemble the drawers according to the instruction manual and install in sections according to plans.
														To install, simply position the drawer between the cabinet member and the drawer member of the drawer slides to ensure proper alignment then proceed to push the drawer until fully closed. Then open and close the drawer to test for a smooth operation making sure nothing is binding. Repeat this process for all drawers.
														Installing baskets requires nothing more than placing the appropriate basket into position and making sure they are secured by the retaining clips. Open and close the basket fully in both directions to ensure proper function and to ensure the baskets are seated correctly in the clips.
													</p>
												</div>

												<button id="descButtonJ" title="Helpful tip section" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#helpfulTipEight" data-toggle="modal" data-target="#mobile-diy-modal">
													Helpful tips
												</button>
												<div class="descContentJ" id="descJ">
													<p style="display:block; padding: 0 0.75rem;">
														<b>Adjusting the drawer fronts:</b><br>
														Drawer faces are attached to the drawer box via an eccentric cam also known as a drawer front adjuster. This allows the drawer face to move independent of the drawer box giving you the ability to move the face an ⅛” in any direction. If drawers need to be adjusted, you just simply loosen the machine screw used to attach the drawer face to the drawer box slightly (leaving a bit of pressure holding the face in position) then move the drawer face to the desired position then retighten the screws and proceed to the next drawer until all drawers are adjusted to your satisfaction. Once you’ve achieved the desired outcome, proceed to the final step in setting the face by securing them permanently into position using 1 ¼” screws in the two open holes inside the drawer box front.
														<br><b>Troubleshooting hint:</b><br>
														If you find after adjusting your drawers that every drawer seems to be off from corner to corner all in the same direction, often it's because the cabinet section is not plumb. To fix this issue, simply unscrew the cleat screw ( in the case there are several sections along a wall, remove all cleat screws to ensure to properly set sections to plumb position.) and reposition the section in a manner where the drawers align straight up and down. Reattach your cleats and you should be good to go!
													</p>
												</div>
											</div>

											<script>
												var buttonI = document.getElementById('descButtonI');
												var divI = document.getElementById('descI');

												var buttonJ = document.getElementById('descButtonJ');
												var divJ = document.getElementById('descJ');

												divI.style.display = 'none';
												divJ.style.display = 'none';

												buttonI.onclick = function() {
													if (divI.style.display !== 'none') {
														divI.style.display = 'none';
													} else {
														divI.style.display = 'block';
													}
												};

												buttonJ.onclick = function() {
													if (divJ.style.display !== 'none') {
														divJ.style.display = 'none';
													} else {
														divJ.style.display = 'block';
													}
												};
											</script>

											<div class="mt-5 desktop-show">
												<div id="accordionEight">
													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="headingEight-one" data-toggle="collapse" data-target="#collapseEight-one" aria-expanded="false" aria-controls="collapseEight-one">
															<p class="card-collapse__title">
																<span>Attaching Drawers & Baskets:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
																</h5>
														</div>

														<div id="collapseEight-one" class="collapse" aria-labelledby="headingEight-one" data-parent="#accordionEight">
															<div class="card-collapse__body js-diy-detached-div">
																<p>
																	To ready your drawers for assembly you’ll first need to remove the drawer member of the slide from the slides that are attached to the side panels. To do this, just extend the drawer slide member out from the cabinet slide member and use the release lever to disengage the drawer member from the cabinet member. All slide members are universal meaning they can work on right or left sides.
																	<br><br>
																	Assemble the drawers according to the instruction manual and install in sections according to plans.
																	<br><br>
																	To install, simply position the drawer between the cabinet member and the drawer member of the drawer slides to ensure proper alignment then proceed to push the drawer until fully closed. Then open and close the drawer to test for a smooth operation making sure nothing is binding. Repeat this process for all drawers.
																	<br><br>
																	Installing baskets requires nothing more than placing the appropriate basket into position and making sure they are secured by the retaining clips. Open and close the basket fully in both directions to ensure proper function and to ensure the baskets are seated correctly in the clips.

																</p>

																<!-- <div class="mt-4 mb-3 card-collapse__body--images">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-1.png" alt="" class="img-fluid">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-2.png" alt="" class="img-fluid">
																	<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-3.png" alt="" class="img-fluid">
																</div> -->
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="mt-5 desktop-show" id="helpfulTipEight">
												<p class="tab-block__wrapper--heading">Helpful tips</p>

												<div class="js-diy-detached-div" id="secondAccordionEight3">
													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingEight-one1" data-toggle="collapse" data-target="#secondCollapseEight-one1" aria-expanded="false" aria-controls="secondCollapseEight-one">
															<p class="card-collapse__title">
																<span>Adjusting the drawer fronts: </span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseEight-one1" class="collapse" aria-labelledby="secondHeadingEight-one1" data-parent="#secondAccordionEight3">
															<div class="card-collapse__body">
																Drawer faces are attached to the drawer box via an eccentric cam also known as a drawer front adjuster. This allows the drawer face to move independent of the drawer box giving you the ability to move the face an ⅛” in any direction. If drawers need to be adjusted, you just simply loosen the machine screw used to attach the drawer face to the drawer box slightly (leaving a bit of pressure holding the face in position) then move the drawer face to the desired position then retighten the screws and proceed to the next drawer until all drawers are adjusted to your satisfaction. Once you’ve achieved the desired outcome, proceed to the final step in setting the face by securing them permanently into position using 1 ¼” screws in the two open holes inside the drawer box front.
															</div>
														</div>
													</div>

													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingEight-Eight8" data-toggle="collapse" data-target="#secondCollapseEight-Eight8" aria-expanded="false" aria-controls="secondCollapseEight-Eight8">
															<p class="card-collapse__title">
																<span>Troubleshooting hint:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseEight-Eight8" class="collapse" aria-labelledby="secondHeadingEight-Eight8" data-parent="#secondAccordionEight3">
															<div class="card-collapse__body">
																If you find after adjusting your drawers that every drawer seems to be off from corner to corner all in the same direction, often it's because the cabinet section is not plumb. To fix this issue, simply unscrew the cleat screw ( in the case there are several sections along a wall, remove all cleat screws to ensure to properly set sections to plumb position.) and reposition the section in a manner where the drawers align straight up and down. Reattach your cleats and you should be good to go!
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>


									<div class="col-12 col-lg-6">
										<div class="tab-block__wrapper--video-block">
											<div class="tab-block__wrapper--video-video">
<img src="<?php echo SITEROOT; ?>images/Placeholder-DIY-Steps/UpdateDIYStepsDrawersBaskets.jpg" alt="" class="img-fluid">
											</div>
											<p class="tab-block__wrapper--video-heading">Closets To Go Custom DIY Closets = Easy yet Professional Results!</p>

											<div class="row row-with-desctop-border-bottom">
												<div class="col-12 col-sm-6">
													<p class="flex-p">
<img src="<?php echo SITEROOT; ?>images/passage-of-time.svg" alt="">
														Just 4-6 hours to install a 10 x 10 closet.
													</p>
												</div>
												<div class="col-12 col-sm-6">
													<p class="flex-p underlined-text">
<img src="<?php echo SITEROOT; ?>images/security-yellow.svg" alt="">
														100% Perfect Fit Guarantee
													</p>
												</div>
												<div class="col-12 col-sm-6">
													<div class="first-fixed-block__text-group--items">
<img src="<?php echo SITEROOT; ?>images/package.svg" alt="">
														<div class="first-fixed-block__text-group--text">
															<p><?php echo $count_diy_inst ?></p>
															<p>Successful DIY Installations</p>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-6">
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">William Gumpenberger, Feb 8, 2021</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"I installed the system with no help and the directions supplied were easy to understand"</p>
															</a>
														</div>
													</div>
												</div>
											</div>

											<div class="mt-5 desktop-show" id="customerTestimonialsEight">
												<p class="tab-block__wrapper--heading">Customer testimonials</p>

												<div class="stars-wrapper diy-instructions js-diy-detached-div">
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Michael Schoen, 2 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"The directions are easy to follow which creates a pain free installation."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Maria Faaeteete, March 29, 2020</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"If we can do it, you can do it!"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Kevin Edie, 2 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Install was much easier than expected"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Terrie Biggs, 6 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"so pleased at the perfect fit and ease of installation"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">AT, a year ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Not only did we have detailed instructions, but the personal cell number of an employee that we could call with any install questions."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Chester, a year ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Design came out exactly as hoped."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Ben C, 12/03/2019</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Installation was a breeze, everything was labeled and according to the design."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">

																<?php echo $stars; ?>
															</div>
															<p class="first-text">Paul Schafer, 10/03/2016</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Closets To Go is simply fantastic! Very easy to work with…"</p>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- <div class="mt-4 mobile-show">
												<button id="custButton102" title="Customer video testimonials" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#customerVideo" data-toggle="modal" data-target="#mobile-diy-modal">
													Customer video testimonials
												</button>
												<div class="custContent102" id="cust102">
													<p style="display: block; padding: 0 0.75rem;">
													<iframe width="330" height="300" src="https://www.youtube.com/embed/_OVBgaG6F5Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
													</p>
												</div> -->

										<!-- <button title="Installation video Library" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#instalationVideo" data-toggle="modal" data-target="#mobile-diy-modal">
													Installation video Library
												</button> -->
										<!-- <button title="Customer testimonials" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#customerTestimonialsOne" data-toggle="modal" data-target="#mobile-diy-modal">
													Customer testimonials
												</button> -->
										<!-- </div> -->
									</div>
								</div>
							</div>


							<!-- <script>
								var button102 = document.getElementById('custButton102');
								var div102 = document.getElementById('cust102');

								div102.style.display = 'none';

								button102.onclick = function() {
									if (div102.style.display !== 'none') {
										div102.style.display = 'none';
									} else {
										div102.style.display = 'block';
									}
								};
							</script> -->

							<div class="tab-block__wrapper" id="tab-content-12">
								<div class="row">
									<div class="col-12 col-lg-6">
										<div class="tab-block__wrapper--content">
											<p class="tab-block__wrapper--heading with-button">
												<span>Placing Wardrobe Tubes & Adjustable Shelves:</span>
											</p>

											<p class="tab-block__wrapper--tools">Tools Required</p>
											<div class="tab-block__wrapper--image-wrap">
												<button title="Left" class="tab-block__wrapper--image-wrap__prev" style="display: none">
													<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
														<path d="M0 0h24v24H0V0z" fill="none"></path>
														<path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"></path>
													</svg>
												</button>
												<div class="tab-block__wrapper--image-content">
													<div class="image-group" style="width: 110px;">
														<?php echo $icon_id_TapeMeasureTool; ?>
													</div>
													<div class="image-group" style="width: 110px; border-color: white;">

													</div>
													<div class="image-group" style="width: 110px; border-color: white;">

													</div>
													<div class="image-group" style="width: 110px; border-color: white;">

													</div>
													<div class="image-group" style="width: 110px; border-color: white;">

													</div>
												</div>
												<button title="Right" class="tab-block__wrapper--image-wrap__next">
													<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
														<path d="M0 0h24v24H0V0z" fill="none"></path>
														<path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path>
													</svg>
												</button>
											</div>

											<div class="mt-4 mobile-show">
												<button id="descButtonK" title="Description" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#collapseEight-one" data-toggle="modal" data-target="#mobile-diy-modal">
												Placing Wardrobe Tubes & Adjustable Shelves: 
												</button>
												<div class="descContentK" id="descK">
													<p style="display:block; padding: 0 0.75rem;">
														By this time in the installation process all the heavy work has been completed and you’re starting to see everything coming together. Installing the shelving and tubes require nothing more than inserting shelf pins into system holes and making sure they are all in the same numbered hole.

														Because shelving needs are different from user to user, where to place and adjust the shelves is up to you. Things to consider when placing shelves into position will also depend on what you intend to store on those shelves. Shoes for instance will require less space between each other than folded items or boxes.

														When placing the pole cups into the closet system, we suggest starting the position of the pole cup one hole down from the fixed shelf. This will allow more space for you to access the hanging rod depending on the type of hangers you use.
													</p>
												</div>

												<button id="descButtonL" title="Helpful tip section" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#helpfulTipEight" data-toggle="modal" data-target="#mobile-diy-modal">
													Helpful tips
												</button>
												<div class="descContentL" id="descL">
													<p style="display:block; padding: 0 0.75rem">
														<b>Installing corner adjustable shelves:</b><br>
														Depending on distance between the fixed shelves where the adjustable shelving will be placed, you may need to remove the fixed shelf in order to fit the adjustable shelving in place. This is due to the fact the corner shelves are large and the distance from corner to corner is such that it may make it difficult to fit between the fixed shelves.
														<br>
														<b>Equal distancing of your shelves:</b><br>
														A simple method to placing shelves in sections where you prefer equal spacing between them would be to simply reference your room elevation view, count the number of shelves between the fixed shelves. Once you determine the number of shelves each section will need, measure the distance between the fixed shelves and divide that number by the number of shelves plus one. (The plus one accounts for the spaces the shelving creates. 3 adjustable shelves create 4 spaces.) Using a tape measure, position the first shelf to the nearest adjustable shelf holes, insert the 4 shelf clips, place the shelf and repeat with all remaining shelves.
													</p>
												</div>
											</div>

											<script>
												var buttonK = document.getElementById('descButtonK');
												var divK = document.getElementById('descK');

												var buttonL = document.getElementById('descButtonL');
												var divL = document.getElementById('descL');

												divK.style.display = 'none';
												divL.style.display = 'none';

												buttonK.onclick = function() {
													if (divK.style.display !== 'none') {
														divK.style.display = 'none';
													} else {
														divK.style.display = 'block';
													}
												};

												buttonL.onclick = function() {
													if (divL.style.display !== 'none') {
														divL.style.display = 'none';
													} else {
														divL.style.display = 'block';
													}
												};
											</script>

											<div class="mt-5 desktop-show">
												<div id="accordionEight">
													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="headingEight-one" data-toggle="collapse" data-target="#collapseEight-one" aria-expanded="false" aria-controls="collapseEight-one">
															<p class="card-collapse__title">
																<span>Placing Wardrobe Tubes & Adjustable Shelves:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
																</h5>
														</div>

														<div id="collapseEight-one" class="collapse" aria-labelledby="headingEight-one" data-parent="#accordionEight">
															<div class="card-collapse__body js-diy-detached-div">
																<p>
																	By this time in the installation process all the heavy work has been completed and you’re starting to see everything coming together. Installing the shelving and tubes require nothing more than inserting shelf pins into system holes and making sure they are all in the same numbered hole.
																	<br><br>
																	Because shelving needs are different from user to user, where to place and adjust the shelves is up to you. Things to consider when placing shelves into position will also depend on what you intend to store on those shelves. Shoes for instance will require less space between each other than folded items or boxes.
																	<br><br>
																	When placing the pole cups into the closet system, we suggest starting the position of the pole cup one hole down from the fixed shelf. This will allow more space for you to access the hanging rod depending on the type of hangers you use.

																</p>

																<!-- <div class="mt-4 mb-3 card-collapse__body--images">
														<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-1.png" alt="" class="img-fluid">
														<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-2.png" alt="" class="img-fluid">
														<img src="<?php echo SITEROOT; ?>images/diy-instructions-medium-img-3.png" alt="" class="img-fluid">
													</div> -->
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="mt-5 desktop-show" id="helpfulTipEight">
												<p class="tab-block__wrapper--heading">Helpful tips</p>

												<div class="js-diy-detached-div" id="secondAccordionEight12">
													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingEight-one12" data-toggle="collapse" data-target="#secondCollapseEight-one12" aria-expanded="false" aria-controls="secondCollapseEight-one12">
															<p class="card-collapse__title">
																<span>Installing corner adjustable shelves:</span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseEight-one12" class="collapse" aria-labelledby="secondHeadingEight-one12" data-parent="#secondAccordionEight12">
															<div class="card-collapse__body">
																Depending on distance between the fixed shelves where the adjustable shelving will be placed, you may need to remove the fixed shelf in order to fit the adjustable shelving in place. This is due to the fact the corner shelves are large and the distance from corner to corner is such that it may make it difficult to fit between the fixed shelves.
															</div>
														</div>
													</div>

													<div class="card-collapse">
														<div class="card-collapse__header collapsed" id="secondHeadingEight-Eight12" data-toggle="collapse" data-target="#secondCollapseEight-Eight12" aria-expanded="false" aria-controls="secondCollapseEight-Eight12">
															<p class="card-collapse__title">
																<span>Equal distancing of your shelves: </span>
																<img class="collapse-icon collapse-icon__plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
																<img class="collapse-icon collapse-icon__minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
															</p>
														</div>

														<div id="secondCollapseEight-Eight12" class="collapse" aria-labelledby="secondHeadingEight-Eight12" data-parent="#secondAccordionEight12">
															<div class="card-collapse__body">
																A simple method to placing shelves in sections where you prefer equal spacing between them would be to simply reference your room elevation view, count the number of shelves between the fixed shelves. Once you determine the number of shelves each section will need, measure the distance between the fixed shelves and divide that number by the number of shelves plus one. (The plus one accounts for the spaces the shelving creates. 3 adjustable shelves create 4 spaces.) Using a tape measure, position the first shelf to the nearest adjustable shelf holes, insert the 4 shelf clips, place the shelf and repeat with all remaining shelves.
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-12 col-lg-6">
										<div class="tab-block__wrapper--video-block">
											<div class="tab-block__wrapper--video-video">
<img src="<?php echo SITEROOT; ?>images/Placeholder-DIY-Steps/UpdatedDIYStepsTubesShelves.jpg" alt="" class="img-fluid">
											</div>
											<p class="tab-block__wrapper--video-heading">Closets To Go Custom DIY Closets = Easy yet Professional Results!</p>

											<div class="row row-with-desctop-border-bottom">
												<div class="col-12 col-sm-6">
													<p class="flex-p">
<img src="<?php echo SITEROOT; ?>images/passage-of-time.svg" alt="">
														Just 4-6 hours to install a 10 x 10 closet.
													</p>
												</div>
												<div class="col-12 col-sm-6">
													<p class="flex-p underlined-text">
<img src="<?php echo SITEROOT; ?>images/security-yellow.svg" alt="">
														100% Perfect Fit Guarantee
													</p>
												</div>
												<div class="col-12 col-sm-6">
													<div class="first-fixed-block__text-group--items">
<img src="<?php echo SITEROOT; ?>images/package.svg" alt="">
														<div class="first-fixed-block__text-group--text">
															<p><?php echo $count_diy_inst ?></p>
															<p>Successful DIY Installations</p>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-6">
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">William Gumpenberger, Feb 8, 2021</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"I installed the system with no help and the directions supplied were easy to understand"</p>
															</a>
														</div>
													</div>
												</div>
											</div>

											<div class="mt-5 desktop-show" id="customerTestimonialsEight">
												<p class="tab-block__wrapper--heading">Customer testimonials</p>

												<div class="stars-wrapper diy-instructions js-diy-detached-div">
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Michael Schoen, 2 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"The directions are easy to follow which creates a pain free installation."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Maria Faaeteete, March 29, 2020</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"If we can do it, you can do it!"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Kevin Edie, 2 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Install was much easier than expected"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Terrie Biggs, 6 years ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"so pleased at the perfect fit and ease of installation"</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">AT, a year ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Not only did we have detailed instructions, but the personal cell number of an employee that we could call with any install questions."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Chester, a year ago</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Design came out exactly as hoped."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">
																<?php echo $stars; ?>
															</div>
															<p class="first-text">Ben C, 12/03/2019</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Installation was a breeze, everything was labeled and according to the design."</p>
															</a>
														</div>
													</div>
													<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/reviewblueicon.svg" alt="" class="block-stars__wrapper--image">
														<div class="block-stars__wrapper--text">
															<div class="stars-container">

																<?php echo $stars; ?>
															</div>
															<p class="first-text">Paul Schafer, 10/03/2016</p>
															<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
																<p>"Closets To Go is simply fantastic! Very easy to work with…"</p>
															</a>
														</div>
													</div>
												</div>
											</div>

										</div>
										<!-- <div class="mt-4 mobile-show">
												<button id="custButton103" title="Customer video testimonials" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#customerVideo" data-toggle="modal" data-target="#mobile-diy-modal">
													Customer video testimonials
												</button>
												<div class="custContent103" id="cust103">
													<p style="display: block; padding: 0 0.75rem;">
													<iframe width="330" height="300" src="https://www.youtube.com/embed/XINCPrtiGaM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
													</p>
												</div> -->

										<!-- <button title="Installation video Library" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#instalationVideo" data-toggle="modal" data-target="#mobile-diy-modal">
													Installation video Library
												</button> -->
										<!-- <button title="Customer testimonials" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#customerTestimonialsOne" data-toggle="modal" data-target="#mobile-diy-modal">
													Customer testimonials
												</button> -->
										<!-- </div> -->
									</div>
								</div>
							</div>
							<!-- 
							<script>
								var button103 = document.getElementById('custButton103');
								var div103 = document.getElementById('cust103');

								div103.style.display = 'none';

								button103.onclick = function() {
									if (div103.style.display !== 'none') {
										div103.style.display = 'none';
									} else {
										div103.style.display = 'block';
									}
								};
							</script> -->

						</div>
					</div>
				</div>
			</div>
			</div>
		</section>


		<section class="video-block desktop-show" id="customerVideo">
			<div class="wrapper js-diy-detached-div">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="video-block__without-shadow">
								<div class="row">
									<div class="col-12 desktop-show">
										<p class="video-block__heading">Customer video testimonials</p>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="video-block__videos diy-mobile-video">
											<div class="video-block__videos--video">
												<div class="embed-responsive embed-responsive-16by9">
													<!-- Dinamic content - title and name for the video -->
													<iframe width="560" height="315" src="https://www.youtube.com/embed/Uknp66eawx8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
												</div>
											</div>
											<div class="video-block__videos--video">
												<div class="embed-responsive embed-responsive-16by9">
													<!-- Dinamic content - title and name for the video -->
													<iframe width="560" height="315" src="https://www.youtube.com/embed/_OVBgaG6F5Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
												</div>
											</div>
											<div class="video-block__videos--video">
												<div class="embed-responsive embed-responsive-16by9">
													<!-- Dinamic content - title and name for the video -->
													<iframe width="560" height="315" src="https://www.youtube.com/embed/n4kooTnJmWw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
												</div>
											</div>
											<!-- <div class="video-block__videos--video">
												<div class="embed-responsive embed-responsive-16by9">
												Dinamic content - title and name for the video 
													<iframe class="yvideo" width="100%" height="100%" name="" title="" src="https://www.youtube.com/embed/Wb0JINqX71w?autoplay=0&enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
													</iframe>
												</div>
											</div> -->
										</div>
									</div>
									<div class="col-12 text-center desktop-show">
										<a href="#" title="Explore all" class="link-button mt-4 mb-0">
											Explore all
											<?php echo $icon_id_left_arrow_3; ?>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="video-block desktop-show" id="instalationVideo">
			<div class="wrapper js-diy-detached-div">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="video-block__shadow">
								<div class="row">
									<div class="col-12 desktop-show">
										<p class="video-block__heading">Installation Video Library</p>
										<p class="video-block__text">
											Have a DIY question? Explore these short how- to closet installation videos to quickly find the answers to the most commonly asked questions.
										</p>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="video-block__videos diy-mobile-video">
											<div class="video-block__videos--video">
												<div class="embed-responsive embed-responsive-16by9">
													<!-- Dinamic content - title and name for the video -->
													<iframe class="yvideo" width="100%" height="100%" name="" title="" src="https://www.youtube.com/embed/kNUCpwKuZig" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
													</iframe>
												</div>
											</div>
											<div class="video-block__videos--video">
												<div class="embed-responsive embed-responsive-16by9">
													<!-- Dinamic content - title and name for the video -->
													<iframe class="yvideo" width="100%" height="100%" name="" title="" src="https://www.youtube.com/embed/gdVJQsJWA5s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
													</iframe>
												</div>
											</div>
											<div class="video-block__videos--video">
												<div class="embed-responsive embed-responsive-16by9">
													<!-- Dinamic content - title and name for the video -->
													<iframe class="yvideo" width="100%" height="100%" name="" title="" src="https://www.youtube.com/embed/mU2S-D1bTZk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
													</iframe>
												</div>
											</div>
											<div class="video-block__videos--video">
												<div class="embed-responsive embed-responsive-16by9">
													<!-- Dinamic content - title and name for the video -->
													<iframe class="yvideo" width="100%" height="100%" name="" title="" src="https://www.youtube.com/embed/mHI64Khnp1g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
													</iframe>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="video-block__videos diy-mobile-video">
											<div class="video-block__videos--video">
												<div class="embed-responsive embed-responsive-16by9">
													<!-- Dinamic content - title and name for the video -->
													<iframe class="yvideo" width="100%" height="100%" name="" title="" src="https://www.youtube.com/embed/XINCPrtiGaM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
													</iframe>
												</div>
											</div>
											
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12 desktop-show text-center">
										<a href="#" title="Explore all" class="link-button">
											Explore all
											<?php echo $icon_id_left_arrow_3; ?>
										</a>
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
	require_once($real_root . '/pages/views/virtual-assistant.php');
	require_once($real_root . '/pages/views/mobile-show-footer-buttons.php');
	require_once($real_root . '/pages/views/footer.php');
	require_once($real_root . '/pages/views/modal-perfect-fit-guarantee.php');
	require_once($real_root . '/pages/views/modal-free-shipping.php');
	require_once($real_root . '/pages/views/modal-save-to-idea-folder.php');
	require_once($real_root . '/pages/views/modal-mobile-campany-block.php');

	?>

	<script src="<?php echo SITEROOT; ?>app.js"></script>

</body>

</html>



