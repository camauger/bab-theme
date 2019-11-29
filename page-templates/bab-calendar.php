<?php

/**
 * Template Name: BAB Calendar
 *
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod('understrap_container_type');
?>


<div class="wrapper" id="full-width-page-wrapper">


    <main class="christmas">
        <div class="christmas__header">
            <h1><?php esc_html_e( 'Christmas Stars', 'bab' ); ?></h1>
        </div>

        <?php
//**Les Kits */
// __('Furnished','your-textdomain')


$kits = [
    
    [
        //'De toutes les couleurs !',
        __('Of all the colors !','christmas'),
        'B6144',
        'B6693',
        'B3076'
    ],
    [
        'De l\'argent au cou pour Noël !',
        'B6145',
        'B6764',
        'B6889'
    ],
    [
        'Diamants à l\'oreille? Un classique!',
        'B4176',
        'B6655',
        'B6856'
    ],
    [
        'Poignets bien décorés !',
        'B6116',
        'B4624',
        'B6838'
    ],
    [
        'Bijoux fantaisie pour tous les budgets !',
        'B5780',
        'B6020',
        'B6487'
    ],
    [
        'Colliers perles encore et encore !',
        'B6110',
        'B6657',
        'B6772'
    ],
    [
        'Élégantes bagues en argent',
        'B6413',
        'B6078',
        'B6079'
    ],
    [
        'Parfait pour vos fiançailles !',
        'B6432',
        'B6571',
        'B3197'
    ],
    [
        'Boutons manchettes: cadeau parfait !',
        'B6641',
        'B6706',
        'B6766'
    ],
    [
        'De la couleur au cou !',
        'B5202',
        'B6334',
        'B6565'
    ],
    [
        'Fantaisie à prix coup de ♥ !',
        'B6473',
        'B5705',
        'B4017'
    ],
    [
        'Sélection de camées ',
        'B6159',
        'B3615',
        'B6625'
    ],
    [
        'Bracelets originaux !',
        'B6216',
        'B6276',
        'B6598'
    ],
    [
        '♪ Bleu, bleu, le ciel est bleu ♪',
        'B6055',
        'B6553',
        'B6261'
    ],
    [
        'Perles de culture',
        'B3100',
        'B6608',
        'B6609'
    ],
    [
        'Bijoux d\'un autre siècle !',
        'B6530',
        'B3616',
        'B6771'
    ],
    [
        'Signé Swarovski et Lalique',
        'B4715',
        'B6019',
        'B6492'
    ],
    [
        'Sélection de la Mère Noël !',
        'B5816',
        'B6631',
        'B6078'
    ],
    [
        'Style contemporain',
        'B6146',
        'B6831',
        'B5834'
    ],
    [
        'Avis aux Pères noël',
        'C3127',
        'C3132',
        'B6437'
    ]
];?>



        <?php kitList($kits); ?>


    </main>



</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>