<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
<title>Closets To Go <?php echo $name; ?></title>
<meta name="description" content="<?php echo $short_description; ?>">
<link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">
</head>
<body class="clearfix product-detail product-detail__page">
<?php
$nav_el = "accessories";
require_once($real_root.'/pages/views/header.php');
$r=$reviews->getMultiRandom($dbCustom,8,20);

// list pdfs under specs

?>

<main class="main clearfix">

<section class="breadcrumb-block showroom-detail-page desktop-show">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="breadcrumb-block__wrapper" aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo SITEROOT; ?>" title="Home">Home</a></li>
<li class="breadcrumb-item"><a href="<?php echo SITEROOT; ?>accessory-categories.html" title="All Accessories">All Accessories</a></li>
<li class="breadcrumb-item"><a href="#" onClick="history.back();" title="Accessories">Accessories</a></li>
<li class="breadcrumb-item active" aria-current="page" title="Accessory detail"><?php echo $name; ?></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="simple-block showroom-detail-product-heading product-detail">
<div class="wrapper" style="z-index: 3;">
<div class="container-fluid">
<div class="row">
	<div class="col-12">
		<div class="simple-block__border no-border p-0">
			<div class="row">
				<div class="col-12">
					<div class="simple-block__heading">
						<h2 class="simple-block__heading--heading text-center">
						<?php echo $name; ?>
						</h2>
						<div class="product-purchase__buttons">
							<!--
							<button title="Share" class="product-purchase__buttons--share">
							<svg xmlns="http://www.w3.org/2000/svg" width="23.547" height="25.688"
							viewBox="0 0 23.547 25.688">
							<defs>
							<style>.share-no-background {
							fill: #384765;
							}</style>
							</defs>
							<g transform="translate(0)">
							<path class="share-no-background"
							d="M321.625,19.479A3.478,3.478,0,1,1,318.147,16a3.479,3.479,0,0,1,3.478,3.478Zm0,0"
							transform="translate(-298.881 -15.197)"></path>
							<path class="share-no-background"
							d="M302.949,8.563a4.281,4.281,0,1,1,4.281-4.281A4.286,4.286,0,0,1,302.949,8.563Zm0-6.957a2.676,2.676,0,1,0,2.676,2.676,2.679,2.679,0,0,0-2.676-2.676Zm0,0"
							transform="translate(-283.683 0)"></path>
							<path class="share-no-background"
							d="M321.625,360.811a3.478,3.478,0,1,1-3.478-3.479A3.478,3.478,0,0,1,321.625,360.811Zm0,0"
							transform="translate(-298.881 -339.404)"></path>
							<path class="share-no-background"
							d="M302.949,349.895a4.281,4.281,0,1,1,4.281-4.281A4.286,4.286,0,0,1,302.949,349.895Zm0-6.957a2.676,2.676,0,1,0,2.676,2.676A2.679,2.679,0,0,0,302.949,342.938Zm0,0"
							transform="translate(-283.683 -324.207)"></path>
							<path class="share-no-background"
							d="M22.957,190.146a3.479,3.479,0,1,1-3.479-3.479A3.479,3.479,0,0,1,22.957,190.146Zm0,0"
							transform="translate(-15.197 -177.303)"></path>
							<path class="share-no-background"
							d="M4.281,179.23a4.281,4.281,0,1,1,4.281-4.281,4.286,4.286,0,0,1-4.281,4.281Zm0-6.957a2.676,2.676,0,1,0,2.676,2.676,2.679,2.679,0,0,0-2.676-2.676Zm0,0"
							transform="translate(0 -162.105)"></path>
							<path class="share-no-background"
							d="M115.42,98.019a1.07,1.07,0,0,1-.531-2l9.931-5.662a1.07,1.07,0,1,1,1.06,1.86l-9.932,5.662a1.063,1.063,0,0,1-.529.14Zm0,0"
							transform="translate(-108.611 -85.688)"></path>
							<path class="share-no-background"
							d="M125.372,274.022a1.064,1.064,0,0,1-.529-.14l-9.932-5.662a1.07,1.07,0,0,1,1.06-1.86l9.932,5.662a1.07,1.07,0,0,1-.531,2Zm0,0"
							transform="translate(-108.633 -252.862)"></path>
							</g>
							</svg>
							</button>
							-->
							<div class="animating-imgs__wrap showroom-detail-view-product-page idea-folder __square"  data-toggle="modal" data-target="#saveToIdeaFolder">
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
viewBox="0 -1 31.189 32.043">
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
<div class="info-popup-spec-folder __square">
<div class="icon">
<img src="<?php echo SITEROOT; ?>images/spec-folder-icon.png">
</div>
<span>Save to spec folder</span>
<p>
This function is comming soon
</p>
<a class="dontShowAgain_spec">Don't show again</a>
</div>
<!--
<button title="PDF" class="product-purchase__buttons--pdf">
PDF
</button>
-->
</div>

