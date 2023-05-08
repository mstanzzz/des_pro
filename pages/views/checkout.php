<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
<title>ClosetsToGo</title>
<meta name="description" content="checkout"><link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet"></head>

<body class="clearfix product-detail idea-folder-popup">
<?php
require_once($real_root.'/pages/views/header.php');
?>
<main class="main clearfix main__payment-page main__checkout-page">

<section class="breadcrumb-block pb-3 desktop-show">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12">
		<div class="breadcrumb-block__wrapper" aria-label="breadcrumb">
			<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo SITEROOT; ?>" title="Home">Home</a></li>
			<li class="breadcrumb-item"><a href="<?php echo SITEROOT; ?>shopping-cart.html" title="Cart">Shopping Cart</a></li>
			<li class="breadcrumb-item active" aria-current="page">checkout</li>
			</ul>
		</div>
	</div>
</div>
</div>
</div>
</section>




<section class="section-checkout">
<div class="wrapper">
<div class="container-fluid">
<div class="row flex-lg-nowrap">
	<div class="col col-auto__custom">
		<div class="card card-checkout card-checkout__info">
			<div class="card-body">
				<!--SHOW THIS ON DESKTOP SCREEN-->
				<div class="card-body__steps card-el__hide-on-md">
				Step 1 of 3
				</div>
				<!-- #SHOW THIS ON DESKTOP SCREEN-->

				<!--SHOW THIS ON MOBILE SCREEN-->
				<div class="card-el__show-on-md mb-3">
					<p class="card-checkout__header card-checkout__header__on-md ">
					<span class="card-body__steps card-el__show-on-md">
					Step 1 of 3
					</span>
					<span>Shipping Information</span>
					</p>
				</div>
				<!-- #SHOW THIS ON MOBILE SCREEN-->

				<div class="row flex-column-reverse flex-lg-row">
					<div class="col-lg-7">
						<!-- SHOW THIS ON DESKTOP SCREEN-->
						<p class="card-checkout__header card-el__hide-on-md">
						<span>Shipping Information</span>
						</p>
						<!-- #SHOW THIS ON DESKTOP SCREEN-->

