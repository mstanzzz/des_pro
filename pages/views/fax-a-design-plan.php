<?php
if(!isset($_SESSION['temp_id'])){
	$_SESSION['temp_id'] = time();	
}
$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

$ts = time();
$msg = '';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
<title>ClosetsToGo | <?php echo $meta_title; ?></title>
<meta name="description" content="<?php echo $meta_description; ?>">
	<link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" media="screen" 
	href="<?php echo SITEROOT; ?>plupload-2.1.8/js/jquery.plupload.queue/css/jquery.plupload.queue.css" />
	<link rel="stylesheet" type="text/css" media="all" 
	href="<?php echo SITEROOT; ?>DF_css/design_request.css?v=1.2.1" />
</head>
<body class="idea-folder-popup">
<?php
require_once($real_root.'/pages/views/header.php');
?>

<section class="first-fixed-block covid-block fax-a-design clearfix">
<figure class="first-fixed-block__img-group"
style="background-image: url('../../images/fax-a-design-plan-header.png');">
<figcaption class="first-fixed-block__img-group--text-block">
<div class="wrapper">
<h1 class="first-fixed-block__img-group--heading">Scan or Fax your design plan request</h1>
<button title="Left Arrow" class="mobile-hero-btn">
	<svg xmlns="http://www.w3.org/2000/svg" width="25.052" height="35.636"
	viewBox="0 0 25.052 35.636">
	<defs>
	<style>.down-arrow-white {
    fill: #fff;
    }</style>
	</defs>
	<path class="down-arrow-white"
	d="M24.011,5.053a1.263,1.263,0,1,0-1.8,1.778l9.105,9.105H1.274A1.265,1.265,0,0,0,0,17.193a1.28,1.28,0,0,0,1.275,1.275H31.32l-9.105,9.088a1.289,1.289,0,0,0,0,1.8,1.258,1.258,0,0,0,1.8,0L35.271,18.091a1.267,1.267,0,0,0,0-1.778Z"
	transform="translate(29.728 0.001) rotate(90)"/>
	</svg>
</button>
</div>
</figcaption>
</figure>
</section>



<main class="main hero-block covid-block clearfix">
<section class="breadcrumb-block desktop-show">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12">
		<div class="breadcrumb-block__wrapper" aria-label="breadcrumb">
		<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="index.html" title="Home">Home</a></li>
		<li class="breadcrumb-item"><a href="#" title="Process">Process</a></li>
		<li class="breadcrumb-item active" aria-current="page">Fax a Design</li>
		</ul>
		</div>
	</div>
</div>
</div>
</div>
</section>


<section class="simple-block fax-design">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12">
		<div class="simple-block__border">
			<div class="row">
				<div class="col-12">
					<div class="simple-block__heading">
						<h2 class="simple-block__heading--heading">Download and Print Our Fax Form</h2>
						<div class="tab-content__text-wrap js-text-wrap nd-read-more download-print-our-fax">
							<div class="tab-content__text-wrap--content js-hidden-text small-text">
Download, fill out and fax the following form to us with your specifications. Check out the form below for a sample. This is justan example as everyone's design will be different. If you have any questions, feel free to contact us at 1-888-312-7424.
							</div>
						</div>
						<button data-readall="Read more" data-readless="Read less" 
						style="padding: 0;margin-top: 10px;" class="js-btn-read-all-text nd-read-more-btn">
						<span>Read more</span>
						</button>
					</div>
					<br />
					<a href="#" title="Download Our Fax Form" class="link-button">
					Download Our Fax Form
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