<button class="account-mobile-more-info-btn js-show-mobile-action-btn">
</button>

<div class="account-mobile-more-info-wrapper js-show-mobile-action-buttons">
<div class="account-mobile-more-info-wrapper__mobile-more-info">
<!--
<button title="Share" class="">
<svg xmlns="http://www.w3.org/2000/svg" width="23.547"
height="25.688" viewBox="0 0 23.547 25.688">
<defs>
<style>.share-no-background {
fill: #384765;
}</style>
</defs>
<g transform="translate(0)">
<path class="share-no-background"
d="M321.625,19.479A3.478,3.478,0,1,1,318.147,16a3.479,3.479,0,0,1,3.478,3.478Zm0,0"
transform="translate(-298.881 -15.197)"></path>
<path class="share-no-background"
d="M302.949,8.563a4.281,4.281,0,1,1,4.281-4.281A4.286,4.286,0,0,1,302.949,8.563Zm0-6.957a2.676,2.676,0,1,0,2.676,2.676,2.679,2.679,0,0,0-2.676-2.676Zm0,0"
transform="translate(-283.683 0)"></path>
<path class="share-no-background"
d="M321.625,360.811a3.478,3.478,0,1,1-3.478-3.479A3.478,3.478,0,0,1,321.625,360.811Zm0,0"
transform="translate(-298.881 -339.404)"></path>
<path class="share-no-background"
d="M302.949,349.895a4.281,4.281,0,1,1,4.281-4.281A4.286,4.286,0,0,1,302.949,349.895Zm0-6.957a2.676,2.676,0,1,0,2.676,2.676A2.679,2.679,0,0,0,302.949,342.938Zm0,0"
transform="translate(-283.683 -324.207)"></path>
<path class="share-no-background"
d="M22.957,190.146a3.479,3.479,0,1,1-3.479-3.479A3.479,3.479,0,0,1,22.957,190.146Zm0,0"
transform="translate(-15.197 -177.303)"></path>
<path class="share-no-background"
d="M4.281,179.23a4.281,4.281,0,1,1,4.281-4.281,4.286,4.286,0,0,1-4.281,4.281Zm0-6.957a2.676,2.676,0,1,0,2.676,2.676,2.679,2.679,0,0,0-2.676-2.676Zm0,0"
transform="translate(0 -162.105)"></path>
<path class="share-no-background"
d="M115.42,98.019a1.07,1.07,0,0,1-.531-2l9.931-5.662a1.07,1.07,0,1,1,1.06,1.86l-9.932,5.662a1.063,1.063,0,0,1-.529.14Zm0,0"
transform="translate(-108.611 -85.688)"></path>
<path class="share-no-background"
d="M125.372,274.022a1.064,1.064,0,0,1-.529-.14l-9.932-5.662a1.07,1.07,0,0,1,1.06-1.86l9.932,5.662a1.07,1.07,0,0,1-.531,2Zm0,0"
transform="translate(-108.633 -252.862)"></path>
</g>
</svg>
Share
</button>
-->
<button title="Add to My Inspirations" class="">
<svg id="Save" xmlns="http://www.w3.org/2000/svg"
width="25.6" height="23.023" viewBox="0 0 25.6 23.023">
<path id="Path_205" data-name="Path 205"
d="M25.6,4.963v7.6a1,1,0,0,1-1,1h-.55a1,1,0,0,1-.724-.31L18.974,8.69l-7.748,9.89a1,1,0,0,1-.787.383h0a1,1,0,0,1-.787-.384L7.006,15.195,5.592,17.034a1,1,0,0,1-1.585-1.22l2.2-2.861A1,1,0,0,1,7,12.563H7a1,1,0,0,1,.788.384L10.44,16.34l7.672-9.794a1,1,0,0,1,1.511-.073L23.6,10.642V4.963a2,2,0,0,0-2-2H4a2,2,0,0,0-2,2v14a2,2,0,0,0,2,2h6.55a1,1,0,0,1,0,2H4a4,4,0,0,1-4-4v-14a4,4,0,0,1,4-4H21.6A4,4,0,0,1,25.6,4.963ZM4,7.563a3,3,0,1,1,3,3A3,3,0,0,1,4,7.563Zm2,0a1,1,0,1,0,1-1A1,1,0,0,0,6,7.563Z"
transform="translate(0 -0.963)"
fill="#00fbff"></path>
<path id="Path_207" data-name="Path 207"
d="M11.836-4.736H8.076v3.76H6.1v-3.76H2.324V-6.719H6.1V-10.5H8.076v3.779h3.76Z"
transform="translate(13.1 24)"
fill="#00fbff"></path>
</svg>
Add to My Inspirations
</button>
<!--
<button title="Download pdf" class="">
<svg xmlns="http://www.w3.org/2000/svg" width="26"
height="33.724" viewBox="0 0 26 33.724">
<defs>
<style>.files {
fill: #DB440D;
}</style>
</defs>
<g transform="translate(0 0)">
<path class="files"
d="M293.269,256h-4.215A1.054,1.054,0,0,0,288,257.054v8.431a1.054,1.054,0,0,0,1.054,1.054h4.215a2.108,2.108,0,0,0,2.108-2.108v-6.323A2.108,2.108,0,0,0,293.269,256Zm0,8.431h-3.162v-6.323h3.162Z"
transform="translate(-274.592 -239.138)"></path>
<path class="files"
d="M422.323,258.108V256h-5.269A1.054,1.054,0,0,0,416,257.054v9.485h2.108v-4.215h4.215v-2.108h-4.215v-2.108Z"
transform="translate(-396.323 -239.138)"></path>
<path class="files"
d="M1.514,30.562V3.161c0-.582.339-1.054.757-1.054H13.622V6.323c0,1.164.678,2.108,1.514,2.108h3.027v3.162h1.514V7.377a1.3,1.3,0,0,0-.219-.748L14.916.305A.667.667,0,0,0,14.379,0H2.27C1.016,0,0,1.415,0,3.161v27.4c0,1.746,1.016,3.162,2.27,3.162h5.3V31.616H2.27C1.852,31.616,1.514,31.144,1.514,30.562Z"
transform="translate(0 0)"></path>
<path class="files"
d="M165.269,256h-4.215A1.054,1.054,0,0,0,160,257.054v9.485h2.108v-3.162h3.162a2.108,2.108,0,0,0,2.108-2.108v-3.162A2.108,2.108,0,0,0,165.269,256Zm0,5.269h-3.162v-3.162h3.162Z"
transform="translate(-152.551 -239.138)"></path>
</g>
</svg>
Download pdf
</button>
-->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="row">
<div class="col-12 desktop-show ">
<fieldset>
<div class="simple-block__filters simple-block__filters__centered js-product-filters">


