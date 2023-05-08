<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>ClosetsToGo</title>
<meta name="description" content="Accessories page">
<link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">
</head>
<body class="html_accessories">
<?php
$nav_el = "accessories";
require_once($real_root.'/pages/views/header.php');
$back_url=SITEROOT."accessory-categories.html";
?>

<section class="home-mobile-buttons-block covid-block ">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="home-mobile-buttons-block__wrapper accessories">

<a href="<?php echo $back_url; ?>" 
title="accessory-category" class="back-link" title='Accessory category'>
<!--
<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
<path d="M0 0h24v24H0V0z" fill="none"/>
<path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/>
</svg>
-->
</a>
<p class="h2">
<span>                              
<?php echo $svg_code; ?>
</span>
<?php echo $name; ?>
</p>
</div>
</div>
</div>
</div>
</div>
</section>


<main class="main clearfix accessories">
<section class="breadcrumb-block pb-3 desktop-show">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="breadcrumb-block__wrapper" aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html" title="main page">Home</a></li>
<li class="breadcrumb-item">
<a href="<?php echo $back_url; ?>" 
title="Accessory category">Accessory Categories</a></li>
<li class="breadcrumb-item active" aria-current="page">Accessory Items</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="specification-detial-header desktop-show">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12 col-lg-9">
<div class="specification-detial-header__wrap">
<span class="specification-detial-header__img">
<?php echo $svg_code; ?>
</span>
<div class="specification-detial-header__content">
<p class="specification-detial-header__heading"><?php echo $name; ?></p>
<p class="specification-detial-header__text">
<?php echo $description; ?></p>
</div>
</div>
</div>
<div class="col-12 col-lg-3">
<div class="specification-detial-header__link-wrap">
<a href="<?php echo $back_url; ?>" title="Back to categories" 
class="specification-detial-header__link">
back to categories</a>
</div>
</div>
</div>
</div>
</div>
</section>
</main>


