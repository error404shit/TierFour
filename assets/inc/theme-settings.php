<?php 


// Creating Admin Page
function Tier_add_admin_page(){

	// Generate Tier Admin Page
	add_menu_page( 'Tier Theme Options', 'Tier', 'manage_options', 'lawrence_Tier', 'tier_theme_create_page', '
dashicons-admin-generic', 110 );

	// Generate Tier Admin Sub Pages
	add_submenu_page( 'lawrence_Tier', 'Tier Settings', 'General', 'manage_options', 'lawrence_Tier', 'tier_theme_create_page' );

	add_submenu_page( 'lawrence_Tier', 'Tier CSS Options', 'Custom CSS', 'manage_options', 'lawrence_Tier-css', 'tier_theme_settings_page' );

	// Activate custom settings
	add_action( 'admin_init', 'tier_custom_settings' );

}
add_action( 'admin_menu', 'Tier_add_admin_page' );


function tier_custom_settings(){
	// settings
	register_setting( 'Tier-settings-group', 'first_name' );
	register_setting( 'Tier-settings-group', 'last_name' );
	register_setting( 'Tier-settings-group', 'facebook_handler' );
	register_setting( 'Tier-settings-group', 'twitter_handler', 'sanitize_twitter_handler' );
	register_setting( 'Tier-settings-group', 'youtube_handler' );

	// sections
	add_settings_section( 'tier-sidebar-options', 'Sidebar Options', 'tier_sidebar_options', 'lawrence_Tier' );

	// fields
	add_settings_field( 'sidebar-name', 'Full Name', 'tier_sidebar_name', 'lawrence_Tier', 'tier-sidebar-options' );
	add_settings_field( 'sidebar-facebook', 'Facebook handler', 'tier_sidebar_facebook', 'lawrence_Tier', 'tier-sidebar-options' );
	add_settings_field( 'sidebar-twitter', 'Twitter handler', 'tier_sidebar_twitter', 'lawrence_Tier', 'tier-sidebar-options' );
	add_settings_field( 'sidebar-youtube', 'Youtube handler', 'tier_sidebar_youtube', 'lawrence_Tier', 'tier-sidebar-options' );
}


function tier_sidebar_options(){
	echo "Customize Sidebar Information";
}

function tier_sidebar_name(){
	$firstName = esc_attr( get_option( 'first_name' ) );
	$lastName = esc_attr( get_option( 'last_name' ) );
	echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name"> 
		  <input type="text" name="last_name" value="'.$lastName.'" placeholder="Last Name">';
}


function tier_sidebar_facebook(){
	$facebook = esc_attr( get_option( 'facebook_handler' ) );
	echo '<input type="text" name="facebook_handler" value="'.$facebook.'" placeholder="Facebook handler">';
}

function tier_sidebar_twitter(){
	$twitter = esc_attr( get_option( 'twitter_handler' ) );
	echo '<input type="text" name="twitter_handler" value="'.$twitter.'" placeholder="Twitter handler">
		  <p class="description">Input your username without the @ character.</p>';
}

function tier_sidebar_youtube(){
	$twitter = esc_attr( get_option( 'youtube_handler' ) );
	echo '<input type="text" name="youtube_handler" value="'.$twitter.'" placeholder="Youtube handler">';
}

// Sanitization Settings
function sanitize_twitter_handler( $input ){
	$output = sanitize_text_field( $input );
	$output = str_replace( '@', '', $output );
	return $output;
}


function tier_theme_create_page(){
	// generation of our admin page
	require_once( get_template_directory(). '/assets/inc/tier-admin.php' );
}


function tier_theme_settings_page(){
	// generation of our sub pages
	echo "<h1>Lawrence's Tier Custom CSS</h1>";
}