<!--
<div class="dropdown dropdown__filter" style="min-width: 110px">
<label class="dropdown-label dropdown-label__filter" data-default-text="Color">Color</label>
<div class="dropdown-list">
<div class="checkbox">
<input type="checkbox"
class="check custom-checkbox js-add-product-filter"
id="checkbox-1" value="value1">
<label for="checkbox-1">
<span class="checkbox-label__text">
Black
</span>
</label>
</div>
<div class="checkbox">
<input type="checkbox"
class="check custom-checkbox js-add-product-filter"
id="checkbox-2" value="value2">
<label for="checkbox-2">
<span class="checkbox-label__text">
Green
</span>
</label>
</div>
<div class="checkbox">
<input type="checkbox"
class="check custom-checkbox js-add-product-filter"
id="checkbox-3" value="value3">
<label for="checkbox-3">
<span class="checkbox-label__text">
Red
</span>
</label>
</div>
<div class="checkbox">
<input type="checkbox"
class="check custom-checkbox js-add-product-filter"
id="checkbox-4" value="value4">
<label for="checkbox-4">
<span class="checkbox-label__text">
Gray
</span>
</label>
</div>
<div class="checkbox">
<input type="checkbox"
class="check custom-checkbox js-add-product-filter"
id="checkbox-5" value="value5">
<label for="checkbox-5">
<span class="checkbox-label__text">
Blue
</span>
</label>
</div>
<div class="checkbox">
<input type="checkbox"
class="check custom-checkbox js-add-product-filter"
id="checkbox-6" value="value6">
<label for="checkbox-6">
<span class="checkbox-label__text">
Pink
</span>
</label>
</div>
<div class="checkbox">
<input type="checkbox"
class="check custom-checkbox js-add-product-filter"
id="checkbox-7" value="value7">
<label for="checkbox-7">
<span class="checkbox-label__text">
Purple
</span>
</label>
</div>
</div>
</div>