<section class="search-filters-sort_by-view">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12 col-lg-3">                     
<form 
action="<?php echo "category-".$cat_id."/".$name.".html"; ?>"
method="post">
<fieldset>
<input type="text" name="search" placeholder="Search item">
<button class="btn-nd__a" title='Search item'>
<img src="<?php echo SITEROOT; ?>images/search(1).svg" alt="Search Item">
</button>
</fieldset>
</form>                     
</div>
<div class="col-12 col-lg-6"></div>                  
<div class="col-12 col-lg-3 latest-box">
<div class="select-custom accessories-select" data-select="select-option__sort-by">
<div class="my-custom-select-selects-wrapper show-select my-custom-select-selects-wrapper-six">
<div class="my-customs-select my-customs-select__features-detail">
<div class="my-customs-select__trigger">
<span>Sort By</span>
<div class="arrows"></div>
</div>
<div class="my-customs-options">
<span class="my-customs-option selected d-n_nd" data-value="Closets">Choose item</span>
<div class="my-custom-select-select-wrapper">
<div class="my-customs-select-select">
<span class="my-customs-select-select-option " data-value="Item 1">aaaa 1</span>
</div>
</div>
<div class="my-custom-select-select-wrapper">
<div class="my-customs-select-select">
<span class="my-customs-select-select-option " data-value="Item 2">bbbbb 2</span>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="category-block__filters--right-wrapper">
<div class="category-block__filters--right-content">
<span>View:</span>
<button data-type="js-thumb"
class="category-block__filters--button js-switch-list-view-sm active"
title='Grid View'>
<svg id="thumb-menu-gray" data-name="thumb-menu-gray"
xmlns="http://www.w3.org/2000/svg" width="18.146"
height="18.146" viewBox="0 0 18.146 18.146">
<title>Grid View</title>                             
<g id="Group_343" data-name="Group 343">
<g id="Group_342" data-name="Group 342">
<path id="Path_182" data-name="Path 182"
d="M6.266,0H2.1A2.1,2.1,0,0,0,0,2.1V6.266a2.1,2.1,0,0,0,2.1,2.1H6.266a2.1,2.1,0,0,0,2.1-2.1V2.1A2.1,2.1,0,0,0,6.266,0Zm.681,6.266a.682.682,0,0,1-.681.681H2.1a.682.682,0,0,1-.681-.681V2.1A.682.682,0,0,1,2.1,1.418H6.266a.682.682,0,0,1,.681.681Z"
fill="#949dae"/>
</g>
</g>
<g id="Group_345" data-name="Group 345"
transform="translate(9.782)">
<g id="Group_344" data-name="Group 344">
<path id="Path_183" data-name="Path 183"
d="M282.238,0h-4.111A2.129,2.129,0,0,0,276,2.126V6.238a2.129,2.129,0,0,0,2.126,2.126h4.111a2.129,2.129,0,0,0,2.126-2.126V2.126A2.129,2.129,0,0,0,282.238,0Zm.709,6.238a.71.71,0,0,1-.709.709h-4.111a.71.71,0,0,1-.709-.709V2.126a.71.71,0,0,1,.709-.709h4.111a.71.71,0,0,1,.709.709Z"
transform="translate(-276)" fill="#949dae"/>
</g>
</g>
<g id="Group_347" data-name="Group 347"
transform="translate(0 9.782)">
<g id="Group_346" data-name="Group 346">
<path id="Path_184" data-name="Path 184"
d="M6.266,276H2.1A2.1,2.1,0,0,0,0,278.1v4.167a2.1,2.1,0,0,0,2.1,2.1H6.266a2.1,2.1,0,0,0,2.1-2.1V278.1A2.1,2.1,0,0,0,6.266,276Zm.681,6.266a.682.682,0,0,1-.681.681H2.1a.682.682,0,0,1-.681-.681V278.1a.682.682,0,0,1,.681-.681H6.266a.682.682,0,0,1,.681.681Z"
transform="translate(0 -276)" fill="#949dae"/>
</g>
</g>
<g id="Group_349" data-name="Group 349"
transform="translate(9.782 9.782)">
<g id="Group_348" data-name="Group 348">
<path id="Path_185" data-name="Path 185"
d="M282.238,276h-4.111A2.129,2.129,0,0,0,276,278.126v4.111a2.129,2.129,0,0,0,2.126,2.126h4.111a2.129,2.129,0,0,0,2.126-2.126v-4.111A2.129,2.129,0,0,0,282.238,276Zm.709,6.238a.71.71,0,0,1-.709.709h-4.111a.71.71,0,0,1-.709-.709v-4.111a.71.71,0,0,1,.709-.709h4.111a.71.71,0,0,1,.709.709Z"
transform="translate(-276 -276)"
fill="#949dae"/>
</g>
</g>
</svg>
</button>
<button data-type="js-list"
class="category-block__filters--button js-switch-list-view-sm"
title='List View'>
<svg id="hamburger-menu-gray" data-name="hamburger-menu-gray"
xmlns="http://www.w3.org/2000/svg" width="17.941"
height="18.146" viewBox="0 0 17.941 18.146">
<title>List View></title>
<path id="Path_186" data-name="Path 186"
d="M17.194,124.608H.748a1,1,0,0,1,0-1.94H17.194a1,1,0,0,1,0,1.94Zm0,0"
transform="translate(0 -114.565)" fill="#949dae"/>
<path id="Path_187" data-name="Path 187"
d="M17.194,1.94H.748A.881.881,0,0,1,0,.97.881.881,0,0,1,.748,0H17.194a.881.881,0,0,1,.748.97A.881.881,0,0,1,17.194,1.94Zm0,0"
fill="#949dae"/>
<path id="Path_188" data-name="Path 188"
d="M17.194,247.272H.748a1,1,0,0,1,0-1.94H17.194a1,1,0,0,1,0,1.94Zm0,0"
transform="translate(0 -229.126)" fill="#949dae"/>
</svg>
</button>
</div>
</div>
</div>
</div>
</div>
</section>








	  
<div class="wrapper accessories-page">
<div class="js-list-category category-block__thumb accessories-product-box" id="list-view">
<div class="container-fluid">
<ul class="accessories-products">
<?php
foreach($row_top_6_array as $val){
?>
<li class="product-box" data-sub-html="Product description 1">
	<div>
		<div class="product-image">
			<?php
			$img=SITEROOT."saascustuploads/1/cart/medium/".$val['file_name'];		
			?>
			<img src="<?php echo $img; ?>" alt="">
		</div>
		<p class="product-title"><?php echo  $val['name']; ?></p>
		<p class="product-description__text"><?php echo $val['short_description']; ?></p>
		<div class="share-product-accessories">
			<a href="#"><?php echo $t_share; ?></a>
			<div class="animating-imgs__wrap showroom-detail-view-product-page idea-folder __square" data-toggle="modal" data-target="#saveToIdeaFolder">
				<div class="icons icon-share__circle icon-share__circle__fff add-to-fav animate-pulse add-to-fav__icon_over-galery">
					<?php echo $icon_id_save; ?>
				</div>
				<div class="icons icon-share__circle icon-share__circle__18C4C7 add-to-fav img-check__icon" style="display: none">
					<?php echo $icon_img_check_circle_Ellipse_23_25; ?>
				</div>
			</div>
			<div class="info-popup-idea-folder __square">
				<div class="icon">
					<img src="<?php echo SITEROOT; ?>images/idea-folder-icon.png">
				</div>
				<span>Save to My Inspirations</span>
				<p>
					<?php echo $val['description']; ?>
				</p>
				<a class="dontShowAgain_acc_idea">Don't show again</a>
			</div>
			<div class="animating-imgs__wrap showroom-detail-view-product-page save-to-specs-sheet __square" data-toggle="modal" data-target="#.php">
				<div class="icons icon-share__circle icon-share__circle__18C4C7 add-to-fav animate-pulse add-to-fav__icon_save">
					<?php echo $icon_id_save; ?>
				</div>
				<div class="icons icon-share__circle icon-share__circle__18C4C7 save-v2 add-to-fav img-check__icon_v2" style="display: none">
					<?php echo $icon_img_check_circle_Ellipse_23_25; ?>
				</div>
			</div>
			<div class="info-popup-spec-folder __square">
				<div class="icon">
					<img src="<?php echo SITEROOT; ?>images/spec-folder-icon.png">
				</div>
				<span>Save to spec folder</span>
				<p>
					<?php echo $val['description']; ?>
				</p>
				<a class="dontShowAgain_acc_spec">Don't show again</a>
			</div>
		</div>
		<div class="see-detail-product-accessories">
			<?php
			$n=getUrlText($val['name']);
			$url_str = SITEROOT."product-".$val['item_id']."/".$n.".html";
			?>
			<p><a href="<?php echo $url_str; ?>" title="See details">See details</a></p>
		</div>
		<div class="stars-review-price-btn">
			<div class=" stars-product-accessories">
				<div class="stars-container">
					<?php
					echo $icon_star_gold;
					echo $icon_star_gold;
					echo $icon_star_gold;
					echo $icon_star_gold;
					?>
					<img src="<?php echo SITEROOT; ?>images/stars.svg" alt="">
				</div>
			</div>
			<div class="reviews-counter-product-accessories">
				<p>115 reviews</p>
			</div>
			<div class="price">
			<p>Price: $<?php echo $val['price_flat']; ?></p>
			</div>
			<div class="btn-add-to-cart">
<span onClick="add_item(<?php echo $val['item_id']; ?>);" 
class="card-el__hide-on-md product-purchase__add-to-card js-add-to-card-button accessories-page">quick add to cart</span>
			</div>
		</div>
	</div>
</li>
<?php
}
?>
</ul>


