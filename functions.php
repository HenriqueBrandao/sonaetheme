<?php
/**
 * sonaeTheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sonaeTheme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'sonaetheme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sonaetheme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on sonaeTheme, use a find and replace
		 * to change 'sonaetheme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'sonaetheme', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'sonaetheme' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'sonaetheme_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'sonaetheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sonaetheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sonaetheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'sonaetheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sonaetheme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'sonaetheme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'sonaetheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'sonaetheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sonaetheme_scripts() {

	wp_enqueue_style( 'animate', get_template_directory_uri() . '/js/animate.min.css',false,'1.1','all');
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/dist/bootstrap.min.css',false,'1.1','all');
	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/dist/slick.css',false,'1.1','all');

	wp_enqueue_style( 'sonaetheme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'sonaetheme-style', 'rtl', 'replace' );



	wp_enqueue_script( 'sonaetheme-jquery', get_template_directory_uri() . '/dist/jquery-3.5.1.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'sonaetheme-boostrap', get_template_directory_uri() . '/dist/bootstrap.bundle.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'sonaetheme-wow', get_template_directory_uri() . '/js/wow.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'sonaetheme-slick', get_template_directory_uri() . '/dist/slick.min.js', array(), _S_VERSION, true );


	wp_enqueue_script( 'sonaetheme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'midnight-script', get_template_directory_uri() . '/dist/midnight.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'sonaetheme-script', get_template_directory_uri() . '/js/script.js', array(), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'sonaetheme_scripts' );

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













add_action('wp_ajax_myfilterMedia', 'misha_filter_functionMedia'); // wp_ajax_{ACTION HERE} 
add_action('wp_ajax_nopriv_myfilterMedia', 'misha_filter_functionMedia');
function misha_filter_functionMedia(){
?>

    
    <?php
    $args = array(
        'post_type' => 'media_page',
		'orderby' => 'date',
    );
    
    if( isset( $_POST['categoryfilter'] ) )
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'media_category',
                'field' => 'id',
                'terms' => $_POST['categoryfilter']
            )
        );
 


    $query = new WP_Query( $args );

		if( $query->have_posts() ) :
			
		echo '<div class="row blog-grid">';
		while( $query->have_posts() ): $query->the_post();
		$featured_img_url2 = get_the_post_thumbnail_url($postID, 'full  ');

        ?>
          <div class="col-sm-6 col-md-4 blog-grid-item wow fadeInUp" data-wow-duration=".7s">
            <div class="imageWrapper">
              <a href="<?php echo $featured_img_url2; ?>" class="gallery"><?php the_post_thumbnail('large'); ?></a>

            </div>
            <!-- <img class="blog-grid-item-img" src="<?php echo get_template_directory_uri(); ?>/dist/img/photos/blog.png"> -->
            <div class="blog-grid-item-text">
              <h6><?php the_title(); ?></h6>
              <small>
              <?php the_excerpt(); ?>
              </small>
            </div>
            <a class="blog-grid-item-more" download href="<?php the_field('media_file'); ?>">
              <h6 class="caption">Download</h6>
              <img src="<?php echo get_template_directory_uri(); ?>/dist/img/union.svg" alt="">
            </a>
          </div>


		<?php endwhile;
		echo '</div>';

		else :
		endif;
		die();
		

?>		




<?php


}













add_action('wp_ajax_myfilter', 'misha_filter_function'); // wp_ajax_{ACTION HERE} 
add_action('wp_ajax_nopriv_myfilter', 'misha_filter_function');
function misha_filter_function(){
?>

    
    <?php
    $args = array(
        'post_type' => 'post',
		'orderby' => 'date',
    );
    
    if( isset( $_POST['categoryfilter'] ) )
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'category',
                'field' => 'id',
                'terms' => $_POST['categoryfilter']
            )
        );
 


    $query = new WP_Query( $args );

		if( $query->have_posts() ) :
			
		echo '<div class="row blog-grid">';
        while( $query->have_posts() ): $query->the_post();
        ?>

<div class="col-sm-6 col-md-4 blog-grid-item">
            <div class="imageWrapper">
              <?php the_post_thumbnail('large'); ?>

            </div>
            <!-- <img class="blog-grid-item-img" src="<?php echo get_template_directory_uri(); ?>/dist/img/photos/blog.png"> -->
            <div class="blog-grid-item-text">
              <h6><?php the_title(); ?></h6>
              <small>
              <?php the_excerpt(); ?>
              </small>
            </div>
            <a class="blog-grid-item-more" href="<?php the_permalink(); ?>">
              <h6 class="caption">READ MORE</h6>
              <img src="<?php echo get_template_directory_uri(); ?>/dist/img/union.svg" alt="">
            </a>
          </div>


		<?php endwhile;
		echo '</div>';

		else :
		endif;
        die();
}







add_action('wp_ajax_myfilter2', 'misha_filter_function'); // wp_ajax_{ACTION HERE} 
add_action('wp_ajax_nopriv_myfilter2', 'misha_filter_function');
function misha_filter_function2(){
?>

    
    <?php
    $args = array(
        'post_type' => 'post',
		'orderby' => 'date',
    );
    
    if( isset( $_POST['categoryfilter'] ) )
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'category',
                'field' => 'id',
                'terms' => $_POST['categoryfilter']
            )
        );
 


    $query = new WP_Query( $args );

		if( $query->have_posts() ) :
		echo '<div class="row blog-grid">';

        while( $query->have_posts() ): $query->the_post();
        ?>

		<div class="col-sm-6 col-md-4 blog-grid-item">
            <div class="imageWrapper">
              <?php the_post_thumbnail('large'); ?>

            </div>
            <!-- <img class="blog-grid-item-img" src="<?php echo get_template_directory_uri(); ?>/dist/img/photos/blog.png"> -->
            <div class="blog-grid-item-text">
              <h6><?php the_title(); ?></h6>
              <small>
              <?php the_excerpt(); ?>
              </small>
            </div>
            <a class="blog-grid-item-more" href="<?php the_permalink(); ?>">
              <h6 class="caption">READ MORE</h6>
              <img src="<?php echo get_template_directory_uri(); ?>/dist/img/union.svg" alt="">
            </a>
          </div>


		<?php endwhile;
		echo '</div>';

		else :
		endif;
        die();
}





if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}