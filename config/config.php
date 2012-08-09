<?php
$base = \Config::load('noviusdev_blognews::config', true);
$base['comments']['enabled'] = false;
$base['tags']['enabled'] = false;
$base['authors']['enabled'] = false;
$base['summary']['enabled'] = true;
return $base;
