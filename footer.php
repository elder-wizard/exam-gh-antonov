<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package geek_hub_exam
 */

?>

</div><!-- #content -->

<div class="contact-info">

</div>

<footer id="colophon" class="site-footer" role="contentinfo">

    <?php
    $pst = new WP_Query('cat=6'); ?>
    <?php while ($pst->have_posts()) : $pst->the_post(); ?>

        <?php the_title(); ?>
        <?php the_content(); ?>

    <?php endwhile; ?>

    <form name="contactform" method="post" action="send_form_email.php">

        <input type="text" placeholder="Name" name="first_name">

        <input type="text" placeholder="E-Mail" name="email">

        <textarea placeholder="Massage...." name="comments"></textarea>

        <input type="submit" value="Submit">

    </form>

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d332339.38760367513!2d31.916938597582572!3d49.401313130597195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d14b866064977f%3A0xf8dce723a9cbb5d8!2z0KfQtdGA0LrQsNGB0YHRiywg0KfQtdGA0LrQsNGB0YHQutCw0Y8g0L7QsdC70LDRgdGC0Yw!5e0!3m2!1sru!2sua!4v1491650418717"
        width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    <div class="site-info">

        <a href="<?php echo esc_url(__('https://wordpress.org/', 'geek_hub_exam')); ?>"><?php printf(esc_html__('Proudly powered by %s', 'geek_hub_exam'), 'WordPress'); ?></a>
        <span class="sep"> | </span>
        <?php printf(esc_html__('Theme: %1$s by %2$s.', 'geek_hub_exam'), 'geek_hub_exam', '<a href="https://automattic.com/" rel="designer">Antonov Vladislav</a>'); ?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
