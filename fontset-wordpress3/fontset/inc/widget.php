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


if (!class_exists('CpWidget_FontSet')) {

	class CpWidget_FontSet {

		function get_model() {
			static $instance = null;
			if ($instance === null) {
				$instance = new CpWidget_FontSet();
			}
			return $instance;
		}

		function view_id($new = false) {
			static $num = 0;

			if ($new) {
				$num++;
			}

			return $num;
		}

		function prepare($cookie_name, $base_size) {
			static $prepared = false;
			if ($prepared) {
				return;
			}
			else {
				$prepared = true;
			}

			$this->cookie_name = trim($cookie_name);
			if ($this->cookie_name == '') {
				$this->cookie_name = 'fontset_info';
			}

			$this->base_size = intval($base_size);
			if ($this->base_size == 0) {
				$this->base_size = 12;
			}

			echo
'<script type="text/javascript">
document.wdg_fontset_cookie_name = "' . $this->cookie_name . '";
document.wdg_fontset_base_size = ' . $this->base_size . ';
</script>
<script type="text/javascript" src="' . plugins_url('/js/fontset.js', dirname(__FILE__)) . '"></script>
';
		}
	}

}

?>