<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package projectsoul
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'projectsoul' ); ?></a>
	
	<?php if (is_page('home')) : ?>
		<div class="video-background fullscreen">
			<div class="video">
				<div class="wrapper">
					<!-- <iframe src="https://player.vimeo.com/video/239024637?autoplay=1&loop=1&title=0&byline=0&portrait=0" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->
					</div>
					</div>	
		  <!-- <iframe src="https://player.vimeo.com/video/239024637?autoplay=1&loop=1&title=0&byline=0&portrait=0" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->
			<!-- <video autoplay src="<?php echo get_stylesheet_directory_uri(); ?>/image/KIMSATO_DANCE_2_INSTA.mp4"></video> -->
			<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/maxresdefault.jpg"/> -->
		</div>
	<?php endif; ?>

	<header id="masthead" class="site-header">
		
		

		<nav id="site-navigation" class="main-navigation">
			
			<div class="desktop-animation">
					<object id="svg" type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri(); ?>/image/nav.svg">Your browser does not support SVGs</object>
			</div>

			<div class="header-image-desktop">
			    <?php $about_page = get_page_by_title( 'about us');?>
					<img src="<?php the_field('about-image',$about_page); ?>"/>
			</div>
				
			<div class="header-container">
					<?php $about_page = get_page_by_title( 'about us');?>
					<div class="heade-image"><img src="<?php the_field('about-image',$about_page); ?>"/></div>
					<div class="mobile-header"><img width="300" src="<?php echo get_stylesheet_directory_uri(); ?>/image/PSP_logo-mobile-08.svg" width="65%" height="80"></div>
					
					<span id="hamburger" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
			</div>
		  	

			<div id="myNav" class="overlay">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<div class="overlay-content">
					
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>
				</div>	
		  </div>		
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