<div class="address-shipping mt-4">
	<div class="address-shipping__customer">
		<div class="form__chosen-address" data-role="toggle-el-target">
			<div class="form-group form-group__default">
				<div class="home-consult-form__radio-block">
					<fieldset>
					<label class="home-consult-form__radio">
					<input type="radio" name="r" value="1">
					<span class="form-group__default__label  address-shipping__info">
					<span class="name">Daniel Dimitrov</span>,<span class="tel"> +359 83404243</span>
					<br>
					<span class="d-block mt-2"></span>
					<span class="street">239 Blvd.Alexander Stamboliiski</span>
					<br>
					<span class="city">Sofia, Razsadnika, Bulgaria, 1309 </span>
					<span class="d-block mt-2 d-lg-inline mt-lg-0 is-default">Default</span>
					</span>
					</label>
					</fieldset>
					<!-- SHOW THIS ON DESKTOP SCREEN-->
					<div class="card-checkout__dropdown-wrap card-el__show-on-md">
						<div class="card-checkout__dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img src="<?php echo SITEROOT; ?>images/three-dots-vertical-icon_1.svg" alt="">
						</div>
						<div class="dropdown-menu dropdown-menu-right text-right">
							<button class="dropdown-item text-left btn__add-address" type="button" data-toggle="modal" data-target="#modal__add-address" title="Edit">
							Edit
							</button>
							<button class="dropdown-item text-left btn__add-address disabled" type="button" data-toggle="modal" data-target="#modal__add-address" title="Default">
							Default
							</button>
						</div>
					</div>
					<!-- #SHOW THIS ON DESKTOP SCREEN-->
				</div>
			</div>
			<div class="mt-2">
				<p class="cta cta__edit card-el__hide-on-md" data-role="toggle-el">Edit</p>
				<p class="cta cta__add  card-el__hide-on-md" data-role="toggle-el">+ Add new address</p>
				<p class="cta cta__add  card-el__show-on-md" type="button" data-toggle="modal" data-target="#modal__add-address">+ Add new address</p>
			</div>
		</div>
		<div class="form__add-new-address cd-none" data-role="toggle-el-target">
								
		<form action="<?php echo SITEROOT."checkout.html"; ?>" method="post">
		<input type="hidden" name="add_address" value="1">
		<fieldset>
		<div class="home-consult-form__wrapper pb-2">
			<div class="form-row">
				<div class="col">
					<div class="form-group">
						<label class="label-above" for="customer-new__name_collapsed">First Name:</label>
						<input id="customer-new__name_collapsed" type="text" name="first_name" placeholder="John" class="home-consult-form__input"/>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label class="label-above" for="customer-new__name-last">Last Name:</label>
						<input id="customer-new__name-last_collapsed" type="text" name="last_name" placeholder="Doe" class="home-consult-form__input"/>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label class="label-above" for="customer-new__address_line-1">
						<span>Shipping Address Line One:</span>
						<span class="label-above__label">We cannot ship to a P.O. box</span>
						</label>
						<input id="customer-new__address_line-1_collapsed" type="text" name="address_1" placeholder="" class="home-consult-form__input"/>
					</div>
					<div class="form-group">
						<label class="label-above" for="customer-new__address_line-2">
						<span>Shipping Address Line Two:</span>
						<span class="label-above__label">We cannot ship to a P.O. box</span>
						</label>
						<input id="customer-new__address_line-2_collapsed" type="text" name="address_2" placeholder="" class="home-consult-form__input"/>
												</div>
											</div>
										</div>
										<div class="form-row">
											<div class="col">
												<div class="form-group">
													<label class="label-above"
													for="customer-new__city_collapsed">City:</label>
													<input id="customer-new__city_collapsed"
													type="text" name="email"
													placeholder=""
													class="home-consult-form__input"/>
												</div>
											</div>
											<div class="col">
												<div class="form-group">
													<label class="label-above" for="customer-new__state_collapsed">State:</label>
													<div class="home-consult-form__select ">
														<select name="state" id="customer-new__state_collapsed">
														<?php
														$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
														$sql = "SELECT state, state_abr
																FROM states
																WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
														$result = $dbCustom->getResult($db,$sql);
														while($row = $result->fetch_object()){
															echo "<option value='".$row->state_abr."'>".$row->state."</option>";
														}
														?>		
														</select>
													</div>
												</div>
											</div>
											<div class="col">
												<div class="form-group">
													<label class="label-above" for="customer-new__zip_collapsed">Zip:</label>
													<input id="customer-new__zip_collapsed"
													type="number" name="zip"
													placeholder="90017"
													class="home-consult-form__input"/>
												</div>
											</div>
											<div class="col">
												<div class="form-group">
													<label class="label-above" for="customer-new__state_collapsed">Country:</label>
													<div class="home-consult-form__select ">
													
													<select name="country" id="customer-new__country_collapsed">
													<?php	
													$sql = "SELECT country, country_abr
																FROM countries
																WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
														$result = $dbCustom->getResult($db,$sql);
														while($row = $result->fetch_object()){
															echo "<option value='".$row->country_abr."'>".$row->country."</option>";
														}
														?>		
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="col">
											<div class="form-group">
												<label class="label-above" for="customer-new__email_collapsed">Email Address:</label>
													<input id="customer-new__email_collapsed" type="email" name="email" placeholder="" class="home-consult-form__input"/>
											</div>
										</div>
										<div class="col">
											<div class="form-group">
												<label class="label-above" for="customer-new__phone">Phone Number:</label>
												<input id="customer-new__phone_collapsed" type="number" name="phone number" placeholder="" class="home-consult-form__input"/>
											</div>
										</div>
									</div>
									<div class="mb-3">
										<input class="checkbox__ch-card__checkbox selectable" id="checkbox-product-1_collapsed" type="checkbox" value="value2">
										<label class="label-above full" for="checkbox-product-1_collapsed">Set as default</label>
									</div>
									<div>
										<button title="Confirm" class="btn btn-secondary form__add-new-address__btn-form">
										confirm
										</button>
										<div class="btn btn-light form__add-new-address__btn-form" data-role="toggle-el" title="Cancel">cancel</div>
									</div>
								</div>
								</fieldset>
								</form>
							</div>
						</div>
						<div class="address-edit"> </div>
					</div>
				</div>

				<div class="col-lg-5">
					<p class="card-checkout__header">My addresses</p>
					<div class="address-shipping form__add-new-address">
						<div class="address-shipping__customer">
							<div class="row">
								<div class="col">
									<div class="form-group">
										<p class="label-above">Choose one:</p>
										<div class="select-custom" data-select="select-option__customer-address">
											<div class="select-custom__box hover__rotate-angle">
												<div class="home-consult-form__select__selected ">
													<div data-select="select-option__customer-address" class="selected-option"></div>
														<div class="angle"></div>
													</div>
													<ul class="select-custom__list" data-select="selected-list">
													<li>
													<div data-select="select-option__customer-address"
													class="select-option select-custom__option selected default">
													<div class="select-custom__option__wrap">
													<p class="select-custom__option__text">
													239 Blvd.Alexander
													Stamboliiski Sofia,
													Razsadnika,
													Bulgaria, 1309</p>
													<p data-check="set-default"
													class="select-custom__option__set-default set-default">
													Default</p>
													</div>
													</div>
													</li>
													<li>
													<div data-select="select-option__customer-address"
													class="select-option select-custom__option">
													<div class="select-custom__option__wrap">
													<p class="select-custom__option__text">
													stra6na gupost to4ka
													tsom</p>
													<p data-check="set-default"
													class="select-custom__option__set-default set-default">
													Default</p>
													</div>
													</div>
													</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="card card-checkout card-checkout__info">
			<div class="card-body">
				<div class="card-body__steps card-el__hide-on-md">Step 2 of 3</div>
					<div class="row">
						<div class="col-lg-5">
							<p class="card-checkout__header card-el__hide-on-md">Payment Methods</p>
							<!--SHOW THIS ON MOBILE SCREEN-->
							<div class="card-el__show-on-md mb-4">
								<p class="card-checkout__header card-checkout__header__on-md ">
								<span class="card-body__steps card-el__show-on-md">
								Step 2 of 3
								</span>
								<span>Payment methods</span>
								</p>
							</div>
							<!-- #SHOW THIS ON MOBILE SCREEN-->
							<div class="radio-image">
							<fieldset>
							<ul class="d-flex align-items-center justify-content-start">
							<li>
							<label class="pay__method-wrap">
							<input type="radio" name="pay__method" value="visa"
							checked>
							<img src="<?php echo SITEROOT; ?>images/footer-visa.png"
							class="img img-fluid" alt=""/>
							</label>
							</li>
							<li>
							<label class="pay__method-wrap">
							<input type="radio" name="pay__method"
							value="masterCard">
							<img src="<?php echo SITEROOT; ?>images/footer-masterCard.png"
							class="img img-fluid" alt=""/>
							</label>
							</li>
							<li>
							<label class="pay__method-wrap">
							<input type="radio" name="pay__method" value="paypal">
							<img src="<?php echo SITEROOT; ?>images/footer-paypal.png"
							class="img img-fluid" alt=""/>
							</label>
							</li>
							<li>
							<label class="pay__method-wrap">
							<input type="radio" name="pay__method"
							value="american-express">
							<img src="<?php echo SITEROOT; ?>images/footer-american-express.png"
							class="img img-fluid" alt=""/>
							</label>
							</li>
							</ul>
							</fieldset>
						</div>
					</div>
					<div class="col-lg-3">
						<!--SHOW THIS ON DESKTOP SCREEN-->
						<p class="card-el__hide-on-md card-checkout__header text-center btn-load-page" data-target="#modal__title">or use</p>
						<!-- #SHOW THIS ON DESKTOP SCREEN-->
						<div class="form__add-new-address">
							<div class="">
								<div class="row">
									<div class="col">
										<div class="iframe-wrap btn-load-page"= data-toggle="modal" data-target="#modal__Iframe" data-src="https://enerbank.com/">
											<img src="<?php echo SITEROOT; ?>images/enterbank.png" class="img-fluid" alt="" title="Open Ener Bank USA">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 border-top__md border__gray mt-4 mt-lg-0">
						<p class="card-checkout__header card-checkout__header__border-top">Saved cards (4)</p>
						<div class="address-shipping form__add-new-address">
							<div class="">
								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<p class="label-above">Choose one:</p>
											<div class="select-custom" data-select="select-option__customer-address_2">
												<div class="select-custom__box hover__rotate-angle">
													<div class="home-consult-form__select__selected ">
														<div data-select="select-option__customer-address_2" class="selected-option"></div>
														<div class="angle"></div>
													</div>
													<ul class="select-custom__list" data-select="selected-list">
													<li>
													<div data-select="select-option__customer-address_2"
													class="select-option select-custom__option  selected default">
														<div class="select-custom__option__wrap">
															<div class="select-custom__img-wrap">
																<img src="<?php echo SITEROOT; ?>images/visa.svg" class="img-fluid" alt="">
															</div>
															<p class="select-custom__option__text">
																XXXX XXXX XXXX 1234
															</p>
															<p data-check="set-default" class="select-custom__option__set-default set-default">Default</p>
													</div>
													</div>
													</li>
													<li>
													<div data-select="select-option__customer-address_2"
													class="select-option select-custom__option ">
													<div class="select-custom__option__wrap">
													<div class="select-custom__img-wrap">
													<img src="<?php echo SITEROOT; ?>images/master.svg"
													class="img-fluid"
													alt="">
													</div>
													<p class="select-custom__option__text">
													XXXX XXXX XXXX 1234</p>
													<p data-check="set-default"
													class="select-custom__option__set-default set-default">
													Default</p>
													</div>
													</div>
													</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

		<div class="row">
			<div class="col-lg-4 col-md__max-366">
				<div class="pay-card__wrap">
					<fieldset>
					<div class="pay-card">
						<label for="js-pay-card-number" class="pay-card__title">
						Card number
						</label>
						<div class="pay-card__card-number">
							<input id="js-pay-card-number"
							class="pay-card__card-number__input js-pay-card-number"
							placeholder="0000 0000 0000 0000" type="text"
							maxlength="19" name="pay-card-number"/>
						</div>
						<div class="row mt-4">
							<div class="col-6">
								<label for="pay-card-name" class="pay-card__title">
								Card holder
								</label>
								<div class="pay-card__card-number">
									<input class="pay-card__card-number__input input-name"
									id="pay-card-name" placeholder="Name here"
									type="text" minlength="2"/>
								</div>
							</div>

							<div class="col-6">
								<label for="js-pay-card-date-1" class="pay-card__title">
								Expires
								</label>
								<div class="pay-card__card-number input-dates">
									<input id="js-pay-card-date-1"
									class="pay-card__card-number__input input-dates__item js-pay-card-date"
									placeholder="MM/YY"
									pattern="^\d+(\/\d+)*$" type="text"
									maxlength="5"/>
								</div>
							</div>
						</div>
					</div>
					</fieldset>
				</div>
			</div>
			<div class="col-lg-4 col-md__max-366">
				<div class="pay-card__wrap pay-card__wrap__cv">
					<div class="pay-card">
						<div class="pay-card__card-number__background">
						</div>
						<div class="row mt-4">
							<div class="col-9">

							</div>
							<fieldset>
							<div class="col-3">
								<label for="js-pay-card-cv" class="pay-card__title">
								CV
								</label>
								<div class="pay-card__card-number input-dates">
									<input id="js-pay-card-cv"
									class="pay-card__card-number__input input-dates__item js-pay-card-cv"
									placeholder="000" pattern="\d*" type="text"
									maxlength="3"/>
								</div>
							</div>
							</fieldset>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row checkout-billing-form-row">
			<div class="col-12 col-lg-10">
				<div class="row row-mobile-padding-05">
					<fieldset>
					<div class="col-12">
						<p class="card-checkout__header card-checkout__header__border-top mt-4 mb-3">Billing Information</p>
					</div>
					<div class="col-12">
						<div class="form-group">
							<label class="label-above required" for="name">First & Last Name: <span>*</span></label>
							<input type="text" name="name" placeholder="First & Last Name" class="home-consult-form__input">
						</div>
					</div>
					<div class="col-12">
						<div class="form-group">
							<label class="label-above required required-address" for="address">Street Address: <span>*</span></label>
							<input type="text" name="address" placeholder="Street Address" class="home-consult-form__input">
						</div>
					</div>
					<div class="col-12">
						<div class="row">
							<div class="col-12 col-lg-6">
								<div class="form-group">
									<label class="label-above required" for="customer-new__state_collapsed">City: <span>*</span></label>
									<div class="home-consult-form__select ">
										<select name="states">
										<option value="City">
										City
										</option>
										<option value="City 1">
										City 1
										</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-6">
								<div class="form-group">
									<label class="label-above required" for="customer-new__state_collapsed">State/province:<span>*</span></label>
									<div class="home-consult-form__select ">
										<select name="states">
										<option value="State">
										State
										</option>
										<option value="State 1">
										State 1
										</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-6">
								<div class="form-group">
									<label class="label-above required" for="customer-new__state_collapsed">Country: <span>*</span></label>
									<div class="home-consult-form__select ">
										<select name="Country">
										<option value="country">
										Country
										</option>
										<option value="country 1">
										Country 1
										</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-6">
								<div class="form-group">
									<label class="label-above required" for="customer-new__zip_collapsed">Zip: <span>*</span></label>
									<input id="customer-new__zip_collapsed" type="number" name="zip" placeholder="90017" class="home-consult-form__input">
								</div>
							</div>
						</div>
					</div>
					</fieldset>
				</div>
			</div>
		</div>
		<div class="row align-items-center border-top__md border__none mt-2 pt-20 pt-md-0">
			<div class="col-auto mx-auto pt-mb-2 mx-md-0 mb-3 mb-md-0">
				<fieldset>
				<div class=" checkbox">
					<input class="checkbox__ch-card__checkbox selectable"
					id="checkbox__save-card"
					type="checkbox"
					value="value2">
					<label class="label-above full fs-md-16px mb-3 mb-md-down-0"
					for="checkbox__save-card">
					Save this card
					</label>
				</div>
				</fieldset>
			</div>
			<div class="col-12 col-md-4">
				<button title="Confirm" class="btn btn-primary btn-full">
				confirm
				</button>
			</div>
		</div>
	</div>