<div class="dropdown dropdown__filter" style="min-width: 110px">
<label class="dropdown-label dropdown-label__filter" data-default-text="Shape">Shape</label>
<div class="dropdown-list">
<div class="checkbox">
<input type="checkbox"
class="check custom-checkbox js-add-product-filter"
id="checkbox-9" value="value9">
<label for="checkbox-9">
<span class="checkbox-label__text">
Round
</span>
</label>
</div>
<div class="checkbox">
<input type="checkbox"
class="check custom-checkbox js-add-product-filter"
id="checkbox-10" value="value10">
<label for="checkbox-10">
<span class="checkbox-label__text">
Square
</span>
</label>
</div>
<div class="checkbox">
<input type="checkbox"
class="check custom-checkbox js-add-product-filter"
id="checkbox-11" value="value11">
<label for="checkbox-11">
<span class="checkbox-label__text">
Polygon
</span>
</label>
</div>
<div class="checkbox">
<input type="checkbox"
class="check custom-checkbox js-add-product-filter"
id="checkbox-12" value="value12">
<label for="checkbox-12">
<span class="checkbox-label__text">
Rectangle
</span>
</label>
</div>
</div>
</div>

<div class="dropdown dropdown__filter" style="min-width: 110px">
<label class="dropdown-label dropdown-label__filter" data-default-text="Sizes">Sizes</label>
<div class="dropdown-list">
<div class="checkbox">
<input type="checkbox"
class="check custom-checkbox js-add-product-filter"
id="checkbox-13" value="value13">
<label for="checkbox-13">
<span class="checkbox-label__text">
S
</span>
</label>
</div>
<div class="checkbox">
<input type="checkbox"
class="check custom-checkbox js-add-product-filter"
id="checkbox-14" value="value14">
<label for="checkbox-14">
<span class="checkbox-label__text">
M
</span>
</label>
</div>
<div class="checkbox">
<input type="checkbox"
class="check custom-checkbox js-add-product-filter"
id="checkbox-15" value="value15">
<label for="checkbox-15">
<span class="checkbox-label__text">
L
</span>
</label>
</div>
<div class="checkbox">
<input type="checkbox"
class="check custom-checkbox js-add-product-filter"
id="checkbox-16" value="value16">
<label for="checkbox-16">
<span class="checkbox-label__text">
XL
</span>
</label>
</div>
</div>
</div>

<div class="dropdown dropdown__filter" style="min-width: 110px">
<label class="dropdown-label dropdown-label__filter" data-default-text="Fabric">Fabric</label>
<div class="dropdown-list">
<div class="checkbox">
<input type="checkbox"
class="check custom-checkbox js-add-product-filter"
id="checkbox-17" value="value17">
<label for="checkbox-17">
<span class="checkbox-label__text">
cotton
</span>
</label>
</div>
<div class="checkbox">
<input type="checkbox"
class="check custom-checkbox js-add-product-filter"
id="checkbox-18" value="value18">
<label for="checkbox-18">
<span class="checkbox-label__text">
bamboo
</span>
</label>
</div>
<div class="checkbox">
<input type="checkbox"
class="check custom-checkbox js-add-product-filter"
id="checkbox-19" value="value19">
<label for="checkbox-19">
<span class="checkbox-label__text">
glass
</span>
</label>
</div>
<div class="checkbox">
<input type="checkbox"
class="check custom-checkbox js-add-product-filter"
id="checkbox-20" value="value20">
<label for="checkbox-20">
<span class="checkbox-label__text">
metal
</span>
</label>
</div>
</div>
</div>

<div class="dropdown dropdown__filter" style="min-width: 135px">
<label class="dropdown-label dropdown-label__filter"
data-default-text="Specification">Specification</label>
<div class="dropdown-list">
<div class="checkbox">
<input type="checkbox"
class="check custom-checkbox js-add-product-filter"
id="checkbox-21" value="value21">
<label for="checkbox-21">
<span class="checkbox-label__text">
80*60*40cm
</span>
</label>
</div>
<div class="checkbox">
<input type="checkbox"
class="check custom-checkbox js-add-product-filter"
id="checkbox-22" value="value22">
<label for="checkbox-22">
<span class="checkbox-label__text">
60*40*30cm
</span>
</label>
</div>
<div class="checkbox">
<input type="checkbox"
class="check custom-checkbox js-add-product-filter"
id="checkbox-23" value="value23">
<label for="checkbox-23">
<span class="checkbox-label__text">
50*40*30cm
</span>
</label>
</div>
<div class="checkbox">
<input type="checkbox"
class="check custom-checkbox js-add-product-filter"
id="checkbox-24" value="value24">
<label for="checkbox-24">
<span class="checkbox-label__text">
40*40*25cm
</span>
</label>
</div>
<div class="checkbox">
<input type="checkbox"
class="check custom-checkbox js-add-product-filter"
id="checkbox-25" value="value25">
<label for="checkbox-25">
<span class="checkbox-label__text">
33*15*85cm
</span>
</label>
</div>
</div>
</div>

