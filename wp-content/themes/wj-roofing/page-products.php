
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
			background-image: url('<?php echo get_template_directory_uri(); ?>/images/banners/banner-products.jpg')
		}
	</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main products-page">
			<div class="banner-image banner-image-main banner-image-1"></div>
			<div class="main-container padding-main-t">
				<h2 class="text-black">We offer a variety of products including</h2>
				<p class="text-regular">EPDM & TPO Flat Roofing, Long Sheet Metal Roofing, and the following:</p>
				<?php 
				// Get Products from database
				$wpb_all_query = new WP_Query(array('post_type'=>'products', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
				<?php if ( $wpb_all_query->have_posts() ) : ?>
				<div class="container-fluid padding-medium-t padding-main-b">
					<div class="row justify-content-center">
						<!-- the loop -->
						<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
							<div class="col-sm-6 col-md-3 text-center padding-products-x">
								<img class="products-image" src="<?php the_field( "product_image" ); ?>">
								<p class="text-regular"><?php the_title(); ?></p>
							</div>
						<?php endwhile; ?>
						<!-- end of the loop -->
						<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>
				</div>
				<h2 class="text-black padding-main-t">Our services</h2>
				<?php 
				// Get Services from database
				$wpb_all_query = new WP_Query(array('post_type'=>'services', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
				<?php if ( $wpb_all_query->have_posts() ) : ?>
				<div class="container-fluid">
					<div class="row">
						<!-- the loop -->
						<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
							<div class="col-12 col-md-6 padding-products-x padding-column-xl">
								<h2 class="padding-small-b padding-medium-t"><?php the_title(); ?></h2>
								<div class="service-image" style="background-image: url( '<?php the_field( "image" ); ?>' )"></div>
								<!-- <img class="service-image" src="<?php the_field( "image" ); ?>"></img> -->
								<p class="text-regular text-image padding-small-t"><?php the_field( "image_description" ); ?></p>
							</div>
							<div class="col-12 col-md-6 padding-products-x padding-column-xr">
								<div class="service-image-spacer-t"></div>
								<div class="position-relative service-image-spacer-m">
									<p class="text-regular center-hor"><?php the_field( "service_description" ); ?></p>
								</div>
							</div>
						<?php endwhile; ?>
						<!-- end of the loop -->
						<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
