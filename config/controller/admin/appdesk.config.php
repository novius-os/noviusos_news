<?php

\Nos\I18n::current_dictionary(array('noviusos_news::common'));

$base = \Config::load('noviusos_blognews::controller/admin/appdesk', true);
$base['appdesk']['texts'] = array(
    'items' => __("news stories"),
    'item' => __("news story")
);
return $base;