<section class="simple-block fax-design mobile-show">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12">
		<div class="fax-design-mobile-buttons">
			<button title="Sample Fax Form"
			class="fax-design-mobile-button js-mobile-fax-design-content-btn"
			date-content-class-open=".js-sample-fax-form" data-toggle="modal"
			data-target="#mobile-fax-design">Sample Fax Form
			</button>
			<button title="Tips on how to measure"
			class="fax-design-mobile-button js-mobile-fax-design-content-btn"
			date-content-class-open=".js-tips-how-to-measure" data-toggle="modal"
			data-target="#mobile-fax-design">Tips on how to measure
			</button>
			<button title="Fax us your idea project"
			class="fax-design-mobile-button js-mobile-fax-design-content-btn"
			date-content-class-open=".js-fax-your-project" data-toggle="modal"
			data-target="#mobile-fax-design">Fax us your idea project
			</button>
			<button title="Read Our Reviews"
			class="fax-design-mobile-button js-mobile-fax-design-content-btn"
			date-content-class-open=".js-read-review" data-toggle="modal"
			data-target="#mobile-fax-design">Read Our Reviews
			</button>
		</div>
	</div>
</div>
</div>
</div>
</section>

		
<section class="two-elements-block fax-design js-first-fax-design">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12 col-xl-7 js-sample-fax-form">
		<div class="two-elements-block__wrapper">
			<h3 class="two-elements-block__wrapper--heading">Sample Fax Form</h3>
			<div class="tab-content__text-wrap js-text-wrap nd-read-more sample-fax-form">
				<div class="tab-content__text-wrap--content js-hidden-text small-text">
					<p class="">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egestas diam at arcu
					</p>
					<div class="two-elements-block__wrapper--link-block">
					</div>
				</div>
			</div>
			<button data-readall="Read more" data-readless="Read less" style="padding: 0;" class="js-btn-read-all-text nd-read-more-btn">
			<span>Read more</span>
			</button>
			<div class="link-button-nd">
				<button title="Discover all" data-readAll="Discover all" data-readLess="Discover less"
				class="link-button js-btn-view-all-text">
				<span>Discover all</span>
<?php echo $icon_id_left_arrow_3; ?>				
				</button>
				<a href="#" title="Start Your design" class="link-button you-design">
				Start Your design
<?php echo $icon_id_left_arrow_3; ?>				
				</a>
				<a href="#" title="Let us design" class="link-button we-design">
				Let us design
<?php echo $icon_id_left_arrow_3; ?>
				</a>
			</div>
		</div>
	</div>
	<div class="col-12 col-md-6 col-xl-5 js-sample-fax-form">
		<div class="two-elements-block__wrapper">
			<div class="two-elements-block__wrapper--content">
				<div class="two-elements-block__wrapper--image">
					<div class="only-image">
						<img src="<?php echo SITEROOT; ?>images/fax-adesign-cheme.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 col-md-6 col-xl-12 js-read-review">
		<div class="two-elements-block__wrapper--stars fax-a-design">
			<p class="heading">Read Our Reviews</p>
			<div class="stars-wrapper">
				<?php
				for($i=0;$i<3;$i++){
				?>		
				<div class="block-stars__wrapper">
					<img src="<?php echo SITEROOT; ?>images/Rectangle12.png" 
					alt=""
					class="block-stars__wrapper--image">
					<div class="block-stars__wrapper--text">
						<div class="stars-container">
						<?php echo $stars; ?>
						</div>
						<p class="first-text">Aubree W. Charlotte, North Carolina</p>
						<p>Just had a successful installation!</p>
					</div>
				</div>
				<?php
				}
				?>		
			</div>
			<a href="#" title="Discover all" class="link-button">
			Discover all
<?php echo $icon_id_left_arrow_3; ?>
			</a>
		</div>
	</div>
</div>
</div>
</div>
</section>