<button title="Clear filters" class="simple-block__filter--button js-clear-all-product-filters">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
viewBox="0 0 24 24">
<g transform="translate(0 -0.001)">
<g transform="translate(0 0.001)">
<path d="M13.326,12l10.4-10.4A.938.938,0,0,0,22.4.275L12,10.675,1.6.275A.938.938,0,0,0,.274,1.6L10.674,12,.274,22.4A.938.938,0,0,0,1.6,23.726L12,13.327l10.4,10.4A.938.938,0,0,0,23.725,22.4Z"
transform="translate(0 -0.001)"/>
</g>
</g>
</svg>
Clear filters
</button>
-->

<div class="simple-block__filter--product-id">
<p>Product Id: <?php echo $internal_prod_number; ?> / Brand: <?php echo $brand; ?></p>
</div>

</div>
</fieldset>
</div>
<div class="col-12 mobile-show">
<div class="simple-block__filters">
<div class="simple-block__filter--product-id">
<p>Product Id: <?php echo $internal_prod_number; ?> / Brand: <?php echo $brand; ?></p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<?php	
	//echo $internal_prod_number;
	//exit;
?>	












<!--			CAROUSEL SECTION-->
<section class="two-elements-block clearfix">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12 col-lg-6" style="z-index: 2;">
<div class="caro-wrap position-sticky__a">
<div class="icons-f__p__s over-image-gallery">
<div class="animating-imgs__wrap showroom-detail-view-product-page idea-folder" data-toggle="modal" data-target="#saveToIdeaFolder">
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
<div class="animating-imgs__wrap showroom-detail-view-product-page save-to-specs-sheet" data-toggle="modal" data-target="#saveToSpecSheet">
<div class="icons icon-share__circle icon-share__circle__18C4C7 add-to-fav animate-pulse add-to-fav__icon_save">
<svg id="Save" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 33.398 33.33">
<circle id="Ellipse_23" data-name="Ellipse 23" cx="16.5" cy="16.5" r="16.5" fill="#fff"></circle>
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
</div>
<div class="popup-info-content-mobile">
<button class="close-popup-content-mobile">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
<g transform="translate(0 -0.001)">
<g transform="translate(0 0.001)">
<path d="M13.326,12l10.4-10.4A.938.938,0,0,0,22.4.275L12,10.675,1.6.275A.938.938,0,0,0,.274,1.6L10.674,12,.274,22.4A.938.938,0,0,0,1.6,23.726L12,13.327l10.4,10.4A.938.938,0,0,0,23.725,22.4Z" transform="translate(0 -0.001)"></path>
</g>
</g>
</svg>
</button>
<div class="icon">
<svg id="Save-popup" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25.6 23.023">
<path id="Path_205" data-name="Path 205" d="M25.6,4.963v7.6a1,1,0,0,1-1,1h-.55a1,1,0,0,1-.724-.31L18.974,8.69l-7.748,9.89a1,1,0,0,1-.787.383h0a1,1,0,0,1-.787-.384L7.006,15.195,5.592,17.034a1,1,0,0,1-1.585-1.22l2.2-2.861A1,1,0,0,1,7,12.563H7a1,1,0,0,1,.788.384L10.44,16.34l7.672-9.794a1,1,0,0,1,1.511-.073L23.6,10.642V4.963a2,2,0,0,0-2-2H4a2,2,0,0,0-2,2v14a2,2,0,0,0,2,2h6.55a1,1,0,0,1,0,2H4a4,4,0,0,1-4-4v-14a4,4,0,0,1,4-4H21.6A4,4,0,0,1,25.6,4.963ZM4,7.563a3,3,0,1,1,3,3A3,3,0,0,1,4,7.563Zm2,0a1,1,0,1,0,1-1A1,1,0,0,0,6,7.563Z" transform="translate(0 -0.963)" fill="#fff"></path>
<path id="Path_207" data-name="Path 207" d="M11.836-4.736H8.076v3.76H6.1v-3.76H2.324V-6.719H6.1V-10.5H8.076v3.779h3.76Z" fill="#fff"></path>
</svg>
</div>
<span>Save to My Inspirations</span>
<p>
This function is comming soon</p>
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
This function is comming soon</p>
</div>
<div class="popup-info-box">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="49" height="50" viewBox="0 0 49 50">
<defs>
<filter id="Ellipse_25" x="0" y="0" width="49" height="50" filterUnits="userSpaceOnUse">
<feOffset input="SourceAlpha"/>
<feGaussianBlur stdDeviation="3" result="blur"/>
<feFlood flood-opacity="0.702"/>
<feComposite operator="in" in2="blur"/>
<feComposite in="SourceGraphic"/>
</filter>
</defs>
<g id="iinfo" transform="translate(3.697 3.085)">
<text id="i" transform="translate(13.303 37.915)" font-size="50" font-family="PTSerif-Bold, PT Serif" font-weight="700">
<tspan x="1px" y="0px">i</tspan>
</text>
</g>
</svg>
</div>
<div class="info-popup-idea-folder-big">
<div class="icon">
<svg id="Save-popup" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25.6 23.023">
<path id="Path_205" data-name="Path 205" d="M25.6,4.963v7.6a1,1,0,0,1-1,1h-.55a1,1,0,0,1-.724-.31L18.974,8.69l-7.748,9.89a1,1,0,0,1-.787.383h0a1,1,0,0,1-.787-.384L7.006,15.195,5.592,17.034a1,1,0,0,1-1.585-1.22l2.2-2.861A1,1,0,0,1,7,12.563H7a1,1,0,0,1,.788.384L10.44,16.34l7.672-9.794a1,1,0,0,1,1.511-.073L23.6,10.642V4.963a2,2,0,0,0-2-2H4a2,2,0,0,0-2,2v14a2,2,0,0,0,2,2h6.55a1,1,0,0,1,0,2H4a4,4,0,0,1-4-4v-14a4,4,0,0,1,4-4H21.6A4,4,0,0,1,25.6,4.963ZM4,7.563a3,3,0,1,1,3,3A3,3,0,0,1,4,7.563Zm2,0a1,1,0,1,0,1-1A1,1,0,0,0,6,7.563Z" transform="translate(0 -0.963)" fill="#fff"></path>
<path id="Path_207" data-name="Path 207" d="M11.836-4.736H8.076v3.76H6.1v-3.76H2.324V-6.719H6.1V-10.5H8.076v3.779h3.76Z" fill="#fff"></path>
</svg>
</div>
<span>Save to My Inspirations</span>
<p>
This function is comming soon</p>
<a class="dontShowAgain_idea">Don't show again</a>
</div>
<div class="info-popup-spec-folder-big">
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
This function is comming soon</p>
<a class="dontShowAgain_spec">Don't show again</a>
</div>
<div class="row">
<div class="col-12">
<div class="product-detail__carousel image-gallery js-add-to-card-image-holder">
<img src="<?php echo $img; ?>" alt="" class="img-fluid"/>
<?php
foreach($gallery_imgs as $val){
	if($isMob){		
		$img_t = SITEROOT."saascustuploads/1/cart/small/".$val['file_name'];
		echo "<img src='".$img_t."' alt='' class='img-fluid'>";	
	}else{
		$img_t = SITEROOT."saascustuploads/1/cart/medium/".$val['file_name'];
		echo "<img src='".$img_t."' alt='' class='img-fluid'>";	
	}
}
?>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="product-detail__carousel-nav">
<?php 
foreach($gallery_imgs as $val){
	if($isMob){	
		$img_f = SITEROOT."saascustuploads/1/cart/small/".$val['file_name'];
	}else{
		$img_f = SITEROOT."saascustuploads/1/cart/medium/".$val['file_name'];
	}		
	echo "<div>";
	echo "<img src='".$img_f."' alt='' class='img-fluid prod-detail__nav-img'>";	
	echo "</div>";
} 
?>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="back-to-filters-wrap">
<a href="#"  onClick="history.back()" title="Back to filters" class="btn btn-primary pt-2 pb-2  ">
back to filters
</a>
</div>
</div>
</div>
</div>
</div>

