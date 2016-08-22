<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ngstrap
 */

?>

		</div><!-- #content -->
	</div><!-- container -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ngstrap' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'ngstrap' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'ngstrap' ), 'ngstrap', '<a href="http://www.kohlmann-medienkontor.de" rel="designer">KMK</a>' ); ?>
			</div><!-- .site-info -->
		</div><!-- container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
