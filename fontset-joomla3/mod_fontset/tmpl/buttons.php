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
	$document->addStyleSheet('modules/mod_fontset/css/buttons.css');
}

echo
'<div id="cpwdg_fontset_' . $widget->view_id(true) . '" class="cpwdg_fontset_buttons">
	<table>
		<tr>
			<td><img class="cpwdg_fontset_button" src="modules/mod_fontset/images/buttons_decrease.png" alt="" onclick="cpwdg_fontset_size_set(-2)" /></td>
			<td>&nbsp;&nbsp;</td>
			<td><img class="cpwdg_fontset_button" src="modules/mod_fontset/images/buttons_reset.png" alt="" onclick="cpwdg_fontset_size_reset()" /></td>
			<td>&nbsp;&nbsp;</td>
			<td><img class="cpwdg_fontset_button" src="modules/mod_fontset/images/buttons_increase.png" alt="" onclick="cpwdg_fontset_size_set(2)" /></td>
		</tr>
		<tr>
			<td colspan="5" style="text-align:center;"><img src="modules/mod_fontset/images/buttons_label.png" alt="" /></td>
		</tr>
	</table>
</div>
';

?>