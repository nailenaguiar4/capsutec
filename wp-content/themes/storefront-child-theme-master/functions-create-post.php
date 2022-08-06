<?php

    // CREATE CUSTOM POSTS

    add_action( 'init', 'register_produto_post_type' );

    function register_produto_post_type() {
        $labels_produtos = array(
            'name'               => __( 'Produtos' ),
            'singular_name'      => __( 'Produto' ),
            'add_new'            => __( 'Adicionar Novo' ),
            'add_new_item'       => __( 'Adicionar Novo' ),
            'edit_item'          => __( 'Editar' ),
            'new_item'           => __( 'Novo Produto' ),
            'all_items'          => __( 'Listar Todos' ),
            'view_item'          => __( 'Ver Produto Anterior' ),
            'search_items'       => __( 'Buscar' ),
            'featured_image'     => 'Imagem Destacada',
            'set_featured_image' => 'Adicionar Imagem'
        );

        $settings_produtos = array(
            'labels'            => $labels_produtos,
            'description'       => '',
            'public'            => true,
            'menu_position'     => 30,
            'supports'          => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'has_archive'       => true,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'menu_icon'         => 'dashicons-products'
        );

        register_post_type( 'produto', $settings_produtos );
    }

    add_action( 'init', 'register_representante_post_type' );

    function register_representante_post_type() {
        $labels_representante = array(
            'name'               => __( 'Representantes' ),
            'singular_name'      => __( 'Representante' ),
            'add_new'            => __( 'Adicionar Novo' ),
            'add_new_item'       => __( 'Adicionar Novo' ),
            'edit_item'          => __( 'Editar' ),
            'new_item'           => __( 'Novo Representante' ),
            'all_items'          => __( 'Listar Todos' ),
            'view_item'          => __( 'Ver Representante Anterior' ),
            'search_items'       => __( 'Buscar' ),
            'featured_image'     => 'Imagem Destacada',
            'set_featured_image' => 'Adicionar Imagem'
        );

        $settings_representante = array(
            'labels'            => $labels_representante,
            'description'       => '',
            'public'            => true,
            'menu_position'     => 30,
            'supports'          => array( 'title', 'custom-fields' ),
            'has_archive'       => true,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'menu_icon'         => 'dashicons-admin-users'
        );

        register_post_type( 'representante', $settings_representante );
    }

    // CREATE TAXONOMY CATEGORY PRODUTO
    // //--------------------------------------

    function register_category_taxonomy() {
        register_taxonomy(
            'categoria_produto',
            'produto',
            array(
                'label' => __( 'Categorias' ),
                'rewrite' => array( 'slug' => 'categoria_produto' )
            )
        );
    }
    add_action( 'init', 'register_category_taxonomy', 10 );

    function register_estado_taxonomy() {
        register_taxonomy(
            'estado',
            'representante',
            array(
                'label' => __( 'Estado' ),
                'rewrite' => array( 'slug' => 'estado' ),
                'hierarchical' => true,
            )
        );
    }
    
    add_action( 'init', 'register_estado_taxonomy', 10 );