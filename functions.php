<?php
/**
 * dcao functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dcao
 */

if ( ! function_exists( 'dcao_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function dcao_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on dcao, use a find and replace
		 * to change 'dcao' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'dcao', get_template_directory() . '/languages' );

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
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.

        

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'dcao_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'dcao_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dcao_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dcao_content_width', 640 );
}
add_action( 'after_setup_theme', 'dcao_content_width', 0 );

// include custom jQuery
function shapeSpace_include_custom_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');

/**
 * Register CSS and JS
 */

function dcao_styles_scripts() {
  //main stylesheet, style.css
  wp_enqueue_style( 'style', get_stylesheet_uri() );
 
  //main css 
      wp_enqueue_style( 'estilosbase', get_template_directory_uri() . '/assets/css/estilosbase.css',false,null,'all');
  wp_enqueue_style( 'estiloshome', get_template_directory_uri() . '/assets/css/estiloshome.css',false,null,'all');
  wp_enqueue_style( 'estilosinterior', get_template_directory_uri() . '/assets/css/estilosinterior.css',false,null,'all');
    
      //secondary css 
     wp_enqueue_style( 'component', get_template_directory_uri() . '/assets/css/component.css',false,null,'all');
  wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/owlcarousel/assets/owl.carousel.min.css',false,null,'all');
  wp_enqueue_style( 'estilosinterior', get_template_directory_uri() . '/assets/css/estilosinterior.css',false,null,'all');
    wp_enqueue_style( 'ionicons', 'http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css' );
    wp_enqueue_style( 'tinos', 'https://fonts.googleapis.com/css?family=Tinos:400i' );
    wp_enqueue_style( 'muli', 'https://fonts.googleapis.com/css?family=Muli:300,400,600,700' );
    wp_enqueue_style( 'hind', 'https://fonts.googleapis.com/css?family=Hind:400,600' );

  //main js
  wp_enqueue_script( 'scriptsbase', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array ( 'jquery' ), null, true);  


  //secondary js
  wp_enqueue_script( 'classie', get_template_directory_uri() . '/assets/js/classie.js', array ( 'jquery' ), null, true);
    wp_enqueue_script( 'uisearch', get_template_directory_uri() . '/assets/js/uisearch.js', array ( 'jquery' ), null, true);
    wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/assets/owlcarousel/owl.carousel.min.js', array ( 'jquery' ), null, true);


} 
//hook the function to wp_enqueue_scripts action hook
add_action( 'wp_enqueue_scripts', 'dcao_styles_scripts' );



function dcao_remove_styles() {

    // Check for the page you want to target
    if ( is_page( 'pagina-de-inicio-home' ) ) {

        // Remove Styles
        wp_dequeue_style( 'estilosinterior' );
        wp_dequeue_style( 'hind' );
        wp_dequeue_style( 'tinos' );
}
	
	 if ( is_page( 'pruebas' ) ) {
        // Remove Styles
        wp_enqueue_style( 'leafletcss', 'https://unpkg.com/leaflet@1.3.1/dist/leaflet.css');
         wp_enqueue_script( 'leafletjs', 'https://unpkg.com/leaflet@1.3.1/dist/leaflet.js', array ( 'jquery' ), null, true); 
}
	
}
add_action( 'wp_enqueue_scripts', 'dcao_remove_styles' );



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dcao_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'dcao' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'dcao' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="tituloseccion"><h2>',
		'after_title'   => ' ></h2><hr></div',
	) );
}
add_action( 'widgets_init', 'dcao_widgets_init' );
	
if ( function_exists('register_sidebar') )
 register_sidebar(array('name'=>'Sidebar','before_title'=>'<h3>','after_title'=>'</h3>'));

/**
 * Enqueue scripts and styles.
 */