</div>




<div class="card card-checkout card-checkout__info">
	<div class="card-body pb-0">
		
	<!--SHOW THIS ON DESKTOP SCREEN-->
		<div class="card-body__steps  card-el__hide-on-md">Step 3 of 3</div>
			<p class="card-checkout__header mb-0  card-el__hide-on-md">Order Review</p>
			<!--#SHOW THIS ON DESKTOP SCREEN-->

			<!--SHOW THIS ON MOBILE SCREEN-->
			<div class="card-el__show-on-md mb-4">
				<p class="card-checkout__header card-checkout__header__on-md ">
				<span class="card-body__steps card-el__show-on-md">
				Step 3 of 3
				</span>
				<span>Order Review</span>
				</p>
				</div>
				<!-- #SHOW THIS ON MOBILE SCREEN-->
			</div>


<?php
$sub_total = 0;
$discount = 0;
$tax = 0;

//if(1){

foreach($cart_contents as $key=>$val){
$bg_class = ($key % 2 == 0)? '' : 'you-design__mark';

?>

<!--PRODUCT ITEM-->
<div class="card card-checkout <?php echo $bg_class; ?>"  >
	<div class="card-checkout__remove-item">
		<button title="Close" class="p-0">
		<img class="img-fluid" src="<?php echo SITEROOT; ?>images/icon-close.svg" alt="close">
		</button>
	</div>
	<div class="card-body d-flex align-items-center">
		<div class="card-checkout__product__image mr-3">
			<!--SHOW YOU DESIGN ON TOP OF THE IMAGE ON MOBILE-->
			<span class="card-checkout__product__badge badge__u-design card-el__show-on-md">you design</span>
			<!--SHOW YOU DESIGN ON TOP OF THE IMAGE ON MOBILE-->
			<div class="img-wrap">

				<?php 
				$img = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/".$val['image_file'];
				?>
				<img src="<?php echo $img; ?>" class="img-fluid" alt="<?php echo $val['name']; ?>">

		</div>
	</div>
	<div class="card-checkout__product">
		<div class="card-checkout__product__badges ">
			<!--HIDE YOU DESIGN ON MOBILE-->
			<span class="card-checkout__product__badge badge__u-design card-el__hide-on-md">you design</span>
			<!-- #HIDE YOU DESIGN ON MOBILE-->
		</div>
		<div class="row align-items-end align-items-lg-center ">
			<div class="col card-checkout__product__title-wrap">
				<p class="card-checkout__product__title"><?php echo $val['name']; ?></p>
				<p class="card-checkout__product__number">Product Id: <?php echo $val['item_id']; ?></p>
			</div>
			<!--SHOW THIS ON MOBILE SCREEN-->
			<div class="col-auto card-el__show-on-md">
				<p class="card-checkout__product__label">
				<span class="card-el__hide-on-md">Price:</span>
				<span class="card-checkout__product__label-value mark-color">$<?php echo $val['price']; ?></span>
				</p>
			</div>
			<!--#SHOW THIS ON MOBILE SCREEN-->
		</div>
		<!--SHOW THIS ON DESKTOP SCREEN-->
		<p class="card-checkout__product__description card-el__hide-on-md">
		<?php echo $val['short_description']; ?>		
		</p>
		<!--#SHOW THIS ON DESKTOP SCREEN-->
		<div class="d-flex align-items-center justify-content-end justify-content-lg-between mt-2 mt-md-0">
			<!--SHOW THIS ON DESKTOP SCREEN-->
			<div class="card-el__hide-on-md">
				<p class="card-checkout__product__label">
				<span>Unit Price:</span> <span class="card-checkout__product__label-value">$<?php echo $val['price']; ?></span>
				</p>
			</div>
			<!--#SHOW THIS ON DESKTOP SCREEN-->
			<div class="card-checkout__product__label__buttons__wrap">
				<!--SHOW THIS ON DESKTOP SCREEN-->
				<fieldset>
				<p class="card-checkout__product__label card-el__hide-on-md">
				<label for="checkbox-quantity-2">Quantity: </label>
				<span class="input-wrap">
				<span class="input-wrap__quantity-mark">x</span>
				<input id="checkbox-quantity-2" type="number" min="0" class="card-checkout__product__label-value input" value="<?php echo $val['qty']; ?>"/>
				</span>
				</p>
				</fieldset>
				<!--#SHOW THIS ON DESKTOP SCREEN-->
				<div class="card-checkout__product__label__buttons card-el__show-on-md">
					<span class="butones minus">-</span>
					<input class="text" type="text" value="1" id="prod-2"/>
					<span class="butones plus">+</span>
				</div>
			</div>
			<div class="card-el__hide-on-md">
				<p class="card-checkout__product__label">
				Price:
				<?php
				$price = $val['price']*$val['qty'];
				?>
				<span class="card-checkout__product__label-value mark-color">$<?php echo $price; ?></span>
				</p>
			</div>

			<div class="shopping-cart-icon-info _v2">
				<div class="animating-imgs__wrap showroom-detail-view-product-page idea-folder __square" data-toggle="modal" data-target="#saveToIdeaFolder">
					<div class="icons icon-share__circle icon-share__circle__fff add-to-fav animate-pulse add-to-fav__icon_over-galery">
						<?php echo $icon_id_save_path_205_207; ?>
					</div>
					<div class="icons icon-share__circle icon-share__circle__18C4C7 add-to-fav img-check__icon" style="display: none">
						<?php echo $icon_img_check_circle; ?>
					</div>
				</div>
				<div class="info-popup-idea-folder shopping-cart-page">
					<div class="icon">
						<img src="<?php echo SITEROOT; ?>images/idea-folder-icon.png">
					</div>
					<span>Save to My Inspirations</span>
					<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an ....
					</p>
					<a class="dontShowAgain_idea">Don't show again</a>
				</div>
				<div class="animating-imgs__wrap showroom-detail-view-product-page save-to-specs-sheet __square" data-toggle="modal" data-target="#.php">
					<div class="icons icon-share__circle icon-share__circle__18C4C7 add-to-fav animate-pulse add-to-fav__icon_save">
						<?php echo $icon_id_save_43444; ?>
					</div>
					<div class="icons icon-share__circle icon-share__circle__18C4C7 save-v2 add-to-fav img-check__icon_v2" style="display: none">
						<?php echo $icon_img_check_circle_Ellipse_23_25; ?>
					</div>
				</div>
				<div class="info-popup-spec-folder shopping-cart-page">
					<div class="icon">
						<img src="<?php echo SITEROOT; ?>images/spec-folder-icon.png">
					</div>
					<span>Save to spec folder</span>
					<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an ....
					</p>
					<a class="dontShowAgain_spec">Don't show again</a>
				</div>
			</div>
		</div>
	</div>
</div>


</div>
<!--#PRODUCT ITEM-->

		
<?php
}
?>