<ul class="accessories-products landscape-accessories-products">
<?php
foreach($row_mid_2_array as $val){
?>
<li class="product-box" data-sub-html="Product description 1" data-html="#video1">
	<div>
		<div class="product-image">
			<?php
			$img=SITEROOT."saascustuploads/1/cart/large/exwide/".$val['file_name'];		
			?>
			<img class="landscape-images" src="<?php echo $img; ?>" alt="">
		</div>
		<p class="product-title"><?php echo  $val['name']; ?></p>
		<p class="product-description__text"><?php echo $val['short_description']; ?></p>
	</div>
	<div class="stars-review-counter-accessories">
		<div class="stars-container">
			<?php
			echo $icon_star_gold;
			echo $icon_star_gold;
			echo $icon_star_gold;
			echo $icon_star_gold;
			?>
			<img src="<?php echo SITEROOT; ?>images/stars.svg" alt="">
		</div>
		<div class="reviews-counter-product-accessories">
			<p>115 reviews</p>
		</div>
		<div class="price">
			<p>Price: $<?php echo $val['price_flat']; ?></p>
		</div>
	</div>
	<div class="see-detail-product-accessories">
		<a href="#"><?php echo $t_share; ?></a>
		<div class="animating-imgs__wrap showroom-detail-view-product-page idea-folder __square" data-toggle="modal" data-target="#saveToIdeaFolder">
			<div class="icons icon-share__circle icon-share__circle__fff add-to-fav animate-pulse add-to-fav__icon_over-galery">
				<?php echo $icon_id_save; ?>
			</div>
			<div class="icons icon-share__circle icon-share__circle__18C4C77 add-to-fav img-check__icon" style="display: none">
				<?php echo $icon_img_check_circle_Ellipse_23_25; ?>
			</div>
		</div>
		<div class="info-popup-idea-folder __square">
			<div class="icon">
				<img src="<?php echo SITEROOT; ?>images/idea-folder-icon.png">
			</div>
			<span>Save to My</span>
			<p></p>
			<a class="dontShowAgain_idea">Don't show again</a>
		</div>
		<div class="animating-imgs__wrap showroom-detail-view-product-page save-to-specs-sheet __square" data-toggle="modal" data-target="#.php">
			<div class="icons icon-share__circle icon-share__circle__18C4C77 add-to-fav animate-pulse add-to-fav__icon_save">
				<?php echo $icon_id_save; ?>
			</div>
			<div class="icons icon-share__circle icon-share__circle__18C4C77 save-v2 add-to-fav img-check__icon_v2" >
				<?php echo $icon_img_check_circle; ?>
			</div>
		</div>
		<div class="info-popup-spec-folder __square">
			<div class="icon">
				<img src="<?php echo SITEROOT; ?>images/spec-folder-icon.png">
			</div>
			<span>Save to spec folder</span>
			<p>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an ....
			</p>
			<a class="dontShowAgain_spec">Don't show again</a>
		</div>
		<?php
			$n=getUrlText($val['name']);
			$url_str = SITEROOT."product-".$val['item_id']."/".$n.".html";
		?>
		<p><a href="<?php echo $url_str; ?>" title="See details">See details</a></p>
<span onClick="add_item(<?php echo $val['item_id']; ?>)" 
class="card-el__hide-on-md product-purchase__add-to-card js-add-to-card-button accessories-page">
		quick add to cart
		</span>
	</div>
</li>
<?php
}
?>
</ul>


