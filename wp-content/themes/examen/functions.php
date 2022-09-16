<?php

/**
 * Charge les styles et les scripts du thème.
 *
 * @return void
 *
 * @since 1.0.0
 */
function examen_load_styles_and_scripts() {
    $theme = wp_get_theme();

    wp_register_style(
        'harmonic',
        get_template_directory_uri() . '/style.css',
        [],
        $theme->parent()->get('Version'));

    wp_register_style('examen',
    get_stylesheet_uri() ,
    ['harmonic'],
    $theme->get('Version'));

    wp_enqueue_style('examen');

    wp_register_script('examen',
    get_stylesheet_directory_uri() . '/assets/js/script.js',
    ['jquery'],
    $theme->get('Version'),
    true);

    wp_enqueue_script('examen');
}
add_action('wp_enqueue_scripts', 'examen_load_styles_and_scripts');


/**
 * Charge les fichiers de traduction du thème.
 *
 * @return void
 *
 * @since 1.0.0
 */
function examen_load_text_domain() {
    load_child_theme_textdomain('examen', get_stylesheet_directory() . '/languages');
}
add_action('after_setup_theme', 'examen_load_text_domain');

/**
 * Ajoute un menu dans le Footer
 * 
 * @return void
 * 
 * @since 1.0.0
 * 
 * @author Nathan
 * @see https://developer.wordpress.org/reference/functions/register_nav_menus/
 */
function examen_add_menu() : void {
    register_nav_menu('footer', __('Footer menu', 'examen'));
}
add_action('init', 'examen_add_menu');