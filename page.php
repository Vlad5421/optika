<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EYELINE
 */

get_header();
do_action( 'optika_woocommerce_breadcrumb' );

?>

<main id="primary from_page" class="site-main fixed-container">
	<div id="main-wrapp_page" class="main_wrapper">

		<?php
		while (have_posts()) :
			the_post();

			get_template_part('template-parts/content', 'page');

			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		<div class="widget-categoty">
			<?php dynamic_sidebar('Widget_catalog') ?>
		</div>
	</div>
</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
