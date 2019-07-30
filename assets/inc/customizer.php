<?php 

/*Theme Logo*/

function theme_logo($wp_customize){

	$wp_customize->add_setting( 'logo' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo',
	array(

		'label'		=> 'Upload Logo',
		'section'	=> 'title_tagline',
		'settings'	=> 'logo' 

	 ) ) );

    // Logo, title and description chooser
    $wp_customize->add_setting(
        'site_title_option',
        array (
            'default'           => 'text-only',
            'sanitize_callback' => 'theme_slug_sanitize_radio',
            'transport'         => 'refresh'
        )
    );
    $wp_customize->add_control(
        'site_title_option',
        array(
            'label'         => __( 'Display site title / logo.' ),
            'section'       => 'title_tagline',
            'type'          => 'radio',
            'description'   => __( 'Choose your preferred option.' ),
            'choices'   => array (
                'text-only'     => __( 'Display site title and description only.' ),
                'logo-only'     => __( 'Display site logo image only.' )
            )
        )
    );
}

add_action( 'customize_register', 'theme_logo' );


function tierfour_customizer_setting( $wp_customize ){

	// $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	// $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
	// $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	// $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';

	// $wp_customize->get_setting('color')->panel = 'Colors';

	/*Featured Image*/

	$wp_customize->add_section( 'tierfour_customizer', array( 

		'title'					=> __('Customizer Controls'),
		'priority'				=> 85

	 ) );

	$wp_customize->add_setting( 'thumbnail_display', array( 

		'default'				=> 0,
		'transport'				=> 'refresh',
		'type'					=> 'theme_mod',
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'		=> 'sanitize_checkbox'

	 ) );

	$wp_customize->add_control( 'thumbnail_display', array( 

		'label'		=> __( 'Hide Featured Image' ),
		'section'	=> 'tierfour_customizer',
		'type'		=> 'checkbox',
		'priority'	=> 5

	 ) );


	/*Navigation*/

	$wp_customize->add_setting( 'navigation-style', array( 

		'default'				=> 1,
		'transport'				=> 'refresh',
		'type'					=> 'theme_mod',
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'		=> 'sanitize_checkbox'

	 ) );

	$wp_customize->add_control( 'navigation-style', array( 

		'label'		=> __( 'Box Type Navigation' ),
		'section'	=> 'tierfour_customizer',
		'type'		=> 'checkbox',
		'priority'	=> 5

	 ) );


	/*Related Posts*/

	$wp_customize->add_setting( 'related_display', array( 

		'default'				=> 0,
		'transport'				=> 'refresh',
		'type'					=> 'theme_mod',
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'		=> 'sanitize_checkbox'

	 ) );

	$wp_customize->add_control( 'related_display', array( 

		'label'		=> __( 'Hide Related Posts' ),
		'section'	=> 'tierfour_customizer',
		'type'		=> 'checkbox',
		'priority'	=> 5

	 ) );

	/*News*/

	$wp_customize->add_setting( 'news_option', array( 

		'default'				=> 0,
		'transport'				=> 'refresh',
		'type'					=> 'theme_mod',
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'		=> 'sanitize_checkbox'

	 ) );

	$wp_customize->add_control( 'news_option', array( 

		'label'		=> __( 'Hide News' ),
		'section'	=> 'tierfour_customizer',
		'type'		=> 'checkbox',
		'priority'	=> 5

	 ) );

	/*Page Widget Option*/

	$wp_customize->add_setting( 'page_option', array( 

		'default'				=> 0,
		'transport'				=> 'refresh',
		'type'					=> 'theme_mod',
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'		=> 'sanitize_checkbox'

	 ) );

	$wp_customize->add_control( 'page_option', array( 

		'label'		=> __( 'Show Widgets on Pages' ),
		'section'	=> 'tierfour_customizer',
		'type'		=> 'checkbox',
		'priority'	=> 5

	 ) );

	/*Social Media*/

	$wp_customize->add_section( 'tierfour_social_media', array( 

		'title'		=> __( 'Social Media' ),
		'priority'	=> 100,

	 ) );

	// Display Icons

	$wp_customize->add_setting( 'display_social_icons', array( 

		'default'			=> 0,
		'transport'			=> 'refresh',
		'type'				=> 'theme_mod',
		'capability'		=> 'edit_theme_options',
		'sanitize_callback'	=> 'sanitize_checkbox'

	 ) );

	$wp_customize->add_control( 'display_social_icons', array( 

		'label'		=> __( 'Display Icons' ),
		'section'	=> 'tierfour_social_media',
		'type'		=> 'checkbox',
		'priority'	=> 5

	 ) );

	// Facebook

	$wp_customize->add_setting( 'facebook', array( 

		'default'			=> '',
		'transport'			=> 'refresh',
		'type'				=> 'theme_mod',
		'capabilty'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'esc_url_raw'

	 ) );

	$wp_customize->add_control( 'facebook', array( 

		'label'		=> __( 'Facebook' ),
		'section'	=> 'tierfour_social_media',
		'type'		=> 'url',
		'priority'	=> 5,
		'input_attrs'	=> array(

			'placeholder'	=> 'Enter Link...'
		 
		 )

	 ) );

	// Twitter

	$wp_customize->add_setting( 'twitter', array( 

		'default'			=> '',
		'transport'			=> 'refresh',
		'type'				=> 'theme_mod',
		'capabilty'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'esc_url_raw'

	 ) );

	$wp_customize->add_control( 'twitter', array( 

		'label'		=> __( 'Twitter' ),
		'section'	=> 'tierfour_social_media',
		'type'		=> 'url',
		'priority'	=> 5,
		'input_attrs'	=> array(

			'placeholder'	=> 'Enter Link...'
		 
		 )

	 ) );

	// Instagram

	$wp_customize->add_setting( 'instagram', array( 

		'default'			=> '',
		'transport'			=> 'refresh',
		'type'				=> 'theme_mod',
		'capabilty'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'esc_url_raw'

	 ) );

	$wp_customize->add_control( 'instagram', array( 

		'label'		=> __( 'Instagram' ),
		'section'	=> 'tierfour_social_media',
		'type'		=> 'url',
		'priority'	=> 5,
		'input_attrs'	=> array(

			'placeholder'	=> 'Enter Link...'
		 
		 )

	 ) );

	// LinkedIn

	$wp_customize->add_setting( 'linkedin', array( 

		'default'			=> '',
		'transport'			=> 'refresh',
		'type'				=> 'theme_mod',
		'capabilty'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'esc_url_raw'

	 ) );

	$wp_customize->add_control( 'linkedin', array( 

		'label'		=> __( 'LinkedIn' ),
		'section'	=> 'tierfour_social_media',
		'type'		=> 'url',
		'priority'	=> 5,
		'input_attrs'	=> array(

			'placeholder'	=> 'Enter Link...'
		 
		 )

	 ) );

	// Youtube

	$wp_customize->add_setting( 'youtube', array( 

		'default'			=> '',
		'transport'			=> 'refresh',
		'type'				=> 'theme_mod',
		'capabilty'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'esc_url_raw'

	 ) );

	$wp_customize->add_control( 'youtube', array( 

		'label'		=> __( 'YouTube' ),
		'section'	=> 'tierfour_social_media',
		'type'		=> 'url',
		'priority'	=> 5,
		'input_attrs'	=> array(

			'placeholder'	=> 'Enter Link...'
		 
		 )

	 ) );

	// Google+

	$wp_customize->add_setting( 'google+', array( 

		'default'			=> '',
		'transport'			=> 'refresh',
		'type'				=> 'theme_mod',
		'capabilty'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'esc_url_raw'

	 ) );

	$wp_customize->add_control( 'google+', array( 

		'label'		=> __( 'Google+' ),
		'section'	=> 'tierfour_social_media',
		'type'		=> 'url',
		'priority'	=> 5,
		'input_attrs'	=> array(

			'placeholder'	=> 'Enter Link...'
		 
		 )

	 ) );

	// RSS

	$wp_customize->add_setting( 'RSS', array( 

		'default'			=> '',
		'transport'			=> 'refresh',
		'type'				=> 'theme_mod',
		'capabilty'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'esc_url_raw'

	 ) );

	$wp_customize->add_control( 'RSS', array( 

		'label'		=> __( 'RSS' ),
		'section'	=> 'tierfour_social_media',
		'type'		=> 'url',
		'priority'	=> 5,
		'input_attrs'	=> array(

			'placeholder'	=> 'Enter Link...'
		 
		 )

	 ) );

	// Flicker

	$wp_customize->add_setting( 'flicker', array( 

		'default'			=> '',
		'transport'			=> 'refresh',
		'type'				=> 'theme_mod',
		'capabilty'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'esc_url_raw'

	 ) );

	$wp_customize->add_control( 'flicker', array( 

		'label'		=> __( 'Flicker' ),
		'section'	=> 'tierfour_social_media',
		'type'		=> 'url',
		'priority'	=> 5,
		'input_attrs'	=> array(

			'placeholder'	=> 'Enter Link...'
		 
		 )

	 ) );

	// Flicker

	$wp_customize->add_setting( 'pinterest', array( 

		'default'			=> '',
		'transport'			=> 'refresh',
		'type'				=> 'theme_mod',
		'capabilty'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'esc_url_raw'

	 ) );

	$wp_customize->add_control( 'pinterest', array( 

		'label'		=> __( 'Pinterest' ),
		'section'	=> 'tierfour_social_media',
		'type'		=> 'url',
		'priority'	=> 5,
		'input_attrs'	=> array(

			'placeholder'	=> 'Enter Link...'
		 
		 )

	 ) );



	// Customize Theme Appearance

	$wp_customize->add_panel(
		'custom_theme_appearance',
		array(
			'priority'	=> 80,
			'capability' 	=> 'edit_theme_options',
			'theme_support'	=> '',
			'title'			=> __( 'Customize Theme Appearance', 'TierFour' ),
			'description'	=> __( 'Custom your theme appearance', 'TierFour' )
		)
	);

	/*Slider Options*/
	$wp_customize->add_section( 'Slider_customizer', array( 

		'title'		=> __( 'Slider Option' ),
		'priority'	=> 85,
		'panel'		=> 'custom_theme_appearance'

	 ) );

	// Main Slider

	$wp_customize->add_setting( 'slider_option', array( 

		'default'				=> 'main',
		'transport'				=> 'refresh',
		'type'					=> 'theme_mod',
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'		=> 'theme_slug_sanitize_radio'

	 ) );

	$wp_customize->add_control( 'slider_option', array( 

		'label'		=> __( 'Slider Styles' ),
		'section'	=> 'Slider_customizer',
		'priority'	=> 5,
		'type'		=> 'radio',
		'choices'	=> array( 
			'main'			=> __( 'Slider with sub post' ),
			'secondary'		=> __( 'Full Slider' )
		 )

	 ) );


	/*Recent Posts*/
	$wp_customize->add_section( 'recent_posts_customizer', array( 

		'title'		=> __( 'Recent Post Styles' ),
		'priority'	=> 85,
		'panel'		=> 'custom_theme_appearance'

	 ) );

	$wp_customize->add_setting( 'recent_posts_option', array( 

		'default'				=> 'main',
		'transport'				=> 'refresh',
		'type'					=> 'theme_mod',
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'		=> 'theme_slug_sanitize_radio'

	 ) );

	$wp_customize->add_control( 'recent_posts_option', array( 

		'label'		=> __( 'Recent Posts Styles' ),
		'section'	=> 'recent_posts_customizer',
		'priority'	=> 5,
		'type'		=> 'radio',
		'choices'	=> array( 
			'main'			=> __( 'Style 1' ),
			'secondary'		=> __( 'Style 2' )
		 )

	 ) );



	/*Category Posts*/
	$wp_customize->add_section( 'category_posts_customizer', array( 

		'title'		=> __( 'Category Post Styles' ),
		'priority'	=> 85,
		'panel'		=> 'custom_theme_appearance'

	 ) );

	$wp_customize->add_setting( 'category_posts_option', array( 

		'default'				=> 'main',
		'transport'				=> 'refresh',
		'type'					=> 'theme_mod',
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'		=> 'theme_slug_sanitize_radio'

	 ) );

	$categories = get_categories();

	$cats = array();
	$i = 0;

	foreach( $categories as $category ) {

	// uncomment to see all $category data
	#print_r($category);

	if( $i == 0 ){

	    $default = $category->term_id;
	    $i++;

	}
	$cats[$category->term_id] = $category->name;
	} 

	$wp_customize->add_control( 'category_posts_option', array( 

		'label'		=> __( 'Category Posts Styles' ),
		'section'	=> 'category_posts_customizer',
		'priority'	=> 5,
		'type'		=> 'radio',
		'choices'	=> array( 
			'main'			=> __( 'Style 1' ),
			'secondary'		=> __( 'Style 2' )
		 )

	 ) );

	$wp_customize->add_setting( 'category_post_selection', array( 

		'default'			=> '1',
		'transport'			=> 'refresh',
		'sanitize_callback' => 'theme_slug_sanitize_select',

	 ) );

	$wp_customize->add_control( 'category_post_selection', array( 

		'label'			=> __( 'Category Selection' ),
		'description'	=> esc_html__( 'Choose category you want to output' ),
		'section'		=> 'category_posts_customizer',
		'priority'		=> 6,
		'type'			=> 'select',
		'capability'	=> 'edit_theme_options',
		'choices'		=> 	$cats

	 ) );



	/*Related Content*/
	$wp_customize->add_section( 'related_content_customizer', array( 

		'title'		=> __( 'Related Content Styles' ),
		'priority'	=> 85,
		'panel'		=> 'custom_theme_appearance'

	 ) );

	$wp_customize->add_setting( 'related_content_option', array( 

		'default'				=> 'main',
		'transport'				=> 'refresh',
		'type'					=> 'theme_mod',
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'		=> 'theme_slug_sanitize_radio'

	 ) );

	$wp_customize->add_control( 'related_content_option', array( 

		'label'		=> __( 'Related Content Styles' ),
		'section'	=> 'related_content_customizer',
		'priority'	=> 5,
		'type'		=> 'radio',
		'choices'	=> array( 
			'main'			=> __( 'Style 1' ),
			'secondary'		=> __( 'Style 2' )
		 )

	 ) );





	// Appearance Controlls

	$wp_customize->add_panel(
		'Color_Controls',
		array(
			'priority'	=> 80,
			'capability' 	=> 'edit_theme_options',
			'theme_support'	=> '',
			'title'			=> __( 'Color Controls', 'TierFour' ),
			'description'	=> __( 'Color Controls', 'TierFour' )
		)
	);


	/*Nav Background Color*/

	$wp_customize->add_section( 'tier_standard_colors1', array( 

		'title'		=> __( 'Navigation Colors', 'TierFour' ),
		'priority'	=> 30,
		'panel'		=> 'Color_Controls'

	 ) );

		$wp_customize->add_setting( 'tier_nav_bg', array( 

			'default' 	=> '#f8f9fa',
			'transport'	=> 'refresh'

		 ) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tier_nav_bg_control', array( 

			'label'		=> __( 'Navigation Background Color Control', 'TierFour' ),
			'section'	=> 'tier_standard_colors1',
			'settings'	=> 'tier_nav_bg'

		 ) ) );

		/*Nav Background Hover Color*/
		$wp_customize->add_setting( 'tier_nav_hover', array( 

			'default' 	=> '#0fb2bb',
			'transport'	=> 'refresh'

		 ) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tier_nav_hover_control', array( 

			'label'		=> __( 'Navigation Active, Hover Color, Focus Search', 'TierFour' ),
			'section'	=> 'tier_standard_colors1',
			'settings'	=> 'tier_nav_hover'

		 ) ) );

		/*Nav Links*/
		$wp_customize->add_setting( 'tier_nav_link_color', array( 

			'default' 	=> '#939393',
			'transport'	=> 'refresh'

		 ) );


		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tier_nav_link_color_control', array( 

			'label'		=> __( 'Navigation Link Color', 'TierFour' ),
			'section'	=> 'tier_standard_colors1',
			'settings'	=> 'tier_nav_link_color'

		 ) ) );


		/*Title Background Color*/
		
		$wp_customize->add_section( 'tier_standard_colors', array( 

			'title'		=> __( 'Title Color Control', 'TierFour' ),
			'priority'	=> 30,
			'panel'		=> 'Color_Controls'

		 ) );

		$wp_customize->add_setting( 'tier_Bg_color', array( 

			'default' 	=> '#0fb2bb',
			'transport'	=> 'refresh'

		 ) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tier_Bg_color_control', array( 

			'label'		=> __( 'Title Background Color', 'TierFour' ),
			'section'	=> 'tier_standard_colors',
			'settings'	=> 'tier_Bg_color'

		 ) ) );

		/*Title Font Color*/
		$wp_customize->add_setting( 'tier_font_color', array( 

			'default' 	=> '#fff',
			'transport'	=> 'refresh'

		 ) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tier_font_color_control', array( 

			'label'		=> __( 'Title Font Color', 'TierFour' ),
			'section'	=> 'tier_standard_colors',
			'settings'	=> 'tier_font_color'

		 ) ) );




		/*Button Colors*/

		$wp_customize->add_section( 'tier_standard_colors2', array( 

			'title'		=> __( 'Button Color Control', 'TierFour' ),
			'priority'	=> 30,
			'panel'		=> 'Color_Controls'

		 ) );

		$wp_customize->add_setting( 'tier_btn_color', array( 

			'default' 	=> '#0fb2bb',
			'transport'	=> 'refresh'

		 ) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tier_btn_color_control', array( 

			'label'		=> __( 'Title Background Color', 'TierFour' ),
			'section'	=> 'tier_standard_colors2',
			'settings'	=> 'tier_btn_color'

		 ) ) );

		/* Font Color*/
		$wp_customize->add_setting( 'tier_btn_font_color', array( 

			'default' 	=> '#fff',
			'transport'	=> 'refresh'

		 ) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tier_btn_font_color_control', array( 

			'label'		=> __( 'Title Font Color', 'TierFour' ),
			'section'	=> 'tier_standard_colors2',
			'settings'	=> 'tier_btn_font_color'

		 ) ) );


		/*Full Slider Color*/

		$wp_customize->add_section( 'tier_standard_colors3', array( 

			'title'		=> __( 'Full SLider Color Control', 'TierFour' ),
			'priority'	=> 30,
			'panel'		=> 'Color_Controls'

		 ) );

		$wp_customize->add_setting( 'tier_slider_color', array( 

			'default' 	=> '#002d2c',
			'transport'	=> 'refresh'

		 ) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tier_slider_color_control', array( 

			'label'		=> __( 'Title Background Color', 'TierFour' ),
			'section'	=> 'tier_standard_colors3',
			'settings'	=> 'tier_slider_color'

		 ) ) );

		/* Font Color*/
		$wp_customize->add_setting( 'tier_slider_font_color', array( 

			'default' 	=> '#fff',
			'transport'	=> 'refresh'

		 ) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tier_slider_font_color_control', array( 

			'label'		=> __( 'Font Color', 'TierFour' ),
			'section'	=> 'tier_standard_colors3',
			'settings'	=> 'tier_slider_font_color'

		 ) ) );


		/*Footer Color*/

		$wp_customize->add_section( 'tier_standard_colors4', array( 

			'title'		=> __( 'Footer Color Control', 'TierFour' ),
			'priority'	=> 30,
			'panel'		=> 'Color_Controls'

		 ) );

		// Upper Footer
		$wp_customize->add_setting( 'tier_upper_footer_color', array( 

			'default' 	=> '#01373a',
			'transport'	=> 'refresh'

		 ) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tier_upper_footer_color_control', array( 

			'label'		=> __( 'Upper Footer Color', 'TierFour' ),
			'section'	=> 'tier_standard_colors4',
			'settings'	=> 'tier_upper_footer_color'

		 ) ) );

		// Lower Footer
		$wp_customize->add_setting( 'tier_lower_footer_color', array( 

			'default' 	=> '#0fb2bb',
			'transport'	=> 'refresh'

		 ) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tier_lower_footer_color_control', array( 

			'label'		=> __( 'Lower Footer Color', 'TierFour' ),
			'section'	=> 'tier_standard_colors4',
			'settings'	=> 'tier_lower_footer_color'

		 ) ) );

		/* Font Color*/
		$wp_customize->add_setting( 'tier_footer_font_color', array( 

			'default' 	=> '#fff',
			'transport'	=> 'refresh'

		 ) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tier_footer_font_color_control', array( 

			'label'		=> __( 'Font Color', 'TierFour' ),
			'section'	=> 'tier_standard_colors4',
			'settings'	=> 'tier_footer_font_color'

		 ) ) );


		/*Calendar Color Control*/

		$wp_customize->add_section( 'tier_standard_colors5', array( 

			'title'		=> __( 'Calendar Color Control', 'TierFour' ),
			'priority'	=> 30,
			'panel'		=> 'Color_Controls'

		 ) );

		$wp_customize->add_setting( 'tier_calendar_color', array( 

			'default' 	=> '#f5f5f5',
			'transport'	=> 'refresh'

		 ) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tier_calendar_color_control', array( 

			'label'		=> __( 'Calendar Background Color', 'TierFour' ),
			'section'	=> 'tier_standard_colors5',
			'settings'	=> 'tier_calendar_color'

		 ) ) );

		/* Font Color*/
		$wp_customize->add_setting( 'tier_calendar_font_color', array( 

			'default' 	=> '#aaa',
			'transport'	=> 'refresh'

		 ) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tier_calendar_font_color_control', array( 

			'label'		=> __( 'Calendar Font Color', 'TierFour' ),
			'section'	=> 'tier_standard_colors5',
			'settings'	=> 'tier_calendar_font_color'

		 ) ) );


		/*News Color Control*/

		$wp_customize->add_section( 'tier_standard_colors6', array( 

			'title'		=> __( 'News Color Control', 'TierFour' ),
			'priority'	=> 30,
			'panel'		=> 'Color_Controls'

		 ) );

		$wp_customize->add_setting( 'tier_news_color', array( 

			'default' 	=> '#0fb2bb',
			'transport'	=> 'refresh'

		 ) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tier_news_color_control', array( 

			'label'		=> __( 'News Background Color', 'TierFour' ),
			'section'	=> 'tier_standard_colors6',
			'settings'	=> 'tier_news_color'

		 ) ) );

		/* Font Color*/
		$wp_customize->add_setting( 'tier_news_font_color', array( 

			'default' 	=> '#fff',
			'transport'	=> 'refresh'

		 ) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tier_news_font_color_control', array( 

			'label'		=> __( 'News Font Color', 'TierFour' ),
			'section'	=> 'tier_standard_colors6',
			'settings'	=> 'tier_news_font_color'

		 ) ) );


		/*Fonts Color Control*/

		$wp_customize->add_section( 'tier_standard_colors7', array( 

			'title'		=> __( 'fonts Color Control', 'TierFour' ),
			'priority'	=> 30,
			'panel'		=> 'Color_Controls'

		 ) );

		$wp_customize->add_setting( 'tier_fonts_color', array( 

			'default' 	=> '#000',
			'transport'	=> 'refresh'

		 ) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tier_fonts_color_control', array( 

			'label'		=> __( 'fonts Color', 'TierFour' ),
			'section'	=> 'tier_standard_colors7',
			'settings'	=> 'tier_fonts_color'

		 ) ) );


