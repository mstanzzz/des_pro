<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>ClosetsToGo | <?php echo $meta_title; ?></title>
<meta name="description" content="<?php echo $meta_description; ?>">

<script type="text/javascript">
//https://ryfarlane.com/article/on-load-vanilla-javascript
//const startDate = new Date();
//var start = startDate.getSeconds();
//alert("start: "+start);
</script>

<link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">
</head>

<body class="idea-folder-popup">
<?php
require_once($real_root . '/pages/views/header.php');
?>

<section class="home-mobile-buttons-block covid-block">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="home-mobile-buttons-block__wrapper links-wrapper">
<a href="<?php echo SITEROOT; ?>about-us.html" title="About us" class="home-mobile-buttons-block__link">About us</a>
<a href="<?php echo SITEROOT; ?>support.html" title="Support" class="home-mobile-buttons-block__link">Support</a>
<a href="#" title="Services" class="home-mobile-buttons-block__link active">Services</a>
</div>
</div>
</div>
</div>
</div>
</section>

<main class="main clearfix">

<section class="breadcrumb-block about-us desktop-show">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12">
		<div class="breadcrumb-block__wrapper" aria-label="breadcrumb">
			<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo SITEROOT; ?>" title="Home">Home</a></li>
			<li class="breadcrumb-item"><a href="<?php echo SITEROOT; ?>about-us.html" title="Company">Company</a></li>
			<li class="breadcrumb-item active" aria-current="page">Services</li>
			</ul>
		</div>
	</div>
</div>
</div>
</div>
</section>

<section class="simple-block services">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12">
		<div class="simple-block__border p-0 no-border">
			<div class="row">
				<div class="col-12">
					<div class="simple-block__heading">
						<h2 class="simple-block__heading--heading mobile-show services-title">
						<?php echo $top_1; ?>
						</h2>
						<h2 class="simple-block__heading--heading desktop-show services-title" style="color: #384765;">
						<?php echo $top_2; ?>
					</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</section>

<section class="services-four-elements-block">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12 services-four-elements-block__wrap">
		<div class="services-four-elements-block__wrapper services-caro">
			<figure class="services-four-elements-block__content" data-dismiss="modal" data-toggle="modal" data-target="#designConsultation">
			<figcaption data-toggle="modal" data-target="#mobile-team-gallery">
			<h2 class="services-four-elements-block__heading laptop" style="background-image: url('<?php echo SITEROOT; ?>images/In-Home-Consultation.svg');">
			In Home Design Consultation
			</h2>
			<p class="services-four-elements-block__first-text">
			<?php echo $service_1_text; ?>
			</p>
			<a href="<?php echo SITEROOT."free-in-home-consults.html"; ?>" title="Request service" class="link-button">
			request service
			<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
			<path id="left-arrow_3_" data-name="left-arrow(3)" d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z" transform="translate(0.001 -4.676)"></path>
			</svg>
			</a>
			</figcaption>
			</figure>
			<figure class="services-four-elements-block__content" data-dismiss="modal" data-toggle="modal" data-target="#designRequest">
			<figcaption>
			<h2 class="services-four-elements-block__heading laptop" style="background-image: url('<?php echo SITEROOT; ?>images/Online-Design-Request.svg');">
			Online Design Request
			</h2>
			<p class="services-four-elements-block__first-text">
			<?php echo $service_2_text; ?>
			</p>
			<a href="https://storittek.com/request-design.html" title="Request service" class="link-button">
			request service
			<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
			<path id="left-arrow_3_" data-name="left-arrow(3)" d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z" transform="translate(0.001 -4.676)"></path>
			</svg>
			</a>
			</figcaption>
			</figure>
			<figure class="services-four-elements-block__content" data-dismiss="modal" data-toggle="modal" data-target="#preAssemblyService">
			<figcaption>
			<h2 class="services-four-elements-block__heading laptop" style="background-image: url('<?php echo SITEROOT; ?>images/Pre-assembly-Service.svg');">
			Hardware Pre-Assembly Service
			</h2>
			<p class="services-four-elements-block__first-text">
			<?php echo $service_3_text; ?>
			</p>
			<a href="<?php echo SITEROOT; ?>pre-assembly.html" title="Request service" class="link-button">
			request service
			<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
			<path id="left-arrow_3_" data-name="left-arrow(3)" d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z" transform="translate(0.001 -4.676)"></path>
			</svg>
			</a>
			</figcaption>
			</figure>
			<figure class="services-four-elements-block__content" data-dismiss="modal" data-toggle="modal" data-target="#showroomTour">
			<figcaption>
			<h2 class="services-four-elements-block__heading laptop" style="background-image: url('<?php echo SITEROOT; ?>images/Full-Installation-Service.svg');">
			Full Service Installation
			</h2>
			<p class="services-four-elements-block__first-text">
			<?php echo $service_4_text; ?>
			</p>
			<a href="<?php echo SITEROOT; ?>full-service-install.html" title="Request service" class="link-button">
			request service
			<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
			<path id="left-arrow_3_" data-name="left-arrow(3)" d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z" transform="translate(0.001 -4.676)"></path>
			</svg>
			</a>
			</figcaption>
			</figure>
		</div>
	</div>
