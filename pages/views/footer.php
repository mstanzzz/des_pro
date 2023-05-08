<?php
if(!isset($cats_1) && !isset($cats_1)){
	$cats_1=array();
	$cats_2=array();
	$db = $dbCustom->getDbConnect(CART_N_DATABASE);
	$sql = "SELECT cat_id, name, click_count, profile_cat_id
			FROM category
			WHERE active > 0
			AND profile_account_id = '".$_SESSION['profile_account_id']."'
			ORDER BY click_count DESC LIMIT 50";		
	$result = $dbCustom->getResult($db,$sql);		
	$sr_n=0;
	$ac_n=0;
	while($row = $result->fetch_object()){
		if($cat->cat_has_showroom_items($dbCustom, $row->cat_id)>0 && $sr_n<6){
			$cats_1[$sr_n]['click_count'] = number_format($row->click_count);
			$cats_1[$sr_n]['name'] = stripSlashes($row->name);
			$cats_1[$sr_n]['file_name'] = $cat->getCatPicFn($dbCustom,$row->cat_id);
			$n = $nav->getUrlText($row->name);
			$url_str = SITEROOT."showroom-category-".$row->profile_cat_id."/".$n.".html";		
			$cats_1[$sr_n]['url']=$url_str;
			$sr_n++;
		}
		if($cat->cat_has_cart_items($dbCustom, $row->cat_id)>0 && $ac_n<6){
			$cats_2[$ac_n]['click_count'] = number_format($row->click_count);
			$cats_2[$ac_n]['name'] = stripSlashes($row->name);
			$cats_2[$ac_n]['file_name'] = $cat->getCatPicFn($dbCustom,$row->cat_id);
			$n = $nav->getUrlText($row->name);
			$url_str = SITEROOT."category-".$row->profile_cat_id."/".$n.".html";
			$cats_2[$ac_n]['url']=$url_str;

			$ac_n++;
		}
		if($sr_n>5 && $ac_n>5){
			break;
		}
	}
}

?>


<footer class="clearfix">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row first-footer">
						<div class="col-12 col-lg-6 col-xl-3">
							<div class="first-footer__wrapper">
								<nav class="first-footer__wrapper--border js-show-all-footer-menu">
									<button title="Custom closets" class="first-footer__wrapper-button js-show-mobile-footer-menu-btn">
										<img src="<?php echo SITEROOT; ?>images/Closeticonfoot.svg" alt="" class="first-footer__img">
										<p class="first-footer__heading">Custom closets</p>
									</button>
									<ul class="first-footer__navivation">
										<?php
										foreach($cats_1 as $key => $val) {
											if ($key < 4) {
echo "<li><a href='".$val['url']."' title='".$val['name']."' title='".$val['name']."'>".$val['name']."</a></li>";
											} else {
echo "<li class='hidden-footer-menu-item'><a href='".$val['url']."' title='".$val['name']."'>".$val['name']."</a></li>";
											}
										}
echo "<li><button class='first-footer__nav-show-button js-show-all-footer-menu-btn'>See more...</button></li>";
										?>
									</ul>
									<button title="Close" class="first-footer__nav-hide-button js-hide-all-footer-menu-btn">
										<?php echo $icon_btn_fill; ?>
									</button>
								</nav>
							</div>
						</div>
						
						
						<div class="col-12 col-lg-6 col-xl-3">
							<div class="first-footer__wrapper">
								<nav class="first-footer__wrapper--border js-show-all-footer-menu">
									<button title="Shop" class="first-footer__wrapper-button js-show-mobile-footer-menu-btn">
										<img src="<?php echo SITEROOT; ?>images/shopiconfoot.svg" alt="" class="first-footer__img">
										<p class="first-footer__heading">Shop</p>
									</button>
									<ul class="first-footer__navivation">
										<?php
										foreach($cats_2 as $key => $val) {
											if ($key < 4) {
echo "<li><a href='".$val['url']."' title='".$val['name']."' title='".$val['name']."'>".$val['name']."</a></li>";
											} else {
echo "<li class='hidden-footer-menu-item'><a href='".$val['url']."' title='".$val['name']."'>".$val['name']."</a></li>";
											}
										}
