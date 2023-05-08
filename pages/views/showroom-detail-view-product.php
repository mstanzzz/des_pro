<!DOCTYPE html>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>ClosetsToGo | <?php echo $meta_title; ?></title>
<meta name="description" content="<?php //echo $short_description; ?>"/>
<link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">
</head>
<body class="clearfix product-detail showroom-detail__page tooltip__a">
<?php
$nav_el = "rooms";
require_once($real_root.'/pages/views/header.php');
$num_reviews=8;
$num_words=20;
$min_stars=5;
$r=$reviews->getMultiRandom($dbCustom,$num_reviews,$num_words,$min_stars);

?>

<main class="main showroom-detail-product clearfix">

<section class="breadcrumb-block showroom-detail-page desktop-show">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="breadcrumb-block__wrapper" aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo SITEROOT; ?>home.html">Home</a></li>
<li class="breadcrumb-item"><a href="<?php echo SITEROOT; ?>showroom.html" title="">Room Gallery</a></li>
<li class="breadcrumb-item"><a href="<?php echo $_SESSION['url_str']; ?>" title=""><?php echo $_SESSION['cat_name']; ?></a></li>
<li class="breadcrumb-item active" aria-current="page" title=""><?php echo $name; ?></li>
<!-- onClick="go_back();" -->
</ul>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="simple-block showroom-detail-product-heading">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="simple-block__border no-border p-0">
<div class="row">
<div class="col-12">
<div class="simple-block__heading">
<a href="showroom-detail-view-category.html" title="" class="showroom-detail-product-heading-back">
<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
<path d="M0 0h24v24H0V0z" fill="none"/>
<path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/>
</svg>
</a>
<h2 class="simple-block__heading--heading text-center">
<?php echo $name; ?>
</h2>
<a href="showroom-detail-view-categories.html" title="" class="showroom-detail-product-heading-close">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
<g transform="translate(0 -0.001)">
<g transform="translate(0 0.001)">
<path d="M13.326,12l10.4-10.4A.938.938,0,0,0,22.4.275L12,10.675,1.6.275A.938.938,0,0,0,.274,1.6L10.674,12,.274,22.4A.938.938,0,0,0,1.6,23.726L12,13.327l10.4,10.4A.938.938,0,0,0,23.725,22.4Z" transform="translate(0 -0.001)"/>
</g>
</g>
</svg>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<?php
if(!isset($main_img_file_name))$main_img_file_name='';
?>


<!--CAROUSEL SECTION-->
<section class="two-elements-block clearfix">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12 col-lg-6 z-index-two">
		<div class="caro-wrap js-switch-carosel-mobile-wrap position-sticky__a">
			<div class="image-bg-detail-view">
				<a href="https://youtu.be/Wb0JINqX71w">
				<img src="<?php echo SITEROOT; ?>images/bg-detail.png">
				</a>
			</div>

<!--			
			<div class="icons-f__p__s over-image-gallery">
				<div class="animating-imgs__wrap showroom-detail-view-product-page idea-folder" data-toggle="modal" data-target="#saveToIdeaFolder">
					<div class="icons icon-share__circle icon-share__circle__18C4C7 add-to-fav animate-pulse add-to-fav__icon_over-galery">
						<?php echo $icon_id_save_path_205_207; ?>
					</div>
					<div class="icons icon-share__circle icon-share__circle__18C4C7 add-to-fav img-check__icon" style="display: none">
						<?php echo $icon_img_check_circle; ?>
					</div>
				</div>
				<div class="animating-imgs__wrap showroom-detail-view-product-page save-to-specs-sheet" data-toggle="modal" data-target="#saveToSpecSheet">
					<div class="icons icon-share__circle icon-share__circle__18C4C7 add-to-fav animate-pulse add-to-fav__icon_save">
						<?php echo $icon_id_save_popup_spec; ?>
					</div>
					<div class="icons icon-share__circle icon-share__circle__18C4C7 save-v2 add-to-fav img-check__icon_v2"	style="display: none">
						<?php echo $icon_img_check_circle_Ellipse_23_25; ?>					
					</div>
				</div>
			</div>
-->			
			
<div class="showroom-detail-product__carousel image-gallery js-switch-carosel-mobile">

<div class="embed-responsive embed-responsive-4by3">
<?php 
	if($isMob){
		$img = SITEROOT."saascustuploads/1/cart/small/wide/".$main_img_file_name;		
	}else{
		$img = SITEROOT."saascustuploads/1/cart/large/".$main_img_file_name;
	}
	$tmp_iframe="<iframe
		class='yvideo'
		src='".$img."'
		frameborder='0'>
		</iframe>";
	echo $tmp_iframe; 
	
?>
</div>

<?php

//class="lg-object lg-image"

foreach($gallery_imgs as $val){			
	if(isset($val['file_name'])){
		if(strlen($val['file_name'])>4){
			if($isMob){	
				$img = SITEROOT."saascustuploads/1/cart/medium/".$val['file_name'];
			}else{
				$img = SITEROOT."saascustuploads/1/cart/large/".$val['file_name'];
			}
			echo "<a href='".$img."' title=''>";
			echo "<img src='".$img."' alt='' class='img-fluid'>";	
			echo "</a>";
		}
	}
}
?>				
</div>

<div class="popup-info-box">
	<?php //echo $icon_ellipse_25; ?>
</div>
<div class="info-popup-idea-folder-big">
<div class="icon">
<?php //echo $icon_id_save_popup; ?>
</div>
<span>Save to My Inspirations</span>
<p>
<?php echo $description; ?></p>
</p>
<a class="dontShowAgain_idea">Don't show again</a>
</div>
<div class="info-popup-spec-folder-big">
<div class="icon">
	<?php echo $icon_id_save_popup_spec; ?>
</div>
<span>Save to spec folder</span>
<p>
<?php echo $description; ?></p>
</p>
<a class="dontShowAgain_spec">Don't show again</a>
</div>
<div class="showroom-detail-product__carousel-nav">
<?php 
foreach($gallery_imgs as $val){
	if(isset($val['file_name'])){
		if(strlen($val['file_name'])>4){
			if($isMob){	
				$img_f = SITEROOT."saascustuploads/1/cart/medium/".$val['file_name'];
			}else{
				$img_f = SITEROOT."saascustuploads/1/cart/large/".$val['file_name'];
			}
			echo "<div>";
			echo "<img src='".$img_f."' alt='' class='img-fluid prod-detail__nav-img'>";	
			echo "</div>";
		}
	} 
}
?>
</div>
<div class="row">
<div class="col-12">
<div class="back-to-filters-wrap showroom-detail-product__more-btn">
<a href="#"  onClick="go_back();" title="" class="btn btn-primary pt-2 pb-2">back to filters</a>
<a href="<?php echo SITEROOT; ?>request-design.html" title="" class="btn-primary pt-2 pb-2 you-design">You design</a>
<a href="<?php echo SITEROOT; ?>request-design.html" title="" class="btn-primary pt-2 pb-2 we-design">We design</a>
</div>
</div>
</div>
</div>
</div>

<div class="popup-info-content-mobile">
<button class="close-popup-content-mobile">
	<?php echo $icon_btn_fill; ?>
</button>
<div class="icon">
<?php echo $icon_id_save_popup; ?>
</div>
<span>Save to My Inspirations</span>
<p>
<?php echo $description; ?></p>
</p>
<div class="icon">
<?php echo $icon_id_save_popup_spec; ?>
</div>
<span>Save to spec folder</span>
<p>
<?php echo $description; ?></p>
</p>
</div>
<div class="col-12 col-lg-6 z-index-one">
<div class="row product-collapse-container">
<div class="col-12">
<div class="product-nav-wrap showroom-detail-product-nav" data-nav="showroom-detail-product-nav">
<div class="product-nav-wrap__content">
<button class="product-nav-wrap__prev" style="display: none;">
<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
<path d="M0 0h24v24H0V0z" fill="none"/>
<path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/>
</svg>
</button>
<ul class="nav nav-pills product-nav" id="pills-tab" role="tablist">
<li class="nav-item">
<a class="nav-link product-nav__link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-selected="true">Description</a>
</li>
<!--
<li class="nav-item">
<a class="nav-link product-nav__link" id="pills-feaures-tab" data-toggle="pill" href="#pills-feaures" role="tab" aria-controls="pills-feaures" aria-selected="false">Feaures</a>
</li>
-->
<li class="nav-item">
<a class="nav-link product-nav__link" id="pills-specifications-tab" data-toggle="pill" href="#pills-specifications" role="tab" aria-controls="pills-specifications" aria-selected="false">Specs</a>
</li>
<!--
<li class="nav-item">
<a class="nav-link product-nav__link" id="pills-accessories-tab" data-toggle="pill" href="#pills-accessories" role="tab" aria-controls="pills-accessories" aria-selected="false">Accessories</a>
</li>
-->
<li class="nav-item">
<a class="nav-link product-nav__link" id="pills-Installations-tab" data-more-information=".more-Installations" data-toggle="pill" href="#pills-Installations" role="tab" aria-controls="pills-Installations" aria-selected="false">Installations</a>
</li>
</ul>

<button class="product-nav-wrap__next" style="display: flex;">
<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
<path d="M0 0h24v24H0V0z" fill="none"/>
<path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
</svg>
</button>
</div>
</div>




<!-- Description -->
<div class="tab-content product-tab-content showroom-detail-product-tab-content" id="pills-tabContent" data-target="pills-tabContent">
<div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
<div class="tab-content__text-wrap js-text-wrap">
<h4 style="color: #59C2C4; font-size:14px; font-weight: bold;">
<?php echo $name; ?>
</h4>
 
<p class="tab-content__text-wrap--title">
<?php echo $short_description; ?>
</p>
<div class="tab-content__text-wrap--content js-hidden-text small-text">
<p class="tab-content__text-wrap--text">
<?php echo $description; ?></p>
</div>
</div>

<button data-readall="Explore more" data-readless="Explore less" class="product-tab-content__link mt-2 p-0 mb-0 js-btn-read-all-text">
<span>Explore more</span>
</button>

<div class="you-we-design-buttons">
<div class="product-purchase__buttons">

<!--
<button class="product-purchase__buttons--share">
<?php echo $t_share; ?>
</button>
-->

<!--
<div class="animating-imgs__wrap showroom-detail-view-product-page idea-folder __square" data-toggle="modal" data-target="#saveToIdeaFolder">
<div class="icons icon-share__circle icon-share__circle__18C4C7 add-to-fav animate-pulse add-to-fav__icon_over-galery">
<?php echo $icon_id_save; ?>
</div>

<div class="icons icon-share__circle icon-share__circle__18C4C7 add-to-fav img-check__icon"
style="display: none">
<?php echo $icon_id_img_check_path_419; ?>
</div>                        
</div>
-->


<div class="parent_idea-folder">
<div class="info-popup-idea-folder __square">

<div class="icon">
<img src="<?php echo SITEROOT; ?>images/idea-folder-icon.png">
</div>

<span>Save to My Inspirations</span>
<p>
<?php echo $short_description; ?>
</p>
<a class="dontShowAgain_idea">Don't show again</a>
</div>                                             
</div>   

<!--
<div class="animating-imgs__wrap showroom-detail-view-product-page save-to-specs-sheet __square" data-toggle="modal" data-target="#saveToSpecSheet">
<div class="icons icon-share__circle icon-share__circle__18C4C7 add-to-fav animate-pulse add-to-fav__icon_save">
<?php echo $icon_id_save_40; ?>
</div>
<div class="icons icon-share__circle icon-share__circle__18C4C7 save-v2 add-to-fav img-check__icon_v2" style="display: none">
<?php echo $icon_img_check_circle_Ellipse_23_25; ?>
</div>                                             
</div>      
-->