</div>
</div>
</div>
</section>


<section class="video-block about-us">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12">
		<div class="video-block__without-shadow">
			<div class="row">
				<div class="col-12">
					<div class="video-block__videos video-caro">
						<div class="video-block__videos--video">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe
								class="yvideo"
								width="100%"
								height="100%"
								name=""
								title=""
								src="https://www.youtube.com/embed/oKuscjbzbY4"
								frameborder="0"
								allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
								allowfullscreen>
								</iframe>
							
							</div>
						</div>
						<div class="video-block__videos--video">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe
								class="yvideo"
								width="100%"
								height="100%"
								name=""
								title=""
								src="https://www.youtube.com/embed/0ro7yF3yyT4"
								frameborder="0"
								allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
								allowfullscreen>
								</iframe>
							
							</div>
						</div>
						<div class="video-block__videos--video">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe
								class="yvideo"
								width="560"
								height="315"
								name=""
								title=""
								src="https://www.youtube.com/embed/vv9sGUektgo"
								frameborder="0"
								allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
								allowfullscreen>
								</iframe>
							</div>
						</div>
						<div class="video-block__videos--video">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe
								class="yvideo"
								width="560"
								height="315"
								name=""
								title=""
								src="https://www.youtube.com/embed/hR23ibFOamQ"
								frameborder="0"
								allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
								allowfullscreen>
								</iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- <div class="row">
<div class="col-12 text-center">
<a href="#" title="Load more" class="link-button">
load more
<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
<path id="left-arrow_3_" data-name="left-arrow(3)"
d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z"
transform="translate(0.001 -4.676)"/>
</svg>
</a>
</div>
</div> -->
		</div>
	</div>
</div>
</div>
</div>
</section>