<div class="col-12 col-lg-6" style="z-index: 1;">
<div class="row">
<div class="col-12">
<div class="product-purchase">
<div class="row">
<div class="col-12">
<div class="row">
<div class="col-12 col-lg-6 d-flex">
<!--
<p class="product-purchase__promotion-first">$15.64</p>
<p class="product-purchase__real-price">$44.66</p>
-->
</div>
<div class="col-6 col-lg-6">
<div class="product-purchase__discount-wrap">
<!--
<span class="product-purchase__discount">-65%</span>
-->
<span class="product-purchase__availability">in stock</span>
</div>
</div>
<div class="col-6 col-lg-6">
<div class="product-purchase__mobile-quantity">
<!--
<p class="product-purchase__quantity-text mr-2 desktop-show">
Quantity:</p>
<p class="product-purchase__quantity-text mr-2 mobile-show">
Qty:</p>
<p class="product-purchase__quantity-wrap">
<input type="number"
class="product-purchase__quantity" min="0"
value="1">
</p>

<p class="product-purchase__quantity-description desktop-view ml-3">
<span>5% off</span>
-->
<button type="button"
class="product-purchase__quantity-tooltip"
data-toggle="tooltip" data-placement="top"
title="Additional 5% off (3 pieces or more)">
i
</button>
</p>
</div>
</div>
<div class="col-12 mobile-show">
<!--
<p class="product-purchase__quantity-description">
Additional 5% off (3 pieces or more)
</p>
-->
</div>
<div class="col-12 col-lg-6">
<div class="row">
<div class="col-12">
<div class="product-purchase__buy-add-to-card-wrap">

