<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear">

			<nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container">
                <span class="navbar-brand">                   
                   <a href="<?php echo esc_url( home_url( '/' )); ?>">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo.png" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                    </a>    
                </span>              
                <button id="nav-icon3" class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span></span><span></span><span></span><span></span></button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <?php
                wp_nav_menu(array(
                'theme_location'    => 'header-menu',
                'container'       => 'div',
                'container_id'    => 'navbarNavDropdown',
                'container_class' => 'collapse navbar-collapse',
                'menu_id'         => false,
                'menu_class'      => 'ml-auto navbar-nav',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>
								</div>
            </div>
            
         </nav>				
			</header>
			<!-- /header -->
