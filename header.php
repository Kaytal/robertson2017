<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package robertson2017
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
    <script src="https://use.typekit.net/tgl5vqw.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">
        <div class="site-navigation">
            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'robertson2017' ); ?></button>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                ) );
                ?>
            </nav><!-- #site-navigation -->
            <div class="site-branding">
                <div class="site-logo">
                    <img src="<?= get_template_directory_uri() ?>/images/logo.png" alt="yah">
                </div>
                <div class="book-now-stripe">
                    <a href="#booking-link">Book Your Cabin Here <span class="booking-left"><?= get_field('cabins_left_text', $post->ID) ?></span></a>
                </div>
            </div><!-- .site-branding -->
        </div>

        <div class="hero">
            <a href="#booking-link">
                <img src="<?= get_template_directory_uri() ?>/images/hero-image-med.jpg" srcset="<?= get_template_directory_uri() ?>/images/hero-image-med.jpg 1x, <?= get_template_directory_uri() ?>/images/hero-image-high.jpg 2x" alt="Book Now!">
            </a>
        </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