<ul class="accessories-products">
<?php
foreach($row_lower_6_array as $val){
//for($i=0; $i<1; $i++){
?>
<li class="product-box" data-sub-html="Product description 1">
	<div>
		<div class="product-image">
			<?php
			$img=SITEROOT."saascustuploads/1/cart/medium/".$val['file_name'];		
			?>
			<img src="<?php echo $img; ?>" alt="">
		</div>
		<p class="product-title"><?php echo  $val['name']; ?></p>
		<p class="product-description__text"><?php echo $val['short_description']; ?></p>
		<div class="share-product-accessories">
			<a href="#"><?php echo $t_share; ?></a>
			<div class="animating-imgs__wrap showroom-detail-view-product-page idea-folder __square" data-toggle="modal" data-target="#saveToIdeaFolder">
				<div class="icons icon-share__circle icon-share__circle__fff add-to-fav animate-pulse add-to-fav__icon_over-galery">
					<?php echo $icon_id_save; ?>
				</div>
				<div class="icons icon-share__circle icon-share__circle__18C4C7 add-to-fav img-check__icon" style="display: none">
					<?php echo $icon_img_check_circle_Ellipse_23_25; ?>
				</div>
			</div>
			<div class="info-popup-idea-folder __square">
				<div class="icon">
					<img src="<?php echo SITEROOT; ?>images/idea-folder-icon.png">
				</div>
				<span>Save to My Inspirations</span>
				<p>
					<?php echo $val['description']; ?>
				</p>
				<a class="dontShowAgain_acc_idea">Don't show again</a>
			</div>
			<div class="animating-imgs__wrap showroom-detail-view-product-page save-to-specs-sheet __square" data-toggle="modal" data-target="#.php">
				<div class="icons icon-share__circle icon-share__circle__18C4C7 add-to-fav animate-pulse add-to-fav__icon_save">
					<?php echo $icon_id_save; ?>
				</div>
				<div class="icons icon-share__circle icon-share__circle__18C4C7 save-v2 add-to-fav img-check__icon_v2" style="display: none">
					<?php echo $icon_img_check_circle_Ellipse_23_25; ?>
				</div>
			</div>
			<div class="info-popup-spec-folder __square">
				<div class="icon">
					<img src="<?php echo SITEROOT; ?>images/spec-folder-icon.png">
				</div>
				<span>Save to spec folder</span>
				<p>
					<?php echo $val['description']; ?>
				</p>
				<a class="dontShowAgain_acc_spec">Don't show again</a>
			</div>
		</div>
		<div class="see-detail-product-accessories">
			<?php
			$n=getUrlText($val['name']);
			$url_str = SITEROOT."product-".$val['item_id']."/".$n.".html";
			?>
			<p><a href="<?php echo $url_str; ?>" title="See details">See details</a></p>
		</div>
		<div class="stars-review-price-btn">
			<div class=" stars-product-accessories">
				<div class="stars-container">
					<?php
					echo $icon_star_gold;
					echo $icon_star_gold;
					echo $icon_star_gold;
					echo $icon_star_gold;
					?>
					<img src="<?php echo SITEROOT; ?>images/stars.svg" alt="">
				</div>
			</div>
			<div class="reviews-counter-product-accessories">
				<p>115 reviews</p>
			</div>
			<div class="price">
				<p>Price: $<?php echo $val['price_flat']; ?></p>
			</div>
			<div class="btn-add-to-cart">
<span onClick="add_item(<?php echo $val['item_id']; ?>)" 
class="card-el__hide-on-md product-purchase__add-to-card js-add-to-card-button accessories-page">quick add to cart</span>
			</div>
		</div>
	</div>
</li>
<?php
}
?>
</ul>



