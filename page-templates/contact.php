<?php

/**
 * Template Name: Contact
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

    <!-- <div class="<?php echo esc_attr($container); ?>" id="content"> -->
    <div class="" id="content">

        <main class="site-main container contact" id="main" role="main">
            <div class="row">
                <div class="col-12">
                    <h1><span><?php esc_html_e('Contact', 'bab'); ?></span></h1>
                </div>

                <div class="localization col-xl-6">

                <?php the_content(); ?>
    <h3>La Boîte à Bijoux</h3>
                    <address>
                        <strong>Jocelyne Rouleau, FGA, FCGmA, GJ</strong><br />
                        <?php esc_html_e('Gemologist • Diamond • MV Certified Evaluator', 'bab'); ?>
                        <br />
                        1323, avenue Maguire, bureau 101<br />
                        Québec (Québec) G1T 1Z2<br />
                    </address>
                    <div class="buttonGroup">
                        <a class="btn btn-secondary" href="tel:+14186879393" title="Téléphone : 418 687-9393">
                            418 687-9393
                        </a>
                        <a class="btn btn-secondary" href="https://www.google.com/maps/place/La+Bo%C3%AEte+%C3%A0+Bijoux/@46.7810912,-71.2540924,17z/data=!4m13!1m7!3m6!1s0x4cb896bd29c91561:0x6cafd85ebdd68a46!2s1323+Avenue+Maguire,+Qu%C3%A9bec,+QC+G1T+1K6!3b1!8m2!3d46.7810912!4d-71.2519037!3m4!1s0x4cb896bd29caada9:0x2f053529d5c2e97e!8m2!3d46.7810912!4d-71.2519037" target="_blank" title="S'y rendre">
                            <i class="fas fa-map-pin"></i>
                            <?php esc_html_e('Getting There', 'bab'); ?>
                        </a>
                    </div>
                    
                   
                    

                    

                </div>
                <div class="schedule col-xl-6">
                    <h3><?php esc_html_e('Store Business Hours', 'bab'); ?></h3>
                    <?php get_template_part('page-modules/schedule'); ?>

                    <h3><?php esc_html_e('Opening hours of the evaluation laboratory', 'bab'); ?></h3>
                    <p>
                        <?php esc_html_e('By appointment only. Fill out the form to make the request', 'bab'); ?>
                    </p>
                    <h3><?php esc_html_e('Return', 'bab'); ?></h3>
                    <p><?php esc_html_e('To return a product, you must first make the request by completing the form.', 'bab'); ?></p>
                </div>

        </main><!-- #main -->
    </div>
    <?php get_template_part('page-modules/questions'); ?>

</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>