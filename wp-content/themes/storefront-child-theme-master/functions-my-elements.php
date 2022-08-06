<?php
    // LOGO TYPE
    //--------------------------------------
    function Logo() {
        $out = '';
        if (function_exists('the_custom_logo')) {
            $out .= the_custom_logo();
        }
        return $out;
    }

    // BREADSCRUM

    function crear_breadcrumbs() {
        if (!is_front_page()) {
            echo '<a href="/">Home</a> > ';
            if (is_category() || is_single() || is_page()) {
                if(is_category()){
                    $category = get_the_category();
                    echo $category[0]->cat_name;
                }else{
                    the_category(' - ');
                }if(is_page()) {
                    echo the_title();
                }if (is_single()) {
                    echo " > ";
                    the_title();
                }
            }
        }
    }
    
    add_filter( '[HOOK_DE_TU_THEME]', 'crear_breadcrumbs' );


    // Url Theme Child

    function url_child() {
    $url = get_theme_file_uri();
    echo $url;
    }