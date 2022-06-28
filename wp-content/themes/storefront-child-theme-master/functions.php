<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */

function theme_scripts() {
    wp_enqueue_script('jquery-main', get_template_directory_uri() . '-child-theme-master/assets/vendor/jquery/jquery-1.11.0.min.js', '1.0', true);

    // DOT DOT DOT
    wp_enqueue_script('js-dotdotdot', get_template_directory_uri() . '-child-theme-master/assets/vendor/dotdotdot/jquery.dotdotdot.js', '1.0', true );

    // THEME
    wp_enqueue_style('css-main', get_template_directory_uri() . '-child-theme-master/assets/css/style.min.css', wp_get_theme()->get( 'Version'));
    wp_enqueue_script('js-main', get_template_directory_uri() . '-child-theme-master/assets/js/scripts.min.js', wp_get_theme()->get( 'Version'));

    //SWIPER
    if(is_home()){
        wp_enqueue_script(
            'js-swiper-home',
            get_template_directory_uri() . '-child-theme-master/assets/dev/js/sliders.js', 
            wp_get_theme()->get( 'Version')
        );
        // wp_enqueue_script('js-slider-home', get_template_directory_uri() . '/assets/js/carousel-home.min.js', wp_get_theme()->get( 'Version'));
    }


    // FORMS
    if(is_page() == 'contato'){
        wp_enqueue_script('js-mask', get_template_directory_uri() . '-child-theme-master/assets/vendor/jquery/jquery.mask.min.js', '1.0', true );
        wp_enqueue_script('js-forms', get_template_directory_uri() . '-child-theme-master/assets/js/forms.min.js', wp_get_theme()->get( 'Version'));
    }
}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );
