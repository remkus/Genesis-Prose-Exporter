<?php
/*
Plugin Name: Genesis Prose Exporter
Version: 0.1
Plugin URI: http://remkusdevries.com/plugins/genesis-prose-exporter/
Description: This plugin hooks Prose settings into Genesis Exporter, allowing Prose Design Settings to be exported.
Author: Remkus de Vries
Author URI: http://remkusdevries.com/
*/


if ( defined( 'PROSE_SETTINGS_FIELD' ) ) {
	add_filter( 'genesis_export_options', 'fst_prose_export_options' );
}

/**
* Hook Prose into Genesis Exporter, allowing Prose Design Settings to be exported.
*
* Requires Genesis 1.6+.
*
* @param array $options
* @author Remkus de Vries, Gary Jones
* @return array
*/
function fst_prose_export_options( $options ) {
	$options['prose'] = array( 'label' => __( 'Design Settings', PROSE_DOMAIN ), 'settings-field' => PROSE_SETTINGS_FIELD );
	return $options;
}