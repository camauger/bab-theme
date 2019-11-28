<?php
//** Kits en français */

$kit = [
    'Ensemble diamant',
    'Diamond Kit',
    'https://res.cloudinary.com/prospection/image/upload/v1574865030/boiteabijoux/kit1.png',
    '',
    ''
];

// Déclarations des produits
//  1 - itemName FR, 2 - itemName EN, 3 - itemImage, 4 - itemURl FR, 5 - itemUrl EN
//
// global $product;

// $itemOneId = wc_get_product_id_by_sku( 'B6145' );
// $itemName = get_the_title( $itemOneId );

$items = ['B6144','B6693','B3076'];

$kitItems = ['B6144','B6693','B3076'];

                //**  */
                
                if (ICL_LANGUAGE_CODE == 'en') :
                    kit('en', $kit, $items);
                elseif (ICL_LANGUAGE_CODE == 'fr') :
                    kit('fr', $kit, $items);
                endif;
