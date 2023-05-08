<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>ClosetsToGo | <?php echo $meta_title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>">
<link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">
</head>
<body class="idea-folder-popup">
<?php
require_once($real_root.'/pages/views/header.php');
$num_reviews=1;
$num_words=20;
$min_stars=5;
$r=$reviews->getMultiRandom($dbCustom,$num_reviews,$num_words,$min_stars);

/*

7. We were going to hide the email addresses. 
When clicking to email someone on the support page, 
the user would be taken down to the contact form and it 
would be pre-filled out depending on who they clicked on. 
Let's say they clicked on Curt. The user then is 
taken down to the contact form. the Subject field 
would be pre-filled out to say something - for example, 
"Shipping Concerns: Attn Curt Miller" and when the user 
fills out the rest of the form and hits submit, 
it's emailed to "shipping@closetstogo.com" 


*/

?>
 
<section class="home-mobile-buttons-block covid-block">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="home-mobile-buttons-block__wrapper links-wrapper">
<a href="<?php echo SITEROOT ?>closet-organizers/about-us.html" title="About us" class="home-mobile-buttons-block__link">About us</a>
<a href="<?php echo SITEROOT ?>closet-organizers/services.html" title="Services" class="home-mobile-buttons-block__link">Services</a>
<a href="#" title="Support" class="home-mobile-buttons-block__link active">Support</a>
</div>
</div>
</div>
</div>
</div>
</section>

<main class="main clearfix">
<section class="breadcrumb-block about-us mb-5 desktop-show">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="breadcrumb-block__wrapper" aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo SITEROOT ?>" title="Home">Home</a></li>
<li class="breadcrumb-item"><a href="<?php echo SITEROOT ?>closet-organizers/about-us.html" title="Company">Company</a></li>
<li class="breadcrumb-item active" aria-current="page">Support</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="simple-block support">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12">
		<div class="simple-block__border">
			<div class="row">
				<div class="col-12">
					<div class="simple-block__heading">
						<h2 class="simple-block__heading--heading about-us-heading-24 mb-0">
						<?php echo $p_1_head; ?>
						</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="simple-block__text">
						<?php echo $p_1_text; ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 text-left mobile-show mt-3 text-center">
					<button title="Team gallery" class="link-button active" 
					data-toggle="modal" data-target="#mobile-team-gallery" 
					id="js-team-galery-btn">
					<span>team gallery</span>
					<?php echo $icon_id_left_arrow_3; ?>
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</section>

<section class="four-elements-block team-block" id="js-team-galery">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12 col-lg-3">
<figure class="four-elements-block__wrapper">
<div class="four-elements-block__wrapper--image js-open-custom-modal" data-employee-ID="1" data-custom-modal-id="#custom-fixed-modal">
<img src="<?php echo SITEROOT; ?>images/StaffImages/Jeff-V2.jpg" alt="" class="four-elements-block__wrapper--img img-fluid">
<button onClick="set_subject('Attn: Jeff','jeff')" title="Send Message" 
class="four-elements-block__wrapper--image-button">Message</button>
</div>
<figcaption>
<p class="four-elements-block__wrapper--name">Jeff</p>
<p class="four-elements-block__wrapper--position">Installation Support</p>
</figcaption>
</figure>
</div>

<div class="col-12 col-lg-3">
<figure class="four-elements-block__wrapper">
<div class="four-elements-block__wrapper--image js-open-custom-modal" data-employee-ID="3" data-custom-modal-id="#custom-fixed-modal">
<img src="<?php echo SITEROOT; ?>images/StaffImages/Kristi-V2.jpg" alt="" class="four-elements-block__wrapper--img img-fluid">
<button onClick="set_subject('Attn: Kristi','kristi')" title="Send Message" 
class="four-elements-block__wrapper--image-button">Message</button>
</div>
<figcaption>
<p class="four-elements-block__wrapper--name">Kristi</p>
<p class="four-elements-block__wrapper--position">Shipping Coordinator</p>
</figcaption>
</figure>
</div>


