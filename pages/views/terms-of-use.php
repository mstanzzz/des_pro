<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>Closets To Go Privacy Policy</title>
<meta name="description" content="about-us">
<link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">
</head>
<body>
<?php
require_once($real_root."/includes/header.php"); 	
?>

<section class="home-mobile-buttons-block covid-block">
	<div class="wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="home-mobile-buttons-block__wrapper links-wrapper">
					<a href="about-us.html" title="<?php echo SITEROOT; ?>about-us.html" class="home-mobile-buttons-block__link active">About us</a>
					<a href="services.html" title="<?php echo SITEROOT; ?>services.html" class="home-mobile-buttons-block__link">Services</a>
					<a href="support.html" title="<?php echo SITEROOT; ?>support.html" class="home-mobile-buttons-block__link">Support</a>
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
				<li class="breadcrumb-item"><a href="index.html" title="Home">Home</a></li>
				<li class="breadcrumb-item"><a href="#" title="Company">Company</a></li>
				<li class="breadcrumb-item active" aria-current="page" title="About us">About us</li>
			</ul>
		</div>
	</div>
</div>
</div>
</div>
</section>
<section class="two-elements-block about-us">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12 col-md-12">
<h1 class="two-elements-block__wrapper--heading">
<?php echo $heading; ?>			
</h1>

		<div class="simple-block__text desktop-show">
<?php echo $content; ?>			


		</div>
	</div>
</div>
</div>
</div>
</section>

<?php
require_once($real_root.'/includes/footer.php');
?>
<script src="<?php echo SITEROOT; ?>app.js"></script>
</body>
</html>
