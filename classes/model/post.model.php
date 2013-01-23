<?php
namespace Nos\BlogNews\News;

class Model_Post extends \Nos\BlogNews\Model_Post
{
    protected static $_primary_key = array('post_id');
    protected static $_table_name = 'nos_news_post';

    public static function _init()
    {
        parent::_init();
        \Nos\I18n::current_dictionary(array('noviusos_news::common'));
        static::$_behaviours['Nos\Orm_Behaviour_Urlenhancer']['enhancers'][] = 'noviusos_news';
        static::$_behaviours['Nos\Orm_Behaviour_Sharable']['data'][\Nos\DataCatcher::TYPE_TITLE]['useTitle'] = __('Use news story title');
        static::$_behaviours['Nos\Orm_Behaviour_Sharable']['data'][\Nos\DataCatcher::TYPE_TEXT]['useTitle'] = __('Use news story summary');
    }
}