<div class="col-12 col-lg-3">
<figure class="four-elements-block__wrapper">
<div class="four-elements-block__wrapper--image js-open-custom-modal" data-employee-ID="4" data-custom-modal-id="#custom-fixed-modal">
<img src="<?php echo SITEROOT; ?>images/StaffImages/Melanie-V1.jpg" alt="" class="four-elements-block__wrapper--img img-fluid">
<button onClick="set_subject('Attn: Melanie','melanie')" title="Send Message" 
class="four-elements-block__wrapper--image-button">Message</button>
</div>
<figcaption>
<p class="four-elements-block__wrapper--name">Melanie</p>
<p class="four-elements-block__wrapper--position">Internet Design Support</p>
</figcaption>
</figure>
</div>

<div class="col-12 col-lg-3">
<figure class="four-elements-block__wrapper">
<div class="four-elements-block__wrapper--image js-open-custom-modal" data-employee-ID="2" data-custom-modal-id="#custom-fixed-modal">
<img src="<?php echo SITEROOT; ?>images/StaffImages/Wendy-V1.jpg" alt="" class="four-elements-block__wrapper--img img-fluid">
<button onClick="set_subject('Attn: Wendy','wendy')" title="Send Message" 
class="four-elements-block__wrapper--image-button">Message</button>
</div>
<figcaption>
<p class="four-elements-block__wrapper--name">Wendy</p>
<p class="four-elements-block__wrapper--position">Oregon Sales Director</p>
</figcaption>
</figure>
</div>

<div class="col-12 col-lg-3">
<figure class="four-elements-block__wrapper">
<div class="four-elements-block__wrapper--image js-open-custom-modal" data-employee-ID="2" data-custom-modal-id="#custom-fixed-modal">
<img src="<?php echo SITEROOT; ?>images/StaffImages/Art-V2.jpg" alt="" class="four-elements-block__wrapper--img img-fluid">
<button onClick="set_subject('Attn: Art','arthur')" title="Send Message" 
class="four-elements-block__wrapper--image-button">Message</button>
</div>
<figcaption>
<p class="four-elements-block__wrapper--name">Art</p>
<p class="four-elements-block__wrapper--position">Accounting</p>
</figcaption>
</figure>
</div>
<div class="col-12 col-lg-3">
<figure class="four-elements-block__wrapper">
<div class="four-elements-block__wrapper--image js-open-custom-modal" data-employee-ID="2" data-custom-modal-id="#custom-fixed-modal">
<img src="<?php echo SITEROOT; ?>images/StaffImages/Alicia-V2.jpg" alt="" class="four-elements-block__wrapper--img img-fluid">
<button onClick="set_subject('Attn: Alicia','alicia')" title="Send Message" 
class="four-elements-block__wrapper--image-button">Message</button>
</div>
<figcaption>
<p class="four-elements-block__wrapper--name">Alicia</p>
<p class="four-elements-block__wrapper--position">Public Relations</p>
</figcaption>
</figure>
</div>
<div class="col-12 col-lg-3">
<figure class="four-elements-block__wrapper">
<div class="four-elements-block__wrapper--image js-open-custom-modal" data-employee-ID="5" data-custom-modal-id="#custom-fixed-modal">
<img src="<?php echo SITEROOT; ?>images/StaffImages/Destiny-V2.jpg" alt="" class="four-elements-block__wrapper--img img-fluid">
<button onClick="set_subject('Attn: Destiny','destiny')" title="Send Message" 
class="four-elements-block__wrapper--image-button">Message</button>
</div>
<figcaption>
<p class="four-elements-block__wrapper--name">Destiny</p>
<p class="four-elements-block__wrapper--position">Assembly Director</p>
</figcaption>
</figure>
</div>

