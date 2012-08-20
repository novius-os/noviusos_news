<?php
namespace Nos\BlogNews\News;

class Model_Category extends \Nos\BlogNews\Model_Category
{
    protected static $_primary_key = array('cat_id');
    protected static $_table_name = 'nos_news_category';

    public static function _init() {
        static::$_behaviours['Nos\Orm_Behaviour_Url']['urls'][] = array('Nos\BlogNews\News\Controller_Front', 'url_model');
    }

}
