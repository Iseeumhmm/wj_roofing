
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
			background-image: url('<?php echo get_template_directory_uri(); ?>/images/banners/banner-contact.jpg')
		}
	</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main contact-page">
			<div class="banner-image banner-image-main banner-image-1"></div>
			<div class="container-fluid main-container padding-main-y">
				<div class="row">
					<div class="col-md-4">
					<h2 class="text-black padding-medium-b">Reach Out to Us</h2>
					<h2>Phone</h2>
					<p class="text-regular padding-medium-b"><a href="tel: 519-866-5688">519-866-5688</a></p>
					<h2>Email</h2>
					<p class="text-regular padding-medium-b"><a href="mailto: info@wjroofing.com">info@wjroofing.com</a></p> 
					<h2>Mail</h2>
					<p class="text-regular padding-medium-b">
					9177 Plank Road<br>
					Straffordville, ON<br>
					N0J 1Y0
					</p>
					</div>
					<div class="col-md-8">
						<h2 class="padding-main-t">Need a Quote?</h2>
						<p class="text-regular">Fill out the form below and a representative will reach out to you as soon as
						possible. * Fields are required.</p>
						<?php echo do_shortcode('[contact-form-7 id="101" title="Contact Form" html_id="contact-form"]'); ?>
					</div>
				</div>
			</div>
			<div class="banner-image banner-image-contact">
				<iframe width="100%" height="700px" src="https://maps.google.com/maps?hl=en&amp;q=9177%20Plank%20Rd%20Straffordville%2C%20ON%20N0J%201Y0+(Title)&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();



// <div class="container-fluid">
// 	<div class="row">
// 		<div class="col-md-6">
// 			[text* customer-name class:contact-form-input "Name"]
// 		</div>
// 		<div class="col-md-6">
// 			[email* customer-email class:contact-form-input "Email"]
// 		</div>
// 	</div>
// 	<div class="row">
// 		<div class="col-md-6">
// 			[text* customer-address class:contact-form-input "Address"]
// 		</div>
// 		<div class="col-md-6">
// 			[tel* customer-phone class:contact-form-input "Phone"]
// 		</div>
// 	</div>
// 	[textarea quote-details class:contact-form-quote "Quote details"]
// </div>



