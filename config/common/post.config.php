<?php

\Nos\I18n::current_dictionary(array('noviusos_news::common'));

$base = \Config::load('noviusos_blognews::common/post', true);
$base['actions'] = array(
    'Nos\\BlogNews\\News\\Model_Post.add' => array(
        'label' => __('Add a news story'),
    ),
    'Nos\\BlogNews\\News\\Model_Post.edit' => array(
        'label' => __('Edit this news story'),
    ),
    'Nos\\BlogNews\\News\\Model_Post.delete' => array(
        'label' => __('Delete this news story'),
    ),
);

$base['i18n'] = array(
    // Crud
    'successfully added' => __('News story successfully added.'),
    'successfully saved' => __('News story successfully saved.'),
    'successfully deleted' => __('The news story has successfully been deleted!'),

    // General errors
    'item deleted' => __('This news story has been deleted.'),
    'not found' => __('News story not found'),

    // Blank slate
    'error added in context' => __('This news story cannot be added {context}.'),
    'item inexistent in context yet' => __('This news story has not been added in {context} yet.'),
    'add an item in context' => __('Add a new news story in {context}'),

    // Deletion popup
    'delete an item' => __('Delete a news story'),
    'you are about to delete, confim' => __('You are about to delete the news story <span style="font-weight: bold;">":title"</span>. Are you sure you want to continue?'),
    'you are about to delete' => __('You are about to delete the news story <span style="font-weight: bold;">":title"</span>.'),
    'exists in multiple context' => __('This news story exists in <strong>{count} contexts</strong>.'),
    'delete in the following contexts' => __('Delete this news story in the following contexts:'),
);

return $base;