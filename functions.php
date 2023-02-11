<?php

define('PARICH_THEME_VERSION', '1.1');
define('PARICH_FUNCTIONS_FILE_PATH', dirname(__FILE__));

//////////////////////////////////////////////////////////////////////////////
// THEME CONFIGURATION
//////////////////////////////////////////////////////////////////////////////

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

remove_filter('the_content', 'wpautop');

// remove_filter('pr_remove_wpautop','wpautop');

if (function_exists('wp_head')) {
    remove_action( 'wp_head', 'feed_links', 2 );
    remove_action( 'wp_head', 'feed_links_extra', 3);
    remove_action( 'wp_head', 'rsd_link');
    remove_action( 'wp_head', 'wlwmanifest_link');
    remove_action( 'wp_head', 'wp_generator');  
    // remove_action( 'wp_head', 'rel_canonical');
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
}

if (function_exists( 'add_theme_support')) {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );
    add_theme_support( 'widgets');
    // add_theme_support( 'post-formats', array('gallery','audio') ); 
}

if ( function_exists('update_option')) {
    update_option('thumbnail_size_w', 150);
    update_option('thumbnail_size_h', 150);
    update_option('medium_size_w', 640);
    update_option('medium_size_h', 640);
    update_option('large_size_w', 1000);
    update_option('large_size_h', 800);       
}

if ( function_exists( 'add_image_size' ) ) { 
    add_image_size('featured-post-thumb',610, 342, true);
    add_image_size('download-post-thumb',220, 9999, false);
    add_image_size('facade-post-thumb',220, 162, true);
}

add_filter( 'wp_title', 'parich_title');
if (!function_exists('parich_title')) {
    function parich_title() {
        global $paged, $page, $post;
        $site_title = get_bloginfo( 'name' );
        $sep = ' — ';
        $site_description = get_bloginfo( 'description', 'display');
        $name = get_the_title();
        if (is_page() || is_single()) {
            $title = "$site_title $sep $name";
        }
        if (is_home() || is_front_page() ) {
            $title = $site_title;
        }
        if (is_archive()) {
            $archive = ucfirst($post->post_type);
            $title = "$site_title $sep $archive";
        }
        if (is_tag() || is_category()) {
            $tag = single_tag_title( '', false );
            $title = "$site_title $sep Archives: $tag";
        }
        return $title;
    }
}

// add_filter( 'body_class', 'parich_body_class' ); 
// if (!function_exists('parich_body_class')) {
//     function parich_body_class( $classes ) {
//         global $post;
//         if( is_page() ){
//             $template = get_page_template_slug();
//             if ( !empty($template) ) {
//                 $template_slug = sanitize_html_class( str_replace( '.php', '', $template ) );
//                 $brand_prefix = 'template-brand-';
//                 $main_prefix = 'template-main-';
//                 if (0 === strpos($template_slug, $brand_prefix)) {
//                     $classes[] = sanitize_html_class( str_replace( $brand_prefix, '', $template_slug ) );
//                 }
//                 if (0 === strpos($template_slug, $main_prefix)) {
//                     $classes[] = sanitize_html_class( str_replace( $main_prefix, '', $template_slug ) );
//                 } 
//                 else {
//                     $classes[] = $template_slug;
//                 }
//             }
//         }
//         return $classes;
//     }
// }

// add_filter( 'post_class', 'parich_post_class' ); 
// if (!function_exists('parich_post_class')) {
//     function parich_post_class( $classes ) {
//         global $post;
//         foreach ( ( get_the_category( $post->ID ) ) as $category ) {
//             $classes[] = $category->category_nicename;
//         }
//         return $classes;
//     }
// }

// add_action('admin_init', 'parich_admin_menu');
if (!function_exists('parich_admin_menu')) {
    function parich_admin_menu() {
        remove_menu_page('edit.php');
        remove_menu_page('edit-comments.php');
    }
}


//////////////////////////////////////////////////////////////////////////////
// LOADING SCRIPTS & STYLES
//////////////////////////////////////////////////////////////////////////////