function dcao_scripts() {

	wp_enqueue_script( 'dcao-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'dcao-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dcao_scripts' );

add_action( 'admin_init', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}

/**
 * Register menus.
 */
function register_my_menus() {
  register_nav_menus(
    array(
      'header' => __( 'Primary' ),
      'footer' => __( 'Footer' ),    
      'institucional' => __( 'Institucional' ),
      'academico' => __( 'Académico' ),
      'extension' => __( 'Extensión' ),
      'investigacion' => __( 'Investigación' ),
      'bancodatos' => __( 'Banco de datos' )
        )
  );
}
add_action( 'init', 'register_my_menus' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}





// Register Custom Navigation Walker
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

function oz_remove_normal_excerpt() {
    remove_meta_box( 'postexcerpt' , 'post' , 'normal' );
}
add_action( 'admin_menu' , 'oz_remove_normal_excerpt' );
 
/**
 * Add the excerpt meta box back in with a custom screen location
 *
 * @param  string $post_type
 * @return null
 */
function oz_add_excerpt_meta_box( $post_type ) {
    if ( in_array( $post_type, array( 'post', 'page' ) ) ) {
        add_meta_box(
            'oz_postexcerpt',
            __( 'Excerpt', 'thetab-theme' ),
            'post_excerpt_meta_box',
            $post_type,
            'after_title',
            'high'
        );
    }
}
add_action( 'add_meta_boxes', 'oz_add_excerpt_meta_box' );
 
/**
 * You can't actually add meta boxes after the title by default in WP so
 * we're being cheeky. We've registered our own meta box position
 * `after_title` onto which we've regiestered our new meta boxes and
 * are now calling them in the `edit_form_after_title` hook which is run
 * after the post tile box is displayed.
 *
 * @return null
 */
function oz_run_after_title_meta_boxes() {
    global $post, $wp_meta_boxes;
    # Output the `below_title` meta boxes:
    do_meta_boxes( get_current_screen(), 'after_title', $post );
}
add_action( 'edit_form_after_title', 'oz_run_after_title_meta_boxes' );


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Contenido del Footer',
		'menu_title'	=> 'Footer',
		'menu_slug' 	=> 'footer-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	
	
}
function atfcen_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom_login.css" />';
}
add_action('login_head', 'atfcen_custom_login');



function crunchify_social_sharing_buttons() {
	global $post;
	if(is_singular() || is_home()){
	
		// Get current page URL 
		$crunchifyURL = urlencode(get_permalink());
		
		
 
		// Get current page title
		$crunchifyTitle = str_replace( ' ', '%20', get_the_title());
		
		// Get current page title
		$crunchifyPage =  ' - Departamento de Ciencias de la Atmósfera y los Océanos';
		
		// Construct sharing URL without using any script
		$twitterURL = 'https://twitter.com/intent/tweet?text='.$crunchifyTitle.$crunchifyPage.'&amp;url='.$crunchifyURL;
		$facebookURL = 'https://www.facebook.com/sharer.php?s=100&p[url]='.$crunchifyTitle.$crunchifyPage.$crunchifyURL;
		$googleURL = 'https://plus.google.com/share?url='.$crunchifyTitle.$crunchifyPage.$crunchifyURL;
		$whatsappURL = 'whatsapp://send?text='.$crunchifyTitle.$crunchifyPage. ' ' . $crunchifyURL;
		
		// Add sharing button at the end of page/page content
		$variable .= '<div class="crunchify-social">';
		$variable .= '<a class="crunchify-link crunchify-twitter" href="'. $twitterURL .'" target="_blank"><span class="ion-social-twitter"></span></a>';
		$variable .= '<a class="crunchify-link crunchify-facebook" href="'.$facebookURL.'" target="_blank"><span class="ion-social-facebook"></span></a>';
		$variable .= '<a class="crunchify-link crunchify-whatsapp" href="'.$whatsappURL.'" target="_blank"><span class="ion-social-whatsapp"></span></a>';
		$variable .= '<a class="crunchify-link crunchify-googleplus" href="'.$googleURL.'" target="_blank"><span class="ion-social-googleplus"></span></a>';

		$variable .= '</div>';
		
		return $variable.$content;
	}else{
		// if not a post/page then don't include sharing button
		return $variable.$content;
	}
};
add_shortcode("crunchify_social_sharing_buttons", "crunchify_social_sharing_buttons");
add_filter( 'crunchify_social_sharing_buttons');

function wpb_mce_buttons_2($buttons) {
    array_unshift($buttons, 'styleselect');
    return $buttons;
}
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');

add_action( 'init', 'wpse17478_init' );
function wpse17478_init()
{
    remove_filter( 'get_the_excerpt', 'wp_trim_excerpt' );
}

