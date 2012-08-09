<?php

$config = array(
);

$base = \Config::load('noviusdev_blognews::controller/admin/inspector/author', true);
return array_merge($base, $config);
