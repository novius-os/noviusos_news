ALTER TABLE  `noviusdev_news_tag_post` CHANGE  `news_id`  `post_id` INT( 10 ) UNSIGNED NOT NULL

ALTER TABLE  `noviusdev_news_tag_post` DROP INDEX  `news_id`, ADD INDEX  `post_id` (  `post_id` )
