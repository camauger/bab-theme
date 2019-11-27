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

<?php get_template_part('page-modules/christmas-products'); ?>

<div class="wrapper" id="full-width-page-wrapper">


    <main class="christmas">
        <div class="christmas__header">
            <h1>Vedettes de Noël</h1>
        </div>

        <div class="christmas__row revealed">
            <div class="date">
                <div class="date__wrapper">
                    <span class="date__text">1er décembre</span>
                </div>
            </div>
            <div class="balls">
                <div class="ball--first ball ball--big ball--empty">
                    <a href=""><img src="https://res.cloudinary.com/prospection/image/upload/v1574865030/boiteabijoux/kit1.png" alt=""></a>
                    <a class="kit__name kit--big" href="">Ensemble diamant</a><span class="ball__shadow"></span>
                </div>
                <?php
                if (ICL_LANGUAGE_CODE == 'en') :
                    kit('en', $kit, $items);
                elseif (ICL_LANGUAGE_CODE == 'fr') :
                    kit('fr', $kit, $items);
                endif; ?>
            </div>
        </div>

        <div class="christmas__row">
            <div class="christmas__spacer">

            </div>
            <div class="balls">
                <div class="ball ball--small ball--full">
                    <div class="ball--full__date">
                        <span class="ball--full__date--day">2</span>
                        <span class="ball--full__date--month">décembre</span>
                        <span class="ball__shadow"></span>
                    </div>
                    <a class="kit__name" href="">Ensemble diamant</a>
                </div>

                <div class="ball ball--small ball--full">
                    <div class="ball--full__date">
                        <span class="ball--full__date--day">3</span>
                        <span class="ball--full__date--month">décembre</span>
                        <span class="ball__shadow"></span>
                    </div>
                    <a class="kit__name" href="">Ensemble diamant</a>
                </div>
                <div class="ball ball--small ball--full">
                    <div class="ball--full__date">
                        <span class="ball--full__date--day">4</span>
                        <span class="ball--full__date--month">décembre</span>
                        <span class="ball__shadow"></span>
                    </div>
                    <a class="kit__name" href="">Ensemble diamant</a>
                </div>
                <div class="ball ball--small ball--full">
                    <div class="ball--full__date">
                        <span class="ball--full__date--day">5</span>
                        <span class="ball--full__date--month">décembre</span>
                        <span class="ball__shadow"></span>
                    </div>
                    <a class="kit__name" href="">Ensemble diamant</a>
                </div>
            </div>
        </div>

    </main>



</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>