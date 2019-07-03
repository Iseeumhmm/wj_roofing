<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WJ_Roofing
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body >
<div id="page" class="site">
	 <header id="masthead" class="site-header">
		<div class="site-branding">
			<div class="container-fluid main-container">
				<div class="row">
					<div class="col-12 col-sm center-logo">
						<a href="<?php echo get_site_url(); ?>/" title="Home"><img class="main-logo" src="<?php echo get_template_directory_uri(); ?>/images/logos/wj-roofing-logo.svg" alt="Logo"></a>
					</div>
					<div class="col-12 col-sm center-phone">
						<a href="tel: 519-866-5688" class="telephone">519-866-5688</a>
						<h1 class="heading">Where Quality Matters</h1>
					</div>
				</div>
			</div>
		</div> 
		<!-- .site-branding -->
		<nav class="navbar navbar-expand-lg navbar-light background-red">
			<button class="navbar-toggler mr-md-7" data-toggle="collapse" data-target="#navbarMenu">
				<!-- <span class="navbar-toggler-icon"></span> -->
				<span class="navbar-menu-text">Menu</span>
			</button>
			<div class="collapse navbar-collapse" id="navbarMenu">
				<div class="navbar-nav mr-auto navbar-mobile-center main-container">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a href="<?php echo get_site_url() ?>/" id="home" class="nav-link">Home</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo get_site_url() ?>/about" id="about" class="nav-link">About</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo get_site_url() ?>/products" id="products" class="nav-link">Products</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo get_site_url() ?>/gallery" id="gallery" class="nav-link">Gallery</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo get_site_url() ?>/contact" id="contact" class="nav-link">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header> 

	<div id="content" class="site-content">
