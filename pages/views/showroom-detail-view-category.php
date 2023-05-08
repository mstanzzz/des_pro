<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>ClosetsToGo | <?php echo $meta_title; ?></title>
<meta name="description" content="<?php echo $short_description; ?>">
<link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">
</head>
<body class="clearfix idea-folder-popup">
<?php
$nav_el = "rooms";
require_once($real_root.'/pages/views/header.php');
?>
<section class="home-mobile-buttons-block showroom-category-page">
<div class="accordion accordion-organizer-landing-page showroom-details" id="accordion-organizer-landing">
<div class="card">
<div class="d-flex align-items-center">
	<a href="showroom.html" title="Rooms">
	<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
	<path d="M0 0h24v24H0V0z" fill="none"/><path fill="#ffffff" d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/>
	</svg>
	</a>
	<div class="card-header" id="headingOne">
		<h2 class="mb-0">
		<button title="Filters" class="accordion-organizer-button js-filter-fix-body" type="button" 
		data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		Filters
		</button>
		</h2>
	</div>
</div>

<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion-organizer-landing">
	<div class="card-body">
		<div class="organizer-filters-block__wrapper js-filters-box">
			<fieldset class="w-100 text-center">
				<div class="form-group accordion-organizer-form-group">
					<label for="enter-tag" class="sr-only">Enter tag</label>
					<input type="text" name="enter-tag" 
						class="form-control accordion-organizer-form-input" placeholder="Enter tag">
				</div>
				<div class="d-flex justify-content-between">
					<button title="Apply filters" type="button" 
					class="btn btn-secondary accordion-organizer-submit">
					Apply filters
					</button>
					<button title="Clear filters" type="button" 
					class="btn btn-secondary accordion-organizer-submit js-clear-filter">Clear filters</button>
				</div>
			</fieldset>
		</div>
	</div>
</div>
</div>
</div>
</section>

<section class="first-fixed-block covid-block showroom-category-page clearfix">
<div class="mobile-show">
<div class="mobile-category-heading">
<p>
<?php echo $name; ?>					
</p>
</div>
</div>

<figure class="col-12 first-fixed-block__img-group" style="background-image: url('<?php echo $hero_img; ?>');">
<figcaption class="first-fixed-block__img-group--text-block">
<div class="wrapper text-center">
<h1 class="first-fixed-block__img-group--heading text-center">
<?php echo	$custom1; ?>
</h1>
<h3 class="first-fixed-block__img-group--subheading text-center">
<?php echo $custom2; ?>
</h3>
</div>
</figcaption>
</figure>
</section>


<main class="main hero-block organizer-landing-page clearfix" style="background: white;">
<center style="margin-left:10px; margin-right:10px; font-size:0.9em; color:#808080;">
<?php echo $description; ?>
<br />
<?php echo $short_description; ?>

<center/>
<section class="breadcrumb-block showroom-detail-page desktop-show">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12">
		<div class="breadcrumb-block__wrapper" aria-label="breadcrumb">
			<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo SITEROOT; ?>" title="Home">Home</a></li>
			<li class="breadcrumb-item"><a href="<?php echo SITEROOT; ?>showroom.html" title="Room Gallery">Room Gallery</a></li>
			<li class="breadcrumb-item active" aria-current="page" title="Room Gallery"><?php echo $name; ?></li>
			</ul>
		</div>
	</div>
</div>
</div>
</div>
</section>
<script>
function get_opt(opt_id,indx){
	//alert(document.getElementById("attr_"+indx).value);
	document.getElementById("attr_"+indx).value = opt_id;	
	//alert(document.getElementById("attr_"+indx).value);
}
</script>
<?php

$n=getUrlText($name);
$url_str = SITEROOT."showroom-category-".$profile_cat_id."/".$n.".html";
$_SESSION['url_str']=$url_str;
$_SESSION['cat_name']=$name;
?>
<form name="filter_form" action="<?php echo $url_str; ?>" method="post" >
<input type='hidden' name='apply_filters' value='0' >

<section class="organizer-filters-block desktop-show">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="organizer-filters-block__wrapper">
<?php
$attr_block='';
$i=0;
foreach($attr_array as $val){
	if(count($val['opt_ids'])>0){
		$attr_block.="<div class='my-custom-select-wrapper'>";
		$attr_block.="<div class='my-custom-select'>";
		$attr_block.="<div class='my-custom-select__trigger'><span>".$val['attribute_name']."</span>";
		$attr_block.="<div class='arrow'></div>";
		$attr_block.="</div>";
		$attr_block.="<input type='hidden' id='attr_".$i."' name='attr_".$i."' value='0' >";
		$attr_block.="<div class='my-custom-options'>";
		$attr_block.="<span class='my-custom-option selected' data-value='".$val['attribute_id']."'>".$val['attribute_name']."</span>";
		$attr_block.="<span class='my-custom-option' data-value='All'>All</span>";
		foreach($val['opt_ids'] as $op){
			$attr_block.="<span class='my-custom-option' data-value='".$op['opt_id']."'  onClick='get_opt(".$op['opt_id'].",".$i.");'>".$op['opt_name']."</span>";
		}
		$attr_block.="</div>";
		$attr_block.="</div>";
		$attr_block.="</div>";
		$i++;
	}
}
echo $attr_block;
?>
<fieldset class="form-inline align-items-start">
<!--
<div class="form-group">
<label for="enter-tag" class="sr-only">Enter tag</label>
<input type="text" name="enter-tag" class="form-control" placeholder="Enter tag">
</div>
-->
<button title="Go" type="submit" class="btn btn-secondary btn-enter-tag">Go</button>
</fieldset>

</div>
</div>
</div>
</div>
</div>
</section>
</form>


<section class="showroom-block organizer-landing-page">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12 showroom-block__heading">
<h2><?php echo $name; ?></h2>
</div>
</div>
<div class="row showroom-block__wrapper">
<?php echo $items_block; ?>
</div>
</div>
</div>
</section>
</main>
<?php
//require_once($real_root.'/pages/views/virtual-assistant.php');
require_once($real_root.'/pages/views/mobile-show-footer-buttons.php');
require_once($real_root.'/pages/views/footer.php');
require_once($real_root.'/pages/views/modal-perfect-fit-guarantee.php');
require_once($real_root.'/pages/views/modal-free-shipping.php');
require_once($real_root.'/pages/views/modal-save-to-idea-folder.php');
require_once($real_root.'/pages/views/modal-save-to-specs-sheet.php');
?>

<script src="<?php echo SITEROOT; ?>app.js"></script>

</body>
</html>
