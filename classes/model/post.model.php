<?php
namespace Nos\BlogNews\News;

class Model_Post extends \Nos\BlogNews\Model_Post
{
    protected static $_primary_key = array('post_id');
    protected static $_table_name = 'nos_news_post';

    public static function _init() {
        parent::_init();
        static::$_behaviours['Nos\Orm_Behaviour_Url']['enhancers'][] = 'noviusos_news';
    }
}
