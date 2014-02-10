	
	<footer>
		<nav id="global-nav" role="navigation" class="collapsable collapsed">
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		</nav>
		<div id="global-search" role="search" class="collapsable collapsed"><?php get_search_form(); ?></div>
		<div class="social">
			<h2>Follow us</h2>
			<a class="social-links" href="http://twitter.com/escpd"><img src="http://escpd.com/wp-content/themes/escpd-master/images/twitter.svg" onerror="this.onerror=null; this.src='http://escpd.com/wp-content/themes/escpd-master/images/twitter.png'" alt="escaped on twitter"></a>
			<a class="social-links" href="http://facebook.com/escpd"><img src="http://escpd.com/wp-content/themes/escpd-master/images/facebook.svg" onerror="this.onerror=null; this.src='http://escpd.com/wp-content/themes/escpd-master/images/facebook.png'" alt="escaped on facebook"></a>		
			<a class="social-links" href="http://pinterest.com/escpd"><img src="http://escpd.com/wp-content/themes/escpd-master/images/pinterest.svg" onerror="this.onerror=null; this.src='http://escpd.com/wp-content/themes/escpd-master/images/pinterest.png'" alt="escaped on pinterest"></a>
		</div>	
		<a href="mailto:info@escpd.com">Tell us about new gear</a>
		
		<div id="footer-links">

				<a href="http://escpd.com/about/">about</a>
				<a href="http://escpd.com/newsletter-sign-u/">newsletter</a>
				<a href="http://escpd.com/contact/">contact</a>
				<a href="https://twitter.com/escpd">twitter</a>
				<a href="http://escpd.com/privacy/">privacy</a>
				<a href="http://escpd.com/terms/">Terms</a>
				<p>&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
		</div>		
		
	</footer>
