<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EYELINE
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
        if ( is_singular() ) :
            the_title( '<h1 class="entry-title">', '</h1>' );
        else :
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        endif;

        if ( 'post' === get_post_type() ) :
            ?>
            <div class="entry-meta">
                <?php
                eyeline_posted_on();
                eyeline_posted_by();
                ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->
    <div class="new-content__wrap">
        <?php eyeline_post_thumbnail(); ?>
        <div class="post-text-content">
            <?php
            the_content(
                sprintf(
                    wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'eyeline' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post( get_the_title() )
                )
            );
            ?>
        </div><!-- .entry-content -->
    </div>
    <script>
        {
            if (document.querySelector('.post-text-content').clientHeight < document.querySelector('.attachment-post-thumbnail').clientHeight) {
                document.querySelector('.post-text-content').style.height = document.querySelector('.attachment-post-thumbnail').clientHeight + 10 + "px";
            }
        }
    </script>
</article><!-- #post-<?php the_ID(); ?> -->
<?php
    wp_link_pages(
        array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'eyeline' ),
            'after'  => '</div>',
        )
    );
?>
