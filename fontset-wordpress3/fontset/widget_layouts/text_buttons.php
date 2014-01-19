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
'<style type="text/css">
#wdg_fontset_' . $widget->view_id() . ' .wdg_fontset_button { cursor: pointer; margin: 0; padding: 0; }
</style>
';
}

echo
'<div id="wdg_fontset_' . $widget->view_id() . '" class="wdg_fontset">
	' . __('Text size') . '
	&nbsp; <img src="' . $plugin_url . '/images/txt_increase.gif" alt="" onclick="wdg_fontset_size_set(2)" class="wdg_fontset_button" />
	&nbsp;<img src="' . $plugin_url . '/images/txt_decrease.gif" alt="" onclick="wdg_fontset_size_set(-2)" class="wdg_fontset_button" />
</div>
';

?>