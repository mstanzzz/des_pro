<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>ClosetsToGo | <?php echo $meta_title; ?></title>
<meta name="description" content="<?php echo $meta_description; ?>">
	
    <link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body class="clearfix idea-folder-popup">
    <?php
    require_once($real_root . '/pages/views/header.php');
    ?>




<section class="home-mobile-buttons-block covid-block">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="home-mobile-buttons-block__wrapper">
<p class="h2">
<?php
//echo $p_1_head;
?>
</p>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="first-fixed-block covid-block clearfix">

<figure class="first-fixed-block__img-group" style="background-image: url('<?php echo SITEROOT; ?>images/acess-hero.jpg');">

<figcaption class="first-fixed-block__img-group--text-block">
<p class="first-fixed-block__img-group--text text-center">
<?php //echo $p_1_text; ?>
</p>
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
<li class="breadcrumb-item"><a href="<?php echo SITEROOT; ?>" title="Home">Home</a></li>
<li class="breadcrumb-item active" aria-current="page" title="Features">Features</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>



<h1 class='FeaturesTitle'>FEATURES</h1>
<p style="text-align: center;">Navigate through our Features</p>
<section class="home-mobile-buttons-block diy-mobile-header covid-block" style="position: absolute; padding-bottom: 5%;">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12">
		<div class="diy-mobile-header__heading">
			<button title="DIY instructions" class="diy-mobile-header__heading--button not-active js-uncheck-diy-header-btn">
			<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
			<path d="M0 0h24v24H0V0z" fill="none" />
			<path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z" />
			</svg>
			</button>
			<p>FEATURES</p>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-12">
		<div class="home-mobile-buttons-block__wrapper">
			<button title="Left" class="account-nav__prev" style="display: none">
			<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
			<path d="M0 0h24v24H0V0z" fill="none" />
			<path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z" />
			</svg>
			</button>
			<div class="account-nav__content">
				<button title="Material" style="max-width: 120px;" class="home-mobile-buttons-block__link js-mobile-tab-btn" data-id="#tab-content-1">Material</button>
				<button title="Handles" style="max-width: 120px;" class="home-mobile-buttons-block__link js-mobile-tab-btn" data-id="#tab-content-2">Handles</button>
				<button title="Knobs" style="max-width: 120px;" class="home-mobile-buttons-block__link js-mobile-tab-btn" data-id="#tab-content-3">Knobs</button>
				<button title="Hooks" style="max-width: 120px;" class="home-mobile-buttons-block__link js-mobile-tab-btn" data-id="#tab-content-4">Hooks</button>
				<button title="Lighting" style="max-width: 160px;" class="home-mobile-buttons-block__link js-mobile-tab-btn" data-id="#tab-content-5">Lighting</button>
				<button title="Fronts" style="max-width: 120px;" class="home-mobile-buttons-block__link js-mobile-tab-btn" data-id="#tab-content-6">Fronts</button>
			</div>
			<button title="Right" class="account-nav__next">
			<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
			<path d="M0 0h24v24H0V0z" fill="none" />
			<path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z" />
			</svg>
			</button>
		</div>
	</div>
</div>
</div>
</div>
</section>

<div class="container" style="margin-left: auto; margin-right: auto;">
	<!-- 
	<div class="account-nav__content">
		<button title="Colors" style="max-width: 120px;" class="home-mobile-buttons-block__link js-mobile-tab-btn" data-id="#tab-content-1" >Colors</button>
		<button title="Knobs" style="max-width: 120px;" class="home-mobile-buttons-block__link js-mobile-tab-btn" data-id="#tab-content-2">Knobs</button>
		<button title="Rails" style="max-width: 120px;" class="home-mobile-buttons-block__link js-mobile-tab-btn" data-id="#tab-content-3">Rails</button>
	</div> 
	-->
	<div class="mobileTabs">
		<div class="tab-block__buttons-content" style="margin-left: auto; margin-right: auto;">
			<button title="Material" class="tab-block__buttons-content--button active" id="tab-button-1" data-id="tab-content-1" style="min-width: 120px;">Material</button>
			<button title="Handles" class="tab-block__buttons-content--button" id="tab-button-2" data-id="tab-content-2" style="min-width: 120px;">Handles</button>
			<button title="Knobs" class="tab-block__buttons-content--button" id="tab-button-3" data-id="tab-content-3" style="min-width: 120px;">Knobs</button>
			<button title="Hooks" class="tab-block__buttons-content--button" id="tab-button-4" data-id="tab-content-4" style="min-width: 120px;">Hooks</button>
			<button title="Lighting" class="tab-block__buttons-content--button" id="tab-button-5" data-id="tab-content-5" style="min-width: 120px;">Lighting</button>
			<button title="Fronts" class="tab-block__buttons-content--button" id="tab-button-6" data-id="tab-content-6" style="min-width: 120px;">Fronts</button>
		</div>
	</div>

	<div class="tab-block__wrapper open" id="tab-content-1">
		<div class="row">
			<div class="col-12 col-lg-6">
				<div class="tab-block__wrapper--content">
					<p class="tab-block__wrapper--heading with-button" style="font-family: 'Futurica-BS-light', sans-serif;">
					<span>Materials/Colors</span>
					</p>
					<p class="brandNameTop1" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
					<span>Uniboard</span>
					</p>
					<div class="tab-block__wrapper open" id="tab-content-1" style="padding-top: 1px;">
						<div id="picturebox">
							<div class="imageStyle">
								<p class="textTitle">(K19) Chino Calico</p>
<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Uniboard/K19-Chino-Calico.jpg" alt="Uniboard K19-Chino-Calico" />
							</div>
							<div class="imageStyle">
								<p class="textTitle">(K62) Feather White Nobella</p>
<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Uniboard/K62-Feather-White-Nobella.jpg" alt="Uniboard K62-Feather-White-Nobella" />
							</div>
							<div class="imageStyle">
								<p class="textTitle">(K63) Pietra Nobella</p>
<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Uniboard/K63-Pietra-Nobella.jpg" alt="Uniboard K63-Pietra-Nobella" />
							</div>
							<div class="imageStyle">
								<p class="textTitle">(K64) Ombre Nobella</p>
<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Uniboard/K64-Ombre-Nobella.jpg" alt="Uniboard K64-Ombre-Nobella" />
							</div>
							<div class="imageStyle">
								<p class="textTitle">(K65) Americana Nobella</p>
<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Uniboard/K65-Americana-Nobella.jpg" alt="Uniboard K65-Americana-Nobella" />
							</div>
							<div class="imageStyle">
								<p class="textTitle">H54-Skye-Brushed-Elm</p>
<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Uniboard/H54-Skye-Brushed-Elm.jpg" alt="Uniboard H54-Skye-Brushed-Elm" />
							</div>
							<div class="imageStyle">
								<p class="textTitle">H70-Driftwood-Brushed-Elm</p>
<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Uniboard/H70-Driftwood-Brushed-Elm.jpg" alt="Uniboard H70-Driftwood-Brushed-Elm">
							</div>
							<div class="imageStyle">
								<p class="textTitle">K13-Nizza-Riviera-Oak</p>
<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Uniboard/K13-Nizza-Riviera-Oak.jpg" alt="Uniboard K13-Nizza-Riviera-Oak">
							</div>
						</div>
						<div id="picturebox">
							<div class="imageStyle">
							<p class="textTitle">K14-Mistral-Riviera-Oak</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Uniboard/K14-Mistral-Riviera-Oak.jpg" alt="Uniboard K14-Mistral-Riviera-Oak">
							</div>
							<div class="imageStyle">
							<p class="textTitle">K15-Cannes-Riviera-Oak</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Uniboard/K15-Cannes-Riviera-Oak.jpg" alt="Uniboard K15-Cannes-Riviera-Oak" />
							</div>
							<div class="imageStyle">
							<p class="textTitle">K17-Cassis-Riviera-Oak</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Uniboard/K17-Cassis-Riviera-Oak.jpg" alt="Uniboard K17-Cassis-Riviera-Oak" />
							</div>
							<div class="imageStyle">
							<p class="textTitle">K21-Canvas-Calico</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Uniboard/K21-Canvas-Calico.jpg" alt="Uniboard K21-Canvas-Calico" />
							</div>
							<div class="imageStyle">
							<p class="textTitle">K24-Dalia-Sequoia</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Uniboard/K24-Dalia-Sequoia.jpg" alt="Uniboard K24-Dalia-Sequoia" />
							</div>
							<div class="imageStyle">
							<p class="textTitle">K60-Chiffon-Nobella</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Uniboard/K60-Chiffon-Nobella.jpg" alt="Uniboard K60-Chiffon-Nobella" />
							</div>
							<div class="imageStyle">
							<p class="textTitle">K61-Silk-Nobella</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Uniboard/K61-Silk-Nobella.jpg" alt="Uniboard K61-Silk-Nobella" />
							</div>
						</div>
						<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
						<span>Tafisa</span>
						</p>
						<div id="picturebox">
							<div class="imageStyle">
								<p class="textTitle">L580-K-Free-Spirit-Esprit-Libre</p>
<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/L580-K-Free-Spirit-Esprit-Libre.jpg" alt="Tafisa L580-K-Free-Spirit-Esprit-Libre">
							</div>
							<div class="imageStyle">
								<p class="textTitle">L581-K-Sheer-Beauty-Beaute-Naturelle</p>
<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/L581-K-Sheer-Beauty-Beaute-Naturelle.jpg" alt="Tafisa L581-K-Sheer-Beauty-Beaute-Naturelle">
							</div>
							<div class="imageStyle">
								<p class="textTitle">L582-K-Fashionista</p>
<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/L582-K-Fashionista.jpg" alt="Tafisa L582-K-Fashionista">
							</div>
							<div class="imageStyle">
								<p class="textTitle">L583(K) First Class_Première Classe</p>