<!--
<button title="Buy now" class="btn btn-secondary product-purchase__buy-now">
Buy now
</button>
<button title="Add to cart" class="btn btn-primary product-purchase__add-to-card js-add-to-card-button">
Add to cart
</button>
-->

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

<div class="row product-collapse-container">
<div class="col-12">
<div class="product-nav-wrap" data-nav="showroom-detail-product-nav">
<div class="product-nav-wrap__content">
<button title="Left" class="product-nav-wrap__prev" style="display: none;">
<svg xmlns="http://www.w3.org/2000/svg" height="24"
viewBox="0 0 24 24" width="24">
<path d="M0 0h24v24H0V0z" fill="none"/>
<path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/>
</svg>
</button>

<ul class="nav nav-pills product-nav" id="pills-tab" role="tablist">
<li class="nav-item">
<a class="nav-link product-nav__link active"
id="pills-description-tab" data-toggle="pill"
href="#pills-description" role="tab"
aria-controls="pills-description" aria-selected="true">Description</a>
</li>

<li class="nav-item">
<a class="nav-link product-nav__link"
id="pills-specifications-tab" data-toggle="pill"
href="#pills-specifications" role="tab"
aria-controls="pills-specifications" aria-selected="false">Specifications</a>
</li>


<li class="nav-item">
<a class="nav-link product-nav__link" id="pills-reviews-tab"
data-toggle="pill" href="#pills-reviews" role="tab"
aria-controls="pills-reviews"
aria-selected="false"></a>
</li>

<li class="nav-item">
<a class="nav-link product-nav__link"
id="pills-Installations-tab" data-toggle="pill"
href="#pills-Installations" role="tab"
aria-controls="pills-Installations" aria-selected="false"></a>
</li>

</ul>

<button title="Right" class="product-nav-wrap__next" style="display: flex;">
<svg xmlns="http://www.w3.org/2000/svg" height="24"
viewBox="0 0 24 24" width="24">
<path d="M0 0h24v24H0V0z" fill="none"/>
<path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
</svg>
</button>
</div>
</div>


<div class="tab-content product-tab-content" id="pills-tabContent" data-target="pills-tabContent">
<div class="tab-pane fade show active" id="pills-description"
role="tabpanel" aria-labelledby="pills-description-tab">
<div class="tab-content__text-wrap js-text-wrap">
<p class="tab-content__text-wrap--title">
<?php echo $short_description; ?>
</p>

<div class="tab-content__text-wrap--content js-hidden-text small-text">
<p class="tab-content__text-wrap--text">
<?php echo $description; ?>
</p>
</div>
</div>
<button title="Read all" data-readall="Read all" data-readless="Read less"
class="product-tab-content__link mt-2 p-0 mb-0 js-btn-read-all-text">
<span>Read all</span>
</button>
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
	<img src="<?php echo SITEROOT; ?>images/Rectangle12.png" alt="" class="block-stars__wrapper--image">
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
	<img src="<?php echo SITEROOT; ?>images/Rectangle12.png" alt="" class="block-stars__wrapper--image">
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






<div class="tab-pane fade" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab">
</div>


