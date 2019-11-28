<?php

/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
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

foreach ($understrap_includes as $file) {
	$filepath = locate_template('inc' . $file);
	if (!$filepath) {
		trigger_error(sprintf('Error locating /inc%s for inclusion', $file), E_USER_ERROR);
	}
	require_once $filepath;
}



/**
 * Remove product data tabs
 */
add_filter('woocommerce_product_tabs', 'woo_remove_product_tabs', 98);

function woo_remove_product_tabs($tabs)
{

	unset($tabs['description']);      	// Remove the description tab
	unset($tabs['reviews']); 			// Remove the reviews tab
	unset($tabs['additional_information']);  	// Remove the additional information tab

	return $tabs;
}

/**
 * Adding the product description to the single product template
 */
add_action('woocommerce_single_product_summary', 'the_content', 41);

function product_expertise()
{
	?>
	<div class="expertiseAward">
		<i class="fas fa-award fa-fw"></i>
		<span>
			<?php esc_html_e('Reviewed by Jocelyne Rouleau, graduate gemologist', 'bab'); ?>
		</span></div>
<?php

}

add_action('woocommerce_single_product_summary', 'product_expertise', 42);


function express_shipping()
{
	?>
	<div class="expressShipping">
		<a href="<?php echo get_site_url(); ?>/contact/">
			<i class="fas fa-shipping-fast fa-3x fa-fw"></i>
			<div>

				<h3> <?php esc_html_e('Need an express delivery?', 'bab'); ?><br /> <?php esc_html_e('It is possible!', 'bab'); ?></h3>
				<span><?php esc_html_e('Contact Us', 'bab'); ?></span>
			</div>

		</a>
	</div>
<?php
}

add_action('woocommerce_single_product_summary', 'express_shipping', 43);

/**
 * Remove related products output
 */
// remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
// add_action( 'woocommerce_after_single_product', 'woocommerce_output_related_products', 60 );



function register_top_menu()
{
	register_nav_menu('top_menu', __('Top Menu'));
}
add_action('init', 'register_top_menu');

/**
 * Attributes
 */

function cw_woo_attribute()
{
	global $product;
	$attributes = $product->get_attributes();


	if (!$attributes) {

		if (ICL_LANGUAGE_CODE == 'en') :
			echo "<div class='productAttributes'><div class='metaLabel'><span>Size</span><div class='productAttribute'>-</div><br></div><div class='metaLabel'><span>Metal</span><div class='productAttribute'>-</div><br></div><div class='metaLabel'><span>Time Period</span><div class='productAttribute'>-</div><br></div><div class='metaLabel'><span>SKU</span><div class='productAttribute'>" . $product->get_sku()  . "</div></div></div>";
		elseif (ICL_LANGUAGE_CODE == 'fr') :
			echo "<div class='productAttributes'><div class='metaLabel'><span>Taille</span><div class='productAttribute'>-</div><br></div><div class='metaLabel'><span>Type de métal</span><div class='productAttribute'>-</div><br></div><div class='metaLabel'><span>Période</span><div class='productAttribute'>-</div><br></div><div class='metaLabel'><span>SKU</span><div class='productAttribute'>" . $product->get_sku()  . "</div></div></div>";
		endif;
		return;
	}

	$display_result = '';

	foreach ($attributes as $attribute) {


		if ($attribute->get_variation()) {
			continue;
		}
		$name = $attribute->get_name();
		if ($attribute->is_taxonomy()) {

			$terms = wp_get_post_terms($product->get_id(), $name, 'all');

			$cwtax = $terms[0]->taxonomy;

			$cw_object_taxonomy = get_taxonomy($cwtax);



			if (isset($cw_object_taxonomy->labels->singular_name)) {
				$tax_label = $cw_object_taxonomy->labels->singular_name;
			} elseif (isset($cw_object_taxonomy->label)) {
				$tax_label = $cw_object_taxonomy->label;
				if (0 === strpos($tax_label, 'Product ')) {
					$tax_label = substr($tax_label, 8);
				}
			}
			$display_result .=  "<div class='metaLabel'><span>" . $tax_label . '</span>';
			$tax_terms = array();
			foreach ($terms as $term) {
				$single_term = "<div class='productAttribute'>" . esc_html($term->name) . "</div>";
				array_push($tax_terms, $single_term);
			}
			$display_result .= implode(', ', $tax_terms) .  '<br />';
			$display_result .= "</div>";
		} else {
			$display_result .= $name . ': ';
			$display_result .= esc_html(implode(', ', $attribute->get_options())) . '<br />';
		}
	}
	$display_result .= "<div class='metaLabel'><span>SKU</span><div class='productAttribute'>" . $product->get_sku()  . "</div>";
	echo "<div class='productAttributes'>" . $display_result . "</div></div>"; // extra div is necessary to avoid break in template
}

add_action('woocommerce_single_product_summary', 'cw_woo_attribute', 40);


/**
 * Cacher le prix si + de 5000$
 */

add_filter('woocommerce_get_price', 'price_hiding');

function price_hiding($price)
{

	if ($price > 5000) {
		return '';
	} else {
		return $price;
	}
}

function price_spacing($price)
{

	if (!$price) {
		$price .= esc_html_e('Price upon request', 'bab');
	}
	return $price;
}