add_action('wp_enqueue_scripts', 'parich_enqueue_scripts' );
if (!function_exists('parich_enqueue_scripts')) {
    function parich_enqueue_scripts() {
        // global $post;
        $template_uri = get_template_directory_uri();
        // wp_enqueue_style('normalize', $template_uri . '/css/normalize.css');

        wp_enqueue_style('videojs', $template_uri . '/css/video-js.css');
        wp_enqueue_style('fancybox', $template_uri . '/css/jquery.fancybox.css');
        wp_enqueue_style('style', get_bloginfo('stylesheet_url'), '', PARICH_THEME_VERSION );
        // wp_enqueue_style('ie', $template_uri . 'css/ie.css', '', PARICH_THEME_VERSION );
        if ( is_page_template( 'templates/brand-parich.php' ) ) {
            wp_enqueue_style('parich', $template_uri . '/css/parich.css', array('normalize','style'), PARICH_THEME_VERSION ); 
        }
        if ( is_page_template( 'templates/brand-superblack.php' ) ) {
            wp_enqueue_style('superblack', $template_uri . '/css/superblack.css', array('normalize','style'), PARICH_THEME_VERSION ); 
        }
        if ( is_page_template( 'templates/brand-nitro.php' ) ) {
            // wp_enqueue_style('nitro', $template_uri . '/css/nitro.css', array('normalize','style'), PARICH_THEME_VERSION ); 
        }
        if ( wp_is_mobile() ) {
            wp_enqueue_style('mobile', $template_uri . '/css/mobile.css', array('style'), PARICH_THEME_VERSION );        
        }
        // wp_deregister_script('jquery');
        wp_enqueue_script('jquery', $template_uri . '/js/jquery-1.11.1.min.js');
        // wp_enqueue_script('jquery');
        wp_enqueue_script('jquery-mousewheel', $template_uri . '/js/jquery.mousewheel.js',array('jquery'));
        wp_enqueue_script('jquery-easing', $template_uri . '/js/jquery.easing-1.3.js',array('jquery'));
        wp_enqueue_script('jquery-ui', $template_uri . '/js/jquery-ui-1.10.4.custom.min.js',array('jquery'));
        wp_enqueue_script('modernizr', $template_uri . '/js/modernizr.custom.js', array('jquery'));

        wp_enqueue_script('fancybox', $template_uri . '/js/jquery.fancybox.pack.js', array('jquery'));
        wp_enqueue_script('iscroll', $template_uri . '/js/iscroll.js' );
        wp_enqueue_script('resizeimagetoparent', $template_uri . '/js/jquery.resizeimagetoparent.js', array('jquery'));
        wp_enqueue_script('scrollto', $template_uri . '/js/jquery.scrollTo.min.js' );
        wp_enqueue_script('videojs', $template_uri . '/js/video.js', array('jquery'));
        wp_enqueue_script('audiojs', $template_uri . '/js/audio.min.js', array('jquery'));
        wp_enqueue_script('idtabs', $template_uri . '/js/jquery.idTabs.min.js' );
        if ( wp_is_mobile() ) {
            wp_enqueue_script('touch-swipe', $template_uri . '/js/jquery.touchSwipe.min.js', array('jquery'));       
        }
        wp_enqueue_script('custom', $template_uri . '/js/custom.js',array('jquery'), PARICH_THEME_VERSION, true );
    }
}

//////////////////////////////////////////////////////////////////////////////
// CLASS LOADING
//////////////////////////////////////////////////////////////////////////////

include_once(PARICH_FUNCTIONS_FILE_PATH . '/inc/admin/Meta_Boxes.php');
include_once(PARICH_FUNCTIONS_FILE_PATH . '/inc/util/Share_Util.php');
include_once(PARICH_FUNCTIONS_FILE_PATH . '/inc/util/Post_Util.php');
include_once(PARICH_FUNCTIONS_FILE_PATH . '/inc/util/Dealer_Util.php');

// $meta_boxes = new Meta_Boxes();
// $share_util = new Share_Util();

//////////////////////////////////////////////////////////////////////////////
// THEME ACTIVATION
//////////////////////////////////////////////////////////////////////////////

include_once(PARICH_FUNCTIONS_FILE_PATH . '/inc/parich-util.php');

$dealer_util = new Dealer_Util();

//////////////////////////////////////////////////////////////////////////////
// POST TYPE & TAXONOMY
//////////////////////////////////////////////////////////////////////////////

add_action('init', 'register_dealer_post_type');
if (!function_exists('register_dealer_post_type')) {
    function register_dealer_post_type() {
        $args = array(
            'label' => 'Dealers',
            'singular_label' => 'Dealer',
            'public' => true,
            'rewrite' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'show_in_nav_menus' => true,
            'supports' => array('title'),
            'menu_icon'   => 'dashicons-cart',
        );
        register_post_type('dealer', $args);
    }
}

add_action('init', 'register_knowledge_post_type');
if (!function_exists('register_knowledge_post_type')) {
    function register_knowledge_post_type() {
        $args = array(
            'label' => 'Knowledges',
            'singular_label' => 'Knowledge',
            'public' => true,
            'rewrite' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'show_in_nav_menus' => true,
            'taxonomies' => array('post_tag','category'),
            'supports' => array('title','editor','excerpt','thumbnail'),
            'menu_icon'   => 'dashicons-lightbulb',
            'has_archive' => true,
        );
        register_post_type('knowledge', $args);
        add_post_type_support( 'knowledge', array( 'date-archives', 'publish-future-posts' ) );
    }
}

add_action('init', 'register_download_post_type');
if (!function_exists('register_download_post_type')) {
    function register_download_post_type() {
        $args = array(
            'label' => 'Downloads',
            'singular_label' => 'Download',
            'public' => true,
            'rewrite' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'show_in_nav_menus' => true,
            'supports' => array('title','thumbnail'),
            'menu_icon'   => 'dashicons-download'
        );
        register_post_type('download', $args);
    }
}

