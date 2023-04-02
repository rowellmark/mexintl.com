<?php
/*
 * Register sidebars
 */
function register_ai_child_starter_theme_sidebars() {
	$items = [
		'Logo',
		'Header: Translate',
		'Home: Slideshow',
		'Home: Contact Info',
		'Home: Quick Search',
		'Home: New Properties',
		'Home: Central Merida',
		'Home: Beach Properties',
		'Home: North Merida',
		'Home: Greater Yucatan',
		'Home: Haciendas & Ranchos',
		'Home: Welcome',
		'Home: Meet The Team',
		'Home: Instagram',
		'Footer: Form',
		'Footer: Contact Info',
		'Footer: Disclaimer',
	];

	foreach ($items as $item) {
		if (! empty($item)) {
			register_sidebar([
				'name' => $item,
				'id' => sanitize_title($item),
				'before_widget' => '',
				'after_widget' => '',
				'before_title' => '',
				'after_title' => ''
			]);
		}
	}
}

add_action( 'widgets_init', 'register_ai_child_starter_theme_sidebars', 11 );

/*
 * Enqueue theme styles and scripts
 */
function ai_starter_theme_enqueue_child_assets() {
	
	wp_enqueue_style('google-font-jost', 'https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
	wp_enqueue_style('google-font-cinzel', 'https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&display=swap');
	wp_enqueue_style('google-ebgaraond', 'https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap');
	wp_enqueue_style('adobe-font', 'https://use.typekit.net/kei8fkl.css');



	/* Enqueue my scripts */
	wp_enqueue_script('aios-starter-theme-child-script', get_stylesheet_directory_uri(). '/js/scripts.js');

}

add_action( 'wp_enqueue_scripts', 'ai_starter_theme_enqueue_child_assets', 20 );

/*
 * Add custom data attributes to menu items
 */
function ai_starter_theme_add_menu_link_attributes( $atts, $item, $args ) {
	$atts['data-title'] = $item->title;
	return $atts;
}

add_filter( 'nav_menu_link_attributes', 'ai_starter_theme_add_menu_link_attributes', 10, 3 );

/*
 * Add image sizes
 */
//add_image_size('cyclone-slide', 1024, 768, true);


/** Require all modules on theme */
function ai_starter_theme_require_child_modules () {
    $modules = glob( get_stylesheet_directory() . '/modules/*' , GLOB_ONLYDIR );

    if ( $modules ) {
        
        foreach ( $modules as $module ) {
            if ( file_exists( $module . '/module.php' ) ) {
                require_once( $module . '/module.php' );
            }
            
            if ( file_exists( $module . '/shortcodes.php' ) ) {
                require_once( $module . '/shortcodes.php' );
            }
        }
    }
}
add_action( 'after_setup_theme', 'ai_starter_theme_require_child_modules' );

/*
 * Define content width
 */
if ( ! isset( $content_width ) ) {
	$content_width = 960;
}
