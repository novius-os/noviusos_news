<?php
return array(
    'name'    => 'News',
    'version' => '0.02-beta203',
    'href' => 'admin/noviusdev_news/appdesk',
    'icon64'  => 'static/apps/noviusdev_news/img/news-64.png',
    'provider' => array(
        'name' => 'Novius OS',
    ),
    'namespace' => 'NoviusDev\BlogNews\News',
    'launchers' => array(
        'noviusdev_news' => array(
            'name'    => 'News',
            'url'     => 'admin/noviusdev_news/appdesk',
            'iconUrl' => 'static/apps/noviusdev_news/img/news-32.png',
            'icon64'  => 'static/apps/noviusdev_news/img/news-64.png',
        ),
    ),
    'enhancers' => array(
        'home_news' => array(
            'title' => 'News',
            'desc'  => '',
            //'enhancer' => 'news/front',
            'enhancer' => 'noviusdev_news/front/home',
            'iconUrl' => 'static/apps/news/img/news-16.png',
            'previewUrl' => 'admin/noviusdev_blognews/application/preview',
            'dialog' => array(
                'contentUrl' => 'admin/noviusdev_blognews/application/popup',
                'width' => 450,
                'height' => 180,
                'ajax' => true,
            ),
        ),
        'noviusdev_news' => array(
            'title' => 'Page détail news',
            'desc'  => '',
            'urlEnhancer' => 'noviusdev_news/front/main',
            'iconUrl' => 'static/apps/news/img/news-16.png',
            'previewUrl' => 'admin/noviusdev_blognews/application/preview',
            'dialog' => array(
                'contentUrl' => 'admin/noviusdev_blognews/application/popup',
                'width' => 450,
                'height' => 180,
                'ajax' => true,
            ),
            'models_url_enhanced' => array(
                'NoviusDev\BlogNews\News\Model_Post',
            ),
            'get_url_model' => array('NoviusDev\BlogNews\News\Controller_Front', 'get_url_model'),
        ),
    )
);
