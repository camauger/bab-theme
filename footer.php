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
						<a class="nav-link" href="https://laboiteabijoux.ca/en/shop/"><i class="fas fa-gem"></i>store</a>
						<a class="nav-link" href="https://laboiteabijoux.ca/en/about/"><i class="fas fa-gem"></i>about</a>
						<a class="nav-link" href="https://laboiteabijoux.ca/en/services-2/"><i class="fas fa-gem"></i>services</a>
						<a class="nav-link" href="https://laboiteabijoux.ca/en/estate-jewelry-2/"><i class="fas fa-gem"></i>antique jewelry</a>
						<a class="nav-link" href="https://laboiteabijoux.ca/en/blog/"><i class="fas fa-gem"></i>blog</a>
						<a class="nav-link" href="https://laboiteabijoux.ca/en/contact/"><i class="fas fa-gem"></i>contact</a>
						<a class="nav-link" href="https://laboiteabijoux.ca/en/terms-conditions/"><i class="fas fa-gem"></i>terms and conditions</a>
					</nav>
				</div>
			<?php elseif (ICL_LANGUAGE_CODE == 'fr') : ?>
				<div class="sitemap">
					<nav class="nav nav--footer">
						<a class="nav-link" href="https://laboiteabijoux.ca/boutique"><i class="fas fa-gem"></i>boutique</a>
						<a class="nav-link" href="https://laboiteabijoux.ca/a-propos"><i class="fas fa-gem"></i>à propos</a>
						<a class="nav-link" href="https://laboiteabijoux.ca/services"><i class="fas fa-gem"></i>services</a>
						<a class="nav-link" href="https://laboiteabijoux.ca/bijoux-occasion/"><i class="fas fa-gem"></i>bijoux d'occasion</a>
						<a class="nav-link" href="https://laboiteabijoux.ca/la-loupe-a-loeil"><i class="fas fa-gem"></i>la loupe à l'oeil</a>
						<a class="nav-link" href="https://laboiteabijoux.ca/contact"><i class="fas fa-gem"></i>contact</a>
						<a class="nav-link" href="https://laboiteabijoux.ca/conditions-utilisation/"><i class="fas fa-gem"></i>conditions d'utilisation</a>
					</nav>
				</div>
			<?php endif; ?>

			<div class="social">
				<a class="telephone" href="tel:+14186879393" title="+1 (418) 687-9393">+1 (418) 687-9393</a>
				<a class="btn btn-outline-light" href="https://laboiteabijoux.ca/contact" title="Contactez-nous">Contactez-nous</a>
				<h5>Suivez-nous</h5>
				<div>
					<a target="_blank" href="http://www.facebook.com/LaBoiteaBijouxQuebec" title="Suivez-nous sur Facebook">
						<i class="fa-fw fab fa-facebook-f"></i>
					</a>
					<a target="_blank" href="http://pinterest.com/boiteabijoux/la-boite-a-bijoux-quebec/" title="Suivez-nous sur Pinterest">
						<i class="fa-fw fab fa-pinterest"></i>
					</a>
					<a target="_blank" href="https://www.youtube.com/channel/UC_9QG263anDD17Z-L-MjqoQ" title="Suivez-nous sur YouTube">
						<i class="fa-fw fab fa-youtube"></i>
					</a>
				</div>
				<span>Tous droits réservés © La boîte à bijoux 2019</span>
			</div>
			<div class="address">
				<img class="logo--footer" src="<?php echo get_template_directory_uri(); ?>/images/logo-boite-a-bijoux-blanc.png" alt="La boîte à bijoux" title="La boîte à bijoux">
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

</html>