<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/L583-K-First-Class-Premiere-Classe.jpg" alt="Tafisa L583(K) First Class_Première Classe" />
							</div>
							<div class="imageStyle">
								<p class="textTitle">L584-K-The-Chameleon-Le-Cameleon</p>
								<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/L584-K-The-Chameleon-Le-Cameleon.jpg" alt="Tafisa L584-K-The-Chameleon-Le-Cameleon" />
							</div>
							<div class="imageStyle">
								<p class="textTitle">L585-K-Rhapsody-Rhapsodie</p>
								<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/L585-K-Rhapsody-Rhapsodie.jpg" alt="Tafisa L585-K-Rhapsody-Rhapsodie" />
							</div>
							<div class="imageStyle">
								<p class="textTitle">L830-K-Force-of-Nature-Force-de-la-Nature</p>
								<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/L830-K-Force-of-Nature-Force-de-la-Nature.jpg" alt="Tafisa L830-K-Force-of-Nature-Force-de-la-Nature" />
							</div>
							<div class="imageStyle">
								<p class="textTitle">L831-K-Roc-Solid-Roc-Solide</p>
								<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/L831-K-Roc-Solid-Roc-Solide.jpg" alt="Tafisa L831-K-Roc-Solid-Roc-Solide" />
							</div>
						</div>
						<div id="picturebox">
							<div class="imageStyle">
							<p class="textTitle">L832-K-Urban-Vibe-Amiance-Urbaine</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/L832-K-Urban-Vibe-Amiance-Urbaine.jpg" alt="Tafisa L832-K-Urban-Vibe-Amiance-Urbaine" />
							</div>
							<div class="imageStyle">
							<p class="textTitle">M175Y_Black</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/M175Y_Black.jpg" alt="Tafisa M175Y_Black">
							</div>
							<div class="imageStyle">
							<p class="textTitle">M175Y_White</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/M175Y_White.jpg" alt="Tafisa M175Y_White">
							</div>
							<div class="imageStyle">
							<p class="textTitle">M2003(Y) Weekend_Getaway</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/M2003-Y-Weekend-Getaway.jpg" alt="Tafisa M2003-Y-Weekend-Getaway">
							</div>
							<div class="imageStyle">
							<p class="textTitle">M2004(Y) Winter_Fun</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/M2004-Y-Winter-Fun.jpg" alt="Tafisa M2004-Y-Winter-Fun">
							</div>
							<div class="imageStyle">
							<p class="textTitle">M2005(Y) Sunday_Brunch</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/M2005-Y-Sunday-Brunch.jpg" alt="Tafisa M2005-Y-Sunday-Brunch">
							</div>
							<div class="imageStyle">
							<p class="textTitle">M2006(Y) Tea_For_Two</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/M2006-Y-Tea-For-Two.jpg" alt="Tafisa M2006-Y-Tea-For-Two">
							</div>
							<div class="imageStyle">
							<p class="textTitle">M2010(Y) After_Hours</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/M2010-Y-After-Hours.jpg" alt="Tafisa M2010-Y-After-Hours">
							</div>
						</div>
						<div id="picturebox">
							<div class="imageStyle">
								<p class="textTitle">M2011(Y) Stargazer</p>
								<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/M2011-Y-Stargazer.jpg" alt="Tafisa M2011-Y-Stargazer">
							</div>
							<div class="imageStyle">
								<p class="textTitle">M2013(Y) Summertime_Blues</p>
								<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/M2013-Y-Summertime-Blues.jpg" alt="Tafisa M2013-Y-Summertime-Blues">
							</div>
							<div class="imageStyle">
								<p class="textTitle">M2014(Y) Sugar_On_Ice</p>
								<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/M2014-Y-Sugar-On-Ice.jpg" alt="Tafisa M2014-Y-Sugar-On-Ice">
							</div>
							<div class="imageStyle">
								<p class="textTitle">M2015(Y) Apres-Ski</p>
<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/M2015-Y-Apres-Ski.jpg" alt="Tafisa M2015(Y)Apres-Ski">
							</div>
							<div class="imageStyle">
								<p class="textTitle">M2031(B) Creme-de-la-Creme</p>
								<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/M2031-B-Creme-de-la-Creme.jpg" alt="Tafisa M2031-B-Creme-de-la-Creme">
							</div>
							<div class="imageStyle">
								<p class="textTitle">M2032(B) Treasure-Trove_Tresor-Cache</p>
<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/M2032-B-Treasure-Trove-Tresor-Cache.jpg" alt="Tafisa M2032(B)-Treasure-Trove_Tresor-Cache">
							</div>
							<div class="imageStyle">
								<p class="textTitle">M2033(B) Simply-Gallant_Rendez-Vous-Galant</p>
