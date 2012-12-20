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

$base = \Config::load('noviusos_blognews::common/post', true);
$base['actions'] = array(
    'Nos\\BlogNews\\News\\Model_Post.add' => array(
        'label' => __('Add a news story'),
    ),
    'Nos\\BlogNews\\News\\Model_Post.edit' => array(
        'label' => __('Edit this news story'),
    ),
    'Nos\\BlogNews\\News\\Model_Post.delete' => array(
        'label' => __('Delete this news story'),
    ),
);

$base['i18n'] = array(
    // Crud
    'successfully added' => __('Done! The news story has been added.'),
    'successfully deleted' => __('The news story has been deleted.'),

    // General errors
    'item deleted' => __('This news story doesn’t exist any more. It has been deleted.'),
    'not found' => __('We cannot find this news story.'),

    // Deletion popup
    'delete an item' => __('Deleting the news story ‘{{title}}’'),
    'you are about to delete, confim' => __('Last chance, there’s no undo. Do you really want to delete this news story?'),
    'exists in multiple context' => __('This news story exists in <strong>{{count}} contexts</strong>.'),
    'delete in the following contexts' => __('Delete this news story in the following contexts:'),
);

return $base;