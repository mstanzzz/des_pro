<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
	<title>ClosetsToGo | <?php echo $meta_title; ?></title>
	<meta name="description" content="<?php echo $meta_description; ?>">
<link href="<?php echo SITEROOT; ?>pages/app.original.css" rel="stylesheet">
</head>
<body class="clearfix idea-folder-popup">
<?php
require_once($real_root.'/pages/views/header.php');
$num_reviews=8;
$num_words=20;
$min_stars=4;
$r=$reviews->getMultiRandom($dbCustom,$num_reviews,$num_words,$min_stars);
?>

<section class="home-mobile-buttons-block covid-block">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12">
		<div class="home-mobile-buttons-block__wrapper">
			<button title="Why Closets To Go"  data-value="why-closets-to-go" 
			class="home-mobile-buttons-block__button js-home-top-button">
<?php echo $icon_btn_fill_white_arrow; ?>
			<span>Why Closets To Go</span>
			<span>Home</span>
			</button>
			<button title="Is DIY for me?" data-value="is-diy-for-me" 
			class="home-mobile-buttons-block__button js-home-top-button">
<?php echo $icon_btn_fill_white_arrow; ?>
			<span>Is DIY for me?</span>
			<span>Home</span>
			</button>
			<button title="Easy process" data-value="easy-process" 
			class="home-mobile-buttons-block__button js-home-top-button">
<?php echo $icon_btn_fill_white_arrow; ?>
			<span>Easy process</span>
			<span>Home</span>
			</button>
		</div>
	</div>
</div>
</div>
</div>
</section>

<section class="first-fixed-block covid-block home-page clearfix">
<div class="container-fluid">
<div class="row">
<div class="col-12 col-lg-8">
	<figure class="first-fixed-block__img-group" 	
	style="background-image: url('<?php echo SITEROOT; ?>images/9041-image-Mission-Home-Country-Commons-with-Alicia.jpg');">	
	<figcaption class="first-fixed-block__img-group--text-block">
	<div class="wrapper">
	<h1 class="first-fixed-block__img-group--heading dark-color" 
	style="color:#18C4C7; max-width: 900px;">
	<?php echo $top_1; ?>
	</h1>
	<h3 class="first-fixed-block__img-group--subheading dark-color" 
	style="color:#fff; text-shadow: 0 0 6px rgba(0,0,0,1);">
	<?php echo $top_2; ?>
	</h3>
	<p class="first-fixed-block__img-group--text dark-color" 
	style="color:#FFDF00; text-shadow: 0 0 6px rgba(0,0,0,1);">
	<?php echo $top_3; ?>
	</p>

	<!-- COMMENTING OUT  WILL COME BACK AFTER MVP-->
	<!-- <a href="#" title="Explore More" class="link-button">
	Explore More
	<?php //echo $icon_id_left_arrow_3; ?>
	</a> -->
	</div>
	</figcaption>
	</figure>
</div>

<div class="col-12 col-lg-4">
	<div class="first-fixed-block__text-group">
		<div class="first-fixed-block__text-group--wrapper">
			<div class="first-fixed-block__text-group--items">
				<img src="<?php echo SITEROOT; ?>images/package.svg" alt="">
				<div class="first-fixed-block__text-group--text">
					<p>
<?php echo $count_diy_inst; ?>
					</p>
					<p>Successful DIY Installations</p>
				</div>
			</div>
<!--
			<div class="first-fixed-block__text-group--items">
				<img src="<?php echo SITEROOT; ?>images/Group156.svg" alt="">
				<div class="first-fixed-block__text-group--text">
					<p>
<?php echo $count_des_tool; ?>
					</p>
					<p>Current users in <span class="first-text">design tool</span></p>
				</div>
			</div>
-->
			<div class="first-fixed-block__text-group--items">
									<img src="<?php echo SITEROOT; ?>images/Group156.svg" alt="">
				<div class="first-fixed-block__text-group--text">
					<p>
<?php echo $count_sub_des; ?>
					</p>
					<p>Current users <span class="second-text">submitting designs</span></p>
				</div>
			</div>
			<?php
			if(isset($r[0]['name'])){
			?>
			<div class="first-fixed-block__text-group--items">				
				<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
				<div class="block-stars__wrapper">


<!-- rev2.png -->					
<img src="<?php echo SITEROOT; ?>images/rev2.png" alt="" class="block-stars__wrapper--image"> 
					
					<div class="block-stars__wrapper--text">
						<div class="stars-container">
						<?php
						echo $r[0]['stars']; 
						?>
						</div>
						<p class="first-text"><?php echo $r[0]['name']; ?></p>
						<p><?php echo $r[0]['msg']; ?></p>
					</div>
				</div>
				</a>
			</div>
			<?php } ?>

			<?php
			if(isset($r[1]['name'])){
			?>			
			<div class="first-fixed-block__text-group--items">
				<a href="<?php echo SITEROOT; ?>diy-custom-closet-organizers/our-reviews.html">
				<div class="block-stars__wrapper">
					<img src="<?php echo SITEROOT; ?>images/rev2.png" alt="" 
					class="block-stars__wrapper--image">
					<div class="block-stars__wrapper--text">
						<div class="stars-container">
						<?php
						echo $r[1]['stars']; 
						?>
						</div>
						<p class="first-text"><?php echo $r[1]['name']; ?></p>
						<p><?php echo $r[1]['msg']; ?></p>
					</div>
				</div>
				</a>
			</div>
			<?php } ?>			
		</div>
	</div>
