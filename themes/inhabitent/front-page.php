<?php
/**
* The template for displaying all pages.
*
* @package Inhabitent_Theme
*/
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <div class='home-hero-image'> </div>

            <section id="shop-stuf">
                <h2 class="fp-shop-stuff">
                </h2>
                <div class="fp-products">
                </div>
            </section>

        <section id="inhab-journal">

            <h2 class="fp-inhab-journal">Inhabitent Journal</h2>

            <div class="latest-entries">
             <?php $args = array ( 'post_type' => 'post', 'order' => 'asc', 'posts_per_page' => 3);
                 $journal_posts = inhabitent_get_latest_posts(); ?>

                <?php foreach ($journal_posts as $post) : setup_postdata($post); ?>

                <?php if (has_post_thumbnail()) : ?>
            </div>

            <div class="thumbnail">

                <?php the_post_thumbnail('large'); ?>

                <?php endif; ?>

                <?php endforeach; ?>

                <section id="fp-adventures">
                <h1 class="fp-latestadv">Latest Adventure</h1>
                

                </section>

    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?> 