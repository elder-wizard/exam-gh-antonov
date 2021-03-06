<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package geek_hub_exam
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_enqueue_style( 'my-style' );
	?>

    <?php wp_enqueue_style( 'et-googleFonts' );
    ?>

    <?php wp_enqueue_style('bootstrap');
    ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'geek_hub_exam' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
            <nav id="site-navigation" class="main-navigation container" role="navigation">
                <div class="logo">
                    <?php the_custom_logo(); ?>
                    <?php function theme_prefix_the_custom_logo() {

                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        }

                    } ?>
                </div> <!-- .logo -->
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'geek_hub_exam' ); ?></button>
                <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
            </nav><!-- #site-navigation -->

		</div><!-- .site-branding -->


	</header><!-- #masthead -->

	<div id="content" class="site-content">
