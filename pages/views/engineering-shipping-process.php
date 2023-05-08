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
									<li class="breadcrumb-item active" aria-current="page" title="About us">Engineering Shipping Process</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<div class="container-fluid">
			<h1 class="title__compare title__compare__desktop" style="padding-top: 1% !important; padding-bottom: 0%;">Engineering, Manufacturing, Assembly, Lighting, Packaging & Shipping</h1>
			<div class="tab-content__text-wrap js-text-wrap nd-read-more textExpanding">
				<div class="tab-content__text-wrap--content js-hidden-text small-text">
					<p style="text-align:center;">
                    All this may sound daunting but don't worry, it all happens on our end! 
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
							<img src="<?php echo SITEROOT; ?>images/FullServicePageOrderSubmittedtoProduction.jpeg" alt="FullServicePageOrderSubmittedtoProduction" class="js-get-image imageprocess">
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
							<div class="you-design-block__wrapper" style="justify-content: center !important;">
								<h3 class="you-design-block__wrapper--heading">
								<div class="">
                                Engineering and Manufacturing Department
								</div>
								</h3>
								<p style="font-size: 15px; padding-top: 0% !important; font-family:'OpenSans-Regular', sans-serif; line-height: 1.875;">
								Your finalized design starts in our Engineering Department where it is again reviewed and coded for machine programming. Materials, accessories and hardware are now sourced.
					
								Once the materials arrive, your order moves on to our Manufacturing Department where various machines are programmed to custom manufacture your closet with specific construction details.
								</p>
								<!-- <div class="button-holder desktop-show" style="padding-top: 0% !important;">
									<button data-readAll="Full description" data-readLess="Less description" class="link-button js-btn-view-all-text" title='Full description'>
										<span>Full description</span>
										<?php echo $icon_id_left_arrow_3; ?>
									</button>
								</div>
								<div class="button-holder mobile-show mt-3" style="padding-top: 0%;">
									<button data-readAll="Full description" data-readLess="Less description" class="link-button js-btn-view-all-text" title='Full description'>
										<span>Full description</span>
										<?php echo $icon_id_left_arrow_3; ?>
									</button>
								</div> -->
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
							<div class="you-design-block__wrapper" style="justify-content: center !important;">
								<h3 class="you-design-block__wrapper--heading">
								<div class="desktop-show">
                                Assembly and LED-Lighting Departments
								</div>
								</h3>
								<p style="font-size: 15px !important; font-family:'OpenSans-Regular', sans-serif; line-height: 1.875;">
								If you chose the pre assembly and / or Lighting-Options, the order will either go to our Assembly Department where the loose hardware parts are tediously assembled into the various components and / or go to our Lighting Department for preassembly of all LED-Lighting components if lighting was ordered.
								</p>
								<p class="you-design-block__wrapper--text small-text js-show-text" style="padding-top: 0% !important; font-size: 15px !important; ">
								If you did not purchase these options, your order will skip this step and go straight to our Packaging Department. 

								</p>
								<!-- <div class="button-holder desktop-show" style="padding-top: 0% !important;">
									<button data-readAll="Full description" data-readLess="Less description" class="link-button js-btn-view-all-text" title='Full description'>
										<span>Full description</span>
										<?php echo $icon_id_left_arrow_3; ?>
									</button>
								</div>
								<div class="button-holder mobile-show mt-3">
									<button data-readAll="Full description" data-readLess="Less description" class="link-button js-btn-view-all-text" title='Full description'>
										<span>Full description</span>
										<?php echo $icon_id_left_arrow_3; ?>
									</button>
								</div> -->
							</div>
						</div>
						<div class="col-12 col-lg-7">
							<div class="you-design-block__image" style="height: 320px !important;">
								<img src="<?php echo SITEROOT; ?>images/HPS-Page/LED-Lighting.jpg" alt="LED-Lighting" class="js-get-image" style=" height: 320px !important; border-radius:2%;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="company-block about-us" id="mobile-full-view">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-6 col-lg-5 company-block__images" style="height: 275px !important;">
							<img src="<?php echo SITEROOT; ?>images/ProcessPagePackaging.jpeg" alt="ProcessPagePackaging" class="js-get-image imageprocess" style="height: 275px !important; border-radius:1%;">
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
							<div class="you-design-block__wrapper" style="justify-content: center !important;">
								<h3 class="you-design-block__wrapper--heading">
								<div class="desktop-show">
                                Packaging Department
								</div>
								</h3>
								<p style="font-size: 15px !important; font-family:'OpenSans-Regular', sans-serif; line-height: 1.875;">
								Your order has now arrived in our Packaging Department where we take great pride in our packaging. In fact, we constantly get compliments from our 3rd party carriers on how well our packaging looks and holds up compared to other products they ship! We use a combination of boxes with 1” hexcomb to  carefully protect every part before shrink wrapping them to a pallet. 
								
								</p>
								
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
							<div class="you-design-block__wrapper" style="justify-content: center !important;">
								<h3 class="you-design-block__wrapper--heading">
								<div class="desktop-show">
                                Shipping Department
								</div>
								</h3>
								<p style="font-size: 15px !important; font-family:'OpenSans-Regular', sans-serif; line-height: 1.875;">
								Once your order is properly packed and palletized  we make arrangements with our 3rd party shipping carrier to pick up your shipment. Once this is confirmed, we will email you the shipping and tracking information. 
								</p>
								<p class="you-design-block__wrapper--text small-text js-show-text" style="padding-top: 0% !important; font-size: 15px !important; ">
                                To ensure the pallet arrives to you in the same condition it left our warehouse, a photo  of the pallet is taken, emailed to you,  and affixed to the pallet on all sides which puts everyone on notice of the condition of the pallet when picked up at our factory.  We found this simple step helps ensure the pallet is safely handled between shipping terminals and the final destination, almost always arriving in the exact same condition as when leaving our factory.
                                <br>
                                When the shipment arrives at the destination’s terminal, they will contact you to set up a delivery appointment. Curbside delivery is standard. If it was determined beforehand that your delivery is eligible for inside delivery, this can be done for an additional fee charged by the 3rd party shipping carrier. It is your responsibility to note any visible damage to the pallet or boxes. This can be noted by taking some pictures of the damaged area(s) along with making a note on the Bill Of Lading which is the shipping receipt that you’ll sign when the pallet is delivered.  In most cases, visible damage to the packaging does not relate to damaged products.
								</p>
								<div class="button-holder desktop-show" style="padding-top: 0% !important;">
									<button data-readAll="Full description" data-readLess="Less description" class="link-button js-btn-view-all-text" title='Full description'>
										<span>Full description</span>
										<?php echo $icon_id_left_arrow_3; ?>
									</button>
								</div>
								<div class="button-holder mobile-show mt-3" style="padding-bottom: 6%;">
									<button data-readAll="Full description" data-readLess="Less description" class="link-button js-btn-view-all-text" title='Full description'>
										<span>Full description</span>
										<?php echo $icon_id_left_arrow_3; ?>
									</button>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-7">
							<div class="you-design-block__image" style="height: 320px !important;">
								<img src="<?php echo SITEROOT; ?>images/ProcessShipping.jpeg" alt="ProcessShipping" class="js-get-image" style="height: 320px !important; border-radius:2%;">
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
			.textExpanding{
			margin-left: auto;
		    margin-right:auto;
			padding-right: 20%;
			padding-left: 20%;
			border-radius:2%;
			}

			.imageprocess{
				height: 275px !important; 
				width: 400px !important; 
				border-radius:1%;
			}

			.js-get-image{
				
			}

			@media(max-width: 992px){
			.textExpanding{
				margin-left: auto !important; 
				margin-right:auto !important; 
				padding-right: 1% !important; 
				padding-left: 1% !important; 
				border-radius:2%;
				text-align: center;
			}
			.EasyDiy1 .EasyDiy2{
				display: none !important;

			}
			.imageprocess{
				width: 350px !important;
			}
			.js-get-image{

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