<div class="parent_spec-folder">                                             
<div class="info-popup-spec-folder __square">
<div class="icon">
<img src="<?php echo SITEROOT; ?>images/spec-folder-icon.png">
</div>
<span>Save to spec folder</span>
<p>
Comming Soon</p>
<a class="dontShowAgain_spec">Don't show again</a>
</div>
</div>                                    
<?php
$dir = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/docs/";
foreach($doc_array as $val){
	$f=$dir.$val['file_name'];
	echo "<button class='product-purchase__buttons--pdf'>";
	echo "<a style='color:white; width:60px;' href='".$f."' target='_blank'>";
	echo "PDF";
	echo "</a>";
	echo "</button>";
	//break;
}
?>
</div>
</div>
</div>


<!-- FEATURES -->				
<div class="tab-pane fade" id="pills-feaures" role="tabpanel" aria-labelledby="pills-feaures-tab">
<div class="tab-feaures--wrapper">
<div class="row">
<div class="row">
<div class="col-12 col-lg-6 a__padding-nd_mobile __a">
<div class="first-fixed-block__text-group--items">
<img src="<?php echo SITEROOT; ?>images/package.svg" alt="">
<div class="first-fixed-block__text-group--text a__">
<p><?php echo $count_diy_inst; ?></p>
</div>
</div>
<p class="text__SDI-nd">Successful DIY Installations</p>
</div>
<div class="col-12 col-lg-6 a__padding-nd_mobile">

<?php
if(isset($r[0]['name'])){ 
?>
<div class="block-stars__wrapper a__">
	<img src="<?php echo SITEROOT; ?>images/rev2.png" alt="" class="block-stars__wrapper--image">
	<div class="block-stars__wrapper--text">
		<div class="stars-container">
			<?php echo $r[0]['stars']; ?>
		</div>
		<p class="first-text"><?php echo $r[0]['name'] ?></p>
		<p><?php echo $r[0]['msg']; ?></p>
	</div>
</div>
<?php } ?>

</div>

</div>
<div class="row row_nd-mobile">
<div class="col-12 js-specifications-subheading_v2">
<p class="tab-content__specifications--subheading tab-features__selection-detail mobile-style-diy">
Feature selection/detail
<img class="tab-content__specifications--subheading-icon-plus"  src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
<img class="tab-content__specifications--subheading-icon-minus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
</p>
</div>
<div class="col-12 col-12__nd__a collapse show padding-no__a-v2">
<div class="row row-with-desctop-border-bottom__nd">
<div class="col-12">
<div class="tab-content__specifications--images-block features-block">


<p class="tab-content__text-wrap--text">
<?php echo $short_description; ?>
</p>

<?php
$i=1;
foreach($feat_array as $val){
	if($i==1){
	$active = "active red-bg";
	}else{
	$active = "";
	}	
?>
	<div class="col-1 image-group__box js-set-red-bg js-open-specifications-tab-btn 
	<?php echo $active; ?>" data-toggle="tooltip" data-placement="top" data-open-description="#sizes">	
		<span onClick="feat_img_swap('<?php echo $val['file_name']; ?>')
			, feat_title_swap('<?php echo $val['title']; ?>')
			, feat_sub_title_swap('<?php echo $val['sub_title']; ?>')" 
			data-toggle="tooltip" data-placement="top" 
			title="<?php echo $val['title']; ?>">
			<?php echo $val['svg_code']; ?>
		</span>
		<span class="red__box-hover-eye nd" style="position: absolute;left: 0;bottom: 0;width: 100%;background: #384764;height: 11px;">
		<?php echo $icon_dewfew; ?>
		</span>
	</div>
	
	
<?php
$i++;
}
foreach($not_used_feat_array as $val){
?>
	<div class="col-1 image-group__box js-set-red-bg js-open-specifications-tab-btn <?php echo $active; ?>" 
		data-toggle="tooltip" data-placement="top" data-open-description="#sizes">	
		<span onClick="feat_img_swap('<?php echo $val['file_name']; ?>')
			, feat_title_swap('<?php echo $val['title']; ?>')
			, feat_sub_title_swap('<?php echo $val['sub_title']; ?>')" 
		class="" data-toggle="tooltip" data-placement="top" title="<?php echo $val['title']; ?>">
		<?php echo $val['svg_code']; ?>
		</span>
	</div>
<?php
}
?>
</div>

<div class="tab-content__specifications--images-block features-block">

</div>

<p class="tab-content__text-wrap--text__italic">
<svg xmlns="http://www.w3.org/2000/svg" width="27.00" height="16.375" viewBox="0 0 27.47 16.375">
<path id="dewfew" d="M13.735,98.725c-5.248,0-10.008,2.871-13.52,7.535a1.087,1.087,0,0,0,0,1.3c3.512,4.67,8.272,7.541,13.52,7.541s10.008-2.871,13.52-7.535a1.087,1.087,0,0,0,0-1.3C23.743,101.6,18.983,98.725,13.735,98.725Zm.376,13.953a5.778,5.778,0,1,1,5.389-5.389A5.781,5.781,0,0,1,14.111,112.678Zm-.174-2.664a3.111,3.111,0,1,1,2.905-2.905A3.106,3.106,0,0,1,13.937,110.014Z" transform="translate(0 -98.725)" fill="#384765"/>
</svg>
<i>
<?php echo $short_description; ?>
</i>
</p>
<div class="parent_romb">
<span class="romb"></span>
</div>

<div class="card-feature tab--feaures_nd" data-select="feature-item">

<div class="titles">
<p id="feat_title" class="card-feature__title nd">

</p>
<p id="feat_sub_title" class="card-feature__title-sub nd">

</p>
</div>

<div class="icons-f__p__s">
<div class="product-purchase__buttons">
<div class="animating-imgs__wrap showroom-detail-view-product-page idea-folder mini_v2"  data-toggle="modal" data-target="#saveToIdeaFolder">
<div class="icons icon-share__circle icon-share__circle__18C4C7 add-to-fav animate-pulse add-to-fav__icon_over-galery">
<?php echo $icon_id_save; ?>
</div>
<div class="icons icon-share__circle icon-share__circle__18C4C7 ns add-to-fav img-check__icon" style="display: none">
<?php echo $icon_id_img_check_29; ?>
</div>
</div>
<div class="animating-imgs__wrap showroom-detail-view-product-page save-to-specs-sheet mini_v2" data-toggle="modal" data-target="#saveToSpecSheet">
<div class="icons icon-share__circle icon-share__circle__18C4C7 add-to-fav animate-pulse add-to-fav__icon_save">
<?php echo $icon_id_save_circle; ?>
</div>
<div class="icons icon-share__circle icon-share__circle__18C4C7 add-to-fav img-check__icon_v2" style="display: none">
<?php echo $icon_id_img_check_circle_ellipse_23; ?>
</div>
</div>    
<div class="icons icon-share__circle- icon-share__circle__gray nd">
<?php echo $icon_share_white; ?>
</div>
</div>
</div>                                                         


<div class="info-popup-idea-folder mini">
<div class="icon">
</div>
<span>Save to My Inspirations</span>
<p>
<?php echo $short_description; ?>
</p>
<a class="dontShowAgain_idea">Don't show again</a>
</div>
<div class="info-popup-spec-folder mini">
<div class="icon">
<?php echo $icon_id_save_popup_spec; ?>
</div>
<span>Save to spec folder</span>
<p>
<?php echo $short_description; ?>
</p>
<a class="dontShowAgain_spec">Don't show again</a>
</div>


<div class="card-feature__img a__" data-feature="replace-image">
<?php
$img = SITEROOT."saascustuploads/1/cart/medium/wide/".$main_img_file_name;
?>
<img id="img-from-icons" src="<?php echo $img; ?>" class="img-fluid" alt="showroom-detail-view-product">
</div>


<div class="phantom-actions__dropdowns__a">
<div class="phantom-actions__dropdowns accordion active nd" id="collapseFeature-parent-2">
<div class="row margin-none no-popup">
<div id="collapseFeature-11" class="collapse show border-nd_hove_nd collapseFeature-opacity_class"
aria-labelledby="headingOne"
data-parent="#collapseFeature-parent-2">
</div>
</div>
<div id="collapseFeature-12" class="border-nd_hove_nd collapseFeature-opacity_class collapse show border-nd_hove_nd"
aria-labelledby="headingOne"
data-parent="#collapseFeature-parent-2">
</div>
<div id="collapseFeature-13" class="border-nd_hove_nd collapseFeature-opacity_class collapse show border-nd_hove_nd"
aria-labelledby="headingOne"
data-parent="#collapseFeature-parent-2">
</div>
<div id="collapseFeature-22" class="collapse show"
aria-labelledby="headingOne"
data-parent="#collapseFeature-parent-2">
</div>
<div id="collapseFeature-33" class="collapse show"
aria-labelledby="headingOne"
data-parent="#collapseFeature-parent-2">
</div>
<div id="collapseFeature-44" class="collapse show"
aria-labelledby="headingOne"
data-parent="#collapseFeature-parent-2">
</div>
<div id="collapseFeature-55" class="collapse show"
aria-labelledby="headingOne"
title="Second Simple name">
</div>
<div id="collapseFeature-66" class="collapse show"
aria-labelledby="headingOne"
data-parent="#collapseFeature-parent-2">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="row tab-viideo--wrapper margin-mobile__a">
<div class="col-12 js-specifications-subheading_v2">
<p class="tab-content__specifications--subheading tab-video__selection-detail mt-nd__a mobile-style-diy">
Videos
<img class="tab-content__specifications--subheading-icon-plus"  src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
<img class="tab-content__specifications--subheading-icon-minus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
</p>
</div>
<div class="col-12 collapse show padding-t_v4">
<?php
foreach($video_array as $val){
?>
	<div class="col-lg-4 showroom-detail-product-col-lg mw_">
		<div class="showroom-detail-product-video">
			<div class="embed-responsive embed-responsive-4by3">
				<?php 
				echo $val['embed']; 
				?>
			</div>
		</div>
	</div>
<?php
}
?>
</div>
</div>
</div>
</div>
</div>





<!--  accessories -->

<div class="tab-pane fade" id="pills-accessories" role="tabpanel" aria-labelledby="pills-accessories-tab">
<div class="tab-feaures--wrapper">
<div class="row">
<div class="row">
<div class="col-12 col-lg-6 a__padding-nd_mobile __a">
<div class="first-fixed-block__text-group--items">
<img src="<?php echo SITEROOT; ?>images/package.svg" alt="">
<div class="first-fixed-block__text-group--text a__">
<p><?php echo $count_diy_inst; ?></p>
</div>
</div>
<p class="text__SDI-nd">Successful DIY Installations</p>
</div>
<div class="col-12 col-lg-6 a__padding-nd_mobile">

<?php
if(isset($r[1]['name'])){ 
?>
<div class="block-stars__wrapper a__">
	<img src="<?php echo SITEROOT; ?>images/Rectangle12.png" alt="" class="block-stars__wrapper--image">
	<div class="block-stars__wrapper--text">
		<div class="stars-container">
		<?php echo $r[1]['stars']; ?>
		</div>
		<p class="first-text"><?php echo $r[0]['name']; ?></p>
		<p><?php echo $r[1]['msg']; ?></p>
	</div>
</div>
<?php } ?>
</div>
</div>

<div class="row row_nd-mobile">
<div class="col-12 js-specifications-subheading_v2">
<p class="tab-content__specifications--subheading tab-features__selection-detail mobile-style-diy">
Accessory selection/detail
<img class="tab-content__specifications--subheading-icon-plus"  src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
<img class="tab-content__specifications--subheading-icon-minus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
</p>
</div>

