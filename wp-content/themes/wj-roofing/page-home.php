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
			background-image: url('<?php echo get_template_directory_uri(); ?>/images/banners/banner-home-1.jpg')
		}
		.banner-image-2 {
			background-image: linear-gradient(105deg, rgba(0,0,0, .9),rgba(0,0,0, 0)),url('<?php echo get_template_directory_uri(); ?>/images/banners/banner-home-2.jpg')
		}
		.small-image-1 {
			background-image: url('<?php the_field( "image_about" ); ?>')
		}
		.small-image-2 {
			background-image: url('<?php the_field( "image_products" ); ?>')
		}
		.small-image-3 {
			background-image: url('<?php the_field( "image_contact" ); ?>')
		}
	</style>

	<div id="primary" class="content-area home-page">
		<main id="main" class="site-main">
		<div class="banner-image banner-image-main banner-image-1"></div>
		<div class="container-fluid main-container padding-main-y">
			<div class="row">
				<div class="col-md-4">
				<h2>How Can<br> We Help?</h2><br>
				<ul class="text-regular">
					<li>Fibreglass Shingles</li>
					<li>Designer Shingles</li>
					<li>Long Sheet Metal Roofing</li>
					<li>Designer Metal Roofing</li>
					<li>Flat Roofing</li>
					<li>Trough, Soffit & Fascia</li>
					<li>Roof Service & Repair</li>
				</ul>
				</div>
				<div class="col-md-8">
					<h2 class="text-black">Success Starts With Quality . . .
					Guaranteed.</h2><br>
					<p class="text-regular text-bold-italic">
						Since 2004 WJ Roofing has been commited to providing honest job
						quotations, professional installations, and the best quality products
						available.
					</p><br>
					<p class="text-regular">
						We are a well-established family owned business with an office, showroom
						and warehouse located in Straffordville, Ontario.
						Request a Quote
					</p><br>
					<a href="<?php echo get_site_url() ?>/contact"><button class="button">Request a Quote</button></a>
				</div>
			</div>
		</div>
		<div class="container-fluid main-container padding-main-b">
			<div class="row">
				<div class="col hover-bar">
					<div class="small-image small-image-1">
						<div class="red-bar"></div>
					</div>
					<a href="<?php echo get_site_url() ?>/about"><h2 class="padding-small-t">About Us</h2></a>
				</div>
				<div class="col hover-bar">
					<div class="small-image small-image-2">
						<div class="red-bar"></div>
					</div>
					<a href="<?php echo get_site_url() ?>/products"><h2 class="padding-small-t">Our Products</h2></a>
				</div>
				<div class="col hover-bar">
					<div class="small-image small-image-3">
						<div class="red-bar"></div>
					</div>
					<a href="<?php echo get_site_url() ?>/contact"><h2 class="padding-small-t">Contact Us</h2></a>
				</div>
			</div>
		</div>
		<div class="banner-image banner-image-2">
			<div class="main-container padding-main-t">
				<h3>Questions?</h3>
				<p class="banner-text text-bold-italic">
					Stop by our showroom or give<br>
					us a call at <a href="tel: 519-866-5688">519-866-5688</a>
				</p>
			</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