</div>
</div>
</div>
</section>

<main class="main clearfix">

<section class="second-block clearfix">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12">
		<div class="second-block__border">
			<div class="row">
				<div class="col-12 col-lg-6" id="why-closets-to-go">
					<div class="second-block__first">
						<h2 class="second-block__first--heading" style="font-family: 'Futurica-BS-light', sans-serif !important;">
<?php echo $p_1_head; ?>						
						</h2>
						<div class="tab-content__text-wrap js-text-wrap nd-read-more">
							<div class="tab-content__text-wrap--content js-hidden-text small-text">
<?php echo $p_1_text; ?>						
								<a href="<?php echo SITEROOT; ?>comparison.html" title="Discover more" class="link-button">
								discover more
<?php echo $icon_id_left_arrow_3; ?>
								</a>
							</div>
						</div>
						<button data-readall="Read more" data-readless="Read less" 
						class="mt-2 p-0 mb-0 js-btn-read-all-text nd-read-more-btn">
						<span>Read more</span>
						</button>

						<div class="second-block__first--wrapper align-items-center align-items-md-start">
							<div class="second-block__first--video">
								<div class="embed-responsive embed-responsive-16by9">								
									<?php echo $tmp_video; ?>
								</div>
							</div>
							<div class="second-block__first--comments">
								<?php
								if(isset($r[2]['name'])){
								?>										
								<a href="<?php echo SITEROOT; ?>our-reviews.html">
								<div class="block-stars__wrapper">
									<img src="<?php echo SITEROOT; ?>images/rev2.png" alt=""
									class="block-stars__wrapper--image">
									<div class="block-stars__wrapper--text">
										<div class="stars-container">
										<?php echo $r[2]['stars']; ?>
										</div>
										<p class="first-text"><?php echo $r[2]['name']; ?></p>
										<p><?php echo $r[2]['msg']; ?></p>
									</div>
								</div>
								</a>
								<br>
								<?php } ?>

								<?php
								if(isset($r[3]['name'])){
								?>										
								<a href="<?php echo SITEROOT; ?>our-reviews.html">
								<div class="block-stars__wrapper">
									<img src="<?php echo SITEROOT; ?>images/rev2.png" alt=""
										class="block-stars__wrapper--image">
									<div class="block-stars__wrapper--text">
										<div class="stars-container">
										<?php echo $r[3]['stars']; ?>
										</div>
										<p class="first-text"><?php echo $r[3]['name']; ?></p>
										<p><?php echo $r[3]['msg']; ?></p>
									</div>
								</div>
								</a>
								<br>
								<?php } ?>

								<?php
								if(isset($r[4]['name'])){
								?>										
								<a href="<?php echo SITEROOT; ?>our-reviews.html">
								<div class="block-stars__wrapper">
									<img src="<?php echo SITEROOT; ?>images/rev2.png" alt=""
										class="block-stars__wrapper--image">
									<div class="block-stars__wrapper--text">
										<div class="stars-container">
										<?php echo $r[4]['stars']; ?>
										</div>
										<p class="first-text"><?php echo $r[4]['name']; ?></p>
										<p><?php echo $r[4]['msg']; ?></p>
									</div>
								</div>
								</a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6">
					<div class="second-block__second" id="is-diy-for-me">
						<div class="second-block__second--wrapper">
							<h3 class="second-block__second--subheading">Is <span>DIY</span> for me?</h3>
							<h2 class="second-block__second--heading">Absolutely!</h2>
							<img src="<?php echo SITEROOT; ?>images/Group265.svg" alt=""
								class="second-block__second--first-img">
							<p class="second-block__second--first-text">
							
							Nearly 1 Million successful DIYs Since 1985!
							</p>
							<p class="second-block__second--second-text" style="padding-right: 13%;">
							<img src="<?php echo SITEROOT; ?>images/security-dark-gray.svg" style="padding-left: 4%;">
							perfect fit guarantee
							</p>

							<a href="<?php echo SITEROOT."diy-instructions.html"; ?>" 
							title="We can show you how" class="second-block__second--button" style="background: #5C667B;">
							We can show you how
<?php echo $icon_id_left_arrow_3; ?>
							</a>
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

<section class="block-with-background">
<div class="wrapper">
<div class="container-fluid">
<div class="block-with-background__wrapper" 
	style="background-image: url('<?php echo SITEROOT; ?>images/home-yellow-banner.png');">
	<div class="block-with-background__content">
		<div class="row">
			<div class="tab-content__text-wrap js-text-wrap nd-read-more vghc">
				<div class="tab-content__text-wrap--content js-hidden-text small-text">
					<h4 class="block-with-background__content--heading nd-mobile">
<?php echo $p_2_head; ?>						
					</h4>

					<button class="block-with-background__content--button" id="js-btn-mobile-show-modal">
					<img src="<?php echo SITEROOT; ?>images/Info2Btn.svg" alt="Info Button">
					</button>

					<div class="block-with-background__content--mobile-popup d-flex m-no-flex" 
						id="js-mobile-show-modal">
						<div>
<?php echo $p_2_text; ?>						
							<div class="desktop-show">
								<!-- <a href="#" title="Discover more" class="link-button">
								discover more
<?php echo $icon_id_left_arrow_3; ?>
								</a> -->
							</div>
						</div>
						<div class="col-12 col-lg-4 m-position">
							<div class="block-with-background__content--images nd">
								<div class="mobile-show">
									<!-- <a href="#" title="Discover more" class="link-button">
									discover more
<?php echo $icon_id_left_arrow_3; ?>
									</a> -->
								</div>
								<a href="#" title="Meet" class="images-link">
								<img src="" alt="" class="img-fluid"><!--"<?php echo SITEROOT; ?>images/Meet1@2x.png-->
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<button data-readall="Read more" data-readless="Read less" 
			class="mt-2 p-0 mb-0 js-btn-read-all-text nd-read-more-btn m-d-n">
			<!-- <span>Read more</span> -->
			</button>
		</div>
	</div>
</div>
</div>
</div>
</div>
</section>


<section class="you-design-block">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12 col-xl-8">
		<div class="you-design-block__image">
			<img src="<?php echo SITEROOT; ?>images/coupleoncouch.jpg" alt="" class="img-fluid">
		</div>
	</div>
	<div class="col-12 col-xl-4">
		<div class="you-design-block__wrapper">
			<p class="you-design-block__wrapper--perfect-fit">
			<img src="<?php echo SITEROOT; ?>images/security.svg" alt="">			
<?php echo $p_3_head; ?>									
			</p>
			<h2 class="you-design-block__wrapper--heading">
			YOU Design
			</h2>
			<div class="tab-content__text-wrap js-text-wrap nd-read-more you-design">
				<div class="tab-content__text-wrap--content js-hidden-text small-text">
					<p class="you-design-block__wrapper--text">
<?php echo $p_3_text; ?>						
					</p>
				</div>
			</div>
			<button data-readall="Read more" data-readless="Read less" 
				class="mt-2 p-0 mb-0 js-btn-read-all-text nd-read-more-btn">
				<span>Read more</span>
			</button>
			<div class="you-design-block__wrapper--text-group">
				<div>
					<img src="<?php echo SITEROOT; ?>images/Group174.svg" alt="">
					<p>
<?php //echo $count_des_tool; ?>					
					</p>
				</div>
				<!--<p>Current users in <span>design tool</span></p>-->
			</div>
			<a href="#<?php //echo SITEROOT."request-design.html"; ?>" 
			title="Try now" class="link-button">
			Coming Soon
<?php echo $icon_id_left_arrow_3; ?>
			</a>
		</div>
		
		
	</div>
</div>
</div>
</div>
</section>


<section class="you-design-block we-desing-block">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12 col-xl-4">
		<div class="you-design-block__wrapper">
			<p class="you-design-block__wrapper--perfect-fit">
			<img src="<?php echo SITEROOT; ?>images/security.svg" alt="">
<?php echo $p_4_head; ?>
			</p>
			<h2 class="you-design-block__wrapper--heading">WE Design</h2>
			<div class="tab-content__text-wrap js-text-wrap nd-read-more you-design">
				<div class="tab-content__text-wrap--content js-hidden-text small-text">
					<p class="you-design-block__wrapper--text">
<?php echo $p_4_text; ?>
					</p>
				</div>
			</div>
			<button data-readall="Read more" data-readless="Read less" 
			class="mt-2 p-0 mb-0 js-btn-read-all-text nd-read-more-btn">
			<span>Read more</span>
			</button>
			<div class="you-design-block__wrapper--text-group">
				<div>
					<img src="<?php echo SITEROOT; ?>images/Group174.svg" alt="">
					<p>
<?php echo $count_sub_des; ?>
					</p>
					</div>
					<p>Current users <span>submitting designs</span></p>
				</div>
				<a href="<?php echo SITEROOT; ?>request-design.html" title="Try now" class="link-button">
				Try now
<?php echo $icon_id_left_arrow_3; ?>
			</a>
		</div>
	</div>
	<div class="col-12 col-xl-8">
		<div class="you-design-block__image">
<img src="<?php echo SITEROOT; ?>images/ladyonlaptop.jpg" alt="">
<!--
<img src="<?php echo SITEROOT."saascustuploads/1/cms/wide/".$img_3_fn; ?>" alt="" class="img-fluid">
-->
		</div>
	</div>
</div>
</div>
</div>
</section>


<section class="easy-process-block" id="easy-process">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12">
		<div class="easy-process-block__wrapper"><div>
		<div class="tab-content__text-wrap js-text-wrap nd-read-more easy-process-nd" 
			style="height: 100% !important;">
			<div class="tab-content__text-wrap--content js-hidden-text small-text">
				<h2 class="easy-process-block__heading" style="font-family:'Futura-MediumItalic',sans-serif;">
<?php echo $p_5_head; ?>
				</h2>
<?php echo $p_5_text; ?>
					<!-- <a href="<?php echo SITEROOT; ?>processing.html" title="Discover more" class="link-button">
					discover more
<?php echo $icon_id_left_arrow_3; ?>
					</a> -->
			</div>
		</div>
		<!-- <button data-readall="Read more" data-readless="Read less" class="js-btn-read-all-text nd-read-more-btn">
		<span>Read more</span>
		</button> -->
		</div>
		<div></div>
		<div class="graphics-block">
			<div class="graphics-block__wrapper first-wrapper">
				<div class="graphics-block__content first-content">
					<h2 class="first-heading">Phase 1</h2>
					<p>WE DESIGN or YOU DESIGN</p>
					<a href="<?php echo SITEROOT; ?>design-process.html" title="Explore more">Explore more</a>
				</div>
			</div>

			<div class="graphics-block__wrapper second-wrapper">
				<div class="graphics-block__content second-content">
					<h2 class="second-heading">Phase 2</h2>
					<p style="padding-left: 0%;">Engineering, Manufacturing, Assembly, Packaging & Shipping</p>
					<a href="<?php echo SITEROOT; ?>engineering-shipping-process.html" title="Explore more">Explore more</a>
				</div>
			</div>
			<div class="graphics-block__wrapper third-wrapper">
				<div class="graphics-block__content third-content">
					<h2 class="third-heading">Phase 3</h2>
					<p>Easy DIY-Install & Perfect Fit Guarantee</p>
					<a href="<?php echo SITEROOT; ?>diy-instructions.html" title="Explore more">Explore more</a>
				</div>
			</div>
		</div>


		<div class="stars-wrapper">
			<?php
			if(isset($r[5]['name'])){
			?>										
			<a href="<?php echo SITEROOT."our-reviews.html"; ?>">
			<div class="block-stars__wrapper">
				<img src="<?php echo SITEROOT; ?>images/rev2.png" alt="" class="block-stars__wrapper--image">
				<div class="block-stars__wrapper--text">
						<div class="stars-container">
						<?php echo $r[5]['stars']; ?>
						</div>
						<p class="first-text"><?php echo $r[5]['name']; ?></p>
						<p><?php echo $r[5]['msg']; ?></p>
				</div>
			</div>
			</a>
			<?php } ?>

			<?php
			if(isset($r[6]['name'])){
			?>													
			<a href="<?php echo SITEROOT."our-reviews.html"; ?>">	
			<div class="block-stars__wrapper">
				<img src="<?php echo SITEROOT; ?>images/rev2.png" alt="" 
				class="block-stars__wrapper--image">
				<div class="block-stars__wrapper--text">
						<div class="stars-container">
						<?php echo $r[6]['stars']; ?>
						</div>
						<p class="first-text"><?php echo $r[6]['name']; ?></p>
						<p><?php echo $r[6]['msg']; ?></p>
				</div>
			</div>
			</a>
			<?php } ?>

			<?php
			if(isset($r[7]['name'])){
			?>										
			<a href="<?php echo SITEROOT."our-reviews.html"; ?>">
			<div class="block-stars__wrapper">
				<img src="<?php echo SITEROOT; ?>images/rev2.png" alt="" class="block-stars__wrapper--image">
				<div class="block-stars__wrapper--text">
					<div class="stars-container">
					<?php echo $r[7]['stars']; ?>
					</div>
					<p class="first-text"><?php echo $r[7]['name']; ?></p>
					<p><?php echo $r[7]['msg']; ?></p>
				</div>
			</div>
			</a>
			<?php } ?>
		</div>
	</div>
</div>
</div>
</div>
</div>
</section>

<section class="showroom-block">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12 showroom-block__heading">
		<h2>Closet Organizer Showroom</h2>
		<div class="mobile-show">
			<a href="<?php echo SITEROOT; ?>showroom.html" 
			title="Organizer Showroom" class="link-button">
			Explore more
			<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
			<path id="left-arrow_3_" data-name="left-arrow(3)" d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z" transform="translate(0.001 -4.676)"></path>
			</svg>
			</a>
		</div>
	</div>
</div>

<div class="row showroom-block__wrapper pb-4">
<?php  
if(isset($cats_1[0])){
?>
	<div class="col-12 col-lg-6 hidden-box open">
		<figure class="showroom-block__item">
<?php
if($isMob) {
$img = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/small/wide/".$cats_1[0]['file_name'];
}else{
$img = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/wide/".$cats_1[0]['file_name'];			
}
echo "<img src='".$img."' alt='professional' class='showroom-block__item--img'>";
?>		
		<figcaption class="showroom-block__item--wrapper">
		<div class="showroom-block__item--content">
			<h2><?php echo $cats_1[0]['name']; ?></h2>
			<div class="showroom-block__item--images">
				<img src="<?php echo SITEROOT; ?>images/Group174.svg" 
				alt="<?php echo $cats_1[0]['name']; ?>">
				<p><?php echo $cats_1[0]['click_count']; ?></p>
			</div>
			<p>Current users in <?php echo $cats_1[0]['name']; ?></p>
			<a href="<?php echo SITEROOT; ?>showroom.html" 
			title="<?php echo stripSlashes($cats_1[0]['name']); ?>" class="link-button">view category
			<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
			<path id="left-arrow_3_" data-name="left-arrow(3)"
			d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z"
			transform="translate(0.001 -4.676)"/>
			</svg>
			</a>
		</div>
		</figcaption>
		</figure>
	</div>
<?php
}  
if(isset($cats_1[1])){
?>
	<div class="col-12 col-lg-3 hidden-box open">
		<figure class="showroom-block__item">
<?php
if($isMob) {
$img = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/small/".$cats_1[1]['file_name'];
}else{
$img = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/".$cats_1[1]['file_name'];			
}
echo "<img src='".$img."' alt='professional' class='showroom-block__item--img'>";
?>		
		<figcaption class="showroom-block__item--wrapper">
		<div class="showroom-block__item--content">
			<h2><?php echo $cats_1[1]['name']; ?></h2>
			<div class="showroom-block__item--images">
				<img src="<?php echo SITEROOT; ?>images/Group174.svg" 
				alt="<?php echo $cats_1[1]['name']; ?>">
				<p><?php echo $cats_1[1]['click_count']; ?></p>
			</div>
			<p>Current users in Custom Closet Organizers for Wardrobes</p>
			<a href="<?php echo SITEROOT; ?>showroom.html" 
			title="<?php echo $cats_1[1]['name']; ?>" class="link-button">
			Explore more
			<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
			<path id="left-arrow_3_" data-name="left-arrow(3)"
			d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z"
			transform="translate(0.001 -4.676)"/>
			</svg>
			</a>
		</div>
		</figcaption>
		</figure>
	</div>
<?php  
}
if(isset($cats_1[2])){
?>
	<div class="col-12 col-lg-3 hidden-box open">
		<figure class="showroom-block__item">
<?php
if($isMob) {
$img = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/small/".$cats_1[2]['file_name'];
}else{
$img = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/".$cats_1[2]['file_name'];			
}
echo "<img src='".$img."' alt='professional' class='showroom-block__item--img'>";
?>		
		<figcaption class="showroom-block__item--wrapper">
		<div class="showroom-block__item--content">
			<h2><?php echo $cats_1[2]['name']; ?></h2>
			<div class="showroom-block__item--images">
				<img src="<?php echo SITEROOT; ?>images/Group174.svg" 
				alt="<?php echo $cats_1[2]['name']; ?>">
				<p><?php echo $cats_1[2]['click_count']; ?></p>
			</div>
			<p>Current users in <?php echo $cats_1[2]['name']; ?></p>
			<a href="<?php echo SITEROOT; ?>showroom.html" 
			title="<?php echo $cats_1[2]['name']; ?>" class="link-button">
			Explore more
			<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
			<path id="left-arrow_3_" data-name="left-arrow(3)"
			d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z"
			transform="translate(0.001 -4.676)"/>
			</svg>
			</a>
		</div>
		</figcaption>
		</figure>
	</div>
<?php
}  
if(isset($cats_1[3])){
?>
	<div class="col-12 col-lg-3 hidden-box open">
		<figure class="showroom-block__item">
<?php
if($isMob) {
$img = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/small/".$cats_1[3]['file_name'];
}else{
$img = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/".$cats_1[3]['file_name'];			
}
echo "<img src='".$img."' alt='professional' class='showroom-block__item--img'>";
?>		
		<figcaption class="showroom-block__item--wrapper">
		<div class="showroom-block__item--content">
			<h2><?php echo $cats_1[3]['name']; ?></h2>
			<div class="showroom-block__item--images">
				<img src="<?php echo SITEROOT; ?>images/Group174.svg" 
				alt="<?php echo $cats_1[3]['name']; ?>">
				<p><?php echo $cats_1[3]['click_count']; ?></p>
			</div>
			<p>Current users in Custom Closet Organizers for Wardrobes</p>
			<a href="<?php echo SITEROOT; ?>showroom.html" 
			title="<?php echo $cats_1[3]['name']; ?>" class="link-button">
			Explore more
			<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
			<path id="left-arrow_3_" data-name="left-arrow(3)"
			d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z"
			transform="translate(0.001 -4.676)"/>
			</svg>
		</a>
		</div>
		</figcaption>
		</figure>
	</div>
<?php  
}
if(isset($cats_1[4])){
?>
	<div class="col-12 col-lg-3 hidden-box open">
		<figure class="showroom-block__item">
<?php
if($isMob) {
$img = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/small/".$cats_1[4]['file_name'];
}else{
$img = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/".$cats_1[4]['file_name'];			
}
echo "<img src='".$img."' alt='professional' class='showroom-block__item--img'>";
?>		
		<figcaption class="showroom-block__item--wrapper">
		<div class="showroom-block__item--content">
			<h2><?php echo $cats_1[4]['name']; ?></h2>
			<div class="showroom-block__item--images">
				<img src="<?php echo SITEROOT; ?>images/Group174.svg" 
				alt="<?php echo $cats_1[4]['name']; ?>">
				<p><?php echo $cats_1[4]['click_count']; ?></p>
			</div>
			<p>Current users in Custom Closet Organizers for Wardrobes</p>
			<a href="<?php echo SITEROOT; ?>showroom.html" 
			title="<?php echo stripSlashes($cats_1[4]['name']); ?>" class="link-button">
			Explore more
			<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
			<path id="left-arrow_3_" data-name="left-arrow(3)"
			d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z"
			transform="translate(0.001 -4.676)"/>
			</svg>
			</a>
		</div>
		</figcaption>
		</figure>
	</div>
<?php  
}
if(isset($cats_1[5])){
?>
	<div class="col-12 col-lg-6 hidden-box open">
		<figure class="showroom-block__item">
<?php
if($isMob) {
$img = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/small/wide/".$cats_1[5]['file_name'];
}else{
$img = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/wide/".$cats_1[5]['file_name'];			
}
echo "<img src='".$img."' alt='professional' class='showroom-block__item--img'>";
?>		
		<figcaption class="showroom-block__item--wrapper">
		<div class="showroom-block__item--content">
			<h2><?php echo $cats_1[5]['name']; ?></h2>
			<div class="showroom-block__item--images">
				<img src="<?php echo SITEROOT; ?>images/Group174.svg" 
				alt="<?php echo $cats_1[5]['name']; ?>">
				<p><?php echo $cats_1[5]['click_count']; ?></p>
			</div>
			<p>Current users in <?php echo $cats_1[5]['name']; ?></p>
			<button class="link-button expand-button">
			Explore more
			<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
			<path id="left-arrow_3_" data-name="left-arrow(3)"
			d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z"
			transform="translate(0.001 -4.676)"/>
			</svg>
			</button>
			<a href="<?php echo SITEROOT; ?>showroom.html" 
			title="<?php echo stripSlashes($cats_1[5]['name']); ?>" class="link-button d-none">
			Explore more
			<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
			<path id="left-arrow_3_" data-name="left-arrow(3)"
			d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z"
			transform="translate(0.001 -4.676)"/>
			</svg>
			</a>
		</div>
		</figcaption>
		</figure>
	</div>
<?php  
}
?>
<div class="row">
	<div class="col-12 text-center">
		<div class="desktop-show">
			<a href="<?php echo SITEROOT; ?>category.html" 
			title="<?php echo stripSlashes($cats_1[0]['name']); ?>" class="link-button">
			Explore all
			<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
			<path id="left-arrow_3_" data-name="left-arrow(3)"
			d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z"
			transform="translate(0.001 -4.676)"/>
			</svg>
			</a>
		</div>
	</div>
</div>
</div>
</div>
</section>

<section class="showroom-block">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12 showroom-block__heading">
		<h2>Closet Organizer Accessories</h2>
		<div class="mobile-show">
			<a href="<?php echo SITEROOT; ?>accessory-categories.html" 
			title="closet organizer showroom" class="link-button">
			Explore all
			<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
			<path id="left-arrow_3_" data-name="left-arrow(3)" d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z" transform="translate(0.001 -4.676)"></path>
			</svg>
			</a>
		</div>
	</div>
</div>

<div class="row showroom-block__wrapper pb-4">
<?php  
if(isset($cats_2[0])){
?>
	<div class="col-12 col-lg-6 hidden-box open">
		<figure class="showroom-block__item">
<?php
if($isMob) {
$img = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/small/wide/".$cats_2[0]['file_name'];
}else{
$img = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/wide/".$cats_2[0]['file_name'];			
}
echo "<img src='".$img."' alt='professional' class='showroom-block__item--img'>";
?>		
		<figcaption class="showroom-block__item--wrapper">
		<div class="showroom-block__item--content">
			<h2><?php echo $cats_2[0]['name'] ?></h2>
			<div class="showroom-block__item--images">
				<img src="<?php echo SITEROOT; ?>images/Group174.svg" 
				alt="<?php echo $cats_2[0]['name'] ?>">
				<p><?php echo $cats_2[0]['click_count'] ?></p>
			</div>
			<p>Current users in <?php echo $cats_2[0]['name'] ?> </p>
			<a href="<?php echo SITEROOT; ?>accessory-categories.html" 
			title="<?php echo stripSlashes($cats_2[0]['name']); ?>" class="link-button">view category
			<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
			<path id="left-arrow_3_" data-name="left-arrow(3)"
			d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z"
			transform="translate(0.001 -4.676)"/>
			</svg>
			</a>
		</div>
		</figcaption>
		</figure>
	</div>
<?php
}  
if(isset($cats_2[1])){
?>
	<div class="col-12 col-lg-3 hidden-box open">
		<figure class="showroom-block__item">
<?php
if($isMob) {
$img = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/small/".$cats_2[1]['file_name'];
}else{
$img = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/".$cats_2[1]['file_name'];			
}
echo "<img src='".$img."' alt='professional' class='showroom-block__item--img'>";
?>		
		<figcaption class="showroom-block__item--wrapper">
		<div class="showroom-block__item--content">
			<h2><?php echo $cats_2[1]['name']; ?></h2>
			<div class="showroom-block__item--images">
				<img src="<?php echo SITEROOT; ?>images/Group174.svg" 
				alt="<?php echo $cats_2[1]['name']; ?>">
				<p><?php echo $cats_2[1]['click_count']; ?></p>
			</div>
			<p>Current users in Custom Closet Organizers for Wardrobes</p>
			<a href="<?php echo SITEROOT; ?>accessory-categories.html" 
			title="<?php echo $cats_2[1]['name']; ?>" class="link-button">
			Explore more
			<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
			<path id="left-arrow_3_" data-name="left-arrow(3)"
			d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z"
			transform="translate(0.001 -4.676)"/>
			</svg>
			</a>
		</div>
		</figcaption>
		</figure>
	</div>
<?php  
}
if(isset($cats_2[2])){
?>
	<div class="col-12 col-lg-3 hidden-box open">
		<figure class="showroom-block__item">
<?php
if($isMob) {
$img = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/small/".$cats_2[2]['file_name'];
}else{
$img = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/".$cats_2[2]['file_name'];			
}
echo "<img src='".$img."' alt='professional' class='showroom-block__item--img'>";
?>		
		<figcaption class="showroom-block__item--wrapper">
		<div class="showroom-block__item--content">
			<h2><?php echo $cats_2[2]['name']; ?></h2>
			<div class="showroom-block__item--images">
				<img src="<?php echo SITEROOT; ?>images/Group174.svg" 
				alt="<?php echo $cats_2[2]['name']; ?>">
				<p><?php echo $cats_2[2]['click_count']; ?></p>
			</div>
			<p>Current users in <?php echo $cats_2[2]['name']; ?></p>
			<a href="<?php echo SITEROOT; ?>accessory-categories.html" 
			title="<?php echo $cats_2[2]['name']; ?>" class="link-button">
			view category
			<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
			<path id="left-arrow_3_" data-name="left-arrow(3)"
			d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z"
			transform="translate(0.001 -4.676)"/>
			</svg>
			</a>
		</div>
		</figcaption>
		</figure>
	</div>
<?php
}  
if(isset($cats_2[3])){
?>
	<div class="col-12 col-lg-3 hidden-box open">
		<figure class="showroom-block__item">
<?php
if($isMob) {
$img = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/small/".$cats_2[3]['file_name'];
}else{
$img = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/".$cats_2[3]['file_name'];			
}
echo "<img src='".$img."' alt='professional' class='showroom-block__item--img'>";
?>		
		<figcaption class="showroom-block__item--wrapper">
		<div class="showroom-block__item--content">
			<h2><?php echo $cats_2[3]['name']; ?></h2>
			<div class="showroom-block__item--images">
				<img src="<?php echo SITEROOT; ?>images/Group174.svg" 
				alt="<?php echo $cats_2[3]['name']; ?>">
				<p><?php echo $cats_2[3]['click_count']; ?></p>
			</div>
			<p>Current users in <?php echo $cats_2[3]['name']; ?></p>
			<a href="<?php echo SITEROOT; ?>accessory-categories.html" 
			title="<?php echo stripSlashes($cats_1[3]['name']); ?>" class="link-button">
			Explore more
			<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
			<path id="left-arrow_3_" data-name="left-arrow(3)"
			d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z"
			transform="translate(0.001 -4.676)"/>
			</svg>
		</a>
		</div>
		</figcaption>
		</figure>
	</div>
<?php  
}
if(isset($cats_2[4])){

?>
	<div class="col-12 col-lg-3 hidden-box open">
		<figure class="showroom-block__item">
<?php
if($isMob) {
$img = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/small/".$cats_2[4]['file_name'];
}else{
$img = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/".$cats_2[4]['file_name'];			
}
echo "<img src='".$img."' alt='professional' class='showroom-block__item--img'>";
?>		
		<figcaption class="showroom-block__item--wrapper">
		<div class="showroom-block__item--content">
			<h2><?php echo $cats_2[4]['name']; ?></h2>
			<div class="showroom-block__item--images">
				<img src="<?php echo SITEROOT; ?>images/Group174.svg" 
				alt="<?php echo $cats_2[4]['name']; ?>">
				<p><?php echo $cats_2[4]['click_count']; ?></p>
			</div>
			<p>Current users in <?php echo $cats_2[4]['name']; ?></p>
			<a href="<?php echo SITEROOT; ?>accessory-categories.html" 
			title="<?php echo $cats_2[4]['name']; ?>" class="link-button">
			Explore more
			<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
			<path id="left-arrow_3_" data-name="left-arrow(3)"
			d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z"
			transform="translate(0.001 -4.676)"/>
			</svg>
			</a>
		</div>
		</figcaption>
		</figure>
	</div>
<?php  
}
if(isset($cats_2[5])){
?>
	<div class="col-12 col-lg-6 hidden-box open">
		<figure class="showroom-block__item">
<?php
if($isMob) {
$img = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/small/wide/".$cats_2[5]['file_name'];
}else{
$img = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/wide/".$cats_2[5]['file_name'];			
}
echo "<img src='".$img."' alt='professional' class='showroom-block__item--img'>";
?>		
		<figcaption class="showroom-block__item--wrapper">
		<div class="showroom-block__item--content">
			<h2><?php echo $cats_2[5]['name']; ?></h2>
			<div class="showroom-block__item--images">
				<img src="<?php echo SITEROOT; ?>images/Group174.svg" 
				alt="<?php echo $cats_2[5]['name']; ?>">
				<p><?php echo $cats_2[5]['click_count']; ?></p>
			</div>
			<p>Current users in <?php echo $cats_2[5]['name']; ?></p>
			<button class="link-button expand-button">
			Explore more
			<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
			<path id="left-arrow_3_" data-name="left-arrow(3)"
			d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z"
			transform="translate(0.001 -4.676)"/>
			</svg>
			</button>
			<a href="<?php echo SITEROOT; ?>accessory-categories.html" 
			title="<?php echo $cats_1[5]['name']; ?>" class="link-button d-none">
			Explore more
			<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
			<path id="left-arrow_3_" data-name="left-arrow(3)"
			d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z"
			transform="translate(0.001 -4.676)"/>
			</svg>
			</a>
		</div>
		</figcaption>
		</figure>
	</div>
<?php  
}
?>
<div class="row">
	<div class="col-12 text-center">
		<div class="desktop-show">
			<a href="<?php echo SITEROOT; ?>accessory-categories.html" 
			title="closet organizer accessories" class="link-button">
			Explore all
			<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
			<path id="left-arrow_3_" data-name="left-arrow(3)"
			d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z"
			transform="translate(0.001 -4.676)"/>
			</svg>
			</a>
		</div>
	</div>
</div>
</div>
</div>
</section>







<section class="two-elements-block">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12 col-lg-6">
		<div class="two-elements-block__wrapper with-border">
			<h2 class="two-elements-block__wrapper--heading">
<?php echo $p_7_head; ?>
			</h2>
			<div class="tab-content__text-wrap js-text-wrap nd-read-more for-the-pro" 
				style="height: auto!important;">
				<div class="tab-content__text-wrap--content js-hidden-text small-text">
<?php echo $p_7_text; ?>
					<a href="<?php echo SITEROOT."for-the-pros.html"; ?>" title="Discover more" class="link-button">
					discover more
<?php echo $icon_id_left_arrow_3; ?>
					</a>
				</div>
			</div>
			<button data-readall="Read more" data-readless="Read less" 
			class="mt-2 p-0 mb-0 js-btn-read-all-text nd-read-more-btn">
			<span>Read more</span>
			</button>
		</div>
	</div>
	<div class="col-12 col-lg-6">
		<div class="two-elements-block__wrapper with-border">
			<h2 class="two-elements-block__wrapper--heading">
<?php echo $p_8_head; ?>			
			</h2>
			<div class="tab-content__text-wrap js-text-wrap nd-read-more for-the-pro" 
				style="height: auto!important;">
				<div class="tab-content__text-wrap--content js-hidden-text small-text">
<?php echo $p_8_text; ?>
					<a href="<?php echo SITEROOT."careers.html"; ?>" title="Discover more" class="link-button">
					discover more
<?php echo $icon_id_left_arrow_3; ?>
					</a>
				</div>
			</div>
			<button data-readall="Read more" data-readless="Read less" 
			class="mt-2 p-0 mb-0 js-btn-read-all-text nd-read-more-btn">
			<span>Read more</span>
			</button>
		</div>
	</div>
</div>
</div>
</div>
</section>
</main>


<?php
require_once($real_root.'/pages/views/virtual-assistant.php');
require_once($real_root.'/pages/views/mobile-show-footer-buttons.php');
require_once($real_root.'/pages/views/footer.php');
require_once($real_root.'/pages/views/modal-perfect-fit-guarantee.php');
require_once($real_root.'/pages/views/modal-free-shipping.php');
require_once($real_root.'/pages/views/modal-save-to-idea-folder.php');
?>

<script src="<?php echo SITEROOT; ?>pages/app.original.js"></script>

</body>

</html>