<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/M2033-B-Simply-Gallant-Rendez-Vous-Galant.jpg" alt="Tafisa M2033(B)-Simply-Gallant_Rendez-Vous-Galant">
							</div>
							<div class="imageStyle">
								<p class="textTitle">M2034(B) Home-Sweet-Home_Home-Sweet-Home</p>
								<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/M2034-B-Home-Sweet-Home-Home-Sweet-Home.jpg" alt="Tafisa M2034(B)-Home-Sweet-Home_Home-Sweet-Homes">
							</div>
						</div>
						<div id="picturebox">
							<div class="imageStyle">
								<p class="textTitle">M2035(B) Black-Tie_Cravate-Noire</p>
								<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/M2035-B-Black-Tie-Cravate-Noire.jpg" alt="Tafisa M2035-B-Black-Tie-Cravate-Noire">
							</div>
							<div class="imageStyle">
								<p class="textTitle">M2041(B) New-Wave_Nouvelle-Vague</p>
								<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/M2041-B-New-Wave-Nouvelle-Vague.jpg" alt="Tafisa M2041-B-New-Wave-Nouvelle-Vague">
							</div>
							<div class="imageStyle">
								<p class="textTitle">M2051(F) First-Dance_Premiere-Danse</p>
								<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/M2051-F-First-Dance-Premiere-Danse.jpg" alt="Tafisa M2051-F-First-Dance-Premiere-Danse">
							</div>
							<div class="imageStyle">
								<p class="textTitle">M2052(F) Golden-Light_Heure-Doree</p>
								<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/M2052-F-Golden-Light-Heure-Doree.jpg" alt="Tafisa M2052-F-Golden-Light-Heure-Doree">
							</div>
							<div class="imageStyle">
								<p class="textTitle">M2053(F) Brass-Band_Fanfare-de-Cuivres</p>
								<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/M2053-F-Brass-Band-Fanfare-de-Cuivres.jpg" alt="Tafisa M2053-F-Brass-Band-Fanfare-de-Cuivres">
							</div>
							<div class="imageStyle">
								<p class="textTitle">M2054(F) Sunday-Stroll_Promenade-du-Dimanche</p>
								<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/M2054-F-Sunday-Stroll-Promenade-du-Dimanche.jpg" alt="Tafisa M2054-F-Sunday-Stroll-Promenade-du-Dimanche">
							</div>
							<div class="imageStyle">
								<p class="textTitle">M2055(F) Ganache</p>
								<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/M2055-F-Ganache.jpg" alt="Tafisa M2055-F-Ganache">
							</div>
							<div class="imageStyle">
								<p class="textTitle">M2056(F) Night-Owl_Oiseau-de-Nuit</p>
								<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/M2056-F-Night-Owl-Oiseau-de-Nuit.jpg" alt="Tafisa M2056-F-Night-Owl-Oiseau-de-Nuit">
							</div>
						</div>
						<div id="picturebox">
							<div class="imageStyle">
								<p class="textTitle">tafisa M2001(Y)Tete-a-tete</p>
								<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/tafisa-M2001-Y-Tete-a-tete.jpg" alt="tafisa-M2001-Y-Tete-a-tete">
							</div>
							<div class="imageStyle">
								<p class="textTitle">tafisa M2002(Y)Sunset_Cruise</p>
								<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/tafisa-M2002-Y-Sunset-Cruise.jpg" alt="tafisa-M2002-Y-Sunset-Cruise">
							</div>
							<div class="imageStyle">
								<p class="textTitle">Tafisa M2007(Y)Casting_At_First_Light</p>
								<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Tafisa/Tafisa-M2007-Y-Casting-At-First-Light.jpg" alt="Tafisa-M2007-Y-Casting-At-First-Light">
							</div>
						</div>
					<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
					<span>Prism</span>
					</p>
					<div id="picturebox">
						<div class="imageStyle">
							<p class="textTitle">Prism-AF200-Pewter-Frost-Suede</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-AF200-Pewter-Frost-Suede.jpg" alt="Prism-AF200-Pewter-Frost-Suede">
						</div>
						<div class="imageStyle">
							<p class="textTitle">Prism-AF209-Shadow-Frost-Suede</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-AF209-Shadow-Frost-Suede.jpg" alt="Prism-AF209-Shadow-Frost-Suede">
						</div>
						<div class="imageStyle">
							<p class="textTitle">Prism-AF210-Silver-Frost-Suede</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-AF210-Silver-Frost-Suede.jpg" alt="Prism-AF210-Silver-Frost-Suede">
						</div>
						<div class="imageStyle">
							<p class="textTitle">Prism-AF232-Natural-Linen-suede</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-AF232-Natural-Linen-suede.jpg" alt="Prism-AF232-Natural-Linen-suede">
						</div>
						<div class="imageStyle">
							<p class="textTitle">Prism-BLK100-Black-Suede</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-BLK100-Black-Suede.jpg" alt="Prism-BLK100-Black-Suede">
						</div>
						<div class="imageStyle">
							<p class="textTitle">Prism-SF100-Victorian-White-Suede</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-SF100-Victorian-White-Suede.jpg" alt="Prism-SF100-Victorian-White-Suede">
						</div>
						<div class="imageStyle">
							<p class="textTitle">Prism-SF208-Folkstone-Suede</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-SF208-Folkstone-Suede.jpg" alt="Prism-SF208-Folkstone-Suede">
						</div>
						<div class="imageStyle">
							<p class="textTitle">Prism-SF210-Antique-White-Suede</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-SF210-Antique-White-Suede.jpg" alt="Prism-SF210-Antique-White-Suede">
						</div>
					</div>
					<div id="picturebox">
						<div class="imageStyle">
							<p class="textTitle">Prism-SF213-Fog-Grey-Suede</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-SF213-Fog-Grey-Suede.jpg" alt="Prism-SF213-Fog-Grey-Suede">
						</div>
						<div class="imageStyle">
							<p class="textTitle">Prism-SF230-Sienna-Velvet</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-SF230-Sienna-Velvet.jpg" alt="Prism-SF230-Sienna-Velvet">
						</div>
						<div class="imageStyle">
							<p class="textTitle">Prism-SF232-Ashen-Velvet</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-SF232-Ashen-Velvet.jpg" alt="Prism-SF232-Ashen-Velvet">
						</div>
						<div class="imageStyle">
							<p class="textTitle">Prism-SF233-Fossil-Velvet</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-SF233-Fossil-Velvet.jpg" alt="Prism-SF233-Fossil-Velvet">
						</div>
						<div class="imageStyle">
							<p class="textTitle">Prism-SF237-Charcoal-Suede</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-SF237-Charcoal-Suede.jpg" alt="Prism-SF237-Charcoal-Suede">
						</div>
						<div class="imageStyle">
							<p class="textTitle">Prism-SF239-Storm-Suede</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-SF239-Storm-Suede.jpg" alt="Prism-SF239-Storm-Suede">
						</div>
						<div class="imageStyle">
							<p class="textTitle">Prism-SF247-Mysterious-Velvet</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-SF247-Mysterious-Velvet.jpg" alt="Prism-SF247-Mysterious-Velvet">
						</div>
						<div class="imageStyle">
							<p class="textTitle">Prism-SF255-Willow-Velvet</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-SF255-Willow-Velvet.jpg" alt="Prism-SF255-Willow-Velvet">
						</div>
					</div>
					<div id="picturebox">
						<div class="imageStyle">
							<p class="textTitle">Prism-SF256-Mist-Velvet</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-SF256-Mist-Velvet.jpg" alt="Prism-SF256-Mist-Velvet">
						</div>
						<div class="imageStyle">
							<p class="textTitle">Prism-SF257-Verde-Velvet</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-SF257-Verde-Velvet.jpg" alt="Prism-SF257-Verde-Velvet">
						</div>
						<div class="imageStyle">
							<p class="textTitle">Prism-SF258-Roja-Velvet</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-SF258-Roja-Velvet.jpg" alt="Prism-SF258-Roja-Velvet">
						</div>
						<div class="imageStyle">
							<p class="textTitle">Prism-W100-White-Suede</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-W100-White-Suede.jpg" alt="Prism-W100-White-Suede">
						</div>
						<div class="imageStyle">
							<p class="textTitle">Prism-W300-White-Suede</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-W300-White-Suede.jpg" alt="Prism-W300-White-Suede">
						</div>
						<div class="imageStyle">
							<p class="textTitle">Prism-WF100-Desert-Glow-Suede</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF100-Desert-Glow-Suede.jpg" alt="Prism-WF100-Desert-Glow-Suede">
						</div>
						<div class="imageStyle">
							<p class="textTitle">Prism-WF101-Autumn-Glow-Suede</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF101-Autumn-Glow-Suede.jpg" alt="Prism-WF101-Autumn-Glow-Suede">
						</div>
						<div class="imageStyle">
							<p class="textTitle">Prism-WF121-Burma-Cherry-Timberline</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF121-Burma-Cherry-Timberline.jpg" alt="Prism-WF121-Burma-Cherry-Timberline">
						</div>
					</div>
					<div id="picturebox">
						<div class="imageStyle">
							<p class="textTitle">Prism-WF202-Verismo-Timberline</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF202-Verismo-Timberline.jpg" alt="Prism-WF202-Verismo-Timberline">
						</div>
						<div class="imageStyle">
							<p class="textTitle">Prism-WF203-Seria-Timberline</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF203-Seria-Timberline.jpg" alt="Prism-WF203-Seria-Timberline">
						</div>
						<div class="imageStyle">
							<p class="textTitle">Prism-WF208-Libretti-Timberline</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF208-Libretti-Timberline.jpg" alt="Prism-WF208-Libretti-Timberline">
						</div>
						<div class="imageStyle">
							<p class="textTitle">Prism-WF220-Brazillian-Walnut-Suede</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF220-Brazillian-Walnut-Suede.jpg" alt="Prism-WF220-Brazillian-Walnut-Suede">
						</div>
						<div class="imageStyle">
							<p class="textTitle">Prism-WF226-Zambukka-Timberline</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF226-Zambukka-Timberline.jpg" alt="Prism-WF226-Zambukka-Timberline">
						</div>
						<div class="imageStyle">
							<p class="textTitle">Prism-WF228-Sable-Glow-Suede</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF228-Sable-Glow-Suede.jpg" alt="Prism-WF228-Sable-Glow-Suede">
						</div>
						<div class="imageStyle">
							<p class="textTitle">Prism-WF229-Merit-Maple-Suede</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF229-Merit-Maple-Suede.jpg" alt="Prism-WF229-Merit-Maple-Suede">
						</div>
						<div class="imageStyle">
							<p class="textTitle">Prism-WF236-Ankara-Cherry-Timberline</p>
							<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF236-Ankara-Cherry-Timberline.jpg" alt="Prism-WF236-Ankara-Cherry-Timberline">
						</div>
					</div>
					<div id="picturebox">
						<div class="imageStyle">
						<p class="textTitle">Prism-WF263-Walnut-Amati-Suede</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF263-Walnut-Amati-Suede.jpg" alt="Prism-WF263-Walnut-Amati-Suede">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Prism-WF270-Cabinet-Maple-Suede</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF270-Cabinet-Maple-Suede.jpg" alt="Prism-WF270-Cabinet-Maple-Suede">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Prism-WF275-Hardrock-Maple-Suede</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF275-Hardrock-Maple-Suede.jpg" alt="Prism-WF275-Hardrock-Maple-Suede">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Prism-WF301-NoceVettore-Medina</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF301-NoceVettore-Medina.jpg" alt="Prism-WF301-NoceVettore-Medina">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Prism-WF310-Talas-Cherry-Suede</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF310-Talas-Cherry-Suede.jpg" alt="Prism-WF310-Talas-Cherry-Suede">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Prism-WF340-Aria-Medina</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF340-Aria-Medina.jpg" alt="Prism-WF340-Aria-Medina">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Prism-WF341-Soprano-Medina</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF341-Soprano-Medina.jpg" alt="Prism-WF341-Soprano-Medina">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Prism-WF344-Queenston-Oak-Timberline</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF344-Queenston-Oak-Timberline.jpg" alt="Prism-WF344-Queenston-Oak-Timberline">
						</div>
					</div>
					<div id="picturebox">
						<div class="imageStyle">
						<p class="textTitle">Prism-WF356-Driftwood-Medina</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF356-Driftwood-Medina.jpg" alt="Prism-WF356-Driftwood-Medina">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Prism-WF357-Sandalwood-Medina</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF357-Sandalwood-Medina.jpg" alt="Prism-WF357-Sandalwood-Medina">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Prism-WF368-LinearAsh-Medina</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF368-LinearAsh-Medina.jpg" alt="Prism-WF368-LinearAsh-Medina">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Prism-WF375-Diva-Medina</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF375-Diva-Medina.jpg" alt="Prism-WF375-Diva-Medina">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Prism-WF377-PewterPine-Medina</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF377-PewterPine-Medina.jpg" alt="Prism-WF377-PewterPine-Medina">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Prism-WF392-LicoriceGroovz-Timberline</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF392-LicoriceGroovz-Timberline.jpg" alt="Prism-WF392-LicoriceGroovz-Timberline">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Prism-WF393-ConcreteGroovz-Timberline</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF393-ConcreteGroovz-Timberline.jpg" alt="Prism-WF393-ConcreteGroovz-Timberline">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Prism-WF394-ArcticGroovz-Timberline</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF394-ArcticGroovz-Timberline.jpg" alt="Prism-WF394-ArcticGroovz-Timberline">
						</div>
					</div>

					<div id="picturebox">
						<div class="imageStyle">
						<p class="textTitle">Prism-WF397-Stromboli-Medina</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF397-Stromboli-Medina.jpg" alt="Prism-WF397-Stromboli-Medina">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Prism-WF442-Chique-Velvet</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF442-Chique-Velvet.jpg" alt="Prism-WF442-Chique-Velvet">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Prism-WF443-Luxent-Velvet</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF443-Luxent-Velvet.jpg" alt="Prism-WF443-Luxent-Velvet">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Prism-WF444-Tumalo-Pine-Boreal</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF444-Tumalo-Pine-Boreal.jpg" alt="Prism-WF444-Tumalo-Pine-Boreal">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Prism-WF445-Sahalie-Pine-Boreal</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF445-Sahalie-Pine-Boreal.jpg" alt="Prism-WF445-Sahalie-Pine-Boreal">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Prism-WF448-Seared-Oak-Boreal</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF448-Seared-Oak-Boreal.jpg" alt="Prism-WF448-Seared-Oak-Boreal">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Prism-WF449-Sarek-Ash-Velvet</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF449-Sarek-Ash-Velvet.jpg" alt="Prism-WF449-Sarek-Ash-Velvet">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Prism-WF450-Bergen-Ash-Velvet</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF450-Bergen-Ash-Velvet.jpg" alt="Prism-WF450-Bergen-Ash-Velvet">
						</div>
					</div>

					<div id="picturebox">
						<div class="imageStyle">
						<p class="textTitle">Prism-WF451-Navik-Ash-Velvet</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF451-Navik-Ash-Velvet.jpg" alt="Prism-WF451-Navik-Ash-Velvet">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Prism-WF464-Urban-Boreal</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF464-Urban-Boreal.jpg" alt="Prism-WF464-Urban-Boreal">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Prism-WF466-Rogue-Valley-Pear-Velvet</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF466-Rogue-Valley-Pear-Velvet.jpg" alt="Prism-WF466-Rogue-Valley-Pear-Velvet">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Prism-WF467-Pelee-Island-Pear-Boreal</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF467-Pelee-Island-Pear-Boreal.jpg" alt="Prism-WF467-Pelee-Island-Pear-Boreal">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Prism-WF468-Metro-Boreal</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/Prism-WF468-Metro-Boreal.jpg" alt="Prism-WF468-Metro-Boreal">
						</div>
						<div class="imageStyle">
						<p class="textTitle">SF250-Duke-Velvet</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/SF250-Duke-Velvet.jpg" alt="Prism SF250-Duke-Velvet">
						</div>
						<div class="imageStyle">
						<p class="textTitle">SF251-Celadon-Velvet</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/SF251-Celadon-Velvet.jpg" alt="Prism SF251-Celadon-Velvet">
						</div>
						<div class="imageStyle">
						<p class="textTitle">SF252-Quarry-Velvet</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/SF252-Quarry-Velvet.jpg" alt="Prism SF252-Quarry-Velvet">
						</div>
					</div>

					<div id="picturebox">
						<div class="imageStyle">
						<p class="textTitle">SF253-Adobe-Velvet</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/SF253-Adobe-Velvet.jpg" alt="Prism SF253-Adobe-Velvet">
						</div>
						<div class="imageStyle">
						<p class="textTitle">W919-Cotton-White-Suede</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/W919-Cotton-White-Suede.jpg" alt="Prism W919-Cotton-White-Suede">
						</div>
						<div class="imageStyle">
						<p class="textTitle">W920-Vogue-White-Suede</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/W920-Vogue-White-Suede.jpg" alt="Prism W920-Vogue-White-Suede">
						</div>
						<div class="imageStyle">
						<p class="textTitle">WF452-Karuna-Ash-Velvet</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/WF452-Karuna-Ash-Velvet.jpg" alt="Prism WF452-Karuna-Ash-Velvet">
						</div>
						<div class="imageStyle">
						<p class="textTitle">WF456-Enigma-Boreal</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/WF456-Enigma-Boreal.jpg" alt="Prism WF456-Enigma-Boreal">
						</div>
						<div class="imageStyle">
						<p class="textTitle">WF457-Castanho-Boreal</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/WF457-Castanho-Boreal.jpg" alt="Prism WF457-Castanho-Boreal">
						</div>
						<div class="imageStyle">
						<p class="textTitle">WF458-Presten-Ash-Velvet</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/WF458-Presten-Ash-Velvet.jpg" alt="Prism WF458-Presten-Ash-Velvet">
						</div>
						<div class="imageStyle">
						<p class="textTitle">WF459-Abiqua-Pine-Boreal</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/WF459-Abiqua-Pine-Boreal.jpg" alt="Prism WF459-Abiqua-Pine-Boreal">
						</div>
					</div>

					<div id="picturebox" style="padding-bottom: 4%;">
						<div class="imageStyle">
						<p class="textTitle">WF460-Benham-Pine-Boreal</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/WF460-Benham-Pine-Boreal.jpg" alt="Prism WF460-Benham-Pine-Boreal">
						</div>
						<div class="imageStyle">
						<p class="textTitle">WF461-Koosah-Pine-Boreal</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/WF461-Koosah-Pine-Boreal.jpg" alt="Prism WF461-Koosah-Pine-Boreal">
						</div>
						<div class="imageStyle">
						<p class="textTitle">WF462-Wallowa-Pine-Boreal</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Material-Options/Prism-Colors/WF462-Wallowa-Pine-Boreal.jpg" alt="Prism WF462-Wallowa-Pine-Boreal">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="tab-block__wrapper" id="tab-content-2">
	<div class="row">
		<div class="col-12 col-lg-6">
			<div class="tab-block__wrapper--content">
				<p class="tab-block__wrapper--heading with-button" style="font-family: 'Futurica-BS-light', sans-serif;">
				<span>Handles</span>
				</p>
				<div class="mt-4 mobile-show">
					<button id="descButton1" title="Description" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#collapseOne-one" data-toggle="modal" data-target="#mobile-diy-modal">
					</button>
				</div>
				<p class="brandNameTop" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Asher</span>
				</p>
				<div id="picturebox">
					<div class="imageStyle">
					<p class="textTitle">Brushed Chrome</p>
