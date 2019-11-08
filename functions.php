<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}



/**
 * Remove product data tabs
 */
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );      	// Remove the description tab
    unset( $tabs['reviews'] ); 			// Remove the reviews tab
    unset( $tabs['additional_information'] );  	// Remove the additional information tab

    return $tabs;
}

/**
 * Adding the product description to the single product template
 */
add_action( 'woocommerce_single_product_summary', 'the_content', 41 );

function product_expertise() {
	?>
	<div class="expertiseAward">
	<i class="fas fa-award fa-fw"></i>
	<span>
	<?php esc_html_e('Reviewed by Jocelyne Rouleau, graduate gemologist', 'bab'); ?>
	</span></div>
	<?php

}

add_action( 'woocommerce_single_product_summary', 'product_expertise', 42 );


function express_shipping() {
	?>
	<div class="expressShipping">
	<a href="<?php echo get_site_url(); ?>/contact/">
              <i class="fas fa-shipping-fast fa-3x fa-fw"></i>
              <div>
			  
			  <h3> <?php esc_html_e('Need an express delivery?', 'bab'); ?><br/>  <?php esc_html_e('It is possible!', 'bab'); ?></h3>
				<span><?php esc_html_e('Contact Us', 'bab'); ?></span>  
			  </div>
			
			</a>
			</div>
			<?php
}

add_action( 'woocommerce_single_product_summary', 'express_shipping', 43 );

/**
 * Remove related products output
 */
// remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
// add_action( 'woocommerce_after_single_product', 'woocommerce_output_related_products', 60 );



function register_top_menu() {
	register_nav_menu('top_menu',__( 'Top Menu' ));
  }
  add_action( 'init', 'register_top_menu' );

  /**
   * Attributes
   */

  function cw_woo_attribute(){
    global $product;
	$attributes = $product->get_attributes();
	$attMetal = esc_html_e('Metal', 'bab');
	$attTime = esc_html_e('Time Period', 'bab');
	$attSize = esc_html_e('Size', 'bab');
    if ( ! $attributes ) {
		echo "<div class='productAttributes'><div class='metaLabel'><span>$attSize</span><div class='productAttribute'>-</div><br></div><div class='metaLabel'><span>$attMetal</span><div class='productAttribute'>-</div><br></div><div class='metaLabel'><span>$attTime</span><div class='productAttribute'>-</div><br></div><div class='metaLabel'><span>SKU</span><div class='productAttribute'>" . $product->get_sku()  . "</div></div></div>";
		return;
    }

    $display_result = '';

    foreach ( $attributes as $attribute ) {


        if ( $attribute->get_variation() ) {
            continue;
        }
        $name = $attribute->get_name();
        if ( $attribute->is_taxonomy() ) {

            $terms = wp_get_post_terms( $product->get_id(), $name, 'all' );

            $cwtax = $terms[0]->taxonomy;

            $cw_object_taxonomy = get_taxonomy($cwtax);

			

            if ( isset ($cw_object_taxonomy->labels->singular_name) ) {
                $tax_label = $cw_object_taxonomy->labels->singular_name;
            } elseif ( isset( $cw_object_taxonomy->label ) ) {
                $tax_label = $cw_object_taxonomy->label;
                if ( 0 === strpos( $tax_label, 'Product ' ) ) {
                    $tax_label = substr( $tax_label, 8 );
                }
            }
            $display_result .=  "<div class='metaLabel'><span>" . $tax_label . '</span>';
            $tax_terms = array();
            foreach ( $terms as $term ) {
                $single_term = "<div class='productAttribute'>" . esc_html( $term->name ) . "</div>";
                array_push( $tax_terms, $single_term );
            }
			$display_result .= implode(', ', $tax_terms) .  '<br />';
			$display_result .= "</div>";

        } else {
            $display_result .= $name . ': ';
            $display_result .= esc_html( implode( ', ', $attribute->get_options() ) ) . '<br />';
        }
	}
	$display_result .= "<div class='metaLabel'><span>SKU</span><div class='productAttribute'>". $product->get_sku()  . "</div>"; 
    echo "<div class='productAttributes'>" . $display_result . "</div></div>"; // extra div is necessary to avoid break in template
}

add_action('woocommerce_single_product_summary', 'cw_woo_attribute', 40);


/**
 * Cacher le prix si + de 5000$
 */

add_filter( 'woocommerce_get_price', 'price_hiding' );

function price_hiding($price) {
	
	if ($price > 5000) {
		return '';
	}
	else {
		return $price;
	}
}

function price_spacing( $price ) {
	
    if (!$price) {
		$price .= esc_html_e( 'Price upon request', 'bab' );
	}
	return $price;
  }


  add_filter( 'woocommerce_get_price_html', 'price_spacing' );


  add_filter( 'woocommerce_product_add_to_cart_text', function( $text ) {
    if ( 'Read more' == $text ) {
        $text = __( 'More Info', 'woocommerce' );
	}
	if ( 'Lire la suite' == $text ) {
        $text = __( 'Plus de détails', 'woocommerce' );
    }

    return $text;
} );

function cart_button_group_before() {
	echo "<div class='cart_button_group'>";
}
function cart_button_group_after() {
	echo "</div>";
}


add_action('woocommerce_single_product_summary', 'cart_button_group_before', 29);
add_action('woocommerce_single_product_summary', 'cart_button_group_after', 39);