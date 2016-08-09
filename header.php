<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
    	<meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
    	<title>
        	<?php bloginfo('name'); ?>
        </title>
        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>

<div class="container-fluid" id="main-container">
<div class="row">
<div id="header">
	<header class="site-header">
        <div><img class="header-image" src="<?php echo get_template_directory_uri().'/top2.png' ?>" title="hej">
        <div id="menu-collapse"><span class="glyphicon glyphicon-menu-hamburger"></span></div></div>
        <div id="menu">
            <nav>
        	   <?php wp_nav_menu(); ?>
            </nav>
        </div>
    </header>
</div>
    <script>
        jQuery("#menu-collapse").click(function(){
            jQuery( "#menu" ).toggle(300, function() {
    // Animation complete.
  });
        }
        );
    </script>
    