<div class="col-12 col-12__nd__a collapse show padding-no__a-v2">
<div class="row row-with-desctop-border-bottom__nd">
<div class="col-12">
<div class="tab-content__specifications--images-block features-block">
<p class="tab-content__text-wrap--text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut.</p>
<?php
$ln=0;
$i=1;
foreach($s_f_acces_array as $val){
	//if($i<2){
	//$active = "active red-bg";
	//}else{
	//$active = "";
	//}
	$i++;
	$active = "";
?>
	<div class="col-1 image-group__box js-set-red-bg js-open-specifications-tab-btn <?php echo $active; ?>" 
		data-toggle="tooltip" data-placement="top" data-open-description="#sizes">	
		<span onClick="s_f_acces_img_swap('<?php echo $val['file_name']; ?>')
				,s_f_acces_title_swap('<?php echo $val['title']; ?>')
				,s_f_acces_sub_title_swap('<?php echo $val['sub_title']; ?>')" 
				class="" data-toggle="tooltip" data-placement="top" title="Simple name">
				<?php echo $val['svg_code']; ?>
				<span class="red__box-hover-eye nd" 
				style="position: absolute;left: 0;bottom: 0;width: 100%;background: #384764;height: 11px;">
				<?php echo $icon_dewfew; ?>
				</span>
		</span>
	</div>
<?php
}				
foreach($not_used_s_f_acces_array as $val){
?>
	<div class="col-1 image-group__box js-set-red-bg js-open-specifications-tab-btn <?php echo $active; ?>" data-toggle="tooltip" data-placement="top" data-open-description="#sizes">	
		<span onClick="feat_img_swap('<?php echo $val['file_name']; ?>')" class="" data-toggle="tooltip" data-placement="top" title="Simple name">
		<?php echo $val['svg_code']; ?>
		</span>
	</div>
<?php
}
?>
</div>
<div  class="tab-content__specifications--images-block features-block">

</div>

<p class="tab-content__text-wrap--text__italic">
<svg xmlns="http://www.w3.org/2000/svg" width="27.00" height="16.375" viewBox="0 0 27.47 16.375">
<path id="dewfew" d="M13.735,98.725c-5.248,0-10.008,2.871-13.52,7.535a1.087,1.087,0,0,0,0,1.3c3.512,4.67,8.272,7.541,13.52,7.541s10.008-2.871,13.52-7.535a1.087,1.087,0,0,0,0-1.3C23.743,101.6,18.983,98.725,13.735,98.725Zm.376,13.953a5.778,5.778,0,1,1,5.389-5.389A5.781,5.781,0,0,1,14.111,112.678Zm-.174-2.664a3.111,3.111,0,1,1,2.905-2.905A3.106,3.106,0,0,1,13.937,110.014Z" transform="translate(0 -98.725)" fill="#384765"/>
</svg>
<i><?php echo $description; ?></i>
</p>
<div class="parent_romb">
<span class="romb"></span>
</div>
<div class="card-feature tab--feaures_nd" data-select="feature-item">
<div class="titles">
<p id="s_f_acces_title"    class="card-feature__title nd">
<?php echo $description; ?></p>
<p id="s_f_acces_sub_title" class="card-feature__title-sub nd">
Current Simple name selected
</p>
</div>


<div class="icons-f__p__s">
<div class="product-purchase__buttons">
<div class="animating-imgs__wrap showroom-detail-view-product-page idea-folder mini_v2"  data-toggle="modal" data-target="#saveToIdeaFolder">
<div class="icons icon-share__circle icon-share__circle__18C4C7 add-to-fav animate-pulse add-to-fav__icon_over-galery">
<svg id="Save" xmlns="http://www.w3.org/2000/svg" width="30"
height="30" viewBox="0 0 25.6 23.023">
<path id="Path_205" data-name="Path 205"
d="M25.6,4.963v7.6a1,1,0,0,1-1,1h-.55a1,1,0,0,1-.724-.31L18.974,8.69l-7.748,9.89a1,1,0,0,1-.787.383h0a1,1,0,0,1-.787-.384L7.006,15.195,5.592,17.034a1,1,0,0,1-1.585-1.22l2.2-2.861A1,1,0,0,1,7,12.563H7a1,1,0,0,1,.788.384L10.44,16.34l7.672-9.794a1,1,0,0,1,1.511-.073L23.6,10.642V4.963a2,2,0,0,0-2-2H4a2,2,0,0,0-2,2v14a2,2,0,0,0,2,2h6.55a1,1,0,0,1,0,2H4a4,4,0,0,1-4-4v-14a4,4,0,0,1,4-4H21.6A4,4,0,0,1,25.6,4.963ZM4,7.563a3,3,0,1,1,3,3A3,3,0,0,1,4,7.563Zm2,0a1,1,0,1,0,1-1A1,1,0,0,0,6,7.563Z"
transform="translate(0 -0.963)"
fill="#18C4C7"></path>
<path id="Path_207" class="plus_a" data-name="Path 207"
d="M11.836-4.736H8.076v3.76H6.1v-3.76H2.324V-6.719H6.1V-10.5H8.076v3.779h3.76Z"
fill="#18C4C7"></path>
</svg>
</div>

<div class="icons icon-share__circle icon-share__circle__18C4C7 ns add-to-fav img-check__icon"
style="display: none">
<svg id="img-check" class="img-check" data-name="Group 781"
xmlns="http://www.w3.org/2000/svg" width="30"
height="30"
viewBox="0 0 31.189 32.043">
<path id="Path_419" class="icon__scale-down"
data-name="Path 419"
d="M26.825,5.154v7.964a1.048,1.048,0,0,1-1.048,1.048H25.2a1.048,1.048,0,0,1-.759-.325L19.882,9.06,11.764,19.423a1.048,1.048,0,0,1-.825.4h0a1.048,1.048,0,0,1-.825-.4L7.342,15.876,5.859,17.8A1.048,1.048,0,0,1,4.2,16.525l2.306-3a1.048,1.048,0,0,1,.826-.409h0a1.048,1.048,0,0,1,.826.4l2.779,3.556,8.04-10.263a1.048,1.048,0,0,1,1.583-.077l4.167,4.369V5.154a2.1,2.1,0,0,0-2.1-2.1H4.191a2.1,2.1,0,0,0-2.1,2.1v14.67a2.1,2.1,0,0,0,2.1,2.1h6.863a1.048,1.048,0,0,1,0,2.1H4.191A4.2,4.2,0,0,1,0,19.825V5.154A4.2,4.2,0,0,1,4.191.963H22.634A4.2,4.2,0,0,1,26.825,5.154ZM4.191,7.879a3.144,3.144,0,1,1,3.144,3.144A3.147,3.147,0,0,1,4.191,7.879Zm2.1,0A1.048,1.048,0,1,0,7.335,6.831,1.049,1.049,0,0,0,6.287,7.879Z"
fill="#fff"/>
<rect id="Rectangle_148" class="icon__scale-down"
data-name="Rectangle 148" width="16" height="14"
rx="2"
fill="#fff"/>
<path id="Path_460" class="icon__scale-up"
data-name="Path 460"
d="M7.905,56.579l-4.3,4.3a.815.815,0,0,1-1.153,0L.238,58.657A.815.815,0,0,1,1.391,57.5l1.642,1.642,3.72-3.72a.815.815,0,0,1,1.153,1.153Z"/>
</svg>
</div>
</div>
<div class="animating-imgs__wrap showroom-detail-view-product-page save-to-specs-sheet mini_v2" data-toggle="modal" data-target="#saveToSpecSheet">
<div class="icons icon-share__circle icon-share__circle__18C4C7 add-to-fav animate-pulse add-to-fav__icon_save">
<svg id="Save" xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 33.398 33.33">
<circle id="Ellipse_23" data-name="Ellipse 23" cx="16.5" cy="16.5" r="16.5" fill="#fff"></circle>
<g id="Group_597" data-name="Group 597" transform="translate(0.068)">
<path id="Path_4344" data-name="Path 434" d="M94.586,100.138H87.051l-1.985-1.8H81.683a.47.47,0,0,0-.469.469v11.522a.47.47,0,0,0,.469.469h.356l1.871-9.631H95.055v-.558A.47.47,0,0,0,94.586,100.138Z" transform="translate(-71.859 -87.074)" fill="#18c4c7"></path>
<path id="Path_435" data-name="Path 435" d="M16.666,0A16.665,16.665,0,1,0,33.331,16.665,16.665,16.665,0,0,0,16.666,0Zm8.582,23.633a2.221,2.221,0,0,1-2.149,2.1c-.011,0-.022,0-.033,0H9.516A2.224,2.224,0,0,1,7.3,23.517v-12.1A2.224,2.224,0,0,1,9.517,9.2h4.219l2.084,1.892h7.245a2.224,2.224,0,0,1,2.221,2.222V13.9h1.989Z" transform="translate(-0.001)" fill="#18c4c7"></path>
</g>
<circle id="Ellipse_25" fill="#18c4c7" data-name="Ellipse 25" cx="6" cy="6" r="6" transform="translate(16 17)"></circle>
<path id="Path_207" data-name="Path 207" d="M11.836-4.736H8.076v3.76H6.1v-3.76H2.324V-6.719H6.1V-10.5H8.076v3.779h3.76Z" fill="#18C4C7"></path>
</svg>
</div>
<div class="icons icon-share__circle icon-share__circle__18C4C7 add-to-fav img-check__icon_v2"
style="display: none">
<svg id="img-check" class="img-check" data-name="Group 781"
xmlns="http://www.w3.org/2000/svg" width="29"
height="29"
viewBox="0 0 31.189 32.043">
<circle id="Ellipse_23" data-name="Ellipse 23" cx="17" cy="17" r="15" fill="#fff"></circle>
<g id="Group_597" data-name="Group 597" transform="translate(0.068)">
<path id="Path_4344" data-name="Path 434" d="M94.586,100.138H87.051l-1.985-1.8H81.683a.47.47,0,0,0-.469.469v11.522a.47.47,0,0,0,.469.469h.356l1.871-9.631H95.055v-.558A.47.47,0,0,0,94.586,100.138Z" transform="translate(-71.859 -87.074)" fill="#18c4c7"></path>
<path id="Path_435" data-name="Path 435" d="M16.666,0A16.665,16.665,0,1,0,33.331,16.665,16.665,16.665,0,0,0,16.666,0Zm8.582,23.633a2.221,2.221,0,0,1-2.149,2.1c-.011,0-.022,0-.033,0H9.516A2.224,2.224,0,0,1,7.3,23.517v-12.1A2.224,2.224,0,0,1,9.517,9.2h4.219l2.084,1.892h7.245a2.224,2.224,0,0,1,2.221,2.222V13.9h1.989Z" transform="translate(-0.001)" fill="#18c4c7"></path>
</g>
<circle id="Ellipse_25" fill="#18c4c7" data-name="Ellipse 25" cx="6" cy="6" r="6" transform="translate(16 17)"></circle>
<path id="Path_2319" class="bg-plus" data-name="Path 2319" d="M10.089-5.794H7.02v3.069H5.409V-5.794H2.324V-7.413H5.409V-10.5H7.02v3.085h3.069Z" transform="translate(16.08 29.904)" fill="#fff"></path>
<rect id="Rectangle_148" class="icon__scale-down"
data-name="Rectangle 148" width="12" height="12"
rx="55"
fill="#fff"/>
<path id="Path_460" class="icon__scale-up"
data-name="Path 460"
d="M7.905,56.579l-4.3,4.3a.815.815,0,0,1-1.153,0L.238,58.657A.815.815,0,0,1,1.391,57.5l1.642,1.642,3.72-3.72a.815.815,0,0,1,1.153,1.153Z"/>
</svg>
</div>
</div>    
<div class="icons icon-share__circle- icon-share__circle__gray nd">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 23.547 25.688">
<defs>
<style>.share-white {
fill: #fff;
}
</style>
</defs>
<g transform="translate(0)">
<path class="share-white" d="M321.625,19.479A3.478,3.478,0,1,1,318.147,16a3.479,3.479,0,0,1,3.478,3.478Zm0,0" transform="translate(-298.881 -15.197)"></path>
<path class="share-white" d="M302.949,8.563a4.281,4.281,0,1,1,4.281-4.281A4.286,4.286,0,0,1,302.949,8.563Zm0-6.957a2.676,2.676,0,1,0,2.676,2.676,2.679,2.679,0,0,0-2.676-2.676Zm0,0" transform="translate(-283.683 0)"></path>
<path class="share-white" d="M321.625,360.811a3.478,3.478,0,1,1-3.478-3.479A3.478,3.478,0,0,1,321.625,360.811Zm0,0" transform="translate(-298.881 -339.404)"></path>
<path class="share-white" d="M302.949,349.895a4.281,4.281,0,1,1,4.281-4.281A4.286,4.286,0,0,1,302.949,349.895Zm0-6.957a2.676,2.676,0,1,0,2.676,2.676A2.679,2.679,0,0,0,302.949,342.938Zm0,0" transform="translate(-283.683 -324.207)"></path>
<path class="share-white" d="M22.957,190.146a3.479,3.479,0,1,1-3.479-3.479A3.479,3.479,0,0,1,22.957,190.146Zm0,0" transform="translate(-15.197 -177.303)"></path>
<path class="share-white" d="M4.281,179.23a4.281,4.281,0,1,1,4.281-4.281,4.286,4.286,0,0,1-4.281,4.281Zm0-6.957a2.676,2.676,0,1,0,2.676,2.676,2.679,2.679,0,0,0-2.676-2.676Zm0,0" transform="translate(0 -162.105)"></path>
<path class="share-white" d="M115.42,98.019a1.07,1.07,0,0,1-.531-2l9.931-5.662a1.07,1.07,0,1,1,1.06,1.86l-9.932,5.662a1.063,1.063,0,0,1-.529.14Zm0,0" transform="translate(-108.611 -85.688)"></path>
<path class="share-white" d="M125.372,274.022a1.064,1.064,0,0,1-.529-.14l-9.932-5.662a1.07,1.07,0,0,1,1.06-1.86l9.932,5.662a1.07,1.07,0,0,1-.531,2Zm0,0" transform="translate(-108.633 -252.862)"></path>
</g>
</svg>
</div>
</div>
</div>

