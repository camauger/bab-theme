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

        <!-- <div class="christmas__row revealed">
            <div class="date">
                <div class="date__wrapper">
                    <span class="date__text">1er décembre</span>
                </div>
            </div>
            <div class="balls">
               
            </div>
        </div> -->

        <div class="christmas__row">
            <div class="christmas__spacer">

            </div>
            <div class="balls">
                <?php kitList(); ?>
            </div>
        </div>

    </main>



</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>