<section class="two-elements-block fax-design js-second-fax-design">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12 col-lg-6 js-tips-how-to-measure">
		<div class="no-shadow">
			<p class="heading">Tips on how to measure</p>
			<div id="accordion">
				<div class="card-collapse">
					<div class="card-collapse__header collapsed" id="heading-one"
						data-toggle="collapse" data-target="#collapse-one"
						aria-expanded="false" aria-controls="collapse-one">
						<p class="card-collapse__title">
						<span>How to using a laser level if your floor is sloped</span>
						<img class="collapse-icon collapse-icon__plus"
						src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
						<img class="collapse-icon collapse-icon__minus"
						src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
						</p>
					</div>					
					<div id="collapse-one" class="collapse" aria-labelledby="heading-one"
						data-parent="#accordion">
						<div class="tab-content__text-wrap js-text-wrap nd-read-more op-accordion">
							<div class="tab-content__text-wrap--content js-hidden-text small-text">
								<div class="card-collapse__body">
								Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis
								</div>
							</div>
						</div>
						<button data-readall="Read more" data-readless="Read less" style="padding: 0 10px;margin-bottom: 10px;" 
						class="js-btn-read-all-text nd-read-more-btn">
						<span>Read more</span>
						</button>
					</div>
				</div>
				
				<div class="card-collapse">
					<div class="card-collapse__header collapsed" 
						id="heading-two"
						data-toggle="collapse" data-target="#collapse-two"
						aria-expanded="false" aria-controls="collapse-two">
						<p class="card-collapse__title">
						<span>Do you know that...</span>
						<img class="collapse-icon collapse-icon__plus"
						src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
						<img class="collapse-icon collapse-icon__minus"
						src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
						</p>
					</div>
					<div id="collapse-two" class="collapse" aria-labelledby="heading-two"
						data-parent="#accordion">
						<div class="tab-content__text-wrap js-text-wrap nd-read-more op-accordion">
							<div class="tab-content__text-wrap--content js-hidden-text small-text">
								<div class="card-collapse__body">
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis
								</div>
							</div>
						</div>
						<button data-readall="Read more" data-readless="Read less" style="padding: 0 10px;margin-bottom: 10px;" 
						class="js-btn-read-all-text nd-read-more-btn">
						<span>Read more</span>
						</button>
					</div>
				</div>
				<div class="card-collapse">
					<div class="card-collapse__header collapsed" 
						id="heading-three"
						data-toggle="collapse" data-target="#collapse-three"
						aria-expanded="false" aria-controls="collapse-three">
						<p class="card-collapse__title">
						<span>How to prevent...</span>
						<img class="collapse-icon collapse-icon__plus"
						src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
						<img class="collapse-icon collapse-icon__minus"
						src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
						</p>
					</div>
					<div id="collapse-three" class="collapse" aria-labelledby="heading-three"
						data-parent="#accordion">
						<div class="tab-content__text-wrap js-text-wrap nd-read-more op-accordion">
							<div class="tab-content__text-wrap--content js-hidden-text small-text">
								<div class="card-collapse__body">
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis
								</div>
							</div>
						</div>
						<button data-readall="Read more" data-readless="Read less" style="padding: 0 10px;margin-bottom: 10px;" 
						class="js-btn-read-all-text nd-read-more-btn">
						<span>Read more</span>
						</button>
					</div>
				</div>
				<div class="card-collapse">
					<div class="card-collapse__header collapsed" 
						id="heading-four"
						data-toggle="collapse" data-target="#collapse-four"
						aria-expanded="false" aria-controls="collapse-four">
						<p class="card-collapse__title">
						<span>How to using a laser level if your floor is sloped</span>
						<img class="collapse-icon collapse-icon__plus"
						src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
						<img class="collapse-icon collapse-icon__minus"
						src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
						</p>
					</div>
					<div id="collapse-four" class="collapse" aria-labelledby="heading-four"
						data-parent="#accordion">
						<div class="tab-content__text-wrap js-text-wrap nd-read-more op-accordion">
							<div class="tab-content__text-wrap--content js-hidden-text small-text">
								<div class="card-collapse__body">
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis
								</div>
							</div>
						</div>
						<button data-readall="Read more" data-readless="Read less" style="padding: 0 10px;margin-bottom: 10px;" 
						class="js-btn-read-all-text nd-read-more-btn">
						<span>Read more</span>
						</button>
					</div>
				</div>
				<div class="card-collapse">
					<div class="card-collapse__header collapsed" 
						id="heading-five"
						data-toggle="collapse" data-target="#collapse-five"
						aria-expanded="false" aria-controls="collapse-five">
						<p class="card-collapse__title">
						<span>Do you know that...</span>
						<img class="collapse-icon collapse-icon__plus"
						src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
						<img class="collapse-icon collapse-icon__minus"
						src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
						</p>
					</div>
					<div id="collapse-five" class="collapse" aria-labelledby="heading-five" data-parent="#accordion">
						<div class="tab-content__text-wrap js-text-wrap nd-read-more op-accordion">
							<div class="tab-content__text-wrap--content js-hidden-text small-text">
								<div class="card-collapse__body">
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis
								</div>
							</div>
						</div>
						<button data-readall="Read more" data-readless="Read less" style="padding: 0 10px;margin-bottom: 10px;" 
						class="js-btn-read-all-text nd-read-more-btn">
						<span>Read more</span>
						</button>
					</div>
				</div>
				<div class="card-collapse">
					<div class="card-collapse__header collapsed" id="heading-six"
						data-toggle="collapse" data-target="#collapse-six"
						aria-expanded="false" aria-controls="collapse-six">
						<p class="card-collapse__title">
						<span>How to prevent...</span>
						<img class="collapse-icon collapse-icon__plus"
						src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
						<img class="collapse-icon collapse-icon__minus"
						src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
						</p>
					</div>
					<div id="collapse-six" class="collapse" aria-labelledby="heading-six" data-parent="#accordion">
						<div class="tab-content__text-wrap js-text-wrap nd-read-more op-accordion">
							<div class="tab-content__text-wrap--content js-hidden-text small-text">
								<div class="card-collapse__body">
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis
								</div>
							</div>
						</div>
						<button data-readall="Read more" data-readless="Read less" style="padding: 0 10px;margin-bottom: 10px;" 
						class="js-btn-read-all-text nd-read-more-btn">
						<span>Read more</span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 col-lg-6 p-0 p-lg-3 js-fax-your-project">
		<div class="home-consult-form__content no-shadow mw-100 mb-4"
			id="js-mobile-third-home-consult-form">
			<p class="heading">Fax us your idea project</p>
			<div id="file_uploads_container">
			<h2>Attach an Image</h2>
			<br /><br />
			<div id="uploader">
			<p>Your browser doesn't have Flash, Silverlight or HTML5 support.</p>
		</div>
	</div>
