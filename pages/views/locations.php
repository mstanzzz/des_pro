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
	require_once($real_root . '/pages/views/header.php');
	?>


	<main class="main clearfix">
		<link type="text/css" href="<?php echo SITEROOT; ?>js/jqvmap/jqvmap.css" />
		<script type="text/javascript" src="<?php echo SITEROOT; ?>js/jqvmap/jquery.vmap.packed.js"></script>
<section class="breadcrumb-block about-us desktop-show">
	<div class="wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="breadcrumb-block__wrapper" aria-label="breadcrumb">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo SITEROOT; ?>/" title="Home">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page" title="About us">Locations</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h2 style="padding-top: 2%; font-family: 'Futurica-BS-light', sans-serif; color: #59c2c4;">CLOSETS TO GO SHOWROOM LOCATION</h2>
				<p class="lead" style="color: #384765;">Get Directions to our 4,000 sf showroom/headquarters.</p>
				<input class="ctgAddress" value="Closets To Go, 9540 SW Tigard St, Tigard, OR 97223" id="ctgAddress" disabled>
				<img src="<?php echo SITEROOT; ?>images/copyAddress.png" onclick="myCopyFunction()" style="height: 18px; width: 18px;"data-toggle="tooltip" data-placement="bottom" title="Copied"></img>
				<p style="">(888) 312-7424</p>
			</div>
		</div>

		<script>
			function myCopyFunction() {
				// Get the text field
				var copyText = document.getElementById("ctgAddress");

				// Select the text field
				copyText.select();
				copyText.setSelectionRange(0, 99999); // For mobile devices

				// Copy the text inside the text field
				navigator.clipboard.writeText(copyText.value);

				tooltip.innerHTML = "Copied";
			}


		</script>



		<div class="container">
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
			$block .= "<div style='color:#59c2c4;'>Starting Address:</div>";
			$block .= "<input  class='CL_Input' type='text' name='saddr' style='width:250px;'/>";
			$block .= "<input type='hidden' name='daddr' value='" . $city . ", " . $state . " " . $zip . "' />";
			$block .= "<input class='CL_Button' type='submit' name='submit' value='Get Directions'>";
			$block .= "</form><br>";
			$block .= "<div class='span9'>" . $map . "</div>";

			echo $block;

			?>



		</div>
		<div class="container text-center" style="padding-bottom: 4%; padding-top: 1%;">
			<div class="row">
				<div class="col" style="text-align: left; color:#59c2c4; font-family: 'Futurica-BS-light', sans-serif; font-size: 17px;">Sunday:<br>CLOSED
					<hr>
				</div>
				<div class="col" style="text-align: left; color:#59c2c4; font-family: 'Futurica-BS-light', sans-serif; font-size: 17px;">Monday:<br>9am - 5pm
					<hr>
				</div>
				<div class="col" style="text-align: left; color:#59c2c4; font-family: 'Futurica-BS-light', sans-serif; font-size: 17px;">Tuesday:<br>9am - 5pm
					<hr>
				</div>
				<div class="col" style="text-align: left; color:#59c2c4; font-family: 'Futurica-BS-light', sans-serif; font-size: 17px;">Wednesday:<br>9am - 5pm
					<hr>
				</div>
				<div class="col" style="text-align: left; color:#59c2c4; font-family: 'Futurica-BS-light', sans-serif; font-size: 17px;">Thursday:<br>9am - 5pm
					<hr>
				</div>
				<div class="col" style="text-align: left; color:#59c2c4; font-family: 'Futurica-BS-light', sans-serif; font-size: 17px;">Friday:<br>9am - 5pm
					<hr>
				</div>
				<div class="col" style="text-align: left; color:#59c2c4; font-family: 'Futurica-BS-light', sans-serif; font-size: 17px;">Saturday:<br>10am - 5pm
					<hr>
				</div>
			</div>
		</div>

		<style>
			.CL_Button {
				background-color: #59c2c4;
				color: #fff;
				border: #59c2c4;
				height: 35px;
				border-radius: 4px;

			}

			.ctgAddress{
				width: 33%; 
				border:none; 
				background-color: #ffff;

			}

			@media (max-width:992px) {
				.ctgAddress{
					width: 90%;
					border:none; 
					background-color: #ffff;
				}
				
				
			}

			.CL_Input {
				height: 35px;
				border: none;
				border-bottom: 1px solid #384765;
			}

			.tooltip-text {
				visibility: hidden;
				position: absolute;
				z-index: 1;
				width: 100px;
				color: white;
				font-size: 12px;
				background-color: #192733;
				border-radius: 10px;
				padding: 10px 15px 10px 15px;
			}

			.hover-text:hover .tooltip-text {
				visibility: visible;
			}


			#right {
				top: -8px;
				left: 120%;
			}

			.hover-text {
				position: relative;
				display: inline-block;
				margin: 40px;
				font-family: Avenir;
				text-align: center;
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

		<script src="<?php echo SITEROOT; ?>app.js"></script>
</body>

</html>