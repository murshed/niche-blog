<?php
/**
 * Theme Options.
 *
 * @package niche_blog
 */

// Add Panel.
$wp_customize->add_panel( 'theme_option_panel',
	array(
	'title'      => __( 'Niche Blog Options', 'niche-blog' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	)
);

// Sidebar section
$wp_customize->add_section('section_sidebar', array(    
	'title'       => __('Sidebar', 'niche-blog'),
	'panel'       => 'theme_option_panel'    
));

// Blog Sidebar Option
$wp_customize->add_setting('blog_sidebar', 
	array(
	'default' 			=> 'no-sidebar',
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'niche_blog_sanitize_select',
	'transport'         => 'refresh',
	)
);

$wp_customize->add_control('blog_sidebar', 
	array(		
	'label' 	=> __('Blog Page Sidebar', 'niche-blog'),
	'section' 	=> 'section_sidebar',
	'settings'  => 'blog_sidebar',
	'type' 		=> 'radio',
	'choices' 	=> array(		
		'left-sidebar' 	=> __( 'Left Sidebar', 'niche-blog'),						
		'right-sidebar' => __( 'Right Sidebar', 'niche-blog'),	
		'no-sidebar' 	=> __( 'No Sidebar', 'niche-blog'),	
		),	
	)
);

// Single Post Sidebar Option
$wp_customize->add_setting('single_post_sidebar', 
	array(
	'default' 			=> 'right-sidebar',
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'niche_blog_sanitize_select',
	'transport'         => 'refresh',
	)
);

$wp_customize->add_control('single_post_sidebar', 
	array(		
	'label' 	=> __('Single Post Sidebar', 'niche-blog'),
	'section' 	=> 'section_sidebar',
	'settings'  => 'single_post_sidebar',
	'type' 		=> 'radio',
	'choices' 	=> array(		
		'left-sidebar' 	=> __( 'Left Sidebar', 'niche-blog'),						
		'right-sidebar' => __( 'Right Sidebar', 'niche-blog'),	
		'no-sidebar' 	=> __( 'No Sidebar', 'niche-blog'),	
		),	
	)
);

// Archive Sidebar Option
$wp_customize->add_setting('archive_sidebar', 
	array(
	'default' 			=> 'no-sidebar',
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'niche_blog_sanitize_select',
	'transport'         => 'refresh',
	)
);

$wp_customize->add_control('archive_sidebar', 
	array(		
	'label' 	=> __('Archive Sidebar', 'niche-blog'),
	'section' 	=> 'section_sidebar',
	'settings'  => 'archive_sidebar',
	'type' 		=> 'radio',
	'choices' 	=> array(		
		'left-sidebar' 	=> __( 'Left Sidebar', 'niche-blog'),						
		'right-sidebar' => __( 'Right Sidebar', 'niche-blog'),	
		'no-sidebar' 	=> __( 'No Sidebar', 'niche-blog'),	
		),	
	)
);

// Page Sidebar Option
$wp_customize->add_setting('page_sidebar', 
	array(
	'default' 			=> 'no-sidebar',
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'niche_blog_sanitize_select',
	'transport'         => 'refresh',
	)
);

$wp_customize->add_control('page_sidebar', 
	array(		
	'label' 	=> __('Page Sidebar', 'niche-blog'),
	'section' 	=> 'section_sidebar',
	'settings'  => 'page_sidebar',
	'type' 		=> 'radio',
	'choices' 	=> array(		
		'left-sidebar' 	=> __( 'Left Sidebar', 'niche-blog'),						
		'right-sidebar' => __( 'Right Sidebar', 'niche-blog'),	
		'no-sidebar' 	=> __( 'No Sidebar', 'niche-blog'),	
		),	
	)
);

// Excerpt Length
$wp_customize->add_section('section_excerpt_length', 
	array(    
	'title'       => __('Excerpt Length', 'niche-blog'),
	'panel'       => 'theme_option_panel'    
	)
);

$wp_customize->add_setting( 'excerpt_length', array(
	'default'           => '28',
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'niche_blog_sanitize_number_range',
	'transport'         => 'refresh',
) );

$wp_customize->add_control( 'excerpt_length', array(
	'label'       => __( 'Excerpt Length', 'niche-blog' ),
	'description' => __( 'Note: Min 5 & Max 100.', 'niche-blog' ),
	'section'     => 'section_excerpt_length',
	'type'        => 'number',
	'input_attrs' => array( 'min' => 5, 'max' => 100, 'style' => 'width: 55px;' ),
) );

// Social Icons
$wp_customize->add_section( 'social' , array(
	'title'      => esc_html__( 'Social Icons', 'niche-blog' ),
	'priority'   => 10,
	'panel'		 => 'theme_option_panel'
) );

$wp_customize->add_setting( 'social_facebook' , array(
	'default'     => '',
	'transport'   => 'postMessage',
	'sanitize_callback'    => 'esc_url_raw',
) );

$wp_customize->add_control( 'social_facebook', array(
	'label'        => esc_html__( 'Facebook', 'niche-blog' ),
	'section'    => 'social',
	'settings'   => 'social_facebook',
	'priority'    => 9
) );

$wp_customize->add_setting( 'social_twitter' , array(
	'default'     => '',
	'transport'   => 'postMessage',
	'sanitize_callback'    => 'esc_url_raw',
) );

$wp_customize->add_control( 'social_twitter', array(
	'label'        => esc_html__( 'Twitter', 'niche-blog' ),
	'section'    => 'social',
	'settings'   => 'social_twitter',
	'priority'    => 9
) );

$wp_customize->add_setting( 'social_instagram' , array(
	'default'     => '',
	'transport'   => 'postMessage',
	'sanitize_callback'    => 'esc_url_raw',
) );

$wp_customize->add_control( 'social_instagram', array(
	'label'        => esc_html__( 'Instagram', 'niche-blog' ),
	'section'    => 'social',
	'settings'   => 'social_instagram',
	'priority'    => 9
) );

$wp_customize->add_setting( 'social_github' , array(
	'default'     => '',
	'transport'   => 'postMessage',
	'sanitize_callback'    => 'esc_url_raw',
) );

$wp_customize->add_control( 'social_github', array(
	'label'        => esc_html__( 'Github', 'niche-blog' ),
	'section'    => 'social',
	'settings'   => 'social_github',
	'priority'    => 9
) );

$wp_customize->add_setting( 'social_youtube' , array(
	'default'     => '',
	'transport'   => 'postMessage',
	'sanitize_callback'    => 'esc_url_raw',
) );

$wp_customize->add_control( 'social_youtube', array(
	'label'        => esc_html__( 'Youtube', 'niche-blog' ),
	'section'    => 'social',
	'settings'   => 'social_youtube',
	'priority'    => 9
) );

$wp_customize->add_setting( 'social_tiktok' , array(
	'default'     => '',
	'transport'   => 'postMessage',
	'sanitize_callback'    => 'esc_url_raw',
) );

$wp_customize->add_control( 'social_tiktok', array(
	'label'        => esc_html__( 'Tiktok', 'niche-blog' ),
	'section'    => 'social',
	'settings'   => 'social_tiktok',
	'priority'    => 9
) );