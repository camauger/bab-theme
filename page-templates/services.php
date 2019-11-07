<?php

/**
 * Template Name: Services
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


<div class="wrapper" id="full-width-page-wrapper">
    <div class="" id="content">

        <div class="content-area" id="primary">
            <main class="site-main" id="main" role="main">
                <div class="page__title">
                    <h1>Services</h1>
                    <!-- <?php echo esc_html($post->subtitle) ?> -->
                </div>
                <div class="row--flex">
                    <div class="block--half">
                        <div class="block--text">
                            <h2>Bien comprendre la juste valeur marchande d’un bijou de seconde main</h2>
                            <p>À La Boîte à Bijoux, nous offrons sur place un service d’analyse et d’évaluation à la fine pointe de la technologie. Ce service spécialisé vous permettra de bien comprendre la juste valeur marchande d’un bijou, que vous soyez acheteur ou vendeur.</p>
                            <a class="btn btn-primary" href="https://laboiteabijoux.ca/contact" title="Contactez-nous">Contactez-nous</a>
                        </div>
                    </div>
                    <div class="block--image">
                        <img src="https://laboiteabijoux.ca/wp-content/uploads/2018/09/valeur.jpg">
                    </div>
                </div>
                <div class="row--flex-r">
                    <div class="block--half">
                        <div class="block--text">
                            <h2>Estimation de vos bijoux par des experts</h2>
                            <p>Il est important de faire évaluer vos bijoux par un spécialiste qui connaît le marché des bijoux anciens. Plusieurs critères sont pris en considération pour déterminer la valeur du bijou : le type de métal, la qualité de fabrication, la valeur des pierres, l’état de conservation, le style, l’authenticité et l’époque du bijou.</p>

                            <a class="btn btn-primary" href="https://laboiteabijoux.ca/contact" title="Contactez-nous">Contactez-nous</a>

                        </div>
                    </div>
                    <div class="block--image">
                        <img src="https://laboiteabijoux.ca/wp-content/uploads/2018/09/valeur.jpg">
                    </div>
                </div>
                <div class="row--flex">
                    <div class="block--half">
                        <div class="block--text">
                            <h2>Restauration de vos bijoux par des spécialistes</h2>
                            <p>Il est important de choisir un expert qui saura respecter l’état d’origine de votre bijou lors de la restauration. L’utilisation des attaches et fermoirs d’époque contribue à maintenir l’aspect authentique de la pièce. &nbsp;À La Boîte à Bijoux, un diamant brisé peut être retaillé, l’or réparé grâce au laser, l’émail écaillé peut-être retouché, etc. Notre équipe d’expert nous permet de faire revivre l’éclat original de vos bijoux.</p>

                            <a class="btn btn-primary" href="https://laboiteabijoux.ca/demande-estimation" title="Demandez-nous une estimation">Demandez-nous une estimation</a>

                        </div>
                    </div>
                    <div class="block--image">
                        <img src="https://laboiteabijoux.ca/wp-content/uploads/2018/09/valeur.jpg">
                    </div>
                </div>
                <div class="row--flex-r">
                    <div class="block--half">
                        <div class="block--text">
                            <h2>Nettoyage adéquat&nbsp;de vos bijoux</h2>
                            <p>La Boîte à Bijoux saura nettoyer tout en conservant la patine de vos bijoux (aspect soyeux que prend le métal avec le temps). Les pierres délicates (perles, corail, ivoire, camées, émeraudes, etc.) exigent une attention particulière.</p>

                            <a class="btn btn-primary" href="https://laboiteabijoux.ca/contact" title="Contactez-nous">Contactez-nous</a>

                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <img src="https://laboiteabijoux.ca/wp-content/uploads/2018/09/valeur.jpg">
                    </div>
                </div>
                <div class="row--flex">
                    <div class="block--half">
                        <div class="block--text">
                            <h2>Achat de l’or</h2>
                            <p>À La Boîte à Bijoux, après évaluation par un de nos experts, si&nbsp;vos bijoux en or sont endommagés et malheureusement pas réparables pour un coût raisonnable par rapport à leurs valeurs sur le marché,&nbsp;&nbsp;nous pourrions vous proposer de les racheter à la valeur du métal.</p>

                            <a class="btn btn-primary" href="https://laboiteabijoux.ca/demande-estimation" title="Demandez-nous une estimation">Demandez-nous une estimation</a>

                        </div>
                    </div>
                    <div class="block--image">
                        <img src="https://laboiteabijoux.ca/wp-content/uploads/2018/09/valeur.jpg">
                    </div>
                </div>

                
            </main>
            <aside class="block--expertise">
                    <i class="fas fa-gem decorum"></i>
                    <h3>Notre expertise</h3>
                    <nav class="col-12 col-md-8">
                        <a title="Qu’est-ce qui motive la vente d’un bijou?" href="https://laboiteabijoux.ca/questions-reponses/#faq-6858">
                            <i class="fas fa-gem"></i>Qu’est-ce qui motive la vente d’un bijou?
                        </a>
                        <a title="Devriez-vous faire fondre vos bijoux ?" href="https://laboiteabijoux.ca/questions-reponses/#faq-6856">
                            <i class="fas fa-gem"></i> Devriez-vous faire fondre vos bijoux ?
                        </a>

                    </nav>
                </aside>
        </div>
    </div>


    <?php get_footer(); ?>