<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Asher/Brushed-Chrome.jpg" alt="Asher Brushed Chrome">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Oil-Rubbed-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Asher/Brushed-Oil-Rubbed-Bronze.jpg" alt="Asher Brushed-Oil-Rubbed-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Pewter</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Asher/Brushed-Pewter.jpg" alt="Asher Brushed-Pewter">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Matte-Black</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Asher/Matte-Black.jpg" alt="Asher Matte-Black">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Polished-Chrome</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Asher/Polished-Chrome.jpg" alt="Asher Polished-Chrome">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Asher/Satin-Nickel.jpg" alt="Asher Satin-Nickel">
					</div>
				</div>
				<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Belcastel</span>
				</p>
				<div id="picturebox">
					<div class="imageStyle">
					<p class="textTitle">Brushed-Oil-Rubbed-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Belcastel/Brushed-Oil-Rubbed-Bronze.jpg" alt="Belcastel Brushed-Oil-Rubbed-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Pewter</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Belcastel/Brushed-Pewter.jpg" alt="Belcastel Brushed-Pewter">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Distressed-Antique-Brass</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Belcastel/Distressed-Antique-Brass.jpg" alt="Belcastel Distressed-Antique-Brass">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Distressed-Antique-Silver</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Belcastel/Distressed-Antique-Silver.jpg" alt="Belcastel Distressed-Antique-Silver">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Distressed-Oil-Rubbed-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Belcastel/Distressed-Oil-Rubbed-Bronze.jpg" alt="Belcastel Distressed-Oil-Rubbed-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Gun-Metal</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Belcastel/Gun-Metal.jpg" alt="Belcastel Gun-Metal">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Matte-Black</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Belcastel/Matte-Black.jpg" alt="Belcastel Matte-Black">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Polished-Chrome</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Belcastel/Polished-Chrome.jpg" alt="Belcastel Polished-Chrome">
					</div>
				</div>
				<div id="picturebox">
					<div class="imageStyle">
					<p class="textTitle">Polished Nickel</p>
