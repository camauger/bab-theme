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

                        <?php
                        function collectionCatFr($catName, $catSlug, $imgSlug)
                        {
                            $imgSrc = get_template_directory_uri() . "/images/collections/" . $imgSlug;
                            //$catUrlEn = get_site_url() . "/en/product-category/";
                            $catUrl = get_site_url() . "/categorie-produit/";
                            $catUrl .= $catSlug;
                            $collectionCat = "<a href=$catUrl title='$catName'><img src=$imgSrc alt='$catName' title'=$catName' class='img-fluid'><h2>$catName</h2></a>";
                            echo $collectionCat;
                        }; ?>
                        <?php
                        function collectionCatEn($catName, $catSlug, $imgSlug)
                        {
                            $imgSrc = get_template_directory_uri() . "/images/collections/" . $imgSlug;
                            $catUrl = get_site_url() . "/en/product-category/" . $catSlug;

                            $collectionCat = "<a href=$catUrl title='$catName'><img src=$imgSrc alt='$catName' title'=$catName' class='img-fluid'><h2>$catName</h2></a>";
                            echo $collectionCat;
                        }; ?>

                        <?php if (ICL_LANGUAGE_CODE == 'en') : ?>

                            <?php collectionCatEn('Precious Jewelry', 'precious-jewelry', 'precieux-categorie.jpg');
                                collectionCatEn('Antique Jewelry', 'antique-jewelry', 'ancien.jpg');
                                collectionCatEn('Silver Jewelry', 'silver-jewelry', 'argent-categorie.jpg'); ?>

                        <?php elseif (ICL_LANGUAGE_CODE == 'fr') : ?>

                            <?php collectionCatFr('Bijoux Précieux', 'bijoux-precieux', 'precieux-categorie.jpg');
                                collectionCatFr('Bijoux Anciens', 'bijoux-anciens', 'ancien.jpg');
                                collectionCatFr('Bijoux Argent', 'bijoux-argent', 'argent-categorie.jpg');
                                ?>




                        <?php endif; ?>

                        <div class="home--testimonials">
                            <div class="row no-gutters d-flex justify-content-center">
                                <blockquote>
                                    Conseils avec beaucoup de professionnalisme et belles découvertes à La Boîte à Bijoux...et facile d’accès rue Maguire, Sillery...
                                    <span>Mme T. Bouchard</span>
                                </blockquote>

                                <blockquote>
                                    J’ai bien reçu mon bijou, merci. Il est magnifique ! Merci encore et à bientôt.
                                    <span>Mme F. Charbonneau</span>
                                </blockquote>
                            </div>
                        </div>


                        <?php if (ICL_LANGUAGE_CODE == 'en') : ?>

                            <?php collectionCatFr('Pearls', 'pearls', 'perlest-categorie.jpg');
                                collectionCatFr('Synthetic stones jewelry', 'synthetic-stones-jewelry', 'synthetique-categorie.jpg');
                                collectionCatFr('Costume jewelry', 'costume-jewelry', 'fantaisie1.jpg');
                                collectionCatFr("Collector's items", 'collectors-items', 'collection-categorie.jpg');
                                collectionCatFr('Stones and minerals', 'stones-minerals', 'Pierres-et-mineraux.jpg');
                                collectionCatFr('Books and tools', 'books-gemmoligical-instruments', 'livres-2.jpg');
                                collectionCatFr('Jewelry box', 'jewerly-box', 'boite-a-bijoux.png');
                                collectionCatFr('Last chances', 'last-chances', 'chance-categorie.jpg');
                                collectionCatFr('Time Period', 'time', 'epoque-categorie.jpg');
                                collectionCatFr('Type of metal', 'type-of-metal', 'metal-categorie.jpg');
                                collectionCatFr('Gift Card', 'gift-card', 'certificat.jpg'); ?>

                        <?php elseif (ICL_LANGUAGE_CODE == 'fr') : ?>

                            <?php collectionCatFr('Perles', 'perles', 'perlest-categorie.jpg');
                                collectionCatFr('Bijoux pierres synthétiques', 'bijoux-synthetiques', 'synthetique-categorie.jpg');
                                collectionCatFr('Bijoux fantaisie', 'bijoux-fantaisie', 'fantaisie1.jpg');
                                collectionCatFr('Objets de collection', 'objets-collection', 'collection-categorie.jpg');
                                collectionCatFr('Pierres et minéraux', 'pierres-et-mineraux', 'Pierres-et-mineraux.jpg');
                                collectionCatFr('Livres / instruments gemmologie', 'livres-et-instruments', 'livres-2.jpg');
                                collectionCatFr('Boîtes à bijoux', 'boites-a-bijoux', 'boite-a-bijoux.png');
                                collectionCatFr('Dernières chances', 'dernieres-chances', 'chance-categorie.jpg');
                                collectionCatFr('Époque', 'epoque', 'epoque-categorie.jpg');
                                collectionCatFr('Type de métal', 'type-de-metal', 'metal-categorie.jpg');
                                collectionCatFr('Certificat cadeau', 'certificat-cadeau', 'certificat.jpg'); ?>


                        <?php endif; ?>

                    </div>


                </main><!-- #main -->

            </div><!-- #primary -->

        </div><!-- .row -->

    </div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>