<?php

add_theme_support( 'post-formats', array( 'aside', 'gallery', 'video', 'quote', 'link', 'image' ) );

add_action( 'wp_enqueue_scripts', 'screens_vc_enqueue_scripts' );
function screens_vc_enqueue_scripts() {
	wp_enqueue_style( 'screen-skeleton', get_template_directory_uri() . '/repo/styles/skeleton.css' );
	wp_enqueue_style( 'screen-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'screen-pika', get_template_directory_uri() . '/repo/pika/webfonts/ss-pika.css' );
	wp_enqueue_style( 'video-js', 'https://vjs.zencdn.net/5.8/video-js.min.css' );

	wp_enqueue_script( 'video-js', 'https://vjs.zencdn.net/5.8/video.min.js', array( 'jquery', 'jquery-ui-core' ), false, false );
	wp_enqueue_script( 'screens-js', get_template_directory_uri() . '/repo/js/scripts.min.js', array( 'video-js' ), false, true );
}
