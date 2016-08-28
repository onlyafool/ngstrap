<?php
/**
 * Template Name: Home Page
 *
 * The template for displaying full width pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ngstrap
 */

get_header('fluid'); ?>

	<!--<div id="primary" class="content-area content-area-full">
		<main id="main" class="site-main" role="main">-->

			<?php get_template_part( 'template-parts/content', 'slider' ); ?>
			<?php get_template_part( 'template-parts/content', 'about' ); ?>
			<?php get_template_part( 'template-parts/content', 'imageblock' ); ?>
			<?php get_template_part( 'template-parts/content', 'call-to-action' ); ?>
			<?php //get_template_part( 'template-parts/content', 'service' ); ?>
			<?php //get_template_part( 'template-parts/content', 'parallax2' ); ?>
			<?php //get_template_part( 'template-parts/content', 'team' ); ?>

		</main><!-- #main -->
	</div><!-- #primary

<?php
home_scripts();
get_footer();