<div class="col-12 col-lg-3">
<figure class="four-elements-block__wrapper">
<div class="four-elements-block__wrapper--image js-open-custom-modal" 
data-employee-ID="6" data-custom-modal-id="#custom-fixed-modal">
<img src="<?php echo SITEROOT; ?>images/StaffImages/Curt-V1.jpg" alt="" class="four-elements-block__wrapper--img img-fluid">
<button onClick="set_subject('Attn: Curt','curt')" title="Send Message" 
class="four-elements-block__wrapper--image-button">Message</button>
</div>
<figcaption>
<p class="four-elements-block__wrapper--name">Curt</p>
<p class="four-elements-block__wrapper--position">Product Production/Engineer</p>
</figcaption>
</figure>
</div>
<div class="col-12 col-lg-3">
<figure class="four-elements-block__wrapper">
<div class="four-elements-block__wrapper--image js-open-custom-modal" data-employee-ID="7" data-custom-modal-id="#custom-fixed-modal">
<img src="<?php echo SITEROOT; ?>images/StaffImages/Cindy-V2.jpg" alt="" class="four-elements-block__wrapper--img img-fluid">
<button onClick="set_subject('Attn: Cindy','cindy')" title="Send Message" 
class="four-elements-block__wrapper--image-button">Message</button>
</div>
<figcaption>
<p class="four-elements-block__wrapper--name">Cindy</p>
<p class="four-elements-block__wrapper--position">Data Entry/Web Dev</p></figcaption>
</figure>
</div>

</div>
</div>
</div>
</section>


<section class="two-elements-block support-modal desktop-show js-team-galery-first-test">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12 col-md-6">
<div class="two-elements-block__wrapper">
<h2 class="two-elements-block__wrapper--heading about-us-heading-24 mb-2">
<?php echo $p_2_head; ?>
</h2>
<p class="two-elements-block__wrapper--text">
<?php echo $p_2_text; ?>
</p>
</div>
</div>
<?php
if(isset($r[0]['name'])){
?>
<div class="col-12 col-md-6">
<div class="two-elements-block__wrapper">
<h2 class="two-elements-block__wrapper--heading about-us-heading-24 mb-2">Another Happy Client</h2>
<p class="two-elements-block__wrapper--text">
<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/rev2.png" alt="" 
class="block-stars__wrapper--image">
<div class="block-stars__wrapper--text">
<div class="stars-container">
<?php
echo $r[0]['stars']; 
?>
</div>
<p class="first-text"><?php echo $r[0]['name']; ?></p>
<p style="width:200% !important;">
<?php echo $r[0]['msg']; ?>
</p>
</div>
</div>
</div>
</div>
<?php
}
?>
</div>
</div>
</div>
</section>


<section class="simple-block support-modal desktop-show js-team-galery-second-test">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="simple-block__border">
<div class="row">
<div class="col-12">
<div class="simple-block__heading">
<h2 class="simple-block__heading--heading about-us-heading-24 mb-0">
<?php echo $p_4_head; ?>
</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="simple-block__text">
<?php echo $p_4_text; ?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>



<section class="four-elements-block four-elements-block--bordered support">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12 col-sm-6 col-xl-3">
		<div class="four-elements-block__wrapper">
			<div class="four-elements-block__wrapper--bordered">
<img src="<?php echo SITEROOT; ?>images/delivery-truck-grey.svg" 
alt="delivery" class="four-elements-block__wrapper--icon">
<p class="four-elements-block__wrapper--bold-text">
<?php  
echo $p_5_head;
?>
</p>
<p class="four-elements-block__wrapper--underline-text">
<?php  
echo $p_5_text;
?>
</p>
			</div>
		</div>
	</div>
	<div class="col-12 col-sm-6 col-xl-3">
		<div class="four-elements-block__wrapper">
			<div class="four-elements-block__wrapper--bordered">
<img src="<?php echo SITEROOT; ?>images/phone-call.svg" 
alt="phone" class="four-elements-block__wrapper--icon">
<p class="four-elements-block__wrapper--bold-text">
<?php
echo $p_6_head;
?>
</p>
<p class="four-elements-block__wrapper--underline-text">
<a href="tel:503-639-7068" class="text-link" title="Call">Fax: 503-639-7068</a><br>
<a href="mailto:" class="text-link" title="Email us">Email Us</a><br>
<?php
echo $p_6_text;
?>
</p>
			</div>
		</div>
	</div>
	<div class="col-12 col-sm-6 col-xl-3">
		<div class="four-elements-block__wrapper">