<section class="block-with-background about-us">
<div class="wrapper">
<div class="container-fluid">
<div class="block-with-background__wrapper" style="background-image: url('<?php echo SITEROOT; ?>images/BannerServicePage.png');">
	<div class="row">
		<div class="col-12 col-lg-5">
			<div class="block-with-background__content">
				<div class="row">
					<div class="col-12">
						<h2 class="block-with-background__content--heading" style="margin-left:auto; margin-right:auto;">
						<svg id="star" xmlns="http://www.w3.org/2000/svg" width="16.99" height="16.204" viewBox="0 0 16.99 16.204">
						<path id="Path_31" data-name="Path 31" d="M16.99,17.269q0-.378-.572-.47l-5.125-.745L9,11.409q-.194-.419-.5-.419t-.5.419L5.7,16.054.572,16.8Q0,16.892,0,17.269a.778.778,0,0,0,.255.49l3.717,3.614-.878,5.105a1.658,1.658,0,0,0-.02.2.6.6,0,0,0,.107.362.37.37,0,0,0,.322.148.866.866,0,0,0,.408-.122l4.584-2.41,4.585,2.41a.826.826,0,0,0,.408.122.36.36,0,0,0,.312-.148.6.6,0,0,0,.107-.362,1.542,1.542,0,0,0-.01-.2l-.878-5.105,3.706-3.614A.738.738,0,0,0,16.99,17.269Z" transform="translate(0 -10.99)" fill="#e6800a" />
						</svg>
						*COMING SOON*
						<svg id="star" xmlns="http://www.w3.org/2000/svg" width="16.99" height="16.204" viewBox="0 0 16.99 16.204">
						<path id="Path_31" data-name="Path 31" d="M16.99,17.269q0-.378-.572-.47l-5.125-.745L9,11.409q-.194-.419-.5-.419t-.5.419L5.7,16.054.572,16.8Q0,16.892,0,17.269a.778.778,0,0,0,.255.49l3.717,3.614-.878,5.105a1.658,1.658,0,0,0-.02.2.6.6,0,0,0,.107.362.37.37,0,0,0,.322.148.866.866,0,0,0,.408-.122l4.584-2.41,4.585,2.41a.826.826,0,0,0,.408.122.36.36,0,0,0,.312-.148.6.6,0,0,0,.107-.362,1.542,1.542,0,0,0-.01-.2l-.878-5.105,3.706-3.614A.738.738,0,0,0,16.99,17.269Z" transform="translate(0 -10.99)" fill="#e6800a" />
						</svg>
						</h2>
						<h2 class="block-with-background__content--subheading" style="margin-left:auto; margin-right:auto;">
						Step-by-Step Online Design Tool
						</h2>
						<!-- <div class="desktop-show">
						<a href="<?php echo SITEROOT . "diy-instructions.html"; ?>" title="Discover more" class="link-button">
						discover more
						<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
						<path id="left-arrow_3_" data-name="left-arrow(3)" d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z" transform="translate(0.001 -4.676)"></path>
						</svg>
						</a>
						</div> -->
						<div class="mobile-show">
							<button title="Discover more" class="link-button js-show-mobile-catalog-btn" data-dismiss="modal" data-toggle="modal" data-target="#mobile-catalog-block">
							<a href="<?php echo SITEROOT . "diy-instructions.html"; ?>" title="Discover more" class="link-button">
							discover more
							<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
							<path id="left-arrow_3_" data-name="left-arrow(3)" d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z" transform="translate(0.001 -4.676)"></path>
							</svg>
							</a>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</section>

<section class="simple-block services-mobile">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="simple-block__border">
<div class="row">
<div class="col-12">
<div class="simple-block__heading">
<h2 class="simple-block__heading--heading about-us-heading-24 mb-2" style="text-align: center;">
<?php echo $p_1_head; ?>
</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="simple-block__text">
<p style="text-align: center;">
<?php echo $p_2_head; ?>
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="company-block about-us">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-6 col-lg-5 company-block__images" style="">
<img src="<?php echo SITEROOT; ?>images/ladysmiling.jpeg" alt="lady sitting at desk with laptop typing">
</div>
<!-- <div class="col-6 col-lg-3 company-block__images">
<img src="<?php echo SITEROOT; ?>images/about-us-services-22.png" alt="">
</div> -->
<div class="col-12 col-lg-6 company-block__text">
<div class="company-block__text--wrapper">
<h3 class="you-design-block__wrapper--heading">
<div class="">
<a href="<?php echo SITEROOT; ?>request-design.html" title="We design" class="we-design" style="font-size: 12px; font-family:'OpenSans-Regular', sans-serif; letter-spacing: normal; width: 110px; text-align: center; line-height: 1.875;">WE DESIGN</a>
</div>
</h3>
<p class="company-block__text--text">
<?php echo $p_1_text; ?>
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
<div class="col-12 col-lg-5">
<div class="you-design-block__wrapper">
<h3 class="you-design-block__wrapper--heading">
<div class="">
<a href="#" title="You design" class="you-design" 
style="font-size: 12px; font-family:'OpenSans-Regular', sans-serif; letter-spacing: normal; width: 210px; text-align: center; line-height: 1.875;">YOU DESIGN - COMING SOON</a>
</div>
</h3>
<p class="you-design-block__wrapper--text">
<?php echo $p_2_text; ?>
</p>
</div>
</div>
<div class="col-12 col-lg-7">
<div class="you-design-block__image">
<img src="<?php echo SITEROOT; ?>images/ServicesYOUDesign.jpg" alt="" class="js-get-image">
</div>
</div>
</div>
</div>
</div>
</section>

