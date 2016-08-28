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

<!-- Footer start -->
<footer id="footer" class="footer footer2">
	<div class="container">

		<div class="row">

			<div class="col-sm-8 col-xs-12 footer-widget">
				<?php dynamic_sidebar( 'footer-1' ); ?>
				<div class="col-sm-4">
					<img class="img-responsive" src="<?php echo bloginfo('template_directory'); ?>/images/Wistoba-App.jpg" alt="">
				</div>
				<div class="col-sm-4">
					<div class="img-container">
						<h5>Wistoba-App im Play Store</h5>
						<img class="img-responsive" src="<?php echo bloginfo('template_directory'); ?>/images/qrcode_wistoba_playstore.jpg" alt="">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="img-container">
						<h5>Wistoba-App im Apple App Store</h5>
						<img class="img-responsive img-footer" src="<?php echo bloginfo('template_directory'); ?>/images/qrcode_wistoba_appstore.jpg" alt="">
					</div>
				</div>

			</div>

			<div class="col-sm-3 col-xs-12 footer-widget">
				<?php dynamic_sidebar( 'footer-2' ); ?>
			</div>

		</div><!-- Row end -->
	</div><!-- Container end -->
</footer><!-- Footer end -->


<!-- Footer start -->
<section id="copyright" class="copyright angle">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="copyright-info">
					<span>&copy; Copyright 2016 - Wistoba Pinselfabrik Wilhelm Stollberg GmbH & Co. KG </span>
				</div>
			</div>
		</div><!--/ Row end -->

	</div><!--/ Container end -->
</section><!--/ Footer end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
