<?php

/**
 * Template Name: About
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
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

    <div class="" id="content">

        <div class="row">

            <div class="col-md-12 content-area" id="primary">

                <main class="site-main" id="main" role="main">

                    <div class="row no-gutters d-flex flex-lg-row-reverse a-propos">
                        <img class="block--image" src="http://localhost/boiteabijoux/wp-content/uploads/2019/10/jocelyne-portrait-1024x710.png" alt="" class="wp-image-12393" srcset="http://localhost/boiteabijoux/wp-content/uploads/2019/10/jocelyne-portrait-1024x710.png 1024w, http://localhost/boiteabijoux/wp-content/uploads/2019/10/jocelyne-portrait-300x208.png 300w, http://localhost/boiteabijoux/wp-content/uploads/2019/10/jocelyne-portrait-768x532.png 768w, http://localhost/boiteabijoux/wp-content/uploads/2019/10/jocelyne-portrait-600x416.png 600w, http://localhost/boiteabijoux/wp-content/uploads/2019/10/jocelyne-portrait.png 1200w" sizes="(max-width: 1024px) 100vw, 1024px">
                        <div class="block--half">
                            <div class="block--text">
                                <h2>Une référence pour plusieurs bijoutiers de renom au Québec !</h2>
                                <p> 
                            Diplômée de l’Association de gemmologie de Grande-Bretagne et de l’Association canadienne de gemmologie , Mme Jocelyne Rouleau est également évaluatrice certifiée MV de l’Association canadienne des bijoutiers.</p>
                            <a class="btn btn-primary" href="https://laboiteabijoux.ca/boutique">VISITEZ LA BOUTIQUE</a><a class="btn btn-primary" href="https://laboiteabijoux.ca/contact">CONTACTEZ JOCELYNE ROULEAU</a>
                        </div>

                        </div>
                    </div>

                    <div class="row no-gutters d-flex flex-lg-row a-propos">
                        <img class="block--image" src="http://localhost/boiteabijoux/wp-content/uploads/2019/10/jocelyne-microscope-1024x710.jpg" alt="" class="wp-image-12393" srcset="http://localhost/boiteabijoux/wp-content/uploads/2019/10/jocelyne-microscope-1024x710.jpg 1024w, http://localhost/boiteabijoux/wp-content/uploads/2019/10/jocelyne-microscope-300x208.jpg 300w, http://localhost/boiteabijoux/wp-content/uploads/2019/10/jocelyne-microscope-768x532.jpg 768w, http://localhost/boiteabijoux/wp-content/uploads/2019/10/jocelyne-microscope-600x416.jpg 600w, http://localhost/boiteabijoux/wp-content/uploads/2019/10/jocelyne-microscope.jpg 1200w" sizes="(max-width: 1024px) 100vw, 1024px">
                        <div class="block--half">
                            <div class="block--text">
                                <h2>La Boîte à Bijoux : la passion des bijoux qui ont une histoire !</h2>
                                <p>En 2000, Jocelyne Rouleau fonde à Québec La Boîte à Bijoux. À ce jour, au Québec, la Boîte à Bijoux est le seul endroit où sont jumelés le service d’expertise et d’évaluation de bijoux et une boutique qui se consacre au commerce des bijoux d’occasion. Diplômée de l’Association de gemmologie de Grande-Bretagne (FGA) et de l’Association canadienne de gemmologie (FCGmA), Jocelyne Rouleau est également bijoutière diplômée (GJ) et évaluatrice certifiée MV (Master Valuer) de l’Association canadienne des bijoutiers.</p>
                                <p>Étant une référence à Québec dans le domaine des bijoux, Mme Rouleau agit aussi comme formatrice et conférencière auprès des bijoutiers, des joailliers ainsi que du grand public. Jocelyne Rouleau au titre d’experte-conseil, est sollicitée pour l’évaluation de bijoux auprès des particuliers comme des professionnels (antiquaires, notaires, etc.).</p>
                            </div>
                        </div>
                    </div>


                    <aside class="block--expertise">
                        <i class="fas fa-gem decorum"></i>
                        <h3>Notre expertise</h3>
                        <nav class="col-12 col-md-8">
                            <a title="Histoire des bijoux" href="https://laboiteabijoux.ca/services/">
                                <i class="fas fa-gem"></i> Histoire des bijoux
                            </a>
                            <a title="Évaluation et estimation de bijoux et pierres précieuses" href="https://laboiteabijoux.ca/services/#serviceEstimation">
                                <i class="fas fa-gem"></i> Évaluation et estimation de bijoux et pierres précieuses
                            </a>
                            <a title="Nettoyage et entretien de bijoux" href="https://laboiteabijoux.ca/services/#serviceNettoyage">
                                <i class="fas fa-gem"></i> Nettoyage et entretien de bijoux
                            </a>
                            <a title="Restauration de bijoux" href="https://laboiteabijoux.ca/services/#serviceRestauration">
                                <i class="fas fa-gem"></i> Restauration de bijoux
                            </a>
                        </nav>
                    </aside>
                </main><!-- #main -->

            </div><!-- #primary -->

        </div><!-- .row end -->

    </div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>