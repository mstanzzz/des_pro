<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      <title>ClosetsToGo</title>
   <meta name="description" content="Accessories page"><link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">

</head>

<body class="html_accessories">
<?php
require_once($real_root.'/pages/views/header.php');

?>
<section class="home-mobile-buttons-block covid-block ">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="home-mobile-buttons-block__wrapper accessories">

<a href="#" onClick="go_back();" title="accessory-category" class="back-link" title='Accessory category' >
<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
<path d="M0 0h24v24H0V0z" fill="none"/>
<path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/>
</svg>
</a>
<p class="h2">
<span>
<?php echo $svg_code; ?>
</span>
<?php echo $name; ?>
<?php echo $description; ?>
</p>
</div>
</div>
</div>
</div>
</div>
</section>

<?php 
//echo $filt_block;
?>      
	  
<main class="main clearfix accessories">
<section class="breadcrumb-block pb-3 desktop-show">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12">
		<div class="breadcrumb-block__wrapper" aria-label="breadcrumb">
			<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo SITEROOT; ?>" title="main page">Home</a></li>
			<li class="breadcrumb-item"><a href="#" onClick="go_back();" title="Accessory category">Accessory Category</a></li>
			<li class="breadcrumb-item active" aria-current="page">Accessory</li>
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
			<?php  echo $svg_code; ?>
			</span>
			<div class="specification-detial-header__content">
			<p class="specification-detial-header__heading"><?php  echo $name; ?></p>
			<p class="specification-detial-header__text">
			<?php  echo $description; ?>
			</p>
			</div>
		</div>
	</div>
	<div class="col-12 col-lg-3">
		<div class="specification-detial-header__link-wrap">
			<!-- accessory-category.html -->
			<a href="#" onClick="go_back();" title="Back to categories" class="specification-detial-header__link">back to categories</a>
		</div>
	</div>
</div>
</div>
</div>
</section>
</main>


<script>
function get_opt(opt_id,indx){
	//alert(document.getElementById("attr_"+indx).value);
	document.getElementById("attr_"+indx).value = opt_id;	
	alert(document.getElementById("attr_"+indx).value);
}
</script>

<?php

$url_str = $nav->getCatUrl($name,$svg_id,'accessory');	
?>
<div style="margin-left:8%;">
<form name="filter_form" action="<?php echo $url_str; ?>" method="post" >
<input type='hidden' name='apply_filters' value='0' >
<section class="organizer-filters-block desktop-show">
<?php
$attr_block='';
$i=0;
foreach($filters as $val){
	if(is_array($val['filter_opts'])){
		if(count($val['filter_opts'])>0){
			$attr_block.= "<div style='float:left; margin-left:20px;'>";
			$attr_block.= "<p style='font-size:1.2em;' >".$val['attribute_name']."</p>";
			$attr_block.="<select name='opt_ids[]'>";
			$attr_block.="<option value='0' >All</option>";
			foreach($val['filter_opts'] as $op){
				$attr_block.="<option value='".$op['opt_id']."'>".$op['opt_name']."</option>";
			}
			$attr_block.="</select>";
			$attr_block.="</div>";
		}
	}
}
$attr_block.= "<div style='float:left; margin-left:20px;'>";
$attr_block.= "<button title='Go' type='submit' class='btn btn-secondary btn-enter-tag'>Go</button>";
$attr_block.="</div>";
$attr_block.="<div style='clear:both;'></div>"; 
echo $attr_block;
?>
</form>
</div>

<div style="clear:both;"></div> 

	  

<script>

function add_item(item_id){

	var site_root = "<?php echo SITEROOT; ?>";
	//var site_root = get_site_root();

	alert(item_id);

	var qty = 1;
	var addMsg = "1 Item Added";

	var url_str = site_root+"pages/cart-ajax/ajax-add-item.php?item_id="+item_id+"&qty="+qty;

	$.ajaxSetup({ cache: false}); 
	$.ajax({
		url: url_str,
		success: function(data) {	
			//alert(data);
			$(".MS_item_count" ).each(function() {
				$(this).text(data);
			});
						
		}
	});

}

</script>
	  
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

require_once($real_root.'/pages/views/virtual-assistant.php');
require_once($real_root.'/pages/views/mobile-show-footer-buttons.php');
require_once($real_root.'/pages/views/footer.php');
require_once($real_root.'/pages/views/modal-perfect-fit-guarantee.php');
require_once($real_root.'/pages/views/modal-free-shipping.php');
//require_once($real_root.'/pages/views/modal-save-to-idea-folder.php');
require_once($real_root.'/pages/views/modal-mobile-campany-block.php');
require_once($real_root.'/pages/views/modal-mobile-products-block.php');
require_once($real_root.'/pages/views/modal-mobile-time-line.php');

?>



   <script src="<?php echo SITEROOT; ?>app.js"></script></body>
</html>
