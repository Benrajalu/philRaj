<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Custom Theme
 * @since Custom Theme 2.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">


		<nav id="mainNav">
		    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/logo.png" alt="Philippe Rajalu consultant organisation, ressources humaines, gestion" /></a>
	        <?php 
	        	$menuArgs = array( 'menu_id' => 'mainMenu', 'container' => '' );
	        	wp_nav_menu( $menuArgs ); 
	        ?> 
		    <button id="toggleMenu" title="Menu"><i></i></button>
		</nav>

		<div id="contents">
