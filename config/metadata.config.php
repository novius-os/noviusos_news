<?php
return array(
    'name'    => 'News',
    'version' => '0.02-beta203',
    'href' => 'admin/noviusos_news/appdesk',
    'icon64'  => 'static/apps/noviusos_news/img/news-64.png',
    'provider' => array(
        'name' => 'Novius OS',
    ),
    'namespace' => 'Nos\BlogNews\News',
    'launchers' => array(
        'noviusos_news' => array(
            'name'    => 'News',
            'url'     => 'admin/noviusos_news/appdesk',
            'iconUrl' => 'static/apps/noviusos_news/img/news-32.png',
            'icon64'  => 'static/apps/noviusos_news/img/news-64.png',
        ),
    ),
    'enhancers' => array(
        'home_news' => array(
            'title' => 'News',
            'desc'  => '',
            //'enhancer' => 'news/front',
            'enhancer' => 'noviusos_news/front/home',
            'iconUrl' => 'static/apps/news/img/news-16.png',
            'previewUrl' => 'admin/noviusos_news/application/preview',
            'dialog' => array(
                'contentUrl' => 'admin/noviusos_news/application/popup',
                'width' => 450,
                'height' => 400,
                'ajax' => true,
            ),
        ),
        'noviusos_news' => array(
            'title' => 'Page détail news',
            'desc'  => '',
            'urlEnhancer' => 'noviusos_news/front/main',
            'iconUrl' => 'static/apps/news/img/news-16.png',
            'previewUrl' => 'admin/noviusos_news/application/preview',
            'dialog' => array(
                'contentUrl' => 'admin/noviusos_news/application/popup',
                'width' => 450,
                'height' => 180,
                'ajax' => true,
            ),
            'data_catchers_added' => array(
                'posts_rss_channel' => array(
                    'data_catcher' => 'rss_channel',
                    'title' => __('RSS Post channel'),
                ),
                'comments_rss_channel' => array(
                    'data_catcher' => 'rss_channel',
                    'title' => __('RSS Comments channel'),
                ),
            ),
        ),
    )
);
