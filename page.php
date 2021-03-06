<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package easy-WebDev
 */

get_header(); ?>

<?php $featured = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?>
<?php $featured = $featured[0]; ?>

<div class="featured page" style="background-image:url(<?php echo $featured ?>);">
    <div class="pattern"></div>
    <div class="content">
      <div class="container">
         <h1><?php echo get_post_meta( get_the_ID(), '_descripciones_second_title', true ); ?></h1>
         <p><?php echo get_post_meta( get_the_ID(), '_descripciones_description', true ); ?></p>
     </div>
    </div>
</div>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

    <h2><?php echo get_post_meta( get_the_ID(), '_descripciones_first_title', true ); ?></h2>


		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
