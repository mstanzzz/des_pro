<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>ClosetsToGo | <?php echo $meta_title; ?></title>
	<meta name="description" content="<?php echo $meta_description; ?>">
    <link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>


<body class="clearfix idea-folder-popup">
<?php
require_once($real_root . '/pages/views/header.php');
?>
<main class="main clearfix">
    <section class="breadcrumb-block about-us mb-5 desktop-show">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="breadcrumb-block__wrapper" aria-label="breadcrumb">
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo SITEROOT ?>" title="Home">Home</a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo SITEROOT ?>about-us.html" title="Home">Company</a></li>
									<li class="breadcrumb-item"><a title="Company">FAQ</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

    <h1 class="headerFAQ">Frequently Asked Questions</h1>

    <!-- <form class = "searchForm" id="form">
        <input type="search" id="query" name="q" placeholder=" Search...">
        <button class = "searchButton">Search</button>
    </form> -->


    <p style="text-align:center; color:#5A5A5A; padding-bottom: 1%; font-family: 'Futurica-BS-light', sans-serif;">Can't find your question and/or answer, please <a src href="https://storittek.com/support.html" style="color:#11888a;">contact us here</a>.</p>
    <div class="tableFAQ">
        <table class="tablewFAQ">


            <tr class="sectionsFAQ">
                <th class="sectionsFAQth">Ordering Closet Systems</th>
                
            </tr>
            
            <tr class="sectionsSubFAQ">
                <td>
                    <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-left-align buttonFAQ">
                        Do I need to be a member to place an order?</button>

                    <div id="Demo1" class="w3-hide w3-container w3-left-align">
                        <p class="answerFAQ">All customers who wish to order a custom closet system from us online must
                            register as a member. Membership allows us to process your order and refer to your design
                            as we build your new closet system. If you are going through one of our designers, they
                            will create a membership for you. Membership is free and we keep all of your information
                            confidential. We value your privacy and do not sell our customer information to anyone.</p>
                    </div>


                    <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-left-align buttonFAQ">
                        Can I order just hardware?</button>

                    <div id="Demo2" class="w3-hide w3-container w3-left-align">
                        <p class="answerFAQ">Yes, we do sell hardware individually if you do not need the full closet system. Give us a call
                            toll free at 1-888-312-7424 (Pacific Time) or send an email via the contact us page to see what we
                            can do for you.</p>
                    </div>


                    <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-left-align buttonFAQ">
                        Can I order over the phone?</button>

                    <div id="Demo3" class="w3-hide w3-container w3-left-align">
                        <p class="answerFAQ">We can take orders for accessories over the phone but we do ask for email confirmation when ordering
                            full systems and parts. If you prefer to order accessories over the phone you can call us toll free at 1-888-312-7424 (Pacific Time).</p>
                    </div>


                    <button onclick="myFunction('Demo4')" class="w3-button w3-block w3-left-align buttonFAQ">
                        How do I place an order?</button>

                    <div id="Demo4" class="w3-hide w3-container w3-left-align">
                        <p class="answerFAQ">If you are using our free full design service or you come into our showroom in-person, our friendly design team can
                            assist you in taking your order. You may contact us by phone toll free at 1-888-312-7424 (Pacific Time) or email.</p>
                    </div>


                    <button onclick="myFunction('Demo4p')" class="w3-button w3-block w3-left-align buttonFAQ">
                        Do you give discounts on orders?</button>

                    <div id="Demo4p" class="w3-hide w3-container w3-left-align">
                        <p class="answerFAQ">Yes, Closets To Go gives discounts on orders based on the price range of the order. Orders under $1,500 receive
                            a 25% discount. Orders over $1,500 receive a 30% discount which can increase based on order volume.
                        </p>
                    </div>

                </td>
            </tr>












            <tr class="sectionsFAQ">
                <th class="sectionsFAQth">Closet Installation</th>
            </tr>
            
            <tr class="sectionsSubFAQ">
                <td>
                    <button onclick="myFunction('Demo5')" class="w3-button w3-block w3-left-align buttonFAQ">
                        Do we offer installation?</button>

                    <div id="Demo5" class="w3-hide w3-container w3-left-align">
                        <p class="answerFAQ">We offer installation to customers locally, lead time may vary depending on availability
                            and scheduling. We are based in Tigard, Oregon and can serve customers within an estimated 75 mile radius.
                            You can always call to check and see if you are located in our service area.</p>
                    </div>


                    <button onclick="myFunction('Demo6')" class="w3-button w3-block w3-left-align buttonFAQ">
                        What tools do I need to install my closet system?</button>

                    <div id="Demo6" class="w3-hide w3-container w3-left-align">
                        <p class="answerFAQ"><b>To install your new custom closet system yourself, you will need the following tools:</b><br>
                            • drill<br>
                            • extension bit (for use with drill)<br>
                            • 1/2” drill bit (for use with drill)<br>
                            • 1/8” drill bit (for use with drill)<br>
                            • tape measure<br>
                            • stud finder<br>
                            • level (1', 2', or 4' will do)<br>
                            • phillips screwdriver<br>
                            <b>If you need to remove an existing closet system, these additional tools may be needed:</b><br>
                            • crowbar / pry bar<br>
                            • plyers<br>
                            • slot screwdriver<br>
                            • hammer<br>
                        </p>
                    </div>


                    <button onclick="myFunction('Demo7')" class="w3-button w3-block w3-left-align buttonFAQ">
                        How much time should I set aside for installing my closet system?</button>

                    <div id="Demo7" class="w3-hide w3-container w3-left-align">
                        <p class="answerFAQ">Our average customer can install a custom closet system within 2 to 5 hours. This all
                            depends on the size of your closets and the components within your design. The installation guide is easy to read and all of our hardware is pre-installed.</p>
                    </div>



                </td>
            </tr>




            <tr class="sectionsFAQ">
                <th class="sectionsFAQth">Closet Design</th>
            </tr>
            
            <tr class="sectionsSubFAQ">
                <td>
                    <button onclick="myFunction('Demo9')" class="w3-button w3-block w3-left-align buttonFAQ">
                        Do custom colors add time to my order?</button>

                    <div id="Demo9" class="w3-hide w3-container w3-left-align">
                        <p class="answerFAQ">Yes, choosing any color not on our Color Options page can add up to five weeks of
                            lead time for your order.</p>
                    </div>


                    <button onclick="myFunction('Demo10')" class="w3-button w3-block w3-left-align buttonFAQ">
                        Do you offer routed drawers?</button>

                    <div id="Demo10" class="w3-hide w3-container w3-left-align">
                        <p class="answerFAQ">Yes we do offer routed drawers (raised panels). There is an additional charge for
                            these drawer fronts and they are made from thermafoil</p>
                    </div>


                    <button onclick="myFunction('Demo11')" class="w3-button w3-block w3-left-align buttonFAQ">
                        What are your closet systems made from?</button>

                    <div id="Demo11" class="w3-hide w3-container w3-left-align">
                        <p class="answerFAQ">We use 3/4" industrial grade particle board with thermally fused melamine. We source
                            from Roseburg Forest Products, Panolam, Flakeboard and other high quality products made
                            in America.</p>
                    </div>


                    <button onclick="myFunction('Demo12')" class="w3-button w3-block w3-left-align buttonFAQ">
                        What products do you ship?</button>

                    <div id="Demo12" class="w3-hide w3-container w3-left-align">
                        <p class="answerFAQ">We ship custom closet organizers, pantries, garages, offices,
                            etc. as well as parts to our customers.</p>
                    </div>


                    <button onclick="myFunction('Demo101')" class="w3-button w3-block w3-left-align buttonFAQ">
                        What are the finish options and what is the associated cost?</button>

                    <div id="Demo101" class="w3-hide w3-container w3-left-align">
                        <p class="answerFAQ">We offer a variety of finishes. For pricing these, we use a tier system: White - no upcharge,
                            Antique White / Almond - 6%, Stock (smooth, colored) - 12%, and textured - 25%. All mark-ups
                            are on material cost only and only account for the industrial strength particle board with melamine.</p>
                    </div>



                    <button onclick="myFunction('Demo111')" class="w3-button w3-block w3-left-align buttonFAQ">
                        What are my hardware finish options?</button>

                    <div id="Demo111" class="w3-hide w3-container w3-left-align">
                        <p class="answerFAQ">Our standard finish is Satin-Nickel but we can upgrade to Polished-Chrome,
                            Oil Rubbed Bronze, Matte-Black and Brushed-Gold.</p>
                    </div>



                    <button onclick="myFunction('Demo121')" class="w3-button w3-block w3-left-align buttonFAQ">
                        Do you offer material other than particle board?</button>

                    <div id="Demo121" class="w3-hide w3-container w3-left-align">
                        <p class="answerFAQ">We can supply MDF and veneer but there will be additional costs associated. We can assure
                            you that the particle board and manner of construction used by Closets To Go is meant to
                            be long lasting.</p>
                    </div>
                </td>
            </tr>











            <tr class="sectionsFAQ">
                <th class="sectionsFAQth">Shipping</th>
            </tr>
            
            <tr class="sectionsSubFAQ">
                <td>
                    <button onclick="myFunction('Demo13')" class="w3-button w3-block w3-left-align buttonFAQ">
                        How do you ship your closet systems?</button>

                    <div id="Demo13" class="w3-hide w3-container w3-left-align">
                        <p class="answerFAQ">We ship your custom closet system using a LTL freight carrier. After setting up a delivery
                            appointment, the freight carrier will deliver to the base of your driveway also referred to as curbside delivery.</p>
                    </div>


                    <button onclick="myFunction('Demo14')" class="w3-button w3-block w3-left-align buttonFAQ">
                        How long does it take to produce your closet?</button>

                    <div id="Demo14" class="w3-hide w3-container w3-left-align">
                        <p class="answerFAQ">Production lead times vary depending on capacity in the factory. Most orders are produced within 12-20
                            business days. Customization can add to the production time.</p>
                    </div>


                    <button onclick="myFunction('Demo15')" class="w3-button w3-block w3-left-align buttonFAQ">
                        What is the lead time for shipping my order?</button>

                    <div id="Demo15" class="w3-hide w3-container w3-left-align">
                        <p class="answerFAQ">West Coast: 3-5 business days<br>
                            Mountain: 5-7 business days<br>
                            Midwest: 7-9 business days<br>
                            East Coast: 9-12 business days<br>
                            We use a third party carrier and the timeline can vary by location.
                        </p>
                    </div>


                    <button onclick="myFunction('Demo16')" class="w3-button w3-block w3-left-align buttonFAQ">
                        What do I do if my order arrives damaged?</button>

                    <div id="Demo16" class="w3-hide w3-container w3-left-align">
                        <p class="answerFAQ">If your order arrives damaged, please note this on the bill of lading. If you are able
                            to please take pictures of the pallet before removing the boxes. Next, open all boxes as soon as possible and then contact Closets To Go with all the information regarding your damaged product. Closets To Go will remake and ship out any damaged parts immediately at no charge.</p>
                    </div>


                    <button onclick="myFunction('Demo161')" class="w3-button w3-block w3-left-align buttonFAQ">
                        Can you ship to Alaska, Hawaii, or Canada?</button>

                    <div id="Demo161" class="w3-hide w3-container w3-left-align">
                        <p class="answerFAQ">We ship to Canada! However, there are taxes, customs and partial shipping charges.
                            Shipping to Hawaii and Alaska are on an order by order basis. It is the customers responsibility to pay for the shipping.
                        </p>
                    </div>
                </td>
            </tr>








            <tr class="sectionsFAQ">
                <th class="sectionsFAQth">General/Closet Organizing</th>
            </tr>
            
            <tr class="sectionsSubFAQ">
                <td> <button onclick="myFunction('Demo17')" class="w3-button w3-block w3-left-align buttonFAQ">
                        Are you going to expand your locations?</button>

                    <div id="Demo17" class="w3-hide w3-container w3-left-align">
                        <p class="answerFAQ">Not at this time, but we will be looking for more dealerships in the near future. If you are interested in becoming a Closets
                            To Go dealership, please reach out via email.</p>
                    </div>


                    <button onclick="myFunction('Demo18')" class="w3-button w3-block w3-left-align buttonFAQ">
                        How do I install my new system?</button>

                    <div id="Demo18" class="w3-hide w3-container w3-left-align">
                        <p class="answerFAQ">Please see our step-by-step installation instructions that are included with your order or on our <a src href="https://storittek.com/diy-instructions.html" style="color: #18c4c7; text-decoration:underline;">installation page</a> and
                            view our short video</p>
                    </div>


                    <button onclick="myFunction('Demo19')" class="w3-button w3-block w3-left-align buttonFAQ">
                        Where is my closet manufactured?</button>

                    <div id="Demo19" class="w3-hide w3-container w3-left-align">
                        <p class="answerFAQ">Every order is manufactured at our central location in Tigard, Oregon. Each closet organizer system is carefully
                            custom-made and assembled by hand into easy-to-install modules.</p>
                    </div>


                    <button onclick="myFunction('Demo20')" class="w3-button w3-block w3-left-align buttonFAQ">
                        Are your systems adjustable?</button>

                    <div id="Demo20" class="w3-hide w3-container w3-left-align">
                        <p class="answerFAQ">Yes, every single part of our systems is adjustable, even after assembly.</p>
                    </div>


                    <button onclick="myFunction('Demo219')" class="w3-button w3-block w3-left-align buttonFAQ">
                        Can I take my system with me when I move?</button>

                    <div id="Demo219" class="w3-hide w3-container w3-left-align">
                        <p class="answerFAQ">Yes, you can uninstall your system and take it with you to your new home with ease. Our modular design makes
                            uninstalling and transportation simple.</p>
                    </div>


                    <button onclick="myFunction('Demo216')" class="w3-button w3-block w3-left-align buttonFAQ">
                        What is a ballpark price range for a (category) closet?</button>

                    <div id="Demo216" class="w3-hide w3-container w3-left-align">
                        <p class="answerFAQ">All our closet systems are custom and made based on an individual's specific needs and wants.
                            This means we are not able to provide ballpark pricing as it needs and layouts vary.</p>
                    </div>


                    <button onclick="myFunction('Demo214')" class="w3-button w3-block w3-left-align buttonFAQ">
                        Are your materials eco-friendly?</button>

                    <div id="Demo214" class="w3-hide w3-container w3-left-align">
                        <p class="answerFAQ">Our products are NAF (no added formaldehyde), EPA TSCA Title VI Complaint, CARB exempt and 100% post-industrial recycled / recovered content.</p>
                    </div>
                </td>
            </tr>

            <tr class="sectionsFAQ">
                <th class="sectionsFAQth">Misc</th>
            </tr>
            
            <tr class="sectionsSubFAQ">
                <td>
                    <button onclick="myFunction('Demo212')" class="w3-button w3-block w3-left-align buttonFAQ">
                        I can&#39;t find what I am looking for on your site.</button>

                    <div id="Demo212" class="w3-hide w3-container w3-left-align">
                        <p class="answerFAQ">If you have browsed the Closets To Go site and cannot find what you&#39;re looking for,
                            we suggest two things. First, try going to our site map located at the bottom (footer) of our
                            main page. In there you will find all of the links we have on our site. Second, try using our search script located at the top right of most pages. If all else fails, you can email us by going to our <a scr href="https://storittek.com/support.html" style="color:  #18c4c7; text-decoration: underline;">support page</a>.</p>
                    </div>
                </td>
            </tr>



        </table>

        <br>
        <br>
        <br>

    </div>


    <script>
        function myFunction(id) {
            var x = document.getElementById(id);
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }
    </script>


    <style>
        .headerFAQ {
            color: #18c4c7;
            
            text-align: center;
            font-family: "Futurica-BS-light", sans-serif;
        }

        .searchForm {
            text-align: center;
            padding-bottom: 1%;
            padding-top: 1%;

        }

        .searchButton {
            color: #18c4c7;
            font-weight: 700;
        }

        .tableFAQ {
            margin-left: 25%;
            margin-right: 25%;
        }

        .tablewFAQ {
            width: 100%;
            text-align: center;
        }

        .sectionsFAQ {
            text-align: left;
            color: #18c4c7;
            font-size: 17px;
            font-family: 'Montserrat', sans-serif;

        }

        .sectionsFAQth {
            padding-left: 5px;
            padding-top: 3%;
            font-family: 'Montserrat', sans-serif;
        }

        .sectionsSubFAQ {
            text-align: center;
            font-weight: 500;
            font-family: 'Montserrat', sans-serif;

        }

        .buttonFAQ {
            font-size: 16px;
            font-weight: 500;
            color: #4C4E52;
            font-family: 'Montserrat', sans-serif;
        }

        .answerFAQ {
            color: #5C667B;
            font-size: 16px;
            font-weight: 500;
            font-family: 'Montserrat', sans-serif;

        }

        @media (max-width:992px) {

            .tableFAQ {
                margin-left: 15%;
                width: 70%;
                margin-right: 10%;
                word-wrap: break-word;


            }

            .buttonFAQ {
                width: 100%;
                text-align: center;
                font-size: 12px;
                white-space: normal;
                word-wrap: break-word;

            }

            .answerFAQ {
                width: 100%;
                font-size: 12px;
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