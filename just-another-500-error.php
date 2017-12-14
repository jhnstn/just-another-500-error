<?php

/**
 * Plugin Name: Just Another 500 Error
 * Plugin URI: example.com
 * Description: This plugin is for testing broken plugins
 * Verion: 0.0.1
 * Author: Jason Johnston
 *
 */

add_action( 'wp', 'so_long_and' );
function so_long_and() {
  throw new Exception( 'Thanks for all the fish!' );
};


add_action( 'admin_head', 'look_over_there' );
function look_over_there() {
  throw new Exception( 'Is that an elephant?' );
}
