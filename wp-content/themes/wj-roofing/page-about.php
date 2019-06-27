
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WJ_Roofing
 */

get_header();
?>
	<style>
		.banner-image-1 {
			background-image: url('<?php echo get_template_directory_uri(); ?>/images/banners/banner-about.jpg')
		}
		.medium-image {
			background-image: url('<?php the_field( "product" ); ?>')		}
	</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main about-page">
			<div class="banner-image banner-image-main banner-image-1"></div>
			<div class="container-fluid main-container padding-main-y">
				<div class="row">
					<div class="col-md-6 padding-column-xl">
					<h2 class="text-black">Family Owned & Operated</h2><br>
					<p class="text-regular text-bold-italic">
						Since 2004 WJ Roofing has been a family owned
						and operated business taking pride in honest job
						quotations, professional installations and the best
						quality products available.
					</p></br>
					<p class="text-regular">
						We are an established business with an office,
						showroom, and inventory building located in
						Straffordville, Ontario. We specialize in quality shingle
						and metal roofing systems, we are even credentialed
						installers with several shingle manufacturers, the
						latest being CertainTeed Saint-Gobain.<br><br>
						Our sales team is dedicated to providing you as the
						homeowner with several options for your roofing
						project (different shingles, underlayments, etc.).</br><br>
						We will go over each option to ensure you know what
						each product is designed to do, and how a roofing
						system works together to provide you with the best
						possible warranties on the market. After all, roofing
						materials are only as good as the installation behind
						them.
					</p>
					</div>
					<div class="col-md-6 padding-column-xr">
						<div class="medium-image">
							<p class="medium-image-text text-regular text-image"><?php the_field( "product_description" ); ?></p>
						</div>
					</div>
					<div class="main-container padding-main-t">
						<h2 class="text-black">So why not go with a family owned business?</h2><br>
						<p class="text-regular text-bold-italic">Call today and we will be happy to provide you with a detailed quote for a new roof to protect your home or business for years to come.</p><br>
						<a href="<?php echo get_site_url() ?>/contact"><button class="button">Request a Quote</button></a>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
