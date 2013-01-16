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
    'notification item added' => __('Done! The news story has been added.'),
    'notification item deleted' => __('The news story has been deleted.'),

    // General errors
    'notification item does not exist anymore' => __('This news story doesn’t exist any more. It has been deleted.'),
    'notification item not found' => __('We cannot find this news story.'),

    // Blank slate
    'translate error parent not available in context' => __('We’re afraid this news story cannot be added in {{context}} because its <a>parent</a> is not available in this context yet.'),
    'translate error parent not available in language' => __('We’re afraid this news story cannot be added in {{language}} because its <a>parent</a> is not available in this language yet.'),

    // Deletion popup
    'deleting item title' => __('Deleting the news story ‘{{title}}’'),

    # Delete action's labels
    'deleting button 1 item' => __('Yes, delete this news story'),

    '1 item' => __('1 news story'),
    'N items' => __('{{count}} news stories'),

    # Keep only if the model has the behaviour Contextable
    'deleting with N contexts' => __('This news story exists in <strong>{{context_count}} contexts</strong>.'),
    'deleting with N languages' => __('This news story exists in <strong>{{language_count}} languages</strong>.'),
);

return $base;