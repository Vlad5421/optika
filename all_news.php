<?php

get_header();
do_action( 'optika_woocommerce_breadcrumb' );
?>
    <div class="news-wrapper-page fixed-container">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php the_content();

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
        ?>
        <section class="news-section news-section__body">
        <?php for ($i=0; $i < (count($posts) - 1); ) : ?>
            <div class="news-section__item">
                <a href="<?= get_permalink($posts[$i]->ID) ?>" class="news-section__image">
                    <?= get_the_post_thumbnail( $posts[$i]->ID, 'full', $news_attr ) ?>
                </a>
                <div class="news-section__text-wrap">
                    <h3 class="news-section__title"><?= $posts[$i]->post_title ?></h3>
                    <div class="news-section__text ">
                        <?= get_the_excerpt($posts[$i]->ID) ?>
                        <a href="<?= get_permalink($posts[$i]->ID) ?>" class="news-section__link">Читать дальше ></a>
                    </div>
                </div>
                <? $i++ ?>
                <? if (!isset($posts[$i])) break ?>
            </div>
            <div class="news-section__colomn-duble">
                <div class="news-section__item-mini">
                    <a href="<?= get_permalink($posts[$i]->ID) ?>" class="news-section__image">
                        <?= get_the_post_thumbnail( $posts[$i]->ID, 'full', $news_attr ) ?>
                    </a>
                    <div class="news-section__text-wrap">
                        <h3 class="news-section__title"><?= $posts[$i]->post_title ?></h3>
                        <div class="news-section__text ">
                            <?= get_the_excerpt($posts[$i]->ID) ?>
                            <a href="<?= get_permalink($posts[$i]->ID) ?>" class="news-section__link">Читать дальше ></a>
                        </div>
                    </div>
                    <? $i++ ?>
                    <? if (!isset($posts[$i])) break ?>
                </div>
                <div class="news-section__item-mini mb-40">
                    <a href="<?= get_permalink($posts[$i]->ID) ?>" class="news-section__image">
                        <?= get_the_post_thumbnail( $posts[$i]->ID, 'full', $news_attr ) ?>
                    </a>
                    <div class="news-section__text-wrap">
                        <h3 class="news-section__title"><?= $posts[$i]->post_title ?></h3>
                        <div class="news-section__text ">
                            <?= get_the_excerpt($posts[$i]->ID) ?>
                            <a href="<?= get_permalink($posts[$i]->ID) ?>" class="news-section__link">Читать дальше ></a>
                        </div>
                    </div>
                    <? $i++ ?>
                    <? if (!isset($posts[$i])) break ?>
                </div>
            </div>
            <div class="news-section__colomn-duble">
                <div class="news-section__item-mini">
                    <a href="<?= get_permalink($posts[$i]->ID) ?>" class="news-section__image">
                        <?= get_the_post_thumbnail( $posts[$i]->ID, 'full', $news_attr ) ?>
                    </a>
                    <div class="news-section__text-wrap">
                        <h3 class="news-section__title"><?= $posts[$i]->post_title ?></h3>
                        <div class="news-section__text ">
                            <?= get_the_excerpt($posts[$i]->ID) ?>
                            <a href="<?= get_permalink($posts[$i]->ID) ?>" class="news-section__link">Читать дальше ></a>
                        </div>
                    </div>
                    <? $i++ ?>
                    <? if (!isset($posts[$i])) break ?>
                </div>
                <div class="news-section__item-mini mb-40">
                    <a href="<?= get_permalink($posts[$i]->ID) ?>" class="news-section__image">
                        <?= get_the_post_thumbnail( $posts[$i]->ID, 'full', $news_attr ) ?>
                    </a>
                    <div class="news-section__text-wrap">
                        <h3 class="news-section__title"><?= $posts[$i]->post_title ?></h3>
                        <div class="news-section__text ">
                            <?= get_the_excerpt($posts[$i]->ID) ?>
                            <a href="<?= get_permalink($posts[$i]->ID) ?>" class="news-section__link">Читать дальше ></a>
                        </div>
                    </div>
                    <? $i++ ?>
                    <? if (!isset($posts[$i])) break ?>
                </div>
            </div>
            <div class="news-section__item">
                <a href="<?= get_permalink($posts[$i]->ID) ?>" class="news-section__image">
                    <?= get_the_post_thumbnail( $posts[$i]->ID, 'full', $news_attr ) ?>
                </a>
                <div class="news-section__text-wrap">
                    <h3 class="news-section__title"><?= $posts[$i]->post_title ?></h3>
                    <div class="news-section__text ">
                        <?= get_the_excerpt($posts[$i]->ID) ?>
                        <a href="<?= get_permalink($posts[$i]->ID) ?>" class="news-section__link">Читать дальше ></a>
                    </div>
                </div>
                <? $i++ ?>
                <? if (!isset($posts[$i])) break ?>
            </div>
        <? endfor ?>
        </section>
    </div>
<?php get_footer(); ?>