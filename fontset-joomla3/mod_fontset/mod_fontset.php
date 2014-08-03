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


require_once(dirname(__FILE__) . '/helper.php');

$widget = CpWidget_FontSet::get_model();
$widget->prepare($params);

$path = JModuleHelper::getLayoutPath('mod_fontset', $params->get('layout', 'default'));
if (file_exists($path)) {
	require($path);
}

?>