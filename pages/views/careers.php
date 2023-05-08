<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>ClosetsToGo | <?php echo $meta_title; ?></title>
	<meta name="description" content="<?php echo $meta_description; ?>">
	<link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body class="clearfix idea-folder-popup">
<?php
require_once($real_root . '/pages/views/header.php');
?>

<main class="main hero-block clearfix">
	<section class="breadcrumb-block about-us mb-5 desktop-show">
		<div class="wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="breadcrumb-block__wrapper" aria-label="breadcrumb">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html" title="Home">Home</a></li>
								<li class="breadcrumb-item"><a href="<?php echo SITEROOT;?>about-us.html" title="Company">Company</a></li>
								<li class="breadcrumb-item active" aria-current="page">Careers</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<h2 class="titleSections">Careers at Closets To Go</h2>
	<div class="card mb-3 ourTeamVerbiage">
		<div class="row g-0" style="border:1px solid rgba(0, 0, 0, 0.125); border-left: 0% solid; border-right: 0% solid;">
			<div class="col-md-4">
				<div style="padding-top: 1px; padding-bottom:8px;">
					<img src="<?php echo SITEROOT; ?>images/careerpageimage.jpg" class="img-fluid rounded-start" alt="careerpageimage" style="border: 4px solid #384765">
				</div>
			</div>
			<div class="col-md-8">
				<div class="card-body">
					<h2 class="simple-block__heading--heading about-us-heading-24 mb-0" style="padding-top: 4%; font-family: 'Futurica-BS-light', sans-serif;">
						Our Team
					</h2>
					<div class="simple-block__text" style="font-family: Montserrat; font-size: 17px; color: #5A5A5A; padding-top: 1%;">
						At Closets To Go, we are different by design. Regardless of the position, our mentorship program ensures each client
						receives undivided expert attention. Each new incoming team member is mentored by a tenured team member and then that
						“newest” member, once seasoned, then pays it forward and repeats this onboarding process. This ensures , each team member
						is getting expert level training, no matter what position you're in!
					</div>
				</div>
			</div>
		</div>
	</div>

	<h2 class="titleSections1">Departments</h2>

	<div class="row row-cols-1 row-cols-md-3 g-4 cardsDepartment">
		<div class="col">
			<div class="card h-100 cardsIndiv">
				<img class="cardIndivImg" src="<?php echo SITEROOT; ?>images/CareersPageAdminSupport.jpeg" class="card-img-top" alt="admin employee picture">
				<div class="card-body">
					<h5 class="card-title cardIndivTitle">Administrative:</h5>
					<p class="card-text cardIndivText">Support to Management roles - various departments</p>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card h-100 cardsIndiv">
				<img class="cardIndivImg" src="<?php echo SITEROOT; ?>images/CareersPageAdminSupportServiceDirector.jpeg" class="card-img-top" alt="customer support employee picture">
				<div class="card-body">
					<h5 class="card-title cardIndivTitle">Customer Support:</h5>
					<p class="card-text cardIndivText">
						Support to Management roles</p>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card h-100 cardsIndiv">
				<img class="cardIndivImg" src="<?php echo SITEROOT; ?>images/ladysmiling.jpeg" class="card-img-top" alt="designer employee picture">
				<div class="card-body">
					<h5 class="card-title cardIndivTitle">Design:</h5>
					<p class="card-text cardIndivText">Inside or Outside Sales, Professional Services</p>

				</div>
			</div>
		</div>
	</div>


	<div class="row row-cols-1 row-cols-md-3 g-4 cardsDepartment">
		<div class="col">
			<div class="card h-100 cardsIndiv">
				<img class="cardIndivImg" src="<?php echo SITEROOT; ?>images/CareersPageManufacturing.jpeg" class="card-img-top" alt="manufacturing employee picture">
				<div class="card-body">
					<h5 class="card-title cardIndivTitle">Manufacturing:</h5>
					<p class="card-text cardIndivText">Machine Operators to Management roles</p>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card h-100 cardsIndiv">
				<img class="cardIndivImg" src="<?php echo SITEROOT; ?>images/TechnologyCareer.jpg" class="card-img-top" alt="technology employee picture">
				<div class="card-body">
					<h5 class="card-title cardIndivTitle">Technology:</h5>
					<p class="card-text cardIndivText">IT and Web Support - various departments</p>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card h-100 cardsIndiv">
				<img class="cardIndivImg" src="<?php echo SITEROOT; ?>images/ProcessPagePackaging.jpeg" class="card-img-top" alt="warehouse employee picture">
				<div class="card-body">
					<h5 class="card-title cardIndivTitle">Warehouse:</h5>
					<p class="card-text cardIndivText">Assembly, Fulfillment, Procurement, Packaging/Shipping</p>
				</div>
			</div>
		</div>
	</div>

	<div style="padding-bottom: 3%;">
		<div class="card mb-3 readySection">
			<div class="row g-0">
				<div class="col-md-8" style="margin-left: auto; margin-right: auto;">
					<div class="map-contact-block__wrapper">
						<p style="font-size: 45px; line-height: 1.37; letter-spacing: 2.4px; font-family: 'Futurica-BS-light', sans-serif; color:#18C4C7;">
							<img class="readyToJoinImg" src="<?php echo SITEROOT; ?>images/careerCTGLogo.svg" class="img-fluid rounded-start" style="padding-right:10px;" alt="careerpageimage">Apply Now:
						</p>
						