<fieldset>
<input type="submit"
name="send"
class="link-button fax-a-design-form-button js-only-close-fax-design"
value="submit your request"
title="Submit your request">
</fieldset>
</div>
</div>
</div>
</div>
</section>



<section class="video-block fax-design">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12">
		<div class="video-block__with-border">
			<div class="row">
				<div class="col-12">
					<p class="video-block__heading">Watch some videos</p>
					<div class="tab-content__text-wrap js-text-wrap nd-read-more watch-some-videos">
						<div class="tab-content__text-wrap--content js-hidden-text small-text">
							<p class="desktop-show" style="padding: 0 30px;text-align: center;">
on how to measure the area
correctly to ensure all things are taken into consideration such as basemolding, windows,electrical outlets, attic and floor crawl spaces, heat registersetc..on how to measure the area correctly to ensure all things are taken into consideration such as base molding, windows,
electrical outlets, attic and floor crawl spaces, heat registers etc.. on how to measure the area correctly to ensure all things are taken into consideration such as base molding, windows, electrical outlets, attic and floor crawl spaces, heat registers etc..
							</p>
						</div>
					</div>
					<button data-readall="Read more" data-readless="Read less" 
					style="padding: 0 30px;margin-bottom: 10px; text-align: center; width: 100%;" 
					class="m-d-n js-btn-read-all-text nd-read-more-btn">
					<span>Read more</span>
					</button>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="video-block__videos video-second-caro">
						<?php
						for($i=0;$i<2;$i++){
						?>
						<div class="video-block__videos--video">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe class="yvideo" width="100%" height="100%"
								name=""
								title=""
								src="https://www.youtube.com/embed/Wb0JINqX71w?autoplay=0&enablejsapi=1"
								frameborder="0"
								allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
								allowfullscreen>
								</iframe>
							</div>
						</div>
						<?php
						}						
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</section>



			
<section class="company-block fax-design">
<div class="wrapper">
<div class="container-fluid">
<div class="row organizer-caro fax-design">
	<div class="col-12 col-lg-4 company-block__images">
		<img src="<?php echo SITEROOT; ?>images/company-1.png" alt="">
		<div class="company-block__images--text">
			<p>Closet Solutions:</p>
			<p>DIY Online Designs</p>
			<a href="#" title="Buy now" class="link-button">
			buy now
