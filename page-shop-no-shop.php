<?php
/*
Template Name:  Не магазин Eyeline
Template Post Type: page
*/

get_header();
do_action( 'optika_woocommerce_breadcrumb' );
?>
        
<section class="main_page fixed-container">
    <img src="<?php echo get_fields()['img_comp'] ?>" class="sun_img display-from-pc" alt="солнцезащитные очки">
    <img src="<?php echo get_fields()["img_mobile"] ?>" class="sun_img display-from-mob" alt="солнцезащитные очки">
    <h1 class="section_title"><?php echo esc_html( get_the_title() ); ?></h1>

    <div class="column">
    <?php the_content(); ?>
    </div>
    <p class="sun_text_strong"><?php echo get_fields()["message_no_shop"] ?>
    Коллекция регулярно обновляется, а также проводятся распродажи прошлогодних моделей. Об акциях уточняйте у <a href="tel:+79891973488" class="sun_text_strong_link">консультантов</a>.</p>
    
    <ul class="linz_list flex">
    <?php
        $cat = optika_post_cats($post);
        $posts = get_posts(array(
            'category_name' => $cat,
            'orderby'     => 'date',
            'order'       => 'DESC',
            'numberposts' => 1150,
        ));
        $frames_attr = array(
            'class' => " frames-section__img ",
            'alt' => "frames-section",
        );
    ?>
    <?php foreach ($posts as $post) : ?>
        <li class="sun_item">
            
                    <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url() ?>" class="linz_item_img" alt="<?= get_the_title() ?>"></a>
                    <h3 class="sun_item_title"><?php the_title(); ?><br><br>от <?php the_field('cena'); ?> руб.</h3><br>
                    <?php //the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="linz_item_order" aria-label="заказать">читать дальше...</a>
        </li>

    <?php endforeach; ?>

    </ul>
</section>
<?php get_footer(); ?>
