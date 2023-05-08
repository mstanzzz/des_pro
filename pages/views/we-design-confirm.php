<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>ClosetsToGo</title>
    <meta name="description" content="home description">
    <link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">

<style>
    .SurveyMessage{
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-content: center;
        width: 100%;
        margin-top: 10%;
        text-align: center;
        background-color: white;
        z-index: 2;
        font-size: medium; 
        font-family: SegoeUI-SemiBold, sans-serif;
    }
    .surveycompletion{
        color: #384765;
        font-family: "segoeUI", sans-serif;
        letter-spacing: 2.6px;
        padding-bottom: 1% !important;
    }
    @media screen and (max-width: 1300px){
        .SurveyMessage{
            margin-top: 140px;
            
        }
    }

</style>

</head>
<body>
<?php
require_once($real_root.'/pages/views/header.php');
?>




<div class="SurveyMessage">
<h1 class="surveycompletion">Request Submitted<br></h1>
<div class="centerCheckmark" style="margin-left: auto !important; margin-right: auto !important">
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets5.lottiefiles.com/packages/lf20_kxlgmbkz.json"  
background="transparent"  speed="1"  style="width: 120px; height: 120px;"    autoplay></lottie-player>
</div>
<p style="color:#02ADB0 !important; 
font-size:20px; font-family: SegoeUI-SemiBold, sans-serif; 
padding-bottom: 3% !important;" >
<?php
echo $msg;
?>
</p>	

<a class="btn btn-info" href="<?php echo SITEROOT."we-design-survey.html#t"; ?>">Submit Another</a>

</div>

<?php
    require_once($real_root.'/pages/views/mobile-show-footer-buttons.php');
    require_once($real_root.'/pages/views/footer.php');
?>
</body>