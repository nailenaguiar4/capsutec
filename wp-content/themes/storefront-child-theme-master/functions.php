<?php

	// CREATE POSTS AND MY ELEMENT
	//--------------------------------------
	include_once('functions-create-post.php');
	include_once('functions-my-elements.php');
	
	// bootstrap 5 wp_nav_menu walker
	//--------------------------------------
	include_once('class-wp-bootstrap-navwalker.php');


	// SETUP INITIAL
	//--------------------------------------
	if ( ! function_exists( 'theme_setup' ) ) :
		function theme_setup() {
			// LOGO
			add_theme_support(
				'custom-logo',
				array(
					'flex-width'  => false,
					'flex-height' => false,
				)
			);


			// BACKGROUND IMAGE
			$defaults = array(
				'default-color'          => 'ffffff',
				'default-repeat'         => 'no-repeat',
				'default-position-x'     => 'center',
				'default-attachment'     => 'fixed',
			);
			add_theme_support( 'custom-background', $defaults );


			// REGISTER MENUS
            function menus_init() {
				register_nav_menu('main-menu', 'Main menu');
            }

			add_action('init', 'menus_init');


			// ADD SUPPORT FOR RESPONSIVE EMBEDDED CONTENT
			add_theme_support( 'responsive-embeds' );


			// ADD THUMBNAIL TO POST THEME
			add_theme_support( 'post-thumbnails' );
			add_image_size( 'post-thumb', 320, 190, true );
			add_image_size( 'blog-thumb', 370, 250, true );
		}
	endif;

	add_action( 'after_setup_theme', 'theme_setup' );


	// SCRIPTS AND STYLES
	//--------------------------------------
	function theme_scripts() {


		// THEME
		wp_enqueue_style('css-main', get_theme_file_uri()  . '/assets/css/style.min.css', wp_get_theme()->get( 'Version'));

		//SWIPER
		if (is_home()) {
			wp_enqueue_style('swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.css' );
		}
		

		//SLIDER HOME

		if (is_home()) {
			wp_enqueue_script('slider-home', get_theme_file_uri() . '/assets/js/slider-home.min.js', wp_get_theme()->get( 'Version'));
		}
		

		//lightbox

		if(is_single()) {
			wp_enqueue_script('js-lightbox', "https://cdn.jsdelivr.net/npm/bs5-lightbox@1.7.11/dist/index.bundle.min.js", 'js-bootstrap', ' ', true);
		}
		
		// FORMS
		if(is_page('fale-conosco') ){
			wp_enqueue_script('js-mask', get_theme_file_uri()  . '/assets/vendor/jquery/jquery.mask.min.js', '1.0', true );
			wp_enqueue_script('js-forms', get_theme_file_uri()  . '/assets/js/forms.min.js', wp_get_theme()->get( 'Version'));
		}

		//CAROUSEL

		wp_enqueue_script('js-carousel', get_theme_file_uri()  . '/assets/js/carousel-offers.min.js', wp_get_theme()->get( 'Version'));
	
	}

		add_action( 'wp_enqueue_scripts', 'theme_scripts' );


	// REMOVE POST TYPE (POST) TO ADMIN
	//--------------------------------------
	function wp_remove_plugin_admin_menu() {
		remove_menu_page('edit.php');
		remove_menu_page('edit-comments.php');
	}

	add_action( 'admin_menu', 'wp_remove_plugin_admin_menu', 9999 );


	// Opengraph
	function add_opengraph_doctype( $output ) {
		return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
	}

	add_filter('language_attributes', 'add_opengraph_doctype');


	//SCRIPTS

	function ti_custom_javascript() { ?>
	
	<?php

	}

	add_action('wp_head', 'ti_custom_javascript');

	// Nav Walker Menu

	add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
	/**
	 * Use namespaced data attribute for Bootstrap's dropdown toggles.
	 *
	 * @param array    $atts HTML attributes applied to the item's `<a>` element.
	 * @param WP_Post  $item The current menu item.
	 * @param stdClass $args An object of wp_nav_menu() arguments.
	 * @return arrayW
	 */

	function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
		if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
			if ( array_key_exists( 'data-toggle', $atts ) ) {
				unset( $atts['data-toggle'] );
				$atts['data-bs-toggle'] = 'dropdown';
			}
		}
		return $atts;
	}

	function slug_provide_walker_instance( $args ) {
		if ( isset( $args['walker'] ) && is_string( $args['walker'] ) && class_exists( $args['walker'] ) ) {
			$args['walker'] = new $args['walker'];
		}
		return $args;
	}

	add_filter( 'wp_nav_menu_args', 'slug_provide_walker_instance', 1001 );


	// DISPLAY CATEGORIES
	//------------------

	function woocommerce_product_category( $args = array() ) {
		$woocommerce_category_id = get_queried_object_id();
	  $args = array(
		  'parent' => $woocommerce_category_id
	  );

	  $terms = get_terms( 'product_cat', $args );

	  if ( $terms ) {
		  foreach ( $terms as $term ) {
			echo '<a href=" ' . esc_url( get_term_link( $term ) ) . ' " class="category-link">';
			echo '<div class="category-card">';
			echo '<div class="category-image">';
			woocommerce_subcategory_thumbnail( $term );
			echo '</div>';
			echo '<div class="category-name">';
			echo '<span>' . __($term->name) . '</span>';
			echo '</div>';
			echo '</div>';
			echo '</a>';
		  }
	  }
	}

	add_action( 'woocommerce_before_shop_loop', 'woocommerce_product_category', 100 );


	