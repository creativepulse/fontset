<?php

/*
Plugin Name: FontSet
Plugin URI: http://www.creativepulse.gr/en/appstore/fontset
Version: 1.3
Description: FontSet lets users increase, decrease or reset the font size of the page.
License: http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
Author: Creative Pulse
Author URI: http://www.creativepulse.gr
*/


class CpExt_FontSet extends WP_Widget {

	function __construct() {
		$options = array('classname' => 'CpExt_FontSet', 'description' => 'Increase, decrease or reset the font size of the page.');
		$this->WP_Widget('CpExt_FontSet', 'FontSet', $options);
	}

	function register_widget() {
		register_widget(get_class($this));
	}

	function widget($args, $instance) {
		$layout = (string) @$instance['layout'];
		if ($layout == '') {
			$layout = 'default';
		}

		require_once(dirname(__FILE__) . '/inc/widget.php');
		$widget = CpWidget_FontSet::get_model();
		$widget->prepare($instance['cookie_name'], $instance['base_size']);

		echo $args['before_widget'];
		echo empty($instance['title']) ? '' : $args['before_title']. $instance['title'] . $args['after_title'] . "\n";

		$layout_filename = dirname(__FILE__) . '/widget_layouts/' . $layout . '.php';
		if (strpos($layout, "\0") !== false || strpos($layout, '..') !== false || strpos($layout, ':') !== false || strpos($layout, '/') !== false || strpos($layout, '\\') !== false) {
			echo __('Invalid layout value') . "\n";
		}
		else if (!file_exists($layout_filename)) {
			echo __('Layout script not found') . "\n";
		}
		else {
			require($layout_filename);
		}

		echo $args['after_widget'];
	}

	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title'] = $new_instance['title'];
		$instance['cookie_name'] = $new_instance['cookie_name'];
		$instance['base_size'] = $new_instance['base_size'];
		$instance['layout'] = $new_instance['layout'];
		return $instance;
	}

	function form($instance) {
		$default_name = '';
		$layouts = array();
		$path = dirname(__FILE__) . '/widget_layouts';
		if ($dp = @opendir($path)) {
			while (false !== ($file = readdir($dp))) {
				if (preg_match('/\.php$/', $file)) {
					if (strtolower($file) == 'default') {
						$default_name = $file;
					}
					else {
						$layouts[] = substr($file, 0, -4);
					}
				}
			}
			closedir($dp);
		}
		if ($default_name) {
			array_unshift($layout, $default_name);
			if (empty($instance['layout'])) {
				$instance['layout'] = $default_name;
			}
		}

		$instance = wp_parse_args((array) $instance, array('title' => '', 'search_options' => '', 'layout' => ''));
		echo
'<p><label for="' . $this->get_field_id('title') . '">' . __('Title') . ':</label>
	<input class="widefat" id="' . $this->get_field_id('title') . '" name="' . $this->get_field_name('title') . '" type="text" value="' . esc_attr($instance['title']) . '" />
</p>
<p><label for="' . $this->get_field_id('cookie_name') . '">' . __('Cookie name') . ':</label>
	<input class="widefat" id="' . $this->get_field_id('cookie_name') . '" name="' . $this->get_field_name('cookie_name') . '" type="text" value="' . esc_attr($instance['cookie_name']) . '" title="' . __('Default') . ': fontset_info" />
</p>
<p><label for="' . $this->get_field_id('base_size') . '">' . __('Base size') . ':</label>
	<input class="widefat" id="' . $this->get_field_id('base_size') . '" name="' . $this->get_field_name('base_size') . '" type="text" value="' . esc_attr($instance['base_size']) . '" title="' . __('Default') . ': 12" />
</p>
<p><label for="' . $this->get_field_id('layout') . '">' . __('Layout') . ':</label>
	<select class="widefat" id="' . $this->get_field_id('layout') . '" name="' . $this->get_field_name('layout') . '">
';

		foreach ($layouts as $layout) {
			echo
'		<option value="' . htmlspecialchars($layout) . '"' . ($instance['layout'] == $layout ? ' selected="selected"' : '') . '>' . htmlspecialchars($layout) . '</option>
';
		}

		echo
'	</select>
</p>
';
	}

}

add_action('widgets_init', array('CpExt_FontSet', 'register_widget'));

?>