<div class="info-popup-idea-folder mini">
<div class="icon">
<svg id="Save-popup" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25.6 23.023">
<path id="Path_205" data-name="Path 205" d="M25.6,4.963v7.6a1,1,0,0,1-1,1h-.55a1,1,0,0,1-.724-.31L18.974,8.69l-7.748,9.89a1,1,0,0,1-.787.383h0a1,1,0,0,1-.787-.384L7.006,15.195,5.592,17.034a1,1,0,0,1-1.585-1.22l2.2-2.861A1,1,0,0,1,7,12.563H7a1,1,0,0,1,.788.384L10.44,16.34l7.672-9.794a1,1,0,0,1,1.511-.073L23.6,10.642V4.963a2,2,0,0,0-2-2H4a2,2,0,0,0-2,2v14a2,2,0,0,0,2,2h6.55a1,1,0,0,1,0,2H4a4,4,0,0,1-4-4v-14a4,4,0,0,1,4-4H21.6A4,4,0,0,1,25.6,4.963ZM4,7.563a3,3,0,1,1,3,3A3,3,0,0,1,4,7.563Zm2,0a1,1,0,1,0,1-1A1,1,0,0,0,6,7.563Z" transform="translate(0 -0.963)" fill="#fff"></path>
<path id="Path_207" data-name="Path 207" d="M11.836-4.736H8.076v3.76H6.1v-3.76H2.324V-6.719H6.1V-10.5H8.076v3.779h3.76Z" fill="#fff"></path>
</svg>
</div>
<span>Save to My Inspirations</span>
<p>
<?php echo $short_description; ?>
</p>
<a class="dontShowAgain_idea">Don't show again</a>
</div>
<div class="info-popup-spec-folder mini">
<div class="icon">

<svg id="Save-popup-spec" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 33.398 33.33">
<circle id="Ellipse_23" data-name="Ellipse 23" cx="16.5" cy="16.5" r="16.5" fill="#fff"></circle>
<g id="Group_597" data-name="Group 597" transform="translate(0.068)">
<path id="Path_4344" data-name="Path 434" d="M94.586,100.138H87.051l-1.985-1.8H81.683a.47.47,0,0,0-.469.469v11.522a.47.47,0,0,0,.469.469h.356l1.871-9.631H95.055v-.558A.47.47,0,0,0,94.586,100.138Z" transform="translate(-71.859 -87.074)" fill="#18c4c7"></path>
<path id="Path_435" data-name="Path 435" d="M16.666,0A16.665,16.665,0,1,0,33.331,16.665,16.665,16.665,0,0,0,16.666,0Zm8.582,23.633a2.221,2.221,0,0,1-2.149,2.1c-.011,0-.022,0-.033,0H9.516A2.224,2.224,0,0,1,7.3,23.517v-12.1A2.224,2.224,0,0,1,9.517,9.2h4.219l2.084,1.892h7.245a2.224,2.224,0,0,1,2.221,2.222V13.9h1.989Z" transform="translate(-0.001)" fill="#18c4c7"></path>
</g>
<circle id="Ellipse_25" fill="#18c4c7" data-name="Ellipse 25" cx="6" cy="6" r="6" transform="translate(16 17)"></circle>
<path id="Path_207" data-name="Path 207" d="M11.836-4.736H8.076v3.76H6.1v-3.76H2.324V-6.719H6.1V-10.5H8.076v3.779h3.76Z" fill="#18C4C7"></path>
</svg>
</div>
<span>Save to spec folder</span>
<p>
<?php echo $short_description; ?>
</p>
<a class="dontShowAgain_spec">Don't show again</a>
</div>
<div class="card-feature__img a__" data-feature="replace-image">

<img id="img-from-icons2" src="<?php echo $img; ?>" class="img-fluid" alt="showroom-detail-view-product">

</div>
<div class="phantom-actions__dropdowns__a">
<div class="phantom-actions__dropdowns accordion active nd"
id="collapseFeature-parent-2">
<div class="row margin-none no-popup">
<div id="collapseFeature-11" class="collapse show border-nd_hove_nd collapseFeature-opacity_class"
aria-labelledby="headingOne"
data-parent="#collapseFeature-parent-2">
<div class="row margin_bottom-none__a">
</div>
</div>
</div>

<div id="collapseFeature-12" class="border-nd_hove_nd collapseFeature-opacity_class collapse show border-nd_hove_nd"
aria-labelledby="headingOne"
data-parent="#collapseFeature-parent-2">
</div>
<div id="collapseFeature-13" class="border-nd_hove_nd collapseFeature-opacity_class collapse show border-nd_hove_nd"
aria-labelledby="headingOne"
data-parent="#collapseFeature-parent-2">
</div>
<div id="collapseFeature-22" class="collapse show"
aria-labelledby="headingOne"
data-parent="#collapseFeature-parent-2">
</div>
<div id="collapseFeature-33" class="collapse show"
aria-labelledby="headingOne"
data-parent="#collapseFeature-parent-2">
</div>
<div id="collapseFeature-44" class="collapse show"
aria-labelledby="headingOne"
data-parent="#collapseFeature-parent-2">
</div>
<div id="collapseFeature-55" class="collapse show"
aria-labelledby="headingOne"
title="Second Simple name">
</div>
<div id="collapseFeature-66" class="collapse show"
aria-labelledby="headingOne"
data-parent="#collapseFeature-parent-2">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="row tab-viideo--wrapper margin-mobile__a">
<div class="col-12 js-specifications-subheading_v2">
<p class="tab-content__specifications--subheading tab-video__selection-detail mt-nd__a mobile-style-diy">
Videos
<img class="tab-content__specifications--subheading-icon-plus"  src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
<img class="tab-content__specifications--subheading-icon-minus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
</p>
</div>
<div class="col-12 collapse show padding-t_v4">
<?php
foreach($video_array as $val){
?>
	<div class="col-lg-4 showroom-detail-product-col-lg mw_">
		<div class="showroom-detail-product-video">
			<div class="embed-responsive embed-responsive-4by3">
				<?php 
				echo $val['embed']; 
				?>
			</div>
		</div>
	</div>
<?php
}
?>
</div>
</div>
</div>
</div>
</div>





<!-- SPECS -->
<div class="tab-pane fade specs_content" id="pills-specifications" role="tabpanel" aria-labelledby="pills-specifications-tab">
<div class="tab-content__">
<div class="row">
<div class="col-12 col-lg-6 margin__a-nd">
<div class="first-fixed-block__text-group--items">
<img src="<?php echo SITEROOT; ?>images/package.svg" alt="">
<div class="first-fixed-block__text-group--text a__">
<p><?php echo $count_diy_inst; ?></p>
</div>
</div>
<p class="text__SDI-nd">Successful DIY Installations</p>
</div>
<div class="col-12 col-lg-6">
<?php
if(isset($r[2]['name'])){ 
?>
<div class="block-stars__wrapper a__">
	<img src="<?php echo SITEROOT; ?>images/rev2.png" alt="" class="block-stars__wrapper--image">
	<div class="block-stars__wrapper--text">
		<div class="stars-container">
		<?php echo $r[2]['stars']; ?>
		</div>
		<p class="first-text"><?php echo $r[2]['name']; ?></p>
		<p><?php echo $r[2]['msg']; ?></p>
	</div>
</div>
<?php } ?>
</div>
</div>

<div class="row">
<div class="col-12 js-specifications-subheading_v2 padding-no__a-v2">
<p class="tab-content__specifications--subheading tab-features__selection-detail mobile-style-diy">
Specification Details
<img class="tab-content__specifications--subheading-icon-plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
<img class="tab-content__specifications--subheading-icon-minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
</p>
</div>
<div class="col-12 padding-no__a-v2 margin-top-then_m">
<div class="row-with-desctop-border-bottom__nd">
<div class="col-12">
<div class="tab-content__specifications--images-block features-block">
<p class="tab-content__text-wrap--text">
<?php echo $spec_pink_area; ?>
</p>
</div>
</div>



<div class="pdf_download-section__box__a">
<?php
$dir = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/docs/";
foreach($doc_array as $val){
	$f=$dir.$val['file_name'];
	echo "<div class='pdf_download-section'>";
	echo "<a href='".$f."' target='_blank'>";
	echo "<button class='product-purchase__buttons--pdf'>";
	echo "PDF";
	echo "</button>";
	echo $val['name'];	
	echo "</a>";
	echo "</div>";
}
?>
</div>
</div>
</div>
</div>

<div class="row tab-viideo--wrapper">
<div class="col-12 js-specifications-subheading_v2 margin__v4">
<p class="tab-content__specifications--subheading tab-video__selection-detail mobile-style-diy">
Videos
<img class="tab-content__specifications--subheading-icon-plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
<img class="tab-content__specifications--subheading-icon-minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
</p>
</div>
<div class="col-12 padding-t_v4 margin-top-then_m">
<?php
foreach($video_array as $val){
?>
	<div class="col-lg-4 showroom-detail-product-col-lg mw_">
		<div class="showroom-detail-product-video">
			<div class="embed-responsive embed-responsive-4by3">
				<?php 
				echo $val['embed']; 
				?>
			</div>
		</div>
	</div>
<?php
}
?>
</div>
</div>
<br />
<div class="row">
<div class="col-12 col-lg-6">
<div class="first-fixed-block__text-group--items">
<img src="<?php echo SITEROOT; ?>images/package.svg" alt="">
<div class="first-fixed-block__text-group--text a__">
<p><?php echo $count_diy_inst; ?></p>
</div>
</div>
<p class="text__SDI-nd">Successful DIY Installations</p>
</div>
<div class="col-12 col-lg-6">
<?php
if(isset($r[3]['name'])){ 
?>
<div class="block-stars__wrapper a__">
	<img src="<?php echo SITEROOT; ?>images/rev2.png" alt="" class="block-stars__wrapper--image">
	<div class="block-stars__wrapper--text">
		<div class="stars-container">
			<?php echo $r[3]['stars']; ?>
		</div>
		<p class="first-text"><?php echo $r[3]['name']; ?></p>
		<p><?php echo $r[3]['msg']; ?></p>
	</div>

</div>
<?php } ?>	
</div>
</div>
</div>
</div>


