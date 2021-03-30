<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package EYELINE
 */
get_header();
do_action( 'optika_woocommerce_breadcrumb' );
?>
<section class="main_page fixed-container">
    <h1 class="section_title"><?php echo esc_html( get_the_title() ); ?></h1>



<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content-card-no-card', get_post_type() );

				// the_post_navigation(
				// 	array(
				// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'eyeline' ) . '</span> <span class="nav-title">%title</span>',
				// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'eyeline' ) . '</span> <span class="nav-title">%title</span>',
				// 	)
				// );


			endwhile; // End of the loop.
			?>
</section>

<?php
get_footer();