<ul class="accessories-products landscape-accessories-products">
<?php
foreach($row_lower_2_array as $val){
?>
<li class="product-box" data-sub-html="Product description 1" data-html="#video1">
	<div>
		<div class="product-image">
			<?php
			$img=SITEROOT."saascustuploads/1/cart/large/exwide/".$val['file_name'];		
			?>
			<img class="landscape-images" src="<?php echo $img; ?>" alt="">
		</div>
		<p class="product-title"><?php echo  $val['name']; ?></p>
		<p class="product-description__text"><?php echo $val['short_description']; ?></p>
	</div>
	<div class="stars-review-counter-accessories">
		<div class="stars-container">
			<?php
			echo $icon_star_gold;
			echo $icon_star_gold;
			echo $icon_star_gold;
			echo $icon_star_gold;
			?>
			<img src="<?php echo SITEROOT; ?>images/stars.svg" alt="">
		</div>
		<div class="reviews-counter-product-accessories">
			<p>115 reviews</p>
		</div>
		<div class="price">
			<p>Price: $<?php echo $val['price_flat']; ?></p>
		</div>
	</div>
	<div class="see-detail-product-accessories">
		<a href="#"><?php echo $t_share; ?></a>
		<div class="animating-imgs__wrap showroom-detail-view-product-page idea-folder __square" data-toggle="modal" data-target="#saveToIdeaFolder">
			<div class="icons icon-share__circle icon-share__circle__fff add-to-fav animate-pulse add-to-fav__icon_over-galery">
				<?php echo $icon_id_save; ?>
			</div>
			<div class="icons icon-share__circle icon-share__circle__18C4C77 add-to-fav img-check__icon" style="display: none">
				<?php echo $icon_img_check_circle_Ellipse_23_25; ?>
			</div>
		</div>
		<div class="info-popup-idea-folder __square">
			<div class="icon">
				<img src="<?php echo SITEROOT; ?>images/idea-folder-icon.png">
			</div>
			<span>Save to My</span>
			<p></p>
			<a class="dontShowAgain_idea">Don't show again</a>
		</div>
		<div class="animating-imgs__wrap showroom-detail-view-product-page save-to-specs-sheet __square" data-toggle="modal" data-target="#.php">
			<div class="icons icon-share__circle icon-share__circle__18C4C77 add-to-fav animate-pulse add-to-fav__icon_save">
				<?php echo $icon_id_save; ?>
			</div>
			<div class="icons icon-share__circle icon-share__circle__18C4C77 save-v2 add-to-fav img-check__icon_v2" >
				<?php echo $icon_img_check_circle; ?>
			</div>
		</div>
		<?php
			$n=getUrlText($val['name']);
			$url_str = SITEROOT."product-".$val['item_id']."/".$n.".html";
		?>
		<p><a href="<?php echo $url_str; ?>" title="See details">See details</a></p>
<span onClick="add_item(<?php echo $val['item_id']; ?>)" 
class="card-el__hide-on-md product-purchase__add-to-card js-add-to-card-button accessories-page">
		quick add to cart
		</span>
	</div>
</li>
<?php
}
?>
</ul>


