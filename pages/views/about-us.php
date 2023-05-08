
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
?>
<section class="home-mobile-buttons-block covid-block">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12">
		<div class="home-mobile-buttons-block__wrapper links-wrapper">
			<a href="<?php echo SITEROOT; ?>" title="About us" class="home-mobile-buttons-block__link active">Home</a>
			<a href="<?php echo SITEROOT; ?>support.html" title="Support" class="home-mobile-buttons-block__link">Support</a>
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
			<li class="breadcrumb-item active" aria-current="page" title="About us">About us</li>
			</ul>
		</div>
	</div>
</div>
</div>
</div>
</section>


<section class="you-design-block we-desing-block about-us">
<div class="wrapper">
<div class="container-fluid">
<div class="row">				
	<div class="col-12 col-lg-5">
		<div class="you-design-block__wrapper">
			<h3 class="you-design-block__wrapper--heading"><?php echo $p_1_head; ?></h3>
			<p class="you-design-block__wrapper--text small-text js-show-text">
			<?php echo $p_1_text; ?>
			</p>								
			<div class="button-holder desktop-show mobile-show">
				<button data-readAll="Full description" 
					data-readLess="Less description" 
					class="link-button js-btn-view-all-text" 
					title='Full description'>
					<span>Full description</span>
					<?php echo $icon_id_left_arrow_3; ?>
				</button>
			</div>
			
			<div class="button-holder mobile-show mt-3">
				<button data-readAll="Full description" 
					data-readLess="Less description" 
					class="link-button js-btn-view-all-text" 
					title='Full description'>
					<span>Full description</span>
					<?php echo $icon_id_left_arrow_3; ?>
				</button>
			</div>
		</div>
	</div>
	<div class="col-12 col-lg-7">
		<div class="you-design-block__image">
			<img src="<?php echo SITEROOT."/saascustuploads/".$_SESSION['profile_account_id']."/cms/".$img_1_fn; ?>" alt="" class="img-fluid">
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
	<div class="col-12 col-lg-7">
		<div class="you-design-block__image">
			<img src="<?php echo SITEROOT."/saascustuploads/".$_SESSION['profile_account_id']."/cms/".$img_2_fn; ?>" alt="" class="img-fluid">
		</div>
	</div>
	<div class="col-12 col-lg-5">

		<div class="company-block__text--wrapper">
			<h3 class="you-design-block__wrapper--heading"><?php echo $p_2_head; ?></h3>
			<p class="you-design-block__wrapper--text small-text js-show-text">
			<?php echo $p_2_text; ?>
			</p>
								
			<div class="button-holder desktop-show">
				<button data-readAll="Full description" 
					data-readLess="Less description" 
					class="link-button js-btn-view-all-text" 
					title='Full description'>
					<span>Full description</span>
					<?php echo $icon_id_left_arrow_3; ?>
				</button>
			</div>
			<div class="button-holder mobile-show mt-3">
				<button data-readAll="Full description" 
					data-readLess="Less description" 
					class="link-button js-btn-view-all-text" 
					title='Full description'>
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



<section class="you-design-block we-desing-block about-us">
<div class="wrapper">
<div class="container-fluid">
<div class="row">				
	<div class="col-12 col-lg-5">
		<div class="you-design-block__wrapper">
			<h3 class="you-design-block__wrapper--heading"><?php echo $p_3_head; ?></h3>
			<p class="you-design-block__wrapper--text small-text js-show-text">
			<?php echo $p_3_text; ?>
			</p>								
			<div class="button-holder desktop-show">
				<button data-readAll="Full description" 
					data-readLess="Less description" 
					class="link-button js-btn-view-all-text" 
					title='Full description'>
					<span>Full description</span>
					<?php echo $icon_id_left_arrow_3; ?>
				</button>
			</div>
			<div class="button-holder mobile-show mt-3">
				<button data-readAll="Full description" 
					data-readLess="Less description" 
					class="link-button js-btn-view-all-text" 
					title='Full description'>
					<span>Full description</span>
					<?php echo $icon_id_left_arrow_3; ?>
				</button>
			</div>
		</div>
	</div>
	<div class="col-12 col-lg-7">
		<div class="you-design-block__image">
			<img src="<?php echo SITEROOT."/saascustuploads/".$_SESSION['profile_account_id']."/cms/".$img_3_fn; ?>" alt="" class="img-fluid">
		</div>
	</div>
