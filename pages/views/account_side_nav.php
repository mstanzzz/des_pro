			<nav class="account-block__navigation--navigation">
			<ul class="account-nav">
			<li class="mobile-show">
			<button title="Account navigation" class="account-nav__button js-hide-account-mobile-menu">
			<?php echo $icon_btn_fill; ?>
			</button>
			</li>
			<li class="mobile-show">
			
			<a href="<?php echo SITEROOT."login.html"; ?>" title="Login" class="account-nav__link account-mobile-menu-visible js-mobile-account-login">
			login
			</a>
			</li>
			<li class="mobile-show">
			<a href="<?php echo SITEROOT."login.html"; ?>" title="Register" class="account-nav__link account-mobile-menu-visible">
			Register
			</a>
			</li>
			<li>
			<a href="<?php echo SITEROOT."account.html"; ?>" title="Dashboard" 
			class="<?php if($acc_page=="account") echo "active"; ?> account-nav__link account-menu-hidden">
			<?php echo $icon_dashboard; ?>
			Dashboard
			</a>
			</li>
			<li>
			<a href="<?php echo SITEROOT."account-settings.html"; ?>" title="Account settings" 
			class="<?php if($acc_page=="settings") echo "active"; ?> account-nav__link account-menu-hidden">
			<?php echo $icon_settings; ?>
			Account settings
			</a>
			</li>
			<li>
			<a href="<?php echo SITEROOT."request-design.html"; ?>" title="Start a new design" 
			class="account-nav__link account-menu-hidden svg-stroke">
			<?php echo $icon_rect; ?>													
			Start a new design
			</a>
			</li>
			<li>
			<a href="<?php echo SITEROOT."account-orders.html"; ?>" title="My orders" 
			class="<?php if($acc_page=="orders") echo "active"; ?> account-nav__link account-menu-hidden svg-stroke">
			<?php echo $icon_orders; ?>
			My orders
			</a>
			</li>
			<li>
			<a href="<?php echo SITEROOT."account-payments.html"; ?>" title="Payment settings" 
			class="<?php if($acc_page=="payment") echo "active"; ?> account-nav__link account-menu-hidden">
			<?php echo $icon_wallet; ?>
			Payment settings
			</a>
			</li>
			<li class="mobile-show">
			<a href="<?php echo SITEROOT."account-idea-folder.html"; ?>" title="My Inspirations" 
			class="<?php if($acc_page=="idea") echo "active"; ?> account-nav__link account-menu-hidden">My Inspirations</a>
			</li>
			
			<li class="mobile-show">
			<a href="<?php  echo SITEROOT."account-designs.html"; ?>" title="My designs" 
			class="<?php if($acc_page=="designs") echo "active"; ?> account-nav__link account-menu-hidden">My designs</a>
			</li>

			<li>
			<a onClick="submit_sign_out_form();" href="#" title="Sign out" class="account-nav__link svg-stroke account-menu-hidden js-mobile-account-logout">
			<?php echo $icon_signout; ?>
			Sign out
			</a>
			</li>
			</ul>
			</nav>
