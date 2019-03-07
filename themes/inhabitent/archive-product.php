<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div class="shop_stuff">
    <h1>Shop Stuff</h1>
    <ul class="product-types"></ul>
    <a>
        <li>Do</li>
    </a>
    <a>
        <li>Eat</li>
    </a>
    <a>
        <li>Sleep</li>
    </a>
    <a>
        <li>Wear</li>
    </a>
    </ul>
</div>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if (have_posts()) : ?>

        <header class="page-header">
            <?php
			the_archive_title('<h1 class="page-title">', '</h1>');
			the_archive_description('<div class="taxonomy-description">', '</div>');
			?>
        </header><!-- .page-header -->

        <?php  /* Start the Loop */ ?>
        <?php while (have_posts()) : the_post(); ?>

        <?php
		get_template_part('template-parts/content');
		?>

        <?php endwhile; ?>

        <?php the_posts_navigation(); ?>

        <?php else : ?>

        <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>

        <div class="products">
            <?php 
			$args = array('post_per_page' => 16);
			$product_posts = get_post($args);
			?>

        </div><!-- #primary -->

        <?php get_footer(); ?> 