<ul class="accessories-products">

<?php
foreach($row_bottom_6_array as $val){
//for($i=0; $i<1; $i++){
?>
<li class="product-box" data-sub-html="Product description 1">
	<div>
		<div class="product-image">
			<?php
			$img=SITEROOT."saascustuploads/1/cart/medium/".$val['file_name'];		
			?>
			<img src="<?php echo $img; ?>" alt="">
		</div>
		<p class="product-title"><?php echo  $val['name']; ?></p>
		<p class="product-description__text"><?php echo $val['short_description']; ?></p>
		<div class="share-product-accessories">
			<a href="#"><?php echo $t_share; ?></a>
			<div class="animating-imgs__wrap showroom-detail-view-product-page idea-folder __square" data-toggle="modal" data-target="#saveToIdeaFolder">
				<div class="icons icon-share__circle icon-share__circle__fff add-to-fav animate-pulse add-to-fav__icon_over-galery">
					<?php echo $icon_id_save; ?>
				</div>
				<div class="icons icon-share__circle icon-share__circle__18C4C7 add-to-fav img-check__icon" style="display: none">
					<?php echo $icon_img_check_circle_Ellipse_23_25; ?>
				</div>
			</div>
			<div class="info-popup-idea-folder __square">
				<div class="icon">
					<img src="<?php echo SITEROOT; ?>images/idea-folder-icon.png">
				</div>
				<span>Save to My Inspirations</span>
				<p>
					<?php echo $val['description']; ?>
				</p>
				<a class="dontShowAgain_acc_idea">Don't show again</a>
			</div>
			<div class="animating-imgs__wrap showroom-detail-view-product-page save-to-specs-sheet __square" data-toggle="modal" data-target="#.php">
				<div class="icons icon-share__circle icon-share__circle__18C4C7 add-to-fav animate-pulse add-to-fav__icon_save">
					<?php echo $icon_id_save; ?>
				</div>
				<div class="icons icon-share__circle icon-share__circle__18C4C7 save-v2 add-to-fav img-check__icon_v2" style="display: none">
					<?php echo $icon_img_check_circle_Ellipse_23_25; ?>
				</div>
			</div>
			<div class="info-popup-spec-folder __square">
				<div class="icon">
					<img src="<?php echo SITEROOT; ?>images/spec-folder-icon.png">
				</div>
				<span>Save to spec folder</span>
				<p>
					<?php echo $val['description']; ?>
				</p>
				<a class="dontShowAgain_acc_spec">Don't show again</a>
			</div>
		</div>
		<div class="see-detail-product-accessories">
			<?php
			$n=getUrlText($val['name']);
			$url_str = SITEROOT."product-".$val['item_id']."/".$n.".html";
			?>
			<p><a href="<?php echo $url_str; ?>" title="See details">See details</a></p>
		</div>
		<div class="stars-review-price-btn">
			<div class=" stars-product-accessories">
				<div class="stars-container">
					<?php
					echo $icon_star_gold;
					echo $icon_star_gold;
					echo $icon_star_gold;
					echo $icon_star_gold;
					?>
					<img src="<?php echo SITEROOT; ?>images/stars.svg" alt="">
				</div>
			</div>
			<div class="reviews-counter-product-accessories">
				<p>115 reviews</p>
			</div>
			<div class="price">
				<p>Price: $<?php echo $val['price_flat']; ?></p>
			</div>
			<div class="btn-add-to-cart">
<span onClick="add_item(<?php echo $val['item_id']; ?>)" 
class="card-el__hide-on-md product-purchase__add-to-card js-add-to-card-button accessories-page">quick add to cart</span>
			</div>
		</div>
	</div>
</li>
<?php
}
?>
</ul>


