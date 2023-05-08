<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>ClosetsToGo</title>
<meta name="description" content="account"><link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet"></head>
<body class="idea-folder-popup">

<?php
require_once($real_root.'/pages/views/header.php');
?>

<main class="main clearfix">

<section class="breadcrumb-block pb-3 desktop-show">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12">
		<div class="breadcrumb-block__wrapper" aria-label="breadcrumb">
			<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo SITEROOT; ?>" title="Home">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Purchase Policy</li>
			</ul>
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

	<script src="<?php echo SITEROOT; ?>app.js"></script></body>
</html>