<?php echo $icon_id_left_arrow_3; ?>
			</a>
		</div>
	</div>
	<div class="col-12 col-lg-4 company-block__images">
		<img src="<?php echo SITEROOT; ?>images/company-2.png" alt="">
		<div class="company-block__images--text white-color">
			<p>Custom Closets:</p>
			<p>Order Online Today</p>
			<a href="#" title="Buy now" class="link-button">
			buy now
<?php echo $icon_id_left_arrow_3; ?>
			</a>
		</div>
	</div>
	<div class="col-12 col-lg-4 company-block__images">
		<img src="<?php echo SITEROOT; ?>images/company-3.png" alt="">
		<div class="company-block__images--text white-color">
			<p>Closet Organizer</p>
			<p>Showroom</p>
			<a href="#" title="Explore now" class="link-button">
			explore now
<?php echo $icon_id_left_arrow_3; ?>
			</a>
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
require_once($real_root.'/pages/views/modal-delete.php');

?>

<div class="modal mobile-full-screan-modal fade" id="mobile-fax-design" tabindex="-1" role="dialog"
aria-labelledby="mobile-fax-design-title" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<p class="modal-title" id="mobile-fax-design-title">&nbsp;</p>
<button title="Close" type="button" class="close js-close-fax-design" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="row">
</div>
</div>
</div>
</div>
</div>







<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="<?php echo SITEROOT; ?>plupload-2.1.8/js/plupload.full.min.js"></script>
<script src="<?php echo SITEROOT; ?>plupload-2.1.8/js/jquery.plupload.queue/jquery.plupload.queue.js"></script>
<?php
$temp_id = "'".$_SESSION['temp_id']."'";
?>    
<script type="text/javascript">

$(function() {
	
	// Setup html5 version
	$("#uploader").pluploadQueue({
		// General settings
		runtimes : 'html5,flash,silverlight,html4',
		url : '<?php echo SITEROOT; ?>plupload-2.1.8/otg/upload.php?temp_id='+<?php echo $temp_id; ?>,
		chunk_size: '1mb',
		rename : true,
		dragdrop: true,
		filters : {
			// Maximum file size
			max_file_size : '10mb',
			// Specify what files to browse for
			mime_types: [
				{title : "Image files", extensions : "jpg,jpeg,gif,png,pdf"},
				{title : "Zip files", extensions : "zip"}
			]
		},


		flash_swf_url : '<?php echo SITEROOT; ?>plupload-2.1.8/js/Moxie.swf',
		silverlight_xap_url : '<?php echo SITEROOT; ?>plupload-2.1.8/js/Moxie.xap'
	});
	
	var uploader = $('#uploader').pluploadQueue();
	
	uploader.bind('FileUploaded', function() {
		if (uploader.files.length == (uploader.total.uploaded + uploader.total.failed)) {
			$("#submit_sendto").show();
        }else{
			$("#submit_sendto").hide();
		}
	});
	
	uploader.bind('UploadProgress', function(up, file) {
    
        if(file.percent < 100 && file.percent >= 1){
			$("#submit_sendto").hide();
        }else{
			//$("#submit_sendto").show();
        }                               
    });

});

</script>

<script>

$( document ).ready(function() {
alert("HHHHHHHHHH");


});
</script>




<script src="<?php echo SITEROOT; ?>app.js"></script>
</body>
</html>
