		<!-- Modal e-sign --> 
		<div class="modal modal-sign fade" id="modal__e-sign" tabindex="-1" role="dialog"
			 aria-labelledby="exampleModalLabel" aria-hidden="true">

			<div class="modal-dialog " role="document">

				<div class="modal-content">
					<!--SHOW THIS ON DESKTOP SCREEN-->
					<div class="d-flex align-items-center justify-content-between modal-content__header card-el__hide-on-md">
						<div class="f-1">
							<div class="modal-sign__brand-wrap ">
								<img src="./images/svgg.svg" class="img-fluid" alt="">
							</div>
						</div>
						<div class="f-1">
							<p class="modal-sign__header text-center">
								E-sign
							</p>
						</div>
						<div class="f-1 modal-sign__close-icon-wrap text-right close close-modal" type=""
							 data-dismiss="modal" aria-label="Close">
							<img src="./images/close.svg" class="img-fluid" alt="">
						</div>
					</div>
					<!--#SHOW THIS ON DESKTOP SCREEN-->

					<!--SHOW THIS ON MOBILE SCREEN-->
					<div class="modal__add-address__header__fixed card-el__show-on-md">
						<button title="Back"
								type="button"
								class="modal-sign__back btn-back d-none"
								data-role="signBack"
						>
							<img src="../src/images/back-icon.svg" alt="Back">
						</button>
						<p class="title">
							E-sign
						</p>
						<div class="f-1 modal-sign__close-icon-wrap text-right close-modal" type="buttons"
							 data-dismiss="modal" aria-label="modalAddAddress">
							<img src="./images/close.svg" class="img-fluid" alt="">
						</div>
					</div>
					<!--#SHOW THIS ON MOBILE SCREEN-->
					<div class="alert alert-primary cd-none" data-alert="alert-primary-initialize" role="alert">
						<span class="alert-icon"><img src="./images/shield.svg" class="img-fluid" alt=""></span>You have
						completed all required fields. Please click "Continue"
					</div>
					<div class="alert alert-agree cd-none" data-alert="alert-agree-initialize" role="alert">
						<div class="flex-column flex-md-row row align-items-md-center">
							<div class="col">
								<p class="alert-title">
									Almost done
								</p>
								<p class="alert-text">
									I agree to be legally bound by this document and the Hellosign terms of services
								</p>
							</div>
							<div class="col-auto mk-btn-stls">
								<button title="Edit" class="btn btn-transparent btn-rounded">
									Edit
								</button>
								<button title="Agree" class="btn btn-info btn-rounded" data-role="agree-with-tac">
									Agree
								</button>
							</div>
						</div>
					</div>

					<div class="modal-body card-shadow w-100">
						<form id="modalForm" class="needs-validation">
							<fieldset>
								<div class="form-group form-group__default pt-4 pt-lg-0" data-inputforms="input-forms">
									<div class="form-control form-group__default__form-control home-consult-form__input">
										<label class="label-above card-el__show-on-md"
											for="input-name">Name:</label>
										<input class="input" id="input-name" required type="text" placeholder="Name">
										<span class="required__star"><abbr title="required">*</abbr></span>
									</div>
									<div class="form-control form-group__default__form-control home-consult-form__input">
										<label class="label-above card-el__show-on-md"
											for="input-email">E-mail:</label>
										<input class="input" id="input-email" required type="email"
											placeholder="Email Address">
										<span class="required__star"><abbr title="required">*</abbr></span>
									</div>
								</div>
								<div class="mt-3 mb-4 px-30 px-md-0">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit?
									</p>
									<div class="form-group form-group__default">
										<div class="form-check form-group__default__form-check form-check-inline">
											<input class="checkbox__ch-card__checkbox" id="checkbox__select-nam"
												type="checkbox"
												value="value1">
											<label for="checkbox__select-nam">Nam dignissim</label>
										</div>
										<div class="form-check form-check form-group__default__form-check form-check-inline">
											<input class="checkbox__ch-card__checkbox" id="checkbox__select-ipsum"
												type="checkbox"
												value="value1">
											<label for="checkbox__select-ipsum">Ipsum eget rhoncus</label>
										</div>
									</div>
								</div>
								<div class="px-30 px-md-0" data-role="info-text-custom-collapse">
									<p class="text-small info-text-custom-collapse">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim, ipsum
										eget
										rhoncus
										fermentum, tortor augue dictum risus, non sagittis ex quam vestibulum ipsum. Ut
										posuere
										quam
										sed arcu convallis ultrices. Pellentesque vehicula condimentum porttitor. Donec
										dignissim
										dui lobortis, sagittis turpis ac, facilisis tortor. In hac habitasse platea
										dictumst.
										Nullam
										pharetra ullamcorper neque in aliquam. Suspendisse lacus nibh, elementum et
										cursus
										vitae,
										accumsan ac metus.
									</p>
									<button title="Read all" class="card-el__show-on-md btn-link"
											data-role="btn-info-text-custom-collapse" type="button">
										Read all
									</button>
								</div>

								<div id="cta-footer-nav"
									class="justify-content-between align-items-center align-items-md-stretch modal-sign__md-footer-fixed">


									<div class=" mt-0 mt-md-4 w-100" data-role="choose-e-type">
										<!--SHOW THIS ON DESKTOP SCREEN-->
										<div class="d-flex align-items-center justify-content-between ">
											<button title="Choose e-sign type"
													Read all class="btn btn-primary choose__e-type card-el__hide-on-md"
													data-toggle="modal"
													data-target="#modal__e-sign__type">
												Choose e-sign type
											</button>

											<button title="Click to sign"
													class="btn btn-secondary btn-secondary__outline card-el__hide-on-md"
													data-role="sign"
													disabled>click to sign</span>
											</button>
										</div>
										<!--#SHOW THIS ON DESKTOP SCREEN-->

										<!--MOBILE FIXED FOOTER FOR SWITCHING BETWEEN MODALS AND TABS -->
										<!--SHOW THIS ON MOBILE SCREEN-->
										<!-- Default dropup button -->
										<div class="btn-group dropup card-el__show-on-md btn-dropup__modals">
											<button title="Choose e-sign type" type="button" class="btn btn-primary  dropdown-toggle"
													data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Choose e-sign type
											</button>
											<div class="dropdown-menu">
												<!-- Dropdown menu links -->
												<ul class="nav nav__tabs-modal" id="pills-tab" role="tablist">
													<li class="nav-item choose__e-type"
														data-toggle="modal"
														data-target="#modal__e-sign__type"
													>
														<a class="nav-link" id="pills-draw-tab" data-toggle="pill"
														href="#pills-home" role="tab" aria-controls="pills-home"
														aria-selected="true">Draw it in</a>
													</li>
													<li class="nav-item choose__e-type"
														data-toggle="modal"
														data-target="#modal__e-sign__type"
													>
														<a class="nav-link hover__ltr" id="pills-type-tab"
														data-toggle="pill"
														href="#pills-type" role="tab" aria-controls="pills-profile"
														aria-selected="false">Type it in</a>
													</li>
													<li class="nav-item choose__e-type"
														data-toggle="modal"
														data-target="#modal__e-sign__type"
													>
														<a class="nav-link hover__ltr" id="pills-upload-tab"
														data-toggle="pill"
														href="#pills-upload" role="tab" aria-controls="pills-contact"
														aria-selected="false">Upload image</a>
													</li>
													<li class="nav-item choose__e-type"
														data-toggle="modal"
														data-target="#modal__e-sign__type"
													>
														<a class="nav-link hover__ltr"
														id="pills-smartphone-tab"
														data-toggle="pill"
														href="#pills-smartphone"
														role="tab"
														aria-controls="pills-contact"
														aria-selected="false"
														data-tab="continue">Use smartphone</a>
													</li>
													<li class="nav-item choose__e-type"
														data-toggle="modal"
														data-target="#modal__e-sign__type"
													>
														<button title="Saved initials"
																class="nav-link hover__ltr"
																role="button"
																aria-selected="false">Saved initials
														</button>
													</li>
												</ul>
											</div>
										</div>
										<!--#SHOW THIS ON MOBILE SCREEN-->

									</div>
									<div class="card-el__hide-on-md">
										<div class="init-wrap d-none mt-0 mt-md-3" data-signature="signature-check">
											<img src="./images/signature.png" class="img-fluid" alt="">
										</div>
									</div>
									<div class=" sign-placeholder mt-0 mt-md-3 card-el__show-on-md">
										<button title="Click to sign"
												class="btn btn-secondary btn-secondary__outline"
												disabled>click to sign</span>
										</button>
									</div>
									<div class="init-wrap init-wrap__lg  d-none mt-0 mt-md-3"
										data-signature="signature-confirmed">
										<img src="./images/signature.png" class="img-fluid" alt="">
										<span class="required__star " data-role="required-star"><abbr
												title="required">*</abbr></span>
									</div>
								</div>

								<div id="cta-footer-continue" class="modal-sign__md-footer-fixed d-none">
									<div class="d-flex justify-content-center mx-auto">
										<div class="d-none mt-md-5" data-role="continue-confirm">
											<button title="Continue"
													class="btn btn-secondary"
													type="submit">
												continue
											</button>
										</div>
									</div>
								</div>

								<div class="d-flex justify-content-between card-el__hide-on-md">
									<a href="" title="Back"
										class="btn btn-primary btn-auto choose__e-type mt-100 d-none"
										data-toggle="modal"
										data-role="back"
										data-target="#modal__e-sign__type">
										back
									</a>
									<div class="card-el__hide-on-md">
										<div class="sign-placeholder sign-placeholder__md p-0 text-center"
											data-role="sign-placeholder">
											<button title="Click to sign"
													class="btn btn-secondary d-none mt-100" data-role="sign"
													disabled>
												click to sign <span class="required__star d-none"
																	data-role="required-star"><abbr
													title="required">*</abbr></span>
											</button>
										</div>
									</div>
								</div>

								<!--ON MOBILE SHOW SIGNATURE INSIDE MODAL BODY -->
								<div class="card-el__show-on-md">
									<div class="init-wrap d-none init-wrap__md mx-auto mx-md-0 mt-5 mb-3 mb-md-down-0 mt-0 mt-md-3 "
										data-signature="signature-check">
										<img src="./images/signature.png" class="img-fluid" alt="">
									</div>
								</div>

								<div class="card-el__show-on-md">
									<div class="init-wrap init-wrap__lg  d-none mt-3 mx-auto"
										data-signature="signature-confirmed">
										<img src="./images/signature.png" class="img-fluid" alt="">
										<span class="required__star " data-role="required-star"><abbr
												title="required">*</abbr></span>
									</div>
								</div>


								<!--ON MOBILE SHOW "CLICK TO SIGN SIGNATURE" BUTTON INSIDE MODAL BODY -->
								<div class="sign-placeholder sign-placeholder__md mt-3 text-center card-el__show-on-md"
									data-role="sign-placeholder">
									<button title="Click to sign"
											class="btn btn-secondary d-none" data-role="sign"
											disabled>
										click to sign <span class="required__star d-none"
															data-role="required-star"><abbr
											title="required">*</abbr></span>
									</button>
								</div>

								<div class="d-flex justify-content-center card-el__hide-on-md">
									<div class=" d-none mt-3 mt-md-5" data-role="continue-confirm">
										<button title="Continue"
												class="btn btn-secondary"
												type="submit">
											continue
										</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal E-Sign Type--> 
		<div class="modal modal-sign modal-sign__type fade" id="modal__e-sign__type" tabindex="-1" role="dialog"
			 aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog " role="document">
				<div class="modal-content">
					<!--SHOW THIS ON MOBILE SCREEN-->
					<div class="modal__add-address__header__fixed card-el__show-on-md">
						<p class="title">
							E-sign
						</p>
						<div class="f-1 modal-sign__close-icon-wrap text-right close close-modal" type="buttons"
							 data-dismiss="modal" aria-label="modalAddAddress">
							<img src="./images/close.svg" class="img-fluid" alt="">
						</div>
					</div>
					<!--#SHOW THIS ON MOBILE SCREEN-->

					<!--SHOW THIS ON DESKTOP SCREEN-->
					<div class="modal-content__header card-el__hide-on-md-el">
						<p class="modal-sign__header text-center">
							<button title="Back"
									type="button"
									class="choose__e-type w-100 back btn-back"
									data-toggle="modal"
									data-role="back"
									data-target="#modal__e-sign">
								<img class="btn-back__icon" src="./images/back-icon.svg" alt="">
								<img class="btn-back__icon" src="./images/back-icon.svg" alt="">
								Back
							</button>
						</p>
					</div>
					<!--#SHOW THIS ON DESKTOP SCREEN-->

					<div class="modal-body card-shadow w-100">
							<form class="modal-sign__type__form">
								<fieldset class="modal-sign__type__fieldset">
									<!--SHOW THIS ON DESKTOP SCREEN-->
									<ul class="nav mb-3 nav__tabs-modal card-el__hide-on-md" id="pills-tab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active hover__ltr" id="pills-draw-tab" data-toggle="pill"
											href="#pills-home" role="tab" aria-controls="pills-home"
											aria-selected="true">Draw it in</a>
										</li>
										<li class="nav-item">
											<a class="nav-link hover__ltr" id="pills-type-tab" data-toggle="pill"
											href="#pills-type" role="tab" aria-controls="pills-profile"
											aria-selected="false">Type it in</a>
										</li>
										<li class="nav-item">
											<a class="nav-link hover__ltr" id="pills-upload-tab" data-toggle="pill"
											href="#pills-upload" role="tab" aria-controls="pills-contact"
											aria-selected="false">Upload image</a>
										</li>
										<li class="nav-item">
											<a class="nav-link hover__ltr"
											id="pills-smartphone-tab"
											data-toggle="pill"
											href="#pills-smartphone"
											role="tab"
											aria-controls="pills-contact"
											aria-selected="false"
											data-tab="continue">Use smartphone</a>
										</li>
										<li class="nav-item ml-auto">
											<button title="Saved initials"
													class="nav-link hover__ltr"
													role="button"
													aria-selected="false">Saved initials
											</button>
										</li>
									</ul>
									<!--#SHOW THIS ON DESKTOP SCREEN-->
									<!--TABS in modal-->
									<div class="tab-content" id="pills-tabContent">
										<!-- Draw tab -->
										<div class="tab-pane fade show active" id="pills-home" role="tabpanel"
											aria-labelledby="pills-draw-tab">
											<!--SHOW THIS ON MOBILE SCREEN-->
											<div class=" card-el__show-on-md">
												<p class="card-checkout__header">
													<div class="card-checkout__header__main__back-icon">
														<button title="Back"
																type="button"
																class="choose__e-type w-100 back btn-back text-left"
																data-toggle="modal"
																data-role="back"
																data-target="#modal__e-sign"
														>
															<img src="../src/images/back-icon.svg" alt="">
														</button>
													</div>
													<span>Draw it in</span>
												</p>
											</div>
											<!--#SHOW THIS ON MOBILE SCREEN-->


											<div class="tab-content__wrap">
												<p class="tab-content__title">
													create initials
												</p>
												<div class="tab-content__initial-wrap initial__draw ">
													<div class="initial">
														<div class="initial__main-line">
															<div class="initial-clear__wrap">
																<img src="./images/close.svg" class="initial-clear" alt="">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- /Draw tab -->
										<!-- Type tab -->
										<div class="tab-pane fade" id="pills-type" role="tabpanel"
											aria-labelledby="pills-type-tab">
											<!--SHOW THIS ON MOBILE SCREEN-->
											<div class=" card-el__show-on-md">
												<p class="card-checkout__header">
													<div class="card-checkout__header__main__back-icon">
														<button title="Back"
																type="button"
																class="choose__e-type w-100 back btn-back text-left"
																data-toggle="modal"
																data-role="back"
																data-target="#modal__e-sign"
														>
															<img src="../src/images/back-icon.svg" alt="">
														</button>
													</div>
													<span>Type it in</span>
												</p>
											</div>
											<!--#SHOW THIS ON MOBILE SCREEN-->
											<div class="tab-content__wrap">
												<p class="tab-content__title">
													create initials
												</p>
												<div class="mb-150 mb-md-down-0">
													<div class="tab-content__initial-wrap">
														<div class="initial">
															<input type="text" max="15" class="init-title input" placeholder="Your initials"/>
														</div>
													</div>
													<div class="text-center mt-4">
														<button title="Change font" class="btn btn-primary">
															change font
														</button>
													</div>
												</div>
											</div>
										</div>
										<!-- /Type tab -->
										<!-- Upload tab -->
										<div class="tab-pane fade" id="pills-upload" role="tabpanel"
											aria-labelledby="pills-contact-tab">
											<!--SHOW THIS ON MOBILE SCREEN-->
											<div class=" card-el__show-on-md">
												<p class="card-checkout__header">
													<div class="card-checkout__header__main__back-icon">
														<button title="Back"
																type="button"
																class="choose__e-type w-100 back btn-back text-left"
																data-toggle="modal"
																data-role="back"
																data-target="#modal__e-sign"
														>
															<img src="../src/images/back-icon.svg" alt="">
														</button>
													</div>
													<span>Upload image</span>
												</p>
											</div>
											<!--#SHOW THIS ON MOBILE SCREEN-->
											<div class="tab-content__wrap">
												<p class="tab-content__title card-el__hide-on-md">
													create initials
												</p>
												<div class="mb-150 mb-md-down-0">
													<p class="text text-center tab-content__title__on-md">
														Upload a picture of your initials
													</p>
													<div class="custom-file__wrap">
														<div class="custom-file custom-file__upload">
															<input type="file" class="custom-file-input" id="customFile">
															<label class="custom-file-label btn btn-primary"
																for="customFile">
																upload
															</label>
														</div>
														<p class="custom-file-label__text"></p>
													</div>
													<p class="text-center text-small">
														Maximum file size: 40 MB <br/> Acceptable file formats: png, jpg,
														jpeg, bmp, gif
													</p>
												</div>
											</div>

										</div>
										<!-- /Upload tab -->
										<!-- Use smartphone tab -->
										<div class="tab-pane fade" id="pills-smartphone" role="tabpanel"
											aria-labelledby="pills-contact-tab">
											<!--SHOW THIS ON MOBILE SCREEN-->
											<div class=" card-el__show-on-md">
												<p class="card-checkout__header">
													<div class="card-checkout__header__main__back-icon">
														<button title="Back"
																type="button"
																class="choose__e-type w-100 back btn-back text-left"
																data-toggle="modal"
																data-role="back"
																data-target="#modal__e-sign"
														>
															<img src="../src/images/back-icon.svg" alt="">
														</button>
													</div>
													<span>Use smartphone</span>
												</p>
											</div>
											<!--#SHOW THIS ON MOBILE SCREEN-->
											<div class="tab-content__wrap">
												<p class="tab-content__title card-el__hide-on-md">
													create initials
												</p>
												<div class="mb-150 mb-md-down-0">
													<p class="text text-center tab-content__title__on-md">
														Please follow the instructions below:
													</p>
													<div class="px-4 px-md-0">
														<ul class="upload-instructions">
															<li class="text">
																1. Take photo of your initials
															</li>
															<li class="text">
																2. Email the photo to: closetstogo@email.address; Subject:
																156rt68yu
															</li>
															<li class="text">
																3. Click "Continue"
															</li>
														</ul>
													</div>

												</div>
											</div>

										</div>
										<!-- /Use smartphone tab -->
									</div>
									<!--#TABS in modal-->
									<div class="mb-md-30 mb-0 px-30">
										<p class="text-center text-small">I understand this is a legal representation of my
											initials</p>
										<div class="text-center">
											<a href="" title="Insert" class="btn btn-secondary tab-content__btn choose__e-type"
											data-toggle="modal"
											data-confirm="toggle-initialize-confirm"
											data-target="#modal__e-sign">
												<span class="" data-btn="insert">insert</span>
												<span class="d-none" data-btn="continue">continue</span>
											</a>
										</div>
									</div>
								</fieldset>
							</form>

						<!--SHOW THIS ON MOBILE SCREEN-->
						<div class="card-el__show-on-md d-flex justify-content-between align-items-center align-items-md-stretch modal-sign__md-footer-fixed">
							<!-- Default dropup button -->
							<div class="btn-group dropup card-el__show-on-md btn-dropup__modals">
								<button title="Choose e-sign type" type="button" class="btn btn-primary  dropdown-toggle" data-toggle="dropdown"
										aria-haspopup="true" aria-expanded="false">
									Choose e-sign type
								</button>
								<div class="dropdown-menu">
									<!-- Dropdown menu links -->
									<ul class="nav nav__tabs-modal" id="pills-tab" role="tablist">
										<li class="nav-item">
											<a class="nav-link" id="pills-draw-tab" data-toggle="pill"
											   href="#pills-home" role="tab" aria-controls="pills-home"
											   aria-selected="true">Draw it in</a>
										</li>
										<li class="nav-item">
											<a class="nav-link hover__ltr" id="pills-type-tab" data-toggle="pill"
											   href="#pills-type" role="tab" aria-controls="pills-profile"
											   aria-selected="false">Type it in</a>
										</li>
										<li class="nav-item">
											<a class="nav-link hover__ltr" id="pills-upload-tab" data-toggle="pill"
											   href="#pills-upload" role="tab" aria-controls="pills-contact"
											   aria-selected="false">Upload image</a>
										</li>
										<li class="nav-item">
											<a class="nav-link hover__ltr"
											   id="pills-smartphone-tab"
											   data-toggle="pill"
											   href="#pills-smartphone"
											   role="tab"
											   aria-controls="pills-contact"
											   aria-selected="false"
											   data-tab="continue">Use smartphone</a>
										</li>
										<li class="nav-item">
											<button title="Saved initials"
													class="nav-link hover__ltr"
													role="button"
													aria-selected="false">Saved initials
											</button>
										</li>
									</ul>
								</div>
							</div>
							<div class=" sign-placeholder mt-0 mt-md-3" data-role="sign-placeholder">
								<button title="Click to sign"
										class="btn btn-secondary btn-secondary__outline"
										disabled>click to sign</span>
								</button>
							</div>
						</div>

						<!--#SHOW THIS ON MOBILE SCREEN-->
					</div>

				</div>
			</div>
		</div>

		<!-- Modal e-sign  - "hanks for submitting" modal -->
		<div class="modal modal-sign fade" id="modal__e-sign__success" tabindex="-1" role="dialog"
			 aria-labelledby="exampleModalLabel" aria-hidden="true">

			<div class="modal-dialog " role="document">
				<!--SHOW THIS ON DESKTOP SCREEN-->
				<div class="modal-content card-el__hide-on-md">
					<div class="d-flex align-items-center justify-content-between modal-content__header">
						<div class="f-1">
							<div class="modal-sign__brand-wrap ">
								<img src="./images/svgg.svg" class="img-fluid" alt="">
							</div>
						</div>
						<div class="f-1">
							<p class="modal-sign__header text-center">
								E-sign
							</p>
						</div>
						<div class="f-1 modal-sign__close-icon-wrap text-right close close-modal" type=""
							 data-dismiss="modal" aria-label="Close">
							<img src="./images/close.svg" class="img-fluid" alt="">
						</div>
					</div>
					<div class="alert alert-success mt-4">
						<div>
							<span class="alert-icon"><img src="./images/shield.svg" class="img-fluid" alt=""></span>
						</div>
						<p class="alert-title">
							thanks for submitting your document
						</p>
						<p class="alert-text">
							you`ll receive a copy in your inbox shortly
						</p>
					</div>
				</div>
				<!--#SHOW THIS ON DESKTOP SCREEN-->

				<!--SHOW THIS ON MOBILE SCREEN-->
				<div class="modal-content card-el__show-on-md">
					<div class="modal__add-address__header__fixed">
						<p class="title">
							E-sign
						</p>
						<div class="f-1 modal-sign__close-icon-wrap text-right close close-modal" type="buttons"
							 data-dismiss="modal" aria-label="modalAddAddress">
							<img src="./images/close.svg" class="img-fluid" alt="">
						</div>
					</div>

					<div class="alert-success">
						<div class="row">
							<div class="col-9 m-auto">
								<div class="">
									<span class="alert-icon"><img src="./images/shield.svg" class="img-fluid"
																  alt=""></span>
								</div>
								<p class="alert-title mt-2">
									thanks for submitting your document
								</p>
								<p class="alert-text mt-3">
									you`ll receive a copy in your inbox shortly
								</p>
							</div>
						</div>
					</div>

					<div class="row  flex-column">
						<div class="col-9 mx-auto mt-5 text-center">
							<img src="./images/svgg.svg" class="img-fluid" alt="">
						</div>
						<div class="col-7 mx-auto mt-5 btn-alert-scs">
							<button title="Back to cart" class="btn btn-secondary w-100 close-modal " type="button"
									data-dismiss="modal" aria-label="backToCard" data-role="backToCard">
								back to cart
							</button>
						</div>
					</div>
				</div>
				<!--#SHOW THIS ON MOBILE SCREEN-->
			</div>
		</div>