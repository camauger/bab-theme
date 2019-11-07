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
                    <h1 class="page__title">Nos Collections</h1>
                    
                </div>

                        <a href="https://laboiteabijoux.ca/categorie-produit/bijoux-precieux/" title="Bijoux précieux">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/collections/precieux-categorie.jpg" alt="Bijoux précieux" title="Bijoux précieux" class="img-responsive">
                            Bijoux précieux
                        </a>





                        <a href="https://laboiteabijoux.ca/categorie-produit/bijoux-anciens/" title="Bijoux anciens">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/collections/ancien.jpg" alt="Bijoux anciens" title="Bijoux anciens" class="img-responsive">
                            Bijoux anciens
                        </a>





                        <a href="https://laboiteabijoux.ca/categorie-produit/bijoux-argent/" title="Bijoux argent">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/collections/argent-categorie.jpg" alt="Bijoux argent" title="Bijoux argent" class="img-responsive">
                            Bijoux argent
                        </a>




                  

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
                        



                        <a href="https://laboiteabijoux.ca/categorie-produit/perles/" title="Perles">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/collections/perlest-categorie.jpg" alt="Perles" title="Perles" class="img-responsive">
                            Perles
                        </a>





                        <a href="https://laboiteabijoux.ca/categorie-produit/bijoux-synthetiques/" title="Bijoux pierres synthétiques">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/collections/synthetique-categorie.jpg" alt="Bijoux pierres synthétiques" title="Bijoux pierres synthétiques" class="img-responsive">
                            Bijoux pierres synthétiques
                        </a>





                        <a href="https://laboiteabijoux.ca/categorie-produit/bijoux-fantaisie/" title="Bijoux fantaisie">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/collections/fantaisie1.jpg" alt="Bijoux fantaisie" title="Bijoux fantaisie" class="img-responsive">
                            Bijoux fantaisie
                        </a>





                        <a href="https://laboiteabijoux.ca/categorie-produit/objets-collection/" title="Objets de collection">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/collections/collection-categorie.jpg" alt="Objets de collection" title="Objets de collection" class="img-responsive">
                            Objets de collection
                        </a>



                        <a href="https://laboiteabijoux.ca/categorie-produit/pierres-et-mineraux/" title="Pierres et minéraux">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/collections/Pierres-et-mineraux.jpg" alt="Pierres et minéraux" title="Pierres et minéraux" class="img-responsive">

                            Pierres et minéraux
                        </a>



                        <a href="https://laboiteabijoux.ca/categorie-produit/livres-et-instruments/" title="Livres / instruments gemmologie">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/collections/livres-2.jpg" alt="Livres / instruments gemmologie" title="Livres / instruments gemmologie" class="img-responsive">
                            Livres / instruments gemmologie
                        </a>



                        <a href="https://laboiteabijoux.ca/categorie-produit/boites-a-bijoux/" title="Boîtes à bijoux">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/collections/boite-a-bijoux.png" alt="Boîtes à bijoux" title="Boîtes à bijoux" class="img-responsive">
                            Boîtes à bijoux
                        </a>




                        <a href="https://laboiteabijoux.ca/categorie-produit/dernieres-chances/" title="Dernières chances">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/collections/chance-categorie.jpg" alt="Dernières chances" title="Dernières chances" class="img-responsive">
                            Dernières chances
                        </a>





                        <a href="https://laboiteabijoux.ca/categorie-produit/epoque/" title="Époque">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/collections/epoque-categorie.jpg" alt="Époque" title="Époque" class="img-responsive">
                            Époque
                        </a>
                

                        <a href="https://laboiteabijoux.ca/categorie-produit/type-de-metal/" title="Type de métal">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/collections/metal-categorie.jpg" alt="Type de métal" title="Type de métal" class="img-responsive">
                            Type de métal
                        </a>


                        <a href="https://laboiteabijoux.ca/categorie-produit/certificat-cadeau/" title="Certificat cadeau">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/collections/certificat.jpg" alt="Certificat cadeau" title="Certificat cadeau" class="img-responsive">
                            Certificat cadeau
                        </a>

                    </div>


                </main><!-- #main -->

            </div><!-- #primary -->

        </div><!-- .row -->

    </div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>