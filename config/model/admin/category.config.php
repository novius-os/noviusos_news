<?php
$config = \Config::load('noviusos_blognews::model/admin/category', true);
$config['actions']['Nos\\BlogNews\\News\\Model_Category.add'] = array(
    'label' => 'Add a category',
);
return $config;