<?php

//////////////////////////////////////////////////////////////////
// Set Content Width
//////////////////////////////////////////////////////////////////

if ( ! isset( $content_width ) ) {
		$content_width = 1170;
	}



//////////////////////////////////////////////////////////////////
// Theme set up
//////////////////////////////////////////////////////////////////

if ( ! function_exists( 'shaped_theme_setup' ) ) :

function shaped_theme_setup() {

	// Localization support
	load_theme_textdomain( 'shaped_theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Title Tag
	add_theme_support( 'title-tag' );

	// Register navigation menu
	register_nav_menus( 
		array(
			'main-menu' 		=> __( 'Primary Menu','shaped_theme' )
		) );


	// Switch default core markup for search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	// Post Formats
	add_theme_support( 'post-formats', array( 'gallery', 'video', 'audio' ) );

	// Post thumbnails
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'post-thumbnails', 1140, 600, TRUE );
	add_image_size( 'related-image', 590, 390, TRUE );
	add_image_size('xs-thumb', 60, 60, TRUE);

}
endif; // shaped_theme_setup

add_action( 'after_setup_theme', 'shaped_theme_setup' );



//////////////////////////////////////////////////////////////////
// Register widget
//////////////////////////////////////////////////////////////////

if ( function_exists('register_sidebar') ) {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'shaped_theme' ),
		'id'            => 'st-blog-sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer', 'shaped_theme' ),
		'id'            => 'footer-widget',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget col-md-3 footer-widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}



//////////////////////////////////////////////////////////////////
// Enqueue scripts and styles.
//////////////////////////////////////////////////////////////////

function shaped_theme_scripts() {
	
	// CSS File
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.4');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.3.0');
	wp_enqueue_style('slicknav-css', get_template_directory_uri() . '/css/slicknav.css', array(), NULL);
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), NULL);

	// JS Files
	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.4', TRUE );
	wp_enqueue_script( 'scripts-js', get_template_directory_uri() . '/js/scripts.js', array('jquery'), NULL, TRUE );
	wp_enqueue_script( 'smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js', array('jquery'), NULL, TRUE );
	wp_enqueue_script( 'slicknav-js', get_template_directory_uri() . '/js/jquery.slicknav.js', array('jquery'), NULL, TRUE );
	wp_enqueue_script( 'fitvids-js', get_template_directory_uri() . '/js/jquery.fitvids.js', array('jquery'), NULL, TRUE );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'shaped_theme_scripts' );



//////////////////////////////////////////////////////////////////
// COMMENTS LAYOUT
//////////////////////////////////////////////////////////////////

if(!function_exists('shapedtheme_comment')):

	function shapedtheme_comment($comment, $args, $depth)
	{
		$GLOBALS['comment'] = $comment;
		switch ( $comment->comment_type ) :
			case 'pingback' :
			case 'trackback' :
			// Display trackbacks differently than normal comments.
		?>
		<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
			<p>Pingback: <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'shaped_theme' ), '<span class="edit-link">', '</span>' ); ?></p>
		<?php
				break;
			default :
			
			global $post;
		?>
		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
			<div id="comment-<?php comment_ID(); ?>" class="comment-body media">
				
					<div class="comment-avartar pull-left">
						<?php
							echo get_avatar( $comment, $args['avatar_size'] );
						?>
					</div>
					<div class="comment-context media-body">
						<div class="comment-head">
							<?php
								printf( '<h3 class="comment-author">%1$s</h3>',
									get_comment_author_link());
							?>
							<span class="comment-date"><?php echo get_comment_date() ?></span>
						</div>

						<?php if ( '0' == $comment->comment_approved ) : ?>
						<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'shaped_theme' ); ?></p>
						<?php endif; ?>

						<div class="comment-content">
							<?php comment_text(); ?>
						</div>

						<?php edit_comment_link( __( 'Edit', 'shaped_theme' ), '<span class="edit-link">', '</span>' ); ?>
						<span class="comment-reply">
							<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'shaped_theme' ), 'after' => '', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
						</span>

					</div>
				
			</div>
		<?php
			break;
		endswitch; 
	}

endif;



//////////////////////////////////////////////////////////////////
// Add Extra Fields In User Profile
//////////////////////////////////////////////////////////////////

function modify_user_contact_profile($profile_fields) {

	// Add new fields
	$profile_fields['facebook'] = 'Facebook URL';
	$profile_fields['twitter'] = 'Twitter URL';
	$profile_fields['gplus'] = 'Google+ URL';
	$profile_fields['linkedin'] = 'Linkedin URL';
	$profile_fields['tumblr'] = 'Tumblr URL';
	$profile_fields['pinterest'] = 'Pinterest URL';

	return $profile_fields;
}
add_filter('user_contactmethods', 'modify_user_contact_profile');



//////////////////////////////////////////////////////////////////
// Include files
//////////////////////////////////////////////////////////////////

// Theme Customizer
include('functions/customizer/st_custom_controller.php');
include('functions/customizer/st_customizer_settings.php');
include('functions/customizer/st_color_customize.php');


//Custom Widgets 
require_once( get_template_directory()  . '/inc/widgets/blog-posts.php');
require_once( get_template_directory()  . '/inc/widgets/social-icons.php');
require_once( get_template_directory()  . '/inc/widgets/about_widget.php');

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Custom functions that act independently of the theme templates.
require get_template_directory() . '/inc/extras.php';

// Load the TGM init if it exists
if (file_exists(get_template_directory() . '/plugin/plugins-config.php')) {
    require_once( get_template_directory() . '/plugin/plugins-config.php');
}