<address class="four-elements-block__wrapper--bordered">
<img src="<?php echo SITEROOT; ?>images/address.svg" alt="" class="four-elements-block__wrapper--icon">
<p class="four-elements-block__wrapper--bold-text">
<?php
echo $p_7_head;
?>
</p>
<p class="four-elements-block__wrapper--underline-text">
<a href="#" class="text-link" title="Address">
<?php
echo $p_7_text;
?>
</a>
</p>
</address>
		</div>
	</div>
	<div class="col-12 col-sm-6 col-xl-3">
		<div class="four-elements-block__wrapper">
			<div class="four-elements-block__wrapper--bordered">
				<img src="<?php echo SITEROOT; ?>images/credit-card.svg" 
				alt="credit cards" class="four-elements-block__wrapper--icon">
				<p class="four-elements-block__wrapper--bold-text">We Proudly Accept:</p>
				<div class="four-elements-block__wrapper--cards" style="height: 23px !important;">
<img src="<?php echo SITEROOT; ?>images/aes.svg" alt="American Express">
<img src="<?php echo SITEROOT; ?>images/master.svg" alt="master card">
<img src="<?php echo SITEROOT; ?>images/visa.svg" alt="visa">
<img src="https://solvitware.com/images/optimized-enerbankusalogo.jpg" 
alt="enerbank usa card" class="footer-enerbankusa-logo">
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</section>


<section class="map-contact-block">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12 col-lg-9">
		<p style="font-size: 24px; line-height: 1.37;  letter-spacing: 2.4px; font-family: 'Futura-MediumItalic', sans-serif; color:#59C2C4;">Our Headquarters:</p>
		<!-- <img src="<?php echo SITEROOT; ?>images/map.png" alt="" class="map-contact-block__image"> -->
<?php

$street_addr = "9540 SW Tigard Street";
$city = "Tigard";
$state = "Oregon";
$zip = "97223";

$map = "<iframe width='100%' 
height='400px' 
frameborder='0' 
scrolling='no' 
marginheight='0' 
marginwidth='0' 
src='https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=" . $street_addr . ",+" . $city . ",+" . $state . "&amp;output=embed'></iframe><br />";

$block = "";
$block .= "<form name='get_directions_form' action='http://maps.google.com/maps' method='get' target='_blank'>";
$block .= "</form><br>";
$block .= "<div class='span9'>" . $map . "</div>";

echo $block;

?>
	</div>

<script>

function set_subject(str,estr){
	var subject_field = document.getElementById('subject');
	subject_field.value=str;
	subject_field.focus();
	var ctg_empl_email_addr_field = document.getElementById('ctg_empl_email_addr');
	ctg_empl_email_addr_field.value=estr;
}

</script>


	<div class="col-12 col-lg-3">
		<div class="map-contact-block__wrapper">
			<p style="font-size: 24px; line-height: 1.37; letter-spacing: 2.4px; font-family: 'Futura-MediumItalic', sans-serif; color:#59C2C4;">Contact us:</p>
<form action="<?php echo SITEROOT; ?>support-confirm.html"method="post">
<fieldset>
<input type="hidden" id="ctg_empl_email_addr" name="ctg_empl_email_addr" value=""> 
<input type="text" name="name" class="map-contact-block__wrapper--input" placeholder="Your Name">
<input type="text" name="email" class="map-contact-block__wrapper--input" placeholder="Your Email Address">
<input type="text" id="subject" name="subject" class="map-contact-block__wrapper--input" >
<textarea name="support_issue" cols="30" rows="8" class="map-contact-block__wrapper--textarea" 
placeholder="Message"></textarea>
<input type="submit" name="send" value="Send" class="map-contact-block__wrapper--submit">
</fieldset>
</form>

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
require_once($real_root . '/pages/views/modal-save-to-specs-sheet.php');
require_once($real_root . '/pages/views/modal-mobile-team-block.php');



//require_once($real_root . '/pages/views/modal-custom-fixed-element-info-employee.php');

?>

<script src="<?php echo SITEROOT; ?>app.js"></script>
</body>

</html>