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


        <?php kitList(); ?>


    </main>



</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>