<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Belcastel/Polished-Nickel.jpg" alt="Belcastel Polished-Nickel">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Belcastel/Satin-Bronze.jpg" alt="Belcastel Satin-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Belcastel/Satin-Nickel.jpg" alt="Belcastel Satin-Nickel">
					</div>
				</div>
				<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Boswell</span>
				</p>
				<div id="picturebox">
					<div class="imageStyle">
					<p class="textTitle">Brushed-Oil-Rubbed-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Boswell/Brushed-Oil-Rubbed-Bronze.jpg" alt="Boswell Brushed-Oil-Rubbed-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Pewter</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Boswell/Brushed-Pewter.jpg" alt="Boswell Brushed-Pewter">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Matte-Black</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Boswell/Matte-Black.jpg" alt="Boswell Matte-Black">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Polished-Chrome</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Boswell/Polished-Chrome.jpg" alt="Boswell Polished-Chrome">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Boswell/Satin-Nickel.jpg" alt="Boswell Satin-Nickel">
					</div>
				</div>
				<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Bremen</span>
				</p>
				<div id="picturebox">
					<div class="imageStyle">
					<p class="textTitle">Antique-Brushed-Satin-Brass</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Bremen/Antique-Brushed-Satin-Brass.jpg" alt="Bremen Antique-Brushed-Satin-Brass">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Oil-Rubbed-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Bremen/Brushed-Oil-Rubbed-Bronze.jpg" alt="Bremen Brushed-Oil-Rubbed-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Pewter</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Bremen/Brushed-Pewter.jpg" alt="Bremen Brushed-Pewter">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Distressed-Antique-Brass</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Bremen/Distressed-Antique-Brass.jpg" alt="Bremen Distressed-Antique-Brass">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Distressed-Antique-Silver</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Bremen/Distressed-Antique-Silver.jpg" alt="Bremen Distressed-Antique-Silver">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Distressed-Oil-Rubbed-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Bremen/Distressed-Oil-Rubbed-Bronze.jpg" alt="Bremen Distressed-Oil-Rubbed-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Gun-Metal</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Bremen/Gun-Metal.jpg" alt="Bremen Gun-Metal">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Polished-Chrome</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Bremen/Polished-Chrome.jpg" alt="Bremen Polished-Chrome">
					</div>
				</div>
				<div id="picturebox">
					<div class="imageStyle">
					<p class="textTitle">Polished-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Bremen/Polished-Nickel.jpg" alt="Bremen Polished-Nickel">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Bremen/Satin-Bronze.jpg" alt="Bremen Satin-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Bremen/Satin-Nickel.jpg" alt="Bremen Satin-Nickel">
					</div>
				</div>
				<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Cairo</span>
				</p>
				<div id="picturebox">
					<div class="imageStyle">
					<p class="textTitle">Brushed-Oil-Rubbed-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Cairo/Brushed-Oil-Rubbed-Bronze.jpg" alt="Cairo Brushed-Oil-Rubbed-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Pewter</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Cairo/Brushed-Pewter.jpg" alt="Cairo Brushed-Pewter">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Polished-Chrome</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Cairo/Polished-Chrome.jpg" alt="Cairo Polished-Chrome">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Cairo/Satin-Nickel.jpg" alt="Cairo Satin-Nickel">
					</div>
				</div>
				<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Cordova</span>
				</p>
				<div id="picturebox">
					<div class="imageStyle">
					<p class="textTitle">Antique-Brushed-Satin-Brass</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Cordova/Antique-Brushed-Satin-Brass.jpg" alt="Cordova Antique-Brushed-Satin-Brass">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Oil-Rubbed-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Cordova/Brushed-Oil-Rubbed-Bronze.jpg" alt="Cordova Brushed-Oil-Rubbed-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Distressed-Pewter</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Cordova/Distressed-Pewter.jpg" alt="Cordova Distressed-Pewter">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Cordova/Satin-Nickel.jpg" alt="Cordova Satin-Nickel">
					</div>
				</div>
				<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Edgefield</span>
				</p>
				<div id="picturebox">
					<div class="imageStyle">
					<p class="textTitle">Brushed Chrome</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Edgefield/Brushed-Chrome.jpg" alt="Edgefield Brushed Chrome">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Matte-Black</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Edgefield/Matte-Black.jpg" alt="Edgefield Matte-Black">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Polished-Chrome</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Edgefield/Polished-Chrome.jpg" alt="Edgefield Polished-Chrome">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Edgefield/Satin-Nickel.jpg" alt="Edgefield Satin-Nickel">
					</div>
				</div>
				<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Ella</span>
				</p>
				<div id="picturebox">
					<div class="imageStyle">
					<p class="textTitle">Brushed-Oil-Rubbed-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Ella/Brushed-Oil-Rubbed-Bronze.jpg" alt="Ella Brushed-Oil-Rubbed-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Pewter</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Ella/Brushed-Pewter.jpg" alt="Ella Brushed-Pewter">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Polished-Chrome</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Ella/Polished-Chrome.jpg" alt="Ella Polished-Chrome">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Polished-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Ella/Polished-Nickel.jpg" alt="Ella Polished-Nickel">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Ella/Satin-Nickel.jpg" alt="Ella Satin-Nickel">
					</div>
				</div>
				<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Florence</span>
				</p>
				<div id="picturebox">
					<div class="imageStyle">
					<p class="textTitle">Brushed-Antique-Brass</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Florence/Brushed-Antique-Brass.jpg" alt="Florence Brushed-Antique-Brass">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Oil-Rubbed-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Florence/Brushed-Oil-Rubbed-Bronze.jpg" alt="Florence Brushed-Oil-Rubbed-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Pewter</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Florence/Brushed-Pewter.jpg" alt="Florence Brushed-Pewter">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Dark-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Florence/Dark-Bronze.jpg" alt="Florence Dark-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Gun-Metal</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Florence/Gun-Metal.jpg" alt="Florence Gun-Metal">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Matte-Black</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Florence/Matte-Black.jpg" alt="Florence Matte-Black">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Polished-Chrome</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Florence/Polished-Chrome.jpg" alt="Florence Polished-Chrome">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Florence/Satin-Bronze.jpg" alt="Florence Satin-Bronze">
					</div>
				</div>
				<div id="picturebox">
					<div class="imageStyle">
					<p class="textTitle">Satin-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Florence/Satin-Nickel.jpg" alt="Florence Satin-Nickel">
					</div>
				</div>
				<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Gibson</span>
				</p>
				<div id="picturebox">
					<div class="imageStyle">
					<p class="textTitle">Brushed-Gold</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Gibson/Brushed-Gold.jpg" alt="Gibson Brushed-Gold">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Pewter</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Gibson/Brushed-Pewter.jpg" alt="Gibson Brushed-Pewter">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Matte-Black</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Gibson/Matte-Black.jpg" alt="Gibson Matte-Black">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Polished-Chrome</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Gibson/Polished-Chrome.jpg" alt="Gibson Polished-Chrome">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Gibson/Satin-Bronze.jpg" alt="Gibson Satin-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Gibson/Satin-Nickel.jpg" alt="Gibson Satin-Nickel">
					</div>
				</div>
				<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Katharine</span>
				</p>
				<div id="picturebox">
					<div class="imageStyle">
					<p class="textTitle">Brushed-Oil-Rubbed-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Katharine/Brushed-Oil-Rubbed-Bronze.jpg" alt="Katharine Brushed-Oil-Rubbed-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Pewter</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Katharine/Brushed-Pewter.jpg" alt="Katharine Brushed-Pewter">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Polished-Chrome</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Katharine/Polished-Chrome.jpg" alt="Katharine Polished-Chrome">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Katharine/Satin-Nickel.jpg" alt="Katharine Satin-Nickel">
					</div>
				</div>
				<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Merrick</span>
				</p>
				<div id="picturebox">
					<div class="imageStyle">
					<p class="textTitle">Brushed-Oil-Rubbed-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Merrick/Brushed-Oil-Rubbed-Bronze.jpg" alt="Merrick Brushed-Oil-Rubbed-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Pewter</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Merrick/Brushed-Pewter.jpg" alt="Merrick Brushed-Pewter">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Matte-Black</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Merrick/Matte-Black.jpg" alt="Merrick Matte-Black">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Polished-Chrome</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Merrick/Polished-Chrome.jpg" alt="Merrick Polished-Chrome">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Merrick/Satin-Bronze.jpg" alt="Merrick Satin-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Merrick/Satin-Nickel.jpg" alt="Merrick Satin-Nickel">
					</div>
				</div>
				<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Milan</span>
				</p>
				<div id="picturebox">
					<div class="imageStyle">
					<p class="textTitle">Brushed-Antique-Brass</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Milan/Brushed-Antique-Brass.jpg" alt="Milan Brushed-Antique-Brass">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Oil-Rubbed-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Milan/Brushed-Oil-Rubbed-Bronze.jpg" alt="Milan Brushed-Oil-Rubbed-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Pewter</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Milan/Brushed-Pewter.jpg" alt="Milan Brushed-Pewter">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Distressed-Antique-Brass</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Milan/Distressed-Antique-Brass.jpg" alt="Milan Distressed-Antique-Brass">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Gun-Metal</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Milan/Gun-Metal.jpg" alt="Milan Gun-Metal">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Matte-Black</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Milan/Matte-Black.jpg" alt="Milan Matte-Black">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Polished-Chrome</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Milan/Polished-Chrome.jpg" alt="Milan Polished-Chrome">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Milan/Satin-Nickel.jpg" alt="Milan Satin-Nickel">
					</div>
				</div>
				<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Naples</span>
				</p>
				<div id="picturebox">
					<div class="imageStyle">
					<p class="textTitle">Brushed-Gold</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Naples/Brushed-Gold.jpg" alt="Naples Brushed-Gold">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Dark-Brushed-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Naples/Dark-Brushed-Bronze.jpg" alt="Naples Dark-Brushed-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Matte-Black</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Naples/Matte-Black.jpg" alt="Naples Matte-Black">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Polished-Chrome</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Naples/Polished-Chrome.jpg" alt="Naples Polished-Chrome">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Naples/Satin-Bronze.jpg" alt="Naples Satin-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Naples/Satin-Nickel.jpg" alt="Naples Satin-Nickel">
					</div>
				</div>
				<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Somerset</span>
				</p>
				<div id="picturebox">
					<div class="imageStyle">
					<p class="textTitle">Brushed-Oil-Rubbed-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Somerset/Brushed-Oil-Rubbed-Bronze.jpg" alt="Somerset Brushed-Oil-Rubbed-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Pewter</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Somerset/Brushed-Pewter.jpg" alt="Somerset Brushed-Pewter">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Matte-Black</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Somerset/Matte-Black.jpg" alt="Somerset Matte-Black">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Polished-Chrome</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Somerset/Polished-Chrome.jpg" alt="Somerset Polished-Chrome">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Somerset/Satin-Bronze.jpg" alt="Somerset Satin-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Somerset/Satin-Nickel.jpg" alt="Somerset Satin-Nickel">
					</div>
				</div>
				<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Sonoma</span>
				</p>
				<div id="picturebox">
					<div class="imageStyle">
					<p class="textTitle">Brushed-Oil-Rubbed-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Sonoma/Brushed-Oil-Rubbed-Bronze.jpg" alt="Sonoma Brushed-Oil-Rubbed-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Pewter</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Sonoma/Brushed-Pewter.jpg" alt="Sonoma Brushed-Pewter">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Matte-Black</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Sonoma/Matte-Black.jpg" alt="Sonoma Matte-Black">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Polished-Chrome</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Sonoma/Polished-Chrome.jpg" alt="Sonoma Polished Chromes">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Sonoma/Satin-Nickel.jpg" alt="Sonoma Satin-Nickel">
					</div>
				</div>
				<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Staton</span>
				</p>
				<div id="picturebox">
					<div class="imageStyle">
					<p class="textTitle">Brushed-Gold</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Stanton/Brushed-Gold.jpg" alt="Stanton Brushed-Gold">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Matte-Black</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Stanton/Matte-Black.jpg" alt="Stanton Matte-Black">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Matte-Silver</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Stanton/Matte-Silver.jpg" alt="Stanton Matte-Silver">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Polished-Chrome</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Stanton/Polished-Chrome.jpg" alt="Stanton Polished-Chrome">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Stanton/Satin-Bronze.jpg" alt="Stanton Satin-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Stanton/Satin-Nickel.jpg" alt="Stanton Satin-Nickel">
					</div>
				</div>
				<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Sutton</span>
				</p>
				<div id="picturebox" style="padding-bottom: 6%;">
					<div class="imageStyle">
					<p class="textTitle">Brushed-Gold</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Sutton/Brushed-Gold.jpg" alt="Sutton Brushed-Gold">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Oil-Rubbed-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Sutton/Brushed-Oil-Rubbed-Bronze.jpg" alt="Sutton Brushed-Oil-Rubbed-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Pewter</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Sutton/Brushed-Pewter.jpg" alt="Sutton Brushed-Pewter">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Matte-Black</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Sutton/Matte-Black.jpg" alt="Sutton Matte-Black">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Polished-Chrome</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Sutton/Polished-Chrome.jpg" alt="Sutton Polished-Chrome">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Polished-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Sutton/Polished-Nickel.jpg" alt="Sutton Polished-Nickel">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Sutton/Satin-Bronze.jpg" alt="Sutton Satin-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Pull-Options/Sutton/Satin-Nickel.jpg" alt="Sutton Satin-Nickel">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="tab-block__wrapper" id="tab-content-3">
	<div class="row">
		<div class="col-12 col-lg-6">
			<div class="tab-block__wrapper--content">
				<p class="tab-block__wrapper--heading with-button" style="font-family: 'Futurica-BS-light', sans-serif;">
				<span>Knobs</span>
				</p>
				<div class="mt-4 mobile-show">
					<button id="descButton1" title="Description" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#collapseOne-one" data-toggle="modal" data-target="#mobile-diy-modal">
					</button>
				</div>
				<p class="brandNameTop" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Bremen</span>
				</p>
				<div id="picturebox">
					<div class="imageStyle">
					<p class="textTitle">Antique-Brushed-Satin-Brass</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Bremen/Antique-Brushed-Satin-Brass.jpg" alt="Bremen Antique-Brushed-Satin-Brass">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Oil-Rubbed-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Bremen/Brushed-Oil-Rubbed-Bronze.jpg" alt="Bremen Brushed-Oil-Rubbed-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Pewter</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Bremen/Brushed-Pewter.jpg" alt="Bremen Brushed-Pewter">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Distressed-Antique-Brass</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Bremen/Distressed-Antique-Brass.jpg" alt="Bremen Distressed-Antique-Brass">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Distressed-Antique-Silver</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Bremen/Distressed-Antique-Silver.jpg" alt="Bremen Distressed-Antique-Silver">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Distressed-Oil-Rubbed-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Bremen/Distressed-Oil-Rubbed-Bronze.jpg" alt="Bremen Distressed-Oil-Rubbed-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Gun-Metal</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Bremen/Gun-Metal.jpg" alt="Bremen Gun-Metal">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Polished-Chrome</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Bremen/Polished-Chrome.jpg" alt="Bremen Polished-Chrome">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Polished-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Bremen/Polished-Nickel.jpg" alt="Bremen Polished-Nickel">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Bremen/Satin-Bronze.jpg" alt="Bremen Satin-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Bremen/Satin-Nickel.jpg" alt="Bremen Satin-Nickel">
					</div>
				</div>
				<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Cairo</span>
				</p>
				<div id="picturebox">
					<div class="imageStyle">
					<p class="textTitle">Brushed-Oil-Rubbed-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Cairo/Brushed-Oil-Rubbed-Bronze.jpg" alt="Cairo Brushed-Oil-Rubbed-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Pewter</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Cairo/Brushed-Pewter.jpg" alt="Cairo Brushed-Pewter">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Polished-Chrome</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Cairo/Polished-Chrome.jpg" alt="Cairo Polished-Chrome">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Cairo/Satin-Nickel.jpg" alt="Cairo Satin-Nickel">
					</div>
				</div>
				<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Ella</span>
				</p>
				<div id="picturebox">
					<div class="imageStyle">
					<p class="textTitle">Brushed-Oil-Rubbed-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Ella/Brushed-Oil-Rubbed-Bronze.jpg" alt="Ella Brushed-Oil-Rubbed-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Pewter</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Ella/Brushed-Pewter.jpg" alt="Ella Brushed-Pewter">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Polished-Chrome</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Ella/Polished-Chrome.jpg" alt="Ella Polished-Chrome">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Polished-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Ella/Polished-Nickel.jpg" alt="Ella Polished-Nickel">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Ella/Satin-Nickel.jpg" alt="Ella Satin-Nickel">
					</div>
				</div>
				<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Florence</span>
				</p>
				<div id="picturebox">
					<div class="imageStyle">
					<p class="textTitle">Brushed-Antique-Brass</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Florence/Brushed-Antique-Brass.jpg" alt="Florence Brushed-Antique-Brass">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Oil-Rubbed-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Florence/Brushed-Oil-Rubbed-Bronze.jpg" alt="Florence Brushed-Oil-Rubbed-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Pewter</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Florence/Brushed-Pewter.jpg" alt="Florence Brushed-Pewter">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Dark-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Florence/Dark-Bronze.jpg" alt="Florence Dark-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Gun-Metal</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Florence/Gun-Metal.jpg" alt="Florence Gun-Metal">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Matte-Black</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Florence/Matte-Black.jpg" alt="Florence Matte-Black">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Polished-Chrome</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Florence/Polished-Chrome.jpg" alt="Florence Polished-Chrome">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Florence/Satin-Bronze.jpg" alt="Florence Satin-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Florence/Satin-Nickel.jpg" alt="Florence Satin-Nickel">
					</div>
				</div>
				<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Gibson</span>
				</p>
				<div id="picturebox">
					<div class="imageStyle">
					<p class="textTitle">Brushed-Gold</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Gibson/Brushed-Gold.jpg" alt="Gibson Brushed-Gold">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Pewter</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Gibson/Brushed-Pewter.jpg" alt="Gibson Brushed-Pewter">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Matte-Black</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Gibson/Matte-Black.jpg" alt="Gibson Matte-Black">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Polished-Chrome</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Gibson/Polished-Chrome.jpg" alt="Gibson Polished-Chrome">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Gibson/Satin-Bronze.jpg" alt="Gibson Satin-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Gibson/Satin-Nickel.jpg" alt="Gibson Satin-Nickel">
					</div>
				</div>
				<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Katharine</span>
				</p>
				<div id="picturebox">
					<div class="imageStyle">
					<p class="textTitle">Brushed-Oil-Rubbed-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Katharine/Brushed-Oil-Rubbed-Bronze.jpg" alt="Katharine Brushed-Oil-Rubbed-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Pewter</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Katharine/Brushed-Pewter.jpg" alt="Katharine Brushed-Pewter">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Polished-Chrome</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Katharine/Polished-Chrome.jpg" alt="Katharine Polished-Chrome">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Katharine/Satin-Nickel.jpg" alt="Katharine Satin-Nickel">
					</div>
				</div>
				<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Milan</span>
				</p>
				<div id="picturebox">
					<div class="imageStyle">
					<p class="textTitle">Brushed-Antique-Brass</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Milan/Brushed-Antique-Brass.jpg" alt="Katharine Brushed-Antique-Brass">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Oil-Rubbed-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Milan/Brushed-Oil-Rubbed-Bronze.jpg" alt="Katharine Brushed-Oil-Rubbed-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Pewter</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Milan/Brushed-Pewter.jpg" alt="Katharine Brushed-Pewter">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Distressed-Antique-Brass</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Milan/Distressed-Antique-Brass.jpg" alt="Katharine Distressed-Antique-Brass">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Gun-Metal</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Milan/Gun-Metal.jpg" alt="Katharine Gun-Metal">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Matte-Black</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Milan/Matte-Black.jpg" alt="Katharine Matte-Black">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Polished-Chrome</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Milan/Polished-Chrome.jpg" alt="Katharine Polished-Chrome">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Milan/Satin-Nickel.jpg" alt="Katharine Satin-Nickel">
					</div>
				</div>
				<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Sutton</span>
				</p>
				<div id="picturebox" style="padding-bottom: 6%;">
					<div class="imageStyle">
					<p class="textTitle">Brushed-Gold</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Sutton/Brushed-Gold.jpg" alt="Sutton Brushed-Gold">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Oil-Rubbed-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Sutton/Brushed-Oil-Rubbed-Bronze.jpg" alt="Sutton Brushed-Oil-Rubbed-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Brushed-Pewter</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Sutton/Brushed-Pewter.jpg" alt="Sutton Brushed-Pewter">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Matte-Black</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Sutton/Matte-Black.jpg" alt="Sutton Matte-Black">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Polished-Chrome</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Sutton/Polished-Chrome.jpg" alt="Sutton Polished-Chrome">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Polished-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Sutton/Polished-Nickel.jpg" alt="Sutton Polished-Nickel">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Bronze</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Sutton/Satin-Bronze.jpg" alt="Sutton Satin-Bronze">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Satin-Nickel</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Knob-Options/Sutton/Satin-Nickel.jpg" alt="Sutton Satin-Nickel">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="tab-block__wrapper" id="tab-content-4">
	<div class="row">
		<div class="col-12 col-lg-6">
			<div class="tab-block__wrapper--content">
				<p class="tab-block__wrapper--heading with-button" style="font-family: 'Futurica-BS-light', sans-serif;">
				<span>Hooks</span>
				</p>
				<div class="mt-4 mobile-show">
					<button id="descButton4" title="Description" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#collapseOne-one" data-toggle="modal" data-target="#mobile-diy-modal">
					</button>
				</div>
				<p class="brandNameTop" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Hafele - Double-Hook-TAG-Synergy-Elite</span>
				</p>
				<div class="tab-block__wrapper open" id="tab-content-4" style="padding-top: 1px;">
					<div id="picturebox">
						<div class="imageStyle">
						<p class="textTitle">Matte-Aluminum</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Hafele/Double-Hook-TAG-Synergy-Elite/Matte-Aluminum.jpg" alt="Hafele - Double Hook Matte-Aluminum">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Matte-Black</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Hafele/Double-Hook-TAG-Synergy-Elite/Matte-Black.jpg" alt="Hafele - Double Hook Matte-Black">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Matte-Gold</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Hafele/Double-Hook-TAG-Synergy-Elite/Matte-Gold.jpg" alt="Hafele - Double Hook Matte-Gold">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Matte-Nickel</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Hafele/Double-Hook-TAG-Synergy-Elite/Matte-Nickel.jpg" alt="Hafele - Double Hook Matte-Nickel">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Polished-Chrome</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Hafele/Double-Hook-TAG-Synergy-Elite/Polished-Chrome.jpg" alt="Hafele - Double Hook Polished-Chrome">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Slate</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Hafele/Double-Hook-TAG-Synergy-Elite/Slate.jpg" alt="Hafele - Double Hook Slate">
						</div>
					</div>
					<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
					<span>Hafele - Waterfall-TAG-Synergy-Elite</span>
					</p>
					<div id="picturebox">
						<div class="imageStyle">
						<p class="textTitle">Matte-Aluminum</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Hafele/Waterfall-TAG-Synergy-Elite/Matte-Aluminum.jpg" alt="Hafele - Waterfall Matte-Aluminum">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Matte-Black</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Hafele/Waterfall-TAG-Synergy-Elite/Matte-Black.jpg" alt="Hafele - Waterfall Matte-Black">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Matte-Gold</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Hafele/Waterfall-TAG-Synergy-Elite/Matte-Gold.jpg" alt="Hafele - Waterfall Matte-Gold">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Matte-Nickel</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Hafele/Waterfall-TAG-Synergy-Elite/Matte-Nickel.jpg" alt="Hafele - Waterfall Matte-Nickel">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Polished-Chrome</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Hafele/Waterfall-TAG-Synergy-Elite/Polished-Chrome.jpg" alt="Hafele - Waterfall Polished-Chrome">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Slate</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Hafele/Waterfall-TAG-Synergy-Elite/Slate.jpg" alt="Hafele - Waterfall Slate">
						</div>
					</div>
					<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
					<span>Hardware-Resources - Modern-Double-Prong</span>
					</p>
					<div id="picturebox">
						<div class="imageStyle">
						<p class="textTitle">Brushed-Oil-Rubbed-Bronze</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Hardware-Resources/Ringed-Contemporary-Double-Prong/Brushed-Oil-Rubbed-Bronze.jpg" alt="Hardware-Resources - Modern-Double-Prong Brushed-Oil-Rubbed-Bronze">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Polished-Chrome</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Hardware-Resources/Ringed-Contemporary-Double-Prong/Polished-Chrome.jpg" alt="Hardware-Resources - Modern-Double-Prong Polished-Chrome">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Satin-Nickel</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Hardware-Resources/Ringed-Contemporary-Double-Prong/Satin-Nickel.jpg" alt="Hardware-Resources - Modern-Double-Prong Satin-Nickel">
						</div>
					</div>
					<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
					<span>Hardware-Resources - Ringed-Contemporary-Double-Prong</span>
					</p>
					<div id="picturebox">
						<div class="imageStyle">
						<p class="textTitle">Brushed-Oil-Rubbed-Bronze</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Hardware-Resources/Ringed-Contemporary-Double-Prong/Brushed-Oil-Rubbed-Bronze.jpg" alt="Hardware-Resources - Ringed-Contemporary-Double-Prong Brushed-Oil-Rubbed-Bronze">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Polished-Chrome</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Hardware-Resources/Ringed-Contemporary-Double-Prong/Polished-Chrome.jpg" alt="Hardware-Resources - Ringed-Contemporary-Double-Prong Polished-Chrome">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Satin-Nickel</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Hardware-Resources/Ringed-Contemporary-Double-Prong/Satin-Nickel.jpg" alt="Hardware-Resources - Ringed-Contemporary-Double-Prong Satin-Nickel">
						</div>
					</div>
					<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
					<span>Hardware-Resources - Slender-Contemporary-Double-Prong</span>
					</p>
					<div id="picturebox">
						<div class="imageStyle">
						<p class="textTitle">Brushed-Oil-Rubbed-Bronze</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Hardware-Resources/Slender-Contemporary-Double-Prong/Brushed-Oil-Rubbed-Bronze.jpg" alt="Hardware-Resources - Slender-Contemporary-Double-Prong Brushed-Oil-Rubbed-Bronze">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Polished-Chrome</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Hardware-Resources/Slender-Contemporary-Double-Prong/Polished-Chrome.jpg" alt="Hardware-Resources - Slender-Contemporary-Double-Prong Polished-Chrome">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Satin-Nickel</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Hardware-Resources/Slender-Contemporary-Double-Prong/Satin-Nickel.jpg" alt="Hardware-Resources - Slender-Contemporary-Double-Prong Satin-Nickel">
						</div>
					</div>
					<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
					<span>Hardware-Resources - Transitional-Double-Prong</span>
					</p>
					<div id="picturebox">
						<div class="imageStyle">
						<p class="textTitle">Brushed-Oil-Rubbed-Bronze</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Hardware-Resources/Transitional-Double-Prong/Brushed-Oil-Rubbed-Bronze.jpg" alt="Hardware-Resources - Transitional-Double-Prong Polished-Chrome">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Polished-Chrome</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Hardware-Resources/Transitional-Double-Prong/Polished-Chrome.jpg" alt="Hardware-Resources - Transitional-Double-Prong Polished-Chrome">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Satin-Nickel</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Hardware-Resources/Transitional-Double-Prong/Satin-Nickel.jpg" alt="Hardware-Resources - Transitional-Double-Prong Satin-Nickel">
						</div>
					</div>
					<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
					<span>Hardware-Resources - Triple-Prong</span>
					</p>
					<div id="picturebox">
						<div class="imageStyle">
						<p class="textTitle">Brushed-Oil-Rubbed-Bronze</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Hardware-Resources/Triple-Prong/Brushed-Oil-Rubbed-Bronze.jpg" alt="Hardware-Resources - Triple-Prong Brushed-Oil-Rubbed-Bronze">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Polished-Chrome</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Hardware-Resources/Triple-Prong/Polished-Chrome.jpg" alt="Hardware-Resources - Triple-Prong Polished-Chrome">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Satin-Nickel</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Hardware-Resources/Triple-Prong/Satin-Nickel.jpg" alt="Hardware-Resources - Triple-Prong Satin-Nickel">
						</div>
					</div>
					<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
					<span>Top-Knobs - Bergen</span>
					</p>
					<div id="picturebox">
						<div class="imageStyle">
						<p class="textTitle">Brushed-Satin-Nickel</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Top-Knobs/Bergen/Brushed-Satin-Nickel.jpg" alt="Top-Knobs - Bergen Brushed-Satin-Nickel">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Flat-Black</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Top-Knobs/Bergen/Flat-Black.jpg" alt="Top-Knobs - Bergen Flat-Black">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Honey-Bronze</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Top-Knobs/Bergen/Honey-Bronze.jpg" alt="Top-Knobs - Bergen Honey-Bronze">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Polished-Chrome</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Top-Knobs/Bergen/Polished-Chrome.jpg" alt="Top-Knobs - Bergen Polished-Chrome">
						</div>
					</div>
					<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
					<span>Top-Knobs - Emerald</span>
					</p>
					<div id="picturebox">
						<div class="imageStyle">
						<p class="textTitle">Brushed-Satin-Nickel</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Top-Knobs/Emerald/Brushed-Satin-Nickel.jpg" alt="Top-Knobs - Emerald Brushed-Satin-Nickel">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Flat-Black</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Top-Knobs/Emerald/Flat-Black.jpg" alt="Top-Knobs - Emerald Flat-Black">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Honey-Bronze</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Top-Knobs/Emerald/Honey-Bronze.jpg" alt="Top-Knobs - Emerald Honey-Bronze">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Polished-Chrome</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Top-Knobs/Emerald/Polished-Chrome.jpg" alt="Top-Knobs - Emerald Polished-Chrome">
						</div>
					</div>
					<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
					<span>Top-Knobs - Hillmont</span>
					</p>
					<div id="picturebox">
						<div class="imageStyle">
						<p class="textTitle">Brushed-Satin-Nickel</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Top-Knobs/Hillmont/Brushed-Satin-Nickel.jpg" alt="Top-Knobs - Hillmont Brushed-Satin-Nickel">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Flat-Black</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Top-Knobs/Hillmont/Flat-Black.jpg" alt="Top-Knobs - Hillmont Flat-Black">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Honey-Bronze</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Top-Knobs/Hillmont/Honey-Bronze.jpg" alt="Top-Knobs - Hillmont Honey-Bronze">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Polished-Chrome</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Top-Knobs/Hillmont/Polished-Chrome.jpg" alt="Top-Knobs - Hillmont Polished-Chrome">
						</div>
					</div>
					<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
					<span>Top-Knobs - Juliet</span>
					</p>
					<div id="picturebox">
						<div class="imageStyle">
						<p class="textTitle">Brushed-Satin-Nickel</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Top-Knobs/Juliet/Brushed-Satin-Nickel.jpg" alt="Top-Knobs - Juliet Brushed-Satin-Nickel">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Flat-Black</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Top-Knobs/Juliet/Flat-Black.jpg" alt="Top-Knobs - Juliet Flat-Black">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Honey-Bronze</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Top-Knobs/Juliet/Honey-Bronze.jpg" alt="Top-Knobs - Juliet Honey-Bronze">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Polished-Chrome</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Top-Knobs/Juliet/Polished-Chrome.jpg" alt="Top-Knobs - Juliet Polished-Chrome">
						</div>
					</div>
					<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
					<span>Top-Knobs - Kara</span>
					</p>
					<div id="picturebox">
						<div class="imageStyle">
						<p class="textTitle">Brushed-Satin-Nickel</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Top-Knobs/Kara/Brushed-Satin-Nickel.jpg" alt="Top-Knobs - Kara Brushed-Satin-Nickel">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Flat-Black</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Top-Knobs/Kara/Flat-Black.jpg" alt="Top-Knobs - Kara Flat-Black">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Honey-Bronze</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Top-Knobs/Kara/Honey-Bronze.jpg" alt="Top-Knobs - Kara Honey-Bronze">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Polished-Chrome</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Top-Knobs/Kara/Polished-Chrome.jpg" alt="Top-Knobs - Kara Polished-Chrome">
						</div>
					</div>
					<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
					<span>Top-Knobs - Reeded</span>
					</p>
					<div id="picturebox" style="padding-bottom: 6%;">
						<div class="imageStyle">
						<p class="textTitle">Brushed-Satin-Nickel</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Top-Knobs/Reeded/Brushed-Satin-Nickel.jpg" alt="Top-Knobs - Reeded Brushed-Satin-Nickel">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Flat-Black</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Top-Knobs/Reeded/Flat-Black.jpg" alt="Top-Knobs - Reeded Flat-Black">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Honey-Bronze</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Top-Knobs/Reeded/Honey-Bronze.jpg" alt="Top-Knobs - Reeded Honey-Bronze">
						</div>
						<div class="imageStyle">
						<p class="textTitle">Polished-Chrome</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Hook-Options/Top-Knobs/Reeded/Polished-Chrome.jpg" alt="Top-Knobs - Reeded Polished-Chrome">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="tab-block__wrapper" id="tab-content-5">
	<div class="row">
		<div class="col-12 col-lg-6">
			<div class="tab-block__wrapper--content">
				<p class="tab-block__wrapper--heading with-button" style="font-family: 'Futurica-BS-light', sans-serif;">
				<span>Lighting</span>
				</p>
				<div class="mt-4 mobile-show">
					<button id="descButton1" title="Description" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#collapseOne-one" data-toggle="modal" data-target="#mobile-diy-modal">
					</button>
				</div>
				<p class="brandNameTop" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Fascia - Puck - Toe - Rod</span>
				</p>
				<div id="picturebox">
					<div class="imageStyle">
					<p class="textTitle">Backlit-Mirror</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Lighting-Options/Backlit-Mirror.jpg" alt="Lighting Backlit-Mirror">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Fascia-4k</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Lighting-Options/Fascia-4k.jpg" alt="Lighting Fascia-4k">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Fascia-Purple</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Lighting-Options/Fascia-Purple.jpg" alt="Lighting Fascia-Purple">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Fasica-3k</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Lighting-Options/Fasica-3k.jpg" alt="Lighting Fasica-3k">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Fasica-5k</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Lighting-Options/Fasica-5k.jpg" alt="Lighting Fasica-5k">
					</div>
					<div class="imageStyle">
					<p class="textTitle">In-Drawer-Light</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Lighting-Options/In-Drawer-Light.jpg" alt="Lighting In-Drawer-Light">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Puck-Light-3k</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Lighting-Options/Puck-Light-3k.jpg" alt="Lighting Puck-Light-3k">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Puck-Light-4k</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Lighting-Options/Puck-Light-4k.jpg" alt="Lighting Puck-Light-4k">
					</div>
				</div>
				<div id="picturebox">
					<div class="imageStyle">
					<p class="textTitle">Puck Light 5k</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Lighting-Options/Puck Light 5k.jpg" alt="Lighting Puck Light 5k">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Reccessed-Floor-Sensor-Light</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Lighting-Options/Reccessed-Floor-Sensor-Light.jpg" alt="Lighting Reccessed-Floor-Sensor-Light">
					</div>
					<div class="imageStyle">
					<p class="textTitle">RGB-Ribbon-Accent-Light</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Lighting-Options/RGB-Ribbon-Accent-Light.jpg" alt="Lighting RGB-Ribbon-Accent-Light">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Rod-Light-3k</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Lighting-Options/Rod-Light-3k.jpg" alt="Lighting Rod-Light-3k">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Rod-Light-4k</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Lighting-Options/Rod-Light-4k.jpg" alt="Lighting Rod-Light-4k">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Rod-Light-5k</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Lighting-Options/Rod-Light-5k.jpg" alt="Lighting Rod-Light-5k">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Shelf-Light-Above-Drawers</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Lighting-Options/Shelf-Light-Above-Drawers.jpg" alt="Lighting Shelf-Light-Above-Drawers">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Shelf-Light</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Lighting-Options/Shelf-Light.jpg" alt="Lighting Shelf-Light">
					</div>
				</div>
				<div id="picturebox" style="padding-bottom: 6%;">
					<div class="imageStyle">
					<p class="textTitle">Toe-Kick</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Lighting-Options/Toe-Kick.jpg" alt="Lighting Toe-Kick">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Top-Cap-Light</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Lighting-Options/Top-Cap-Light.jpg" alt="Lighting Top-Cap-Light">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Valence-Light</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Lighting-Options/Valence-Light.jpg" alt="Lighting Valence-Light">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Vanity-Showcase-Ribbon</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Lighting-Options/Vanity-Showcase-Ribbon.jpg" alt="Lighting Vanity-Showcase-Ribbon">
					</div>
					<div class="imageStyle">
					<p class="textTitle">Wine-Light</p>
					<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Lighting-Options/Wine-Light.jpg" alt="Lighting Wine-Light">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="tab-block__wrapper" id="tab-content-6">
	<div class="row">
		<div class="col-12 col-lg-6">
			<div class="tab-block__wrapper--content">
				<p class="tab-block__wrapper--heading with-button" style="font-family: 'Futurica-BS-light', sans-serif;">
				<span>Fronts</span>
				</p>
				<div class="mt-4 mobile-show">
					<button id="descButton1" title="Description" class="mobile-diy-btn js-modal-diy-btn" data-area-id="#collapseOne-one" data-toggle="modal" data-target="#mobile-diy-modal">
					</button>
				</div>
                <p class="brandNameTop" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px; padding-top: 1%;">
				<span>Closets To Go TFL 5 Piece Shaker Door</span>
				</p>
				<div id="picturebox">
					<div class="imageStyle">
						<p class="textTitle">After Hours</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/DoorFrontOptions/AfterHours.jpg" alt="After Hours">
					</div>
					<div class="imageStyle">
						<p class="textTitle">Americana</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/DoorFrontOptions/Americana.jpg" alt="Americana">
					</div>
					<div class="imageStyle">
						<p class="textTitle">Ashen</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/DoorFrontOptions/Ashen.jpg" alt="Ashen">
					</div>
					<div class="imageStyle">
						<p class="textTitle">Chino</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/DoorFrontOptions/Chino.jpg" alt="Chino">
					</div>
                    <div class="imageStyle">
						<p class="textTitle">Creme De La Creme</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/DoorFrontOptions/CremeDeLaCreme.jpg" alt="Creme De La Creme">
					</div>
					<div class="imageStyle">
						<p class="textTitle">Fashionista</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/DoorFrontOptions/Fashionista.jpg" alt="Fashionista">
					</div>
					<div class="imageStyle">
						<p class="textTitle">Feather White</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/DoorFrontOptions/FeatherWhite.jpg" alt="Feather White">
					</div>
                    <div class="imageStyle">
						<p class="textTitle">First Class</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/DoorFrontOptions/FirstClass.jpg" alt="First Class">
					</div>
                </div>
                <div id="picturebox">
					<div class="imageStyle">
						<p class="textTitle">Ganache</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/DoorFrontOptions/Ganache.jpg" alt="Ganache">
					</div>
					<div class="imageStyle">
						<p class="textTitle">Karuna Ash</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/DoorFrontOptions/KarunaAsh.jpg" alt="Karuna Ash">
					</div>
					<div class="imageStyle">
						<p class="textTitle">Mysterious</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/DoorFrontOptions/Mysterious.jpg" alt="Mysterious">
					</div>
					<div class="imageStyle">
						<p class="textTitle">Ombre</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/DoorFrontOptions/Ombre.jpg" alt="Ombre">
					</div>
                    <div class="imageStyle">
						<p class="textTitle">Pewter Pine</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/DoorFrontOptions/PewterPine.jpg" alt="Pewter Pine">
					</div>
					<div class="imageStyle">
						<p class="textTitle">Pietra</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/DoorFrontOptions/Pietra.jpg" alt="Pietra">
					</div>
					<div class="imageStyle">
						<p class="textTitle">Sheer Beauty</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/DoorFrontOptions/SheerBeauty.jpg" alt="Sheer Beauty">
					</div>
                    <div class="imageStyle">
						<p class="textTitle">Summertime Blues</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/DoorFrontOptions/SummertimeBlues.jpg" alt="Summertime Blues">
					</div>
                </div>
                <div id="picturebox">
					<div class="imageStyle">
						<p class="textTitle">The Chameleon</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/DoorFrontOptions/TheChameleon.jpg" alt="After Hours">
					</div>
					<div class="imageStyle">
						<p class="textTitle">Tumalo Pine</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/DoorFrontOptions/TumaloPine.jpg" alt="Tumalo Pine">
					</div>
					<div class="imageStyle">
						<p class="textTitle">W300 White</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/DoorFrontOptions/W300White.jpg" alt="W300 White">
					</div>
					<div class="imageStyle">
						<p class="textTitle">Winter Fun</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/DoorFrontOptions/WinterFun.jpg" alt="Winter Fun">
					</div>
                </div> 
				<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Door/Drawer Fronts</span>
				</p>
				<div id="picturebox">
					<div class="imageStyle">
						<p class="textTitle">Escalade Door</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Door-Drawer-Fronts/Escalade-Door-220.jpg" alt="Escalade-Door-220">
					</div>
					<div class="imageStyle">
						<p class="textTitle">Fairlane-Sq-Door</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Door-Drawer-Fronts/Fairlane-Sq-Door-130.jpg" alt="Fairlane-Sq-Door-130">
					</div>
					<div class="imageStyle">
						<p class="textTitle">Millenia-Sq-Door</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Door-Drawer-Fronts/Millenia-Sq-Door-130.jpg" alt="Millenia-Sq-Door-130">
					</div>
					<div class="imageStyle">
						<p class="textTitle">Outback-Sq-Door</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Door-Drawer-Fronts/Outback-Sq-Door-130.jpg" alt="Outback-Sq-Door-130">
					</div>
				</div>
				<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Crown-Molding</span>
				</p>
				<div id="picturebox">
					<div class="imageStyle">
						<p class="textTitle">CR325-Mlding</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Crown-Molding/CR325-Mlding.jpg" alt="CR325-Mlding">
					</div>
					<div class="imageStyle">
						<p class="textTitle">CR425-Mlding</p>
						<img class="img-responsive" src="<?php echo SITEROOT; ?>images/Crown-Molding/CR425-Mlding.jpg" alt="CR425-Mlding">
					</div>
				</div>
				<p class="brandName" style="font-family: 'Futurica-BS-light', sans-serif; color: #384765; font-size: 24px;">
				<span>Other</span>
				</p>
				<div id="picturebox" style="padding-bottom: 6%;">
					<div class="imageStyle">
						<p class="textTitle">3.5-inch-Rosette</p>
						<img style="width:130px !important; height: 130px !important;" class="img-responsive" src="<?php echo SITEROOT; ?>images/Other/3.5-inch-Rosette-130.jpg" alt="3.5-inch-Rosette-130">
					</div>
					<div class="imageStyle">
						<p class="textTitle">Finished-Fluted-Casing</p>
						<img style="width:350px !important; height: 130px !important;" 
						class="img-responsive" 
						src="<?php echo SITEROOT; ?>images/Other/Finished-Fluted-Casing-246.jpg" 
						alt="Finished-Fluted-Casing-246">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<style>
