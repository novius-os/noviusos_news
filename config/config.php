<?php
$base = \Config::load('noviusos_blognews::config', true);
$base['icons']['64'] = 'static/apps/noviusos_news/img/news-64.png';
$base['icons']['32'] = 'static/apps/noviusos_news/img/news-32.png';
$base['icons']['16'] = 'static/apps/noviusos_news/img/news-16.png';
$base['application_name'] = 'News';
$base['comments']['enabled'] = false;
$base['tags']['enabled'] = false;
$base['authors']['enabled'] = false;
$base['summary']['enabled'] = true;
return $base;
