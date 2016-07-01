<?php

//////////////////////////////////////////////////////////////////
// Customizer - Add Settings
//////////////////////////////////////////////////////////////////
function shapedtheme_register_theme_customizer( $wp_customize ) {
 	
	// Add Sections
	$wp_customize->add_section( 'shapedtheme_new_section_custom_css' , array(
   		'title'      => 'Custom CSS',
   		'description'=> 'Add your custom CSS which will overwrite the theme CSS',
   		'priority'   => 96,
	) );
	$wp_customize->add_section( 'shapedtheme_new_section_color_general' , array(
   		'title'      => 'Theme Color',
   		'description'=> '',
   		'priority'   => 95,
	) );
	$wp_customize->add_section( 'shapedtheme_new_section_footer' , array(
   		'title'      => 'Footer Settings',
   		'description'=> '',
   		'priority'   => 94,
	) );
	$wp_customize->add_section( 'shapedtheme_new_section_page' , array(
   		'title'      => 'Page Settings',
   		'description'=> '',
   		'priority'   => 93,
	) );
	$wp_customize->add_section( 'shapedtheme_new_section_post' , array(
   		'title'      => 'Post Settings',
   		'description'=> '',
   		'priority'   => 92,
	) );
	$wp_customize->add_section( 'shapedtheme_new_section_logo_header' , array(
   		'title'      => 'Logo and Header Settings',
   		'description'=> '',
   		'priority'   => 91,
	) );
	$wp_customize->add_section( 'shapedtheme_new_section_general' , array(
   		'title'      => 'General Settings',
   		'description'=> '',
   		'priority'   => 90,
	) );
	
	
	
	// Add Setting
		
		// General
		$wp_customize->add_setting(
	        'st_favicon',
	        array(
	        	'sanitize_callback' => 'esc_url_raw'
	        )
	    );

		$wp_customize->add_setting(
	        'st_home_layout',
	        array(
	            'default'     => 'rightsidebar',
	            'sanitize_callback' => 'esc_html'
	        )
	    );

		$wp_customize->add_setting(
	        'st_blog_pagination',
	        array(
	            'default'     => 'pagination',
	            'sanitize_callback' => 'esc_html'
	        )
	    );

		$wp_customize->add_setting(
	        'st_preloader',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'esc_html'
	        )
	    );

		
		// Header and logo
		$wp_customize->add_setting(
	        'st_logo',
	        array(
	        	'default'     => get_template_directory_uri() .'/images/logo.png',
	        	'sanitize_callback' => 'esc_url_raw'
	        )
	    );
		
		// Post Settings
		$wp_customize->add_setting(
	        'st_post_author_name',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'esc_html'
	        )
	    );
	    $wp_customize->add_setting(
	        'st_post_date',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'esc_html'
	        )
	    );
	    $wp_customize->add_setting(
	        'st_post_cat',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'esc_html'
	        )
	    );
	    $wp_customize->add_setting(
	        'st_post_tags',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'esc_html'
	        )
	    );
		$wp_customize->add_setting(
	        'st_post_author',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'esc_html'
	        )
	    );
	    $wp_customize->add_setting(
	        'st_post_nav',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'esc_html'
	        )
	    );
		$wp_customize->add_setting(
	        'st_post_related',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'esc_html'
	        )
	    );
		
		
		// Page Settings
		$wp_customize->add_setting(
	        'st_page_comments',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'esc_html'
	        )
	    );
		$wp_customize->add_setting(
	        'st_page_layout',
	        array(
	            'default'     => 'rightsidebar',
	            'sanitize_callback' => 'esc_html'
	        )
	    );


		
		// Footer Options
		$wp_customize->add_setting(
	        'st_back_to_top',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'esc_html'
	        )
	    );
		$wp_customize->add_setting(
	        'st_footer_copyright',
	        array(
	            'default'     => '2015 Kotha. All rights reserved. Design by ShapedTheme',
	            'sanitize_callback' => 'esc_html'
	        )
	    );
		
		// Color Options

			// Color general
			$wp_customize->add_setting(
				'st_theme_color',
				array(
					'default'     => '#00ACDF',
					'sanitize_callback' => 'sanitize_hex_color'
				)
			);
			$wp_customize->add_setting(
				'st_anchor_color',
				array(
					'default'     => '#23b2dd',
					'sanitize_callback' => 'sanitize_hex_color'
				)
			);
			$wp_customize->add_setting(
				'st_anchor_hover_color',
				array(
					'default'     => '#00ACDF',
					'sanitize_callback' => 'sanitize_hex_color'
				)
			);
			
			// Custom CSS
			$wp_customize->add_setting(
				'st_custom_css',
				array(
					'sanitize_callback' => 'esc_textarea'
				)
			);


    // Add Control
		
		// General
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'st_favicon',
				array(
					'label'      => 'Upload Favicon',
					'section'    => 'shapedtheme_new_section_general',
					'settings'   => 'st_favicon',
					'priority'	 => 1
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'st_home_layout',
				array(
					'label'          => 'Homepage Layout',
					'section'        => 'shapedtheme_new_section_general',
					'settings'       => 'st_home_layout',
					'type'           => 'radio',
					'priority'	 => 2,
					'choices'        => array(
						'full'   => 'Full Posts',
						'rightsidebar'  => 'Right Sidebar'
					)
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'st_blog_pagination',
				array(
					'label'          => 'Blog Pagination or Navigation',
					'section'        => 'shapedtheme_new_section_general',
					'settings'       => 'st_blog_pagination',
					'type'           => 'radio',
					'priority'	 => 3,
					'choices'        => array(
						'pagination'   => 'Pagination',
						'navigation'  => 'Navigation'
					)
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'st_preloader',
				array(
					'label'      => 'Disable Preloader',
					'section'    => 'shapedtheme_new_section_general',
					'settings'   => 'st_preloader',
					'type'		 => 'checkbox',
					'priority'	 => 4
				)
			)
		);
		
		// Header and Logo
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'st_logo',
				array(
					'label'      => 'Upload Logo',
					'section'    => 'shapedtheme_new_section_logo_header',
					'settings'   => 'st_logo',
					'priority'	 => 1
				)
			)
		);
		
		
		// Post Settings

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'st_post_author_name',
				array(
					'label'      => 'Hide Author Name',
					'section'    => 'shapedtheme_new_section_post',
					'settings'   => 'st_post_author_name',
					'type'		 => 'checkbox',
					'priority'	 => 1
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'st_post_date',
				array(
					'label'      => 'Hide Date',
					'section'    => 'shapedtheme_new_section_post',
					'settings'   => 'st_post_date',
					'type'		 => 'checkbox',
					'priority'	 => 2
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'st_post_cat',
				array(
					'label'      => 'Hide Category',
					'section'    => 'shapedtheme_new_section_post',
					'settings'   => 'st_post_cat',
					'type'		 => 'checkbox',
					'priority'	 => 3
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'st_post_tags',
				array(
					'label'      => 'Hide Tags',
					'section'    => 'shapedtheme_new_section_post',
					'settings'   => 'st_post_tags',
					'type'		 => 'checkbox',
					'priority'	 => 4
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'st_post_author',
				array(
					'label'      => 'Hide Author Box',
					'section'    => 'shapedtheme_new_section_post',
					'settings'   => 'st_post_author',
					'type'		 => 'checkbox',
					'priority'	 => 5
				)
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'st_post_nav',
				array(
					'label'      => 'Hide Next/Prev Post Navigation',
					'section'    => 'shapedtheme_new_section_post',
					'settings'   => 'st_post_nav',
					'type'		 => 'checkbox',
					'priority'	 => 6
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'st_post_related',
				array(
					'label'      => 'Hide Related Posts Box',
					'section'    => 'shapedtheme_new_section_post',
					'settings'   => 'st_post_related',
					'type'		 => 'checkbox',
					'priority'	 => 7
				)
			)
		);
		
		// Page settings
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'st_page_comments',
				array(
					'label'      => 'Hide Comments',
					'section'    => 'shapedtheme_new_section_page',
					'settings'   => 'st_page_comments',
					'type'		 => 'checkbox',
					'priority'	 => 1
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'st_page_layout',
				array(
					'label'          => 'Page Layout',
					'section'        => 'shapedtheme_new_section_page',
					'settings'       => 'st_page_layout',
					'type'           => 'radio',
					'priority'	 => 2,
					'choices'        => array(
						'full'   => 'Fullwidth',
						'rightsidebar'  => 'Right Sidebar'
					)
				)
			)
		);
		
		// Footer Settings

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'st_back_to_top',
				array(
					'label'      => 'Disable Back to top',
					'section'    => 'shapedtheme_new_section_footer',
					'settings'   => 'st_back_to_top',
					'type'		 => 'checkbox',
					'priority'	 => 1
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'st_footer_copyright',
				array(
					'label'      => 'Footer Copyright Text',
					'section'    => 'shapedtheme_new_section_footer',
					'settings'   => 'st_footer_copyright',
					'type'		 => 'text',
					'priority'	 => 2
				)
			)
		);
		
		// Color Settings
			
			// Colors general
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'st_theme_color',
					array(
						'label'      => 'Theme Color',
						'section'    => 'shapedtheme_new_section_color_general',
						'settings'   => 'st_theme_color',
						'priority'	 => 1
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'st_anchor_color',
					array(
						'label'      => 'Anchor Color',
						'section'    => 'shapedtheme_new_section_color_general',
						'settings'   => 'st_anchor_color',
						'priority'	 => 2
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'st_anchor_hover_color',
					array(
						'label'      => 'Anchor Hover Color',
						'section'    => 'shapedtheme_new_section_color_general',
						'settings'   => 'st_anchor_hover_color',
						'priority'	 => 3
					)
				)
			);
			
			// Custom CSS
			$wp_customize->add_control(
				new Customize_CustomCss_Control(
					$wp_customize,
					'st_custom_css',
					array(
						'label'      => 'Custom CSS',
						'section'    => 'shapedtheme_new_section_custom_css',
						'settings'   => 'st_custom_css',
						'type'		 => 'custom_css',
						'priority'	 => 1
					)
				)
			);
		
	

	// Remove Sections
	$wp_customize->remove_section( 'title_tagline');
	$wp_customize->remove_section( 'nav');
	$wp_customize->remove_section( 'static_front_page');
	$wp_customize->remove_section( 'colors');
	$wp_customize->remove_section( 'background_image');
	
 
}
add_action( 'customize_register', 'shapedtheme_register_theme_customizer' );
?>