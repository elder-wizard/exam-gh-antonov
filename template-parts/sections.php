<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package geek_hub_exam
 */

?>

<div class="homepage-sections">
    <section class="about">
        <?php
        $hm = new WP_Query('cat=8&orderby=date&posts_per_page=1'); ?>
        <?php while ($hm->have_posts()) :
        $hm->the_post(); ?>
        <div>
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
            <?php endwhile; ?>
        </div>
    </section>
    <section class="welcome">
        <?php
        $hm = new WP_Query('cat=9&orderby=date&posts_per_page=1'); ?>
        <?php while ($hm->have_posts()) :
        $hm->the_post(); ?>
        <div>
            <?php the_content(); ?>
            <?php endwhile; ?>
        </div>
    </section>
    <section class="service clearfix">
        <div class="title"></div>
        <h2>We are Offering....</h2>

        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's
            standard dummy text ever since the 1500s</p>

        <?php
        $srvc = new WP_Query('cat=7&orderby=date&posts_per_page=3'); ?>
        <ul>
            <?php while ($srvc->have_posts()) : $srvc->the_post(); ?>
                <li>
                    <?php the_content(); ?>
                </li>
            <?php endwhile; ?>
        </ul>

    </section>
    <section class="portfolio">
        <h2>Some of latest Work...</h2>

        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's
            standard dummy text ever since the 1500s</p>

    </section>
    <div class="clients">
        <h2>Featured Clients</h2>
        <?php
        $clnts = new WP_Query('cat=10&orderby=date&posts_per_page=1'); ?>
        <ul>
            <?php while ($clnts->have_posts()) : $clnts->the_post(); ?>
                <li>
                    <?php the_content(); ?>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>

</div>