<?php

show_admin_bar( false );

function inspired_maintenance() {
	if( !is_user_logged_in() && !is_page( '4' ) )
		wp_redirect( get_the_permalink( '4' ) );
}
// add_action( 'template_redirect', 'inspired_maintenance' );

// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 1110;

// Register Theme Features
function inspired_theme_features()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'gallery', 'image', 'video' ) );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails');

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for document Title tag
	add_theme_support( 'title-tag' );

  // Add support for two custom navigation menus.
  register_nav_menus( array(
      'primary'   => __( 'Primary Menu', 'inspired' ),
      'footer-links' => __('Footer Links', 'inspired' )
  ) );

	// Register Sidebars
	function inspired_sidebars() {

		$args = array(
			'id'            => 'sidebbar',
			'class'         => 'sidebar',
			'name'          => __( 'Sidebar', 'inspired' ),
		);
		register_sidebar( $args );

	}
	add_action( 'widgets_init', 'inspired_sidebars' );
}
add_action( 'after_setup_theme', 'inspired_theme_features' );


/**
 * Enqueue script for child theme
 */
function inspired_enqueue_scripts() {
  wp_enqueue_style( 'inspired', get_template_directory_uri() . '/style.css', array('bootstrap'), uniqid() );
  wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' );
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:400,600,700|Allura' );
  wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css' );
	// wp_enqueue_style( 'inspired', get_stylesheet_directory_uri() . '/assets/css/inspired.css', null, uniqid() );

  wp_enqueue_style( 'fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css', array(), '3.3.7', 'all');
  // wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '2.2.1', 'all');
  // wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '2.2.1', 'all');

  wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array ( 'jquery' ), '1.14.3', true);
  wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array ( 'jquery' ), '4.1.3', true);
  wp_enqueue_script( 'isotope', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js', array ( 'jquery' ), '3.0.6', true);
  wp_enqueue_script( 'fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js', array ( 'jquery' ), '3.0.47', true);
  wp_enqueue_script( 'jquery-easing', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', array ( 'jquery' ), '1.4.1', true);
  // wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array ( 'jquery' ), '2.2.1', true);
  wp_enqueue_script( 'inspired', get_template_directory_uri() . '/assets/js/inspired.js', array ( 'jquery' ), uniqid(), true);
}
add_action( 'wp_enqueue_scripts', 'inspired_enqueue_scripts', 1000000000 );

// Register Custom Navigation Walker
require_once get_stylesheet_directory() . '/inc/class-wp-bootstrap-navwalker.php';
?>
