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

<body class="clearfix idea-folder-popup">
    <?php
    require_once($real_root . '/pages/views/header.php');
    ?>

    <section class="first-fixed-block covid-block clearfix consult-block pb-0">
        <figure class="col-12 first-fixed-block__img-group imageheight" style="background-image: url('<?php echo SITEROOT; ?>images/policyherob.jpg');">
            <figcaption class="first-fixed-block__img-group--text-block">
                <div class="wrapper">
                    <h1 class="first-fixed-block__img-group--heading policyTitle">Our Policies</h1>
                    <p class="first-fixed-block__img-group--text policyContent">
                        Important to note that policies differ between organizations. The content of our policies relate to on our mission,
                        transparency and objectives at Closets to Go.
                </div>
            </figcaption>
        </figure>
    </section>

    <main class="main hero-block clearfix">
        <div class="contentPolicy">
            <div class="container text-center">
                <div class="row g-2">

        <section class="breadcrumb-block pb-3 desktop-show">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-block__wrapper" aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo SITEROOT; ?>" title="main page">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#" onClick="go_back();" title="Accessory category">Company</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Policies</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

                    <div class="container" style="margin-bottom: 2%;">
                        <div class="p-3">
                            <p class="ctgPolicyTitle">Shipping Policy</p><br>
                            <p class="ctgPolicyVerbiage">
                                All orders are delivered by 3rd party freight carriers, therefore: Closets To Go does not guarantee, at any time a certain delivery date or time frame for
                                delivery for any product or order. Any date and/or time frame listed in a contract or on our website are estimates only. For orders with deadlines please order well in advance.
                                <br><br>
                                Closets To Go is not responsible for lost, misplaced, delayed or damaged product orders due to 3rd party shipping errors, acts of nature or labor strikes.<span id="dots">...</span><span id="more"><br><br>

                                    When an order is received, immediately and carefully open and inspect for any potential damage occurred during transit. If damage has occurred, please note in detail on the bill of lading and collect photo evidence. Contact Closets To Go right away to report such damage. Do not refuse the product as it does not excuse the customer from payment. No refunds will be given, however, we will do what we can to help resolve the issue in the most timely manner.
                                </span>
                            </p>
                            <button onclick="myFunction()" id="myBtn" style="border-radius: 4%;">Read more</button>
                            <hr>
                        </div>
                    </div>




                    <div class="container" style="margin-bottom: 2%;">
                        <div class="p-3">
                            <p class="ctgPolicyTitle">Warranty Policy</p><br>
                            <p class="ctgPolicyVerbiage">


                                The closet organizer system you have purchased, in normal use, is warranted to be free of defects in material and workmanship for the purchaser&#39;s lifetime. It is guaranteed only to the original purchaser and is not transferable to subsequent owners or property inhabitants. The warranty is not in effect if the organizer system is moved to another location.<span id="dots2">...</span><span id="more2"><br><br>
                                    Warranty is only valid if the installer strictly follows our closet organizer installation instructions provided along with any personalized notes included on the design overview and wall elevation views per each room. This warranty does not apply to any closet organizer part that has been subject to accident, misuse, negligence, improper application, reconfiguration, modification or improper maintenance.
                                    Any warranty is void if the closet system is improperly installed by you or other 3rd party installers. In rare cases where an order arrives damaged or with missing part(s), we will not be responsible for re-scheduling labor fees incurred by 3rd party hired hands or contractors. It is in your best interest to confirm receipt of your order before hiring help. We do not guarantee any wood products against
                                    warping so be sure to store materials in a covered and dry location. No payment will be made for indirect, incidental or consequential damages of any kind.<br><br>
                                    This limited lifetime warranty gives you specific legal rights and you may also have other rights, which vary, from state to state. Some states do not allow the exclusion or limitation of incidental or consequential damages.<br><br>
                                    To obtain warranty replacement, please return the defective part(s) or provide a detailed photo(s) indicating the issue along with proof of purchase to our Closets To Go store located at 9540 SW Tigard Street in Tigard, OR 97223 or email us at services@closetstogo.com. If inspection by Closets To Go determines the part(s) to have a defect in material or workmanship, Closets To Go will repair (or at our option, replace) and issue the part(s) without charge. The amount of liability is limited to the purchase price of the organizer system, excluding taxes, delivery and installation charges.
                                    <br><br>
                            </p>
                            <button onclick="myFunction2()" id="myBtn2" style="border-radius: 4%;">Read more</button>
                            <hr>
                        </div>
                    </div>


                    <div class="container" style="margin-bottom: 2%;">
                        <div class="p-3">
                            <p class="ctgPolicyTitle">Sales are Final</p><br>
                            <p class="ctgPolicyVerbiage">As all products manufactured by Closets To Go are custom made, we are not able to accept cancellations, returns nor give refunds on any CUSTOM<span id="dots1">...</span><span id="more1"> orders after the order has been placed. Thus, all sales are final.</span></p>

                            <button onclick="myFunction1()" id="myBtn1" style="border-radius: 4%;">Read more</button>
                            <hr>
                        </div>
                    </div>



                    <div class="container" style="margin-bottom: 2%;">
                        <div class="p-3">
                            <p class="ctgPolicyTitle">Cancellation Policy</p><br>
                            <p style="text-align: center; color: #384765; font-size: 18px;">NO Cancellations / No Returns / No Refunds Policy on CUSTOM Closet Orders<br>
                            <p class="ctgPolicyVerbiage"> As all closet organizer systems manufactured by Closets To Go are custom made, we are not able to accept cancellations, returns nor
                                give refunds after the order has been placed. <span id="dots9">...</span><span id="more9">Thus, all sales are final.</p>
                            </span>
                            </p>

                            <button onclick="myFunction9()" id="myBtn9" style="border-radius: 4%;">Read more</button>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <style>
        #more {
            display: none;
        }

        #more1 {
            display: none;
        }

        #more2 {
            display: none;
        }

        #more3 {
            display: none;
        }

        #more9 {
            display: none;
        }


        .contentPolicy {
            margin-top: 575px !important;
        }

        .policyTitle .policyContent{
            font-weight: 500 !important; 
            background-color:rgb(128, 128, 128, 0.6) !important;

        }
        .ctgPolicyTitle{
            color: #18C4C7 !important; 
            letter-spacing: 1.5px !important; 
            font-size: 25px !important; 
            font-weight: 500 !important;
        }

        .ctgPolicyVerbiage{
            text-align: left !important; 
            color: #384765 !important; 
            font-size: 18px !important;

        }

        @media (max-width:992px) {

            .contentPolicy{
                margin-top: 60px !important;
            }
            .imageheight{
                height: auto !important;
            }
            
        }
    </style>

    <script>
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }

        function myFunction1() {
            var dots1 = document.getElementById("dots1");
            var moreText1 = document.getElementById("more1");
            var btnText1 = document.getElementById("myBtn1");

            if (dots1.style.display === "none") {
                dots1.style.display = "inline";
                btnText1.innerHTML = "Read more";
                moreText1.style.display = "none";
            } else {
                dots1.style.display = "none";
                btnText1.innerHTML = "Read less";
                moreText1.style.display = "inline";
            }
        }

        function myFunction2() {
            var dots2 = document.getElementById("dots2");
            var moreText2 = document.getElementById("more2");
            var btnText2 = document.getElementById("myBtn2");

            if (dots2.style.display === "none") {
                dots2.style.display = "inline";
                btnText2.innerHTML = "Read more";
                moreText2.style.display = "none";
            } else {
                dots2.style.display = "none";
                btnText2.innerHTML = "Read less";
                moreText2.style.display = "inline";
            }
        }

        function myFunction3() {
            var dots3 = document.getElementById("dots3");
            var moreText3 = document.getElementById("more3");
            var btnText3 = document.getElementById("myBtn3");

            if (dots3.style.display === "none") {
                dots3.style.display = "inline";
                btnText3.innerHTML = "Read more";
                moreText3.style.display = "none";
            } else {
                dots3.style.display = "none";
                btnText3.innerHTML = "Read less";
                moreText3.style.display = "inline";
            }
        }


        function myFunction9() {
            var dots9 = document.getElementById("dots9");
            var moreText9 = document.getElementById("more9");
            var btnText9 = document.getElementById("myBtn9");

            if (dots9.style.display === "none") {
                dots9.style.display = "inline";
                btnText9.innerHTML = "Read more";
                moreText9.style.display = "none";
            } else {
                dots9.style.display = "none";
                btnText9.innerHTML = "Read less";
                moreText9.style.display = "inline";
            }
        }
    </script>



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