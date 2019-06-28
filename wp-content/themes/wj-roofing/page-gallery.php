
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
			background-image: url('<?php echo get_template_directory_uri(); ?>/images/banners/banner-gallery.jpg')
		}
		.featured {
			background-image: linear-gradient(0deg, rgba(0,0,0, .85),rgba(0,0,0, 0) 45%),url('<?php the_field( "featured_image" ); ?>')
		}
		.wj-team {
			background-image: linear-gradient(0deg, rgba(0,0,0, .85),rgba(0,0,0, 0) 45%),url('<?php the_field( "wj_team_image" ); ?>')
		}
	</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main gallery-page">
			<div class="banner-image banner-image-gallery  banner-image-1"></div>
			<div class="main-container padding-main-t">
				<h2 class="padding-medium-b">WJ Roofing Projects</h2>
				<?php 
				// Get Products from database
				$wpb_all_query = new WP_Query(array('post_type'=>'Gallery', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
				<?php if ( $wpb_all_query->have_posts() ) : ?>
				<div class="container-fluid padding-medium-t padding-main-b">
					<div class="row justify-content-center">
						<div class="col-md-8">
							<div class="featured gallery-spacer-l">
								<p class="gallery-caption"><?php the_field( 'featured_image_caption' ) ?></p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="wj-team gallery-spacer-r">
								<p class="gallery-caption"><?php the_field( 'wj_team_caption' ) ?></p>
							</div>
						</div>
						<!-- the loop -->
						<?php 
							$doubleImage = FALSE;
							$i = 1;
							while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); 
							if ( $doubleImage == FALSE ) {
									echo '<div class="col-md-12 gallery-spacer-top">';
									echo '<div class="gallery-image" style="background-image: linear-gradient(0deg, rgba(0,0,0, .85),rgba(0,0,0, 0) 45%),url(' . get_field( "image" ) . ')">';
									echo '<p class="gallery-caption">' . get_the_title() .'</p>';
									echo '</div>';
									echo '</div>';
								$doubleImage = TRUE;
							} else {
								if ( $i == 1 ) {
									echo '<div class="col-md-6 gallery-spacer-top">';
									echo '<div class="gallery-image gallery-spacer-l" style="background-image: linear-gradient(0deg, rgba(0,0,0, .85),rgba(0,0,0, 0) 45%),url(' . get_field( "image" ) . ')">';
									echo '<p class="gallery-caption">' . get_the_title() .'</p>';
									echo '</div>';
									echo '</div>';
									$i++;
								} else if ( $i == 2 ) {
									$doubleImage = FALSE;
									$i = 1;
									echo '<div class="col-md-6 gallery-spacer-top">';
									echo '<div class="gallery-image gallery-spacer-r" style="background-image: linear-gradient(0deg, rgba(0,0,0, .85),rgba(0,0,0, 0) 45%),url(' . get_field( "image" ) . ')">';
									echo '<p class="gallery-caption">' . get_the_title() .'</p>';
									echo '</div>';
									echo '</div>';
								}
							}
							
						endwhile; ?>
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
