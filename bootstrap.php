<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

\Module::load('noviusos_blognews');

$configFiles = array(
    'config',
    'permissions',
    'controller/front',
    'controller/admin/appdesk',
    'controller/admin/application',
    'controller/admin/category',
    'controller/admin/post',
    'controller/admin/tag',
    'controller/admin/inspector/author',
    'controller/admin/inspector/category',
    'controller/admin/inspector/tag',
    'common/post',
    'common/tag',
    'model/admin/category',
);

$namespace = 'Nos\\BlogNews\News';
$application_name = 'noviusos_news';
$icon = 'news';

foreach ($configFiles as $configFile) {
    \Event::register_function('config|noviusos_news::'.$configFile, function (&$config) use ($namespace, $application_name, $icon) {
        $config = \Config::placeholderReplace($config, array(
            'namespace' => $namespace,
            'application_name' => $application_name,
            'icon' => $icon,
        ), false);
    });
}

//Add 'blog_posts' relation on Model_User (related posts where the User is the author)
\Event::register_function('config|noviusos_user::model/user', function (&$config) {
    $config['has_many']['news_posts'] = array(
        'key_from' => 'user_id',
        'model_to' => 'Nos\BlogNews\News\Model_Post',
        'key_to'   => 'post_author_id',
    );

    $config['behaviours']['Nos\Orm_Behaviour_Urlenhancer']['enhancers'][] = 'noviusos_news';
});

Event::register_function('config|noviusos_comments::api', function (&$config) {
    $news_config = \Config::application('noviusos_news');
    if (isset($news_config['comments']['use_recaptcha'])) {
        \Log::deprecated(
            'The key "comments.use_recaptcha" in noviusos_news config file is deprecated, '.
            'extend noviusos_comments::api configuration file instead.',
            'Chiba.2'
        );

        \Arr::set($config, 'setups.Nos\BlogNews\News\Model_Post', array(
            'use_recaptcha' => $news_config['comments']['use_recaptcha'],
        ));
    }
});
