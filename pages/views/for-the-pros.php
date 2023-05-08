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
<style>
* {
	box-sizing: border-box;
}

input[type=text],
select,
textarea {
	width: 100%;
	padding: 12px;
	border: 1px solid #ccc;
	border-radius: 4px;
	resize: vertical;
}

label {
	padding: 12px 12px 12px 0;
	display: inline-block;
	width: 130px;
	border-radius: 4%;
	border: black;
	font-size: 20px;
}

input[type=submit] {
	background-color: #04AA6D;
	color: white;
	padding: 12px 20px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
	float: right;
}

input[type=submit]:hover {
	background-color: #45a049;
}

.container {
	border-radius: 5px;
	padding: 20px;
}

.col-25 {
	float: left;
	width: 25%;
	margin-top: 6px;
}

.col-75 {
	float: left;
	width: 75%;
	margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
	content: "";
	display: table;
	clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {

	.col-25,
	.col-75,
	input[type=submit] {
		width: 100%;
		margin-top: 0;
	}

	.thesubmit {
		margin-left: auto;
		margin-right: auto;
		width: 40%;
	}

	.topVerb {
		padding-left: 1px !important;
	}

}
</style>


</head>

<body class="clearfix idea-folder-popup">
<?php
require_once($real_root . '/pages/views/header.php');
?>
<section class="first-fixed-block covid-block clearfix consult-block pb-0">
<figure class="col-12 first-fixed-block__img-group imageheight" style="background-image: url('<?php echo SITEROOT; ?>images/forTheProsHero.jpeg');">
<figcaption class="first-fixed-block__img-group--text-block">
<div class="wrapper">
<h1 class="first-fixed-block__img-group--heading" style="font-family:'Futurica-BS-light', sans-serif; color: #ffff;">For the Professionals</h1>
</div>
</figcaption>
</figure>
</section>


<main class="main hero-block clearfix">
        <section class="breadcrumb-block pb-3 desktop-show">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-block__wrapper" aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo SITEROOT; ?>" title="main page">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#" onClick="go_back();" title="Accessory category">Company</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">For the Pro's</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



<div>
<p class="topVerb" style="font-family: 'Futurica-BS-light', sans-serif; text-align:center; padding-top: 20px; color:#18C4C7; font-size: 28px;">Would you like to become a Closets To Go dealer or partner? Submit contact information for details. </p>
</div>
<div class="container">
<form action="<?php echo SITEROOT; ?>for-the-pros-confirm.html" method="post">
<div class="row">
<div class="col-25 ftp">
<label for="businessName" style="text-decoration: underline; width: 200px !important; font-size: 18px !important; color: #5C667B;">Business Name:</label>
</div>
<div class="col-75">
<input type="text" id="businessName" name="businessName" placeholder="business name.." required aria-required="true">
</div>
</div>

<div class="row">
<div class="col-25 ftp">
<label for="name" style="text-decoration:underline; width: 200px !important; font-size: 18px !important; color: #5C667B;">Contact First Name:</label>
</div>
<div class="col-75">
<input type="text" id="first_name" name="first_name" placeholder="first name.." required aria-required="true">
</div>
</div>
<div class="row">
<div class="col-25 ftp">
<label for="Lname" style="text-decoration:underline; width: 200px !important; font-size: 18px !important; color: #5C667B;">Contact Last Name:</label>
</div>
<div class="col-75">
<input type="text" id="last_name" name="last_name" placeholder="last name.." required aria-required="true">
</div>
</div>
<div class="row">
<div class="col-25 ftp">
<label for="phone" style="text-decoration:underline; width: 200px !important; font-size: 18px !important; color: #5C667B;">Phone:</label>
</div>
<div class="col-75">
<input type="text" id="phone" name="phone" placeholder="phone.." required aria-required="true">
</div>
</div>
<div class="row">
<div class="col-25 ftp">
<label for="email" style="text-decoration:underline; width: 200px !important; font-size: 18px !important; color: #5C667B;">Email:</label>
</div>
<div class="col-75">
<input type="text" id="email" name="email" placeholder="email.." required aria-required="true">
</div>
</div>
<div class="row">
<div class="col-25 ftp">
<label for="address" style="text-decoration:underline; width: 200px !important; font-size: 18px !important; color: #5C667B;">Business Address:</label>
</div>
<div class="col-75">
<input type="text" id="address" name="address" placeholder="address..">
</div>
</div>

<div class="row">
<div class="col-25 ftp">
<label for="license" style="text-decoration:underline; width: 200px !important; font-size: 18px !important; color: #5C667B;">Contractors License #:</label>
</div>
<div class="col-75">
<input type="text" id="license" name="license" placeholder="license number..">
</div>
</div>
<div class="row">
<div class="col-25 ftp">
<label for="interested" style="text-decoration:underline; width: 200px !important; font-size: 18px !important; color: #5C667B;">Product or service interested in:</label>
</div>
<div class="col-75">
<textarea id="interested" name="interested" placeholder="interested in.." style="height:100px; border-width: 2px;"></textarea>
</div>
</div>
<div class="row">
<div class="col-25 ftp">
<label for="comment" style="text-decoration:underline; width: 200px !important; font-size: 18px !important; color: #5C667B;">Comments:</label>
</div>
<div class="col-75">
<textarea id="comment" name="comment" placeholder="comment.." style="height:150px; border-width: 2px;"></textarea>
</div>
</div>
<div class="row thesubmit">
<div class="col-75" style="padding-right: 8%;">
<input type="submit" value="Submit" style="background-color: #ed9c00;">
</div>
</div>
</form>

<div>
<p style="font-size: 15px; text-align: center; margin-left: 1px; margin-right: 1px; margin-bottom: 5%; margin-top: 2%; font-family: Montserrat; color: #5c667B;">
Partner with Closets To Go from anywhere in the nation in providing your clients the highest quality products and services in the custom closet industry. We’ll be in touch with the next steps of the qualification process.
</p>
</div>
</div>
</main>


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