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
	<!-- <div class="row" style="height: 100vh; width: 100%; background-position: top; background-size: cover; background-repeat: no-repeat; background-image: url('http://localhost/boiteabijoux/wp-content/uploads/2019/10/jacek-dylag-FXXfE5RqkqY-unsplash.jpg)">
		<div class="col-3 star--left">

			<span class="likeTitle">Vedette du mois</span><br>
			<span class="texteBlanc">Bague Opale boulder</span><br>
			<span class="prix"><del><span class="woocommerce-Price-amount amount">2&nbsp;460,50<span class="woocommerce-Price-currencySymbol">$</span></span></del> <ins><span class="woocommerce-Price-amount amount">1&nbsp;845,38<span class="woocommerce-Price-currencySymbol">$</span></span></ins></span><br>
			<button class="btn btn-primary">Acheter</button>
		</div>
	</div> -->



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
	$frontpage_id = get_option( 'page_on_front' );

	$featured_image = get_post_meta(get_the_ID($frontpage_id), 'featuredimage', TRUE);

	if ($featured_product->have_posts()) :

		echo '<div class="product--star">';

		while ($featured_product->have_posts()) : $featured_product->the_post();

			$post_thumbnail_id     = get_post_thumbnail_id();
			$product_thumbnail     = wp_get_attachment_image_src($post_thumbnail_id, $size = 'shop-feature');
			$product_thumbnail_alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true);
			?>

			<img src="<?php echo get_template_directory_uri() . "/images/featured/" . $featured_image ."" ;
 ?>" alt="<?php the_title(); ?>">
			<div class="product--star__info">
				<span>
				<?php esc_html_e( 'Featured Product', 'bab' ); ?></span>
				<h3><?php the_title(); ?></h3>
				<a class="btn btn-secondary" href="<?php the_permalink(); ?>"><?php esc_html_e( 'More info', 'bab' ); ?></a>
			</div>
			<div class="store--info">
				<a href="/boutique/" title="Boutique en ligne">
					<span class="boutiqueEnLigne"><?php esc_html_e( 'Online Store', 'bab' ); ?></span>
					<span class="plusDe"><?php esc_html_e( 'more than', 'bab' ); ?></span>
					<span class="vedetteMontant">400</span>
					<span class="bijouxUniques"><?php esc_html_e( 'unique jewelry items', 'bab' ); ?></span>
					<i class="fas fa-shopping-cart"></i>
				</a>

			</div>
			<div class="store--reasons">
				<a href="/bijoux-occasion/" title="Pourquoi acheter un bijou ancien?">
					
					<span class="pourquoi"><?php esc_html_e( 'Why', 'bab' ); ?></span>
					<span class="acheterUnBijouAncien"><?php esc_html_e( 'buy an estate jewelry?', 'bab' ); ?></span>
					<span class="cinqRaisons">
						<span class="nombreRaisons">5</span>
						<span class="raisons"><?php esc_html_e( 'reasons', 'bab' ); ?></span>
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
	<!-- présentation services -->
	<div class="home--services">

		<div class="col-12 col-md-6 col-lg">
			<a href="https://laboiteabijoux.ca/categorie-produit/bijoux-precieux/" title="Bijoux précieux">
				<img src="<?php echo get_template_directory_uri(); ?>/images/collections/precieux-categorie.jpg" alt="Bijoux précieux" title="Bijoux précieux" class="img-fluid">
				<h2>Bijoux précieux</h2>
			</a>
		</div>

		<div class="col-12 col-md-6 col-lg">
			<a href="https://laboiteabijoux.ca/services/#serviceEstimation" title="Évaluation &amp; estimation">
				<img src="<?php echo get_template_directory_uri(); ?>/images/collections/estimation-evaluation-accue.jpg" alt="Évaluation &amp; estimation" title="Évaluation &amp; estimation" class="img-responsive">

				<h2>Évaluation &amp; estimation</h2>
			</a>
		</div>

		<div class="col-12 col-md-4 col-lg">
			<a href="https://laboiteabijoux.ca/categorie-produit/bijoux-anciens/" title="Bijoux anciens">
				<img src="<?php echo get_template_directory_uri(); ?>/images/collections/ancien.jpg" alt="Bijoux anciens" title="Bijoux anciens" class="img-responsive">

				<h2>Bijoux anciens</h2>
			</a>
		</div>

		<div class="col-12 col-md-4 col-lg">
			<a href="https://laboiteabijoux.ca/categorie-produit/bijoux-argent/" title="Bijoux argent">
				<img src="<?php echo get_template_directory_uri(); ?>/images/collections/argent-categorie.jpg" alt="Bijoux argent" title="Bijoux argent" class="img-responsive">
				<h2>Bijoux argent</h2>

			</a>
		</div>

		<div class="col-12 col-md-4 col-lg">
			<a href="https://laboiteabijoux.ca/categorie-produit/bijoux-synthetiques/" title="Bijoux pierres synthétiques">
				<img src="<?php echo get_template_directory_uri(); ?>/images/collections/synthetique-categorie.jpg" alt="Bijoux pierres synthétiques" title="Bijoux pierres synthétiques" class="img-responsive">

				<h2>Bijoux pierres synthétiques</h2>
			</a>
		</div>



	</div> <!-- témoignages -->
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



	<!-- présentation jocelyne rousseau -->
	<div class="home--expertise">
		<div class="col-12 col-lg-6">

			<img src="<?php echo get_template_directory_uri(); ?>/images/jocelyne-portrait.png" alt="Jocelyne Rouleau" title="Jocelyne Rouleau">
		</div>
		<div class="home--expertise__text">
			<h2>Jocelyne Rouleau,<br>gemmologiste diamantaire<br>depuis 25 ans</h2>
			<p>Diplômée de l’Association de gemmologie de Grande-Bretagne et de l’Association canadienne de gemmologie , Mme Jocelyne Rouleau est également évaluatrice certifiée MV de l’Association canadienne des bijoutiers.</p>
			<button class="btn btn-secondary btn-lg"><a href="https://laboiteabijoux.ca/services">Services</a></button>
		</div>

	</div>

</main>
<?php get_footer(); ?>

</body>

</html>