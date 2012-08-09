<?php
$config = array(
    'query' => array(
        'model' => '\Nos\BlogNews\News\Model_Post',
        'order_by' => array('post_created_at' => 'DESC'),
        'limit' => 20,
    ),
    'search_text' => 'post_title',
    'views' => array(
        'default' => array(
            'name' => __('Default view'),
            'json' => array('static/apps/noviusos_news/js/admin/news.js', 'static/apps/noviusos_blognews/js/admin/blognews.js'),
        ),
    ),
    'i18n' => array(
        'Posts'                 => __('News'),
        'Add a post'            => __('Add a news'),
        'Delete this post'      => __('Delete this news'),
    ),
);
$base = \Config::load('noviusos_blognews::controller/admin/appdesk', true);
return array_merge($base, $config);