<div class="tab-pane fade" id="pills-Installations" role="tabpanel" aria-labelledby="pills-Installations-tab">
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>




<!-- You/We design -->
<section class="two-elements-block">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12 col-lg-6">
		<div class="you-design-block product-detail">
			<div class="row showroom-detail-product-row">
				<div class="col-12 col-xl-7 showroom-detail-product-col-lg">
					<div class="you-design-block__image">
						<img src="<?php echo SITEROOT; ?>images/AccessoryProductImages/YouDesignAccess.jpg" 
						alt="Custom Closet Design" class="img-fluid">
					</div>
				</div>
				<div class="col-12 col-xl-5 showroom-detail-product-col-lg">
					<div class="you-design-block__wrapper">
						<p class="you-design-block__wrapper--perfect-fit">
						<img src="<?php echo SITEROOT; ?>images/security.svg" alt="">
						100% Perfect Fit Guarantee
						</p>
						<h2 style="margin-top:4px;" class="you-design-block__wrapper--heading">
						You design - Coming Soon
						</h2>
						<p class="you-design-block__wrapper--text small-text">
						Use Our Online Design Tool 						
						</p>
						<div class="you-design-block__wrapper--text-group">
							<div>
							<img src="<?php echo SITEROOT; ?>images/Group174.svg" alt="" class="img-fluid">
							<p>0</p>
							</div>
							<p>Users in <span>design tool</span></p>
						</div>
						<?php
						if(isset($r[1]['name'])){ 
						?>
						<div class="block-stars__wrapper">
							<div class="block-stars__wrapper--text">
								<div class="stars-container">
									<img src="<?php echo SITEROOT; ?>images/rev2.png" 
									alt=""
									class="block-stars__wrapper--image">
									<?php echo $r[1]['stars']; ?>
								</div>
								<p class="first-text">
								<?php echo $r[1]['name']; ?>
								</p>
								<p>
								<?php echo $r[1]['msg']; ?>
								</p>
							</div>
						</div>
						<?php } ?>
						
						<a href="<?php echo SITEROOT; ?>comming-soon.html" 
						title="Design Tool" class="link-button">
						Coming Soon
						<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623"
							viewBox="0 0 20.8 14.623">
							<path id="left-arrow_3_" data-name="left-arrow(3)"
							d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z"
							transform="translate(0.001 -4.676)"></path>
						</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-12 col-lg-6">
		<div class="you-design-block we-desing-block product-detail">
			<div class="row showroom-detail-product-row">
				<div class="col-12 col-xl-7 showroom-detail-product-col-lg">
					<div class="you-design-block__image">
						<img src="<?php echo SITEROOT; ?>images/AccessoryProductImages/WeDesignAccess.jpg" alt="" class="img-fluid">
					</div>
				</div>
				<div class="col-12 col-xl-5 showroom-detail-product-col-lg">
					<div class="you-design-block__wrapper">
						<p class="you-design-block__wrapper--perfect-fit">
						<img src="<?php echo SITEROOT; ?>images/security.svg" alt="">
						100% Perfect Fit Guarantee
						</p>
						<h2 style="margin-top:6px;" class="you-design-block__wrapper--heading">
						We design
						</h2>
						<p class="you-design-block__wrapper--text small-text">
						Fill out our form to make your design request
						</p>
						<div class="you-design-block__wrapper--text-group">
							<div>
								<img src="<?php echo SITEROOT; ?>images/Group174.svg" 
								alt="Request Closewt Design" class="img-fluid">
								<p><?php echo $count_sub_des; ?></p>
							</div>
							<p>Users <span>submitting designs</span></p>
						</div>
						<div class="block-stars__wrapper">
							<?php
							if(isset($r[0]['name'])){
							?>
							<div class="block-stars__wrapper--text">
								<div class="stars-container">
									<img src="<?php echo SITEROOT; ?>images/rev2.png" alt=""
									class="block-stars__wrapper--image">
									<?php
									echo $r[0]['stars']; 
									?>
								</div>
								<p class="first-text"><?php echo $r[0]['name']; ?></p>
								<p><?php echo $r[0]['msg']; ?></p>
							</div>
							<?php } ?>
						</div>
						<a href="<?php echo SITEROOT; ?>request-design.html" 
							title="Explore now" class="link-button">
							Explore now
							<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623"
							viewBox="0 0 20.8 14.623">
							<path id="left-arrow_3_" data-name="left-arrow(3)"
							d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z"
							transform="translate(0.001 -4.676)"></path>
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
