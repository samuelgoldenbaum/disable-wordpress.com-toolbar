<?php
/*
Disable WordPress.com Toolbar is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Disable WordPress.com Toolbar is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Disable WordPress.com Toolbar. If not, see {URI to Plugin License}.
*/
/**
 * Plugin Name: Disable WordPress.com Toolbar
 * Plugin URI: https://github.com/samuelgoldenbaum/disable-wordpress.com-toolbar
 * Description: Disable WordPress.com Toolbar
 * Author: Samuel Goldenbaum
 * Version: 1.0.0
 * Author URI: https://github.com/samuelgoldenbaum/
 * License: GPL3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 */

/**
 * Filter the Jetpack module list and remove the WordPress.com toolbar.
 *
 * @param array $modules Collection of Jetpack modules.
 *
 * @return array
 */
function disable_wordpress_com_toolbar($modules) {
    if (isset($modules['masterbar'])) {
        unset($modules['masterbar']);
    }
    return $modules;
}

add_filter('jetpack_get_available_modules', 'disable_wordpress_com_toolbar');