.brandName {
	font-family: 'Futurica-BS-light', sans-serif;
	color: #384765;
	font-size: 24px;
	padding-top: 8%;
	padding-bottom: 1%;
}


#picturebox {
	width: 220%;
	color: white;
}

.img-responsive {
	width: 122px;
	height: 135px;
}


.imageStyle {
	display: inline-block;
	padding-top: 5%;
}

.textTitle {
	color: #000;
	inline-size: 110px;
	font-size: 12px;
	overflow-wrap: break-all;
	height: 17px;
}

.titlep {
	color: black;
	font-size: 12px;
	font-family: 'Montserrat', sans-serif;
	max-width: 135px;
	word-break: break-all !important;
	height: 17px;
	width: 150px;
	font-weight: 500;
}

.figureFeat {
	display: grid;
	overflow: hidden;
	cursor: pointer;
	padding-right: 20px;
}
.img-responsive:hover {
	-webkit-transform: scale(2,2);
}



@media (max-width:992px) {
	#picturebox {
		width: 110%;
		color: white;
		margin-right: auto;
		margin-left: auto;
	}
	.img-responsive {
		width: 110px;
		height: 125px;
	}
	.mobileTabs{
		display: none;
	}
	.brandNameTop1{
		padding-top: 30%;
	}
	.brandNameTop{
		padding-top: 20%;
	}

}

