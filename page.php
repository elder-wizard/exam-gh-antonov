<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package geek_hub_exam
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header>
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header>

            <?php if (is_front_page())
			get_template_part( 'template-parts/sections', 'none' );
			?>


        </main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
