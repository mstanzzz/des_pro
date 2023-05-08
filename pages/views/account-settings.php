<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>ClosetsToGo</title>
<meta name="description" content="account settings">
<link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet"></head>
<body class="idea-folder-popup">
<?php
require_once($real_root.'/pages/views/header.php');
?>
<section class="home-mobile-buttons-block account-nav covid-block">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12">
		<div class="home-mobile-buttons-block__wrapper">
			<button title="Account navigation previous" class="account-nav__prev" style="display: none;">
			<?php echo $icon_btn; ?>
			</button>
			
			<div class="account-nav__content">
				<a href="<?php echo SITEROOT."account.html"; ?>" title="Dashboard" class="home-mobile-buttons-block__link account-small-link">Dashboard</a>
				<a href="<?php echo SITEROOT."account-settings.html"; ?>" title="Account settings" class="home-mobile-buttons-block__link account-big-link active">Account settings</a>
				<a href="#" title="Start a new design" class="home-mobile-buttons-block__link account-big-link">Start a new design</a>
				<a href="<?php echo SITEROOT; ?>account-orders.html" title="My orders" class="home-mobile-buttons-block__link account-small-link">My orders</a>
				<a href="<?php echo SITEROOT; ?>account-payments.html" title="Payment settings" class="home-mobile-buttons-block__link account-big-link">Payment settings</a>
			</div>
			<button title="Account navigation next" class="account-nav__next">
			<?php echo $icon_btn; ?>
			</button>
		</div>
	</div>
</div>
</div>
</div>
</section>

<main class="main clearfix">
<section class="account-block">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-lg-3">
		<div class="account-block__navigation--wrapper">
			<div class="account-block__navigation--user js-login-txt">

				<a href="#" title="Account navigation " class="account-block__navigation--user-link">
				<span class="account-block__navigation--user-image">
				<span class="flip-front">

				<img src="<?php echo SITEROOT; ?>images/team-3.png" alt="" class="img-fluid">
				</span>
				<span class="flip-back">Edit/add<br>photo</span>

				</span>
				<span class="account-block__navigation--user-plus">
				<?php echo $icon_add_showroom; ?>
				</span>
				</a>
				<p class="account-block__navigation--user-heading">
				Hi, <?php echo $_SESSION['first_name'] ?>
				</p>
			</div>

			<div class="mobile-show">
				<div class="account-block__navigation--user active js-not-login-txt">
					<p class="account-block__navigation--user-heading">Login</p>
				</div>
			</div>
