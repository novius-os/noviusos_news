<?php
$base = \Config::load('noviusos_blognews::controller/admin/appdesk', true);
$base['appdesk']['texts'] = array(
    'items' => __("news stories"),
    'item' => __("news story")
);
return $base;
