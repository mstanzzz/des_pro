<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>ClosetsToGo</title>
    <meta name="description" content="home description">
    <link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/jumbotron/">
    <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="clearfix idea-folder-popup">
<?php
require_once($real_root . '/pages/views/header.php');
?>
<main class="main clearfix">
<div class="container py-4">
<div class="p-5 mb-4 bg-light rounded-3">
<div class="container-fluid py-5">
<h1 class="display-5 fw-bold" style="font-family: 'Futurica-BS-light', sans-serif !important;">
<?php echo $p_1_head; ?>

</h1>
<p class="col-md-8 fs-4">
<?php echo $p_1_text; ?>

</p>
<button class="btn btn-primary btn-lg" type="button">Read More</button>
</div>
</div>
<div class="row align-items-md-stretch">
<div class="col-md-6">
<div class="h-100 p-5 text-bg-dark rounded-3">
<h2 style="font-family: 'Futurica-BS-light', sans-serif !important;">
<?php echo $p_2_head; ?>

</h2>
<p>
<?php echo $p_2_text; ?>

</p>
<button class="btn btn-outline-light" type="button">Example button</button>
</div>
</div>
<div class="col-md-6">
<div class="h-100 p-5 bg-light border rounded-3">
<h2 style="font-family: 'Futurica-BS-light', sans-serif !important;">
<?php echo $p_3_head; ?>

</h2>
<p>
<?php echo $p_3_text; ?>
</p>
<button class="btn btn-outline-secondary" type="button">Example button</button>
</div>
</div>
</div>
</div>
</main>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
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

</body>

</html>