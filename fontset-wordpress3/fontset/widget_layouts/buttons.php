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


$plugin_url = plugins_url('', dirname(__FILE__));

if ($widget->view_id(true) == 1) {
	echo
'<link href="' . $plugin_url . '/css/buttons.css" rel="stylesheet" type="text/css" />
';
}

echo
'<div id="wdg_fontset_' . $widget->view_id() . '" class="wdg_fontset_buttons">
	<table>
		<tr>
			<td><img class="wdg_fontset_button" src="' . $plugin_url . '/images/buttons_decrease.png" alt="" onclick="wdg_fontset_size_set(-2)" /></td>
			<td>&nbsp;&nbsp;</td>
			<td><img class="wdg_fontset_button" src="' . $plugin_url . '/images/buttons_reset.png" alt="" onclick="wdg_fontset_size_reset()" /></td>
			<td>&nbsp;&nbsp;</td>
			<td><img class="wdg_fontset_button" src="' . $plugin_url . '/images/buttons_increase.png" alt="" onclick="wdg_fontset_size_set(2)" /></td>
		</tr>
		<tr>
			<td colspan="5" style="text-align:center;"><img src="' . $plugin_url . '/images/buttons_label.png" alt="" /></td>
		</tr>
	</table>
</div>
';

?>