<?php
//$difficulty=0;
?>

<!-- Installations -->
<div class="tab-pane fade" id="pills-Installations" role="tabpanel" aria-labelledby="pills-Installations-tab">
<div class="row row-padding__a">
<div class="col-12 col-lg-6">
<div class="first-fixed-block__text-group--items">
<img src="<?php echo SITEROOT; ?>images/package.svg" alt="">
<div class="first-fixed-block__text-group--text a__text-positions">
<p><?php echo $count_diy_inst; ?></p>
</div>
</div>
<?php
//if($difficulty>0){
	echo "<p class='text__SDI-nd'>Successful DIY Installations</p>";
//}
?>
</div>
<div class="col-12 col-lg-6">

<?php
if(isset($r[4]['name'])){ 
?>
<div class="block-stars__wrapper a__">
	<img src="<?php echo SITEROOT; ?>images/Rectangle12.png" alt="" class="block-stars__wrapper--image">
	<div class="block-stars__wrapper--text">
		<div class="stars-container">
			<?php echo $r[4]['stars']; ?>
		</div>
		<p class="first-text"><?php echo $r[4]['name']; ?></p>
		<p><?php echo $r[4]['msg']; ?></p>
	</div>
</div>
<?php 
} 
?>

</div>

<?php
//if($difficulty>0){
?>
<div class="col-12 col-lg-12 simple_text-before_review">
<p>Choose which option makes the most sense when considering our DIY solution</p>
</div>
<?php
//}
?>

</div>



<div class="row tab-viideo--wrapper installation-tab_nd nd_position-mobile__a">

<?php
if($difficulty>0){
?>
<div class="col-12 js-specifications-subheading">
<p class="tab-content__specifications--subheading tab-video__selection-detail mobile-style-diy __a">
DIY INSTALLER
<img class="tab-content__specifications--subheading-icon-plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
<img class="tab-content__specifications--subheading-icon-minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
</p>
</div>
<?php
}
?>

<div class="col-12 padding-no__a transition-all-five">
<div class="pdf_botton-a__">


<?php
if($difficulty>0){
	echo "<div class='parent_romb hide-mobile__a'>";
	echo "<span class='romb'></span>";
	echo "</div>";


	$f = SITEROOT."saascustuploads/".$_SESSION['profile_account_id']."/docs/installation_2.pdf";
	echo "<button class='product-purchase__buttons--pdf'>";
	echo "<a style='color:white; ' href='".$f."' target='_blank'>";
	echo "PDF";
	echo "</a>";
	echo "</button>";
	echo "<b>Instructions</b>";
}

?>
</div>
<div class="col-12 js-show-hiden-installations content-instalation-a__">
<div class="row">
<div class="col-12">
<p class="product-dyi-installer__text need-hours">
<?php

if($hours>0 && $difficulty>0){

	echo $icon_passage_of_time;
	$str='';
	if($hours==1){
		$str .= "Just one hour to install";
	}else{
		$str .= "Just ".$hours." hours to install";
	}
	if(strlen($floor_size)>2){
		$str .= " a ".$floor_size;
	}
	echo $str;

}
?>
</p>
</div>
<div class="col-12">
<p class="product-dyi-installer__text perfect-fit">
<svg id="security" xmlns="http://www.w3.org/2000/svg" width="15.756" height="18.752" viewBox="0 0 15.756 18.752">
<path fill="#384765" id="Path_21" data-name="Path 21" d="M32.848,4.829c-.01-.506-.019-.985-.019-1.447a.656.656,0,0,0-.656-.656A9.05,9.05,0,0,1,25.447.186a.656.656,0,0,0-.915,0,9.048,9.048,0,0,1-6.725,2.539.656.656,0,0,0-.656.656c0,.463-.009.941-.019,1.448-.09,4.711-.213,11.164,7.643,13.887a.656.656,0,0,0,.43,0C33.061,15.993,32.938,9.54,32.848,4.829ZM24.99,17.4c-6.737-2.447-6.636-7.809-6.545-12.545.005-.284.011-.56.014-.83A10.121,10.121,0,0,0,24.99,1.549a10.123,10.123,0,0,0,6.531,2.475c0,.27.009.545.014.829C31.626,9.59,31.728,14.951,24.99,17.4Z" transform="translate(-17.112 0)"></path>
<path fill="#384765" id="Path_22" data-name="Path 22" d="M74.149,79.078l-3.168,3.168L69.63,80.894a.656.656,0,0,0-.928.928l1.816,1.816a.656.656,0,0,0,.928,0l3.632-3.632a.656.656,0,0,0-.928-.928Z" transform="translate(-64.011 -71.982)"></path>
</svg>
100% Perfect Fit Guarantee
</p>
</div>
</div>


<div class="row">
<div class="col-12">
<div class="product-dyi-installer__small-images-boxes">
<div class="d-flex">
<?php
$has_half = 0;
if($difficulty > 0){
	if(fmod($difficulty,1)>0)$has_half=1;
	if($has_half){
		$max = $difficulty - .5;
	}else{
		$max = $difficulty;
	}
	for($i=1; $i<=$max; $i++){
		echo "<div class='product-dyi-installer__small-images-box yellow'>";
		echo $icon_screwdriver_and_wrench;
		echo "</div>";
	}

	$d_str = "Installation Level";
	if($has_half){
		echo "<div class='product-dyi-installer__small-images-box yellow'>";
		echo $icon_screwdriver;
		echo "</div>";
	}
}else{
	$d_str = "This product is not offered in DIY";
}
?>
</div>
<p class="product-dyi-installer__text">
<?php echo $d_str; ?>
</p>
</div>
</div>
</div>

<div class="row row-with-mobile-top-bottom">
<div class="col-12">
<?php
//if($difficulty>0){
?>
	<p class="product-dyi-installer__heading mobile-bold">Tools required to complete the installation</p>
<?php
//}
?>

</div>
</div>


<div class="row row-with-mobile-border-bottom">
<div class="col-12">
<div class="product-dyi-installer__big-images-boxes">
<?php
//if($difficulty > 0){
	foreach($tool_icon_array as $val){
		echo "<div class='product-dyi-installer__big-images-box multimeter'>";
		echo $val['svg_code'];
		echo "</div>";
	}
//}
?>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="row tab-viideo--wrapper installation-tab_nd nd_position-mobile__a professional_tab-a__">
<div class="col-12 js-specifications-subheading">
<p class="tab-content__specifications--subheading tab-video__selection-detail mobile-style-professional-installer">
PROFESSIONAL INSTALLER
<?php echo $icon_2_professional_installer; ?>
</p>
</div>

<div class="col-12 padding-no__a">
<div class="pdf_botton-a__ blue-bg">
<div class="parent_romb">
<span class="romb"></span>
</div>


<div class="col-12 js-show-hiden-installations blue-bg content-instalation-a__">
<div class="row">
<div class="col-12">
<p class="product-dyi-installer__text need-hours">
<?php 

if($hours_prof>0){
	echo $icon_passage_of_time;
	$str='';
	if($hours_prof==1){
		$str .= "Just one hour to install";
	}else{
		$str .= "Just ".$hours_prof." hours to install";
	}
	if(strlen($floor_size)>2){
		$str .= " a ".$floor_size;
	}
	echo $str;
}

?>
</p>
</div>

<div class="col-12">
<p class="product-dyi-installer__text perfect-fit">
<svg id="security" xmlns="http://www.w3.org/2000/svg" width="15.756" height="18.752" viewBox="0 0 15.756 18.752">
<path fill="#384765" id="Path_21" data-name="Path 21" d="M32.848,4.829c-.01-.506-.019-.985-.019-1.447a.656.656,0,0,0-.656-.656A9.05,9.05,0,0,1,25.447.186a.656.656,0,0,0-.915,0,9.048,9.048,0,0,1-6.725,2.539.656.656,0,0,0-.656.656c0,.463-.009.941-.019,1.448-.09,4.711-.213,11.164,7.643,13.887a.656.656,0,0,0,.43,0C33.061,15.993,32.938,9.54,32.848,4.829ZM24.99,17.4c-6.737-2.447-6.636-7.809-6.545-12.545.005-.284.011-.56.014-.83A10.121,10.121,0,0,0,24.99,1.549a10.123,10.123,0,0,0,6.531,2.475c0,.27.009.545.014.829C31.626,9.59,31.728,14.951,24.99,17.4Z" transform="translate(-17.112 0)"></path>
<path fill="#384765" id="Path_22" data-name="Path 22" d="M74.149,79.078l-3.168,3.168L69.63,80.894a.656.656,0,0,0-.928.928l1.816,1.816a.656.656,0,0,0,.928,0l3.632-3.632a.656.656,0,0,0-.928-.928Z" transform="translate(-64.011 -71.982)"></path>
</svg>
100% Perfect Fit Guarantee
</p>
</div>
</div>


<div class="row">
	<div class="col-12">
		<div class="product-dyi-installer__small-images-boxes padding-top__a">
			<div class="d-flex">

<?php
$has_half = 0;
if($difficulty_prof > 0){
	if(fmod($difficulty_prof,1)>0)$has_half=1;
	if($has_half){
		$max = $difficulty_prof - .5;
	}else{
		$max = $difficulty_prof;
	}
	for($i=1; $i<=$max; $i++){
		echo "<div class='product-dyi-installer__small-images-box yellow'>";
		echo $icon_screwdriver_and_wrench;
		echo "</div>";
	}	
	$d_str = "Installation Level";
	if($has_half){
		echo "<div class='product-dyi-installer__small-images-box yellow'>";
		echo $icon_screwdriver;
		echo "</div>";
	}
}
?>
</div>
	<p class="product-dyi-installer__text">
	<?php echo  $d_str;  ?>
	</p>
	</div>
	</div>
	</div>
	</div>
</div>
</div>
</div>

<div class="row tab-viideo--wrapper nd_position-mobile__a nd_position-mobile__a_v2">
<div class="col-12 js-specifications-subheading">
<p class="tab-content__specifications--subheading tab-video__selection-detail mobile-style-diy">
Videos
<img class="tab-content__specifications--subheading-icon-plus" src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
<img class="tab-content__specifications--subheading-icon-minus" src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
</p>
</div>
<div class="col-12 a__padding-nd padding-t_v4">
<?php
foreach($video_array as $val){
?>
	<div class="col-lg-4 showroom-detail-product-col-lg mw_">
		<div class="showroom-detail-product-video">
			<div class="embed-responsive embed-responsive-4by3">
				<?php 
				echo $val['embed']; 
				?>
			</div>
		</div>
	</div>
<?php
}
?>
</div>
</div>
</div>

