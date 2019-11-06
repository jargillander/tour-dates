<?php
/**
 * Post type: Event
 * @see https://codex.wordpress.org/Function_Reference/register_post_type
 * @see https://developer.wordpress.org/resource/dashicons/
 * @see https://generatewp.com/post-type/
 */

add_action('init', function() {

    $labels = array(
      'name'                  => _x('Events',                   'Post Type General Name', 'tour_dates_plugin'),
      'singular_name'         => _x('Event',                    'Post Type Singular Name', 'tour_dates_plugin'),
      'menu_name'             => __('Events',                   'tour_dates_plugin'),
      'name_admin_bar'        => __('Events',                   'tour_dates_plugin'),
      'archives'              => __('Events Archive',           'tour_dates_plugin'),
      'parent_item_colon'     => __('Parent Item:',             'tour_dates_plugin'),
      'all_items'             => __('Events',                   'tour_dates_plugin'),
      'add_new_item'          => __('Add new Event',            'tour_dates_plugin'),
      'add_new'               => __('Add new',                  'tour_dates_plugin'),
      'new_item'              => __('Add new Event',            'tour_dates_plugin'),
      'edit_item'             => __('Edit Event',               'tour_dates_plugin'),
      'update_item'           => __('Update Event',             'tour_dates_plugin'),
      'view_item'             => __('View Event',               'tour_dates_plugin'),
      'search_items'          => __('Search Item',              'tour_dates_plugin'),
    );

    $args = array(
      'label'                 => __('Events', 'tour_dates_plugin'),
      'labels'                => $labels,
      'supports'              => array('title', 'revisions', 'thumbnail'),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'menu_icon'             => 'dashicons-calendar-alt',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => false,
      'can_export'            => true,
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'post',
      'rewrite'               => array('slug' => 'event'),
    );

    register_post_type('event', $args);

  }, 0 );
