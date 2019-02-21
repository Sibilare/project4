
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

        <?php $journal_posts = inhabitent_get_latest_posts(); ?>

        <?php foreach($journal_posts as $post) : setup_postdata($post); ?>

        <div> 
            <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail('full');?>
            <?php endif; ?>
            <a href="<?php the_permalink(); ?>">Read this post</a>
        </div>
		<?php endforeach; ?>
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>