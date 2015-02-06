<?php
	
if ( ! isset( $content_width ) )
	$content_width = 700;
	
function conway_hall_init()  {
	remove_action( 'wp_head', 'wp_generator' );
	show_admin_bar( false );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	//add_theme_support( 'jetpack-responsive-videos' );
	set_post_thumbnail_size( 700, 394, true );
	add_image_size( 'carousel', 880, 395, true );
	add_image_size( 'full', 1000, 563, true );
	add_image_size( 'article', 350, 197, false );
	add_image_size( 'speaker', 290, 290, true );
	$defaults = array(
		'default-image'		  => get_template_directory_uri() . '/img/header/header.png',
		'random-default'		 => true,
		'width'				  => 1920,
		'height'				 => 200,
		'flex-height'			=> false,
		'flex-width'			 => false,
		'default-text-color'	 => '',
		'header-text'			=> false,
		'uploads'				=> true,
		'wp-head-callback'	   => '',
		'admin-head-callback'	=> '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-header', $defaults );
	add_editor_style( 'editor-style.css' );	
	$markup = array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', );
	add_theme_support( 'html5', $markup );	
	
}
add_action( 'after_setup_theme', 'conway_hall_init' );

function bbb_scripts() {
	//wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/libs/jquery-1.10.1.min.js', false, '1.10.1', true );
	wp_register_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', false, '2.8.1', false );
	wp_register_script( 'gumby', get_template_directory_uri() . '/js/libs/gumby.js', false, '2.6', true );
	wp_register_script( 'gumby', get_template_directory_uri() . '/js/libs/ui/gumby.retina.js', false, '2.6', true );
	wp_register_script( 'gumbyfixed', get_template_directory_uri() . '/js/libs/ui/gumby.fixed.js', array( 'gumby' ), '2.6', true );
	wp_register_script( 'gumbyskip', get_template_directory_uri() . '/js/libs/ui/gumby.skiplink.js', array( 'gumby' ), '2.6', true );
	wp_register_script( 'gumbytoggle', get_template_directory_uri() . '/js/libs/ui/gumby.toggleswitch.js', array( 'gumby' ), '2.6', true );
	wp_register_script( 'gumbycheck', get_template_directory_uri() . '/js/libs/ui/gumby.checkbox.js', array( 'gumby' ), '2.6', true );
	wp_register_script( 'gumbyradio', get_template_directory_uri() . '/js/libs/ui/gumby.radiobtn.js', array( 'gumby' ), '2.6', true );
	wp_register_script( 'gumbytabs', get_template_directory_uri() . '/js/libs/ui/gumby.tabs.js', array( 'gumby' ), '2.6', true );
	wp_register_script( 'gumbynav', get_template_directory_uri() . '/js/libs/ui/gumby.navbar.js', array( 'gumby' ), '2.6', true );
	wp_register_script( 'gumbyvalidation', get_template_directory_uri() . '/js/libs/ui/jquery.validation.js', array( 'gumby' ), '2.6', true );
	wp_register_script( 'gumbyinit', get_template_directory_uri() . '/js/libs/gumby.init.js', array( 'gumby' ), '2.6', true );
	wp_register_script( 'owl', get_template_directory_uri() . '/owl-carousel/owl.carousel.min.js', false, '1.4.1', true );
	wp_register_script( 'capslide', get_template_directory_uri() . '/js/capSlide.js', false, '1.4.1', true );
	wp_register_script( 'cookie', get_template_directory_uri() . '/js/libs/cookie.js', false, '1.4.1', true );
	wp_register_script( 'j-ui', get_template_directory_uri() . '/js/jquery-ui.min.js', false, '1.11.2', true );
	wp_register_script( 'main', get_template_directory_uri() . '/js/main.js', false, '2.6', true );	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'j-ui' );
	wp_enqueue_script( 'gumby' );
	wp_enqueue_script( 'gumbyfixed' );
	wp_enqueue_script( 'gumbyskip' );
	wp_enqueue_script( 'gumbytoggle' );
	wp_enqueue_script( 'gumbycheck' );
	wp_enqueue_script( 'gumbyradio' );
	wp_enqueue_script( 'gumbytabs' );
	wp_enqueue_script( 'gumbynav' );
	wp_enqueue_script( 'gumbyvalidation' );
	wp_enqueue_script( 'gumbyinit' );
	wp_enqueue_script( 'owl' );
	wp_enqueue_script( 'capslide' );
	wp_enqueue_script( 'cookie' );
	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'gumby' );

	wp_enqueue_script( 'main' );
}
add_action( 'wp_enqueue_scripts', 'bbb_scripts' );