</div>
</div>
</div>
</section>



<section class="time-line-block">
<div class="wrapper">
<div class="container-fluid">
<div class="row" style="padding-bottom: 3% !important;">
	<div class="col-12">
		<div class="time-line-block__heading">
			<h2 style="color: #59c2c4 !important; text-align:center;">Our Story: </h2>
			<p style="font-size: 16px !important; color: black !important; text-align:left !important; font-family:'OpenSans-Regular', sans-serif;"> 
			Over 40 years ago, a lifelong passion for woodworking matured into a career that would inspire a brand new industry in the US!
			Call it crazy or…manifest destiny, Closets To Go would seal its fate with a daring flip of a coin -  HEADS being Custom Closet
			Organizers or TAILS being Custom Home Office! Landing on HEADS, the path was set and we lunged forward into the virtually uncharted territory of the closet and storage industry.</p>
			<p class="you-design-block__wrapper--text small-text js-show-text" style="font-size: 16px !important; color: black !important; text-align:left !important;">
			<?php
			echo $p_4_text;
			?>
			</p>
			
			<div class="button-holder desktop-show" style="text-align:center !important;">
				<button data-readAll="Full description" 
					data-readLess="Less description" 
					class="link-button js-btn-view-all-text" 
					title='Full description'>
					<span>Full description</span>
					<?php echo $icon_id_left_arrow_3; ?>
				</button>
			</div>
			<div class="button-holder mobile-show mt-3" style="padding-left: auto; padding-right:auto;">
				<button data-readAll="Full description" 
					data-readLess="Less description" 
					class="link-button js-btn-view-all-text" 
					title='Full description'>
					<span>Full description</span>
					<?php echo $icon_id_left_arrow_3; ?>
				</button>
			</div>
		</div>
	</div>
</div>
<h2 style="color: #59c2c4 !important; text-align:center;">Timeline: </h2>
<div class="row">
	<div class="col-12">
		<div class="time-line-block__wrapper" id="js-show-mobile-time-line">
			<div class="time-line-block__wrapper--content mobile-content">
				<div class="time-line-block__wrapper--image timeline-stast" style="background-image: url('images/timeline-start.png');">
					<div class="first-image-text" style="border: 15px solid #FF8A65">
						<div class="inner-text">
							<span>
							<?php													
							echo $y_1;
							?>
							</span>
						</div>
					</div>
					<div class="second-image-text" style="color: #FF8A65;">
						<span>05</span>
					</div>
				</div>
				<div class="time-line-block__wrapper--mobile-year" style="background: #FF8A65">
					<div class="inner-text">
						<span>
						<?php													
						echo $y_1;
						?>
						</span>
					</div>
				</div>
				<div class="time-line-block__wrapper--text-content timeline-stast">
					<div class="time-line-block__wrapper--text">
						<h4 style="color: #FF8A65;">
						<?php
						echo $p_5_head;
						?>
						</h4>
						<p class="mobile-small-text js-show-text">
						<?php
						echo $p_5_text;
						?>
						</p>
						<div class="mobile-show js-remove-for-modal w-100 mb-4">
							<button data-readall="Read all" data-readless="Read less" class="mobile-timeline-read-more-button js-btn-view-all-text" title="Read all">
								<span>Read all</span>
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="time-line-block__wrapper--content mobile-content">
				<div class="time-line-block__wrapper--image timeline-right" style="background-image: url('images/timeline-right.png');">
					<div class="first-image-text" style="border: 15px solid #4DD0E1">
						<div class="inner-text">
							<span>
							<?php													
							echo $y_2;
							?>
							</span>
						</div>
					</div>
				<div class="second-image-text" style="color: #4DD0E1;">
					<span>04</span>
				</div>
			</div>
			<div class="time-line-block__wrapper--mobile-year" style="background: #4DD0E1">
				<div class="inner-text">
					<span>
					<?php													
					echo $y_2;
					?>
					</span>
				</div>
			</div>
			<div class="time-line-block__wrapper--text-content timeline-right">
				<div class="time-line-block__wrapper--text">
					<h4 style="color: #4DD0E1;">
					<?php
					echo $p_6_head;
					?>
					</h4>
					<p class="mobile-small-text js-show-text">
					<?php
					echo $p_6_text;
					?>
					</p>
					<div class="mobile-show js-remove-for-modal w-100 mb-4">
						<button data-readall="Read all" data-readless="Read less" class="mobile-timeline-read-more-button js-btn-view-all-text" title="Read all">
						<span>Read all</span>
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="time-line-block__wrapper--content mobile-content">
			<div class="time-line-block__wrapper--image timeline-left" style="background-image: url('images/timeline-left.png');">
				<div class="first-image-text" style="border: 15px solid #A3B11C">
					<div class="inner-text">
						<span>
						<?php													
						echo $y_3;
						?>
						</span>
