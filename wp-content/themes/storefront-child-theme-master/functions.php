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
		wp_enqueue_style('css-main', get_template_directory_uri() . '-child-theme-master/assets/css/style.min.css', wp_get_theme()->get( 'Version'));

		//SWIPER
		if (is_home()) {
			wp_enqueue_style('swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.css' );
		}
		

		//SLIDER HOME

		if (is_home()) {
			wp_enqueue_script('slider-home', get_template_directory_uri() . '/assets/js/slider-home.min.js', wp_get_theme()->get( 'Version'));
		}
		

		//lightbox

		if(is_single()) {
			wp_enqueue_script('js-lightbox', "https://cdn.jsdelivr.net/npm/bs5-lightbox@1.7.11/dist/index.bundle.min.js", 'js-bootstrap', ' ', true);
		}
		
		// FORMS
		if(is_page('fale-conosco') ){
			wp_enqueue_script('js-mask', get_template_directory_uri() . '/assets/vendor/jquery/jquery.mask.min.js', '1.0', true );
			wp_enqueue_script('js-forms', get_template_directory_uri() . '/assets/js/forms.min.js', wp_get_theme()->get( 'Version'));
		}
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

	// AJAX Estado

	// add_action('wp_ajax_nopriv_filter_estados', 'load_estados');
	// add_action('wp_ajax_filter_estados', 'load_estados');

	// function load_estados() {
	// 	$html = '';
	// 	$estado = $_POST['estado'];
	// 	$terms = get_term_children($estado, 'estado');

	// 	foreach ($terms as $term):
	// 		$ciuda = get_term_by('term_taxonomy_id', $term, 'estado');
	// 		$html .= "<option value='" . $ciuda->term_id . "'>" . $ciuda->name . "</option>";
	// 	endforeach;

	// 	echo $html;

	// 	exit;
	// }

	// AJAX REPRESENTANTES

	// add_action('wp_ajax_nopriv_filter_representantes', 'load_representantes');
	// add_action('wp_ajax_filter_representantes', 'load_representantes');

	// function load_representantes() {
	// 	$html = '';
	// 	$id = $_POST['id'];
	// 	$int_id = (int)$id;
	// 	$representantes = get_posts(array(
	// 		'post_type' => 'representante',
	// 		'numberposts' => -1,
	// 		'tax_query' => array(
	// 		array(
	// 			'taxonomy' => 'estado',
	// 			'field' => 'id',
	// 			'terms' => $int_id // Where term_id of Term 1 is "1".
	// 		)
	// 		)
	// 	));
	// 	$name = get_term( $int_id )->name;

	// 	echo "<h2 class='h2-bold bold text-gray'>Lojas em " . $name . "</h2>"; 

	// 	foreach($representantes as $representante):
	// 				$direccion = get_field('en', $representante->ID);
	// 				$telefono = get_field('telefone', $representante->ID);
	// 				$email = get_field('email', $representante->ID);
	// 				$html = "<div class='representates-item flex-column'>
	// 							<h4 class='text-sm bold text-gray'>" . $representante->post_title . "</h4>
	// 							<span class='text-sm text-gray'>". $direccion . "</span>
	// 							<span class='text-sm text-gray'>" . $telefono . "</span>
	// 							<span class='text-sm text-gray'>" . $email ."</span>
	// 						</div>;";
	// 		endforeach;

	// 	echo $html;

	// 	exit;
	// }

	// Nav Walker Menu

	add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
	/**
	 * Use namespaced data attribute for Bootstrap's dropdown toggles.
	 *
	 * @param array    $atts HTML attributes applied to the item's `<a>` element.
	 * @param WP_Post  $item The current menu item.
	 * @param stdClass $args An object of wp_nav_menu() arguments.
	 * @return array
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


	