function bbb_styles() {
	wp_register_style( 'open', '//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700', false, '2014' );
	wp_register_style( 'bitter', '//fonts.googleapis.com/css?family=Bitter:400,700', false, '2014' );
	wp_register_style( 'base', get_template_directory_uri() . '/css/base.css', false, '2.6' );
	wp_register_style( 'normalise', get_template_directory_uri() . '/css/normalize.css', false, '3.0.1' );
	wp_register_style( 'owl', get_template_directory_uri() . '/owl-carousel/owl.carousel.css', false, '3.0.1' );
	wp_register_style( 'theme', get_template_directory_uri() . '/owl-carousel/owl.theme.css', false, '3.0.1' );
	wp_register_style( 'j-uicss', get_template_directory_uri() . '/css/jquery-ui.min.css', false, '1.11.2' );
	wp_register_style( 'j-uistructure', get_template_directory_uri() . '/css/jquery-ui.structure.min.css', false, '1.11.2' );
	wp_register_style( 'blacktie', get_template_directory_uri() . '/css/jquery-ui.theme.min.css', false, '1.11.2' );
	wp_enqueue_style( 'normalise' );
	wp_enqueue_style( 'owl' );
	wp_enqueue_style( 'j-uicss' );
	wp_enqueue_style( 'j-uistructure' );
	wp_enqueue_style( 'blacktie' );
	wp_enqueue_style( 'theme' );
	wp_enqueue_style( 'open' );
	wp_enqueue_style( 'bitter' );
	wp_enqueue_style( 'base' );
}
add_action( 'wp_enqueue_scripts', 'bbb_styles' );

function bbb_menu() {
	$locations = array(
		'bbbmenu' => __( 'Main Menu', 'bbb' ),
		'bbbmobilemenu' => __( 'Mobile Main Menu', 'bbb' ),
		'footermenu' => __( 'Footer Menu', 'bbb' ),
	);
	register_nav_menus( $locations );
}
add_action( 'init', 'bbb_menu' );

// Register Carousel Post Type
function carousel() {
	$labels = array(
		'name'				=> _x( 'Carousels', 'Post Type General Name', 'bbb' ),
		'singular_name'	   => _x( 'Carousel', 'Post Type Singular Name', 'bbb' ),
		'menu_name'		   => __( 'Carousels', 'bbb' ),
		'parent_item_colon'   => __( 'Parent Carousel:', 'bbb' ),
		'all_items'		   => __( 'All Carousels', 'bbb' ),
		'view_item'		   => __( 'View Carousel', 'bbb' ),
		'add_new_item'		=> __( 'Add New Carousel', 'bbb' ),
		'add_new'			 => __( 'Add New', 'bbb' ),
		'edit_item'		   => __( 'Edit Carousel', 'bbb' ),
		'update_item'		 => __( 'Update Carousel', 'bbb' ),
		'search_items'		=> __( 'Search Carousels', 'bbb' ),
		'not_found'		   => __( 'Not found', 'bbb' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'bbb' ),
	);
	$args = array(
		'label'			   => __( 'carousel', 'bbb' ),
		'description'		 => __( 'Homepage Carousel', 'bbb' ),
		'labels'			  => $labels,
		'supports'			=> array( 'title', 'excerpt', 'thumbnail', 'page-attributes' ),
		'taxonomies'		  => array( 'category', 'post_tag' ),
		'hierarchical'		=> false,
		'public'			  => true,
		'show_ui'			 => true,
		'show_in_menu'		=> true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'	   => 5,
		'can_export'		  => true,
		'has_archive'		 => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'	 => 'page',
	);
	register_post_type( 'carousel', $args );
}
// Hook into the 'init' action
add_action( 'init', 'carousel', 0 );

function carousel_meta( $meta_boxes ) {
	$prefix = '_cmb_';
	$meta_boxes[] = array(
		'id' => 'meta',
		'title' => 'Link URL',
		'pages' => array('carousel'),
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true,
		'fields' => array(
			array(
				'name' => __( 'Link URL', 'ch' ),
				'id'	 => $prefix . 'carousel',
				'type' => 'text',
			),
		),
	);
	return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'carousel_meta' );

add_action( 'init', 'be_initialize_cmb_meta_boxes', 9999 );
function be_initialize_cmb_meta_boxes() {
	if ( !class_exists( 'cmb_Meta_Box' ) ) {
		require_once( 'metabox/init.php' );
	}
}

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
	echo '<div id="main" class="twelve columns">';
}

function my_theme_wrapper_end() {
	echo '</div>';
}

