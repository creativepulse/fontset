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


if ($widget->load_libraries(basename(__FILE__))) {
	$document = JFactory::getDocument();
	$document->addStyleSheet('modules/mod_fontset/css/default.css');
}

echo
'<div id="cpwdg_fontset_' . $widget->view_id(true) . '" class="cpwdg_fontset">
	<span class="cpwdg_fontset_smaller" onclick="cpwdg_fontset_size_set(-2)">A-</span>
	&nbsp; <span class="cpwdg_fontset_reset" onclick="cpwdg_fontset_size_reset()">A</span>
	&nbsp; <span class="cpwdg_fontset_larger" onclick="cpwdg_fontset_size_set(2)">A+</span>
</div>
';

?>