<?php
$acc_page = "settings";
require_once($real_root.'/pages/views/account_side_nav.php');
?>
		</div>
	</div>

	<div class="col-12 col-lg-9">
		<div class="account-block__wellcome">
			<p class="account-block__wellcome--heading"><span class="wellome-txt">Welcome,</span> 
			<?php echo $_SESSION['first_name']; ?>! <span>How are you today?</span></p>
			<p class="account-block__wellcome--text"><?php echo $today; ?></p>
		</div>
		<div class="account-block__general-info">
			<div class="account-block__general-info--image">
				<p class="desktop-show">My Account</p>
				<?php echo $icon_user; ?>
				<div class="account-block__general-info--details mobile-show">
					<div class="row">
						<div class="col-12"><p>My Account</p></div>
					</div>
					<div class="row mt-2">
						<div class="col-12">
						<p class="second-text"><?php echo $_SESSION['name']; ?></p>
						
						</div>
					</div>
					<div class="row">
						<div class="col-12"><p class="second-text"><?php echo $_SESSION['email']; ?></p></div>
					</div>
				</div>
				<a href="<?php echo SITEROOT; ?>" title="Log out" class="mobile-log-out">Log out</a>
			</div>
			<div class="account-block__general-info--details desktop-show">
				<div class="row">
					<div class="col-lg-3"><p class="first-text">Account Name:</p></div>
					<div class="col-12 col-lg-9"><p class="second-text">
					<?php
					if(isset($_SESSION['name'])){
					echo $_SESSION['name']; 
					}
					?>
					</p></div>
				</div>
				<div class="row">
					<div class="col-lg-3"><p class="first-text">Account Email:</p></div>
					<div class="col-12 col-lg-9">
					<p class="second-text">
					<?php
					if(isset($_SESSION['email'])){
					echo $_SESSION['email']; 
					}
					?>
					</p></div>
				</div>
			</div>
		</div>
		<div class="account-block__buttons-block">
			<button title="Change password, click to change your password" class="account-block__buttons-block--button change-password js-open-hidden-box" date-open-block="#change-password-box" data-open-mobile-block="#mobile-change-password-box">
				<span class="button-image">
				<?php echo $icon_prof_key; ?>
				</span>
				<span class="button-text">
				Change password<br />
				<span>click to change your password</span>
				</span>
			</button>
			<div class="mobile-show mt-3" id="mobile-change-password-box"></div>
				<button title="Shipping Contact Info, change shipping address"  class="account-block__buttons-block--button shipping-info js-open-hidden-box" date-open-block="#shipping-info-box" data-open-mobile-block="#mobile-shipping-info-box">
					<span class="button-image">
					<?php echo $icon_ship_contact; ?>
					</span>
					<span class="button-text">
					Shipping Contact Info<br />
					<span>change shipping address</span>
					</span>
				</button>
				<div class="mobile-show mt-3" id="mobile-shipping-info-box"></div>
					<button title="Site Preferences, Shopping list view" class="account-block__buttons-block--button site-preferences js-open-hidden-box" date-open-block="#site-preferences-box" data-open-mobile-block="#mobile-site-preferences-box">
						<span class="button-image">
						<?php echo $icon_settings; ?>
						</span>
						<span class="button-text">
						Site Preferences<br />
						<span>Shopping list view</span>
						</span>
					</button>
					<div class="mobile-show mt-3" id="mobile-site-preferences-box"></div>
				</div>
				<!-- Password block -->
				<div class="account-block__details" id="change-password-box">
					<p class="account-block__heading desktop-show">Update Your Password</p>
					<div class="account-block__form">
					<form action="<?php echo SITEROOT; ?>account-settings.html" method="post">
					<fieldset>
					<div class="row align-items-end mobile-change-password-row">
					<div class="col">
						<div class="form-group">
							<label for="current-password">Current Password:</label>
							<input type="password" class="form-control readonly-pass" id="current_password" name="current_password" 
							value="" placeholder="Password" readonly value="********">
						</div>
					</div>
					<div class="col">
						<div class="form-group input-riqueired-group">
							<label for="new-password"></label>
							<input type="password" class="form-control input-riqueired" id="new_password" name="new_password" 
							value="" placeholder="New Password">
							<span class="span-riqueried">*</span>
						</div>
					</div>
					<div class="col">
						<div class="form-group input-riqueired-group">
							<label for="confirm-new-password"></label>
							<input type="password" class="form-control input-riqueired" id="confirm_new_password" name="confirm_new_password"
							value="" placeholder="Confirm New Password">
							<span class="span-riqueried">*</span>
						</div>
					</div>
					<div class="col">
						<button title="Save changes" type="submit" class="btn btn-primary mobile-save-account-password">save changes</button>
					</div>
				</div>
				</fieldset>
				</form>
			</div>
		</div>