<ul class="accessories-products landscape-accessories-products">
<?php
foreach($row_bottom_2_array as $val){
?>
<li class="product-box" data-sub-html="Product description 1" data-html="#video1">
	<div>
		<div class="product-image">
			<?php
			$img=SITEROOT."saascustuploads/1/cart/large/exwide/".$val['file_name'];		
			?>
			<img class="landscape-images" src="<?php echo $img; ?>" alt="">
		</div>
		<p class="product-title"><?php echo  $val['name']; ?></p>
		<p class="product-description__text"><?php echo $val['short_description']; ?></p>
	</div>
	<div class="stars-review-counter-accessories">
		<div class="stars-container">
			<?php
			echo $icon_star_gold;
			echo $icon_star_gold;
			echo $icon_star_gold;
			echo $icon_star_gold;
			?>
			<img src="<?php echo SITEROOT; ?>images/stars.svg" alt="">
		</div>
		<div class="reviews-counter-product-accessories">
			<p>115 reviews</p>
		</div>
		<div class="price">
			<p>Price: $<?php echo $val['price_flat']; ?></p>
		</div>
	</div>
	<div class="see-detail-product-accessories">
		<a href="#"><?php echo $t_share; ?></a>
		<div class="animating-imgs__wrap showroom-detail-view-product-page idea-folder __square" data-toggle="modal" data-target="#saveToIdeaFolder">
			<div class="icons icon-share__circle icon-share__circle__fff add-to-fav animate-pulse add-to-fav__icon_over-galery">
				<?php echo $icon_id_save; ?>
			</div>
			<div class="icons icon-share__circle icon-share__circle__18C4C77 add-to-fav img-check__icon" style="display: none">
				<?php echo $icon_img_check_circle_Ellipse_23_25; ?>
			</div>
		</div>
		<div class="info-popup-idea-folder __square">
			<div class="icon">
				<img src="<?php echo SITEROOT; ?>images/idea-folder-icon.png">
			</div>
			<span>Save to My</span>
			<p></p>
			<a class="dontShowAgain_idea">Don't show again</a>
		</div>
		<div class="animating-imgs__wrap showroom-detail-view-product-page save-to-specs-sheet __square" data-toggle="modal" data-target="#.php">
			<div class="icons icon-share__circle icon-share__circle__18C4C77 add-to-fav animate-pulse add-to-fav__icon_save">
				<?php echo $icon_id_save; ?>
			</div>
			<div class="icons icon-share__circle icon-share__circle__18C4C77 save-v2 add-to-fav img-check__icon_v2" >
				<?php echo $icon_img_check_circle; ?>
			</div>
		</div>
		<div class="info-popup-spec-folder __square">
			<div class="icon">
				<img src="<?php echo SITEROOT; ?>images/spec-folder-icon.png">
			</div>
			<span>Save to spec folder</span>
			<p>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an ....
			</p>
			<a class="dontShowAgain_spec">Don't show again</a>
		</div>
		<?php
			$n=getUrlText($val['name']);
			$url_str = SITEROOT."product-".$val['item_id']."/".$n.".html";
		?>
		<p><a href="<?php echo $url_str; ?>" title="See details">See details</a></p>
<span onClick="add_item(<?php echo $val['item_id']; ?>)" 
class="card-el__hide-on-md product-purchase__add-to-card js-add-to-card-button accessories-page">
		quick add to cart
		</span>
	</div>
</li>
<?php
}
?>
</ul>


<div id="infinite-block">

</div>

<div class="loading">
	<div class="ball"></div>
		<div class="ball"></div>
			<div class="ball"></div>
			</div>
		</div>
	</div>
</div>


<?php
//require_once($real_root.'/pages/views/virtual-assistant.php');
require_once($real_root.'/pages/views/mobile-show-footer-buttons.php');
require_once($real_root.'/pages/views/footer.php');
require_once($real_root.'/pages/views/modal-perfect-fit-guarantee.php');
require_once($real_root.'/pages/views/modal-free-shipping.php');
//require_once($real_root.'/pages/views/modal-save-to-idea-folder.php');
require_once($real_root.'/pages/views/modal-mobile-campany-block.php');
require_once($real_root.'/pages/views/modal-mobile-products-block.php');
require_once($real_root.'/pages/views/modal-mobile-time-line.php');
?>

<script src="<?php echo SITEROOT; ?>app.js"></script>
</body>
</html>


