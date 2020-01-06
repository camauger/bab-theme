<?php

/**
 * Template Name: Home
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


<main class="full">


	<?php
	$args = array(
		'posts_per_page' => 1,
		'post_type'      => 'product',
		'post_status'    => 'publish',
		'tax_query'      => array(
			array(
				'taxonomy' => 'product_visibility',
				'field'    => 'name',
				'terms'    => 'featured',
				'operator' => 'IN',
			),
		)
	);
	$featured_product = new WP_Query($args);
	$frontpage_id = get_option('page_on_front');

	$featured_image = get_post_meta(get_the_ID($frontpage_id), 'featuredimage', TRUE);
	$pubImg = get_post_meta(get_the_ID($frontpage_id), 'pubImg', TRUE);
	$pubUrl = get_post_meta(get_the_ID($frontpage_id), 'pubUrl', TRUE);
	$pubAlt = get_post_meta(get_the_ID($frontpage_id), 'pubAlt', TRUE);
	if ($featured_product->have_posts()) :

		echo '<div class="product--star">';

		while ($featured_product->have_posts()) : $featured_product->the_post();

			$post_thumbnail_id     = get_post_thumbnail_id();
			$product_thumbnail     = wp_get_attachment_image_src($post_thumbnail_id, $size = 'shop-feature');
			$product_thumbnail_alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true);
			?>

			<img src="<?php echo $featured_image; ?>" alt="<?php the_title(); ?>">
			<div class="product--star__info">
				<span>
					<?php esc_html_e('Featured Product', 'bab'); ?></span>
				<h3><?php the_title(); ?></h3>
				<a class="btn btn-secondary" href="<?php the_permalink(); ?>"><?php esc_html_e('More info', 'bab'); ?></a>
			</div>
			 <a class="store--info" href="<?php echo $pubUrl ?>">
				<!-- <img class="" src="<?php echo $pubImg ?>" alt="<?php echo $pubAlt ?>"> -->

				<?php if (ICL_LANGUAGE_CODE == 'en') : ?>
						<a href="/en/our-collections/" title="Online Store">
						<?php elseif (ICL_LANGUAGE_CODE == 'fr') : ?>
							<a href="/nos-collections/" title="Boutique en ligne">
							<?php endif; ?>
							<span class="boutiqueEnLigne"><?php esc_html_e('Online Store', 'bab'); ?></span>
							<span class="plusDe"><?php esc_html_e('more than', 'bab'); ?></span>
							<span class="vedetteMontant">450</span>
							<span class="bijouxUniques"><?php esc_html_e('unique jewelry items', 'bab'); ?></span>
							<i class="fas fa-shopping-cart"></i>
							</a>


			</a>
			<div class="store--reasons">
				<?php if (ICL_LANGUAGE_CODE == 'en') : ?>
					<a href="/en/estate-jewelry-2/" title="Why buy an estate jewelry?">
					<?php elseif (ICL_LANGUAGE_CODE == 'fr') : ?>
						<a href="/bijoux-occasion/" title="Pourquoi acheter un bijou d'occasion?">
						<?php endif; ?>
						<span class="pourquoi"><?php esc_html_e('Why', 'bab'); ?></span>
						<span class="acheterUnBijouAncien"><?php esc_html_e('buy an estate jewelry?', 'bab'); ?></span>
						<span class="cinqRaisons">
							<span class="nombreRaisons">5</span>
							<span class="raisons"><?php esc_html_e('reasons', 'bab'); ?></span>
						</span>
						</a>
			</div>


	<?php
		endwhile;

		echo '</div>';

	endif;

	wp_reset_query();
	?>
	<!-- Featured products loop -->


	<!-- phrase accroche -->
	<div class="row justify-content-center no-gutters">
		<div class="col-12 col-md-8 accroche">
			<?php the_content(); ?>
		</div>
	</div>
	<div>
		<h3 class="new-products__title"><?php esc_html_e('New Items', 'bab'); ?></h3>
		<?php echo do_shortcode('[products limit="4" columns="4" orderby="id" order="DESC" visibility="visible"]'); ?>
	</div>
	<!-- présentation services -->

	<?php if (ICL_LANGUAGE_CODE == 'en') : ?>
		<div class="home--services">

			<div class="col-12 col-md-6 col-lg">
				<?php collectionCatEn('Precious Jewelry', 'precious-jewelry', 'precious-jewelry.jpg'); ?>
			</div>

			<div class="col-12 col-md-6 col-lg">
				<a href="<?php echo get_site_url(); ?>/en/services-2/" title="<?php esc_html_e('Evaluation', 'bab'); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/images/collections/estimation-evaluation-accue.jpg" alt="<?php esc_html_e('Evaluation', 'bab'); ?>" title="<?php esc_html_e('Evalution Jewelry', 'bab'); ?>" class="img-fluid">
					<h2><?php esc_html_e('Evaluation', 'bab'); ?></h2>
				</a>
			</div>

			<div class="col-12 col-md-4 col-lg">
				<?php
					collectionCatEn('Antique Jewelry', 'antique-jewelry', 'antique-jewelry.jpg');
					?>

			</div>

			<div class="col-12 col-md-4 col-lg">
				<?php
					collectionCatEn('Silver Jewelry', 'silver-jewelry', 'silver-jewelry.jpg'); ?>

			</div>

			<div class="col-12 col-md-4 col-lg">
				<a href="<?php echo get_site_url(); ?>/en/product-category/synthetic-stones-jewelry/" title="<?php esc_html_e('Synthetic Stones Jewelry', 'bab'); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/images/collections/synthetic-stones-jewelry.jpg" alt="<?php esc_html_e('Synthetic Stones Jewelry', 'bab'); ?>" title="<?php esc_html_e('Synthetic Stones Jewelry', 'bab'); ?>" class="img-fluid">
					<h2><?php esc_html_e('Synthetic Stones Jewelry', 'bab'); ?></h2>
				</a>
			</div>

		</div>
	<?php elseif (ICL_LANGUAGE_CODE == 'fr') : ?>
		<div class="home--services">

			<div class="col-12 col-md-6 col-lg">
				<?php collectionCatFr('Bijoux Précieux', 'bijoux-precieux', 'bijoux-precieux.jpg');

					?>
			</div>

			<div class="col-12 col-md-6 col-lg">
				<a href="<?php echo get_site_url(); ?>/services/#serviceEstimation" title="Évaluation &amp; estimation">
					<img src="<?php echo get_template_directory_uri(); ?>/images/collections/estimation-evaluation-accue.jpg" alt="Évaluation &amp; estimation" title="Évaluation &amp; estimation" class="img-responsive">
					<h2>Évaluation &amp; estimation</h2>
				</a>
			</div>

			<div class="col-12 col-md-4 col-lg">
				<?php
					collectionCatFr('Bijoux Anciens', 'bijoux-anciens', 'bijoux-anciens.jpg');

					?>
			</div>

			<div class="col-12 col-md-4 col-lg">
				<?php
					collectionCatFr('Bijoux Argent', 'bijoux-argent', 'bijoux-argent.jpg');
					?>
			</div>

			<div class="col-12 col-md-4 col-lg">
				<a href="<?php echo get_site_url(); ?>/categorie-produit/bijoux-synthetiques/" title="Bijoux pierres synthétiques">
					<img src="<?php echo get_template_directory_uri(); ?>/images/collections/bijoux-synthetiques.jpg" alt="Bijoux pierres synthétiques" title="Bijoux pierres synthétiques" class="img-responsive">
					<h2>Bijoux pierres synthétiques</h2>
				</a>
			</div>



		</div>
	<?php endif; ?>


	<!-- témoignages -->
	<div class="home--testimonials">
		<div class="row no-gutters d-flex justify-content-center">
			<?php get_template_part('page-modules/testimonials'); ?>
		</div>
	</div>



	<!-- présentation jocelyne rousseau -->
	<div class="home--expertise">
		<div class="col-12 col-lg-6">
			<img src="<?php echo get_template_directory_uri(); ?>/images/jocelyne-portrait.png" alt="Jocelyne Rouleau" title="Jocelyne Rouleau">
		</div>
		<div class="home--expertise__text">
			<h2>Jocelyne Rouleau,<br><?php esc_html_e('Diamond-Gemologist', 'bab'); ?><br><?php esc_html_e('for 25 years', 'bab'); ?></h2>
			<p><?php esc_html_e('A graduate of the Gemmological Association of Great Britain and the Canadian Gemmology Association, Ms. Rouleau is also a Certified Valuation Assessor of the Canadian Jewelers Association.', 'bab'); ?></p>

			<?php if (ICL_LANGUAGE_CODE == 'en') : ?>
				<button class="btn btn-secondary btn-lg"><a href="<?php echo get_site_url(); ?>/en/services-2/">Services</a></button>
			<?php elseif (ICL_LANGUAGE_CODE == 'fr') : ?>
				<button class="btn btn-secondary btn-lg"><a href="<?php echo get_site_url(); ?>/services/">Services</a></button>
			<?php endif; ?>


		</div>

	</div>

</main>
<?php get_footer(); ?>

</body>

</html>