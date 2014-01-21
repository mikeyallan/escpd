<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]--> 
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]--> 
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]--> 
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]--> 
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
	<head>
		<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico"/>
		<?php wp_head(); ?>

		<script>
		    var cutsTheMustard = function() {
	        	if (document.querySelectorAll && window.addEventListener) {
	            	return true;
	        	} else {
	            	return false;
	        	}
    		};
    		if (cutsTheMustard()===true) {
        		document.documentElement.className += ' cutsthemustard';
    		}
 		</script>
		
	</head>
	<body <?php body_class(); ?>>
