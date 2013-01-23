<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

\Nos\I18n::current_dictionary(array('noviusos_news::common'));

return array(
    'controller_url'  => 'admin/noviusos_news/post',
    'model' => 'Nos\\BlogNews\\News\\Model_Post',
    'i18n_file' => 'noviusos_news::common',
    'tab' => array(
        'iconUrl' => 'static/apps/noviusos_news/img/news-16.png',
        'labels' => array(
            'insert' => __('Add a news story'),
            'blankSlate' => __('Translate a news story'),
        ),
    )
);
