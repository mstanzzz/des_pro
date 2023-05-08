<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>ClosetsToGo</title>
    <meta name="description" content="home description">
    <link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">

</head>
<body>
<?php
require_once($real_root.'/pages/views/header.php');
?>

<main class="main clearfix">

<section>
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<br /><br />
<br /><br />
<center>
<button class="btn btn-info btn-lg" onclick="history.back()">Back</button>
<br /><br />

<img src="<?php echo SITEROOT; ?>images/comingSoonImageGif.gif" alt="" >

</center>		
<br /><br />
<br /><br />
<br /><br />
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
require_once($real_root.'/pages/views/modal-new-house.php');
require_once($real_root.'/pages/views/modal-manage-saved-houses.php');
require_once($real_root.'/pages/views/modal-delete.php');
require_once($real_root.'/pages/views/modal-alert-confirmation.php');

?>

<script src="<?php echo SITEROOT; ?>app.js"></script>
</body>
</html>
