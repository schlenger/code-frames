<?php
/**
 * The header for our theme
 *
 * @link http://zumschlenker.de
 *
 * @package zumSchlenker
 * @subpackage Demo Page
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
	<head>
		<title><?php if(wp_title()) { wp_title(); echo " - ";	} ?> Site Name</title>
		<meta charset="UTF-8">
		
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<!-- css -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

		<!-- webfonts -->
		<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
		
		<!-- js -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js"></script>

		<!--[if IE]>
	    <script>
	    document.createElement("header");
	    document.createElement("footer");
	    document.createElement("nav");
	    document.createElement("aside");
	    </script>    
	    <![endif]-->

		<!-- mobile stuff -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

	<div id="wrapper">
		<header>
			<a href="<?php get_home_url(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" id="logo"></a>
			<?php get_sidebar(); ?>
		</header>