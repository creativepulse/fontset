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
	$document = JFactory::getDocument();
	$document->addStyleSheet('modules/mod_fontset/css/buttons.css');
}

echo
'<div id="mod_fontset_' . $mod->instance_id() . '" class="mod_fontset_buttons">
	<table>
		<tr>
			<td><img class="mod_fontset_button" src="modules/mod_fontset/images/buttons_decrease.png" alt="" onclick="mod_fontset_size_set(-2)" /></td>
			<td>&nbsp;&nbsp;</td>
			<td><img class="mod_fontset_button" src="modules/mod_fontset/images/buttons_reset.png" alt="" onclick="mod_fontset_size_reset()" /></td>
			<td>&nbsp;&nbsp;</td>
			<td><img class="mod_fontset_button" src="modules/mod_fontset/images/buttons_increase.png" alt="" onclick="mod_fontset_size_set(2)" /></td>
		</tr>
		<tr>
			<td colspan="5" style="text-align:center;"><img src="modules/mod_fontset/images/buttons_label.png" alt="" /></td>
		</tr>
	</table>
</div>
';

?>