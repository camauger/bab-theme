<?php

/**
 * Template Name: Bijoux
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
                    <div class="page__title">
                        <h1>Bijoux d'occasion</h1>
                        <?php echo esc_html( $post->subtitle )?>
                    </div>
                    <div class="row--flex">
                        <div class="block--half">
                            <div class="block--text">
                                <h2>Bijoux anciens d’occasion</h2>
                                <p>Un bijou ancien a passé l’épreuve du temps et survit aux générations. Il demeure un témoin tangible de son époque. Qu’il soit ancien ou plus contemporain, un bijou de succession a déjà eu un propriétaire. Le bijou de succession est donc chargé d’histoire. La Boîte à Bijoux offre des pièces à partir de 1840 jusqu’à nos jours. Les bijoux dit « antiques » ont plus de 100 ans</p>
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
                                <h2>Qu’est-ce qui motive l’achat d’un bijou ancien d’occasion ?</h2>
                                <p>Toutes les raisons sont bonnes ! Nos clients ont la satisfaction de réaliser enfin un rêve tout en faisant une « bonne affaire ». Ils ont le goût de posséder un bijou différent de ce qu’ils retrouvent habituellement sur le marché. Plusieurs ont la passion de découvrir un objet rare du passé.</p>
                                <p></p>
L’achat d’un bijou d’occasion, contrairement à un bijou neuf, est empreint d’histoire et de vécu.</p>

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
                                <h2>Qu’est-ce qui motive la vente d’un bijou ancien ?</h2>
                                <p>Naturellement, il est toujours souhaitable qu’un bijou du patrimoine familial reste dans la famille puisqu’une valeur sentimentale y est rattachée. Lorsque celle-ci disparaît, à la suite d’un divorce, d’un changement de style de vie, d’une situation financière difficile, etc., le propriétaire désire alors vendre. La majorité des gens planifient le don ou la vente de leurs bijoux lorsqu’ils sont encore en bonne santé. La Boîte à Bijoux devient la « famille d’accueil » de ce bijou et lui donne une 2e vie !</p>

                                <a class="btn btn-primarye" href="https://laboiteabijoux.ca/demande-estimation" title="Demandez-nous une estimation">Demandez-nous une estimation</a>

                            </div>
                        </div>
                        <div class="block--image">
                            <img src="https://laboiteabijoux.ca/wp-content/uploads/2018/09/valeur.jpg">
                        </div>
                    </div>

                    <div class="row--flex-r">
                        <div class="block--half">
                            <div class="block--text">
                                <h2>Devriez-vous faire fondre vos bijoux ?</h2>
                                <p>« Surtout pas ! Quand on fait fondre nos bijoux, c’est notre patrimoine que l’on fait fondre! Si le bijou ne fait pas votre bonheur, trouvez-lui une famille d’accueil, vendez-le. Tout comme il en va pour les meubles anciens, la porcelaine, l’argenterie ou tout objet de valeur, nous devons considérer les bijoux comme un bien patrimonial.»</p>

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
                                <h2>Peut-on faire don de ses bijoux à des fondations ?</h2>
                                <p>À La Boîte à Bijoux, vous pouvez aussi donner vos bijoux et ainsi aider une bonne cause. En effet, nous nous sommes associés à plusieurs fondations visant la santé humaine (la Fondation du CHU de Québec Hôpital Saint-François d’Assise, Hôtel-Dieu de Québec, Centre hospitalier de l’Université Laval, la Fondation québécoise du cancer, la Fondation de la Maison Michel Sarrazin, la Société Alzheimer de Québec). Le montant de la vente de votre bijou sera remis à la fondation de votre choix et un reçu fiscal sera remis au donateur. Consultez notre dépliant « Un seul bijou… peut faire beaucoup ! » pour plus d’information.</p>

                                <a class="btn btn-primary" href="https://laboiteabijoux.ca/demande-estimation" title="Demandez-nous une estimation">Demandez-nous une estimation</a>

                            </div>
                        </div>
                        <div class="block--image">
                            <img src="https://laboiteabijoux.ca/wp-content/uploads/2018/09/valeur.jpg">
                        </div>
                    </div>

                    <aside class="block--expertise">
                        <i class="fas fa-gem decorum"></i>
                        <h3>Les bijoux à travers l’histoire</h3>
                        <nav class="col-12 col-md-8">
                            <a title="Qu’est-ce qui motive la vente d’un bijou?" href="https://laboiteabijoux.ca/questions-reponses/#faq-6858">
                                <i class="fas fa-gem"></i> Qu’est-ce qui motive la vente d’un bijou?
                            </a>
                            <a title="Devriez-vous faire fondre vos bijoux ?" href="https://laboiteabijoux.ca/questions-reponses/#faq-6856">
                                <i class="fas fa-gem"></i> Devriez-vous faire fondre vos bijoux ?
                            </a>

                        </nav>
                    </aside>



            </div>
        </div>
    </div>

</div>



<?php get_footer(); ?>