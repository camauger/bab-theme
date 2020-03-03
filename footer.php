<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<footer class="site-footer" id="colophon">
    <div class="container-fluid">
        <div class="row ">
            <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
            <div class="sitemap">
                <nav class="nav nav--footer">
                    <a class="nav-link" href="<?php echo get_site_url(); ?>/en/shop/"><i
                            class="fas fa-gem"></i>store</a>
                    <a class="nav-link" href="<?php echo get_site_url(); ?>/en/about/"><i
                            class="fas fa-gem"></i>about</a>
                    <a class="nav-link" href="<?php echo get_site_url(); ?>/en/services-2/"><i
                            class="fas fa-gem"></i>services</a>
                    <a class="nav-link" href="<?php echo get_site_url(); ?>/en/estate-jewelry-2/"><i
                            class="fas fa-gem"></i>antique jewelry</a>
                    <a class="nav-link" href="<?php echo get_site_url(); ?>/en/blog/"><i class="fas fa-gem"></i>blog</a>
                    <a class="nav-link" href="<?php echo get_site_url(); ?>/en/contact/"><i
                            class="fas fa-gem"></i>contact</a>
                    <a class="nav-link" href="<?php echo get_site_url(); ?>/en/terms-conditions/"><i
                            class="fas fa-gem"></i>terms and conditions</a>
                </nav>
            </div>
            <?php elseif (ICL_LANGUAGE_CODE == 'fr') : ?>
            <div class="sitemap">
                <nav class="nav nav--footer">
                    <a class="nav-link" href="<?php echo get_site_url(); ?>/boutique"><i
                            class="fas fa-gem"></i>boutique</a>
                    <a class="nav-link" href="<?php echo get_site_url(); ?>/a-propos"><i class="fas fa-gem"></i>à
                        propos</a>
                    <a class="nav-link" href="<?php echo get_site_url(); ?>/services"><i
                            class="fas fa-gem"></i>services</a>
                    <a class="nav-link" href="<?php echo get_site_url(); ?>/bijoux-occasion/"><i
                            class="fas fa-gem"></i>bijoux d'occasion</a>
                    <a class="nav-link" href="<?php echo get_site_url(); ?>/la-loupe-a-loeil"><i
                            class="fas fa-gem"></i>la loupe à l'oeil</a>
                    <a class="nav-link" href="<?php echo get_site_url(); ?>/contact"><i
                            class="fas fa-gem"></i>contact</a>
                    <a class="nav-link" href="<?php echo get_site_url(); ?>/conditions-utilisation/"><i
                            class="fas fa-gem"></i>conditions d'utilisation</a>
                </nav>
            </div>
            <?php endif; ?>

            <div class="social">
                <a class="telephone" href="tel:+14186879393" title="+1 (418) 687-9393">+1 (418) 687-9393</a>
                <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
                <a class="btn btn-outline-light" href="<?php echo get_site_url(); ?>/en/contact"
                    title="Contact Us">Contact Us</a>
                <?php elseif (ICL_LANGUAGE_CODE == 'fr') : ?>
                <a class="btn btn-outline-light" href="<?php echo get_site_url(); ?>/contact"
                    title="Contactez-nous">Contactez-nous</a>
                <?php endif; ?>


                <h5><?php esc_html_e('Follow Us', 'bab'); ?></h5>
                <div>
                    <a target="_blank" href="http://www.facebook.com/LaBoiteaBijouxQuebec" title="Facebook">
                        <i class="fa-fw fab fa-facebook-f"></i>
                    </a>
                    <a target="_blank" href="http://pinterest.com/boiteabijoux/la-boite-a-bijoux-quebec/"
                        title="Pinterest">
                        <i class="fa-fw fab fa-pinterest"></i>
                    </a>
                    <a target="_blank" href="https://www.youtube.com/channel/UC_9QG263anDD17Z-L-MjqoQ" title="YouTube">
                        <i class="fa-fw fab fa-youtube"></i>
                    </a>
                </div>
                <span><?php esc_html_e('All rights reserved.', 'bab'); ?> © La boîte à bijoux
                    <?php echo date("Y"); ?></span>
            </div>
            <div class="address">

                <?php if (ICL_LANGUAGE_CODE == 'en') : ?>
                <img class="logo--footer" src="<?php echo get_template_directory_uri(); ?>/images/logo-footer-en.png"
                    alt="La boîte à bijoux" title="La boîte à bijoux">
                <?php elseif (ICL_LANGUAGE_CODE == 'fr') : ?>
                <img class="logo--footer" src="<?php echo get_template_directory_uri(); ?>/images/logo-footer-fr.png"
                    alt="La boîte à bijoux" title="La boîte à bijoux">

                <?php endif; ?>


                <address>
                    1323, Avenue Maguire, Bureau 101<br />
                    Québec (Québec)<br />
                    Canada, G1T 1Z2</address>
            </div>
        </div>
    </div>
</footer>


</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>
<script src="https://laboiteabijoux.ca/wp-content/themes/boiteabijoux-v2/js/bab.js"></script>

</html>
