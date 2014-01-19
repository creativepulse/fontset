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
'<link href="' . $plugin_url . '/css/default.css" rel="stylesheet" type="text/css" />
';
}

echo
'<div id="wdg_fontset_' . $widget->view_id() . '" class="wdg_fontset">
	<span class="wdg_fontset_smaller" onclick="wdg_fontset_size_set(-2)">A-</span>
	&nbsp; <span class="wdg_fontset_reset" onclick="wdg_fontset_size_reset()">A</span>
	&nbsp; <span class="wdg_fontset_larger" onclick="wdg_fontset_size_set(2)">A+</span>
</div>
';

?>