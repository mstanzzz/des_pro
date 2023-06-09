<?php
if (!isset($_SESSION['temp_id'])) {
    $_SESSION['temp_id'] = time();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>ClosetsToGo | <?php echo $meta_title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo SITEROOT; ?>plupload-2.1.8/js/jquery.plupload.queue/css/jquery.plupload.queue.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo SITEROOT; ?>DF_css/design_request.css?v=1.2.1" />
    <link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">

</head>

<body class="datapicker-block idea-folder-popup">
    <?php
    require_once($real_root . '/pages/views/header.php');
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


exit;
?>

    <section class="first-fixed-block covid-block clearfix consult-block pb-0">
        <figure class="col-12 first-fixed-block__img-group" style="background-image: url('<?php echo SITEROOT; ?>images/InHomeConsultCouchNoWM.jpeg');">
            <figcaption class="first-fixed-block__img-group--text-block">
                <div class="wrapper">
                    <h1 class="first-fixed-block__img-group--heading">Free In-Home Consultations</h1>
                    <p class="first-fixed-block__img-group--text">
                        You will receive our response within 24 hours. Please check your spam folder.
                    </p>
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
                                    <li class="breadcrumb-item"><a href="index.html" title="Home">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Free in home consults</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="simple-block pb-md-0">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="simple-block__border no-border pb-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="simple-block__heading">

                                            <h2 class="simple-block__heading--heading text-center mb-1">
                                                Please fill out the form below. Our Design Team will be in contact with you soon!
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="simple-block__text mb-5">
                                            <p class="text-center">
                                                You will receive our response within 24 hours. Please check your spam folder.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="two-elements-block pb-md-3 js-open-form">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="consult-wrap">
                                <div class="row">
                                    <div class="col-12 col-lg-4">
                                        <div class="consult-wrap__image-block right-border h-lg-100">
                                            <img src="<?php echo SITEROOT; ?>images/house.svg" alt="" class="consult-wrap__image-block--img img-fluid">
                                            <p class="consult-wrap__image-block--heading">In home consultation</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-8">
                                        <div class="consult-wrap__image-block justify-content-lg-start align-items-lg-start h-lg-100">
                                            <p class="consult-wrap__image-block--text">
                                                Free in-home consultations in the Portland, Oregon area*
                                            </p>
                                            <div class="desktop-show">
                                                <button title="Explore your options" class="consult-wrap__image-block--button" id="js-desktop-first-home-consult-form-btn">
                                                    REQUEST CONSULT
                                                </button>
                                            </div>
                                            <div class="mobile-show">
                                                <button title="Explore your options" class="consult-wrap__image-block--button" data-toggle="modal" data-target="#mobile-first-home-consult-form" id="js-mobile-first-home-consult-form-btn">
                                                    REQUEST CONSULT
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="consult-wrap virtual-consultation">
                                <div class="row">
                                    <div class="col-12 col-lg-4">
                                        <div class="consult-wrap__image-block right-border h-lg-100">
                                            <img src="<?php echo SITEROOT; ?>images/virtual-reality.svg" alt="" class="consult-wrap__image-block--img img-fluid">
                                            <p class="consult-wrap__image-block--heading">Virtual consultation</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-8">
                                        <div class="consult-wrap__image-block justify-content-lg-start align-items-lg-start h-lg-100">
                                            <p class="consult-wrap__image-block--text">
                                                Visit our 4000 sf showroom virtually from anywhere in the US!
                                            </p>
                                            <div class="desktop-show">
                                                <button title="Explore your options" class="consult-wrap__image-block--button" id="js-desktop-first-virtual-consult-form-btn">
                                                    REQUEST CONSULT
                                                </button>
                                            </div>
                                            <div class="mobile-show">
                                                <button title="Explore your options" class="consult-wrap__image-block--button" data-toggle="modal" data-target="#mobile-first-virtual-consult-form" id="js-mobile-first-virtual-consult-form-btn">
                                                    REQUEST CONSULT
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="home-consult-form" class="home-consult-form pb-md-3 pt-md-5">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <fieldset>
                                <div class="home-consult-form__wrapper">
                                    <div class="home-consult-form__nav">
                                        <button title="1 Your Contact Info" class="home-consult-form__nav--button" id="js-desktop-first-home-consult-nav-btn" disabled>1 Contact Info
                                        </button>
                                        <button title="2 Your Project Info" class="home-consult-form__nav--button" id="js-desktop-second-home-consult-nav-btn" disabled>2 Your Info
                                        </button>
                                        <button title="3 Attach an Image" class="home-consult-form__nav--button" id="js-desktop-third-home-consult-nav-btn" disabled>3 Add Images/Files
                                        </button>
                                    </div>
                                    <div class="home-consult-form__content first-content" id="js-mobile-first-home-consult-form">
                                        <h4 class="home-consult-form__heading desktop-show text-center">Contact Info</h4>
                                        <div class="form-group text-fields">
                                            <label class="mobile-show home-consult-form__label " for="names">Enter your full name</label>
                                            <input type="text" name="names" placeholder="Enter your full name" class="home-consult-form__input mobile-no-margin" autocapitalize="off" autocomplete="off" spellcheck="false" autocorrect="off" />
                                        </div>
                                        <div class="form-group text-fields">
                                            <label class="mobile-show home-consult-form__label" for="email">E-mail:</label>
                                            <input type="text" name="email" placeholder="E-mail" class="home-consult-form__input" autocapitalize="off" autocomplete="off" spellcheck="false" autocorrect="off" />
                                        </div>
                                        <div class="form-group text-fields">
                                            <input type="text" name="address-1" placeholder="Address:" class="home-consult-form__input" autocapitalize="off" autocomplete="off" spellcheck="false" autocorrect="off" />
                                        </div>
                                        <div class="form-group text-fields">
                                            <input type="text" name="address-2" placeholder="Address 2:" class="home-consult-form__input" autocapitalize="off" autocomplete="off" spellcheck="false" autocorrect="off" />
                                        </div>
                                        <div class="home-consult-form__zip-code-block">
                                            <div class="form-group text-fields small-input">
                                                <input type="text" name="city" placeholder="City" class="home-consult-form__input" autocapitalize="off" autocomplete="off" spellcheck="false" autocorrect="off" />
                                            </div>
                                            <div class="home-consult-form__select small-input">
                                                <select name="states" id="">
                                                    <option value="State">Location:</option>
                                                    <option value="State 1">Oregon(Portland Metro)</option>
                                                    <option value="State 2">Washington(Southwest)</option>
                                                </select>
                                            </div>
                                            <div class="form-group text-fields small-input">
                                                <input type="text" name="zip-code" placeholder="ZIP Code:" class="home-consult-form__input" autocapitalize="off" autocomplete="off" spellcheck="false" autocorrect="off" />
                                            </div>
                                            <div class="form-group text-fields small-input">
                                                <input type="text" name="telephone-include-area-code" placeholder="Telephone Include area code" class="home-consult-form__input" autocapitalize="off" autocomplete="off" spellcheck="false" autocorrect="off" />
                                            </div>
                                        </div>
                                        <div class="home-consult-form__radio-block">
                                            <span>Mailing list:</span>
                                            <label class="desktop-show home-consult-form__radio">
                                                <input type="radio" name="r" value="1">
                                                <span>Yes</span>
                                            </label>
                                            <label class="desktop-show home-consult-form__radio">
                                                <input type="radio" name="r" value="2">
                                                <span>No</span>
                                            </label>
                                            <input type="checkbox" name="r" value="2" class="mobile-show home-consult-form__switcher" checked>
                                        </div>
                                        <div class="desktop-show text-center">
                                            <button title="Next" class="home-consult-form__submit mt-4" id="js-desktop-second-home-consult-form-btn">Next
                                            </button>
                                        </div>
                                    </div>
                                    <div class="home-consult-form__content second-content" id="js-mobile-second-home-consult-form">
                                        <h4 class="home-consult-form__heading text-center desktop-show">Project Info</h4>
                                        <div class="form-group datapicker-block">
                                            <label for="home-consult__modal-datepicker" class="control-label datapicker-block__label">Proposed Finish Date</label>
                                            <!--FOR DATEPICKER TO BE PROPERLY STYLE WE HAVE TO HEAVE '.datapicker-block' ON THE <BODY>-->
                                            <input type="text" name="date" placeholder="Proposed Finish Date" id="home-consult__modal-datepicker" class="form-control home-consult-form__input date-pikcer" data-provide="datepicker" data-date-autoclose="true" data-date-week-start="1" data-date-focusOnShow="false" data-date-ignoreReadonly="true" readonly="readonly" />
                                            <span class="datapicker-block__image"><img src="<?php echo SITEROOT; ?>images/CAlendar.svg" alt=""></span>
                                        </div>
                                        <h4 class="home-consult-form__heading bordered-heading">
                                            Storage Areas <span>Which type of storage area are you interested in?</span>
                                        </h4>
                                        <div class="home-consult-form__checkbox-block">
                                            <div class="form-group">
                                                <input class="custom-checkbox" id="checkbox-1" type="checkbox" value="value1">
                                                <label for="checkbox-1">Pantry</label>
                                            </div>
                                            <div class="form-group">
                                                <input class="custom-checkbox" id="checkbox-2" type="checkbox" value="value2">
                                                <label for="checkbox-2">Nursery</label>
                                            </div>
                                            <div class="form-group">
                                                <input class="custom-checkbox" id="checkbox-3" type="checkbox" value="value3">
                                                <label for="checkbox-3">Wallbed</label>
                                            </div>

                                            <div class="form-group">
                                                <input class="custom-checkbox" id="checkbox-6" type="checkbox" value="value6">
                                                <label for="checkbox-6">Guest</label>
                                            </div>
                                            <div class="form-group">
                                                <input class="custom-checkbox" id="checkbox-7" type="checkbox" value="value7">
                                                <label for="checkbox-7">Office</label>
                                            </div>
                                            <div class="form-group">
                                                <input class="custom-checkbox" id="checkbox-8" type="checkbox" value="value8">
                                                <label for="checkbox-8">Garage</label>
                                            </div>

                                            <div class="form-group">
                                                <input class="custom-checkbox" id="checkbox-9" type="checkbox" value="value9">
                                                <label for="checkbox-9">Home Office</label>
                                            </div>
                                            <div class="form-group">
                                                <input class="custom-checkbox" id="checkbox-9" type="checkbox" value="value9">
                                                <label for="checkbox-9">Laundry</label>
                                            </div>
                                            <div class="form-group">
                                                <input class="custom-checkbox" id="checkbox-9" type="checkbox" value="value9">
                                                <label for="checkbox-9">Reach In</label>
                                            </div>
                                            <div class="form-group">
                                                <input class="custom-checkbox" id="checkbox-9" type="checkbox" value="value9">
                                                <label for="checkbox-9">Walk In</label>
                                            </div>
                                            <div class="form-group">
                                                <input class="custom-checkbox" id="checkbox-9" type="checkbox" value="value9">
                                                <label for="checkbox-9">Wine Storage</label>
                                            </div>
                                            <div class="form-group">
                                                <input class="custom-checkbox" id="checkbox-9" type="checkbox" value="value9">
                                                <label for="checkbox-9">Craft Storage</label>
                                            </div>
                                            <div class="form-group">
                                                <input class="custom-checkbox" id="checkbox-9" type="checkbox" value="value9">
                                                <label for="checkbox-9">Master</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="mobile-show home-consult-form__label textarea-label" for="home-consult-form__textarea">Comments <span>Is there any additional information we might need?</span></label>
                                            <textarea name="massage" id="home-consult-form__textarea" cols="30" rows="4" class="home-consult-form__textarea" placeholder="Comments: Is there any additional information we might need?"></textarea>
                                        </div>
                                        <div class="home-consult-form__select">
                                            <select name="states" id="">
                                                <option value="How did you hear about us?">How did you hear about us?</option>
                                                <option value="Option 1">Referral</option>
                                                <option value="Option 2">Internet Search</option>
                                                <option value="Option 3">Social Media</option>
                                                <option value="Option 4">Magazine Advertisement</option>
                                            </select>
                                        </div>
                                        <div class="desktop-show text-center">
                                            <button title="Next" class="home-consult-form__submit mt-4" id="js-desktop-third-home-consult-form-btn">Next
                                            </button>
                                        </div>
                                    </div>
                                    <div class="home-consult-form__content third-content" id="js-mobile-third-home-consult-form">
                                        <h4 class="home-consult-form__heading text-center desktop-show">Add Images / Files</h4>

                                        <p class="heading">Fax images / files to: 503.639.7068 </p>
                                        <div id="file_uploads_container">
                                            <h2>To Add images / files below: ADD files then START upload.</h2>
                                            <br /><br />
                                            <div id="uploader">
                                                <p>Your browser doesn't have Flash, Silverlight or HTML5 support.</p>

                                                <table class="home-consult-form__image-area">
                                                    <fieldset>
                                                        <thead>
                                                            <tr>
                                                                <th class="image-name"></th>
                                                                <th class="image-name bigger-col">Filename</th>
                                                                <th class="image-size">Size</th>
                                                                <th class="success-or-error">Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="image-preview">
                                                            <tr>
                                                                <td class="mobile-button-delete-wrap">
                                                                    <button title="Delete" class="mobile-button-delete js-delete-uploaded-img" data-image-name="example.jpg" data-toggle="modal" data-target="#deleteImgModal"></button>
                                                                </td>
                                                                <td class="mobile-image-icon"><span class="mobile-image-container" style="background: #7D9BC2;">jpg</span>
                                                                </td>
                                                                <td class="image-name example.jpg">example.jpg</td>
                                                                <td class="image-size">30 kb</td>
                                                                <td class="success-or-error">
                                                                    <img src="<?php echo SITEROOT; ?>images/checked.svg" alt="">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="mobile-button-delete-wrap">
                                                                    <button title="Delete" class="mobile-button-delete js-delete-uploaded-img" data-image-name="example.jpg" data-toggle="modal" data-target="#deleteImgModal"></button>
                                                                </td>
                                                                <td class="mobile-image-icon"><span class="mobile-image-container" style="background: #7D9BC2;">jpg</span>
                                                                </td>
                                                                <td class="image-name example1.jpg">example1.jpg</td>
                                                                <td class="image-size">124 kb</td>
                                                                <td class="success-or-error">
                                                                    <img src="<?php echo SITEROOT; ?>images/cancel.svg" alt="">
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <td colspan="4">
                                                                    <div class="drop-region">
                                                                        <div class="drop-message">
                                                                            <svg id="add" xmlns="http://www.w3.org/2000/svg" width="28.6" height="28.6" viewBox="0 0 28.6 28.6">
                                                                                <g id="Group_376" data-name="Group 376">
                                                                                    <path fill="#384765" id="Path_195" data-name="Path 195" d="M14.3,0A14.3,14.3,0,1,0,28.6,14.3,14.316,14.316,0,0,0,14.3,0Zm8.342,14.9a.6.6,0,0,1-.6.6H15.491v6.554a.6.6,0,0,1-.6.6H13.7a.6.6,0,0,1-.6-.6V15.491H6.554a.6.6,0,0,1-.6-.6V13.7a.6.6,0,0,1,.6-.6h6.554V6.554a.6.6,0,0,1,.6-.6H14.9a.6.6,0,0,1,.6.6v6.554h6.554a.6.6,0,0,1,.6.6Z" />
                                                                                </g>
                                                                            </svg>
                                                                            <span class="desktop-show">
                                                                                Add file or drag and drop image here
                                                                            </span>
                                                                            <span class="mobile-show">
                                                                                Add file
                                                                            </span>
                                                                            <input type="file" name="" id="" class="drop-region-input" accept="image/*" multiple>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tfoot>
                                                    </fieldset>
                                                </table>


                                                <div class="desktop-show text-center">
                                                    <button title="Submit your request" class="home-consult-form__submit mt-4" id="js-desktop-last-home-consult-form-btn">submit your request
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="simple-block pb-md-5 desktop-show">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="simple-block__border pb-0 no-border">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="simple-block__heading">
                                            <h2 class="simple-block__heading--heading services-mobile-black-title text-center">
                                                In the area? Visit our showroom in person. It boasts 4,000 sf. of the latest innovations in the closet industry. You're sure to be wowed!</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="catalog-block services" id="js-show-mobile-catalog">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-lg-4 catalog-block__content">
                            <figure>
                                <div class="catalog-block__content--image">
                                    <img src="<?php echo SITEROOT; ?>images/ChoicesInHomeConsult.jpeg" alt="">
                                </div>
                                <figcaption>
                                    <h2>A Personalized Touch</h2>
                                    <p class="simple-test"> Choose from a variety of high end color finishes, textures and closet accessories that will personalize your space.</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-12 col-lg-4 catalog-block__content">
                            <figure>
                                <div class="catalog-block__content--image">
                                    <img src="<?php echo SITEROOT; ?>images/warrantyresized.png" alt="">
                                </div>
                                <figcaption>
                                    <h2>Limited Lifetime Warranty</h2>
                                    <p class="simple-test">
                                        Shop confidently knowing your purchase is backed by a Limited Lifetime Warranty.
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-12 col-lg-4 catalog-block__content">
                            <figure>
                                <div class="catalog-block__content--image">
                                    <img src="<?php echo SITEROOT; ?>images/ladysmiling.jpeg" alt="">
                                </div>
                                <figcaption>
                                    <h2>Showroom Design Center</h2>
                                    <p class="simple-test">
                                        Our impressive 4,000 sf showroom / design center is located in Tigard, OR and boasts the largest and latest innovations in the custom closet and LED industries!
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>


















        <section id="virtual-consult-form" class="virtual-consult-form pb-md-3 pt-md-5">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <fieldset>
                                <div class="virtual-consult-form__wrapper">
                                    <div class="virtual-consult-form__nav">
                                        <button title="1 Your Contact Info" class="virtual-consult-form__nav--button" id="js-desktop-first-virtual-consult-nav-btn" disabled>1 Contact Info
                                        </button>
                                        <button title="2 Your Project Info" class="virtual-consult-form__nav--button" id="js-desktop-second-virtual-consult-nav-btn" disabled>2 Your Info
                                        </button>
                                        <button title="3 Attach an Image" class="virtual-consult-form__nav--button" id="js-desktop-third-virtual-consult-nav-btn" disabled>3 Add Images/Files
                                        </button>
                                    </div>
                                    <div class="virtual-consult-form__content first-content" id="js-mobile-first-virtual-consult-form">
                                        <h4 class="virtual-consult-form__heading desktop-show text-center">Contact Info</h4>
                                        <div class="form-group text-fields">
                                            <label class="mobile-show virtual-consult-form__label " for="names">Enter your full name</label>
                                            <input type="text" name="names" placeholder="Enter your full name" class="virtual-consult-form__input mobile-no-margin" autocapitalize="off" autocomplete="off" spellcheck="false" autocorrect="off" />
                                        </div>
                                        <div class="form-group text-fields">
                                            <label class="mobile-show virtual-consult-form__label" for="email">E-mail:</label>
                                            <input type="text" name="email" placeholder="E-mail" class="virtual-consult-form__input" autocapitalize="off" autocomplete="off" spellcheck="false" autocorrect="off" />
                                        </div>
                                        <div class="form-group text-fields">
                                            <input type="text" name="address-1" placeholder="Address:" class="virtual-consult-form__input" autocapitalize="off" autocomplete="off" spellcheck="false" autocorrect="off" />
                                        </div>
                                        <div class="form-group text-fields">
                                            <input type="text" name="address-2" placeholder="Address 2:" class="virtual-consult-form__input" autocapitalize="off" autocomplete="off" spellcheck="false" autocorrect="off" />
                                        </div>
                                        <div class="virtual-consult-form__zip-code-block">
                                            <div class="form-group text-fields small-input">
                                                <input type="text" name="city" placeholder="City" class="virtual-consult-form__input" autocapitalize="off" autocomplete="off" spellcheck="false" autocorrect="off" />
                                            </div>
                                            <div class="virtual-consult-form__select small-input">
                                                <select name="states" id="">
                                                    <option value="State">Location:</option>
                                                    <option value="State 1">Oregon(Portland Metro)</option>
                                                    <option value="State 2">Washington(Southwest)</option>
                                                </select>
                                            </div>
                                            <div class="form-group text-fields small-input">
                                                <input type="text" name="zip-code" placeholder="ZIP Code:" class="virtual-consult-form__input" autocapitalize="off" autocomplete="off" spellcheck="false" autocorrect="off" />
                                            </div>
                                            <div class="form-group text-fields small-input">
                                                <input type="text" name="telephone-include-area-code" placeholder="Telephone Include area code" class="virtual-consult-form__input" autocapitalize="off" autocomplete="off" spellcheck="false" autocorrect="off" />
                                            </div>
                                        </div>
                                        <div class="virtual-consult-form__radio-block">
                                            <span>Mailing list:</span>
                                            <label class="desktop-show virtual-consult-form__radio">
                                                <input type="radio" name="r" value="1">
                                                <span>Yes</span>
                                            </label>
                                            <label class="desktop-show virtual-consult-form__radio">
                                                <input type="radio" name="r" value="2">
                                                <span>No</span>
                                            </label>
                                            <input type="checkbox" name="r" value="2" class="mobile-show virtual-consult-form__switcher" checked>
                                        </div>
                                        <div class="desktop-show text-center">
                                            <button title="Next" class="virtual-consult-form__submit mt-4" id="js-desktop-second-virtual-consult-form-btn">Next
                                            </button>
                                        </div>
                                    </div>
                                    <div class="virtual-consult-form__content second-content" id="js-mobile-second-virtual-consult-form">
                                        <h4 class="virtual-consult-form__heading text-center desktop-show">Project Info</h4>
                                        <div class="form-group datapicker-block">
                                            <label for="virtual-consult__modal-datepicker" class="control-label datapicker-block__label">Proposed Finish Date</label>
                                            <!--FOR DATEPICKER TO BE PROPERLY STYLE WE HAVE TO HEAVE '.datapicker-block' ON THE <BODY>-->
                                            <input type="text" name="date" placeholder="Proposed Finish Date" id="virtual-consult__modal-datepicker" class="form-control virtual-consult-form__input date-pikcer" data-provide="datepicker" data-date-autoclose="true" data-date-week-start="1" data-date-focusOnShow="false" data-date-ignoreReadonly="true" readonly="readonly" />
                                            <span class="datapicker-block__image"><img src="<?php echo SITEROOT; ?>images/CAlendar.svg" alt=""></span>
                                        </div>
                                        <h4 class="virtual-consult-form__heading bordered-heading">
                                            Storage Areas <span>Which type of storage area are you interested in?</span>
                                        </h4>
                                        <div class="virtual-consult-form__checkbox-block">
                                            <div class="form-group">
                                                <input class="custom-checkbox" id="checkbox-1" type="checkbox" value="value1">
                                                <label for="checkbox-1">Pantry</label>
                                            </div>
                                            <div class="form-group">
                                                <input class="custom-checkbox" id="checkbox-2" type="checkbox" value="value2">
                                                <label for="checkbox-2">Nursery</label>
                                            </div>
                                            <div class="form-group">
                                                <input class="custom-checkbox" id="checkbox-3" type="checkbox" value="value3">
                                                <label for="checkbox-3">Wallbed</label>
                                            </div>

                                            <div class="form-group">
                                                <input class="custom-checkbox" id="checkbox-6" type="checkbox" value="value6">
                                                <label for="checkbox-6">Guest</label>
                                            </div>
                                            <div class="form-group">
                                                <input class="custom-checkbox" id="checkbox-7" type="checkbox" value="value7">
                                                <label for="checkbox-7">Office</label>
                                            </div>
                                            <div class="form-group">
                                                <input class="custom-checkbox" id="checkbox-8" type="checkbox" value="value8">
                                                <label for="checkbox-8">Garage</label>
                                            </div>

                                            <div class="form-group">
                                                <input class="custom-checkbox" id="checkbox-9" type="checkbox" value="value9">
                                                <label for="checkbox-9">Home Office</label>
                                            </div>
                                            <div class="form-group">
                                                <input class="custom-checkbox" id="checkbox-9" type="checkbox" value="value9">
                                                <label for="checkbox-9">Laundry</label>
                                            </div>
                                            <div class="form-group">
                                                <input class="custom-checkbox" id="checkbox-9" type="checkbox" value="value9">
                                                <label for="checkbox-9">Reach In</label>
                                            </div>
                                            <div class="form-group">
                                                <input class="custom-checkbox" id="checkbox-9" type="checkbox" value="value9">
                                                <label for="checkbox-9">Walk In</label>
                                            </div>
                                            <div class="form-group">
                                                <input class="custom-checkbox" id="checkbox-9" type="checkbox" value="value9">
                                                <label for="checkbox-9">Wine Storage</label>
                                            </div>
                                            <div class="form-group">
                                                <input class="custom-checkbox" id="checkbox-9" type="checkbox" value="value9">
                                                <label for="checkbox-9">Craft Storage</label>
                                            </div>
                                            <div class="form-group">
                                                <input class="custom-checkbox" id="checkbox-9" type="checkbox" value="value9">
                                                <label for="checkbox-9">Master</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="mobile-show virtual-consult-form__label textarea-label" for="virtual-consult-form__textarea">Comments <span>Is there any additional information we might need?</span></label>
                                            <textarea name="massage" id="virtual-consult-form__textarea" cols="30" rows="4" class="virtual-consult-form__textarea" placeholder="Comments: Is there any additional information we might need?"></textarea>
                                        </div>
                                        <div class="virtual-consult-form__select">
                                            <select name="states" id="">
                                                <option value="How did you hear about us?">How did you hear about us?</option>
                                                <option value="Option 1">Referral</option>
                                                <option value="Option 2">Internet Search</option>
                                                <option value="Option 3">Social Media</option>
                                                <option value="Option 4">Magazine Advertisement</option>
                                            </select>
                                        </div>
                                        <div class="desktop-show text-center">
                                            <button title="Next" class="virtual-consult-form__submit mt-4" id="js-desktop-third-virtual-consult-form-btn">Next
                                            </button>
                                        </div>
                                    </div>
                                    <div class="virtual-consult-form__content third-content" id="js-mobile-third-virtual-consult-form">
                                        <h4 class="virtual-consult-form__heading text-center desktop-show">Add Images / Files</h4>

                                        <p class="heading">Fax images / files to: 503.639.7068 </p>
                                        <div id="file_uploads_container">
                                            <h2>To Add images / files below: ADD files then START upload.</h2>
                                            <br /><br />
                                            <div id="uploader">
                                                <p>Your browser doesn't have Flash, Silverlight or HTML5 support.</p>

                                                <table class="virtual-consult-form__image-area">
                                                    <fieldset>
                                                        <thead>
                                                            <tr>
                                                                <th class="image-name"></th>
                                                                <th class="image-name bigger-col">Filename</th>
                                                                <th class="image-size">Size</th>
                                                                <th class="success-or-error">Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="image-preview">
                                                            <tr>
                                                                <td class="mobile-button-delete-wrap">
                                                                    <button title="Delete" class="mobile-button-delete js-delete-uploaded-img" data-image-name="example.jpg" data-toggle="modal" data-target="#deleteImgModal"></button>
                                                                </td>
                                                                <td class="mobile-image-icon"><span class="mobile-image-container" style="background: #7D9BC2;">jpg</span>
                                                                </td>
                                                                <td class="image-name example.jpg">example.jpg</td>
                                                                <td class="image-size">30 kb</td>
                                                                <td class="success-or-error">
                                                                    <img src="<?php echo SITEROOT; ?>images/checked.svg" alt="">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="mobile-button-delete-wrap">
                                                                    <button title="Delete" class="mobile-button-delete js-delete-uploaded-img" data-image-name="example.jpg" data-toggle="modal" data-target="#deleteImgModal"></button>
                                                                </td>
                                                                <td class="mobile-image-icon"><span class="mobile-image-container" style="background: #7D9BC2;">jpg</span>
                                                                </td>
                                                                <td class="image-name example1.jpg">example1.jpg</td>
                                                                <td class="image-size">124 kb</td>
                                                                <td class="success-or-error">
                                                                    <img src="<?php echo SITEROOT; ?>images/cancel.svg" alt="">
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <td colspan="4">
                                                                    <div class="drop-region">
                                                                        <div class="drop-message">
                                                                            <svg id="add" xmlns="http://www.w3.org/2000/svg" width="28.6" height="28.6" viewBox="0 0 28.6 28.6">
                                                                                <g id="Group_376" data-name="Group 376">
                                                                                    <path fill="#384765" id="Path_195" data-name="Path 195" d="M14.3,0A14.3,14.3,0,1,0,28.6,14.3,14.316,14.316,0,0,0,14.3,0Zm8.342,14.9a.6.6,0,0,1-.6.6H15.491v6.554a.6.6,0,0,1-.6.6H13.7a.6.6,0,0,1-.6-.6V15.491H6.554a.6.6,0,0,1-.6-.6V13.7a.6.6,0,0,1,.6-.6h6.554V6.554a.6.6,0,0,1,.6-.6H14.9a.6.6,0,0,1,.6.6v6.554h6.554a.6.6,0,0,1,.6.6Z" />
                                                                                </g>
                                                                            </svg>
                                                                            <span class="desktop-show">
                                                                                Add file or drag and drop image here
                                                                            </span>
                                                                            <span class="mobile-show">
                                                                                Add file
                                                                            </span>
                                                                            <input type="file" name="" id="" class="drop-region-input" accept="image/*" multiple>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tfoot>
                                                    </fieldset>
                                                </table>


                                                <div class="desktop-show text-center">
                                                    <button title="Submit your request" class="virtual-consult-form__submit mt-4" id="js-desktop-last-virtual-consult-form-btn">submit your request
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="simple-block pb-md-5 desktop-show">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="simple-block__border pb-0 no-border">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="simple-block__heading">
                                            <h2 class="simple-block__heading--heading services-mobile-black-title text-center">
                                                In the area? Visit our showroom in person. It boasts 4,000 sf. of the latest innovations in the closet industry. You're sure to be wowed!</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="catalog-block services" id="js-show-mobile-catalog">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-lg-4 catalog-block__content">
                            <figure>
                                <div class="catalog-block__content--image">
                                    <img src="<?php echo SITEROOT; ?>images/about-us-choices.png" alt="">
                                </div>
                                <figcaption>
                                    <h2>A Personalized Touch</h2>
                                    <p class="simple-test"> Choose from a variety of high end color finishes, textures and closet accessories that will personalize your space.</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-12 col-lg-4 catalog-block__content">
                            <figure>
                                <div class="catalog-block__content--image">
                                    <img src="<?php echo SITEROOT; ?>images/about-us-lifetime.png" alt="">
                                </div>
                                <figcaption>
                                    <h2>Limited Lifetime Warranty</h2>
                                    <p class="simple-test">
                                        Shop confidently knowing your purchase is backed by a Limited Lifetime Warranty.
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-12 col-lg-4 catalog-block__content">
                            <figure>
                                <div class="catalog-block__content--image">
                                    <img src="<?php echo SITEROOT; ?>images/about-us-showrom.png" alt="">
                                </div>
                                <figcaption>
                                    <h2>Showroom Design Center</h2>
                                    <p class="simple-test">
                                        Our impressive 4,000 sf showroom / design center is located in Tigard, OR and boasts the largest and latest innovations in the custom closet and LED industries!
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>














    </main>

    <?php
    require_once($real_root . '/pages/views/virtual-assistant.php');
    require_once($real_root . '/pages/views/mobile-show-footer-buttons.php');
    require_once($real_root . '/pages/views/footer.php');
    require_once($real_root . '/pages/views/modal-perfect-fit-guarantee.php');
    require_once($real_root . '/pages/views/modal-free-shipping.php');
    require_once($real_root . '/pages/views/modal-save-to-idea-folder.php');
    ?>




    <!-- Modal mobile first part of form -->
    <div class="modal free-in-home-consults-modal" id="mobile-first-home-consult-form" tabindex="-1" role="dialog" aria-labelledby="mobile-first-home-consult-form-title" aria-hidden="true" data-replace="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header fixed-modal-header">
                    <h5 class="modal-title free-in-home-consults-modal__heading" id="mobile-first-home-consult-form-title">
                        <span class="current-form">1/3</span>
                        <span class="js-heading"></span>
                    </h5>
                    <button title="Close" type="button" class="close free-in-home-consults-modal-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- <form action="">

						</form> -->
                </div>

                <div class="modal-footer fixed-modal-footer">
                    <div class="current-form-block">
                        <span class="current-form-block__elements active">1</span>
                        <span class="current-form-block__elements">2</span>
                        <span class="current-form-block__elements">3</span>
                    </div>
                    <button title="Next" type="button" class="fixed-modal-footer__botton" data-dismiss="modal" data-toggle="modal" data-target="#mobile-second-home-consult-form" id="js-mobile-second-home-consult-form-btn">
                        Next
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
                                <path id="left-arrow_3_" data-name="left-arrow(3)" d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z" transform="translate(0.001 -4.676)"></path>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal mobile second part of form -->
    <div class="modal free-in-home-consults-modal" id="mobile-second-home-consult-form" tabindex="-1" role="dialog" aria-labelledby="mobile-second-home-consult-form-title" aria-hidden="true" data-replace="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header fixed-modal-header">
                    <h5 class="modal-title free-in-home-consults-modal__heading" id="mobile-second-home-consult-form-title">
                        <span class="current-form">2/3</span>
                        <span class="js-heading"></span>
                    </h5>
                    <button title="Close" type="button" class="close free-in-home-consults-modal-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- <form action="">

						</form> -->
                </div>

                <div class="modal-footer fixed-modal-footer">
                    <div class="current-form-block">
                        <button title="1" type="button" class="current-form-block__elements" data-dismiss="modal" data-toggle="modal" data-target="#mobile-first-home-consult-form" id="js-mobile-modal-first-home-consult-form-btn">
                            1
                        </button>
                        <span class="current-form-block__elements active">2</span>
                        <span class="current-form-block__elements">3</span>
                    </div>
                    <button title="Next" type="button" class="fixed-modal-footer__botton" data-dismiss="modal" data-toggle="modal" data-target="#mobile-third-home-consult-form" id="js-mobile-third-home-consult-form-btn">
                        Next
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
                                <path id="left-arrow_3_" data-name="left-arrow(3)" d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z" transform="translate(0.001 -4.676)"></path>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal mobile third part of form -->
    <div class="modal free-in-home-consults-modal" id="mobile-third-home-consult-form" tabindex="-1" role="dialog" aria-labelledby="mobile-third-home-consult-form-title" aria-hidden="true" data-replace="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header fixed-modal-header">
                    <h5 class="modal-title free-in-home-consults-modal__heading" id="mobile-third-home-consult-form-title">
                        <span class="current-form">3/3</span>
                        <span class="js-heading"></span>
                    </h5>
                    <button title="Close" type="button" class="close free-in-home-consults-modal-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- <form action="">

						</form> -->
                </div>

                <div class="modal-footer fixed-modal-footer">
                    <div class="current-form-block">
                        <button type="button" class="current-form-block__elements" data-dismiss="modal" data-toggle="modal" data-target="#mobile-first-home-consult-form" id="js-mobile-modal-first-home-consult-form-btn">
                            1
                        </button>
                        <button title="2" type="button" class="current-form-block__elements" data-dismiss="modal" data-toggle="modal" data-target="#mobile-second-home-consult-form" id="js-mobile-modal-second-home-consult-form-btn">
                            2
                        </button>
                        <span class="current-form-block__elements active">3</span>
                    </div>
                    <button title="Submit your request" type="button" class="fixed-modal-footer__botton--submit" data-dismiss="modal" id="js-mobile-home-consult-form-submit-btn">
                        Submit your reqest
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal delete -->
    <div class="modal confirm-modal fade" id="deleteImgModal" tabindex="-1" role="dialog" aria-labelledby="#deleteImgModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title" id="deleteImgModalTitle"><span>XXXX</span></p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="account-block__form">
                        <!-- <form> -->
                        <div class="mb-3">

                            <p class="js-delete-text">You are about to delete <span style="color: #17C3C6">XXXX</span>.<br /> Are you sure that you want to continue?
                            </p>
                            <div class="d-flex align-content-center justify-content-between">
                                <button title="Cancel" type="submit" data-dismiss="modal" class="btn btn-primary mr-2">cancel
                                </button>
                                <button title="Continue" type="submit" data-dismiss="modal" class="btn btn-secondary js-delete-uploaded-img-btn ml-2">continue
                                </button>
                            </div>
                        </div>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
















    <div class="modal free-in-virtual-consults-modal" id="mobile-first-virtual-consult-form" tabindex="-1" role="dialog" aria-labelledby="mobile-first-virtual-consult-form-title" aria-hidden="true" data-replace="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header fixed-modal-header">
                    <h5 class="modal-title free-in-virtual-consults-modal__heading" id="mobile-first-virtual-consult-form-title">
                        <span class="current-form">1/3</span>
                        <span class="js-heading"></span>
                    </h5>
                    <button title="Close" type="button" class="close free-in-virtual-consults-modal-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- <form action="">

						</form> -->
                </div>

                <div class="modal-footer fixed-modal-footer">
                    <div class="current-form-block">
                        <span class="current-form-block__elements active">1</span>
                        <span class="current-form-block__elements">2</span>
                        <span class="current-form-block__elements">3</span>
                    </div>
                    <button title="Next" type="button" class="fixed-modal-footer__botton" data-dismiss="modal" data-toggle="modal" data-target="#mobile-second-virtual-consult-form" id="js-mobile-second-home-consult-form-btn">
                        Next
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
                                <path id="left-arrow_3_" data-name="left-arrow(3)" d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z" transform="translate(0.001 -4.676)"></path>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal mobile second part of form -->
    <div class="modal free-in-virtual-consults-modal" id="mobile-second-virtual-consult-form" tabindex="-1" role="dialog" aria-labelledby="mobile-second-virtual-consult-form-title" aria-hidden="true" data-replace="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header fixed-modal-header">
                    <h5 class="modal-title free-in-virtual-consults-modal__heading" id="mobile-second-virtual-consult-form-title">
                        <span class="current-form">2/3</span>
                        <span class="js-heading"></span>
                    </h5>
                    <button title="Close" type="button" class="close free-in-virtual-consults-modal-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- <form action="">

						</form> -->
                </div>

                <div class="modal-footer fixed-modal-footer">
                    <div class="current-form-block">
                        <button title="1" type="button" class="current-form-block__elements" data-dismiss="modal" data-toggle="modal" data-target="#mobile-first-virtual-consult-form" id="js-mobile-modal-first-home-consult-form-btn">
                            1
                        </button>
                        <span class="current-form-block__elements active">2</span>
                        <span class="current-form-block__elements">3</span>
                    </div>
                    <button title="Next" type="button" class="fixed-modal-footer__botton" data-dismiss="modal" data-toggle="modal" data-target="#mobile-third-virtual-consult-form" id="js-mobile-third-home-consult-form-btn">
                        Next
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
                                <path id="left-arrow_3_" data-name="left-arrow(3)" d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z" transform="translate(0.001 -4.676)"></path>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal mobile third part of form -->
    <div class="modal free-in-virtual-consults-modal" id="mobile-third-virtual-consult-form" tabindex="-1" role="dialog" aria-labelledby="mobile-third-virtual-consult-form-title" aria-hidden="true" data-replace="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header fixed-modal-header">
                    <h5 class="modal-title free-in-virtual-consults-modal__heading" id="mobile-third-virtual-consult-form-title">
                        <span class="current-form">3/3</span>
                        <span class="js-heading"></span>
                    </h5>
                    <button title="Close" type="button" class="close free-in-virtual-consults-modal-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- <form action="">

						</form> -->
                </div>

                <div class="modal-footer fixed-modal-footer">
                    <div class="current-form-block">
                        <button type="button" class="current-form-block__elements" data-dismiss="modal" data-toggle="modal" data-target="#mobile-first-virtual-consult-form" id="js-mobile-modal-first-home-consult-form-btn">
                            1
                        </button>
                        <button title="2" type="button" class="current-form-block__elements" data-dismiss="modal" data-toggle="modal" data-target="#mobile-second-virtual-consult-form" id="js-mobile-modal-second-home-consult-form-btn">
                            2
                        </button>
                        <span class="current-form-block__elements active">3</span>
                    </div>
                    <button title="Submit your request" type="button" class="fixed-modal-footer__botton--submit" data-dismiss="modal" id="js-mobile-virtual-consult-form-submit-btn">
                        Submit your reqest
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal delete -->
    <div class="modal confirm-modal fade" id="deleteImgModal" tabindex="-1" role="dialog" aria-labelledby="#deleteImgModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title" id="deleteImgModalTitle"><span>XXXX</span></p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="account-block__form">
                        <!-- <form> -->
                        <div class="mb-3">

                            <p class="js-delete-text">You are about to delete <span style="color: #17C3C6">XXXX</span>.<br /> Are you sure that you want to continue?
                            </p>
                            <div class="d-flex align-content-center justify-content-between">
                                <button title="Cancel" type="submit" data-dismiss="modal" class="btn btn-primary mr-2">cancel
                                </button>
                                <button title="Continue" type="submit" data-dismiss="modal" class="btn btn-secondary js-delete-uploaded-img-btn ml-2">continue
                                </button>
                            </div>
                        </div>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>












    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="<?php echo SITEROOT; ?>plupload-2.1.8/js/plupload.full.min.js"></script>
    <script src="<?php echo SITEROOT; ?>plupload-2.1.8/js/jquery.plupload.queue/jquery.plupload.queue.js"></script>
    <?php
    $temp_id = "'" . $_SESSION['temp_id'] . "'";
    ?>
    <script type="text/javascript">
        $(function() {

            // Setup html5 version
            $("#uploader").pluploadQueue({
                // General settings
                runtimes: 'html5,flash,silverlight,html4',
                url: '<?php echo SITEROOT; ?>plupload-2.1.8/otg/upload.php?temp_id=' + <?php echo $temp_id; ?>,
                chunk_size: '1mb',
                rename: true,
                dragdrop: true,
                filters: {
                    // Maximum file size
                    max_file_size: '10mb',
                    // Specify what files to browse for
                    mime_types: [{
                            title: "Image files",
                            extensions: "jpg,jpeg,gif,png,pdf"
                        },
                        {
                            title: "Zip files",
                            extensions: "zip"
                        }
                    ]
                },


                flash_swf_url: '<?php echo SITEROOT; ?>plupload-2.1.8/js/Moxie.swf',
                silverlight_xap_url: '<?php echo SITEROOT; ?>plupload-2.1.8/js/Moxie.xap'
            });

            var uploader = $('#uploader').pluploadQueue();

            uploader.bind('FileUploaded', function() {
                if (uploader.files.length == (uploader.total.uploaded + uploader.total.failed)) {
                    $("#submit_sendto").show();
                } else {
                    $("#submit_sendto").hide();
                }
            });

            uploader.bind('UploadProgress', function(up, file) {

                if (file.percent < 100 && file.percent >= 1) {
                    $("#submit_sendto").hide();
                } else {
                    //$("#submit_sendto").show();
                }
            });

        });
    </script>

    <script>
        $(document).ready(function() {
            alert("HHHHHHHHHH");


        });
    </script>


    <script src="<?php echo SITEROOT; ?>app.js"></script>
</body>

</html>