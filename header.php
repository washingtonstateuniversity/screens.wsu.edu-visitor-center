<!doctype html>

<html>

<head>
	<meta charset="utf-8">

	<!-- TITLE -->
	<title><?php wp_title( '' ); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<!-- STYLES -->
	<link href="<?php echo get_template_directory_uri(); ?>/repo/styles/skeleton.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/repo/pika/webfonts/ss-pika.css" rel="stylesheet" />

	<!-- SCRIPTS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/repo/js/video/video.js"></script>
	<link href="<?php echo get_template_directory_uri(); ?>/repo/js/video/video-js.css" rel="stylesheet">
	<script src="<?php echo get_template_directory_uri(); ?>/repo/js/scripts.js"></script>

	<!-- OUTPUT -->
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