</div>
</div>




	<div class="col col__card-checkout">
		<div class="card-fixed width-inherit z-depth-3">
			<div class="card card-checkout card-fixed__inner card-shadow no-border">
				<div class="card-body card-order">
					<p class="card-checkout__header fs-md-18px">Order Summary</p>
					<fieldset>
					<div class="form-group form-promo">
						<label class="label-above form-promo__label" for="input__promo-code">Promo code:</label>
						<div class="form-row">
							<div class="col-8">
								<input id="input__promo-code" type="text" name="name" placeholder="" class="input__promo-code">
							</div>
							<div class="col-4">
								<button title="Apply" class="btn btn-primary btn-md">apply</button>
							</div>
						</div>
					</div>
					</fieldset>
					<div class="order">
						<div class="table-responsive">
							<table class="table table__order mt-3">
							<tbody>
							<tr>
							<td scope="row" class="text">Sub Total:</td>
							<td class="text-right text">$52.44</td>
							<td class="text-right text"></td>
							</tr>
							<tr>
							<td scope="row" class="text">Discount:</td>
							<td class="text-right text">$0.00</td>
							<td class="text-right text"></td>
							</tr>
							<tr>
							<td scope="row" class="text">Tax:</td>
							<td class="text-right text">$0.00</td>
							<td class="text-right text"></td>
							</tr>
							</tbody>
							<tfoot>
							<tr>
							<td>Price:</td>
							<td class="text-right">$52.44</td>
							<td class="text-right text"></td>
							</tr>
							</tfoot>
							</table>
						</div>
					</div>
					<div class="">
						<button title="Submit order" class="btn btn-secondary btn-checkout btn-full btn-full">
						submit order
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>

