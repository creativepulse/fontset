<?php

/**
 * fontset
 *
 * @version 1.2
 * @author Creative Pulse
 * @copyright Creative Pulse 2009-2013
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @link http://www.creativepulse.gr
 */

// no direct access
defined('_JEXEC') or die('Restricted access');


$document = JFactory::getDocument();
$document->addStyleDeclaration('#mod_fontset_' . $mod->instance_id() . ' .mod_fontset_button { cursor: pointer; margin: 0; padding: 0; }');

echo
'<div id="mod_fontset_' . $mod->instance_id() . '" class="mod_fontset">
	' . JText::_('Text size') . '
	&nbsp; <img src="modules/mod_fontset/images/txt_increase.gif" alt="" onclick="mod_fontset_size_set(2)" class="mod_fontset_button" />
	&nbsp;<img src="modules/mod_fontset/images/txt_decrease.gif" alt="" onclick="mod_fontset_size_set(-2)" class="mod_fontset_button" />
</div>
';

?>