<?php 


// START OF LOADING THE STYLES/ STYLESHEETS 

function loadstlyes()
{

wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', 
array(), false, 'all'); 
// version and media 

wp_enqueue_style('bootstrap');


wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', 
array(), false, 'all'); 
// version and media 
wp_enqueue_style('stylesheet');

}

add_action( 'wp_enqueue_scripts', 'loadstlyes' ); 

// END OF LOADING THE STYLES/ STYLESHEETS 


// START OF LOADING THE JQUERY
function loadJquery()
{

wp_deregister_script('jquery'); 

wp_register_script('jquery', get_template_directory_uri() . '/js/jQueryV3.5.1.min.js', '', 1, true); 
wp_enqueue_script('jquery'); 

} 

add_action( 'wp_enqueue_scripts', 'loadJquery' ); 

// END OF LOADING THE JQUERY

// START OF LOADING THE JAVASCRIPT 
function loadJs()
{

wp_register_script('customjs', get_template_directory_uri() . '/js/myscripts.js', '', 1, true); 
wp_enqueue_script('customjs'); 

} 

add_action( 'wp_enqueue_scripts', 'loadJs' ); 

add_theme_support( 'menus' ); 
add_theme_support('widgets');

register_nav_menus( 

array(

	'nav-menu' => __('nav-menu', 'theme'), 
)

); 

// END OF LOADING THE JAVASCRIPT 


// START OF FOOTER WIDGETS 

function wpb_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer 1 Widget Area',
		'id'            => 'footer-1-widget',
		'before_widget' => '<div class="footer1-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="footer1-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Footer 2 Widget Area',
		'id'            => 'footer-2-widget',
		'before_widget' => '<div class="footer2-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="footer2-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Footer 3 Widget Area',
		'id'            => 'footer-3-widget',
		'before_widget' => '<div class="footer3-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="footer3-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => 'Footer 4 Widget Area',
		'id'            => 'footer-4-widget',
		'before_widget' => '<div class="footer4-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="footer4-title">',
		'after_title'   => '</h2>',
	) );


}
add_action( 'widgets_init', 'wpb_widgets_init' );

// 

register_nav_menus( 

	array(
	
		'nav-widgets' => __('nav-widgets', 'theme'), 
	)
	
	); 


add_theme_support('post-thumbnails');

add_image_size('smallest', 300, 300, true );
add_image_size('medium', 600, 600, true);
add_image_size('largest', 850, 850, true);

add_theme_support('custom-logo', array(
	'height' => 100,
	'width' => 300,
	'flex-width' => true,
	'flex-height' => true,
));


function theme_prefix_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}}
add_filter('get_custom_logo','change_logo_class');
function change_logo_class($html){
	$html = str_replace('custom-logo-link', 'logoDmSavers', $html);
	return $html;
}



?>