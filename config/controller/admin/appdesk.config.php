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
);
$appdesk = array(
    'tab' => array(
        'label' => __('News'),
    ),
    'actions' => array(
        'edit' => array(
            'action' => array(
                'tab' => array(
                    'label' => __('Edit this news'),
                ),
            ),
        ),
        'delete' => array(
            'action' => array(
                'dialog' => array(
                    'title' => __('Delete this news'),
                ),
            ),
        ),
    ),
    'appdesk' => array(
        'texts' => array(
            'items' => __("news"),
            'item' => __("news")
        ),
        'adds' => array(
            'post' => array(
                'label' => __('Add a news'),
                'action' => array(
                    'tab' => array(
                        'label' => __('Add a news'),
                    ),
                ),
            ),
        ),
    ),
);
$base = \Config::load('noviusos_blognews::controller/admin/appdesk', true);
$config = array_merge($base, $config);
$config['appdesk'] = \Arr::merge($config['appdesk'], $appdesk);
return $config;
