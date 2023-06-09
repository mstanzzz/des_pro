<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>ClosetsToGo</title>
	<meta name="description" content="Comparison page">
	<link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">
</head>

<body class="comparison comparison-page idea-folder-popup">
	<?php
	require_once($real_root . '/pages/views/header.php');
	?>

	<section class="home-mobile-buttons-block covid-block">
		<div class="wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="home-mobile-buttons-block__wrapper">
							<a href="#" title="Back" class="back-link d-none" data-btn="back-link">
								<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
									<path d="M0 0h24v24H0V0z" fill="none" />
									<path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z" />
								</svg>
							</a>
							<p>Closets To Go is unique in many ways! </p>
							<button title="Clear" style="margin: 5px 0 0" class="clear-selected__mobile d-none" data-btn="clear">
								<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24">
									<g transform="translate(0 -0.001)">
										<g transform="translate(0 0.001)">
											<path d="M13.326,12l10.4-10.4A.938.938,0,0,0,22.4.275L12,10.675,1.6.275A.938.938,0,0,0,.274,1.6L10.674,12,.274,22.4A.938.938,0,0,0,1.6,23.726L12,13.327l10.4,10.4A.938.938,0,0,0,23.725,22.4Z" transform="translate(0 -0.001)" />
										</g>
									</g>
								</svg>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<main class="main wrapper">

		<section class="breadcrumb-block pb-3 desktop-show">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="breadcrumb-block__wrapper" aria-label="breadcrumb">
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html" title="Home">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">comparison</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="container-fluid">
			<h1 class="title__compare title__compare__desktop">Closets To Go is unique in many ways!</h1>
			<div class="tab-content__text-wrap js-text-wrap nd-read-more">
				<div class="tab-content__text-wrap--content js-hidden-text small-text">
					<p class="">
						We are a boutique closet company who offers high end, TRULY custom closets! The chart below compares our most common material minimum standards, our services and aspects of our DIY that makes it the easiest installation on the market. When side by side, you can easily see Closets To Go is unlike other companies in that we cater to both the full service and DIY client and go above and beyond in taking care of the tedious details so you don't have to! We want you to have fun installing your custom made closet!
					</p>
				</div>
			</div>
			<hr />
			<div style="float: left;">
				<div class="tab-content__text-wrap js-text-wrap nd-read-more">
					<div class="tab-content__text-wrap--content js-hidden-text small-text">
						<p class="">
							Select companies to compare side-by-side.</p>
					</div>
				</div>
			</div>

			<div class="filter__compare__desktop">
				<div class="ml-auto w-auto d-inline-flex align-items-center">
					<span>
						<span class="number-of-checked-brands">0</span> selected
					</span>
					<button title="Compare" class="btn btn-primary btn-compare link-button ml-3  pl-3 pr-3">compare</button>
				</div>
			</div>
			<div class="filter__compare__mobile row">
				<div class="w-100 d-flex align-items-center">
					<button title="Clear selected" class="btn btn-primary btn-primary__trans link-button pl-3 pr-3 flex-grow-1 justify-content-center clear-selected__mobile">
						clear selected
					</button>
					<button title="Compare now" class="btn btn-primary btn-compare__mobile link-button pl-3 pr-3 flex-grow-1 justify-content-center">
						compare now
					</button>
				</div>
			</div>
		</div>

		<!--			THIS CARDS ARE SHOWING ONLY ON MOBILE
			THEY REPRESENT BRANDS WITH IMAGES AND CHECKBOXES AND
			 DUPLICATE THE BEHAVIOUR OF THE TABLE HEADER WITH BRAND
			  IMAGES AND CHECKBOXES
			-->
		<div class="container-fluid">
			<fieldset>
				<ul class="list__card-brand-comparison">
					<!--
						here in list__card-brand-comparison we have inputs with attr data-brand-checked
						these attributes are connected with attributes in inputs of table#main-table, bellow this container.
						-->

					<li class="card__brand-comparison">
						<div class="card__brand-comparison__wrap">
							<div class="card__brand-comparison__img-wrap">
								<img src="<?php echo SITEROOT; ?>images/svgg.svg" class="img-fluid" alt="" />
							</div>
							<div class=" brand-compare__header__checkbox">
								<input class="checkbox__ch-card__checkbox selectable checkbox-brand" id="brand-ctg" type="checkbox" value="brand-ctg" data-brand-checked="brand-ctg">
								<label for="brand-ctg"> </label>
							</div>
						</div>
					</li>
					<li class="card__brand-comparison">
						<div class="card__brand-comparison__wrap">
							<div class="card__brand-comparison__img-wrap">
								<img src="<?php echo SITEROOT; ?>images/california_closets.png" class="img-fluid" alt="" />
							</div>
							<div class=" brand-compare__header__checkbox">
								<!--  data-brand-checked= have to has

									-->
								<input class="checkbox__ch-card__checkbox selectable checkbox-brand" id="checkbox-brand-11" type="checkbox" value="brand-11" data-brand-checked="brand-11">
								<label for="checkbox-brand-11"> </label>
							</div>
						</div>
					</li>
					<li class="card__brand-comparison">
						<div class="card__brand-comparison__wrap">
							<div class="card__brand-comparison__img-wrap">
								<img src="<?php echo SITEROOT; ?>images/closetfactory.png" class="img-fluid" alt="" />
							</div>
							<div class=" brand-compare__header__checkbox">
								<input class="checkbox__ch-card__checkbox selectable checkbox-brand" id="checkbox-brand-22" type="checkbox" value="brand-22" data-brand-checked="brand-22">
								<label for="checkbox-brand-22"> </label>
							</div>
						</div>
					</li>
					<li class="card__brand-comparison">
						<div class="card__brand-comparison__wrap">
							<div class="card__brand-comparison__img-wrap">
								<img src="<?php echo SITEROOT; ?>images/EasyClosetsStow.png" class="img-fluid" alt="" />
							</div>
							<div class=" brand-compare__header__checkbox">
								<input class="checkbox__ch-card__checkbox selectable checkbox-brand" id="checkbox-brand-33" type="checkbox" value="brand-33" data-brand-checked="brand-33">
								<label for="checkbox-brand-33"> </label>
							</div>
						</div>
					</li>
					<li class="card__brand-comparison">
						<div class="card__brand-comparison__wrap">
							<div class="card__brand-comparison__img-wrap">
								<img src="<?php echo SITEROOT; ?>images/modular_closets.png" class="img-fluid" alt="" />
							</div>
							<div class=" brand-compare__header__checkbox">
								<input class="checkbox__ch-card__checkbox selectable checkbox-brand" id="checkbox-brand-44" type="checkbox" value="brand-44" data-brand-checked="brand-44">
								<label for="checkbox-brand-44"> </label>
							</div>
						</div>
					</li>
					<li class="card__brand-comparison">
						<div class="card__brand-comparison__wrap">
							<div class="card__brand-comparison__img-wrap">
								<img src="<?php echo SITEROOT; ?>images/ikea.png" class="img-fluid" alt="" />
							</div>
							<div class=" brand-compare__header__checkbox">
								<input class="checkbox__ch-card__checkbox selectable checkbox-brand" id="checkbox-brand-55" type="checkbox" value="brand-55" data-brand-checked="brand-55">
								<label for="checkbox-brand-55"> </label>
							</div>
						</div>
					</li>
				</ul>
			</fieldset>
		</div>

		<div class="container-fluid">
			<div class="table-wrap table-fixed table__brands-comparison">
				<div id="table-scroll" class="table-scroll">
					<table id="main-table" class="main-table">
						<fieldset>
							<thead>
								<tr>
									<th scope="col" class="main-cell table-cell__sticky table-cell__sticky__box-shadow">
										<div class="table-cell__sticky__header wrap-sticky-row">
											<p class="table-scroll__title">compare competitors</p>
											<div class="table__img-wrap second-sticky-column">
												<img src="<?php echo SITEROOT; ?>images/svgg.svg" class="img-fluid" style="width: 100px" alt="" />
											</div>
										</div>
									</th>
									<th scope="col" data-brand-checked="brand-1" class="table-cell__sticky brand-compare brand-compare__header">
										<div class=" brand-compare__header__checkbox">
											<input class="checkbox__ch-card__checkbox selectable checkbox-brand" id="checkbox-brand-1" type="checkbox" value="brand-1" data-brand-checked="brand-1">
											<label for="checkbox-brand-1"> </label>
										</div>
										<div class="table-cell__sticky__header wrap-sticky-row">
											<div class="table__img-wrap second-sticky-column">
												<img src="<?php echo SITEROOT; ?>images/california_closets.png" class="img-fluid" alt="" />
											</div>
										</div>
									</th>
									<th scope="col" data-brand-checked="brand-2" class="table-cell__sticky brand-compare brand-compare__header">
										<div class=" brand-compare__header__checkbox">
											<input class="checkbox__ch-card__checkbox selectable checkbox-brand" id="checkbox-brand-2" type="checkbox" value="brand-2" data-brand-checked="brand-2">
											<label for="checkbox-brand-2"> </label>
										</div>
										<div class="table-cell__sticky__header wrap-sticky-row">
											<div class="table__img-wrap second-sticky-column">
												<img src="<?php echo SITEROOT; ?>images/closetfactory.png" class="img-fluid" alt="" />
											</div>
										</div>
									</th>
									<th scope="col" data-brand-checked="brand-3" class="table-cell__sticky brand-compare brand-compare__header">
										<div class=" brand-compare__header__checkbox">
											<input class="checkbox__ch-card__checkbox selectable checkbox-brand" id="checkbox-brand-3" type="checkbox" value="brand-3" data-brand-checked="brand-3">
											<label for="checkbox-brand-3"> </label>
										</div>
										<div class="table-cell__sticky__header wrap-sticky-row">
											<div class="table__img-wrap second-sticky-column">
												<img src="<?php echo SITEROOT; ?>images/EasyClosetsStow.png" class="img-fluid" alt="" />
											</div>
										</div>
									</th>
									<th scope="col" data-brand-checked="brand-4" class="table-cell__sticky brand-compare brand-compare__header">
										<div class=" brand-compare__header__checkbox">
											<input class="checkbox__ch-card__checkbox selectable checkbox-brand" id="checkbox-brand-4" type="checkbox" value="brand-4" data-brand-checked="brand-4">
											<label for="checkbox-brand-4"> </label>
										</div>
										<div class="table-cell__sticky__header wrap-sticky-row">
											<div class="table__img-wrap second-sticky-column">
												<img src="<?php echo SITEROOT; ?>images/modular_closets.png" class="img-fluid" alt="" />
											</div>
										</div>
									</th>
									<th scope="col" data-brand-checked="brand-5" class="table-cell__sticky brand-compare brand-compare__header">
										<div class=" brand-compare__header__checkbox">
											<input class="checkbox__ch-card__checkbox selectable checkbox-brand" id="checkbox-brand-5" type="checkbox" value="brand-5" data-brand-checked="brand-5">
											<label for="checkbox-brand-5"> </label>
										</div>
										<div class="table-cell__sticky__header wrap-sticky-row">
											<div class="table__img-wrap second-sticky-column">
												<img src="<?php echo SITEROOT; ?>images/ikea.png" class="img-fluid" alt="" />
											</div>
										</div>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="table-cell__sticky table-cell__sticky__box-shadow main-cell">
										<div class="wrap-sticky-row">
											<div class="first-sticky-column">
												<p class=" table-column-text">
													DIY & Full Service
												</p>
											</div>
											<div class="second-sticky-column colorized ">

												<p class="table-column-text table-column-title table-column-title__md">
													DIY & Full Service
												</p>
												<p class="table-column-text text-center">
													<img src="<?php echo SITEROOT; ?>images/checked.svg" class="img-fluid" alt="" />
												</p>
											</div>
										</div>
									</th>

									<td class="brand-compare" data-brand-checked="brand-1">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">
											<p class="table-column-text table-column-title table-column-title__md">
												DIY & Full Service
											</p>
												<p class="table-column-text text-center">
													NO
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-2">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													DIY & Full Service
												</p>

												<p class="table-column-text text-center">
													NO
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-3">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													DIY & Full Service
												</p>
												<p class="table-column-text">
												NO
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-4">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													DIY & Full Service
												</p>
												<p class="table-column-text text-center">
													NO
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-5">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													DIY & Full Service
												</p>
												<p class="table-column-text">
													 NO
												</p>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="table-cell__sticky table-cell__sticky__box-shadow main-cell">
										<div class="wrap-sticky-row">
											<div class="first-sticky-column">

												<p class=" table-column-text">
													100% custom
												</p>
											</div>
											<div class="second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													100% custom
												</p>
												<p class="table-column-text text-center">
													<img src="<?php echo SITEROOT; ?>images/checked.svg" class="img-fluid" alt="" />
												</p>
											</div>
										</div>
									</th>

									<td class="brand-compare" data-brand-checked="brand-1">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													100% custom
												</p>
												<p class="table-column-text text-center">
													<img src="<?php echo SITEROOT; ?>images/checked.svg" class="img-fluid" alt="" />
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-2">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													100% custom
												</p>
												<p class="table-column-text">
												<img src="<?php echo SITEROOT; ?>images/checked.svg" class="img-fluid" alt="" />
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-3">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													100% custom
												</p>
												<p class="table-column-text">
													NO, only if they design, no custom LED
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-4">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													100% custom
												</p>
												<p class="table-column-text text-center">
													NO
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-5">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													100% custom
												</p>
												<p class="table-column-text">
													NO
												</p>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="table-cell__sticky table-cell__sticky__box-shadow main-cell">
										<div class="wrap-sticky-row">
											<div class="first-sticky-column ">

												<p class=" table-column-text">
													Adjustable suspension bracket/rail AND integrated cleat
												</p>
											</div>
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Adjustable suspension bracket/rail AND integrated cleat
												</p>
												<p class="table-column-text">
												<img src="<?php echo SITEROOT; ?>images/checked.svg" class="img-fluid" alt="" />
												</p>
											</div>
										</div>
									</th>

									<td class="brand-compare" data-brand-checked="brand-1">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Adjustable suspension bracket/rail AND integrated cleat
												</p>
												<p class="table-column-text">
													NO
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-2">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Adjustable suspension bracket/rail AND integrated cleat
												</p>
												<p class="table-column-text">
													NO-floor based only
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-3">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Adjustable suspension bracket/rail AND integrated cleat
												</p>
												<p class="table-column-text text-center">
													NO
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-4">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Adjustable suspension bracket/rail AND integrated cleat
												</p>
												<p class="table-column-text">
													NO
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-5">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Adjustable suspension bracket/rail AND integrated cleat
												</p>
												<p class="table-column-text text-center">
													NO
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="table-cell__sticky table-cell__sticky__box-shadow main-cell">
										<div class="wrap-sticky-row">
											<div class="first-sticky-column">

												<p class=" table-column-text">
													INDUSTRIAL grade 3/4' TFL
												</p>
											</div>
											<div class="second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													INDUSTRIAL grade 3/4' TFL
												</p>
												<p class="table-column-text">
												<img src="<?php echo SITEROOT; ?>images/checked.svg" class="img-fluid" alt="" />
												</p>
											</div>
										</div>
									</th>

									<td class="brand-compare" data-brand-checked="brand-1">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													INDUSTRIAL grade 3/4' TFL
												</p>
												<p class="table-column-text">
												<img src="<?php echo SITEROOT; ?>images/checked.svg" class="img-fluid" alt="" />
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-2">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													INDUSTRIAL grade 3/4' TFL
												</p>
												<p class="table-column-text">
												<img src="<?php echo SITEROOT; ?>images/checked.svg" class="img-fluid" alt="" />
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-3">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													INDUSTRIAL grade 3/4' TFL
												</p>
												<p class="table-column-text text-center">
													NO-furniture grade composite board
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-4">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													INDUSTRIAL grade 3/4' TFL
												</p>
												<p class="table-column-text">
													m2 grade furniture board
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-5">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													INDUSTRIAL grade 3/4' TFL
												</p>
												<p class="table-column-text">
													NO-particle board or fiber board
												</p>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="table-cell__sticky table-cell__sticky__box-shadow main-cell">
										<div class="wrap-sticky-row">
											<div class="first-sticky-column">

												<p class=" table-column-text">
													Pre-installed LED Lighting
												</p>
											</div>
											<div class="second-sticky-column colorized ">

												<p class="table-column-text table-column-title table-column-title__md">
													Pre-installed LED Lighting
												</p>
												<p class="table-column-text text-center">
													<img src="<?php echo SITEROOT; ?>images/checked.svg" class="img-fluid" alt="" />
												</p>
											</div>
										</div>
									</th>

									<td class="brand-compare" data-brand-checked="brand-1">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Pre-installed LED Lighting
												</p>
												<p class="table-column-text text-center">
													N/A
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-2">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Pre-installed LED Lighting
												</p>
												<p class="table-column-text text-center">
													N/A
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-3">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Pre-installed LED Lighting
												</p>
												<p class="table-column-text text-center">
													NO
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-4">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Pre-installed LED Lighting
												</p>
												<p class="table-column-text text-center">
													NO
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-5">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Pre-installed LED Lighting
												</p>
												<p class="table-column-text text-center">
													NO
												</p>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="table-cell__sticky table-cell__sticky__box-shadow main-cell">
										<div class="wrap-sticky-row">
											<div class="first-sticky-column">

												<p class=" table-column-text">
													You Design/We Design
												</p>
											</div>
											<div class="second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													You Design/We Design
												</p>
												<p class="table-column-text text-center">
													<img src="<?php echo SITEROOT; ?>images/checked.svg" class="img-fluid" alt="" />
												</p>
											</div>
										</div>
									</th>

									<td class="brand-compare" data-brand-checked="brand-1">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													You Design/We Design
												</p>
												<p class="table-column-text">
													NO
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-2">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													You Design/We Design
												</p>
												<p class="table-column-text">
													NO
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-3">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													You Design/We Design
												</p>
												<p class="table-column-text">
													<img src="<?php echo SITEROOT; ?>images/checked.svg" class="img-fluid" alt="" />
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-4">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													You Design/We Design
												</p>
												<p class="table-column-text">
													<img src="<?php echo SITEROOT; ?>images/checked.svg" class="img-fluid" alt="" />
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-5">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													You Design/We Design
												</p>
												<p class="table-column-text">
													NO, planning only
												</p>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="table-cell__sticky table-cell__sticky__box-shadow main-cell">
										<div class="wrap-sticky-row">
											<div class="first-sticky-column">

												<p class=" table-column-text">
													Live Installation Support
												</p>
											</div>
											<div class="second-sticky-column colorized ">

												<p class="table-column-text table-column-title table-column-title__md">
													Live Installation Support
												</p>
												<p class="table-column-text">
												<img src="<?php echo SITEROOT; ?>images/checked.svg" class="img-fluid" alt="" />
												</p>
											</div>
										</div>
									</th>

									<td class="brand-compare" data-brand-checked="brand-1">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Live Installation Support
												</p>
												<p class="table-column-text text-center">
													N/A
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-2">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Live Installation Support
												</p>
												<p class="table-column-text text-center">
													N/A
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-3">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Live Installation Support
												</p>
												<p class="table-column-text">
												<img src="<?php echo SITEROOT; ?>images/checked.svg" class="img-fluid" alt="" />
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-4">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Live Installation Support
												</p>
												<p class="table-column-text text-center">
													<img src="<?php echo SITEROOT; ?>images/checked.svg" class="img-fluid" alt="" />
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-5">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Live Installation Support
												</p>
												<p class="table-column-text">
													NO
												</p>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="table-cell__sticky table-cell__sticky__box-shadow main-cell">
										<div class="wrap-sticky-row">
											<div class="first-sticky-column">

												<p class=" table-column-text">
													Custom Instructions
												</p>
											</div>
											<div class="second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Custom Instructions
												</p>
												<p class="table-column-text text-center">
													<img src="<?php echo SITEROOT; ?>images/checked.svg" class="img-fluid" alt="" />
												</p>
											</div>
										</div>
									</th>

									<td class="brand-compare" data-brand-checked="brand-1">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Custom Instructions
												</p>
												<p class="table-column-text text-center">
													N/A
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-2">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Custom Instructions
												</p>
												<p class="table-column-text">
													N/A
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-3">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Custom Instructions
												</p>
												<p class="table-column-text">
													NO
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-4">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Custom Instructions
												</p>
												<p class="table-column-text text-center">
													NO
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-5">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Custom Instructions
												</p>
												<p class="table-column-text">
													NO
												</p>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="table-cell__sticky table-cell__sticky__box-shadow main-cell">
										<div class="wrap-sticky-row">
											<div class="first-sticky-column ">

												<p class=" table-column-text">
													Perfect Fit Guarantee
												</p>
											</div>
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Perfect Fit Guarantee
												</p>
												<p class="table-column-text">
												<img src="<?php echo SITEROOT; ?>images/checked.svg" class="img-fluid" alt="" />
												</p>
											</div>
										</div>
									</th>

									<td class="brand-compare" data-brand-checked="brand-1">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Perfect Fit Guarantee
												</p>
												<p class="table-column-text">
													N/A
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-2">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Perfect Fit Guarantee
												</p>
												<p class="table-column-text">
													N/A
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-3">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Perfect Fit Guarantee
												</p>
												<p class="table-column-text text-center">
													NO
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-4">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Perfect Fit Guarantee
												</p>
												<p class="table-column-text">
													NO
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-5">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Perfect Fit Guarantee
												</p>
												<p class="table-column-text text-center">
													NO
												</p>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="table-cell__sticky table-cell__sticky__box-shadow main-cell">
										<div class="wrap-sticky-row">
											<div class="first-sticky-column">

												<p class=" table-column-text">
													Pre-Installed Functional Hardware AND Accessories
												</p>
											</div>
											<div class="second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Pre-Installed Functional Hardware AND Accessories
												</p>
												<p class="table-column-text">
												<img src="<?php echo SITEROOT; ?>images/checked.svg" class="img-fluid" alt="" />
												</p>
											</div>
										</div>
									</th>

									<td class="brand-compare" data-brand-checked="brand-1">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Pre-Installed Functional Hardware AND Accessories
												</p>
												<p class="table-column-text">
													N/A
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-2">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Pre-Installed Functional Hardware AND Accessories
												</p>
												<p class="table-column-text">
													N/A
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-3">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Pre-Installed Functional Hardware AND Accessories
												</p>
												<p class="table-column-text text-center">
													X drawer boxes and cams only/No
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-4">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Pre-Installed Functional Hardware AND Accessories
												</p>
												<p class="table-column-text">
													NO, just drawer boxes
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-5">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Pre-Installed Functional Hardware AND Accessories
												</p>
												<p class="table-column-text">
													N/A
												</p>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="table-cell__sticky table-cell__sticky__box-shadow main-cell">
										<div class="wrap-sticky-row">
											<div class="first-sticky-column">

												<p class=" table-column-text">
													Pre-Cut: hanging rail, rail cover, hanging rods, trim out base mold
												</p>
											</div>
											<div class="second-sticky-column colorized ">

												<p class="table-column-text table-column-title table-column-title__md">
													Pre-Cut: hanging rail, rail cover, hanging rods, trim out base mold
												</p>
												<p class="table-column-text text-center">
													<img src="<?php echo SITEROOT; ?>images/checked.svg" class="img-fluid" alt="" />
												</p>
											</div>
										</div>
									</th>

									<td class="brand-compare" data-brand-checked="brand-1">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Pre-Cut: hanging rail, rail cover, hanging rods, trim out base mold
												</p>
												<p class="table-column-text text-center">
													N/A
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-2">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Pre-Cut: hanging rail, rail cover, hanging rods, trim out base mold
												</p>
												<p class="table-column-text text-center">
													N/A
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-3">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Pre-Cut: hanging rail, rail cover, hanging rods, trim out base mold
												</p>
												<p class="table-column-text text-center">
													NO
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-4">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Pre-Cut: hanging rail, rail cover, hanging rods, trim out base mold
												</p>
												<p class="table-column-text text-center">
													N/A
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-5">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Pre-Cut: hanging rail, rail cover, hanging rods, trim out base mold
												</p>
												<p class="table-column-text text-center">
													N/A
												</p>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="table-cell__sticky table-cell__sticky__box-shadow main-cell">
										<div class="wrap-sticky-row">
											<div class="first-sticky-column">

												<p class=" table-column-text">
													Labeled Panels and Parts
												</p>
											</div>
											<div class="second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Labeled Panels and Parts
												</p>
												<p class="table-column-text text-center">
													<img src="<?php echo SITEROOT; ?>images/checked.svg" class="img-fluid" alt="" />
												</p>
											</div>
										</div>
									</th>

									<td class="brand-compare" data-brand-checked="brand-1">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Labeled Panels and Parts
												</p>
												<p class="table-column-text">
													N/A
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-2">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Labeled Panels and Parts
												</p>
												<p class="table-column-text">
													N/A
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-3">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Labeled Panels and Parts
												</p>
												<p class="table-column-text">
													No-labeled boxes
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-4">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Labeled Panels and Parts
												</p>
												<p class="table-column-text">
													NO
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-5">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Labeled Panels and Parts
												</p>
												<p class="table-column-text">
													N/A
												</p>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</fieldset>
					</table>
				</div>
			</div>
		</div>
	</main>

	<?php
	require_once($real_root . '/pages/views/footer.php');
	require_once($real_root . '/pages/views/virtual-assistant.php');
	require_once($real_root . '/pages/views/modal-perfect-fit-guarantee.php');
	require_once($real_root . '/pages/views/modal-free-shipping.php');
	require_once($real_root . '/pages/views/modal-save-to-idea-folder.php');
	?>

	<script src="<?php echo SITEROOT; ?>app.js"></script>
</body>

</html>