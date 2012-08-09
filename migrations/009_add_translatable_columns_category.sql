ALTER TABLE  `noviusdev_news_category`
ADD  `cat_virtual_name` VARCHAR( 255 ) NOT NULL AFTER  `cat_title` ,
ADD  `cat_lang` VARCHAR( 5 ) NOT NULL AFTER  `cat_virtual_name` ,
ADD  `cat_lang_common_id` INT NOT NULL AFTER  `cat_lang` ,
ADD  `cat_lang_single_id` INT NULL DEFAULT NULL AFTER  `cat_lang_common_id` ,
ADD INDEX (  `cat_lang` ,  `cat_lang_common_id` ,  `cat_lang_single_id` );
UPDATE `noviusdev_news_category` SET cat_virtual_name=cat_title, cat_lang = "fr_FR", cat_lang_common_id = cat_id, cat_lang_single_id = cat_id;