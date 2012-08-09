ALTER TABLE  `noviusdev_news_post` ADD  `news_summary` TEXT NOT NULL AFTER  `news_title` ,
ADD  `news_author` VARCHAR( 255 ) NULL DEFAULT NULL AFTER  `news_summary` ,
ADD  `news_author_id` INT UNSIGNED NULL DEFAULT NULL AFTER  `news_author`;

ALTER TABLE  `noviusdev_news_post` ADD  `news_read` INT UNSIGNED NOT NULL AFTER  `news_published` ,
ADD  `news_virtual_name` VARCHAR( 255 ) NOT NULL AFTER  `news_read`;

UPDATE  `noviusdev_news_post` SET news_virtual_name = news_title;

ALTER TABLE  `noviusdev_news_post` ADD UNIQUE (
`news_virtual_name`
);

ALTER TABLE  `noviusdev_news_post` CHANGE  `news_author`  `news_author_alias` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;