.featuresCards {
	margin: 0;
	display: inline-flex;
	max-width: 500%;
	grid-auto-flow: column;
	place-content: center;
	padding-right: 20px;
}

.FeaturesTitle {
	text-align: center;
	font-family: 'Futurica-BS-light', sans-serif;
	font-family: 35px;
}


.figureFeat>* {
	grid-area: 1/1;
	transition: .4s;
	padding-right: 20px;
}

.figureFeat figcaption {
	display: grid;
	/* align-items: end; */
	font-family: sans-serif;
	font-size: 2.3rem;
	font-weight: bold;
	color: #0000;
	padding: .75rem;
	padding-right: 20px;
	background: var(--c, #0009);
	clip-path: inset(0 var(--_i, 100%) 0 0);
	-webkit-mask:
	linear-gradient(#000 0 0),
	linear-gradient(#000 0 0);
	-webkit-mask-composite: xor;
	-webkit-mask-clip: text, padding-box;
}

.figureFeat:hover figcaption {
	--_i: 0%;
}

.figureFeat:hover img {
	transform: scale(1.2);
}

@media (max-width:992px) {
	.titlep {
		color: black;
		font-size: 22px;
		font-family: 'Montserrat', sans-serif;
		max-width: 135px;
		word-break: break-all !important;
		height: 17px;
		width: 150px;
		font-weight: 500;
	}
}

@media (max-width:992px) {
	.mobileTabs {
		font-size: 20px;

	}
}

@supports not (-webkit-mask-clip: text) {
	.figureFeat figcaption {
		-webkit-mask: none;
		color: #fff;
	}
}
</style>

</main>

<?php
require_once($real_root.'/pages/views/virtual-assistant.php');
require_once($real_root.'/pages/views/mobile-show-footer-buttons.php');
require_once($real_root.'/pages/views/footer.php');
require_once($real_root.'/pages/views/modal-perfect-fit-guarantee.php');
require_once($real_root.'/pages/views/modal-free-shipping.php');
require_once($real_root.'/pages/views/modal-save-to-idea-folder.php');
?>

<script src="<?php echo SITEROOT; ?>app.js"></script>
</body>
</html>