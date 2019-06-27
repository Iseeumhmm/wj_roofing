<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WJ_Roofing
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer background-black">
		<div class="red-line"></div>
		<div class="container-fluid main-container h-100">
			<div class="row h-100 d-flex justify-content-between align-items-center">
				<div class="col-auto">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logos/shingle-master.png">
				</div>
				<div class="col-auto">
					<p>
						<a href="<?php echo get_site_url() ?>/">Home</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;
						<a href="<?php echo get_site_url() ?>/about">About</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;
						<a href="<?php echo get_site_url() ?>/products">Products</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;
						<a href="<?php echo get_site_url() ?>/gallery">Gallery</a>
						<br><br>
						<a href="">Privacy Policy</a>
					</p>
				</div>
				<div class="col-auto">
					<ul>
						<li class="font-weight-bold">W.J. Roofing Ltd.</li>
						<li>9177 Plank Rd</li>
						<li>Straffordville, ON N0J 1Y0</li>
						<a href="tel: 519-866-5688"><li>519-866-5688</li></a>
					</ul>
				</div>
			</div>
		</div>
		
	</footer><!-- #colophon -->
</div><!-- #page -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php wp_footer(); ?>

</body>
</html>
