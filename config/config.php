<?php
$base = \Config::load('noviusos_blognews::config', true);
$base['application_label'] = __('News');
$base['comments']['enabled'] = false;
$base['tags']['enabled'] = false;
$base['authors']['enabled'] = false;
$base['summary']['enabled'] = true;
return $base;