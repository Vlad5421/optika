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

    <div class="entry-content">
        <?php the_content(); ?>
    </div><!-- .entry-content -->
    <span class="no-product__price">от <span class="no-product__price num"><?php the_field('cena') ?></span> руб. <br></span>

</article><!-- #post-<?php the_ID(); ?> -->
<script type="text/javascript">
    {
        const optikaRemPrice = () => {
            let text_post = document.getElementsByClassName("no-product__price")[0];
            if (document.getElementsByClassName("frames__text-new")[0] === undefined){
                if (document.getElementsByClassName("sunglasses__text-new")[0] === undefined){
                    document.getElementsByClassName("sunglasses__slider-new")[1].prepend(text_post);
                }
                else
                    document.getElementsByClassName("sunglasses__text-new")[0].prepend(text_post);
            }
            else
                document.getElementsByClassName("frames__text-new")[0].prepend(text_post);
        }
        optikaRemPrice();
    }
</script>