add_filter('woocommerce_get_price_html', 'price_spacing');


add_filter('woocommerce_product_add_to_cart_text', function ($text) {
	if ('Read more' == $text) {
		$text = __('More Info', 'woocommerce');
	}
	if ('Lire la suite' == $text) {
		$text = __('Plus de détails', 'woocommerce');
	}

	return $text;
});

function cart_button_group_before()
{
	echo "<div class='cart_button_group'>";
}
function cart_button_group_after()
{
	echo "</div>";
}


add_action('woocommerce_single_product_summary', 'cart_button_group_before', 29);
add_action('woocommerce_single_product_summary', 'cart_button_group_after', 39);


/**
 *  Calling Categories according to Language and name
 */

function collectionCatFr($catName, $catSlug, $imgSlug)
{
	$imgSrc = get_template_directory_uri() . "/images/collections/" . $imgSlug;
	$catUrl = get_site_url() . "/categorie-produit/";
	$catUrl .= $catSlug;
	$collectionCat = "<a href=$catUrl title='$catName'><img src=$imgSrc alt='$catName' title'=$catName' class='img-fluid'><h2>$catName</h2></a>";
	echo $collectionCat;
}

function collectionCatEn($catName, $catSlug, $imgSlug)
{
	$imgSrc = get_template_directory_uri() . "/images/collections/" . $imgSlug;
	$catUrl = get_site_url() . "/en/product-category/" . $catSlug;

	$collectionCat = "<a href=$catUrl title='$catName'><img src=$imgSrc alt='$catName' title'=$catName' class='img-fluid'><h2>$catName</h2></a>";
	echo $collectionCat;
}

//**
// Christmas Products (Kits)
// */
function kit($number, $name)
{
	global $product;
	// Déclarations des variables de kit

	//**Les Kits */

	$kitName = esc_html_e($name, 'christmas');
	$kitItemsId = ($number - 1);
	$kitImage = 'https://res.cloudinary.com/prospection/image/upload/v1574865030/boiteabijoux/kit' . $number . '.png';

	$kithtml = '<div class="christmas__row revealed">
	<div class="date">
		<div class="date__wrapper">
			<span class="date__text">1er décembre</span>
		</div>
	</div>
	<div class="balls">';
	$kitUrl = '';

	$kitItems = ['B6144','B6693','B3076'];
		
	

	// Le Kit
	$kithtml .= '<div class="ball--first ball ball--big ball--empty">
    <a href="' . $kitUrl . '"><img src="' . $kitImage . '" alt="' . $kitName . '"></a>
    <a class="kit__name kit--big" href="' . $kitUrl . '">' . $kitName . '</a><span class="ball__shadow"></span>
</div>';
	// Les items appartenant au kit
	foreach ($kitItems[$kitItemsId] as $item) {
		// Déclarations des variables en fonction de la langue
		//  1 - itemName FR, 2 - itemName EN, 3 - itemImage, 4 - itemURl FR, 5 - itemUrl EN
		$itemId = wc_get_product_id_by_sku($item);
		$itemImage =  get_the_post_thumbnail_url($itemId);
		$itemUrl = get_permalink($itemId);
		$itemName = get_the_title($itemId);

		$kithtml .= '<div class="ball ball--small ball--empty ball--one">
    <a href="' . $itemUrl . '"><img src="' . $itemImage . '" alt="' . $itemName . '"></a>
    <a class="kit__name kit--one" href="' . $itemUrl . '">' . $itemName . '</a><span class="ball__shadow"></span>
</div>';
	}
	// Affichage de l'ensemble
	$kithtml .= '</div>
	</div>';
	echo $kithtml;
};




//** Liste des Kits */

function kitList()
{


	$kitListHtml = '';
	$kitList = [
		'3 bagues couleurs',
		'Colliers argent',	'B.O.',	'3 bracelets or',	'Fantaisie',	'Colliers perles',	'Bagues argent',
		'Bagues alliance',	'Pour homme',	'Collier/pendentif',	'Fantaisie',	'Camées',	'3 bracelets argent',	'3 bagues bleues',
		'Ensemble perles',	'Bijoux antiques',	'Fantaisie',	'3 colliers',	'Bagues diamants',	'Avis aux Pères noël'
	];

	$month = '';
	if (ICL_LANGUAGE_CODE == 'en') :
		$month = 'december';
	elseif (ICL_LANGUAGE_CODE == 'fr') :
		$month = 'décembre';
	endif;
	$slice = 1;
	$sliceNow = sizeof($kitList) - $slice;
	$kitListFuture = array_slice($kitList, $slice);
	$kitListNow = array_slice($kitList, $sliceNow);

	include 'page-modules/christmas-products';
	foreach ($kitListNow as $kit) {
		$kitListHtml .= kit(1, '3 bagues couleurs');
	}

	foreach ($kitListFuture as $kit) {
		$kitListHtml .= '<div class="ball ball--small ball--full">
		<div class="ball--full__date">
			<span class="ball--full__date--day">' . (array_search($kit, $kitList) + 1) . '</span>
			<span class="ball--full__date--month">' . $month . '</span>
			<span class="ball__shadow"></span>
		</div>
		<a class="kit__name" href="">' . $kit . '</a>
	</div>';
	};
	echo $kitListHtml;
}