<!-- Shipping info block -->
<div class="account-block__details" id="shipping-info-box">
<p class="account-block__heading desktop-show">Change Shipping Addresses</p>
<div id="accordion-shipping" class="account-block__collapse account-settings">
<?php
foreach($cust_addr_array as $key=>$val){
?>
<div class="card mb-2">
	<button title="More Information" class="account-mobile-more-info-btn js-show-mobile-action-btn"></button>
	<div class="account-mobile-more-info-wrapper js-show-mobile-action-buttons">
		<div class="account-mobile-more-info-wrapper__mobile-more-info">
			<button title ="Edit" class="account-mobile-more-info-btn-edit js-modal-type" data-address-type="Edit" data-toggle="modal" data-target="#newShippingAddress">Edit address</button>
			<button title ="Delete" class="account-mobile-more-info-btn-delete">Delete</button>
		</div>
	</div>
	<div class="card-header" id="headingShipping<?php echo $key; ?>">
		<div class="account-block__collapse--header collapsed" data-toggle="collapse" 
			data-target="#collapseShipping<?php echo $key; ?>" aria-expanded="true" aria-controls="collapseShipping<?php echo $key; ?>">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 pt-3">
<p class="account-block__collapse--heading">
<?php echo $val['first_name']." ".$val['last_name']." ".$val['phone'];   ?></p>
						<p class="account-block__collapse--text">
<?php echo $val['address_1']." ".$val['address_2']." ".$val['state']." ".$val['country']." ".$val['zip']  ?>
						</p>
						<button title="Edit" class="account-block__details--edit-button">
						<?php echo $icon_ww; ?>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="collapseShipping<?php echo $key; ?>" class="collapse show" aria-labelledby="headingShipping<?php echo $key; ?>" data-parent="#accordion-shipping">
		<div class="card-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="account-block__form">
							<form action="<?php echo SITEROOT; ?>account-settings.html" method="post">
<input type="hidden" name="update_shipping_addr" value="1">
<input type="hidden" name="cust_address_id" value="<?php echo $val['cust_address_id'] ?>">
							<fieldset>
							<div class="row align-items-end">
								<div class="col-4 mb-3">
									<div class="form-group">
										<label for="names" class="label-riquired">First name:</label>
<input type="text" class="form-control mt-2" name="first_name" value="<?php echo $val['first_name']; ?>" placeholder="First name" value="Daniel">
									</div>
								</div>
								<div class="col-4 mb-3">
									<div class="form-group">
										<label for="names" class="label-riquired">Last name:</label>
<input type="text" class="form-control mt-2" name="last_name" value="<?php echo $val['last_name']; ?>" placeholder="Last name" value="Dimitrov">
									</div>
								</div>

								<div class="col-4 mb-3">
									<div class="form-group">
										<label for="country" class="label-riquired">City:</label>
<input type="text" class="form-control mt-2" name="city" placeholder="City" value="<?php echo $val['city']; ?>">
									</div>
								</div>

								<div class="col-4 mb-3">
									<div class="form-group">
										<label for="state" class="label-riquired">State/province:</label>
<input type="text" class="form-control mt-2" name="state" placeholder="State/province" value="<?php echo $val['state']; ?>">
									</div>
								</div>

								<div class="col-4 mb-3">
									<div class="form-group">
										<label for="zip" class="label-riquired">Zip Code:</label>
<input type="text" class="form-control mt-2" name="zip" placeholder="Zip" value="<?php echo $val['zip']; ?>">
									</div>
								</div>

								<div class="col-4 mb-3">
									<div class="form-group">
										<label for="country" class="label-riquired">Country:</label>
<input type="text" class="form-control mt-2" name="country" placeholder="USA" value="<?php echo $val['country']; ?>">
									</div>
								</div>
								<div class="col-6 mb-3">
									<div class="form-group">
										<label for="email" class="label-riquired">E-mail:</label>
<input type="email" class="form-control mt-2" name="email" placeholder="E-mail" value="<?php echo $val['email']; ?>">
									</div>
								</div>
								<div class="col-6 mb-3">
									<div class="form-group">
										<label for="phone" class="label-riquired">Phone:</label>
										<input type="tel" class="form-control mt-2" name="phone" placeholder="Phone" value="<?php echo $val['phone']; ?>">
									</div>
								</div>
								<div class="col-9 mb-3">
									<div class="form-group input-riqueired-group">
										<label for="address_1">Address Line 1:</label>
<input type="text" class="form-control input-riqueired mt-2" name="address_1" 
										placeholder="Shipping address" value="<?php echo $val['address_1']; ?>">
										<span class="span-riqueried">*</span>
									</div>
								</div>
								<div class="col-9 mb-3">
									<div class="form-group input-riqueired-group">
										<label for="address_2">Address Line 2:</label>
<input type="text" class="form-control input-riqueired mt-2" 
name="address_2" placeholder="Shipping address" value="<?php echo $val['address_2']; ?>">
									</div>
								</div>


								<div class="col-3 mb-3">
									<div class="form-check">
<input class="custom-checkbox" id="checkbox-1" type="checkbox" 
<?php if($val['is_default']>0) echo "checked";  ?> name="is_default" value="1">
										<label for="checkbox-1">Set as default</label>
									</div>
								</div>
								<div class="col-auto mb-3">
									<button title="Save changes" type="submit" class="btn btn-primary">save changes</button>
								</div>
							</div>
							</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<form action="<?php echo SITEROOT; ?>account-settings.html" method="post">
	<input type="hidden" name="delete_shipping_addr" value="1">
	<input type="hidden" name="cust_address_id" value="<?php echo $val['cust_address_id'] ?>">
	<button title="Delete" class="account-block__details--delete-button">
		<?php echo $icon_xx; ?>
	</button>
	</form>
</div>

<?php
$first_name = $val['first_name'];
$last_name = $val['last_name'];
$city = $val['city'];
$state = $val['state'];
$zip = $val['zip'];
$country = $val['country'];
$email = $val['email'];
$phone = $val['phone'];
$address_1 = $val['address_1'];
$address_2 = $val['address_2'];


}

