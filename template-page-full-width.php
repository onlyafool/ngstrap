<?php
/**
 * Template Name: Full Width Page
 *
 * The template for displaying full width pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ngstrap
 */

get_header(); ?>

	<div id="primary" class="content-area content-area-full">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
home_scripts();
get_footer();
