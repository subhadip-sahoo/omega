<?php
if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

/**
 * Twenty Fifteen only works in WordPress 4.1 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.1-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twentyfifteen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Twenty Fifteen 1.0
 */
function twentyfifteen_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on twentyfifteen, use a find and replace
	 * to change 'twentyfifteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'twentyfifteen', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'twentyfifteen' ),
		'footer' => __( 'Footer Menu',      'twentyfifteen' ),
		'top-header' => __( 'Top Header Menu',      'twentyfifteen' ),
		'our-products' => __( 'Our Products Menu',      'twentyfifteen' ),
		'career-nav' => __( 'Career details page navigation menu',      'twentyfifteen' ),
		'about-nav' => __( 'About us page navigation menu', 'twentyfifteen' ),
		'engineering-nav' => __( 'Engineering details page navigation menu',      'twentyfifteen' ),
		'responsibility-nav' => __( 'Resposibility details page navigation menu',      'twentyfifteen' ),
		'our-business-nav' => __( 'Our Business page navigation menu', 'twentyfifteen' ),
		'media-nav' => __( 'Media navigation menu', 'twentyfifteen' ),
		'social'  => __( 'Social Links Menu', 'twentyfifteen' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	$color_scheme  = twentyfifteen_get_color_scheme();
	$default_color = trim( $color_scheme[0], '#' );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'twentyfifteen_custom_background_args', array(
		'default-color'      => $default_color,
		'default-attachment' => 'fixed',
	) ) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css', twentyfifteen_fonts_url() ) );
        
        add_image_size('banner_image', 2000, 568);
        add_image_size('home_portfolio_banner_image', 1109, 346);
        add_image_size('home_main_image', 570, 196);
        add_image_size('home_what_we_do_image', 585, 400);
        add_image_size('home_career_image', 376, 238);
        add_image_size('home_latest_news_image', 121, 110);
        add_image_size('who_we_are_page_image', 266, 292);
        add_image_size('who_we_are_certification_image', 264, 171);
        add_image_size('portfolio_image', 555, 332);
        add_image_size('portfolio_gallery_image', 1118, 582);
        add_image_size('career_page_image', 266, 200);
        add_image_size('career_search_image', 560, 367);
        add_image_size('leadership_list_image', 220, 124);
        add_image_size('omega_frontline_image', 460, 259);
}
endif; // twentyfifteen_setup
add_action( 'after_setup_theme', 'twentyfifteen_setup' );

/**
 * Register widget area.
 *
 * @since Twenty Fifteen 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function twentyfifteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'twentyfifteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
        register_sidebar( array(
		'name'          => __( 'Career Navigation Menu', 'twentyfifteen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Career Navigation Sidebar Menu', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
        register_sidebar( array(
		'name'          => __( 'Engineering Navigation Menu', 'twentyfifteen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Navigation Sidebar Menu', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
        register_sidebar( array(
		'name'          => __( 'Responsibility Navigation Menu', 'twentyfifteen' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Navigation Sidebar Menu', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
        register_sidebar( array(
		'name'          => __( 'Our Busniness Navigation Menu', 'twentyfifteen' ),
		'id'            => 'sidebar-5',
		'description'   => __( 'Navigation Sidebar Menu', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
        register_sidebar( array(
		'name'          => __( 'About us Navigation Menu', 'twentyfifteen' ),
		'id'            => 'sidebar-6',
		'description'   => __( 'Navigation Sidebar Menu', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
        register_sidebar( array(
		'name'          => __( 'Media Navigation Menu', 'twentyfifteen' ),
		'id'            => 'sidebar-7',
		'description'   => __( 'Navigation Sidebar Menu', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentyfifteen_widgets_init' );

if ( ! function_exists( 'twentyfifteen_fonts_url' ) ) :
/**
 * Register Google fonts for Twenty Fifteen.
 *
 * @since Twenty Fifteen 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function twentyfifteen_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Sans, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Noto Sans font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Noto Sans:400italic,700italic,400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Serif, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Noto Serif font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Noto Serif:400italic,700italic,400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Inconsolata, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Inconsolata:400,700';
	}

	/*
	 * Translators: To add an additional character subset specific to your language,
	 * translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language.
	 */
	$subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'twentyfifteen' );

	if ( 'cyrillic' == $subset ) {
		$subsets .= ',cyrillic,cyrillic-ext';
	} elseif ( 'greek' == $subset ) {
		$subsets .= ',greek,greek-ext';
	} elseif ( 'devanagari' == $subset ) {
		$subsets .= ',devanagari';
	} elseif ( 'vietnamese' == $subset ) {
		$subsets .= ',vietnamese';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), '//fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * JavaScript Detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Fifteen 1.1
 */
