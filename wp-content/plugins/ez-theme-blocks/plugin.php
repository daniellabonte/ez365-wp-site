<?php
/*
 * Plugin Name: EZ Theme Blocks
 * Author: Daniel Labonte
 * Version: 1.0.0
 */

function loadMyBlockFiles() {
  wp_enqueue_script(
    'ez_section_banner',
    plugin_dir_url(__FILE__) . 'SectionBanner.js',
    array('wp-blocks', 'wp-i18n', 'wp-editor')
  );
}

add_action('enqueue_block_editor_assets', 'loadMyBlockFiles');

?>