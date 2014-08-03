<?php

/**
 * FontSet
 *
 * @version 1.3
 * @author Creative Pulse
 * @copyright Creative Pulse 2009-2014
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @link http://www.creativepulse.gr
 */


// no direct access
defined('_JEXEC') or die('Restricted access');


$document = JFactory::getDocument();
$document->addStyleDeclaration('#cpwdg_fontset_' . $widget->view_id(true) . ' .cpwdg_fontset_button { cursor: pointer; margin: 0; padding: 0; }');

echo
'<div id="cpwdg_fontset_' . $widget->view_id(false) . '" class="cpwdg_fontset">
	' . JText::_('Text size') . '
	&nbsp; <img src="modules/mod_fontset/images/txt_increase.gif" alt="" onclick="cpwdg_fontset_size_set(2)" class="cpwdg_fontset_button" />
	&nbsp;<img src="modules/mod_fontset/images/txt_decrease.gif" alt="" onclick="cpwdg_fontset_size_set(-2)" class="cpwdg_fontset_button" />
</div>
';

?>