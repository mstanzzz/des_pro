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
<body class="product-detail specification-page video-library-page idea-folder-popup">
<?php
$nav_el = "rooms";
require_once($real_root.'/pages/views/header.php');
$img=SITEROOT."saascustuploads/1/cms/".$hero_file_name;
?>
<section class="first-fixed-block covid-block clearfix">
<figure class="first-fixed-block__img-group" style="background-image: url('<?php echo $img; ?>');">
<figcaption class="first-fixed-block__img-group--text-block">
<div class="wrapper">
<h1 class="first-fixed-block__img-group--heading text-center">
<?php echo $top_1; ?>
</h1>
<div style="color:white;">
<center>
<?php echo $top_2; ?>
</center>
</div>

</div>
</figcaption>
</figure>
</section>

<main class="main hero-block clearfix">

<section class="breadcrumb-block desktop-show" style="margin-bottom:1px !important; padding-bottom:1px !important;">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12">
		<div class="breadcrumb-block__wrapper" aria-label="breadcrumb">
			<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo SITEROOT; ?>" title="Home">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page" title="Room Gallery">Rooms</li>
			</ul>			
		</div>
	</div>
</div>
</div>
</div>
</section>

<section class="simple-block">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12">
		<div class="simple-block__border no-border p-0">
			<div class="row">
				<div class="col-12">
					<div class="simple-block__heading">
						<h2 class="simple-block__heading--heading text-center">
						<?php
						echo $p_1_head;
						?>
						</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="simple-block__text">
						<p class="text-center" style="color:#808080; overflow: visible;">						
						<?php
						echo $p_1_text;
						?>
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

<section class="simple-block">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12">
		<div class="simple-block__border no-border p-0">
			<!--
			<div class="row">
				<div class="col-12">
					<div class="simple-block__heading">
<h2 class="simple-block__heading--heading text-center">Rooms</h2>
					</div>
				</div>
			</div>
			-->	
			<div class="row">
			<?php
			if(!isset($top_cat_array))$top_cat_array=array();				
				foreach($top_cat_array as $val){
					$icon = $val['svg_code'];
					$n = $nav->getUrlText($val['name']);
					$url_str = SITEROOT."showroom-category-".$val['profile_cat_id']."/".$n.".html";
			?>
				<div class="clo-12 col-lg-2">
					<a style="text-decoration:none; color:black;" href="<?php echo $url_str; ?>" title="<?php echo $name; ?>" class="specification-link">
					<span class="specification-link__img">
					<?php echo $icon; ?>
					</span>
					<center><?php echo stripSlashes($val['name']); ?></center>
					</a>
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
</section>

</main>


<?php
//require_once($real_root.'/pages/views/virtual-assistant.php');
require_once($real_root.'/pages/views/mobile-show-footer-buttons.php');
require_once($real_root.'/pages/views/footer.php');
require_once($real_root.'/pages/views/modal-perfect-fit-guarantee.php');
require_once($real_root.'/pages/views/modal-free-shipping.php');
require_once($real_root.'/pages/views/modal-save-to-idea-folder.php');
require_once($real_root.'/pages/views/modal-save-to-specs-sheet.php');
?>



<script src="<?php echo SITEROOT; ?>app.js"></script></body>
</html>
