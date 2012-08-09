CREATE TABLE IF NOT EXISTS `noviusdev_news_tag` (
  `tag_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag_label` varchar(255) NOT NULL,
  PRIMARY KEY (`tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

ALTER TABLE  `noviusdev_news_tag` ADD UNIQUE (
`tag_label`
);

CREATE TABLE IF NOT EXISTS `noviusdev_news_tag_post` (
  `news_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  KEY `news_id` (`news_id`),
  KEY `tag_id` (`tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;