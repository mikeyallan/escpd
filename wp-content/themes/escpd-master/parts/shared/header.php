<div id="wrapper">
	<header>
		<div id="branding">
			<div id="site-title">
				<a href="http://escpd.com/" title="Escaped" rel="home"><img src="http://escpd.com/wp-content/themes/escpd-master/images/escpd-logo.svg" onerror="this.onerror=null; this.src='http://escpd.com/wp-content/themes/escpd-master/images/escpd-logo.png'" alt="Escaped Logo"></a>
			</div>
		</div>
		<div id="header-sub">
			<p id="site-description"><?php bloginfo( 'description' ) ?></p>
			<div id="search-bar"><?php get_search_form(); ?></div>
		</div>	
		<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		</nav>
	</header>
