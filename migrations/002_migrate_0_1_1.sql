ALTER TABLE `nos_news_category_post` ADD PRIMARY KEY ( `post_id` , `cat_id` );
ALTER TABLE `nos_news_tag_post` DROP INDEX `post_id`;
ALTER TABLE `nos_news_tag_post` ADD PRIMARY KEY ( `post_id` , `tag_id` );