function twentyfifteen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentyfifteen_javascript_detection', 0 );

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Fifteen 1.0
 */
function twentyfifteen_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'twentyfifteen-fonts', twentyfifteen_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.2' );

	// Load our main stylesheet.
	wp_enqueue_style( 'twentyfifteen-style', get_stylesheet_uri() );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'twentyfifteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentyfifteen-style' ), '20141010' );
	wp_style_add_data( 'twentyfifteen-ie', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'twentyfifteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentyfifteen-style' ), '20141010' );
	wp_style_add_data( 'twentyfifteen-ie7', 'conditional', 'lt IE 8' );

	wp_enqueue_script( 'twentyfifteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20141010', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'twentyfifteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20141010' );
	}

	wp_enqueue_script( 'twentyfifteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150330', true );
	wp_localize_script( 'twentyfifteen-script', 'screenReaderText', array(
		'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'twentyfifteen' ) . '</span>',
		'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'twentyfifteen' ) . '</span>',
	) );
}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_scripts' );

/**
 * Add featured image as background image to post navigation elements.
 *
 * @since Twenty Fifteen 1.0
 *
 * @see wp_add_inline_style()
 */
function twentyfifteen_post_nav_background() {
	if ( ! is_single() ) {
		return;
	}

	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );
	$css      = '';

	if ( is_attachment() && 'attachment' == $previous->post_type ) {
		return;
	}

	if ( $previous &&  has_post_thumbnail( $previous->ID ) ) {
		$prevthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $previous->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-previous { background-image: url(' . esc_url( $prevthumb[0] ) . '); }
			.post-navigation .nav-previous .post-title, .post-navigation .nav-previous a:hover .post-title, .post-navigation .nav-previous .meta-nav { color: #fff; }
			.post-navigation .nav-previous a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	if ( $next && has_post_thumbnail( $next->ID ) ) {
		$nextthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $next->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-next { background-image: url(' . esc_url( $nextthumb[0] ) . '); border-top: 0; }
			.post-navigation .nav-next .post-title, .post-navigation .nav-next a:hover .post-title, .post-navigation .nav-next .meta-nav { color: #fff; }
			.post-navigation .nav-next a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	wp_add_inline_style( 'twentyfifteen-style', $css );
}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_post_nav_background' );

/**
 * Display descriptions in main navigation.
 *
 * @since Twenty Fifteen 1.0
 *
 * @param string  $item_output The menu item output.
 * @param WP_Post $item        Menu item object.
 * @param int     $depth       Depth of the menu.
 * @param array   $args        wp_nav_menu() arguments.
 * @return string Menu item with possible description.
 */
function twentyfifteen_nav_description( $item_output, $item, $depth, $args ) {
	if ( 'primary' == $args->theme_location && $item->description ) {
		$item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
	}

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'twentyfifteen_nav_description', 10, 4 );

/**
 * Add a `screen-reader-text` class to the search form's submit button.
 *
 * @since Twenty Fifteen 1.0
 *
 * @param string $html Search form HTML.
 * @return string Modified search form HTML.
 */
function twentyfifteen_search_form_modify( $html ) {
	return str_replace( 'class="search-submit"', 'class="search-submit screen-reader-text"', $html );
}
add_filter( 'get_search_form', 'twentyfifteen_search_form_modify' );

/**
 * Implement the Custom Header feature.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/posts-customizer.php';

add_action( 'init', 'Omega_post_types_n_taxonomies' );
function Omega_post_types_n_taxonomies(){
    register_post_type('portfolios',
            array(
                'public' => true,
                'label' => 'Projects',
                'labels'  => array(
                    'name' => __('Projects'),
                    'add_new'  => __('Add New Project'),
                    'all_items'  => __('All Projects'),
                    'add_new_item'  => __('Add New Project'),
                    'edit_item'  => __('Edit Project')
                ),
                'rewrite' => array("slug" => "projects"),
                'supports' => array( 'title', 'editor', 'thumbnail'),
                'menu_position' => null
            )
    );
    flush_rewrite_rules();
    
    $labels = array(
            'name'              => _( 'Sectors'),
            'singular_name'     => _( 'Sector'),
            'search_items'      => __( 'Search Sectors' ),
            'all_items'         => __( 'All Sector' ),
            'parent_item'       => __( 'Parent Sector' ),
            'parent_item_colon' => __( 'Parent Sector:' ),
            'edit_item'         => __( 'Edit Sector' ),
            'update_item'       => __( 'Update Sector' ),
            'add_new_item'      => __( 'Add New Sector' ),
            'new_item_name'     => __( 'New Sector Name' ),
            'menu_name'         => __( 'All Sectors' ),
    );

    $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'sectors' ),
    );
    register_taxonomy( 'sectors', 'portfolios', $args);
    flush_rewrite_rules();
    
    $labels = array(
            'name'              => _( 'Scopes'),
            'singular_name'     => _( 'Scope'),
            'search_items'      => __( 'Search Scopes' ),
            'all_items'         => __( 'All Scope' ),
            'parent_item'       => __( 'Parent Scope' ),
            'parent_item_colon' => __( 'Parent Scope:' ),
            'edit_item'         => __( 'Edit Scope' ),
            'update_item'       => __( 'Update Scope' ),
            'add_new_item'      => __( 'Add New Scope' ),
            'new_item_name'     => __( 'New Scope Name' ),
            'menu_name'         => __( 'All Scopes' ),
    );

    $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'scopes' ),
    );
    register_taxonomy( 'locations', 'portfolios', $args);
    flush_rewrite_rules();
    
    $labels = array(
        'name'               => _( 'Media'),
        'singular_name'      => _( 'Media'),
        'menu_name'          => _( 'Media Videos'),
        'name_admin_bar'     => _( 'Media'),
        'add_new'            => _( 'Add New Media' ),
        'add_new_item'       => __( 'Add New Media'),
        'new_item'           => __( 'New Media'),
        'edit_item'          => __( 'Edit Media'),
        'view_item'          => __( 'View Media'),
        'all_items'          => __( 'All Media'),
        'search_items'       => __( 'Search Media'),
        'parent_item_colon'  => __( 'Parent Media:'),
        'not_found'          => __( 'No media found.'),
        'not_found_in_trash' => __( 'No media found in Trash.')
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'medias' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 7,
        'supports'           => array( 'title', 'excerpt')
    );

    register_post_type( 'media', $args );
    flush_rewrite_rules();
    
    $labels = array(
        'name'               => _( 'Career'),
        'singular_name'      => _( 'Career'),
        'menu_name'          => _( 'Career'),
        'name_admin_bar'     => _( 'Career'),
        'add_new'            => _( 'Add New Career' ),
        'add_new_item'       => __( 'Add New Career'),
        'new_item'           => __( 'New Career'),
        'edit_item'          => __( 'Edit Career'),
        'view_item'          => __( 'View Career'),
        'all_items'          => __( 'All Career'),
        'search_items'       => __( 'Search Career'),
        'parent_item_colon'  => __( 'Parent Career:'),
        'not_found'          => __( 'No career found.'),
        'not_found_in_trash' => __( 'No career found in Trash.')
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'career' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 7,
        'supports'           => array( 'title', 'thumbnail', 'editor')
    );

    register_post_type( 'career', $args );
    flush_rewrite_rules();
    
    $labels = array(
        'name'               => _( 'Responsibility'),
        'singular_name'      => _( 'Responsibility'),
        'menu_name'          => _( 'Responsibility'),
        'name_admin_bar'     => _( 'Responsibility'),
        'add_new'            => _( 'Add New Responsibility' ),
        'add_new_item'       => __( 'Add New Responsibility'),
        'new_item'           => __( 'New Responsibility'),
        'edit_item'          => __( 'Edit Responsibility'),
        'view_item'          => __( 'View Responsibility'),
        'all_items'          => __( 'All Responsibility'),
        'search_items'       => __( 'Search Responsibility'),
        'parent_item_colon'  => __( 'Parent Responsibility:'),
        'not_found'          => __( 'No responsibility found.'),
        'not_found_in_trash' => __( 'No responsibility found in Trash.')
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'responsibilities' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 7,
        'supports'           => array( 'title', 'thumbnail', 'editor')
    );

    register_post_type( 'responsibility', $args );
    flush_rewrite_rules();
    
    $labels = array(
        'name'               => _( 'Engineering'),
        'singular_name'      => _( 'Engineering'),
        'menu_name'          => _( 'Engineering The Future'),
        'name_admin_bar'     => _( 'Engineering'),
        'add_new'            => _( 'Add New Engineering' ),
        'add_new_item'       => __( 'Add New Engineering'),
        'new_item'           => __( 'New Engineering'),
        'edit_item'          => __( 'Edit Engineering'),
        'view_item'          => __( 'View Engineering'),
        'all_items'          => __( 'All Engineering'),
        'search_items'       => __( 'Search Engineering'),
        'parent_item_colon'  => __( 'Parent Engineering:'),
        'not_found'          => __( 'No engineering found.'),
        'not_found_in_trash' => __( 'No engineering found in Trash.')
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'engineering' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 7,
        'supports'           => array( 'title', 'thumbnail', 'editor')
    );

    register_post_type( 'engineering', $args );
    flush_rewrite_rules();
    
    register_post_type('news',
            array(
                'public' => true,
                'label' => 'News',
                'labels'  => array(
                    'name' => __('News'),
                    'add_new'  => __('Add New News'),
                    'all_items'  => __('All News'),
                    'add_new_item'  => __('Add New News'),
                    'edit_item'  => __('Edit News')
                ),
                'rewrite' => array("slug" => "news-releases"),
                'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
                'menu_position' => 8
            )
    );
    flush_rewrite_rules();
    
    register_post_type('services',
            array(
                'public' => true,
                'label' => 'Services',
                'labels'  => array(
                    'name' => __('Services'),
                    'add_new'  => __('Add New Service'),
                    'all_items'  => __('All Services'),
                    'add_new_item'  => __('Add New Service'),
                    'edit_item'  => __('Edit Service')
                ),
                'rewrite' => array("slug" => "services"),
                'supports' => array( 'title', 'editor', 'thumbnail'),
                'menu_position' => 9
            )
    );
    flush_rewrite_rules();
}

function href($page_id){
    $permalink = get_permalink( $page_id );
    if($permalink)
        return untrailingslashit($permalink);
}

function media_upload_prefilter($file){
    $ext =  substr(strrchr($file['name'],'.'),1);
    $check_types = array('jpg', 'jpeg', 'jpe', 'gif', 'png', 'JPG', 'JPEG');
    if(in_array($ext, $check_types)){
        $img = getimagesize($file['tmp_name']);
        $width = $img[0];
        $height = $img[1];

        if (($width / $height) > 3.5){
            return array('error' => 'Invalid image. Width is too large than height. Please try another image.');
        }else if(($height / $width) > 3.5){
            return array('error' => 'Invalid image. Height is too large than width. Please try another image.');
        }else{
            return $file;
        }
    }else{
        return $file; 
    }
}
//add_filter('wp_handle_upload_prefilter','media_upload_prefilter');

add_action('wp_enqueue_scripts', 'omega_scripts');
 
function omega_scripts() {
    wp_register_script('omega-js', get_template_directory_uri().'/js/omega.js', array('jquery'), '1.0', TRUE);
    wp_enqueue_script('omega-js');
    $template = array(
        'uri' => get_template_directory_uri(),
        'site_uri' => site_url(),
        'ajaxurl' => admin_url('admin-ajax.php')
    );
    wp_localize_script( 'omega-js', 'omega', $template );
}

add_action('wp_ajax_get_portfolio', 'get_portfolio');
add_action('wp_ajax_nopriv_get_portfolio', 'get_portfolio');

function get_portfolio(){
    global $wp_query;
    $query['post_type'] = 'portfolios';
    $query['post_status'] = 'publish';
    $query['posts_per_page'] = -1;
    if($_REQUEST['sector'] <> 'all') {
        $query['tax_query'][] = array(
            'taxonomy' => 'sectors',
            'field'    => 'slug',
            'terms'    => array( $_REQUEST['sector'] )
        );
    }
    if($_REQUEST['location'] <> 'all') {
        $query['tax_query'][] = array(
            'taxonomy' => 'locations',
            'field'    => 'slug',
            'terms'    => array( $_REQUEST['location'] )
        );
    }
    if( $_REQUEST['sector'] <> 'all' && $_REQUEST['location'] <> 'all'){
        $query['tax_query']['relation'] = 'AND';
    }
    
    query_posts($query);
    
    $portfoilo = '';
    if(have_posts()){
        while(have_posts()){
            the_post();
            $protfolio_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'portfolio_image');
            $portfoilo .= '<div class="grid-row2">';
            $portfoilo .= '<div class="grid-row-block">';
            if(has_post_thumbnail()) :
            $portfoilo .= '<figure class="portfolio-grid-image">';
            $portfoilo .= '<img src="'.$protfolio_image[0].'" alt="Portfolio Image" width="'.$protfolio_image[1].'" height="'.$protfolio_image[2].'">';
            $portfoilo .= '</figure>';
            endif;
            $portfoilo .= '<div class="portfolio-grid-content">';
            $portfoilo .= '<h3 class="portfolio-grid-title">'.  get_the_title(get_the_ID()) .'</h3>';
            $portfoilo .= '<p>'.  mb_strimwidth(wp_strip_all_tags(get_the_content(get_the_ID())), 0, 100, '..[...]').'</p>';
            $portfoilo .= '</div>';
            $portfoilo .= '<a href="'.  get_the_permalink(get_the_ID()) .'" class="btn btn-viewmore">View More<i class="icon icon-viewmore"></i></a>';
            $portfoilo .= '</div>';
            $portfoilo .= '</div>';
        }
    }else{
        $portfoilo .= '<p>No portfolio found!</p>';
    }
    wp_reset_query();
    echo $portfoilo;
    exit();
}

add_action('wp_ajax_get_news', 'get_news');
add_action('wp_ajax_nopriv_get_news', 'get_news');

function get_news(){
    global $wp_query;
    $query['post_type'] = 'news';
    $query['post_status'] = 'publish';
    $query['posts_per_page'] = -1;
    if($_REQUEST['years'] <> 'all') {
        $query['tax_query'][] = array(
            'taxonomy' => 'years',
            'field'    => 'slug',
            'terms'    => array( $_REQUEST['years'] )
        );
    }
    if($_REQUEST['hubs'] <> 'all') {
        $query['tax_query'][] = array(
            'taxonomy' => 'hubs',
            'field'    => 'slug',
            'terms'    => array( $_REQUEST['hubs'] )
        );
    }
    if( $_REQUEST['years'] <> 'all' && $_REQUEST['hubs'] <> 'all'){
        $query['tax_query']['relation'] = 'AND';
    }
    
    query_posts($query);
//    echo '<pre>';
//    print_r($wp_query);
    $news = '<div class="latestNews">';
    $news = '<h2>Latest news</h2>';
    if(have_posts()){
        $news .= '<ul class="latest-news-blockUl">';
        while(have_posts()){
            the_post();
            $protfolio_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'home_latest_news_image');
            $news .= '<li class="latest-news-blocksLi clearfix">';
            if(has_post_thumbnail()) :
            $news .= '<a href="'.get_the_permalink(get_the_ID()).'?>">';
            $news .= '<figure class="latest-news-blocks-image">';
            $news .= '<img src="'.$protfolio_image[0].'" alt="Portfolio Image" width="'.$protfolio_image[1].'" height="'.$protfolio_image[2].'">';
            $news .= '</figure>';
            $news .= '</a>';
            endif;
            $news .= '<div class="latest-news-blocks-con">';
            $news .= '<p class="latest-newsDate">'.  get_the_date(NEWS_DATE_FORMAT,get_the_ID()) .'</p>';
            $news .= '<h3><a href="'.get_the_permalink(get_the_ID()).'?>">'.  get_the_title(get_the_ID()).'</a></h3>';
            $news .= '<p>'.  get_the_excerpt(get_the_ID()).'</p>';
            $news .= '</div>';
            $news .= '</li>';
        }
        $news .= '</ul>';
    }else{
        $news .= '<p>No news found!</p>';
    }
    $news .= '</div>';
    wp_reset_query();
    echo $news;
    die();
}

add_action('wp_ajax_get_business_filter', 'get_business_filter');
add_action('wp_ajax_nopriv_get_business_filter', 'get_business_filter');

function get_business_filter(){
    global $wp_query;
    $query['post_type'] = 'portfolios';
    $query['post_status'] = 'publish';
    $query['posts_per_page'] = -1;
    if($_REQUEST['sector'] <> 'all') {
        $query['tax_query'][] = array(
            'taxonomy' => 'sectors',
            'field'    => 'slug',
            'terms'    => array( $_REQUEST['sector'] )
        );
    }
    if($_REQUEST['location'] <> 'all') {
        $query['tax_query'][] = array(
            'taxonomy' => 'locations',
            'field'    => 'slug',
            'terms'    => array( $_REQUEST['location'] )
        );
    }
    if( $_REQUEST['sector'] <> 'all' && $_REQUEST['location'] <> 'all'){
        $query['tax_query']['relation'] = 'AND';
    }
    
    query_posts($query);
    
    $portfoilo = '';
    if(have_posts()){
        $portfoilo .= '<ul class="business-listsUl">';
        while(have_posts()){
            the_post();
            $protfolio_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'portfolio_image');
            $portfoilo .= '<li class="business-listsli">';
            if(has_post_thumbnail()) :
                $portfoilo .= '<figure class="business-listsFigure">';
                $portfoilo .= '<a href="'.  get_the_permalink(get_the_ID()) .'">';
                $portfoilo .= '<img src="'.$protfolio_image[0].'" alt="Portfolio Image" width="555" height="278">';
                $portfoilo .= '</a>';
                $portfoilo .= '</figure>';
            endif;
            $portfoilo .= '<div class="business-listsContent">';
            $portfoilo .= '<h3 class="business-liststitle"><a href="'.  get_the_permalink(get_the_ID()) .'">'.  get_the_title(get_the_ID()) .'</a></h3>';
            $portfoilo .= '<div class="business-listsText">'.  mb_strimwidth(wp_strip_all_tags(get_the_content(get_the_ID())), 0, 100, '..[...]').'</div>';
            $portfoilo .= '<a href="'.  get_the_permalink(get_the_ID()) .'" class="btn btn-read">Read more</a>';
            $portfoilo .= '</div>';
            $portfoilo .= '</li>';
        }
    }else{
        $portfoilo .= '<ul class="business-listsUl"><li>No project found!</li></ul>';
    }
    wp_reset_query();
    echo $portfoilo;
    exit();
}

function aasort (&$array, $key) {
    $sorter=array();
    $ret=array();
    reset($array);
    foreach ($array as $ii => $va) {
        $sorter[$ii]=$va[$key];
    }
    asort($sorter);
    foreach ($sorter as $ii => $va) {
        $ret[$ii]=$array[$ii];
    }
    $array=$ret;
}

function get_portfolio_locations($taxonomy){
    global $post;
    $terms = wp_get_object_terms($post->ID, $taxonomy);
    $portfolio_taxonomy = '';
    if(is_array($terms) && !empty($terms)){
        foreach ($terms as $term) {
            $portfolio_taxonomy .= $term->name. '. ';
        }
    }
    return rtrim($portfolio_taxonomy, '. ');
}
add_filter( 'body_class','menu_topin_banner' );
function menu_topin_banner( $classes ) {
    global $post, $wp_query;
    if ( is_page_template( 'templates/template-careers.php' )
            || is_page_template( 'templates/template-contact1.php' )
            || is_page_template( 'templates/template-home-page.php' ) 
            || is_page_template( 'templates/template-media.php' ) 
            || is_page_template( 'templates/template-portfolio.php' ) 
            || is_page_template( 'templates/template-who-we-are.php' ) 
            || is_page_template( 'templates/banner-inner-page.php' ) 
            || is_page_template( 'templates/template-what-we-do.php' )
            || is_page_template( 'templates/banner-inner-sidebar-page.php' )  
            || is_page_template( 'templates/template-engineering-the-future.php' )  
            || is_page_template( 'templates/template-responsibility.php' )
            || is_page_template( 'templates/banner-inner-sidebar-our-business-page.php' )
            || is_page_template( 'templates/banner-inner-our-sectors-page.php' )  
            || is_page_template( 'templates/template-inner-page-default-template.php' )  
            || is_archive()  
            || is_page()  
            || is_single($post->ID)  
    ) {
        $classes[] = 'menu-topin-banner';
    }
     
    return $classes;
}

add_filter( 'admin_post_thumbnail_html', 'add_featured_image_instruction');
function add_featured_image_instruction( $content ) {
    if(get_post_type() === 'portfolios')
        return $content .= '<p>Minimum resolution 1109 X 346. Images below this resolution may break design. But best resolution would be 2000 X 1000. </p>';
    return $content;
}
function new_excerpt_more( $more ) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');
function new_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'new_excerpt_length');

function is_exclude($post_id){
    $res = get_field('exclude_career_archive', $post_id, TRUE);
    if(is_array($res) && $res[0] == 1){
        return TRUE;
    }else{
        return FALSE;
    }
}

function get_career_search_page($post_type){
    query_posts(array('post_type' => $post_type, 'posts_per_page' => -1));
    if(have_posts()){
        while(have_posts()){
            the_post();
            $res = get_field('career_search_page', get_the_ID(), TRUE);
            if(is_array($res) && $res[0] == 1){
                return get_the_ID();
                break;
            }
        }
        wp_reset_query();
    }
    return FALSE;
}