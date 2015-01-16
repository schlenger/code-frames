<!DOCTYPE HTML>
<html>
	<head>
		<title>Site Name <?php if(wp_title()) {echo " - "; wp_title();	} ?></title>
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
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0; user-scalable=no">

		<?php wp_head(); ?>
	</head>

	<body>

	<div id="wrapper">
		<header>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" id="logo">
			<?php get_sidebar(); ?>
		</header>