if(!isset($first_name))$first_name='';
if(!isset($last_name))$last_name='';
if(!isset($city))$city='';
if(!isset($state))$state='';
if(!isset($zip))$zip='';
if(!isset($country))$country='';
if(!isset($email))$email='';
if(!isset($phone))$phone='';
if(!isset($address_1))$address_1='';
if(!isset($address_2))$address_2='';
?>
</div>

<button title="Add new address" 
		type="submit" 
		class="btn btn-primary add-new-address js-modal-type" 
		data-address-type="Add new" 
		data-toggle="modal" data-target="#newShippingAddress">
		<?php echo $icon_add; ?>
		<span>add new address</span>
</button>
</div>

<!-- Site preferences block -->
<div class="account-block__details" id="site-preferences-box">
	<div class="account-block__form">
		<form action="<?php echo SITEROOT; ?>account-settings.html"  method="post">
		<fieldset>
		<input type="hidden" name="set_site_pref" value="1">
		<div class="row align-items-start">
			<div class="col-12 col-lg-9">
				<p class="account-block__heading desktop-show">Update Your Preferences</p>
				<div class="form-group">
					<div class="home-consult-form__radio-block">
						<span class="thumb-menu-wrap">
						<?php echo $icon_thumb_menu_gray; ?>
						</span>
						<label class="home-consult-form__radio">
						<?php
						echo "<input type='radio' name='site_pref' value='1' ".$grid_checked.">";
						?>
						<span>Grid view</span>
						</label>
						<span class="hamburger-menu-wrap">
						<?php echo $icon_hamburger_menu_gray; ?>
						</span>
						<label class="home-consult-form__radio">
						<?php						
						echo "<input type='radio' name='site_pref' value='2' ".$list_checked.">";
						?>
						<span>List view</span>
						</label>
					</div>
				</div>
			</div>
			<div class="col-lg-3 text-right">
				<div class="desktop-show">
					<button title="Save changes" type="submit" class="btn btn-primary">save changes</button>
				</div>
			</div>
		</div>
		</fieldset>
		</form>
	</div>
</div>

</div>
</div>
</div>
</div>
</section>
</main>

<?php
require_once($real_root.'/pages/views/virtual-assistant.php');
require_once($real_root.'/pages/views/footer.php');
require_once($real_root.'/pages/views/modal-perfect-fit-guarantee.php');
require_once($real_root.'/pages/views/modal-free-shipping.php');
require_once($real_root.'/pages/views/modal-save-to-idea-folder.php');


?>		