/*SideBar Controls*/

	$wp_customize->add_panel(
		'side_bar_options',
		array(
			'priority'	=> 160,
			'capability' 	=> 'edit_theme_options',
			'theme_support'	=> '',
			'title'			=> __( 'SideBar Controls', 'TierFour' ),
			'description'	=> __( 'Sidebar Customizations', 'TierFour' )
		)
	);

		// Right SideBar
		$wp_customize->add_section(
			'right_sidebar',
			array(
				'priority'	=> 4,
				'title'		=> esc_html__( 'Right SideBar', 'TierFour' ),
				'panel'		=> 'side_bar_options'
			)
		);

		$wp_customize->add_setting( 'right_sidebar_controls', array( 

			'default'			=> 0,
			'transport'			=> 'refresh',
			'type'				=> 'theme_mod',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'sanitize_checkbox'

		 ) );

		$wp_customize->add_control( 'right_sidebar_controls', array( 

			'label'		=> __( 'Hide Right SideBar' ),
			'section'	=> 'right_sidebar',
			'type'		=> 'checkbox',
			'priority'	=> 5

		 ) );


		// Left SideBar
		$wp_customize->add_section(
			'left_sidebar',
			array(
				'priority'	=> 4,
				'title'		=> esc_html__( 'Left SideBar', 'TierFour' ),
				'panel'		=> 'side_bar_options'
			)
		);

		$wp_customize->add_setting( 'left_sidebar_controls', array( 

			'default'			=> 0,
			'transport'			=> 'refresh',
			'type'				=> 'theme_mod',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'sanitize_checkbox'

		 ) );

		$wp_customize->add_control( 'left_sidebar_controls', array( 

			'label'		=> __( 'Hide Left SideBar' ),
			'section'	=> 'left_sidebar',
			'type'		=> 'checkbox',
			'priority'	=> 5

		 ) );

}

