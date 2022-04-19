<?php
/**
 * Functions of theme.
 *
 * @package Meg
 * @author NovaData
 */

if ( ! function_exists( 'ndt_setup' ) ) {
	/**
     * Register default theme features and functions.
	 *
	 * @return void
	 */
	function ndt_setup() : void {
		/*
		 * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
		 */
		load_theme_textdomain( 'ndt', get_template_directory() . '/languages' );

		/*
		 * Add title tag dinamicaly in pages.
		 */
		//add_theme_support( 'title-tag' );

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

        /**
         * Register dynamic navigation menus
         * 
         * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
         */
		register_nav_menus(
			array(
				'menu_navbar_ndt'  => __( 'Menu Navbar', 'ndt' ),
				'menu_mapa_ndt'  => __( 'Menu Mapa', 'ndt' ),
				'menu_lojas_ndt'  => __( 'Menu Lojas', 'ndt' ),
			)
		);

		/*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width  = 50;
		$logo_height = 44;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);
		//require_once( __DIR__ . '/inc/class-walker-nav-menu.php');
	}
}
add_action( 'after_setup_theme', 'ndt_setup' );

/**
 * Customizer additions.
 */
//require get_template_directory() . '/inc/customizer.php';

/**
 * Enqueue scripts and styles.
 * 
 * The highest priority of scripts or styles is bottom from top.
 * 
 * @link https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
 *
 * @return void
 */
function ndt_scripts() {

    // //google fonts style
	// wp_enqueue_style( 'ndt-fonts', 'https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400;500;600;700;800;900&display=swap', false, true );

    // //bootstrap
	// wp_enqueue_style( 'ndt-bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', false, true );

    // wp_enqueue_script( 'ndt-bootstap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array( 'jquery' ), false );


	// //swiper
	// wp_enqueue_style( 'ndt-swiper-style','https://unpkg.com/swiper@7/swiper-bundle.min.css', false, true );  
	// wp_enqueue_script( 'ndt-swiper-script', 'https://unpkg.com/swiper@7/swiper-bundle.min.js', array(), false );

	// //animate on scroll
	// wp_enqueue_style( 'ndt-aos-style', 'https://unpkg.com/aos@next/dist/aos.css', false, false );
	// wp_enqueue_script( 'ndt-aos-script', 'https://unpkg.com/aos@next/dist/aos.js', array(), false );
	
	// //toastify
	// wp_enqueue_style( 'ndt-toastify-style', 'https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css', false, false );
	// wp_enqueue_script( 'ndt-tostify-script', 'https://cdn.jsdelivr.net/npm/toastify-js', array(), false );
		

	// //fancy box
	// wp_enqueue_style( 'ndt-fancy-style', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css', false, true );
	// wp_enqueue_script( 'ndt-fancy-script', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js', array(), true );
	
	// // if ( function_exists( 'is_product' ) && is_product() ) {
	// // 	//jquery zoom
	// // 	wp_enqueue_script( 'ndt-jqueryzoom-script', get_template_directory_uri() . '/assets/js/jquery.zoom.min.js', array('jquery'), true );
	// // }
	// //main style
	// wp_enqueue_style( 'ndt-style', get_template_directory_uri() . '/assets/css/style.compilado.css', array(), wp_get_theme()->get( 'Version' ) , 'all' );

	// if( is_page() && !is_page_template() ){
	// 	wp_enqueue_style( 'ndt-woocommerce-style', get_template_directory_uri() . '/assets/css/woocommerce.css', array(), wp_get_theme()->get( 'Version' ) , 'all' );
	// }
}
add_action( 'wp_enqueue_scripts', 'ndt_scripts' );

/**
 * 
 * Add excerpt support.
 * 
 */
add_post_type_support( 'page', 'excerpt' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ndt_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Social', 'ndt' ),
			'description'   => esc_html__( 'Add widgets here.', 'ndt' ),
			'id'            => 'sidebar-social',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
// add_action( 'widgets_init', 'ndt_widgets_init' );

/**
 * Implement class in menu feature.
 */
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
// add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

/**
 * Filter to trim span on inputs cf7
 */
// add_filter('wpcf7_form_elements', function($content) {
//     $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
//     return $content;
// });

/**
 * Get thumbnail current post and apply placeholder if not exists thumbnail
 */
function grab_post_thumbnail_url( $id ) 
{
	$theThumbnail = get_the_post_thumbnail_url( $id, 'full' );
	return $theThumbnail ? $theThumbnail : get_template_directory_uri() . '\assets\images\placeholder-thumbnail.png';
}

/**
 * Get the template breadcrumb;
 */
// include_once __DIR__ . '/inc/template-breadcrumb.php';

/**
 * Get the product list;
 */
// require_once __DIR__ . '/inc/product-list.php';

/**
 * Get the product list formater;
 */
require_once __DIR__ . '/vendor/autoload.php';

/**
 * Get the Cart ajax;
 */
// require_once __DIR__ . '/source/Cart/ndt-cart.php';

/** 
 * Get wc modifications
 */
// include_once __DIR__ . '/inc/wc-modifications.php';

/** 
 * Get carbon fields
 */
include_once __DIR__ . '/source/CarbonFields/crb.php';

/** 
 * Get custom logo user
 */
function get_the_custom_brand() {
    $custom_logo_id = get_theme_mod( 'custom_logo' ); 
    $image = wp_get_attachment_image_src( $custom_logo_id, 'full' );
    return $image[0];
}

/*
* Plugin Name: Course Taxonomy
* Description: A short example showing how to add a taxonomy called Course.
* Version: 1.0
* Author: developer.wordpress.org
* Author URI: https://codex.wordpress.org/User:Aternus
*/
 
function ndt_register_taxonomy_marca() {
	$labels = array(
		'name'              => _x( 'Marcas', 'taxonomy general name' ),
		'singular_name'     => _x( 'Marca', 'taxonomy singular name' ),
		'search_items'      => __( 'Procurar marcas' ),
		'all_items'         => __( 'Todas as marcas' ),
		'parent_item'       => __( 'Marca ascendente' ),
		'parent_item_colon' => __( 'Marca ascendente:' ),
		'edit_item'         => __( 'Editar marca' ),
		'update_item'       => __( 'Atualizar marca' ),
		'add_new_item'      => __( 'Adicionar nova marca' ),
		'new_item_name'     => __( 'Nova marca' ),
		'menu_name'         => __( 'Marca' ),
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => [ 'slug' => 'marca' ],
	);
	register_taxonomy( 'marca', [ 'product' ], $args );
}
add_action( 'init', 'ndt_register_taxonomy_marca' );

function ndt_register_taxonomy_parceiro() {
	$labels = array(
		'name'              => _x( 'Parceiros', 'taxonomy general name' ),
		'singular_name'     => _x( 'Parceiro', 'taxonomy singular name' ),
		'search_items'      => __( 'Procurar Parceiros' ),
		'all_items'         => __( 'Todas as Parceiros' ),
		'parent_item'       => __( 'Parceiro ascendente' ),
		'parent_item_colon' => __( 'Parceiro ascendente:' ),
		'edit_item'         => __( 'Editar Parceiro' ),
		'update_item'       => __( 'Atualizar Parceiro' ),
		'add_new_item'      => __( 'Adicionar nova Parceiro' ),
		'new_item_name'     => __( 'Nova Parceiro' ),
		'menu_name'         => __( 'Parceiro' ),
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => [ 'slug' => 'parceiro' ],
	);
	register_taxonomy( 'parceiro', [ 'product' ], $args );
}
add_action( 'init', 'ndt_register_taxonomy_parceiro' );