<div class="tab-pane fade" id="pills-features" role="tabpanel" aria-labelledby="pills-features-tab">
<div class="tab-content__text-wrap features-text js-text-wrap">
<div class="tab-content__text-wrap--content js-hidden-text tab--detail-text__a">
<p class="tab-content__text-wrap--title">
<span>1</span>
Adding title here
</p>
<p class="tab-content__text-wrap--text">
Closet organizers are the ultimate do it yourself project. They not only makeyour life simpler, they also bring about a lifetime of satisfaction. The Closets To Go closet organizers are the easiest to design and assemble.
</p>
<p class="tab-content__text-wrap--title">
<span>2</span>
Adding title here
</p>
<p class="tab-content__text-wrap--text">
Closet organizers are the ultimate do it yourself project. They not only makeyour life simpler, they also bring about a lifetime of satisfaction. The Closets To Go closet organizers are the easiest to design and assemble.
</p>
<p class="tab-content__text-wrap--title">
<span>3</span>
Adding title here
</p>
<p class="tab-content__text-wrap--text">
Closet organizers are the ultimate do it yourself project. They not only makeyour life simpler, they also bring about a lifetime of satisfaction. The Closets To Go closet organizers are the easiest to design and assemble.
</p>
<p class="tab-content__text-wrap--title">
<span>4</span>
Adding title here
</p>
<p class="tab-content__text-wrap--text">
Closet organizers are the ultimate do it yourself project. They not only makeyour life simpler, they also bring about a lifetime of satisfaction. The Closets To Go closet organizers are the easiest to design and assemble.
</p>
<p class="tab-content__text-wrap--title">
<span>5</span>
Adding title here
</p>
<p class="tab-content__text-wrap--text">
Closet organizers are the ultimate do it yourself project. They not only makeyour life simpler, they also bring about a lifetime of satisfaction. The Closets To Go closet organizers are the easiest to design and assemble.
</p>
<p class="tab-content__text-wrap--title">
<span>6</span>
Adding title here
</p>
<p class="tab-content__text-wrap--text">
Closet organizers are the ultimate do it yourself project. They not only makeyour life simpler, they also bring about a lifetime of satisfaction. The Closets To Go closet organizers are the easiest to design and assemble.
</p>
<p class="tab-content__text-wrap--title">
<span>7</span>
Adding title here
</p>
<p class="tab-content__text-wrap--text">
Closet organizers are the ultimate do it yourself project. They not only makeyour life simpler, they also bring about a lifetime of satisfaction. The Closets To Go closet organizers are the easiest to design and assemble.
</p>
<p class="tab-content__text-wrap--title">
<span>8</span>
Adding title here
</p>
<p class="tab-content__text-wrap--text">
Closet organizers are the ultimate do it yourself project. They not only makeyour life simpler, they also bring about a lifetime of satisfaction. The Closets To Go closet organizers are the easiest to design and assemble.
</p>
<p class="tab-content__text-wrap--title">
<span>9</span>
Adding title here
</p>
<p class="tab-content__text-wrap--text">
Closet organizers are the ultimate do it yourself project. They not only makeyour life simpler, they also bring about a lifetime of satisfaction. The Closets To Go closet organizers are the easiest to design and assemble.
</p>
<p class="tab-content__text-wrap--title">
<span>10</span>
Adding title here
</p>
<p class="tab-content__text-wrap--text">
Closet organizers are the ultimate do it yourself project. They not only makeyour life simpler, they also bring about a lifetime of satisfaction. The Closets To Go closet organizers are the easiest to design and assemble.
</p>
</div>
</div>
<button data-readall="Explore more" data-readless="Explore less" class="product-tab-content__link mt-2 p-0 mb-0 js-btn-read-all-text">
<span>Explore more</span>
</button>
<div class="you-we-design-buttons">
<div class="product-purchase__buttons">
<button class="product-purchase__buttons--share">
<svg xmlns="http://www.w3.org/2000/svg" width="23.547" height="25.688" viewBox="0 0 23.547 25.688">
<defs>
<style>.share-no-background{fill:#384765;}</style>
</defs>
<g transform="translate(0)">
<path class="share-no-background" d="M321.625,19.479A3.478,3.478,0,1,1,318.147,16a3.479,3.479,0,0,1,3.478,3.478Zm0,0" transform="translate(-298.881 -15.197)"></path>
<path class="share-no-background" d="M302.949,8.563a4.281,4.281,0,1,1,4.281-4.281A4.286,4.286,0,0,1,302.949,8.563Zm0-6.957a2.676,2.676,0,1,0,2.676,2.676,2.679,2.679,0,0,0-2.676-2.676Zm0,0" transform="translate(-283.683 0)"></path>
<path class="share-no-background" d="M321.625,360.811a3.478,3.478,0,1,1-3.478-3.479A3.478,3.478,0,0,1,321.625,360.811Zm0,0" transform="translate(-298.881 -339.404)"></path>
<path class="share-no-background" d="M302.949,349.895a4.281,4.281,0,1,1,4.281-4.281A4.286,4.286,0,0,1,302.949,349.895Zm0-6.957a2.676,2.676,0,1,0,2.676,2.676A2.679,2.679,0,0,0,302.949,342.938Zm0,0" transform="translate(-283.683 -324.207)"></path>
<path class="share-no-background" d="M22.957,190.146a3.479,3.479,0,1,1-3.479-3.479A3.479,3.479,0,0,1,22.957,190.146Zm0,0" transform="translate(-15.197 -177.303)"></path>
<path class="share-no-background" d="M4.281,179.23a4.281,4.281,0,1,1,4.281-4.281,4.286,4.286,0,0,1-4.281,4.281Zm0-6.957a2.676,2.676,0,1,0,2.676,2.676,2.679,2.679,0,0,0-2.676-2.676Zm0,0" transform="translate(0 -162.105)"></path>
<path class="share-no-background" d="M115.42,98.019a1.07,1.07,0,0,1-.531-2l9.931-5.662a1.07,1.07,0,1,1,1.06,1.86l-9.932,5.662a1.063,1.063,0,0,1-.529.14Zm0,0" transform="translate(-108.611 -85.688)"></path>
<path class="share-no-background" d="M125.372,274.022a1.064,1.064,0,0,1-.529-.14l-9.932-5.662a1.07,1.07,0,0,1,1.06-1.86l9.932,5.662a1.07,1.07,0,0,1-.531,2Zm0,0" transform="translate(-108.633 -252.862)"></path>
</g>
</svg>
</button>
<div class="animating-imgs__wrap showroom-detail-view-product-page idea-folder __square" data-toggle="modal" data-target="#saveToIdeaFolder">
<div class="icons icon-share__circle icon-share__circle__18C4C7 add-to-fav animate-pulse add-to-fav__icon_over-galery">
<svg id="Save" xmlns="http://www.w3.org/2000/svg" width="30"
height="30" viewBox="0 0 25.6 23.023">
<path id="Path_205" data-name="Path 205"
d="M25.6,4.963v7.6a1,1,0,0,1-1,1h-.55a1,1,0,0,1-.724-.31L18.974,8.69l-7.748,9.89a1,1,0,0,1-.787.383h0a1,1,0,0,1-.787-.384L7.006,15.195,5.592,17.034a1,1,0,0,1-1.585-1.22l2.2-2.861A1,1,0,0,1,7,12.563H7a1,1,0,0,1,.788.384L10.44,16.34l7.672-9.794a1,1,0,0,1,1.511-.073L23.6,10.642V4.963a2,2,0,0,0-2-2H4a2,2,0,0,0-2,2v14a2,2,0,0,0,2,2h6.55a1,1,0,0,1,0,2H4a4,4,0,0,1-4-4v-14a4,4,0,0,1,4-4H21.6A4,4,0,0,1,25.6,4.963ZM4,7.563a3,3,0,1,1,3,3A3,3,0,0,1,4,7.563Zm2,0a1,1,0,1,0,1-1A1,1,0,0,0,6,7.563Z"
transform="translate(0 -0.963)"
fill="#18C4C7"></path>
<path id="Path_207" data-name="Path 207"
d="M11.836-4.736H8.076v3.76H6.1v-3.76H2.324V-6.719H6.1V-10.5H8.076v3.779h3.76Z"
fill="#18C4C7"></path>
</svg>
</div>
<div class="icons icon-share__circle icon-share__circle__18C4C7 add-to-fav img-check__icon"
style="display: none">
<svg id="img-check" class="img-check" data-name="Group 781"
xmlns="http://www.w3.org/2000/svg" width="30"
height="30"
viewBox="0 0 31.189 32.043">
<path id="Path_419" class="icon__scale-down"
data-name="Path 419"
d="M26.825,5.154v7.964a1.048,1.048,0,0,1-1.048,1.048H25.2a1.048,1.048,0,0,1-.759-.325L19.882,9.06,11.764,19.423a1.048,1.048,0,0,1-.825.4h0a1.048,1.048,0,0,1-.825-.4L7.342,15.876,5.859,17.8A1.048,1.048,0,0,1,4.2,16.525l2.306-3a1.048,1.048,0,0,1,.826-.409h0a1.048,1.048,0,0,1,.826.4l2.779,3.556,8.04-10.263a1.048,1.048,0,0,1,1.583-.077l4.167,4.369V5.154a2.1,2.1,0,0,0-2.1-2.1H4.191a2.1,2.1,0,0,0-2.1,2.1v14.67a2.1,2.1,0,0,0,2.1,2.1h6.863a1.048,1.048,0,0,1,0,2.1H4.191A4.2,4.2,0,0,1,0,19.825V5.154A4.2,4.2,0,0,1,4.191.963H22.634A4.2,4.2,0,0,1,26.825,5.154ZM4.191,7.879a3.144,3.144,0,1,1,3.144,3.144A3.147,3.147,0,0,1,4.191,7.879Zm2.1,0A1.048,1.048,0,1,0,7.335,6.831,1.049,1.049,0,0,0,6.287,7.879Z"
fill="#fff"/>
<rect id="Rectangle_148" class="icon__scale-down"
data-name="Rectangle 148" width="16" height="14"
rx="2"
fill="#fff"/>
<path id="Path_460" class="icon__scale-up"
data-name="Path 460"
d="M7.905,56.579l-4.3,4.3a.815.815,0,0,1-1.153,0L.238,58.657A.815.815,0,0,1,1.391,57.5l1.642,1.642,3.72-3.72a.815.815,0,0,1,1.153,1.153Z"/>
</svg>
</div>                        
</div>
<div class="parent_idea-folder">
<div class="info-popup-idea-folder __square">

<div class="icon">
<img src="<?php echo SITEROOT; ?>images/idea-folder-icon.png">
</div>
<span>Save to My Inspirations</span>
<p>
This function is comming soon
</p>
<a class="dontShowAgain_idea">Don't show again</a>
</div>                                             
</div>   
<div class="animating-imgs__wrap showroom-detail-view-product-page save-to-specs-sheet __square" data-toggle="modal" data-target="#saveToSpecSheet">
<div class="icons icon-share__circle icon-share__circle__18C4C7 add-to-fav animate-pulse add-to-fav__icon_save">
<svg id="Save" xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 1 33.398 33.33">
<circle id="Ellipse_23" data-name="Ellipse 23" cx="16.5" cy="16.5" r="16" fill="#fff"></circle>
<g id="Group_597" data-name="Group 597" transform="translate(0.068)">
<path id="Path_4344" data-name="Path 434" d="M94.586,100.138H87.051l-1.985-1.8H81.683a.47.47,0,0,0-.469.469v11.522a.47.47,0,0,0,.469.469h.356l1.871-9.631H95.055v-.558A.47.47,0,0,0,94.586,100.138Z" transform="translate(-71.859 -87.074)" fill="#18c4c7"></path>
<path id="Path_435" data-name="Path 435" d="M16.666,0A16.665,16.665,0,1,0,33.331,16.665,16.665,16.665,0,0,0,16.666,0Zm8.582,23.633a2.221,2.221,0,0,1-2.149,2.1c-.011,0-.022,0-.033,0H9.516A2.224,2.224,0,0,1,7.3,23.517v-12.1A2.224,2.224,0,0,1,9.517,9.2h4.219l2.084,1.892h7.245a2.224,2.224,0,0,1,2.221,2.222V13.9h1.989Z" transform="translate(-0.001)" fill="#18c4c7"></path>
</g>
<circle id="Ellipse_25" fill="#18c4c7" data-name="Ellipse 25" cx="6" cy="6" r="6" transform="translate(16 17)"></circle>
<path id="Path_207" data-name="Path 207" d="M11.836-4.736H8.076v3.76H6.1v-3.76H2.324V-6.719H6.1V-10.5H8.076v3.779h3.76Z" fill="#18C4C7"></path>
</svg>
</div>
<div class="icons icon-share__circle icon-share__circle__18C4C7 save-v2 add-to-fav img-check__icon_v2"
style="display: none">
<svg id="img-check" class="img-check" data-name="Group 781"
xmlns="http://www.w3.org/2000/svg" width="40"
height="40"
viewBox="0 0 31.189 32.043">
<circle id="Ellipse_23" data-name="Ellipse 23" cx="17" cy="17" r="15" fill="#fff"></circle>
<g id="Group_597" data-name="Group 597" transform="translate(0.068)">
<path id="Path_4344" data-name="Path 434" d="M94.586,100.138H87.051l-1.985-1.8H81.683a.47.47,0,0,0-.469.469v11.522a.47.47,0,0,0,.469.469h.356l1.871-9.631H95.055v-.558A.47.47,0,0,0,94.586,100.138Z" transform="translate(-71.859 -87.074)" fill="#18c4c7"></path>
<path id="Path_435" data-name="Path 435" d="M16.666,0A16.665,16.665,0,1,0,33.331,16.665,16.665,16.665,0,0,0,16.666,0Zm8.582,23.633a2.221,2.221,0,0,1-2.149,2.1c-.011,0-.022,0-.033,0H9.516A2.224,2.224,0,0,1,7.3,23.517v-12.1A2.224,2.224,0,0,1,9.517,9.2h4.219l2.084,1.892h7.245a2.224,2.224,0,0,1,2.221,2.222V13.9h1.989Z" transform="translate(-0.001)" fill="#18c4c7"></path>
</g>
<circle id="Ellipse_25" fill="#18c4c7" data-name="Ellipse 25" cx="6" cy="6" r="6" transform="translate(16 17)"></circle>
<path id="Path_2319" class="bg-plus" data-name="Path 2319" d="M10.089-5.794H7.02v3.069H5.409V-5.794H2.324V-7.413H5.409V-10.5H7.02v3.085h3.069Z" transform="translate(16.08 29.904)" fill="#fff"></path>
<rect id="Rectangle_148" class="icon__scale-down"
data-name="Rectangle 148" width="12" height="12"
rx="55"
fill="#fff"/>
<path id="Path_460" class="icon__scale-up"
data-name="Path 460"
d="M7.905,56.579l-4.3,4.3a.815.815,0,0,1-1.153,0L.238,58.657A.815.815,0,0,1,1.391,57.5l1.642,1.642,3.72-3.72a.815.815,0,0,1,1.153,1.153Z"/>
</svg>
</div>                                             
</div>      
<div class="parent_spec-folder">                                             
<div class="info-popup-spec-folder __square">
<div class="icon">
<img src="<?php echo SITEROOT; ?>images/spec-folder-icon.png">
</div>
<span>Save to spec folder</span>
<p>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic the leap into electronic.
</p>
<a class="dontShowAgain_spec">Don't show again</a>
</div>
</div>                                    
<button class="product-purchase__buttons--pdf">
PDF
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
</div>
</section>

<!--
<section class="four-elements-block showroom-detail-product">
<div class="wrapper">
<div class="container-fluid">
<div class="row showroom-detail-product-row">
<div class="col-12 col-lg-3 showroom-detail-product-col-lg">
<div class="showroom-detail-product-video">
<div class="embed-responsive embed-responsive-4by3">
<iframe 
class="yvideo" 
width="100%" 
height="100%" 
name=""
title=""
src="https://www.youtube.com/embed/Wb0JINqX71w?autoplay=0&amp;enablejsapi=1" 
frameborder="0" 
allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
allowfullscreen="">
</iframe>
</div>
</div>
</div>
<div class="col-12 col-lg-3 showroom-detail-product-col-lg">
<div class="we-design-block__form">
<form action="">
<fieldset>
<div class="row">
<div class="col-12">
<h3 class="we-design-block__form--heading">Request a Free Design</h3>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="row showroom-detail-product-row">
<div class="col-6 showroom-detail-product-col-lg">
<div class="form-group">
<input type="text" class="form-control we-design-block__form--input" name="first-name" placeholder="First name">
</div>
</div>
<div class="col-6 showroom-detail-product-col-lg">
<div class="form-group">
<input type="text" class="form-control we-design-block__form--input" name="Last-name" placeholder="Last name">
</div>
</div>
</div>
<div class="row showroom-detail-product-row mt-2">
<div class="col-6 showroom-detail-product-col-lg">
<div class="form-group">
<input type="text" class="form-control we-design-block__form--input" name="phone" placeholder="Phone number">
</div>
</div>
<div class="col-6 showroom-detail-product-col-lg">
<div class="form-group">
<input type="text" class="form-control we-design-block__form--input" name="zip-code" placeholder="Zip code">
</div>
</div>
</div>
<div class="row showroom-detail-product-row mt-2">
<div class="col-12 showroom-detail-product-col-lg">
<div class="form-group">
<input type="email" class="form-control we-design-block__form--input" name="email" placeholder="E-mail">
</div>
</div>
</div>
</div>
</div>
<div class="row mt-2">
<div class="col-12 text-center">
<button type="submit" class="btn btn-primary">Submit Request</button>
</div>
</div>
</fieldset>
</form>
</div>
</div>
<div class="col-12 col-lg-3 showroom-detail-product-col-lg">
<div class="showroom-detail-product-design">
<p class="showroom-detail-product-design__img">
<svg id="vector6" xmlns="http://www.w3.org/2000/svg" width="78.3" height="78.3" viewBox="0 0 78.3 78.3">
<g id="Group_612" data-name="Group 612">
<g id="Group_611" data-name="Group 611">
<path id="Path_427" data-name="Path 427" d="M76.006,0H66.83a2.294,2.294,0,0,0-2.294,2.294V4.588h-18.9a6.88,6.88,0,0,0-12.975,0h-18.9V2.294A2.294,2.294,0,0,0,11.47,0H2.294A2.294,2.294,0,0,0,0,2.294V11.47a2.294,2.294,0,0,0,2.294,2.294H11.47a2.294,2.294,0,0,0,2.294-2.294V9.145H23.3a30.137,30.137,0,0,0-13.912,23.5,6.879,6.879,0,1,0,4.6.046,25.614,25.614,0,0,1,19-22.749,6.878,6.878,0,0,0,12.327,0,25.613,25.613,0,0,1,19,22.749,6.884,6.884,0,1,0,4.6-.046A30.084,30.084,0,0,0,55,9.176h9.539V11.47a2.294,2.294,0,0,0,2.294,2.294h9.176A2.294,2.294,0,0,0,78.3,11.47V2.294A2.294,2.294,0,0,0,76.006,0ZM9.176,9.176H4.588V4.588H9.176Zm2.447,32.268a2.294,2.294,0,1,1,2.294-2.294A2.3,2.3,0,0,1,11.623,41.444ZM39.15,9.176a2.294,2.294,0,1,1,2.294-2.294A2.3,2.3,0,0,1,39.15,9.176Zm27.527,27.68a2.294,2.294,0,1,1-2.294,2.294A2.3,2.3,0,0,1,66.677,36.856Zm7.035-27.68H69.124V4.588h4.588Z" fill="#fff"/>
</g>
</g>
<g id="Group_614" data-name="Group 614" transform="translate(18.504 18.506)">
<g id="Group_613" data-name="Group 613">
<path id="Path_428" data-name="Path 428" d="M161.906,149.557,143.554,122.03l0,0-.02-.029c-.031-.046-.065-.09-.1-.133a2.294,2.294,0,0,0-3.673.133l-.02.029,0,0-18.352,27.527a2.294,2.294,0,0,0,.287,2.895,29.063,29.063,0,0,1,8.283,16.96,11.819,11.819,0,0,0-1.026.93,11.627,11.627,0,0,0-3.341,8.168,2.294,2.294,0,0,0,2.294,2.294h27.527a2.294,2.294,0,0,0,2.294-2.294,11.628,11.628,0,0,0-3.341-8.168,11.825,11.825,0,0,0-1.026-.93,29.059,29.059,0,0,1,8.283-16.96A2.294,2.294,0,0,0,161.906,149.557Zm-20.26-1.021a2.294,2.294,0,1,1-2.294,2.294A2.3,2.3,0,0,1,141.646,148.536Zm-11.079,27.68a7.007,7.007,0,0,1,6.491-4.741h9.176a7.007,7.007,0,0,1,6.491,4.741Zm18.457-8.98a11.271,11.271,0,0,0-2.79-.349h-9.176a11.263,11.263,0,0,0-2.79.349,33.662,33.662,0,0,0-8.052-16.654l13.136-19.7v13.464a6.882,6.882,0,1,0,4.588,0V130.879l13.136,19.7A33.657,33.657,0,0,0,149.024,167.237Z" transform="translate(-121 -121.01)" fill="#fff"/>
</g>
</g>
</svg>
</p>
<p class="showroom-detail-product-design__text">Start design</p>
</div>
</div>
<div class="col-12 col-lg-3 showroom-detail-product-col-lg">
<div class="showroom-detail-product-specification">
<p class="showroom-detail-product-specification__img">
<svg xmlns="http://www.w3.org/2000/svg" width="78.347" height="78.3" viewBox="0 0 78.347 78.3">
<g id="vector7" transform="translate(0 -0.153)">
<g id="Group_617" data-name="Group 617" transform="translate(6.528 13.164)">
<g id="Group_616" data-name="Group 616">
<path id="Path_429" data-name="Path 429" d="M47.561,85.179a4.9,4.9,0,0,0-4.9,4.9v13.058h3.264V90.076a1.632,1.632,0,0,1,1.632-1.632H86.734V85.179Z" transform="translate(-42.664 -85.179)" fill="#fff"/>
</g>
</g>
<g id="Group_619" data-name="Group 619" transform="translate(6.528 44.176)">
<g id="Group_618" data-name="Group 618">
<path id="Path_430" data-name="Path 430" d="M47.561,305.8a1.632,1.632,0,0,1-1.632-1.632V287.845H42.664v16.322a4.9,4.9,0,0,0,4.9,4.9H63.883V305.8Z" transform="translate(-42.664 -287.845)" fill="#fff"/>
</g>
</g>
<g id="Group_621" data-name="Group 621" transform="translate(0 26.222)">
<g id="Group_620" data-name="Group 620">
<path id="Path_431" data-name="Path 431" d="M51.753,210.632l-39.64-39.64a1.632,1.632,0,0,0-2.308,0L.478,180.319a1.632,1.632,0,0,0,0,2.308l39.64,39.64a1.631,1.631,0,0,0,2.308,0l9.326-9.327A1.632,1.632,0,0,0,51.753,210.632ZM41.272,218.8,3.94,181.472l7.019-7.019,37.332,37.332Z" transform="translate(0 -170.514)" fill="#fff"/>
</g>
</g>
<g id="Group_623" data-name="Group 623" transform="translate(47.334 62.13)">
<g id="Group_622" data-name="Group 622">
<path id="Path_432" data-name="Path 432" d="M333.814,405.179H309.331v3.264h17.954V416.6a1.632,1.632,0,0,0,1.632,1.632h4.9a6.529,6.529,0,1,0,0-13.058Zm0,9.793H330.55v-6.529h3.264a3.264,3.264,0,0,1,0,6.529Z" transform="translate(-309.331 -405.179)" fill="#fff"/>
</g>
</g>
<g id="Group_625" data-name="Group 625" transform="translate(63.657 13.164)">
<g id="Group_624" data-name="Group 624">
<path id="Path_433" data-name="Path 433" d="M424.159,85.179H416v3.264h8.161a3.264,3.264,0,0,1,3.264,3.264v48.967h3.264V91.708A6.529,6.529,0,0,0,424.159,85.179Z" transform="translate(-415.998 -85.179)" fill="#fff"/>
</g>
</g>
<g id="Group_627" data-name="Group 627" transform="translate(24.961 46.286)">
<g id="Group_626" data-name="Group 626">
<rect id="Rectangle_59" data-name="Rectangle 59" width="6.926" height="3.264" transform="translate(0 4.897) rotate(-45)" fill="#fff"/>
</g>
</g>
<g id="Group_629" data-name="Group 629" transform="translate(18.433 39.757)">
<g id="Group_628" data-name="Group 628">
<rect id="Rectangle_60" data-name="Rectangle 60" width="6.926" height="3.264" transform="translate(0 4.897) rotate(-45)" fill="#fff"/>
</g>
</g>
<g id="Group_631" data-name="Group 631" transform="translate(31.487 52.815)">
<g id="Group_630" data-name="Group 630">
<rect id="Rectangle_61" data-name="Rectangle 61" width="6.926" height="3.264" transform="translate(0 4.897) rotate(-45)" fill="#fff"/>
</g>
</g>
<g id="Group_633" data-name="Group 633" transform="translate(38.019 59.347)">
<g id="Group_632" data-name="Group 632">
<rect id="Rectangle_62" data-name="Rectangle 62" width="6.926" height="3.264" transform="translate(0 4.897) rotate(-45)" fill="#fff"/>
</g>
</g>
<g id="Group_635" data-name="Group 635" transform="translate(11.899 33.228)">
<g id="Group_634" data-name="Group 634">
<rect id="Rectangle_63" data-name="Rectangle 63" width="6.926" height="3.264" transform="translate(0 4.897) rotate(-45)" fill="#fff"/>
</g>
</g>
<g id="Group_637" data-name="Group 637" transform="translate(36.03 0.153)">
<g id="Group_636" data-name="Group 636" transform="translate(0 0)">
<path id="Path_434" data-name="Path 434" d="M269.83,3.775l-2.256-2.256a4.939,4.939,0,0,0-6.821,0l-24.82,24.82a1.632,1.632,0,0,0,0,2.308l6.769,6.769a1.631,1.631,0,0,0,2.308,0L269.83,10.6l0,0A4.822,4.822,0,0,0,269.83,3.775Zm-2.306,4.512L243.857,31.954,239.4,27.493,263.063,3.827a1.6,1.6,0,0,1,2.2,0l2.257,2.254h0A1.559,1.559,0,0,1,267.524,8.286Z" transform="translate(-235.456 -0.153)" fill="#fff"/>
</g>
</g>
<g id="Group_639" data-name="Group 639" transform="translate(32.644 26.977)">
<g id="Group_638" data-name="Group 638">
<path id="Path_435" data-name="Path 435" d="M224.591,181.188l-7.045,2.352,2.352-7.056-3.1-1.033-3.385,10.154a1.632,1.632,0,0,0,1.549,2.148,1.657,1.657,0,0,0,.509-.078l10.154-3.385Z" transform="translate(-213.328 -175.451)" fill="#fff"/>
</g>
</g>
<g id="Group_641" data-name="Group 641" transform="translate(56.813 6.031)">
<g id="Group_640" data-name="Group 640">
<rect id="Rectangle_64" data-name="Rectangle 64" width="3.264" height="9.573" transform="translate(0 2.308) rotate(-45)" fill="#fff"/>
</g>
</g>
<g id="Group_643" data-name="Group 643" transform="translate(34.276 36.015)">
<g id="Group_642" data-name="Group 642">
<rect id="Rectangle_65" data-name="Rectangle 65" width="24.483" height="3.264" fill="#fff"/>
</g>
</g>
<g id="Group_645" data-name="Group 645" transform="translate(62.024 36.015)">
<g id="Group_644" data-name="Group 644">
<rect id="Rectangle_66" data-name="Rectangle 66" width="3.264" height="3.264" fill="#fff"/>
</g>
</g>
<g id="Group_647" data-name="Group 647" transform="translate(68.553 36.015)">
<g id="Group_646" data-name="Group 646">
<rect id="Rectangle_67" data-name="Rectangle 67" width="3.264" height="3.264" fill="#fff"/>
</g>
</g>
</g>
</svg>
</p>
<p class="showroom-detail-product-specification__text">Closet specifications</p>
</div>
</div>
<div class="col-12 col-lg-3 showroom-detail-product-col-lg">
<div class="showroom-detail-product-images-block">
<div class="showroom-detail-product-images-block__image">
<img src="<?php echo SITEROOT; ?>images/showroom-detail-product-1.png" alt="" class="img-fluid">
</div>
<p class="showroom-detail-product-images-block__text">View Sample Closet Organizers</p>
<a href="#" title="" class="showroom-detail-product-images-block__button link-button mb-0">
Explore now
<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
<path id="left-arrow_3_" data-name="left-arrow(3)" d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z" transform="translate(0.001 -4.676)"></path>
</svg>
</a>
</div>
</div>
<div class="col-12 col-lg-3 showroom-detail-product-col-lg">
<div class="showroom-detail-product-images-block">
<div class="showroom-detail-product-images-block__image">
<img src="<?php echo SITEROOT; ?>images/showroom-detail-product-2.png" alt="" class="img-fluid">
</div>
<p class="showroom-detail-product-images-block__text">Closet Organizer Accessories</p>
<a href="#" title="" class="showroom-detail-product-images-block__button link-button mb-0">
Explore now
<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
<path id="left-arrow_3_" data-name="left-arrow(3)" d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z" transform="translate(0.001 -4.676)"></path>
</svg>
</a>
</div>
</div>
<div class="col-12 col-lg-3 showroom-detail-product-col-lg">
<div class="showroom-detail-product-images-block">
<div class="showroom-detail-product-images-block__image">
<img src="<?php echo SITEROOT; ?>images/showroom-detail-product-3.png" alt="" class="img-fluid">
</div>
<p class="showroom-detail-product-images-block__text">Decorative Closet Handles and Knobs</p>
<a href="#" title="" class="showroom-detail-product-images-block__button link-button mb-0">
Explore now
<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
<path id="left-arrow_3_" data-name="left-arrow(3)" d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z" transform="translate(0.001 -4.676)"></path>
</svg>
</a>
</div>
</div>
<div class="col-12 col-lg-3 showroom-detail-product-col-lg">
<div class="showroom-detail-product-images-block">
<div class="showroom-detail-product-images-block__image">
<img src="<?php echo SITEROOT; ?>images/showroom-detail-product-4.png" alt="" class="img-fluid">
</div>
<p class="showroom-detail-product-images-block__text">Custom Closet Organizer Colors</p>
<a href="#" title="" class="showroom-detail-product-images-block__button link-button mb-0">
Explore now
<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
<path id="left-arrow_3_" data-name="left-arrow(3)" d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z" transform="translate(0.001 -4.676)"></path>
</svg>
</a>
</div>
</div>
</div>
</div>
</div>
</section>

-->


<section class="four-elements-block showroom-detail-product desktop-show">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<h2 class="four-elements-block__heading text-center">Customers reviews</h2>
</div>
</div>

<div class="row">

<?php
$r=$reviews->getMultiRandom($dbCustom,6,20);
if(isset($r[0]['name'])){
?>

<div class="col-12 col-lg-4 mb-4">
<div class="block-stars__wrapper a__">
<img src="<?php echo SITEROOT; ?>images/rev2.png" alt="" class="block-stars__wrapper--image">
<div class="block-stars__wrapper--text">
<div class="stars-container">
<?php
	echo $r[0]['stars'];
?>
</div>
<p class="first-text">
<?php
	echo $r[0]['name'].", ".$r[0]['addr'];
?>
</p>
<p>
<?php
	echo $r[0]['msg'];
?>
</p>
</div>
</div>
</div>
<?php
}

if(isset($r[1]['name'])){
?>

<div class="col-12 col-lg-4 mb-4">
<div class="block-stars__wrapper a__">
<img src="<?php echo SITEROOT; ?>images/rev2.png" alt="" class="block-stars__wrapper--image">
<div class="block-stars__wrapper--text">
<div class="stars-container">
<?php
	echo $r[1]['stars'];
?>
</div>
<p class="first-text">
<?php
	echo $r[1]['name'].", ".$r[1]['addr'];
?>
</p>
<p>
<?php
	echo $r[1]['msg'];
?>
</p>
</div>
</div>
</div>
<?php
}
if(isset($r[2]['name'])){
?>

<div class="col-12 col-lg-4 mb-4">
<div class="block-stars__wrapper a__">
<img src="<?php echo SITEROOT; ?>images/rev2.png" alt="" class="block-stars__wrapper--image">
<div class="block-stars__wrapper--text">
<div class="stars-container">
<?php
	echo $r[2]['stars'];
?>
</div>
<p class="first-text">
<?php
	echo $r[2]['name'].", ".$r[2]['addr'];
?>
</p>
<p>
<?php
	echo $r[2]['msg'];
?>
</p>
</div>
</div>
</div>
<?php
}
if(isset($r[3]['name'])){
?>

<div class="col-12 col-lg-4 mb-4">
<div class="block-stars__wrapper a__">
<img src="<?php echo SITEROOT; ?>images/rev2.png" alt="" class="block-stars__wrapper--image">
<div class="block-stars__wrapper--text">
<div class="stars-container">
<?php
	echo $r[3]['stars'];
?>
</div>
<p class="first-text">
<?php
	echo $r[3]['name'].", ".$r[3]['addr'];
?>
</p>
<p>
<?php
	echo $r[3]['msg'];
?>
</p>
</div>
</div>
</div>
<?php
}

if(isset($r[4]['name'])){
?>

<div class="col-12 col-lg-4 mb-4">
<div class="block-stars__wrapper a__">
<img src="<?php echo SITEROOT; ?>images/rev2.png" alt="" class="block-stars__wrapper--image">
<div class="block-stars__wrapper--text">
<div class="stars-container">
<?php
	echo $r[4]['stars'];
?>
</div>
<p class="first-text">
<?php
	echo $r[4]['name'].", ".$r[4]['addr'];
?>
</p>
<p>
<?php
	echo $r[4]['msg'];
?>
</p>
</div>
</div>
</div>
<?php
}

if(isset($r[5]['name'])){
?>

<div class="col-12 col-lg-4 mb-4">
<div class="block-stars__wrapper a__">
<img src="<?php echo SITEROOT; ?>images/rev2.png" alt="" class="block-stars__wrapper--image">
<div class="block-stars__wrapper--text">
<div class="stars-container">
<?php
	echo $r[5]['stars'];
?>
</div>
<p class="first-text">
<?php
	echo $r[5]['name'].", ".$r[5]['addr'];
?>
</p>
<p>
<?php
	echo $r[5]['msg'];
?>
</p>
</div>
</div>
</div>
<?php
}
?>

<div class="row">
<div class="col-12 text-center">
<a href="<?php echo SITEROOT; ?>our-reviews.html" title="" class="red-link mt-3">
See all reviews
</a>
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
require_once($real_root.'/pages/views/modal-save-to-idea-folder.php');
require_once($real_root.'/pages/views/modal-save-to-specs-sheet.php');
require_once($real_root.'/pages/views/modal-perfect-fit-guarantee.php');
require_once($real_root.'/pages/views/modal-free-shipping.php');










?>
<script src="<?php echo SITEROOT; ?>app.js"></script>
</body>
</html>








			
