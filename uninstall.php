<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * @package Tidy_Head_Tag
 */

/**
 * If uninstall.php is not called by WordPress, die
 */
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	die;
}

$options = array(
	'tht_generator',
	'tht_edituri',
	'tht_wlwmanifest',
	'tht_shortlink',
	'tht_emoji',
	'tht_feed_links',
	'tht_feed_links_extra',
	'tht_restapi',
	'tht_oembed',
	'tht_rel_link',
);

foreach ( $options as $option ) {
	delete_option( $option );
}
