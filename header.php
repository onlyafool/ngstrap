<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ngstrap
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<base href="<?php $url_info = parse_url( home_url() ); echo trailingslashit( $url_info['path'] ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="masthead" class="site-header" role="banner">

		<nav role="navigation" id="navbar-main">
			<div class="navbar-fixed-top header4">
				<div class="container">
					<div class="row">
					<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<?php ngstrap_the_custom_logo(); ?>
						</div>

					</div>

					<div class="navbar-collapse collapse navbar-responsive-collapse">
						<?php
						$args = array(
							'theme_location' => 'primary',
							'depth'      => 2,
							'container'  => false,
							'menu_class'     => 'nav navbar-nav navbar-right',
							'walker'     => new Bootstrap_Walker_Nav_Menu()
						);
						if (has_nav_menu('primary')) {
							wp_nav_menu($args);
						}
						?>

					</div>
				</div>
				</div>
			</div>
		</nav>

	</header><!-- #masthead -->

	<div id="banner-area">
		<img src="<?php echo bloginfo('template_directory'); ?>/images/banner/banner1.jpg" alt ="" />
		<div class="parallax-overlay"></div>
		<!-- Subpage title start -->
		<div class="banner-title-content">
			<div class="text-center">
				<h2>Title</h2>
			</div>
		</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<div class="container">
		<div id="content" class="site-content">