add_action('init', 'register_instruction_post_type');
if (!function_exists('register_instruction_post_type')) {
    function register_instruction_post_type() {
        $args = array(
            'label' => 'Instructions',
            'singular_label' => 'Instruction',
            'public' => true,
            'rewrite' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'show_in_nav_menus' => true,
            'supports' => array('title','thumbnail'),
            'menu_icon'   => 'dashicons-media-document'
        );
        register_post_type('instruction', $args);
    }
}

add_action('init', 'register_locate_taxonomy');
if (!function_exists('register_locate_taxonomy')) {
    function register_locate_taxonomy() {
        register_taxonomy('locate', array( 'dealer' ),
            array ('hierarchical' => true,
                'label' => 'Locate',
                'query_var' => true)
        );
    }
}

add_action('init', 'register_file_type_taxonomy');
if (!function_exists('register_file_type_taxonomy')) {
    function register_file_type_taxonomy() {
        register_taxonomy('file_type', array( 'download' ),
            array ('hierarchical' => true,
                'label' => 'Type',
                'query_var' => true)
        );
    }
}

// add_action('admin_head', 'hide_download_post_formats');
// if (!function_exists('hide_download_post_formats')) {
//     function hide_download_post_formats() {
//         global $post_type;
//         if ($post_type == 'download' ) {
//             echo '<style>
//                 .post-type-download .format-status .post-title {
//                     display: none;
//                 }
//                 </style>';
//         }
        
//     }
// }

//////////////////////////////////////////////////////////////////////////////
// MENUS
//////////////////////////////////////////////////////////////////////////////

add_action('widgets_init', 'parich_register_nav_menu');
if(!function_exists('parich_register_nav_menu')) {
    function parich_register_nav_menu() {
        register_nav_menus( 
            array(
                'nav-bar' => 'Navigation Bar',
                'top-bar' => 'Top Bar'
            ) 
        );
    }
}

if(!function_exists('parich_nav_main')) {
    function parich_nav_main() {
        wp_nav_menu( array(
            'theme_location'  => 'nav-bar', 
            'menu'            => '',
            'container'       => 'nav',
            'container_class' => 'nav-main',
            'container_id'    => '',
            'menu_class'      => 'clearfix',
            'menu_id'         => '',
            'echo'            => true,
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'walker'          => '',
            'exclude'         => '14',   
        ));
    }
}

if(!function_exists('parich_nav_top')) {
    function parich_nav_top() {
        wp_nav_menu( array(
            'theme_location'  => 'top-bar',
            'menu'            => '',
            'container'       => 'nav',
            'container_class' => 'nav-top',
            'container_id'    => '',
            'menu_class'      => '',
            'menu_id'         => '',
            'echo'            => true,
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'depth'           => 0,
            'walker'          => ''     
        ));
    }
}

add_filter('wp_nav_menu', 'add_slug_class_to_menu_item');
if (!function_exists('add_slug_class_to_menu_item')) {
    function add_slug_class_to_menu_item($output){
        $ps = get_option('permalink_structure');
        if(!empty($ps)){
            $idstr = preg_match_all('/<li id="menu-item-(\d+)/', $output, $matches);
            foreach($matches[1] as $mid){
                $id = get_post_meta($mid, '_menu_item_object_id', true);
                $slug = basename(get_permalink($id));
                $output = preg_replace('/menu-item-'.$mid.'">/', 'menu-item-'.$mid.' menu-item-'.$slug.'">', $output, 1);
            }
        }
        return $output;
    }
}

//////////////////////////////////////////////////////////////////////////////
// DYNAMIC SIDEBAR
//////////////////////////////////////////////////////////////////////////////

// add_action('init', 'parich_register_sidebars');
// if(!function_exists('parich_register_sidebars')) {
//     function parich_register_sidebars() {
//         register_sidebar(array(
//             'id' => 'defau',
//             'name' => 'Default Sidebar'
//         ));
//     }
// }

//////////////////////////////////////////////////////////////////////////////
// META BOXES
//////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////
// META DATA
//////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////
// UTIL FUNCTION
//////////////////////////////////////////////////////////////////////////////

//add_filter('home_url', 'qtrans_convertURL');

if (!function_exists('shrink')) {
    function shrink($content, $limit, $read_more_symbol = '&hellip;')
    {
        $content = strip_tags($content);
        if ( qtrans_getLanguage() == "en" ) {
            $limit = 200;
        } 
        else if ( qtrans_getLanguage() == "th" ) {
            $limit = 350;
        }
        if (strlen($content) > $limit) {
            if ($read_more_symbol == '') {
                $read_more_symbol = '.';
            } else {
                $read_more_symbol = ' ' . $read_more_symbol;
            }
            $content = substr($content, 0, strpos($content, " ", $limit)) . $read_more_symbol;
        }
        return $content;
    }
}

if (!function_exists('get_home_url')) {
    function get_home_href() {
        $lang = qtrans_getLanguage();
        if ( $lang == "th" ) {
            $href = home_url();
        } 
        else {
            echo $home;
        }
    }
}

if (!function_exists('get_brand_page_href')) {
    function get_brand_page_href($brand = 'parich') {
        $lang = qtrans_getLanguage();
        $link = get_permalink( get_page_by_path( $brand ) );
        return qtrans_convertURL( $link , $lang);
    }
}


?>
