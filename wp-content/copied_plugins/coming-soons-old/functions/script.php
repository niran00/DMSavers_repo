<?php
	if ( ! defined( 'ABSPATH' ) ) exit;
	function rw_cs_script(){
		// wp_enqueue_media();
		// wp_enqueue_style('wp-color-picker');
		// wp_enqueue_script('wp-color-picker');
		wp_enqueue_script('jquery');
		wp_enqueue_script('jquery-ui-sortable');
		wp_enqueue_style('rw_cs_admin_css',RW_PLUGIN_URL.'backend/css/Rich-Web-CS-Admin.css');
		wp_enqueue_style('rw_cs_bootstrap_css',RW_PLUGIN_URL.'backend/css/bootstrap.css');
		wp_enqueue_style('rw_cs_bootstrap_datepicker_css',RW_PLUGIN_URL.'backend/css/bootstrap-datetimepicker.min.css');
		wp_enqueue_script('rw_cs_admin_js',RW_PLUGIN_URL.'backend/js/Rich-Web-CS-Admin.js',array('jquery','jquery-ui-datepicker'));
		wp_enqueue_script('rw_cs_bootstrap_js',RW_PLUGIN_URL.'backend/js/bootstrap.js');
		wp_enqueue_script('rw_cs_bootstrap_datepicker_js',RW_PLUGIN_URL.'backend/js/bootstrap-datetimepicker.min.js');
		wp_enqueue_script('rw_cs_tinymce_js',RW_PLUGIN_URL.'backend/js/tinymce.min.js');
		wp_enqueue_script('rw_cs_tinymce_js',RW_PLUGIN_URL.'backend/js/jquery.tinymce.min.js');
		wp_register_style('fontawesomeSl-css',RW_PLUGIN_URL.'backend/css/richwebicons.css');
		wp_enqueue_style('fontawesomeSl-css');
	}
?>