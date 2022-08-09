<?php
$params = array(
    'posts_per_page' => 10,
    'post_type' => 'product',
    );

$wc_query = new WP_Query($params);
?>