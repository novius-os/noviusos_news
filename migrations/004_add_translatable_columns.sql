ALTER TABLE  `nos_news_post` ADD  `news_lang` VARCHAR( 5 ) NOT NULL AFTER  `news_updated_at` ,
ADD  `news_lang_common_id` INT NOT NULL AFTER  `news_lang` ,
ADD  `news_lang_single_id` INT NULL DEFAULT NULL AFTER  `news_lang_common_id` ,
ADD INDEX (  `news_lang` ,  `news_lang_common_id` ,  `news_lang_single_id` );
UPDATE `nos_news_post` SET news_lang = "fr_FR", news_lang_common_id = news_id, news_lang_single_id = news_id;