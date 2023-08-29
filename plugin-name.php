<?php

/**
 * Plugin Name:     WP Starter Plugin
 * Plugin URI:      https://github.com/GregoireCiles/wp-starter-plugin
 * Description:     WordPress starter plugin
 * Version:         0.0.1
 * Author:          Gregoire Ciles
 * Author URI:      https://www.gregoireciles.fr/
 * License:         MIT License
 * Text Domain:     wp-starter-plugin
 */

use PluginNamespace\Plugin;

add_action('plugins_loaded', function () {
    (new Plugin)->register();
});
