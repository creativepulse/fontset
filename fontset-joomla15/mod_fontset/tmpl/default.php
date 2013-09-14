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


if ($mod->instance_id() == 1) {
	$document =& JFactory::getDocument();
	$document->addStyleSheet('modules/mod_fontset/css/default.css');
}

echo
'<div id="mod_fontset_' . $mod->instance_id() . '" class="mod_fontset">
	<span class="mod_fontset_smaller" onclick="mod_fontset_size_set(-2)">A-</span>
	&nbsp; <span class="mod_fontset_reset" onclick="mod_fontset_size_reset()">A</span>
	&nbsp; <span class="mod_fontset_larger" onclick="mod_fontset_size_set(2)">A+</span>
</div>
';

?>