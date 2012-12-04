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

return $base;