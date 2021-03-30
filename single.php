<?php

$post = $wp_query->post;
wp_get_post_categories( $post->ID, ['fields' => 'names'] );

if (in_category('news')) {
    include('single_news.php');
} elseif (in_category('sale')) {
    include('single_news.php');
} elseif (in_category(['sunglasses', 'accessories', 'frames_and_brands'])) {
    include('single-card-no-card.php');
} else {
    include('single-default.php');
}
