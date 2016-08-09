<?php

function site_resources() {
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('featherlight', "//cdn.rawgit.com/noelboss/featherlight/1.4.1/release/featherlight.min.js");
	wp_enqueue_script('featherlight-gallery', "//cdn.rawgit.com/noelboss/featherlight/1.4.1/release/featherlight.gallery.min.js");

	wp_enqueue_style('bootstrap', get_template_directory_uri()."/bootstrap/css/bootstrap.css");
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('featherlight', "//cdn.rawgit.com/noelboss/featherlight/1.4.1/release/featherlight.min.css");
	wp_enqueue_style('featherlight-gallery', "//cdn.rawgit.com/noelboss/featherlight/1.4.1/release/featherlight.gallery.min.css");



}

add_action('wp_enqueue_scripts', 'site_resources');

?>