add_action('customize_register', 'tierfour_customizer_setting');


function sanitize_checkbox( $input ){

	return ( ( isset( $input ) && true == $input ) ? true : false );
}

//radio box sanitization function
function theme_slug_sanitize_radio( $input, $setting ){
 
    //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
    $input = sanitize_key($input);

    //get the list of possible radio box options 
    $choices = $setting->manager->get_control( $setting->id )->choices;
                     
    //return input if valid or return default option
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
     
}

//select sanitization function
    function theme_slug_sanitize_select( $input, $setting ){
     
        //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
        $input = sanitize_key($input);

        //get the list of possible select options 
        $choices = $setting->manager->get_control( $setting->id )->choices;
                         
        //return input if valid or return default option
        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
         
    }



// Output Customize CSS
function Tier_customize_css(){ ?>

	<style type="text/css">
	
		<?php if ( !empty( get_theme_mod('tier_nav_link_color') ) ): ?>
			.navbar a {
			  color: <?php echo get_theme_mod( 'tier_nav_link_color' ); ?> !important;
			}
		<?php endif ?>
			
		<?php if ( !empty( get_theme_mod('tier_nav_bg') ) ): ?>
			.bg-light, .dropdown-menu{
				background-color: <?php echo get_theme_mod( 'tier_nav_bg' ); ?>!important;
			}
		<?php endif; ?>
		
		<?php if ( !empty( get_theme_mod('tier_nav_hover') ) ): ?>
			.active > .nav-link, nav a:hover, nav a:focus, .con-layout .pagination-nav .pagination .page-item.active .page-link, nav form .input-group .override-search {
			    background-color: <?php echo get_theme_mod( 'tier_nav_hover' ); ?> !important;
			}
		<?php endif; ?>

		<?php if ( !empty( get_theme_mod('tier_Bg_color') ) ): ?>
	  		.title-content-bg, .comment-reply-title{
	  			border-bottom-color: <?php echo get_theme_mod( 'tier_Bg_color' ); ?> !important;
	  		}
	  	<?php endif; ?>

		<?php if ( !empty( get_theme_mod('tier_Bg_color') ) ): ?>
	  		.title-content-bg .titles, .post-categories li a, .date-item a{
	  			background-color: <?php echo get_theme_mod( 'tier_Bg_color' ); ?> !important;
	  		}
		<?php endif; ?>

		<?php if ( !empty( get_theme_mod('tier_font_color') ) ): ?>
	  		.widget_rss .titles a, .title-content-bg .titles, .post-categories li a, .date-item a{
	  			color: <?php echo get_theme_mod( 'tier_font_color' ); ?> !important;
	  		}
	  	<?php endif; ?>

		<?php if ( !empty( get_theme_mod('tier_btn_color') ) ): ?>
	  		.btn-custom, .slick-container .responsive2 button i{
	  			background-color: <?php echo get_theme_mod( 'tier_btn_color' ); ?> !important;
	  			border-color: <?php echo get_theme_mod( 'tier_btn_color' ); ?> !important;
	  		}
	  	<?php endif; ?>

		<?php if ( !empty( get_theme_mod('tier_btn_color') ) ): ?>
	  		.btn-custom, .scroll-top-arrow, .slick-container .responsive2 button i{
	  			background-color: <?php echo get_theme_mod( 'tier_btn_color' ); ?> !important;
	  		}
	  	<?php endif; ?>

		<?php if ( !empty( get_theme_mod('tier_btn_font_color') ) ): ?>
	  		.btn-custom, .scroll-top-arrow{
	  			color: <?php echo get_theme_mod( 'tier_btn_font_color' ); ?> !important;
	  		}
	  	<?php endif; ?>

		<?php if ( !empty( get_theme_mod('tier_slider_color') ) ): ?>
	  		.secondary-featured{
	  			background-color: <?php echo get_theme_mod( 'tier_slider_color' ); ?> !important;
	  		}
	  	<?php endif; ?>
		
		<?php if ( !empty( get_theme_mod('tier_slider_font_color') ) ): ?>
	  		.secondary-featured small a, .secondary-featured small i, .secondary-featured{
	  			color: <?php echo get_theme_mod( 'tier_slider_font_color' ); ?> !important;
	  		}
		<?php endif; ?>

		<?php if ( !empty( get_theme_mod('tier_upper_footer_color') ) ): ?>
	  		footer .footer-bg{
	  			background-color: <?php echo get_theme_mod( 'tier_upper_footer_color' ); ?> !important;
	  		}
	  	<?php endif; ?>

	  	<?php if ( !empty( get_theme_mod('tier_lower_footer_color') ) ): ?>
	  		footer .footer-bg-2{
	  			background-color: <?php echo get_theme_mod( 'tier_lower_footer_color' ); ?> !important;
	  		}
		<?php endif; ?>

	  	<?php if ( !empty( get_theme_mod('tier_footer_font_color') ) ): ?>
	  		footer .footer-bg-2{
	  			color: <?php echo get_theme_mod( 'tier_footer_font_color' ); ?> !important;
	  		}
		<?php endif; ?>

		<?php if ( !empty( get_theme_mod('tier_Bg_color') ) ): ?>
	  		.widget_categories ul li, .widget_archive ul li{
	  			color: <?php echo get_theme_mod( 'tier_Bg_color' ); ?> !important;
	  		}
	  	<?php endif; ?>
		
		<?php if ( !empty( get_theme_mod('tier_Bg_color') ) ): ?>
	  		.widget_recent_entries ul li span{
	  			background-color: <?php echo get_theme_mod( 'tier_Bg_color' ); ?> !important;
	  		}
	  	<?php endif; ?>

		<?php if ( !empty( get_theme_mod('tier_calendar_color') ) ): ?>
	  		.widget_calendar #wp-calendar tbody td{
	  			background: <?php echo get_theme_mod( 'tier_calendar_color' ); ?> !important;
	  		}
	  	<?php endif; ?>

		<?php if ( !empty( get_theme_mod('tier_calendar_font_color') ) ): ?>
	  		.widget_calendar #wp-calendar tbody td{
	  			color: <?php echo get_theme_mod( 'tier_calendar_font_color' ); ?> !important;
	  		}
	  	<?php endif; ?>
		
		<?php if ( !empty( get_theme_mod('tier_news_color') ) ): ?>
	  		.marquee-news-flex, .news-container .date-items{
	  			background: <?php echo get_theme_mod( 'tier_news_color' ); ?> !important;
	  		}
	  	<?php endif; ?>
		
		<?php if ( !empty( get_theme_mod('tier_news_font_color') ) ): ?>
	  		.marquee-news-flex p, .news-container .date-items{
	  			color: <?php echo get_theme_mod( 'tier_news_font_color' ); ?> !important;
	  		}
	  	<?php endif; ?>

		<?php if ( !empty( get_theme_mod('tier_fonts_color') ) ): ?>
	  		.division ul li a, .recent-header h3, .recent-post-content p, .sub-recent-header h3, .sub-recent-header small, .sub-recent-header small a, .sub-recent-post-content, .category-header h3, .category-post-content p, .single-post-content, .single-post h3, .single-post strong, .single-post ol li, .single-post ul li, .page-contianer span, .page-contianer h5 a, .comment-title, .aritcle-content-img p, .wp-caption-text, .comment-closed, .related-2-header h3, .comment-reply-title, .related-2-header small i, .related-2-header small a, .comment-form label, .widget_text .textwidget p, .division label, .widget_calendar #wp-calendar thead, .widget_calendar #wp-calendar caption{
	  			color: <?php echo get_theme_mod( 'tier_fonts_color' ); ?> !important;
	  		}
	  	<?php endif; ?>
	</style>

<?php }

add_action( 'wp_head', 'Tier_customize_css' );