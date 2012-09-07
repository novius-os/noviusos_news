<?php
namespace Nos\BlogNews\News;

class Model_Post extends \Nos\BlogNews\Model_Post
{
    protected static $_primary_key = array('post_id');
    protected static $_table_name = 'nos_news_post';

    public static function _init()
    {
        parent::_init();
        static::$_behaviours['Nos\Orm_Behaviour_Urlenhancer']['enhancers'][] = 'noviusos_news';
        static::$_behaviours['Nos\Orm_Behaviour_Sharable']['data'][\Nos\DataCatcher::TYPE_TITLE]['useTitle'] = __('Use news story title');
        static::$_behaviours['Nos\Orm_Behaviour_Sharable']['data'][\Nos\DataCatcher::TYPE_TEXT]['useTitle'] = __('Use news story summary');
        static::$_behaviours['Nos\Orm_Behaviour_Sharable']['data_catchers']['comments_rss_channel']['title'] = __('RSS Comments channel for this news story');
    }
}
