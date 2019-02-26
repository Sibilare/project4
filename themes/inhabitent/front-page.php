
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

<section id ="inhab-journal">

<h2 class="fp-inhab-journal">Inhabitent Journal</h2>

<div class="latest-entries">

<?php $journal_posts = inhabitent_get_latest_posts();?>

<?php foreach ($journal_posts as $post): setup_postdata($post); ?>

<?php if (has_post_thumbnail()): ?>

<div class="thumbnail">

					 <?php the_post_thumbnail('large');?>

</div>

				 <?php endif; ?>

		<?php endforeach; ?>

        
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>