<?php
get_header();
do_action( 'optika_woocommerce_breadcrumb' );
?>
    <div class="news-wrapper-page fixed-container">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php the_content(); ?>

        <section class="news-section news-section__body">
                <?php
                $posts = get_posts(array(
                    'category_name' => 'news',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'numberposts' => 50,
                ));
                $news_attr = array(
                    'class' => " news-section__img ",
                    'alt' => "news-section",
                );
                foreach ($posts as $post) {
                    ?>
                    <div href="<?php the_permalink(); ?>" class="news-section__item">
                        <a href="<?php the_permalink(); ?>" class="news-section__image">
                            <?php the_post_thumbnail( 'full', $news_attr ); ?>
                        </a>
                        <!-- <a href="<?php //the_permalink(); ?>" class="news-section__image">
                            <?php

                            ?>
                            <img src="<?php //the_field('photo_dop'); ?>" alt="<?php //the_title(); ?>" class="news-section__img wp-post-image">
                        </a> -->
                        <div class="news-section__text-wrap">
                            <h3 class="news-section__title"><?php the_title(); ?></h3>
                            <div class="news-section__text ">
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>" class="news-section__link">Читать дальше ></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
        </section>

    </div>
<?php get_footer(); ?>