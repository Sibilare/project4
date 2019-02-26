<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()): the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="product-image-wrapper">

					<?php if ( has_post_thumbnail() ) : ?>

						<?php the_post_thumbnail( 'large' ); ?>

					<?php endif; ?>

				</div><!-- .entry-header -->

				<div class="product-image-content">

				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

					<?php the_content(); ?>

					<!-- custom field suite -->

					<h3><?php echo CFS()->get( 'price' ); ?></h3>

				</div><!-- .entry-content -->

        <?php endwhile; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?> 