echo "<li><button class='first-footer__nav-show-button js-show-all-footer-menu-btn'>See more...</button></li>";
										?>
									</ul>
									<button title="Close" class="first-footer__nav-hide-button js-hide-all-footer-menu-btn">
										<?php echo $icon_btn_fill; ?>
									</button>
								</nav>
							</div>
						</div>
						<div class="col-12 col-lg-6 col-xl-3">
							<div class="first-footer__wrapper">
								<nav class="first-footer__wrapper--border">

									<button title="Support" class="first-footer__wrapper-button js-show-mobile-footer-menu-btn">
										<img src="<?php echo SITEROOT; ?>images/Phoneiconfoot.svg" alt="" class="first-footer__img">
										<p class="first-footer__heading">Support</p>
									</button>
									<ul class="first-footer__navivation">
<li><a href="<?php echo SITEROOT; ?>faq.html" title="Frequently Asked Questions">Frequently Asked Questions</a></li>
<li><a href="<?php echo SITEROOT; ?>support.html" title="Support">Support</a></li>
<li><a href="<?php echo SITEROOT; ?>privacy-statement.html" title="Privacy Statement">Privacy Statement</a></li>
<li class='hidden-footer-menu-item'><a href="<?php echo SITEROOT; ?>pre-assembly.html" title="Pre Assembly">Pre Assembly</a></li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-12 col-lg-6 col-xl-3">
							<div class="first-footer__wrapper">
								<nav class="first-footer__wrapper--border js-show-all-footer-menu">
									<button title="Company" class="first-footer__wrapper-button js-show-mobile-footer-menu-btn">
										<img src="<?php echo SITEROOT; ?>images/companyIcon1.svg" alt="" class="first-footer__img">
										<p class="first-footer__heading">Company</p>
									</button>
									<ul class="first-footer__navivation">
<li><a href="<?php echo SITEROOT; ?>about-us.html" title="About Closets To Go">About Us</a></li>

<li><a href="<?php echo SITEROOT; ?>processing.html" title="Closet Order Process">Closet Order Process</a></li>
<li><a href="<?php echo SITEROOT; ?>services.html" title="Services">Services</a></li>
<li><a href="<?php echo SITEROOT; ?>for-the-pros.html" title="For the Pros">For the Pro's</a></li>
<li class='hidden-footer-menu-item'><a href="<?php echo SITEROOT; ?>privacy-statement.html" title="Privacy Statement">Privacy Statement</a></li>
<li class='hidden-footer-menu-item'><a href="<?php echo SITEROOT; ?>careers.html" title="Careers">Careers</a></li>
<li class='hidden-footer-menu-item'><a href="<?php echo SITEROOT; ?>policies.html" title="Careers">Policies</a></li>
<li class='hidden-footer-menu-item'><a href="<?php echo SITEROOT; ?>faqs.html" title="Careers">FAQ</a></li>
<li class='hidden-footer-menu-item'><a href="<?php echo SITEROOT; ?>support.html" title="Careers">Support</a></li>	

<li><button class="first-footer__nav-show-button js-show-all-footer-menu-btn">See more...</button></li>
									
														
									
									
									</ul>
									<button title="Close" class="first-footer__nav-hide-button js-hide-all-footer-menu-btn">
										<?php echo $icon_btn_fill; ?>
									</button>
								</nav>
							</div>
						</div>
					</div>
					<div class="row second-footer">
						<div class="col-12">
							<div class="second-footer__wrapper">
								<p class="second-footer__heading" style="font-family: 'Futurica-BS-light', sans-serif !important;">DESIGN YOUR CUSTOM CLOSET</p>
								<nav class="second-footer__navigation">