<div style="clear:both;"></div>


</div>
</div>
</div>
</section>
</main>



<!--HIDE FOOTER ON MOBILE-->
<!--  class for the footer class="card-el__hide-on-md" -->
<div id="footer"></div>
<!-- #HIDE FOOTER ON MOBILE-->

<!-- Modal Save To Idea Folder -->
<div id="modal-save-to-idea-folder"></div>

<!-- Modal Save To Specs Sheet -->
<div id="modal-save-to-specs-sheet"></div>

<!-- Modal "Perfect-fit-guarantee" -->
<div id="modal-perfect-fit-guarantee"></div>

<!-- Modal "Free-shipping" -->
<div id="modal-free-shipping"></div>

<!-- Modal Save To Idea Folder -->
<div id="modal-save-to-idea-folder"></div>


<!-- Modal Add New Address or edit an old address-->
<div class="modal fade modal__add-address" id="modal__add-address" tabindex="-1" role="dialog" aria-labelledby="modalAddAddress" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
	<div class="modal__add-address__header__fixed">
		<p class="title">
		add new address
		</p>
		<div class="f-1 modal-sign__close-icon-wrap text-right close close-modal" type="buttons"
			data-dismiss="modal" aria-label="modalAddAddress">
			<img src="<?php echo SITEROOT; ?>images/close.svg" class="img-fluid" alt="">
		</div>
	</div>
	<form action="">
	<fieldset>
	
	<div class="modal__add-address-form__wrapper pb-2">
		<div class="form-row">
			<div class="col">
				<div class="form-group">
					<label class="label-above" for="customer-new__name">First Name:</label>
					<input id="customer-new__name"
					type="text" name="name"
					placeholder="John"
					class="form-input"/>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label class="label-above" for="customer-new__name-last">Last Name:</label>
					<input id="customer-new__name-last"
					type="text" name="name"
					placeholder="Doe"
					class="form-input"/>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="form-group">
					<label class="label-above" for="customer-new__address_line-1">
					<span>Shipping Address Line One:</span>
					<span class="label-above__label">We cannot ship to a P.O. box</span>
					</label>
					<input id="customer-new__address_line-1"
					type="text" name="name"
					placeholder="Los Angeles..."
					class="form-input"/>
				</div>
				<div class="form-group">
					<label class="label-above" for="customer-new__address_line-2">
					<span>Shipping Address Line Two:</span>
					<span class="label-above__label">We cannot ship to a P.O. box</span>
					</label>
					<input id="customer-new__address_line-2"
					type="text" name="name"
					placeholder="1909  Nickel Road..."
					class="form-input"/>
				</div>
			</div>
		</div>
		<div class="form-row">
			<div class="col">
				<div class="form-group">
					<label class="label-above" for="customer-new__city">City:</label>
					<input id="customer-new__city"
					type="text" name="email"
					placeholder="Los Angeles..."
					class="form-input"/>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label class="label-above" for="customer-new__state">State:</label>
					<div class="form-input form-input__select-wrap">
						<select name="states" id="customer-new__state">
						<option value="State">
						State:
						</option>
						<option value="State 1">
						State 1
						</option>
						</select>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label class="label-above" for="customer-new__zip">Zip:</label>
					<input id="customer-new__zip" type="number" name="zip" placeholder="90017" class="form-input"/>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label class="label-above" for="customer-new__state">Country:</label>
					<div class="form-input form-input__select-wrap">
						<select name="country" id="customer-new__country">
						<option value="country">
						country:
						</option>
						<option value="country 1">
						Country 1
						</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="form-row">
			<div class="col">
				<div class="form-group">
					<label class="label-above" for="customer-new__email">Email Address:</label>
					<input id="customer-new__email"
					type="email" name="email"
					placeholder="johndoe@mail.com"
					class="form-input"/>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label class="label-above" for="customer-new__phone">Phone Number:</label>
					<input id="customer-new__phone"
					type="number"
					name="phone number"
					placeholder="1234567890"
					class="form-input"/>
				</div>
			</div>
		</div>
		<div class="mb-5">
			<input class="checkbox__ch-card__checkbox selectable" id="checkbox-product-1" type="checkbox" value="value2">
			<label class="label-above full fs-md-18px" for="checkbox-product-1">Set as default</label>
		</div>
		<div class="d-flex justify-content-around flex-row-reverse flex-md-row">
			<button title="Confirm" class="btn btn-secondary form__add-new-address__btn-form">
			confirm
			</button>
			<div class="btn btn-light form__add-new-address__btn-form" data-dismiss="modal" aria-label="modalAddAddress">
			cancel
			</div>
		</div>
	</div>
	</fieldset>
	</form>
</div>
</div>
</div>


<?php
require_once($real_root.'/pages/views/modal-e-sign-dialog.php');
?>

<!-- Modal Iframe -->
<div class="modal modal-iframe fade" id="modal__Iframe" tabindex="-1" role="dialog" aria-labelledby="iframeModalLabel" aria-hidden="true">
<div class="modal-dialog " role="document">
<div class="modal-content">
<iframe width="100%" height="100%" class="load-page"></iframe>
</div>
</div>
</div>

<script src="<?php echo SITEROOT; ?>app.js"></script></body>
</html>
