<?php
/*
     Plugin Name: Rich Coming Soon - Maintenance Mode & Under Construction
     Plugin URI: https://rich-web.org/wp-coming-soon
     Version: 1.1.4
     Description: Coming Soon WP plugin is Modern and responsive, manage your website while under construction or maintenance mode.
     Author: richteam
     Author URI: https://rich-web.org/
     License: https://www.gnu.org/licenses/gpl-2.0.html
*/

	if ( ! defined( 'ABSPATH' ) ) exit;
	define("RW_PLUGIN_URL", plugin_dir_url(__FILE__));

	register_activation_hook(__FILE__,'Rich_Web_CS_wp_activate');
	function Rich_Web_CS_wp_activate()
	{
		include('functions/RW_CS_Install.php');
	}
	add_action('admin_menu','Rich_Web_CS_Admin_Menu');

	function Rich_Web_CS_Admin_Menu()
	{
		$rw_menu=add_menu_page('Rich-Web CS Admin','Coming Soon','manage_options','Rich-Web CS Admin','Manage_Rich_Web_CS_Admin',plugins_url('/backend/Images/admin.png',__FILE__));
		add_action( 'admin_print_styles-' . $rw_menu, 'rw_cs_script' );
		add_submenu_page( 'Rich-Web CS Admin', 'Rich-Web Coming Soon Products', 'Our Products', 'manage_options', 'Rich-Web Coming Soon Products', 'Manage_Rich_Web_Coming_Soon_Products');
	}
	function Manage_Rich_Web_CS_Admin()
	{
		require_once('backend/Rich-Web-CS-Admin.php');
	}
	require_once('functions/script.php');
	require_once('theme/Rich-Web-CS-Ajax.php');
	require_once('backend/Rich-Web-CS-Ajax-Back.php');
	function Manage_Rich_Web_Coming_Soon_Products()
	{
		require_once('backend/Rich-Web-Products.php');
	}
	function rw_cs_dir()
	{
		$rw_cs_mode = unserialize(get_option('rw_cs_mode'));
		$rw_cs_yes_no =$rw_cs_mode['rw_cs_plugin_mode'];
		
		if($rw_cs_yes_no=="1")
		{
			// Exit if a custom login page
			if(preg_match("/login|admin|dashboard|account/i",$_SERVER['REQUEST_URI']) > 0 ){
				return false;
			}
			// Check if user is logged in.
			if (!is_user_logged_in())
			{
				$file = plugin_dir_path( __FILE__ )."theme/index.php";
				include($file);
				exit();
			}
			else{
				$wp_get_current_user = wp_get_current_user();
				$LoggedInUserID = $wp_get_current_user->ID;
				$UserData = get_userdata( $LoggedInUserID );
				
				if($UserData->roles[0] != "administrator")
				{
					$file = plugin_dir_path( __FILE__ )."theme/index.php";
					include($file);
					exit();
				}
			}
		}
	}
	add_action( 'template_redirect', 'rw_cs_dir' );

	if ( (isset($_GET['rw_cs_preview']) && $_GET['rw_cs_preview'] == 'true') )
	{
		$file = plugin_dir_path( __FILE__ )."theme/index.php";
		include($file);
		exit();
	}

	add_action('admin_bar_menu', 'rw_cs_admin_bar_button', 1000);
	function rw_cs_admin_bar_button()
	{
		global $wp_admin_bar;
		// $msg = __('Coming Soon Mode Active','');
		// Add Parent Menu
		$argsParent=array(
			'id' => 'myCustomMenu',
			// 'title' => $msg,
			'parent' => 'top-secondary',
			'href' => '?page=rw_coming_soon_wp',
			'meta' => array( 'class' => 'rw_cs_admin_bar_button_cs' ),
		);
		$wp_admin_bar->add_menu($argsParent);
		
	}

	function Rich_Web_CS_Color() {
		wp_enqueue_script(
			'alpha-color-picker-cs',
			plugins_url('/backend/js/alpha-color-picker-cs.js', __FILE__),
			array( 'jquery', 'wp-color-picker' ), // You must include these here.
			null,
			true
		);
		wp_enqueue_style(
			'alpha-color-picker-cs',
			plugins_url('/backend/css/alpha-color-picker-cs.css', __FILE__),
			array( 'wp-color-picker' ) // You must include these here.
		);
	}
	add_action( 'admin_enqueue_scripts', 'Rich_Web_CS_Color' );
?>