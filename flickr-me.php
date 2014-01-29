<?php

/*
Plugin Name: Flickr Me
Plugin URI: http://www.wearepixel8.com/plugins/flickr-me
Description: Add a Flickr feed to any widget ready area
Version: 1.0.1
Author: We Are Pixel8
Author URI: http://www.wearepixel8.com
Text Domain: wap8plugin-i18n
License:
	Copyright 2013 We Are Pixel8 <hello@wearepixel8.com>
	
	This program is free software; you can redistribute it and/or modify it under
	the terms of the GNU General Public License, version 2, as published by the Free
	Software Foundation.
	
	This program is distributed in the hope that it will be useful, but WITHOUT ANY
	WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
	PARTICULAR PURPOSE. See the GNU General Public License for more details.
	
	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software Foundation, Inc.,
	51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*/

/*-----------------------------------------------------------------------------------*/
/* Constants
/*-----------------------------------------------------------------------------------*/

define( 'WAP8_FLICKR_ME', plugin_dir_path( __FILE__ ) );
define( 'WAP8_FLICKR_ME_VERSION', '1.0.0' );

/*-----------------------------------------------------------------------------------*/
/* Includes
/*-----------------------------------------------------------------------------------*/

include( WAP8_FLICKR_ME . 'includes/flickr-me-widget.php' );

/*-----------------------------------------------------------------------------------*/
/* Flickr Me CSS
/*-----------------------------------------------------------------------------------*/

add_action( 'wp_enqueue_scripts', 'wap8_flickr_me_css' );

function wap8_flickr_me_css() {
	
	if ( !is_admin() ) {
		
		wp_register_style( 'wap8-flickr-me', plugins_url( 'css/flickr-me.css', __FILE__ ), '', WAP8_FLICKR_ME_VERSION, 'screen' );
		
		wp_enqueue_style( 'wap8-flickr-me' );
		
	}
	
}

/*-----------------------------------------------------------------------------------*/
/* Flickr Me Text Domain
/*-----------------------------------------------------------------------------------*/

add_action( 'plugins_loaded', 'wap8_flickr_me_text_domain', 10 );

/**
 * Flickr Me Text Domain
 *
 * Load the text domain for internationalization.
 *
 * @package Flickr Me
 * @version 1.0.0
 * @since 1.0.0
 * @author Erik Ford for We Are Pixel8 <@notdivisible>
 *
 */

function wap8_flickr_me_text_domain() {
	
	load_plugin_textdomain( 'wap8plugin-i18n', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	
}