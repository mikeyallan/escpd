<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Escaped
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />






<!--
eeeeeeeeeee   eeeeeeeeeee   eeeeeeeeeee   eeeeeeeeeee   eeeeeeeeeee   eeeeeeeeeee   eeeeeeeeee    
eeeeeeeeeee   eeeeeeeeeee   eeeeeeeeeee   eeeeeeeeeee   eeeeeeeeeee   eeeeeeeeeee   eeeeeeeeeee   
eeee          eeee          eeee          eeee   eeee   eeee   eeee   eeee          eeeeeeeeeee   
eeee          eeee          eeee          eeee   eeee   eeee   eeee   eeee          eeee   eeee   
eeeeeeeeeee   eeeeeeeeeee   eeee          eeee   eeee   eeee   eeee   eeeeeeeeeee   eeee   eeee   
eeeeeeeeeee   eeeeeeeeeee   eeee          eeeeeeeeeee   eeeeeeeeeee   eeeeeeeeeee   eeee   eeee   
eeee                 eeee   eeee          eeeeeeeeeee   eeeeeeeeeee   eeee          eeee   eeee   
eeee                 eeee   eeee          eeee   eeee   eeee          eeee          eeeeeeeeeee   
eeeeeeeeeee   eeeeeeeeeee   eeeeeeeeeee   eeee   eeee   eeee          eeeeeeeeeee   eeeeeeeeeee   
eeeeeeeeeee   eeeeeeeeeee   eeeeeeeeeee   eeee   eeee   eeee          eeeeeeeeeee   eeeeeeeeee 
-->







<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 * We filter the output of wp_title() a bit -- see
	 * twentyten_filter_wp_title() in functions.php.
	 */
	wp_title( '|', true, 'right' );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="icon" href="http://escpd.com/favicon.ico" type="image/x-icon"> 
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script src="http://gsgd.co.uk/sandbox/jquery/easing/jquery.easing.1.3.js"></script>

<script>function fb_like() {
url=location.href;
title=document.title;
window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(url)+'&t='+encodeURIComponent(title),'sharer','toolbar=0,status=0,width=626,height=436');
return false;}</script>

<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>



</head>

<body >
	<div id="fb-root"></div>

	<div id="site">
	<header id="mainHeader">
		<div class="logo">
			<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="http://escpd.com/wp-content/themes/Escaped/images/escaped_logo.png" alt="escaped_logo" width="419" height="134" /></a>
		</div>
		<h1 class="blog-desc"><?php bloginfo( 'description' ); ?></h1>
		<div id="header-social">
			<ul>
				<li><a class="escpd-new-gear" href="mailto:info@escpd.com" title="tell us about new gear">tell us about new gear</a></li>
				<!-- <li><a href="mailto:info@escpd.com">tell us about new gear</a></li> -->
				<li><a class="escpd-twitter" href="https://twitter.com/escpd" title="follow us on twitter">follow us on twitter</a></li>
				<li><a class="escpd-facebook" href="http://www.facebook.com/share.php?u=URL-TO-SHARE" onclick="return fb_like()" target="_blank">Like us on </a></li>
			</ul>
		</div>
	</header>
	

	<div id="access" role="navigation">
		<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		
	</div><!-- #access -->
	
<!-- <div id="subMenu">
	
	<ul>
		<li><a href="#"> All</a></li>
		<li><a href="#"> Gear</a></li>
		<li><a href="#"> Videos</a></li>
		<li><a href="#"> Tutorials</a></li>
	</ul>		<?php /* wp_nav_menu( array( 'container_class' => 'menu-filter', 'theme_location' => 'secondary' ) ); */ ?>
	
	</div><!-- #subMenu -->
