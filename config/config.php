<?php
\Config::load('noviusos_blognews::config', true);
$base['application_label'] = __('News');
$base = \Config::get('noviusos_blognews::config');
$base['application_name'] = 'News';
$base['comments']['enabled'] = false;
$base['tags']['enabled'] = false;
$base['authors']['enabled'] = false;
$base['summary']['enabled'] = true;
return $base;