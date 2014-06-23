<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope=""> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php the_title(); ?> | <?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<?php echo stylesheets(); ?>
</head>
<body <?php body_class(); ?> itemtype="http://schema.org/WebPage">
<header itemscope itemtype="http://schema.org/WPHeader">
	<?php echo header_logo(); ?>
	<?php echo show_phone(); ?>
	<?php echo show_fax(); ?>
	<?php echo show_tollfree(); ?>
	<?php echo header_socials(); ?>
	<?php echo main_menu(); ?>
</header>