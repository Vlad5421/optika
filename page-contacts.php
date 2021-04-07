<?php

/**
 * The template for displaying contacts pages
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

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            </header><!-- .entry-header -->

            <div class="entry-content">
                <div class="contacts__top-content">
                    <div class="block__address">
                        <p style="text-align: left;">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/contact2.svg" alt="icon-addres">
                            <a href="#to-map">
                                <span><strong>Наш адрес</strong>:. Новороссийск, проспект Дзержинского 211/2, ТЦ Перекресток, 1 эт.</span>
                            </a>
                        </p>
                        <p style="text-align: left;">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/contact3.svg" alt="icon-phone">
                            <span><strong>Тел</strong>:. <a href="tel:+79891973488">+7 989 197-34-88</a></span>
                        </p>
                        <p style="text-align: left;">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/contact4.svg" alt="icon-mile">
                            <span><strong>Email</strong>:. <a href="mailto:info@optikaeyeline.ru">info@optikaeyeline.ru</a></span>
                        </p>
                        <p style="text-align: left;">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/contact1.svg" alt="icon-time">
                            <span><strong>Режим работы</strong>:. с 10:00 до 21:00 без перерывов и выходных</span>
                        </p>
                    </div>
                    <div class="block__form">
                        <div class="block__form-form">
                        <?php echo do_shortcode('[contact-form-7 id="1194" title="Связаться с нами"]'); ?>
                        </div>
                    </div>
                </div>
                <div id="to-map" class="block__map">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A86af92b1d71baa35d0f860b9a3d85dffffe3a475aa7e61a87bb1233ab3ac0901&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
            </div><!-- .entry-content -->

        </article><!-- #post-<?php the_ID(); ?> -->



        <div class="widget-categoty">
            <?php dynamic_sidebar('Widget_catalog') ?>
        </div>
    </div>
</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
