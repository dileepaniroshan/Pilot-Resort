<?php

function my_acf_add_local_field_groups() {
    remove_filter('acf_the_content', 'wpautop' );
}
add_action('acf/init', 'my_acf_add_local_field_groups');

//Support for post thumbanils
add_theme_support( 'post-thumbnails' ); 

//Stop WordPress from adding HTML line breaks in posts (affects bootstrap)
remove_filter('the_content', 'wpautop');

//Load jQuery
function jQuery_script() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js", false, null);
   
    wp_enqueue_script('jquery');
}
add_action("init", "jQuery_script");

// Load assets - Loads all the stylesheets and JavaScript files into the page head/footer
function load_assets() 
{
    //copy a line to loaad additional styles
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', false, '1.0.0');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css', false, '1.0.0');
   
    //copy a line to loaad additional scripts
    
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/site.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'load_assets');
//-------

//Register nav menus
function register_my_menus() {
    register_nav_menu('Primary Menu',__( 'Primary Menu' ));
}
add_action( 'init', 'register_my_menus' );

/* Use this in templates to load an image from the public/images folder e.g. <?php echo getImg('logo.php'); ?> */
function getImg($filename) 
{
    return get_template_directory_uri() . '/public/images/' . $filename;
}

/* user this is templates to load any widgets you have created e.g. <?php loadWidget('widget_slug_here'); ?> */
function loadWidget($widget) 
{                       
    if(is_active_sidebar($widget)) 
    {
        dynamic_sidebar($widget);
    }
}

//ACF Global settings section
if( function_exists('acf_add_options_page') ) 
{
 	// add parent
	$parent = acf_add_options_page(array(
		'page_title' 	=> 'Global Settings'
	));
	
    // add sub pages
    
    acf_add_options_sub_page(array(
		'page_title' 	=> 'Common Settings',
		'parent_slug' 	=> $parent['menu_slug']
    ));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header Settings',
		'parent_slug' 	=> $parent['menu_slug']
    ));
    
    
    acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer settings',
		'parent_slug' 	=> $parent['menu_slug']
	));	
}

?>