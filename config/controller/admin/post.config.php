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
        'exists in multiple context' => __('This news story exists in <strong>{count} contexts</strong>.'),
        'delete in the following contexts' => __('Delete this news story in the following contexts:'),
        'item deleted' => __('This news story has been deleted.'),
        'not found' => __('News story not found'),
        'error added in context' => __('This news story cannot be added {context}.'),
        'item inexistent in context yet' => __('This news story has not been added in {context} yet.'),
        'add an item in context' => __('Add a new news story in {context}'),
        'delete an item' => __('Delete a news story'),
    ),
    'tab' => array(
        'iconUrl' => 'static/apps/noviusos_news/img/news-16.png',
        'labels' => array(
            'insert' => __('Add a news story'),
            'blankSlate' => __('Translate a news story'),
        ),
    )
);
