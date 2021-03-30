<?php

/**
 * EYELINE functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package EYELINE
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.2.2');
}

if (!function_exists('optika_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function optika_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on EYELINE, use a find and replace
         * to change 'eyeline' to the name of your theme in all the template files.
         */
        load_theme_textdomain('eyeline', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'top' => 'Header menu',
            'bottom' => 'Footer menu',
            'mobile' => 'Mobile menu'
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'eyeline_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height' => 250,
                'width' => 250,
                'flex-width' => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action('after_setup_theme', 'optika_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
// function eyeline_content_width()
// {
//     $GLOBALS['content_width'] = apply_filters('eyeline_content_width', 640);
// }

// add_action('after_setup_theme', 'eyeline_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function optika_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'optika'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'optika'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name' => esc_html__('Widget_catalog', 'optika'),
            'id' => 'widget_catalog',
            'description' => esc_html__('Add widgets here.', 'optika'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}

add_action('widgets_init', 'optika_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function optika_scripts()
{
    // wp_enqueue_style('eyeline-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_enqueue_style('optika-style_style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION);
    wp_enqueue_style('optika-style_header', get_template_directory_uri() . '/assets/css/header.css', array(), _S_VERSION);
    wp_enqueue_style('optika-style_main', get_template_directory_uri() . '/assets/css/main.css', array(), _S_VERSION);
    wp_enqueue_style('optika-style_footer', get_template_directory_uri() . '/assets/css/footer.css', array(), _S_VERSION);
    wp_enqueue_style('optika-mobile-front', get_template_directory_uri() . '/assets/css/mobile-front.css', array(), _S_VERSION);
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/js/swiper.min.css', array(), _S_VERSION);/*библиотека слайдера*/
    wp_style_add_data('optika-style', 'rtl', 'replace');
    if (get_the_ID() == 59) {
        wp_enqueue_style('optika-style_contacts', get_template_directory_uri() . '/assets/css/contacts.css', array(), _S_VERSION);
    }
    if (get_the_ID() == 1215) {
        wp_enqueue_style('optika-style_all-news', get_template_directory_uri() . '/assets/css/all-news.css', array(), _S_VERSION);
    }
    if (get_the_ID() == 57) {
        wp_enqueue_style('optika-style_about-us', get_template_directory_uri() . '/assets/css/about-us.css', array(), _S_VERSION);
    }
    // echo get_the_ID();

    // отменяем зарегистрированный jQuery
    wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
	wp_enqueue_script( 'jquery' );
    // Другие скрипты
    wp_enqueue_script('googlescript', 'https://polyfill.io/v3/polyfill.min.js?features=default', false, null, true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('slider', get_template_directory_uri() . '/assets/js/slider.js', array(), _S_VERSION, true);
    wp_enqueue_script('mobFront', get_template_directory_uri() . '/assets/js/mobFront.js', array(), _S_VERSION, true);

    // Для страницы SHOP
    if ( is_shop() ) {
        wp_enqueue_style('optika-mobile-shop', get_template_directory_uri() . '/assets/css/mobile-shop.css', array(), _S_VERSION);
        wp_enqueue_script('mobShop', get_template_directory_uri() . '/assets/js/mobShop.js', array(), _S_VERSION, true);
    }
    if (is_cart() || is_product()) {
        wp_enqueue_script('updn-quantitu', get_template_directory_uri() . '/assets/js/updn-quantitu.js', false, null, true);
    }
    if (is_product()) {
        wp_enqueue_style('optika-mobile-card', get_template_directory_uri() . '/assets/css/mobile-card.css', array(), _S_VERSION);
        wp_enqueue_script('optika-mobCard', get_template_directory_uri() . '/assets/js/mobCard.js', false, null, true);
    }
    if (is_cart()) {
        wp_enqueue_style('optika-mobile-cart', get_template_directory_uri() . '/assets/css/mobile-cart.css', array(), _S_VERSION);
    }
    if (is_checkout()) {
        wp_enqueue_style('optika-mobile-checkout', get_template_directory_uri() . '/assets/css/mobile-checkout.css', array(), _S_VERSION);
    }
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

}
add_action('wp_enqueue_scripts', 'optika_scripts');

function font_awesome() {
    if (!is_admin()) {
        wp_register_style('font-awesome', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css');
        wp_enqueue_style('font-awesome');
    }
}
add_action('wp_enqueue_scripts', 'font_awesome');


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

function my_deregister_styles_and_scripts()
{
    wp_dequeue_style('wp-block-library');
}
add_action('wp_print_styles', 'my_deregister_styles_and_scripts', 100);

add_shortcode('frames_brand', 'frames_brand');

function frames_brand()
{
    ob_start();

    get_template_part('assets/shortcode/frames_brand');

    return ob_get_clean();
}
// Настройка ссылки для цитаты THE_EXERPT()
add_filter('excerpt_length', function () {
    return 15;
});
add_filter('excerpt_more', function ($more) {
    return '...';
});

class Walker__optika extends Walker_Nav_Menu
{
    function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output)
    {
        $wpandyou_id_field = $this->db_fields['id'];
        if (!empty($children_elements[$element->$wpandyou_id_field])) {
            $element->classes[] = 'burger__li-parent';
        }
        Walker_Nav_Menu::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }
}
//////////////////
// Свои функции
////////////////
function var_dumpe($el){
    echo '<pre>';
    var_dump($el);
    echo '</pre>';
}

require 'woocommerce/woocommerce-fun.php';

// Добавляем рубрику к странице
function true_apply_categories_for_pages(){
    add_meta_box( 'categorydiv', 'Категории', 'post_categories_meta_box', 'page', 'side', 'normal'); // добавляем метабокс категорий для страниц
    register_taxonomy_for_object_type('category', 'page'); // регистрируем рубрики для страниц
}
// обязательно вешаем на admin_init
add_action('admin_init','true_apply_categories_for_pages');
 
function true_expanded_request_category($q) {
    if (isset($q['category_name'])) // если в запросе присутствует параметр рубрики
        $q['post_type'] = array('post', 'page'); // то, помимо записей, выводим также и страницы
    return $q;
}
 
add_filter('request', 'true_expanded_request_category');

function optika_post_cats($a){
    return wp_get_post_categories($a->ID, ['fields' => 'slugs'])[0];
}

// разрешаем новые типы для загрузки
add_filter( 'upload_mimes', 'upload_allow_types' );
function upload_allow_types( $mimes ) {
    $mimes['webp'] = 'image/webp';
    $mimes['svg']  = 'image/svg+xml';
    return $mimes;
}

add_shortcode( 'optika_temp_dir', 'get_template_directory_uri' );

//Убираем читать далее... из отрывков
function new_excerpt_more($more) {
    global $post;
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');