<!-- Modal "New Shipping address" -->
<div class="modal mobile-account-full-screan-modal fade" id="newShippingAddress" tabindex="-1" role="dialog" aria-labelledby="newShippingAddressTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<p class="modal-title" id="newShippingAddressTitle"><span></span> shipping address</p>
				<button title="Close" type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="account-block__form">
					<form action="<?php echo SITEROOT; ?>account-settings.html" method="post">
					<input type="hidden" name="add_shipping_addr" value="1">
					<fieldset>
					<div class="row align-items-end">
						<div class="col-12 col-lg-4 mb-3">
							<div class="form-group">
								<label for="first_name" class="label-riquired">First name:</label>
								<input type="text" class="form-control mt-2" 
								name="first_name" 
								value="<?php echo $first_name; ?>" placeholder="First name">
							</div>
						</div>
						<div class="col-12 col-lg-4 mb-3">
							<div class="form-group">
								<label for="last_name" class="label-riquired">Last name:</label>
								<input type="text" class="form-control mt-2" 
								name="last_name" 
								value="<?php echo $last_name; ?>" placeholder="Last name">
							</div>
						</div>
						<div class="col-12 col-lg-4 mb-3">
							<div class="form-group">
								<label for="city" class="label-riquired">City:</label>
								<input type="text" class="form-control mt-2" 
								name="city" 
								value="<?php echo $city; ?>" placeholder="city">
							</div>
						</div>

						<div class="col-12 col-lg-4 mb-3">
							<div class="form-group">
								<label for="state" class="label-riquired">State/province:</label>
								<input type="text" class="form-control mt-2" 
								name="state" 
								value="<?php echo $state; ?>" placeholder="State/province">
							</div>
						</div>
						<div class="col-12 col-lg-4 mb-3">
							<div class="form-group">
								<label for="country" class="label-riquired">Country:</label>
								<input type="text" class="form-control mt-2" name="country" value="<?php echo $country; ?>" placeholder="Country">
							</div>
						</div>

						<div class="col-12 col-lg-6 mb-3">
							<div class="form-group">
								<label for="email" class="label-riquired">E-mail:</label>
								<input type="email" class="form-control mt-2" 
								name="email" 
								value="<?php echo $email; ?>" placeholder="E-mail">
							</div>
						</div>
						<div class="col-12 col-lg-6 mb-3">
							<div class="form-group">
								<label for="phone" class="label-riquired">Phone:</label>
								<input type="tel" class="form-control mt-2" 
								name="phone" 
								value="<?php echo $phone; ?>" placeholder="Phone">
							</div>
						</div>
						<div class="col-12 col-lg-9 mb-3">
							<div class="form-group input-riqueired-group">
								<label for="address" class="label-riquired">Shipping address Line One:</label>
								<input type="text" class="form-control input-riqueired mt-2" 
								name="address_1" 
								value="<?php echo $address_1; ?>" placeholder="Shipping address">
							</div>
						</div>
						<div class="col-12 col-lg-9 mb-3">
							<div class="form-group input-riqueired-group">
								<label for="address" class="label-riquired">Shipping address Line Two:</label>
								<input type="text" class="form-control input-riqueired mt-2" 
								name="address_2" 
								value="<?php echo $address_2; ?>" placeholder="Shipping address">
							</div>
						</div>
						<div class="col-12 col-lg-9 mb-3">
							<div class="form-group input-riqueired-group">
								<label for="address" class="label-riquired">Zip Code:</label>
								<input type="text" class="form-control input-riqueired mt-2" 
								name="zip" 
								value="<?php echo $zip; ?>" placeholder="Zip">
							</div>
						</div>


						<div class="col-12 col-lg-3 mb-3">
							<div class="form-check custom-form-check">
								<input class="custom-checkbox" id="checkbox-7" 
								type="checkbox" name="is_default" value="1">
								<label for="checkbox-7">Set as default</label>
							</div>
						</div>
						<div class="col-12 text-center mb-3">
							<button title="Save changes" type="submit" class="btn btn-primary">save changes</button>
						</div>
					</div>
					</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


		<!-- Modal  "New billing address" -->
		<div class="modal mobile-account-full-screan-modal fade" id="newBillingAddress" tabindex="-1" role="dialog" aria-labelledby="newBillingAddressTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<p class="modal-title" id="newBillingAddressTitle"><span></span> billing address</p>
						<button title="Close" type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="account-block__form">
							<form>
								<fieldset>
									<div class="row align-items-end">
										<div class="col-12 col-lg-4 mb-3">
											<div class="form-group">
												<label for="names" class="label-riquired">First name & Last name:</label>
												<input type="text" class="form-control mt-2" name="names" placeholder="First name & Last name">
											</div>
										</div>
										<div class="col-12 col-lg-4 mb-3">
											<div class="form-group">
												<label for="country" class="label-riquired">Country:</label>
												<input type="text" class="form-control mt-2" name="country" placeholder="Country">
											</div>
										</div>
										<div class="col-12 col-lg-4 mb-3">
											<div class="form-group">
												<label for="state" class="label-riquired">State/province:</label>
												<input type="text" class="form-control mt-2" name="state" placeholder="State/province">
											</div>
										</div>
										<div class="col-12 col-lg-6 mb-3">
											<div class="form-group">
												<label for="email" class="label-riquired">E-mail:</label>
												<input type="email" class="form-control mt-2" name="email" placeholder="E-mail">
											</div>
										</div>
										<div class="col-12 col-lg-6 mb-3">
											<div class="form-group">
												<label for="phone" class="label-riquired">Phone:</label>
												<input type="tel" class="form-control mt-2" name="phone" placeholder="Phone">
											</div>
										</div>
										<div class="col-12 col-lg-9 mb-3">
											<div class="form-group input-riqueired-group">
												<label for="address">Shipping address:</label>
												<input type="text" class="form-control input-riqueired mt-2" name="address" placeholder="Shipping address">
												<span class="span-riqueried">*</span>
											</div>
										</div>
										<div class="col-12 col-lg-3 mb-3">
											<div class="form-check custom-form-check">
												<input class="custom-checkbox" id="checkbox-8" type="checkbox" value="value8">
												<label for="checkbox-8">Set as default</label>
											</div>
										</div>
										<div class="col-12 text-center mb-3">
											<button title="Save changes" type="submit" class="btn btn-primary">save changes</button>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	<script src="<?php echo SITEROOT; ?>app.js"></script></body>
</html>