<section class="simple-block services-mobile">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="simple-block__border pb-0 no-border">
<div class="row">
<div class="col-12">
<div class="simple-block__heading text-center">
<h2 class="simple-block__heading--heading services-mobile-black-title" 
style="color: #384765; text-align: center; font-size: 32px;">
<?php echo $p_4_text; ?>
</h2>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="catalog-block services" id="js-show-mobile-catalog">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12 col-lg-4 catalog-block__content">
<figure>
<div class="catalog-block__content--image">
<img src="<?php echo SITEROOT; ?>images/ServicesPagePersonalize.jpg" alt="">
</div>
<figcaption>
<h2 style="font-family: 'Futurica-BS-light', sans-serif !important;">
<?php echo $p_5_head; ?>
</h2>
<p class="simple-test">
<?php echo $p_5_text; ?>
</p>
</figcaption>
</figure>
</div>
<div class="col-12 col-lg-4 catalog-block__content">
<figure>
<div class="catalog-block__content--image">
<img src="<?php echo SITEROOT; ?>images/warrantyresized.png" alt="">
</div>
<figcaption>
<h2 style="font-family: 'Futurica-BS-light', sans-serif !important;">
<?php echo $p_6_head; ?>
</h2>
<p class="simple-test">
<?php echo $p_6_text; ?>
</p>
</figcaption>
</figure>
</div>
<div class="col-12 col-lg-4 catalog-block__content">
<figure>
<div class="catalog-block__content--image">
<img src="<?php echo SITEROOT; ?>images/ladysmiling.jpeg" alt="">
</div>
<figcaption>
<h2 style="font-family: 'Futurica-BS-light', sans-serif !important;">
<?php echo $p_7_head; ?>
</h2>
<p class="simple-test">
<?php echo $p_7_text; ?>
</p>
</figcaption>
</figure>
</div>
</div>
</div>
</div>
</section>
</main>
<style>
@media(max-width: 992px) {
.col-6{
flex: 0 0 100%;
max-width: 100%;
}
}



</style>


<?php
require_once($real_root . '/pages/views/virtual-assistant.php');
require_once($real_root . '/pages/views/mobile-show-footer-buttons.php');
require_once($real_root . '/pages/views/footer.php');
require_once($real_root . '/pages/views/modal-perfect-fit-guarantee.php');
require_once($real_root . '/pages/views/modal-free-shipping.php');
require_once($real_root . '/pages/views/modal-save-to-idea-folder.php');
require_once($real_root . '/pages/views/modal-save-to-specs-sheet.php');
?>


<!-- Modal design consultation.jpg -->
<!-- <div class="modal designConsultation fade" id="designConsultation" tabindex="-1" role="dialog" aria-labelledby="#designConsultationTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document"> -->
<!-- <div class="modal-content">
<div class="modal-header">
<h5 class="modal-title designConsultation__heading" id="designConsultationTitle">In-home design consultation</h5>
<button title="Close" type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="row">
<div class="col-12 col-lg-4">
<img src="<?php echo SITEROOT; ?>images/ladyonlaptop.jpg" alt="" class="img-fluid">
</div>
<div class="col-12 col-lg-8">
<p class="designConsultation__first-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et </p>
<p class="designConsultation__second-text">Call us Today (503 ) 639-7068</p>
<p class="designConsultation__third-text">legal docs</p>