<a href="<?php echo SITEROOT; ?>request-design.html" title="Email A Closet Design">Email A Closet Design</a>
<a href="<?php echo SITEROOT; ?>free-in-home-consults.html" title="Free Local In-Home Consultation">Free Local In-Home Consultation</a>
								</nav>
							</div>
						</div>
					</div>
					<div class="row third-footer">
						<div class="col-12 third-footer__wrapper">
							<p class="third-footer__heading" style="font-family: 'Futurica-BS-light', sans-serif !important;">WE PROUDLY ACCEPT</p>
							<div class="third-footer__cards">
								<img src="<?php echo SITEROOT; ?>images/footer-visa.png" alt="visa card image">
								<img src="<?php echo SITEROOT; ?>images/footer-masterCard.png" alt="master card image">
								<img src="<?php echo SITEROOT; ?>images/footer-paypal.png" alt="paypal image">
								<img src="<?php echo SITEROOT; ?>images/footer-american-express.png" alt="american express image">
								<img src="<?php echo SITEROOT; ?>images/optimized-enerbankusalogo.jpg" alt="enerbankusa card image" class="footer-enerbankusa-logo">
							</div>
							<p class="third-footer__first-text js-show-text">
									For nearly four decades, we’ve been perfecting the closet organization industry with our unique custom DIY closet systems and online
									closet design process. We offer high end custom closets that we manufacture in our own closet factory ensuring top quality control. 
									We source all wood materials from the Pacific Northwest with the latest color trends and offer a diverse closet accessory line
									complemented by sophisticated LED lighting packages. Our wide range of closet hardware and colors provide styling that appeals to a
									broad range of personal tastes. We offer ideal closet solutions for the entire home including: walk in closet organizers, custom garage
									systems, home office organization, kids closets, pantry cabinets, custom wine storage, Murphy wall beds and more. Rest assured, whether
									shopping online or at our Oregon Closets To Go location or our California Closets To Go dealer, you can shop with confidence!

							</p>

							<div class="mobile-show">
								<button title="Discover all" data-readAll="Discover all" data-readLess="Discover less" class="third-footer__mobile-button js-btn-view-all-text">
									<span>Discover all</span>
								</button>
							</div>

							<div class="third-footer__social-media">
								<a href="https://www.facebook.com/ClosetsToGo" title="Facebook"><img src="<?php echo SITEROOT; ?>images/facebook.svg" alt="Facebook"></a>
								<a href="https://twitter.com/ClosetsToGo" title="Twitter"><img src="<?php echo SITEROOT; ?>images/twitter.svg" alt="Twitter"></a>
								<a href="https://sa.linkedin.com/company/closets-to-go" title="LinkedIn"><img src="<?php echo SITEROOT; ?>images/linkedin.svg" alt="LinkedIn"></a>
								<a href="https://www.houzz.com/professionals/custom-closet-designer/closets-to-go-pfvwus-pf~1702888429?" title="Houzz"><img src="<?php echo SITEROOT; ?>images/iconfinder_houzz.png" alt="Houzz"></a>
								<a href="https://www.pinterest.com/closetstogo/" title="Pinterest"><img src="<?php echo SITEROOT; ?>images/logotype.svg" alt="Pinterest"></a>
								<a href="https://www.instagram.com/closetstogo/?hl=en" title="Instagram"><img src="<?php echo SITEROOT; ?>images/brands-and-logotypes.svg" alt="Instagram"></a>
								<a href="https://www.youtube.com/channel/UC1J0JQS6SFqzoKUhGCB4ujQ" title="Youtube"><img src="<?php echo SITEROOT; ?>images/brands-and-logotypes(1).svg" alt="Youtube"></a>
							</div>

							<p class="third-footer__second-text">Copyright © 2023 All Rights Reserved.</p>

							<div class="mobile-show">
								<a href="#" title="Back to Top" class="third-footer__mobile-button js-to-top">Top</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</footer>