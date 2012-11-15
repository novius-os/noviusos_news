<?php
$base = \Config::load('noviusos_blognews::common/category', true);
$config['actions']['Nos\\BlogNews\\News\\Model_Category.add'] = array(
    'label' => 'Add a category',
);

return $base;