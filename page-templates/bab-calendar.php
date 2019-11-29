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

<?php if (is_front_page()) : ?>
    <?php get_template_part('global-templates/hero'); ?>
<?php endif; ?>



<div class="wrapper" id="full-width-page-wrapper">


    <main class="christmas">
        <div class="christmas__header">
            <h1>Vedettes de Noël</h1>
        </div>

        <?php
//**Les Kits */
$kits = [
    
    [
        '3 bagues couleurs',
        'B6144',
        'B6693',
        'B3076'
    ],
    [
        'Colliers argent',
        'B6145',
        'B6764',
        'B6889'
    ],
    [
        'B.O.',
        'B4176',
        'B6655',
        'B6856'
    ],
    [
        '3 bracelets or',
        'B6116',
        'B4624',
        'B6838'
    ],
    [
        'Fantaisie 1',
        'B5780',
        'B6020',
        'B6487'
    ],
    [
        'Colliers perles',
        'B6110',
        'B6657',
        'B6772'
    ],
    [
        'Bagues argent',
        'B6413',
        'B6078',
        'B6079'
    ],
    [
        'Bagues alliance',
        'B6432',
        'B6571',
        'B3197'
    ],
    [
        'Pour homme',
        'B6641',
        'B6706',
        'B6766'
    ],
    [
        'Collier/pendentif',
        'B5202',
        'B6334',
        'B6565'
    ],
    [
        'Fantaisie 2',
        'B6473',
        'B5705',
        'B4017'
    ],
    [
        'Camées',
        'B6159',
        'B3615',
        'B6625'
    ],
    [
        '3 bracelets argent',
        'B6216',
        'B6276',
        'B6598'
    ],
    [
        '3 bagues bleues',
        'B6055',
        'B6553',
        'B6261'
    ],
    [
        'Ensemble perles',
        'B3100',
        'B6608',
        'B6609'
    ],
    [
        'Bijoux antiques',
        'B6530',
        'B3616',
        'B6771'
    ],
    [
        'Fantaisie 3',
        'B4715',
        'B6019',
        'B6492'
    ],
    [
        '3 colliers',
        'B5816',
        'B6631',
        'B6078'
    ],
    [
        'Bagues diamants',
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