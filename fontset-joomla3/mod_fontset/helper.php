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


if (!class_exists('CpWidget_Fontset')) {
	
	class CpWidget_Fontset {

		public static function get_model() {
			static $instance = null;
			if ($instance === null) {
				$instance = new CpWidget_Fontset();
			}
			return $instance;
		}

		public function view_id($new = false) {
			static $num = 0;

			if ($new) {
				$num++;
			}

			return $num;
		}

		public function load_libraries($name) {
			static $libraries = array();
			$result = !isset($libraries[$name]);
			$libraries[$name] = true;
			return $result;
		}

		function prepare(&$params) {
			$this->cookie_name = trim($params->get('cookie_name', ''));
			if ($this->cookie_name == '') {
				$this->cookie_name = 'fontset_info';
			}

			$this->base_size = intval($params->get('base_size', ''));
			if ($this->base_size == 0) {
				$this->base_size = 12;
			}

			if ($this->load_libraries('*')) {
				$document = JFactory::getDocument();
				$document->addScriptDeclaration(
'document.cpwdg_fontset_cookie_name = "' . $this->cookie_name . '";
document.cpwdg_fontset_base_size = ' . $this->base_size . ';'
				);
				$document->addScript('modules/mod_fontset/js/fontset.js');
			}
		}

	}

}

?>