<div class="row mt-4">
<div class="col-12">
<button title="Close" type="submit" class="btn btn-primary" data-dismiss="modal">close</button>
<a href="free-in-home-consults.html"><button title="Request service" type="submit" class="btn btn-primary">service</button></a>
</div>
</div>
</div>
</div>
</div>
</div> -->
<!-- </div> -->
<!-- </div> -->

<!-- Modal design request -->
<!-- <div class="modal designConsultation fade" id="designRequest" tabindex="-1" role="dialog" aria-labelledby="#designRequestTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title designConsultation__heading" id="designRequestTitle">Online design request (AKA Virtual design)</h5>
<button title="Close" type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="row">
<div class="col-12 col-lg-4">
<img src="<?php echo SITEROOT; ?>images/quality-service-modal.png" alt="" class="img-fluid">
</div>
<div class="col-12 col-lg-8">
<p class="designConsultation__first-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et </p>
<p class="designConsultation__second-text">Call us Today (503 ) 639-7068</p>
<p class="designConsultation__third-text">legal docs</p>

<div class="row mt-4">
<div class="col-12">
<button title="Close" type="submit" class="btn btn-primary" data-dismiss="modal">close</button>
<button title="Request service" type="submit" class="btn btn-primary">request service</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div> -->

<!-- Modal Pre-Assembly service -->
<!-- <div class="modal designConsultation fade" id="preAssemblyService" tabindex="-1" role="dialog" aria-labelledby="#preAssemblyServiceTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title designConsultation__heading" id="preAssemblyServiceTitle">Pre-Assembly service</h5>
<button title="Close" type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="row">
<div class="col-12 col-lg-4">
<img src="<?php echo SITEROOT; ?>images/ladyonlaptop.jpg" alt="" class="img-fluid">
</div>
<div class="col-12 col-lg-8">
<p class="designConsultation__first-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et </p>
<p class="designConsultation__second-text">Call us Today (503 ) 639-7068</p>
<p class="designConsultation__third-text">legal docs</p>

<div class="row mt-4">
<div class="col-12">
<button title="Close" type="submit" class="btn btn-primary" data-dismiss="modal">close</button>
<button title="Request service" type="submit" class="btn btn-primary">request service</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div> -->

<!-- Modal Installation and Virtual showroom tour -->
<!-- <div class="modal designConsultation fade" id="showroomTour" tabindex="-1" role="dialog" aria-labelledby="#showroomTourTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title designConsultation__heading" id="showroomTourTitle">Installation and Virtual showroom tour</h5>
<button title="Close" type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="row">
<div class="col-12 col-lg-4">
<img src="<?php echo SITEROOT; ?>images/quality-service-modal.png" alt="" class="img-fluid">
</div>
<div class="col-12 col-lg-8">
<p class="designConsultation__first-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et </p>
<p class="designConsultation__second-text">Call us Today (503 ) 639-7068</p>
<p class="designConsultation__third-text">legal docs</p>

<div class="row mt-4">
<div class="col-12">
<button title="Close" type="submit" class="btn btn-primary" data-dismiss="modal">close</button>
<button title="Request service" type="submit" class="btn btn-primary">request service</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div> -->

<!-- Modal mobile catalog block -->
<!-- <div class="modal about-us-modal fade" id="mobile-catalog-block" tabindex="-1" role="dialog" aria-labelledby="mobile-catalog-block-title" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="mobile-catalog-block-title">&nbsp;</h5>
<button title="Close" type="button" class="close about-us-modal-close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

</div>
</div>
</div>
</div> -->


<script src="<?php echo SITEROOT; ?>app.js"></script>
<script>
//window.onload = function(event) {
	//const endDate = new Date();
	//var end = endDate.getSeconds();
	//var dur = end-start;
	//alert("durstion: "+dur);
//};
</script>

</body>

</html>