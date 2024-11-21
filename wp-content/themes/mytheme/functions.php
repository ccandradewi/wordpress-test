<?php
// Theme Setup
function landing_page_setup() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'landing_page_setup');

// Enqueue Styles and Scripts
function landing_page_assets() {
    wp_enqueue_style('landing-page-style', get_stylesheet_uri());
}
function theme_setup() {
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'your-theme'),
        'footer'  => __('Footer Menu', 'your-theme'),
    ));
}
function theme_customizer($wp_customize) {
    // Add a section for the site identity
    $wp_customize->add_section('site_identity', array(
        'title' => __('Site Identity', 'your-theme'),
        'priority' => 30,
    ));

    // Add a setting for the website name
    $wp_customize->add_setting('website_name', array(
        'default' => get_bloginfo('name'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('website_name', array(
        'label' => __('Website Name', 'your-theme'),
        'section' => 'site_identity',
        'type' => 'text',
    ));

    // Add a setting for the tagline
    $wp_customize->add_setting('website_tagline', array(
        'default' => get_bloginfo('description'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('website_tagline', array(
        'label' => __('Tagline', 'your-theme'),
        'section' => 'site_identity',
        'type' => 'text',
    ));

    // Add a setting for the logo
    $wp_customize->add_setting('website_logo', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'website_logo', array(
        'label' => __('Logo', 'your-theme'),
        'section' => 'site_identity',
    )));
}
add_action('customize_register', 'theme_customizer');

add_action('after_setup_theme', 'theme_setup');

add_action('wp_enqueue_scripts', 'landing_page_assets');
?>
