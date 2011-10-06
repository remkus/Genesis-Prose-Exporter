<?php
/**
 * Hooks Prose settings into Genesis Exporter, allowing Prose Design Settings to be exported.
 *
 * @package GenesisProseExporter
 * @author  Remkus de Vries
 * @author  Gary Jones
 * @license http://www.opensource.org/licenses/gpl-license.php GPLv2 or later
 * @link    http://remkusdevries.com/plugins/genesis-prose-exporter/
 * @version 0.1
 *
 * @wordpress
 * Plugin Name: Genesis Prose Exporter
 * Version: 0.1
 * Plugin URI: http://remkusdevries.com/plugins/genesis-prose-exporter/
 * Description: Hooks Prose settings into Genesis Exporter, allowing Prose Design Settings to be exported.
 * Author: Remkus de Vries
 * Author URI: http://remkusdevries.com/
 */

if ( defined( 'PROSE_SETTINGS_FIELD' ) )
	add_filter( 'genesis_export_options', 'gpe_prose_export_options' );

/**
* Filters Genesis exporter options to include Prose Design Settings.
*
* Requires Genesis 1.6+.
*
* @param array $options Existing Genesis export options
* @author Remkus de Vries, Gary Jones
* @return array Amended Genesis export options
*/
function gpe_prose_export_options( $options ) {

	$options['prose'] = array(
		'label'          => __( 'Design Settings', PROSE_DOMAIN ),
		'settings-field' => PROSE_SETTINGS_FIELD
	);
	return $options;

}