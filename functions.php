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

	// Déclarations des variables de kit

	//**Les Kits */

	$kitName = $name;

	if ($number < 10) {
		$imageNumber = '0' . $number;
	} else {
		$imageNumber = $number;
	}

	$kitImage = get_template_directory_uri() . '/images/kits/' . $imageNumber . '.png';

	$kithtml = '<div class="christmas__row revealed">
	<div class="date">
		<div class="date__wrapper">
			<span class="date__text">' . $number . ' décembre' . '</span>
		</div>
	</div>
	<div class="balls__revealed">';

	// Items

	$kitItems = [
		['testing value'],
		['B6144', 'B6693', 'B3076'],
		[
			'B6145',
			'B6764',
			'B6889'
		],
		[
			'B4176',
			'B6655',
			'B6856'
		],
		[
			'B6116',
			'B4624',
			'B6838'
		],
		[
			'B5780',
			'B6020',
			'B6487'
		],
		[
			'B6110',
			'B6657',
			'B6772'
		],
		[
			'B6413',
			'B6078',
			'B6079'
		],
		[
			'B6432',
			'B6571',
			'B3197'
		],
		[
			'B6641',
			'B6706',
			'B6766'
		],
		[
			'B5202',
			'B6334',
			'B6565'
		],
		[
			'B6473',
			'B5705',
			'B4017'
		],
		[
			'B6159',
			'B3615',
			'B6625'
		],
		[
			'B6216',
			'B6276',
			'B6598'
		],
		[
			'B6055',
			'B6553',
			'B6261'
		],
		[
			'B3100',
			'B6608',
			'B6609'
		],
		[
			'B6530',
			'B3616',
			'B6771'
		],
		[
			'B4715',
			'B6019',
			'B6492'
		],
		[
			'B5816',
			'B6631',
			'B6078'
		],
		[
			'B6146',
			'B6831',
			'B5834'
		],
		[
			'C3127',
			'C3132',
			'B6437'
		]
	];

	// Le Kit
	$kithtml .= '<div class="ball--first ball ball--big ball--empty">
    <a><img src="' . $kitImage . '" alt="' . $kitName . '"></a>
    <a class="kit__name kit--big">' . $kitName . '</a><span class="ball__shadow"></span>
</div>';
	// Les items appartenant au kit
	foreach ($kitItems[$number] as $item) {
		// Déclarations des variables du prduit
		if (wc_get_product_id_by_sku($item) != null ){ 
			$itemId = wc_get_product_id_by_sku($item);
		} else {
			// Si le sku n'existe pas, affichage d'une boule pleine
			$kithtml .= '<div class="ball ball--small ball--full">
			<a>Ce produit n\'est pas disponible</a>
			<a class="kit__name kit--one" ></a>
			<span class="ball__shadow"></span>
		</div>';
		}
		
		$itemImage =  get_the_post_thumbnail_url($itemId);
		$itemUrl = get_permalink($itemId);
		$itemName = get_the_title($itemId);
		// Est-ce que le produit est en stock?
		$product = wc_get_product($itemId);
		if (!$product->managing_stock() && !$product->is_in_stock()) {
			// Si le produit n'est pas en stock, affichage d'une boule pleine
			$kithtml .= '<div class="ball ball--small ball--full">
			<a>Ce produit n\'est plus disponible</a>
			<a class="kit__name kit--one" ></a>
			<span class="ball__shadow"></span>
		</div>';
		} else {
			// Si le produit est disponible, l'afficher
			$kithtml .= '<div class="ball ball--small ball--empty">
    <a href="' . $itemUrl . '"><img src="' . $itemImage . '" alt="' . $itemName . '"></a>
	<a class="kit__name kit--one" href="' . $itemUrl . '">' . $itemName . '</a>
	
	<span class="ball__shadow"></span>
</div>';
		}
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
		'Colliers argent',	'B.O.',	'3 bracelets or',	'Fantaisie 1',	'Colliers perles',	'Bagues argent',
		'Bagues alliance',	'Pour homme',	'Collier/pendentif',	'Fantaisie 2',	'Camées',	'3 bracelets argent',	'3 bagues bleues',
		'Ensemble perles',	'Bijoux antiques',	'Fantaisie 3',	'3 colliers',	'Bagues diamants',	'Avis aux Pères noël'
	];

	// Vérifier que nous sommes bien en décembre pour passer la bonne date
	// Si nous ne sommes pas en décembre, le premier rang sera révélé (slice = 1)
	$todayDay = date("d");
	$todayMonth = date("m");

	if ($todayMonth == 12) {
		$slice = $todayDay;
	} else {
		$slice = 20;
	};

	$month = '';
	if (ICL_LANGUAGE_CODE == 'en') :
		$month = 'december';
	elseif (ICL_LANGUAGE_CODE == 'fr') :
		$month = 'décembre';
	endif;

	$kitListFuture = array_slice($kitList, $slice);
	$kitListNow = array_slice($kitList, 0, $slice);

	include 'page-modules/christmas-products';
	foreach ($kitListNow as $kit) {
		$index = array_search($kit, $kitListNow);
		$kitListHtml .= kit(($index + 1), $kitListNow[$index]);
	}

	$kitListHtml .= '<div class="christmas__row">
	<div class="christmas__spacer">
	</div>
	<div class="balls">';

	foreach ($kitListFuture as $kit) {
		$kitListHtml .= '<div class="ball ball--small ball--full">
		<div class="ball--full__date">
			<span class="ball--full__date--day">' . (array_search($kit, $kitList) + 1) . '</span>
			<span class="ball--full__date--month">' . $month . '</span>
			<span class="ball__shadow"></span>
		</div>
		<a class="kit__name">' . $kit . '</a>
	</div>';
	};

	$kitListHtml .= '</div>
	</div>';

	echo $kitListHtml;

	// Kit Items Test
	foreach ($kitItems as $item) {
		$itemId = wc_get_product_id_by_sku($item);
		$itemImage =  get_the_post_thumbnail_url($itemId);
		$itemUrl = get_permalink($itemId);
		$itemName = get_the_title($itemId);
		echo '<p>' . $itemName . '</p>';
		echo '<br/>';
	}

	// Code de tests
	echo "kitlist =>";
	echo '<pre>';
	print_r($kitList);
	echo '</pre>';
	echo "kitlistfuture =>";
	echo '<pre>';
	print_r($kitListFuture);
	echo '</pre>';
	echo "kitlistnow =>";
	echo '<pre>';
	print_r($kitListNow);
	echo '</pre>';
}
