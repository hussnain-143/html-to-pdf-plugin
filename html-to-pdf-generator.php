<?php
/*
Plugin Name: HTML to PDF  Generator
Plugin URI: https://example.com
Description: A lightweight plugin to convert WordPress pages or posts to PDF.
Version: 1.1.0
Author: Team  Six 
Author URI: https://example.com
*/

// Prevent direct access
if ( ! defined( 'WPINC' ) ) exit;
if ( ! defined( 'ABSPATH' ) ) exit;


add_action('admin_notices', 'mpdf_requirements_notice');
function mpdf_requirements_notice() {
    echo '<div class="notice notice-success is-dismissible"><p>HTML to PDF  Generator Plugin Activated</p></div>';
}

define('PATH', plugin_dir_path(__FILE__));
// Include the mPDF library
require PATH.'includes/short-code.php';
require PATH.'includes/pdf-generator.php';
require PATH.'includes/admin-menu.php';

?>
