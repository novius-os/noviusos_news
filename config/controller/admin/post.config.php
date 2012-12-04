<?php
return array(
    'controller_url'  => 'admin/noviusos_news/post',
    'model' => 'Nos\\BlogNews\\News\\Model_Post',
    'i18n_file' => 'noviusos_news::common',
    'tab' => array(
        'iconUrl' => 'static/apps/noviusos_news/img/news-16.png',
        'labels' => array(
            'insert' => __('Add a news story'),
            'blankSlate' => __('Translate a news story'),
        ),
    )
);