</div>
</div>
<div class="second-image-text" style="color: #A3B11C;">
<span>03</span>
</div>
</div>
<div class="time-line-block__wrapper--mobile-year" style="background: #A3B11C">
<div class="inner-text">
<span>
<?php													
echo $y_3;
?>
</span>
</div>
</div>
<div class="time-line-block__wrapper--text-content timeline-left">
<div class="time-line-block__wrapper--text">
<h4 style="color: #A3B11C;">
<?php
echo $p_7_head;
?>
</h4>
<p class="mobile-small-text js-show-text">
<?php
echo $p_7_text;
?>
</p>
<div class="mobile-show js-remove-for-modal w-100">
<button data-readall="Read all" data-readless="Read less" class="mobile-timeline-read-more-button js-btn-view-all-text" title='Read all'>
<span>Read all</span>
</button>
</div>
</div>
</div>
</div>
<div class="time-line-block__wrapper--content mobile-content">
<div class="time-line-block__wrapper--image timeline-right" style="background-image: url('images/timeline-right.png');">
<div class="first-image-text" style="border: 15px solid #78909C">
<div class="inner-text">
<span>
<?php													
echo $y_4;
?>
</span>
</div>
</div>
<div class="second-image-text" style="color: #78909C">
<span>02</span>
</div>
</div>
<div class="time-line-block__wrapper--mobile-year" style="background: #78909C">
<div class="inner-text">
<span>
<?php													
echo $y_4;
?>
</span>
</div>
</div>
<div class="time-line-block__wrapper--text-content timeline-right">
<div class="time-line-block__wrapper--text">
<h4 style="color: #78909C;">
<?php
echo $p_8_head;
?>
</h4>
<p class="mobile-small-text js-show-text">
<?php
echo $p_8_text;
?>
</p>
<div class="mobile-show js-remove-for-modal w-100 mb-4">
<button data-readall="Read all" data-readless="Read less" class="mobile-timeline-read-more-button js-btn-view-all-text" title="Read all">
<span>Read all</span>
</button>
</div>
</div>
</div>
</div>									
<div class="time-line-block__wrapper--content mobile-content">
<div class="time-line-block__wrapper--image timeline-end" style="background-image: url('images/timeline-end.png');">
<div class="first-image-text" style="border: 15px solid #FFCA28">
<div class="inner-text">
<span>
<?php													
echo $y_5;
?>
</span>
</div>
</div>
<div class="second-image-text" style="color: #FFCA28;">
<span>03</span>
</div>
</div>
<div class="time-line-block__wrapper--mobile-year" style="background: #FFCA28">
<div class="inner-text">
<span>
<?php													
echo $y_5;
?>
</span>
</div>
</div>

<div class="time-line-block__wrapper--text-content timeline-end">
<div class="time-line-block__wrapper--text">
<h4 style="color: #FFCA28">
<?php
echo $p_9_head;
?>
</h4>
<p class="mobile-small-text js-show-text">
<?php
echo $p_9_text;
?>
</p>
<div class="mobile-show js-remove-for-modal w-100">
<button data-readall="Read all" data-readless="Read less" class="mobile-timeline-read-more-button js-btn-view-all-text" title="Read all">
<span>Read all</span>
</button>
</div>
</div>






</div>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-12 text-center">
<div class="mobile-show">
			<button class="link-button active"
				data-toggle="modal" 
				data-target="#mobile-time-line"
				id="js-mobile-time-line-btn"
				alt="Full history">
				<span>Full history</span>
				<?php echo $icon_id_left_arrow_3; ?>
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
require_once($real_root.'/pages/views/modal-mobile-campany-block.php');
require_once($real_root.'/pages/views/modal-mobile-products-block.php');
require_once($real_root.'/pages/views/modal-mobile-time-line.php');
?>

<script src="<?php echo SITEROOT; ?>app.js"></script>
</body>
</html>
