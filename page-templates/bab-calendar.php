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

<?php
function kit($items)
{
    $kithtml = '';
    foreach ($items as $item) {
        $kithtml .= '<div class="ball ball--small ball--empty ball--one">
    <a href="' . esc_html($item[2]) . '"><img src="' . esc_html($item[1]) . '" alt="' . esc_html($item[0]) . '"></a>
    <a class="kit__name kit--one" href="">' . esc_html($item[0]) . '</a><span class="ball__shadow"></span>
</div>';
    }
    echo $kithtml;
};
?>

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
                $items = [['Bague saphirs multicolore, 18K or jaune', 'https://laboiteabijoux.ca/wp-content/uploads/2018/11/B6144-1.jpg', 'https://laboiteabijoux.ca/boutique/saphirs-multicolore-18k-or-jaune/'], [
                    'Bague Péridot et diamants, 14K jaune',
                    'https://laboiteabijoux.ca/wp-content/uploads/2019/10/B6693-1.jpg',
                    'https://laboiteabijoux.ca/boutique/bague-peridot-et-diamants-14k-jaune/'

                ],
            [
                'Bague Améthystes et diamants, 14K or jaune',
                'https://laboiteabijoux.ca/wp-content/uploads/2018/07/B3076-1-1.jpg',
                'https://laboiteabijoux.ca/boutique/amethystes-et-diamants-14k-jaune'
            ]];
                kit($items); ?>
                <!-- <div class="ball ball--small ball--empty ball--one">
                    <a href=""><img src="https://laboiteabijoux.ca/wp-content/uploads/2018/11/B6144-1.jpg" alt=""></a>
                    <a class="kit__name kit--one" href="">Bague saphirs multicolore, 18K or jaune</a><span class="ball__shadow"></span>
                </div>
                <div class="ball ball--small ball--empty ball-two">
                    <a href=""><img src="https://laboiteabijoux.ca/wp-content/uploads/2019/10/B6693-1.jpg" alt=""></a>
                    <a class="kit__name kit--two" href="">Bague Péridot et diamants, 14K jaune</a><span class="ball__shadow"></span>
                </div>
                <div class="ball ball--small ball--empty ball--three">
                    <a href=""><img src="https://laboiteabijoux.ca/wp-content/uploads/2018/07/B3076-1-1.jpg" alt=""></a>
                    <a class="kit__name kit--three" href="">Bague Améthystes et diamants, 14K or jaune</a><span class="ball__shadow"></span>
                </div> -->
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