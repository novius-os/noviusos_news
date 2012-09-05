<?php
return array(
    'controller_url'  => 'admin/noviusos_news/post',
    'model' => 'Nos\\BlogNews\\News\\Model_Post',
    'messages' => array(
        'successfully added' => __('News story successfully added.'),
        'successfully saved' => __('News story successfully saved.'),
        'successfully deleted' => __('The news story has successfully been deleted!'),
        'you are about to delete, confim' => __('You are about to delete the news story <span style="font-weight: bold;">":title"</span>. Are you sure you want to continue?'),
        'you are about to delete' => __('You are about to delete the news story <span style="font-weight: bold;">":title"</span>.'),
        'exists in multiple lang' => __('This news story exists in <strong>{count} languages</strong>.'),
        'delete in the following languages' => __('Delete this news story in the following languages:'),
        'item deleted' => __('This news story has been deleted.'),
        'not found' => __('News story not found'),
        'blank_state_item_text' => __('news story'),
    ),
    'tab' => array(
        'iconUrl' => 'static/apps/noviusos_news/img/news-16.png',
        'labels' => array(
            'insert' => __('Add a news story'),
            'blankSlate' => __('Translate a news story'),
        ),
    )
);
