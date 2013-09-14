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


if (!class_exists('Mod_Fontset')) {
	
	class Mod_Fontset {

		function instance_id($new = false) {
			static $num = 0;

			if ($new) {
				$num++;
			}

			return $num;
		}

		function prepare(&$params) {
			$id = $this->instance_id(true);

			$this->cookie_name = trim($params->get('cookie_name', ''));
			if ($this->cookie_name == '') {
				$this->cookie_name = 'fontset_info';
			}

			$this->base_size = intval($params->get('base_size', ''));
			if ($this->base_size == 0) {
				$this->base_size = 12;
			}

			if ($id == 1) {
				$document = JFactory::getDocument();
				$document->addScriptDeclaration(
'document.mod_fontset_cookie_name = "' . $this->cookie_name . '";
document.mod_fontset_base_size = ' . $this->base_size . ';'
				);
				$document->addScript('modules/mod_fontset/js/fontset.js');
			}
		}

	}

}

?>