<form action="<?php echo SITEROOT; ?>careers-confirm.html" method="post">
<fieldset>
<input type="text" name="first_name" class="map-contact-block__wrapper--input" placeholder="First Name">
<input type="text" name="last_name" class="map-contact-block__wrapper--input" placeholder="Last Name">
<input type="text" name="email" class="map-contact-block__wrapper--input" placeholder="Email">
<input type="text" name="phone" class="map-contact-block__wrapper--input" placeholder="Phone">
<select name="department" id="department" class="map-contact-block__wrapper--input" 
style=" max-height: 100px !important;">
<option selected style="font-family: 'SegoeUI-SemiBold', sans-serif;">Select Department</option>
<option value="Administrative">Administrative</option>
<option value="Design">Design</option>
<option value="Customer Support">Customer Support</option>
<option value="Manufacturing">Manufacturing</option>
<option value="Warehouse">Warehouse</option>
<option value="Technology">Technology</option>
</select>
<input type="text" name="position" class="map-contact-block__wrapper--input" placeholder="Applying to following Position..">
<table class="home-consult-form__image-area" style="padding-bottom: 2%;">
<fieldset>
<thead>
<tr>
<th class="image-name"></th>
<th class="image-name bigger-col">Upload Resume and supporting documents as images or PDFs</th>
<th class="image-size"></th>
<th class="success-or-error"></th>
</tr>
</thead>
<tbody class="image-preview">
<tr>
<td colspan="4">
<iframe width="100%" height="330" src="<?php echo SITEROOT; ?>upload-your-files" title="Upload"></iframe>
</td>
</tr>
</tbody>
<tfoot>
</tfoot>
</fieldset>
</table>

<input type="submit" name="send" value="Submit Application" class="map-contact-block__wrapper--submit">
</fieldset>
</form>



						
						
						
					</div>
				</div>
			</div>
		</div>
	</div>


	<style>
		.titleSections {
			padding-top: 2%;
			text-align: center;
			color: #384765;
			font-size: 45px;
			padding-bottom: 1%;
			font-family: 'Futurica-BS-light', sans-serif;
			
		}

		.titleSections1 {
			padding-top: 2%;
			text-align: center;
			color: #384765;
			font-size: 45px;
			padding-bottom: 1%;
			font-family: 'Futurica-BS-light', sans-serif;
		}

		.ourTeamVerbiage {
			max-width: 1100px;
			margin-left: auto;
			margin-right: auto;
			border-radius: 3%;
			border-color: white;
			padding-bottom: 2%;
			border: none !important;
		}

		.cardsDepartment {
			padding-left: 20%;
			padding-right: 20%;
			padding-bottom: 3%;
		}

		.cardsIndiv {
			border-radius: 2%;
		}

		.cardsIndivImg {
			margin-left: auto;
			margin-right: auto;
		}

		.cardIndivTitle {
			color: #18C4C7;
			text-align: center;
			font-family: 'Futurica-BS-light', sans-serif;
			font-size: 25px;
		}

		.cardIndivText {
			color: #5A5A5A;
			font-family: 'Montserrat', sans-serif;
			text-align: center;

		}

		.readySection {
			max-width: 1250px;
			margin-left: auto;
			margin-right: auto;
			border-color: white;
		}

		.readyToJoin {
			padding-top: 2% !important;
			padding-left: 6% !important;
		}

		.readyToJoinTitle {
			color: #ed9c00;
			font-size: 40px;
			padding-left: 10% !important;
			padding-top: auto !important;
		}

		.readyToJoinDiv {
			padding-left: 23%;
			padding-bottom: 2%;
		}

		.readyToJoinImg {
			height: 100px;
			width: 150px;
		}

		.readySectionsSteps {
			padding-top: 5%;
		}

		.readySectionStepsTitle {
			color: #18C4C7;
			padding-left: 1% !important;
		}

		.readySectionBullets {
			color: #5A5A5A;
			font-family: 'Futura-Book', sans-serif;
			padding-left: 1% !important;
		}

		@media (max-width:992px) {
			.cardsDepartment {
				padding-left: 5%;
				padding-right: 5%;
				padding-bottom: 5%;
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
	?>

	<script src="<?php echo SITEROOT; ?>app.js"></script>
</main>
</body>

</html>