<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        
        <div class="about-posts">
        
        <?php echo cfs()->get(about); ?>
         <?php while (have_posts()) : the_post(); ?>
         <?php get_template_part('template-parts/content', 'page'); ?>
        <?php endwhile; ?>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?> 