function add_active_class_to_nav_menu($classes) {
	if (in_array('current-menu-item', $classes, true) || in_array('current_page_item', $classes, true)) {
		$classes = array_diff($classes, array('current-menu-item', 'current_page_item', 'active'));
		$classes[] = 'active';
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_active_class_to_nav_menu');

class Walker_Page_Custom extends Walker_Nav_menu{
	function start_lvl(&$output, $depth=0, $args=array()){
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<div class=\"dropdown\"><ul>\n";
	}
	function end_lvl(&$output , $depth=0, $args=array()){
		$indent = str_repeat("\t", $depth);
		$output .= "$indent</ul></div>\n";
	}
}

add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;
	ob_start();
	?>
	<a class="cart" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="View your shopping cart">
		<i class="icon-basket"></i><br />
		<?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?><br />
		<?php echo $woocommerce->cart->get_cart_total(); ?><br />
	</a>
	<?php
	$fragments['a.cart'] = ob_get_clean();
	return $fragments;
}

function remove_loop_button(){
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
}
add_action('init','remove_loop_button');

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
add_action( 'bbb_after_single_product_summary', 'woocommerce_upsell_display', 15 );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
add_filter( 'woocommerce_product_tabs' , 'woocommerce_related_products_tab' );
function woocommerce_related_products_tab( $tabs ) {
	$tabs['related_products'] = array(
		'title'	=> 'Related Products',
		'priority' => 25,
		'callback' => 'woocommerce_product_related_products_tab'
	);
	return $tabs;
}
// Related Products callback
function woocommerce_product_related_products_tab() {
do_action('growdev_after_single_product_summary');
	do_action('bbb_after_single_product_summary');
	echo do_shortcode('[related_products]');
}

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {
	unset( $tabs['description'] );
	return $tabs;
}
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

function custom_override_checkout_fields( $fields ) {
	$fields['order']['order_comments']['placeholder'] = 'Notes about your order.';
	 $fields['shipping']['shipping_address_1']['placeholder'] = 'Address';
	 $fields['shipping']['shipping_address_2']['placeholder'] = 'Address';
	 $fields['billing']['billing_address_1']['placeholder'] = 'Address';
	 $fields['billing']['billing_address_2']['placeholder'] = 'Address';
	 $fields['shipping']['shipping_state']['placeholder'] = 'County';
	 $fields['shipping']['shipping_postcode']['placeholder'] = 'Postcode';
	 $fields['billing']['billing_state']['placeholder'] = 'County';
	 $fields['billing']['billing_postcode']['placeholder'] = 'Postcode';
	 return $fields;
}

remove_action( 'woocommerce_order_details_after_order_table', 'woocommerce_order_again_button' );

add_filter('woocommerce_bookings_booking_cost_text', 'bbb_change_booking_cost');
function wooninja_change_book_now() {
	return 'Order total';
}

function my_text_strings( $translated_text, $text, $domain ) {
	switch ( $translated_text ) {
		case 'Persons' :
			$translated_text = __( 'Number of items', 'woocommerce-bookings' );
		break;
		case 'Booking cost' :
			$translated_text = __( 'Total item cost', 'woocommerce-bookings' );
		break;
		case 'Booking Date' :
			$translated_text = __( 'Delivery / Collection Date', 'woocommerce-bookings' );
		break;
		case 'Ship to a different address?' :
			$translated_text = __( 'Is the delivery address different to the billing address?', 'woocommerce-bookings' );
		break;
		case 'Proceed to Checkout' :
			$translated_text = __( 'Checkout', 'woocommerce-bookings' );
		break;
		case 'My Subscriptions' :
			$translated_text = __( 'My Bread Club', 'woocommerce-bookings' );
		break;
		case 'You have no active subscriptions. Find your first subscription in the ' :
			$translated_text = __( 'You have no active Bread Club orders. Find your first Bread Club subscription in the ', 'woocommerce-bookings' );
		break;
	}
	return $translated_text;
}
add_filter( 'gettext', 'my_text_strings', 20, 3 );

add_filter( 'woocommerce_get_price_html', 'wpa83367_price_html', 100, 2 );


function wpa83367_price_html( $price,$product ){
   // return $product->price;
    if ( $product->price > 0 ) {
      if ( $product->price && isset( $product->regular_price ) ) {
        $from = $product->regular_price;
        $to = $product->price;
        return ( ( is_numeric( $to ) ) ? woocommerce_price( $to ) : $to );
      } else {
        $to = $product->price;
        return ( ( is_numeric( $to ) ) ? woocommerce_price( $to ) : $to );
      }
   } else {
     return 'Free';
   }
}

add_filter( 'woocommerce_subscription_lengths', 'wooninja_custom_subscription_duration' );
function wooninja_custom_subscription_duration( $ranges ) {
	$ranges['week'][4] = '4 weeks';
	$ranges['month'][1] = '1 month';
	$ranges['month'][2] = '2 months';
	$ranges['month'][3] = '3 months';
	$ranges['month'][4] = '4 months';
	$ranges['month'][5] = '5 months';
	$ranges['month'][6] = '6 months';
	return $ranges;
}

function wcsdp_get_available_payment_gateways( $available_gateways ) {
	global $wp;

	if ( class_exists( 'WC_Subscriptions_Cart' ) ) {
		if ( WC_Subscriptions_Cart::cart_contains_subscription() || WC_Subscriptions_Cart::cart_contains_subscription_renewal() || ( is_checkout_pay_page() && WC_Subscriptions_Order::order_contains_subscription( $wp->query_vars['order-pay'] ) ) ) {
			if ( isset( $available_gateways['cod'] ) ) {
				unset( $available_gateways['cod'] );
			}
			if ( isset( $available_gateways['bacs'] ) ) {
				unset( $available_gateways['bacs'] );
			}
		}
	}
	return $available_gateways;
}
add_filter( 'woocommerce_available_payment_gateways', 'wcsdp_get_available_payment_gateways', 11 );


add_action( 'dashboard_glance_items', 'my_add_cpt_to_dashboard' );

function my_add_cpt_to_dashboard() {
	$showTaxonomies = 1;
	if ($showTaxonomies) {
		$taxonomies = get_taxonomies( array( '_builtin' => false ), 'objects' );
		foreach ( $taxonomies as $taxonomy ) {
			$num_terms	= wp_count_terms( $taxonomy->name );
			$num = number_format_i18n( $num_terms );
			$text = _n( $taxonomy->labels->singular_name, $taxonomy->labels->name, $num_terms );
			$associated_post_type = $taxonomy->object_type;
			if ( current_user_can( 'manage_categories' ) ) {
				$output = '<a href="edit-tags.php?taxonomy=' . $taxonomy->name . '&post_type=' . $associated_post_type[0] . '">' . $num . ' ' . $text .'</a>';
			}
			echo '<li class="taxonomy-count">' . $output . ' </li>';
		}
	}
	// Custom post types counts
	$post_types = get_post_types( array( '_builtin' => false ), 'objects' );
	foreach ( $post_types as $post_type ) {
		if($post_type->show_in_menu==false) {
			continue;
		}
		$num_posts = wp_count_posts( $post_type->name );
		$num = number_format_i18n( $num_posts->publish );
		$text = _n( $post_type->labels->singular_name, $post_type->labels->name, $num_posts->publish );
		if ( current_user_can( 'edit_posts' ) ) {
			$output = '<a href="edit.php?post_type=' . $post_type->name . '">' . $num . ' ' . $text . '</a>';
		}
		echo '<li class="page-count ' . $post_type->name . '-count">' . $output . '</td>';
	}
}


function add_menu_icons_styles(){
 
	echo '<style>
	#adminmenu #menu-posts-carousel div.wp-menu-image:before, #dashboard_right_now .carousel-count a:before {
		content: "\f233";
	}
	#adminmenu #menu-posts-people div.wp-menu-image:before, #dashboard_right_now .people-count a:before {
		content: "\f307";
	}
	#adminmenu #menu-posts-jobs div.wp-menu-image:before, #dashboard_right_now .jobs-count a:before {
		content: "\f484";
	}
	#dashboard_right_now .tribe_events-count a:before {
		content: "\f145";
	}
	#dashboard_right_now .feedback-count a:before {
		content: "\f175";
	}
	#dashboard_right_now .taxonomy-count a:before {
		content: "\f325";
	}
	#adminmenu #menu-posts-pdf div.wp-menu-image:before, #dashboard_right_now .pdf-count a:before {
		content: "\f497";
	}
	#adminmenu #menu-posts-product div.wp-menu-image:before, #dashboard_right_now .product-count a:before {
		content: "\f174";
	}
	#adminmenu #menu-posts-memorial_lecture div.wp-menu-image:before, #dashboard_right_now .memorial_lecture-count a:before {
		content: "\f473";
	}
	#adminmenu #menu-posts-amazon_product div.wp-menu-image:before, #dashboard_right_now .amazon_product-count a:before {
		content: "\f174";
	}
	#adminmenu .menu-icon-speaker div.wp-menu-image:before {
		content: "\f488";
	}
	#adminmenu .menu-icon-issue div.wp-menu-image:before {
		content: "\f331";
	}
	#adminmenu .menu-icon-contacts div.wp-menu-image:before {
		content: "\f336";
	}
	#adminmenu .menu-icon-ethicalrecord div.wp-menu-image:before {
		content: "\f464";
	}
	#dashboard_right_now .speaker-count a:before {
	    content: "\f488";
	}
	#dashboard_right_now .issue-count a:before {
	    content: "\f331";
	}
	#dashboard_right_now .taxonomy-count a:before {
	    content: "\f325";
	}
	#dashboard_right_now .feedback-count a:before {
	    content: "\f466";
	}
	#dashboard_right_now .ethicalrecord-count a:before {
	    content: "\f464";
	}
	</style>';

}
add_action( 'admin_head', 'add_menu_icons_styles' );