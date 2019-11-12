<?php

/**
 * Template Name: Collections
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package understrap
 */


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod('understrap_container_type');
?>

<div class="wrapper" id="page-wrapper">

    <div class="" id="content">

        <div class="row no-gutters">

            <?php get_template_part('sidebar-templates/sidebar', 'left'); ?>

            <div class="<?php if (is_active_sidebar('left-sidebar')) : ?>col-md-9<?php else : ?>col-md-12<?php endif; ?> content-area" id="primary">

                <main class="site-main" id="main" role="main">

                    <div class="row no-gutters">
                        <div class="col-12">
                            <h1 class="page__title"><span><?php esc_html_e('Our Collections', 'bab'); ?></span></h1>

                        </div>

                        <?php if (ICL_LANGUAGE_CODE == 'en') : ?>

                            <?php collectionCatEn('Precious Jewelry', 'precious-jewelry', 'precious-jewelry.jpg');
                                collectionCatEn('Antique Jewelry', 'antique-jewelry', 'antique-jewelry.jpg');
                                collectionCatEn('Silver Jewelry', 'silver-jewelry', 'silver-jewelry.jpg'); ?>

                        <?php elseif (ICL_LANGUAGE_CODE == 'fr') : ?>

                            <?php
                                $collections = array(
                                    array('Bijoux Précieux', 'bijoux-precieux', 'bijoux-precieux.jpg'),
                                    array('Bijoux Anciens', 'bijoux-anciens', 'bijoux-anciens.jpg'),
                                    array('Bijoux Argent', 'bijoux-argent', 'bijoux-argent.jpg')
                                );
                                foreach ($collections as $collection) {
                                    collectionCatFr($collection[0], $collection[1], $collection[2]);
                                };
                                ?>




                        <?php endif; ?>

                        <div class="home--testimonials">
                            <div class="row no-gutters d-flex justify-content-center">
                                <?php get_template_part('page-modules/testimonials'); ?>
                            </div>
                        </div>


                        <?php if (ICL_LANGUAGE_CODE == 'en') : ?>

                            <?php collectionCatFr('Pearls', 'pearls', 'pearls.jpg');
                                collectionCatFr('Synthetic stones jewelry', 'synthetic-stones-jewelry', 'synthetic-stones-jewelry.jpg');
                                collectionCatFr('Costume jewelry', 'costume-jewelry', 'costume-jewelry.jpg');
                                collectionCatFr("Collector's items", 'collectors-items', 'collectors-items.jpg');
                                collectionCatFr('Stones and minerals', 'stones-minerals', 'stones-minerals.jpg');
                                collectionCatFr('Books and tools', 'books-gemmoligical-instruments', 'books-gemmoligical-instruments.jpg');
                                collectionCatFr('Jewelry box', 'jewelry-box', 'jewelry-box.jpg');
                                collectionCatFr('Last chances', 'last-chances', 'last-chances.jpg');
                                collectionCatFr('Time Period', 'time', 'time.jpg');
                                collectionCatFr('Type of metal', 'type-of-metal', 'type-of-metal.jpg');
                                collectionCatFr('Gift Card', 'gift-card', 'gift-card.jpg'); ?>

                        <?php elseif (ICL_LANGUAGE_CODE == 'fr') : ?>



                            <?php
                                $collections = array(
                                    array('Perles', 'perles', 'perles.jpg'),
                                    array('Bijoux pierres synthétiques', 'bijoux-synthetiques', 'bijoux-synthetiques.jpg'),
                                    array('Bijoux fantaisie', 'bijoux-fantaisie', 'bijoux-fantaisie.jpg'),
                                    array('Objets de collection', 'objets-collection', 'objets-collection.jpg'),
                                    array('Pierres et minéraux', 'pierres-et-mineraux', 'pierres-mineraux.jpgg'),
                                    array('Livres / instruments gemmologie', 'livres-et-instruments', 'livres-et-instruments.jpg'),
                                    array('Boîtes à bijoux', 'boites-a-bijoux', 'boites-a-bijoux.jpg'),
                                    array('Dernières chances', 'dernieres-chances', 'dernieres-chances.jpg'),
                                    array('Époque', 'epoque', 'epoque.jpg'),
                                    array('Type de métal', 'type-de-metal', 'type-de-metal.jpg'),
                                    array('Certificat cadeau', 'certificat-cadeau', 'certificat-cadeau.jpg')
                                );
                                foreach ($collections as $collection) {
                                    collectionCatFr($collection[0], $collection[1], $collection[2]);
                                };
                                ?>




                        <?php endif; ?>

                    </div>


                </main><!-- #main -->

            </div><!-- #primary -->

        </div><!-- .row -->

    </div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>