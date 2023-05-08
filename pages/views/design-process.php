<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>ClosetsToGo</title>
	<meta name="description" content="home description">
	<link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">
</head>

<body class="clearfix idea-folder-popup">
	<?php
	require_once($real_root . '/pages/views/header.php');
	?>


	<!-- incorporate bootstrap and keep the og card styles-->
	<main class="main clearfix">

		<section class="breadcrumb-block about-us desktop-show">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="breadcrumb-block__wrapper" aria-label="breadcrumb">
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo SITEROOT; ?>/" title="Home">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page" title="About us">Design Process</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<div class="container-fluid">
			<h1 class="title__compare title__compare__desktop" style="padding-top: 1% !important; padding-bottom: 0% !important;">Design Process Details</h1>
			<div class="tab-content__text-wrap js-text-wrap nd-read-more textExpanding">
				<div class="tab-content__text-wrap--content js-hidden-text small-text">
					<p style="text-align: center;">
						Technology when you want it, people when you don't!
					</p>
				</div>
			</div>
		</div>
		<hr style="width: 60% !important; padding-bottom:1% !important;" />

		<section class="company-block about-us" id="mobile-full-view">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-6 col-lg-5 company-block__images" style="height: 275px !important;">
							<img src="<?php echo SITEROOT; ?>images/ProcessPageWeDesign.jpeg" alt="lady sitting at desk with laptop typing" class="js-get-image imagecloset">
						</div>

						<!-- <div class="col-12 col-lg-6 company-block__text">
							<div class="company-block__text--wrapper">
								<h2 class="you-design-block__wrapper--heading" style="font-family: 'OpenSans-Regular', sans-serif; font-size: 14px;">
									<div class="desktop-show">
										<a href="<?php echo SITEROOT; ?>request-design.html" title="We design" class="we-design">WE DESIGN</a>
									</div>
								</h2>
								<p class="company-block__text--text">
									Our Online Design Request form is a step by step questionnaire that will guide you through how to take measurements and gather all pertinent data required to start your design. If any other information is needed our Design Team will reach out to you. At the end of the form you can upload images of your space and/or competitive plans and bids. Once our Design Team receives this pertinent information, a design will be created and emailed to you typically within a few days If you selected the expedited service request all efforts will be made to draft an original design within a 24 hour period. Either way, please check your email and spam folder. We also follow up with a phone call to make sure you have received your design.
									<br><br>
									To meet your needs in a timely manner, we request that you look over the design and promptly get back to us with any questions, comments or revisions. We will revise the design until it meets all engineering parameters and meets your expectations!
									<br><br>
									After a design has been finalized and you are ready to proceed with the purchase, a final measurement is required to verify all dimensions. We have a motto at Closets To Go that has served everyone well: “Measure Twice, Cut Once”! Upon receiving the confirmed dimensions and making any final adjustments to the design, a purchase agreement will be sent to you for e-signature. Once complete, payment will be collected and the design will begin processing.

								</p>
							</div>
							<div class="button-holder desktop-show">
								<button data-readAll="Full description" data-readLess="Less description" class="link-button js-btn-view-all-text" title='Full description'>
									<span>Full description</span>
									<?php echo $icon_id_left_arrow_3; ?>
								</button>
							</div>
						</div> -->
						<div class="col-12 col-lg-5">
							<div class="you-design-block__wrapper">
								<h3 class="you-design-block__wrapper--heading">
								<div class="">
										<a href="<?php echo SITEROOT; ?>request-design.html" title="We design" class="we-design" style="font-size: 12px; font-family:'OpenSans-Regular', sans-serif; letter-spacing: normal; width: 110px; text-align: center; line-height: 1.875;">WE DESIGN</a>
								</div>
								</h3>
								<p style="font-size: 15px !important; font-family:'OpenSans-Regular', sans-serif; line-height: 1.875;">
								Our Online Design Request form is a step by step questionnaire that will guide you through how to take measurements and gather all pertinent data required to start your design. If any other information is needed our Design Team will reach out to you. At the end of the form you can upload images of your space and/or competitive plans and bids.
								
								<p class="you-design-block__wrapper--text small-text js-show-text" style="padding-top: 0% !important; font-size: 15px !important; ">
								Once our Design Team receives this pertinent information, a design will be created and emailed to you typically within a few days If you selected the expedited service request all efforts will be made to draft an original design within a 24 hour period.	
								Either way, please check your email and spam folder. We also follow up with a phone call to make sure you have received your design.<br>
								To meet your needs in a timely manner, we request that you look over the design and promptly get back to us with any questions, comments or revisions. We will revise the design until it meets all engineering parameters and meets your expectations!
								<br><br>
								After a design has been finalized and you are ready to proceed with the purchase, a final measurement is required to verify all dimensions. We have a motto at Closets To Go that has served everyone well: “Measure Twice, Cut Once”! Upon receiving the confirmed dimensions and making any final adjustments to the design, a purchase agreement will be sent to you for e-signature. Once complete, payment will be collected and the design will begin processing.
								</p>
								<div class="button-holder desktop-show" style="padding-top: 0% !important;">
									<button data-readAll="Full description" data-readLess="Less description" class="link-button js-btn-view-all-text" title='Full description'>
										<span>Full description</span>
										<?php echo $icon_id_left_arrow_3; ?>
									</button>
								</div>
								<div class="button-holder mobile-show mt-3" style="padding-top: 0%; padding-bottom: 6% !important;">
									<button data-readAll="Full description" data-readLess="Less description" class="link-button js-btn-view-all-text" title='Full description'>
										<span>Full description</span>
										<?php echo $icon_id_left_arrow_3; ?>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="you-design-block we-desing-block about-us" id="mobile-full-view">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
						<!-- <div class="col-12 col-lg-5">
							<div class="you-design-block__wrapper">
								<h2 class="you-design-block__wrapper--heading">Revision</h2>
								<p class="you-design-block__wrapper--text">
									<b>5</b>. Steps 4 and 5 will repeat until there are no additional revisions to be made<br>
									<b>6</b>. Designer will have client double check the measurements and verify shipping information<br>
								</p>
							</div>
						</div> -->
						<div class="col-12 col-lg-5">
							<div class="you-design-block__wrapper">
								<h3 class="you-design-block__wrapper--heading">
								<div class="">
										<a href="#" title="We design" class="you-design" style="font-size: 12px; font-family:'OpenSans-Regular', sans-serif; letter-spacing: normal; width: 210px; text-align: center; line-height: 1.875;">YOU DESIGN - COMING SOON</a>
								</div>
								</h3>
								<p style="font-size: 15px !important; font-family:'OpenSans-Regular', sans-serif; line-height: 1.875;">
								Our easy-to-use yet comprehensive design tool puts you in the driver's seat and is covered by our Perfect Fit Guarantee!   It guides you through the design process step-by-step and yields professional results. You can design on your own timeline, save for later, make all changes when needed, sign purchase agreement and complete the purchase all within your personal account.
								</p>
								<p class="you-design-block__wrapper--text small-text js-show-text" style="padding-top: 0% !important; font-size: 15px !important;">
								If you have any questions along the way, we are just a phone call away. And rest assured ALL incoming designs are peer reviewed by our Design Team for viability to  ensure  the finished product will serve you in the manner intended.  Even after your purchase, if it is discovered that the design needs additional attention, one of our DesignTeam members will reach out to you to review the details and to help make the necessary changes and amend the purchase agreement and order. We also provide you with our Perfect Fit Guarantee!  Because we always require a final measurement verification, we rarely use it but, in a rare circumstance, where you mismeasure, we will remake the part(s) for free. (we just ask that you cover the shipping) We have a motto at Closets To Go that has served both parties well: “Measure Twice, Cut Once”! 
								<br>
								Your order is now off to production! 

								</p>
								<div class="button-holder desktop-show" style="padding-top: 0% !important;">
									<button data-readAll="Full description" data-readLess="Less description" class="link-button js-btn-view-all-text" title='Full description'>
										<span>Full description</span>
										<?php echo $icon_id_left_arrow_3; ?>
									</button>
								</div>
								<div class="button-holder mobile-show mt-3" style="padding-bottom: 6% !important;">
									<button data-readAll="Full description" data-readLess="Less description" class="link-button js-btn-view-all-text" title='Full description'>
										<span>Full description</span>
										<?php echo $icon_id_left_arrow_3; ?>
									</button>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-7">
							<div class="you-design-block__image" style="height: 320px !important; width: fit-content;">
								<img src="<?php echo SITEROOT; ?>images/ProcessPageYouDesign1.jpeg" alt="" class="js-get-image" style="height: 320px !important; border-radius:2%;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


	</main>
	<style>
		h1 {
			text-align: center;
			font-size: 2em;
			padding-bottom: 3%;
			color: #ed9c00;
		}


		.EasyDiy1 {
			padding: 10px;
			float: left;
			height: 200px;
			width: 250px;
		}

		.imageText1 {
			font-size: 16px;
			width: 800px;
			border: 2px solid white;
			height: 200px;

		}

		.EasyDiy2 {
			padding: 10px;
			float: right;
			height: 200px;
			width: 200px;
		}

		.imageText2 {
			font-size: 16px;
			width: 800px;
			border: 2px solid white;
			height: 200px;

		}

		.textExpanding {
			margin-left: auto;
			margin-right: auto;
			padding-right: 20%;
			padding-left: 20%;
			border-radius: 2%;
		}

		.imagecloset{
			height: 275px !important; 
			width: 400px !important; 
			border-radius:1%;
		}

		@media(max-width: 992px) {
			.textExpanding {
				margin-left: auto !important;
				margin-right: auto !important;
				padding-right: 1% !important;
				padding-left: 1% !important;
				border-radius: 2%;
				text-align: center;
			}
			.imagecloset {
				width: 350px !important;
			}
			

			.EasyDiy1 .EasyDiy2 {
				display: none !important;

			}
		}

		​
	</style>






	<?php
	require_once($real_root . '/pages/views/virtual-assistant.php');
	require_once($real_root . '/pages/views/mobile-show-footer-buttons.php');
	require_once($real_root . '/pages/views/footer.php');
	require_once($real_root . '/pages/views/modal-perfect-fit-guarantee.php');
	require_once($real_root . '/pages/views/modal-free-shipping.php');
	require_once($real_root . '/pages/views/modal-save-to-idea-folder.php');
	?>

	<script src="<?php echo SITEROOT; ?>app.js"></script>

</body>

</html>