<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<title>ClosetsToGo</title>
	<meta name="description" content="shopping-cart"><link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet"></head>

	<body class="clearfix product-detail idea-folder-popup">
<?php
require_once($real_root.'/pages/views/header.php');
?>

<main class="main clearfix main__payment-page">

<section class="section-checkout">
<div class="wrapper">
<div class="container-fluid">
<div class="row flex-lg-nowrap">
	<div class="col col-auto__custom">
		<div class="card card-checkout card-checkout__header__main" id="shoppingCardTitle">
			<div class="card-body">
				<h5 class="card-checkout__header">
				<span class="card-checkout__header__main__back-icon">
				<a href="<?php echo SITEROOT; ?>" title="Home" class="d-block">
				<img src="<?php echo SITEROOT; ?>images/back-icon.svg" alt="Back to Home"></a></span><span>Shopping Cart (3)</span>
				</h5>
				<!--SHOW THIS ON DESKTOP SCREEN-->
				<fieldset>
				<input class="checkbox__ch-card__checkbox selectable card-el__hide-on-md" id="checkbox__select-all" type="checkbox" value="value1">
				<label for="checkbox__select-all" class="checkbox__select-all__label card-el__hide-on-md">Select All:</label>
				</fieldset>
				<!--#SHOW THIS ON DESKTOP SCREEN-->
			</div>
		</div>

<?php
foreach($cart_contents as $key=>$val){
$bg_class = ($key % 2 == 0)? '' : 'you-design__mark';
?>
<div class="card card-checkout <?php echo $bg_class; ?>">
	<div class="card-checkout__remove-item">
		<button title="Close" class="p-0">
		<img class="img-fluid" src="<?php echo SITEROOT; ?>images/icon-close.svg" alt="">
		</button>
	</div>
	<div class="card-body d-flex align-items-center">
		<div class="mr-1 card-el__hide-on-md">
			<div>
				<fieldset>
					<input class="checkbox__ch-card__checkbox selectable" 
					id="checkbox-product-<?php echo $key; ?>" type="checkbox" value="<?php echo $val['item_id']; ?>">
					<label for="checkbox-product-1"> </label>
				</fieldset>
			</div>
		</div>
		<div class="card-checkout__product__image mr-3">
			<div class="img-wrap">
				<?php 
				$img = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/cart/medium/".$val['image_file'];
				?>
				<img src="<?php echo $img; ?>" class="img-fluid" alt="<?php echo $val['name']; ?>">
			</div>
		</div>
		<div class="card-checkout__product">
			<div class="row align-items-end align-items-lg-center">
				<div class="col card-checkout__product__title-wrap">
					<h5 class="card-checkout__product__title"><?php echo $val['name']; ?></h5>
					<p class="card-checkout__product__number">Product Id: <?php echo $val['item_id']; ?></p>
				</div>
				<div class="col-auto card-el__show-on-md ">
					<p class="card-checkout__product__label">
					<span class="card-el__hide-on-md">Price:</span>
					<span class="card-checkout__product__label-value mark-color">$<?php echo $val['price']; ?></span>
					</p>
				</div>
			</div>
			<p class="card-checkout__product__description card-el__hide-on-md">
			<?php echo $val['short_description']; ?>
			</p>
			<div class="d-flex align-items-center justify-content-end justify-content-lg-between mt-2 mt-md-0">
				<div class="card-el__hide-on-md">
					<p class="card-checkout__product__label">
					<span>Unit Price:</span> 
					<span class="card-checkout__product__label-value">$<?php echo $val['price']; ?></span>
					</p>
				</div>
				<div class="card-checkout__product__label__buttons__wrap">
					<fieldset>
					<p class="card-checkout__product__label card-el__hide-on-md">
					<label for="checkbox-quantity-1">Quantity: </label>
					<span class="input-wrap">
					<span class="input-wrap__quantity-mark"><?php echo $val['qty']; ?></span>
					<input id="checkbox-quantity-<?php echo $key; ?>" type="number" min="0" 
					class="card-checkout__product__label-value input" value="<?php echo $val['qty']; ?>"/>
					</span>
					</p>
					</fieldset>
					<fieldset>
					<div class="card-checkout__product__label__buttons card-el__show-on-md">
						<span class="butones minus">-</span>
						<input class="text" type="text" value="1" id="prod-1"/>
						<span class="butones plus">+</span>
					</div>
					</fieldset>
				</div>
				<div class="card-el__hide-on-md">
					<p class="card-checkout__product__label">
					Price:
					<span class="card-checkout__product__label-value mark-color">$<?php echo $val['price']; ?></span>
					</p>
				</div>
				<div class="shopping-cart-icon-info">
					<div class="animating-imgs__wrap showroom-detail-view-product-page idea-folder __square" data-toggle="modal" 
						data-target="#saveToIdeaFolder">
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
						<?php echo $val['short_description']; ?>
						<a class="dontShowAgain_idea">Don't show again</a>
					</div>
					<div class="animating-imgs__wrap showroom-detail-view-product-page save-to-specs-sheet __square" data-toggle="modal" 
						data-target="#saveToSpecSheet">
						<div class="icons icon-share__circle icon-share__circle__18C4C7 add-to-fav animate-pulse add-to-fav__icon_save">
							<?php echo $icon_id_save_40; ?>
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
						<?php echo $val['short_description']; ?>
						<a class="dontShowAgain_spec">Don't show again</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


		
<?php
}
?>


</div>

	<div class="col col__card-checkout">
		<div class="card-fixed width-inherit z-depth-3">
			<div class="card card-checkout card-fixed__inner card-shadow no-border">
				<div class="card-body card-order">
					<h5 class="card-checkout__header">Order Summary</h5>
					<div class="order">
						<div class="table-responsive">
							<table class="table table__order">
							<tbody>
							<tr>
							<td scope="row" class="text">Sub Total:</td>
							<td class="text-right text">$<?php echo $sub_total; ?></td>
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
							<td class="text-right">$<?php echo $sub_total; ?></td>
							<td class="text-right text"></td>
							</tr>
							</tfoot>
							</table>
						</div>
					</div>
					<div class="">
						<a href="<?php echo SITEROOT;?>checkout.html" class="btn btn-secondary btn-checkout btn-full btn-full">checkout</a>
					</div>
				</div>
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
require_once($real_root.'/pages/views/mobile-show-footer-buttons.php');
require_once($real_root.'/pages/views/footer.php');
require_once($real_root.'/pages/views/modal-perfect-fit-guarantee.php');
require_once($real_root.'/pages/views/modal-free-shipping.php');
require_once($real_root.'/pages/views/modal-save-to-idea-folder.php');
require_once($real_root.'/pages/views/modal-save-to-specs-sheet.php');
require_once($real_root.'/pages/views/modal-e-sign-dialog.php');

?>

	<script src="<?php echo SITEROOT; ?>app.js"></script></body>
</html>
