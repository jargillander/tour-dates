<?php
/**
 * Tour dates for bands and artists
 *
 * A WordPress plugin for bands and artists.
 *
 * Plugin Name:       Tour Dates
 * Plugin URI:        https://github.com/jargillander/tour-dates
 * Description:       Tour dates and live music events for bands and artists.
 * Version:           1.0.0
 * Base Version:      1.0.0
 * Author:            Janne Argillander
 * Author URI:        https://janneargillander.com
 * Text Domain:       tour_dates_plugin
 **/

if (!defined('ABSPATH')) {
  die;
}

class Tour_Dates_Plugin {

  public static function init() {
    // activation hook
    register_activation_hook(__FILE__, array('Tour_Dates_Plugin', 'activate'));

    // require custom post types
    require dirname(__FILE__) . '/includes/cpt/event.php';

    // load custom fields
    self::load_acf();
  }

  /**
   * Activate plugin hook
   */
  public static function activate() {
    if (!is_plugin_active('advanced-custom-fields-pro/acf.php') && current_user_can('activate_plugins')) {
      wp_die('Sorry, but this plugin requires Advanced Custom Fields to be installed and activated to work.');
    }
  }

  /**
   * Check if Advanced Custom Fields plugin is activated
   */
  public static function load_acf() {
    // search acf json files inside this plugin
    add_filter('acf/settings/load_json', function($paths) {
      $paths[] = dirname(__FILE__) . '/includes/acf-json';
      return $paths;
    });
  }

}

// init
Tour_Dates_Plugin::init();
