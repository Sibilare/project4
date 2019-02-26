<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <h1>About</h1>
        <img src="<?php bloginfo('template_url'); ?>images/about-hero__1550189866_207.81.181.91.jpg" alt="broken link">

		<?php echo cfs() -> get(about); ?>
        <?php while ( have_posts () ) : the_post(); ?>
        <?php get_template_part('template-parts/content', 'page'); ?>
        <?php endwhile; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?> 