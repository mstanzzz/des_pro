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



    <main class="main clearfix">

        <section class="breadcrumb-block about-us desktop-show">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-block__wrapper" aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo SITEROOT; ?>/" title="Home">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page" title="About us">Process</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="container-fluid">
            <h1 class="title__compare title__compare__desktop" style="padding-top: 1% !important; padding-bottom: 0%;">Process: Design, Manufacturing and DIY</h1>
        </div>
        <hr style="width: 60% !important; padding-bottom:1% !important;" id="design" />

        <div class="container-fluid">
            <h1 class="title__compare title__compare__desktop" style="padding-top: 1% !important; padding-bottom: 0%; color: #18C4C7 !important;">Phase 1</h1>
            <div class="tab-content__text-wrap--content js-hidden-text small-text">
                <p style="text-align:center; padding-bottom: 1%;">
                    DESIGN PROCESS DETAILS
                </p>
            </div>
        </div>

        <section class="company-block about-us" id="mobile-full-view">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6 col-lg-5 company-block__images" style="height: 275px !important;">
                            <img src="<?php echo SITEROOT; ?>images/ProcessPageWeDesign.jpeg" alt="ProcessPageWeDesign" class="js-get-image">
                        </div>

                        <div class="col-12 col-lg-5">
                            <div class="you-design-block__wrapper">
                                <h3 class="you-design-block__wrapper--heading">
                                    <div class="">
                                        <a href="<?php echo SITEROOT; ?>request-design.html" title="We design" class="we-design" style="font-size: 12px; font-family:'OpenSans-Regular', sans-serif; letter-spacing: normal; width: 110px; text-align: center; line-height: 1.875;">WE DESIGN</a>
                                    </div>
                                </h3>
                                <p style="font-size: 15px; font-family:'OpenSans-Regular', sans-serif; line-height: 1.875;">
                                    Our Online Design Request form is a step by step questionnaire that will guide you through how to take measurements and gather all pertinent data required to start your design. If any other information is needed our Design Team will reach out to you. At the end of the form you can upload images of your space and/or competitive plans and bids.

                                <p class="you-design-block__wrapper--text small-text js-show-text" style="padding-top: 0% !important; font-size: 15px; ">
                                    Once our Design Team receives this pertinent information, a design will be created and emailed to you typically within a few days If you selected the expedited service request all efforts will be made to draft an original design within a 24 hour period.
                                    Either way, please check your email and spam folder. We also follow up with a phone call to make sure you have received your design.<br>
                                    To meet your needs in a timely manner, we request that you look over the design and promptly get back to us with any questions, comments or revisions. We will revise the design until it meets all engineering parameters and meets your expectations!
                                    <br><br>
                                    After a design has been finalized and you are ready to proceed with the purchase, a final measurement is required to verify all dimensions. We have a motto at Closets To Go that has served everyone well: “Measure Twice, Cut Once”! Upon receiving the confirmed dimensions and making any final adjustments to the design, a purchase agreement will be sent to you for e-signature. Once complete, payment will be collected and the design will begin processing.
                                </p>
                                <div class="button-holder desktop-show" style="padding-top: 0% !important;">
                                    <button data-readAll="Full description" data-readLess="Less description" class="link-button js-btn-view-all-text" title='Full description'>
                                        <span>Full description</span>
                                        <?php echo $icon_id_left_arrow_3; ?>
                                    </button>
                                </div>
                                <div class="button-holder mobile-show mt-3" style="padding-top: 0%; padding-bottom: 6% !important;">
                                    <button data-readAll="Full description" data-readLess="Less description" class="link-button js-btn-view-all-text" title='Full description'>
                                        <span>Full description</span>
                                        <?php echo $icon_id_left_arrow_3; ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="you-design-block we-desing-block about-us" id="mobile-full-view">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-12 col-lg-5">
                            <div class="you-design-block__wrapper">
                                <h3 class="you-design-block__wrapper--heading">
                                    <div class="">
                                        <a href="#" title="We design" class="you-design" style="font-size: 12px; font-family:'OpenSans-Regular', sans-serif; letter-spacing: normal; width: 210px; text-align: center; line-height: 1.875;">YOU DESIGN - COMING SOON</a>
                                    </div>
                                </h3>
                                <p style="font-size: 15px; font-family:'OpenSans-Regular', sans-serif; line-height: 1.875;">
                                    Our easy-to-use yet comprehensive design tool puts you in the driver's seat and is covered by our Perfect Fit Guarantee! It guides you through the design process step-by-step and yields professional results. You can design on your own timeline, save for later, make all changes when needed, sign purchase agreement and complete the purchase all within your personal account.
                                </p>
                                <p class="you-design-block__wrapper--text small-text js-show-text" style="padding-top: 0% !important; font-size: 15px; ">
                                    If you have any questions along the way, we are just a phone call away. And rest assured ALL incoming designs are peer reviewed by our Design Team for viability to ensure the finished product will serve you in the manner intended. Even after your purchase, if it is discovered that the design needs additional attention, one of our DesignTeam members will reach out to you to review the details and to help make the necessary changes and amend the purchase agreement and order. We also provide you with our Perfect Fit Guarantee! Because we always require a final measurement verification, we rarely use it but, in a rare circumstance, where you mismeasure, we will remake the part(s) for free. (we just ask that you cover the shipping) We have a motto at Closets To Go that has served both parties well: “Measure Twice, Cut Once”!
                                    <br>
                                    Your order is now off to production!

                                </p>
                                <div class="button-holder desktop-show" style="padding-top: 0% !important;">
                                    <button data-readAll="Full description" data-readLess="Less description" class="link-button js-btn-view-all-text" title='Full description'>
                                        <span>Full description</span>
                                        <?php echo $icon_id_left_arrow_3; ?>
                                    </button>
                                </div>
                                <div class="button-holder mobile-show mt-3" style="padding-bottom: 6% !important;">
                                    <button data-readAll="Full description" data-readLess="Less description" class="link-button js-btn-view-all-text" title='Full description'>
                                        <span>Full description</span>
                                        <?php echo $icon_id_left_arrow_3; ?>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-7">
                            <div class="you-design-block__image" style="height: 320px !important;">
                                <img src="<?php echo SITEROOT; ?>images/ProcessPageYouDesign1.jpeg" alt="ProcessPageYouDesign1" class="js-get-image" style="height: 320px !important; border-radius:2%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <div class="container-fluid">
            <h1 class="title__compare title__compare__desktop" style="padding-top: 1% !important; padding-bottom: 0%; color: #18C4C7 !important;">Phase 2</h1>
            <div class="tab-content__text-wrap--content js-hidden-text small-text">
                <p style="text-align:center; padding-bottom: 1%;">
                    ENGINEERING, MANUFACTURING, ASSEMBLY, LIGHTING, PACKAGING & SHIPPING
                </p>
            </div>
        </div>


        <section class="company-block about-us" id="mobile-full-view">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6 col-lg-5 company-block__images" style="height: 275px !important;">
                            <img src="<?php echo SITEROOT; ?>images/Process page-Manufacture.jpg" alt="Process page-Manufacture" class="js-get-image">
                        </div>

                        <div class="col-12 col-lg-5">
                            <div class="you-design-block__wrapper" style="justify-content: center !important;">
                                <h3 class="you-design-block__wrapper--heading">
                                    <div class="">
                                        Engineering and Manufacturing Department
                                    </div>
                                </h3>
                                <p style="font-size: 15px; padding-top: 0% !important; font-family:'OpenSans-Regular', sans-serif; line-height: 1.875;">
                                    Your finalized design starts in our Engineering Department where it is again reviewed and coded for machine programming. Materials, accessories and hardware are now sourced.

                                    Once the materials arrive, your order moves on to our Manufacturing Department where various machines are programmed to custom manufacture your closet with specific construction details.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="you-design-block we-desing-block about-us" id="mobile-full-view">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-lg-5">
                            <div class="you-design-block__wrapper" style="justify-content: center !important;">
                                <h3 class="you-design-block__wrapper--heading">
                                    <div class="desktop-show">
                                        Assembly and LED-Lighting Departments
                                    </div>
                                </h3>
                                <p style="font-size: 15px; font-family:'OpenSans-Regular', sans-serif; line-height: 1.875;">
                                    If you chose the pre assembly and / or Lighting-Options, the order will either go to our Assembly Department where the loose hardware parts are tediously assembled into the various components and / or go to our Lighting Department for preassembly of all LED-Lighting components if lighting was ordered.
                                </p>
                                <p class="you-design-block__wrapper--text small-text js-show-text" style="padding-top: 0% !important; font-size: 15px; ">
                                    If you did not purchase these options, your order will skip this step and go straight to our Packaging Department.

                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="you-design-block__image" style="height: 320px !important;">
                                <img src="<?php echo SITEROOT; ?>images/HPS-Page/LED-Lighting.jpg" alt="LED-Lighting" class="js-get-image" style="height: 320px !important; border-radius:2%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="company-block about-us" id="mobile-full-view">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6 col-lg-5 company-block__images" style="height: 275px !important;">
                            <img src="<?php echo SITEROOT; ?>images/ProcessPagePackaging.jpeg" alt="ProcessPagePackaging" class="js-get-image">
                        </div>
                        <div class="col-12 col-lg-5">
                            <div class="you-design-block__wrapper" style="justify-content: center !important;">
                                <h3 class="you-design-block__wrapper--heading">
                                    <div class="desktop-show">
                                        Packaging Department
                                    </div>
                                </h3>
                                <p style="font-size: 15px; font-family:'OpenSans-Regular', sans-serif; line-height: 1.875;">
                                    Your order has now arrived in our Packaging Department where we take great pride in our packaging. In fact, we constantly get compliments from our 3rd party carriers on how well our packaging looks and holds up compared to other products they ship! We use a combination of boxes with 1” hexcomb to carefully protect every part before shrink wrapping them to a pallet.

                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="you-design-block we-desing-block about-us" id="mobile-full-view">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-12 col-lg-5">
                            <div class="you-design-block__wrapper" style="justify-content: center !important;">
                                <h3 class="you-design-block__wrapper--heading">
                                    <div class="desktop-show">
                                        Shipping Department
                                    </div>
                                </h3>
                                <p style="font-size: 15px; font-family:'OpenSans-Regular', sans-serif; line-height: 1.875;">
                                    Once your order is properly packed and palletized we make arrangements with our 3rd party shipping carrier to pick up your shipment. Once this is confirmed, we will email you the shipping and tracking information.
                                </p>
                                <p class="you-design-block__wrapper--text small-text js-show-text" style="padding-top: 0% !important; font-size: 15px; ">
                                    To ensure the pallet arrives to you in the same condition it left our warehouse, a photo of the pallet is taken, emailed to you, and affixed to the pallet on all sides which puts everyone on notice of the condition of the pallet when picked up at our factory. We found this simple step helps ensure the pallet is safely handled between shipping terminals and the final destination, almost always arriving in the exact same condition as when leaving our factory.
                                    <br>
                                    When the shipment arrives at the destination’s terminal, they will contact you to set up a delivery appointment. Curbside delivery is standard. If it was determined beforehand that your delivery is eligible for inside delivery, this can be done for an additional fee charged by the 3rd party shipping carrier. It is your responsibility to note any visible damage to the pallet or boxes. This can be noted by taking some pictures of the damaged area(s) along with making a note on the Bill Of Lading which is the shipping receipt that you’ll sign when the pallet is delivered. In most cases, visible damage to the packaging does not relate to damaged products.
                                </p>
                                <div class="button-holder desktop-show" style="padding-top: 0% !important;">
                                    <button data-readAll="Full description" data-readLess="Less description" class="link-button js-btn-view-all-text" title='Full description'>
                                        <span>Full description</span>
                                        <?php echo $icon_id_left_arrow_3; ?>
                                    </button>
                                </div>
                                <div class="button-holder mobile-show mt-3" style="padding-bottom: 6% !important;">
                                    <button data-readAll="Full description" data-readLess="Less description" class="link-button js-btn-view-all-text" title='Full description'>
                                        <span>Full description</span>
                                        <?php echo $icon_id_left_arrow_3; ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="you-design-block__image" style="height: 320px !important;">
                                <img src="<?php echo SITEROOT; ?>images/ProcessShipping.jpeg" alt="" class="js-get-image" style="height: 320px !important; border-radius:2%;" id="DIY">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <div class="container-fluid">
            <h1 class="title__compare title__compare__desktop" style="padding-top: 1% !important; padding-bottom: 0%; color: #18C4C7 !important;">Phase 3</h1>
            <div class="tab-content__text-wrap--content js-hidden-text small-text">
                <p style="text-align:center; padding-bottom: 1%;">
                    EASY DIY-Install & PERFECT FIT GUARANTEE
                </p>
            </div>
        </div>


        <section class="company-block about-us" id="mobile-full-view">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6 col-lg-5 company-block__images" style="height: 275px !important;">
                            <img src="<?php echo SITEROOT; ?>images/DIYcouplemeasuring.jpg" alt="lady sitting at desk with laptop typing" class="js-get-image">
                        </div>


                        <div class="col-12 col-lg-5">
                            <div class="you-design-block__wrapper" style="justify-content: center !important;">
                                <h3 class="you-design-block__wrapper--heading">
                                    <div class="desktop-show">
                                        Easy DIY - <a href="<?php echo SITEROOT; ?>diy-instructions.html" title="We design" class="you-design" style=" font-size: 12px; font-family:'OpenSans-Regular', sans-serif; letter-spacing: normal; width: 120px; text-align: center; line-height: 1.875;">INSTRUCTIONS</a>
                                    </div>
                                </h3>
                                <p style="font-size: 15px; font-family:'OpenSans-Regular', sans-serif; line-height: 1.875;">
                                    Depending on where you are located, your order will either be delivered to you via a 3rd party carrier or ready for pickup at our Tigard Oregon closet factory location on a pre-designated date.

                                <p class="you-design-block__wrapper--text small-text js-show-text" style="padding-top: 0% !important; font-size: 15px; ">
                                    Depending on where you are located, your order will either be delivered to you via a 3rd party carrier or ready for pickup at our Tigard Oregon closet factory location on a pre-designated date.
                                    <br><br>
                                    We recommend you unbox the entire order and load each room with their parts. This time saving step will eliminate trips going back and forth trying to find missing parts in unopened boxes.
                                    To begin this process, start with the box labeled “OPEN FIRST”.
                                    This is where you’ll find the instruction manual which is curated specifically for your closet! This step-by- step guide will list all the tools you’ll need and guide you through our streamlined installation process.
                                    You'll quickly find that everything is packed in an orderly fashion with all parts and panels labeled according to the room plans ensuring a smooth installation.
                                    <br><br>
                                    With our Hardware Pre-Assembly Service, we do all the tedious, time consuming work on our end so you don't have to, saving you time, money and frustration!
                                    Feel relieved in knowing we have already pre -assembled the following when applicable:
                                    <br><br>
                                    *assembly fittings * drawer slides *hanging brackets * leg levelers *hinge plates *shelf dividers *pant racks *baskets *in drawer ironing boards *hampers *pull down closet rods *flipper door hardware *drop down table hardware *pull out pilaster assemblies *connecting fittings *drawer front adjusters *locks *file hangers *undermount drawer clips for dovetailed drawers *wardrobe tubes *fixing rails *shoe fences *strip hook racks. *LED-Lighting and other supported electronic devices
                                    <br><br>
                                    For peace of mind, we offer all DIYers our Closets To Go Perfect Fit Guarantee. If you mis-measure or damage a part, we will remake that part for free! We just ask that you cover the shipping.
                                    <br><br>
                                    In the end, you will be pleasantly surprised with just how EASY our DIY custom closets are to install while yielding professional results!
                                    <br><br>
                                    If at any time you have a question, go to ClosetsToGo.com and click the <a href="<?php echo SITEROOT; ?>diy-instructions.html">DIY-Install</a> tab at the top to view step by step instructional DIY videos. We also provide live customer support M-F 9am-5pm & Sat 10am-5pm PST via our SUPPORT page, chat, email or a phone call!
                                </p>

                                <div class="button-holder desktop-show" style="padding-top: 0% !important;">
                                    <button data-readAll="Full description" data-readLess="Less description" class="link-button js-btn-view-all-text" title='Full description'>
                                        <span>Full description</span>
                                        <?php echo $icon_id_left_arrow_3; ?>
                                    </button>
                                </div>
                                <div class="button-holder mobile-show mt-3" style="padding-bottom: 6% !important;">
                                    <button data-readAll="Full description" data-readLess="Less description" class="link-button js-btn-view-all-text" title='Full description'>
                                        <span>Full description</span>
                                        <?php echo $icon_id_left_arrow_3; ?>
                                    </button>
                                </div>


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
    <style>
        /* .col-12{
            max-width: 42.3333% !important;
        } */

        
        h1 {
            text-align: center;
            font-size: 2em;
            padding-bottom: 3%;
            color: #ed9c00;
        }


        .EasyDiy1 {
            padding: 10px;
            float: left;
            height: 200px;
            width: 250px;
        }

        .imageText1 {
            font-size: 16px;
            width: 800px;
            border: 2px solid white;
            height: 200px;

        }

        .EasyDiy2 {
            padding: 10px;
            float: right;
            height: 200px;
            width: 200px;
        }

        .imageText2 {
            font-size: 16px;
            width: 800px;
            border: 2px solid white;
            height: 200px;

        }

        .textExpanding {
            margin-left: auto;
            margin-right: auto;
            padding-right: 20%;
            padding-left: 20%;
            border-radius: 2%;
        }

        .js-get-image{
        height: 275px !important; 
        width: 400px !important; 
        border-radius:1%;
    }
                        

        @media(max-width: 992px) {
            .textExpanding {
                margin-left: auto !important;
                margin-right: auto !important;
                padding-right: 1% !important;
                padding-left: 1% !important;
                border-radius: 2%;
                text-align: center;
            }

            .EasyDiy1 .EasyDiy2 {
                display: none !important;

            }
            .js-get-image{
                flex: 0 0 100%;
                width:350px !important;
                
            }
        }​
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